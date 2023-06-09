<div class="panel-table">
    <div class="container-fluid py-4">
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table id="list-customer" class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>nama</th>
                            <th>Email</th>
                            <th>telepon</th>
                            <th>Jumlah Input</th>
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

<script>
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
window.crud = $('#list-customer').DataTable({
    "paging": true,
    "ordering": true,
    "autoWidth": true,
    "responsive": true,
    processing: true,
    serverSide: true,
    ajax: "<?php echo base_url('Customer/get_customers') ?>",
    columns: [{
            data: 'No',
            name: 'id_customer'
        },
        {
            data: 'nama',
            name: 'nama'
        },
        {
            data: 'email',
            name: 'email'
        },
        {
            data: 'telepon',
            name: 'telepon'
        },
        {
            data: 'jml_input',
            name: 'jml_input'
        }
    ],
    "columnDefs": [{
        "targets": 0,
        "className": "text-center",
    }, ],
});
</script>