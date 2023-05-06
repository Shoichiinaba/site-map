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
        // $this->load->model('Denah_model');
    }

	public function index()
	{
        $data['content']        = 'client/view_client';
        $this->load->view($this->template, $data);
	}

}