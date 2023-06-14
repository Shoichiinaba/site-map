<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Dashboard extends AUTH_Controller
{
    var $template = 'templates/index';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('Dashboard_Model');

    }

	public function index()
	{
        $id = $this->session->userdata('userdata')->id;
        $role = $this->session->userdata('userdata')->role;
        $data['perumahan']          = $this->M_admin->m_perumahan($id, $role);
        $data['area_siteplan']      = $this->M_admin->m_area_siteplan();
        $data['bread']              = 'Dashboard';
        $data['jum_ready'] 			= $this->Dashboard_Model->jumlah_ready();
        $data['jum_dipesan'] 		= $this->Dashboard_Model->jumlah_dipesan();
        $data['jum_sold'] 			= $this->Dashboard_Model->jumlah_sold();
        $data['jum_null'] 			= $this->Dashboard_Model->jumlah_kosong();
        $data['tolp_sold_k'] 		= $this->Dashboard_Model->toolp_sold();
        $data['tolp_sold_b'] 		= $this->Dashboard_Model->toolp_sold_bp();
        $data['tolp_sold_agh'] 		= $this->Dashboard_Model->toolp_sold_agh();
        $data['tolp_sold_car'] 		= $this->Dashboard_Model->toolp_sold_car();
        $data['tolp_sold_suk'] 		= $this->Dashboard_Model->toolp_sold_suk();
        $data['content']            = 'page/Dashboard_v';
        $data['ambil'] 		        = $this->userdata;
        $data['ChartData']          = $this->Dashboard_Model->getChartData();
        $data['transaksi']          = $this->Dashboard_Model->getTransaksiByBulan();
        $this->load->view($this->template, $data);
    }

    public function detail()
    {
        $tittle = $this->uri->segment(3);
        $perum = preg_replace("![^a-z0-9]+!i", " ", $tittle);
        $id = $this->session->userdata('userdata')->id;
        $role = $this->session->userdata('userdata')->role;
        $data['perumahan']          = $this->M_admin->m_perumahan($id, $role);
        $data['area_siteplan']      = $this->M_admin->m_area_siteplan();
        $data['bread']              = 'Dashboard/ Detail';
        $data['content']            = 'page/Dashboard_det';
        $data['ambil'] 		        = $this->userdata;
        $data['ChartData']          = $this->Dashboard_Model->getChartData();
        $data['transaksi']          = $this->Dashboard_Model->getperumByBulan($perum);
        $this->load->view($this->template, $data);

    }


}