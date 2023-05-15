<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Client extends CI_Controller {
    var $template = 'templates_client/index';

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
         // Cek apakah data sudah ada dalam sesi
    if (!$this->session->userdata('form_data')) {
        // Data belum ada, tampilkan formulir
        $this->load->view('client/formulir');
    } else {
        // Data sudah ada, tampilkan pesan menggunakan flashdata
        $this->session->set_flashdata('error_message', 'Anda sudah mengisi data sebelumnya.');
        redirect('client/selatan'); // Redirect kembali ke halaman formulir
    }

	}

    public function submit()
{
    // Tangkap data dari formulir
    $id_customer = $this->input->post('id_customer');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $telepon = $this->input->post('telepon');

    // Simpan data ke dalam sesi
    $data = array(
        'id_customer' => $id_customer,
        'nama' => $nama,
        'email' => $email,
        'telepon' => $telepon
    );
    $this->session->set_userdata('form_data', $data);

    // Simpan data ke database
    $this->load->model('FormDataModel');
    if ($this->FormDataModel->simpanData($id_customer, $nama, $email, $telepon)) {
        // Data berhasil disimpan
        $this->session->set_flashdata('success_message', 'Terima Kasih Data anda sudah berhasil disimpan.');
    } else {
        // Data sudah ada
        $this->session->set_flashdata('error_message', 'Anda sSudah Pernah Mengisikan Data diri.');
    }

    redirect('Client');

}

    public function utara()
	{
        $data['content']        = 'client/map_utara';
        $this->load->view($this->template, $data);
	}

    public function selatan()
	{
        $data['content']        = 'client/map_selatan';
        $this->load->view($this->template, $data);
	}
    public function allDenahColor(){
		$ids = Denah_model::all();
		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode([
				'message' => '',
				'results' => $ids->toArray(),
			]));
	}

}