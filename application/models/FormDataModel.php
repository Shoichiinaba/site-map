<?php
defined('BASEPATH') or exit('No direct script access allowed');


class FormDataModel extends CI_Model
{

    function m_perumahan()
    {
        $this->db->select('*');
        $this->db->from('perumahan');
        $query = $this->db->get();
        return $query->result();
    }
    function m_foto_perum($perum)
    {
        $this->db->select('*');
        $this->db->from('perumahan');
        $this->db->where('nama', $perum);
        $query = $this->db->get();
        return $query->result();
    }

    public function simpanData($id_customer, $nama, $email, $telepon)
    {
        // Periksa apakah data sudah ada dalam database
        $this->db->where('email', $email);
        $query = $this->db->get('customer');

        if ($query->num_rows() == 0) {
            // Data belum ada, simpan data ke tabel database
            $data = array(
                'id_customer' => $id_customer,
                'nama' => $nama,
                'telepon' => $telepon,
                'email' => $email,
                'jml_input' => 1 // Inisialisasi hitung dengan 1
            );
            $this->db->insert('customer', $data);

            return true; // Mengembalikan true jika data berhasil disimpan
        } else {
            // Data sudah ada, tambahkan hitung sebanyak 1
            $jml_input = $query->row()->jml_input + 1;

            $this->db->where('email', $email);
            $this->db->update('customer', array('jml_input' => $jml_input));

            return false; // Mengembalikan false karena data sudah ada
        }
    }
    function m_area_siteplan($perum)
    {
        $this->db->select('*');
        $this->db->from('perumahan');
        $this->db->Join('site_plan', 'site_plan.id_perum_siteplan = perumahan.id_perum');
        $this->db->where('nama', $perum);
        $query = $this->db->get();
        return $query->result();
    }
}