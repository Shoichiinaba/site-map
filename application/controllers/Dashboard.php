<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Dashboard extends AUTH_Controller
{
    public $session;
    public $M_admin;
    public $Dashboard_Model;
    public $userdata;
    public $uri;

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
        $data['jum_null'] 			= $this->Dashboard_Model->all_DP();
        $data['tolp_ready'] 		= $this->Dashboard_Model->tooltip_ready();
        $data['tolp_UTJ'] 		    = $this->Dashboard_Model->tooltip_UTJ();
        $data['tolp_DP'] 		    = $this->Dashboard_Model->tooltip_DP();
        $data['tolp_Sold'] 		    = $this->Dashboard_Model->tooltip_sold();
        $data['content']            = 'page/Dashboard_v';
        $data['ambil'] 		        = $this->userdata;
        $data['ChartData']          = $this->Dashboard_Model->getChartData($id, $role);
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
        $data['jum_UTJ'] 			= $this->Dashboard_Model->jumlah_UTJ($perum);
        $data['jum_DP'] 		    = $this->Dashboard_Model->jumlah_DP($perum);
        $data['jum_sold'] 			= $this->Dashboard_Model->jum_sold($perum);
        $data['bread']              = 'Dashboard/ Detail';
        $data['content']            = 'page/Dashboard_det';
        $data['ambil'] 		        = $this->userdata;
        $data['ChartData']          = $this->Dashboard_Model->getChartData();
        $data['transaksi']          = $this->Dashboard_Model->getperumByBulan($perum);
        $data['Rmh_ready']          = $this->Dashboard_Model->readyByperum($perum);
        $this->load->view($this->template, $data);

    }


}