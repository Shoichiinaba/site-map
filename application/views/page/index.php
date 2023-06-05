<style>
.sorting_1 {
    text-transform: uppercase;
}

.required {
    border: 2px solid #ff000030 !important;
}

#Iframe-Master-CC-and-Rs {
    max-width: 812px;
    max-height: 100%;
    overflow: hidden;
}

/* inner wrapper: make responsive */
.responsive-wrapper {
    position: relative;
    height: 0;
}

.responsive-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    border: none;
}

/* padding-bottom = h/w as % -- sets aspect ratio */
/* YouTube video aspect ratio */
.responsive-wrapper-wxh-572x612 {
    padding-bottom: 107%;
}

/* general styles */
/* ============== */
.set-border {
    border: 5px inset #ddd;
}

.set-box-shadow {
    -webkit-box-shadow: 4px 4px 14px #4f4f4f;
    -moz-box-shadow: 4px 4px 14px #4f4f4f;
    box-shadow: 4px 4px 14px #4f4f4f;
}

.set-padding {
    padding: 10px;
}

.set-margin {
    margin: 30px;
}

.center-block-horiz {
    margin-left: auto !important;
    margin-right: auto !important;
}

sup {
    top: -0.5em;
    color: red;
}

[readonly] {
    background: #a9a9a936;
}
</style>
<div class="container">
    <div id="svg-container">
    </div>
    <div class="card-body p-1">
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
                            <p><span class="badge bg-gradient-danger">Menunggu Konfirmasi</span></P>
                            <p><span class="badge bg-gradient-success">Sudah DP</span></P>
                            <p><span class="badge bg-gradient-info">Rumah Ready</span></P>
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
                <div class="row">
                    <div class="col-sm-9 col-lg-2">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text text-body">
                                <i class="ni ni-delivery-fast" aria-hidden="true"></i>
                            </span>
                            <select class="form-control" id="status">
                                <option value=""> &nbsp; Filter</option>
                                <option value="Dipesan"> &nbsp; Dipesan</option>
                                <option value="Menunggu Konfirmasi"> &nbsp; Menunggu Konfirmasi</option>
                                <option value="Sudah DP"> &nbsp; Sudah DP</option>
                                <option value="Rumah Ready"> &nbsp; Rumah Ready</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-2">
                        <button type="button" class="btn bg-gradient-success btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"> <i class="fa fa-print" style="font-size:small;"></i>
                            &nbsp; Cetak
                        </button>
                    </div>
                </div>
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
                        <input type="text" id="id-denahs-edit" value="" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Status</label>
                        <select class="form-select" id="type" name="type">
                            <option value="Dipesan">Dipesan</option>
                            <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                            <option value="UTJ">UTJ</option>
                            <option value="Sudah DP">Sudah DP</option>
                            <option value="Sedang Dibangun">Rumah Ready</option>
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
                <button type="button" class="btn btn-primary" id="save-change-denah"
                    data-bs-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
    <!-- Modal Attech-->
</div>
<div class="modal fade" id="exampleModalatt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Denah</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="id-denahs" value="" hidden>
                <div class="row mb-2">
                    <div class="col">
                        <select id="select-pembayaran" class="form-control form-control-sm">
                            <option value="">Pilih Status Pembayaran</option>
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
                            <input type="file" id="file-document" class="form-control form-control-sm"
                                placeholder="Recipient's username" value="">
                        </div>
                    </div>
                </div>
                <div id="add-document" class="row">
                    <div class="col">
                        <button type="button" id="btn-add-document" class="btn bg-gradient-default btn-sm col-12">Upload
                            document</button>
                    </div>
                </div>
                <div id="action-upload" class="row" hidden>
                    <div class="col-6">
                        <a href="javascript:;" id="btn-cencel-document" class="btn btn-danger btn-lg btn-sm"
                            role="button" aria-pressed="true">Cencel</a>
                    </div>
                    <div class="col-6 ">
                        <a href="javascript:;" id="btn-save-document" class="btn btn-success btn-lg btn-sm"
                            role="button" aria-pressed="true" style="float: right;">Save document</a>
                    </div>
                </div>
                <hr class="mt-0" style="border-top: solid #00000040 !important;">
                <div id="data-document" class="row"></div>
                <center>
                    <span style="font-family: 'NucleoIcons';font-size: smaller;"> <sup>*</sup> Mohon lampirkan Blanko
                        jika unit kapling subsidi!</span>
                </center>
                <input type="text" id="flied" value="" hidden>
                <input type="text" id="file-doc" value="" hidden>
                <div id="preview-pdf" class="row" hidden>
                    <div class="col-12">
                        <hr style="border-top: solid #00000040 !important;">
                        <button type="button" id="btn-close-preview" class="btn-sm btn btn-default"
                            style="float: right;">Close</button>
                        <button type="button" id="btn-delete-doc" class="btn-sm btn btn-danger mr-3"
                            style="float: right;margin-right: 25px;">DELETE</button>
                        <a id="link-down-pdf" href="" download="">
                            <button type="button" class="btn-sm btn btn-info mr-3"
                                style="float: right;margin-right: 25px;">Download</button>
                        </a>
                    </div>
                    <div id="Iframe-Master-CC-and-Rs" class="set-padding set-border set-box-shadow center-block-horiz">
                        <div class="responsive-wrapper responsive-wrapper-wxh-572x612"
                            style="-webkit-overflow-scrolling: touch; overflow: auto;">

                            <iframe id="view-pdf" src="">
                                <!-- <iframe id="view-pdf" src="https://docs.google.com/viewer?url=https://kanpa.co.id/Berkas.pdf&embedded=true"> -->
                            </iframe>

                        </div>
                    </div>
                    <!-- <a href="http://localhost/site_map/upload/doc/0bd7e22accbba7ee18d43d64c56a111a.pdf" download="0bd7e22accbba7ee18d43d64c56a111a.pdf"> download</a> -->
                    <!-- <a id="link-down-pdf" href="" download=""> download</a> -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save
                    changes</button> -->
            </div>
        </div>
    </div>
</div>
<script>
// $(document).ready(function() {

//     $(".pdf").click(function(e) {
//         // alert("'.base_url('upload').'/doc/" + $(this).data("pdf") + "&embedded=true")
//         // alert($(this).data("pdf") + "&embedded=true")
//         $("#view-pdf").attr("src", "https://docs.google.com/viewer?url='.base_url('upload').'/doc/" + $(this).data("pdf") + "&embedded=true")
//         $("#link-down-pdf").attr("href", "'.base_url('upload').'/doc/" + $(this).data("pdf"));
//         $("#link-down-pdf").attr("download", $(this).data("pdf"));
//     });
// });
</script>
<script>
var html_cash = '<option value="0">Pilih Document</option>' +
    '<option value="ktp">KTP</option>' +
    '<option value="kk">kk</option>' +
    '<option value="npwp">NPWP</option>' +
    '<option value="buku_nikah">Buku Nikah</option>' +
    '<option value="blanko">Blanko</option>';
var html_kpr = '<option value="0">Pilih Document</option>' +
    '<option value="ktp">KTP</option>' +
    '<option value="kk">kk</option>' +
    '<option value="npwp">NPWP</option>' +
    '<option value="buku_nikah">Buku Nikah</option>' +
    '<option value="skk">Surat keterangan kerja</option>' +
    '<option value="slip_g">Slip gaji 3 bulan terakhir</option>' +
    '<option value="rek_koran">Rekening koran 3 bulan terakhir</option>' +
    '<option value="blanko">Blanko</option>';
load_data_kapling();

$(document).ready(function() {
    $('.btn-modal-document').click(function() {
        cencel_upload_document();
        // alert($(this).val())
        var id_denahs = $('#id-denahs').val();
        $("#select-pembayaran").removeAttr("readonly", true)
        if ($("#select-pembayaran").val() == 'cash') {
            $('#select-document').html(html_cash);
        } else if ($("#select-pembayaran").val() == 'kpr') {
            $('#select-document').html(html_kpr);
        }
        load_data_document();
    });

    $('#select-pembayaran').change(function(e) {
        // alert($(this).val())
        var id_denahs = $('#id-denahs').val();
        if ($(this).val() == 'cash') {
            $('#select-document').html(html_cash);
            $('#btn-document-' + id_denahs).val('cash');
        } else if ($(this).val() == 'kpr') {
            $('#select-document').html(html_kpr);
            $('#btn-document-' + id_denahs).val('kpr');
        } else {
            $('#btn-document-' + id_denahs).val('');
            $('#select-document').html('');

        }
        let formData = new FormData();
        formData.append('id-denahs', $('#id-denahs').val());
        formData.append('status-pembayaran', $('#select-pembayaran').val());
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Home/update_status_pembayaran'); ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                load_data_document();
                window.crud.ajax.reload(null, false);

            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

});
$('#btn-add-document').click(function() {
    add_document();
});
$('#btn-save-document').click(function() {
    // cencel_upload_document();
    $(this).addClass('active');

    if ($('#file-document').val() == '' || $('#select-document').val() == '0') {
        if ($('#select-document').val() == '0') {
            $('#select-document').addClass('required');
            $(this).removeClass('active');
        } else {
            $('#select-document').removeClass('required');
        }

        if ($('#file-document').val() == '') {
            $('#file-document').addClass('required');
            $(this).removeClass('active');
        } else {
            $('#file-document').removeClass('required');
        }

    } else {
        upload_document();
    }

});
$('#btn-cencel-document').click(function() {
    cencel_upload_document();
    $(this).addClass('active');
});
$('#btn-close-preview').click(function() {
    close_preview_pdf();
});
$('#btn-delete-doc').click(function() {
    // alert($('#id-upload').val() + $('#flied').val() + $('#file-doc').val());
    var confirmalert = confirm("Apakah anda yakin untuk menghapus document ini ?");

    if (confirmalert == true) {

        let formData = new FormData();
        formData.append('id-upload', $('#id-upload').val());
        formData.append('flied', $('#flied').val());
        formData.append('file-doc', $('#file-doc').val());
        formData.append('select-pembayaran', $('#select-pembayaran').val());
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Home/delete_document') ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                alert('Documen berhasil di hapus..');
                load_data_document();
                $('#progres-' + $('#id-denahs').val()).html(data);
                close_preview_pdf();
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    }
});

function add_document() {
    $('#form-document, #action-upload').removeAttr('hidden', true);
    $('#add-document').attr('hidden', true);
    $('#file-document').val('');

}

function cencel_upload_document() {
    $('#form-document, #action-upload').attr('hidden', true);
    $('#add-document').removeAttr('hidden', true);
    $('#file-document').val('');
    $('#select-document').val('0');

}

function close_preview_pdf() {
    $("#link-down-pdf").attr("href", "");
    $("#link-down-pdf").attr("download", "");
    $("#preview-pdf").attr("hidden", true);
    $("#flied").val('');
    $("#file-doc").val('');
}

function upload_document() {
    var confirmalert = confirm("Apakah anda yakin untuk upload document ini ?");
    if (confirmalert == true) {
        const file_document = $('#file-document').prop('files')[0];

        let formData = new FormData();
        formData.append('id-doc-kapling', $('#id-denahs').val());
        formData.append('select-pembayaran', $('#select-pembayaran').val());
        formData.append('select-document', $('#select-document').val());
        formData.append('file-document', file_document);
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Home/upload_document') ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                alert('Documen berhasil di upload...');
                load_data_document();
                $('#file-document').val('');
                $('#select-document').val('0');
                $('#progres-' + $('#id-denahs').val()).html(data);
                // alert(data)


            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    }
};

function load_data_document() {
    let formData = new FormData();
    formData.append('status-pembayaran', $('#select-pembayaran').val());
    formData.append('id-doc-kapling', $('#id-denahs').val());
    $.ajax({
        type: 'POST',
        url: "<?php echo site_url('Home/select_data_document'); ?>",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function(data) {
            $('#data-document').html(data);

        },
        error: function() {
            alert("Data Gagal Diupload 123");
        }
    });
}
$('#save-change-denah').click(function() {
    $(this).html('Loading...');
    $(this).attr('disabled', true);
    var id, code, type, description;
    id = $('#form-edit-denah #id-denahs-edit').val();
    code = $('#form-edit-denah #code').val();
    description = $('#form-edit-denah #description').val();
    type = $('#form-edit-denah #type').val();
    $.ajax({
        url: "<?php echo base_url('Home/change_denah') ?>",
        data: {
            id: id,
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

// load data saat pertama di buka
$(document).ready(function() {
    load_data_kapling();

    $('#status').on('change', function() {
        window.crud.ajax.url("<?php echo base_url('/Home/search'); ?>/" + $('#id-siteplan').val() +
            "?status=" + $(this).val()).load();
    });
});

function load_data_kapling() {
    if ($.fn.DataTable.isDataTable('#list-selatan')) {

        $('#list-selatan').DataTable().destroy();
    }
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

}

function openDataRow(id, code, type, desc) {
    $('#form-edit-denah #id-denahs-edit').val(id).change();
    $('#form-edit-denah #code').val(code).change();
    $('#form-edit-denah #description').val(desc).change();
    $('#form-edit-denah #type').val(type);
}

function getDataDoc(id_denahs, status_pembayaran) {
    $('#id-denahs').val(id_denahs).change();
    $('#select-pembayaran').val(status_pembayaran).change();
}
</script>