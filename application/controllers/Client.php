<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Client extends CI_Controller
{
    public $session;
    public $input;
    public $FormDataModel;
    public $db;
    public $uri;
    public $perum;

    var $template = 'templates_client/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('FormDataModel');
    }

    public function visit()
    {
        // Cek apakah data sudah ada dalam sesion
        if (!$this->session->userdata('form_data')) {
            // Data belum ada, tampilkan formulir
            $this->load->view('client/formulir');
        } else {
            // Data sudah ada, tampilkan pesan menggunakan flashdata
            $this->session->set_flashdata('error_message', 'Anda sudah mengisi data sebelumnya.');
            // redirect('client/site_plan/selatan'); // Redirect kembali ke halaman formulir
            $perum = $this->uri->segment(3);
            $data['area_siteplan'] = $this->FormDataModel->m_area_siteplan($perum);
            $data['content']        = 'client/site_plan/site_plan';
            $this->load->view($this->template, $data);
        }
    }

    public function submit()
    {
        // Tangkap data dari formulir
        $id_customer = $this->input->post('id_customer');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $perum =  $this->input->post('perum');

        // Simpan data ke dalam sesion
        $data = array(
            'id_customer' => $id_customer,
            'nama' => $nama,
            'email' => $email,
            'telepon' => $telepon
        );
        $this->session->set_userdata('form_data', $data);

        // Simpan data ke database
        if ($this->FormDataModel->simpanData($id_customer, $nama, $email, $telepon)) {
            // Data berhasil disimpan
            $this->session->set_flashdata('success_message', 'Terima Kasih Data anda sudah berhasil disimpan.');
            // $this->load->view('Client/visit/' . $perum);
        } else {
            // Data sudah ada
            $this->session->set_flashdata('error_message', 'Anda sSudah Pernah Mengisikan Data diri.');
        }

        redirect('Client/visit/' . $perum);
    }
    function load_site_plan()
    {
        // $id_perum_siteplan = $this->input->post('id-perum');
        $id_siteplan = $this->input->post('id-siteplan');

        $sql = "SELECT *FROM site_plan WHERE id_siteplan = '$id_siteplan'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                echo $data->file_siteplan;
            }
        }
    }
    public function utara()
     {
            // Cek apakah data sudah ada dalam sesion
            if (!$this->session->userdata('form_data')) {
                // Data belum ada, tampilkan formulir
                $this->load->view('client/formulir');
            } else {
                // Data sudah ada, tampilkan pesan menggunakan flashdata
                $this->session->set_flashdata('error_message', 'Anda sudah mengisi data sebelumnya.');
                $data['content']        = 'client/map_utara';
                $this->load->view($this->template, $data);
            }
        }


    public function selatan()
	{
         // Cek apakah data sudah ada dalam sesion
    if (!$this->session->userdata('form_data')) {
        // Data belum ada, tampilkan formulir
        $this->load->view('client/formulir');
    } else {
        // Data sudah ada, tampilkan pesan menggunakan flashdata
        $this->session->set_flashdata('error_message', 'Anda sudah mengisi data sebelumnya.');
        $data['content']        = 'client/map_selatan';
        $this->load->view($this->template, $data);

    }
}
}