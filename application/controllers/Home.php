<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Support\Arr;

// class Home extends AUTH_Controller
class Home extends CI_Controller
{
    public $input;
    public $output;
    public $Denah_model;
    public $M_admin;
    public $uri;
    public $db;
    public $upload;
    public $session;

    var $template = 'templates/index';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Denah_model');
        $this->load->model('M_admin');
    }

    public function visit()
    {
        $tittle = $this->uri->segment(3);
        $area = $this->uri->segment(4);
        $perum = preg_replace("![^a-z0-9]+!i", " ", $tittle);
        $id = $this->session->userdata('userdata')->id;
        $role = $this->session->userdata('userdata')->role;
        $data['perumahan'] = $this->M_admin->m_perumahan($id, $role);
        $data['area_siteplan'] = $this->M_admin->m_area_siteplan();
        $data['siteplan'] = $this->M_admin->m_siteplan($perum, $area);
        $data['bread']          = 'Map Plan ' . $area;
        $data['content']        = 'page/index';
        $this->load->view($this->template, $data);
    }

    public function inputDenah()
    {
        $ids = $this->input->post('id');
        $defaultColor = "#e6e7e8";
        if (is_array($ids)) {
            foreach ($ids as $id) {
                $denah = new Denah_model;
                $denah->code = $id;
                $denah->description = '';
                $denah->type = 'default';
                $denah->color = $defaultColor;
                $denah->save();
            }
        }
    }

    public function allDenahColor()
    {
        $perumahanNama = $this->uri->segment(3);
        $perum = preg_replace("![^a-z0-9]+!i", " ", $perumahanNama);
        // echo($perum);

        $sql = "SELECT *FROM perumahan WHERE nama='$perum'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $id = $row->id_perum;
                $ids = Denah_model::where('id_perum', $id)->get();
            // //     $ids = Denah_model::all();
                    return $this->output
                    ->set_content_type('application/json')
                    ->set_status_header(200)
                    ->set_output(json_encode([
                        'message' => '',
                        'results' => $ids->toArray(),
                    ]));
            }
        }
        // echo $id;
    }

    function change_denah()
    {
        // $this->load_db_connection();
        $id = $this->input->post('id');
        $code = $this->input->post('code');
        $type = $this->input->post('type');
        $desc = $this->input->post('desc');

        $color = '#e6e7e8';
        if ($type == 'Dipesan') {
            $color = 'yellow';
        } elseif ($type == 'Sudah DP') {
            $color = '#60d728';
        } elseif ($type == 'Menunggu Konfirmasi') {
            $color = 'red';
        } elseif ($type == 'Sedang Dibangun') {
            $color = '#00b4ff';
        } elseif ($type == 'UTJ') {
            $color = '#cb0c9f8c';
        }
        if ($type == 'Kosong') {

            $sql = "SELECT *FROM denahs, upload WHERE denahs.id_denahs = upload.id_doc_kapling AND denahs.id_denahs='$id'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $id_upload = $row->id_upload;
                    $id_doc_kapling = $row->id_denahs;
                    $progres = '0';
                    if ($row->ktp == '') {
                    } else {
                        unlink('./upload/doc/' . $row->ktp);
                    }
                    if ($row->kk == '') {
                    } else {
                        unlink('./upload/doc/' . $row->kk);
                    }
                    if ($row->npwp == '') {
                    } else {
                        unlink('./upload/doc/' . $row->npwp);
                    }
                    if ($row->skk == '') {
                    } else {
                        unlink('./upload/doc/' . $row->skk);
                    }
                    if ($row->slip_g == '') {
                    } else {
                        unlink('./upload/doc/' . $row->slip_g);
                    }
                    if ($row->rek_koran == '') {
                    } else {
                        unlink('./upload/doc/' . $row->rek_koran);
                    }
                    if ($row->blanko == '') {
                    } else {
                        unlink('./upload/doc/' . $row->blanko);
                    }
                }
                $this->M_admin->m_delete_all_document($id_upload);
                // $this->M_admin->m_update_progres($id_doc_kapling, $progres);
            };
            $denah = Denah_model::where('id_denahs', $id)
                ->update(['type' => $type, 'description' => '', 'color' => $color, 'status_pembayaran' => '', 'progres_berkas' => '0']);
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'message' => '',
                    'results' => [
                        'code' => $code,
                        'color' => $color,
                    ],
                ]));
        } else {

            $denah = Denah_model::where('id_denahs', $id)
                ->update(['type' => $type, 'description' => $desc, 'color' => $color]);
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode([
                    'message' => '',
                    'results' => [
                        'id_denahs' => $id,
                        'code' => $code,
                        'color' => $color,
                    ],
                ]));
        }
    }

    function search()
    {
        $draw = $this->input->get('draw');
        $start = ($this->input->get('start') != null) ? $this->input->get('start') : 0;
        $rowperpage = ($this->input->get('length') != null) ? $this->input->get('length') : 10;
        $order = ($this->input->get('order') != null) ? $this->input->get('order') : false;
        $search = ($this->input->get('search') != null && $this->input->get('search')['value'] != null) ? $this->input->get('search') : false;

        $model = new Denah_model;

        $totalRows = $model->count();
        $filteredRows = $totalRows;
        $id = $this->uri->segment(3);

        $model = $model->where('map',  $id);

        if ($search) {
            $search = $search['value'];
            $model = $model->where(function ($query) use ($search) {
                $query->Where('code', 'LIKE', '%' . $search . '%')
                    ->orWhere('description', 'LIKE', '%' . $search . '%')
                    ->orWhere('type', 'LIKE', '%' . $search . '%')
                    ->orWhere('color', 'LIKE', '%' . $search . '%');
            });
            // $filteredRows = $model->count();
        }
        $filteredRows = $model->count();

        $model = $model->skip((int) $start);
        $model = $model->take((int) $rowperpage);

        if ($order) {
            foreach ($this->input->get('columns') as $key => $column) {
                $direction = ($order[0]['dir'] == 'asc') ? 'ASC' : 'DESC';
                if ($key == $order[0]['column']) {
                    $model = $model->orderBy($column['name'], $direction);
                }
            }
        }

        $resuls = $model->select('denahs.*')->get();
        // $resuls = $model->select('denahs.*')
        //                  ->where('id_perum', 1)
        //                  ->where('map', 'selatan')
        //                  ->get();

        $data_arr = [];
        foreach ($resuls as $result) {
            $data = [
                'code' => $result->code,
                'description' => $result->description,
                'type' => '<span class="pup" style="background-color:' . $result->color . '"></span> ' . $result->type,
                // 'color' => '<span class="text-xs font-weight-bold">10%</span>' . '<span class="progress" style="background-color: ' . $result->color . '">',
                'color' => '<div id="progres-' . $result->id_denahs . '" class="progress-wrapper">
                                <div class="progress-info">
                                    <div class="progress-percentage">
                                        <span class="text-sm font-weight-bold">' . $result->progres_berkas . '%</span>
                                    </div>
                                </div>
                                <div >
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $result->progres_berkas . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $result->progres_berkas . '%;"></div>
                                </div>
                            </div>',
            ];

            if ($result->type == "Dipesan") {
                $data['action'] = '<button onclick="openDataRow(\'' . $result->id_denahs . '\',\'' . $result->code . '\', \'' . $result->type . '\', \'' . $result->description . '\')" class="btn btn-sm bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModaledit"><i class="fa fa-edit" style="font-size:small;"></i> &nbsp;Edit</button>&nbsp;&nbsp;' .
                    '<button type="button" onclick="getDataDoc(\'' . $result->id_denahs . '\', \'' . $result->status_pembayaran . '\')" id="btn-document-' . $result->id_denahs . '" class="btn-modal-document btn btn-sm bg-gradient-primary" value="' . $result->status_pembayaran . '" data-bs-toggle="modal" data-bs-target="#exampleModalatt"><i class="fa fa-paperclip" style="font-size:small;"></i> &nbsp;Document</button>';
            } else {
                $data['action'] = '&nbsp;&nbsp;<button onclick="openDataRow(\'' . $result->id_denahs . '\',\'' . $result->code . '\', \'' . $result->type . '\', \'' . $result->description . '\')" class="btn btn-sm bg-gradient-success" data-bs-toggle="modal" data-bs-target="#exampleModaledit"> <i class="fa fa-edit" style="font-size:small;"></i> &nbsp;Edit</button>';
            }
            $data_arr[] = $data;
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
    function update_status_pembayaran()
    {
        $id_denahs = $this->input->post('id-denahs');
        $status_pembayaran = $this->input->post('status-pembayaran');
        $update = $this->M_admin->m_update_status_pembayaran($id_denahs, $status_pembayaran);
        echo json_encode($update);
    }
    function select_data_document()
    {
        $status_pembayaran = $this->input->post('status-pembayaran');
        $id_denahs = $this->input->post('id-doc-kapling');
        $sql = "SELECT *FROM upload WHERE id_doc_kapling = $id_denahs";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $id_upload = $row->id_upload;
                $ktp = $row->ktp;
                $kk = $row->kk;
                $npwp = $row->npwp;
                $buku_nikah = $row->buku_nikah;
                $skk = $row->skk;
                $slip_g = $row->slip_g;
                $rek_koran = $row->rek_koran;
                $blanko = $row->blanko;
                if ($status_pembayaran == 'cash') {
                    if ($ktp == '') {
                        echo '<li><span><sup>*</sup>KTP</span></li>';
                    } else {
                        echo '<li class="pdf" data-pdf="' . $ktp . '" data-flied="ktp" data-id-upload="' . $id_upload . '"><a href="#"><span class="ktp" data-text="aaa"><sup>*</sup>KTP <i class="ni ni-check-bold"></i></span></a> </li>';
                    }

                    if ($kk == '') {
                        echo ' <li><span><sup>*</sup>KK </span></li>';
                    } else {
                        echo ' <li class="pdf" data-pdf="' . $kk . '" data-flied="kk" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>KK <i class="ni ni-check-bold"></i></a></span></li>';
                    }

                    if ($npwp == '') {
                        echo ' <li><span>NPWP </span></li>';
                    } else {
                        echo ' <li class="pdf" data-pdf="' . $npwp . '" data-flied="npwp" data-id-upload="' . $id_upload . '"><a href="#"><span>NPWP <i class="ni ni-check-bold"></i></a></span></li>';
                    }

                    if ($buku_nikah == '') {
                        echo ' <li><span>BUKU NIKAH</span> </li>';
                    } else {
                        echo ' <li class="pdf" data-pdf="' . $buku_nikah . '" data-flied="buku_nikah" data-id-upload="' . $id_upload . '"><a href="#"><span>BUKU NIKAH <i class="ni ni-check-bold"></i></a></span></li>';
                    }

                    if ($blanko == '') {
                        echo '<li><span><sup>*</sup>BLANKO</span></li>';
                    } else {
                        echo '<li class="pdf" data-pdf="' . $blanko . '" data-flied="blanko" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>BLANKO <i class="ni ni-check-bold"></i></a></li>';
                    }
                } else if ($status_pembayaran == 'kpr') {

                    if ($ktp == '') {
                        echo '<li><span><sup>*</sup>KTP</span></li>';
                    } else {
                        echo '<li class="pdf" data-pdf="' . $ktp . '" data-flied="ktp" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>KTP <i class="ni ni-check-bold"></i></a></span> </li>';
                    }

                    if ($kk == '') {
                        echo ' <li><span><sup>*</sup>KK </span></li>';
                    } else {
                        echo ' <li class="pdf" data-pdf="' . $kk . '" data-flied="kk" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>KK <i class="ni ni-check-bold"></i></a></span></li>';
                    }

                    if ($npwp == '') {
                        echo ' <li><span><sup>*</sup>NPWP </span></li>';
                    } else {
                        echo ' <li class="pdf" data-pdf="' . $npwp . '" data-flied="npwp" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>NPWP <i class="ni ni-check-bold"></i></a></span></li>';
                    }

                    if ($buku_nikah == '') {
                        echo ' <li><span><sup>*</sup>BUKU NIKAH</span> </li>';
                    } else {
                        echo ' <li class="pdf" data-pdf="' . $buku_nikah . '" data-flied="buku_nikah" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>BUKU NIKAH <i class="ni ni-check-bold"></i></a></span></li>';
                    }
                    if ($skk == '') {
                        echo '<li><span><sup>*</sup>SURAT KETERANGAN KERJA</span></li>';
                    } else {
                        echo '<li> lass="pdf" data-pdf="' . $skk . '" data-flied="skk" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>SURAT KETERANGAN KERJA <i class="ni ni-check-bold"></i></a></li>';
                    }

                    if ($slip_g == '') {
                        echo '<li><span><sup>*</sup>SLIP GAJI 3 BULAN TERAKHIR</span></li>';
                    } else {
                        echo '<li> lass="pdf" data-pdf="' . $slip_g . '" data-flied="slip_g" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>SLIP GAJI 3 BULAN TERAKHIR <i class="ni ni-check-bold"></i></a></li>';
                    }

                    if ($rek_koran == '') {
                        echo '<li><span><sup>*</sup>REKENING KORAN 3 BULAN TERAKHIR</span></li>';
                    } else {
                        echo '<li> lass="pdf" data-pdf="' . $rek_koran . '" data-flied="rek_koran" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>REKENING KORAN 3 BULAN TERAKHIR <i class="ni ni-check-bold"></i></a></li>';
                    }

                    if ($blanko == '') {
                        echo '<li><span><sup>*</sup>BLANKO</span></li>';
                    } else {
                        echo '<li> lass="pdf" data-pdf="' . $blanko . '" data-flied="blanko" data-id-upload="' . $id_upload . '"><a href="#"><span><sup>*</sup>BLANKO <i class="ni ni-check-bold"></i></a></li>';
                    }
                }

                echo '<input id="id-upload" type="text" hidden  value="' . $row->id_upload . '">';
            }
        } else {
            if ($status_pembayaran == 'cash') {
                echo '<li><span><sup>*</sup>KTP</span></li>';
                echo ' <li><span><sup>*</sup>KK </span></li>';
                echo ' <li><span>NPWP </span></li>';
                echo ' <li><span>BUKU NIKAH</span> </li>';
                echo ' <li><span><sup>*</sup>BLANKO </span> </li>';
            } else if ($status_pembayaran == 'kpr') {

                echo '<li><span><sup>*</sup>KTP </span></li>';
                echo '<li><span><sup>*</sup>KK </span></li>';
                echo '<li><span><sup>*</sup>NPWP </span></li>';
                echo '<li><span><sup>*</sup>BUKU NIKAH</span></li>';
                echo '<li><span><sup>*</sup>SURAT KETERANGAN KERJA</span></li>';
                echo '<li><span><sup>*</sup>SLIP GAJI 3 BULAN TERAKHIR</span></li>';
                echo '<li><span><sup>*</sup>REKENING KORAN 3 BULAN TERAKHIR</span></li>';
                echo '<li><span><sup>*</sup>BLANKO</span></li>';
            }
            echo '<input id="id-upload" type="text" hidden  value="">';
        }
        echo '<script>
                // $(document).ready(function() {
    // console.log($(".ktp").data("text"));
                    $(".pdf").click(function(e) {
                        // alert("' . base_url('upload') . '/doc/" + $(this).data("pdf") + "&embedded=true")
                        // alert($(this).data("pdf") + "&embedded=true")
                        $("#view-pdf").attr("src", "https://docs.google.com/viewer?url=' . base_url('upload') . '/doc/" + $(this).data("pdf") + "&embedded=true")
                        $("#link-down-pdf").attr("href", "' . base_url('upload') . '/doc/" + $(this).data("pdf"));
                        $("#link-down-pdf").attr("download", $(this).data("pdf"));
                        $("#preview-pdf").removeAttr("hidden", true);
                        $("#flied").val($(this).data("flied"));
                        $("#file-doc").val($(this).data("pdf"));
                    });

                    var id_upload = $("#id-upload").val();
                    if (id_upload == "") {
                        
                        $("#select-pembayaran").removeAttr("readonly", true);
                    } else {
                        $("#select-pembayaran").attr("readonly", true);
                    }
                    $("#select-pembayaran").click(function(e) {
                            var id_upload = $("#id-upload").val();
                            if (id_upload == "") {
                
                            } else {
                                alert("Silahkan kosongkan data unit kapling, jika ingin merubahnya!!")
                            }
                        });
                // });
            </script>';
    }
    function upload_document()
    {
        $config['upload_path'] = "./upload/doc/";
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name'] = TRUE;
        $id_doc_kapling = $this->input->post('id-doc-kapling');
        $select_pembayaran = $this->input->post('select-pembayaran');
        $select_document = $this->input->post('select-document');
        if ($select_pembayaran == 'cash') {
            $nilai = [
                'ktp' => '45',
                'kk' => '45',
                'npwp' => '0',
                'buku_nikah' => '0',
                'blanko' => '10',
            ];
        } else if ($select_pembayaran == 'kpr') {
            $nilai = [
                'ktp' => '10',
                'kk' => '10',
                'npwp' => '10',
                'buku_nikah' => '10',
                'skk' => '10',
                'slip_g' => '20',
                'rek_koran' => '20',
                'blanko' => '10',
            ];
        }
        $sql = "SELECT *FROM denahs, upload WHERE upload.id_doc_kapling = denahs.id_denahs AND upload.id_doc_kapling = $id_doc_kapling";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                if ($row->$select_document == '') {
                    $progres = $row->progres_berkas + $nilai[$select_document];
                    echo '<div class="progress-info">
                                <div class="progress-percentage">
                                    <span class="text-sm font-weight-bold">' . $progres . '%</span>
                                </div>
                        </div>
                        <div >
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $progres . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $progres . '%;"></div>
                        </div>';
                    // echo '<div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $progres . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $progres . '%;"></div>';
                    $this->M_admin->m_update_progres($id_doc_kapling, $progres);
                } else {
                    echo '<div class="progress-info">
                            <div class="progress-percentage">
                            <span class="text-sm font-weight-bold">' . $row->progres_berkas . '%</span>
                            </div>
                        </div>
                        <div >
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $row->progres_berkas . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $row->progres_berkas . '%;"></div>
                        </div>';
                    // echo '<div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $row->progres_berkas . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $row->progres_berkas . '%;"></div>';
                    unlink('./upload/doc/' . $row->$select_document);
                }
                $this->load->library('upload', $config);

                if ($this->upload->do_upload("file-document")) {
                    $data = array('upload_data' => $this->upload->data());
                    $file_document = $data['upload_data']['file_name'];
                    $uploadedImage = $this->upload->data();
                };
            }
            // echo 'ada';

            $this->M_admin->m_update_document($id_doc_kapling, $select_document, $file_document);
            // echo json_encode($update);
        } else {
            // echo 'tidak ada';
            $progres = '0' + $nilai[$select_document];
            echo '<div class="progress-info">
                    <div class="progress-percentage">
                        <span class="text-sm font-weight-bold">' . $progres . '%</span>
                    </div>
                </div>
                <div >
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $progres . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $progres . '%;"></div>
                </div>';
            // echo $progres;
            $this->M_admin->m_update_progres($id_doc_kapling, $progres);

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("file-document")) {
                $data = array('upload_data' => $this->upload->data());
                $file_document = $data['upload_data']['file_name'];
                $uploadedImage = $this->upload->data();
                $data = [
                    'id_doc_kapling' => $id_doc_kapling,
                    $select_document => $file_document,

                ];
            };
            $this->M_admin->m_upload_document($data);
            // echo json_encode($insert);
        }
    }

    function delete_document()
    {
        $id_upload = $this->input->post('id-upload');
        $file_doc = $this->input->post('file-doc');
        $flied = $this->input->post('flied');
        $select_pembayaran = $this->input->post('select-pembayaran');

        unlink('./upload/doc/' . $file_doc);
        if ($select_pembayaran == 'cash') {
            $nilai = [
                'ktp' => '45',
                'kk' => '45',
                'npwp' => '0',
                'buku_nikah' => '0',
                'blanko' => '10',

            ];
        } else if ($select_pembayaran == 'kpr') {
            $nilai = [
                'ktp' => '10',
                'kk' => '10',
                'npwp' => '10',
                'buku_nikah' => '10',
                'skk' => '10',
                'slip_g' => '20',
                'rek_koran' => '20',
                'blanko' => '10',
            ];
        }
        $sql = "SELECT *FROM denahs, upload WHERE upload.id_doc_kapling = denahs.id_denahs AND upload.id_upload = $id_upload";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                // if ($row->$flied == '') {
                $id_doc_kapling = $row->id_denahs;
                $progres = $row->progres_berkas - $nilai[$flied];
                echo '<div class="progress-info">
                                <div class="progress-percentage">
                                <span class="text-sm font-weight-bold">' . $progres . '%</span>
                                </div>
                        </div>
                        <div >
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $progres . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $progres . '%;"></div>
                        </div>';
                // echo '<div class="progress-bar bg-success" role="progressbar" aria-valuenow="' . $progres . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $progres . '%;"></div>';
                $select_document = $flied;
                $file_document = '';
                $this->M_admin->m_update_progres($id_doc_kapling, $progres);
                $this->M_admin->m_update_document($id_doc_kapling, $select_document, $file_document);

                // }
            }
        }
    }
}
