<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{
	public function jumlah_ready()
	{
		$this->db->where('type', 'Rumah Ready');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function jumlah_dipesan()
	{
		$this->db->where('type', 'Dipesan');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function jumlah_sold()
	{
		$this->db->where('type', 'Sold Out');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function jumlah_kosong()
	{
		$this->db->where('type', 'Kosongs');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function toolp_sold()
	{
		$this->db->where('type', 'Sold Out');
		$this->db->where('id_perum', '4');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function toolp_sold_bp()
	{
		$this->db->where('type', 'Sold Out');
		$this->db->where('id_perum', '2');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function toolp_sold_agh()
	{
		$this->db->where('type', 'Sold Out');
		$this->db->where('id_perum', '3');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function toolp_sold_car()
	{
		$this->db->where('type', 'Sold Out');
		$this->db->where('id_perum', '1');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function toolp_sold_suk()
	{
		$this->db->where('type', 'Sold Out');
		$this->db->where('id_perum', '6');
		$this->db->from('denahs');
		return $this->db->count_all_results();
	}

	public function getChartData()
	{
		$this->db->select('perumahan.nama, COUNT(*) as jumlah_record');
		$this->db->from('denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('denahs.type', 'Rumah Ready');
		$this->db->group_by('perumahan.nama');
		$query = $this->db->get();

		$result = $query->result();

		$chartData = array();
		foreach ($result as $row) {
			$data = array(
				'label' => $row->nama,
				'value' => $row->jumlah_record
			);
			array_push($chartData, $data);
		}

		return $chartData;
	}

	public function getChartKautsar()
	{
		$this->db->select('perumahan.nama, COUNT(*) as jumlah_record');
		$this->db->from('denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('denahs.type', 'Rumah Ready');
		$this->db->group_by('perumahan.nama');
		$query = $this->db->get();

		$result = $query->result();

		$chartData = array();
		foreach ($result as $row) {
			$data = array(
				'label' => $row->nama,
				'value' => $row->jumlah_record
			);
			array_push($chartData, $data);
		}

		return $chartData;
	}

	public function getTransaksiByBulan()
	{

		// $this->db->select("MONTHNAME(STR_TO_DATE(SUBSTRING_INDEX(SUBSTRING_INDEX(tgl_trans, '/', 2), '/', -1), '%m')) AS bulan, status_trans, COUNT(*) AS jumlah");
		// $this->db->from('transaksi');
		// $this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
		// $this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		// // $this->db->where('perumahan.id_perum', $id_perum);
		// $this->db->group_by('bulan, status_trans');
		// $this->db->order_by('tgl_trans', 'ASC');
		// $query = $this->db->get();
		// $result = $query->result();

		// return $result;

		$this->db->select('MONTHNAME(STR_TO_DATE(tgl_trans, "%d/%m/%Y")) AS bulan, status_trans, id_perum, COUNT(*) AS jumlah');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
		// $this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		// $this->db->where('id_perum', $id_perum);
		// $this->db->where('id_perum', '2');
		// $this->db->where('id_perum', '3');
		$this->db->group_by('bulan, status_trans,id_perum');
		$query = $this->db->get();

		$result = $query->result();
		return $result;
	}
}
