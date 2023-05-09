<footer class="footer pt-12 ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-sm-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                    document.write(new Date().getFullYear())
                    </script>
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://www.kanpa.co.id" class="font-weight-bold" target="_blank"> Kanpa.co.id</a>
                    Site Plan Map (Beta Vers).
                </div>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>
</footer>
</main>

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
                <button type="button" class="btn btn-primary" id="save-change-denah"
                    data-bs-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
    <!-- Modal Attech-->
    <div class="modal fade" id="exampleModalatt" tabindex="-1" role="dialog" data-bs-dismiss="modal"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Denah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
$('#save-change-denah').click(function() {
    $(this).html('Loading...');
    $(this).attr('disabled', true);
    var code, type, description;
    code = $('#form-edit-denah #code').val();
    description = $('#form-edit-denah #description').val();
    type = $('#form-edit-denah #type').val();
    $.ajax({
        url: "<?php echo base_url('index.php/Home/change_denah') ?>",
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
window.crud = $('#list-datatable').DataTable({
    "paging": true,
    "ordering": true,
    "autoWidth": true,
    "responsive": true,
    processing: true,
    serverSide: true,
    ajax: "<?php echo base_url('/index.php/Home/search') ?>",
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