<main class="main-content  mt-0">
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?= base_url(); ?>assets_adm/img/gbr_header/caruban.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-3"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <?php
                            $no = 1;
                            foreach ($area_siteplan as $data) :
                            ?>
                                <li class="nav-item">
                                    <div id="area-<?= $no++; ?>" class="nav-link mb-0 px-0 py-1 btn-area" data-id-site-plan="<?= $data->id_siteplan; ?>" style="cursor: pointer;">
                                        <i class="fa fa-street-view" aria-hidden="true"></i>
                                        <span class="ms-1">Site Plan <?php echo $data->area; ?></span>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('<?= base_url(); ?>assets_adm/img/map1.jpg');">
                        <span class="mask bg-gradient-light"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <!-- tes menu tab-->
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show position-relative active" id="selatan" role="tabpanel" aria-labelledby="cam1">
                                    <div id="svg-container">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="p-3 mb-0 fa fa-map-marker text-danger"><i class="text-black text-sm-center">Site Map Selatan</i></p>
                                        </div>

                                        <div id="data-site-plan"></div>

                                        <div class="keterangan">
                                            <span style="background-color: yellow" class="badge text-dark">Dipesan</span>
                                            <span class="badge bg-gradient-danger">Dipesan lebih 1 orang</span>
                                            <span class="badge bg-gradient-success">Sudah DP</span>
                                            <span class="badge bg-gradient-info">Dalam Pembangunan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir tes menu tab -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="example2" class="controls">
                    <div class="controls-pan">
                        <i class="btn btn-success fa fa-arrow-up"></i>
                        <i class="btn btn-success fa fa-arrow-down"></i>
                        <i class="btn btn-success fa fa-arrow-left"></i>
                        <i class="btn btn-success fa fa-arrow-right"></i>
                    </div>
                    <div class="controls-zoom">
                        <i class="btn btn-warning fa fa-refresh"></i>
                        <i class="btn btn-danger fa fa-plus"></i>
                        <i class="btn btn-danger fa fa-minus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        var area = $('#area-1');
        area.trigger("click");
    });
    $('.btn-area').click(function(e) {
        $('.btn-area').removeClass('active');
        $(this).addClass('active');

        let formData = new FormData();
        // formData.append('id-perum', $(this).data('id-perum'));
        formData.append('id-siteplan', $(this).data('id-site-plan'));
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('Client/load_site_plan') ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                $('#data-site-plan').html(data);
                load_query_map();
            },
            error: function() {
                alert("Data Gagal Diupload");
            }
        });
    });

    function load_query_map() {
        var example1, example2; //globals so we can manipulate them in the debugger
        $(function() {
            "use strict";
            var examples = $("svg").svgPanZoom();

            var callback = function(example) {
                return function(event) {
                    if ($(event.target).hasClass("fa-arrow-down"))
                        example.panUp()
                    if ($(event.target).hasClass("fa-arrow-up"))
                        example.panDown()
                    if ($(event.target).hasClass("fa-arrow-right"))
                        example.panLeft()
                    if ($(event.target).hasClass("fa-arrow-left"))
                        example.panRight()
                    if ($(event.target).hasClass("fa-plus"))
                        example.zoomIn()
                    if ($(event.target).hasClass("fa-minus"))
                        example.zoomOut()
                    if ($(event.target).hasClass("fa-refresh"))
                        example.reset()
                }
            };


            $("div#example2 i").click(callback(examples));
            setTimeout(function() {
                var denah = $('.cls-2');
                var data = new FormData();
                var param = [];

                for (var i = 0; i < denah.length; i++) {
                    if (denah[i].id) {
                        param[i] = denah[i].id;
                        data.append('id[]', denah[i].id);
                    }
                }
                $.ajax({
                    url: "<?php echo base_url('index.php/home/allDenahColor') ?>",
                    data: [],
                    type: 'GET',
                    success: function(data) {
                        for (var i = 0; i < data.results.length; i++) {
                            var path = data.results[i]
                            $(`#${path.code}`).css('fill', path.color);
                        }
                    }
                });
            }, 2000);
        });
    }
</script>
<!-- <script>
            let formData = new FormData();
        formData.append('id-berita', $(this).data('id-berita'));

    $.ajax({
        // type: 'POST',
        url: "<?php echo site_url('Client/load_site_plan') ?>",
        // data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function(data) {
            $('#data-site-plan').html(data);
        },
        error: function() {
            alert("Data Gagal Diupload");
        }
    });
</script> -->