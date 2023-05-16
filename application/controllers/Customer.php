<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Customer extends AUTH_Controller{
    var $template = 'templates/index';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('FormDataModel');
        $this->load->model('Customer_model');
    }

	public function index()
	{
        $data['bread']      = 'Data Customer';
        $data['content']    = 'page/customer/form_customer';
        $this->load->view($this->template, $data);
	}

    public function get_customers() {

        $draw = $this->input->get('draw');
        $start = ($this->input->get('start') != null) ? $this->input->get('start') : 0;
        $rowperpage = ($this->input->get('length') != null) ? $this->input->get('length') : 10;
        $order = ($this->input->get('order') != null) ? $this->input->get('order') : false;
        $search = ($this->input->get('search') != null && $this->input->get('search')['value'] != null) ? $this->input->get('search') : false;

        $model = new Customer_model;

        $totalRows = $model->count();
        $filteredRows = $totalRows;

        if ($search) {
			$search = $search['value'];
            $model = $model->where('nama', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->orWhere('telepon', 'LIKE', '%'.$search.'%')
            ->orWhere('jml_input', 'LIKE', '%'.$search.'%');
            $filteredRows = $model->count();
        }

        $model = $model->skip((int) $start);
        $model = $model->take((int) $rowperpage);

        if($order){
            foreach($this->input->get('columns') as $key => $column){
                $direction = ($order[0]['dir'] == 'asc') ? 'ASC' : 'DESC';
                if($key == $order[0]['column']){
                    $model = $model->orderBy($column['name'], $direction);
                }
            }
        }

        $resuls = $model->select('customer.*')->get();

        $data_arr = [];
        $No = 1;

        foreach($resuls as $result){
            $data_arr[] = [
                'No' => $No,
                'nama' => $result->nama,
                'email' => $result->email,
                'telepon' => $result->telepon,
                'jml_input' =>$result->jml_input,
				// 'action' => '<button onclick="openDataRow(\''.$result->code.'\', \''.$result->type.'\', \''.$result->description.'\')" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-edit"></i> Edit</button>',
            ];
            $No++;
        }

		return $this->output
			->set_content_type('application/json')
			->set_status_header(200)
			->set_output(json_encode([
				'draw'            => $draw,
            	'recordsTotal'    => $totalRows,
            	'recordsFiltered' => $filteredRows,
            	'data'            => $data_arr,
			]));
    }

}