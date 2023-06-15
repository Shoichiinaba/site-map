<!-- conten -->

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i type="button" class="ni ni-building fa-beat text-lg opacity-10" aria-hidden="true"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" data-container="body"
                                    data-animation="true" title="
                                    <?php
                                        foreach ($tolp_ready as $data) {
                                    ?>
                                        <?= $data->nama; ?> | <?=$data->jumlah_record; ?>
                                    <?php
                                        }
                                    ?>

                                "></i>
                            </div>
                        </div>
                        <div class=" col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Rumah Ready</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php echo $jum_ready;  ?>
                                    <span class="text-info text-sm font-weight-bolder">Unit</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-3">
                            <div type="button"
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-container="body" data-animation="true" title="
                                    <?php
                                        foreach ($tolp_UTJ as $data) {
                                    ?>
                                        <?= $data->nama; ?> | <?=$data->jumlah_record; ?> ||
                                    <?php
                                        }
                                    ?>
                                    "></i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">UTJ</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?=$jum_dipesan;  ?>
                                    <span class="text-warning text-sm font-weight-bolder">Unit</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-3">
                            <div type="button"
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md btn-tooltip">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" data-container="body"
                                    data-animation="true" title="
                                    <?php
                                        foreach ($tolp_Sold as $data) {
                                    ?>
                                        <?= $data->nama; ?> | <?=$data->jumlah_record; ?>
                                    <?php
                                        }
                                    ?>">
                                </i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sold Out</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?=$jum_sold;  ?>
                                    <span class=" text-danger text-sm font-weight-bolder">Unit</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-6">
            <div class="card">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-3">
                            <div type="button"
                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" data-container="body" data-animation="true" title="
                                    <?php
                                        foreach ($tolp_DP as $data) {
                                    ?>
                                        <?= $data->nama; ?> | <?=$data->jumlah_record; ?>
                                    <?php
                                        }
                                    ?>
                                "></i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sudah DP</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?=$jum_null;  ?>
                                    <span class="text-success text-sm font-weight-bolder">Unit</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <!-- chart -->
                        <div class="col-lg-6 col-12 ">
                            <div class="card mb-2">
                                <div class="card-body p-2">
                                    <div class="chart">
                                        <canvas id="barChart" class="chart-canvas" height="200px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                foreach ($perumahan as $data) {
                                $id_perum = $data->id_perum;
                        ?>
                        <div class="col-lg-6 col-12">
                            <div class="card mb-2">
                                <div class="card-body p-2">
                                    <span class="nav-link-text ms-1"><?= $data->nama; ?></span>
                                    <!-- tes develop -->
                                    <div class="chart">
                                        <canvas id="myChart<?= $data->id_perum; ?>" class="chart-canvas"
                                            height="200px"></canvas>
                                        <?php
                                            foreach ($area_siteplan as $area) :
                                                if ($area->id_perum_siteplan == $id_perum) {
                                                    $nama = $data->nama;
                                                    $tittle = preg_replace("![^a-z0-9]+!i", "-", $nama);
                                                    ?>
                                        <a href="<?php echo site_url('Dashboard/detail/' . $tittle); ?>"
                                            class="mask bg-gradient-dark opacity-0"></a>
                                        <?php
                                            } else {
                                            }
                                        endforeach;
                                        ?>
                                        <?php
                                            $labels = [];
                                            $datasets = [];
                                            // echo "<pre>".json_encode($transaksi)."</pre>";
                                            foreach ($transaksi as $chart) {
                                                if ($chart->id_perum == $id_perum) {
                                                    // debag
                                                    // echo $chart->bulan . " ";
                                                    // echo $chart->status_trans . " ";
                                                    // echo $chart->jumlah . " " . " " . " | ";
                                                    // debag akhir
                                                    $index = array_search($chart->bulan, array_column($labels, 'bulan'));
                                                    if ($index === false) {
                                                        $labels[] = ['bulan' => $chart->bulan];
                                                        $index = count($labels) - 1;
                                                    }
                                                    $datasets[$chart->status_trans][$index] = $chart->jumlah;
                                                }
                                            }

                                            usort($labels, function ($a, $b) {
                                                return strtotime($a['bulan']) - strtotime($b['bulan']);
                                            });
                                            ?>
                                        <script>
                                        // tes-1

                                        var ctx<?=$data->id_perum; ?> = document.getElementById(
                                            'myChart<?=$data->id_perum; ?>').getContext('2d');
                                        var chart = new Chart(ctx<?=$data->id_perum; ?>, {
                                            type: 'bar',
                                            data: {
                                                labels: <?= json_encode(array_column($labels, 'bulan')); ?>,
                                                datasets: [
                                                    <?php
                                                        $colors = [
                                                            'UTJ' => 'rgba(255, 0, 0, 0.7)',
                                                            'DP' => 'rgba(0, 255, 0, 0.7)',
                                                            'Sold Out' => 'rgba(255, 255, 0, 0.7)'
                                                        ];
                                                        foreach ($datasets as $status_trans => $jumlah) {
                                                            ?> {
                                                        label: '<?= $status_trans; ?>',
                                                        data: <?= json_encode(array_values($jumlah)); ?>,
                                                        backgroundColor: '<?= $colors[$status_trans]; ?>',
                                                        borderColor: 'rgba(75, 192, 192, 1)',
                                                        borderWidth: 1
                                                    },
                                                    <?php
                                                        }
                                                        ?>
                                                ]
                                            },
                                            options: {
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                        </script>
                                    </div>
                                    <!-- tes develop -->
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <!-- tes tampil data -->
                            <!-- <?php echo json_encode($transaksi); ?> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- chart rumah ready -->
<script>
var chartData = <?php echo json_encode($ChartData); ?>;
var colors = ['#FFFF00', '#0000FF', '#333333'];
var labels = [];
var data = [];

chartData.forEach(function(item) {
    labels.push(item.label);
    data.push(item.value);
});

var ctx = document.getElementById('barChart').getContext('2d');
var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Jumlah Rumah Ready',
            data: data,
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true,
                }
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }


});
</script>