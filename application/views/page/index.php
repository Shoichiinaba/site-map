<style>
    .sorting_1 {
        text-transform: uppercase;
    }

    .required {
        border: 2px solid #ff000030 !important;
    }
</style>
<div class="container">
    <div id="svg-container">
    </div>
    <div class="card-body p-3">
        <div class="row">
            <div class="col-xl-9 col-md-6 mb-xl-0 mb-4">
                <div id="data-siteplan" class="card card-blog card-plain">
                    <?php
                    foreach ($siteplan as $data) :
                    ?>
                        <?php echo $data->file_siteplan; ?>
                        <input id="id-siteplan" type="text" value="<?= $data->id_siteplan; ?>" hidden>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <!-- Panel Control -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                <div class="card h-100 card-plain border">
                    <div id="example2" class="controls">
                        <div class="controls-pan">
                            <p><i class="btn btn-success fa fa-arrow-up"></i></p>
                            <p>
                                <i class="btn btn-success fa fa-arrow-left"></i>
                                <i class="btn btn-success fa fa-arrow-right"></i>
                            </p>
                            <p><i class="btn btn-success fa fa-arrow-down"></i></p>
                        </div>
                        <div class="controls-zoom">
                            <p><i class="btn btn-warning fa fa-refresh"></i></p>
                            <p><i class="btn btn-danger fa fa-plus"></i></p>
                            <p><i class="btn btn-danger fa fa-minus"></i></p>
                        </div>
                        <div class="controls-keterangan">
                            <p><span style="background-color: yellow" class="badge text-dark">Dipesan</span></P>
                            <p><span class="badge bg-gradient-danger">Dipesan lebih 1 orang</span></P>
                            <p><span class="badge bg-gradient-success">Sudah DP</span></P>
                            <p><span class="badge bg-gradient-info">Dalam Pembangunan</span></P>
                        </div>
                    </div>
                </div>
            </div>
            <!-- akhir panel control -->
        </div>
    </div>
</div>
<!-- akhir Tampilan map -->
<!-- Table data -->
<div class="panel-table">
    <div class="container-fluid py-4">
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table id="list-selatan" class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>Kode Kapling</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Progress</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Denah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="form-edit-denah">
                    <div class="mb-3">
                        <label for="code" class="form-label">Kode Kapling</label>
                        <input type="text" class="form-control" id="code" name="code" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Status</label>
                        <select class="form-select" id="type" name="type">
                            <option value="Dipesan">Dipesan</option>
                            <option value="Sudah DP">Sudah DP</option>
                            <option value="Dipesan 2 Org">Tambahan</option>
                            <option value="Sedang Dibangun">Sedang Dibangun</option>
                            <option value="Kosong">Kosongkan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-change-denah" data-bs-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
    <!-- Modal Attech-->
</div>
<div class="modal fade" id="exampleModalatt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Denah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col">
                        <select id="select-pembayaran" class="form-control form-control-sm">
                            <option>Pilih Status Pembayaran</option>
                            <option value="cash">CASH</option>
                            <option value="kpr">KPR</option>
                        </select>
                    </div>
                </div>
                <div id="form-document" class="row" hidden>
                    <div class="col-6">
                        <select id="select-document" class="form-control form-control-sm">
                        </select>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="file" id="file-document" class="form-control form-control-sm" placeholder="Recipient's username" value="">
                        </div>
                    </div>
                </div>
                <div id="add-document" class="row">
                    <div class="col">
                        <button type="button" id="btn-add-document" class="btn bg-gradient-default btn-sm col-12">Upload document</button>
                    </div>
                </div>
                <div id="action-upload" class="row" hidden>
                    <div class="col-6">
                        <bu<a href="javascript:;" id="btn-cencel-document" class="btn btn-danger btn-lg btn-sm" role="button" aria-pressed="true">Cencel</a>
                    </div>
                    <div class="col-6 ">
                        <a href="javascript:;" id="btn-save-document" class="btn btn-success btn-lg btn-sm" role="button" aria-pressed="true" style="float: right;">Save document</a>
                    </div>
                </div>
                <hr class="mt-0" style="border-top: solid #00000040 !important;">
                <div id="data-document" class="row">
                    <li>
                        <span>KTP</span>
                    </li>
                    <li>
                        <span>KK</span>
                    </li>
                    <li>
                        <span>NPWP</span>
                    </li>
                    <li>
                        <span>BUKU NIKAH</span>
                    </li>
                    <li>
                        <span>SURAT KETERANGAN KERJA</span>
                    </li>
                    <li>
                        <span>SLIP GAJI 3 BULAN TERAKHIR</span>
                    </li>
                    <li>
                        <span>REKENING KORAN 3 BULAN TERAKHIR</span>
                    </li>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#btn-add-document').click(function() {
        add_document();
    });
    $('#btn-save-document').click(function() {
        // cencel_upload_document();
        if ($('#select-document').val() == '0') {
            $('#select-document').addClass('required')
        }else if($('#select-document').val() == '0'){

        }
        $(this).addClass('active');

    });
    $('#btn-cencel-document').click(function() {
        cencel_upload_document();
        $(this).addClass('active');
        $('#select-document').val('0');
    });

    function add_document() {
        $('#form-document, #action-upload').removeAttr('hidden', true);
        $('#add-document').attr('hidden', true);

    }

    function cencel_upload_document() {
        $('#form-document, #action-upload').attr('hidden', true);
        $('#add-document').removeAttr('hidden', true);
        $('#file-document').val('');

    }
    var html_cash = '<option value="0">Pilih Document</option>' +
        '<option value="ktp">KTP</option>' +
        '<option value="KK">kk</option>' +
        '<option value="npwp"">NPWP</option>' +
        '<option value="buku-nikah"">Buku Nikah</option>' +
        '<option value="blanko"">Blanko</option>';
    var html_kpr = '<option value="0">Pilih Document</option>' +
        '<option value="ktp">KTP</option>' +
        '<option value="KK">kk</option>' +
        '<option value="npwp"">NPWP</option>' +
        '<option value="buku-nikah"">Buku Nikah</option>' +
        '<option value="Skk"">Surat keterangan kerja</option>' +
        '<option value="slip-gaji">Slip gaji 3 bulan terakhir</option>' +
        '<option value="rekening-koran">Rekening koran 3 bulan terakhir</option>' +
        '<option value="blanko"">Blanko</option>';
    $('#select-pembayaran').change(function(e) {
        // alert($(this).val())
        if ($(this).val() == 'cash') {
            $('#select-document').html(html_cash)
        } else if ($(this).val() == 'kpr') {

            $('#select-document').html(html_kpr)
        }
    });
    $('#save-change-denah').click(function() {
        $(this).html('Loading...');
        $(this).attr('disabled', true);
        var code, type, description;
        code = $('#form-edit-denah #code').val();
        description = $('#form-edit-denah #description').val();
        type = $('#form-edit-denah #type').val();
        $.ajax({
            url: "<?php echo base_url('Home/change_denah') ?>",
            data: {
                code: code,
                type: type,
                desc: description,
            },
            type: 'post',
            success: function(data) {
                $('#save-change-denah').html('Save changes');
                $('#save-change-denah').attr('disabled', false);
                $(`#${data.results.code}`).css('fill', data.results.color);
                window.crud.ajax.reload(null, false);
                const modal = bootstrap.Modal.getInstance($('#exampleModaledit'));
                modal.hide();
            }
        });
    });
    window.crud = $('#list-selatan').DataTable({
        "paging": true,
        "ordering": true,
        "autoWidth": false,
        "responsive": true,
        processing: true,
        serverSide: true,
        ajax: "<?php echo base_url('/Home/search'); ?>/" + $('#id-siteplan').val(),
        columns: [{
                data: 'code',
                name: 'code'
            },
            {
                data: 'type',
                name: 'type'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'color',
                name: 'color'
            },
            {
                data: 'action',
                name: 'action'
            }
        ],
    });

    function openDataRow(code, type, desc) {
        $('#form-edit-denah #code').val(code).change();
        $('#form-edit-denah #description').val(desc).change();
        $('#form-edit-denah #type').val(type);
    }
</script>