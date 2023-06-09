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
        // $id_perum = $this->input->get('id_perum');
        $bulan = [];
        $status_trans = [];
        $data_jumlah = [];
        foreach ($data['transaksi'] as $row) {
            if (!in_array($row->bulan, $bulan)) {
                $bulan[] = $row->bulan;
            }

            if (!in_array($row->status_trans, $status_trans)) {
                $status_trans[] = $row->status_trans;
            }

            if (isset($data_jumlah[$row->bulan][$row->status_trans])) {
                $data_jumlah[$row->bulan][$row->status_trans] += $row->jumlah;
            } else {
                $data_jumlah[$row->bulan][$row->status_trans] = $row->jumlah;
            }
        }

        // Mengurutkan array bulan secara descending
        rsort($bulan);

        // Menginisialisasi array kosong untuk data grafik
        $datasets = [];

        // Loop melalui status_trans
        foreach ($status_trans as $status) {
            $jumlah_data = [];

            $backgroundColor = '';
            $borderColor = '';
            switch ($status) {
                case 'Sold Out':
                    $backgroundColor = 'rgba(255, 255, 0, 0.8)';
                    $borderColor = 'rgba(255, 255, 0, 1)';
                    break;
                case 'DP':
                    $backgroundColor = 'rgba(0, 128, 0, 0.8)';
                    $borderColor = 'rgba(0, 128, 0, 1)';
                    break;
                case 'UTJ':
                    $backgroundColor = 'rgba(255, 0, 0, 0.8)';
                    $borderColor = 'rgba(255, 0, 0, 1)';
                    break;
                default:
                    $backgroundColor = 'rgba(51, 102, 204, 0.8)';
                    $borderColor = 'rgba(51, 102, 204, 1)';
                    break;
            }

            // Loop melalui bulan (setelah diurutkan secara descending)
            foreach ($bulan as $bln) {
                $jumlah_data[] = isset($data_jumlah[$bln][$status]) ? $data_jumlah[$bln][$status] : 0;
            }
            $datasets[] = [
                'label' => $status,
                'data' => $jumlah_data,
                'backgroundColor' => $backgroundColor,
                'borderColor' => $borderColor,
                'borderWidth' => 1
            ];
        }

        $data['bulan'] = json_encode($bulan);
        $data['datasets'] = json_encode($datasets);
        $this->load->view($this->template, $data);

        // echo '<pre>';
        // var_dump($transaksi);
        // echo '</pre>';

	}

}