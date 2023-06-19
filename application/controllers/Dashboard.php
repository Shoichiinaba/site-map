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
        $this->load->model('Denah_model');

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

    function data_transaksi()
    {
        $draw = $this->input->get('draw');
        $start = $this->input->get('start') ?: 0;
        $rowperpage = $this->input->get('length') ?: 10;
        $order = $this->input->get('order') ?: false;
        $search = $this->input->get('search') ?: false;

        $model = new Denah_model;

        $totalRows = $model->count();
        $filteredRows = $totalRows;
        $id = $this->uri->segment(3);
        $perum = preg_replace("![^a-z0-9]+!i", " ", $id);


        $sql = "SELECT * FROM perumahan WHERE nama = '$perum'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
            $id_perum = $row->id_perum;
            }

        }

        $model = $model->where('id_perum', $id_perum);

        if ($search) {
            $search = $search['value'];
            $model = $model->where(function ($query) use ($search) {
                $query->orWhere('code', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%')
                    ->orWhere('color', 'LIKE', '%' . $search . '%');
            });
        }

        $model = $model->where(function ($query) {
                 $query->where('type', '!=', 'Rumah Ready')
                       ->where('type', '!=', 'Kosong');

        });

        $filteredRows = $model->count();
        $model = $model->skip((int)$start);
        $model = $model->take((int)$rowperpage);

        if ($order) {
            foreach ($this->input->get('columns') as $key => $column) {
                $direction = ($order[0]['dir'] == 'asc') ? 'ASC' : 'DESC';
                if ($key == $order[0]['column']) {
                    $model = $model->orderBy($column['name'], $direction);
                }
            }
        }

        $results = $model->select('denahs.*')->get();

        $data_arr = [];
        foreach ($results as $result) {
            $id_denahs = $result->id_denahs;
            $data = [
                'code' => $result->code,
                'type' => '<span class="pup" style="background-color:' . $result->color . '"></span> ' . $result->type,
                'color' => '<div id="progres-' . $result->id_denahs . '" class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-sm font-weight-bold">' . $result->progres_berkas . '%</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="' . $result->progres_berkas . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $result->progres_berkas . '%;"></div>
                                </div>
                            </div>',
            ];

            $data['tgl_update'] = $result->tgl_update;
            $data['user_admin'] = $result->user_admin;

            $data_trans = [];
            $count = [];
            $performa = [];

            $sql = "SELECT * FROM transaksi WHERE id_trans_denahs = $id_denahs";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $tgl_UTJ = null;
                foreach ($query->result() as $row) {
                    if ($row->status_trans == 'UTJ') {
                        $data_trans[] = '<span class="border-transaksi">' . $row->status_trans . '</span>';
                        $tgl_UTJ = strtotime(str_replace('/', '-', $row->tgl_trans));
                    }elseif ($row->status_trans == 'DP'){
                        $data_trans[] = '<span class="border-transaksi">' . $row->status_trans . '</span>';
                    }elseif ($row->status_trans == 'Sold Out') {
                        $tgl_Sold = strtotime(str_replace('/', '-', $row->tgl_trans));
                        $performa = '<span class="badge bg-gradient-primary">' .floor(($tgl_Sold - $tgl_UTJ) / (60 * 60 * 24)) . '  Hari </span>';
                    }
                }

                if ($row->status_trans == 'Sold Out') {
                    $count[] = '<span class="bg-dur-sold-out">' . $row->status_trans . '</span>';
                } else {

                    $tgl = preg_replace("![^a-z0-9]+!i", "-", $row->tgl_trans);
                    date_default_timezone_set('Asia/Jakarta');
                    $awal  = date_create('' . $tgl . '');
                    $akhir = date_create();
                    $diff  = date_diff($akhir, $awal);

                    if ($diff->days >= '0' && $diff->days <= '14') {
                        $count[] = '<span class="badge bg-gradient-success">' . $diff->days . ' Hari</span>';
                    } else if ($diff->days >= '15' && $diff->days <= '22') {
                        $count[] = '<span class="badge bg-gradient-warning">' . $diff->days . ' Hari</span>';
                    } else if ($diff->days >= '23') {
                        $count[] = '<span class="badge bg-gradient-danger">' . $diff->days . ' Hari</span>';
                    }
                }
            }

            $data['transaction'] = $data_trans;
            $data['duration'] = $count;
            $data['performance']= $performa;
            $data_arr[] = $data;

        }

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode([
                'draw' => $draw,
                'recordsTotal' => $totalRows,
                'recordsFiltered' => $filteredRows,
                'data' => $data_arr,
            ]));
    }


}