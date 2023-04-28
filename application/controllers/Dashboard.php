<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Dashboard extends CI_Controller {
    var $template = 'templates/index';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Denah_model');
    }

	public function index()
	{
        $data['content']        = 'page/Dashboard_v';
        $this->load->view($this->template, $data);
	}

}