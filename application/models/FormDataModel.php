<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class FormDataModel extends CI_Model {

    // public function simpanData($id_customer,$nama, $email, $telepon)
    // {

    // $data = array(
    //     'id_customer' =>$id_customer,
    //     'nama' => $nama,
    //     'email' => $email,
    //     'telepon' => $telepon
    // );
    // $this->db->insert('customer', $data);
    // }

     public function simpanData($id_customer,$nama, $email, $telepon)
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



}