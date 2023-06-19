<!-- conten -->
<?php
    function getChartDataset($id_perum = null, $database){
        $id_perum = $id_perum;

        $dataset = $database;

        $dataset_filter = [];

        $bulan_filter = [];

        // $group_filter = [];
        $group_filter = ['UTJ','DP','Sold Out'];

        foreach($dataset as $data){
            if(($id_perum != null) && ($data->id_perum == $id_perum)){
                $dataset_filter[] = $data;
            }else if($id_perum == null){
                $dataset_filter[] = $data;
            }
            if($data->bulan){
                if(!in_array($data->bulan, $bulan_filter)){
                    $bulan_filter[] = $data->bulan;
                }
            }
            if($data->status_trans){
                if(!in_array($data->status_trans, $group_filter)){
                    $group_filter[] = $data->status_trans;
                }
            }
        }

        arsort($bulan_filter);
        arsort($group_filter);

        $data_results = [];

        foreach ($group_filter as $group) {
            $g = $group;
            if (!array_key_exists($group, $dataset)) {
                $data_results[$g] = [];
            }
            foreach ($bulan_filter as $bulan) {
                $count = 0;
                $b = $bulan;
                foreach ($dataset_filter as $list) {
                    if (($list->bulan == $b) && ($list->status_trans == $g)) {
                        $count += $list->jumlah;
                    }
                }
                $data_results[$group][] = $count;
            }
        }

        $final_result = [];
        $final_result['label'] = [];
        $final_result['data'] = [];

        $colors = ['red', 'yellow', 'green'];

        foreach($bulan_filter as $b){
            $final_result['label'][] = $b;
        }

        $i = 0;
        foreach($data_results as $key => $result){
            $final_result['data'][] = [
                'label' => $key,
                'backgroundColor' => $colors[$i],
                'data' => $result,
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1
            ];
            $i++;
        }
        return $final_result;

    }
?>
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
                                            foreach ($transaksi as $chart) {
                                                if ($chart->id_perum == $id_perum) {
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
                                        window.data_grafik = [];

                                        var ctx<?=$data->id_perum; ?> = document.getElementById(
                                            'myChart<?=$data->id_perum; ?>').getContext('2d');

                                        window.data_grafik["<?=$data->id_perum?>"] =
                                            <?php echo json_encode(getChartDataset($data->id_perum, $transaksi)); ?>;

                                        var chart = new Chart(ctx<?=$data->id_perum; ?>, {
                                            type: 'bar',
                                            data: {
                                                labels: data_grafik["<?=$data->id_perum?>"].label,
                                                datasets: data_grafik["<?=$data->id_perum?>"].data
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