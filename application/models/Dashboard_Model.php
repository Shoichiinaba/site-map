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
		$this->db->where('status_trans', 'UTJ');
    	$this->db->from('transaksi');
   		return $this->db->count_all_results();
	}

	public function jumlah_sold()
	{
		$this->db->where('status_trans', 'Sold Out');
    	$this->db->from('transaksi');
    	return $this->db->count_all_results();
	}

	public function all_DP()
	{
		$this->db->where('status_trans', 'DP');
    	$this->db->from('transaksi');
    	return $this->db->count_all_results();
	}

	// tooltip
	public function tooltip_ready()
	{
		$this->db->select('perumahan.nama, COUNT(*) as jumlah_record');
		$this->db->from('denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('denahs.type', 'Rumah Ready');
		$this->db->group_by('perumahan.nama');
		return $this->db->get()->result();
	}

	public function tooltip_UTJ()
	{
		$this->db->select('perumahan.nama, COUNT(*) as jumlah_record');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('transaksi.status_trans', 'UTJ');
		$this->db->group_by('perumahan.nama');
		return $this->db->get()->result();
	}

	public function tooltip_DP()
	{
		$this->db->select('perumahan.nama, COUNT(*) as jumlah_record');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('transaksi.status_trans', 'DP');
		$this->db->group_by('perumahan.nama');
		return $this->db->get()->result();
	}

	public function tooltip_sold()
	{
		$this->db->select('perumahan.nama, COUNT(*) as jumlah_record');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('transaksi.status_trans', 'Sold Out');
		$this->db->group_by('perumahan.nama');
		return $this->db->get()->result();
	}
	// akrir tooltip

	// dashboard atas detail
	public function jumlah_UTJ( $perum)
	{
		$this->db->select('transaksi.status_trans, COUNT(*) as jumlah_record');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
    	$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('transaksi.status_trans', 'UTJ');
		$this->db->where('perumahan.nama', $perum);
    	return $this->db->count_all_results();
	}

	public function jumlah_DP( $perum)
	{
		$this->db->select('transaksi.status_trans, COUNT(*) as jumlah_record');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
        $this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('transaksi.status_trans', 'DP');
		$this->db->where('perumahan.nama', $perum);
        return $this->db->count_all_results();
	}

	public function jum_sold( $perum)
	{

		$this->db->select('transaksi.status_trans, COUNT(*) as jumlah_record');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
        $this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('transaksi.status_trans', 'Sold Out');
		$this->db->where('perumahan.nama', $perum);
        return $this->db->count_all_results();
	}
	// akhir dashboard detail

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
	public function getTransaksiByBulan()
	{
		$this->db->select('MONTHNAME(STR_TO_DATE(tgl_trans, "%d/%m/%Y")) AS bulan,status_trans,id_perum, COUNT(*) AS jumlah');
		$this->db->from('transaksi');
		$this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
		$this->db->group_by('id_perum, bulan, status_trans');
		$query = $this->db->get();

		return $query->result();
	}

  public function getperumByBulan($perum)
    {
        $this->db->select('MONTHNAME(STR_TO_DATE(tgl_trans, "%d/%m/%Y")) AS bulan, status_trans, perumahan.id_perum, COUNT(*) AS jumlah');
        $this->db->from('transaksi');
        $this->db->join('denahs', 'denahs.id_denahs = transaksi.id_trans_denahs');
        $this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
        $this->db->where('perumahan.nama', $perum);
        $this->db->group_by('perumahan.id_perum, bulan, status_trans');
        $query = $this->db->get();

        return $query->result();
    }

	public function readyByperum($perum)
	{
		$this->db->select('denahs.type, COUNT(*) as jumlah_record');
		$this->db->from('denahs');
		$this->db->join('perumahan', 'perumahan.id_perum = denahs.id_perum');
		$this->db->where('denahs.type', 'Rumah Ready');
		$this->db->where('perumahan.nama', $perum);
		$this->db->group_by('denahs.type');
		$query = $this->db->get();

		$result = $query->result();

		$chartData = array();
		foreach ($result as $row) {
			$data = array(
				'label' => $row->type,
				'value' => $row->jumlah_record
			);
			array_push($chartData, $data);
		}

		return $chartData;

    }

}