<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Dashboard extends AUTH_Controller{
    var $template = 'templates/index';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Denah_model');
        $this->load->model('M_admin');

    }

	public function index()
	{
        $id = $this->session->userdata('userdata')->id;
        $role = $this->session->userdata('userdata')->role;
        $data['perumahan'] = $this->M_admin->m_perumahan($id, $role);
        $data['area_siteplan'] = $this->M_admin->m_area_siteplan();
        $data['bread']          = 'Dashboard';
        $data['content']        = 'page/Dashboard_v';
        $data['jscustom']       = 'page/customer/customer_js';
        $data['ambil'] 		= $this->userdata;
        $this->load->view($this->template, $data);
	}

}