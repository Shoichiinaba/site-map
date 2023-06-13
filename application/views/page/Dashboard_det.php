<!-- conten -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-3">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-building fa-beat text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Rumah Ready</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?php echo $jum_ready;  ?> -->
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
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">UTJ</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?=$jum_dipesan;  ?> -->
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
                                    data-bs-toggle="tooltip" data-bs-placement="bottom"></i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sold Out</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?=$jum_sold;  ?> -->
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
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-9 text-end">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sudah DP</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <!-- <?=$jum_null;  ?> -->
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
                                foreach ($status as $data) {
                        ?>
                        <div class="col-lg-6 col-12">
                            <div class="card mb-2">
                                <div class="card-body p-2">
                                    <span class="nav-link-text ms-1"><?= $data->status_trans; ?></span>
                                    <!-- tes develop -->
                                    <div class="chart">
                                        <?php foreach ($transaksi as $chart) {
        if ($chart->$status_trans == $status_trans) {
            echo '<canvas id="myChart' . $chart->status_trans . '" class="chart-canvas" height="200px"></canvas>';
    ?>
                                        <script>
                                        var ctx<?=$chart->status_trans; ?> = document.getElementById(
                                            'myChart<?=$chart->status_trans; ?>').getContext('2d');
                                        var chart = new Chart(ctx<?=$chart->status_trans; ?>, {
                                            type: 'bar',
                                            data: {
                                                labels: ['<?= $chart->bulan; ?>'],
                                                datasets: [{
                                                    label: '<?= $chart->status_trans; ?>',
                                                    data: ['<?= $chart->jumlah; ?>'],
                                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                    borderColor: 'rgba(75, 192, 192, 1)',
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true,
                                                        precision: 0
                                                    }
                                                }
                                            }
                                        });
                                        </script>
                                        <?php
        }
    }
    ?>
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