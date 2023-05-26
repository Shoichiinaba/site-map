<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function update($data, $id)
	{
		$this->db->where("id", $id);
		$this->db->update("admin", $data);

		return $this->db->affected_rows();
	}
	// Update Profil
	public function select($id = '')
	{
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->row();
	}

	function hapus($params = '')
	{
		$sql = "DELETE  FROM admin WHERE id = ? ";
		return $this->db->query($sql, $params);
	}

	function get_data_admin()
	{
		return $this->db->get('admin')->result();
	}

	function m_perumahan($id, $role)
	{
		if ($role == 'Admin') {
			$this->db->select('*');
			$this->db->from('perumahan');
			$query = $this->db->get();
			return $query->result();
		} else if ($role == 'Marketing') {

			$this->db->select('*');
			$this->db->from('marketing_perum');
			$this->db->Join('admin', 'admin.id = marketing_perum.id_admin_marketing');
			$this->db->Join('perumahan', 'perumahan.id_perum = marketing_perum.id_perum_marketing');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->result();
		}
	}
	function m_area_siteplan()
	{
		$this->db->select('*');
		$this->db->from('site_plan');
		// $this->db->Join('site_plan', 'site_plan.id_perum_siteplan = perumahan.id_perum');
		// $this->db->where('admin.id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	function m_siteplan($area)
	{
		$this->db->select('*');
		$this->db->from('site_plan');
		// $this->db->Join('site_plan', 'site_plan.id_perum_siteplan = perumahan.id_perum');
		$this->db->where('area', $area);
		$query = $this->db->get();
		return $query->result();
	}

	function m_update_status_pembayaran($id_denahs, $status_pembayaran)
	{
		$update = $this->db->set('status_pembayaran', $status_pembayaran)
			->where('id_denahs', $id_denahs)
			->update('denahs');
		return $update;
	}

	function m_upload_document($data)
	{
		$result = $this->db->insert('upload', $data);
		return $result;
	}

	function m_update_document($id_doc_kapling, $select_document, $file_document)
	{
		$update = $this->db->set($select_document, $file_document)
			->where('id_doc_kapling', $id_doc_kapling)
			->update('upload');
		return $update;
	}
	function m_update_progres($id_doc_kapling, $progres)
	{
		$update = $this->db->set('progres_berkas', $progres)
			->where('id_denahs', $id_doc_kapling)
			->update('denahs');
		return $update;
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */