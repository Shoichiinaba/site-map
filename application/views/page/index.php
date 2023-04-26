<!DOCTYPE html>
<html>

<head>
    <title>Site Plan Selatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datatables.min.css') ?>">

    <style>
    body {
        padding-top: 70px;
        padding-bottom: 30px;
    }

    svg {
        border: 1px solid black;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    div.controls {
        text-align: center;
    }

    div.controls i {
        margin: 3px;
    }

    div.controls-zoom,
    div.controls-pan {
        display: inline-block;
    }

    div.controls-zoom {
        margin-left: 20px;
    }

    #svg-container {
        margin-bottom: 12px;
    }

    .panel-table {
        padding: 0px 30px 0px 30px;
    }

    .pup {
        height: 12px;
        width: 12px;
        display: inline-flex;
        padding-right: 12px;
        border: 1px solid gray;
    }
    </style>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script type="text/javascript"
        src="https://rawgit.com/DanielHoffmann/jquery-svg-pan-zoom/master/compiled/jquery.svg.pan.zoom.js"></script>

    <!--script type="text/javascript" src="/home/daniel/dev/jquery-svg-pan-zoom/compiled/jquery.svg.pan.zoom.js"></script-->

    <script>
    var example1, example2; //globals so we can manipulate them in the debugger
    $(function() {
        "use strict";
        var examples = $("svg").svgPanZoom();

        var callback = function(example) {
            return function(event) {
                if ($(event.target).hasClass("fa-arrow-up"))
                    example.panUp()
                if ($(event.target).hasClass("fa-arrow-down"))
                    example.panDown()
                if ($(event.target).hasClass("fa-arrow-left"))
                    example.panLeft()
                if ($(event.target).hasClass("fa-arrow-right"))
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

        // $('#d4').css('fill', 'red');
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

            // $.ajax({
            //     url: "<?php echo base_url('index.php/home/inputDenah') ?>",
            //     data: data,
            //     processData: false,
            //     contentType: false,
            //     type: 'POST',
            //     success: function(data){
            //         alert('Berhasil');
            //         // alert(data);
            //     }
            // });

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
    </script>
</head>

<body>
    <div class="container">
        <div id="svg-container">
            <center>
                <h1>Denah Map Selatan</h1>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="800" height="400"
                    xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1"
                    viewBox="0 0 841.89 1190.55">
                    <defs>
                        <style>
                        .cls-1,
                        .cls-12,
                        .cls-7 {
                            fill: none;
                        }

                        .cls-2,
                        .cls-4 {
                            fill: #e6e7e8;
                        }

                        .cls-3 {
                            clip-path: url(#clip-path);
                        }

                        .cls-12,
                        .cls-4 {
                            stroke: #231f20;
                            stroke-miterlimit: 10;
                            stroke-width: 0.5px;
                        }

                        .cls-5 {
                            fill: #6abd45;
                        }

                        .cls-6 {
                            fill: #010101;
                        }

                        .cls-7 {
                            stroke: #000;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 0;
                        }

                        .cls-11,
                        .cls-8 {
                            fill: #231f20;
                        }

                        .cls-9 {
                            fill: #3a53a4;
                        }

                        .cls-10 {
                            fill: #fff;
                        }

                        .cls-11 {
                            font-size: 4.42px;
                            font-family: Calibri-Bold, Calibri;
                            font-weight: 700;
                        }
                        </style>
                        <clipPath id="clip-path">
                            <polygon class="cls-1"
                                points="-830.54 38.63 -605.4 50.33 -570.92 86.91 -527.74 91.64 -427.06 112.33 -199.46 113.65 -264.54 227.42 -264.98 316.36 -208.72 797.51 -199.46 929.64 -274.03 1106.96 -345.54 1191.33 -511.46 1191.33 -602.62 852.94 -557.42 775.92 -546.3 493.63 -578.79 266.49 -588.32 123.19 -830.54 102.12 -830.54 38.63" />
                        </clipPath>
                    </defs>
                    <polygon class="cls-2"
                        points="438.56 978.41 425.98 979.34 424.12 955.74 436.86 954.72 438.56 978.41" id="i24" />
                    <polygon class="cls-2" points="451.59 977.41 439.01 978.34 437.16 954.75 449.9 953.72 451.59 977.41"
                        id="i25" />
                    <polygon class="cls-2" points="464.69 976.36 452.17 977.42 450.26 953.7 463 952.67 464.69 976.36"
                        id="i26" />
                    <polygon class="cls-2" points="477.83 975.39 465.25 976.32 463.4 952.73 476.13 951.7 477.83 975.39"
                        id="i27" />
                    <polygon class="cls-2"
                        points="491.02 974.43 478.44 975.36 476.59 951.76 489.33 950.74 491.02 974.43" id="i28" />
                    <polygon class="cls-2"
                        points="503.97 973.45 491.39 974.38 489.54 950.78 502.28 949.76 503.97 973.45" id="i29" />
                    <polygon class="cls-2"
                        points="440.31 1002.53 427.72 1003.4 425.98 979.8 438.72 978.83 440.31 1002.53" id="i45" />
                    <polygon class="cls-2"
                        points="453.35 1001.59 440.76 1002.47 439.02 978.86 451.76 977.9 453.35 1001.59" id="i44" />
                    <polygon class="cls-2"
                        points="466.45 1000.61 453.92 1001.61 452.12 977.88 464.68 976.92 466.45 1000.61" id="i43" />
                    <polygon class="cls-2"
                        points="479.72 999.46 466.85 1000.44 465.11 976.84 477.85 975.87 479.72 999.46" id="i42" />
                    <polygon class="cls-2" points="492.74 998.5 480.16 999.43 478.32 975.84 491.06 974.82 492.74 998.5"
                        id="i41" />
                    <polygon class="cls-2"
                        points="505.74 997.51 493.15 998.38 491.41 974.78 504.16 973.81 505.74 997.51" id="i40" />
                    <polygon class="cls-2"
                        points="519.22 972.34 506.64 973.27 504.79 949.68 517.53 948.65 519.22 972.34" id="i30" />
                    <polygon class="cls-2"
                        points="532.26 971.34 519.67 972.28 517.82 948.68 530.56 947.65 532.26 971.34" id="i31" />
                    <polygon class="cls-2" points="545.36 970.3 532.83 971.36 530.92 947.64 543.66 946.61 545.36 970.3"
                        id="i32" />
                    <polygon class="cls-2" points="558.49 969.32 545.91 970.25 544.06 946.66 556.8 945.63 558.49 969.32"
                        id="i33" />
                    <polygon class="cls-2" points="571.68 968.36 559.1 969.29 557.25 945.7 569.99 944.67 571.68 968.36"
                        id="i34" />
                    <polygon class="cls-2"
                        points="520.97 996.47 508.38 997.34 506.64 973.74 519.38 972.77 520.97 996.47" id="i39" />
                    <polygon class="cls-2" points="534.01 995.53 521.42 996.4 519.68 972.8 532.42 971.83 534.01 995.53"
                        id="i38" />
                    <polygon class="cls-2"
                        points="547.11 994.54 534.58 995.55 532.78 971.81 545.34 970.86 547.11 994.54" id="i37" />
                    <polygon class="cls-2" points="560.38 993.39 547.51 994.37 545.77 970.77 558.52 969.8 560.38 993.39"
                        id="i36" />
                    <polygon class="cls-2" points="573.4 992.44 560.82 993.37 558.98 969.77 571.72 968.75 573.4 992.44"
                        id="i35" />
                    <polygon class="cls-2"
                        points="417.72 852.17 405.13 853.02 403.43 829.41 416.17 828.47 417.72 852.17" id="h23" />
                    <polygon class="cls-2" points="430.76 851.25 418.17 852.1 416.47 828.5 429.21 827.55 430.76 851.25"
                        id="h24" />
                    <polygon class="cls-2"
                        points="443.86 850.29 431.33 851.27 429.57 827.53 442.32 826.59 443.86 850.29" id="h25" />
                    <polygon class="cls-2" points="457.01 849.39 444.42 850.25 442.71 826.64 455.46 825.7 457.01 849.39"
                        id="h26" />
                    <polygon class="cls-2" points="470.2 848.52 457.61 849.37 455.91 825.76 468.66 824.82 470.2 848.52"
                        id="h27" />
                    <polygon class="cls-2"
                        points="483.16 847.62 470.57 848.47 468.87 824.87 481.62 823.92 483.16 847.62" id="h28" />
                    <polygon class="cls-2" points="419.31 876.3 406.72 877.09 405.13 853.48 417.88 852.59 419.31 876.3"
                        id="h45" />
                    <polygon class="cls-2"
                        points="432.36 875.45 419.76 876.24 418.17 852.63 430.92 851.74 432.36 875.45" id="h44" />
                    <polygon class="cls-2"
                        points="445.47 874.54 432.93 875.47 431.28 851.72 443.85 850.85 445.47 874.54" id="h43" />
                    <polygon class="cls-2"
                        points="458.74 873.48 445.87 874.38 444.28 850.76 457.03 849.88 458.74 873.48" id="h42" />
                    <polygon class="cls-2" points="471.77 872.61 459.18 873.45 457.49 849.85 470.23 848.9 471.77 872.61"
                        id="h41" />
                    <polygon class="cls-2"
                        points="484.78 871.69 472.19 872.49 470.59 848.87 483.34 847.99 484.78 871.69" id="h40" />
                    <polygon class="cls-2" points="502.68 909.89 490.1 910.81 488.28 887.21 501.02 886.2 502.68 909.89"
                        id="i7" />
                    <polygon class="cls-2"
                        points="515.88 908.86 503.29 909.77 501.48 886.18 514.22 885.17 515.88 908.86" id="i8" />
                    <polygon class="cls-2" points="528.91 907.88 516.33 908.8 514.51 885.2 527.25 884.19 528.91 907.88"
                        id="i9" />
                    <polygon class="cls-2" points="542.01 906.86 529.49 907.9 527.61 884.17 540.35 883.17 542.01 906.86"
                        id="i10" />
                    <polygon class="cls-2" points="555.15 905.9 542.57 906.82 540.75 883.22 553.49 882.21 555.15 905.9"
                        id="i11" />
                    <polygon class="cls-2"
                        points="568.34 904.96 555.76 905.87 553.95 882.28 566.68 881.27 568.34 904.96" id="i12" />
                    <polygon class="cls-2" points="504.38 933.96 491.8 934.81 490.09 911.21 502.84 910.26 504.38 933.96"
                        id="i18" />
                    <polygon class="cls-2" points="517.59 932.99 505 933.84 503.29 910.24 516.04 909.29 517.59 932.99"
                        id="i17" />
                    <polygon class="cls-2"
                        points="530.63 932.07 518.04 932.92 516.33 909.32 529.08 908.37 530.63 932.07" id="i16" />
                    <polygon class="cls-2" points="543.73 931.11 531.2 932.09 529.44 908.35 542 907.42 543.73 931.11"
                        id="i15" />
                    <polygon class="cls-2" points="557 929.98 544.13 930.94 542.43 907.33 555.17 906.38 557 929.98"
                        id="i14" />
                    <polygon class="cls-2"
                        points="570.03 929.04 557.44 929.95 555.64 906.35 568.38 905.35 570.03 929.04" id="i13" />
                    <polygon class="cls-2"
                        points="415.48 788.65 401.33 789.51 400.48 765.95 413.94 764.95 415.48 788.65" id="h1" />
                    <polygon class="cls-2"
                        points="428.52 787.74 415.94 788.59 414.23 764.99 426.98 764.04 428.52 787.74" id="h2" />
                    <polygon class="cls-2" points="441.63 786.77 429.1 787.76 427.34 764.02 440.08 763.08 441.63 786.77"
                        id="h3" />
                    <polygon class="cls-2"
                        points="454.77 785.88 442.18 786.73 440.48 763.13 453.23 762.18 454.77 785.88" id="h4" />
                    <polygon class="cls-2" points="467.97 785 455.38 785.86 453.68 762.25 466.42 761.3 467.97 785"
                        id="h5" />
                    <polygon class="cls-2"
                        points="480.93 784.11 468.34 784.96 466.64 761.35 479.38 760.41 480.93 784.11" id="h6" />
                    <polygon class="cls-2"
                        points="417.08 812.79 402.28 813.79 401.22 789.97 415.64 789.08 417.08 812.79" id="h22" />
                    <polygon class="cls-2"
                        points="430.12 811.93 417.53 812.73 415.94 789.11 428.69 788.23 430.12 811.93" id="h21" />
                    <polygon class="cls-2" points="443.23 811.03 430.7 811.96 429.05 788.21 441.61 787.34 443.23 811.03"
                        id="h20" />
                    <polygon class="cls-2"
                        points="456.51 809.97 443.63 810.86 442.04 787.25 454.79 786.36 456.51 809.97" id="h19" />
                    <polygon class="cls-2" points="469.54 809.09 456.95 809.94 455.25 786.33 468 785.39 469.54 809.09"
                        id="h18" />
                    <polygon class="cls-2"
                        points="482.54 808.18 469.95 808.98 468.36 785.36 481.11 784.48 482.54 808.18" id="h17" />
                    <polygon class="cls-2"
                        points="496.31 782.99 483.72 783.84 482.02 760.23 494.76 759.29 496.31 782.99" id="h7" />
                    <polygon class="cls-2"
                        points="509.51 782.02 496.92 782.87 495.22 759.26 507.96 758.32 509.51 782.02" id="h8" />
                    <polygon class="cls-2" points="522.55 781.1 509.96 781.95 508.26 758.35 521.01 757.4 522.55 781.1"
                        id="h9" />
                    <polygon class="cls-2"
                        points="535.66 780.14 523.13 781.12 521.37 757.38 534.11 756.44 535.66 780.14" id="h10" />
                    <polygon class="cls-2" points="548.8 779.25 536.21 780.1 534.51 756.49 547.25 755.55 548.8 779.25"
                        id="h11" />
                    <polygon class="cls-2" points="497.9 807.06 485.31 807.85 483.72 784.24 496.46 783.35 497.9 807.06"
                        id="h16" />
                    <polygon class="cls-2"
                        points="511.11 806.15 498.51 806.94 496.92 783.33 509.67 782.44 511.11 806.15" id="h15" />
                    <polygon class="cls-2" points="524.15 805.3 511.56 806.09 509.97 782.48 522.72 781.59 524.15 805.3"
                        id="h14" />
                    <polygon class="cls-2" points="537.26 804.39 524.73 805.32 523.08 781.57 535.64 780.7 537.26 804.39"
                        id="h13" />
                    <polygon class="cls-2"
                        points="550.54 803.33 537.66 804.23 536.07 780.61 548.82 779.73 550.54 803.33" id="h12" />
                    <polygon class="cls-2" points="494.09 719.34 481.51 720.19 479.8 696.59 492.55 695.64 494.09 719.34"
                        id="g29" />
                    <polygon class="cls-2" points="507.2 718.38 494.67 719.36 492.91 695.62 505.65 694.68 507.2 718.38"
                        id="g30" />
                    <polygon class="cls-2" points="520.34 717.48 507.75 718.34 506.05 694.73 518.8 693.78 520.34 717.48"
                        id="g31" />
                    <polygon class="cls-2"
                        points="533.54 716.61 520.95 717.46 519.25 693.85 531.99 692.91 533.54 716.61" id="g32" />
                    <polygon class="cls-2" points="546.5 715.71 533.91 716.56 532.21 692.96 544.95 692.01 546.5 715.71"
                        id="g33" />
                    <polygon class="cls-2" points="495.69 743.53 483.1 744.33 481.51 720.72 494.26 719.83 495.69 743.53"
                        id="g38" />
                    <polygon class="cls-2" points="508.8 742.63 496.27 743.56 494.62 719.81 507.18 718.94 508.8 742.63"
                        id="g37" />
                    <polygon class="cls-2" points="522.08 741.57 509.2 742.47 507.61 718.85 520.36 717.97 522.08 741.57"
                        id="g36" />
                    <polygon class="cls-2" points="535.11 740.7 522.52 741.54 520.83 717.94 533.57 717 535.11 740.7"
                        id="g35" />
                    <polygon class="cls-2"
                        points="548.11 739.78 535.52 740.58 533.93 716.96 546.68 716.08 548.11 739.78" id="g34" />
                    <polygon class="cls-2" points="413.06 724.94 399.1 725.94 398.29 702.33 411.52 701.24 413.06 724.94"
                        id="g23" />
                    <polygon class="cls-2"
                        points="426.11 724.02 413.52 724.88 411.82 701.27 424.56 700.32 426.11 724.02" id="g24" />
                    <polygon class="cls-2"
                        points="439.21 723.06 426.68 724.04 424.92 700.31 437.67 699.36 439.21 723.06" id="g25" />
                    <polygon class="cls-2"
                        points="452.36 722.17 439.77 723.02 438.06 699.41 450.81 698.47 452.36 722.17" id="g26" />
                    <polygon class="cls-2"
                        points="465.55 721.29 452.96 722.14 451.26 698.54 464.01 697.59 465.55 721.29" id="g27" />
                    <polygon class="cls-2"
                        points="478.51 720.39 465.92 721.24 464.22 697.64 476.96 696.69 478.51 720.39" id="g28" />
                    <polygon class="cls-2" points="414.66 749.07 399.7 750.08 399.12 726.35 413.23 725.37 414.66 749.07"
                        id="g45" />
                    <polygon class="cls-2" points="427.71 748.22 415.11 749.01 413.52 725.4 426.27 724.51 427.71 748.22"
                        id="g43" />
                    <polygon class="cls-2" points="440.82 747.32 428.28 748.24 426.63 724.5 439.2 723.62 440.82 747.32"
                        id="g42" />
                    <polygon class="cls-2"
                        points="454.09 746.25 441.22 747.15 439.63 723.54 452.38 722.65 454.09 746.25" id="g41" />
                    <polygon class="cls-2"
                        points="467.12 745.38 454.53 746.23 452.84 722.62 465.58 721.68 467.12 745.38" id="g40" />
                    <polygon class="cls-2"
                        points="480.13 744.47 467.53 745.26 465.94 721.65 478.69 720.76 480.13 744.47" id="g39" />
                    <polygon class="cls-2" points="415.56 661.25 396.89 662.39 396.1 638.54 414.01 637.55 415.56 661.25"
                        id="g1" />
                    <polygon class="cls-2"
                        points="428.66 660.29 416.13 661.27 414.37 637.53 427.12 636.59 428.66 660.29" id="g2" />
                    <polygon class="cls-2" points="441.81 659.39 429.22 660.25 427.52 636.64 440.26 635.7 441.81 659.39"
                        id="g3" />
                    <polygon class="cls-2" points="455 658.52 442.42 659.37 440.71 635.76 453.46 634.82 455 658.52"
                        id="g4" />
                    <polygon class="cls-2"
                        points="467.96 657.62 455.37 658.47 453.67 634.87 466.42 633.92 467.96 657.62" id="g5" />
                    <polygon class="cls-2"
                        points="417.16 685.45 397.76 686.75 396.94 662.91 415.72 661.74 417.16 685.45" id="g22" />
                    <polygon class="cls-2"
                        points="430.27 684.54 417.73 685.47 416.08 661.72 428.65 660.85 430.27 684.54" id="g21" />
                    <polygon class="cls-2"
                        points="443.54 683.48 430.67 684.38 429.08 660.76 441.83 659.88 443.54 683.48" id="g20" />
                    <polygon class="cls-2" points="456.57 682.61 443.98 683.45 442.29 659.85 455.03 658.9 456.57 682.61"
                        id="g19" />
                    <polygon class="cls-2"
                        points="469.58 681.69 456.99 682.49 455.39 658.87 468.14 657.99 469.58 681.69" id="g18" />
                    <polygon class="cls-2" points="496.51 655.55 483.93 656.4 482.22 632.79 494.97 631.85 496.51 655.55"
                        id="g7" />
                    <polygon class="cls-2"
                        points="483.47 656.46 470.88 657.31 469.18 633.71 481.93 632.76 483.47 656.46" id="g6" />
                    <polygon class="cls-2"
                        points="509.62 654.58 497.09 655.57 495.33 631.83 508.07 630.88 509.62 654.58" id="g8" />
                    <polygon class="cls-2"
                        points="522.76 653.69 510.17 654.54 508.47 630.94 521.22 629.99 522.76 653.69" id="g9" />
                    <polygon class="cls-2"
                        points="535.96 652.81 523.37 653.66 521.67 630.06 534.41 629.11 535.96 652.81" id="g10" />
                    <polygon class="cls-2"
                        points="548.92 651.91 536.33 652.77 534.63 629.16 547.37 628.21 548.92 651.91" id="g11" />
                    <polygon class="cls-2" points="485.07 680.6 472.48 681.39 470.88 657.78 483.63 656.89 485.07 680.6"
                        id="g17" />
                    <polygon class="cls-2"
                        points="498.11 679.74 485.52 680.53 483.93 656.92 496.68 656.03 498.11 679.74" id="g16" />
                    <polygon class="cls-2" points="511.22 678.84 498.69 679.76 497.04 656.02 509.6 655.14 511.22 678.84"
                        id="g15" />
                    <polygon class="cls-2" points="524.5 677.77 511.63 678.67 510.03 655.06 522.78 654.17 524.5 677.77"
                        id="g14" />
                    <polygon class="cls-2" points="537.53 676.9 524.94 677.75 523.25 654.14 535.99 653.2 537.53 676.9"
                        id="g13" />
                    <polygon class="cls-2" points="550.53 675.99 537.94 676.78 536.35 653.17 549.1 652.28 550.53 675.99"
                        id="g12" />
                    <polygon class="cls-2" points="411.12 597.9 395.81 598.89 395.42 575.36 409.5 574.2 411.12 597.9"
                        id="f22" />
                    <polygon class="cls-2" points="424.29 596.93 411.76 597.92 410 574.18 422.74 573.24 424.29 596.93"
                        id="f23" />
                    <polygon class="cls-2"
                        points="437.43 596.04 424.85 596.89 423.14 573.29 435.89 572.34 437.43 596.04" id="f24" />
                    <polygon class="cls-2"
                        points="450.63 595.16 438.04 596.02 436.34 572.41 449.08 571.46 450.63 595.16" id="f25" />
                    <polygon class="cls-2" points="463.59 594.26 451 595.12 449.3 571.51 462.04 570.57 463.59 594.26"
                        id="f26" />
                    <polygon class="cls-2"
                        points="412.79 622.09 395.79 623.12 395.58 599.43 411.29 598.38 412.79 622.09" id="f37" />
                    <polygon class="cls-2" points="425.89 621.19 413.36 622.11 411.71 598.37 424.27 597.5 425.89 621.19"
                        id="f36" />
                    <polygon class="cls-2" points="439.17 620.12 426.3 621.02 424.7 597.41 437.45 596.52 439.17 620.12"
                        id="f35" />
                    <polygon class="cls-2" points="452.2 619.25 439.61 620.1 437.92 596.49 450.66 595.55 452.2 619.25"
                        id="f34" />
                    <polygon class="cls-2" points="465.2 618.34 452.61 619.13 451.02 595.52 463.77 594.63 465.2 618.34"
                        id="f33" />
                    <polygon class="cls-2" points="478.87 593.06 466.28 593.91 464.58 570.3 477.32 569.36 478.87 593.06"
                        id="f27" />
                    <polygon class="cls-2"
                        points="492.07 592.18 479.48 593.03 477.78 569.43 490.52 568.48 492.07 592.18" id="f28" />
                    <polygon class="cls-2"
                        points="505.03 591.28 492.44 592.13 490.74 568.53 503.48 567.58 505.03 591.28" id="f29" />
                    <polygon class="cls-2"
                        points="480.61 617.14 467.73 618.04 466.14 594.43 478.89 593.54 480.61 617.14" id="f32" />
                    <polygon class="cls-2" points="493.64 616.27 481.05 617.12 479.35 593.51 492.1 592.57 493.64 616.27"
                        id="f31" />
                    <polygon class="cls-2"
                        points="506.64 615.36 494.05 616.15 492.46 592.54 505.21 591.65 506.64 615.36" id="f30" />
                    <polygon class="cls-2"
                        points="477.83 529.42 465.24 530.28 463.54 506.67 476.28 505.73 477.83 529.42" id="f6" />
                    <polygon class="cls-2" points="490.93 528.46 478.4 529.44 476.64 505.71 489.39 504.76 490.93 528.46"
                        id="f7" />
                    <polygon class="cls-2"
                        points="504.08 527.57 491.49 528.42 489.79 504.81 502.53 503.87 504.08 527.57" id="f8" />
                    <polygon class="cls-2"
                        points="517.27 526.69 504.69 527.54 502.98 503.94 515.73 502.99 517.27 526.69" id="f9" />
                    <polygon class="cls-2"
                        points="530.23 525.79 517.64 526.64 515.94 503.04 528.69 502.09 530.23 525.79" id="f10" />
                    <polygon class="cls-2" points="479.43 553.62 466.84 554.41 465.25 530.8 477.99 529.91 479.43 553.62"
                        id="f16" />
                    <polygon class="cls-2" points="492.54 552.72 480 553.64 478.35 529.9 490.92 529.02 492.54 552.72"
                        id="f15" />
                    <polygon class="cls-2" points="505.81 551.65 492.94 552.55 491.35 528.94 504.1 528.05 505.81 551.65"
                        id="f14" />
                    <polygon class="cls-2"
                        points="518.84 550.78 506.25 551.63 504.56 528.02 517.31 527.08 518.84 550.78" id="f11" />
                    <polygon class="cls-2"
                        points="531.85 549.87 519.26 550.66 517.66 527.05 530.41 526.16 531.85 549.87" id="f12" />
                    <polygon class="cls-2" points="544.78 549.03 532.19 549.82 530.6 526.21 543.35 525.32 544.78 549.03"
                        id="f13" />
                    <polygon class="cls-2"
                        points="474.75 912.07 487.34 911.17 489.12 934.77 476.38 935.76 474.75 912.07" id="i19" />
                    <polygon class="cls-2"
                        points="461.65 913.07 474.18 912.05 476.02 935.78 463.27 936.77 461.65 913.07" id="i20" />
                    <polygon class="cls-2" points="448.51 914.01 461.1 913.12 462.88 936.72 450.13 937.71 448.51 914.01"
                        id="i21" />
                    <polygon class="cls-2" points="435.32 914.93 447.9 914.04 449.68 937.64 436.94 938.63 435.32 914.93"
                        id="i22" />
                    <polygon class="cls-2"
                        points="422.36 915.87 434.95 914.98 436.73 938.58 423.99 939.57 422.36 915.87" id="i23" />
                    <polygon class="cls-2"
                        points="473.07 887.88 485.66 887.04 487.33 910.65 474.59 911.58 473.07 887.88" id="i6" />
                    <polygon class="cls-2" points="459.97 888.82 472.5 887.86 474.23 911.6 461.66 912.51 459.97 888.82"
                        id="i5" />
                    <polygon class="cls-2" points="446.69 889.93 459.56 888.99 461.23 912.6 448.49 913.53 446.69 889.93"
                        id="i4" />
                    <polygon class="cls-2"
                        points="433.67 890.85 446.25 889.96 448.02 913.56 435.28 914.54 433.67 890.85" id="i3" />
                    <polygon class="cls-2" points="420.67 891.8 433.25 890.97 434.93 914.58 422.18 915.51 420.67 891.8"
                        id="i2" />
                    <polygon class="cls-2" points="407.57 892.74 420.16 891.9 421.83 915.51 409.67 916.39 407.57 892.74"
                        id="i1" />
                    <polygon class="cls-2"
                        points="462.18 1040.72 449.6 1041.7 451.34 1065.31 464.09 1064.39 462.18 1040.72" id="i55" />
                    <polygon class="cls-2"
                        points="475.28 1039.76 462.74 1040.61 464.45 1064.35 477.2 1063.44 475.28 1039.76" id="i56" />
                    <polygon class="cls-2"
                        points="488.41 1038.74 475.83 1039.72 477.58 1063.33 490.33 1062.41 488.41 1038.74" id="i57" />
                    <polygon class="cls-2"
                        points="501.6 1037.69 489.02 1038.67 490.77 1062.28 503.51 1061.36 501.6 1037.69" id="i58" />
                    <polygon class="cls-2"
                        points="460.24 1016.55 447.67 1017.59 449.52 1041.18 462.27 1040.21 460.24 1016.55" id="i47" />
                    <polygon class="cls-2"
                        points="448.96 1041.72 436.38 1042.7 438.13 1066.31 450.88 1065.39 448.96 1041.72" id="i54" />
                    <polygon class="cls-2"
                        points="447.02 1017.55 434.45 1018.59 436.31 1042.19 449.05 1041.21 447.02 1017.55" id="i46" />
                    <polygon class="cls-2"
                        points="473.34 1015.53 460.81 1016.44 462.63 1040.17 475.18 1039.21 473.34 1015.53" id="i48" />
                    <polygon class="cls-2"
                        points="486.63 1014.66 473.76 1015.64 475.62 1039.23 488.36 1038.26 486.63 1014.66" id="i49" />
                    <polygon class="cls-2"
                        points="499.65 1013.63 487.07 1014.62 488.83 1038.22 501.57 1037.3 499.65 1013.63" id="i50" />
                    <polygon class="cls-2"
                        points="512.65 1012.64 500.07 1013.68 501.93 1037.28 514.67 1036.3 512.65 1012.64" id="i51" />
                    <polygon class="cls-2"
                        points="525.74 1011.61 513.16 1012.66 515.02 1036.25 527.17 1035.32 525.74 1011.61" id="i52" />
                    <polygon class="cls-2"
                        points="538.64 1010.56 526.07 1011.6 527.92 1035.2 540.08 1034.26 538.64 1010.56" id="i53" />
                    <polygon class="cls-2" points="498.49 846.32 485.9 847.18 484.2 823.57 496.95 822.62 498.49 846.32"
                        id="h29" />
                    <polygon class="cls-2" points="511.6 845.36 499.07 846.34 497.31 822.61 510.05 821.66 511.6 845.36"
                        id="h30" />
                    <polygon class="cls-2" points="524.74 844.47 512.15 845.32 510.45 821.71 523.2 820.77 524.74 844.47"
                        id="h31" />
                    <polygon class="cls-2"
                        points="537.94 843.59 525.35 844.44 523.65 820.84 536.39 819.89 537.94 843.59" id="h32" />
                    <polygon class="cls-2" points="550.9 842.69 538.31 843.54 536.61 819.94 549.35 818.99 550.9 842.69"
                        id="h33" />
                    <polygon class="cls-2" points="500.09 870.52 487.5 871.31 485.91 847.7 498.66 846.81 500.09 870.52"
                        id="h39" />
                    <polygon class="cls-2" points="513.2 869.62 500.67 870.54 499.02 846.8 511.58 845.92 513.2 869.62"
                        id="h38" />
                    <polygon class="cls-2" points="526.48 868.55 513.6 869.45 512.01 845.84 524.76 844.95 526.48 868.55"
                        id="h37" />
                    <polygon class="cls-2"
                        points="539.51 867.68 526.92 868.53 525.22 844.92 537.97 843.98 539.51 867.68" id="h36" />
                    <polygon class="cls-2"
                        points="552.51 866.77 539.92 867.56 538.33 843.95 551.08 843.06 552.51 866.77" id="h35" />
                    <polygon class="cls-2"
                        points="566.75 866.05 553.02 866.67 551.42 843.06 562.46 842.22 566.75 866.05" id="h34" />
                    <polygon class="cls-2"
                        points="433.96 468.92 421.37 469.77 419.67 446.17 432.42 445.22 433.96 468.92" id="e21" />
                    <polygon class="cls-2" points="447.16 467.95 434.57 468.8 432.87 445.2 445.62 444.25 447.16 467.95"
                        id="e22" />
                    <polygon class="cls-2" points="460.2 467.03 447.62 467.89 445.91 444.28 458.66 443.33 460.2 467.03"
                        id="e23" />
                    <polygon class="cls-2"
                        points="473.31 466.07 460.78 467.05 459.02 443.32 471.76 442.37 473.31 466.07" id="e24" />
                    <polygon class="cls-2"
                        points="486.45 465.18 473.86 466.03 472.16 442.42 484.91 441.48 486.45 465.18" id="e25" />
                    <polygon class="cls-2" points="499.65 464.3 487.06 465.15 485.36 441.55 498.1 440.6 499.65 464.3"
                        id="e26" />
                    <polygon class="cls-2" points="512.61 463.4 500.02 464.25 498.32 440.65 511.06 439.7 512.61 463.4"
                        id="e27" />
                    <polygon class="cls-2"
                        points="435.55 492.99 422.96 493.78 421.37 470.17 434.12 469.28 435.55 492.99" id="e35" />
                    <polygon class="cls-2"
                        points="420.77 469.81 408.18 470.66 406.48 447.06 419.23 446.11 420.77 469.81" id="e20" />
                    <polygon class="cls-2"
                        points="422.36 493.88 409.77 494.68 408.18 471.06 420.93 470.18 422.36 493.88" id="e36" />
                    <polygon class="cls-2" points="407.65 470.73 394.44 471.58 392.64 447.98 406.02 447.1 407.65 470.73"
                        id="e19" />
                    <polygon class="cls-2" points="409.35 494.68 394.74 495.7 394.59 472.08 407.73 471.17 409.35 494.68"
                        id="e37" />
                    <polygon class="cls-2"
                        points="448.76 492.08 436.17 492.88 434.57 469.26 447.32 468.38 448.76 492.08" id="e34" />
                    <polygon class="cls-2" points="461.8 491.23 449.21 492.02 447.62 468.41 460.37 467.52 461.8 491.23"
                        id="e33" />
                    <polygon class="cls-2"
                        points="474.91 490.33 462.38 491.25 460.73 467.51 473.29 466.63 474.91 490.33" id="e32" />
                    <polygon class="cls-2"
                        points="488.19 489.26 475.32 490.16 473.72 466.55 486.47 465.66 488.19 489.26" id="e31" />
                    <polygon class="cls-2"
                        points="501.22 488.39 488.63 489.24 486.94 465.63 499.68 464.69 501.22 488.39" id="e30" />
                    <polygon class="cls-2"
                        points="514.22 487.48 501.63 488.27 500.04 464.66 512.79 463.77 514.22 487.48" id="e29" />
                    <polygon class="cls-2" points="527.32 486.59 514.73 487.38 513.14 463.77 525.3 462.93 527.32 486.59"
                        id="e28" />
                    <polygon class="cls-2" points="428.23 405.6 415.64 406.45 413.93 382.84 426.68 381.9 428.23 405.6"
                        id="e3" />
                    <polygon class="cls-2"
                        points="441.43 404.63 428.84 405.48 427.13 381.88 439.88 380.93 441.43 404.63" id="e4" />
                    <polygon class="cls-2"
                        points="454.47 403.71 441.88 404.56 440.18 380.96 452.92 380.01 454.47 403.71" id="e5" />
                    <polygon class="cls-2" points="467.57 402.75 455.04 403.73 453.28 380 466.03 379.05 467.57 402.75"
                        id="e6" />
                    <polygon class="cls-2" points="480.71 401.86 468.13 402.71 466.43 379.1 479.17 378.16 480.71 401.86"
                        id="e7" />
                    <polygon class="cls-2"
                        points="493.91 400.98 481.32 401.83 479.62 378.22 492.37 377.28 493.91 400.98" id="e8" />
                    <polygon class="cls-2"
                        points="506.87 400.08 494.28 400.93 492.58 377.33 505.32 376.38 506.87 400.08" id="e9" />
                    <polygon class="cls-2"
                        points="429.81 429.67 417.22 430.46 415.63 406.85 428.38 405.96 429.81 429.67" id="e16" />
                    <polygon class="cls-2"
                        points="443.02 428.76 430.43 429.56 428.84 405.94 441.58 405.06 443.02 428.76" id="e15" />
                    <polygon class="cls-2" points="456.07 427.91 443.47 428.7 441.88 405.09 454.63 404.2 456.07 427.91"
                        id="e14" />
                    <polygon class="cls-2" points="469.18 427 456.64 427.93 454.99 404.19 467.56 403.31 469.18 427"
                        id="e13" />
                    <polygon class="cls-2"
                        points="482.45 425.94 469.58 426.84 467.99 403.22 480.74 402.34 482.45 425.94" id="e12" />
                    <polygon class="cls-2" points="495.48 425.07 482.89 425.91 481.2 402.31 493.94 401.37 495.48 425.07"
                        id="e11" />
                    <polygon class="cls-2" points="508.49 424.15 495.89 424.95 494.3 401.33 507.05 400.45 508.49 424.15"
                        id="e10" />
                    <polygon class="cls-2" points="409.74 533.91 395.07 534.9 394.69 511.37 408.19 510.21 409.74 533.91"
                        id="f1" />
                    <polygon class="cls-2" points="422.84 532.95 410.31 533.93 408.55 510.19 421.3 509.25 422.84 532.95"
                        id="f2" />
                    <polygon class="cls-2" points="435.99 532.05 423.4 532.9 421.7 509.3 434.44 508.35 435.99 532.05"
                        id="f3" />
                    <polygon class="cls-2" points="449.18 531.17 436.6 532.03 434.89 508.42 447.64 507.47 449.18 531.17"
                        id="f4" />
                    <polygon class="cls-2" points="462.14 530.27 449.55 531.13 447.85 507.52 460.6 506.58 462.14 530.27"
                        id="f5" />
                    <polygon class="cls-2" points="411.34 558.1 395.05 559.13 394.85 535.44 409.9 534.4 411.34 558.1"
                        id="f21" />
                    <polygon class="cls-2" points="424.45 557.2 411.91 558.12 410.26 534.38 422.83 533.51 424.45 557.2"
                        id="f20" />
                    <polygon class="cls-2"
                        points="437.72 556.13 424.85 557.03 423.26 533.42 436.01 532.53 437.72 556.13" id="f19" />
                    <polygon class="cls-2" points="450.75 555.26 438.16 556.11 436.47 532.5 449.21 531.56 450.75 555.26"
                        id="f18" />
                    <polygon class="cls-2"
                        points="463.76 554.35 451.17 555.14 449.57 531.53 462.32 530.64 463.76 554.35" id="f17" />
                    <polygon class="cls-2" points="421.39 342.39 408.8 343.24 407.1 319.64 419.84 318.69 421.39 342.39"
                        id="d31" />
                    <polygon class="cls-2" points="434.59 341.42 422 342.27 420.3 318.67 433.04 317.72 434.59 341.42"
                        id="d30" />
                    <polygon class="cls-2" points="447.63 340.5 435.04 341.36 433.34 317.75 446.08 316.81 447.63 340.5"
                        id="d29" />
                    <polygon class="cls-2" points="460.73 339.54 448.2 340.52 446.44 316.79 459.19 315.84 460.73 339.54"
                        id="d28" />
                    <polygon class="cls-2" points="473.88 338.65 461.29 339.5 459.59 315.9 472.33 314.95 473.88 338.65"
                        id="d27" />
                    <polygon class="cls-2"
                        points="487.07 337.77 474.49 338.62 472.78 315.02 485.53 314.07 487.07 337.77" id="d26" />
                    <polygon class="cls-2"
                        points="500.03 336.87 487.44 337.73 485.74 314.12 498.49 313.17 500.03 336.87" id="d25" />
                    <polygon class="cls-2"
                        points="422.98 366.46 410.38 367.26 408.79 343.64 421.54 342.76 422.98 366.46" id="d36" />
                    <polygon class="cls-2" points="408.1 343.34 395.51 344.19 393.81 320.58 406.56 319.64 408.1 343.34"
                        id="d32" />
                    <polygon class="cls-2" points="409.69 367.41 397.1 368.2 395.51 344.59 408.26 343.7 409.69 367.41"
                        id="d35" />
                    <polygon class="cls-2" points="436.18 365.56 423.59 366.35 422 342.74 434.75 341.85 436.18 365.56"
                        id="d37" />
                    <polygon class="cls-2" points="449.23 364.7 436.64 365.49 435.04 341.88 447.79 340.99 449.23 364.7"
                        id="d38" />
                    <polygon class="cls-2" points="462.34 363.8 449.8 364.72 448.15 340.98 460.72 340.1 462.34 363.8"
                        id="d39" />
                    <polygon class="cls-2" points="475.61 362.73 462.74 363.63 461.15 340.02 473.9 339.13 475.61 362.73"
                        id="d40" />
                    <polygon class="cls-2" points="488.64 361.86 476.05 362.71 474.36 339.1 487.11 338.16 488.64 361.86"
                        id="d41" />
                    <polygon class="cls-2"
                        points="501.65 360.95 489.06 361.74 487.46 338.13 500.21 337.24 501.65 360.95" id="d42" />
                    <polygon class="cls-2" points="400.37 280.15 387.78 281 386.08 257.39 398.83 256.45 400.37 280.15"
                        id="d15" />
                    <polygon class="cls-2"
                        points="413.57 279.18 400.98 280.03 399.28 256.43 412.03 255.48 413.57 279.18" id="d14" />
                    <polygon class="cls-2"
                        points="426.62 278.26 414.03 279.12 412.32 255.51 425.07 254.56 426.62 278.26" id="d13" />
                    <polygon class="cls-2" points="439.72 277.3 427.19 278.28 425.43 254.55 438.17 253.6 439.72 277.3"
                        id="d12" />
                    <polygon class="cls-2"
                        points="452.86 276.41 440.27 277.26 438.57 253.65 451.32 252.71 452.86 276.41" id="d11" />
                    <polygon class="cls-2"
                        points="466.06 275.53 453.47 276.38 451.77 252.78 464.51 251.83 466.06 275.53" id="d10" />
                    <polygon class="cls-2"
                        points="479.02 274.63 466.43 275.48 464.73 251.88 477.47 250.93 479.02 274.63" id="d9" />
                    <polygon class="cls-2" points="401.96 304.22 389.37 305.01 387.78 281.4 400.53 280.51 401.96 304.22"
                        id="d18" />
                    <polygon class="cls-2"
                        points="415.17 303.31 402.58 304.11 400.98 280.49 413.73 279.61 415.17 303.31" id="d19" />
                    <polygon class="cls-2"
                        points="428.21 302.46 415.62 303.25 414.03 279.64 426.78 278.75 428.21 302.46" id="d20" />
                    <polygon class="cls-2" points="441.32 301.56 428.79 302.48 427.14 278.74 439.7 277.86 441.32 301.56"
                        id="d21" />
                    <polygon class="cls-2" points="454.6 300.49 441.73 301.39 440.13 277.78 452.88 276.89 454.6 300.49"
                        id="d22" />
                    <polygon class="cls-2"
                        points="467.63 299.62 455.04 300.47 453.35 276.86 466.09 275.92 467.63 299.62" id="d23" />
                    <polygon class="cls-2" points="480.63 298.71 468.04 299.5 466.45 275.89 479.2 275 480.63 298.71"
                        id="d24" />
                    <polygon class="cls-2" points="472.32 235.49 459.7 236.43 458.06 212.75 470.69 211.95 472.32 235.49"
                        id="d8" />
                    <polygon class="cls-2"
                        points="459.18 236.49 446.56 237.43 444.92 213.76 457.54 212.79 459.18 236.49" id="d7" />
                    <polygon class="cls-2"
                        points="446.17 237.34 433.43 238.26 431.78 214.64 444.45 213.77 446.17 237.34" id="d6" />
                    <polygon class="cls-2"
                        points="432.93 238.27 420.19 239.19 418.54 215.57 431.21 214.71 432.93 238.27" id="d5" />
                    <polygon class="cls-2"
                        points="419.95 239.14 407.17 240.09 405.54 216.44 418.24 215.57 419.95 239.14" id="d4" />
                    <polygon class="cls-2"
                        points="406.85 240.08 394.06 241.03 392.43 217.38 405.13 216.51 406.85 240.08" id="d3" />
                    <polygon class="cls-2"
                        points="393.71 240.99 380.92 241.94 379.29 218.29 391.99 217.42 393.71 240.99" id="d2" />
                    <polygon class="cls-2" points="380.59 241.9 367.8 242.85 366.17 219.2 378.87 218.33 380.59 241.9"
                        id="d1" />
                    <polygon class="cls-2"
                        points="387.35 280.96 372.37 282.18 368.74 258.53 385.82 257.23 387.35 280.96" id="d16" />
                    <polygon class="cls-2"
                        points="389.18 305.11 376.58 306.02 372.34 282.61 387.55 281.45 389.18 305.11" id="d17" />
                    <polygon class="cls-2"
                        points="394.87 344.13 381.07 345.12 378.06 321.44 393.38 320.41 394.87 344.13" id="d33" />
                    <polygon class="cls-2"
                        points="396.78 368.28 383.77 369.24 381.18 345.57 394.96 344.59 396.78 368.28" id="d34" />
                    <polygon class="cls-2"
                        points="415.23 406.34 402.64 407.19 400.94 383.59 413.68 382.64 415.23 406.34" id="e2" />
                    <polygon class="cls-2" points="416.82 430.41 404.23 431.2 402.63 407.59 415.38 406.7 416.82 430.41"
                        id="e17" />
                    <polygon class="cls-2" points="402 407.14 388.19 408.12 385.19 384.44 400.51 383.41 402 407.14"
                        id="e1" />
                    <polygon class="cls-2"
                        points="403.91 431.29 390.89 432.25 388.31 408.57 402.08 407.59 403.91 431.29" id="e18" />
                    <g class="cls-3">
                        <path
                            d="M-1126.72,1192.5a.23.23,0,0,1-.22-.23.22.22,0,0,1,.22-.23l1179.16-1.66h0a.22.22,0,0,1,.22.23.23.23,0,0,1-.22.23Z" />
                    </g>
                    <polygon class="cls-2"
                        points="508.31 127.48 485.08 131.17 483.48 133.15 479.8 114.88 506.05 115.34 508.31 127.48" />
                    <polygon class="cls-2"
                        points="428.14 1082.19 483.94 1078.57 441.27 1103.62 430.79 1099.7 428.14 1082.19" />
                    <polygon class="cls-2"
                        points="546.47 612.76 507.04 615.25 503.77 567.21 543.02 564.7 546.47 612.76" />
                    <polygon class="cls-4"
                        points="373.32 95.8 464.12 114.58 482.07 210.73 384.94 217.67 382.59 187.6 373.32 95.8" />
                    <path
                        d="M450.17,1175.94a.22.22,0,0,1-.22-.16l-13.12-42.53a.26.26,0,0,1,0-.15l9.73-25.19a.24.24,0,0,1,.3-.13.22.22,0,0,1,.12.29l-9.7,25.12,13.1,42.46a.22.22,0,0,1-.15.28Z" />
                    <path
                        d="M464.12,114.81h-.05L373.28,96a.23.23,0,0,1-.18-.27.24.24,0,0,1,.27-.18l90.79,18.78a.23.23,0,0,1,.18.27A.23.23,0,0,1,464.12,114.81Z" />
                    <path
                        d="M541.27,131.93l-.08,0-.73-.22a.22.22,0,0,1-.15-.11L540,131a.14.14,0,0,1,0-.06l-.08-.45a.23.23,0,0,1,.45-.08l.07.42.24.48.2.05.41.14.28-.06.3-.18.09-.14.07-.59-.6-3.28a.23.23,0,1,1,.45-.09l.6,3.32v.07l-.08.68a.19.19,0,0,1,0,.1l-.15.22a.23.23,0,0,1-.07.07l-.38.23-.07,0-.38.07Z" />
                    <path
                        d="M546.39,131a.22.22,0,0,1-.22-.18l-.6-2.86a.23.23,0,1,1,.44-.1l.6,2.87a.23.23,0,0,1-.17.27Z" />
                    <path
                        d="M545,131.1l-.24,0a1.62,1.62,0,1,1,1.35-2.78.22.22,0,0,1,0,.32.23.23,0,0,1-.32,0,1.16,1.16,0,0,0-1.95,1.05,1.15,1.15,0,0,0,1,.95A1.17,1.17,0,0,0,546,130a.23.23,0,0,1,.41.2A1.62,1.62,0,0,1,545,131.1Z" />
                    <path
                        d="M548,130.64a.23.23,0,0,1-.23-.18l-.82-4.22a.23.23,0,0,1,.17-.27.23.23,0,0,1,.27.18l.83,4.22a.23.23,0,0,1-.18.27Z" />
                    <path
                        d="M551.9,129.89a.23.23,0,0,1-.22-.18l-.53-2.87a.23.23,0,0,1,.18-.26.22.22,0,0,1,.26.18l.53,2.86a.24.24,0,0,1-.18.27Z" />
                    <path
                        d="M550.47,130.19h-.08l-.45-.15-.05,0-.46-.3-.06-.07L549,129l0-.08-.07-.37a.2.2,0,0,1,0-.07l.08-.68a.18.18,0,0,1,0-.12l.38-.45.41-.34.08,0,.52-.15a.29.29,0,0,1,.13,0l.53.15.08.05.45.37a.23.23,0,1,1-.29.35l-.41-.35-.42-.12-.43.13-.34.27-.3.37-.06.57.06.31.33.52.38.26.36.12.5-.12.33-.27.35-.42a.22.22,0,0,1,.32,0,.23.23,0,0,1,0,.32l-.38.45-.41.33a.13.13,0,0,1-.09,0l-.6.16Z" />
                    <path
                        d="M553.56,129.66a.23.23,0,0,1-.23-.18l-.52-2.94a.23.23,0,0,1,.18-.27.22.22,0,0,1,.26.19l.53,2.94a.23.23,0,0,1-.18.26Z" />
                    <path
                        d="M555.74,129.21a.22.22,0,0,1-.22-.18l-.37-2.08-.23-.48-.31,0-.51.07-.29.23-.44.72a.23.23,0,0,1-.31.08.22.22,0,0,1-.07-.31l.45-.75a.1.1,0,0,1,0-.06l.38-.31a.21.21,0,0,1,.11,0l.6-.08h.07l.45.08a.21.21,0,0,1,.17.12l.3.6a.14.14,0,0,1,0,.06L556,129a.23.23,0,0,1-.19.26Z" />
                    <path
                        d="M511,1079h-.05l-.31-.08a.2.2,0,0,1-.09,0l-.53-.45-.26-.34a.22.22,0,0,1,.05-.31.21.21,0,0,1,.31,0l.23.3.45.38.21.06.36-.06.29-.18.2-.33,0-.12-.13-.58-1.79-2.75a.23.23,0,1,1,.38-.25l1.81,2.79,0,.07.15.68a.24.24,0,0,1,0,.12l-.08.23-.25.42a.27.27,0,0,1-.07.08l-.38.23-.08,0-.45.08Z" />
                    <path
                        d="M515.85,1076.24a.23.23,0,0,1-.19-.11l-1.51-2.48a.23.23,0,1,1,.39-.24l1.5,2.49a.22.22,0,0,1-.07.31Z" />
                    <path
                        d="M514.15,1077a1.6,1.6,0,0,1-1.35-.74,1.62,1.62,0,0,1,1.9-2.41.23.23,0,0,1-.15.43,1.17,1.17,0,0,0-1.31.37,1.16,1.16,0,0,0-.06,1.36,1.16,1.16,0,0,0,2.14-.55.23.23,0,1,1,.45,0,1.6,1.6,0,0,1-1.21,1.45A1.4,1.4,0,0,1,514.15,1077Z" />
                    <path
                        d="M517.28,1075.34a.23.23,0,0,1-.19-.11l-2.34-3.77a.23.23,0,0,1,.08-.31.22.22,0,0,1,.31.07l2.34,3.77a.23.23,0,0,1-.08.31A.16.16,0,0,1,517.28,1075.34Z" />
                    <path
                        d="M520.6,1073.23a.23.23,0,0,1-.19-.11l-1.51-2.41a.25.25,0,0,1,.07-.32.24.24,0,0,1,.32.08l1.5,2.41a.22.22,0,0,1-.07.31A.19.19,0,0,1,520.6,1073.23Z" />
                    <path
                        d="M519.4,1074.06h-.46l-.65-.16a.2.2,0,0,1-.08,0l-.53-.37a.39.39,0,0,1-.08-.1l-.15-.38-.16-.63a.2.2,0,0,1,0-.11l.15-.61.16-.47a.2.2,0,0,1,.12-.13l.53-.23h.06l.53-.08h.09l.53.15a.22.22,0,0,1,.15.28.21.21,0,0,1-.28.15l-.48-.14-.45.07-.41.17-.11.36-.14.53.14.55.12.29.44.31.56.14h.32l.43-.3.19-.32.14-.49a.23.23,0,0,1,.28-.16.23.23,0,0,1,.16.28l-.15.53,0,0-.22.38-.07.07-.52.37A.24.24,0,0,1,519.4,1074.06Z" />
                    <path
                        d="M522,1072.4a.23.23,0,0,1-.2-.11l-1.51-2.57a.23.23,0,0,1,.08-.31.23.23,0,0,1,.31.08l1.51,2.57a.23.23,0,0,1-.08.31Z" />
                    <path
                        d="M524,1071.19a.24.24,0,0,1-.2-.11l-1.11-1.78-.36-.3H522l-.44.32-.18.23-.14.85a.22.22,0,1,1-.44-.08l.15-.9a.18.18,0,0,1,0-.1l.23-.3,0,0,.53-.38a.33.33,0,0,1,.13,0h.53a.27.27,0,0,1,.15,0l.45.38,0,0,1.13,1.81a.25.25,0,0,1-.07.32Z" />
                    <path class="cls-5"
                        d="M384.94,217.9a.24.24,0,0,1-.16-.07.22.22,0,0,1,0-.32l.07-.07a.23.23,0,0,1,.32.32l-.07.07A.28.28,0,0,1,384.94,217.9Z" />
                    <path
                        d="M385,217.9a.23.23,0,0,1-.23-.21l-1.58-21.8L373.1,95.83a.21.21,0,0,1,.2-.25.24.24,0,0,1,.25.2l10.1,100.07,1.59,21.8a.23.23,0,0,1-.21.25Z" />
                    <path class="cls-5"
                        d="M545.26,1048.49a.22.22,0,0,1-.2-.12.23.23,0,0,1,.1-.31l.15-.07a.23.23,0,0,1,.31.1.22.22,0,0,1-.11.3l-.15.08Z" />
                    <path
                        d="M555.22,540a.22.22,0,0,1-.22-.17l-.23-1-5.2-22-7.39-24.42-3.92-12.9a.22.22,0,0,1,.43-.13l3.92,12.9L550,516.69l5.44,23a.23.23,0,0,1-.17.27Z" />
                    <polygon class="cls-6"
                        points="550.99 676.1 550.92 676.03 550.84 675.95 550.77 676.03 550.69 676.1 550.77 676.18 550.84 676.25 550.92 676.18 550.99 676.1" />
                    <polygon class="cls-7"
                        points="550.99 676.1 550.92 676.03 550.84 675.95 550.77 676.03 550.69 676.1 550.77 676.18 550.84 676.25 550.92 676.18 550.99 676.1" />
                    <path
                        d="M585.08,981.68h0a.23.23,0,0,1-.18-.26l.6-3.32-.45-9.83-2.19-41.32-1-6.77a.23.23,0,1,1,.45-.06l1,6.78,2.19,41.35.45,9.88-.61,3.37A.22.22,0,0,1,585.08,981.68Z" />
                    <path
                        d="M560.87,785.68a.22.22,0,0,1-.22-.22l-2.19-48.19a.22.22,0,0,1,.22-.23.2.2,0,0,1,.23.21l2.19,48.19a.23.23,0,0,1-.22.24Z" />
                    <path
                        d="M527.92,432a.23.23,0,0,1-.23-.21l-.53-8.82-.82-4.2a.21.21,0,0,1,.18-.26.22.22,0,0,1,.26.18l.83,4.22.53,8.85a.21.21,0,0,1-.21.24Z" />
                    <polygon class="cls-6"
                        points="488.18 234.71 488.1 234.64 488.02 234.56 487.95 234.64 487.87 234.71 487.95 234.79 488.02 234.87 488.1 234.79 488.18 234.71" />
                    <polygon class="cls-7"
                        points="488.18 234.71 488.1 234.64 488.02 234.56 487.95 234.64 487.87 234.71 487.95 234.79 488.02 234.87 488.1 234.79 488.18 234.71" />
                    <path
                        d="M349.34,224.08h0a.23.23,0,0,1-.23-.23l2.64-131.39L259,81.1a.23.23,0,0,1-.19-.26.21.21,0,0,1,.25-.19L352,92a.24.24,0,0,1,.2.23l-2.64,131.6A.24.24,0,0,1,349.34,224.08Z" />
                    <polygon class="cls-6"
                        points="503.41 115.34 503.33 115.26 503.26 115.19 503.18 115.26 503.11 115.34 503.18 115.41 503.26 115.49 503.33 115.41 503.41 115.34" />
                    <polygon class="cls-7"
                        points="503.41 115.34 503.33 115.26 503.26 115.19 503.18 115.26 503.11 115.34 503.18 115.41 503.26 115.49 503.33 115.41 503.41 115.34" />
                    <polygon class="cls-6"
                        points="618.03 117.52 617.96 117.45 617.88 117.37 617.81 117.45 617.73 117.52 617.81 117.6 617.88 117.67 617.96 117.6 618.03 117.52" />
                    <polygon class="cls-7"
                        points="618.03 117.52 617.96 117.45 617.88 117.37 617.81 117.45 617.73 117.52 617.81 117.6 617.88 117.67 617.96 117.6 618.03 117.52" />
                    <path
                        d="M320.31,71.22h0l-58.75-6.94a.22.22,0,0,1-.19-.25.23.23,0,0,1,.25-.2l58.74,6.94a.22.22,0,0,1,.2.25A.23.23,0,0,1,320.31,71.22Z" />
                    <path
                        d="M446.77,1108.22a.23.23,0,0,1-.11-.42l50.38-29,48.15-30.67,2.24-2.68a.22.22,0,0,1,.34.28l-2.26,2.72,0,0-48.19,30.69-50.38,29Z" />
                    <path
                        d="M593.9,99.65h0L467.51,97.31,363.62,76.12a.23.23,0,0,1,.09-.45L467.56,96.86,593.91,99.2a.23.23,0,1,1,0,.45Z" />
                    <polygon class="cls-6"
                        points="564.42 1026.7 564.34 1026.62 564.27 1026.55 564.19 1026.62 564.12 1026.7 564.19 1026.77 564.27 1026.85 564.34 1026.77 564.42 1026.7" />
                    <polygon class="cls-7"
                        points="564.42 1026.7 564.34 1026.62 564.27 1026.55 564.19 1026.62 564.12 1026.7 564.19 1026.77 564.27 1026.85 564.34 1026.77 564.42 1026.7" />
                    <path class="cls-8"
                        d="M418.42,215.63a.23.23,0,0,1-.23-.2.23.23,0,0,1,.21-.25l13.12-1,13.13-.9a.22.22,0,0,1,.24.21.23.23,0,0,1-.21.24l-13.12.9-13.12,1Z" />
                    <path
                        d="M481.39,1079a.2.2,0,0,1-.16-.07l-.15-.15a.23.23,0,1,1,.32-.32l.15.15a.22.22,0,0,1,0,.32A.21.21,0,0,1,481.39,1079Z" />
                    <path
                        d="M516.53,1059.05a.23.23,0,0,1-.23-.23v-.07a.23.23,0,0,1,.46,0v.07A.23.23,0,0,1,516.53,1059.05Z" />
                    <polygon class="cls-6"
                        points="350.25 228.83 350.17 228.76 350.09 228.68 350.02 228.76 349.94 228.83 350.02 228.91 350.09 228.98 350.17 228.91 350.25 228.83" />
                    <polygon class="cls-7"
                        points="350.25 228.83 350.17 228.76 350.09 228.68 350.02 228.76 349.94 228.83 350.02 228.91 350.09 228.98 350.17 228.91 350.25 228.83" />
                    <path
                        d="M380.79,645.86a.28.28,0,0,1-.13,0,.24.24,0,0,1-.06-.32l.15-.22a.22.22,0,0,1,.31-.07.23.23,0,0,1,.07.32l-.15.22A.23.23,0,0,1,380.79,645.86Z" />
                    <path
                        d="M380.86,648a.28.28,0,0,1-.16-.07.22.22,0,0,1,0-.32l.08-.08a.23.23,0,0,1,.32,0,.22.22,0,0,1,0,.32l-.08.08A.24.24,0,0,1,380.86,648Z" />
                    <polygon class="cls-6"
                        points="381.09 649.86 381.01 649.78 380.94 649.71 380.86 649.78 380.79 649.86 380.86 649.94 380.94 650.01 381.01 649.94 381.09 649.86" />
                    <polygon class="cls-7"
                        points="381.09 649.86 381.01 649.78 380.94 649.71 380.86 649.78 380.79 649.86 380.86 649.94 380.94 650.01 381.01 649.94 381.09 649.86" />
                    <path
                        d="M385.24,775.8a.2.2,0,0,1-.16-.07.22.22,0,0,1,0-.32l.07-.07a.23.23,0,0,1,.32.32l-.07.07A.23.23,0,0,1,385.24,775.8Z" />
                    <path
                        d="M385.31,778a.22.22,0,0,1-.22-.23v-.08a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v.08A.23.23,0,0,1,385.31,778Z" />
                    <path
                        d="M403,963.12a.22.22,0,0,1-.23-.22v-.08a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v.08A.22.22,0,0,1,403,963.12Z" />
                    <polygon class="cls-6"
                        points="426.26 985.97 426.19 985.9 426.11 985.82 426.04 985.9 425.96 985.97 426.04 986.05 426.11 986.13 426.19 986.05 426.26 985.97" />
                    <path
                        d="M418.42,1033.63a.23.23,0,0,1-.16-.06l-.3-.3a.23.23,0,0,1,.32-.32l.3.3a.22.22,0,0,1,0,.32A.25.25,0,0,1,418.42,1033.63Z" />
                    <path
                        d="M414,1013.8a.22.22,0,0,1-.2-.12l-.08-.15a.24.24,0,0,1,.1-.31.24.24,0,0,1,.31.1l.07.15a.23.23,0,0,1-.1.31Z" />
                    <path
                        d="M396.4,932.21a.17.17,0,0,1-.1,0l-.15-.07a.24.24,0,0,1-.11-.31.24.24,0,0,1,.31-.1l.15.08a.22.22,0,0,1,.1.3A.23.23,0,0,1,396.4,932.21Z" />
                    <polygon class="cls-6"
                        points="392.1 892.31 392.02 892.24 391.95 892.16 391.87 892.24 391.8 892.31 391.87 892.39 391.95 892.46 392.02 892.39 392.1 892.31" />
                    <polygon class="cls-7"
                        points="392.1 892.31 392.02 892.24 391.95 892.16 391.87 892.24 391.8 892.31 391.87 892.39 391.95 892.46 392.02 892.39 392.1 892.31" />
                    <path d="M387.41,826.34l-.07-.08a.22.22,0,0,1,0-.32" />
                    <path d="M387.41,824.15l-.22-.23a.22.22,0,0,1,0-.32" />
                    <path d="M387.41,822l-.37-.38a.23.23,0,0,1,.32-.32" />
                    <path
                        d="M378.75,462.69a.19.19,0,0,1-.1,0l-.15-.07a.23.23,0,0,1-.1-.31.23.23,0,0,1,.3-.1l.15.08a.22.22,0,0,1,.1.3A.23.23,0,0,1,378.75,462.69Z" />
                    <path class="cls-9"
                        d="M547.6,1045.78a.22.22,0,0,1-.15-.06.23.23,0,0,1,0-.32l12.44-14,9.2-10.48,8.8-14.9,3.83-6.3,3.16-18.28a.21.21,0,0,1,.26-.18.22.22,0,0,1,.18.26l-3.16,18.32,0,.08-3.85,6.34-8.82,14.93-9.23,10.51-12.44,14A.25.25,0,0,1,547.6,1045.78Z" />
                    <path
                        d="M433.43,1103.24h-.08l-4.83-1.74a.22.22,0,0,1-.14-.18l-3.7-26.32L387.13,901l-9.28-269.86-1.29-165.62L362.31,335.94,346.93,224l2.64-132a.23.23,0,0,1,.45,0l-2.64,132,15.38,111.88L377,465.53l1.28,165.63L387.57,901l37.55,173.93,3.68,26.2,4.7,1.69a.23.23,0,0,1-.07.44Z" />
                    <path
                        d="M526.56,419a.22.22,0,0,1-.22-.19L517.59,371a.22.22,0,1,1,.44-.08l8.75,47.74a.23.23,0,0,1-.18.26Z" />
                    <path class="cls-9"
                        d="M538.48,479.65a.22.22,0,0,1-.22-.16l-9.73-32.65-.84-15.06a.23.23,0,0,1,.22-.24.22.22,0,0,1,.23.22l.83,15,9.72,32.6a.22.22,0,0,1-.15.28Z" />
                    <path class="cls-9"
                        d="M557.1,662.83h0a.22.22,0,0,1-.21-.24l2.56-48.49.08-1.06V601l.23-40.49L558,552.78l-3-13a.22.22,0,0,1,.16-.27.23.23,0,0,1,.28.17l3,13,1.74,7.77L560,601v12.07l-.08,1.07-2.56,48.49A.23.23,0,0,1,557.1,662.83Z" />
                    <path class="cls-9"
                        d="M558.69,737.49a.23.23,0,0,1-.23-.22l-2.34-50.45.38-11a.21.21,0,0,1,.22-.21h0a.21.21,0,0,1,.22.23l-.38,11,2.34,50.43a.22.22,0,0,1-.21.24Z" />
                    <path class="cls-9"
                        d="M582.06,920.37a.23.23,0,0,1-.22-.2l-2.94-21.12-7.16-39.65-2.34-13-7.92-43.89-.15-3.88-.68-13.12a.22.22,0,0,1,.21-.23.24.24,0,0,1,.24.21l.68,13.12.15,3.85,7.91,43.86,2.34,13.05L579.35,899l2.94,21.13a.23.23,0,0,1-.2.25Z" />
                    <path
                        d="M471,150.18a.27.27,0,0,1-.14-.05.23.23,0,0,1,0-.32L484.9,131a.24.24,0,0,1,.15-.09l92-14.08-97.27-1.76a.23.23,0,0,1-.22-.23.21.21,0,0,1,.23-.22l99.92,1.81a.23.23,0,0,1,0,.45l-94.55,14.46-14,18.71A.21.21,0,0,1,471,150.18Z" />
                    <path
                        d="M517.74,589.15a.22.22,0,0,1-.23-.22v-3.32a.23.23,0,0,1,.18-.22.22.22,0,0,1,.26.14l1.06,2.69,1-2.69a.24.24,0,0,1,.26-.14.23.23,0,0,1,.18.22v3.24a.23.23,0,1,1-.45,0v-2l-.77,2.06a.23.23,0,0,1-.21.15h0a.23.23,0,0,1-.21-.14L518,586.8v2.13A.22.22,0,0,1,517.74,589.15Z" />
                    <path
                        d="M523.24,589.08a.22.22,0,0,1-.22-.23v-2.19a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v2.19A.23.23,0,0,1,523.24,589.08Z" />
                    <path
                        d="M522.56,589.08h-.45a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.3-.3a.24.24,0,0,1-.06-.09l-.15-.45a.2.2,0,0,1,0-.07v-.31a.2.2,0,0,1,0-.07l.15-.45a.25.25,0,0,1,0-.07l.3-.38.08-.06.3-.15.1,0h.45l.1,0,.31.15,0,0,.38.37a.23.23,0,1,1-.32.32l-.35-.35-.22-.11h-.35L522,587l-.24.3-.13.38v.23l.12.37.24.23.22.12h.35l.25-.13.34-.28a.23.23,0,1,1,.28.36l-.37.3-.35.17A.17.17,0,0,1,522.56,589.08Z" />
                    <path
                        d="M525.43,589.08h-.6l-.45-.15a.2.2,0,0,1-.13-.12l-.16-.3a.23.23,0,0,1,.41-.2l.11.22.33.11h.45l.33-.11.09-.22-.1-.18-.2-.11-.8-.14-.06,0-.3-.15a.24.24,0,0,1-.1-.1l-.16-.31a.23.23,0,0,1,0-.18l.15-.38a.2.2,0,0,1,.14-.13l.45-.15h.67l.45.15a.2.2,0,0,1,.14.13l.15.38a.22.22,0,0,1-.12.29.23.23,0,0,1-.3-.12l-.11-.28-.32-.11h-.45l-.32.11-.07.18.07.15.2.1.8.14.06,0,.3.15a.21.21,0,0,1,.1.11l.15.3a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3a.2.2,0,0,1-.13.12l-.45.15Z" />
                    <path
                        d="M527.46,586.14h0a.26.26,0,0,1-.16-.07l-.15-.15a.24.24,0,0,1,0-.32l.15-.15a.22.22,0,0,1,.32,0l.16.15a.24.24,0,0,1,0,.32l-.16.15A.24.24,0,0,1,527.46,586.14Z" />
                    <path
                        d="M526.94,590.21h-.3a.23.23,0,1,1,0-.45h.25l.24-.1.11-.32v-2.52a.23.23,0,1,1,.45,0v2.56a.17.17,0,0,1,0,.07l-.15.45a.2.2,0,0,1-.13.14l-.38.15Z" />
                    <path
                        d="M528.67,586.14a.24.24,0,0,1-.16-.07l-.15-.15a.22.22,0,0,1,0-.32l.15-.15a.22.22,0,0,1,.32,0l.15.15a.22.22,0,0,1,0,.32l-.15.15a.24.24,0,0,1-.16.07Z" />
                    <path d="M528.67,589.08a.22.22,0,0,1-.22-.23v-2a.23.23,0,1,1,.45,0v2A.23.23,0,0,1,528.67,589.08Z" />
                    <path
                        d="M531.69,589.08a.23.23,0,0,1-.23-.23v-3.24a.23.23,0,1,1,.45,0v3.24A.22.22,0,0,1,531.69,589.08Z" />
                    <path
                        d="M531,589.08h-.45a.17.17,0,0,1-.1,0l-.31-.15-.06,0-.3-.3a.41.41,0,0,1,0-.09l-.15-.45a.2.2,0,0,1,0-.07v-.37l.16-.53a.26.26,0,0,1,0-.09l.31-.3,0,0,.31-.15.1,0h.53l.38.16a.18.18,0,0,1,.08,0l.3.3a.23.23,0,1,1-.32.32l-.27-.27-.29-.12h-.36l-.22.11-.24.24-.12.44v.23l.12.37.24.23.22.12H531l.29-.12.27-.27a.23.23,0,1,1,.32.32l-.3.3-.08,0-.38.15Z" />
                    <path
                        d="M538.25,589.08h-2.19a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.59-1.58.27-.42.11-.23v-.19l-.11-.23-.09-.09-.29-.11h-.51l-.22.11-.1.09-.11.23v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3,0-.06.15-.15.06,0,.3-.15a.23.23,0,0,1,.11,0h.6l.08,0,.38.15.08.05.15.15,0,.06.15.3a.18.18,0,0,1,0,.1v.3a.16.16,0,0,1,0,.1l-.15.31-.32.47-1.22,1.24h1.64a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M517.66,593.53h-1.28a.23.23,0,0,1-.23-.23V591a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v2h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,517.66,593.53Z" />
                    <path
                        d="M522.26,592.25h-1.88a.23.23,0,0,1-.23-.23.23.23,0,0,1,.23-.23h1.88a.23.23,0,0,1,.23.23A.23.23,0,0,1,522.26,592.25Z" />
                    <path d="M522.26,592.85h-1.88a.23.23,0,1,1,0-.45h1.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M526.18,593.45a.22.22,0,0,1-.22-.22v-.46h-.83a.21.21,0,0,1-.2-.12.21.21,0,0,1,0-.23l1.06-1.51a.22.22,0,0,1,.25-.09.24.24,0,0,1,.16.22v1.28h.3a.23.23,0,1,1,0,.45h-.3v.46A.22.22,0,0,1,526.18,593.45Zm-.62-1.13h.4v-.56Z" />
                    <path
                        d="M528.75,593.45h-1.51a.23.23,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1-1.06.24-.34v-.14l0-.1-.07,0-.06,0-.09-.09h-.28l-.17.12,0,.19a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.08-.23a.41.41,0,0,1,0-.09l.08-.07.26-.18a.28.28,0,0,1,.13,0h.45a.24.24,0,0,1,.16.07l.12.12.12.06a.25.25,0,0,1,.12.13l.07.23a.17.17,0,0,1,0,.07v.23a.36.36,0,0,1,0,.1l-.08.15-.24.34-.7.69h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,528.75,593.45Z" />
                    <path
                        d="M529.88,593.45l-.36-.08a.24.24,0,0,1-.13-.09l-.15-.23a.22.22,0,0,1,.06-.31.22.22,0,0,1,.31.06l.11.15.21.06h.17l.15,0,.1-.21.06-.2-.25.07H530l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.06-.1l-.09-.43.08-.42a.31.31,0,0,1,.1-.15l.23-.15.32-.16a.19.19,0,0,1,.1,0H530l.08,0,.38.15.08,0,.15.15a.41.41,0,0,1,0,.09l.15.45h0v.65l-.16.53-.16.34a.23.23,0,0,1-.15.12l-.3.08Zm-.11-1.33.24.06h.09l.16,0,.2-.35-.1-.32-.08-.08-.28-.11-.37.21-.06.28.06.22Z" />
                    <path
                        d="M531.54,593.45a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,531.54,593.45Z" />
                    <path
                        d="M532.67,593.45a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.12A.22.22,0,0,1,532.67,593.45Z" />
                    <path
                        d="M533.8,593.45a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.22-.07h.45l.23.07a.25.25,0,0,1,.14.16l.08.3v1.12A.23.23,0,0,1,533.8,593.45Z" />
                    <path
                        d="M536,593.45h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25,0-.23,0-.1-.26-.17h-.24l-.21.16-.08.15a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08a.33.33,0,0,1,0-.13l.26-.33.26-.18a.25.25,0,0,1,.12,0h.38a.25.25,0,0,1,.12,0l.36.21a.28.28,0,0,1,.11.13l.08.23s0,.05,0,.07v.15s0,.05,0,.07l-.08.23,0,.06-.23.31-.69.69H536a.22.22,0,0,1,.22.23A.22.22,0,0,1,536,593.45Z" />
                    <path
                        d="M607,119.41a.24.24,0,0,1-.23-.19A.23.23,0,0,1,607,119l11.16-1.74a.23.23,0,0,1,.07.45l-11.16,1.74Z" />
                    <path
                        d="M677.69,108.62a.2.2,0,0,1-.15-.05.22.22,0,0,1,0-.32l10.33-11.84a.22.22,0,0,1,.32,0,.23.23,0,0,1,0,.32l-10.33,11.84A.23.23,0,0,1,677.69,108.62Z" />
                    <path
                        d="M618.19,117.67a.23.23,0,0,1,0-.45l59.5-9a.23.23,0,0,1,.26.19.23.23,0,0,1-.19.26l-59.5,9Z" />
                    <path
                        d="M634.93,99.65a.23.23,0,0,1,0-.45L668.75,94a.22.22,0,0,1,.26.19.22.22,0,0,1-.19.25L635,99.65Z" />
                    <path
                        d="M461.1,1174.2a.22.22,0,0,1-.21-.16l-12.45-40.34a.26.26,0,0,1,0-.15l6.94-18a.22.22,0,0,1,.09-.12l47.21-27.22,49.66-31.73L578,1027.38l14.13-23.84,4.37-24.77-2.72-52.89-4.07-28.56-17.27-96.07-5.28-114.5.61-21.44,2.71-52,.3-54.06-5.35-22.79-5.2-22.1-20.89-68.54s0,0,0-.06l.76-56.16L488.48,179a.17.17,0,0,1,0-.12l4.67-15,5.21-12.16a.22.22,0,0,1,.07-.09l7.84-6.48.05,0,10.71-5,.05,0,86.92-16,2.82-5.11a.22.22,0,1,1,.39.22l-2.86,5.2a.24.24,0,0,1-.16.12l-87,16-10.65,4.95L498.77,152l-5.18,12.09L488.94,179,540.5,389.48a.13.13,0,0,1,0,.06l-.75,56.15,20.88,68.51,5.2,22.11,5.36,22.85-.3,54.13-2.71,52-.61,21.41,5.28,114.46,17.27,96,4.07,28.59,2.72,53-4.38,24.86a.13.13,0,0,1,0,.08l-14.17,23.9-25.67,29.15,0,0-49.69,31.75-47.15,27.18-6.88,17.88,12.42,40.27a.23.23,0,0,1-.15.28Z" />
                    <polygon class="cls-6"
                        points="550.99 676.1 550.92 676.03 550.84 675.95 550.77 676.03 550.69 676.1 550.77 676.18 550.84 676.25 550.92 676.18 550.99 676.1" />
                    <path
                        d="M556.72,676h0a.23.23,0,0,1-.22-.23l.38-13.2a.22.22,0,0,1,.22-.22h0a.23.23,0,0,1,.22.23l-.38,13.2A.22.22,0,0,1,556.72,676Z" />
                    <path
                        d="M446.77,1108.22l-.08,0-13.34-5a.24.24,0,0,1-.14-.3.24.24,0,0,1,.29-.13l13.35,5a.23.23,0,0,1,.14.29A.24.24,0,0,1,446.77,1108.22Z" />
                    <path
                        d="M347.15,224.23h0a.21.21,0,0,1-.22-.23l2.64-132a.23.23,0,0,1,.45,0l-2.64,132A.22.22,0,0,1,347.15,224.23Z" />
                    <path
                        d="M365,218.88h0a.22.22,0,0,1-.21-.23l2.33-123.84a.21.21,0,0,1,.2-.21.2.2,0,0,1,.2.22l-2.32,123.84A.21.21,0,0,1,365,218.88Z" />
                    <path
                        d="M362.54,336.14a.24.24,0,0,1-.23-.19L346.93,224a.23.23,0,1,1,.45-.07l15.38,111.92a.22.22,0,0,1-.19.25Z" />
                    <path
                        d="M364.65,335.92a.22.22,0,0,1-.22-.2L349.12,223.89a.23.23,0,0,1,.19-.26.21.21,0,0,1,.25.19l15.31,111.84a.23.23,0,0,1-.19.26Z" />
                    <path
                        d="M379,465.7a.23.23,0,0,1-.23-.2L364.42,335.64a.24.24,0,0,1,.2-.25.22.22,0,0,1,.25.2L379.2,465.45a.21.21,0,0,1-.2.25Z" />
                    <path
                        d="M378.07,631.38a.22.22,0,0,1-.22-.22l-1.29-165.61a.22.22,0,0,1,.23-.22h0a.23.23,0,0,1,.23.22l1.28,165.61a.22.22,0,0,1-.23.22Z" />
                    <path
                        d="M380.26,631.31a.23.23,0,0,1-.23-.23l-1.28-165.6a.23.23,0,0,1,.23-.23.23.23,0,0,1,.22.22l1.29,165.61a.23.23,0,0,1-.23.23Z" />
                    <path
                        d="M387.35,901.21a.24.24,0,0,1-.23-.22l-9.27-269.82a.22.22,0,0,1,.21-.24h0a.24.24,0,0,1,.23.22L387.57,901a.22.22,0,0,1-.21.23Z" />
                    <path
                        d="M386.44,810.64a.22.22,0,0,1-.22-.22L380,631.17a.24.24,0,0,1,.22-.24h0a.24.24,0,0,1,.23.22l6.18,179.26a.22.22,0,0,1-.22.23Z" />
                    <path
                        d="M424.9,1075.19a.24.24,0,0,1-.22-.18L387.13,901a.22.22,0,1,1,.44-.09l37.55,174a.22.22,0,0,1-.17.27Z" />
                    <path
                        d="M427.09,1074.81a.22.22,0,0,1-.22-.18L393.69,920.87a.22.22,0,0,1,.17-.27.23.23,0,0,1,.27.17l33.18,153.77a.21.21,0,0,1-.17.26Z" />
                    <path
                        d="M433.43,1103.24h-.08l-4.83-1.74a.21.21,0,0,1-.13-.29.22.22,0,0,1,.29-.13l4.82,1.73a.23.23,0,0,1-.07.44Z" />
                    <path
                        d="M441.27,1103.84h-.08l-10.71-4a.21.21,0,0,1-.13-.29.22.22,0,0,1,.29-.13l10.71,4a.23.23,0,0,1,.13.29A.22.22,0,0,1,441.27,1103.84Z" />
                    <path
                        d="M472.56,235.92a.23.23,0,0,1-.22-.21l-1.66-24a.22.22,0,0,1,.21-.24l11.16-1a.22.22,0,0,1,.24.2.23.23,0,0,1-.2.25l-10.94,1,1.64,23.76a.23.23,0,0,1-.21.24Z" />
                    <polygon class="cls-6"
                        points="488.18 234.71 488.1 234.64 488.02 234.56 487.95 234.64 487.87 234.71 487.95 234.79 488.02 234.87 488.1 234.79 488.18 234.71" />
                    <polygon class="cls-6"
                        points="557.78 715.17 557.71 715.09 557.63 715.02 557.55 715.09 557.48 715.17 557.55 715.24 557.63 715.32 557.71 715.24 557.78 715.17" />
                    <polygon class="cls-7"
                        points="557.78 715.17 557.71 715.09 557.63 715.02 557.55 715.09 557.48 715.17 557.55 715.24 557.63 715.32 557.71 715.24 557.78 715.17" />
                    <polygon class="cls-6"
                        points="556.73 691.03 556.65 690.96 556.57 690.88 556.5 690.96 556.42 691.03 556.5 691.11 556.57 691.19 556.65 691.11 556.73 691.03" />
                    <polygon class="cls-7"
                        points="556.73 691.03 556.65 690.96 556.57 690.88 556.5 690.96 556.42 691.03 556.5 691.11 556.57 691.19 556.65 691.11 556.73 691.03" />
                    <polygon class="cls-6"
                        points="557.78 715.17 557.71 715.09 557.63 715.02 557.55 715.09 557.48 715.17 557.55 715.24 557.63 715.32 557.71 715.24 557.78 715.17" />
                    <polygon class="cls-7"
                        points="557.78 715.17 557.71 715.09 557.63 715.02 557.55 715.09 557.48 715.17 557.55 715.24 557.63 715.32 557.71 715.24 557.78 715.17" />
                    <polygon class="cls-6"
                        points="552.2 1040.5 552.13 1040.42 552.05 1040.35 551.97 1040.42 551.9 1040.5 551.97 1040.57 552.05 1040.65 552.13 1040.57 552.2 1040.5" />
                    <polygon class="cls-7"
                        points="552.2 1040.5 552.13 1040.42 552.05 1040.35 551.97 1040.42 551.9 1040.5 551.97 1040.57 552.05 1040.65 552.13 1040.57 552.2 1040.5" />
                    <path
                        d="M557.1,662.83h0a.22.22,0,0,1-.21-.24l1.66-31.29a.21.21,0,0,1,.23-.22.24.24,0,0,1,.22.24l-1.66,31.3A.23.23,0,0,1,557.1,662.83Z" />
                    <path
                        d="M556.35,687h0a.23.23,0,0,1-.22-.24l.38-11a.21.21,0,0,1,.22-.21h0a.21.21,0,0,1,.22.23l-.38,11A.22.22,0,0,1,556.35,687Z" />
                    <path
                        d="M558.69,737.49a.23.23,0,0,1-.23-.22l-2.34-50.45a.22.22,0,0,1,.22-.23.21.21,0,0,1,.23.21l2.34,50.45a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M582.06,920.37a.23.23,0,0,1-.22-.2l-2.94-21.12-2.79-15.3-6.71-37.4-7.92-43.89-.83-17a.22.22,0,0,1,.21-.23.22.22,0,0,1,.24.21l.83,17,7.91,43.86,6.72,37.4L579.35,899l2.94,21.13a.23.23,0,0,1-.2.25Z" />
                    <path
                        d="M547.6,1045.78a.22.22,0,0,1-.15-.06.23.23,0,0,1,0-.32l21.64-24.51,12.63-21.2,3.16-18.28a.21.21,0,0,1,.26-.18.22.22,0,0,1,.18.26l-3.16,18.32,0,.08-12.67,21.27-21.67,24.54A.25.25,0,0,1,547.6,1045.78Z" />
                    <path
                        d="M558.76,631.54h0a.21.21,0,0,1-.21-.23l1-18.25V601l.23-40.49L555,539.81a.22.22,0,0,1,.17-.27.23.23,0,0,1,.27.17l4.75,20.74L560,601v12.07l-1,18.26A.24.24,0,0,1,558.76,631.54Z" />
                    <path
                        d="M538.48,479.65a.22.22,0,0,1-.22-.16l-9.73-32.65-.84-15.06a.23.23,0,0,1,.22-.24.22.22,0,0,1,.23.22l.83,15,9.72,32.6a.22.22,0,0,1-.15.28Z" />
                    <path
                        d="M564.27,1026.92a.19.19,0,0,1-.16-.07s0,0-.05-.07a.19.19,0,0,1,0-.08.29.29,0,0,1,0-.09.18.18,0,0,1,.05-.08.24.24,0,0,1,.32,0s0,0,0,.08a.15.15,0,0,1,0,.09.12.12,0,0,1,0,.08.08.08,0,0,1,0,.07A.2.2,0,0,1,564.27,1026.92Z" />
                    <path
                        d="M393.91,921a.23.23,0,0,1-.23-.21l-4.14-62.06a.22.22,0,0,1,.21-.24.23.23,0,0,1,.24.21l4.15,62.06a.23.23,0,0,1-.22.24Z" />
                    <path
                        d="M389.76,859a.21.21,0,0,1-.22-.21l-3.32-48.34a.23.23,0,0,1,.45,0L390,858.74a.23.23,0,0,1-.21.24Z" />
                    <path
                        d="M370.15,235l-.09,0a.22.22,0,0,1-.11-.3l.9-1.86H369.7a.22.22,0,0,1-.22-.23.22.22,0,0,1,.22-.22h1.51a.23.23,0,0,1,.19.1.22.22,0,0,1,0,.22l-1.05,2.19A.23.23,0,0,1,370.15,235Z" />
                    <path
                        d="M372.64,235h-.22a.17.17,0,0,1-.1,0l-.31-.15a.27.27,0,0,1-.08-.07l-.22-.3a.19.19,0,0,1,0-.1l-.07-.53v-.33l.07-.56a.22.22,0,0,1,0-.11l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.26.26,0,0,1,.13.08l.22.3a.21.21,0,0,1,0,.11l.08.53v.33l-.08.56a.18.18,0,0,1,0,.1l-.22.3-.08.07-.31.15A.17.17,0,0,1,372.64,235Zm-.17-.46h.12l.21-.1.15-.21.07-.47v-.27l-.06-.44-.15-.19-.22-.06h-.14l-.2,0-.15.19-.06.47v.27l.06.44.16.21Z" />
                    <path
                        d="M374,235a.24.24,0,0,1-.23-.23v-1.51a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,374,235Z" />
                    <path
                        d="M375.13,235a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.33.33,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,375.13,235Z" />
                    <path
                        d="M376.26,235a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,376.26,235Z" />
                    <path
                        d="M378.45,235H377a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.19-.24,0-.16V233l0-.11-.06,0-.06,0-.07-.07-.48.1,0,0-.08.15a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22V233a.28.28,0,0,1,0-.13l.26-.33a.15.15,0,0,1,.09-.06l.22-.07.49-.09a.25.25,0,0,1,.2.07l.12.12.12.06a.24.24,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.2.2,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,0,1,.23.23A.24.24,0,0,1,378.45,235Z" />
                    <path
                        d="M383.43,234.11l-.36-.08A.24.24,0,0,1,383,234l-.22-.23a.2.2,0,0,1-.06-.09l-.15-.45h0a.13.13,0,0,1,0-.06v-.53a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.38.38,0,0,1,.13-.09l.3-.07h.28l.36.08a.24.24,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.21.21,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17.05-.15.21-.07.21h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.31v.2l-.08.36a.21.21,0,0,1-.06.1L384,234a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.21,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.21.05-.16.16-.09.19.11.31Z" />
                    <path
                        d="M385.46,234.11l-.35-.08a.21.21,0,0,1-.14-.1l-.15-.22a.14.14,0,0,1,0-.06l-.15-.45h0s0,0,0-.07v-.53s0,0,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.22-.05h-.17l-.14,0-.11.22,0,.19.25-.06h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.16-.5.22,0h.09l.19,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06h-.1l-.16.05-.2.35.12.33Z" />
                    <path
                        d="M387,234.11a.22.22,0,0,1-.22-.23v-1.43a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.43A.23.23,0,0,1,387,234.11Z" />
                    <path
                        d="M388.1,234.11a.22.22,0,0,1-.22-.23v-1l0-.13-.08,0h-.22l-.15,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,388.1,234.11Z" />
                    <path
                        d="M389.23,234.11a.22.22,0,0,1-.22-.23v-1l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.22.22,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,389.23,234.11Z" />
                    <path
                        d="M391.42,234.11H390a.23.23,0,0,1-.16-.39l1.05-1.05.19-.25.05-.16v-.13l0-.07L391,232l-.14-.05h-.31l-.1,0,0,.07a.12.12,0,0,1-.05.05l-.08.09v.06a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.16a.25.25,0,0,1,.06-.16l.13-.12.06-.12a.21.21,0,0,1,.13-.11l.22-.08H391l.23.08.09.05.15.15,0,.06.08.15a.36.36,0,0,1,0,.1v.23a.15.15,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.23.3-.69.7h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M396.55,233.13l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.12.12,0,0,1,.08-.06l.3-.16.1,0h.22l.11,0,.3.16a.19.19,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.19-.1h-.12l-.2.11-.16.21,0,.21.24-.13.1,0h.07l.09,0,.38.15.07,0,.15.15,0,.06.15.3a.17.17,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.16.3-.16.25a.23.23,0,0,1-.14.1Zm-.19-.51.24.06.26-.05.1-.15.12-.28L397,232l-.1-.09-.28-.11-.37.2-.05.26.06.25Z" />
                    <path
                        d="M398.66,233.13l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.19.19,0,0,1-.05-.09l-.15-.45a.11.11,0,0,1,0-.08v-.5l.15-.53,0-.06.22-.37a.29.29,0,0,1,.14-.11l.31-.07h.2l.42.08a.22.22,0,0,1,.17.15l.08.23a.23.23,0,0,1-.43.14l0-.1-.24-.05h-.11l-.15.05-.17.27-.06.23.28-.15.1,0h.08l.1,0,.3.16.25.16a.2.2,0,0,1,.09.13l.08.3v.21l-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2-.05.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.22-.08.17.1.31Z" />
                    <path
                        d="M400.09,233.13a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,400.09,233.13Z" />
                    <path
                        d="M401.22,233.13a.22.22,0,0,1-.22-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,401.22,233.13Z" />
                    <path
                        d="M402.43,233.13a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07.07,0h.3l.08,0,.22.07a.2.2,0,0,1,.13.12l.15.3a.17.17,0,0,1,0,.1v1.05A.23.23,0,0,1,402.43,233.13Z" />
                    <path
                        d="M404.62,233.13h-1.51a.23.23,0,0,1-.21-.14.24.24,0,0,1,.05-.25l1.06-1.05.18-.25.05-.23-.05-.14-.15-.13h-.37l-.1,0-.08.27a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.07l.16-.41a.24.24,0,0,1,.13-.11l.23-.08h.52l.1,0,.15.08.06,0,.15.15a.24.24,0,0,1,.06.09l.07.23a.17.17,0,0,1,0,.07v.15a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,404.62,233.13Z" />
                    <path
                        d="M409.67,232.23l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.13-.12-.22-.11h-.12l-.2.1-.16.21,0,.21.24-.12a.18.18,0,0,1,.1,0h.15a.16.16,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.19-.51.25.06h.09l.18-.05.14-.14.06-.24-.05-.2L410,231l-.27-.11-.22.11-.15.15-.05.21.05.25Z" />
                    <path
                        d="M411.78,232.23l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0H412a.18.18,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.24.24,0,0,1-.31-.11l0-.08L412,230h-.11l-.21.1-.16.21,0,.21.24-.12a.18.18,0,0,1,.1,0h.08a.18.18,0,0,1,.1,0l.3.15.06,0,.23.23,0,.06.15.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.15.1-.21-.1-.21L412,231l-.2-.1-.21.1-.15.15,0,.21,0,.25Z" />
                    <path
                        d="M413.21,232.23A.23.23,0,0,1,413,232v-1.43a.23.23,0,1,1,.45,0V232A.23.23,0,0,1,413.21,232.23Z" />
                    <path
                        d="M414.42,232.23a.23.23,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.13.05-.26.32a.22.22,0,1,1-.35-.28l.3-.38a.21.21,0,0,1,.11-.07l.22-.08h.45l.22.08a.21.21,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1V232A.23.23,0,0,1,414.42,232.23Z" />
                    <path
                        d="M415.55,232.23a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.27l-.07,0-.28.27a.23.23,0,1,1-.32-.32l.3-.3.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1V232A.23.23,0,0,1,415.55,232.23Z" />
                    <path
                        d="M417.74,232.23h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.23-.34v-.14l-.08-.18-.13-.08h-.3l-.08.08-.06,0-.07,0,0,.14a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.07-.22a.2.2,0,0,1,.12-.13l.11-.06.13-.13a.23.23,0,0,1,.16-.06h.45a.28.28,0,0,1,.13,0l.33.26a.15.15,0,0,1,.06.09l.07.22a.2.2,0,0,1,0,.07v.23a.16.16,0,0,1,0,.1l-.07.15-.25.34-.69.69h1a.23.23,0,0,1,.23.23A.24.24,0,0,1,417.74,232.23Z" />
                    <path
                        d="M422.94,231.4h-.07l-.09,0-.37-.15-.08,0-.15-.15a.41.41,0,0,1-.05-.09l-.16-.45h0s0,0,0-.07v-.52s0,0,0-.06l.15-.53.17-.34a.2.2,0,0,1,.15-.12l.3-.08H423l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.14,0-.11.21-.05.2.45-.07.36.08a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.24.24,0,0,1-.09.15l-.23.15-.33.16A.17.17,0,0,1,422.94,231.4Zm-.32-.57.28.11.37-.21.05-.28-.05-.22-.14-.14-.24-.06-.26.06-.2.34.11.32Z" />
                    <path
                        d="M425.05,231.4h-.15a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.18-.05h-.18l-.16,0-.15.2,0,.21.29-.07h.2l.36.08a.21.21,0,0,1,.13.09l.15.23.17.32a.22.22,0,0,1,0,.11v.07l-.08.42a.24.24,0,0,1-.09.15l-.23.15-.32.16A.23.23,0,0,1,425.05,231.4Zm-.09-.46h0l.38-.21.05-.26-.21-.38L425,230h-.1l-.18.05-.14.14-.05.2.05.3.15.1Z" />
                    <path
                        d="M426.41,231.4a.23.23,0,0,1-.22-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,426.41,231.4Z" />
                    <path
                        d="M427.54,231.4a.23.23,0,0,1-.22-.23v-1l-.17-.28H427l-.39.38a.23.23,0,1,1-.32-.32l.45-.45a.26.26,0,0,1,.16-.07h.38a.24.24,0,0,1,.16.07l.15.15a.21.21,0,0,1,0,.06l.16.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,427.54,231.4Z" />
                    <path
                        d="M428.67,231.4a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16L428,230l-.27.27a.23.23,0,1,1-.32-.32l.3-.3.27-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,428.67,231.4Z" />
                    <path
                        d="M430.86,231.4h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-1,.26-.46v-.09l-.11-.17-.15,0H430l-.22.08,0,.14a.23.23,0,1,1-.45,0v-.07a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.15-.07.25-.09h.52l.23.07a.24.24,0,0,1,.09.06l.07.07.18.26a.22.22,0,0,1,0,.13v.23a.19.19,0,0,1,0,.12l-.15.23-.13.27a.1.1,0,0,1-.05.06l-.67.67h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,430.86,231.4Z" />
                    <path
                        d="M435.91,230.42l-.35-.09a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.06-.09l-.15-.45a.22.22,0,0,1,0-.08v-.52a.15.15,0,0,1,0-.07l.15-.46.25-.42a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18-.05h-.18l-.15,0-.18.3,0,.12h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24v-.1l-.05-.18-.14-.14-.25-.06-.2.06-.16.16-.09.18.1.32Z" />
                    <path
                        d="M438,230.42l-.36-.09a.2.2,0,0,1-.13-.09l-.15-.23,0,0-.15-.45a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.21.21,0,0,1,.14-.12l.31-.08h.28l.35.08a.26.26,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06H438l-.14,0-.11.21-.05.19.25-.06h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.16-.5.22.05h.09l.18-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06H438l-.16,0-.1.16-.1.19.11.34Z" />
                    <path
                        d="M439.46,230.42a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,439.46,230.42Z" />
                    <path
                        d="M440.59,230.42a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0H440l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.22-.08h.45l.23.08a.21.21,0,0,1,.14.16l.08.3v1.11A.24.24,0,0,1,440.59,230.42Z" />
                    <path
                        d="M441.72,230.42a.24.24,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23L441,229l-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,441.72,230.42Z" />
                    <path
                        d="M443.91,230.42h-1.44a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1.06.18-.24.06-.16v-.14l0-.07-.09-.08-.14-.05H443l-.1,0,0,.07,0,.06-.08.08v.06a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.24.24,0,0,1,.07-.16l.13-.13.05-.11a.25.25,0,0,1,.13-.12l.23-.07h.52l.23.07a.24.24,0,0,1,.09.06l.15.15,0,.06.07.15a.17.17,0,0,1,0,.1v.23s0,0,0,.07l-.08.22,0,.07-.23.3L443,230h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,443.91,230.42Z" />
                    <path
                        d="M449,229.51l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.38a.14.14,0,0,1,0-.09v-.48l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.16.16,0,0,1,.08-.06l.3-.16.11,0h.22l.1,0,.3.16a.21.21,0,0,1,.11.1l.07.15a.22.22,0,1,1-.4.2l-.05-.08-.18-.1h-.12l-.21.11-.16.21,0,.21.24-.13.11,0h.07l.09,0,.37.15.08,0,.15.15.05.07.15.38a.29.29,0,0,1,0,.09v.07a.17.17,0,0,1,0,.1l-.15.3-.16.25a.25.25,0,0,1-.15.1Zm-.19-.51.24.06.26-.05.1-.15.11-.22-.11-.28-.09-.09-.28-.11-.37.2,0,.26,0,.25Z" />
                    <path
                        d="M451.15,229.51l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23,0-.07-.15-.38a.29.29,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53.17-.34a.19.19,0,0,1,.12-.11l.37-.15.09,0h.15l.08,0,.38.15a.25.25,0,0,1,.12.11l.07.15a.22.22,0,1,1-.4.2l0-.07-.32-.11-.26.11-.11.22-.06.22.29-.15.1,0h.07l.1,0,.31.16.25.16a.24.24,0,0,1,.09.13l.08.31v.2L452,229a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06ZM451,229l.24.06.21-.05.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.22-.09.23.1.25Z" />
                    <path
                        d="M452.58,229.51a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.46,0v1.43A.23.23,0,0,1,452.58,229.51Z" />
                    <path
                        d="M453.71,229.51a.22.22,0,0,1-.22-.23v-1.05l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,453.71,229.51Z" />
                    <path
                        d="M454.92,229.51a.23.23,0,0,1-.23-.21l-.11-1.2-.08,0h-.22l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3.08,1.1a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M457.1,229.51h-1.5a.23.23,0,0,1-.16-.39l1.05-1.05.19-.25.05-.23-.05-.14-.16-.13h-.36l-.1,0-.09.26a.23.23,0,1,1-.45,0v-.07s0-.05,0-.07l.17-.41a.21.21,0,0,1,.13-.11l.22-.08h.53l.1,0,.15.08.06,0,.15.15a.41.41,0,0,1,0,.09l.08.23a.15.15,0,0,1,0,.07v.15a.17.17,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M463,228.61h-.15l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.18.18,0,0,1-.06-.13l-.08-.44v-.57l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.15-.21-.06h-.17l-.17.05-.15.19,0,.21.29-.07H463l.35.08a.24.24,0,0,1,.11.06l.23.22a.37.37,0,0,1,.05.11l.08.3v.21l-.09.35a.22.22,0,0,1-.09.14l-.23.15-.32.16A.19.19,0,0,1,463,228.61Zm-.34-.51.24.06h0l.4-.22.05-.22v-.1l-.05-.18-.14-.14-.24-.06h-.09l-.19.05-.14.14-.05.2.06.33Z" />
                    <path
                        d="M465,228.61H465a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18-.05H465l-.17.05-.14.19,0,.21.41-.07.36.08a.24.24,0,0,1,.11.06l.22.22a.21.21,0,0,1,0,.06l.15.3a.19.19,0,0,1,0,.1v.16a.19.19,0,0,1,0,.1l-.15.3a.28.28,0,0,1-.07.09l-.23.15-.33.16A.17.17,0,0,1,465,228.61Zm-.39-.67.14.1.22.11.39-.23.1-.24-.11-.22-.16-.16-.24-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M466.38,228.61a.24.24,0,0,1-.23-.23v-1.51a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,466.38,228.61Z" />
                    <path
                        d="M467.59,228.61a.23.23,0,0,1-.23-.23v-1l-.1-.2-.12-.08H467l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.33.33,0,0,1,.13,0l.22.15.08.09.15.3a.18.18,0,0,1,0,.1v1.06A.23.23,0,0,1,467.59,228.61Z" />
                    <path
                        d="M468.72,228.61a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.19l-.38.38a.23.23,0,0,1-.32-.32l.45-.45a.24.24,0,0,1,.16-.07h.38a.26.26,0,0,1,.16.07l.15.15,0,.06.15.3a.18.18,0,0,1,0,.1v1.06A.23.23,0,0,1,468.72,228.61Z" />
                    <path
                        d="M470.91,228.61H469.4a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.19-.24,0-.16v-.15l0-.14-.14-.05H470l-.17.08,0,.11v.11a.23.23,0,1,1-.45,0v-.15s0,0,0-.07l.08-.23a.24.24,0,0,1,.11-.13l.3-.15a.22.22,0,0,1,.11,0h.52l.23.07a.16.16,0,0,1,.08.06l.08.07a.41.41,0,0,1,.05.09l.08.23a.17.17,0,0,1,0,.07v.23a.2.2,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,470.91,228.61Z" />
                    <path
                        d="M390.29,273.17l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.27.27,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0h.23l.35.09a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.1-.18,0h-.11l-.21.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07a.23.23,0,0,1,.11,0l.3.15.25.16.08.09.15.3a.36.36,0,0,1,0,.1v.15a.43.43,0,0,1,0,.11l-.15.3-.17.25a.22.22,0,0,1-.14.09Zm-.19-.5.24.06.26-.06.1-.15.12-.27-.1-.2-.18-.12-.21-.11L390,272l-.06.25.06.25Z" />
                    <path
                        d="M392.4,273.17l-.42-.08a.19.19,0,0,1-.14-.09l-.16-.23a.08.08,0,0,1,0,0l-.15-.45h0v-.57l.16-.53.15-.4a.21.21,0,0,1,.17-.13l.38-.08h.19l.42.09a.2.2,0,0,1,.17.15l.08.22a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.25,0h-.11l-.21,0-.16.47.29-.12.08,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.22.22,0,0,1,.09.14l.08.3v.2l-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.24-.5.29.06.21-.06.14-.14.06-.24v-.1l0-.16-.16-.1-.22-.11-.28.11-.09.1-.09.18.11.34Z" />
                    <path
                        d="M393.83,273.17a.22.22,0,0,1-.22-.22v-1.43a.23.23,0,1,1,.45,0V273A.22.22,0,0,1,393.83,273.17Z" />
                    <path
                        d="M395,273.17a.22.22,0,0,1-.23-.22v-1.06l0-.12-.07,0h-.23l-.14.05-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3V273A.22.22,0,0,1,395,273.17Z" />
                    <path
                        d="M396.1,273.17a.22.22,0,0,1-.23-.22v-1.06l0-.12-.07,0h-.23l-.14.05-.26.26a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.3a.19.19,0,0,1,.09-.05l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3V273A.22.22,0,0,1,396.1,273.17Z" />
                    <path
                        d="M398.36,273.17h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.23-.05-.14-.15-.12h-.37l-.1,0-.08.27a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.25.25,0,0,1,0-.07l.16-.4a.22.22,0,0,1,.13-.12l.23-.07.07,0h.45a.17.17,0,0,1,.1,0l.15.07.06.05.15.15a.15.15,0,0,1,.06.09l.07.22a.2.2,0,0,1,0,.07v.15a.22.22,0,0,1,0,.08l-.07.22a.25.25,0,0,1,0,.07l-.22.3-.69.69h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,398.36,273.17Z" />
                    <path
                        d="M403.34,272.19l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.22a.23.23,0,0,1-.06-.12l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.23.23,0,0,1,.11,0h.22a.17.17,0,0,1,.1,0l.3.15a.18.18,0,0,1,.09.08l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.21.1-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.15a.19.19,0,0,1,.1,0l.3.15.06,0,.22.23a.21.21,0,0,1,.06.1l.09.43-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.19-.5.24.06h.1l.18-.05.14-.14.06-.24-.06-.2-.16-.16-.26-.11-.22.11-.16.15-.05.2.06.25Z" />
                    <path
                        d="M405.45,272.19l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.22-.3.08-.07.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15a.24.24,0,0,1,.11.13l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.14-.17-.08h-.12l-.21.1-.15.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07a.17.17,0,0,1,.1,0l.31.15a.1.1,0,0,1,.05,0l.23.23a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v.07a.23.23,0,0,1,0,.11l-.15.3a.21.21,0,0,1,0,.06l-.23.22a.17.17,0,0,1-.1.06Zm-.19-.5.24.06.21-.06.15-.16.11-.2-.11-.21-.17-.17-.21-.11-.2.11-.16.15-.05.2.06.25Z" />
                    <path
                        d="M406.88,272.19a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22V272A.22.22,0,0,1,406.88,272.19Z" />
                    <path
                        d="M408.09,272.19a.23.23,0,0,1-.23-.2l-.07-1-.05-.22-.07,0h-.23l-.12,0-.26.33a.23.23,0,0,1-.36-.28l.31-.38a.14.14,0,0,1,.1-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.37.08,1a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M409.22,272.19A.22.22,0,0,1,409,272V271l-.13-.27h-.27l-.07,0-.35.35a.23.23,0,1,1-.32-.32l.38-.38.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.11.12l.15.37a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,409.22,272.19Z" />
                    <path
                        d="M411.4,272.19h-1.5a.21.21,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.25-.43v-.14l-.09-.18-.13-.08h-.29l-.09.08a.09.09,0,0,1-.06,0l-.06,0,0,.14a.23.23,0,1,1-.45,0v-.08s0,0,0-.07l.08-.22a.26.26,0,0,1,.11-.14l.12-.05.12-.13a.26.26,0,0,1,.16-.07h.46a.25.25,0,0,1,.12,0l.34.26a.19.19,0,0,1,.05.09l.08.22a.2.2,0,0,1,0,.07v.23a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,0-.64.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M416.61,271.36h-.15a.16.16,0,0,1-.1,0l-.31-.15-.05,0-.15-.15a.24.24,0,0,1-.06-.09l-.15-.45a.22.22,0,0,1,0-.08v-.52l.08-.56a.21.21,0,0,1,0-.11l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.16-.22-.05h-.17l-.17,0-.14.2,0,.21.29-.07h.21l.35.09a.24.24,0,0,1,.11.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.25.25,0,0,1-.1.15l-.22.15-.33.16A.18.18,0,0,1,416.61,271.36Zm-.1-.45h.05l.37-.21.06-.28-.06-.22-.14-.14-.24-.06h-.09l-.16,0-.2.35.1.31.09.09Z" />
                    <path
                        d="M418.72,271.36h-.15a.16.16,0,0,1-.1,0l-.3-.15-.25-.16a.21.21,0,0,1-.1-.16l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.08a.21.21,0,0,1,.16.14l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.1-.18-.05h-.17l-.17,0-.14.2,0,.21.41-.08.43.08a.28.28,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.05.08l-.15.15-.06,0-.3.15A.16.16,0,0,1,418.72,271.36Zm-.1-.45h.05l.22-.11.09-.09.11-.28-.2-.37-.29-.06-.21.06-.14.14-.06.2.06.3.14.1Z" />
                    <path
                        d="M420.08,271.36a.23.23,0,0,1-.23-.21l-.07-1.51a.23.23,0,0,1,.21-.24.24.24,0,0,1,.24.22l.07,1.51a.22.22,0,0,1-.21.23Z" />
                    <path
                        d="M421.21,271.36a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.19l-.08.08-.4.32a.22.22,0,0,1-.28-.35l.51-.44a.24.24,0,0,1,.16-.07h.38a.26.26,0,0,1,.16.07l.15.15,0,.06.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,421.21,271.36Z" />
                    <path
                        d="M422.34,271.36a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.06h-.17l-.16.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.19.19,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,422.34,271.36Z" />
                    <path
                        d="M424.53,271.36h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1.05.32-.44v-.09l-.12-.17-.15-.05h-.3l-.23.08,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0-.05,0-.07L423,269a.24.24,0,0,1,.11-.13l.15-.08.26-.08h.52l.23.07a.24.24,0,0,1,.09.06l.07.07.18.26a.28.28,0,0,1,0,.13v.22a.28.28,0,0,1,0,.13l-.38.54-.65.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,424.53,271.36Z" />
                    <path
                        d="M429.65,270.46l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08V269a.13.13,0,0,1,0-.06l.15-.53.17-.34a.2.2,0,0,1,.15-.12l.38-.08h.2l.42.08a.23.23,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.22.05-.1.2-.06.2.46-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.27,0-.19.35.1.31Z" />
                    <path
                        d="M431.69,270.46l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.19.19,0,0,1,0-.08V269l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09l.31-.07h.28l.35.08a.24.24,0,0,1,.14.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.22-.05h-.17l-.17.05-.14.19,0,.22.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07Zm-.19-.51.25.06h.09L432,270l.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.21.05.32Z" />
                    <path
                        d="M433.2,270.46a.23.23,0,0,1-.23-.23V268.8a.23.23,0,0,1,.23-.23.24.24,0,0,1,.23.23v1.43A.23.23,0,0,1,433.2,270.46Z" />
                    <path
                        d="M434.33,270.46a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.14,0-.26.27A.23.23,0,0,1,433,269l.3-.3a.24.24,0,0,1,.09-.06l.23-.07.07,0h.3l.07,0,.23.07a.22.22,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,434.33,270.46Z" />
                    <path
                        d="M435.46,270.46a.22.22,0,0,1-.22-.23v-1.05l0-.13-.08,0h-.22l-.15,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,435.46,270.46Z" />
                    <path
                        d="M437.65,270.46h-1.43a.22.22,0,0,1-.21-.14.22.22,0,0,1,.05-.25l1-1,.26-.46v-.06l-.09-.09a.15.15,0,0,1,0-.06l0-.06-.11,0h-.3l-.1,0,0,.06a.09.09,0,0,1,0,.06l-.08.09v.05a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.26.26,0,0,1,.07-.16l.13-.12.05-.12a.26.26,0,0,1,.14-.11l.22-.08h.52l.23.08a.24.24,0,0,1,.13.11l.06.12.12.12a.21.21,0,0,1,.07.16v.23a.17.17,0,0,1,0,.12l-.15.23-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,437.65,270.46Z" />
                    <path
                        d="M442.7,269.48l-.36-.08a.27.27,0,0,1-.1-.06l-.23-.23A.24.24,0,0,1,442,269l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.27.27,0,0,1,.1.11l.08.15a.23.23,0,0,1-.41.2l0-.08-.19-.1h-.12l-.2.11-.16.21,0,.2.24-.12.1,0h.08l.1,0,.3.15.25.17a.16.16,0,0,1,.08.1l.16.38a.25.25,0,0,1,0,.08v.08a.36.36,0,0,1,0,.1l-.15.3-.05.06-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2,0,.16-.16.1-.21-.1-.26-.17-.12-.21-.1-.36.2-.05.26.05.25Z" />
                    <path
                        d="M444.81,269.48l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22-.17-.42a.15.15,0,0,1,0-.09v-.52a.17.17,0,0,1,0-.07l.15-.52.16-.34a.25.25,0,0,1,.12-.11l.38-.15.08,0H445l.1,0,.31.15.06.05.15.15a.24.24,0,0,1,0,.32.22.22,0,0,1-.32,0l-.13-.13-.27-.11-.26.1-.11.23-.05.18.29-.11a.12.12,0,0,1,.08,0h.08l.1,0,.3.15.25.17a.21.21,0,0,1,.1.14l.08.5-.08.36a.33.33,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.24-.51.29.06.21,0,.14-.14.06-.25-.06-.26-.15-.1-.22-.1-.28.11-.08.08-.1.25.12.3Z" />
                    <path
                        d="M446.25,269.48a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,446.25,269.48Z" />
                    <path
                        d="M447.38,269.48a.23.23,0,0,1-.23-.23V268.2l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.31l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,447.38,269.48Z" />
                    <path
                        d="M448.51,269.48a.23.23,0,0,1-.23-.23V268.2l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.31l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,448.51,269.48Z" />
                    <path
                        d="M450.69,269.48h-1.43a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1,.18-.25.05-.23,0-.15-.16-.12h-.33l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.22.22,0,0,1,.13,0h.45l.1,0,.15.08a.09.09,0,0,1,.06,0l.15.15a.24.24,0,0,1,.06.09l.07.23a.14.14,0,0,1,0,.07v.15a.19.19,0,0,1,0,.07l-.07.23,0,.06-.23.3-.69.7h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M456,268.65h-.15l-.1,0-.3-.15-.06-.05-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.24.24,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16.05-.15.19,0,.22.29-.07h.2l.36.08a.21.21,0,0,1,.13.1l.15.22.17.33a.16.16,0,0,1,0,.1v.07a.22.22,0,0,1,0,.11l-.15.3-.17.25a.3.3,0,0,1-.08.08l-.31.15Zm-.09-.45h0l.2-.1.12-.18.1-.21-.2-.37-.22,0h-.1l-.18,0-.14.14-.05.2.05.25.16.16Z" />
                    <path
                        d="M458,268.65h-.08l-.1,0-.3-.15-.06-.05-.22-.22a.37.37,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15a.22.22,0,0,1,.12.13l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.14-.17-.08H458l-.21.1-.16.21,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.09.09,0,0,1,0,.06l.15.3a.16.16,0,0,1,0,.1v.07a.22.22,0,0,1,0,.11l-.15.3,0,.06-.23.22-.06.05-.3.15Zm-.24-.56.2.1.21-.1.17-.18.1-.2-.1-.21-.15-.15-.24-.06-.21,0-.14.14-.05.2.05.25Z" />
                    <path
                        d="M459.37,268.65a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,459.37,268.65Z" />
                    <path
                        d="M460.5,268.57a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0H460l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.37l.22.08a.2.2,0,0,1,.15.17l.08.37v1A.22.22,0,0,1,460.5,268.57Z" />
                    <path
                        d="M461.7,268.57a.22.22,0,0,1-.22-.22v-.94l-.1-.24-.09,0h-.21l-.07,0-.35.35a.23.23,0,1,1-.32-.32l.38-.38a.1.1,0,0,1,0,0l.15-.08.11,0h.37l.23.08a.19.19,0,0,1,.13.13l.16.37a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,461.7,268.57Z" />
                    <path
                        d="M463.89,268.57h-1.51a.23.23,0,0,1-.21-.14.24.24,0,0,1,.06-.25l1-1,.26-.43v-.14l-.09-.18-.13-.08H463l-.17.11-.05.19a.23.23,0,1,1-.45,0v-.08a.17.17,0,0,1,0-.07l.08-.22a.19.19,0,0,1,.05-.09l.08-.08.26-.18a.25.25,0,0,1,.12,0h.45a.28.28,0,0,1,.13,0l.34.26a.19.19,0,0,1,.05.09l.08.22s0,0,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39a.1.1,0,0,1,0,0l-.63.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M469.1,267.67h-.16l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.21,0h-.18l-.16,0-.15.19,0,.22.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.3v.21l-.09.36a.2.2,0,0,1-.09.13l-.23.15-.32.17Zm-.34-.51.24.06h0l.39-.22.06-.22v-.09l-.05-.18-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.21.06.32Z" />
                    <path
                        d="M471.13,267.67h-.07l-.11,0-.3-.16-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.21.21,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.15.19,0,.22.42-.08.42.08a.25.25,0,0,1,.15.1l.15.22.16.33a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3,0,.06-.15.15-.08.05-.37.15Zm-.4-.66.15.09.22.11.28-.11.09-.09.11-.27-.21-.38-.28-.05-.22.05-.14.14-.05.21Z" />
                    <path
                        d="M472.49,267.67a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.23.23,0,0,1,.23.22v1.51A.23.23,0,0,1,472.49,267.67Z" />
                    <path
                        d="M473.7,267.67a.23.23,0,0,1-.23-.23v-1l-.1-.2-.12-.08h-.14l-.08.09-.4.31a.22.22,0,1,1-.28-.35l.51-.44a.23.23,0,0,1,.16-.06h.3a.17.17,0,0,1,.12,0l.23.15a.3.3,0,0,1,.08.08l.15.31a.3.3,0,0,1,0,.1v1.05A.22.22,0,0,1,473.7,267.67Z" />
                    <path
                        d="M474.83,267.67a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.14l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.2.2,0,0,1,.15.06l.16.16,0,.05.15.31a.3.3,0,0,1,0,.1v1.05A.22.22,0,0,1,474.83,267.67Z" />
                    <path
                        d="M477,267.67h-1.43a.23.23,0,0,1-.21-.14.22.22,0,0,1,.05-.24l1-1.06.31-.44v-.09l-.11-.17-.15,0h-.36l-.17.09,0,.1v.11a.23.23,0,1,1-.45,0v-.15a.17.17,0,0,1,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.3-.15.1,0h.53l.22.08a.19.19,0,0,1,.09.05l.08.08.18.26a.24.24,0,0,1,0,.12v.23a.31.31,0,0,1,0,.13l-.39.53-.64.7H477a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M470.75,291.8h-.07l-.1,0-.3-.15a.1.1,0,0,1-.06-.05l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.43.14l0-.11-.18,0h-.17l-.17.05-.14.19,0,.22.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23.05.06.15.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.16.3,0,.06-.22.22-.06.05-.3.15Zm-.24-.56.21.1.2-.1.18-.18.1-.2-.1-.21-.16-.15-.24-.06-.2.06-.14.14-.05.2.05.24Z" />
                    <path
                        d="M472.87,291.8h-.16l-.38-.16a.16.16,0,0,1-.1-.08l-.16-.23-.17-.41a.28.28,0,0,1,0-.09v-.59l.16-.53.16-.34a.24.24,0,0,1,.1-.1l.3-.15a.22.22,0,0,1,.11,0h.22a.16.16,0,0,1,.1,0l.3.15a.24.24,0,0,1,.09.08l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.19.09-.11.24-.06.19.25-.06h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.09.44-.09.35a.24.24,0,0,1-.06.11l-.22.22-.06.05-.3.15Zm-.31-.56.26.1.21-.1.16-.16.06-.24-.06-.2-.14-.14-.24-.06h-.09l-.16.05-.2.34.11.28Z" />
                    <path
                        d="M474.22,291.8a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,474.22,291.8Z" />
                    <path
                        d="M475.35,291.8a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.21.21,0,0,1,.1.13l.07.3v1.12A.22.22,0,0,1,475.35,291.8Z" />
                    <path
                        d="M476.49,291.73a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0H476l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.38l.22.08a.2.2,0,0,1,.15.17l.08.37v1A.23.23,0,0,1,476.49,291.73Z" />
                    <path
                        d="M478.67,291.73h-1.43a.23.23,0,0,1-.21-.15.24.24,0,0,1,.06-.25l1-1,.25-.43v-.14l0-.1-.07,0-.19-.13h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.08a.19.19,0,0,1,0-.12l.25-.34.26-.18a.28.28,0,0,1,.13,0h.38l.12,0,.35.22a.2.2,0,0,1,.12.13l.07.22a.2.2,0,0,1,0,.07V290a.16.16,0,0,1,0,.1l-.08.15-.23.4s0,0,0,0l-.63.59h.85a.23.23,0,0,1,.23.23A.23.23,0,0,1,478.67,291.73Z" />
                    <path
                        d="M457.56,292.63l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.22-.17-.42a.24.24,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53.17-.34a.22.22,0,0,1,.12-.11l.37-.15.09,0h.15l.08,0,.38.15a.25.25,0,0,1,.12.11l.07.15a.22.22,0,1,1-.4.2l0-.07-.32-.11-.26.11-.11.22-.05.18.29-.11.09,0h.07l.1,0,.31.16.25.16a.22.22,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06Zm-.25-.5.29.05.22-.05L458,292l.06-.24-.06-.26-.15-.1-.22-.11-.26.1-.2.36.11.28Z" />
                    <path
                        d="M459.59,292.63l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.16.16,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,0,1-.32.32l-.12-.13-.22-.11h-.12l-.21.11-.16.21,0,.21.24-.13.1,0h.15l.11,0,.3.16.25.16a.22.22,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.18-.51.24.06h.09l.19-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.38.21,0,.26,0,.25Z" />
                    <path
                        d="M461.1,292.63a.22.22,0,0,1-.22-.23V291a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.43A.23.23,0,0,1,461.1,292.63Z" />
                    <path
                        d="M462.23,292.63a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.21l-.14.05-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.37a.16.16,0,0,1,.1,0l.15.07a.21.21,0,0,1,.1.11l.16.3a.3.3,0,0,1,0,.1v1A.23.23,0,0,1,462.23,292.63Z" />
                    <path
                        d="M463.36,292.63a.22.22,0,0,1-.22-.23v-1l0-.13-.07,0h-.23l-.14.05-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,463.36,292.63Z" />
                    <path
                        d="M465.55,292.63h-1.43a.23.23,0,0,1-.16-.39l1-1,.26-.48-.16-.21-.13-.09h-.25l-.21.16-.08.15a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.22.22,0,0,1,0-.13l.25-.33.26-.18a.2.2,0,0,1,.13,0H465a.2.2,0,0,1,.13,0l.33.25.18.26a.22.22,0,0,1,0,.13v.15a.2.2,0,0,1,0,.13l-.15.22-.13.28-.05.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M444.36,293.54l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.45V292l.08-.49a.11.11,0,0,1,0-.08l.22-.38a.26.26,0,0,1,.14-.1l.31-.08h.28l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.15,0-.16.27,0,.14.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.33Z" />
                    <path
                        d="M446.47,293.54l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.44a.22.22,0,0,1,0-.08V292l.08-.49,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.18-.05h-.17l-.15,0-.16.27,0,.14.41-.07.42.08a.19.19,0,0,1,.14.09l.15.23.17.32a.43.43,0,0,1,0,.11v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.15.11-.27-.21-.38-.29-.06-.21.06-.14.14,0,.2,0,.33Z" />
                    <path
                        d="M447.9,293.54a.23.23,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,447.9,293.54Z" />
                    <path
                        d="M449.11,293.54a.24.24,0,0,1-.23-.23v-1l-.12-.21h-.27l-.11,0-.33.28a.23.23,0,1,1-.29-.35l.38-.3.19-.11.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,449.11,293.54Z" />
                    <path
                        d="M450.24,293.54a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.21l-.15,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.23-.08h.37l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,450.24,293.54Z" />
                    <path
                        d="M452.43,293.54H451a.23.23,0,0,1-.21-.14.21.21,0,0,1,0-.24l1-1.06.32-.44v-.07l-.09-.08,0-.06,0-.07-.11,0h-.36l-.07,0-.13.17v.1a.23.23,0,1,1-.45,0v-.15a.16.16,0,0,1,0-.1l.08-.15,0-.06.15-.15.06,0,.15-.08a.16.16,0,0,1,.1,0H452l.23.07a.22.22,0,0,1,.13.12l.06.12.12.12a.2.2,0,0,1,.07.16v.23a.19.19,0,0,1,0,.12l-.38.54-.65.69h.92a.23.23,0,0,1,.23.23A.24.24,0,0,1,452.43,293.54Z" />
                    <path
                        d="M431.39,294.52h-.15a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.22.22,0,0,1-.1-.15l-.08-.45V293l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18-.05h-.17l-.17.05-.14.19,0,.21.28-.07h.21l.36.08a.24.24,0,0,1,.13.09l.15.23.16.32a.23.23,0,0,1,0,.11v.07a.29.29,0,0,1,0,.09l-.15.37a.22.22,0,0,1-.05.08l-.15.15-.06,0-.3.15A.19.19,0,0,1,431.39,294.52Zm-.1-.46h0l.22-.11.09-.09.11-.28-.21-.37-.22-.06h-.09l-.19,0-.14.14-.05.2.06.3.14.1Z" />
                    <path
                        d="M433.43,294.52h-.08a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.22.22,0,0,1-.1-.15l-.08-.45V293l.08-.56a.21.21,0,0,1,0-.11l.23-.3A.2.2,0,0,1,433,292l.3-.08h.29l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,1,1-.43.15l0-.11-.18-.05h-.17l-.17.05-.14.19,0,.21.42-.07.35.08a.24.24,0,0,1,.11.06l.22.22.05.06.15.3a.43.43,0,0,1,0,.11v.07a.29.29,0,0,1,0,.09l-.15.37a.21.21,0,0,1-.08.11l-.23.15-.32.16Zm-.4-.67.14.1.22.11.38-.22.1-.26-.1-.21-.16-.16-.24-.06-.2.06-.14.14,0,.2Z" />
                    <path
                        d="M434.78,294.52a.23.23,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,434.78,294.52Z" />
                    <path
                        d="M435.91,294.52a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.27-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,435.91,294.52Z" />
                    <path
                        d="M437.12,294.52a.24.24,0,0,1-.23-.23v-1l-.16-.28h-.19l-.09.08-.39.32a.23.23,0,1,1-.29-.35l.51-.44a.23.23,0,0,1,.16-.06h.38a.23.23,0,0,1,.16.06l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,437.12,294.52Z" />
                    <path
                        d="M439.31,294.52H437.8a.24.24,0,0,1-.21-.14.23.23,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16v-.15l-.05-.14-.14-.05h-.38l-.14.05,0,.18a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.07-.07L438,292l.23-.07h.59l.23.07.09.06.07.07a.47.47,0,0,1,.06.09l.07.23a.17.17,0,0,1,0,.07v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.7.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,439.31,294.52Z" />
                    <path
                        d="M418.27,295.42h-.08l-.1,0-.3-.15-.06-.05-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.2.2,0,0,1,.11.13l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l-.05-.14-.17-.08h-.11l-.21.1-.16.21,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.23.23,0,.06.15.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3,0,.06-.23.22-.06.05-.3.15Zm-.25-.56.21.1.21-.1.17-.18.1-.2-.1-.21-.16-.15-.24-.06-.2.05-.14.14-.05.21.05.25Z" />
                    <path
                        d="M420.3,295.35l-.42-.08a.24.24,0,0,1-.14-.1l-.15-.23-.17-.41h0a.2.2,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15h.23a.22.22,0,0,1,.11,0l.3.15a.2.2,0,0,1,.08.08l.16.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.25-.1-.26.1-.11.23-.05.18.29-.12h.16a.18.18,0,0,1,.1,0l.3.15.06,0,.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.24-.51.29.06.21-.06.14-.14.06-.24-.06-.2-.15-.16-.21-.11-.26.11-.21.35.12.28Z" />
                    <path
                        d="M421.74,295.35a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,421.74,295.35Z" />
                    <path
                        d="M422.87,295.35a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.22.22,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.11-.07l.22-.08h.45l.22.08a.2.2,0,0,1,.15.17l.08.38v1A.23.23,0,0,1,422.87,295.35Z" />
                    <path
                        d="M424,295.35a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.22.22,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.22-.08h.45l.22.08a.23.23,0,0,1,.16.17l.07.38v1A.23.23,0,0,1,424,295.35Z" />
                    <path
                        d="M426.19,295.35h-1.44a.24.24,0,0,1-.21-.15.24.24,0,0,1,.06-.25l1-.95.25-.44v-.14l0-.1-.07,0-.06-.05-.08-.08h-.29l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.25-.34.27-.18a.24.24,0,0,1,.12,0h.45a.23.23,0,0,1,.16.06l.13.13.12.06a.21.21,0,0,1,.11.13l.07.22a.24.24,0,0,1,0,.08v.22a.17.17,0,0,1,0,.1l-.07.15-.24.4,0,.05-.63.58h.86a.22.22,0,0,1,.22.23A.23.23,0,0,1,426.19,295.35Z" />
                    <path
                        d="M405.07,296.25l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.18.18,0,0,1-.05-.07l-.15-.38a.14.14,0,0,1,0-.09v-.58l.15-.53a.3.3,0,0,1,0-.08l.23-.3a.16.16,0,0,1,.08-.06l.3-.16.1,0h.15l.09,0,.37.15a.22.22,0,0,1,.12.11l.08.15a.23.23,0,0,1-.41.2l0-.07-.31-.11-.2.11-.17.22-.06.22.28-.15.1,0h.08l.1,0,.3.16.25.16a.28.28,0,0,1,.1.14l.07.5-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2-.05.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.38.22-.09.23.09.25Z" />
                    <path
                        d="M407.11,296.25l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.24.24,0,0,1-.06-.11l-.08-.37a.33.33,0,0,1,0-.1v-.48l.07-.56a.22.22,0,0,1,0-.11l.22-.3a.16.16,0,0,1,.08-.06l.31-.16.1,0h.22l.1,0,.31.16a.1.1,0,0,1,.05,0l.15.15a.22.22,0,0,1,0,.32.21.21,0,0,1-.31,0l-.13-.13-.22-.11h-.12l-.21.11-.16.21,0,.21.25-.13.1,0h.15l.1,0,.3.16.25.16a.23.23,0,0,1,.1.14l.08.5-.09.36a.31.31,0,0,1-.05.1l-.23.23a.24.24,0,0,1-.11.06l-.3.07Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.38.21,0,.26.06.25Z" />
                    <path
                        d="M408.61,296.25a.22.22,0,0,1-.22-.23v-1.43a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22V296A.23.23,0,0,1,408.61,296.25Z" />
                    <path
                        d="M409.75,296.25a.23.23,0,0,1-.23-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3V296A.22.22,0,0,1,409.75,296.25Z" />
                    <path
                        d="M410.88,296.25a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3V296A.22.22,0,0,1,410.88,296.25Z" />
                    <path
                        d="M413.06,296.25h-1.43a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.26-.47-.16-.26-.1,0h-.3l-.11,0-.16.27a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.2.2,0,0,1,0-.13l.21-.35a.24.24,0,0,1,.13-.11l.23-.08h.52l.22.08a.21.21,0,0,1,.13.11l.08.15.14.2a.28.28,0,0,1,0,.13v.15a.28.28,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M391.87,297.23l-.35-.08a.28.28,0,0,1-.14-.09l-.15-.23a.17.17,0,0,1,0-.05l-.15-.46a.19.19,0,0,1,0-.07v-.53s0,0,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.22,0h-.17l-.14,0-.11.22-.05.19.25-.06h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.16-.5.22.06H392l.19,0,.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06h-.1l-.16.05-.2.35.12.33Z" />
                    <path
                        d="M394,297.23l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45a.09.09,0,0,1,0-.07v-.5l.07-.56a.24.24,0,0,1,0-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0H394l-.16,0-.15.19,0,.22.29-.07h.21l.35.08a.28.28,0,0,1,.14.1l.15.22.16.33a.18.18,0,0,1,0,.1v.15a.16.16,0,0,1,0,.1l-.15.3-.16.26a.34.34,0,0,1-.14.09l-.3.07Zm-.18-.51.24.07h.1l.16,0,.1-.15.11-.28-.21-.38-.22-.05H394l-.18.05-.14.14-.05.21.06.32Z" />
                    <path
                        d="M395.49,297.23a.22.22,0,0,1-.22-.23v-1.5a.23.23,0,1,1,.45,0V297A.23.23,0,0,1,395.49,297.23Z" />
                    <path
                        d="M396.62,297.23a.22.22,0,0,1-.22-.23v-1l-.17-.28H396l-.39.39a.23.23,0,0,1-.32-.32l.46-.45a.2.2,0,0,1,.16-.07h.37a.2.2,0,0,1,.16.07l.15.15s0,0,.05.06l.15.3a.3.3,0,0,1,0,.1V297A.23.23,0,0,1,396.62,297.23Z" />
                    <path
                        d="M397.76,297.23a.23.23,0,0,1-.23-.23V296l0-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.07.3V297A.22.22,0,0,1,397.76,297.23Z" />
                    <path
                        d="M399.94,297.23h-1.43a.23.23,0,0,1-.21-.14.24.24,0,0,1,0-.24l1-1.05.32-.45v-.09l-.11-.17-.15,0h-.31l-.14,0-.12.16v.1a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.16a.36.36,0,0,1,0-.1l.08-.15,0-.06.15-.15.09-.05.23-.08h.52l.22.08a.19.19,0,0,1,.09.05l.08.08.18.26a.27.27,0,0,1,0,.12v.23a.28.28,0,0,1,0,.13l-.39.53-.64.7h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M384.63,337.2l-.09,0a.23.23,0,0,1-.11-.31l.9-1.86h-1.15a.23.23,0,1,1,0-.45h1.51a.21.21,0,0,1,.19.11.2.2,0,0,1,0,.21l-1.05,2.19A.23.23,0,0,1,384.63,337.2Z" />
                    <path
                        d="M387.35,337.2a.23.23,0,0,1-.23-.23v-.45h-.83a.24.24,0,0,1-.2-.12.21.21,0,0,1,0-.23l1.05-1.51a.24.24,0,0,1,.26-.09.23.23,0,0,1,.15.22v1.28h.31a.22.22,0,0,1,.22.23.22.22,0,0,1-.22.22h-.31V337A.22.22,0,0,1,387.35,337.2Zm-.62-1.13h.39v-.57Z" />
                    <path
                        d="M388.48,337.2a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.24.24,0,0,1,.23.23V337A.23.23,0,0,1,388.48,337.2Z" />
                    <path
                        d="M389.61,337.2a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0H389l-.12,0-.26.32a.23.23,0,1,1-.36-.28l.3-.37a.28.28,0,0,1,.11-.08l.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,389.61,337.2Z" />
                    <path
                        d="M390.82,337.2a.23.23,0,0,1-.23-.23v-1l-.08-.17-.11,0h-.22l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.37a.2.2,0,0,1,.1-.08l.23-.07.07,0h.3l.07,0,.23.07a.25.25,0,0,1,.13.12l.15.3a.16.16,0,0,1,0,.1V337A.22.22,0,0,1,390.82,337.2Z" />
                    <path
                        d="M393,337.2h-1.5a.22.22,0,0,1-.21-.14.22.22,0,0,1,0-.25l1.05-1.05.24-.34v-.14l0-.11-.06,0-.06,0-.09-.09h-.29l-.17.12-.05.18a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.08-.07.26-.18a.19.19,0,0,1,.12,0h.46a.21.21,0,0,1,.16.07l.12.12.12.06a.24.24,0,0,1,.11.13l.08.23a.15.15,0,0,1,0,.07v.23a.44.44,0,0,1,0,.1l-.08.15-.25.33-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M398.06,336.37H398l-.1,0-.3-.15-.06-.05-.23-.22a.27.27,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.22.22,0,0,1,.12-.09l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0H398l-.17.05-.14.19,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23a.15.15,0,0,1,.05.06l.15.3a.3.3,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.05.06-.22.22-.06.05-.3.15Zm-.25-.56.21.1.2-.1.18-.18.1-.2-.1-.21-.16-.15L398,335l-.2.05-.14.14-.05.2.05.25Z" />
                    <path
                        d="M400.17,336.37h-.08a.12.12,0,0,1-.08,0l-.38-.15a.16.16,0,0,1-.1-.08l-.15-.23-.17-.41a.16.16,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.22.22,0,0,1,.16-.12l.38-.07h.19l.43.08a.25.25,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.22.05-.1.21-.06.19.46-.07.35.08a.24.24,0,0,1,.11.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22-.06.05-.3.15Zm-.31-.56.26.1.22-.1.15-.16.06-.24-.06-.2-.14-.14-.24-.06-.26.05-.19.34.11.28Z" />
                    <path
                        d="M401.53,336.37a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,401.53,336.37Z" />
                    <path
                        d="M402.66,336.37a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.17L402,335l-.26.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,402.66,336.37Z" />
                    <path
                        d="M403.79,336.37a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,403.79,336.37Z" />
                    <path
                        d="M404.54,336.37a.21.21,0,0,1-.2-.13.25.25,0,0,1,0-.26l1.06-1.05.23-.42v-.14l0-.1-.07,0-.06,0-.08-.08h-.29l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.08a.19.19,0,0,1,0-.12l.25-.34.26-.18a.33.33,0,0,1,.13,0h.45a.24.24,0,0,1,.16.07l.13.13.12.06a.21.21,0,0,1,.11.13l.07.22a.25.25,0,0,1,0,.07v.23a.17.17,0,0,1,0,.1l-.07.15-.24.39-.68.69.93-.05a.25.25,0,0,1,.24.22.22.22,0,0,1-.22.23l-1.51.08Z" />
                    <path
                        d="M411.1,335.39l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.24.24,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16.05-.15.19,0,.22.29-.07h.2l.36.08a.22.22,0,0,1,.13.1l.15.22.17.33a.16.16,0,0,1,0,.1v.15a.16.16,0,0,1,0,.1l-.15.3-.17.25a.22.22,0,0,1-.13.1l-.3.07Zm-.18-.51.24.06h.09l.16-.05.11-.15.11-.28-.21-.38-.22-.05h-.1l-.18.05-.14.14,0,.21.06.32Z" />
                    <path
                        d="M413.21,335.39l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.24.24,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.18l-.16.05-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23s0,0,0,.06l.15.3a.17.17,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3s0,.05,0,.06l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.05.16-.16.11-.27-.11-.22-.15-.15-.24-.06-.21.05-.14.14-.05.21.06.32Z" />
                    <path
                        d="M414.65,335.39a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,414.65,335.39Z" />
                    <path
                        d="M415.78,335.39a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,415.78,335.39Z" />
                    <path
                        d="M417,335.39a.23.23,0,0,1-.23-.23v-1l-.1-.2-.12-.08h-.14l-.08.09-.4.31a.22.22,0,1,1-.28-.35l.51-.43a.2.2,0,0,1,.16-.07h.3a.17.17,0,0,1,.12,0l.23.15a.3.3,0,0,1,.08.08l.15.31a.3.3,0,0,1,0,.1v1.05A.22.22,0,0,1,417,335.39Z" />
                    <path
                        d="M419.17,335.39h-1.51a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1.05.18-.25.06-.16v-.15l-.05-.14-.14-.05h-.38l-.1,0-.09.17v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.28.28,0,0,1,.13-.11l.23-.08h.6l.22.08a.19.19,0,0,1,.09.05l.08.08a.19.19,0,0,1,.05.09l.08.22s0,.05,0,.07v.23s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M424.23,334.49l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.17.17,0,0,1-.06-.12l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.24.24,0,0,1,0-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.22.22,0,0,1,.11,0h.22a.16.16,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,0,1-.32.32l-.12-.12-.22-.11h-.12l-.21.1-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.15a.19.19,0,0,1,.1,0l.3.15.25.16a.22.22,0,0,1,.09.14l.08.3v.21l-.09.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08ZM424,334l.24.06h.1l.18,0,.14-.14.06-.24v-.1l0-.16-.16-.1-.27-.11-.38.21,0,.25,0,.25Z" />
                    <path
                        d="M426.34,334.49l-.36-.09a.17.17,0,0,1-.1-.06l-.23-.22a.22.22,0,0,1-.06-.13l-.08-.44v-.5l.07-.56,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.16,0-.15.26,0,.22.25-.12a.17.17,0,0,1,.1,0h.07l.09,0,.37.15.08.05.15.15a.21.21,0,0,1,0,.06l.15.3a.22.22,0,0,1,0,.1v.16a.19.19,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.15.09Zm-.19-.51.24.06.26-.06.1-.15.11-.27-.11-.22-.09-.1-.28-.11-.37.21-.05.18.06.33Z" />
                    <path
                        d="M427.77,334.49a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.24.24,0,0,1,427.77,334.49Z" />
                    <path
                        d="M429,334.49a.23.23,0,0,1-.23-.23v-1l-.09-.17-.1,0h-.21l-.1.05-.34.28a.23.23,0,0,1-.32,0,.21.21,0,0,1,0-.31l.38-.31.19-.1.1,0h.37l.23.08a.28.28,0,0,1,.13.11l.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,429,334.49Z" />
                    <path
                        d="M430.11,334.49a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.21l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.38l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.18.18,0,0,1,0,.1v1.06A.23.23,0,0,1,430.11,334.49Z" />
                    <path
                        d="M432.29,334.49h-1.43a.24.24,0,0,1-.21-.14.24.24,0,0,1,.05-.25l1-1.05.31-.46-.16-.26-.1,0h-.36l-.07,0-.09.09,0,.18a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.08-.22a.19.19,0,0,1,.05-.09L431,332l.06-.05.15-.07a.18.18,0,0,1,.1,0h.53l.22.07a.2.2,0,0,1,.13.12l.08.15.14.2a.27.27,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.39.54-.64.69h.91a.23.23,0,0,1,.23.23A.23.23,0,0,1,432.29,334.49Z" />
                    <path
                        d="M437.42,333.58l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22-.17-.42a.15.15,0,0,1,0-.09v-.52a.2.2,0,0,1,0-.07l.15-.52.16-.34a.25.25,0,0,1,.12-.11l.38-.15.08,0h.15l.1,0,.31.15.08.08.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.12-.18-.25-.1-.26.11-.11.22-.05.18.29-.11.08,0h.08l.1,0,.3.15.06.05.23.22a.39.39,0,0,1,.06.11l.08.43-.08.36a.33.33,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.24-.51.29.06.21-.05.14-.14.06-.24-.06-.21-.15-.16-.22-.1-.26.1-.2.35.11.29Z" />
                    <path
                        d="M439.46,333.58l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.22l.11,0,.3.15a.3.3,0,0,1,.08.08l.16.23a.23.23,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.2.11-.16.21,0,.2.24-.12.1,0h.15l.1,0,.3.15.06.05.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.07Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.24-.05-.21-.16-.16-.27-.11-.22.11-.16.16-.05.2.06.25Z" />
                    <path d="M441,333.58a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,441,333.58Z" />
                    <path
                        d="M442.1,333.58a.23.23,0,0,1-.23-.23v-.93l-.13-.27h-.21l-.13,0-.26.32a.21.21,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.41.41,0,0,1,.11-.07l.22-.07.07,0h.31a.19.19,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.22.22,0,0,1,0,.08v1A.22.22,0,0,1,442.1,333.58Z" />
                    <path
                        d="M443.23,333.58a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.21.21,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.41.41,0,0,1,.11-.07l.22-.07.08,0h.3l.07,0,.22.07a.25.25,0,0,1,.16.17l.07.38v1A.23.23,0,0,1,443.23,333.58Z" />
                    <path
                        d="M445.42,333.58H444a.24.24,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.14-.27a.1.1,0,0,1,0-.05l.08-.09v-.06l-.16-.21-.13-.09h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.25-.33.27-.18a.17.17,0,0,1,.12,0h.38a.17.17,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.23a.26.26,0,0,1-.07.16l-.12.12-.14.27a.21.21,0,0,1,0,.06l-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,445.42,333.58Z" />
                    <path
                        d="M450.54,332.68h-.07a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.21.21,0,0,1-.1-.16l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.41-.08.36.09a.24.24,0,0,1,.11.06l.22.22,0,.06.16.3a.36.36,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.28.28,0,0,1-.08.11l-.23.15-.32.16A.23.23,0,0,1,450.54,332.68Zm-.39-.67.14.1.22.11.38-.22.1-.26-.1-.21-.16-.16-.24-.06-.2.06-.14.14-.06.2Z" />
                    <path
                        d="M452.66,332.68h-.08l-.08,0-.38-.15-.08-.05-.15-.15a.41.41,0,0,1-.05-.09l-.15-.45h0a.09.09,0,0,1,0-.07v-.59l.15-.52.17-.34a.2.2,0,0,1,.16-.12l.38-.08h.19l.36.08a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.21-.06h-.1l-.22.05-.11.2-.05.2.46-.08.35.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.07.42a.31.31,0,0,1-.1.15l-.23.15-.32.16A.19.19,0,0,1,452.66,332.68Zm-.33-.57.28.11L453,332l.06-.28-.06-.22-.14-.14-.24-.06-.26.06-.19.34.1.31Z" />
                    <path d="M454,332.68a.23.23,0,0,1-.22-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,454,332.68Z" />
                    <path
                        d="M455.14,332.68a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.27-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,455.14,332.68Z" />
                    <path
                        d="M456.28,332.68a.23.23,0,0,1-.23-.23v-1.06l-.05-.16-.09-.06h-.17l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.07.3v1.11A.23.23,0,0,1,456.28,332.68Z" />
                    <path
                        d="M458.46,332.68H457a.24.24,0,0,1-.21-.14.23.23,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16v-.15l0-.11-.23-.08h-.31l-.17.08-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33a.24.24,0,0,1,.09-.06l.23-.07H458l.4.16a.22.22,0,0,1,.12.13l.07.23a.15.15,0,0,1,0,.07v.22a.22.22,0,0,1,0,.08l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.7.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,458.46,332.68Z" />
                    <path
                        d="M463.59,331.77l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.13.13,0,0,1,0-.08l.22-.37a.29.29,0,0,1,.14-.11l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.43.14l0-.11-.18,0h-.17l-.15.05-.16.26,0,.15.42-.08.42.08a.21.21,0,0,1,.14.1l.15.22.17.33a.3.3,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.19-.51.25.06.26-.05.1-.15.11-.28-.21-.37-.29-.06-.21,0-.14.14,0,.21,0,.32Z" />
                    <path
                        d="M465.7,331.77l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.19.19,0,0,1-.05-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53a.21.21,0,0,1,0-.07l.23-.3a.21.21,0,0,1,.13-.09l.3-.07h.2l.42.08a.22.22,0,0,1,.17.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.16.05-.16.21-.06.21h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.31.31,0,0,1,0,.1l.08.3v.21l-.09.36a.31.31,0,0,1,0,.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06-.2,0-.16.16-.09.19.1.31Z" />
                    <path
                        d="M467.13,331.77a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,467.13,331.77Z" />
                    <path
                        d="M468.27,331.77a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07.07,0h.3l.08,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,468.27,331.77Z" />
                    <path
                        d="M469.47,331.77a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.14,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.31l.07,0,.22.07a.21.21,0,0,1,.13.11l.15.31a.17.17,0,0,1,0,.1v1.05A.23.23,0,0,1,469.47,331.77Z" />
                    <path
                        d="M471.66,331.77h-1.51a.24.24,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1.05.18-.25,0-.16v-.13l0-.07-.17-.14h-.36l-.11,0-.08.17v.09a.23.23,0,1,1-.45,0v-.15a.18.18,0,0,1,0-.1l.15-.3a.24.24,0,0,1,.13-.11l.23-.08h.52l.1,0,.15.08a.09.09,0,0,1,.06,0l.15.15.05.06.07.15a.18.18,0,0,1,0,.1V330a.17.17,0,0,1,0,.07l-.07.23a.21.21,0,0,1,0,.06l-.22.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M476.71,330.79l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.06.05.15.15a.23.23,0,0,1-.32.32l-.12-.13-.22-.11h-.12l-.21.11-.16.21,0,.2.24-.12.1,0h.15l.1,0,.31.15.25.17a.19.19,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06l-.3.07Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.24-.06-.27-.15-.1-.27-.11-.23.11-.15.16-.05.2.05.25Z" />
                    <path
                        d="M478.82,330.79l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.21.21,0,0,1,.1.11l.08.15a.22.22,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.1h-.12l-.21.11-.16.21,0,.21.24-.13.1,0h.08l.1,0,.3.15.25.17a.22.22,0,0,1,.09.1l.15.38a.25.25,0,0,1,0,.08V330a.16.16,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26,0,.1-.15.11-.22-.11-.26-.16-.12-.22-.1-.36.2-.05.26.05.25Z" />
                    <path
                        d="M480.26,330.79a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,480.26,330.79Z" />
                    <path
                        d="M481.46,330.79a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.31l.07,0,.22.07a.21.21,0,0,1,.13.11l.16.31a.3.3,0,0,1,0,.1v1.05A.23.23,0,0,1,481.46,330.79Z" />
                    <path
                        d="M482.59,330.79a.22.22,0,0,1-.22-.23v-1l-.13-.2H482l-.07,0-.28.28a.23.23,0,0,1-.32-.32l.3-.3.06-.05.15-.07a.23.23,0,0,1,.11,0h.37a.17.17,0,0,1,.1,0l.15.07a.36.36,0,0,1,.11.1l.15.31a.3.3,0,0,1,0,.1v1.05A.23.23,0,0,1,482.59,330.79Z" />
                    <path
                        d="M484.78,330.79h-1.51a.24.24,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1,.18-.25,0-.23-.08-.18-.13-.09h-.3l-.08.09-.06,0-.07,0,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.12-.06.12-.12a.2.2,0,0,1,.16-.07h.45a.2.2,0,0,1,.13,0l.34.25a.41.41,0,0,1,0,.09l.08.23s0,0,0,.07V329s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M489.91,330h-.08l-.08,0-.38-.15a.16.16,0,0,1-.1-.08l-.15-.23-.17-.41a.16.16,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.24.24,0,0,1,.16-.12l.38-.07H490l.36.08a.28.28,0,0,1,.14.1l.15.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22-.05h-.1l-.22.05-.1.21-.06.19.46-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22-.06.05-.3.15Zm-.31-.56.27.1.21-.1.15-.16.06-.24-.05-.2-.14-.14-.25-.06-.26,0-.19.34.12.28Z" />
                    <path
                        d="M492,330h-.15l-.1,0-.3-.15-.06-.05-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.32.32,0,0,1,.09.08l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.2.1-.16.21,0,.22.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22s0,0-.06.05l-.3.15Zm-.1-.45H492l.22-.11.15-.16.06-.24,0-.2-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.25.15.16Z" />
                    <path d="M493.38,330a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,493.38,330Z" />
                    <path
                        d="M494.51,330a.23.23,0,0,1-.23-.23v-1l-.17-.28H494l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.16.07l.15.15a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v1.05A.23.23,0,0,1,494.51,330Z" />
                    <path
                        d="M495.64,329.88a.23.23,0,0,1-.23-.22v-1l0-.21-.07,0h-.19l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.37l.23.08a.24.24,0,0,1,.15.17l.07.37v1A.22.22,0,0,1,495.64,329.88Z" />
                    <path
                        d="M497.83,329.88h-1.44a.23.23,0,0,1-.21-.14.24.24,0,0,1,.06-.25l1-.94.13-.33a.22.22,0,0,1,.05-.08l.09-.08V328l-.16-.21-.14-.08H497l-.26.16,0,.14a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.25.25,0,0,1,0-.07l.07-.22a.21.21,0,0,1,.11-.13l.15-.08.21-.14a.25.25,0,0,1,.12,0h.38a.25.25,0,0,1,.12,0l.34.26.18.26a.19.19,0,0,1,0,.12v.23a.24.24,0,0,1-.07.16l-.12.12-.13.33a.16.16,0,0,1-.06.08l-.63.59h.86a.22.22,0,0,1,.22.23A.22.22,0,0,1,497.83,329.88Z" />
                    <path
                        d="M386.52,361.26l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.2.1-.16.22,0,.2.24-.12a.16.16,0,0,1,.1,0h.15a.18.18,0,0,1,.1,0l.3.15.06,0,.15.15a.35.35,0,0,1,.05.08l.15.38a.19.19,0,0,1,0,.08v.08a.36.36,0,0,1,0,.1l-.16.3-.16.25a.2.2,0,0,1-.13.09l-.31.08Zm-.19-.51.24.06h.1l.16,0,.1-.16.11-.22-.11-.28-.09-.09-.27-.11-.38.21-.05.25.06.26Z" />
                    <path
                        d="M388.4,361.26l-.35-.09a.19.19,0,0,1-.16-.14l-.08-.23a.23.23,0,0,1,.15-.29.23.23,0,0,1,.28.15l0,.1.18.05h.17l.17,0,.14-.2,0-.21-.29.07h-.2l-.36-.08a.26.26,0,0,1-.13-.1l-.15-.23-.17-.32a.36.36,0,0,1,0-.1v-.15l.08-.36a.24.24,0,0,1,.06-.11l.23-.22a.21.21,0,0,1,.1-.06l.3-.08h.21l.36.08a.21.21,0,0,1,.1.06l.23.22a.31.31,0,0,1,.06.13l.08.44v.58l-.08.56a.21.21,0,0,1,0,.1l-.23.3a.2.2,0,0,1-.12.08l-.3.08Zm-.08-1.33.21.05h.1l.18-.05.14-.14.05-.2-.05-.33-.13-.13-.24-.06h-.1l-.18.05-.14.14-.06.24v0Z" />
                    <path
                        d="M390.06,361.26a.22.22,0,0,1-.22-.23V359.6a.23.23,0,1,1,.45,0V361A.23.23,0,0,1,390.06,361.26Z" />
                    <path
                        d="M391.19,361.26A.22.22,0,0,1,391,361V360l0-.12-.07,0h-.23l-.14.05-.27.26a.23.23,0,1,1-.32-.32l.3-.3.09-.05.23-.08H391l.23.08a.22.22,0,0,1,.15.16l.07.3V361A.23.23,0,0,1,391.19,361.26Z" />
                    <path
                        d="M392.4,361.26a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0h-.21l-.11.05-.33.28a.23.23,0,1,1-.29-.35l.38-.3.19-.11.1,0h.38l.22.08a.21.21,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1V361A.23.23,0,0,1,392.4,361.26Z" />
                    <path
                        d="M394.59,361.26h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24,0-.24-.08-.23-.11,0h-.38l-.1,0-.08.27a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.24.24,0,0,1,0-.08l.16-.4a.22.22,0,0,1,.13-.12l.23-.07h.59l.23.07a.25.25,0,0,1,.13.12l.07.15.09.25a.22.22,0,0,1,0,.08v.15a.17.17,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.7.69h1a.23.23,0,0,1,0,.46Z" />
                    <path
                        d="M399.64,360.35l-.36-.08a.24.24,0,0,1-.13-.09L399,360l-.17-.41a.36.36,0,0,1,0-.1v-.52l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.13-.12-.22-.12h-.12l-.2.11-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.08Zm-.16-.5.22.06h.09l.18,0,.14-.14.07-.24-.06-.21-.16-.16-.27-.11-.22.11-.15.16-.05.17.13.31Z" />
                    <path
                        d="M401.75,360.35l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0H402a.19.19,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.19-.1h-.11l-.21.11-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15a.18.18,0,0,1,.07.05l.16.15a.56.56,0,0,1,.05.08l.15.37a.28.28,0,0,1,0,.09v.07a.3.3,0,0,1,0,.1l-.15.3-.17.26a.19.19,0,0,1-.14.09Zm-.18-.5.24.06.26-.06.1-.15.11-.22-.12-.28-.08-.09-.28-.11-.22.1-.15.16-.05.2.05.25Z" />
                    <path
                        d="M403.18,360.35a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,403.18,360.35Z" />
                    <path
                        d="M404.39,360.35a.22.22,0,0,1-.22-.22v-1l-.13-.2h-.27l-.11.05-.33.28a.23.23,0,0,1-.29-.36l.38-.3.19-.1a.18.18,0,0,1,.1,0h.38a.16.16,0,0,1,.1,0l.15.08a.17.17,0,0,1,.1.1l.15.3a.17.17,0,0,1,0,.1v1.06A.22.22,0,0,1,404.39,360.35Z" />
                    <path
                        d="M405.52,360.35a.22.22,0,0,1-.22-.22v-1.06l0-.13-.08,0H405l-.14.05-.27.26a.23.23,0,1,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.3v1.12A.22.22,0,0,1,405.52,360.35Z" />
                    <path
                        d="M407.71,360.35h-1.43a.23.23,0,0,1-.21-.13.23.23,0,0,1,0-.25l1-1.05.32-.46-.16-.21-.13-.09h-.3l-.08.09-.06,0-.07,0,0,.14a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.11-.06.13-.12a.24.24,0,0,1,.16-.07h.45a.28.28,0,0,1,.13,0l.33.25.18.26a.22.22,0,0,1,0,.13v.15a.2.2,0,0,1,0,.13l-.38.53-.65.7h.92a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M412.91,359.52h-.16l-.37-.16a.14.14,0,0,1-.08-.05l-.15-.15a.14.14,0,0,1,0-.08l-.16-.46h0s0-.05,0-.07V358s0,0,0-.06l.15-.53.17-.34a.25.25,0,0,1,.16-.12l.37-.07h.2l.42.08a.26.26,0,0,1,.17.15l.08.23a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.1-.25-.05h-.1l-.23.05-.1.21-.05.19.45-.07.36.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22-.05.05-.31.15Zm-.32-.57.28.11.21-.1.16-.16.06-.24-.06-.2-.14-.14-.24-.06-.26.06-.2.34.11.31Z" />
                    <path
                        d="M415,359.52h-.15l-.1,0-.3-.15-.06-.05-.22-.22a.19.19,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09V358l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.21-.05h-.18l-.16.05-.15.2,0,.21.29-.07h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.22.22-.06.05-.3.15Zm-.09-.45h0l.22-.11.16-.16.06-.24-.06-.2-.14-.14-.24-.06h-.1l-.18.06-.14.14-.05.2.05.25.16.15Z" />
                    <path
                        d="M416.38,359.52a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,416.38,359.52Z" />
                    <path
                        d="M417.51,359.52a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07H417l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.22.22,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,417.51,359.52Z" />
                    <path
                        d="M418.64,359.52a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.21.21,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,418.64,359.52Z" />
                    <path
                        d="M419.4,359.52a.23.23,0,0,1-.21-.13.21.21,0,0,1,.05-.25l1-1,.26-.47v-.09l-.16-.21-.13-.08H420l-.21.16-.08.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.34.26-.17a.2.2,0,0,1,.13,0h.37a.2.2,0,0,1,.13,0l.34.25.17.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.15.22-.13.28-.05.06L420,359l.84-.05a.23.23,0,1,1,0,.46l-1.43.07Z" />
                    <path
                        d="M426,358.54l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45V357l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0H426l-.17,0-.14.19,0,.22.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23,0,.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3s0,.05,0,.06l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.5.24.06.21-.06.16-.16.11-.27-.11-.22-.16-.15-.24-.06-.2.06-.14.14-.05.2.05.32Z" />
                    <path
                        d="M428.07,358.54l-.42-.08a.19.19,0,0,1-.14-.09l-.16-.23a.17.17,0,0,1,0-.05l-.15-.46h0a.17.17,0,0,1,0-.07V357l.16-.53.16-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.06l-.11-.16-.21,0H428l-.15,0-.1.22-.06.19.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.31v.2l-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.5.29,0,.21,0,.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06-.26.06-.19.34.11.33Z" />
                    <path
                        d="M429.5,358.54a.22.22,0,0,1-.22-.23v-1.43a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.43A.23.23,0,0,1,429.5,358.54Z" />
                    <path
                        d="M430.64,358.54a.23.23,0,0,1-.23-.23v-1.05l-.05-.16-.07-.05-.36.11-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.55-.15a.19.19,0,0,1,.18,0l.23.15a.24.24,0,0,1,.09.13l.07.3v1.11A.22.22,0,0,1,430.64,358.54Z" />
                    <path
                        d="M431.77,358.54a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.17l-.17.12-.27.27a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,431.77,358.54Z" />
                    <path
                        d="M434,358.54h-1.43a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1,.18-.25,0-.16v-.13l0-.07-.09-.09-.14,0h-.31l-.1,0,0,.07,0,.05-.09.09v.06a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.22.22,0,0,1,.07-.17l.12-.12.06-.12a.24.24,0,0,1,.13-.11l.23-.08h.52l.22.08a.19.19,0,0,1,.09.05l.15.16a.1.1,0,0,1,0,.05l.08.15a.22.22,0,0,1,0,.11v.22a.15.15,0,0,1,0,.07L434,357a.21.21,0,0,1,0,.06l-.22.3-.69.7H434a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M439,357.64l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.17.17,0,0,1-.06-.12l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.24.24,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.11,0h.22l.1,0,.31.15a.32.32,0,0,1,.1.1l.07.15a.23.23,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.21.1-.16.22,0,.2.24-.12a.22.22,0,0,1,.11,0h.16l.37.15.08.05.15.15a.35.35,0,0,1,.05.08l.15.38a.19.19,0,0,1,0,.08v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.19.19,0,0,1-.14.09l-.3.08Zm-.19-.51.24.06h.1l.16,0,.1-.16.11-.22-.11-.28-.09-.08-.28-.12-.37.21-.05.25.06.26Z" />
                    <path
                        d="M441.12,357.64l-.36-.09-.1-.05-.23-.23a.22.22,0,0,1-.05-.08l-.15-.37h0s0-.06,0-.08v-.53s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3.08-.07L441,355l.1,0h.22l.36.08a.2.2,0,0,1,.16.15l.08.22a.24.24,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18-.05h-.11l-.22.1-.16.23-.07.21.29-.14a.16.16,0,0,1,.1,0h.07a.16.16,0,0,1,.1,0l.31.15.25.17a.24.24,0,0,1,.09.13l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.17.17,0,0,1-.1.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24v-.09l0-.16-.16-.11-.21-.1-.39.21-.09.23.1.25Z" />
                    <path
                        d="M442.55,357.64a.23.23,0,0,1-.23-.23V356a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,442.55,357.64Z" />
                    <path
                        d="M443.68,357.64a.22.22,0,0,1-.22-.23v-1.06l0-.12-.08,0h-.22l-.15.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,443.68,357.64Z" />
                    <path
                        d="M444.89,357.64a.23.23,0,0,1-.23-.23v-1l-.08-.17-.11,0h-.21l-.1.06-.34.27a.22.22,0,0,1-.31,0,.22.22,0,0,1,0-.32l.38-.3.19-.11.1,0h.37l.23.08a.24.24,0,0,1,.13.11l.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,444.89,357.64Z" />
                    <path
                        d="M447.08,357.64h-1.51a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1.06.19-.24.05-.24-.05-.14-.16-.12h-.36l-.1,0-.09.27a.23.23,0,1,1-.45,0v-.07s0-.05,0-.08l.17-.4a.2.2,0,0,1,.13-.12L446,355h.53l.1,0,.15.08.06,0,.15.15a.19.19,0,0,1,.05.09l.08.22a.22.22,0,0,1,0,.08v.15a.2.2,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69h1a.23.23,0,0,1,.22.23A.22.22,0,0,1,447.08,357.64Z" />
                    <path
                        d="M452.28,356.73h-.15l-.1,0-.3-.15a.1.1,0,0,1-.06-.05l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.23.23,0,0,1,.07-.07L452,354l.1,0h.22l.11,0,.3.15a.3.3,0,0,1,.08.08l.15.22a.23.23,0,1,1-.37.26l-.12-.18-.2-.1h-.12l-.21.1-.15.21,0,.22.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.27.27,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22-.06.05-.3.15Zm-.1-.45h.05l.22-.11.15-.16.06-.24-.06-.2-.14-.14-.24-.06h-.09l-.19.05-.14.14-.05.21.06.25.15.15Z" />
                    <path
                        d="M454.24,356.66l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.28.28,0,0,1,.11.13l.08.23a.22.22,0,0,1-.15.28.21.21,0,0,1-.28-.14l-.05-.14-.17-.08h-.12l-.2.1-.16.21,0,.21.24-.12a.16.16,0,0,1,.1,0h.16l.38.15a.28.28,0,0,1,.1.09l.15.22.17.33a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.16.3-.16.25a.28.28,0,0,1-.14.1Zm-.19-.51.24.06.26-.06.1-.15.11-.21-.22-.38-.26-.11-.21.11-.15.15-.05.21.05.25Z" />
                    <path
                        d="M455.67,356.66a.23.23,0,0,1-.22-.23V355a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,455.67,356.66Z" />
                    <path
                        d="M456.88,356.66a.23.23,0,0,1-.23-.23v-.94l-.09-.24-.1,0h-.21l-.07,0-.35.35a.23.23,0,1,1-.32-.32l.38-.38.06,0,.15-.08.1,0h.37l.23.08a.25.25,0,0,1,.14.13l.15.38a.19.19,0,0,1,0,.08v1A.23.23,0,0,1,456.88,356.66Z" />
                    <path
                        d="M458,356.66a.23.23,0,0,1-.23-.23v-.94l-.13-.27h-.21l-.12,0-.26.32a.24.24,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.37l.1,0,.15.08a.25.25,0,0,1,.11.12l.15.38a.19.19,0,0,1,0,.08v1A.24.24,0,0,1,458,356.66Z" />
                    <path
                        d="M460.2,356.66h-1.44a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.24-.42v-.14l-.08-.18-.14-.08h-.29l-.08.08-.06.05-.07,0,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0-.05,0-.08l.08-.22a.21.21,0,0,1,.11-.13l.12-.06.13-.13a.23.23,0,0,1,.16-.06h.45a.24.24,0,0,1,.12,0l.34.26a.2.2,0,0,1,.06.09l.07.22a.22.22,0,0,1,0,.08v.22a.3.3,0,0,1,0,.1l-.08.15-.23.4-.63.63h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,460.2,356.66Z" />
                    <path
                        d="M465.4,355.83h-.08l-.08,0-.38-.15-.07-.05-.15-.15a.24.24,0,0,1-.06-.09l-.15-.45h0a.2.2,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.18.18,0,0,1,.15-.12l.38-.08h.2l.35.08a.26.26,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.1l-.22.05-.1.2-.06.2.46-.07.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.25.25,0,0,1-.1.15l-.22.15-.33.16A.17.17,0,0,1,465.4,355.83Zm-.33-.57.29.11.36-.21.06-.28,0-.22-.14-.14-.24-.06-.27.06-.19.34.1.32Z" />
                    <path
                        d="M467.51,355.83h-.15a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.22.22,0,0,1,0-.08v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17.05-.14.19,0,.22.29-.08h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.24.24,0,0,1-.09.15l-.23.15-.33.16A.17.17,0,0,1,467.51,355.83Zm-.1-.46h0l.38-.21.05-.28-.05-.22-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.3.14.1Z" />
                    <path
                        d="M468.87,355.83a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.23.23,0,0,1,.23.22v1.51A.23.23,0,0,1,468.87,355.83Z" />
                    <path
                        d="M470,355.83a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.13l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.23.23,0,0,1,.16.06l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,470,355.83Z" />
                    <path
                        d="M471.13,355.83a.22.22,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.31.31,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,471.13,355.83Z" />
                    <path
                        d="M473.32,355.83h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1L473,354v-.09l-.12-.17-.15-.05h-.3l-.23.08,0,.11v.11a.23.23,0,1,1-.45,0v-.15a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.15-.07.25-.09h.52l.23.07a.24.24,0,0,1,.09.06l.07.07.18.27a.17.17,0,0,1,0,.12V354a.19.19,0,0,1,0,.12l-.15.23-.14.28a.1.1,0,0,1,0,.05l-.67.67h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,473.32,355.83Z" />
                    <path
                        d="M478.37,354.92l-.36-.08a.27.27,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45h0l-.07-.52a.21.21,0,0,1,0-.11l.15-.45.25-.42a.28.28,0,0,1,.13-.11l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.15,0-.18.3,0,.12h0l.44-.08.35.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.08.31v.2l-.09.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.2.06-.14.14L478,354l.05.34Z" />
                    <path
                        d="M480.48,354.92l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23,0,0-.15-.46h0a.13.13,0,0,1,0-.06v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.23.23,0,1,1-.37.26l-.1-.16-.22,0h-.17l-.15,0-.1.22-.06.19.25-.06h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.17.17,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.24-.5.29.05.21-.05.14-.14.06-.24v-.1l-.06-.18-.14-.14-.24-.06h-.09l-.16.05-.11.15-.09.2.11.33Z" />
                    <path
                        d="M481.92,354.92a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,481.92,354.92Z" />
                    <path
                        d="M483.05,354.92a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,483.05,354.92Z" />
                    <path
                        d="M484.18,354.92a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07H484l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,484.18,354.92Z" />
                    <path
                        d="M486.37,354.92h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25.05-.15v-.14l0-.07-.09-.09-.14,0h-.3l-.11,0,0,.07a.1.1,0,0,1,0,.05l-.09.09V353a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.24.24,0,0,1,.07-.16l.12-.13.06-.12a.28.28,0,0,1,.13-.11l.23-.08h.52l.22.08a.19.19,0,0,1,.09.05l.15.15.05.06.07.15a.23.23,0,0,1,0,.11v.22a.14.14,0,0,1,0,.07l-.07.23,0,.06-.23.31-.69.69h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,486.37,354.92Z" />
                    <path
                        d="M491.49,353.94l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.17.17,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.1h-.12l-.21.11-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15a.2.2,0,0,1,.1.08l.15.23.17.33a.3.3,0,0,1,0,.1v.07a.3.3,0,0,1,0,.1l-.15.3-.17.25a.18.18,0,0,1-.14.1Zm-.18-.5.24.06.26-.06.1-.15.1-.22-.21-.38-.26-.1-.21.1-.16.16-.05.2.05.25Z" />
                    <path
                        d="M493.6,353.94l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.12.12,0,0,1-.05-.07l-.15-.38a.15.15,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53,0-.08.22-.3a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.16l.08,0,.38.15a.2.2,0,0,1,.11.11l.08.15a.22.22,0,0,1-.4.2l0-.07-.31-.11-.21.11-.17.22-.06.22.28-.14a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.23.23,0,0,1,.1.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24-.05-.26-.15-.1-.22-.11-.38.22-.09.23.1.25Z" />
                    <path
                        d="M495,353.94a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,495,353.94Z" />
                    <path
                        d="M496.17,353.94a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.12A.22.22,0,0,1,496.17,353.94Z" />
                    <path
                        d="M497.37,353.94a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.22-.07h.45l.23.07a.25.25,0,0,1,.13.12l.15.3a.3.3,0,0,1,0,.1v1.06A.22.22,0,0,1,497.37,353.94Z" />
                    <path
                        d="M499.56,353.94h-1.51a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25L499,352.5l.18-.25.05-.23,0-.1-.07,0-.06,0-.08-.09h-.29l-.17.12-.05.19a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22V352a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.08-.07.26-.18a.17.17,0,0,1,.12,0H499a.24.24,0,0,1,.16.07l.13.12.12.06a.28.28,0,0,1,.11.13l.08.23s0,0,0,.07v.15s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M391.57,400.47l-.09,0a.21.21,0,0,1-.11-.3l.9-1.94h-1.08A.22.22,0,0,1,391,398a.22.22,0,0,1,.22-.22h1.44a.24.24,0,0,1,.19.1.24.24,0,0,1,0,.22l-1.05,2.26A.23.23,0,0,1,391.57,400.47Z" />
                    <path
                        d="M393.76,400.4l-.36-.09a.21.21,0,0,1-.1-.06l-.08-.07-.18-.26a.24.24,0,0,1,.06-.32.23.23,0,0,1,.32.07l.15.22.24.06h.25l.18-.05.16-.16.11-.22v-.12l-.16-.27-.1-.07-.21.06a.24.24,0,0,1-.24-.09.23.23,0,0,1,0-.26l.37-.55h-.71a.23.23,0,1,1,0-.45h1.13a.22.22,0,0,1,.2.12.24.24,0,0,1,0,.23l-.35.52.32.25,0,.06.15.3a.16.16,0,0,1,0,.1v.23a.18.18,0,0,1,0,.1l-.15.3,0,.06-.23.22a.21.21,0,0,1-.1.06l-.3.08Z" />
                    <path
                        d="M395.42,400.4a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,395.42,400.4Z" />
                    <path
                        d="M396.62,400.4a.23.23,0,0,1-.22-.23v-.94l-.1-.24-.09,0H396l-.13.05-.26.32a.22.22,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.22-.08h.45l.22.08a.2.2,0,0,1,.14.13l.15.37a.29.29,0,0,1,0,.09v1A.23.23,0,0,1,396.62,400.4Z" />
                    <path
                        d="M397.76,400.4a.23.23,0,0,1-.23-.23v-.94l-.13-.27h-.27l-.06,0-.27.34a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.38a.19.19,0,0,1,.07-.06l.16-.08.1,0h.37l.1,0,.16.08a.24.24,0,0,1,.1.12l.16.37a.28.28,0,0,1,0,.09v1A.23.23,0,0,1,397.76,400.4Z" />
                    <path
                        d="M399.94,400.4h-1.51a.24.24,0,0,1-.21-.15.24.24,0,0,1,.06-.25l1-1,.26-.43v-.14l-.09-.18-.13-.08h-.29l-.09.08-.06,0-.06,0,0,.14a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.08-.22a.18.18,0,0,1,.11-.13l.12-.06.12-.13a.23.23,0,0,1,.16-.06h.45a.28.28,0,0,1,.13,0l.34.26a.19.19,0,0,1,.05.09l.08.22s0,.05,0,.07v.23a.17.17,0,0,1,0,.1l-.07.15-.24.4,0,0-.63.59h.93a.23.23,0,0,1,.23.23A.23.23,0,0,1,399.94,400.4Z" />
                    <path
                        d="M405.07,399.57h-.15a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.22.22,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.14l0-.11-.18-.05h-.17l-.17.05-.14.19,0,.21.28-.07h.21l.36.08a.24.24,0,0,1,.13.09l.15.23.17.32a.43.43,0,0,1,0,.11v.07a.19.19,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.05.08l-.15.15-.06,0-.3.15A.17.17,0,0,1,405.07,399.57Zm-.1-.46h0l.22-.11.09-.09.11-.28-.21-.37-.21-.06h-.1l-.18.05-.14.14-.05.2.05.3.14.1Z" />
                    <path
                        d="M407.11,399.57H407a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.22.22,0,0,1,0-.08v-.49l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.43.15l0-.11-.18-.05H407l-.17.05-.14.19,0,.21.42-.07.35.08a.24.24,0,0,1,.11.06l.22.22,0,.06.15.3a.43.43,0,0,1,0,.11v.07a.19.19,0,0,1,0,.08l-.16.38a.21.21,0,0,1-.08.11l-.23.15-.32.16A.19.19,0,0,1,407.11,399.57Zm-.4-.67.14.1.22.11.38-.22.1-.26-.1-.21-.16-.16-.24-.06-.2.06-.14.14,0,.2Z" />
                    <path
                        d="M408.46,399.57a.23.23,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,408.46,399.57Z" />
                    <path
                        d="M409.59,399.57a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.21.21,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,409.59,399.57Z" />
                    <path
                        d="M410.8,399.57a.23.23,0,0,1-.22-.23v-1l-.1-.2-.12-.08h-.14l-.09.08-.39.32a.23.23,0,1,1-.29-.35l.51-.44a.25.25,0,0,1,.16-.06h.3a.28.28,0,0,1,.13,0l.23.15a.28.28,0,0,1,.07.09l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,410.8,399.57Z" />
                    <path
                        d="M413,399.57h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16v-.15l-.05-.14-.14-.05H412l-.14.05,0,.18a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.07-.07.09-.06.23-.07h.59l.23.07a.24.24,0,0,1,.09.06l.07.07a.24.24,0,0,1,.06.09l.07.23a.17.17,0,0,1,0,.07v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.69.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,413,399.57Z" />
                    <path
                        d="M418,398.59l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.44a.22.22,0,0,1,0-.08v-.49l.08-.49a.11.11,0,0,1,0-.08l.23-.38a.21.21,0,0,1,.13-.1L418,396h.28l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06H418l-.15,0-.16.26,0,.15.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.18-.51.24.06h.09l.19-.05.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06H418l-.18,0-.14.14-.05.2.05.33Z" />
                    <path
                        d="M420.15,398.59l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.19-.05h-.17l-.16,0-.15.2,0,.21.42-.07.42.08a.19.19,0,0,1,.14.09l.15.23.17.32a.22.22,0,0,1,0,.11v.15a.18.18,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.15.11-.27-.21-.38-.29-.06-.21.06-.14.14-.05.2.06.33Z" />
                    <path
                        d="M421.59,398.59a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,421.59,398.59Z" />
                    <path
                        d="M422.79,398.59a.23.23,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.21l-.11.05-.33.28a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.31l.38-.3.19-.11.1,0h.38l.22.08a.21.21,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,422.79,398.59Z" />
                    <path
                        d="M423.92,398.59a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.21l-.14.05-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.37l.1,0,.15.08a.19.19,0,0,1,.1.1l.16.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,423.92,398.59Z" />
                    <path
                        d="M426.11,398.59h-1.43a.24.24,0,0,1-.21-.14.21.21,0,0,1,0-.24l1-1.06.32-.44v-.07l-.09-.08,0-.06,0-.07-.1,0h-.37l-.07,0-.13.17v.1a.23.23,0,1,1-.45,0v-.15a.16.16,0,0,1,0-.1l.08-.15a.21.21,0,0,1,0-.06l.15-.15.06,0L425,396a.18.18,0,0,1,.1,0h.52l.23.07a.22.22,0,0,1,.13.12l.06.11.12.13a.2.2,0,0,1,.07.16v.23a.19.19,0,0,1,0,.12l-.38.54-.64.69h.91a.23.23,0,0,1,.23.23A.23.23,0,0,1,426.11,398.59Z" />
                    <path
                        d="M431.24,397.68l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.22-.17-.42a.29.29,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53.17-.34a.22.22,0,0,1,.12-.11l.37-.15.09,0h.15a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.12-.13-.28-.11-.25.11-.12.22-.05.18.29-.11.09,0h.07l.11,0,.3.16.25.16a.22.22,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.25-.51.29.06.22-.05.14-.14.06-.24-.06-.26-.15-.1-.22-.11-.28.11-.09.09-.1.25.12.29Z" />
                    <path
                        d="M433.27,397.68l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.26.26,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.16.16,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.15.15a.23.23,0,1,1-.32.32l-.12-.13-.22-.11h-.12l-.21.11-.16.21,0,.21.24-.13.1,0h.16l.1,0,.3.16.25.16a.28.28,0,0,1,.1.14l.07.5-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.18-.51.24.06h.1l.18-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.38.21-.05.26.05.25Z" />
                    <path
                        d="M434.78,397.68a.22.22,0,0,1-.22-.23V396a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,434.78,397.68Z" />
                    <path
                        d="M435.91,397.68a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.21l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3a.17.17,0,0,1,.1,0l.15.07a.29.29,0,0,1,.11.11l.15.3a.3.3,0,0,1,0,.1v1.05A.23.23,0,0,1,435.91,397.68Z" />
                    <path
                        d="M437.05,397.68a.23.23,0,0,1-.23-.23V396.4l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07.07,0h.3l.08,0,.22.07a.26.26,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,437.05,397.68Z" />
                    <path
                        d="M439.23,397.68H437.8a.23.23,0,0,1-.21-.14.24.24,0,0,1,.05-.25l1-1,.26-.47-.16-.26-.1,0h-.31l-.1,0-.16.27a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.22.22,0,0,1,0-.13l.21-.35a.24.24,0,0,1,.13-.11l.23-.08h.51l.23.08a.21.21,0,0,1,.13.11l.08.15.13.2a.22.22,0,0,1,0,.13v.15a.2.2,0,0,1,0,.13l-.15.22-.13.28-.05.06-.66.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M444.36,396.85h-.08l-.1,0-.3-.15-.06-.05-.22-.22a.24.24,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.16.16,0,0,1,.1,0l.3.15a.25.25,0,0,1,.12.13l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.14-.17-.08h-.12l-.21.1-.16.21,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,0,.06l.15.3a.18.18,0,0,1,0,.1V396a.18.18,0,0,1,0,.1l-.15.3,0,.06-.23.22-.06.05-.3.15Zm-.24-.56.2.1.21-.1.17-.18.1-.2-.1-.21-.15-.15-.24-.06-.21.05-.14.14,0,.21,0,.24Z" />
                    <path
                        d="M446.47,396.85h-.07a.15.15,0,0,1-.09,0l-.37-.15a.18.18,0,0,1-.11-.08l-.15-.23-.17-.41a.29.29,0,0,1,0-.09v-.53a.13.13,0,0,1,0-.06l.15-.53.17-.34a.19.19,0,0,1,.12-.11l.37-.15h.24a.18.18,0,0,1,.1,0l.3.15a.18.18,0,0,1,.09.08l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.25-.1-.26.1-.11.23-.05.19.45-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.1.1,0,0,1-.06.05l-.3.15Zm-.3-.56.26.1.21-.1.16-.16.06-.24-.06-.2-.14-.14-.24-.06-.26.05-.19.34.11.28Z" />
                    <path
                        d="M447.83,396.78a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.24.24,0,0,1,447.83,396.78Z" />
                    <path
                        d="M449,396.78a.24.24,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.12.05-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.37v1A.23.23,0,0,1,449,396.78Z" />
                    <path
                        d="M450.09,396.78a.23.23,0,0,1-.22-.23v-1l-.05-.2-.07,0h-.22l-.13.05-.26.32a.23.23,0,1,1-.36-.28l.31-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.37v1A.23.23,0,0,1,450.09,396.78Z" />
                    <path
                        d="M452.28,396.78h-1.43a.24.24,0,0,1-.16-.4l1-1L452,395v-.14l0-.1-.06,0-.2-.13h-.24l-.21.16-.08.14a.23.23,0,1,1-.45,0v-.08a.27.27,0,0,1,0-.12l.26-.34.26-.18a.27.27,0,0,1,.12,0h.38a.28.28,0,0,1,.13,0l.35.22a.21.21,0,0,1,.11.13l.08.22a.2.2,0,0,1,0,.07V395a.3.3,0,0,1,0,.1l-.08.15-.23.4s0,0,0,0l-.64.59h.86a.22.22,0,0,1,.22.23A.23.23,0,0,1,452.28,396.78Z" />
                    <path
                        d="M457.48,395.87h-.07l-.1,0-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.07-.56.05-.1.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.21.21,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17.05-.15.19,0,.22.42-.08.42.08a.25.25,0,0,1,.15.1l.15.22.16.33a.19.19,0,0,1,0,.1V395a.17.17,0,0,1,0,.1l-.15.3a.09.09,0,0,1,0,.06l-.15.15a.14.14,0,0,1-.08.05l-.37.15A.15.15,0,0,1,457.48,395.87Zm-.4-.66.15.1.22.1.28-.11.09-.09.11-.27-.21-.37-.28-.06-.22.05-.14.14-.05.21Z" />
                    <path
                        d="M459.59,395.87h-.07l-.1,0-.3-.15-.26-.17a.2.2,0,0,1-.08-.12l-.16-.45h0s0,0,0-.07v-.53s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.21l.42.08a.22.22,0,0,1,.17.15l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.1-.25-.05h-.1l-.17.05-.15.21-.06.21h0l.43-.08.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.3V395l-.08.36a.24.24,0,0,1-.09.13l-.23.15-.33.17Zm-.41-.67.16.11.22.1.36-.21L460,395v-.1l-.05-.18-.14-.14-.24-.06-.21.05-.15.16-.1.19Z" />
                    <path
                        d="M461,395.87a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.5A.23.23,0,0,1,461,395.87Z" />
                    <path
                        d="M462.08,395.87a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,462.08,395.87Z" />
                    <path
                        d="M463.29,395.87a.23.23,0,0,1-.23-.23v-1l-.1-.2-.12-.08h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.22.22,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.18.18,0,0,1,.08.09l.15.3a.16.16,0,0,1,0,.1v1.05A.22.22,0,0,1,463.29,395.87Z" />
                    <path
                        d="M465.48,395.87H464a.23.23,0,0,1-.16-.39l1.05-1.05.19-.25.05-.16v-.15l0-.1-.17-.09h-.36l-.14.05-.05.14V394a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.16s0,0,0-.07l.08-.22a.19.19,0,0,1,0-.09l.08-.08a.19.19,0,0,1,.09-.05l.22-.08H465l.1,0,.3.16a.18.18,0,0,1,.11.13l.08.22a.2.2,0,0,1,0,.07v.23a.15.15,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.3-.69.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,465.48,395.87Z" />
                    <path
                        d="M470.53,395l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.45v-.5l.08-.56a.11.11,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.21.21,0,0,1,.13.09l.16.23a.23.23,0,0,1-.07.31A.22.22,0,0,1,471,393l-.1-.15-.22-.06h-.17l-.16,0-.15.26,0,.22.24-.12a.16.16,0,0,1,.1,0h.15a.18.18,0,0,1,.1,0l.3.15.25.17a.22.22,0,0,1,.1.13l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.31.08Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.24V394l-.05-.16-.15-.11-.28-.11-.38.21-.05.18.06.33Z" />
                    <path
                        d="M472.64,395l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.11.11,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.29l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.14l0-.11-.18-.05h-.17l-.15,0-.16.26,0,.15.42-.07.35.08a.24.24,0,0,1,.11.06l.22.22.05.06.15.3a.43.43,0,0,1,0,.11v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.14.1Zm-.19-.51.24.06.27-.06.1-.15.11-.27-.11-.22-.16-.16-.24-.06-.2.06-.14.14-.05.2.05.33Z" />
                    <path d="M474.07,395a.23.23,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,474.07,395Z" />
                    <path
                        d="M475.28,395a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0h-.23l-.14.05-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.23-.08H475l.23.08a.24.24,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1v1.06A.24.24,0,0,1,475.28,395Z" />
                    <path
                        d="M476.41,395a.24.24,0,0,1-.23-.23v-1l-.12-.21h-.27l-.07,0-.28.27a.23.23,0,0,1-.32-.32l.3-.3.06,0,.15-.08.1,0h.38l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,476.41,395Z" />
                    <path
                        d="M478.6,395h-1.51a.24.24,0,0,1-.21-.14.23.23,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16V393l-.08-.17-.11,0h-.36l-.07,0-.13.17v.1a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.17.17,0,0,1,0-.1l.07-.15.05-.06.15-.15a.09.09,0,0,1,.06,0l.15-.08a.16.16,0,0,1,.1,0h.52l.23.07a.25.25,0,0,1,.13.12l.15.3a.3.3,0,0,1,0,.1v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.7.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,478.6,395Z" />
                    <path
                        d="M483.73,394l-.43-.08a.24.24,0,0,1-.14-.1l-.15-.23-.17-.41a.29.29,0,0,1,0-.09v-.53a.13.13,0,0,1,0-.06L483,392l.17-.34a.19.19,0,0,1,.1-.1l.3-.15a.16.16,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.32.32,0,0,1,.09.08l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.18.09-.12.24,0,.17.2-.1a.16.16,0,0,1,.1,0h.15a.16.16,0,0,1,.1,0l.3.15.06,0,.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.25-.51.29.06.21-.06.14-.14.06-.24-.05-.2-.16-.16-.27-.11-.2.1-.21.36.12.28Z" />
                    <path
                        d="M485.76,394l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49L485,392a.42.42,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0H486a.18.18,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.24.24,0,0,1-.31-.1l0-.09-.19-.09h-.11l-.21.1-.16.21,0,.21.24-.12a.18.18,0,0,1,.1,0h.15a.16.16,0,0,1,.1,0l.31.15a.2.2,0,0,1,.08.08l.15.22.17.33a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.2.2,0,0,1-.13.09l-.3.08Zm-.18-.51.24.06h.09l.16,0,.11-.16.1-.21-.22-.39-.24-.1-.23.11-.15.15-.05.21.05.24Z" />
                    <path
                        d="M487.27,394a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.24.24,0,0,1,487.27,394Z" />
                    <path
                        d="M488.4,394a.24.24,0,0,1-.23-.23v-1l-.12-.21h-.27l-.06,0-.27.34a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.08-.06l.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,488.4,394Z" />
                    <path
                        d="M489.53,394a.23.23,0,0,1-.22-.23V392.7l0-.12-.08,0H489l-.15.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,489.53,394Z" />
                    <path
                        d="M491.72,394h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.13-.27,0-.06.09-.08v-.07l-.16-.21-.14-.08h-.24l-.26.16,0,.14a.23.23,0,1,1-.45,0V392a.2.2,0,0,1,0-.07l.07-.22a.2.2,0,0,1,.12-.13l.15-.08.2-.14.12,0h.38a.28.28,0,0,1,.13,0l.33.26.18.26a.19.19,0,0,1,0,.12v.23a.2.2,0,0,1-.07.16l-.12.13-.14.26a.09.09,0,0,1,0,.06l-.67.67h.89a.23.23,0,0,1,.23.23A.24.24,0,0,1,491.72,394Z" />
                    <path
                        d="M496.85,393.08h-.08l-.1,0-.3-.15-.25-.17a.27.27,0,0,1-.09-.12l-.15-.45h0a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06L496,391a.21.21,0,0,1,0-.07l.23-.3a.25.25,0,0,1,.13-.09l.3-.07h.2l.42.08a.22.22,0,0,1,.17.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.16.05-.16.21-.06.21h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.31.31,0,0,1,0,.1l.09.44-.08.42a.24.24,0,0,1-.1.14l-.23.15-.32.17Zm-.42-.67.17.11.21.1.36-.2.06-.29-.06-.21-.14-.14-.24-.06-.2,0-.16.16-.09.19Z" />
                    <path
                        d="M499,393.08h-.15l-.1,0-.3-.15-.25-.17a.2.2,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07H499l.36.08a.22.22,0,0,1,.13.1l.16.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22-.05h-.17l-.17.05-.14.19,0,.22.29-.07H499l.35.08a.24.24,0,0,1,.11.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.21.21,0,0,1-.1.14l-.22.15-.33.17Zm-.1-.45h.05l.37-.21.06-.29-.06-.21-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.21.06.3.14.1Z" />
                    <path
                        d="M500.32,393.08a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,500.32,393.08Z" />
                    <path
                        d="M501.45,393.08a.23.23,0,0,1-.23-.23V391.8l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,501.45,393.08Z" />
                    <path
                        d="M502.58,393.08a.23.23,0,0,1-.23-.23V391.8l0-.16-.1-.07H502l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,502.58,393.08Z" />
                    <path
                        d="M504.77,393.08h-1.44a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.26-.46v-.09l-.11-.17-.15-.05h-.3l-.18.09-.09.13v.09a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22V391a.28.28,0,0,1,0-.12l.25-.34.09-.05.23-.08h.52l.23.08.08.05.08.08.18.26a.28.28,0,0,1,0,.12v.23a.28.28,0,0,1,0,.13l-.15.22-.14.28a.21.21,0,0,1,0,.06l-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,504.77,393.08Z" />
                    <path
                        d="M393.46,424.45l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.24.24,0,0,1-.06-.11l-.08-.37a.27.27,0,0,1,0-.09V423l.07-.56a.31.31,0,0,1,.05-.1l.22-.31s0-.05.08-.06l.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15a.1.1,0,0,1,.05,0l.16.15a.24.24,0,0,1,0,.32.22.22,0,0,1-.32,0l-.13-.12-.22-.11h-.12l-.21.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.15a.19.19,0,0,1,.1,0l.3.15.25.16a.23.23,0,0,1,.1.15l.08.49-.09.36a.31.31,0,0,1-.05.1l-.23.23a.24.24,0,0,1-.11.06l-.3.08Zm-.19-.5.24.06h.1l.18-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.38.22-.05.25.06.25Z" />
                    <path
                        d="M395.34,424.45l-.35-.08a.23.23,0,0,1-.15-.12l-.06-.12-.13-.12a.23.23,0,0,1-.06-.16v-.3a.2.2,0,0,1,0-.13l.29-.44a.16.16,0,0,1-.09-.12l-.08-.22a.17.17,0,0,1,0-.07v-.23a.36.36,0,0,1,0-.1l.08-.15a.19.19,0,0,1,.1-.1l.3-.15a.19.19,0,0,1,.1,0h.45a.23.23,0,0,1,.11,0l.3.15a.19.19,0,0,1,.1.1l.07.15a.19.19,0,0,1,0,.1v.23s0,.05,0,.07l-.08.22a.23.23,0,0,1-.09.12l.29.44a.2.2,0,0,1,0,.13v.3a.24.24,0,0,1-.07.16l-.12.12-.06.12a.23.23,0,0,1-.15.12l-.3.08Zm-.14-.49.2.05h.39l.15,0,0-.06,0-.06.09-.08v-.14l-.22-.32-.31-.07-.32.07-.21.32v.13l.08.09.05.06Zm0-1.35.35.14.35-.14,0-.08,0-.17-.19-.09h-.34l-.21.12Z" />
                    <path
                        d="M397,424.45a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,397,424.45Z" />
                    <path
                        d="M398.21,424.45a.22.22,0,0,1-.23-.22v-1l-.08-.17-.11,0h-.21l-.1.05-.34.28a.23.23,0,1,1-.28-.36l.38-.3.19-.1.1,0h.37l.23.07a.22.22,0,0,1,.13.12l.15.3a.16.16,0,0,1,0,.1v1.06A.22.22,0,0,1,398.21,424.45Z" />
                    <path
                        d="M399.34,424.45a.22.22,0,0,1-.23-.22v-1L399,423h-.21l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07H399l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.17.17,0,0,1,0,.1v1.06A.23.23,0,0,1,399.34,424.45Z" />
                    <path
                        d="M401.53,424.45h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1.05.31-.46-.16-.26-.1,0h-.36l-.07,0-.09.09-.05.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08s0-.05,0-.07l.08-.23a.22.22,0,0,1,.05-.08l.15-.16.06,0,.15-.07a.23.23,0,0,1,.11,0h.52l.23.08a.28.28,0,0,1,.13.11l.07.15.14.21a.25.25,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.39.54-.64.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,401.53,424.45Z" />
                    <path
                        d="M406.65,423.55l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22-.17-.42a.15.15,0,0,1,0-.09v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15h.32l.38.15a.25.25,0,0,1,.13.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.12-.3-.1-.26.1-.11.23-.05.18.29-.12h.16l.1,0,.3.15.06,0,.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06Zm-.24-.51.29.06.21-.06.14-.14.06-.24-.05-.2-.16-.16-.21-.11-.26.11-.21.35.12.29Z" />
                    <path
                        d="M408.69,423.55l-.36-.08-.1-.06-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.09.08.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.2.1-.16.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.06,0,.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06-.3.07Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24-.05-.2-.16-.16-.27-.11-.22.11-.15.16-.05.2.05.25Z" />
                    <path
                        d="M410.2,423.55a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,410.2,423.55Z" />
                    <path
                        d="M411.33,423.55a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13.05-.26.32a.21.21,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.22-.08h.45l.23.08a.24.24,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,411.33,423.55Z" />
                    <path
                        d="M412.46,423.55a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.12.05-.26.32a.23.23,0,1,1-.36-.28l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,412.46,423.55Z" />
                    <path
                        d="M414.65,423.55h-1.44a.22.22,0,0,1-.2-.14.21.21,0,0,1,.05-.25l1-1,.14-.27a.21.21,0,0,1,0-.06l.09-.08v-.07l-.16-.21-.14-.08h-.24l-.21.16-.08.14a.23.23,0,1,1-.46,0v-.07a.28.28,0,0,1,0-.13l.26-.34.26-.17a.17.17,0,0,1,.12,0h.38a.22.22,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.24.24,0,0,1-.07.16l-.12.13-.14.27,0,.06-.67.66h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,414.65,423.55Z" />
                    <path
                        d="M419.85,422.72h-.07a.23.23,0,0,1-.11,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.22.22,0,0,1,0-.08v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.22.22,0,0,1,.13-.08l.3-.08H420l.36.08a.26.26,0,0,1,.16.15l.07.22a.23.23,0,1,1-.43.15l0-.11-.18-.05h-.17l-.17.05-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.1.1,0,0,1,0,.05l.15.31a.17.17,0,0,1,0,.1v.07a.29.29,0,0,1,0,.09l-.15.37a.24.24,0,0,1-.09.11l-.22.15-.33.16A.17.17,0,0,1,419.85,422.72Zm-.4-.66.15.09.21.11.38-.22.11-.26-.11-.21-.15-.16-.24-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M422,422.72h-.07l-.09,0-.37-.15-.08-.05-.15-.15a.47.47,0,0,1-.06-.09l-.15-.45s0-.05,0-.08v-.52s0,0,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.08H422l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.14,0-.11.21-.05.2.45-.07.36.08a.17.17,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.08.43-.08.42a.24.24,0,0,1-.09.15l-.23.15-.33.16A.17.17,0,0,1,422,422.72Zm-.32-.57.28.11.37-.21,0-.28,0-.22-.14-.14-.24-.06-.26.06-.2.34.11.32Z" />
                    <path
                        d="M423.32,422.72a.23.23,0,0,1-.23-.23V421a.23.23,0,0,1,.46,0v1.51A.23.23,0,0,1,423.32,422.72Z" />
                    <path
                        d="M424.45,422.72a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.18a.28.28,0,0,1,.13,0h.3a.31.31,0,0,1,.13,0l.22.16a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,424.45,422.72Z" />
                    <path
                        d="M425.58,422.72a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.16a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,425.58,422.72Z" />
                    <path
                        d="M427.77,422.72h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.05.19-.25.05-.16v-.15l0-.1-.22-.09h-.31l-.18.09-.08.14a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.24.24,0,0,1,0-.12l.26-.34a.19.19,0,0,1,.09-.05l.22-.08h.52l.41.16a.28.28,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.3-.69.69h.89a.24.24,0,0,1,.23.23A.23.23,0,0,1,427.77,422.72Z" />
                    <path
                        d="M432.82,421.74l-.35-.08-.11-.06-.23-.23a.27.27,0,0,1-.06-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.49,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,1,1-.43.15l0-.11-.18,0h-.17l-.15,0-.16.27,0,.14.41-.07.42.08a.19.19,0,0,1,.14.09l.15.23.17.33a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.26.26,0,0,1-.13.1l-.3.07Zm-.18-.51.24.06H433l.16,0,.11-.16.11-.27-.21-.38-.29-.05-.21.05-.14.14-.05.2.05.33Z" />
                    <path
                        d="M434.93,421.74l-.35-.08-.11-.06-.22-.23a.24.24,0,0,1-.06-.09l-.15-.45h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53,0-.07.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,1,1-.43.15l0-.11-.18,0h-.18l-.16.05-.16.2-.06.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24v-.09l-.05-.19-.15-.14-.24-.06-.2.06-.16.16-.09.18.1.32Z" />
                    <path
                        d="M436.37,421.74a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,436.37,421.74Z" />
                    <path
                        d="M437.5,421.74a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.14.05-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09-.05l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,437.5,421.74Z" />
                    <path
                        d="M438.7,421.74a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.21l-.1.06-.34.27a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.19-.1a.23.23,0,0,1,.11,0h.37l.22.08a.26.26,0,0,1,.14.11l.15.3a.43.43,0,0,1,0,.11v1.05A.23.23,0,0,1,438.7,421.74Z" />
                    <path
                        d="M440.89,421.74h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.18-.25.05-.16v-.14l0-.07-.17-.13H440l-.1,0-.09.17v.1a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.25.25,0,0,1,.13-.12l.23-.07h.52l.1,0,.16.08a.1.1,0,0,1,.05,0l.16.15,0,.06.07.15a.19.19,0,0,1,0,.1v.23a.19.19,0,0,1,0,.07l-.07.23,0,.06-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,440.89,421.74Z" />
                    <path
                        d="M445.94,420.83l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.12-.12-.22-.11H446l-.21.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.23.23,0,0,1,.11,0l.3.15.25.16a.24.24,0,0,1,.09.15l.08.49-.08.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.5.24.06h.09l.19-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.11-.38.21-.05.25.05.25Z" />
                    <path
                        d="M448.06,420.83l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.23.23,0,0,1,.11,0h.22a.17.17,0,0,1,.1,0l.3.15a.27.27,0,0,1,.11.1l.07.15a.22.22,0,0,1-.4.2l0-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.07l.08,0,.38.15.08.05.15.15a.22.22,0,0,1,.05.08l.15.37a.29.29,0,0,1,0,.09V420a.17.17,0,0,1,0,.1l-.15.31-.16.25a.24.24,0,0,1-.15.09Zm-.19-.5.24.06.26-.06.1-.15.11-.22-.11-.28-.09-.09-.28-.11-.37.21-.05.25.05.25Z" />
                    <path
                        d="M449.49,420.83a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,449.49,420.83Z" />
                    <path
                        d="M450.69,420.83a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.21l-.1.05-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.19-.1.11,0h.37l.23.07a.25.25,0,0,1,.13.12l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,450.69,420.83Z" />
                    <path
                        d="M451.83,420.83a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.21l-.14.05-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.24.24,0,0,1,.08-.06l.23-.07h.37l.11,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,451.83,420.83Z" />
                    <path
                        d="M454,420.83h-1.43a.23.23,0,0,1-.21-.13.25.25,0,0,1,0-.25l1-1.05.19-.26.06-.23-.09-.23-.1,0h-.32l-.09.08-.06,0-.06,0,0,.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.12-.06.12-.12a.26.26,0,0,1,.16-.07h.53l.22.08a.21.21,0,0,1,.13.11l.08.15.09.26s0,.05,0,.07V419s0,.05,0,.07l-.08.23,0,.06-.23.31-.64.69H454a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M459.22,419.93h-.08l-.08,0-.38-.15a.27.27,0,0,1-.1-.08l-.15-.23-.18-.41v0h0a.22.22,0,0,1,0-.08v-.58l.16-.53.16-.34a.22.22,0,0,1,.16-.12l.38-.08h.19l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.15-.21-.06h-.1l-.22.05-.1.2-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.09.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.19.19,0,0,1,459.22,419.93Zm-.31-.56.26.1.21-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06-.26.06-.19.34.11.28Z" />
                    <path
                        d="M461.33,419.93h-.15a.17.17,0,0,1-.1,0l-.31-.15a.1.1,0,0,1,0,0l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.22-.31a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17.05-.14.19,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.23.22a.39.39,0,0,1,.06.11l.08.43-.08.36a.33.33,0,0,1-.06.1l-.23.23-.06,0-.3.15A.19.19,0,0,1,461.33,419.93Zm-.1-.46h0l.23-.11.15-.15.06-.24-.06-.21-.14-.14-.24-.06h-.09l-.19.05-.14.14-.05.2.06.25.15.15Z" />
                    <path
                        d="M462.69,419.93a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,462.69,419.93Z" />
                    <path
                        d="M463.82,419.93a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.14l-.17.11-.26.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18a.24.24,0,0,1,.12,0h.3a.23.23,0,0,1,.16.06l.16.15,0,.06.15.3a.44.44,0,0,1,0,.1v1.06A.22.22,0,0,1,463.82,419.93Z" />
                    <path
                        d="M465,419.93a.23.23,0,0,1-.23-.23v-1.06l0-.15-.1-.07h-.17l-.17.11-.26.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18.12,0h.31l.12,0,.23.16a.21.21,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,465,419.93Z" />
                    <path
                        d="M467.13,419.85H465.7a.23.23,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-.95.13-.33.05-.07.08-.09V418l-.16-.21-.13-.09h-.24l-.26.16,0,.15a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.15-.07.2-.14a.33.33,0,0,1,.13,0h.38a.25.25,0,0,1,.12,0l.34.25.18.27a.25.25,0,0,1,0,.12v.23a.26.26,0,0,1-.07.16l-.12.12-.13.33a.16.16,0,0,1-.06.08l-.63.59h.85a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M472.34,419h-.08l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.22.22,0,0,1-.05-.08l-.15-.46h0a.13.13,0,0,1,0-.06v-.53a.13.13,0,0,1,0-.06l.15-.53a.21.21,0,0,1,0-.07l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.22.22,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.11-.19,0h-.17l-.16,0-.16.21-.06.21h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.26.26,0,0,1-.1.13l-.23.15-.32.17Zm-.26-.5.21.05.38-.21.05-.22V418l-.06-.18-.14-.14-.24-.06-.2.06-.16.15-.09.19.1.31Z" />
                    <path
                        d="M474.45,419h-.15l-.1,0-.3-.15-.06,0-.15-.16a.16.16,0,0,1-.06-.08l-.15-.46a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.17-.34a.18.18,0,0,1,.14-.11l.3-.08h.29l.35.09a.18.18,0,0,1,.13.09l.16.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.06l-.1-.16-.22-.05h-.17l-.15,0-.1.21-.05.19.24-.06h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.26.26,0,0,1-.1.13l-.22.15-.33.17Zm-.1-.45h0l.38-.21.05-.22V418l-.05-.18-.14-.14-.25-.06h-.09l-.16,0-.2.35.1.31.09.09Z" />
                    <path d="M475.81,419a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,475.81,419Z" />
                    <path
                        d="M476.94,419a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,476.94,419Z" />
                    <path
                        d="M478.07,419a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.16.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.31v1.11A.23.23,0,0,1,478.07,419Z" />
                    <path
                        d="M480.26,419h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15V417l0-.1-.23-.08h-.3l-.18.08-.08.13v.09a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22V417a.28.28,0,0,1,0-.13l.26-.34.08,0,.23-.08h.52l.41.17a.21.21,0,0,1,.11.13l.08.22s0,0,0,.08v.22s0,.05,0,.07l-.08.23,0,.06-.23.31-.69.69h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,480.26,419Z" />
                    <path
                        d="M485.31,418.12,485,418a.33.33,0,0,1-.1-.06l-.23-.23a.27.27,0,0,1-.06-.12l-.08-.45v-.5l.08-.56a.13.13,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.29l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18-.05h-.17l-.15,0-.16.26,0,.22.24-.12.1,0h.16l.38.15.07,0,.15.15,0,.06.16.31a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.16.3-.16.25a.23.23,0,0,1-.14.1Zm-.19-.51.24.06.26-.06.1-.15.12-.27-.11-.22-.1-.09-.28-.12L485,417l0,.18.05.33Z" />
                    <path
                        d="M487.42,418.12l-.36-.08a.33.33,0,0,1-.1-.06l-.23-.23a.41.41,0,0,1-.05-.09l-.15-.45h0a.11.11,0,0,1,0-.08v-.51l.16-.53,0,0,.23-.38a.21.21,0,0,1,.13-.1l.31-.08h.2l.42.08a.2.2,0,0,1,.17.15l.08.22a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.15,0-.17.28-.06.22.28-.14.1,0h.08l.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.09.35a.24.24,0,0,1-.06.11L488,418a.39.39,0,0,1-.11.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.21-.05-.4.23-.08.16.1.32Z" />
                    <path
                        d="M488.85,418.12a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,488.85,418.12Z" />
                    <path
                        d="M490,418.12a.22.22,0,0,1-.22-.23v-1.05l0-.13-.07,0h-.23l-.14.05L489,417a.24.24,0,0,1-.32,0,.26.26,0,0,1,0-.33l.3-.3.09-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,490,418.12Z" />
                    <path
                        d="M491.19,418.12a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0h-.23l-.14.05-.27.27a.23.23,0,1,1-.31-.33l.3-.3.08-.05.23-.08h.45l.22.08a.21.21,0,0,1,.13.11l.15.3a.23.23,0,0,1,0,.11v1.05A.23.23,0,0,1,491.19,418.12Z" />
                    <path
                        d="M493.38,418.12h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.06.18-.24.05-.16v-.14l0-.07-.17-.13h-.37l-.1,0-.08.17v.1a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.19.19,0,0,1,0-.1l.15-.3a.22.22,0,0,1,.13-.12l.23-.07h.52l.1,0,.15.08.06,0,.15.15,0,.06.08.15a.18.18,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.69.69h1a.23.23,0,0,1,.22.23A.22.22,0,0,1,493.38,418.12Z" />
                    <path
                        d="M498.43,417.14l-.36-.09a.31.31,0,0,1-.1-.05l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.09.08l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.2.1-.16.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.06,0,.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11L499,417a.31.31,0,0,1-.1.05l-.3.08Zm-.19-.51.25.06h.09l.19-.05.13-.14.07-.24-.06-.2-.16-.16-.27-.11-.22.11-.15.16-.05.2.05.25Z" />
                    <path
                        d="M500.54,417.14l-.35-.09-.11-.05-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.24.24,0,0,1-.31-.1l0-.09-.18-.09h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.08l.1,0,.3.15.06,0,.23.23,0,.06.15.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3,0,.06-.23.23-.11.05Zm-.18-.51.24.06.2-.06.16-.15.1-.21-.1-.21-.17-.17-.21-.1-.21.1-.15.16-.05.2.05.25Z" />
                    <path d="M502,417.14a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,502,417.14Z" />
                    <path
                        d="M503.18,417.14a.22.22,0,0,1-.22-.23V416l-.1-.24-.09,0h-.23l-.13.05-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.11-.07l.22-.08h.45l.22.08a.2.2,0,0,1,.14.13l.15.38a.19.19,0,0,1,0,.08v1A.23.23,0,0,1,503.18,417.14Z" />
                    <path
                        d="M504.31,417.14a.22.22,0,0,1-.22-.23v-1l-.13-.21h-.27l-.06,0-.27.34a.22.22,0,1,1-.35-.28l.3-.38.07-.06.15-.07a.19.19,0,0,1,.1,0H504a.17.17,0,0,1,.1,0l.15.07a.27.27,0,0,1,.11.1l.15.3a.43.43,0,0,1,0,.11v1.05A.23.23,0,0,1,504.31,417.14Z" />
                    <path
                        d="M506.5,417.14H505a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.23-.34v-.14L506,415l-.13-.08h-.3l-.08.08-.06.05-.07,0,0,.14a.23.23,0,1,1-.45,0v-.07a.22.22,0,0,1,0-.08l.07-.22a.2.2,0,0,1,.12-.13l.12-.06.12-.13a.23.23,0,0,1,.16-.06H506a.2.2,0,0,1,.13,0l.33.25a.15.15,0,0,1,.06.09l.07.22a.24.24,0,0,1,0,.08v.22a.17.17,0,0,1,0,.1l-.07.15-.25.34-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,506.5,417.14Z" />
                    <path
                        d="M397.6,463.74h-.07l-.1,0-.3-.15-.25-.17a.2.2,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17.05-.14.2,0,.21.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,0,.06l.16.3a.36.36,0,0,1,0,.1v.08a.24.24,0,0,1,0,.08l-.15.38a.16.16,0,0,1-.08.1l-.23.15-.32.17Zm-.39-.66.14.1.22.1.38-.21.1-.26-.1-.22-.16-.15-.24-.06-.2.06-.14.14-.06.2Z" />
                    <path
                        d="M399.72,463.74h-.16l-.38-.16a.18.18,0,0,1-.08-.05l-.15-.15a.22.22,0,0,1-.05-.08l-.15-.46h0a.17.17,0,0,1,0-.07v-.59l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.16-.21-.05h-.17l-.15,0-.11.22-.05.19.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.09.44-.08.42a.24.24,0,0,1-.1.14l-.23.15-.32.17Zm-.33-.57.28.11.37-.2.06-.29-.06-.21-.14-.14-.24-.06-.26.06-.19.34.1.31Z" />
                    <path
                        d="M401.07,463.74a.22.22,0,0,1-.22-.22V462a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,401.07,463.74Z" />
                    <path
                        d="M402.2,463.74a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.21.21,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,402.2,463.74Z" />
                    <path
                        d="M403.34,463.74a.22.22,0,0,1-.23-.22v-1.06l-.05-.16-.09-.07h-.17l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,403.34,463.74Z" />
                    <path
                        d="M405.52,463.74h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24L405,462.3l.18-.25.05-.15v-.16l0-.1-.23-.09h-.31l-.17.09-.09.13v.09a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.2.2,0,0,1,0-.13l.25-.34.09-.05.23-.08h.52l.4.17a.2.2,0,0,1,.12.13l.07.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.07.23,0,.06-.22.31-.7.69h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M410.65,462.76l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.17.17,0,0,1,0-.07v-.42l.08-.56a.16.16,0,0,1,0-.09l.23-.37a.28.28,0,0,1,.13-.11l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.15.05-.16.26,0,.22.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15a.18.18,0,0,1,.07.05l.15.15,0,.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3-.17.26a.19.19,0,0,1-.14.09Zm-.19-.5.25.06.26-.06.1-.15.11-.28-.11-.22-.09-.09-.29-.11-.37.21,0,.18.05.32Z" />
                    <path
                        d="M412.76,462.76l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.22.22,0,0,1-.05-.08l-.15-.46h0a.17.17,0,0,1,0-.07v-.53a.2.2,0,0,1,0-.07l.15-.45.25-.42a.26.26,0,0,1,.14-.11l.3-.07h.2l.42.08a.24.24,0,0,1,.17.15l.08.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.25-.05h-.11l-.15.05-.18.3,0,.12h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.19.19,0,0,1,.05.1l.08.31v.2l-.09.36a.19.19,0,0,1-.05.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06-.2.06-.16.15-.09.19.1.31Z" />
                    <path
                        d="M414.2,462.76a.22.22,0,0,1-.23-.22V461.1a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,414.2,462.76Z" />
                    <path
                        d="M415.33,462.76a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.27.26a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.12A.22.22,0,0,1,415.33,462.76Z" />
                    <path
                        d="M416.53,462.76a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.2.2,0,0,1,.13.12l.16.3a.3.3,0,0,1,0,.1v1.06A.22.22,0,0,1,416.53,462.76Z" />
                    <path
                        d="M418.72,462.76h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25,0-.16v-.13l0-.07-.17-.14h-.36l-.11,0-.08.17v.1a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.22.22,0,0,1,0-.11l.15-.3a.24.24,0,0,1,.13-.11l.23-.08h.52a.17.17,0,0,1,.1,0l.15.07.06,0,.15.15.05.06.07.15a.23.23,0,0,1,0,.11V461a.14.14,0,0,1,0,.07l-.07.23a.21.21,0,0,1,0,.06l-.22.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M423.7,461.86l-.36-.09a.17.17,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.22-.3.08-.07.31-.15.1,0h.22l.1,0,.31.15.06,0,.15.16a.24.24,0,0,1,0,.32.23.23,0,0,1-.32,0l-.13-.12-.22-.11h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.06,0,.23.23a.39.39,0,0,1,.06.11l.08.43-.08.35a.39.39,0,0,1-.06.11l-.23.22a.24.24,0,0,1-.11.06l-.3.08Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24-.06-.2-.15-.16-.27-.11-.22.11-.16.16-.05.2.06.25Z" />
                    <path
                        d="M425.81,461.86l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12L425,461v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0H426l.11,0,.3.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.2.1-.16.22,0,.2.24-.12.1,0H426l.38.15.07.05.15.15a.35.35,0,0,1,.05.08l.15.38a.19.19,0,0,1,0,.08V461a.36.36,0,0,1,0,.1l-.16.3-.16.25a.28.28,0,0,1-.14.1Zm-.19-.51.24.06.26-.06.1-.15.11-.22-.11-.28-.09-.08-.28-.12-.21.11-.15.16-.06.2.06.25Z" />
                    <path
                        d="M427.24,461.86a.22.22,0,0,1-.22-.23V460.2a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,427.24,461.86Z" />
                    <path
                        d="M428.45,461.86a.23.23,0,0,1-.23-.23v-1l-.08-.17-.11,0h-.21l-.1.06-.34.27a.22.22,0,1,1-.28-.35l.38-.3.19-.11.1,0h.37l.23.08a.24.24,0,0,1,.13.11l.15.3a.2.2,0,0,1,0,.1v1.06A.22.22,0,0,1,428.45,461.86Z" />
                    <path
                        d="M429.58,461.86a.23.23,0,0,1-.23-.23v-1l-.13-.21H429l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.38l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.22.22,0,0,1,0,.1v1.06A.23.23,0,0,1,429.58,461.86Z" />
                    <path
                        d="M431.77,461.86h-1.44a.22.22,0,0,1-.2-.14.21.21,0,0,1,0-.24l1-1.06.19-.25.05-.24-.09-.18-.13-.08h-.29l-.09.08-.05.05-.07,0,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.08l.08-.22a.21.21,0,0,1,.11-.13l.12-.06.13-.13a.23.23,0,0,1,.16-.06h.45a.24.24,0,0,1,.12,0l.34.26a.19.19,0,0,1,.05.09l.08.22a.22.22,0,0,1,0,.08v.15a.17.17,0,0,1,0,.07l-.08.22a.09.09,0,0,1,0,.07l-.23.3-.64.69h.92a.23.23,0,0,1,.22.23A.22.22,0,0,1,431.77,461.86Z" />
                    <path
                        d="M437,461h-.08l-.08,0-.38-.15a.18.18,0,0,1-.07-.05l-.15-.15a.24.24,0,0,1-.06-.09l-.15-.45h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.24.24,0,0,1,.16-.12l.38-.08h.2l.35.08a.21.21,0,0,1,.13.09l.16.23a.23.23,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.1l-.22.05-.1.2-.06.2.46-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23-.06,0-.3.15A.19.19,0,0,1,437,461Zm-.33-.57.29.11.21-.11.15-.15.06-.24-.05-.21-.14-.14-.25-.06-.26.06-.19.34.1.32Z" />
                    <path
                        d="M439.08,461h-.15a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.14l0-.11-.18-.05h-.17l-.17.05-.14.19,0,.22.29-.08h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.09.09,0,0,1-.06,0l-.3.15A.17.17,0,0,1,439.08,461Zm-.1-.46h0l.22-.11.15-.15.07-.24-.06-.21-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.25.15.15Z" />
                    <path
                        d="M440.44,461a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,440.44,461Z" />
                    <path
                        d="M441.57,461a.23.23,0,0,1-.23-.23v-1l-.17-.28H441l-.38.39a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.45-.45a.23.23,0,0,1,.16-.06h.38a.23.23,0,0,1,.16.06l.15.15,0,.06.15.3a.23.23,0,0,1,0,.11v1.05A.23.23,0,0,1,441.57,461Z" />
                    <path
                        d="M442.7,461a.22.22,0,0,1-.22-.23v-1.05l-.05-.17-.1-.06h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.24.24,0,0,1,.12,0l.23.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,442.7,461Z" />
                    <path
                        d="M443.46,461a.23.23,0,0,1-.21-.14.22.22,0,0,1,.05-.25l1-1,.26-.46v-.09l-.16-.21-.14-.09h-.24l-.26.16,0,.15a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22V459a.19.19,0,0,1,0-.07l.07-.23a.28.28,0,0,1,.11-.13l.16-.07.2-.14a.25.25,0,0,1,.12,0h.38a.33.33,0,0,1,.13,0l.33.26.18.26a.17.17,0,0,1,0,.12v.23a.17.17,0,0,1,0,.12l-.15.23-.14.28,0,.06-.64.63.85,0a.22.22,0,0,1,.23.21.22.22,0,0,1-.21.24l-1.43.08Z" />
                    <path
                        d="M450,460.05l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.06-.09l-.15-.45h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53a.16.16,0,0,1,0-.07l.22-.31a.22.22,0,0,1,.13-.08l.3-.08h.21l.42.08a.22.22,0,0,1,.17.15l.07.22a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.14l0-.11-.25,0H450l-.17.05-.16.2-.06.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1,0Zm-.19-.51.24.06.2-.06.15-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06-.21.06-.16.16-.09.18.11.32Z" />
                    <path
                        d="M452.05,460.05l-.35-.09a.19.19,0,0,1-.14-.09l-.15-.23a.08.08,0,0,1,0-.05l-.16-.45h0s0,0,0-.07v-.52l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.16.05-.15.19,0,.22.29-.08h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.16-.5.22.05h.09l.19,0,.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.16,0-.1.16-.1.19.11.34Z" />
                    <path
                        d="M453.56,460.05a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,453.56,460.05Z" />
                    <path
                        d="M454.69,460.05a.22.22,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.31.31,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,454.69,460.05Z" />
                    <path
                        d="M455.82,460.05a.22.22,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,455.82,460.05Z" />
                    <path
                        d="M458,460.05h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.19-.24,0-.16v-.14l0-.07-.08-.08-.14-.05h-.31l-.1,0,0,.07L457,458l-.08.08v.06a.23.23,0,1,1-.45,0V458a.23.23,0,0,1,.06-.16l.13-.12.06-.12a.2.2,0,0,1,.13-.12l.22-.07h.52l.23.07.09.06.15.15,0,.06.08.15a.36.36,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69H458a.24.24,0,0,1,.23.23A.23.23,0,0,1,458,460.05Z" />
                    <path
                        d="M463.14,459.14l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.17.17,0,0,1,.08-.06l.3-.15a.17.17,0,0,1,.1,0h.22a.23.23,0,0,1,.11,0l.3.15a.19.19,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07l.09,0,.37.15.08.05.15.15a.22.22,0,0,1,.05.08l.15.37a.29.29,0,0,1,0,.09v.07a.17.17,0,0,1,0,.1l-.15.31-.16.25a.21.21,0,0,1-.15.09Zm-.19-.5.24.06.26-.06.1-.15.11-.22-.11-.28-.09-.09-.28-.11-.37.2-.05.26.06.25Z" />
                    <path
                        d="M465.25,459.14l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.22.22,0,0,1-.05-.08l-.15-.46h0s0-.05,0-.07v-.45s0,0,0-.06l.15-.53.16-.4a.24.24,0,0,1,.17-.14l.37-.07h.2l.42.08a.24.24,0,0,1,.17.15l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.1-.24-.05h-.11l-.21,0-.16.46.29-.11.08,0h.07a.23.23,0,0,1,.11,0l.3.15.25.16a.19.19,0,0,1,.09.14l.08.3v.2l-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.5.24.06.21-.06.14-.14.06-.24v-.1l0-.16-.16-.1-.22-.11-.28.11-.09.09-.1.19.11.31Z" />
                    <path
                        d="M466.68,459.14a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,466.68,459.14Z" />
                    <path
                        d="M467.81,459.14a.22.22,0,0,1-.22-.22v-1.06l0-.13-.07,0h-.23l-.14.05-.27.26a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.31v1.11A.22.22,0,0,1,467.81,459.14Z" />
                    <path
                        d="M468.94,459.14a.22.22,0,0,1-.22-.22v-1.06l0-.13-.07,0h-.23l-.14.05L468,458a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.31v1.11A.22.22,0,0,1,468.94,459.14Z" />
                    <path
                        d="M471.21,459.14H469.7a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1-1.06.19-.25.05-.23-.05-.14-.15-.12h-.37l-.1,0-.08.27a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.07l.16-.41a.21.21,0,0,1,.13-.11l.23-.08h.52a.19.19,0,0,1,.1,0l.15.07.06,0,.15.15a.47.47,0,0,1,.06.09l.07.23a.17.17,0,0,1,0,.07v.15a.15.15,0,0,1,0,.07l-.07.23a.21.21,0,0,1,0,.06l-.22.31-.7.69h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,471.21,459.14Z" />
                    <path
                        d="M476.34,458.24h-.16a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.19.19,0,0,1,.05-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15a.16.16,0,0,1,.09.07l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.11-.18-.2-.1h-.12l-.21.11-.16.21,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.19.19,0,0,1,476.34,458.24Zm-.1-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.25.16.15Z" />
                    <path
                        d="M478.3,458.16l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,0-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.23.23,0,0,1,.11,0h.22a.17.17,0,0,1,.1,0l.31.15a.21.21,0,0,1,.11.13l.07.22a.23.23,0,1,1-.43.15l0-.14-.17-.09h-.12l-.21.11-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.07a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.23.22,0,.06.15.31a.17.17,0,0,1,0,.1v.07a.17.17,0,0,1,0,.1l-.15.3a.09.09,0,0,1,0,.06l-.23.23a.21.21,0,0,1-.1.06Zm-.19-.5.24.06.2-.06.16-.16.11-.21-.11-.2-.17-.18-.21-.1-.2.1-.16.16-.05.2.06.25Z" />
                    <path
                        d="M479.73,458.16a.22.22,0,0,1-.23-.22V456.5a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,479.73,458.16Z" />
                    <path
                        d="M480.94,458.16a.22.22,0,0,1-.23-.22V457l-.1-.24-.09,0h-.23l-.12,0-.26.33a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.37a.28.28,0,0,1,.11-.08l.23-.07h.44l.23.07a.21.21,0,0,1,.13.13l.16.38a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,480.94,458.16Z" />
                    <path
                        d="M482.07,458.16a.22.22,0,0,1-.23-.22V457l-.13-.27h-.27l-.06,0-.27.34a.23.23,0,0,1-.35-.29l.3-.37a.16.16,0,0,1,.08-.06l.15-.08a.16.16,0,0,1,.1,0h.37a.22.22,0,0,1,.11,0l.15.08a.2.2,0,0,1,.11.11l.15.38a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,482.07,458.16Z" />
                    <path
                        d="M484.25,458.16h-1.5a.25.25,0,0,1-.22-.14.23.23,0,0,1,.06-.25l1-1,.26-.44v-.13l-.09-.18-.13-.09h-.29l-.09.09-.06,0-.06,0,0,.15a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.12-.06.12-.12a.26.26,0,0,1,.16-.07h.46a.28.28,0,0,1,.12,0l.34.25a.41.41,0,0,1,.05.09l.08.23a.17.17,0,0,1,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39,0,.05-.64.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M489.46,457.33h-.15l-.11,0-.3-.15-.06,0-.15-.16a.22.22,0,0,1-.05-.08l-.15-.46a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.06l-.11-.16-.21-.05h-.17l-.15,0-.1.21-.06.19.25-.06h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.09.44-.08.42a.24.24,0,0,1-.1.14l-.23.15-.32.17Zm-.1-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.09l-.16,0-.2.35.1.31.09.09Z" />
                    <path
                        d="M491.57,457.33h-.15l-.1,0-.3-.15-.26-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.22-.3a.38.38,0,0,1,.13-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.29-.07h.21l.35.08a.24.24,0,0,1,.14.1l.15.22.16.33a.19.19,0,0,1,0,.1v.08a.24.24,0,0,1,0,.08l-.15.38a.18.18,0,0,1-.05.07l-.15.16-.06,0-.3.15Zm-.1-.45h0l.23-.11.09-.09.11-.28-.21-.38-.22,0h-.09l-.19.06-.14.14,0,.2.06.3.14.1Z" />
                    <path
                        d="M492.93,457.33a.23.23,0,0,1-.23-.21l-.08-1.51a.23.23,0,0,1,.22-.24.24.24,0,0,1,.24.22l.07,1.5a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M494.06,457.33a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.19l-.38.39a.23.23,0,0,1-.32-.32l.45-.45a.24.24,0,0,1,.16-.07h.38a.21.21,0,0,1,.15.07l.16.15s0,0,0,.06l.15.3a.16.16,0,0,1,0,.1v1.06A.22.22,0,0,1,494.06,457.33Z" />
                    <path
                        d="M495.19,457.33a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.19.19,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,495.19,457.33Z" />
                    <path
                        d="M497.37,457.33h-1.43a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1.05.31-.45v-.09l-.11-.16-.15-.05h-.3l-.23.08,0,.1v.12a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15s0-.05,0-.08l.08-.22a.21.21,0,0,1,.11-.13l.15-.08.26-.09h.52l.23.08.08.05.08.08.18.26a.28.28,0,0,1,0,.13v.22a.28.28,0,0,1,0,.13l-.39.54-.64.69h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M502.5,456.43l-.35-.08-.11-.06-.22-.23a.24.24,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.15.15,0,0,1,0-.07l.31-.84a.19.19,0,0,1,.16-.14l.38-.08h.19l.43.08a.23.23,0,0,1,.17.15l.07.22a.23.23,0,1,1-.43.15l0-.11-.25,0h-.11l-.21,0-.16.42h0l.43-.08.36.08a.27.27,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24v-.09l-.06-.19-.14-.14-.24-.06-.2.06-.16.16-.09.18.1.32Z" />
                    <path
                        d="M504.54,456.43l-.36-.08-.1-.07-.23-.22a.27.27,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.08a.26.26,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17.05-.14.19,0,.22.28-.08h.21l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06-.3.07Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.33Z" />
                    <path
                        d="M506.05,456.43a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,506.05,456.43Z" />
                    <path
                        d="M507.18,456.43a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08H507l.23.08a.21.21,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,507.18,456.43Z" />
                    <path
                        d="M508.31,456.43a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14.05-.26.26A.23.23,0,0,1,507,455l.3-.3.09-.05.22-.08h.45l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,508.31,456.43Z" />
                    <path
                        d="M510.5,456.43h-1.44a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.26-.46v-.07l-.08-.08a.21.21,0,0,1,0-.06l0-.07-.11,0h-.3l-.1,0,0,.07a.21.21,0,0,1,0,.06l-.08.08v.06a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.24.24,0,0,1,.07-.16l.12-.12.06-.12a.25.25,0,0,1,.13-.12l.23-.07H510l.23.07a.25.25,0,0,1,.13.12l.06.12.12.12a.24.24,0,0,1,.07.16v.23a.28.28,0,0,1,0,.12l-.15.23-.14.28a.1.1,0,0,1,0,.05l-.67.67h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,510.5,456.43Z" />
                    <path
                        d="M399,487.8l-.1,0a.23.23,0,0,1-.11-.3l.84-1.87h-1.09a.22.22,0,0,1-.22-.22.22.22,0,0,1,.22-.23H400a.24.24,0,0,1,.19.1.22.22,0,0,1,0,.22l-1,2.19A.22.22,0,0,1,399,487.8Z" />
                    <path
                        d="M402.13,487.8H400.7a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.46v-.06l-.09-.09,0-.06,0-.06-.11,0h-.3l-.14.05-.12.16v.09a.23.23,0,1,1-.45,0v-.15a.18.18,0,0,1,0-.1l.07-.15.05-.06.15-.15a.19.19,0,0,1,.09-.05l.22-.08h.52l.23.08a.2.2,0,0,1,.13.11l.06.12.12.12a.21.21,0,0,1,.07.16V486a.17.17,0,0,1,0,.12l-.15.23-.14.28a.21.21,0,0,1,0,.06l-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M402.88,487.8a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,402.88,487.8Z" />
                    <path
                        d="M404,487.8a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.27-.17a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,404,487.8Z" />
                    <path
                        d="M405.15,487.8a.23.23,0,0,1-.23-.23v-1.05l-.05-.16-.09-.07h-.17l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.31-.31.26-.17a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.07.3v1.11A.22.22,0,0,1,405.15,487.8Z" />
                    <path
                        d="M407.33,487.8H405.9a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.18-.25,0-.16v-.12l-.11-.17-.15-.05h-.31l-.17.09-.09.13v.08a.23.23,0,1,1-.45,0v-.15a.17.17,0,0,1,0-.12l.25-.34.09-.05.23-.08h.52l.22.08a.19.19,0,0,1,.09.05l.08.08.18.26a.24.24,0,0,1,0,.12V486a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M412.39,486.89h-.16l-.38-.15-.08-.05-.15-.15a.41.41,0,0,1-.05-.09l-.15-.45a.12.12,0,0,1,0-.08v-.59l.15-.52.17-.35a.25.25,0,0,1,.16-.12l.38-.07h.19l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.16-.21-.05h-.1l-.22,0L412,485l-.05.2.46-.08.35.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.2l-.08.36a.18.18,0,0,1-.09.13l-.23.15-.32.17A.18.18,0,0,1,412.39,486.89Zm-.33-.57.28.12.37-.21.06-.22v-.1l-.05-.18-.14-.14-.24-.06-.26.06-.19.34.1.31Z" />
                    <path
                        d="M414.5,486.89h-.15a.22.22,0,0,1-.11,0l-.3-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.44v-.57l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.16-.21-.05h-.17l-.17,0-.15.2,0,.21.29-.07h.21l.35.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.08.42a.24.24,0,0,1-.1.14l-.23.15-.32.17A.18.18,0,0,1,414.5,486.89Zm-.1-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.09l-.19,0-.14.14,0,.2,0,.3.15.1Z" />
                    <path
                        d="M415.85,486.89a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,415.85,486.89Z" />
                    <path
                        d="M417,486.89a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.14l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.25.25,0,0,1,.12,0h.3a.24.24,0,0,1,.16.07l.15.15.05.06.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,417,486.89Z" />
                    <path
                        d="M418.12,486.89a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.06h-.17l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.08.3v1.11A.22.22,0,0,1,418.12,486.89Z" />
                    <path
                        d="M420.3,486.89h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1-1L420,485v-.09l-.11-.17-.15-.05h-.3l-.18.08-.09.13V485a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.2.2,0,0,1,0-.13l.25-.33.09-.06.23-.07.07,0h.38l.07,0,.22.07a.15.15,0,0,1,.09.06l.08.07.18.26a.28.28,0,0,1,0,.13v.22a.28.28,0,0,1,0,.13l-.15.23-.14.27,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M425.43,485.91l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.22a.41.41,0,0,1-.05-.09l-.15-.46h0v-.51a.13.13,0,0,1,0-.06l.15-.53a.08.08,0,0,1,0-.05l.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.35.09a.19.19,0,0,1,.16.14l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.15,0-.17.27-.06.23.28-.14a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.19.19,0,0,1,.09.14l.08.3v.2l-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.23L425,485l.1.31Z" />
                    <path
                        d="M427.47,485.91l-.36-.08a.24.24,0,0,1-.13-.09l-.15-.23,0-.05-.15-.46h0a.17.17,0,0,1,0-.07v-.45a.13.13,0,0,1,0-.06l.15-.53.16-.4a.18.18,0,0,1,.15-.13l.3-.08h.28l.36.09a.18.18,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0h-.17l-.14,0-.14.41.22-.06h.21l.36.09.1.05.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.17.17,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.08Zm-.16-.5.21.06h.1l.18,0,.14-.14L428,485v-.1l-.06-.18-.14-.14-.24-.06h-.09l-.16,0-.2.35.11.34Z" />
                    <path
                        d="M429,485.91a.22.22,0,0,1-.23-.22v-1.44A.22.22,0,0,1,429,484a.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,429,485.91Z" />
                    <path
                        d="M430.11,485.91a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.2.2,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,430.11,485.91Z" />
                    <path
                        d="M431.24,485.91a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.2.2,0,0,1,.09-.06l.22-.07H431l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,431.24,485.91Z" />
                    <path
                        d="M433.43,485.91H432a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15v-.14l0-.07-.09-.09-.14,0h-.3l-.11,0,0,.07,0,.06-.09.08V484a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.24.24,0,0,1,.07-.16l.12-.13.06-.12a.28.28,0,0,1,.13-.11l.23-.07.07,0h.38l.07,0,.23.07a.16.16,0,0,1,.08.06l.15.15a.1.1,0,0,1,.05.06l.07.15a.17.17,0,0,1,0,.1v.22a.14.14,0,0,1,0,.07l-.07.23,0,.07-.23.3-.69.69h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,433.43,485.91Z" />
                    <path
                        d="M438.55,485l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.08.16a.22.22,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.09-.18-.09h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.16l.38.16a.16.16,0,0,1,.1.08l.15.23.17.32a.18.18,0,0,1,0,.1v.08a.18.18,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.15.1-.21-.21-.38-.26-.1-.21.1-.16.16-.05.2.05.25Z" />
                    <path
                        d="M440.66,485l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.22.22,0,0,1-.05-.08l-.15-.37a.15.15,0,0,1,0-.09v-.52a.15.15,0,0,1,0-.07l.15-.52a.2.2,0,0,1,0-.08l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.16a.13.13,0,0,1,.08,0l.38.15a.25.25,0,0,1,.12.11l.07.15a.22.22,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.31-.1-.21.1-.17.23-.06.21.28-.14.1,0h.08l.1,0,.3.15a.1.1,0,0,1,.06.05l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24-.05-.2-.16-.16-.21-.1-.2.1-.18.18-.09.17.1.24Z" />
                    <path d="M442.1,485a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,442.1,485Z" />
                    <path
                        d="M443.23,485a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09-.05l.22-.08H443l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.23.23,0,0,1,443.23,485Z" />
                    <path
                        d="M444.44,485a.23.23,0,0,1-.23-.23v-1l-.09-.17-.1,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09-.05.23-.08h.44l.23.08a.28.28,0,0,1,.13.11l.15.31a.3.3,0,0,1,0,.1v1A.22.22,0,0,1,444.44,485Z" />
                    <path
                        d="M446.62,485h-1.51a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1.05.18-.25.06-.24,0-.1-.07,0-.05,0-.09-.09h-.29l-.17.11-.05.19a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.08-.07.26-.18a.17.17,0,0,1,.12,0h.45a.2.2,0,0,1,.16.07l.13.12.12.06a.24.24,0,0,1,.11.13l.08.23s0,0,0,.07v.15s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M451.83,484.1h-.15a.22.22,0,0,1-.11,0l-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.44a.11.11,0,0,1,0-.08v-.49l.07-.57a.24.24,0,0,1,.05-.1l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.16-.21,0h-.17l-.17,0-.15.2,0,.21.29-.07h.21l.35.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.08.42a.24.24,0,0,1-.1.14l-.23.15-.32.17A.18.18,0,0,1,451.83,484.1Zm-.1-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.09l-.19.05-.14.14-.05.2.05.3.15.1Z" />
                    <path
                        d="M453.86,484.1h-.07a.16.16,0,0,1-.1,0l-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.44v-.57L453,482l.05-.1.22-.3a.26.26,0,0,1,.13-.08l.3-.08H454l.36.09a.22.22,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17,0-.15.2,0,.21.42-.08.36.09a.21.21,0,0,1,.1.06l.23.22a.21.21,0,0,1,0,.06l.15.3a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.27.27,0,0,1-.08.1l-.23.15-.33.17A.16.16,0,0,1,453.86,484.1Zm-.39-.66.14.1.21.1.39-.21.1-.26-.11-.22-.15-.15-.24-.06-.21.06-.14.14,0,.2Z" />
                    <path
                        d="M455.22,484.1a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,455.22,484.1Z" />
                    <path
                        d="M456.43,484.1a.22.22,0,0,1-.23-.22v-1l-.1-.2-.12-.07h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,456.43,484.1Z" />
                    <path
                        d="M457.56,484.1a.22.22,0,0,1-.23-.22v-1l-.17-.27H457l-.38.38a.23.23,0,1,1-.32-.32l.45-.45a.24.24,0,0,1,.16-.07h.38a.26.26,0,0,1,.16.07l.15.15,0,.06.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,457.56,484.1Z" />
                    <path
                        d="M459.74,484.1h-1.5A.21.21,0,0,1,458,484a.2.2,0,0,1,.05-.24l1.05-1.06.18-.25.06-.15v-.16l-.05-.14-.14,0h-.36l-.17.08,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.24.24,0,0,1,.11-.13l.3-.15a.19.19,0,0,1,.1,0h.46l.07,0,.22.07a.15.15,0,0,1,.09.06l.08.07a.41.41,0,0,1,.05.09l.08.23a.15.15,0,0,1,0,.07v.22a.22.22,0,0,1,0,.08l-.08.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M464.8,483.2l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.22,0-.06-.15-.45h0a.17.17,0,0,1,0-.07v-.52s0,0,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07H465l.35.08a.21.21,0,0,1,.14.1l.15.22a.24.24,0,0,1-.06.32.24.24,0,0,1-.32-.07l-.1-.15-.22-.05h-.17l-.14,0-.11.21-.05.2.25-.07h.2l.36.08a.17.17,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06Zm-.24-.51.28.06.22-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.16.05-.1.15-.1.19.11.34Z" />
                    <path
                        d="M466.83,483.2l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16.05-.15.19,0,.22.29-.08h.2l.36.08a.21.21,0,0,1,.13.09l.15.23.17.33a.16.16,0,0,1,0,.1v.15a.18.18,0,0,1,0,.1l-.15.3-.17.25a.22.22,0,0,1-.13.1l-.3.07Zm-.18-.51.24.06H467l.16-.05.11-.16.11-.27-.21-.38-.22-.06h-.1l-.18.05-.14.14-.05.2.06.33Z" />
                    <path
                        d="M468.34,483.2a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0V483A.23.23,0,0,1,468.34,483.2Z" />
                    <path
                        d="M469.47,483.2a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.27l-.07,0-.28.28a.23.23,0,0,1-.32-.32l.3-.31.06,0,.15-.07a.19.19,0,0,1,.1,0h.38a.17.17,0,0,1,.1,0l.15.07a.19.19,0,0,1,.1.1l.15.31a.17.17,0,0,1,0,.1V483A.23.23,0,0,1,469.47,483.2Z" />
                    <path
                        d="M470.6,483.2a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.31.27-.17a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.22.22,0,0,1,.1.13l.07.3V483A.23.23,0,0,1,470.6,483.2Z" />
                    <path
                        d="M472.79,483.2h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.46v-.06l-.09-.09,0-.06,0-.06-.1,0h-.31l-.14.05-.12.16v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.08-.15a.21.21,0,0,1,0-.06l.15-.15.09-.05.22-.08h.52l.23.08a.2.2,0,0,1,.13.11l.06.12.13.12a.25.25,0,0,1,.06.16v.23a.17.17,0,0,1,0,.12l-.15.23-.13.28-.05.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M477.92,482.29l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.35.35,0,0,1-.05-.08l-.15-.38a.24.24,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53a.16.16,0,0,1,0-.07l.23-.3a.14.14,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0h.15l.08,0,.38.15a.25.25,0,0,1,.12.11l.07.15a.21.21,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.07-.31-.1-.2.1-.17.23-.06.21.28-.14a.17.17,0,0,1,.1,0H478a.23.23,0,0,1,.11,0l.3.15.25.16a.24.24,0,0,1,.09.15l.08.49-.08.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.19-.5.24.06.21-.06.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.38.22-.1.23.1.25Z" />
                    <path
                        d="M480,482.29l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.22a.23.23,0,0,1-.06-.12l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.18.18,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.15.15a.23.23,0,0,1-.32.32l-.12-.12-.22-.11H480l-.21.1-.16.21,0,.21.24-.12.1,0h.16a.19.19,0,0,1,.1,0l.3.15.25.16a.19.19,0,0,1,.09.14l.08.3v.2l-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.5.24.06h.1l.18,0,.14-.14.06-.24v-.1l0-.16-.16-.1-.27-.11-.38.21-.05.25.05.25Z" />
                    <path
                        d="M481.46,482.29a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,481.46,482.29Z" />
                    <path
                        d="M482.59,482.29a.22.22,0,0,1-.22-.22V481l0-.12-.07,0H482l-.14.05-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.23-.08h.44l.23.08a.23.23,0,0,1,.15.15l.07.31v1.11A.22.22,0,0,1,482.59,482.29Z" />
                    <path
                        d="M483.73,482.29a.22.22,0,0,1-.23-.22V481l0-.12-.07,0h-.23l-.14.05-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08-.05.23-.08h.45l.22.08a.23.23,0,0,1,.15.15l.07.31v1.11A.22.22,0,0,1,483.73,482.29Z" />
                    <path
                        d="M485.91,482.29h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1-1,.26-.48-.16-.26-.1,0H485l-.1,0-.16.27a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.12l.21-.36a.24.24,0,0,1,.13-.11l.23-.07.07,0h.37l.08,0,.22.07a.21.21,0,0,1,.13.11l.08.16.14.2a.24.24,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.16.23-.13.27,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M491.12,481.39H491a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.11.13l.08.23a.23.23,0,0,1-.43.14l-.05-.14-.17-.08h-.12l-.2.1-.16.21,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23a.1.1,0,0,1,.05.06l.15.3a.3.3,0,0,1,0,.1v.07a.3.3,0,0,1,0,.1l-.15.31-.05.06-.22.22-.06,0-.3.15A.19.19,0,0,1,491.12,481.39Zm-.25-.56.21.1.2-.1.18-.18.1-.2-.1-.21-.16-.16-.24-.06-.2.06-.14.14-.05.2.05.25Z" />
                    <path
                        d="M493.15,481.31l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23-.17-.41v0h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15.08,0h.15l.09,0,.37.15a.22.22,0,0,1,.13.14l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.13-.3-.09-.26.1-.11.22-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.23.23.06.1.08.43-.08.36a.41.41,0,0,1-.07.11l-.22.22a.24.24,0,0,1-.11.06Zm-.24-.5.29.06.21-.06.14-.14.06-.24-.06-.21-.14-.14-.24-.06-.26.06-.19.34.11.28Z" />
                    <path
                        d="M494.59,481.31a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,494.59,481.31Z" />
                    <path
                        d="M495.72,481.31a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.13,0-.26.33a.22.22,0,0,1-.32,0,.22.22,0,0,1,0-.31l.3-.38a.25.25,0,0,1,.1-.08l.23-.07h.45l.22.07a.23.23,0,0,1,.15.18l.08.37v1A.22.22,0,0,1,495.72,481.31Z" />
                    <path
                        d="M496.85,481.31a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.13,0-.26.33a.22.22,0,0,1-.32,0,.22.22,0,0,1,0-.31l.3-.38a.23.23,0,0,1,.11-.08l.22-.07h.45l.22.07a.23.23,0,0,1,.15.18l.08.37v1A.22.22,0,0,1,496.85,481.31Z" />
                    <path
                        d="M499.11,481.31H497.6a.22.22,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-1,.25-.43v-.14l0-.1-.07,0-.06,0-.08-.08h-.29l-.21.16-.09.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.12l.25-.34.26-.18a.28.28,0,0,1,.13,0h.45a.24.24,0,0,1,.16.07l.13.12.11.06a.25.25,0,0,1,.12.13l.07.23a.19.19,0,0,1,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39a.1.1,0,0,1,0,0l-.63.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M504.31,480.48h-.15l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.44a.11.11,0,0,1,0-.08V479l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.25.25,0,0,1,.16.14l.07.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.2.2,0,0,1,.13.09l.15.23.17.32a.36.36,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08L505,480l-.05.08-.15.15-.06,0-.31.15Zm-.09-.45h0l.22-.11.09-.09.12-.28-.21-.38-.22-.05h-.1l-.18.05-.14.14,0,.2,0,.3.15.1Z" />
                    <path
                        d="M506.35,480.48h-.08l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.44a.11.11,0,0,1,0-.08V479l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.25.25,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.18l-.16,0-.15.2,0,.21.42-.08.36.09.1.05.23.23,0,.06.15.3a.18.18,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.09.1l-.22.16-.33.16Zm-.4-.66.15.1.21.1.38-.21.11-.26-.11-.21-.15-.16-.25-.06-.2.06-.14.14-.05.2Z" />
                    <path
                        d="M507.71,480.48a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,507.71,480.48Z" />
                    <path
                        d="M508.84,480.48a.22.22,0,0,1-.23-.22V479.2l0-.16-.1-.06h-.17l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.12,0h.31a.28.28,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,508.84,480.48Z" />
                    <path
                        d="M510,480.48a.22.22,0,0,1-.22-.22v-1l-.1-.2-.12-.07h-.14l-.09.08-.39.32a.23.23,0,0,1-.28-.36l.51-.43a.24.24,0,0,1,.16-.07h.3a.25.25,0,0,1,.12,0l.23.15a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,510,480.48Z" />
                    <path
                        d="M512.23,480.48h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15v-.16l0-.14-.14,0h-.38l-.14,0,0,.14v.12a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.15.15,0,0,1,0-.07l.07-.23a.47.47,0,0,1,.06-.09l.07-.07a.24.24,0,0,1,.09-.06l.23-.07.07,0h.45l.08,0,.22.07.09.06.08.07a.41.41,0,0,1,.05.09l.08.23s0,0,0,.07v.22s0,.05,0,.08l-.08.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M517.21,479.5l-.36-.08a.24.24,0,0,1-.13-.09l-.15-.23,0-.05-.15-.45a.22.22,0,0,1,0-.08v-.45l.08-.56a.11.11,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.09a.22.22,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.16-.22-.05h-.17l-.16,0-.15.26,0,.22.24-.12a.17.17,0,0,1,.1,0h.15l.36.09.1.05.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.16-.5.21.06h.1l.18-.05.14-.14.06-.24v-.1l0-.18-.14-.14-.25-.06h0l-.39.22,0,.15.12.37Z" />
                    <path
                        d="M519.32,479.5l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.08-.44V478l.08-.48a.11.11,0,0,1,0-.08l.22-.38a.26.26,0,0,1,.14-.1l.3-.08h.29l.35.09a.19.19,0,0,1,.16.14l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.15,0-.16.26,0,.15.42-.08.42.08a.24.24,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.31-.17.25a.19.19,0,0,1-.14.09Zm-.19-.5.25.06.26-.06.09-.15.12-.27-.21-.38-.29-.06-.21.06-.14.14,0,.2,0,.33Z" />
                    <path
                        d="M520.75,479.5a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,520.75,479.5Z" />
                    <path
                        d="M522,479.5a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.27l-.1.05-.34.28a.23.23,0,0,1-.28-.36l.38-.3.19-.1.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,522,479.5Z" />
                    <path
                        d="M523.09,479.5a.23.23,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.31v1.11A.22.22,0,0,1,523.09,479.5Z" />
                    <path
                        d="M525.28,479.5h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1.05.32-.45v-.06l-.09-.08,0-.06,0-.07-.11,0h-.36l-.07,0-.13.17v.1a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.15a.17.17,0,0,1,0-.1l.07-.16.05,0L524,477a.1.1,0,0,1,.06-.05l.15-.07a.17.17,0,0,1,.1,0h.52l.23.08a.28.28,0,0,1,.13.11l.06.12.12.13a.24.24,0,0,1,.07.16v.22a.2.2,0,0,1,0,.13l-.38.54-.65.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,525.28,479.5Z" />
                    <path
                        d="M399.34,527.24l-.1,0a.23.23,0,0,1-.1-.31l.89-1.86h-1.14a.23.23,0,1,1,0-.45h1.5a.24.24,0,0,1,.2.11.22.22,0,0,1,0,.21l-1.06,2.19A.23.23,0,0,1,399.34,527.24Z" />
                    <path
                        d="M402.51,527.24H401a.22.22,0,0,1-.21-.14.23.23,0,0,1,0-.25l1-1,.25-.44v-.13l0-.11-.06,0-.06,0-.09-.09h-.29l-.16.11-.06.19a.23.23,0,1,1-.45,0v-.07s0,0,0-.07L401,525a.41.41,0,0,1,.05-.09l.08-.07.26-.18a.2.2,0,0,1,.13,0H402a.2.2,0,0,1,.16.07l.12.12.12.06a.2.2,0,0,1,.11.13l.08.23a.15.15,0,0,1,0,.07v.22a.43.43,0,0,1,0,.11l-.08.15-.23.39,0,.05-.64.59h.94a.22.22,0,0,1,.22.22A.22.22,0,0,1,402.51,527.24Z" />
                    <path
                        d="M403.18,527.24A.22.22,0,0,1,403,527v-1.43a.23.23,0,1,1,.45,0V527A.23.23,0,0,1,403.18,527.24Z" />
                    <path
                        d="M404.32,527.24a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.11-.07l.22-.07.07,0h.3l.08,0,.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,404.32,527.24Z" />
                    <path
                        d="M405.52,527.24a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.27l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.37-.37.06,0,.15-.07a.19.19,0,0,1,.1,0h.38a.17.17,0,0,1,.1,0l.15.07a.24.24,0,0,1,.1.1l.16.31a.3.3,0,0,1,0,.1v1A.23.23,0,0,1,405.52,527.24Z" />
                    <path
                        d="M407.71,527.24H406.2a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.23-.35v-.13l-.08-.18-.13-.09h-.32l-.17.12-.05.18a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.07-.07.26-.18a.2.2,0,0,1,.13,0h.45a.2.2,0,0,1,.13,0l.33.25a.24.24,0,0,1,.06.09l.07.23a.14.14,0,0,1,0,.07v.22a.23.23,0,0,1,0,.11l-.07.15-.25.33-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M412.84,526.41h-.08l-.08,0-.38-.15a.16.16,0,0,1-.1-.08l-.15-.23-.17-.41v0h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.22.22,0,0,1,.16-.12l.38-.07h.19l.42.08a.22.22,0,0,1,.17.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25,0h-.11l-.22,0-.1.2-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.23.23a.19.19,0,0,1,.05.1l.09.43-.09.36a.22.22,0,0,1-.05.11l-.23.22-.06,0-.3.15Zm-.31-.56.26.1.22-.1.15-.16.06-.24-.06-.2-.14-.14-.24-.06-.26.05-.19.34.11.28Z" />
                    <path
                        d="M415,526.41h-.15l-.1,0-.3-.15s0,0-.06,0l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0H415a.23.23,0,0,1,.11,0l.3.15a.2.2,0,0,1,.08.08l.16.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.2.1-.16.21,0,.22.28-.07H415l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.36a.24.24,0,0,1-.06.11l-.23.22-.06,0-.3.15Zm-.1-.45h0l.22-.11.15-.16.06-.24-.05-.2-.14-.14-.25-.06h-.09l-.19.05-.14.14-.05.2.06.25.15.16Z" />
                    <path
                        d="M416.31,526.41a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,416.31,526.41Z" />
                    <path
                        d="M417.44,526.41a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.14l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.21.21,0,0,1,.16.07l.15.15a.15.15,0,0,1,0,.06l.15.3a.16.16,0,0,1,0,.1v1A.22.22,0,0,1,417.44,526.41Z" />
                    <path
                        d="M418.57,526.33a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0H418l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.37l.23.08a.24.24,0,0,1,.15.17l.07.37v1A.23.23,0,0,1,418.57,526.33Z" />
                    <path
                        d="M420.76,526.33h-1.44a.23.23,0,0,1-.21-.14.24.24,0,0,1,.06-.25l1-.94.13-.33a.22.22,0,0,1,.05-.08l.08-.08v-.07l-.16-.21-.13-.08h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.08a.28.28,0,0,1,0-.12l.25-.34.27-.18a.25.25,0,0,1,.12,0h.38a.25.25,0,0,1,.12,0l.34.26.18.26a.28.28,0,0,1,0,.12v.23a.24.24,0,0,1-.07.16l-.12.12-.13.33a.16.16,0,0,1-.06.08l-.63.59h.86a.22.22,0,0,1,.22.23A.22.22,0,0,1,420.76,526.33Z" />
                    <path
                        d="M425.88,525.43l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.19.19,0,0,1,.05-.1l.22-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.18l-.16,0-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.15.15,0,0,1,0,.06l.15.3a.16.16,0,0,1,0,.1v.15a.16.16,0,0,1,0,.1l-.15.3,0,.06-.23.23a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.05.16-.16.11-.27-.11-.22-.15-.15-.25-.06-.2,0-.14.14-.05.21.06.32Z" />
                    <path
                        d="M428.07,525.43H428l-.09,0-.38-.15-.07,0-.15-.15a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.24.24,0,0,1,.14-.12l.31-.07h.28l.35.08a.24.24,0,0,1,.14.1l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.14,0-.11.21-.05.2.45-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.26.26,0,0,1-.1.13l-.22.15-.33.17Zm-.32-.57.28.11.37-.21.05-.21v-.1l-.05-.18-.14-.14-.24-.06-.26,0-.2.35.11.31Z" />
                    <path
                        d="M429.43,525.43a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,429.43,525.43Z" />
                    <path
                        d="M430.56,525.43a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07H430l-.17.11-.27.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,430.56,525.43Z" />
                    <path
                        d="M431.69,525.43a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.16L431,524l-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,431.69,525.43Z" />
                    <path
                        d="M433.88,525.43h-1.44a.23.23,0,0,1-.15-.39l1-1,.18-.25.06-.16v-.15l0-.1-.23-.09H433l-.18.09-.08.13v.08a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.28.28,0,0,1,0-.12l.26-.34a.19.19,0,0,1,.09,0l.22-.08h.52l.41.16a.26.26,0,0,1,.11.14l.08.22s0,0,0,.07v.23s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,433.88,525.43Z" />
                    <path
                        d="M438.93,524.52l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.08-.44v-.5l.08-.56a.11.11,0,0,1,0-.08l.22-.38a.26.26,0,0,1,.14-.1l.31-.08h.28l.35.09a.2.2,0,0,1,.16.15l.08.22a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0h-.17l-.15,0-.16.26,0,.22.24-.12a.19.19,0,0,1,.1,0H439l.08,0,.38.15a.18.18,0,0,1,.07,0l.15.15.05.06.15.3a.36.36,0,0,1,0,.1v.15a.43.43,0,0,1,0,.11l-.15.3-.17.25a.19.19,0,0,1-.14.09Zm-.19-.5.25.06.26-.06.1-.15.11-.27-.11-.22-.09-.1-.29-.11-.37.21,0,.18.05.33Z" />
                    <path
                        d="M441,524.52l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.22a.41.41,0,0,1-.05-.09l-.15-.45a.22.22,0,0,1,0-.08v-.45a.13.13,0,0,1,0-.06l.15-.53a.08.08,0,0,1,0,0l.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.35.09a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0H441l-.15,0-.17.27-.06.23.28-.14a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.22.22,0,0,1,.09.14l.08.3v.2l-.09.36a.37.37,0,0,1-.05.11l-.23.22a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.23-.08.16.1.31Z" />
                    <path
                        d="M442.47,524.52a.22.22,0,0,1-.22-.22v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,442.47,524.52Z" />
                    <path
                        d="M443.61,524.52a.22.22,0,0,1-.23-.22v-1.06l0-.12-.07,0H443l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08,0,.23-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,443.61,524.52Z" />
                    <path
                        d="M444.81,524.52a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.21l-.11,0-.33.28a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.31l.38-.31.19-.1.1,0h.38l.22.08a.21.21,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,444.81,524.52Z" />
                    <path
                        d="M447,524.52h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.24.05-.16v-.14l0-.07-.17-.13h-.36l-.11,0-.08.27a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.16-.4a.22.22,0,0,1,.13-.12l.23-.07.07,0h.45a.17.17,0,0,1,.1,0l.15.07s0,0,.06,0l.15.15s0,0,.05.06l.07.15a.17.17,0,0,1,0,.1v.22a.24.24,0,0,1,0,.08L447,523a.16.16,0,0,1,0,.07l-.22.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M452.05,523.62l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.09.08l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.11-.18-.2-.1h-.12l-.21.11-.16.21,0,.2.24-.12.1,0h.15l.1,0,.31.15.05,0,.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.25-.06-.2-.16-.16-.26-.11-.23.11-.15.16-.05.2.05.25Z" />
                    <path
                        d="M454.16,523.62l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.21.21,0,0,1,.1.11l.08.15a.22.22,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.1h-.12l-.21.11-.16.21,0,.2.24-.12.1,0h.08l.08,0,.38.15a.16.16,0,0,1,.1.08l.16.23.16.32a.18.18,0,0,1,0,.1v.08a.16.16,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26,0,.1-.15.1-.22-.21-.38-.26-.1-.21.1-.16.16,0,.2,0,.25Z" />
                    <path
                        d="M455.6,523.62a.23.23,0,0,1-.23-.23V522a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,455.6,523.62Z" />
                    <path
                        d="M456.8,523.62a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.21l-.07,0-.35.35a.23.23,0,1,1-.32-.32l.37-.37.06,0,.15-.07a.19.19,0,0,1,.1,0h.31l.07,0,.22.07a.21.21,0,0,1,.13.11l.16.31a.3.3,0,0,1,0,.1v1A.23.23,0,0,1,456.8,523.62Z" />
                    <path
                        d="M457.93,523.62a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.27l-.07,0-.28.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.05,0,.15-.07a.23.23,0,0,1,.11,0h.37a.17.17,0,0,1,.1,0l.15.07a.36.36,0,0,1,.11.1l.15.31a.3.3,0,0,1,0,.1v1A.23.23,0,0,1,457.93,523.62Z" />
                    <path
                        d="M460.12,523.62h-1.43a.23.23,0,0,1-.21-.14.24.24,0,0,1,0-.24l1-1.06.24-.34v-.14l-.08-.18-.13-.09h-.3l-.08.09-.06,0-.07,0,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.12-.06.12-.12a.2.2,0,0,1,.16-.07h.45a.2.2,0,0,1,.13,0l.34.25a.41.41,0,0,1,.05.09l.08.23s0,0,0,.07v.22a.23.23,0,0,1,0,.11l-.07.15-.25.33-.64.7h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M467.51,522.56h-.16l-.37-.15-.08,0-.15-.15a.47.47,0,0,1-.06-.09l-.15-.45h0a.17.17,0,0,1,0-.07v-.52a.15.15,0,0,1,0-.07l.15-.52.17-.35A.22.22,0,0,1,467,520l.31-.08h.28l.35.09a.19.19,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0h-.17l-.14,0-.11.21-.05.2.45-.08.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.16-.33.16A.16.16,0,0,1,467.51,522.56Zm-.32-.57.28.12.37-.21.05-.29-.05-.21-.14-.14-.24-.06-.26.06-.2.34.11.31Z" />
                    <path
                        d="M469.62,522.56h-.15a.18.18,0,0,1-.1,0l-.3-.15-.06,0-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.21.21,0,0,1,.15.14l.08.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.19,0h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.27.27,0,0,1-.06.1l-.22.23-.06,0-.31.15A.16.16,0,0,1,469.62,522.56Zm-.09-.45h0l.22-.11.16-.15.06-.25-.06-.2-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.2,0,.25.15.15Z" />
                    <path
                        d="M471,522.56a.23.23,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.22.22,0,0,1,471,522.56Z" />
                    <path
                        d="M472.11,522.56a.22.22,0,0,1-.22-.22v-1l-.17-.28h-.19l-.39.38a.23.23,0,0,1-.32-.32l.45-.45a.26.26,0,0,1,.16-.07h.38a.24.24,0,0,1,.16.07l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,472.11,522.56Z" />
                    <path
                        d="M473.24,522.56a.22.22,0,0,1-.22-.22v-1.06l0-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,473.24,522.56Z" />
                    <path
                        d="M475.43,522.56H474a.22.22,0,0,1-.21-.14.2.2,0,0,1,0-.24l1-1,.26-.46v-.09l-.16-.21-.13-.09h-.25l-.26.16,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.15-.08.2-.13a.2.2,0,0,1,.13,0h.37a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.15.23-.13.27-.05.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M480.48,521.66l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.19.19,0,0,1-.05-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53a.15.15,0,0,1,0-.07l.23-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16,0-.16.21-.06.21h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.14-.14.06-.25v-.09l-.06-.19-.14-.14-.24-.06-.2.06-.16.16-.09.19.1.31Z" />
                    <path
                        d="M482.52,521.66l-.36-.08a.26.26,0,0,1-.13-.1l-.15-.22,0-.06-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.21.21,0,0,1,.14-.12l.3-.07h.29l.35.08a.22.22,0,0,1,.13.1l.16.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.15,0-.1.21-.06.2.25-.06h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.07Zm-.16-.5.21.05h.1l.18-.05L483,521l.06-.25v-.09l-.05-.19-.14-.14-.25-.06h-.09l-.16.05-.11.15-.09.19.11.34Z" />
                    <path
                        d="M484,521.66a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,484,521.66Z" />
                    <path
                        d="M485.16,521.66a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,1,1-.32-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,485.16,521.66Z" />
                    <path
                        d="M486.29,521.66a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,1,1-.32-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,486.29,521.66Z" />
                    <path
                        d="M488.48,521.66H487a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1,.18-.25.05-.16v-.15l0-.1-.23-.09h-.3l-.1,0,0,.06,0,.06-.08.09v0a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.26.26,0,0,1,.07-.16l.12-.12.06-.12a.28.28,0,0,1,.13-.11l.23-.08H488l.41.16a.28.28,0,0,1,.11.13l.08.23s0,.05,0,.07v.23s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,488.48,521.66Z" />
                    <path
                        d="M493.76,521.66h-.08l-.1,0-.3-.16-.25-.16a.22.22,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.19,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23s0,0,.05.06l.15.3a.3.3,0,0,1,0,.1v.07a.15.15,0,0,1,0,.09l-.15.37a.18.18,0,0,1-.08.11l-.23.15-.32.17Zm-.4-.66.14.09.22.11.38-.22.1-.26-.1-.21-.16-.16-.24-.06-.2.06-.14.14-.05.2Z" />
                    <path
                        d="M495.87,521.66h-.08l-.08,0-.38-.15-.08,0-.15-.15a.19.19,0,0,1-.05-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.22.22,0,0,1,.16-.12l.38-.08h.19l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.11-.15-.21,0h-.1l-.22,0-.1.2-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.23.23a.31.31,0,0,1,.05.1l.09.43-.09.36a.24.24,0,0,1-.06.11l-.22.22-.06,0-.3.16Zm-.33-.57.28.11.21-.1.16-.16.06-.24-.06-.21-.14-.14-.24-.06-.26.06-.19.34.1.32Z" />
                    <path
                        d="M497.22,521.66a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,497.22,521.66Z" />
                    <path
                        d="M498.36,521.66a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.11-.27.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.31.26-.17a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,498.36,521.66Z" />
                    <path
                        d="M499.49,521.66a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07H499l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,499.49,521.66Z" />
                    <path
                        d="M501.67,521.66h-1.43a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1,.18-.25.05-.16v-.15l0-.1-.07,0-.19-.12h-.24l-.21.16-.09.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.12l.25-.34.26-.18a.28.28,0,0,1,.13,0h.38a.28.28,0,0,1,.12,0l.35.21a.25.25,0,0,1,.12.13l.07.23a.19.19,0,0,1,0,.07v.23a.19.19,0,0,1,0,.07l-.07.23a.21.21,0,0,1,0,.06l-.22.3-.69.7h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M506.73,519.85l-.11,0-.3-.16-.06,0-.22-.22a.34.34,0,0,1-.06-.12l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,0-.1l.22-.3a.18.18,0,0,1,.08-.07l.3-.15a.23.23,0,0,1,.11,0H507a.17.17,0,0,1,.1,0l.31.15a.2.2,0,0,1,.08.08l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.21.1-.16.21,0,.22.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.31.31,0,0,1,.05.1l.09.43-.09.36a.23.23,0,0,1-.05.1l-.23.23a.24.24,0,0,1-.11.06l-.3.08-.1.06Zm-.17-.56.17.08,0,0,.28-.07.14-.14.06-.24-.06-.21-.14-.13-.24-.06h-.09l-.19,0-.14.14,0,.2.06.25Z" />
                    <path
                        d="M508.84,519.77l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.22-.3s0-.06.08-.07l.31-.15a.17.17,0,0,1,.1,0h.22a.23.23,0,0,1,.11,0l.3.15a.24.24,0,0,1,.11.13l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l-.05-.14-.17-.08h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07a.17.17,0,0,1,.1,0l.31.15a.1.1,0,0,1,.05,0l.23.23a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v.07a.23.23,0,0,1,0,.11l-.15.3,0,.06-.23.22a.17.17,0,0,1-.1.06Zm-.19-.5.24.06.21-.06.16-.16.1-.2-.1-.21-.18-.17-.2-.11-.21.11-.16.15-.05.2.06.25Z" />
                    <path
                        d="M510.27,519.77a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,510.27,519.77Z" />
                    <path
                        d="M511.48,519.77a.23.23,0,0,1-.23-.21l-.12-1.2-.07,0h-.22l-.13,0-.26.33a.23.23,0,0,1-.36-.28l.31-.38a.14.14,0,0,1,.1-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.37.08,1a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M512.61,519.77a.22.22,0,0,1-.23-.22v-.94l-.13-.27H512l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.38-.38.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.11.12l.15.37a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,512.61,519.77Z" />
                    <path
                        d="M514.8,519.77h-1.51a.21.21,0,0,1-.21-.14.23.23,0,0,1,0-.25l1-1,.25-.43v-.14l-.09-.18-.13-.08h-.29l-.09.08a.1.1,0,0,1-.05,0l-.07,0,0,.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.12,0,.12-.13a.26.26,0,0,1,.17-.07h.45a.25.25,0,0,1,.12,0l.34.26a.22.22,0,0,1,0,.08l.08.23a.17.17,0,0,1,0,.07V518a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,.05-.64.59h.94a.22.22,0,0,1,.22.23A.22.22,0,0,1,514.8,519.77Z" />
                    <path
                        d="M520,518.94h-.15a.16.16,0,0,1-.1,0l-.3-.15-.06,0-.15-.15a.24.24,0,0,1-.06-.09L519,518a.25.25,0,0,1,0-.08v-.52a.15.15,0,0,1,0-.07l.15-.52.16-.34a.22.22,0,0,1,.15-.12l.3-.08h.28l.36.09a.18.18,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0h-.17l-.15,0-.1.21-.06.19.25-.06H520l.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.21.21,0,0,1-.1.14l-.22.16-.33.16A.18.18,0,0,1,520,518.94Zm-.1-.45H520l.37-.21.06-.29-.06-.21-.14-.14-.24-.06h-.09l-.16,0-.2.35.1.31.09.09Z" />
                    <path
                        d="M522.11,518.94H522a.16.16,0,0,1-.1,0l-.3-.15-.25-.17a.18.18,0,0,1-.1-.15l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.09a.21.21,0,0,1,.16.14l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.1-.18,0H522l-.17,0-.14.2,0,.21.42-.08.42.08a.28.28,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1V518a.19.19,0,0,1,0,.08l-.15.38a.35.35,0,0,1,0,.08l-.15.15-.06,0-.3.15A.16.16,0,0,1,522.11,518.94Zm-.1-.45h0l.22-.11.09-.09.11-.28-.2-.37-.29-.06-.21.06-.14.14,0,.2,0,.3.14.1Z" />
                    <path
                        d="M523.47,518.94a.23.23,0,0,1-.23-.21l-.07-1.51a.23.23,0,1,1,.45,0l.07,1.51a.22.22,0,0,1-.21.23Z" />
                    <path
                        d="M524.6,518.94a.22.22,0,0,1-.23-.22v-1l-.17-.28H524l-.08.08-.4.32a.22.22,0,0,1-.28-.35l.51-.44a.24.24,0,0,1,.16-.07h.38a.26.26,0,0,1,.16.07l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,524.6,518.94Z" />
                    <path
                        d="M525.73,518.94a.23.23,0,0,1-.23-.22v-1.06l0-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3L525,517a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.19.19,0,0,1,.09.14l.08.3v1.11A.22.22,0,0,1,525.73,518.94Z" />
                    <path
                        d="M527.92,518.94h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1,.32-.44V517l-.12-.17-.15,0h-.3l-.23.08,0,.14a.23.23,0,0,1-.46,0v-.07a.14.14,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.11-.13l.16-.08.25-.08.07,0h.38l.07,0,.23.07a.24.24,0,0,1,.09.06l.07.07.18.26a.28.28,0,0,1,0,.13v.22a.28.28,0,0,1,0,.13l-.38.54-.65.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,527.92,518.94Z" />
                    <path
                        d="M401.15,551.3l-.36-.09a.21.21,0,0,1-.1-.06l-.15-.15a.1.1,0,0,1-.05-.06l-.07-.15a.17.17,0,0,1,0-.1v-.3a.19.19,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.18-.18a.09.09,0,0,1-.06-.06l-.15-.22a.2.2,0,0,1,0-.13v-.23a.21.21,0,0,1,.07-.16l.15-.15.06,0,.3-.15a.16.16,0,0,1,.1,0h.46l.38.15a.25.25,0,0,1,.12.11l.07.15a.2.2,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.07.23a.24.24,0,0,1-.14.14l.16.16a.22.22,0,0,1,.05.08l.08.23a.17.17,0,0,1,0,.07v.3a.3.3,0,0,1,0,.1l-.15.31a.28.28,0,0,1-.16.12l-.38.07Zm-.19-.51.24.06h.33l.22,0,.08-.16v-.21l-.05-.14-.14-.15-.3-.08-.3.08-.15.15,0,.14v.21l0,.07Zm0-1.33.1,0,.24.08.38-.13,0-.09v-.16l-.26-.1h-.28l-.28.17v.06Z" />
                    <path
                        d="M403.34,551.3l-.36-.09a.22.22,0,0,1-.13-.08l-.22-.3a.22.22,0,0,1-.05-.11l-.07-.52v-.34l.07-.56,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.21.21,0,0,1,.14.1l.22.38a.13.13,0,0,1,0,.08l.08.53v.33l-.08.56a.21.21,0,0,1,0,.11l-.23.3a.2.2,0,0,1-.12.08l-.3.08Zm-.17-.51.22.06h.17l.17,0,.14-.2.07-.47v-.27l-.07-.45-.15-.25-.21-.06h-.14l-.19,0-.15.25-.07.49v.26l.06.44Z" />
                    <path
                        d="M404.92,551.3a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,404.92,551.3Z" />
                    <path
                        d="M406.05,551.3a.23.23,0,0,1-.23-.23V550l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,406.05,551.3Z" />
                    <path
                        d="M407.18,551.3a.22.22,0,0,1-.22-.23V550l0-.12-.08,0h-.22l-.15,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09,0,.23-.08H407l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,407.18,551.3Z" />
                    <path
                        d="M409.37,551.3h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-1,.26-.48-.16-.26-.11,0h-.3l-.1,0-.16.27a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.21-.35a.24.24,0,0,1,.14-.12l.22-.07h.52l.23.07a.22.22,0,0,1,.13.12l.07.15.14.2a.2.2,0,0,1,0,.13v.15a.19.19,0,0,1,0,.12l-.15.23-.14.27a.09.09,0,0,1,0,.06l-.67.67h.89a.23.23,0,0,1,0,.46Z" />
                    <path
                        d="M414.42,550.39l-.36-.08a.27.27,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.17.17,0,0,1,0-.1V549l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.16.16,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.19-.1h-.12l-.2.11-.16.21,0,.2.24-.12.1,0h.08l.08,0,.38.15a.16.16,0,0,1,.1.08l.15.23.17.32a.43.43,0,0,1,0,.11v.07a.3.3,0,0,1,0,.1l-.15.3-.17.26a.23.23,0,0,1-.14.09Zm-.18-.51.24.06.26-.05.1-.15.1-.22-.21-.38-.26-.1-.22.1-.15.16-.05.2.05.25Z" />
                    <path
                        d="M416.53,550.39l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.2.2,0,0,1-.06-.07l-.15-.38a.28.28,0,0,1,0-.09V549a.13.13,0,0,1,0-.06l.15-.53,0-.08.23-.3a.16.16,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.17.17,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.1h-.12l-.21.11-.17.22-.06.22.28-.15.1,0h.08l.1,0,.3.16.25.16a.23.23,0,0,1,.1.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.38.22-.09.23.1.25Z" />
                    <path
                        d="M418,550.39a.23.23,0,0,1-.23-.23v-1.43a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.43A.22.22,0,0,1,418,550.39Z" />
                    <path
                        d="M419.1,550.39a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,419.1,550.39Z" />
                    <path
                        d="M420.3,550.39a.22.22,0,0,1-.22-.23v-1L420,549l-.1,0h-.21l-.1,0-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.19-.1a.18.18,0,0,1,.1,0H420l.22.07a.2.2,0,0,1,.13.12l.16.3a.3.3,0,0,1,0,.1v1A.23.23,0,0,1,420.3,550.39Z" />
                    <path
                        d="M422.49,550.39H421a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1,.18-.25.05-.23,0-.11-.07,0-.06,0-.08-.09h-.29l-.17.12-.05.19a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.47.47,0,0,1,.06-.09l.07-.07.26-.18a.33.33,0,0,1,.13,0H422a.24.24,0,0,1,.16.07l.13.12.12.06a.28.28,0,0,1,.11.13l.07.23a.19.19,0,0,1,0,.07v.15a.14.14,0,0,1,0,.07l-.07.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M427.62,549.56h-.15l-.1,0-.31-.15-.05,0-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.13.1l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0h-.17l-.17,0-.14.19,0,.22.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22-.06,0-.3.15Zm-.1-.45h.05l.22-.11.15-.16.06-.24-.06-.2-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.21.06.25.15.15Z" />
                    <path
                        d="M429.65,549.56h-.07l-.1,0-.3-.15a.1.1,0,0,1-.06,0l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,1,1-.43.14l0-.11-.18,0h-.17l-.17,0-.14.19,0,.22.41-.08.43.08a.23.23,0,0,1,.14.1l.15.22.17.33a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.16.3-.16.25a.19.19,0,0,1-.1.08l-.38.16Zm-.24-.56.21.1.26-.1.11-.17.11-.21-.2-.36-.29-.06-.21,0-.14.14-.05.21.05.25Z" />
                    <path d="M431,549.56a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,431,549.56Z" />
                    <path
                        d="M432.22,549.56a.22.22,0,0,1-.23-.22v-1l-.1-.2-.12-.08h-.14l-.08.09-.4.32a.23.23,0,0,1-.28-.36l.51-.43a.2.2,0,0,1,.16-.07h.3a.2.2,0,0,1,.13,0l.22.15a.18.18,0,0,1,.08.09l.15.3a.16.16,0,0,1,0,.1v1.06A.22.22,0,0,1,432.22,549.56Z" />
                    <path
                        d="M433.35,549.56a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.13l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.16.07l.15.15,0,.06.15.3a.17.17,0,0,1,0,.1v1.06A.23.23,0,0,1,433.35,549.56Z" />
                    <path
                        d="M435.54,549.49H434.1a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.2-.33.12-.13v-.07l-.16-.21-.14-.08h-.29l-.08.08-.06,0-.07,0,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.24.24,0,0,1,0-.08l.07-.22a.21.21,0,0,1,.11-.13l.12-.06.13-.13a.23.23,0,0,1,.16-.06H435a.24.24,0,0,1,.12,0l.34.26.18.26a.28.28,0,0,1,0,.13v.22a.24.24,0,0,1-.07.16l-.15.15-.19.34-.63.63h.89a.23.23,0,0,1,0,.46Z" />
                    <path
                        d="M440.66,548.58l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22,0-.06-.15-.45h0a.2.2,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.38-.07h.2l.35.08a.28.28,0,0,1,.14.1l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22-.05h-.1l-.22.05-.1.21,0,.19.45-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.24-.5.29,0,.21,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.26,0-.2.35.11.33Z" />
                    <path
                        d="M442.85,548.58h-.15l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.17.17,0,0,1,0-.07v-.5l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.31-.07h.28l.35.08a.24.24,0,0,1,.14.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.22-.05h-.17l-.17.05-.14.19,0,.22.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.31v.2l-.08.36a.24.24,0,0,1-.09.13l-.23.15-.33.17Zm-.33-.5.24.06h0l.39-.22.06-.21v-.1l-.05-.18-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.21.05.32Z" />
                    <path
                        d="M444.21,548.58a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.5A.23.23,0,0,1,444.21,548.58Z" />
                    <path
                        d="M445.34,548.58a.23.23,0,0,1-.23-.23v-1l-.16-.28h-.14l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.16.07l.15.15a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v1.05A.23.23,0,0,1,445.34,548.58Z" />
                    <path
                        d="M446.47,548.58a.22.22,0,0,1-.22-.23V547.3l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.22.22,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,446.47,548.58Z" />
                    <path
                        d="M448.66,548.58h-1.43a.21.21,0,0,1-.21-.14.22.22,0,0,1,.05-.25l1-1,.26-.47v-.09l-.12-.17-.15-.05h-.3l-.18.09-.08.13v.09a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.28.28,0,0,1,0-.13l.26-.34a.19.19,0,0,1,.09-.05l.22-.08h.52l.23.08.09.05.07.08.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,448.66,548.58Z" />
                    <path
                        d="M453.79,547.68l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.22.22,0,0,1-.05-.08l-.15-.37h0s0-.06,0-.08v-.53a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3.08-.07.31-.15.1,0H454l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.12l-.21.1-.16.23-.07.21.29-.14a.16.16,0,0,1,.1,0h.07a.16.16,0,0,1,.1,0l.3.15.26.17a.21.21,0,0,1,.09.13l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24v-.09l-.05-.16-.15-.11-.22-.1-.38.21-.09.23.1.25Z" />
                    <path
                        d="M455.82,547.68l-.35-.09a.19.19,0,0,1-.14-.09l-.15-.23a.08.08,0,0,1,0,0l-.15-.45h0s0,0,0-.07v-.45s0,0,0-.06l.15-.53.16-.4a.26.26,0,0,1,.16-.13l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.13,0-.16.46.19-.1a.18.18,0,0,1,.1,0H456a.16.16,0,0,1,.1,0l.31.15.25.17a.21.21,0,0,1,.09.13l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.16-.5.22.05H456l.19-.05.14-.14.06-.24v-.09l0-.16-.16-.11-.27-.11-.22.11-.1.1-.1.18.12.34Z" />
                    <path
                        d="M457.33,547.68a.23.23,0,0,1-.23-.23V546a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,457.33,547.68Z" />
                    <path
                        d="M458.46,547.68a.22.22,0,0,1-.22-.23v-1.06l0-.12-.08,0h-.22l-.15,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,458.46,547.68Z" />
                    <path
                        d="M459.59,547.68a.22.22,0,0,1-.22-.23v-1.06l0-.12-.07,0H459l-.14,0-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,459.59,547.68Z" />
                    <path
                        d="M461.78,547.68h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.19-.24.05-.24-.05-.14-.07-.07-.14,0h-.31l-.1,0-.16.27a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.22-.35a.2.2,0,0,1,.13-.12l.22-.07h.52l.23.07.09.06.15.15a.19.19,0,0,1,0,.09l.08.22a.22.22,0,0,1,0,.08v.15a.2.2,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,461.78,547.68Z" />
                    <path
                        d="M469.1,546.62H469l-.1,0-.3-.15-.25-.17a.2.2,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.22.22,0,0,1,.12-.09L469,544h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.43.14l0-.11-.18,0H469l-.17.05-.14.19,0,.22.42-.08.42.08a.21.21,0,0,1,.14.1l.15.22.17.33a.3.3,0,0,1,0,.1v.08a.31.31,0,0,1,0,.08l-.15.38a.12.12,0,0,1-.05.07l-.15.15a.18.18,0,0,1-.07.05l-.38.15Zm-.4-.66.14.09.22.11.29-.11.08-.08.11-.29-.2-.36-.29-.06-.21,0-.14.14-.05.21Z" />
                    <path
                        d="M471.21,546.62h-.08l-.1,0-.3-.15-.25-.17a.22.22,0,0,1-.09-.12l-.15-.45a.19.19,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53a.21.21,0,0,1,0-.07l.23-.3a.21.21,0,0,1,.13-.09l.3-.07h.2l.42.08a.22.22,0,0,1,.17.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.17.05-.15.21-.06.21h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.31.31,0,0,1,.05.1l.09.44-.08.42a.21.21,0,0,1-.1.14l-.23.15-.32.17Zm-.42-.67.17.1.21.11.36-.2.06-.29-.06-.21-.14-.14-.24-.06-.2,0-.16.16-.09.19Z" />
                    <path
                        d="M472.56,546.62a.22.22,0,0,1-.22-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.23.23,0,0,1,472.56,546.62Z" />
                    <path
                        d="M473.7,546.62a.23.23,0,0,1-.23-.23v-1l-.05-.16-.09-.07h-.17l-.17.11-.27.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,473.7,546.62Z" />
                    <path
                        d="M474.9,546.62a.22.22,0,0,1-.22-.23v-1l-.1-.2-.12-.08h-.17l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.16.16,0,0,1,.07.09l.15.3a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,474.9,546.62Z" />
                    <path
                        d="M477.09,546.62h-1.51a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1.05.18-.25,0-.16v-.15l0-.1-.17-.09h-.36l-.15.05,0,.18a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.07-.22a.15.15,0,0,1,.06-.09l.07-.08.09,0L476,544h.52l.1,0,.3.16a.2.2,0,0,1,.12.13l.07.22a.2.2,0,0,1,0,.07v.23a.15.15,0,0,1,0,.07l-.07.23,0,.06-.22.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M482.14,545.72l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.44a.22.22,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.13-.08l.3-.08h.28l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.08a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.17.17,0,0,1-.1.06l-.3.08Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.33Z" />
                    <path
                        d="M484.25,545.72l-.35-.09a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.07-.13l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.19-.05h-.17l-.16,0-.15.2,0,.21.42-.07.36.08a.27.27,0,0,1,.1.06l.23.22,0,.06.15.3a.22.22,0,0,1,0,.11v.15a.18.18,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.15.11-.27-.11-.22-.15-.16-.25-.06-.2.06-.14.14-.05.2.06.33Z" />
                    <path
                        d="M485.69,545.72a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,485.69,545.72Z" />
                    <path
                        d="M486.89,545.72a.23.23,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.14.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.45l.22.08a.21.21,0,0,1,.13.11l.16.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,486.89,545.72Z" />
                    <path
                        d="M488,545.72a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.27l-.07,0-.28.27a.23.23,0,1,1-.32-.32l.31-.3a.1.1,0,0,1,0,0l.15-.08.11,0h.37l.1,0,.15.08a.27.27,0,0,1,.11.1l.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,488,545.72Z" />
                    <path
                        d="M490.21,545.72H488.7a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16v-.14l-.08-.17-.1,0h-.37l-.07,0-.13.17v.1a.23.23,0,1,1-.45,0v-.15a.3.3,0,0,1,0-.1l.08-.15,0-.06.15-.15.06,0,.15-.08a.18.18,0,0,1,.1,0h.52l.23.07a.22.22,0,0,1,.13.12l.15.3a.17.17,0,0,1,0,.1v.23a.25.25,0,0,1,0,.07l-.07.22,0,.07-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,490.21,545.72Z" />
                    <path
                        d="M495.34,544.81l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.22-.17-.42h0a.19.19,0,0,1,0-.08v-.52s0,0,0-.06l.15-.53.17-.34a.19.19,0,0,1,.1-.1l.3-.16.1,0h.23l.1,0,.3.16.06,0,.15.15a.23.23,0,1,1-.32.32l-.12-.13-.22-.11h-.12l-.19.1L495,543l0,.17.19-.1.1,0h.15l.11,0,.3.16.25.16a.22.22,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.51.28.06.22-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.22.11-.1.1-.1.25.12.29Z" />
                    <path
                        d="M497.37,544.81l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.38a.14.14,0,0,1,0-.09v-.48l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.16.16,0,0,1,.08-.06l.3-.16.1,0h.23l.1,0,.3.16a.21.21,0,0,1,.11.1l.07.15a.22.22,0,1,1-.4.2l0-.08-.18-.1h-.12l-.21.11-.16.21,0,.21.24-.13.1,0h.16l.1,0,.3.16.06,0,.15.15.05.07.15.38a.29.29,0,0,1,0,.09V544a.17.17,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.14.1l-.3.07Zm-.18-.51.24.06h.1l.16-.05.1-.15.11-.22-.11-.28-.1-.1-.26-.11-.38.21-.05.26.05.25Z" />
                    <path
                        d="M498.88,544.81a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,498.88,544.81Z" />
                    <path
                        d="M500,544.81a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.27l-.07,0-.28.28a.23.23,0,0,1-.32-.32l.3-.3.06-.05.15-.07a.23.23,0,0,1,.11,0h.37a.17.17,0,0,1,.1,0l.15.07a.29.29,0,0,1,.11.11l.15.3a.3.3,0,0,1,0,.1v1.05A.23.23,0,0,1,500,544.81Z" />
                    <path
                        d="M501.15,544.81a.23.23,0,0,1-.23-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07.07,0h.3l.08,0,.22.07a.26.26,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,501.15,544.81Z" />
                    <path
                        d="M503.33,544.81H501.9a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.26-.47-.16-.26-.1,0h-.31l-.14,0-.07.08-.05.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.15-.15.09,0,.23-.08h.52l.22.08a.21.21,0,0,1,.13.11l.08.15.14.2a.31.31,0,0,1,0,.13V543a.28.28,0,0,1,0,.13l-.16.22-.13.28,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M508.54,543.91h-.08a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.23-.23,0-.07-.15-.38a.28.28,0,0,1,0-.09v-.52a.2.2,0,0,1,0-.07l.15-.52s0,0,0-.08l.23-.3a.2.2,0,0,1,.12-.08l.31-.08h.2l.42.08a.2.2,0,0,1,.17.15l.08.22a.23.23,0,1,1-.43.15l0-.11-.25,0h-.11l-.17,0-.15.21-.06.22h0l.44-.08.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.09.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.19.19,0,0,1,508.54,543.91Zm-.25-.57.21.11.2-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06-.2.06-.16.16-.09.18.1.24Z" />
                    <path
                        d="M510.65,543.91h-.15a.17.17,0,0,1-.1,0l-.31-.15a.1.1,0,0,1,0,0l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.07-.56a.37.37,0,0,1,.05-.11l.22-.3a.21.21,0,0,1,.08-.06l.31-.16.1,0h.22l.1,0,.31.16a.18.18,0,0,1,.08.07l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.21.11-.16.21,0,.21.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.23.22.06.11.08.43-.08.36-.06.1-.23.23-.06,0-.3.15A.19.19,0,0,1,510.65,543.91Zm-.1-.46h0l.23-.11.15-.15L511,543l-.06-.21-.14-.14-.24-.06h-.09l-.19.05-.14.14-.05.2.06.25.15.15Z" />
                    <path d="M512,543.91a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,512,543.91Z" />
                    <path
                        d="M513.14,543.83a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.2l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.25.25,0,0,1,.12,0h.3l.08,0,.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,513.14,543.83Z" />
                    <path
                        d="M514.27,543.83a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.33a.23.23,0,1,1-.35-.29l.3-.38a.41.41,0,0,1,.11-.07l.22-.07.07,0H514l.07,0,.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,514.27,543.83Z" />
                    <path
                        d="M516.45,543.83H515a.22.22,0,0,1-.15-.39l1-1,.25-.44v-.1l-.16-.21-.13-.09h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.2.2,0,0,1,.13,0h.38a.17.17,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39a.1.1,0,0,1,0,0l-.63.59h.85a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M521.58,543h-.07l-.1,0-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.22-.3a.38.38,0,0,1,.13-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17.05-.14.19,0,.22.42-.08.42.08a.25.25,0,0,1,.15.1l.15.22.16.33a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3a.09.09,0,0,1,0,.06l-.15.15a.14.14,0,0,1-.08.05l-.37.15A.15.15,0,0,1,521.58,543Zm-.39-.66.14.1.22.1.28-.11.09-.09.12-.27-.22-.37-.28-.06-.22.05-.14.14,0,.21Z" />
                    <path
                        d="M523.69,543h-.07l-.1,0-.3-.15-.25-.17a.18.18,0,0,1-.09-.12l-.15-.45a.19.19,0,0,1,0-.07v-.53s0,0,0-.06l.15-.53.17-.34a.22.22,0,0,1,.16-.12l.37-.07h.2l.42.08a.22.22,0,0,1,.17.15l.08.23a.23.23,0,0,1-.43.14l0-.1-.24-.05h-.11l-.22.05-.11.21-.06.21h0l.43-.08.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.19.19,0,0,1-.09.14l-.23.15-.32.17Zm-.41-.67.16.11.22.1.36-.2.06-.29-.06-.21-.14-.14-.24-.06-.21.05-.15.16-.1.19Z" />
                    <path
                        d="M525.05,543a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.5A.23.23,0,0,1,525.05,543Z" />
                    <path
                        d="M526.18,543a.22.22,0,0,1-.22-.23v-1l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,526.18,543Z" />
                    <path
                        d="M527.31,543a.22.22,0,0,1-.22-.23v-1l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,527.31,543Z" />
                    <path
                        d="M529.58,543h-1.51a.23.23,0,0,1-.16-.39l1.05-1.05.19-.25.05-.16V541l0-.1-.16-.09h-.37l-.14.05,0,.14v.12a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22V541s0,0,0-.07l.08-.22a.19.19,0,0,1,0-.09l.08-.08a.19.19,0,0,1,.09,0l.22-.08h.53l.1,0,.3.16a.16.16,0,0,1,.11.13l.08.22a.2.2,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.22.3-.7.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,529.58,543Z" />
                    <path
                        d="M400.85,590.89l-.1,0a.23.23,0,0,1-.11-.3l.9-1.93-1.13.06a.23.23,0,0,1-.24-.21.22.22,0,0,1,.21-.24l1.51-.08a.25.25,0,0,1,.2.1.22.22,0,0,1,0,.22l-1.06,2.27A.23.23,0,0,1,400.85,590.89Z" />
                    <path
                        d="M402.88,590.89l-.09,0a.23.23,0,0,1-.11-.3l.9-1.94h-1.07a.23.23,0,0,1-.23-.23.23.23,0,0,1,.23-.23h1.43a.21.21,0,0,1,.19.11.2.2,0,0,1,0,.21l-1.05,2.27A.23.23,0,0,1,402.88,590.89Z" />
                    <path
                        d="M404.69,590.81a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,404.69,590.81Z" />
                    <path
                        d="M405.82,590.81a.22.22,0,0,1-.22-.22v-1l-.05-.21-.06,0h-.23l-.13,0-.26.33a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.37a.25.25,0,0,1,.1-.08l.23-.07h.44l.23.07a.23.23,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,405.82,590.81Z" />
                    <path
                        d="M407,590.81a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.13,0-.26.33a.23.23,0,0,1-.35-.29l.3-.37a.25.25,0,0,1,.1-.08l.23-.07h.45l.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,407,590.81Z" />
                    <path
                        d="M409.22,590.81h-1.51a.22.22,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-1,.25-.44v-.13l0-.1-.07,0-.06,0-.08-.08h-.29l-.21.16-.09.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.12l.25-.34.26-.18a.28.28,0,0,1,.13,0h.45a.24.24,0,0,1,.16.07l.12.12.12.06a.25.25,0,0,1,.12.13l.07.23a.17.17,0,0,1,0,.07v.23a.18.18,0,0,1,0,.1l-.08.15-.23.39a.1.1,0,0,1,0,0l-.63.59h.93a.22.22,0,0,1,.22.23A.22.22,0,0,1,409.22,590.81Z" />
                    <path
                        d="M414.27,590h-.07l-.11,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.09.09,0,0,1,0-.07v-.5l.07-.56a.24.24,0,0,1,.05-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.17,0-.15.2,0,.21.42-.08.36.08a.33.33,0,0,1,.1.06l.23.23a.21.21,0,0,1,0,.06l.15.3a.19.19,0,0,1,0,.1v.08a.24.24,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.09.1l-.22.15-.33.17Zm-.4-.66.15.1.21.1.38-.21.11-.26-.11-.22-.15-.15-.24-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M416.38,590h-.16l-.37-.15-.08-.05-.15-.15a.47.47,0,0,1-.06-.09l-.15-.46s0-.05,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.35.08a.24.24,0,0,1,.14.1l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22-.05h-.17l-.14,0-.11.21-.05.19.25-.06h.2l.36.08a.33.33,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Zm-.32-.57.28.11.37-.2.05-.29-.05-.21-.14-.14-.24-.06h-.1l-.16,0-.1.16-.1.19.11.31Z" />
                    <path
                        d="M417.74,590a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,417.74,590Z" />
                    <path
                        d="M418.87,590a.23.23,0,0,1-.23-.22V588.7l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,418.87,590Z" />
                    <path
                        d="M420,590a.22.22,0,0,1-.22-.22V588.7l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.33.33,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,420,590Z" />
                    <path
                        d="M422.19,590h-1.43a.21.21,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1-1.06.18-.25.06-.15V588l0-.1-.22-.08h-.31l-.18.08-.08.14a.23.23,0,1,1-.45,0V588a.28.28,0,0,1,0-.13l.26-.34a.19.19,0,0,1,.09-.05l.22-.08h.52l.41.17a.21.21,0,0,1,.11.13l.08.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.08.23,0,.06-.23.31-.69.69h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M427.24,589l-.36-.08a.27.27,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.17.17,0,0,1,0-.07v-.5l.08-.49,0-.07.23-.38a.28.28,0,0,1,.13-.11l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.15,0-.16.26,0,.15.41-.08.42.08a.21.21,0,0,1,.14.1l.15.22.17.33a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.31-.17.25a.19.19,0,0,1-.14.09Zm-.18-.5.24.06.26-.06.1-.15.11-.27-.21-.38-.29-.06-.21.06-.14.14-.05.2.05.33Z" />
                    <path
                        d="M429.35,589l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.16.16,0,0,1-.06-.08l-.15-.46h0a.17.17,0,0,1,0-.07v-.53a.2.2,0,0,1,0-.07l.15-.45.25-.42a.26.26,0,0,1,.14-.11l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.19,0h-.17l-.15,0-.18.3,0,.12h0l.43-.08.36.08.1.06.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.27.27,0,0,1-.1.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24V588l-.06-.18-.14-.14-.24-.06-.2.06-.16.15-.09.19.1.31Z" />
                    <path
                        d="M430.79,589a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,430.79,589Z" />
                    <path
                        d="M431.92,589a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.12A.22.22,0,0,1,431.92,589Z" />
                    <path
                        d="M433.12,589a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.21l-.1,0-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.19-.1.1,0h.38l.22.07a.24.24,0,0,1,.14.12l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,433.12,589Z" />
                    <path
                        d="M435.31,589H433.8a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15V587l0-.07-.17-.13h-.36l-.11,0-.08.17v.1a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22V587a.3.3,0,0,1,0-.1l.15-.31a.28.28,0,0,1,.13-.11l.23-.08h.52a.17.17,0,0,1,.1,0l.15.07.06,0,.15.16.05.05.07.16a.17.17,0,0,1,0,.1v.22a.14.14,0,0,1,0,.07l-.07.23,0,.06-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M440.36,588.1,440,588l-.11-.06-.22-.23a.19.19,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.06,0,.15.16a.22.22,0,0,1,0,.32.24.24,0,0,1-.32,0l-.12-.13-.22-.11h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.15l.11,0,.3.15.25.17a.19.19,0,0,1,.09.14l.08.5-.08.35a.24.24,0,0,1-.06.11L441,588l-.11.06-.3.07Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.24-.06-.26-.15-.1-.27-.11L440,587l-.05.25.05.26Z" />
                    <path
                        d="M442.47,588.1l-.35-.08L442,588l-.22-.23a.17.17,0,0,1-.06-.12l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.24.24,0,0,1,0-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.27.27,0,0,1,.11.1l.07.15a.23.23,0,0,1-.1.31.23.23,0,0,1-.3-.1l-.05-.09-.18-.09h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.16l.38.15.08,0,.15.16a.18.18,0,0,1,.05.07l.15.38a.24.24,0,0,1,0,.08v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.25.25,0,0,1-.15.1Zm-.18-.51.24.06.26-.06.1-.15.11-.22-.11-.28-.09-.08-.28-.12-.37.21,0,.25,0,.26Z" />
                    <path
                        d="M443.91,588.1a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,443.91,588.1Z" />
                    <path
                        d="M445.11,588.1a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.14.05-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09-.05l.22-.08h.45l.23.08a.28.28,0,0,1,.13.11l.15.3a.43.43,0,0,1,0,.11v1A.23.23,0,0,1,445.11,588.1Z" />
                    <path
                        d="M446.25,588.1a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.07,0-.28.28a.23.23,0,0,1-.32-.32l.31-.31.05,0,.16-.07a.17.17,0,0,1,.1,0h.37a.17.17,0,0,1,.1,0l.16.07a.24.24,0,0,1,.1.1l.15.3a.43.43,0,0,1,0,.11v1A.22.22,0,0,1,446.25,588.1Z" />
                    <path
                        d="M448.43,588.1H447a.24.24,0,0,1-.21-.14.23.23,0,0,1,0-.24l1-1.06.19-.25.06-.24L448,586l-.1,0h-.32l-.09.08-.06,0-.06,0,0,.14a.23.23,0,1,1-.45,0v-.07a.22.22,0,0,1,0-.08l.08-.22a.18.18,0,0,1,.11-.13l.12-.06.12-.13a.23.23,0,0,1,.16-.06H448l.22.07a.2.2,0,0,1,.13.12l.08.15.09.25s0,.05,0,.08v.15s0,.05,0,.07l-.08.23,0,.06-.23.3-.64.69h.91a.23.23,0,0,1,.23.23A.23.23,0,0,1,448.43,588.1Z" />
                    <path
                        d="M453.64,587.27h-.08l-.08,0-.38-.15L453,587l-.15-.23-.17-.41a.16.16,0,0,1,0-.1v-.58l.16-.53.16-.34a.23.23,0,0,1,.15-.12l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.21.21,0,0,1-.31-.06l-.11-.15-.21-.06h-.18l-.14,0-.11.21-.05.2.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.09.43-.09.36a.17.17,0,0,1-.06.1l-.22.23-.06,0-.3.15A.19.19,0,0,1,453.64,587.27Zm-.31-.56.26.1.21-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06-.26.06-.19.34.11.28Z" />
                    <path
                        d="M455.75,587.27h-.15a.17.17,0,0,1-.1,0l-.31-.15a.1.1,0,0,1-.05,0l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.07-.56a.19.19,0,0,1,.05-.1l.22-.31s.05,0,.08-.06l.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15a.21.21,0,0,1,.11.13l.07.22a.23.23,0,0,1-.14.29.21.21,0,0,1-.28-.14l-.05-.14-.17-.08h-.12l-.21.1-.16.21,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.16.16,0,0,1,.05.1l.09.43-.09.36a.16.16,0,0,1-.05.1l-.23.23-.06,0-.3.15A.19.19,0,0,1,455.75,587.27Zm-.1-.45h0l.22-.12.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.09l-.19.05-.14.14,0,.2.06.25.15.15Z" />
                    <path
                        d="M457.1,587.27a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22V587A.23.23,0,0,1,457.1,587.27Z" />
                    <path
                        d="M458.24,587.19A.22.22,0,0,1,458,587V586l-.17-.28h-.19l-.39.39a.24.24,0,0,1-.32,0,.23.23,0,0,1,0-.32l.45-.46a.23.23,0,0,1,.16-.06h.37a.23.23,0,0,1,.16.06l.16.15,0,.06.15.3a.43.43,0,0,1,0,.11v1A.22.22,0,0,1,458.24,587.19Z" />
                    <path
                        d="M459.37,587.19a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.13,0-.26.33a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.37a.23.23,0,0,1,.11-.08l.22-.07h.45l.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,459.37,587.19Z" />
                    <path
                        d="M461.55,587.19h-1.43a.22.22,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-.95.13-.33.05-.07.08-.09v-.06l-.16-.21L461,585h-.24l-.26.16,0,.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.15-.07.2-.14a.28.28,0,0,1,.13,0H461a.28.28,0,0,1,.12,0l.34.26.18.26a.24.24,0,0,1,0,.12v.23a.23.23,0,0,1-.06.16l-.12.12-.13.33a.24.24,0,0,1-.06.08l-.63.59h.85a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M468.87,586.14l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.41.41,0,0,1-.05-.09l-.15-.45h0s0-.05,0-.07v-.52s0,0,0-.06l.15-.53,0-.08.23-.3a.2.2,0,0,1,.12-.08l.3-.08H469l.42.08a.2.2,0,0,1,.17.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.1-.24,0h-.11l-.17,0-.15.2-.06.22h0l.43-.08.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06-.2.06-.16.16-.1.18.11.32Z" />
                    <path
                        d="M471.06,586.14h-.15l-.36-.09a.18.18,0,0,1-.13-.09l-.16-.23a.08.08,0,0,1,0-.05l-.15-.45a.19.19,0,0,1,0-.08v-.52l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,1,1-.37.25l-.11-.15-.21-.06h-.17l-.17,0-.15.19,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.08.3v.21l-.09.35a.19.19,0,0,1-.09.14l-.23.15-.32.16A.19.19,0,0,1,471.06,586.14Zm-.32-.5.22.05h0l.4-.22.05-.22v-.09l-.05-.19-.14-.14-.24-.06h-.09l-.19.05-.14.14,0,.18.12.36Z" />
                    <path
                        d="M472.41,586.14a.22.22,0,0,1-.22-.23V584.4a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,472.41,586.14Z" />
                    <path
                        d="M473.54,586.14a.22.22,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06H473l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.23.23,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,473.54,586.14Z" />
                    <path
                        d="M474.68,586.14a.23.23,0,0,1-.23-.23v-1.06l0-.16-.1-.06h-.17l-.17.11-.26.27a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.3.26-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.26.26,0,0,1,.09.14l.08.3v1.11A.22.22,0,0,1,474.68,586.14Z" />
                    <path
                        d="M476.86,586.14h-1.43a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.06.18-.24.05-.16v-.15l0-.11-.23-.08H476l-.17.08-.09.14v.08a.23.23,0,1,1-.45,0v-.15a.17.17,0,0,1,0-.12l.25-.34.09-.06.23-.07h.52l.4.16a.25.25,0,0,1,.12.13l.07.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.69.69h.88a.23.23,0,0,1,0,.46Z" />
                    <path
                        d="M481.92,585.23l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,0-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.23.23,0,0,1,.11,0h.22l.36.08a.26.26,0,0,1,.16.15l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0H482l-.21.11-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0H482l.09,0,.37.15.08,0,.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3-.16.26a.24.24,0,0,1-.15.09Zm-.19-.5.24.06.26-.06.1-.15.11-.28-.11-.22-.09-.09-.28-.11-.37.21,0,.25.06.25Z" />
                    <path
                        d="M484,585.23l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.08l-.15-.46h0s0-.05,0-.07v-.45a.13.13,0,0,1,0-.06l.15-.53,0-.05.22-.38a.26.26,0,0,1,.14-.11l.3-.07h.21l.42.08a.26.26,0,0,1,.17.15l.08.23a.24.24,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.1-.25-.05H484l-.16.05-.16.27-.07.23.29-.14a.17.17,0,0,1,.1,0h.07a.17.17,0,0,1,.1,0l.31.15.25.16a.24.24,0,0,1,.09.13l.08.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06Zm-.19-.5.24.06.21-.06.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.22-.09.17.11.31Z" />
                    <path
                        d="M485.46,585.23a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22V585A.22.22,0,0,1,485.46,585.23Z" />
                    <path
                        d="M486.59,585.23a.23.23,0,0,1-.23-.22V584l0-.13-.08,0H486l-.14.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.3V585A.22.22,0,0,1,486.59,585.23Z" />
                    <path
                        d="M487.8,585.23a.23.23,0,0,1-.23-.21l-.11-1.2-.08,0h-.22l-.15.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.3L488,585a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M490,585.23h-1.5a.21.21,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1.05-1.06.19-.25.05-.23-.05-.14-.16-.13H489l-.1,0-.09.27a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.17-.41a.21.21,0,0,1,.13-.11l.22-.08h.53a.19.19,0,0,1,.1,0l.15.07.06,0,.15.16a.22.22,0,0,1,.05.08l.08.23a.17.17,0,0,1,0,.07v.15a.15.15,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M495,584.33l-.36-.09-.1,0-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3.07-.07.31-.15.1,0h.22l.11,0,.3.15a.3.3,0,0,1,.08.08l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.2.1-.16.22,0,.2.24-.12a.16.16,0,0,1,.1,0h.15a.18.18,0,0,1,.1,0l.3.15.06,0,.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.23-.11,0-.3.08Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24-.06-.2-.15-.16-.27-.11-.22.11-.16.16,0,.2.06.25Z" />
                    <path
                        d="M497.15,584.33l-.36-.09-.1,0-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.22l.11,0,.3.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.16.16,0,0,1,.1,0h.07a.22.22,0,0,1,.11,0l.3.15.06,0,.22.23,0,.06.16.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.16.3,0,.06-.22.23-.11,0Zm-.19-.51.24.06.21-.06.16-.15.1-.21-.1-.21-.18-.17-.2-.1-.21.1-.15.16-.05.2.05.25Z" />
                    <path
                        d="M498.58,584.33a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,498.58,584.33Z" />
                    <path
                        d="M499.79,584.33a.23.23,0,0,1-.23-.21l-.12-1.2-.07,0h-.22l-.13.05-.26.32a.23.23,0,0,1-.36-.28l.31-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.22.22,0,0,1,.15.17l.07.38.08,1a.23.23,0,0,1-.2.25Z" />
                    <path
                        d="M500.92,584.33a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.38-.38.06,0,.15-.08.1,0h.38l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,500.92,584.33Z" />
                    <path
                        d="M503.11,584.33H501.6a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.24-.34v-.14l-.09-.18-.13-.08h-.29l-.09.08-.05,0-.07,0,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.08l.08-.22a.21.21,0,0,1,.11-.13l.12-.06.13-.13a.23.23,0,0,1,.16-.06h.45a.17.17,0,0,1,.12,0l.34.25a.2.2,0,0,1,0,.09l.08.22a.22.22,0,0,1,0,.08v.22a.3.3,0,0,1,0,.1l-.08.15-.24.34-.7.69h1a.23.23,0,0,1,.22.23A.22.22,0,0,1,503.11,584.33Z" />
                    <path
                        d="M402.66,614.87l-.36-.08-.2-.1a.21.21,0,0,1-.11-.13l-.08-.22s0-.05,0-.07V614s0,0,0-.07l.08-.22a.19.19,0,0,1,.05-.09l.16-.16a.2.2,0,0,1-.13-.14l-.08-.23a.15.15,0,0,1,0-.07v-.22a.3.3,0,0,1,0-.1l.08-.15a.19.19,0,0,1,.12-.11l.37-.15a.15.15,0,0,1,.09,0H403l.11,0,.3.15.06.05.15.15a.23.23,0,0,1,.06.16V613a.2.2,0,0,1,0,.13l-.15.22a.13.13,0,0,1-.06.07l.19.18a.19.19,0,0,1,.05.09l.08.22s0,.05,0,.07v.31s0,0,0,.07l-.08.22a.21.21,0,0,1-.11.13l-.15.08-.35.09Zm-.27-.54.07,0,.25.06H403l.27-.08,0-.11V614l0-.14-.15-.14-.29-.08-.3.08-.15.14,0,.14v.23Zm.07-1.3.39.13.33-.12.08-.13v-.06l-.06-.06-.22-.11h-.28l-.27.13Z" />
                    <path
                        d="M404.69,614.87l-.35-.08a.24.24,0,0,1-.11-.06l-.07-.08-.18-.26a.22.22,0,1,1,.37-.25l.15.22.25.06H405l.24,0,.1-.15.12-.23v-.12l-.21-.38-.29-.06h-.26l-.14,0,0,.06a.23.23,0,0,1-.26.11.21.21,0,0,1-.17-.23l.08-1a.21.21,0,0,1,.22-.21h1.06a.22.22,0,0,1,.22.23.22.22,0,0,1-.22.22h-.85l0,.33.06,0H405l.43.08a.24.24,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1V614a.36.36,0,0,1,0,.1l-.16.3-.16.25a.21.21,0,0,1-.14.1l-.38.07Z" />
                    <path
                        d="M406.35,614.87a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,406.35,614.87Z" />
                    <path
                        d="M407.56,614.87a.23.23,0,0,1-.23-.23v-1l-.13-.2h-.27l-.1,0-.34.27a.21.21,0,0,1-.31,0,.22.22,0,0,1,0-.32l.38-.3.19-.1a.19.19,0,0,1,.1,0h.38a.19.19,0,0,1,.1,0l.15.07a.24.24,0,0,1,.1.1l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,407.56,614.87Z" />
                    <path
                        d="M408.69,614.87a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3.09-.06L408,613l.07,0h.3l.07,0,.23.07a.22.22,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,408.69,614.87Z" />
                    <path
                        d="M410.88,614.87h-1.44a.2.2,0,0,1-.2-.14.22.22,0,0,1,0-.24l1-1.06.32-.45-.16-.26-.11,0H410l-.08.09-.06,0-.07,0,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.07l.08-.23a.24.24,0,0,1,.11-.13l.12-.06.13-.12a.2.2,0,0,1,.16-.07h.52l.23.08a.28.28,0,0,1,.13.11l.07.15.14.2a.28.28,0,0,1,0,.13v.15a.25.25,0,0,1,0,.12l-.38.54-.65.7h.92a.22.22,0,0,1,.22.22A.22.22,0,0,1,410.88,614.87Z" />
                    <path
                        d="M415.93,614h-.15l-.1,0-.3-.16a.09.09,0,0,1-.06,0l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.37v-.58L415,612a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09l.3-.07H416l.35.08a.28.28,0,0,1,.14.1l.15.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.17,0-.14.19,0,.22.28-.07h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.36a.24.24,0,0,1-.06.11l-.23.22-.06,0-.3.16Zm-.1-.45h.05l.22-.11.15-.16.06-.24-.05-.2-.14-.14-.25-.06h-.09l-.18.05-.14.14-.06.2.06.25.15.16Z" />
                    <path
                        d="M418,614h-.08l-.1,0-.3-.16-.06,0-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.11.13l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.14-.17-.08h-.12l-.2.1-.16.21,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23a.1.1,0,0,1,.05.06l.15.3a.3.3,0,0,1,0,.1v.07a.43.43,0,0,1,0,.11l-.15.3-.17.25a.16.16,0,0,1-.1.08l-.38.15Zm-.25-.56.21.1.26-.1.12-.17.1-.21-.1-.21-.16-.15-.24-.06-.2.05-.14.14-.05.2.05.25Z" />
                    <path
                        d="M419.32,614a.22.22,0,0,1-.22-.23V612.3a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,419.32,614Z" />
                    <path
                        d="M420.53,614a.22.22,0,0,1-.23-.22v-.93l-.1-.2-.12-.08h-.16l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.2.2,0,0,1,.08.08l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,420.53,614Z" />
                    <path
                        d="M421.66,614a.23.23,0,0,1-.23-.22v-.94l-.12-.27H421l-.06,0-.27.34a.23.23,0,0,1-.36-.28l.3-.38a.21.21,0,0,1,.08-.06l.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.11.12l.15.37a.29.29,0,0,1,0,.09v1A.22.22,0,0,1,421.66,614Z" />
                    <path
                        d="M423.85,614h-1.51a.22.22,0,0,1-.21-.14.24.24,0,0,1,.06-.25l1-1,.25-.43V612l-.08-.18-.14-.08H423l-.08.08-.06,0-.07,0,0,.14a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23V612a.19.19,0,0,1,0-.07l.07-.23a.28.28,0,0,1,.11-.13l.12-.05.13-.13a.24.24,0,0,1,.16-.07h.45a.33.33,0,0,1,.13,0l.33.26a.16.16,0,0,1,.06.08l.07.23a.17.17,0,0,1,0,.07v.23a.18.18,0,0,1,0,.1l-.08.15-.23.39a.1.1,0,0,1,0,0l-.63.59h.93a.22.22,0,0,1,.22.23A.22.22,0,0,1,423.85,614Z" />
                    <path
                        d="M429.05,613.13h-.16l-.37-.15-.08-.05-.15-.15a.24.24,0,0,1-.06-.09l-.15-.46h0a.13.13,0,0,1,0-.06v-.52a.15.15,0,0,1,0-.07l.15-.52.17-.34a.2.2,0,0,1,.15-.12l.38-.08h.2l.35.09a.19.19,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0H429l-.23,0-.1.21,0,.2.45-.08.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.21.21,0,0,1-.1.14l-.22.16-.33.16A.16.16,0,0,1,429.05,613.13Zm-.32-.57.28.12.37-.21.05-.29-.05-.21-.14-.14-.24-.06-.26.06-.2.34.11.31Z" />
                    <path
                        d="M431.16,613.13H431a.18.18,0,0,1-.1,0l-.3-.15-.25-.17a.21.21,0,0,1-.1-.15l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.35.09a.19.19,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0H431l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.16-.33.16A.16.16,0,0,1,431.16,613.13Zm-.1-.45h.05l.38-.21.05-.29-.05-.21-.14-.14-.24-.06H431l-.18.05-.14.14-.05.2.05.3.15.1Z" />
                    <path
                        d="M432.52,613.13a.23.23,0,0,1-.23-.22V611.4a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.22.22,0,0,1,432.52,613.13Z" />
                    <path
                        d="M433.65,613.13a.22.22,0,0,1-.22-.22v-1l-.17-.28h-.14l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.24.24,0,0,1,.16.07l.15.15a.21.21,0,0,1,0,.06l.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,433.65,613.13Z" />
                    <path
                        d="M434.78,613.13a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,434.78,613.13Z" />
                    <path
                        d="M437,613.13h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1-1,.26-.46v-.09l-.11-.17-.15,0h-.31l-.23.08,0,.1v.12a.23.23,0,1,1-.45,0v-.15a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.15-.08.25-.08.07,0h.38l.07,0,.23.07.09.06.07.07.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.15.23-.14.27a.09.09,0,0,1,0,.06l-.67.67H437a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M442.1,612.15l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.41.41,0,0,1-.05-.09l-.16-.45h0s0,0,0-.07v-.52s0,0,0-.08l.16-.45.24-.42a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.09a.21.21,0,0,1,.16.14l.08.23a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.1-.18,0h-.17l-.16,0-.18.3,0,.12h0l.43-.09.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.23.22a.17.17,0,0,1-.1.06Zm-.19-.5.24.06.21-.06.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.21.06-.15.16-.1.18.11.31Z" />
                    <path
                        d="M444.13,612.15l-.35-.08a.26.26,0,0,1-.14-.09l-.15-.23s0,0,0,0l-.15-.45h0s0,0,0-.07v-.52a.24.24,0,0,1,0-.08l.3-.84a.21.21,0,0,1,.16-.13l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.21,0h-.18l-.13,0-.15.41.23-.06h.2l.36.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.16-.5.22.06h.09l.19-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06h-.1l-.16,0-.2.35.12.34Z" />
                    <path
                        d="M445.64,612.15a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,445.64,612.15Z" />
                    <path
                        d="M446.77,612.15a.22.22,0,0,1-.22-.22v-1.06l0-.12-.08,0h-.22l-.14,0-.27.26a.23.23,0,1,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,446.77,612.15Z" />
                    <path
                        d="M447.9,612.15a.22.22,0,0,1-.22-.22v-1.06l0-.12-.07,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,447.9,612.15Z" />
                    <path
                        d="M450.09,612.15h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1.05-1.06.19-.25.05-.15v-.14l0-.07-.08-.09-.14,0h-.31l-.1,0,0,.07,0,.06-.09.08v.06a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.23.23,0,0,1,.06-.16l.13-.13.06-.12a.21.21,0,0,1,.13-.11l.23-.07.07,0h.37l.08,0,.22.07.09.06.15.15a.09.09,0,0,1,0,.06l.08.15a.3.3,0,0,1,0,.1v.22a.15.15,0,0,1,0,.07l-.07.23a.25.25,0,0,1,0,.07l-.22.3-.7.69h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M455.22,611.25l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.28.28,0,0,1,0-.09v-.48l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.27.27,0,0,1,.1.11l.08.15a.23.23,0,0,1-.11.3.22.22,0,0,1-.3-.1l0-.08-.19-.1h-.12l-.2.11-.16.21,0,.2.24-.12.1,0h.08a.13.13,0,0,1,.08,0l.38.15a.15.15,0,0,1,.07,0l.15.15a.18.18,0,0,1,0,.07l.15.38a.24.24,0,0,1,0,.08v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.19-.51.24.06.26,0,.1-.15.11-.22-.11-.29-.09-.08-.28-.11-.21.1-.15.16,0,.2,0,.25Z" />
                    <path
                        d="M457.33,611.25l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23-.05-.07-.15-.38a.28.28,0,0,1,0-.09v-.59l.16-.52a.19.19,0,0,1,0-.08l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.15a.15.15,0,0,1,.09,0l.37.15a.22.22,0,0,1,.12.11l.08.15a.23.23,0,0,1-.41.2l0-.08-.32-.1-.2.11-.17.22-.06.22.28-.15.1,0h.08l.1,0,.3.15.25.17a.24.24,0,0,1,.1.14l.08.5-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2,0,.14-.14.06-.25-.06-.26-.15-.1-.21-.1-.38.22-.09.22.1.25Z" />
                    <path
                        d="M458.76,611.25a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0V611A.23.23,0,0,1,458.76,611.25Z" />
                    <path
                        d="M459.9,611.25a.23.23,0,0,1-.23-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07.07,0h.3l.08,0,.22.07a.26.26,0,0,1,.15.16l.07.3V611A.22.22,0,0,1,459.9,611.25Z" />
                    <path
                        d="M461.1,611.25a.21.21,0,0,1-.22-.21l-.12-1.2-.07,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.33,0,.23.23,0,0,1,0-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.3l.08,0,.22.07a.24.24,0,0,1,.15.16l.08.3.08,1.1a.23.23,0,0,1-.21.24Z" />
                    <path
                        d="M463.29,611.25h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.18-.25.05-.23,0-.11-.07,0-.06,0-.08-.09h-.29l-.17.12,0,.18a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.07-.07.26-.18a.2.2,0,0,1,.13,0h.45a.2.2,0,0,1,.16.07l.13.12.11.06a.22.22,0,0,1,.12.13l.07.23a.15.15,0,0,1,0,.07v.15a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.69.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,463.29,611.25Z" />
                    <path
                        d="M470.6,610.19h-.15l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.44a.11.11,0,0,1,0-.08v-.5l.08-.55a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14L471,610l-.32.17Zm-.09-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.3.15.1Z" />
                    <path
                        d="M472.64,610.19h-.08l-.1,0-.3-.15-.06,0-.22-.23a.24.24,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.07-.55a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.22.22,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.18l-.16,0-.15.2,0,.21.42-.08.36.09.1,0,.23.23,0,.06.15.3a.18.18,0,0,1,0,.1v.08a.18.18,0,0,1,0,.1l-.15.3,0,.06-.23.23-.06,0-.3.15Zm-.24-.56.2.1.21-.1.17-.17.1-.21-.1-.2-.15-.16-.25-.06-.2.06-.14.14-.05.2.05.25Z" />
                    <path d="M474,610.19a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0V610A.22.22,0,0,1,474,610.19Z" />
                    <path
                        d="M475.2,610.19A.22.22,0,0,1,475,610v-1l-.1-.2-.12-.08h-.17l-.17.12-.26.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1V610A.22.22,0,0,1,475.2,610.19Z" />
                    <path
                        d="M476.34,610.19a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.19l-.39.39a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.46-.45a.24.24,0,0,1,.16-.07H476a.24.24,0,0,1,.16.07l.15.15.05.06.15.3a.36.36,0,0,1,0,.1V610A.22.22,0,0,1,476.34,610.19Z" />
                    <path
                        d="M478.52,610.19H477a.2.2,0,0,1-.2-.14.21.21,0,0,1,0-.24l1.06-1.06.18-.25.06-.15v-.16l-.09-.18-.13-.08h-.29l-.09.09-.06,0-.06,0,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.2.2,0,0,1,.11-.13l.12-.06.12-.13a.23.23,0,0,1,.16-.06H478a.2.2,0,0,1,.13,0l.34.25a.41.41,0,0,1,.05.09l.08.23s0,0,0,.07v.22s0,0,0,.07l-.08.23,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M483.57,609.29l-.35-.08a.22.22,0,0,1-.13-.1l-.16-.22a.14.14,0,0,1,0-.06l-.15-.45h0a.11.11,0,0,1,0-.08v-.58l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.15-.21-.06h-.18l-.14,0-.11.21-.05.2.25-.06h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.08.3v.21l-.08.36a.27.27,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.16-.5.22.05h.1l.18-.06.14-.13.06-.25v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.16.05-.19.34.11.34Z" />
                    <path
                        d="M485.69,609.29l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.2.2,0,0,1-.06-.12l-.08-.45v-.57l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.22.22,0,0,1,.13-.08l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.18,0h-.17l-.17,0-.15.19,0,.22.29-.07h.21l.35.08a.23.23,0,0,1,.14.09l.15.23.16.33a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.14.1l-.3.07Zm-.19-.51.24.06h.1l.16-.05.1-.15.11-.28L486,608l-.22-.06h-.09l-.19.05-.14.14-.05.2.06.33Z" />
                    <path
                        d="M487.19,609.29a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,487.19,609.29Z" />
                    <path
                        d="M488.33,609.29a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.19l-.39.39a.23.23,0,0,1-.32-.32l.46-.46a.23.23,0,0,1,.16-.06H488a.23.23,0,0,1,.16.06l.16.15,0,.06.15.3a.43.43,0,0,1,0,.11v1A.22.22,0,0,1,488.33,609.29Z" />
                    <path
                        d="M489.46,609.29a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.11-.26.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.17a.19.19,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,489.46,609.29Z" />
                    <path
                        d="M491.64,609.29h-1.43a.24.24,0,0,1-.21-.14.22.22,0,0,1,.05-.24l1-1.06.31-.44v-.09l-.11-.17-.15,0h-.3l-.15,0-.12.16v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.08-.15,0-.06.15-.15.09,0,.23-.08h.52l.22.08a.19.19,0,0,1,.09,0l.08.08.18.26a.24.24,0,0,1,0,.12v.23a.24.24,0,0,1,0,.12l-.39.54-.64.7h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M496.77,608.38l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.22-.05-.08-.15-.38a.25.25,0,0,1,0-.09V607a.13.13,0,0,1,0-.06l.15-.53a.15.15,0,0,1,0-.07l.23-.3a.18.18,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.15l.09,0,.37.15a.19.19,0,0,1,.12.11l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.07-.31-.1-.21.1-.17.23-.06.21.28-.14a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.31.31,0,0,1,.1.15l.08.49-.09.36a.23.23,0,0,1,0,.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.38.22-.09.23.1.25Z" />
                    <path
                        d="M498.81,608.38l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.22.22,0,0,1-.06-.13l-.08-.44V607l.08-.56a.11.11,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08H499l.36.09a.18.18,0,0,1,.13.09l.16.23a.23.23,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0h-.17l-.16,0-.15.26,0,.22.24-.12a.17.17,0,0,1,.1,0H499a.19.19,0,0,1,.1,0l.3.15.25.16a.24.24,0,0,1,.1.14l.07.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.23.22a.27.27,0,0,1-.1.06l-.31.08Zm-.19-.5.24.06h.1l.18,0,.14-.14.06-.24v-.1l0-.16-.15-.1-.28-.11-.38.21-.05.18.06.33Z" />
                    <path
                        d="M500.32,608.38a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,500.32,608.38Z" />
                    <path
                        d="M501.45,608.38a.22.22,0,0,1-.23-.22V607.1l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.2.2,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,501.45,608.38Z" />
                    <path
                        d="M502.58,608.38a.22.22,0,0,1-.23-.22V607.1l0-.12-.08,0H502l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.2.2,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.23.23,0,0,1,502.58,608.38Z" />
                    <path
                        d="M504.77,608.38h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1-1,.26-.48-.16-.26-.1,0h-.3l-.11,0,0,.07-.13.2a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.28.28,0,0,1,0-.12l.21-.36a.28.28,0,0,1,.13-.11l.23-.07.07,0h.38l.07,0,.23.07a.28.28,0,0,1,.13.11l.07.16.14.2a.25.25,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,504.77,608.38Z" />
                    <path
                        d="M438.93,1056.18h-.15l-.1,0-.3-.15-.06,0-.15-.16a.16.16,0,0,1-.06-.08l-.15-.46a.17.17,0,0,1,0-.07v-.53l.08-.55a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08H439l.35.09a.22.22,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0h-.17l-.17,0-.14.2,0,.21.28-.07h.21l.36.08.1.07.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.21.21,0,0,1-.1.14l-.22.15-.33.17Zm-.1-.45h.05l.37-.21.06-.29-.05-.21-.14-.14-.24-.06h-.1l-.16,0-.2.35.11.31.08.09Z" />
                    <path
                        d="M441,1056.18h-.15l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.17.17,0,0,1,0-.07v-.5l.08-.55a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.09a.19.19,0,0,1,.16.14l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0h-.17l-.17,0-.14.2,0,.21.42-.08.42.08a.21.21,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.09.08l-.3.15Zm-.1-.45H441l.2-.1.12-.18.1-.21-.2-.36-.29-.06-.21.06-.14.14-.05.2.05.3.14.1Z" />
                    <path
                        d="M442.32,1056.18a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0V1056A.22.22,0,0,1,442.32,1056.18Z" />
                    <path
                        d="M443.53,1056.18a.23.23,0,0,1-.23-.22v-1l-.16-.27H443l-.09.08-.39.32a.23.23,0,0,1-.29-.36l.51-.43a.24.24,0,0,1,.16-.07h.38a.24.24,0,0,1,.16.07l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1V1056A.22.22,0,0,1,443.53,1056.18Z" />
                    <path
                        d="M444.66,1056.18a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.33.33,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31V1056A.22.22,0,0,1,444.66,1056.18Z" />
                    <path
                        d="M446.85,1056.18h-1.43a.22.22,0,0,1-.21-.13.23.23,0,0,1,0-.25l1-1,.32-.45v-.08l-.16-.21-.11-.08-.29.06-.24.09,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.15-.08.25-.08.41-.09a.21.21,0,0,1,.17,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.38.54-.65.69h.92a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M453.48,1056.49h-.15a.19.19,0,0,1-.1,0l-.3-.15a.32.32,0,0,1-.09-.08l-.15-.22-.17-.42a.29.29,0,0,1,0-.09V1055l.08-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.21-.06h-.18l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.23.23,0,0,1,453.48,1056.49Zm-.09-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.17.12.31.1.13Z" />
                    <path
                        d="M455.52,1056.49h-.07a.23.23,0,0,1-.11,0l-.3-.15-.06,0-.22-.23a.24.24,0,0,1-.06-.11l-.08-.38a.27.27,0,0,1,0-.09V1055l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.18,0h-.17l-.17,0-.15.2,0,.21.42-.08.42.09a.24.24,0,0,1,.15.09l.15.23.16.32a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.11.09l-.37.15Zm-.24-.57.21.11.26-.11.11-.16.11-.22-.21-.36-.28-.06-.22.06-.14.14-.05.2.06.25Z" />
                    <path
                        d="M456.88,1056.49a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,456.88,1056.49Z" />
                    <path
                        d="M458.09,1056.49a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.19l-.08.08-.4.32a.23.23,0,0,1-.32,0,.21.21,0,0,1,0-.31l.51-.44a.24.24,0,0,1,.16-.07h.37a.24.24,0,0,1,.16.07l.15.15.05.06.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,458.09,1056.49Z" />
                    <path
                        d="M459.22,1056.49a.23.23,0,0,1-.23-.23v-1.06l0-.16-.1-.06h-.17l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,459.22,1056.49Z" />
                    <path
                        d="M460,1056.49a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.19-.34.12-.13v-.06l-.16-.21-.13-.09h-.24l-.26.16,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.24.24,0,0,1,.11-.13l.15-.08.2-.13a.2.2,0,0,1,.13,0h.38a.19.19,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.22a.23.23,0,0,1-.06.16l-.15.16-.2.33-.63.68.88,0a.23.23,0,0,1,.24.21.22.22,0,0,1-.21.24l-1.44.07Z" />
                    <path
                        d="M466.53,1055.58l-.36-.08a.27.27,0,0,1-.1-.06l-.23-.23a.19.19,0,0,1,0-.09l-.15-.45a.19.19,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.22.22,0,0,1,.16-.12l.38-.07h.19l.42.08a.22.22,0,0,1,.17.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25,0h-.11l-.22,0-.1.2-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.3v.21l-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.26,0-.19.35.1.31Z" />
                    <path
                        d="M468.72,1055.58h-.15l-.1,0-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.22-.3a.28.28,0,0,1,.13-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.13.1l.15.22a.23.23,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.17,0-.14.19,0,.22.29-.07h.21l.36.08a.27.27,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.26.26,0,0,1-.1.13l-.22.15-.33.17Zm-.1-.45h.05l.38-.22.05-.21v-.1l-.06-.18-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.21.06.3.14.09Z" />
                    <path
                        d="M470.08,1055.58a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,470.08,1055.58Z" />
                    <path
                        d="M471.21,1055.58a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,471.21,1055.58Z" />
                    <path
                        d="M472.34,1055.58a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0H472a.19.19,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,472.34,1055.58Z" />
                    <path
                        d="M474.53,1055.58h-1.44a.24.24,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.26-.46v-.09l-.11-.17-.15,0h-.3l-.18.09-.09.13v.08a.23.23,0,1,1-.45,0v-.15a.19.19,0,0,1,0-.12l.25-.34.09,0,.23-.08h.52l.22.08a.19.19,0,0,1,.09,0l.08.08.18.26a.28.28,0,0,1,0,.12v.23a.33.33,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,474.53,1055.58Z" />
                    <path
                        d="M402.66,654.84h-.23a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.15-.15a.23.23,0,1,1,.32-.32l.12.12.22.11h.12l.19-.09.12-.23,0-.17-.19.09a.19.19,0,0,1-.1,0h-.15a.17.17,0,0,1-.1,0l-.31-.15-.06,0-.22-.23a.17.17,0,0,1-.06-.1l-.08-.43.08-.36a.21.21,0,0,1,.06-.1l.22-.23a.24.24,0,0,1,.11-.06l.3-.08h.21l.35.08a.23.23,0,0,1,.14.09l.15.23.17.41h0v0h0s0,.05,0,.07v.52s0,0,0,.06l-.15.53-.17.34a.19.19,0,0,1-.1.1l-.3.15A.19.19,0,0,1,402.66,654.84Zm-.1-1.28h0l.2-.1.21-.37-.11-.28-.08-.11-.22-.06h-.09l-.19.05-.14.14-.06.24.06.21.16.15Z" />
                    <path
                        d="M405,654.84a.22.22,0,0,1-.22-.23v-.53H404a.22.22,0,0,1-.2-.12.24.24,0,0,1,0-.23l1-1.43a.21.21,0,0,1,.25-.09.21.21,0,0,1,.16.21v1.21h.3a.23.23,0,1,1,0,.45h-.3v.53A.23.23,0,0,1,405,654.84Zm-.55-1.21h.33v-.47Z" />
                    <path
                        d="M406.2,654.84a.22.22,0,0,1-.22-.23V653.1a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,406.2,654.84Z" />
                    <path
                        d="M407.33,654.84a.22.22,0,0,1-.22-.23v-1l-.17-.28h-.19l-.39.39a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.45-.46a.25.25,0,0,1,.16-.06H407a.23.23,0,0,1,.16.06l.15.15,0,.06.16.3a.43.43,0,0,1,0,.11v1.05A.23.23,0,0,1,407.33,654.84Z" />
                    <path
                        d="M408.46,654.84a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.27-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.16a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,408.46,654.84Z" />
                    <path
                        d="M410.65,654.84h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.46v-.09l-.16-.21-.13-.08h-.25l-.26.15,0,.15a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.15-.07.2-.14a.28.28,0,0,1,.13,0h.37a.28.28,0,0,1,.13,0l.33.26.18.26a.17.17,0,0,1,0,.12V653a.17.17,0,0,1,0,.12l-.15.23-.13.28-.05.06-.67.66h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,410.65,654.84Z" />
                    <path
                        d="M418.49,653.33l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.41l.08-.56,0-.09.23-.38a.24.24,0,0,1,.14-.1l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.22-.05h-.17l-.15.05-.16.26,0,.21.24-.12.1,0h.15l.11,0,.3.15.25.17a.24.24,0,0,1,.09.13l.08.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.25v-.09l0-.16-.16-.11-.27-.11-.39.22,0,.18.06.32Z" />
                    <path
                        d="M420.61,653.33l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.41l.07-.56,0-.09.23-.38a.24.24,0,0,1,.14-.1l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.16.05-.16.26,0,.21.24-.12.11,0h.07a.11.11,0,0,1,.08,0l.38.15a.14.14,0,0,1,.08,0l.15.15a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3-.16.25a.25.25,0,0,1-.15.1Zm-.19-.51.24.06.26,0,.1-.15.11-.28-.11-.22-.09-.09-.28-.11-.37.21,0,.18.06.32Z" />
                    <path d="M422,653.33a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,422,653.33Z" />
                    <path
                        d="M423.24,653.33a.22.22,0,0,1-.22-.23v-1l-.13-.2h-.27l-.1.05-.34.27a.22.22,0,1,1-.28-.35l.37-.3.2-.1a.17.17,0,0,1,.1,0h.37a.17.17,0,0,1,.1,0l.15.07a.27.27,0,0,1,.11.1l.15.31a.3.3,0,0,1,0,.1v1.05A.23.23,0,0,1,423.24,653.33Z" />
                    <path
                        d="M424.38,653.33a.23.23,0,0,1-.23-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.3l.08,0,.22.07a.22.22,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,424.38,653.33Z" />
                    <path
                        d="M426.56,653.33h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1-1.06.32-.44v-.06l-.08-.09-.05-.06,0-.06-.1,0h-.36l-.07,0-.09.08-.05.18a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.15-.15.06,0,.15-.08.1,0h.53l.22.08a.21.21,0,0,1,.13.11l.06.12.13.12a.25.25,0,0,1,.06.16v.23a.31.31,0,0,1,0,.13l-.39.53-.64.7h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M431.69,652.35l-.42-.08a.21.21,0,0,1-.14-.1L431,652l-.17-.42h0v0h0v-.65l.16-.52.16-.34a.25.25,0,0,1,.12-.11l.38-.15a.11.11,0,0,1,.08,0h.15a.15.15,0,0,1,.09,0l.37.15a.21.21,0,0,1,.13.13l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.12-.31-.1-.25.1-.11.23-.06.18.3-.11a.11.11,0,0,1,.08,0h.08l.1,0,.3.15.06,0,.22.22a.24.24,0,0,1,.06.11l.09.43-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.51.29.06.21,0,.14-.14.06-.25-.06-.2-.16-.16-.21-.1-.26.1-.2.35.11.29Z" />
                    <path
                        d="M433.73,652.35l-.36-.08a.17.17,0,0,1-.1-.06L433,652a.23.23,0,0,1-.06-.12l-.08-.37v-.57l.08-.56a.21.21,0,0,1,0-.11l.22-.3.08-.07.31-.15.1,0H434l.1,0,.31.15a.3.3,0,0,1,.08.08l.15.23a.22.22,0,0,1-.37.25l-.12-.18-.2-.1h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.06,0,.23.22a.39.39,0,0,1,.06.11l.08.43-.08.36a.33.33,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06l-.3.07Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.25-.06-.2-.15-.16-.27-.11-.22.11-.16.16,0,.2.06.25Z" />
                    <path
                        d="M435.24,652.35a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,435.24,652.35Z" />
                    <path
                        d="M436.37,652.35a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.11-.07l.22-.08h.45l.22.08a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,436.37,652.35Z" />
                    <path
                        d="M437.5,652.35a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.21.21,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.22-.08h.45l.22.08a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,437.5,652.35Z" />
                    <path
                        d="M439.68,652.35h-1.43a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1-1,.14-.27,0-.06.08-.08v-.06l-.16-.21-.13-.09h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.2.2,0,0,1,.13,0h.38a.17.17,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.22a.24.24,0,0,1-.07.16l-.13.13-.13.27,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M444.89,651.52h-.08l-.1,0-.3-.16-.25-.16a.23.23,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08V650l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.2.2,0,0,1,.13-.09l.3-.07H445l.36.08a.23.23,0,0,1,.15.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16,0-.15.19,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.15.15,0,0,1,0,.06l.15.3a.16.16,0,0,1,0,.1v.07a.28.28,0,0,1,0,.09l-.15.38a.28.28,0,0,1-.09.1l-.23.15-.32.17Zm-.4-.66.15.09.21.11.38-.22.11-.26-.11-.21-.16-.15-.24-.06-.2.05-.14.14-.05.21Z" />
                    <path
                        d="M447,651.52h-.08l-.08,0-.38-.15a.18.18,0,0,1-.07-.05l-.15-.15a.15.15,0,0,1-.06-.09l-.15-.45a.19.19,0,0,1,0-.08V650a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07h.29l.35.08a.22.22,0,0,1,.13.1l.16.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.15,0-.1.21-.06.2.46-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.43a.23.23,0,0,1-.1.14l-.22.15-.33.17Zm-.33-.57.29.11.36-.2.06-.29-.05-.21-.14-.14-.25-.06-.26.05-.19.35.1.31Z" />
                    <path
                        d="M448.36,651.52a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,448.36,651.52Z" />
                    <path
                        d="M449.49,651.52a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07H449l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,449.49,651.52Z" />
                    <path
                        d="M450.62,651.52a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.16.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,450.62,651.52Z" />
                    <path
                        d="M452.81,651.52h-1.44a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1,.18-.25.05-.16v-.15l0-.1-.23-.09h-.3l-.18.09-.08.14a.24.24,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.08a.25.25,0,0,1,0-.12l.26-.34.08,0,.23-.08h.52l.41.16a.28.28,0,0,1,.11.13l.08.23s0,.05,0,.07v.23s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,452.81,651.52Z" />
                    <path
                        d="M457.93,650.61l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.07-.13l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18-.05h-.18l-.16,0-.15.2,0,.21.42-.08.42.08a.31.31,0,0,1,.15.1l.15.23.16.32a.18.18,0,0,1,0,.1v.16a.2.2,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.15.09Zm-.18-.5.24.06.26-.06.1-.15.11-.27-.21-.38-.28-.06-.22.06-.14.14-.05.2.06.33Z" />
                    <path
                        d="M460.05,650.61l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.06-.09l-.15-.45h0a.13.13,0,0,1,0-.06v-.52a.17.17,0,0,1,0-.07l.15-.52a.2.2,0,0,1,0-.08l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.21l.42.08a.26.26,0,0,1,.17.15l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.25-.05h-.1l-.17,0-.16.21-.06.22h0l.43-.09.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.19-.5.24.06.2-.06.15-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.21.06-.16.16-.09.18.11.31Z" />
                    <path
                        d="M461.48,650.61a.22.22,0,0,1-.23-.22V649a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,461.48,650.61Z" />
                    <path
                        d="M462.61,650.61a.23.23,0,0,1-.23-.22v-1.06l0-.12-.08,0H462l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,462.61,650.61Z" />
                    <path
                        d="M463.82,650.61a.22.22,0,0,1-.23-.22v-1l-.08-.17-.11,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.28.28,0,0,1,.13.11l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,463.82,650.61Z" />
                    <path
                        d="M466,650.61h-1.5a.21.21,0,0,1-.21-.14.2.2,0,0,1,0-.24l1.05-1.06.18-.24.06-.16v-.14l0-.07-.17-.13h-.36l-.1,0-.09.17v.1a.23.23,0,1,1-.45,0v-.15a.3.3,0,0,1,0-.1l.15-.3a.24.24,0,0,1,.14-.12L465,648l.07,0h.46a.19.19,0,0,1,.1,0l.15.07.06,0,.15.15s0,0,0,.06l.07.15a.17.17,0,0,1,0,.1v.22s0,.05,0,.08l-.08.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M473.17,649.48l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.16.16,0,0,1,.07-.07l.31-.15a.17.17,0,0,1,.1,0h.22a.23.23,0,0,1,.11,0l.3.15.06,0,.15.15a.23.23,0,0,1,0,.32.22.22,0,0,1-.32,0l-.13-.12-.22-.11h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.15a.19.19,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.49-.08.36a.24.24,0,0,1-.06.11l-.23.22a.24.24,0,0,1-.11.06l-.3.08ZM473,649l.24.06h.1l.18,0,.14-.14.06-.24-.06-.26-.15-.1-.27-.11-.38.21,0,.25.06.25Z" />
                    <path
                        d="M475.28,649.48l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.07.15a.21.21,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07l.09,0,.38.15.07,0,.15.15a.22.22,0,0,1,0,.08l.15.37a.29.29,0,0,1,0,.09v.07a.3.3,0,0,1,0,.1l-.16.31-.16.25a.19.19,0,0,1-.14.09Zm-.19-.5.24.06.26-.06.1-.15.11-.22-.11-.28-.09-.09-.28-.11-.36.21-.06.25.06.25Z" />
                    <path
                        d="M476.71,649.48a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,476.71,649.48Z" />
                    <path
                        d="M477.92,649.48a.22.22,0,0,1-.23-.22v-1l-.08-.17-.11,0h-.21l-.1.05-.34.28a.21.21,0,0,1-.31,0,.22.22,0,0,1,0-.32l.38-.3.19-.1.1,0h.37l.23.07a.25.25,0,0,1,.13.12l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,477.92,649.48Z" />
                    <path
                        d="M479.05,649.48a.23.23,0,0,1-.23-.22v-1l-.13-.2h-.27l-.07,0-.27.27a.23.23,0,1,1-.32-.32l.3-.3.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,479.05,649.48Z" />
                    <path
                        d="M481.24,649.48H479.8a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1.05.19-.26.05-.23-.08-.23-.11,0h-.36l-.07,0-.09.09,0,.18a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.08-.23a.22.22,0,0,1,.05-.08L480,647l.05,0,.16-.07a.17.17,0,0,1,.1,0h.45l.07,0,.23.07a.28.28,0,0,1,.13.11l.07.16.09.25a.17.17,0,0,1,0,.07v.15a.22.22,0,0,1,0,.08l-.07.22a.25.25,0,0,1,0,.07l-.22.3-.65.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,481.24,649.48Z" />
                    <path
                        d="M486.44,648.65h-.16l-.38-.15a.22.22,0,0,1-.1-.09l-.15-.22-.17-.42a.29.29,0,0,1,0-.09v-.52a.15.15,0,0,1,0-.07l.15-.52.17-.34a.2.2,0,0,1,.11-.11l.38-.16h.24l.1,0,.3.15.09.08.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.25-.1-.26.1-.11.23-.05.2.45-.08.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.27.27,0,0,1-.06.1l-.23.23-.06,0-.3.15A.16.16,0,0,1,486.44,648.65Zm-.31-.56.27.11.21-.11.15-.16.06-.24-.05-.2-.14-.14-.24-.06-.26.06-.2.33.12.29Z" />
                    <path
                        d="M488.55,648.65h-.15a.18.18,0,0,1-.1,0l-.3-.15-.06,0-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.48l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.28.28,0,0,1,.11.13l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l-.05-.13-.17-.09h-.12l-.2.1-.16.22,0,.21.29-.07h.2l.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.23-.06,0-.3.15A.16.16,0,0,1,488.55,648.65Zm-.1-.45h.05l.22-.11.16-.16.06-.24-.06-.2-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.25.15.15Z" />
                    <path
                        d="M489.91,648.58a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,489.91,648.58Z" />
                    <path
                        d="M491,648.58a.23.23,0,0,1-.23-.23v-.94l-.12-.26h-.28l-.05,0-.27.34a.23.23,0,1,1-.36-.28l.3-.38.08-.06.15-.07a.19.19,0,0,1,.1,0h.38a.19.19,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.19.19,0,0,1,0,.08v1A.23.23,0,0,1,491,648.58Z" />
                    <path
                        d="M492.17,648.58a.22.22,0,0,1-.22-.23v-1l-.05-.2-.07,0h-.23l-.12,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.23.23,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,492.17,648.58Z" />
                    <path
                        d="M494.36,648.58h-1.43a.22.22,0,0,1-.21-.15.2.2,0,0,1,0-.24l1-1,.13-.33a.35.35,0,0,1,.05-.08l.09-.08v-.06l-.16-.21-.13-.09h-.25l-.26.16,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.14.14,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.15-.08.2-.13a.19.19,0,0,1,.12,0h.38a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1-.07.16l-.12.12-.13.34a.35.35,0,0,1-.05.08l-.64.59h.86a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M499.56,647.75h-.07a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.27.27,0,0,1-.09-.12l-.15-.45s0-.05,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53a.16.16,0,0,1,0-.07l.22-.3a.22.22,0,0,1,.13-.09l.3-.07h.21l.42.08a.22.22,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.22.22,0,0,1-.28-.14l0-.1-.25-.05h-.1l-.17.05-.15.2-.07.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.3v.21l-.08.36a.24.24,0,0,1-.09.13l-.23.15-.33.16A.17.17,0,0,1,499.56,647.75Zm-.41-.67.16.1.21.11.37-.21.06-.22v-.09l-.05-.19-.14-.14-.24-.06-.21.06-.16.16-.09.19Z" />
                    <path
                        d="M501.67,647.75h-.15a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.15-.15a.19.19,0,0,1-.05-.09l-.16-.45s0-.05,0-.08v-.52l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.22.22,0,0,1-.06.31.22.22,0,0,1-.32-.06l-.1-.15-.22-.05h-.17l-.16.05-.15.19,0,.22.29-.07h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.43-.08.43a.22.22,0,0,1-.09.14l-.23.15-.33.16A.17.17,0,0,1,501.67,647.75Zm-.09-.45h0l.38-.21.06-.29-.06-.22-.14-.14-.24-.06h-.1l-.16.05-.2.34.11.32.08.09Z" />
                    <path
                        d="M503,647.75a.23.23,0,0,1-.23-.23V646a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,503,647.75Z" />
                    <path
                        d="M504.16,647.75a.22.22,0,0,1-.22-.23v-1l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,1,1-.32-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,504.16,647.75Z" />
                    <path
                        d="M505.29,647.75a.22.22,0,0,1-.22-.23v-1l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,1,1-.32-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,505.29,647.75Z" />
                    <path
                        d="M507.48,647.75h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.05.19-.25.05-.16v-.15l0-.1-.22-.09h-.31l-.18.09-.08.13v.08a.23.23,0,1,1-.45,0v-.15a.24.24,0,0,1,0-.12l.26-.34a.19.19,0,0,1,.09,0l.22-.08H507l.41.16a.23.23,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.23.3-.69.7h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M512.61,646.77l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.27.27,0,0,1-.06-.12l-.08-.45v-.49l.08-.56a.16.16,0,0,1,0-.09l.22-.38a.24.24,0,0,1,.14-.1l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.16,0-.15.27,0,.21.24-.12.1,0h.07l.11,0,.3.15.25.17a.18.18,0,0,1,.07.08l.16.31a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.16.3-.16.25a.23.23,0,0,1-.15.1Zm-.19-.51.24.06.26-.06.1-.14.12-.28-.1-.2-.18-.12-.21-.1-.37.2,0,.18.06.33Z" />
                    <path
                        d="M514.72,646.77l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.19.19,0,0,1,0-.09l-.15-.45h0v-.59a.17.17,0,0,1,0-.07l.3-.84a.22.22,0,0,1,.17-.14l.38-.08h.19l.42.08a.2.2,0,0,1,.17.15l.08.23a.23.23,0,0,1-.43.14l0-.1-.24,0h-.11l-.21,0-.15.4.44-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.08.3v.21l-.09.36a.27.27,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24v-.09l0-.19-.14-.14-.24-.06-.26.06-.1.15-.09.19.1.32Z" />
                    <path
                        d="M516.15,646.77a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,516.15,646.77Z" />
                    <path
                        d="M517.28,646.77a.22.22,0,0,1-.22-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.31-.31.08,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,517.28,646.77Z" />
                    <path
                        d="M518.42,646.77a.23.23,0,0,1-.23-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,1,1-.32-.32l.31-.31.08,0,.23-.08h.45l.22.08a.22.22,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,518.42,646.77Z" />
                    <path
                        d="M520.68,646.77h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1,.18-.25,0-.16v-.13l0-.07-.17-.14h-.37l-.1,0-.08.17v.09a.23.23,0,0,1-.46,0v-.15a.19.19,0,0,1,0-.1l.15-.3a.2.2,0,0,1,.13-.11l.23-.08h.52l.1,0,.15.08.06,0,.15.15,0,.06.08.15a.18.18,0,0,1,0,.1V645a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,520.68,646.77Z" />
                    <path
                        d="M524.75,645.94h-.15a.17.17,0,0,1-.1,0l-.3-.15a.16.16,0,0,1-.09-.07l-.15-.23-.17-.41v0h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.27.27,0,0,1,.11-.1l.3-.15a.17.17,0,0,1,.1,0h.23l.1,0,.3.15a.32.32,0,0,1,.09.08l.15.22a.23.23,0,1,1-.38.25l-.12-.17-.2-.1h-.12l-.18.09-.12.23-.05.2.24-.06h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.36a.24.24,0,0,1-.06.11l-.23.22-.06,0-.3.15A.17.17,0,0,1,524.75,645.94Zm-.1-.45h.05l.22-.11.15-.16.06-.24,0-.21-.14-.14-.25-.06h-.09l-.16,0-.2.34.12.28.09.13Z" />
                    <path
                        d="M526.71,645.86l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.11.13l.08.23a.23.23,0,0,1-.43.14l-.05-.14-.17-.08h-.12l-.2.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15a.22.22,0,0,1,.1.09l.15.22.17.33a.3.3,0,0,1,0,.1V645a.3.3,0,0,1,0,.1l-.15.31-.17.25a.24.24,0,0,1-.13.09l-.3.08Zm-.19-.5.25.06h.09l.16,0,.11-.16.1-.21-.22-.39-.26-.1-.21.11-.15.15,0,.2,0,.25Z" />
                    <path
                        d="M528.22,645.86a.23.23,0,0,1-.23-.21l-.07-1.43a.22.22,0,0,1,.21-.24.23.23,0,0,1,.24.21l.07,1.44a.21.21,0,0,1-.21.23Z" />
                    <path
                        d="M529.35,645.86a.22.22,0,0,1-.23-.22v-.94l-.12-.27h-.27l-.08,0-.35.35a.23.23,0,1,1-.32-.32l.38-.38.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.11.12l.15.37a.29.29,0,0,1,0,.09v1A.22.22,0,0,1,529.35,645.86Z" />
                    <path
                        d="M530.48,645.86a.22.22,0,0,1-.22-.22v-1l0-.21-.07,0h-.22l-.13,0-.26.33a.23.23,0,0,1-.36-.28l.31-.38a.2.2,0,0,1,.1-.08l.23-.07h.44l.23.07a.27.27,0,0,1,.15.18l.07.37v1A.22.22,0,0,1,530.48,645.86Z" />
                    <path
                        d="M532.67,645.86h-1.43a.21.21,0,0,1-.21-.14.21.21,0,0,1,0-.24l1-1,.19-.34.12-.12V644l-.16-.21-.14-.08h-.24l-.26.16,0,.14a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.07l.07-.23a.28.28,0,0,1,.11-.13l.16-.07.2-.14a.28.28,0,0,1,.12,0h.38a.28.28,0,0,1,.13,0l.33.26.18.26a.17.17,0,0,1,0,.12v.23a.2.2,0,0,1-.07.16l-.15.15-.19.33-.63.64h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,532.67,645.86Z" />
                    <path
                        d="M538.93,645h-.15a.17.17,0,0,1-.1,0l-.31-.15-.06,0-.15-.15a.19.19,0,0,1,0-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07H539l.36.08a.21.21,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.11-.15-.21-.06h-.17l-.15,0-.1.21-.06.2.25-.06h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.31.31,0,0,1,0,.1l.09.43-.08.42a.23.23,0,0,1-.1.15l-.22.15-.33.16A.19.19,0,0,1,538.93,645Zm-.1-.45h0l.38-.21.06-.29-.06-.22-.14-.14-.24-.06h-.09l-.16,0-.11.15-.09.19.1.32.09.09Z" />
                    <path
                        d="M541,645h-.15a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17.05-.14.19,0,.22.28-.07H541l.36.08a.24.24,0,0,1,.13.09l.15.23.16.33a.17.17,0,0,1,0,.1v.07a.17.17,0,0,1,0,.1l-.15.31-.16.25a.16.16,0,0,1-.09.07l-.3.15A.19.19,0,0,1,541,645Zm-.1-.45h0l.2-.1.11-.18.11-.21-.21-.37-.22-.06h-.09l-.19,0-.14.14,0,.2.06.31.14.09Z" />
                    <path
                        d="M542.4,645a.24.24,0,0,1-.23-.22l-.07-1.51a.21.21,0,0,1,.21-.23.24.24,0,0,1,.24.21l.07,1.51a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M543.53,645a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.19l-.38.39a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.45-.46a.23.23,0,0,1,.16-.06h.38a.25.25,0,0,1,.16.06l.15.15,0,.06.15.3a.22.22,0,0,1,0,.11v1.05A.22.22,0,0,1,543.53,645Z" />
                    <path
                        d="M544.66,645a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.17l-.17.11-.26.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,544.66,645Z" />
                    <path
                        d="M546.85,645h-1.44a.2.2,0,0,1-.2-.14.21.21,0,0,1,0-.24l1-1.06.31-.44V643l-.16-.21-.13-.08H546l-.26.16,0,.14a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.15-.07.21-.14a.25.25,0,0,1,.12,0h.38a.25.25,0,0,1,.12,0l.34.26.18.26a.25.25,0,0,1,0,.12v.23a.25.25,0,0,1,0,.12l-.39.54-.64.7h.92a.22.22,0,0,1,.22.22A.22.22,0,0,1,546.85,645Z" />
                    <path
                        d="M403.79,677.76l-.42-.08a.2.2,0,0,1-.17-.15l-.08-.22a.23.23,0,1,1,.43-.15l0,.11.25,0h.11l.21,0,.17-.5-.28.14a.18.18,0,0,1-.1,0h-.08a.18.18,0,0,1-.1,0l-.3-.15-.25-.17a.2.2,0,0,1-.09-.13l-.08-.3V676l.09-.35a.24.24,0,0,1,.06-.11l.22-.23.11,0,.43-.09.36.09.1,0,.23.23a.41.41,0,0,1,.05.09l.15.45a.22.22,0,0,1,0,.08v.51l-.16.53-.15.4a.21.21,0,0,1-.17.13l-.38.08Zm-.26-1.5.16.11.21.1.39-.22.08-.16-.1-.32-.15-.14-.24-.06-.2.06-.14.14-.06.24v.09Z" />
                    <path
                        d="M405.82,677.76l-.35-.08a.2.2,0,0,1-.15-.12l-.08-.15-.13-.2a.2.2,0,0,1,0-.13v-.3a.17.17,0,0,1,0-.12l.15-.23.13-.14a.21.21,0,0,1-.08-.11l-.08-.23a.17.17,0,0,1,0-.07v-.23s0,0,0-.07l.08-.23a.19.19,0,0,1,.16-.14l.3-.08h.51l.35.09a.19.19,0,0,1,.16.14l.08.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.08.23a.21.21,0,0,1-.08.11l.1.11.18.26a.17.17,0,0,1,0,.12v.3a.2.2,0,0,1,0,.13l-.21.35a.2.2,0,0,1-.15.12l-.3.08Zm-.14-.49.2.05h.4l.14,0,0-.06.13-.19v-.17l-.2-.25-.33-.13h0l-.29.12-.12.12-.09.13V677Zm0-1.34.12,0,.24,0,.34-.08,0-.09,0-.23-.18,0h-.37l-.15,0,0,.08Z" />
                    <path
                        d="M407.48,677.76a.22.22,0,0,1-.22-.22V676a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,407.48,677.76Z" />
                    <path
                        d="M408.69,677.76a.23.23,0,0,1-.23-.22v-1l-.1-.2-.12-.08h-.13l-.09.09-.4.32a.23.23,0,0,1-.28-.36l.51-.43a.24.24,0,0,1,.16-.07h.3a.28.28,0,0,1,.13,0l.22.15a.18.18,0,0,1,.08.09l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,408.69,677.76Z" />
                    <path
                        d="M409.82,677.76a.23.23,0,0,1-.23-.22v-1l-.16-.28h-.14l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.24.24,0,0,1,.16.07l.15.15a.21.21,0,0,1,0,.06l.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,409.82,677.76Z" />
                    <path
                        d="M412,677.76h-1.43a.22.22,0,0,1-.21-.13.23.23,0,0,1,0-.25l1-1,.32-.45v-.08l-.12-.17-.15,0h-.36l-.07,0-.13.17v.1a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.15a.17.17,0,0,1,0-.1l.07-.16.05-.05.15-.16.06,0,.15-.07a.17.17,0,0,1,.1,0h.52l.23.08.09,0,.07.08.18.26a.2.2,0,0,1,0,.13V676a.2.2,0,0,1,0,.13l-.38.54-.65.69H412a.22.22,0,0,1,.22.23A.22.22,0,0,1,412,677.76Z" />
                    <path
                        d="M420.23,677.39l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.19,0,.21.41-.07.36.08a.24.24,0,0,1,.11.06l.22.22,0,.06.15.3a.23.23,0,0,1,0,.11v.15a.19.19,0,0,1,0,.1l-.15.3,0,.06-.22.22a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.16-.16.11-.26-.11-.22-.16-.16-.24-.06-.21.06-.14.14,0,.2.06.33Z" />
                    <path
                        d="M422.42,677.39h-.08l-.42-.08a.31.31,0,0,1-.15-.1l-.15-.23a.08.08,0,0,1,0-.05l-.15-.45a.24.24,0,0,1,0-.08v-.52s0,0,0-.06l.15-.53.17-.34a.2.2,0,0,1,.16-.12l.38-.08h.19l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.15-.21-.06h-.1l-.22,0-.11.2-.05.2.46-.07.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.19.19,0,0,1-.09.14l-.23.15-.32.16Zm-.32-.51.26,0,.38-.21.06-.22v-.09l-.05-.19-.14-.14-.24-.06-.26.06-.19.34.11.34Z" />
                    <path
                        d="M423.77,677.39a.23.23,0,0,1-.22-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,423.77,677.39Z" />
                    <path
                        d="M424.9,677.39a.23.23,0,0,1-.22-.23V676.1l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.33.33,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,424.9,677.39Z" />
                    <path
                        d="M426,677.39a.23.23,0,0,1-.22-.23V676.1l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.07.3v1.11A.23.23,0,0,1,426,677.39Z" />
                    <path
                        d="M428.22,677.39h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.19-.24.05-.16v-.15l0-.11-.23-.08h-.31l-.17.08-.09.14v.08a.23.23,0,1,1-.45,0v-.15a.2.2,0,0,1,0-.13l.25-.33.09-.06.23-.07h.51l.41.16a.22.22,0,0,1,.12.13l.07.23a.17.17,0,0,1,0,.07v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.7.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,428.22,677.39Z" />
                    <path
                        d="M433.35,676.48l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.11l.23-.3A.16.16,0,0,1,433,674l.3-.15a.17.17,0,0,1,.1,0h.23l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.11l-.21.11-.16.21,0,.21.24-.13.1,0h.08l.08,0,.38.15.07,0,.15.15.05.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.13.1l-.3.07Zm-.19-.5.24,0h.1l.16,0,.11-.15.11-.28-.11-.22-.09-.09-.29-.11-.36.2,0,.26,0,.25Z" />
                    <path
                        d="M435.46,676.48l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.19.19,0,0,1,0-.09l-.15-.45h0v-.51a.13.13,0,0,1,0-.06l.15-.53a.14.14,0,0,1,0-.06L435,674a.22.22,0,0,1,.14-.11l.3-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.15.05-.17.27-.06.23.28-.15.1,0h.08l.1,0,.3.16.25.16a.2.2,0,0,1,.09.13l.08.31v.2l-.09.36a.31.31,0,0,1,0,.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.5.24,0,.2,0,.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.22-.08.17.1.31Z" />
                    <path
                        d="M436.89,676.48a.22.22,0,0,1-.22-.23v-1.43a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.43A.23.23,0,0,1,436.89,676.48Z" />
                    <path
                        d="M438,676.48a.23.23,0,0,1-.23-.23v-1l0-.13-.07,0h-.23l-.14.05-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07h.45l.22.07a.26.26,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,438,676.48Z" />
                    <path
                        d="M439.23,676.48a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.21l-.11.05-.33.28a.23.23,0,0,1-.29-.36l.38-.3.19-.1a.18.18,0,0,1,.1,0h.38l.22.07a.2.2,0,0,1,.13.12l.15.3a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,439.23,676.48Z" />
                    <path
                        d="M441.42,676.48h-1.51a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1.05.18-.25.05-.23,0-.14-.16-.13h-.36l-.11,0-.08.27a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07L440,674a.24.24,0,0,1,.13-.11l.23-.08h.52a.17.17,0,0,1,.1,0l.15.07.06,0,.15.15a.24.24,0,0,1,.06.09l.07.23a.17.17,0,0,1,0,.07v.15a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M446.47,675.5l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.16.16,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.16.16,0,0,1,.09.07l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.12-.18-.2-.1h-.11l-.21.11-.16.21,0,.2.24-.12.1,0h.15l.1,0,.31.16a.1.1,0,0,1,.05,0l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.24-.06-.21-.16-.16-.26-.11-.23.11-.15.16,0,.2,0,.25Z" />
                    <path
                        d="M448.58,675.5l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.16.16,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.2.2,0,0,1,.12.13l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.14-.17-.09h-.12l-.21.11-.16.21,0,.2.24-.12.1,0h.08l.08,0,.38.15a.16.16,0,0,1,.1.08l.15.23.17.32a.22.22,0,0,1,0,.11v.07a.16.16,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26,0,.1-.15.1-.22-.21-.38-.26-.1-.21.1-.16.16-.05.2.05.25Z" />
                    <path d="M450,675.5a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,450,675.5Z" />
                    <path
                        d="M451.22,675.5a.22.22,0,0,1-.22-.23v-.93l-.1-.24-.09,0h-.21l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.37-.37.06,0,.15-.07a.19.19,0,0,1,.1,0h.31l.07,0,.22.07a.2.2,0,0,1,.14.13l.15.38a.31.31,0,0,1,0,.08v1A.23.23,0,0,1,451.22,675.5Z" />
                    <path
                        d="M452.35,675.5a.22.22,0,0,1-.22-.23v-.93l-.13-.27h-.21l-.13,0-.26.33a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.37a.25.25,0,0,1,.1-.08l.23-.07.07,0h.3a.17.17,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.31.31,0,0,1,0,.08v1A.23.23,0,0,1,452.35,675.5Z" />
                    <path
                        d="M454.54,675.5h-1.43a.23.23,0,0,1-.16-.39l1-1,.23-.42v-.13l-.08-.18-.13-.09h-.3l-.08.09-.06,0-.07,0,0,.15a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.12-.06.12-.12a.24.24,0,0,1,.16-.07H454a.2.2,0,0,1,.13,0l.33.25a.24.24,0,0,1,.06.09l.07.23a.19.19,0,0,1,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39-.63.64h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M459.67,674.67h-.08a.12.12,0,0,1-.08,0l-.38-.15a.12.12,0,0,1-.07,0l-.15-.15a.15.15,0,0,1-.06-.09l-.15-.45h0a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.28.28,0,0,1,.16-.12l.38-.07h.19l.36.08a.22.22,0,0,1,.13.1l.15.22a.23.23,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.1l-.22,0-.1.21-.06.19.46-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.21.21,0,0,1-.1.14l-.22.15-.33.17Zm-.33-.57.29.11.36-.2.06-.29-.06-.21-.14-.14-.24-.06-.26.05-.19.35.1.31Z" />
                    <path
                        d="M461.78,674.67h-.15l-.1,0-.3-.15-.25-.17a.2.2,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.29l.35.08a.28.28,0,0,1,.14.1l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.17,0-.14.19,0,.22.28-.07h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.21.21,0,0,1-.1.14l-.22.15-.33.17Zm-.1-.45h.05l.37-.21.06-.29-.05-.21-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.21.05.3.14.1Z" />
                    <path
                        d="M463.14,674.67a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.22.22,0,0,1,463.14,674.67Z" />
                    <path
                        d="M464.27,674.67a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.14l-.16.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.21.21,0,0,1,.16.07l.15.15a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v1.05A.23.23,0,0,1,464.27,674.67Z" />
                    <path
                        d="M465.4,674.67a.23.23,0,0,1-.23-.23v-1.05l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,465.4,674.67Z" />
                    <path
                        d="M467.59,674.67h-1.44a.2.2,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.27-.47v-.09l-.12-.17-.15,0h-.3l-.18.09-.08.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.08a.28.28,0,0,1,0-.12l.26-.34.08,0,.23-.08h.52l.23.08.09,0,.07.08.18.26a.28.28,0,0,1,0,.12v.23a.28.28,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,467.59,674.67Z" />
                    <path
                        d="M474.9,673.54l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.19.19,0,0,1,0-.09l-.15-.45a.19.19,0,0,1,0-.08V672a.17.17,0,0,1,0-.07l.15-.45.25-.42a.22.22,0,0,1,.14-.11l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.15,0-.18.3,0,.12h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.19.19,0,0,1,.05.1l.08.3v.21l-.09.36a.19.19,0,0,1-.05.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.2.05-.16.16-.09.19.1.31Z" />
                    <path
                        d="M476.94,673.54l-.36-.08a.26.26,0,0,1-.13-.1l-.15-.22,0-.06-.15-.45a.19.19,0,0,1,0-.08V672a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07h.28l.36.08a.22.22,0,0,1,.13.1l.16.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.15,0-.1.21-.06.2.25-.06h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.07Zm-.16-.5.21.05h.1l.18-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.25-.06h-.09l-.16.05-.11.15-.09.2.11.33Z" />
                    <path
                        d="M478.45,673.54a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,478.45,673.54Z" />
                    <path
                        d="M479.58,673.54a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0H479l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.31l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,479.58,673.54Z" />
                    <path
                        d="M480.71,673.54a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.08,0h.3l.07,0,.23.07a.25.25,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,480.71,673.54Z" />
                    <path
                        d="M482.9,673.54h-1.44a.24.24,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1,.18-.25,0-.16v-.13l0-.07-.09-.09-.14,0H482l-.1,0,0,.06a.09.09,0,0,1,0,.06l-.09.09v0a.23.23,0,1,1-.45,0v-.15a.26.26,0,0,1,.07-.16l.12-.12.06-.12a.28.28,0,0,1,.13-.11l.23-.08h.52l.23.08.08,0,.15.15.05.06.07.15a.19.19,0,0,1,0,.1v.23s0,0,0,.07L483,672l0,.06-.23.3-.69.7h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,482.9,673.54Z" />
                    <path
                        d="M488,672.64l-.35-.09a.24.24,0,0,1-.11-.06l-.22-.22a.19.19,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.16.16,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.31.24.24,0,0,1-.31-.11l0-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15.08,0,.15.15a.22.22,0,0,1,0,.08l.15.38a.19.19,0,0,1,0,.08v.08a.18.18,0,0,1,0,.1l-.15.3-.17.25a.19.19,0,0,1-.14.09Zm-.18-.51.24.06.26-.06.1-.15.11-.22-.12-.28-.08-.09-.28-.11-.37.21-.05.25.05.25Z" />
                    <path
                        d="M490.14,672.64l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.35.35,0,0,1-.05-.08l-.15-.37a.29.29,0,0,1,0-.09v-.53a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.22.22,0,0,1,.11,0h.23l.38.15a.25.25,0,0,1,.12.11l.07.15a.23.23,0,0,1-.1.31.22.22,0,0,1-.3-.11l0-.07-.31-.1-.21.1-.17.23-.06.21.28-.14a.23.23,0,0,1,.11,0h.07a.17.17,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.5-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.2-.06.14-.14.06-.24,0-.26-.15-.1-.22-.1-.38.21-.09.23.1.25Z" />
                    <path
                        d="M491.57,672.64a.23.23,0,0,1-.23-.23V671a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,491.57,672.64Z" />
                    <path
                        d="M492.7,672.64a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.22-.08h.45l.23.08a.21.21,0,0,1,.14.16l.08.3v1.11A.24.24,0,0,1,492.7,672.64Z" />
                    <path
                        d="M493.91,672.64a.23.23,0,0,1-.23-.23v-1l-.08-.17-.11,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.28.28,0,0,1,.13.11l.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,493.91,672.64Z" />
                    <path
                        d="M496.09,672.64h-1.5a.22.22,0,0,1-.21-.14.23.23,0,0,1,0-.25l1.06-1.06.18-.24.06-.24-.05-.14-.16-.12h-.33l-.17.11-.05.19a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.08-.22a.19.19,0,0,1,0-.09l.08-.08L495,670a.24.24,0,0,1,.12,0h.46a.18.18,0,0,1,.1,0l.15.07.06,0,.15.15a.19.19,0,0,1,.05.09l.08.22s0,0,0,.07v.15s0,0,0,.08l-.08.22,0,.07-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,496.09,672.64Z" />
                    <path
                        d="M501.3,671.81h-.15a.23.23,0,0,1-.11,0l-.3-.15-.06,0-.22-.23a.17.17,0,0,1-.06-.11l-.08-.38a.27.27,0,0,1,0-.09v-.48l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.15-.21-.06h-.17l-.17,0-.15.2,0,.21.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.09.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.19.19,0,0,1,501.3,671.81Zm-.1-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.2.06.25.15.15Z" />
                    <path
                        d="M503.33,671.81h-.07a.17.17,0,0,1-.1,0l-.31-.15a.1.1,0,0,1-.05,0l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.08-.56a.21.21,0,0,1,0-.11l.22-.3.08-.07.31-.15.1,0h.22l.11,0,.3.15a.26.26,0,0,1,.11.14l.08.22a.24.24,0,0,1-.15.29.23.23,0,0,1-.28-.14l0-.14-.17-.09h-.12l-.21.11-.15.21,0,.21.42-.07.36.08a.21.21,0,0,1,.1.06l.23.22,0,.06.15.3a.19.19,0,0,1,0,.1v.08a.17.17,0,0,1,0,.1l-.15.3s0,.05,0,.06l-.23.23a.1.1,0,0,1-.05,0l-.31.15A.17.17,0,0,1,503.33,671.81Zm-.24-.57.2.11.21-.11.17-.17.11-.21-.11-.2-.15-.16-.24-.06-.21.06-.14.14-.05.2.06.25Z" />
                    <path
                        d="M504.69,671.81a.24.24,0,0,1-.23-.23v-1.51a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,504.69,671.81Z" />
                    <path
                        d="M505.9,671.73a.23.23,0,0,1-.23-.23v-.92l-.1-.2-.12-.08h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15.08.09.15.3a.36.36,0,0,1,0,.1v1A.22.22,0,0,1,505.9,671.73Z" />
                    <path
                        d="M507,671.73a.23.23,0,0,1-.23-.23v-.93l-.13-.27h-.27l-.06,0-.27.33a.21.21,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38.08-.06.15-.07a.17.17,0,0,1,.1,0h.38a.19.19,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.22.22,0,0,1,0,.08v1A.22.22,0,0,1,507,671.73Z" />
                    <path
                        d="M509.21,671.73h-1.5a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.25-.44v-.13l-.09-.18-.13-.09h-.29l-.09.09-.06,0-.06,0,0,.14a.23.23,0,1,1-.45,0v-.07s0,0,0-.07l.08-.23a.24.24,0,0,1,.11-.13l.12-.06.13-.12a.18.18,0,0,1,.15-.07h.46a.19.19,0,0,1,.12,0l.34.25a.41.41,0,0,1,.05.09l.08.23a.15.15,0,0,1,0,.07V670a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,.05-.64.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M514.34,670.82h-.07l-.42-.07a.31.31,0,0,1-.15-.1l-.15-.23,0,0-.15-.45h0s0,0,0-.07v-.52s0,0,0-.07l.15-.52.17-.34a.2.2,0,0,1,.15-.12l.3-.08h.28l.35.08a.19.19,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.14,0-.11.21-.05.19.25-.06h.2l.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.3V670l-.08.35a.21.21,0,0,1-.09.13l-.23.16-.33.16A.16.16,0,0,1,514.34,670.82Zm-.31-.5.26,0,.38-.21.06-.22v-.1l-.05-.18-.14-.14-.24-.06h-.1l-.16,0-.1.16-.1.19.11.34Z" />
                    <path
                        d="M516.45,670.82h-.15a.18.18,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.16l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.19,0h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.18.18,0,0,1,.13.09l.15.23.17.32a.18.18,0,0,1,0,.1V670a.18.18,0,0,1,0,.1l-.15.3,0,.06-.15.15-.06,0-.3.15A.22.22,0,0,1,516.45,670.82Zm-.09-.45h0l.22-.11.1-.1.11-.26-.21-.38-.22-.06h-.1l-.18,0-.14.14-.05.2.05.3.15.1Z" />
                    <path
                        d="M517.81,670.82a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,517.81,670.82Z" />
                    <path
                        d="M518.94,670.82a.22.22,0,0,1-.22-.22v-1l-.17-.28h-.19l-.39.38a.23.23,0,0,1-.32-.32l.45-.45a.26.26,0,0,1,.16-.07h.38a.24.24,0,0,1,.16.07l.15.15,0,.06.16.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,518.94,670.82Z" />
                    <path
                        d="M520.07,670.82a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.31-.3.26-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,520.07,670.82Z" />
                    <path
                        d="M522.26,670.82h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,0-.24l1-1L522,669v-.09l-.11-.17-.15-.05h-.31l-.23.08,0,.11v.11a.23.23,0,1,1-.45,0v-.15a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.15-.08.25-.08h.52l.23.07a.24.24,0,0,1,.09.06l.08.07.17.26a.2.2,0,0,1,0,.13V669a.2.2,0,0,1,0,.13l-.15.23-.13.27a.1.1,0,0,1-.05.06l-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M527.39,669.92l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.19.19,0,0,1-.05-.09l-.15-.45a.19.19,0,0,1,0-.08v-.44s0,0,0-.06l.15-.53,0-.06.22-.37a.22.22,0,0,1,.14-.11l.3-.07h.21l.42.08a.22.22,0,0,1,.17.15l.08.23a.23.23,0,0,1-.43.14l0-.1-.24,0h-.11l-.15,0-.17.27-.06.23.28-.15.1,0h.07l.11,0,.3.15.25.17a.2.2,0,0,1,.09.13l.08.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.05.14-.14.06-.24v-.1l0-.16-.16-.1-.21-.11-.39.22L527,669l.1.31Z" />
                    <path
                        d="M529.43,669.92l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45a.09.09,0,0,1,0-.07v-.42l.07-.56,0-.09.23-.37a.22.22,0,0,1,.14-.11l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.11-.15-.21,0h-.17l-.16,0-.16.26,0,.22.24-.13.11,0h.15l.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.3v.21l-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.19-.51.24.06h.1l.18-.05.14-.14L530,669v-.1l-.05-.18-.14-.14-.24-.06h0l-.39.22-.05.18.06.32Z" />
                    <path
                        d="M530.93,669.92a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,530.93,669.92Z" />
                    <path
                        d="M532.06,669.92a.22.22,0,0,1-.22-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.09-.06.23-.07.07,0h.3l.08,0,.22.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,532.06,669.92Z" />
                    <path
                        d="M533.2,669.92a.23.23,0,0,1-.23-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.33,0,.24.24,0,0,1,0-.32l.31-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.3l.08,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,533.2,669.92Z" />
                    <path
                        d="M535.38,669.92H534a.24.24,0,0,1-.21-.14.26.26,0,0,1,0-.25l1-1,.26-.46V668l-.08-.09s0,0,0-.06l0-.06-.1,0h-.31l-.1,0,0,.06a.15.15,0,0,1,0,.06l-.09.09v0a.23.23,0,1,1-.45,0v-.15a.21.21,0,0,1,.07-.16l.12-.12.06-.12a.24.24,0,0,1,.13-.11l.23-.08h.52l.22.08a.21.21,0,0,1,.13.11l.06.12.13.12a.25.25,0,0,1,.06.16v.23a.24.24,0,0,1,0,.12l-.15.23-.14.28,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M540.51,669l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.23.23,0,0,1-.31-.11l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.18.18,0,0,1,.1,0h.08a.18.18,0,0,1,.1,0l.3.15.06,0,.22.23.05.06.15.3a.3.3,0,0,1,0,.1v.08a.44.44,0,0,1,0,.1l-.15.3-.05.06-.22.22a.24.24,0,0,1-.11.06Zm-.19-.5.25.06.2-.06.16-.16.1-.2-.1-.21-.18-.17-.2-.1-.21.1-.15.15-.05.21.05.24Z" />
                    <path
                        d="M542.62,669l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23-.17-.41v0h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15h.32l.37.15a.19.19,0,0,1,.12.11l.08.15a.24.24,0,0,1-.1.31A.24.24,0,0,1,543,667l0-.07-.32-.1-.26.1-.11.23,0,.18.29-.12h.16a.18.18,0,0,1,.1,0l.3.15.06,0,.23.23a.33.33,0,0,1,.06.1l.08.44-.08.35a.39.39,0,0,1-.06.11l-.23.22a.24.24,0,0,1-.11.06Zm-.24-.5.29.06.21-.06.14-.14.06-.24-.06-.2-.15-.16-.22-.11-.26.11-.2.35.11.28Z" />
                    <path d="M544.06,669a.22.22,0,0,1-.23-.22v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,544.06,669Z" />
                    <path
                        d="M545.19,669a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.13,0-.26.33a.22.22,0,1,1-.35-.28l.3-.38a.21.21,0,0,1,.11-.07l.22-.08H545l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,545.19,669Z" />
                    <path
                        d="M546.32,669a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,546.32,669Z" />
                    <path
                        d="M548.58,669h-1.51a.23.23,0,0,1-.21-.13.25.25,0,0,1,0-.25l1.06-1.06.18-.24.05-.24,0-.1-.07,0-.06-.05-.08-.08h-.29l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.08a.19.19,0,0,1,0-.12l.25-.34.26-.18a.28.28,0,0,1,.13,0h.45a.23.23,0,0,1,.16.06l.13.13.11.06a.2.2,0,0,1,.12.13l.07.22a.25.25,0,0,1,0,.07v.16a.25.25,0,0,1,0,.07l-.07.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M402.73,718a.15.15,0,0,1-.09,0,.23.23,0,0,1-.11-.3l.83-1.86h-1.08a.23.23,0,1,1,0-.46h1.43a.21.21,0,0,1,.19.11.22.22,0,0,1,0,.21l-1,2.19A.23.23,0,0,1,402.73,718Z" />
                    <path
                        d="M405.22,718a.23.23,0,0,1-.23-.22v-1.67l-.17.12a.22.22,0,0,1-.31-.06.23.23,0,0,1,.06-.32l.22-.15.27-.27a.25.25,0,0,1,.25-.05.24.24,0,0,1,.14.21v2.19A.22.22,0,0,1,405.22,718Z" />
                    <path
                        d="M406.58,718a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,406.58,718Z" />
                    <path
                        d="M407.71,718a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.22-.07h.45l.23.07a.25.25,0,0,1,.14.16l.08.31v1.11A.23.23,0,0,1,407.71,718Z" />
                    <path
                        d="M408.84,718a.23.23,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.22.22,0,0,1,.14.17l.08.3v1.11A.22.22,0,0,1,408.84,718Z" />
                    <path
                        d="M411,718h-1.44a.2.2,0,0,1-.2-.14.2.2,0,0,1,.05-.24l1-1,.27-.48-.16-.26-.11,0h-.27L410,716l-.08.14a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.08a.25.25,0,0,1,0-.12l.26-.34.26-.18a.25.25,0,0,1,.12,0h.38l.07,0,.23.07a.28.28,0,0,1,.13.11l.07.15.14.21a.17.17,0,0,1,0,.12v.15a.2.2,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67H411a.22.22,0,0,1,.22.23A.22.22,0,0,1,411,718Z" />
                    <path
                        d="M416.08,717.2H416l-.38-.15a.22.22,0,0,1-.1-.09l-.16-.22-.17-.42h0v0h0v-.65l.15-.52.17-.35a.23.23,0,0,1,.12-.1l.38-.16h.23l.1,0,.3.15a.24.24,0,0,1,.09.08l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.12-.18-.26-.1-.25.1-.12.23-.05.2.46-.08.35.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.09.35a.24.24,0,0,1-.06.11l-.22.23a.24.24,0,0,1-.11.06l-.27.09A.23.23,0,0,1,416.08,717.2Zm-.23-.56.18.07.07,0,.24-.06.14-.14.06-.24-.06-.2-.14-.14-.24-.06-.26.06-.19.33.11.29Z" />
                    <path
                        d="M418.12,717.13l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.57l.07-.56a.37.37,0,0,1,.05-.11l.22-.3.08-.07.31-.15.1,0h.22l.1,0,.31.15.08.08.15.23a.22.22,0,0,1-.37.25l-.12-.18-.2-.1h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.06,0,.23.22a.37.37,0,0,1,.05.11l.09.43-.09.36a.47.47,0,0,1-.05.1l-.23.23a.24.24,0,0,1-.11.06l-.3.07Zm-.19-.51.24.06h.1l.18-.06.14-.14.06-.24-.06-.2-.15-.16-.27-.11-.22.11-.16.16-.05.2.06.25Z" />
                    <path
                        d="M419.62,717.13a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,419.62,717.13Z" />
                    <path
                        d="M420.76,717.13a.23.23,0,0,1-.23-.23V716l-.13-.26h-.21l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.23.23,0,0,1,.1-.07l.23-.08h.37a.23.23,0,0,1,.11,0l.15.07a.32.32,0,0,1,.11.12l.15.38a.19.19,0,0,1,0,.08v1A.22.22,0,0,1,420.76,717.13Z" />
                    <path
                        d="M421.89,717.13a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.11-.07l.22-.08h.45l.22.08a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,421.89,717.13Z" />
                    <path
                        d="M424.07,717.13h-1.43a.24.24,0,0,1-.21-.15.22.22,0,0,1,.06-.24l1-1,.13-.33a.18.18,0,0,1,.05-.07l.08-.09v-.06l-.16-.21-.13-.09h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.2.2,0,0,1,.13,0h.38a.19.19,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.22a.23.23,0,0,1-.06.16l-.12.12-.13.34-.06.08-.63.59h.85a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M429.28,716.3h-.08a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.27.27,0,0,1-.09-.12l-.15-.45a.19.19,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53a.15.15,0,0,1,0-.07l.23-.31a.22.22,0,0,1,.13-.08l.3-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.16,0-.16.21-.06.21h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.33.33,0,0,1,.06.1l.08.43-.08.43a.23.23,0,0,1-.1.14l-.23.15-.32.16A.19.19,0,0,1,429.28,716.3Zm-.42-.67.17.1.21.11.36-.2.06-.29-.06-.22-.14-.14-.24-.06-.2.06-.16.16-.09.19Z" />
                    <path
                        d="M431.39,716.3h-.15a.17.17,0,0,1-.1,0l-.3-.15a.09.09,0,0,1-.06,0l-.15-.15a.15.15,0,0,1-.06-.09l-.15-.45a.19.19,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07h.28l.36.08a.19.19,0,0,1,.13.1l.16.22a.24.24,0,0,1-.07.32.23.23,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.15,0-.1.21-.06.2.25-.06h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.43a.23.23,0,0,1-.1.14l-.22.15-.33.16A.19.19,0,0,1,431.39,716.3Zm-.1-.45h0l.37-.21.06-.29,0-.22-.14-.14-.25-.06h-.09l-.16,0-.2.34.1.32.09.09Z" />
                    <path
                        d="M432.75,716.3a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,432.75,716.3Z" />
                    <path
                        d="M433.88,716.3a.23.23,0,0,1-.23-.23V715l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.31.26-.17a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.21.21,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,433.88,716.3Z" />
                    <path
                        d="M435,716.3a.23.23,0,0,1-.23-.23V715l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,1,1-.32-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.18.18,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,435,716.3Z" />
                    <path
                        d="M437.2,716.3h-1.44a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1,.18-.25.05-.16v-.15l0-.1-.23-.09h-.3l-.18.09-.09.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.25.25,0,0,1,0-.12l.25-.34.09,0,.23-.08h.52l.41.16a.28.28,0,0,1,.11.13l.08.23s0,0,0,.07v.23s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,437.2,716.3Z" />
                    <path
                        d="M442.32,715.32l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.49,0-.08.23-.38a.24.24,0,0,1,.14-.1l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.18l-.15,0-.16.27,0,.15.41-.08.42.08a.19.19,0,0,1,.14.09l.16.23.16.33a.16.16,0,0,1,0,.1v.15a.18.18,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.14.11-.28-.21-.38-.28,0-.22,0-.14.14-.05.2.06.33Z" />
                    <path
                        d="M444.44,715.32l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.17.17,0,0,1,0-.07l.15-.45.25-.43a.24.24,0,0,1,.14-.1l.3-.07h.21l.42.08a.22.22,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25,0h-.1l-.16,0-.18.3,0,.13h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.07.3v.21l-.08.36a.27.27,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.2-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06-.21.06-.16.16-.09.19.11.31Z" />
                    <path
                        d="M445.87,715.32a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,445.87,715.32Z" />
                    <path
                        d="M447,715.32a.23.23,0,0,1-.23-.23V714l0-.13-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09-.05.22-.08h.45l.23.08a.21.21,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,447,715.32Z" />
                    <path
                        d="M448.21,715.32a.23.23,0,0,1-.23-.23v-1l-.08-.17-.11,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09-.05.23-.08h.44l.23.08a.28.28,0,0,1,.13.11l.15.3a.43.43,0,0,1,0,.11v1.05A.22.22,0,0,1,448.21,715.32Z" />
                    <path
                        d="M450.39,715.32h-1.51a.22.22,0,0,1-.2-.14.21.21,0,0,1,.05-.25l1-1,.18-.25.06-.16v-.13l0-.07-.17-.14h-.36l-.1,0-.09.17v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.22.22,0,0,1,.14-.11l.22-.08h.53l.1,0,.15.08.06,0,.15.15,0,.06.07.15a.19.19,0,0,1,0,.1v.23s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M455.37,714.41l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09V713l.08-.56a.18.18,0,0,1,0-.1l.23-.3A.18.18,0,0,1,455,712l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,0,1-.32.32l-.13-.12-.22-.11h-.12l-.2.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.49-.08.36a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.19-.5.25.06h.09l.18-.05.14-.14.07-.24-.06-.26-.15-.1-.28-.11-.22.11-.15.15-.05.2.05.25Z" />
                    <path
                        d="M457.48,714.41l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09V713l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.08-.07l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.19-.09h-.11l-.21.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.31.31,0,0,1,.09.11l.15.37a.28.28,0,0,1,0,.09v.07a.43.43,0,0,1,0,.11l-.15.3,0,.06-.23.22a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.16-.16.1-.21-.1-.26-.17-.11-.21-.11-.36.21-.05.25.05.25Z" />
                    <path
                        d="M458.91,714.41a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,458.91,714.41Z" />
                    <path
                        d="M460.12,714.41a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.24.24,0,0,1,.08-.06l.23-.07h.45l.22.07a.2.2,0,0,1,.13.12l.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,460.12,714.41Z" />
                    <path
                        d="M461.25,714.41a.22.22,0,0,1-.22-.22v-1l-.13-.2h-.27l-.07,0-.28.27A.23.23,0,0,1,460,713l.3-.3.06,0,.15-.08.1,0H461l.1,0,.15.08a.17.17,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,461.25,714.41Z" />
                    <path
                        d="M463.44,714.41h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25.05-.23-.08-.18-.13-.08h-.3l-.08.08-.06,0-.07,0,0,.14a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.11-.06.13-.12a.24.24,0,0,1,.16-.07h.45a.28.28,0,0,1,.13,0l.33.26a.16.16,0,0,1,.06.08l.07.23a.17.17,0,0,1,0,.07v.15a.22.22,0,0,1,0,.08l-.07.22a.25.25,0,0,1,0,.07l-.22.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M468.64,713.51h-.07l-.09,0-.37-.15a.31.31,0,0,1-.11-.08l-.15-.23-.17-.41v0h0s0-.05,0-.08V712s0,0,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.24.24,0,0,1-.32-.07l-.1-.15-.22-.06h-.17l-.14,0-.11.21-.05.2.25-.06h.2l.36.08a.17.17,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.08.43-.08.36a.17.17,0,0,1-.06.1l-.23.23a.1.1,0,0,1-.05,0l-.31.15A.17.17,0,0,1,468.64,713.51Zm-.3-.56.26.1.21-.1.16-.16.06-.24-.06-.21-.14-.14-.24-.06h-.1l-.16.05-.19.34.11.28Z" />
                    <path
                        d="M470.75,713.51h-.15a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09V712l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18-.05h-.18l-.16,0-.15.19,0,.22.29-.07h.2l.36.08a.21.21,0,0,1,.13.09l.16.23.16.33a.16.16,0,0,1,0,.1v.07a.16.16,0,0,1,0,.1l-.15.31-.17.25a.18.18,0,0,1-.08.07l-.3.15A.23.23,0,0,1,470.75,713.51Zm-.09-.45h0l.2-.1.12-.18.1-.21-.2-.37-.22-.06h-.1l-.18.05-.14.14,0,.2,0,.25.16.16Z" />
                    <path
                        d="M472.11,713.51a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,472.11,713.51Z" />
                    <path
                        d="M473.24,713.51a.22.22,0,0,1-.22-.23v-1l-.17-.28h-.19l-.39.39a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.45-.46a.25.25,0,0,1,.16-.06h.38a.23.23,0,0,1,.16.06l.15.15,0,.06.16.3a.43.43,0,0,1,0,.11v1A.23.23,0,0,1,473.24,713.51Z" />
                    <path
                        d="M474.37,713.51a.22.22,0,0,1-.22-.23v-1l0-.16L474,712h-.16l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.31-.31.26-.17a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,474.37,713.51Z" />
                    <path
                        d="M475.13,713.51a.23.23,0,0,1-.21-.14.22.22,0,0,1,.05-.25l1-1,.14-.33a.14.14,0,0,1,.05-.08l.08-.08v-.07l-.16-.21-.13-.08h-.25l-.26.16,0,.14a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.15-.07.2-.14a.28.28,0,0,1,.13,0H476a.28.28,0,0,1,.13,0l.34.26.17.26a.17.17,0,0,1,0,.12v.23a.23.23,0,0,1-.06.16l-.12.12-.14.33a.18.18,0,0,1-.05.08l-.63.64.84,0a.24.24,0,0,1,.24.22.22.22,0,0,1-.22.23l-1.43.08Z" />
                    <path
                        d="M484,712.45h-.07l-.1,0-.31-.15-.25-.17a.24.24,0,0,1-.09-.11l-.15-.46a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.26.26,0,0,1,.13-.08l.3-.08H484l.42.08a.26.26,0,0,1,.17.15l.07.23a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.15l0-.1-.25,0h-.1l-.17,0-.16.21-.06.21h0l.43-.08.36.08a.33.33,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.21.21,0,0,1-.1.13l-.22.15-.33.17Zm-.41-.67.16.11.21.1.37-.2.06-.22v-.1l-.05-.18-.14-.14-.24-.06-.21.06-.16.15-.09.19Z" />
                    <path
                        d="M486.06,712.45h-.15l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.09.09,0,0,1,0-.07v-.5l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.08a.39.39,0,0,1,.11.06l.22.23a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17ZM486,712H486l.38-.21.05-.29-.05-.21-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.2,0,.3.15.1Z" />
                    <path
                        d="M487.42,712.45a.23.23,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.22.22,0,0,1,487.42,712.45Z" />
                    <path
                        d="M488.55,712.45a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07H488l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,488.55,712.45Z" />
                    <path
                        d="M489.68,712.45a.22.22,0,0,1-.22-.22v-1.06l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.33.33,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,489.68,712.45Z" />
                    <path
                        d="M491.87,712.45h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,0-.24l1-1,.26-.47v-.08l-.11-.17-.15-.05H491l-.18.08-.08.13v.09a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.28.28,0,0,1,0-.13l.26-.34a.19.19,0,0,1,.09-.05l.22-.08h.52l.23.08.09.05.07.08.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.15.22-.13.28-.05.06L491,712h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M497,711.55l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23a.2.2,0,0,1-.06-.12l-.08-.45v-.49l.08-.57a.13.13,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.22.22,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18,0H497l-.16,0-.15.26,0,.22.24-.12.1,0h.07l.1,0,.31.15.25.17a.18.18,0,0,1,.07.08l.15.31a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3,0,.06-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.16-.15.11-.27-.1-.2-.18-.12-.21-.1-.37.2-.05.18.06.33Z" />
                    <path
                        d="M499.11,711.55l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.23a.08.08,0,0,1,0,0l-.15-.45h0s0,0,0-.07V710a.19.19,0,0,1,0-.07l.3-.84a.2.2,0,0,1,.17-.14l.38-.08h.19l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.23.23,0,0,1-.32-.06l-.1-.15-.21-.06h-.1l-.21,0-.15.4.43-.07.36.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.51.28.06.22-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06-.26.06-.1.15-.1.19.12.34Z" />
                    <path
                        d="M500.54,711.55a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,500.54,711.55Z" />
                    <path
                        d="M501.67,711.55a.22.22,0,0,1-.22-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.27.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,501.67,711.55Z" />
                    <path
                        d="M502.81,711.55a.23.23,0,0,1-.23-.23v-1.05l0-.13-.07,0h-.23l-.14,0-.27.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.31-.31.08,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,502.81,711.55Z" />
                    <path
                        d="M505,711.55h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,0-.25l1.05-1,.19-.25.05-.16v-.13l0-.08-.16-.13h-.37l-.1,0,0,.07,0,.06-.09.09v0a.23.23,0,1,1-.45,0v-.15a.23.23,0,0,1,.06-.16l.13-.12.06-.12a.2.2,0,0,1,.13-.11l.23-.08h.52l.1,0,.15.08.06,0,.15.15,0,.06.08.15a.36.36,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.07.23a.21.21,0,0,1,0,.06l-.22.3-.7.7H505a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M510,710.57l-.35-.08-.11-.06-.22-.23a.17.17,0,0,1-.06-.12l-.08-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.24.24,0,0,1,0-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.19.19,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.31.23.23,0,0,1-.3-.1l-.05-.09-.18-.09h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.16l.1,0,.3.15.09.08.15.23.16.32a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3-.17.25a.22.22,0,0,1-.13.1l-.3.07Zm-.18-.51.24.06h.1l.15,0,.11-.16.1-.21-.22-.39-.24-.1-.22.11-.16.16-.05.2.05.25Z" />
                    <path
                        d="M512.16,710.57l-.36-.08-.11-.06-.22-.23a.23.23,0,0,1-.06-.12l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.24.24,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.31-.15.1,0h.22l.1,0,.3.15a.27.27,0,0,1,.11.1l.07.15a.23.23,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.21.1-.16.22,0,.2.24-.12.11,0h.07l.1,0,.3.15.06,0,.23.23a.21.21,0,0,1,0,.06l.15.3a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3,0,.06-.23.23-.1.06Zm-.19-.51.24.06.21-.06.15-.15.11-.21-.11-.21-.17-.17-.21-.1-.2.1-.16.16-.05.2.06.25Z" />
                    <path
                        d="M513.59,710.57a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,513.59,710.57Z" />
                    <path
                        d="M514.72,710.57a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.12,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,514.72,710.57Z" />
                    <path
                        d="M515.93,710.57a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.1.06-.34.27a.22.22,0,1,1-.28-.35l.38-.3.19-.1a.17.17,0,0,1,.1,0h.37a.23.23,0,0,1,.11,0l.15.07a.24.24,0,0,1,.1.1l.15.3a.43.43,0,0,1,0,.11v1.05A.22.22,0,0,1,515.93,710.57Z" />
                    <path
                        d="M518.11,710.57h-1.5a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.24-.35v-.14l-.09-.18-.13-.08h-.32l-.17.11,0,.19a.23.23,0,1,1-.45,0v-.07a.22.22,0,0,1,0-.08l.08-.22a.41.41,0,0,1,0-.09l.08-.08L517,708a.19.19,0,0,1,.12,0h.46a.19.19,0,0,1,.12,0l.34.25a.41.41,0,0,1,.05.09l.08.23s0,0,0,.07v.22a.3.3,0,0,1,0,.1l-.08.15-.25.34-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,518.11,710.57Z" />
                    <path
                        d="M523.32,709.74h-.15a.23.23,0,0,1-.11,0l-.3-.15-.25-.16a.31.31,0,0,1-.1-.15l-.07-.45v-.57l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.15-.21-.06h-.17l-.17.05-.15.19,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.17.17,0,0,1,.06.1l.09.43-.08.42a.27.27,0,0,1-.1.15l-.23.15-.32.16A.19.19,0,0,1,523.32,709.74Zm-.1-.45h0l.38-.22.06-.28-.06-.22-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.2.05.31.15.09Z" />
                    <path
                        d="M525.35,709.74h-.07a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.22-.31a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.22.22,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18-.05h-.17l-.17.05-.14.19,0,.22.42-.08.42.08a.24.24,0,0,1,.15.09l.15.23.16.33a.17.17,0,0,1,0,.1v.07a.17.17,0,0,1,0,.1l-.15.31-.16.25a.31.31,0,0,1-.11.08l-.37.15Zm-.39-.66.14.09.22.11.26-.1.11-.17.11-.21-.2-.37-.29,0-.22,0-.14.14-.05.2Z" />
                    <path
                        d="M526.71,709.74a.23.23,0,0,1-.23-.23V708a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,526.71,709.74Z" />
                    <path
                        d="M527.92,709.74a.23.23,0,0,1-.23-.23v-1l-.17-.28h-.19l-.08.08-.4.32a.22.22,0,1,1-.28-.35l.51-.44a.23.23,0,0,1,.16-.06h.38a.25.25,0,0,1,.16.06l.15.15,0,.06.15.3a.22.22,0,0,1,0,.11v1A.22.22,0,0,1,527.92,709.74Z" />
                    <path
                        d="M529.05,709.74a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.11-.26.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.18a.28.28,0,0,1,.13,0h.3l.12,0,.23.16a.2.2,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,529.05,709.74Z" />
                    <path
                        d="M531.24,709.74H529.8a.22.22,0,0,1-.2-.14.21.21,0,0,1,0-.24l1-1.06.31-.44v-.09l-.16-.21-.13-.08h-.29l-.09.08a.1.1,0,0,1,0,0l-.07,0,0,.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08s0-.05,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.12-.06.12-.12a.26.26,0,0,1,.17-.07h.45a.25.25,0,0,1,.12,0l.34.26.18.26a.25.25,0,0,1,0,.12v.23a.25.25,0,0,1,0,.12l-.39.54-.64.7h.92a.22.22,0,0,1,.22.22A.22.22,0,0,1,531.24,709.74Z" />
                    <path
                        d="M536.36,708.76l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22,0-.06-.15-.45a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.24.24,0,0,1,.16-.12l.38-.08h.19l.43.08a.22.22,0,0,1,.17.15l.07.22a.23.23,0,1,1-.43.15l0-.1-.25,0h-.11l-.22,0-.1.2-.06.2.46-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06Zm-.24-.51.29.06.21-.06.14-.14.06-.24v-.09l-.06-.19-.14-.14-.24-.06-.26.06-.19.34.11.34Z" />
                    <path
                        d="M538.4,708.76l-.36-.08-.1-.06-.23-.23a.27.27,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.08a.26.26,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17,0-.14.19,0,.22.28-.08h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06-.3.07Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24v-.09l0-.19-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.33Z" />
                    <path
                        d="M539.91,708.76a.23.23,0,0,1-.23-.23V707.1a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,539.91,708.76Z" />
                    <path
                        d="M541,708.76a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.21l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09,0l.22-.08h.38a.19.19,0,0,1,.1,0l.15.07a.24.24,0,0,1,.1.1l.15.3a.23.23,0,0,1,0,.11v1A.23.23,0,0,1,541,708.76Z" />
                    <path
                        d="M542.17,708.76a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09,0,.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,542.17,708.76Z" />
                    <path
                        d="M544.36,708.76h-1.44a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.27-.46v-.06l-.09-.09,0-.06,0-.07-.11,0h-.3l-.1,0,0,.07a.21.21,0,0,1,0,.06l-.08.08v.06a.23.23,0,0,1-.46,0v-.15a.24.24,0,0,1,.07-.16l.12-.12.06-.12a.25.25,0,0,1,.13-.12l.23-.07h.52l.23.07a.25.25,0,0,1,.13.12l.06.12.12.12a.24.24,0,0,1,.07.16V707a.25.25,0,0,1,0,.12l-.15.23-.14.28,0,.06-.67.66h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,544.36,708.76Z" />
                    <path
                        d="M404.39,742.09l-.1,0a.22.22,0,0,1-.1-.3l.9-1.87h-1.15a.23.23,0,1,1,0-.45h1.51a.21.21,0,0,1,.19.11.24.24,0,0,1,0,.22l-1,2.18A.23.23,0,0,1,404.39,742.09Z" />
                    <path
                        d="M406.58,742.09l-.36-.08a.26.26,0,0,1-.15-.12l-.05-.12-.13-.12a.23.23,0,1,1,.32-.32l.15.15a.09.09,0,0,1,0,.06l0,.05.2,0h.25l.18,0,.16-.16.11-.22v-.12l-.11-.22-.15-.16-.24-.06h-.25l-.22.08a.22.22,0,0,1-.25,0,.22.22,0,0,1-.13-.23l.07-.9a.23.23,0,0,1,.23-.21h1.05a.23.23,0,1,1,0,.45h-.85l0,.33.06,0h.36l.36.09a.21.21,0,0,1,.1.06l.23.22,0,.06.15.3a.19.19,0,0,1,0,.1v.23a.17.17,0,0,1,0,.1l-.15.3s0,.05,0,.06l-.23.23a.21.21,0,0,1-.1.06l-.3.07Z" />
                    <path
                        d="M408.24,742.09a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,408.24,742.09Z" />
                    <path
                        d="M409.37,742.09a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.08,0h.3l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,409.37,742.09Z" />
                    <path
                        d="M410.58,742.09a.23.23,0,0,1-.23-.23v-1l-.09-.17-.1,0H410l-.1.05-.34.27a.22.22,0,1,1-.28-.35l.37-.3.2-.1a.17.17,0,0,1,.1,0h.3l.07,0,.23.07a.28.28,0,0,1,.13.11l.15.31a.3.3,0,0,1,0,.1v1.05A.22.22,0,0,1,410.58,742.09Z" />
                    <path
                        d="M412.76,742.09h-1.51a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1.05.18-.25.06-.16v-.13l-.09-.17-.1,0h-.38l-.1,0-.09.17v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.28.28,0,0,1,.13-.11l.23-.08h.6l.22.08a.21.21,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1v.23s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M417.74,741.19l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.16.16,0,0,1,.1,0H418a.18.18,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,1,1-.4.2l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07l.09,0,.38.15.07.05.15.15a.22.22,0,0,1,.05.08l.15.38a.19.19,0,0,1,0,.08v.07a.43.43,0,0,1,0,.11l-.16.3-.16.25a.19.19,0,0,1-.14.09Zm-.19-.51.24.06.26-.06.1-.15.11-.22-.11-.28-.08-.09-.29-.11-.36.21-.06.25.06.25Z" />
                    <path
                        d="M419.85,741.19l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.22.22,0,0,1-.05-.08l-.15-.38h0a.17.17,0,0,1,0-.07v-.59l.16-.53a.15.15,0,0,1,0-.07l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.24l.37.15a.22.22,0,0,1,.12.11l.08.15a.24.24,0,0,1-.1.31.23.23,0,0,1-.31-.11l0-.07-.32-.1-.2.1-.17.23-.06.21.28-.14a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.31.31,0,0,1,.1.15l.08.49-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24-.06-.26-.15-.1-.21-.1-.38.21-.09.23.1.25Z" />
                    <path
                        d="M421.28,741.19a.23.23,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0V741A.23.23,0,0,1,421.28,741.19Z" />
                    <path
                        d="M422.42,741.19a.23.23,0,0,1-.23-.23V739.9l0-.12-.07,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3V741A.23.23,0,0,1,422.42,741.19Z" />
                    <path
                        d="M423.62,741.19a.23.23,0,0,1-.22-.23v-1l-.09-.17-.1,0H423l-.14,0-.27.26a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.45l.22.08a.21.21,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1V741A.23.23,0,0,1,423.62,741.19Z" />
                    <path
                        d="M425.81,741.19H424.3a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24.05-.24-.05-.14-.15-.12h-.36l-.11,0-.08.27a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.16-.4a.22.22,0,0,1,.13-.12l.23-.07h.52a.16.16,0,0,1,.1,0l.15.07.06.05.15.15a.15.15,0,0,1,.06.09l.07.22a.2.2,0,0,1,0,.07v.15a.22.22,0,0,1,0,.08l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.69.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,425.81,741.19Z" />
                    <path
                        d="M431,740.36h-.15a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.09.08l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.12-.18-.2-.1h-.12l-.2.11-.16.21,0,.21.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.1.1,0,0,1-.05,0l-.31.15A.17.17,0,0,1,431,740.36Zm-.1-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14L431,739h-.1l-.18,0-.14.14-.05.2.05.25.15.15Z" />
                    <path
                        d="M433,740.28l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.12.14l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.14-.17-.09H433l-.21.11-.16.21,0,.2.24-.12.1,0h.08l.1,0,.3.15.06.05.23.22,0,.06.15.3a.18.18,0,0,1,0,.1v.08a.16.16,0,0,1,0,.1l-.15.3,0,.06-.23.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.16-.16.1-.21-.1-.2-.17-.18-.21-.1-.2.1-.16.16,0,.2,0,.25Z" />
                    <path
                        d="M434.41,740.28a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,434.41,740.28Z" />
                    <path
                        d="M435.61,740.28a.22.22,0,0,1-.22-.23v-.93l-.1-.24-.09,0H435l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.3.3,0,0,1,.11-.07l.22-.07.07,0h.31l.07,0,.22.07a.2.2,0,0,1,.14.13l.15.38a.24.24,0,0,1,0,.08v1A.23.23,0,0,1,435.61,740.28Z" />
                    <path
                        d="M436.74,740.28a.22.22,0,0,1-.22-.23v-.93l-.13-.27h-.27l-.06,0-.27.33a.22.22,0,1,1-.35-.28l.3-.38.07-.06.15-.07.1,0h.38a.17.17,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.24.24,0,0,1,0,.08v1A.23.23,0,0,1,436.74,740.28Z" />
                    <path
                        d="M438.93,740.28h-1.51a.24.24,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-1,.25-.44v-.13l-.08-.18-.13-.09H438l-.08.09-.06,0-.07,0,0,.14a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.07-.23a.22.22,0,0,1,.12-.13l.12-.06.12-.12a.2.2,0,0,1,.16-.07h.45a.2.2,0,0,1,.13,0l.33.25a.24.24,0,0,1,.06.09l.07.23a.14.14,0,0,1,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39,0,0-.63.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M444.13,739.37H444l-.37-.15-.08-.05-.15-.15a.41.41,0,0,1-.05-.09l-.15-.45h0s0,0,0-.07v-.52s0,0,0-.07l.15-.52.17-.34a.2.2,0,0,1,.15-.12l.3-.08h.28l.36.08a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06H444l-.14,0-.11.21-.05.19.25-.06h.2l.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.26.26,0,0,1-.09.14l-.23.15-.33.16A.16.16,0,0,1,444.13,739.37Zm-.32-.56.28.11.37-.21.06-.22v-.1l-.05-.18-.14-.14-.24-.06H444l-.16,0-.1.16-.1.19.11.31Z" />
                    <path
                        d="M446.25,739.37h-.16a.2.2,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.16l-.07-.44a.11.11,0,0,1,0-.08v-.49l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18-.05h-.18l-.16,0-.15.2,0,.21.29-.07h.21l.35.08a.22.22,0,0,1,.14.09l.15.23.16.32a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.05.08l-.15.15-.06,0-.3.15A.18.18,0,0,1,446.25,739.37Zm-.1-.45h0l.22-.11.1-.09.11-.28-.21-.37-.22-.06h-.1l-.18.05-.14.14,0,.2,0,.3.15.1Z" />
                    <path
                        d="M447.6,739.37a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,447.6,739.37Z" />
                    <path
                        d="M448.73,739.37a.22.22,0,0,1-.22-.22v-1l-.17-.28h-.19l-.39.38a.23.23,0,0,1-.32-.32l.46-.45a.24.24,0,0,1,.16-.07h.37a.24.24,0,0,1,.16.07l.15.15.05.06.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,448.73,739.37Z" />
                    <path
                        d="M449.87,739.37a.22.22,0,0,1-.23-.22v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.07.3v1.11A.22.22,0,0,1,449.87,739.37Z" />
                    <path
                        d="M452.05,739.37h-1.43a.23.23,0,0,1-.21-.14.22.22,0,0,1,0-.24l1-1,.26-.46v-.09l-.11-.17-.15,0h-.31l-.22.08,0,.11v.11a.23.23,0,1,1-.45,0v-.15a.15.15,0,0,1,0-.07l.08-.23a.2.2,0,0,1,.11-.13l.15-.08.26-.08h.52l.22.07a.15.15,0,0,1,.09.06l.08.07.17.26a.2.2,0,0,1,0,.13v.23a.27.27,0,0,1,0,.12l-.16.23-.13.27a.15.15,0,0,1,0,.06l-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M457.1,738.47l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08V737a.17.17,0,0,1,0-.07l.15-.45.25-.42a.22.22,0,0,1,.14-.11l.3-.07h.21l.42.08a.23.23,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.15.05-.18.3,0,.12h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.21,0-.16.16-.09.19.1.31Z" />
                    <path
                        d="M459.14,738.47l-.36-.08a.26.26,0,0,1-.13-.1l-.15-.22,0-.06-.15-.45h0a.22.22,0,0,1,0-.08V737l.08-.49a.13.13,0,0,1,0-.08l.23-.37a.23.23,0,0,1,.13-.11l.31-.07h.28l.35.08a.24.24,0,0,1,.14.1l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22-.05h-.17l-.15.05-.16.26,0,.15.29-.07h.2l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21L460,738a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07ZM459,738l.22,0h.09l.19,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06h-.1l-.16,0-.2.35.11.33Z" />
                    <path
                        d="M460.65,738.47a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.24.24,0,0,1,.23.23v1.43A.23.23,0,0,1,460.65,738.47Z" />
                    <path
                        d="M461.78,738.47a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3l.07,0,.23.07a.22.22,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,461.78,738.47Z" />
                    <path
                        d="M462.91,738.47a.22.22,0,0,1-.22-.23v-1l0-.13-.08,0h-.22l-.15,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,462.91,738.47Z" />
                    <path
                        d="M465.1,738.47h-1.43a.21.21,0,0,1-.21-.14.22.22,0,0,1,.05-.25l1.05-1.05.18-.25.06-.16v-.13l0-.07-.09-.09-.14-.05h-.3l-.1,0,0,.06a.09.09,0,0,1,0,.06l-.08.09v.05a.23.23,0,1,1-.45,0v-.15a.25.25,0,0,1,.06-.16l.13-.12.06-.12a.21.21,0,0,1,.13-.11l.22-.08h.52l.23.08.09.05.15.15,0,.06.08.15a.36.36,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.08.23,0,.06-.23.3-.69.7h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,465.1,738.47Z" />
                    <path
                        d="M470.23,737.49l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.07-.56a.37.37,0,0,1,0-.11l.22-.3.08-.07.31-.15.1,0h.22l.1,0,.31.15a.36.36,0,0,1,.1.11l.07.15a.22.22,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.19-.1h-.12l-.21.11-.16.21,0,.2.24-.12.1,0h.07l.1,0,.3.15s.05,0,.06,0l.23.22,0,.06.15.3a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.25.25,0,0,1-.15.1ZM470,737l.24.06.26,0,.1-.15.11-.22-.11-.2-.17-.18-.21-.1-.2.1-.16.16,0,.2.06.25Z" />
                    <path
                        d="M472.34,737.49l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23,0-.07-.15-.38h0v0h0s0,0,0-.07v-.52s0,0,0-.07l.15-.52.17-.34a.22.22,0,0,1,.12-.11l.37-.15.09,0h.15l.08,0,.38.15a.25.25,0,0,1,.12.11l.07.15a.22.22,0,0,1-.4.2l0-.07-.32-.11-.25.11-.12.22-.05.18.29-.11.09,0h.07l.1,0,.31.15.06,0,.22.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21,0,.14-.14.06-.24-.06-.21-.16-.16-.21-.1-.26.1-.2.35.09.24Z" />
                    <path
                        d="M473.77,737.49a.23.23,0,0,1-.23-.23v-1.43a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,473.77,737.49Z" />
                    <path
                        d="M474.9,737.49a.22.22,0,0,1-.22-.23v-1l0-.13-.08,0h-.22l-.15,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,474.9,737.49Z" />
                    <path
                        d="M476,737.49a.22.22,0,0,1-.22-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,476,737.49Z" />
                    <path
                        d="M478.3,737.49h-1.51a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.05.19-.25.05-.23,0-.11-.06,0-.06,0-.09-.09h-.29l-.17.12,0,.18a.23.23,0,1,1-.45,0v-.07s0,0,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.08-.07.26-.18a.2.2,0,0,1,.13,0h.45a.2.2,0,0,1,.16.07l.12.12.12.06a.2.2,0,0,1,.11.13l.08.23a.15.15,0,0,1,0,.07v.15a.17.17,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.23.3-.69.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,478.3,737.49Z" />
                    <path
                        d="M485.69,736.51h-.15l-.11,0-.3-.16-.06,0-.22-.22a.23.23,0,0,1-.06-.12l-.08-.37a.14.14,0,0,1,0-.09V735l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.2.2,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.17,0-.15.19,0,.22.29-.07h.21l.35.08a.28.28,0,0,1,.14.1l.15.22.16.33a.17.17,0,0,1,0,.1v.07a.23.23,0,0,1,0,.11l-.15.3-.16.25a.28.28,0,0,1-.09.07l-.3.16Zm-.1-.45h0l.2-.1.12-.18.11-.21-.21-.37-.22-.05h-.09l-.19.05-.14.14,0,.2,0,.25.16.16Z" />
                    <path
                        d="M487.72,736.51h-.07l-.1,0-.31-.16-.06,0-.22-.22a.34.34,0,0,1-.06-.12l-.08-.37V735l.08-.56a.18.18,0,0,1,0-.1l.22-.3a.22.22,0,0,1,.13-.09l.3-.07h.28l.36.08a.24.24,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v.07a.23.23,0,0,1,0,.11l-.15.3,0,.06-.23.22a.1.1,0,0,1-.05,0l-.31.16Zm-.24-.56.2.1.21-.1.17-.18.11-.2-.11-.21-.15-.15-.24-.06-.21.05-.14.14-.05.2.06.25Z" />
                    <path
                        d="M489.08,736.51a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,0,1,.46,0v1.51A.23.23,0,0,1,489.08,736.51Z" />
                    <path
                        d="M490.21,736.51a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,490.21,736.51Z" />
                    <path
                        d="M491.42,736.43a.22.22,0,0,1-.23-.22v-.93L491,735h-.19l-.08.09-.4.31a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.51-.44a.23.23,0,0,1,.16-.06h.38a.25.25,0,0,1,.16.06l.15.16,0,.05.15.31a.16.16,0,0,1,0,.1v1A.22.22,0,0,1,491.42,736.43Z" />
                    <path
                        d="M493.6,736.43h-1.5a.21.21,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.43v-.14l-.09-.18-.13-.08h-.32l-.17.11,0,.19a.23.23,0,1,1-.45,0v-.08a.17.17,0,0,1,0-.07l.08-.23a.22.22,0,0,1,.05-.08l.08-.08.26-.18a.28.28,0,0,1,.12,0h.46a.28.28,0,0,1,.12,0l.34.26a.19.19,0,0,1,0,.09l.08.22a.2.2,0,0,1,0,.07v.23a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,0-.64.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M498.81,735.6h-.15a.16.16,0,0,1-.1,0l-.31-.15-.25-.17a.2.2,0,0,1-.09-.15l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.16-.22-.05h-.17l-.17,0-.14.2,0,.21.29-.07h.21l.35.09a.24.24,0,0,1,.11.06l.23.22a.39.39,0,0,1,.06.11l.07.3v.2l-.08.36a.22.22,0,0,1-.1.13l-.23.16-.32.16A.18.18,0,0,1,498.81,735.6Zm-.1-.45h0l.39-.21.05-.22v-.1l-.05-.18-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.2.06.3.14.1Z" />
                    <path
                        d="M500.84,735.6h-.07a.16.16,0,0,1-.1,0l-.3-.15-.25-.17a.18.18,0,0,1-.1-.15l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08H501l.36.09a.21.21,0,0,1,.16.14l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.1-.18-.05h-.17l-.17,0-.14.2,0,.21.41-.08.43.08a.28.28,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1v.15a.43.43,0,0,1,0,.11l-.16.3a.21.21,0,0,1,0,.06l-.15.15-.07.05-.38.15Zm-.39-.66.14.1.22.11.28-.12.1-.09.11-.26-.21-.38-.29-.06-.22.06-.13.14-.06.2Z" />
                    <path
                        d="M502.2,735.6a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,502.2,735.6Z" />
                    <path
                        d="M503.41,735.6a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.19l-.08.08-.4.32a.22.22,0,0,1-.28-.35l.51-.44a.24.24,0,0,1,.16-.07h.38a.26.26,0,0,1,.16.07l.15.15,0,.06.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,503.41,735.6Z" />
                    <path
                        d="M504.54,735.6a.22.22,0,0,1-.23-.22v-1l-.17-.28H504l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.24.24,0,0,1,.16.07l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,504.54,735.6Z" />
                    <path
                        d="M506.73,735.6h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1.05.31-.44v-.09l-.11-.17-.15-.05h-.36l-.17.08,0,.1v.12a.24.24,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15s0-.05,0-.07l.08-.23a.24.24,0,0,1,.11-.13l.3-.15a.23.23,0,0,1,.11,0h.45l.07,0,.23.07a.16.16,0,0,1,.08.06l.08.07.18.26a.28.28,0,0,1,0,.13v.22a.28.28,0,0,1,0,.13l-.39.54-.64.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,506.73,735.6Z" />
                    <path
                        d="M511.78,734.62l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.35.35,0,0,1,0-.08l-.15-.38a.2.2,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53.17-.34a.22.22,0,0,1,.12-.11l.37-.15.09,0h.15l.42.08a.24.24,0,0,1,.17.15l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.1-.24-.05h-.06l-.26.11-.12.22-.05.19.29-.12.09,0h.07a.23.23,0,0,1,.11,0l.3.15.25.16a.26.26,0,0,1,.09.14l.08.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.19-.5.24.06.21-.06.14-.14.06-.24v-.1l0-.16-.16-.1-.22-.11-.28.11-.09.09-.1.25.1.25Z" />
                    <path
                        d="M513.82,734.62l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.07-.13l-.07-.44a.11.11,0,0,1,0-.08v-.42l.07-.56,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08H514l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,1,1-.37.25l-.11-.16-.21-.05h-.17l-.16,0-.16.26,0,.22.24-.12a.23.23,0,0,1,.11,0H514a.19.19,0,0,1,.1,0l.3.15.25.16a.22.22,0,0,1,.09.14l.08.3v.2l-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.19-.5.24.06h.1l.18,0,.14-.14.06-.24v-.1l0-.16-.16-.1-.27-.11-.38.21,0,.18.06.33Z" />
                    <path
                        d="M515.32,734.62a.22.22,0,0,1-.22-.22V733a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,515.32,734.62Z" />
                    <path
                        d="M516.45,734.62a.22.22,0,0,1-.22-.22v-1.06l0-.12-.07,0h-.23l-.14,0-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,516.45,734.62Z" />
                    <path
                        d="M517.59,734.62a.22.22,0,0,1-.23-.22v-1.06l0-.12-.07,0H517l-.14,0-.27.26a.21.21,0,0,1-.31,0,.23.23,0,0,1,0-.32l.31-.3.08,0,.23-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,517.59,734.62Z" />
                    <path
                        d="M519.77,734.62h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1-1,.26-.48-.16-.26-.1,0h-.31l-.1,0-.16.27a.23.23,0,1,1-.45,0v-.08a.17.17,0,0,1,0-.12l.21-.35a.22.22,0,0,1,.13-.12l.23-.07.07,0h.38l.07,0,.22.07a.21.21,0,0,1,.13.11l.08.16.14.2a.24.24,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.16.23-.13.27,0,.06-.67.67h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M524.9,733.72l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.28.28,0,0,1,0-.09v-.48l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.26.26,0,0,1,.11.14l.08.22a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.13-.17-.09H525l-.2.11-.16.21,0,.2.24-.12.1,0H525l.1,0,.3.15.06,0,.22.22.05.06.15.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.05.06-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2,0,.16-.16.1-.21-.1-.2-.18-.18-.2-.1-.21.1-.15.16-.05.2.05.25Z" />
                    <path
                        d="M527,733.72l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22-.17-.42a.15.15,0,0,1,0-.09v-.52a.17.17,0,0,1,0-.07l.15-.52.16-.34a.25.25,0,0,1,.12-.11l.38-.15a.11.11,0,0,1,.08,0h.15l.1,0,.31.15,0,0,.16.15a.24.24,0,0,1,0,.32.23.23,0,0,1-.32,0l-.13-.13-.27-.11-.26.1-.11.23-.05.18.29-.11a.12.12,0,0,1,.08,0h.08l.1,0,.3.15.06,0,.23.22.06.11.08.43-.08.36-.06.1-.23.23a.24.24,0,0,1-.11.06Zm-.24-.51.29.06.21,0,.14-.14.06-.25-.06-.2-.15-.16-.22-.1-.26.1-.2.35.11.29Z" />
                    <path
                        d="M528.45,733.72a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,528.45,733.72Z" />
                    <path
                        d="M529.58,733.72a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0H529l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.23.23,0,0,1,.1-.07l.23-.07.07,0h.3l.08,0,.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,529.58,733.72Z" />
                    <path
                        d="M530.71,733.72a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.13,0-.26.32a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.22-.07.07,0h.31l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,530.71,733.72Z" />
                    <path
                        d="M532.89,733.72h-1.43a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.05.23-.35v-.14l0-.1-.26-.16h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.2.2,0,0,1,.13,0h.38a.17.17,0,0,1,.12,0l.35.21a.22.22,0,0,1,.12.13l.07.23a.14.14,0,0,1,0,.07V732a.23.23,0,0,1,0,.11l-.07.15-.25.33-.69.7h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M538.1,732.81H538a.18.18,0,0,1-.1,0l-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.25.25,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.19,0H538l-.16,0-.15.2,0,.21.42-.08.42.08a.24.24,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38-.05.08-.15.15-.08,0-.38.15Zm-.4-.66.15.1.22.11.28-.12.08-.08.12-.28-.21-.37-.29-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M540.21,732.81h-.08a.18.18,0,0,1-.1,0l-.3-.15-.25-.17a.24.24,0,0,1-.09-.11l-.15-.45h0a.17.17,0,0,1,0-.07v-.52a.15.15,0,0,1,0-.07l.15-.52a.2.2,0,0,1,0-.08l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.25.25,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0h-.18l-.16,0-.16.21-.06.21h0l.43-.09.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.21.21,0,0,1-.1.14l-.22.15-.33.17A.18.18,0,0,1,540.21,732.81Zm-.41-.67.16.11.21.1.36-.2.06-.29-.05-.21-.14-.14-.25-.06-.2.06-.16.16-.09.18Z" />
                    <path
                        d="M541.57,732.81a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,541.57,732.81Z" />
                    <path
                        d="M542.7,732.81a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.06h-.17l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.12,0h.31a.25.25,0,0,1,.12,0l.23.15a.23.23,0,0,1,.09.14l.08.3v1.11A.22.22,0,0,1,542.7,732.81Z" />
                    <path
                        d="M543.9,732.81a.22.22,0,0,1-.22-.22v-1l-.1-.2-.12-.08h-.14l-.08.08-.4.32a.23.23,0,0,1-.32,0,.21.21,0,0,1,0-.31l.51-.44a.24.24,0,0,1,.16-.07h.3a.25.25,0,0,1,.12,0l.23.15a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,543.9,732.81Z" />
                    <path
                        d="M546.09,732.81h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25.05-.15v-.16l0-.1-.17-.08h-.36l-.14,0,0,.18a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.08-.23a.41.41,0,0,1,0-.09l.08-.07a.16.16,0,0,1,.08-.06l.23-.07.07,0h.45a.23.23,0,0,1,.11,0l.3.15a.24.24,0,0,1,.11.13l.08.23s0,0,0,.07V731s0,0,0,.08l-.08.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M404.92,781.61a.19.19,0,0,1-.1,0,.22.22,0,0,1-.1-.3l.89-1.86h-1.07a.22.22,0,0,1-.22-.23.22.22,0,0,1,.22-.22H406a.24.24,0,0,1,.19.1.24.24,0,0,1,0,.22l-1.06,2.19A.23.23,0,0,1,404.92,781.61Z" />
                    <path
                        d="M407.48,781.61a.23.23,0,0,1-.22-.23v-1.67l-.18.12a.22.22,0,0,1-.25-.37l.23-.15.26-.28a.26.26,0,0,1,.25,0,.24.24,0,0,1,.14.21v2.19A.23.23,0,0,1,407.48,781.61Z" />
                    <path
                        d="M408.84,781.61a.24.24,0,0,1-.23-.23V780a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,408.84,781.61Z" />
                    <path
                        d="M410,781.61a.23.23,0,0,1-.22-.23v-1.06l0-.12-.08,0h-.22l-.15.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,410,781.61Z" />
                    <path
                        d="M411.1,781.61a.23.23,0,0,1-.22-.23v-1.06l0-.12-.08,0h-.22l-.14.05-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,411.1,781.61Z" />
                    <path
                        d="M413.29,781.61h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.46v-.07l-.09-.08,0-.06,0-.07-.1,0h-.31l-.1,0,0,.07-.05.06-.08.08v.06a.23.23,0,1,1-.45,0v-.15a.23.23,0,0,1,.06-.16l.13-.12.06-.12a.2.2,0,0,1,.13-.12l.22-.07h.52l.23.07a.22.22,0,0,1,.13.12l.06.11.12.13a.2.2,0,0,1,.07.16v.23a.19.19,0,0,1,0,.12l-.15.23-.13.28-.05.05-.67.67h.89a.23.23,0,0,1,.23.23A.24.24,0,0,1,413.29,781.61Z" />
                    <path
                        d="M418.34,780.7l-.42-.08a.18.18,0,0,1-.14-.1l-.15-.22-.17-.41a.18.18,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.24.24,0,0,1,.1-.1l.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15.06,0,.15.15a.24.24,0,0,1,0,.32.22.22,0,0,1-.32,0l-.13-.13-.22-.11h-.12l-.19.1-.11.23,0,.18.29-.11.08,0h.08l.1,0,.3.16.25.16a.23.23,0,0,1,.1.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.24-.5.29,0,.21,0,.14-.14.06-.24-.06-.26-.15-.1-.22-.11-.28.11-.08.09-.1.25.11.29Z" />
                    <path
                        d="M420.38,780.7l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.12.12,0,0,1,.08-.06l.3-.15a.17.17,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.07.15a.21.21,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.19-.1h-.12l-.2.11-.16.21,0,.21.24-.13.1,0h.15l.1,0,.3.16.06,0,.15.15.05.07.15.38a.29.29,0,0,1,0,.09v.07l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.07Zm-.19-.5.24.06h.1l.18,0,.14-.14.06-.22-.12-.29-.09-.1-.27-.11-.38.21-.05.26.06.25Z" />
                    <path
                        d="M421.89,780.7a.23.23,0,0,1-.23-.23V779a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.43A.22.22,0,0,1,421.89,780.7Z" />
                    <path
                        d="M423,780.7a.23.23,0,0,1-.23-.23v-1l-.13-.2h-.27l-.07,0-.27.28a.23.23,0,1,1-.32-.32l.3-.3.06-.05.15-.07a.16.16,0,0,1,.1,0h.38a.18.18,0,0,1,.1,0l.15.07a.27.27,0,0,1,.1.11l.15.3a.16.16,0,0,1,0,.1v1.05A.22.22,0,0,1,423,780.7Z" />
                    <path
                        d="M424.15,780.7a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.18.18,0,0,1,.09-.06l.22-.07h.45l.23.07a.25.25,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,424.15,780.7Z" />
                    <path
                        d="M426.34,780.7H424.9a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.26-.48-.15-.26-.11,0h-.3l-.14,0-.08.08,0,.18a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.16-.15.08-.05.23-.08h.52l.23.08a.28.28,0,0,1,.13.11l.07.15.14.2a.33.33,0,0,1,0,.13v.15a.28.28,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,426.34,780.7Z" />
                    <path
                        d="M431.54,779.87h-.08l-.1,0-.3-.15-.06-.05-.22-.22a.22.22,0,0,1,0-.08l-.15-.37v0h0a.13.13,0,0,1,0-.06v-.53a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.24l.38.15a.25.25,0,0,1,.13.14l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.13-.29-.09-.21.1-.17.23-.06.21h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.22-.06.05-.3.15Zm-.24-.56.2.1.21-.1.15-.16.06-.24-.05-.2-.14-.14-.24-.06-.21.06-.16.15-.09.18.1.24Z" />
                    <path
                        d="M433.5,779.8l-.36-.09a.2.2,0,0,1-.13-.09l-.15-.23-.17-.41a.29.29,0,0,1,0-.09v-.53l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.09.08.15.22a.23.23,0,1,1-.38.26l-.12-.18-.2-.1h-.12l-.2.1-.16.22,0,.2.24-.12a.18.18,0,0,1,.1,0h.15a.16.16,0,0,1,.1,0l.3.15.06,0,.23.23a.27.27,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.16-.5.22.05h.09l.19-.05.14-.14.06-.24-.06-.2-.16-.16-.27-.11-.22.11-.15.16-.05.17.13.3Z" />
                    <path
                        d="M435,779.8a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.24.24,0,0,1,435,779.8Z" />
                    <path
                        d="M436.14,779.8a.24.24,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.12,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,436.14,779.8Z" />
                    <path
                        d="M437.27,779.8a.23.23,0,0,1-.22-.23v-1l-.05-.2-.07,0h-.23l-.12,0-.26.32a.23.23,0,0,1-.36-.28l.31-.38a.18.18,0,0,1,.1-.07l.23-.08H437l.23.08a.24.24,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,437.27,779.8Z" />
                    <path
                        d="M439.46,779.8H438a.24.24,0,0,1-.16-.4l1-.95.26-.44v-.14l0-.1-.06,0-.2-.13h-.24l-.21.16-.08.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.28.28,0,0,1,0-.13l.26-.34.26-.18a.27.27,0,0,1,.12,0h.38a.28.28,0,0,1,.13,0l.35.22a.21.21,0,0,1,.11.13l.08.22a.22.22,0,0,1,0,.08v.22a.3.3,0,0,1,0,.1l-.08.15-.23.4a.1.1,0,0,0,0,0l-.64.58h.86a.22.22,0,0,1,.22.23A.23.23,0,0,1,439.46,779.8Z" />
                    <path
                        d="M444.66,778.89h-.07l-.1,0-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.07-.56a.24.24,0,0,1,.05-.1l.22-.3a.38.38,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.21.21,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23,0,.06.15.3a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3a.09.09,0,0,1,0,.06l-.15.15a.14.14,0,0,1-.08.05l-.37.16Zm-.4-.66.15.1.22.1.28-.11.09-.09.11-.27-.11-.22-.15-.15-.24-.06-.21.06-.14.13-.05.21Z" />
                    <path
                        d="M446.77,778.89h-.16l-.37-.16a.14.14,0,0,1-.08-.05l-.15-.15a.22.22,0,0,1-.05-.08l-.16-.46h0s0-.05,0-.07v-.53s0,0,0-.06l.15-.53.17-.34a.25.25,0,0,1,.16-.12l.37-.07h.2l.42.08a.23.23,0,0,1,.17.15l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.1-.25,0h-.1l-.23,0-.1.21-.05.19.45-.07.36.08a.17.17,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Zm-.32-.57.28.11.37-.2,0-.29,0-.21-.14-.14-.24-.06-.26.06-.2.34.11.31Z" />
                    <path
                        d="M448.13,778.89a.23.23,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.22.22,0,0,1,448.13,778.89Z" />
                    <path
                        d="M449.26,778.89a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.12A.22.22,0,0,1,449.26,778.89Z" />
                    <path
                        d="M450.39,778.89a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.22.22,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.12A.22.22,0,0,1,450.39,778.89Z" />
                    <path
                        d="M452.66,778.89h-1.51a.23.23,0,0,1-.16-.39l1.05-1,.19-.25,0-.16v-.15l0-.1-.17-.09h-.36l-.14,0-.05.14V777a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.16s0,0,0-.07l.08-.22a.19.19,0,0,1,0-.09l.08-.08a.19.19,0,0,1,.09,0l.22-.08h.53a.19.19,0,0,1,.1,0l.3.15a.21.21,0,0,1,.11.13l.08.22a.2.2,0,0,1,0,.07v.23a.15.15,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.3-.69.7h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,452.66,778.89Z" />
                    <path
                        d="M457.63,778l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.49,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29A.24.24,0,0,1,458,776l0-.11-.19-.05h-.17l-.15,0-.16.27,0,.14.28-.07h.2l.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.24V777l-.05-.19-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.06.33Z" />
                    <path
                        d="M459.74,778l-.35-.09a.24.24,0,0,1-.11-.06l-.22-.22a.25.25,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49L459,776l0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08H460l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.18-.05h-.18l-.15,0-.16.27,0,.14.41-.07.36.08a.21.21,0,0,1,.1.06l.23.22,0,.06.15.3a.22.22,0,0,1,0,.11v.15a.18.18,0,0,1,0,.1l-.15.3,0,.06-.23.22a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.06.16-.16.11-.26-.11-.22-.15-.16-.25-.06-.2.06-.14.14-.05.2.06.33Z" />
                    <path d="M461.18,778a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,461.18,778Z" />
                    <path
                        d="M462.38,778a.24.24,0,0,1-.22-.21l-.11-1.2-.08,0h-.23l-.14.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3.08,1.09a.23.23,0,0,1-.21.25Z" />
                    <path
                        d="M463.51,778a.22.22,0,0,1-.22-.23v-1l-.13-.21h-.27l-.1.05-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.2-.11.1,0h.37l.1,0,.16.08a.32.32,0,0,1,.1.1l.15.3a.44.44,0,0,1,0,.1v1.06A.23.23,0,0,1,463.51,778Z" />
                    <path
                        d="M465.7,778h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.06.18-.24.05-.16V776l-.08-.17-.1,0h-.36l-.08,0-.13.17v.1a.23.23,0,1,1-.45,0V776a.36.36,0,0,1,0-.1l.08-.15a.21.21,0,0,1,0-.06l.15-.15.06,0,.15-.08a.18.18,0,0,1,.1,0h.53l.22.07a.2.2,0,0,1,.13.12l.15.3a.19.19,0,0,1,0,.1v.23s0,0,0,.07l-.08.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.46Z" />
                    <path
                        d="M470.75,777l-.35-.09a.22.22,0,0,1-.14-.09l-.15-.23-.17-.41a.14.14,0,0,1,0-.09v-.53L470,775a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0H471a.16.16,0,0,1,.1,0l.3.15a.15.15,0,0,1,.06,0l.15.15a.23.23,0,0,1-.32.32l-.12-.12-.22-.11h-.12l-.21.1-.16.21,0,.21.24-.12a.18.18,0,0,1,.1,0h.16a.18.18,0,0,1,.1,0l.3.15.06,0,.22.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.16-.5.22,0h.1l.18,0,.14-.14.06-.24-.06-.2-.16-.16-.26-.11-.2.1-.21.36.11.28Z" />
                    <path
                        d="M472.87,777l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.17.17,0,0,1-.06-.12l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.22.22,0,0,1,.11,0h.22a.16.16,0,0,1,.1,0l.31.15a.32.32,0,0,1,.1.1l.07.15a.23.23,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.21.1-.16.21,0,.21.25-.12a.16.16,0,0,1,.1,0H473l.37.15a.31.31,0,0,1,.11.09l.15.22.16.33a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.19.19,0,0,1-.14.09l-.3.08Zm-.19-.51.24.06h.1l.16,0,.1-.16.11-.21-.22-.38-.26-.11-.21.11-.16.15-.05.21.06.24Z" />
                    <path
                        d="M474.3,777a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,474.3,777Z" />
                    <path
                        d="M475.51,777a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.1,0-.34.28a.23.23,0,0,1-.32,0,.21.21,0,0,1,0-.31l.37-.3.2-.11.1,0h.37l.11,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,475.51,777Z" />
                    <path
                        d="M476.64,777a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,476.64,777Z" />
                    <path
                        d="M478.82,777h-1.43a.24.24,0,0,1-.21-.14.22.22,0,0,1,.05-.24l1-1.06.31-.46-.16-.21-.13-.08H478l-.26.16,0,.14a.23.23,0,1,1-.45,0V775a.2.2,0,0,1,0-.07l.08-.22a.21.21,0,0,1,.11-.13l.15-.08.2-.14a.28.28,0,0,1,.13,0h.38l.12,0,.34.26.18.26a.27.27,0,0,1,0,.12v.16a.27.27,0,0,1,0,.12l-.39.54-.64.69h.91a.23.23,0,0,1,0,.46Z" />
                    <path
                        d="M486.21,776h-.07l-.09,0-.37-.15-.08-.05-.15-.15a.41.41,0,0,1-.05-.09l-.15-.45h0s0,0,0-.06v-.52s0,0,0-.06l.15-.53.17-.34a.2.2,0,0,1,.16-.12l.37-.08h.2l.42.08a.2.2,0,0,1,.17.15l.08.22a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.14l0-.11-.24,0h-.11l-.22,0-.11.2-.05.2.45-.07.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.24.24,0,0,1-.09.15l-.23.15-.32.16A.23.23,0,0,1,486.21,776Zm-.32-.57.28.11.37-.21.06-.28-.06-.22-.14-.14-.24-.06-.26.06-.2.34.11.32Z" />
                    <path
                        d="M488.33,776h-.16a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08v-.49l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.15-.21-.06h-.18l-.16,0-.15.2,0,.21.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.09.43-.08.42a.31.31,0,0,1-.1.15l-.23.15-.32.16A.19.19,0,0,1,488.33,776Zm-.1-.46h0l.38-.21.06-.28-.06-.22-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.3.15.1Z" />
                    <path d="M489.68,776a.23.23,0,0,1-.22-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,489.68,776Z" />
                    <path
                        d="M490.81,776a.23.23,0,0,1-.22-.23v-1l-.17-.28h-.14l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.27-.18a.25.25,0,0,1,.12,0h.3a.24.24,0,0,1,.16.07l.15.15.05.06.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,490.81,776Z" />
                    <path
                        d="M492,776a.23.23,0,0,1-.23-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,492,776Z" />
                    <path
                        d="M494.13,776H492.7a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1-1,.26-.46v-.09l-.11-.17-.15,0h-.31l-.17.08-.09.14a.23.23,0,1,1-.45,0V774a.2.2,0,0,1,0-.13l.25-.33.09-.06.23-.07h.52l.22.07a.15.15,0,0,1,.09.06l.08.07.18.26a.28.28,0,0,1,0,.13v.23a.27.27,0,0,1,0,.12l-.16.23-.13.27a.15.15,0,0,1,0,.06l-.67.67h.88a.23.23,0,0,1,.23.23A.23.23,0,0,1,494.13,776Z" />
                    <path
                        d="M499.26,775.12l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.17.05-.14.19,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23.05.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3s0,0-.05.06l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2,0,.16-.16.11-.27-.11-.22-.16-.15-.24-.06-.2,0-.14.14-.05.21.05.32Z" />
                    <path
                        d="M501.37,775.12,501,775a.21.21,0,0,1-.14-.1l-.15-.22s0,0,0-.06l-.15-.45h0a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.26.26,0,0,1,.15-.12l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.11-.15-.21-.05h-.17l-.15,0-.1.22-.06.19.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.36.36,0,0,1,.07.1l.07.31v.2l-.08.36-.06.1-.23.23a.24.24,0,0,1-.11.06Zm-.24-.5.29,0,.21,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.26,0-.19.35.11.33Z" />
                    <path
                        d="M502.81,775.12a.23.23,0,0,1-.23-.23v-1.43a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.43A.22.22,0,0,1,502.81,775.12Z" />
                    <path
                        d="M503.94,775.12a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0L503,774a.24.24,0,0,1-.33,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,503.94,775.12Z" />
                    <path
                        d="M505.07,775.12a.23.23,0,0,1-.23-.23v-1l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,505.07,775.12Z" />
                    <path
                        d="M507.25,775.12h-1.43a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1.06-1.05.18-.25.05-.16v-.13l0-.07-.09-.09-.14-.05h-.3l-.11,0,0,.06a.09.09,0,0,1,0,.06l-.09.09v.06a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.16a.21.21,0,0,1,.07-.16l.12-.12.06-.12a.24.24,0,0,1,.13-.11l.23-.08h.52l.22.08a.19.19,0,0,1,.09,0l.15.15.05.06.07.15a.19.19,0,0,1,0,.1v.23a.14.14,0,0,1,0,.07l-.07.23,0,.06-.22.3-.69.7h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M512.31,774.14l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.21.21,0,0,1,.08-.06l.31-.16.1,0h.22l.1,0,.31.16a.19.19,0,0,1,.1.1l.07.15a.22.22,0,0,1-.4.2l0-.08-.19-.1h-.12l-.21.11-.16.21,0,.21.24-.13.1,0h.07l.09,0,.37.15.08,0,.15.15,0,.07.15.38a.29.29,0,0,1,0,.09v.07a.17.17,0,0,1,0,.1l-.15.3L513,774a.25.25,0,0,1-.15.1Zm-.19-.51.24.06.26-.05.1-.15.11-.22-.11-.28-.09-.09-.28-.11-.37.2-.05.26.06.25Z" />
                    <path
                        d="M514.42,774.14l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23-.05-.07-.15-.38a.29.29,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53,0-.08.23-.3a.12.12,0,0,1,.08-.06l.3-.16.1,0h.22l.11,0,.3.16a.19.19,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.19-.1h-.12l-.2.11-.17.22-.07.22.29-.15.1,0h.07l.11,0,.3.15.25.17a.22.22,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1L515,774a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.05.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.39.22-.09.23.1.25Z" />
                    <path
                        d="M515.85,774.14a.23.23,0,0,1-.23-.23v-1.43a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,515.85,774.14Z" />
                    <path
                        d="M517,774.14a.22.22,0,0,1-.22-.23v-1l0-.13-.08,0h-.22l-.15,0L516,773a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,517,774.14Z" />
                    <path
                        d="M518.19,774.14a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0h-.22l-.1,0-.34.27a.21.21,0,0,1-.31,0,.22.22,0,0,1,0-.32l.38-.3.19-.1a.19.19,0,0,1,.1,0h.3l.07,0,.23.07a.22.22,0,0,1,.13.12l.15.3a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,518.19,774.14Z" />
                    <path
                        d="M520.38,774.14h-1.51a.23.23,0,0,1-.16-.39l1-1,.19-.25,0-.23,0-.14-.15-.13h-.37l-.1,0-.08.26a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.07l.17-.41a.21.21,0,0,1,.13-.11l.22-.08h.53l.1,0,.15.08.06,0,.15.15a.41.41,0,0,1,.05.09l.08.23a.15.15,0,0,1,0,.07v.15a.15.15,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.23.3-.69.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,520.38,774.14Z" />
                    <path
                        d="M525.58,773.31h-.15l-.1,0-.3-.15a.1.1,0,0,1-.06,0l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15a.16.16,0,0,1,.1,0h.22a.22.22,0,0,1,.11,0l.3.15a.2.2,0,0,1,.08.08l.16.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.2.1-.16.21,0,.22.28-.07h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22-.06,0-.3.15Zm-.1-.45h0l.22-.11.15-.16.06-.24-.05-.2-.14-.14-.25-.06h-.09l-.19,0-.13.14-.05.21.05.24.15.16Z" />
                    <path
                        d="M527.54,773.24l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.24.24,0,0,1,.11.13l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.14-.17-.08h-.12l-.2.1-.16.21,0,.22.42-.08.42.08a.21.21,0,0,1,.14.1l.15.22.17.33a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.14.1Zm-.19-.51.25.06.26-.06.09-.15.11-.21-.2-.36-.29-.06-.21,0-.14.14-.05.21.05.24Z" />
                    <path d="M529,773.24a.23.23,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0V773A.23.23,0,0,1,529,773.24Z" />
                    <path
                        d="M530.18,773.24A.23.23,0,0,1,530,773v-.94l-.09-.24-.09,0h-.22l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.38-.38.06,0,.15-.08.1,0h.37l.23.08a.25.25,0,0,1,.14.13l.15.37a.29.29,0,0,1,0,.09v1A.24.24,0,0,1,530.18,773.24Z" />
                    <path
                        d="M531.31,773.24a.24.24,0,0,1-.23-.23v-.94l-.12-.27h-.27l-.06,0-.27.34a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.21.21,0,0,1,.08-.06l.15-.08.1,0H531l.1,0,.15.08a.22.22,0,0,1,.11.12l.15.37a.29.29,0,0,1,0,.09v1A.23.23,0,0,1,531.31,773.24Z" />
                    <path
                        d="M533.5,773.24h-1.44a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.24-.42v-.14l-.08-.18-.14-.08h-.29l-.08.08-.06,0-.07,0,0,.14a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.25.25,0,0,1,0-.07L532,771a.21.21,0,0,1,.11-.13l.12-.06.13-.13a.23.23,0,0,1,.16-.06H533a.31.31,0,0,1,.13,0l.33.26a.15.15,0,0,1,.06.09l.07.22a.2.2,0,0,1,0,.07v.23a.3.3,0,0,1,0,.1l-.08.15-.23.4-.63.63h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,533.5,773.24Z" />
                    <path
                        d="M538.7,772.33h-.07l-.09,0-.38-.15-.07,0-.15-.15a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.22.22,0,0,1,.15-.12l.38-.07h.2l.35.08a.24.24,0,0,1,.14.1l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.1-.15-.22-.05h-.09l-.23.05-.1.2,0,.2.45-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.26.26,0,0,1-.1.13l-.22.15-.33.17Zm-.32-.57.28.11.37-.21.06-.21v-.1l-.05-.18-.14-.14-.24-.06-.26,0-.2.35.11.31Z" />
                    <path
                        d="M540.81,772.33h-.15l-.1,0-.3-.15L540,772a.23.23,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.21.21,0,0,1,.13-.09l.3-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.16.05-.15.19,0,.22.29-.07h.2l.36.08a.17.17,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Zm-.1-.45h0l.38-.21.05-.29-.05-.21L541,771l-.24-.06h-.1l-.18,0-.14.14-.05.21.05.3.15.09Z" />
                    <path
                        d="M542.17,772.33a.23.23,0,0,1-.23-.23v-1.5a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.5A.23.23,0,0,1,542.17,772.33Z" />
                    <path
                        d="M543.3,772.33a.23.23,0,0,1-.23-.23v-1l-.16-.28h-.19l-.39.39a.23.23,0,0,1-.32-.32l.45-.45a.2.2,0,0,1,.16-.07H543a.2.2,0,0,1,.16.07l.15.15a.09.09,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v1.05A.23.23,0,0,1,543.3,772.33Z" />
                    <path
                        d="M544.43,772.33a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,544.43,772.33Z" />
                    <path
                        d="M546.62,772.33h-1.43a.23.23,0,0,1-.16-.39l1-1,.26-.46v-.09l-.12-.17-.14-.05h-.31l-.23.09,0,.1v.12a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.16a.2.2,0,0,1,0-.07l.07-.22a.2.2,0,0,1,.12-.13l.15-.08.25-.09h.52l.23.08.09.05.07.08.18.26a.19.19,0,0,1,0,.12v.23a.22.22,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M406.65,805.66a.15.15,0,0,1-.09,0,.22.22,0,0,1-.11-.3l.9-1.86H406.2a.23.23,0,0,1-.22-.23.22.22,0,0,1,.22-.23h1.51a.23.23,0,0,1,.2.33l-1.05,2.18A.22.22,0,0,1,406.65,805.66Z" />
                    <path
                        d="M409.14,805.66h-.3l-.1,0-.45-.23a.2.2,0,0,1-.12-.13l-.07-.22a.23.23,0,0,1,.43-.15l0,.14.32.16h.2l.38-.21,0-.29v-.1l0-.19-.16-.16-.22-.11h-.2l-.4.21a.26.26,0,0,1-.24,0,.23.23,0,0,1-.08-.22l.15-.91a.22.22,0,0,1,.22-.19h1a.23.23,0,0,1,.23.23.23.23,0,0,1-.23.23h-.86l-.05.27.06,0a.19.19,0,0,1,.1,0h.3a.17.17,0,0,1,.1,0l.31.15a.1.1,0,0,1,.05,0l.23.23a.17.17,0,0,1,.06.1l.08.3v.21l-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Z" />
                    <path
                        d="M410.5,805.66a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,410.5,805.66Z" />
                    <path
                        d="M411.63,805.66a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.22.22,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,411.63,805.66Z" />
                    <path
                        d="M412.84,805.66a.22.22,0,0,1-.23-.22v-1l-.1-.2-.12-.08h-.14l-.08.09-.4.32a.23.23,0,1,1-.28-.36l.51-.43a.24.24,0,0,1,.16-.07h.3a.2.2,0,0,1,.13,0l.22.15a.18.18,0,0,1,.08.09l.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,412.84,805.66Z" />
                    <path
                        d="M415,805.66h-1.5a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1.05-1.06.19-.25,0-.15v-.16l0-.1-.17-.08h-.36l-.14,0-.05.14v.12a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.22.22,0,0,1,0-.08l.08-.22a.41.41,0,0,1,.05-.09l.08-.08a.19.19,0,0,1,.09,0L414,803h.53a.19.19,0,0,1,.1,0l.3.15a.21.21,0,0,1,.11.13l.08.23a.15.15,0,0,1,0,.07v.22a.15.15,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M420,804.76l-.35-.08-.11-.06-.23-.23a.27.27,0,0,1-.06-.12l-.07-.45a.22.22,0,0,1,0-.08v-.49l.08-.49,0-.08.23-.38a.24.24,0,0,1,.14-.1l.3-.08h.28l.35.08a.22.22,0,0,1,.16.15l.08.22a.23.23,0,0,1-.43.15l0-.11-.18-.05H420l-.15,0-.16.27,0,.14.41-.07.42.08a.19.19,0,0,1,.14.09l.15.23.17.33a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26-.06.1-.15.11-.27-.21-.38-.29-.05-.21.05-.14.14-.05.2.05.33Z" />
                    <path
                        d="M422.11,804.76l-.35-.08-.11-.06-.22-.23a.24.24,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.24.24,0,0,1,.16-.12l.38-.08h.19l.43.08a.22.22,0,0,1,.17.15l.07.22a.23.23,0,0,1-.43.15l0-.1-.25,0h-.11l-.22,0-.1.2-.06.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24v-.09l-.06-.19-.14-.14-.24-.06-.2.06-.16.16-.09.18.1.32Z" />
                    <path
                        d="M423.55,804.76a.23.23,0,0,1-.23-.23V803.1a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,423.55,804.76Z" />
                    <path
                        d="M424.68,804.76a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,424.68,804.76Z" />
                    <path
                        d="M425.88,804.76a.23.23,0,0,1-.22-.21l-.11-1.2-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3.08,1.1a.23.23,0,0,1-.21.24Z" />
                    <path
                        d="M428.07,804.76h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1,.18-.25.05-.16v-.14l0-.07-.17-.13h-.36l-.11,0-.08.17v.1a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.2.2,0,0,1,.13-.11l.23-.08h.52l.1,0,.16.08a.1.1,0,0,1,.05,0l.15.15.05.06.07.15a.19.19,0,0,1,0,.1V803a.19.19,0,0,1,0,.07l-.07.23,0,.06-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,428.07,804.76Z" />
                    <path
                        d="M433.12,803.85l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.23.23,0,0,1,.11,0l.3.15.25.16a.24.24,0,0,1,.09.15l.08.49-.08.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.5.24.06h.09l.19,0,.14-.14.06-.24-.06-.26-.15-.1-.27-.11-.38.21-.05.25.05.25Z" />
                    <path
                        d="M435.24,803.85l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,0-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.23.23,0,0,1,.11,0h.22a.17.17,0,0,1,.1,0l.3.15a.27.27,0,0,1,.11.1l.07.15a.22.22,0,1,1-.4.2l-.05-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.07a.17.17,0,0,1,.1,0l.3.15.25.16a.24.24,0,0,1,.09.11l.15.37a.29.29,0,0,1,0,.09V803a.17.17,0,0,1,0,.1l-.15.31a.1.1,0,0,1,0,.05l-.23.23a.21.21,0,0,1-.1.06Zm-.19-.5.24.06.2-.06.16-.16.11-.21-.11-.26-.16-.11-.22-.11-.36.21-.05.25.05.25Z" />
                    <path
                        d="M436.67,803.85a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,436.67,803.85Z" />
                    <path
                        d="M437.87,803.85a.23.23,0,0,1-.22-.21l-.11-1.19-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.2.2,0,0,1,.09-.06l.22-.07h.45l.23.07a.25.25,0,0,1,.14.16l.08.31.08,1.09a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M439,803.85a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.27l-.1.05-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.38-.3.19-.1.1,0h.37l.11,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,439,803.85Z" />
                    <path
                        d="M441.19,803.85h-1.51a.2.2,0,0,1-.2-.14.21.21,0,0,1,0-.24l1.06-1.06.18-.25.06-.23-.09-.23-.1,0h-.36l-.07,0-.09.09-.05.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.22.22,0,0,1,.05-.08l.15-.15.06-.05.15-.07a.19.19,0,0,1,.1,0h.53l.22.08a.21.21,0,0,1,.13.11l.08.15.09.26s0,0,0,.07V802s0,.05,0,.07l-.08.23a.33.33,0,0,1,0,.06l-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M446.4,803h-.15a.23.23,0,0,1-.11,0l-.3-.15a.18.18,0,0,1-.08-.07l-.16-.23-.17-.41v0h0a.15.15,0,0,1,0-.07v-.52l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.37.25l-.11-.15-.21-.06h-.17l-.17,0-.15.19,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.09.43-.09.36a.17.17,0,0,1-.06.1l-.22.23-.06,0-.3.15A.19.19,0,0,1,446.4,803Zm-.1-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.09l-.16,0-.2.35.11.28.1.13Z" />
                    <path
                        d="M448.51,803h-.15a.17.17,0,0,1-.1,0l-.31-.15a.1.1,0,0,1-.05,0l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.22-.31s.05-.05.08-.06l.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15a.21.21,0,0,1,.11.13l.07.22a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.14l-.05-.14-.17-.08h-.12l-.21.1L448,801l0,.22.42-.08.42.08a.24.24,0,0,1,.15.09l.15.23.16.33a.17.17,0,0,1,0,.1V802a.17.17,0,0,1,0,.1l-.15.31-.16.25a.16.16,0,0,1-.09.07l-.3.15A.19.19,0,0,1,448.51,803Zm-.1-.46h0l.2-.1.12-.17.11-.21-.21-.37-.28,0-.22,0-.14.14,0,.2.06.25.15.15Z" />
                    <path
                        d="M449.79,803a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.23.23,0,0,1,.23.22v1.51A.23.23,0,0,1,449.79,803Z" />
                    <path
                        d="M451,802.87a.22.22,0,0,1-.23-.22v-.93l-.17-.28h-.19l-.08.08-.4.32a.22.22,0,1,1-.28-.35l.51-.44a.23.23,0,0,1,.16-.06h.37a.23.23,0,0,1,.16.06l.16.15,0,.06.15.3a.43.43,0,0,1,0,.11v1A.22.22,0,0,1,451,802.87Z" />
                    <path
                        d="M452.13,802.87a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.13,0-.26.33a.23.23,0,0,1-.35-.29l.3-.37a.28.28,0,0,1,.11-.08l.22-.07h.45l.22.07a.22.22,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,452.13,802.87Z" />
                    <path
                        d="M454.31,802.87h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1-1,.19-.34.12-.12V801l-.16-.21-.13-.08h-.24l-.26.15,0,.15a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.28.28,0,0,1,.11-.13l.15-.07.2-.14a.28.28,0,0,1,.13,0h.38a.28.28,0,0,1,.12,0l.34.25.18.27a.25.25,0,0,1,0,.12v.23a.24.24,0,0,1-.07.16l-.15.15-.19.33-.64.64h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M459.44,802h-.07l-.1,0-.31-.15-.25-.17a.31.31,0,0,1-.09-.11l-.15-.46h0a.13.13,0,0,1,0-.06v-.53s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.21l.42.08a.26.26,0,0,1,.17.15l.08.23a.24.24,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.1-.25,0h-.1l-.17,0-.15.21-.07.21h0l.43-.08.36.08.1.06.23.23a.24.24,0,0,1,.06.11l.08.3v.2l-.08.36a.24.24,0,0,1-.09.13l-.23.15-.33.17Zm-.41-.67.16.11.21.1.37-.2.06-.22v-.1l-.05-.18-.14-.14-.24-.06-.21.06-.15.15-.1.19Z" />
                    <path
                        d="M461.55,802h-.15l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.09.09,0,0,1,0-.07v-.5l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.08.11.06.22.23a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.15-.32.17Zm-.09-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.3.15.1Z" />
                    <path d="M462.91,802a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,462.91,802Z" />
                    <path
                        d="M464,802a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,464,802Z" />
                    <path
                        d="M465.17,802a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.27-.18a.25.25,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,465.17,802Z" />
                    <path
                        d="M467.36,802h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,0-.24l1-1,.26-.46v-.09l-.11-.17-.15,0h-.31l-.18.08-.08.13v.09a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22V800a.2.2,0,0,1,0-.13l.25-.34a.19.19,0,0,1,.09,0l.22-.08h.52l.23.08.09,0,.07.08.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1,0,.13l-.15.22-.13.28-.05.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M472.49,801.06l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.49l.08-.56a.11.11,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.29l.35.09a.19.19,0,0,1,.16.14l.08.23a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.11-.18,0h-.17l-.15,0-.16.26,0,.22.24-.12a.17.17,0,0,1,.1,0h.07a.23.23,0,0,1,.11,0l.3.15.25.16a.16.16,0,0,1,.07.09l.16.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.16.31a.1.1,0,0,1,0,.05l-.22.23a.24.24,0,0,1-.11.06Zm-.19-.5.24.06.21-.06.16-.16.11-.26-.1-.2-.18-.12-.21-.11-.37.21,0,.18.05.33Z" />
                    <path
                        d="M474.6,801.06l-.42-.08a.19.19,0,0,1-.14-.09l-.16-.23s0,0,0,0l-.15-.46a.17.17,0,0,1,0-.07v-.51l.16-.53.15-.4a.24.24,0,0,1,.17-.14l.38-.07h.19l.36.09a.2.2,0,0,1,.13.09l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.06l-.11-.16-.21,0h-.1l-.21,0-.16.46.29-.11.08,0h.08l.35.08a.24.24,0,0,1,.11.06l.22.23a.24.24,0,0,1,.06.11l.08.3v.2l-.09.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.5.29.05.21-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.21-.06-.3.12-.09.09-.09.19.11.33Z" />
                    <path
                        d="M476,801.06a.22.22,0,0,1-.22-.22V799.4a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,476,801.06Z" />
                    <path
                        d="M477.16,801.06a.22.22,0,0,1-.22-.22v-1.06l0-.12-.07,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.31v1.11A.22.22,0,0,1,477.16,801.06Z" />
                    <path
                        d="M478.3,801.06a.22.22,0,0,1-.23-.22v-1.06l0-.12-.07,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.15.15,0,0,1,.09-.06l.22-.07h.44l.23.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,478.3,801.06Z" />
                    <path
                        d="M480.48,801.06h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15v-.14l0-.07-.17-.13h-.37l-.1,0,0,.07,0,0-.09.09v.06a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22V799a.2.2,0,0,1,.07-.16l.12-.13.06-.12a.24.24,0,0,1,.13-.11l.23-.08H480a.17.17,0,0,1,.1,0l.15.07.06,0,.15.16a.1.1,0,0,1,0,0l.08.15a.22.22,0,0,1,0,.11v.22a.15.15,0,0,1,0,.07l-.07.23,0,.06-.22.31-.69.69h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M487.8,800l-.36-.09-.1,0-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3.07-.07.31-.15.1,0H488l.11,0,.3.15a.28.28,0,0,1,.11.13l.08.23a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l-.05-.14-.17-.08h-.12l-.2.1-.16.22,0,.2.24-.12.1,0H488l.37.15a.24.24,0,0,1,.11.09l.15.22.16.33a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.27.27,0,0,1-.15.1Zm-.19-.51.24.06.26-.06.1-.15.11-.21-.22-.38-.26-.11-.21.11-.16.16-.05.2.06.25Z" />
                    <path
                        d="M489.91,800l-.36-.09-.1,0-.23-.23a.22.22,0,0,1-.05-.08l-.15-.37a.29.29,0,0,1,0-.09v-.53s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.08.15a.23.23,0,0,1-.11.31.23.23,0,0,1-.3-.1l0-.09-.19-.09H490l-.2.1-.17.23-.06.21.28-.14.1,0H490l.11,0,.3.15.06,0,.22.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24-.06-.2-.16-.16-.2-.1-.21.1-.17.17-.09.18.09.24Z" />
                    <path d="M491.34,800a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,491.34,800Z" />
                    <path
                        d="M492.47,800a.22.22,0,0,1-.22-.23v-1l-.05-.2-.06,0h-.23l-.13,0-.26.32a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.22.22,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,492.47,800Z" />
                    <path
                        d="M493.68,800a.23.23,0,0,1-.23-.23v-.94l-.09-.24-.09,0h-.22l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.38-.38.06,0,.15-.07a.19.19,0,0,1,.1,0h.37l.23.08a.25.25,0,0,1,.14.13l.15.38a.19.19,0,0,1,0,.08v1A.23.23,0,0,1,493.68,800Z" />
                    <path
                        d="M495.87,800h-1.51a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.24-.34v-.14l0-.1-.07,0-.06-.05-.09-.08H495l-.17.11-.05.19a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.08l.08-.22a.19.19,0,0,1,.05-.09l.08-.08.26-.17a.2.2,0,0,1,.13,0h.45a.23.23,0,0,1,.16.06l.12.13.12.06a.2.2,0,0,1,.12.13l.07.22a.22.22,0,0,1,0,.08v.22a.3.3,0,0,1,0,.1l-.08.15-.24.34-.7.69h1a.23.23,0,0,1,.22.23A.22.22,0,0,1,495.87,800Z" />
                    <path
                        d="M501.07,799.18h-.15a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.22.22,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.08a.26.26,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17,0-.14.19,0,.22.29-.08h.2l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.25.25,0,0,1-.1.15l-.22.15-.33.16A.17.17,0,0,1,501.07,799.18Zm-.1-.46h0l.37-.21.06-.28-.05-.22-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.3.14.1Z" />
                    <path
                        d="M503.11,799.18H503a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.22.22,0,0,1,0-.08v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.14l0-.11-.18,0H503l-.17,0-.14.19,0,.22.42-.08.42.08a.19.19,0,0,1,.14.09l.15.23.17.33a.3.3,0,0,1,0,.1v.07a.28.28,0,0,1,0,.09l-.16.37a.14.14,0,0,1,0,.08l-.15.15a.18.18,0,0,1-.07,0l-.38.15Zm-.4-.67.14.1.22.11.29-.11.08-.09.11-.28-.2-.37-.29-.06-.21.06-.14.14,0,.2Z" />
                    <path
                        d="M504.46,799.18a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22V799A.23.23,0,0,1,504.46,799.18Z" />
                    <path
                        d="M505.67,799.18a.23.23,0,0,1-.23-.23v-1l-.1-.2-.11-.08h-.14l-.09.08-.39.32a.23.23,0,0,1-.29-.35l.51-.44a.23.23,0,0,1,.16-.06h.3a.28.28,0,0,1,.13,0l.22.15a.32.32,0,0,1,.08.09l.15.3a.23.23,0,0,1,0,.11V799A.23.23,0,0,1,505.67,799.18Z" />
                    <path
                        d="M506.8,799.18a.22.22,0,0,1-.22-.23v-1l-.17-.28h-.19l-.39.39a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.45-.45a.23.23,0,0,1,.16-.06h.38a.23.23,0,0,1,.16.06l.15.15,0,.06.15.3a.23.23,0,0,1,0,.11V799A.23.23,0,0,1,506.8,799.18Z" />
                    <path
                        d="M509,799.18h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,0-.24l1-1.06.19-.25.05-.16v-.15l-.05-.14-.14,0h-.36l-.17.09,0,.14a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.3-.15.1,0h.52l.23.07.09.06.07.07a.24.24,0,0,1,.06.09l.07.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.65.69H509a.24.24,0,0,1,.23.23A.23.23,0,0,1,509,799.18Z" />
                    <path
                        d="M514,798.2l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.23s0,0,0,0l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.15.15,0,0,1,0-.07l.3-.84a.2.2,0,0,1,.17-.14l.38-.08h.19l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.15-.21-.06H514l-.21,0-.15.4.44-.06.35.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.09.35a.24.24,0,0,1-.06.11l-.22.23-.11.05Zm-.24-.51.29.06.21-.06.14-.14.06-.24v-.09l0-.19-.14-.14-.24-.06-.26.06-.19.34.11.34Z" />
                    <path
                        d="M516.08,798.2l-.36-.09a.31.31,0,0,1-.1-.05l-.23-.23a.2.2,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.22-.31a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.21.21,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17,0-.14.19,0,.22.29-.08h.21l.35.08a.24.24,0,0,1,.11.06l.23.22a.39.39,0,0,1,.06.11l.07.3v.21l-.08.35a.39.39,0,0,1-.06.11l-.23.22a.24.24,0,0,1-.11.06l-.3.08Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.09l-.19,0-.14.14,0,.2.06.33Z" />
                    <path
                        d="M517.59,798.2a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0V798A.22.22,0,0,1,517.59,798.2Z" />
                    <path
                        d="M518.72,798.2a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.21l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.38a.19.19,0,0,1,.1,0l.15.07a.24.24,0,0,1,.1.1l.15.3a.44.44,0,0,1,0,.1V798A.22.22,0,0,1,518.72,798.2Z" />
                    <path
                        d="M519.85,798.2a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3V798A.22.22,0,0,1,519.85,798.2Z" />
                    <path
                        d="M522,798.2H520.6a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1-1,.26-.46v-.07l-.08-.08,0-.06,0-.07-.1,0h-.3l-.11,0,0,.07,0,.06-.09.08v.06a.23.23,0,1,1-.45,0v-.15a.24.24,0,0,1,.07-.16l.12-.12.06-.12a.25.25,0,0,1,.13-.12l.23-.07h.52l.22.07a.24.24,0,0,1,.14.12l0,.12.13.12a.24.24,0,0,1,.07.16v.23a.25.25,0,0,1,0,.12l-.15.23-.14.28a.1.1,0,0,1,0,.05l-.67.67H522a.23.23,0,0,1,.22.23A.22.22,0,0,1,522,798.2Z" />
                    <path
                        d="M527.16,797.29l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.12.12,0,0,1-.05-.07l-.16-.38a.28.28,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53,0-.07.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.17.17,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.09h-.12l-.21.1-.17.22-.06.22.28-.14a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.23.23,0,0,1,.1.15l.08.49-.08.36a.17.17,0,0,1-.06.1l-.23.23a.27.27,0,0,1-.1.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.38.22-.09.23.1.25Z" />
                    <path
                        d="M529.2,797.29l-.36-.08a.24.24,0,0,1-.13-.09l-.15-.23-.17-.41h0a.15.15,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.17.17,0,0,1,.1-.1l.3-.15a.17.17,0,0,1,.1,0h.23l.1,0,.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.13-.12-.22-.11h-.12l-.18.09-.12.23-.05.17.2-.09a.17.17,0,0,1,.1,0h.15a.19.19,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.49-.08.36a.17.17,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.08Zm-.17-.5.22.06h.1l.18-.05.14-.14.06-.24-.05-.26-.15-.1-.28-.12L529,796l-.09.1-.1.25.12.29Z" />
                    <path
                        d="M530.71,797.29a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,530.71,797.29Z" />
                    <path
                        d="M531.84,797.29a.22.22,0,0,1-.23-.22V796l0-.13-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,531.84,797.29Z" />
                    <path
                        d="M533,797.29a.22.22,0,0,1-.23-.22V796l0-.13-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.22.22,0,0,1,.14.16l.08.31v1.11A.22.22,0,0,1,533,797.29Z" />
                    <path
                        d="M535.16,797.29h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25.05-.23,0-.14-.08-.08-.14,0h-.3l-.1,0-.16.27a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08a.25.25,0,0,1,0-.12l.21-.36a.28.28,0,0,1,.13-.11l.23-.08h.52l.23.08.09,0,.15.15a.41.41,0,0,1,.05.09l.08.23s0,0,0,.07v.15s0,0,0,.07l-.08.23,0,.06-.23.31-.69.69h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,535.16,797.29Z" />
                    <path
                        d="M540.36,796.39h-.08a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.18,0h-.18l-.16,0-.15.19,0,.22.42-.08.42.08a.24.24,0,0,1,.15.09l.15.23.16.33a.17.17,0,0,1,0,.1v.07a.17.17,0,0,1,0,.1l-.15.3-.16.26-.11.08-.38.15Zm-.24-.57.21.11.26-.1.11-.17.11-.22-.21-.36-.28-.06-.22.06-.14.14-.05.2.05.25Z" />
                    <path
                        d="M542.47,796.39h-.07a.17.17,0,0,1-.1,0l-.31-.15-.06,0-.22-.23a.18.18,0,0,1-.05-.07l-.15-.38a.29.29,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53a.16.16,0,0,1,0-.07l.22-.31a.24.24,0,0,1,.08-.06l.31-.15a.17.17,0,0,1,.1,0h.15l.08,0,.38.15a.2.2,0,0,1,.13.14l.07.22a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.14l0-.13-.29-.1-.21.11-.16.22-.07.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.09.09,0,0,1-.06,0l-.3.15A.17.17,0,0,1,542.47,796.39Zm-.24-.57.2.11.21-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06-.21.06-.16.16-.08.18.09.24Z" />
                    <path
                        d="M543.83,796.39a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.23.23,0,0,1,.23.22v1.51A.23.23,0,0,1,543.83,796.39Z" />
                    <path
                        d="M545,796.39a.23.23,0,0,1-.23-.23V795.1l0-.15-.1-.07h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.24.24,0,0,1,.12,0l.23.15a.22.22,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,545,796.39Z" />
                    <path
                        d="M546.17,796.31a.22.22,0,0,1-.23-.22v-.94l-.09-.24-.1,0h-.19l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.37l.23.07a.25.25,0,0,1,.14.13l.15.38a.25.25,0,0,1,0,.08v1A.22.22,0,0,1,546.17,796.31Z" />
                    <path
                        d="M548.35,796.31h-1.5a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.44v-.13l0-.11-.06,0a.09.09,0,0,1-.06,0l-.09-.09h-.29l-.17.12,0,.19a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,0-.09l.08-.07.26-.18a.28.28,0,0,1,.12,0h.46a.26.26,0,0,1,.16.07l.12.12.12.06a.28.28,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,0-.64.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M407.48,845.1l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23-.17-.41a.16.16,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15.08,0h.15a.23.23,0,0,1,.11,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.13-.12-.27-.11-.26.1-.11.22-.05.19.29-.12.08,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.49-.08.36a.24.24,0,0,1-.06.11L408,845a.21.21,0,0,1-.1.06Zm-.24-.5.29.06.21-.06.14-.14.06-.24-.06-.26-.14-.1-.22-.11-.29.11-.08.09-.1.25.12.29Z" />
                    <path
                        d="M409.52,845.1l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.23.23,0,0,1-.41.2l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.49-.08.36a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.19-.5.24.06h.1l.18,0,.14-.14.06-.24L410,844l-.15-.1-.28-.11-.37.21-.06.25.06.25Z" />
                    <path
                        d="M411,845.1a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,411,845.1Z" />
                    <path
                        d="M412.16,845.1a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.27l-.07,0-.27.27a.23.23,0,0,1-.32-.32l.3-.3.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,412.16,845.1Z" />
                    <path
                        d="M413.29,845.1a.23.23,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.22.22,0,0,1,.14.16l.08.31v1.11A.23.23,0,0,1,413.29,845.1Z" />
                    <path
                        d="M415.48,845.1H414a.2.2,0,0,1-.2-.14.21.21,0,0,1,0-.24l1-1,.27-.48L415,843l-.11,0h-.3l-.14,0-.08.08,0,.18a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08a.19.19,0,0,1,0-.07l.07-.22a.15.15,0,0,1,.06-.09l.15-.15a.16.16,0,0,1,.08-.06l.23-.07.07,0H415l.07,0,.23.07a.28.28,0,0,1,.13.11l.07.15.14.21a.25.25,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.15.23-.14.27,0,.06-.67.67h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,415.48,845.1Z" />
                    <path
                        d="M420.61,844.2l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.12l-.08-.37v0l-.08-.51a.34.34,0,0,1,0-.1l.15-.52a.2.2,0,0,1,0-.08l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.11,0h.22l.1,0,.3.15a.25.25,0,0,1,.12.13l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.13-.17-.09h-.12l-.21.1-.17.23-.06.21.28-.14.11,0h.07l.1,0,.3.15a.1.1,0,0,1,.06.05l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.27.27,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.2,0,.14-.14.06-.25-.05-.2-.16-.16-.21-.1-.2.1-.16.16,0,.19.06.26Z" />
                    <path
                        d="M422.64,844.2l-.36-.08a.26.26,0,0,1-.13-.1l-.15-.22-.17-.42a.29.29,0,0,1,0-.09v-.52a.15.15,0,0,1,0-.07l.15-.52.17-.35a.32.32,0,0,1,.1-.1l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.09.08l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.12-.18-.2-.1h-.12l-.18.09-.12.24-.05.17.2-.1.1,0h.15l.1,0,.31.15.05.05.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.27.27,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07Zm-.16-.5.22,0h.09l.19,0,.14-.14.06-.25-.06-.2L423,843l-.27-.11-.2.1-.2.36.11.29Z" />
                    <path
                        d="M424.15,844.2a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23V844A.23.23,0,0,1,424.15,844.2Z" />
                    <path
                        d="M425.28,844.2a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.12,0-.26.32a.23.23,0,1,1-.36-.28l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.44l.23.08a.26.26,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,425.28,844.2Z" />
                    <path
                        d="M426.41,844.2a.22.22,0,0,1-.22-.23v-1l-.05-.2-.07,0h-.22l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.23.23,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,426.41,844.2Z" />
                    <path
                        d="M428.6,844.2h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1,.24-.35v-.14l0-.1L428,842h-.24l-.21.16-.08.14a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.26-.33.26-.18a.19.19,0,0,1,.12,0h.38a.2.2,0,0,1,.13,0l.35.21a.24.24,0,0,1,.11.13l.08.23a.15.15,0,0,1,0,.07v.22a.43.43,0,0,1,0,.11l-.08.15-.25.33-.69.7h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M433.8,843.37h-.07l-.1,0-.31-.16-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.22-.3a.22.22,0,0,1,.13-.09l.3-.07H434l.36.08a.22.22,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.21.21,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17.05-.15.19,0,.22.42-.08.42.08a.25.25,0,0,1,.15.1l.15.22.16.33a.17.17,0,0,1,0,.1v.07a.29.29,0,0,1,0,.09l-.15.37a.22.22,0,0,1-.05.08l-.15.15-.08.05-.37.15Zm-.39-.66.14.09.22.11.28-.11.09-.09.11-.28-.21-.37-.28,0-.22,0-.14.14,0,.2Z" />
                    <path
                        d="M435.91,843.37h-.07l-.1,0-.3-.16-.25-.16a.18.18,0,0,1-.09-.12l-.15-.45h0s0-.05,0-.08v-.52s0,0,0-.06l.15-.53a.16.16,0,0,1,0-.07l.23-.3a.18.18,0,0,1,.12-.09l.3-.07H436l.42.08a.2.2,0,0,1,.17.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.1-.25-.05h-.1l-.17.05-.15.21-.06.21h0l.43-.08.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.43-.08.42a.21.21,0,0,1-.09.15l-.23.15-.32.17Zm-.41-.67.16.1.22.11.36-.2.06-.29-.06-.22-.14-.14-.24-.06-.2.06-.16.16-.1.19Z" />
                    <path
                        d="M437.27,843.37a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,437.27,843.37Z" />
                    <path
                        d="M438.4,843.37a.22.22,0,0,1-.22-.23v-1l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,438.4,843.37Z" />
                    <path
                        d="M439.61,843.37a.23.23,0,0,1-.23-.23v-1l-.1-.2-.12-.08H439l-.17.11-.27.28a.23.23,0,0,1-.32-.32l.3-.31.27-.17a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.2.2,0,0,1,.08.08l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,439.61,843.37Z" />
                    <path
                        d="M441.8,843.37h-1.51a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.05.19-.25.05-.16v-.15l0-.1-.17-.09h-.36l-.14.05,0,.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08s0-.05,0-.07l.08-.23a.22.22,0,0,1,.05-.08l.08-.08a.19.19,0,0,1,.09,0l.22-.08h.53l.1,0,.3.15a.23.23,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.23.3-.69.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,441.8,843.37Z" />
                    <path
                        d="M446.85,842.39l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.27.27,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.13.13,0,0,1,0-.08l.22-.38a.24.24,0,0,1,.14-.1l.3-.07h.29l.35.08a.25.25,0,0,1,.13.09l.16.23a.24.24,0,0,1-.07.32.23.23,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.16,0-.15.27,0,.15.28-.07H447l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.07Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.25v-.09l-.05-.19-.14-.14-.25-.06h-.09l-.19.05-.13.14-.06.2.06.33Z" />
                    <path
                        d="M449,842.39l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.27.27,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.22a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.14l0-.11-.18,0H449l-.17,0-.14.19,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23a.1.1,0,0,1,0,.06l.15.3a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.15.3,0,.06-.22.23a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2-.05.16-.16.11-.27-.11-.22-.16-.16L449,841l-.2.06-.14.14-.05.2.05.33Z" />
                    <path
                        d="M450.39,842.39a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,450.39,842.39Z" />
                    <path
                        d="M451.6,842.39a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0H451l-.14,0-.27.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09,0,.23-.08h.44l.23.08a.24.24,0,0,1,.13.11l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,451.6,842.39Z" />
                    <path
                        d="M452.73,842.39a.23.23,0,0,1-.23-.23v-1l-.12-.2h-.27l-.07,0-.28.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.06,0,.15-.07a.19.19,0,0,1,.1,0h.38a.19.19,0,0,1,.1,0l.15.07a.19.19,0,0,1,.1.1l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,452.73,842.39Z" />
                    <path
                        d="M454.92,842.39h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1,.18-.25.05-.16v-.13l-.08-.17-.11,0H454l-.07,0-.13.17v.09a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.19.19,0,0,1,0-.1l.07-.15.05-.06.15-.15a.09.09,0,0,1,.06,0l.15-.08.1,0h.52l.23.08a.28.28,0,0,1,.13.11l.15.3a.18.18,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,454.92,842.39Z" />
                    <path
                        d="M460,841.48l-.42-.08a.19.19,0,0,1-.14-.09l-.16-.23-.17-.41h0a.19.19,0,0,1,0-.08V840l.15-.53.17-.34a.24.24,0,0,1,.1-.1l.3-.15a.23.23,0,0,1,.11,0h.22a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.15.15a.23.23,0,1,1-.32.32l-.12-.12-.22-.11H460l-.19.09-.12.23,0,.18.19-.1a.23.23,0,0,1,.11,0h.15a.19.19,0,0,1,.1,0l.3.15.25.16a.31.31,0,0,1,.1.15l.08.49-.09.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.5.29.06.21-.06.14-.14.06-.24-.06-.26-.15-.1-.27-.11-.22.11-.09.09-.1.25.11.29Z" />
                    <path
                        d="M462,841.48l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.07-.56a.31.31,0,0,1,.05-.1l.22-.3s.05-.06.08-.07l.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.3.21.21,0,0,1-.3-.1l0-.08-.19-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.15a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.22.22,0,0,1,.05.08l.15.37a.29.29,0,0,1,0,.09v.07a.23.23,0,0,1,0,.11l-.15.3-.16.25a.23.23,0,0,1-.14.09l-.3.08Zm-.19-.5.24.06h.1l.16,0,.1-.16.11-.22-.11-.28-.09-.09-.27-.11-.38.21-.05.25.06.25Z" />
                    <path
                        d="M463.51,841.48a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,463.51,841.48Z" />
                    <path
                        d="M464.65,841.48a.22.22,0,0,1-.23-.22v-1l-.13-.21H464l-.07,0-.28.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.09.09,0,0,1,.06,0l.15-.08.1,0h.37l.11,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,464.65,841.48Z" />
                    <path
                        d="M465.78,841.48a.22.22,0,0,1-.23-.22V840.2l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,465.78,841.48Z" />
                    <path
                        d="M468,841.48h-1.43a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1-1,.26-.48-.16-.26-.1,0h-.27l-.26.16,0,.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.22a.26.26,0,0,1,.11-.14l.15-.07.2-.14a.28.28,0,0,1,.13,0h.38l.07,0,.22.07a.21.21,0,0,1,.13.11l.08.16.14.2a.25.25,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.15.23-.14.27,0,.06-.67.67H468a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M473.17,840.58h-.08a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.23-.23,0-.07-.15-.38a.25.25,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53a.15.15,0,0,1,0-.07l.23-.3a.2.2,0,0,1,.13-.09l.3-.07h.2l.42.08a.2.2,0,0,1,.17.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.11l-.16.05-.16.2-.06.22h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.33.33,0,0,1,.06.1l.08.43-.08.36a.24.24,0,0,1-.06.1l-.23.23-.06,0-.3.15A.19.19,0,0,1,473.17,840.58Zm-.25-.56.21.1.21-.1.15-.16.06-.24-.06-.21-.14-.14-.24-.06-.2.06-.16.16-.09.18.1.24Z" />
                    <path
                        d="M475.28,840.58h-.15a.17.17,0,0,1-.1,0l-.3-.15a.09.09,0,0,1-.06,0l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.13.1l.16.22a.24.24,0,0,1-.07.32.23.23,0,0,1-.31-.07l-.1-.15-.22-.05h-.17l-.17.05-.14.19,0,.22.28-.07h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43L476,840a.17.17,0,0,1-.06.1l-.23.23-.06,0-.3.15A.19.19,0,0,1,475.28,840.58Zm-.1-.45h.05l.22-.11.15-.16.06-.24-.05-.21-.14-.14-.25-.06h-.09l-.19,0-.14.14-.05.2.06.25.15.16Z" />
                    <path
                        d="M476.64,840.58a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,476.64,840.58Z" />
                    <path
                        d="M477.77,840.58a.23.23,0,0,1-.23-.23V839.3l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,477.77,840.58Z" />
                    <path
                        d="M478.9,840.58a.23.23,0,0,1-.23-.23V839.3l0-.16-.1-.07h-.17l-.16.11-.27.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.3v1.11A.23.23,0,0,1,478.9,840.58Z" />
                    <path
                        d="M481.09,840.5h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-1,.25-.43v-.11l-.16-.21-.13-.08h-.24l-.21.16-.09.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.25.25,0,0,1,0-.12l.25-.34.27-.18a.25.25,0,0,1,.12,0h.38a.25.25,0,0,1,.12,0l.34.26.18.26a.25.25,0,0,1,0,.12v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39a.1.1,0,0,1,0,.05l-.63.59h.86a.22.22,0,0,1,.22.23A.22.22,0,0,1,481.09,840.5Z" />
                    <path
                        d="M488.4,839.52l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.45a.17.17,0,0,1,0-.07V838l.08-.56a.21.21,0,0,1,0-.1l.23-.3A.2.2,0,0,1,488,837l.31-.08h.28l.35.09a.19.19,0,0,1,.16.14l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.42-.08.35.08.11.06.22.23,0,.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.31,0,.06-.22.22a.24.24,0,0,1-.11.06Zm-.19-.5.25.06.2-.06.16-.16.11-.26-.11-.23-.16-.15-.24-.06-.2.06-.14.14-.05.2.05.33Z" />
                    <path
                        d="M490.59,839.52h-.08l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23,0,0-.15-.46a.17.17,0,0,1,0-.07V838a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.16-.12l.38-.07h.19l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.1-.16-.22,0h-.1l-.22,0-.1.21-.06.19.46-.07.35.08.11.06.23.23a.39.39,0,0,1,.06.11l.07.3v.2l-.08.36a.26.26,0,0,1-.1.13l-.22.15-.33.17Zm-.32-.5.26.05.39-.21.05-.22v-.1l0-.18-.14-.14-.24-.06-.26.06-.19.34.11.33Z" />
                    <path d="M492,839.52a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,492,839.52Z" />
                    <path
                        d="M493.08,839.52a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.25.25,0,0,1,.12,0h.31a.28.28,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,493.08,839.52Z" />
                    <path
                        d="M494.21,839.52a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.12,0h.31a.28.28,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,494.21,839.52Z" />
                    <path
                        d="M496.39,839.52H495a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25,0-.15v-.16l0-.1-.17-.08h-.36l-.11,0,0,.07,0,.06-.09.08v.06a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.2.2,0,0,1,.07-.16l.12-.13.06-.12a.28.28,0,0,1,.13-.11l.23-.07.07,0h.45a.17.17,0,0,1,.1,0l.31.15a.21.21,0,0,1,.11.13l.07.22a.24.24,0,0,1,0,.08v.22a.14.14,0,0,1,0,.07l-.07.23s0,0,0,.06l-.22.31-.69.69h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M501.52,838.62l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.55a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.24.24,0,0,1-.31-.1l0-.09-.18-.09h-.12l-.21.1-.16.22,0,.2.24-.12.1,0h.16l.38.15.08,0,.15.16,0,.05.15.31a.16.16,0,0,1,0,.1v.15a.18.18,0,0,1,0,.1l-.15.3-.17.25a.26.26,0,0,1-.13.1l-.3.07Zm-.18-.51.24.06h.09l.16,0,.11-.16.11-.27-.11-.22-.09-.09-.28-.11-.37.2-.05.25.05.26Z" />
                    <path
                        d="M503.63,838.62l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45h0l-.08-.45a.34.34,0,0,1,0-.1l.15-.52a.14.14,0,0,1,0-.06l.23-.38a.24.24,0,0,1,.14-.1l.3-.08h.28l.36.08a.26.26,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.18-.05h-.18l-.15,0-.16.28-.07.22.28-.14.1,0h.08l.1,0,.3.15.25.17a.26.26,0,0,1,.1.13l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.06L504,838l.06-.24v-.09l0-.16-.15-.11-.22-.1-.37.2,0,.18.06.33Z" />
                    <path
                        d="M505.07,838.62a.23.23,0,0,1-.23-.23V837a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,505.07,838.62Z" />
                    <path
                        d="M506.2,838.62a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31a.19.19,0,0,1,.09,0l.22-.08H506l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,506.2,838.62Z" />
                    <path
                        d="M507.4,838.62a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.21l-.1,0-.34.27a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.19-.1a.23.23,0,0,1,.11,0h.37l.23.08a.28.28,0,0,1,.13.11l.15.3a.43.43,0,0,1,0,.11v1A.23.23,0,0,1,507.4,838.62Z" />
                    <path
                        d="M509.59,838.62h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.18-.25,0-.24-.08-.22-.1,0h-.38l-.1,0-.09.27a.23.23,0,1,1-.45,0v-.07a.15.15,0,0,1,0-.07l.16-.41a.23.23,0,0,1,.13-.11l.23-.08h.6l.22.08a.18.18,0,0,1,.13.11l.08.15.09.26s0,0,0,.07v.15s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,509.59,838.62Z" />
                    <path
                        d="M514.57,837.64l-.36-.08a.33.33,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.09.08.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.2.1-.16.22,0,.21.28-.07h.21l.36.08.1.06.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.23a.33.33,0,0,1-.1.06l-.3.07Zm-.19-.51.24.06h.1l.18,0L515,837l.06-.24-.05-.2-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.2,0,.25Z" />
                    <path
                        d="M516.68,837.64l-.36-.08a.33.33,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.28.28,0,0,1,.11.13l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l-.05-.13-.17-.09h-.12l-.2.1-.16.22,0,.2.24-.12.1,0h.16l.38.15a.22.22,0,0,1,.1.09l.15.23.17.32a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.19-.51.25.06.26-.06.1-.15.1-.21-.22-.38-.26-.1-.21.1-.15.16-.05.2.05.25Z" />
                    <path
                        d="M518.11,837.64a.22.22,0,0,1-.22-.23V836a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,518.11,837.64Z" />
                    <path
                        d="M519.32,837.64a.23.23,0,0,1-.23-.23v-.94l-.09-.23-.09,0h-.22l-.06,0-.36.35a.23.23,0,1,1-.32-.32l.38-.38.06,0,.15-.07a.19.19,0,0,1,.1,0H519l.23.08a.25.25,0,0,1,.14.13l.15.38a.19.19,0,0,1,0,.08v1A.23.23,0,0,1,519.32,837.64Z" />
                    <path
                        d="M520.45,837.64a.22.22,0,0,1-.22-.23v-.94l-.13-.27h-.22l-.12,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.38a.18.18,0,0,1,.1-.07l.23-.08h.37a.19.19,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.19.19,0,0,1,0,.08v1A.23.23,0,0,1,520.45,837.64Z" />
                    <path
                        d="M522.64,837.64h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-1,.19-.33.12-.13v-.06l-.16-.22-.14-.08h-.29l-.08.09-.06,0-.07,0,0,.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.14.14,0,0,1,0-.07l.07-.23a.2.2,0,0,1,.12-.13l.11-.06.13-.13a.23.23,0,0,1,.16-.06h.45a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1-.07.16l-.15.15-.19.34-.63.63h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,522.64,837.64Z" />
                    <path
                        d="M527.84,836.81h-.07l-.09,0-.37-.15-.08,0-.15-.15a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.22.22,0,0,1,.15-.12l.38-.08h.2l.35.08a.23.23,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.32-.06l-.1-.15-.22-.06h-.09l-.23,0-.1.2-.05.2.45-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.42a.22.22,0,0,1-.1.15l-.22.15-.33.16A.17.17,0,0,1,527.84,836.81Zm-.32-.57.28.11.37-.2.05-.29-.05-.22-.14-.14-.24-.06-.26.06-.2.34.11.32Z" />
                    <path
                        d="M530,836.81h-.15a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.07H530l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.16,0-.15.19,0,.22.29-.08h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.43-.08.42a.24.24,0,0,1-.09.15l-.23.15-.33.16A.17.17,0,0,1,530,836.81Zm-.09-.45h0l.38-.21.06-.29-.06-.22-.14-.14-.24-.06h-.1l-.18,0-.14.14-.05.2.05.31.15.09Z" />
                    <path
                        d="M531.31,836.81a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,531.31,836.81Z" />
                    <path
                        d="M532.44,836.81a.22.22,0,0,1-.22-.23v-1l-.17-.28h-.14l-.17.11-.27.28a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.17a.2.2,0,0,1,.13,0h.3a.23.23,0,0,1,.16.06l.15.15,0,.06.15.3a.23.23,0,0,1,0,.11v1.05A.23.23,0,0,1,532.44,836.81Z" />
                    <path
                        d="M533.57,836.81a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07H533l-.17.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.17a.22.22,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,533.57,836.81Z" />
                    <path
                        d="M535.76,836.81h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-1,.26-.46v-.09l-.11-.17-.15,0h-.31l-.18.09-.08.14a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.24.24,0,0,1,0-.12l.26-.34a.19.19,0,0,1,.09,0l.22-.08h.52l.23.08.09,0,.07.08.18.26a.17.17,0,0,1,0,.12V835a.17.17,0,0,1,0,.12l-.15.23-.13.28-.05.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M540.89,835.83l-.36-.08a.24.24,0,0,1-.1-.06l-.23-.23a.27.27,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.13.13,0,0,1,0-.08l.22-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.16,0-.15.27,0,.14L541,834l.36.08a.24.24,0,0,1,.11.06l.22.23a.1.1,0,0,1,0,.05l.15.31a.17.17,0,0,1,0,.1V835a.19.19,0,0,1,0,.1l-.15.3,0,.06-.22.23a.39.39,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.16-.15.11-.27-.11-.22-.16-.16-.24-.06-.21.06-.14.14,0,.2.06.33Z" />
                    <path
                        d="M543,835.83l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.23a.08.08,0,0,1,0,0l-.15-.45h0s0,0,0-.07v-.52a.14.14,0,0,1,0-.07l.3-.84a.25.25,0,0,1,.16-.14l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.23.23,0,0,1-.32-.06l-.1-.15-.21-.06h-.18l-.13,0-.15.4.23-.06h.21l.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.3V835l-.09.35a.24.24,0,0,1-.06.11l-.22.23a.39.39,0,0,1-.11.06Zm-.24-.51.28.06.22-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.16,0-.2.35.12.34Z" />
                    <path
                        d="M544.43,835.83a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,544.43,835.83Z" />
                    <path
                        d="M545.56,835.83a.22.22,0,0,1-.22-.23v-1.05l0-.13-.07,0H545l-.14.05-.27.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09-.05.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,545.56,835.83Z" />
                    <path
                        d="M546.7,835.83a.23.23,0,0,1-.23-.23v-1.05l0-.13-.07,0h-.23l-.14.05-.27.27a.23.23,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.31.08-.05L546,834h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,546.7,835.83Z" />
                    <path
                        d="M548.88,835.83h-1.43a.24.24,0,0,1-.21-.14.23.23,0,0,1,0-.25l1.05-1.05.19-.25.05-.16v-.14l0-.07-.09-.08-.14-.05H548l-.1,0,0,.07,0,.06-.09.08v.06a.23.23,0,1,1-.45,0v-.15a.23.23,0,0,1,.06-.16l.13-.12.06-.12a.22.22,0,0,1,.13-.12l.23-.07h.52l.22.07a.2.2,0,0,1,.09.06l.15.15,0,.06.08.15a.36.36,0,0,1,0,.1V834a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,548.88,835.83Z" />
                    <path
                        d="M409.14,869.16l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22,0-.06-.15-.45h0a.22.22,0,0,1,0-.08v-.52a.17.17,0,0,1,0-.07l.31-.84a.21.21,0,0,1,.15-.14l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.23.23,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.1-.15-.22,0h-.17l-.14,0-.15.4.23,0h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.33.33,0,0,1,.06.1l.07.3v.21l-.08.36a.33.33,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.24-.51.29.06.21-.05.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06h-.09l-.16.05-.11.15-.09.2.11.33Z" />
                    <path
                        d="M411.18,869.16l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.13.13,0,0,1,0-.08l.22-.37a.22.22,0,0,1,.14-.11l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.16,0-.15.26,0,.15.28-.07h.21l.36.08a.26.26,0,0,1,.13.1l.15.22.17.33a.3.3,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.16.3-.16.25a.26.26,0,0,1-.13.1l-.31.07Zm-.19-.51.24.06h.1l.16-.05.1-.15.12-.28-.22-.38-.22-.05h-.09l-.18.05-.14.14-.06.21.06.32Z" />
                    <path
                        d="M412.69,869.16a.23.23,0,0,1-.23-.23V867.5a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,412.69,869.16Z" />
                    <path
                        d="M413.82,869.16a.23.23,0,0,1-.23-.23v-1l-.13-.2h-.27l-.07,0-.27.28a.23.23,0,0,1-.32-.32l.3-.3.06,0,.15-.07a.17.17,0,0,1,.1,0h.38a.19.19,0,0,1,.1,0l.15.07a.27.27,0,0,1,.1.11l.15.3a.16.16,0,0,1,0,.1v1A.22.22,0,0,1,413.82,869.16Z" />
                    <path
                        d="M415,869.16a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0L414,868a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.08,0h.3l.07,0,.23.07a.25.25,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,415,869.16Z" />
                    <path
                        d="M417.14,869.16H415.7a.23.23,0,0,1-.21-.14.26.26,0,0,1,.05-.25l1-1,.26-.46v-.06l-.08-.09a.09.09,0,0,1,0-.06l0-.06-.1,0h-.3l-.14,0-.13.16v.09a.23.23,0,1,1-.45,0v-.15a.19.19,0,0,1,0-.1l.07-.15,0-.06.16-.15.08,0,.23-.08h.52l.23.08a.28.28,0,0,1,.13.11l.06.12.12.12a.26.26,0,0,1,.07.16v.23a.33.33,0,0,1,0,.13l-.15.22L417,868l0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,417.14,869.16Z" />
                    <path
                        d="M422.26,868.26l-.35-.09a.24.24,0,0,1-.11-.06l-.22-.22a.14.14,0,0,1-.05-.08l-.15-.38s0,0,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.16.16,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.31.22.22,0,0,1-.3-.11l-.05-.08-.18-.09h-.12l-.21.1-.17.23-.06.21.28-.14a.19.19,0,0,1,.1,0h.08a.17.17,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.5-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24-.05-.26-.15-.1-.22-.11-.38.22-.09.23.1.25Z" />
                    <path
                        d="M424.3,868.26l-.36-.09a.2.2,0,0,1-.13-.09l-.15-.23-.17-.41a.3.3,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.19.19,0,0,1,.1-.1l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.13-.12-.22-.11h-.12l-.18.09-.12.24-.05.17.2-.1a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.5-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.16-.51.22.06h.09l.18,0,.14-.14.07-.24-.06-.26-.15-.1-.28-.11-.22.11-.09.09-.1.25.12.29Z" />
                    <path
                        d="M425.81,868.26a.23.23,0,0,1-.23-.23V866.6a.23.23,0,1,1,.45,0V868A.23.23,0,0,1,425.81,868.26Z" />
                    <path
                        d="M426.94,868.26a.24.24,0,0,1-.23-.23V867l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3V868A.24.24,0,0,1,426.94,868.26Z" />
                    <path
                        d="M428.07,868.26a.24.24,0,0,1-.23-.23V867l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3V868A.23.23,0,0,1,428.07,868.26Z" />
                    <path
                        d="M430.26,868.26h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.18-.24.06-.24,0-.14-.08-.07-.14,0h-.3l-.1,0-.16.27a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.28.28,0,0,1,0-.12l.21-.35a.24.24,0,0,1,.14-.12l.22-.07h.52l.23.07.09.06.15.15a.19.19,0,0,1,.05.09l.08.22a.2.2,0,0,1,0,.07v.16s0,0,0,.07l-.08.22,0,.07-.23.3-.69.69h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,430.26,868.26Z" />
                    <path
                        d="M435.46,867.43h-.07a.23.23,0,0,1-.11,0l-.3-.15-.06,0-.22-.23a.24.24,0,0,1-.06-.11l-.08-.38a.27.27,0,0,1,0-.09v-.48l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.16.16,0,0,1,.08-.06l.3-.16.11,0h.22l.1,0,.31.16a.21.21,0,0,1,.11.13l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.14-.17-.09h-.12l-.21.11-.16.21,0,.21.42-.07.42.08a.24.24,0,0,1,.15.09l.15.23.16.32a.23.23,0,0,1,0,.11v.07a.17.17,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.11.09l-.37.15Zm-.24-.57.21.11.26-.11.11-.16.11-.22-.21-.36-.28-.06-.22.06-.14.14-.05.2.06.25Z" />
                    <path
                        d="M437.5,867.35l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23-.05-.07-.15-.38a.29.29,0,0,1,0-.09v-.52s0,0,0-.06l.15-.53.17-.34a.19.19,0,0,1,.12-.11l.37-.15.09,0h.15l.08,0,.38.15a.2.2,0,0,1,.13.14l.08.22a.24.24,0,0,1-.15.29.22.22,0,0,1-.28-.14l-.05-.13-.3-.1-.26.11-.11.22-.06.22h0l.43-.08.36.08a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06Zm-.19-.51.24.06.21,0,.14-.14.06-.24-.06-.21-.14-.14-.24-.06-.21.06-.15.16-.09.18.09.23Z" />
                    <path
                        d="M438.93,867.35a.23.23,0,0,1-.23-.23v-1.43a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,438.93,867.35Z" />
                    <path
                        d="M440.06,867.35a.22.22,0,0,1-.22-.23v-1l0-.2-.07,0h-.22l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.37a.2.2,0,0,1,.1-.08l.23-.07.07,0h.3l.07,0,.23.07a.26.26,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,440.06,867.35Z" />
                    <path
                        d="M441.27,867.35a.23.23,0,0,1-.23-.21l-.07-1-.05-.22-.07,0h-.22l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.37a.2.2,0,0,1,.1-.08l.23-.07.07,0h.3l.07,0,.23.07a.23.23,0,0,1,.15.17l.07.38.08,1a.22.22,0,0,1-.2.24Z" />
                    <path
                        d="M443.46,867.35H442a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.25-.44v-.13l0-.11-.06,0-.06,0-.09-.09h-.29l-.17.12-.05.18a.23.23,0,1,1-.45,0v-.07s0,0,0-.07l.08-.23A.41.41,0,0,1,442,865l.08-.07.26-.18a.19.19,0,0,1,.12,0h.46a.21.21,0,0,1,.16.07l.12.12.12.06a.24.24,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,0-.64.59h.94a.22.22,0,0,1,.22.22A.22.22,0,0,1,443.46,867.35Z" />
                    <path
                        d="M448.66,866.45h-.15a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.24.24,0,0,1-.09-.16l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.1-.18,0h-.17l-.17,0-.14.2,0,.21.28-.07h.21l.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.21l-.08.35a.28.28,0,0,1-.1.14l-.22.15-.33.16A.19.19,0,0,1,448.66,866.45Zm-.1-.46h.05l.38-.21.05-.22v-.1l-.06-.18-.14-.14-.24-.06h-.09l-.19,0-.14.14-.05.2.06.3.14.1Z" />
                    <path
                        d="M450.69,866.45h-.07a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.21.21,0,0,1-.1-.16l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.41-.08.36.09a.24.24,0,0,1,.11.06l.22.22.05.06.15.3a.36.36,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.21.21,0,0,1-.08.11l-.23.15-.32.16A.23.23,0,0,1,450.69,866.45Zm-.39-.67.14.1.22.1.38-.21.1-.26-.1-.21-.16-.16-.24-.06-.2.06-.14.14-.05.2Z" />
                    <path
                        d="M452.05,866.45a.23.23,0,0,1-.22-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,452.05,866.45Z" />
                    <path
                        d="M453.26,866.45a.24.24,0,0,1-.23-.22l-.07-1.05,0-.18-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.33.33,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3.08,1.09a.21.21,0,0,1-.2.24Z" />
                    <path
                        d="M454.39,866.45a.24.24,0,0,1-.23-.23v-1l-.17-.28h-.18l-.09.08-.4.32A.22.22,0,0,1,453,865l.51-.44a.24.24,0,0,1,.16-.07h.38a.24.24,0,0,1,.16.07l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,454.39,866.45Z" />
                    <path
                        d="M456.58,866.45h-1.51a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1.06.19-.24.05-.16v-.15l-.05-.14-.14,0h-.36l-.17.08,0,.11v.11a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.14.14,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.11-.13l.31-.15a.16.16,0,0,1,.1,0h.52l.23.07a.24.24,0,0,1,.09.06l.07.07a.47.47,0,0,1,.06.09l.07.23a.15.15,0,0,1,0,.07v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.7.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,456.58,866.45Z" />
                    <path
                        d="M461.55,865.54l-.35-.08a.28.28,0,0,1-.14-.1l-.15-.22a.14.14,0,0,1,0-.06l-.15-.45h0a.24.24,0,0,1,0-.08v-.44s0,0,0-.06l.15-.53.16-.4a.25.25,0,0,1,.16-.14l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.21,0h-.18l-.13,0-.16.46.19-.1.1,0h.15l.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.16-.5.22.05h.09l.19-.05.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06h0l-.23.11-.1.1-.09.19.11.33Z" />
                    <path
                        d="M463.67,865.54l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45a.21.21,0,0,1,0-.08V864l.07-.49,0-.08.23-.37a.22.22,0,0,1,.14-.11l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.16,0-.16.26,0,.15.28-.07h.21l.35.08a.24.24,0,0,1,.14.1l.15.22.16.33a.17.17,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3-.16.25a.24.24,0,0,1-.14.1l-.3.07Zm-.19-.51.24.06h.1L464,865l.1-.15.11-.28-.21-.38-.22-.05h-.09l-.19.05-.14.14,0,.21.06.32Z" />
                    <path
                        d="M465.17,865.54a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,465.17,865.54Z" />
                    <path
                        d="M466.31,865.54a.23.23,0,0,1-.23-.23v-1l-.13-.2h-.27l-.07,0-.28.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.05,0,.16-.07a.17.17,0,0,1,.1,0H466a.17.17,0,0,1,.1,0l.16.07a.36.36,0,0,1,.1.11l.15.3a.3.3,0,0,1,0,.1v1A.22.22,0,0,1,466.31,865.54Z" />
                    <path
                        d="M467.44,865.54a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.3l.08,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,467.44,865.54Z" />
                    <path
                        d="M469.62,865.54h-1.43a.23.23,0,0,1-.21-.14.24.24,0,0,1,0-.24l1-1.06.31-.44v-.06l-.08-.09a.09.09,0,0,1,0-.06l0-.06-.1,0h-.3l-.15,0-.12.16v.09a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.08-.15,0-.06.15-.15.09,0,.23-.08h.52l.22.08a.21.21,0,0,1,.13.11l.06.12.13.12a.25.25,0,0,1,.06.16v.23a.31.31,0,0,1,0,.13l-.39.53-.64.7h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M474.75,864.56l-.36-.08a.27.27,0,0,1-.1-.06l-.23-.23-.05-.07-.15-.38a.28.28,0,0,1,0-.09v-.52a.2.2,0,0,1,0-.07l.15-.52s0,0,0-.08l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.15l.09,0,.37.15a.22.22,0,0,1,.12.11l.08.15a.23.23,0,0,1-.41.2l0-.07-.32-.11-.2.11-.17.22-.06.21.28-.14.1,0h.08l.1,0,.3.15.06.05.22.22a.24.24,0,0,1,.06.11l.09.43-.09.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.05.14-.14.06-.24-.06-.21-.16-.16-.2-.1-.21.1-.17.18-.09.18.1.24Z" />
                    <path
                        d="M476.79,864.56l-.36-.08a.17.17,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.08-.38v-.57l.08-.56a.21.21,0,0,1,0-.11l.22-.3.08-.07.31-.15.1,0H477l.1,0,.31.15.06,0,.15.15a.24.24,0,0,1,0,.32.22.22,0,0,1-.32,0l-.13-.13-.22-.11h-.12l-.21.11-.15.21,0,.2.24-.12.1,0h.15l.1,0,.3.15.06.05.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.27.27,0,0,1-.1.06l-.31.07Zm-.19-.51.24.06h.1l.18-.05.14-.14.06-.24-.06-.21-.15-.16-.27-.11-.22.11-.16.16,0,.2.06.25Z" />
                    <path
                        d="M478.3,864.56a.23.23,0,0,1-.23-.23V862.9a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,478.3,864.56Z" />
                    <path
                        d="M479.43,864.56a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.3.3,0,0,1,.11-.07l.22-.07.07,0h.31l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,479.43,864.56Z" />
                    <path
                        d="M480.56,864.56a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0H480l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07.07,0h.31l.07,0,.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,480.56,864.56Z" />
                    <path
                        d="M482.75,864.56h-1.44a.24.24,0,0,1-.21-.14.26.26,0,0,1,0-.25l1-1,.26-.47-.16-.21-.13-.09h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.22.22,0,0,1,.13,0h.38a.17.17,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.15a.33.33,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,482.75,864.56Z" />
                    <path
                        d="M490.14,863.58h-.08l-.1,0-.3-.16-.25-.16a.25.25,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09L490,861h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.17.05-.14.19,0,.22.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23s0,0,.05.06l.15.3a.3.3,0,0,1,0,.1v.07a.15.15,0,0,1,0,.09l-.15.38a.19.19,0,0,1-.08.1l-.23.15-.32.17Zm-.4-.66.14.09.22.11.38-.22.1-.26-.1-.21-.16-.15-.24-.06-.2,0-.14.14-.05.21Z" />
                    <path
                        d="M492.25,863.58h-.08l-.08,0-.38-.15-.08,0-.15-.15a.19.19,0,0,1-.05-.09l-.15-.45h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.22.22,0,0,1,.16-.12l.38-.08h.19l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.11-.15-.21-.05h-.1l-.22.05-.1.2-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.09.43-.08.43a.23.23,0,0,1-.1.14l-.23.15-.32.17Zm-.33-.57.28.11.37-.2.06-.29-.06-.21-.14-.14-.24-.06-.26,0-.1.15-.09.2.1.31Z" />
                    <path
                        d="M493.6,863.58a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,493.6,863.58Z" />
                    <path
                        d="M494.74,863.58a.23.23,0,0,1-.23-.23V862.3l0-.16-.1-.07h-.17l-.17.11-.27.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,494.74,863.58Z" />
                    <path
                        d="M495.87,863.58a.23.23,0,0,1-.23-.23V862.3l0-.16-.1-.07h-.17l-.17.11-.26.28a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,495.87,863.58Z" />
                    <path
                        d="M498.05,863.58h-1.43a.24.24,0,0,1-.21-.14.26.26,0,0,1,0-.25l1.06-1.05.18-.25.05-.16v-.15l0-.1-.23-.09h-.3l-.18.09-.09.14a.23.23,0,1,1-.45,0v-.08a.19.19,0,0,1,0-.12l.25-.34.09-.05.23-.08h.52l.4.17a.2.2,0,0,1,.12.13l.07.22a.2.2,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.69.7h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M503.18,862.67l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.13-.08l.3-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0h-.17l-.17,0-.14.2,0,.21.42-.08.42.08a.24.24,0,0,1,.14.1l.15.23.17.32a.36.36,0,0,1,0,.1v.15a.43.43,0,0,1,0,.11l-.15.3-.17.25a.19.19,0,0,1-.14.09Zm-.18-.5.24.06.26-.06.1-.15.11-.27-.21-.38-.29-.06-.21.06-.14.14-.05.2.05.33Z" />
                    <path
                        d="M505.29,862.67l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.06-.09l-.15-.45a.22.22,0,0,1,0-.08v-.52a.17.17,0,0,1,0-.07l.15-.52,0-.08.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.19,0h-.17l-.16,0-.16.21-.06.21h0l.43-.09.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24v-.1l-.05-.18-.15-.14-.24-.06-.2.06-.16.16-.09.18.1.31Z" />
                    <path
                        d="M506.73,862.67a.22.22,0,0,1-.23-.22V861a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,506.73,862.67Z" />
                    <path
                        d="M507.86,862.67a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,507.86,862.67Z" />
                    <path
                        d="M509.06,862.67a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.21l-.1,0-.34.28a.23.23,0,0,1-.32,0,.21.21,0,0,1,0-.31l.37-.31.19-.1.11,0h.37l.23.08a.23.23,0,0,1,.13.11l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,509.06,862.67Z" />
                    <path
                        d="M511.25,862.67h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.24.05-.16v-.14l0-.07-.17-.13h-.36l-.11,0-.08.17v.1a.23.23,0,1,1-.45,0v-.15a.3.3,0,0,1,0-.1l.15-.3a.25.25,0,0,1,.13-.12l.23-.07h.52a.16.16,0,0,1,.1,0l.16.07,0,0,.15.15a.1.1,0,0,1,.05.06l.07.15a.17.17,0,0,1,0,.1v.22a.24.24,0,0,1,0,.08l-.07.22,0,.07-.23.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M516.23,861.69l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0h.22a.23.23,0,0,1,.11,0l.3.15.06,0,.15.15a.23.23,0,0,1-.32.32l-.13-.12-.22-.11h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.15a.19.19,0,0,1,.1,0l.3.15.25.16a.25.25,0,0,1,.1.15l.08.49-.08.36a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.31.08Zm-.19-.5.24.06h.1l.18,0,.14-.14.06-.24-.06-.26-.14-.1-.28-.11-.38.21,0,.25.06.25Z" />
                    <path
                        d="M518.34,861.69l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.17.17,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.11.31.23.23,0,0,1-.3-.11l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.08l.08,0,.38.15.07.05.15.15a.22.22,0,0,1,0,.08l.15.38a.11.11,0,0,1,0,.08v.07a.43.43,0,0,1,0,.11l-.15.3-.17.25a.19.19,0,0,1-.14.09Zm-.19-.5.24.06.26-.06.1-.15.11-.22-.11-.28-.08-.09-.29-.11-.36.21-.06.25.06.25Z" />
                    <path
                        d="M519.77,861.69a.22.22,0,0,1-.22-.22V860a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,519.77,861.69Z" />
                    <path
                        d="M521,861.69a.22.22,0,0,1-.23-.22v-1l-.08-.17-.1,0h-.22l-.1,0-.34.28a.22.22,0,0,1-.28-.35l.38-.31.19-.1.1,0h.37l.23.08a.2.2,0,0,1,.13.11l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,521,861.69Z" />
                    <path
                        d="M522.11,861.69a.23.23,0,0,1-.23-.22v-1l-.12-.21h-.22l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3.09-.05.23-.08h.37l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,522.11,861.69Z" />
                    <path
                        d="M524.3,861.69h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1,.32-.46-.16-.26-.11,0h-.36l-.07,0-.09.09,0,.18a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.25.25,0,0,1,0-.07l.07-.22a.15.15,0,0,1,.06-.09l.15-.15a.12.12,0,0,1,0-.05l.16-.07a.17.17,0,0,1,.1,0h.45l.07,0,.23.07a.28.28,0,0,1,.13.11l.07.16.14.2a.19.19,0,0,1,0,.12v.15a.2.2,0,0,1,0,.13l-.38.54-.65.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,524.3,861.69Z" />
                    <path
                        d="M529.5,860.86h-.16l-.38-.15a.28.28,0,0,1-.1-.09l-.15-.22-.17-.42h0a.17.17,0,0,1,0-.07v-.52a.17.17,0,0,1,0-.07l.15-.52.17-.34a.2.2,0,0,1,.11-.11l.38-.15.09,0h.15l.1,0,.3.15.09.08.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.25-.1-.26.1-.11.23-.05.2.45-.08.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23-.06,0-.3.15A.16.16,0,0,1,529.5,860.86Zm-.3-.56.26.11.21-.11.15-.15.06-.25,0-.2-.14-.14-.24-.06-.26.06-.2.33.12.29Z" />
                    <path
                        d="M531.61,860.86h-.15a.18.18,0,0,1-.1,0l-.3-.15-.06,0-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.09.08l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.12-.18-.2-.1h-.11l-.21.11-.16.21,0,.21.29-.07h.2l.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23-.05,0-.31.15A.16.16,0,0,1,531.61,860.86Zm-.09-.45h0l.22-.11.16-.15.06-.25-.06-.2-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.2,0,.25.15.15Z" />
                    <path d="M533,860.79a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.46,0v1.43A.23.23,0,0,1,533,860.79Z" />
                    <path
                        d="M534.1,860.79a.23.23,0,0,1-.23-.23v-.93l-.12-.27h-.22l-.12,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.37a.19.19,0,0,1,.1,0l.15.07a.25.25,0,0,1,.11.12l.15.38a.24.24,0,0,1,0,.08v1A.23.23,0,0,1,534.1,860.79Z" />
                    <path
                        d="M535.23,860.79a.22.22,0,0,1-.22-.23v-1l0-.2-.07,0h-.22l-.13,0-.26.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.38a.18.18,0,0,1,.1-.07l.23-.08H535l.23.08a.23.23,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,535.23,860.79Z" />
                    <path
                        d="M537.42,860.79H536a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-.95.13-.33a.18.18,0,0,1,0-.07l.09-.09v-.06l-.16-.21-.13-.09h-.25l-.21.16-.08.14a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.26-.33.26-.18a.19.19,0,0,1,.12,0h.38a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.22.22,0,0,1-.07.17l-.11.11-.14.34a.22.22,0,0,1,0,.08l-.64.59h.86a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M542.62,859.88h-.07a.16.16,0,0,1-.1,0l-.31-.15-.25-.17a.2.2,0,0,1-.09-.11l-.15-.45h0s0-.05,0-.07v-.52s0,0,0-.07l.15-.52a.2.2,0,0,1,0-.08l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.09a.2.2,0,0,1,.16.15l.08.22a.24.24,0,0,1-.15.29.22.22,0,0,1-.28-.15l0-.1-.18,0h-.17l-.17,0-.15.21-.07.22h0l.43-.09.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.3v.2l-.08.36a.21.21,0,0,1-.09.13l-.23.16-.33.16A.16.16,0,0,1,542.62,859.88Zm-.41-.67.16.11.21.1.37-.2L543,859v-.1l0-.18-.14-.14-.24-.06-.21.06-.15.16-.1.18Z" />
                    <path
                        d="M544.73,859.88h-.15a.18.18,0,0,1-.1,0l-.3-.15-.06,0-.15-.15a.41.41,0,0,1-.05-.09l-.15-.45h0s0-.05,0-.07v-.52s0,0,0-.07l.15-.52.17-.34a.2.2,0,0,1,.15-.12l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0h-.17l-.14,0-.11.21-.05.19.25-.06h.2l.36.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.16-.32.16A.22.22,0,0,1,544.73,859.88Zm-.09-.45h0l.38-.21.06-.28-.06-.22-.14-.14-.24-.06h-.1l-.16,0-.1.16-.1.19.11.31.09.09Z" />
                    <path
                        d="M546.09,859.88a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,546.09,859.88Z" />
                    <path
                        d="M547.22,859.88a.22.22,0,0,1-.22-.22V858.6l0-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,547.22,859.88Z" />
                    <path
                        d="M548.35,859.88a.22.22,0,0,1-.22-.22V858.6l0-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.31-.3.25-.18a.33.33,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,548.35,859.88Z" />
                    <path
                        d="M550.54,859.88h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1-1.06.19-.24,0-.16v-.15l0-.11-.23-.08h-.31l-.18.08-.08.13V858a.23.23,0,1,1-.45,0v-.15a.2.2,0,0,1,0-.13l.25-.33.09-.06.22-.07.08,0H550l.07,0,.41.16a.25.25,0,0,1,.12.13l.07.23a.15.15,0,0,1,0,.07v.22a.22.22,0,0,1,0,.08l-.07.22a.16.16,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M411.78,908.53h-.07a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.27.27,0,0,1-.09-.12l-.15-.45s0,0,0-.08V907a.2.2,0,0,1,0-.07l.15-.52,0-.08.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.21l.42.08a.22.22,0,0,1,.17.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.25,0h-.1l-.17,0-.16.21-.06.22h0l.43-.09.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.25.25,0,0,1-.1.15l-.22.15-.33.16A.17.17,0,0,1,411.78,908.53Zm-.41-.68.16.11.21.11.37-.21.05-.28-.05-.22-.14-.14-.24-.06-.21.06-.16.16-.09.18Z" />
                    <path
                        d="M413.89,908.53h-.15a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.22-.23A.19.19,0,0,1,413,908l-.07-.38a.14.14,0,0,1,0-.09V907l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08H414l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.16,0-.15.2,0,.21.29-.07h.2l.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.1.1,0,0,1-.05,0l-.31.15A.17.17,0,0,1,413.89,908.53Zm-.09-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.25.16.15Z" />
                    <path
                        d="M415.25,908.53a.24.24,0,0,1-.23-.23v-1.51a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,415.25,908.53Z" />
                    <path
                        d="M416.38,908.53a.23.23,0,0,1-.22-.23v-1.06l-.05-.16L416,907h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.33.33,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,416.38,908.53Z" />
                    <path
                        d="M417.51,908.53a.23.23,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06H417l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.33.33,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,417.51,908.53Z" />
                    <path
                        d="M419.7,908.53h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1.05-1.06.19-.24,0-.16v-.12l-.16-.21-.13-.09h-.25l-.21.16-.08.14a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.26-.33.26-.18a.2.2,0,0,1,.13,0h.37a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.23a.2.2,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,419.7,908.53Z" />
                    <path
                        d="M424.9,907.62h-.07l-.1,0-.3-.15-.26-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.43.14l0-.11-.18,0h-.17l-.17.05-.14.19,0,.22.41-.08.43.08a.23.23,0,0,1,.14.1l.15.22.16.33a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3a.09.09,0,0,1,0,.06l-.15.15a.14.14,0,0,1-.08.05l-.37.15A.15.15,0,0,1,424.9,907.62Zm-.39-.66.14.09.22.11.28-.11.1-.09.11-.27-.21-.37-.29-.06-.22,0-.14.14-.05.21Z" />
                    <path
                        d="M427,907.62h-.08l-.1,0-.3-.15-.25-.17a.18.18,0,0,1-.09-.12l-.15-.45h0a.19.19,0,0,1,0-.07v-.53s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.21l.42.08a.22.22,0,0,1,.17.15l.08.23a.23.23,0,0,1-.43.14l0-.1-.24-.05h-.11l-.17.05-.15.21-.06.21h0l.44-.08.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.31v.2l-.08.36a.2.2,0,0,1-.09.13l-.23.15-.32.17Zm-.42-.67.16.1.22.11.36-.21.06-.21v-.1l-.05-.18-.14-.14-.24-.06-.2,0-.16.16-.09.19Z" />
                    <path
                        d="M428.37,907.62a.22.22,0,0,1-.22-.23v-1.5a.23.23,0,1,1,.45,0v1.5A.23.23,0,0,1,428.37,907.62Z" />
                    <path
                        d="M429.5,907.62a.22.22,0,0,1-.22-.23v-1l0-.16-.1-.07H429l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,429.5,907.62Z" />
                    <path
                        d="M430.71,907.62a.23.23,0,0,1-.23-.21l-.07-1.06-.05-.17-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.07.3.09,1.1a.24.24,0,0,1-.21.24Z" />
                    <path
                        d="M432.9,907.62h-1.51a.23.23,0,0,1-.21-.14.24.24,0,0,1,.05-.25l1.06-1.05.18-.25,0-.16v-.15l0-.1-.17-.09H432l-.14.05,0,.14v.11a.23.23,0,1,1-.46,0v-.15a.25.25,0,0,1,0-.07l.07-.22a.15.15,0,0,1,.06-.09l.07-.08.09,0,.23-.08h.52l.1,0,.3.16a.2.2,0,0,1,.12.13l.07.22a.2.2,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,432.9,907.62Z" />
                    <path
                        d="M438,906.72l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.45v-.5l.08-.56a.11.11,0,0,1,0-.08l.22-.38a.26.26,0,0,1,.14-.1l.31-.08h.28l.35.08a.22.22,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06H438l-.15,0-.16.26,0,.22.24-.12a.16.16,0,0,1,.1,0h.15a.16.16,0,0,1,.1,0l.3.15.25.17a.22.22,0,0,1,.1.13l.07.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.3.08Zm-.19-.51.25.06h.09l.18,0,.14-.14.06-.24v-.1l-.05-.15-.15-.11-.28-.11-.38.21,0,.18.05.33Z" />
                    <path
                        d="M440.06,906.72l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.07-.45a.22.22,0,0,1,0-.08v-.49l.08-.49,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.43.15l0-.11-.18-.05h-.17l-.15,0-.16.26,0,.15.41-.07.35.08a.24.24,0,0,1,.11.06l.23.22,0,.06.15.3a.36.36,0,0,1,0,.1v.16a.36.36,0,0,1,0,.1l-.15.3-.05.06-.22.22a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.06.16-.16.11-.26-.11-.22-.16-.16-.24-.06-.2.06-.14.14-.05.2.05.33Z" />
                    <path
                        d="M441.49,906.72a.23.23,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,441.49,906.72Z" />
                    <path
                        d="M442.7,906.72a.22.22,0,0,1-.22-.21l-.12-1.2-.07,0h-.23l-.14.05-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08-.05.23-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3.08,1.09a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M443.83,906.72a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.27l-.11.05-.33.28a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.31l.38-.31.19-.1.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,443.83,906.72Z" />
                    <path
                        d="M446,906.72h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16v-.14l-.08-.17-.11,0h-.36l-.07,0-.13.17v.1a.23.23,0,1,1-.45,0v-.15a.16.16,0,0,1,0-.1l.07-.15.05-.06.15-.15.06-.05.15-.07a.16.16,0,0,1,.1,0h.52l.23.07a.22.22,0,0,1,.13.12l.15.3a.16.16,0,0,1,0,.1v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.69.69h1a.23.23,0,0,1,.23.23A.24.24,0,0,1,446,906.72Z" />
                    <path
                        d="M451.07,905.74l-.35-.09a.19.19,0,0,1-.14-.09l-.15-.23-.17-.41a.29.29,0,0,1,0-.09v-.53s0,0,0-.06l.15-.53.17-.34a.24.24,0,0,1,.1-.1l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.18.18,0,0,1,.09.08l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.12-.17-.2-.1h-.11l-.19.09-.12.24-.05.17.2-.1a.18.18,0,0,1,.1,0h.15a.16.16,0,0,1,.1,0l.31.15.05,0,.23.23a.21.21,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.17.17,0,0,1-.1.06l-.3.08Zm-.16-.51.22.06h.09l.19,0,.14-.14.06-.24-.06-.2-.16-.16-.26-.11-.2.1-.21.36.11.28Z" />
                    <path
                        d="M453.18,905.74l-.35-.09a.24.24,0,0,1-.11-.06l-.22-.22a.19.19,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.16.16,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.24.24,0,0,1-.31-.11l0-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.18.18,0,0,1,.1,0h.16l.38.15a.22.22,0,0,1,.1.09l.15.22.17.33a.18.18,0,0,1,0,.1v.08a.18.18,0,0,1,0,.1l-.15.3-.17.25a.18.18,0,0,1-.13.09l-.3.08Zm-.18-.51.24.06h.09l.16,0,.11-.16.1-.21-.21-.38-.26-.11-.21.11-.16.15-.05.2.05.25Z" />
                    <path
                        d="M454.69,905.74a.22.22,0,0,1-.22-.22l-.08-1.43a.22.22,0,0,1,.21-.24.23.23,0,0,1,.24.21l.08,1.44a.22.22,0,0,1-.22.23Z" />
                    <path
                        d="M455.82,905.74a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.27l-.07,0-.35.35a.23.23,0,0,1-.32-.32l.37-.38.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.16.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,455.82,905.74Z" />
                    <path
                        d="M457,905.74a.23.23,0,0,1-.22-.23v-1.06l0-.12-.07,0h-.23l-.14.05-.27.26a.23.23,0,1,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,457,905.74Z" />
                    <path
                        d="M459.14,905.74h-1.43a.24.24,0,0,1-.21-.14.23.23,0,0,1,0-.25l1-1.05.32-.39v-.07l-.16-.21-.13-.08h-.25l-.26.16,0,.14a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.07-.22a.2.2,0,0,1,.12-.13l.15-.08.2-.14a.28.28,0,0,1,.13,0h.37a.28.28,0,0,1,.13,0l.33.26.18.26a.19.19,0,0,1,0,.12V904a.23.23,0,0,1-.06.16l-.16.15-.2.28-.64.69h.91a.23.23,0,0,1,.23.23A.23.23,0,0,1,459.14,905.74Z" />
                    <path
                        d="M464.27,904.91h-.08a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.27.27,0,0,1-.09-.12l-.15-.45h0a.17.17,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53,0-.08.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.2l.43.08a.22.22,0,0,1,.17.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.25,0h-.11l-.16,0-.16.21-.06.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.25.25,0,0,1-.1.15l-.22.15-.33.16A.19.19,0,0,1,464.27,904.91Zm-.41-.68.16.11.21.11.36-.21.06-.28-.06-.22-.13-.14-.25-.06-.2.06-.16.16-.09.18Z" />
                    <path
                        d="M466.38,904.91h-.15a.17.17,0,0,1-.1,0l-.3-.15-.25-.16a.21.21,0,0,1-.1-.16l-.08-.44v-.57l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.29l.35.08a.26.26,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.17l-.17,0-.14.2,0,.21.28-.07h.21l.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23-.06,0-.3.15A.17.17,0,0,1,466.38,904.91Zm-.1-.46h.05l.22-.11.15-.15.06-.24-.05-.21-.14-.14-.24-.06h-.1l-.18.05-.14.14-.05.2.05.3.14.1Z" />
                    <path
                        d="M467.74,904.91a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,467.74,904.91Z" />
                    <path
                        d="M468.87,904.91a.23.23,0,0,1-.23-.23v-1.06l0-.16-.1-.06h-.17l-.16.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.19.19,0,0,1,.09.14l.08.3v1.11A.24.24,0,0,1,468.87,904.91Z" />
                    <path
                        d="M470,904.91a.24.24,0,0,1-.23-.23v-1.06l0-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.19.19,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,470,904.91Z" />
                    <path
                        d="M472.19,904.91h-1.44a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1-1,.27-.46v-.09l-.16-.21-.14-.09h-.24l-.21.16-.08.14a.23.23,0,1,1-.46,0v-.07a.28.28,0,0,1,0-.13l.26-.33.26-.18a.17.17,0,0,1,.12,0h.38a.17.17,0,0,1,.12,0l.34.25.18.26a.28.28,0,0,1,0,.13v.23a.28.28,0,0,1,0,.12l-.15.23-.14.27a.09.09,0,0,1,0,.06l-.67.67h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,472.19,904.91Z" />
                    <path
                        d="M477.32,903.93l-.36-.09a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.07-.13l-.07-.44a.11.11,0,0,1,0-.08v-.49l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.18,0h-.17l-.17,0-.15.2,0,.21.42-.07.36.08a.21.21,0,0,1,.1.06l.23.22,0,.06.15.3a.22.22,0,0,1,0,.1v.16a.19.19,0,0,1,0,.1l-.15.3,0,.06-.23.22a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.2-.06.16-.16.11-.26-.11-.22-.15-.16-.24-.06-.21.06-.14.14-.05.2.06.33Z" />
                    <path
                        d="M479.43,903.93l-.42-.08a.27.27,0,0,1-.15-.1l-.15-.23,0,0-.15-.45h0s0,0,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.2.2,0,0,1,.16-.12l.37-.08h.2l.35.08a.19.19,0,0,1,.14.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.22-.06h-.09l-.23,0-.1.2-.05.2.45-.07.36.08a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.17.17,0,0,1-.1.06Zm-.24-.51.28.06.22-.06.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.26.06-.2.34.11.34Z" />
                    <path
                        d="M480.86,903.93a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.24.24,0,0,1,480.86,903.93Z" />
                    <path
                        d="M482,903.93a.24.24,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,482,903.93Z" />
                    <path
                        d="M483.12,903.93a.23.23,0,0,1-.22-.23v-1.06l0-.12-.08,0h-.22l-.15,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,483.12,903.93Z" />
                    <path
                        d="M485.31,903.93h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1.06.19-.24.05-.16v-.14l0-.07-.17-.13h-.36l-.1,0,0,.07,0,.06-.08.08V902a.23.23,0,1,1-.45,0v-.15a.23.23,0,0,1,.06-.16l.13-.13.06-.11a.2.2,0,0,1,.13-.12l.22-.07h.53a.18.18,0,0,1,.1,0l.15.07.06,0,.15.15,0,.06.08.15a.3.3,0,0,1,0,.1v.23a.2.2,0,0,1,0,.07l-.08.22a.15.15,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,0,1,.23.23A.24.24,0,0,1,485.31,903.93Z" />
                    <path
                        d="M492.62,903l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.26.26,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.22.22,0,0,1,.05-.11l.22-.3a.16.16,0,0,1,.08-.06l.3-.16.1,0h.23l.1,0,.3.16s.05,0,.06,0l.15.15a.23.23,0,1,1-.32.32l-.12-.13-.22-.11h-.12l-.21.11-.16.21,0,.21.24-.13.1,0h.16l.1,0,.3.15.25.17a.22.22,0,0,1,.09.14l.08.5-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.18-.51.24.06h.1l.18-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.38.21-.05.26.05.25Z" />
                    <path
                        d="M494.74,903l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45s0-.05,0-.07v-.42L494,901a.22.22,0,0,1,0-.11l.22-.3a.16.16,0,0,1,.08-.06l.3-.16.11,0H495l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.12l-.21.11-.16.21,0,.21.24-.13.11,0h.07l.1,0,.3.15.25.17a.18.18,0,0,1,.08.09l.15.3a.17.17,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3,0,.06-.23.23a.21.21,0,0,1-.1.06Zm-.19-.51.24.06.2-.05.16-.16.11-.27-.1-.2-.17-.11-.22-.11-.36.21-.05.18.06.32Z" />
                    <path d="M496.17,903a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,496.17,903Z" />
                    <path
                        d="M497.37,903a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.14,0-.26.27a.23.23,0,1,1-.32-.32l.3-.3.09-.06.22-.07.08,0h.3l.07,0,.23.07a.25.25,0,0,1,.13.12l.15.3a.3.3,0,0,1,0,.1v1A.23.23,0,0,1,497.37,903Z" />
                    <path
                        d="M498.51,903a.23.23,0,0,1-.23-.23v-1l-.13-.2h-.27l-.07,0-.27.28a.24.24,0,0,1-.33,0,.24.24,0,0,1,0-.32l.31-.3a.1.1,0,0,1,.06,0l.15-.07a.17.17,0,0,1,.1,0h.37a.23.23,0,0,1,.11,0l.15.07a.27.27,0,0,1,.1.11l.15.3a.3.3,0,0,1,0,.1v1A.22.22,0,0,1,498.51,903Z" />
                    <path
                        d="M500.69,903h-1.51a.2.2,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1,.18-.25.06-.23-.09-.23-.1,0h-.36l-.07,0-.09.09-.05.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.15-.15.06,0,.15-.08.1,0h.53l.22.08a.21.21,0,0,1,.13.11l.08.15.09.26s0,0,0,.07v.15s0,0,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M505.82,902.12l-.42-.08a.24.24,0,0,1-.14-.1l-.15-.23-.18-.41a.28.28,0,0,1,0-.09v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.24.24,0,0,1,.1-.1l.3-.15a.22.22,0,0,1,.11,0H506a.16.16,0,0,1,.1,0l.31.15a.2.2,0,0,1,.08.08l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.19.09-.11.24-.05.17.2-.1a.16.16,0,0,1,.1,0h.15a.18.18,0,0,1,.1,0l.3.15.06,0,.22.23a.21.21,0,0,1,.06.1l.09.44-.09.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.24-.51.29.06.21-.06.14-.14.06-.24-.06-.2-.16-.16-.26-.11-.2.1-.21.36.11.28Z" />
                    <path
                        d="M507.86,902.12l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.22-.3.08-.07.31-.15a.16.16,0,0,1,.1,0h.22a.16.16,0,0,1,.1,0l.31.15a.24.24,0,0,1,.11.13l.08.23a.23.23,0,0,1-.43.14l-.05-.14-.17-.08h-.12l-.21.1-.15.21,0,.21.24-.12a.16.16,0,0,1,.1,0H508a.18.18,0,0,1,.1,0l.3.15a.18.18,0,0,1,.09.08l.15.22.16.33a.19.19,0,0,1,0,.1v.08a.22.22,0,0,1,0,.1l-.15.3-.16.25a.19.19,0,0,1-.14.09l-.3.08Zm-.19-.51.24.06h.1l.16,0,.1-.16.11-.21-.22-.39-.25-.1-.22.11-.16.15,0,.21.06.25Z" />
                    <path
                        d="M509.37,902.12a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,509.37,902.12Z" />
                    <path
                        d="M510.5,902.12a.23.23,0,0,1-.23-.23V901l-.13-.27h-.27l-.06,0-.27.34a.22.22,0,1,1-.35-.28l.3-.38a.16.16,0,0,1,.08-.06l.15-.08.1,0h.38l.1,0,.15.08a.22.22,0,0,1,.11.12l.15.37a.28.28,0,0,1,0,.09v1A.23.23,0,0,1,510.5,902.12Z" />
                    <path
                        d="M511.63,902.12a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13.05-.26.32a.22.22,0,1,1-.35-.28l.3-.38a.26.26,0,0,1,.11-.07l.22-.08h.45l.22.08a.2.2,0,0,1,.15.17l.08.37v1A.23.23,0,0,1,511.63,902.12Z" />
                    <path
                        d="M513.82,902.12h-1.44a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1-1,.14-.27,0-.06.08-.08v-.07l-.16-.21-.13-.08H513l-.26.16,0,.14a.23.23,0,1,1-.45,0v-.08s0,0,0-.07l.08-.22a.21.21,0,0,1,.11-.13l.15-.08.21-.14a.24.24,0,0,1,.12,0h.38a.24.24,0,0,1,.12,0l.34.26.18.26a.28.28,0,0,1,0,.12v.23a.24.24,0,0,1-.07.16l-.12.13-.14.26a.09.09,0,0,1,0,.06l-.67.67h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,513.82,902.12Z" />
                    <path
                        d="M518.94,901.21h-.07l-.1,0-.3-.15-.26-.17a.2.2,0,0,1-.08-.12l-.16-.45h0s0,0,0-.08v-.52s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.23-.3a.27.27,0,0,1,.12-.09l.3-.07H519l.42.08a.23.23,0,0,1,.17.15l.08.23a.23.23,0,0,1-.43.14l0-.1L519,899h-.1l-.17.05-.15.21-.07.21h0l.43-.08.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Zm-.41-.67.16.1.22.11.36-.2.05-.29-.05-.21-.14-.14-.24-.06-.21,0-.15.16-.1.19Z" />
                    <path
                        d="M521.05,901.21h-.15l-.1,0-.3-.15-.06,0-.15-.15a.19.19,0,0,1,0-.09l-.15-.45h0s0,0,0-.08v-.52l.08-.56a.19.19,0,0,1,.05-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.24.24,0,0,1-.06.32.23.23,0,0,1-.32-.07l-.1-.15-.21-.05h-.18l-.16.05-.15.19,0,.22.29-.07h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.08.44-.08.42a.19.19,0,0,1-.09.14l-.23.15-.32.17Zm-.09-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.1l-.16,0-.2.35.11.31.09.09Z" />
                    <path
                        d="M522.41,901.21a.22.22,0,0,1-.22-.23v-1.5a.23.23,0,1,1,.45,0V901A.23.23,0,0,1,522.41,901.21Z" />
                    <path
                        d="M523.54,901.21a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07H523l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3V901A.23.23,0,0,1,523.54,901.21Z" />
                    <path
                        d="M524.67,901.21a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.3V901A.23.23,0,0,1,524.67,901.21Z" />
                    <path
                        d="M526.86,901.21h-1.43a.23.23,0,0,1-.16-.39l1.05-1.05.19-.25,0-.16v-.15l0-.1-.23-.09H526l-.18.09-.08.13v.09a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.16a.19.19,0,0,1,0-.12l.25-.34.09-.05.22-.08h.53l.4.17a.2.2,0,0,1,.12.13l.07.22a.2.2,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M532,900.31l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.11.11,0,0,1,0-.08l.22-.38a.23.23,0,0,1,.14-.1l.3-.08h.29l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.14l0-.11-.18,0H532l-.15,0-.16.26,0,.15.41-.08.36.09a.24.24,0,0,1,.11.06l.22.22,0,.06.15.3a.43.43,0,0,1,0,.11v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.19.19,0,0,1-.14.09Zm-.19-.51.24.06.26-.06.1-.15.12-.27-.11-.22-.16-.16-.24-.06-.2.06-.14.14,0,.2,0,.33Z" />
                    <path
                        d="M534.1,900.31l-.36-.09a.21.21,0,0,1-.1-.06l-.23-.22a.41.41,0,0,1,0-.09l-.15-.45h0a.17.17,0,0,1,0-.07v-.52a.2.2,0,0,1,0-.07l.15-.52.16-.34a.2.2,0,0,1,.16-.12l.38-.08h.19l.42.08a.2.2,0,0,1,.17.15l.08.22a.23.23,0,1,1-.43.15l0-.11-.25,0h-.11l-.22,0-.1.2-.06.2.46-.08.35.09a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.09.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06Zm-.19-.51.25.06.2-.06.14-.14.06-.24v-.09l0-.19-.14-.14-.24-.06-.26.06-.19.34.1.32Z" />
                    <path
                        d="M535.53,900.31a.23.23,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,535.53,900.31Z" />
                    <path
                        d="M536.67,900.31a.23.23,0,0,1-.23-.23V899l0-.12-.07,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,536.67,900.31Z" />
                    <path
                        d="M537.8,900.31a.23.23,0,0,1-.23-.23V899l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.23.23,0,0,1,537.8,900.31Z" />
                    <path
                        d="M540.06,900.31h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.06.18-.24,0-.16v-.14l0-.07-.17-.13h-.36l-.11,0-.08.17v.1a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.17.17,0,0,1,0-.1l.15-.3a.22.22,0,0,1,.13-.12l.23-.07h.52a.16.16,0,0,1,.1,0l.15.08.06,0,.15.15,0,.06.07.15a.16.16,0,0,1,0,.1v.23a.2.2,0,0,1,0,.07l-.07.22a.16.16,0,0,1,0,.07l-.22.3-.69.69h1a.22.22,0,0,1,.22.23A.23.23,0,0,1,540.06,900.31Z" />
                    <path
                        d="M545.11,899.33l-.36-.09a.27.27,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.24.24,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.23.23,0,0,1-.31-.11l0-.08-.19-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.31.15.05,0,.15.15a.18.18,0,0,1,0,.08l.16.38a.19.19,0,0,1,0,.08v.08l-.08.35a.24.24,0,0,1-.06.11l-.23.22a.17.17,0,0,1-.1.06l-.3.08Zm-.18-.51.24.06h.09l.19,0,.14-.14,0-.21-.12-.3-.09-.09-.27-.11-.22.11-.15.15,0,.2,0,.25Z" />
                    <path
                        d="M547.22,899.33l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15a.18.18,0,0,1,.1,0h.23a.18.18,0,0,1,.1,0l.3.15a.19.19,0,0,1,.1.1l.08.15a.24.24,0,0,1-.1.31.24.24,0,0,1-.31-.11l0-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.31.31,0,0,1,.09.11l.15.38a.19.19,0,0,1,0,.08v.08a.18.18,0,0,1,0,.1l-.15.3,0,.06-.23.22a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.06.16-.16.11-.21-.11-.26-.17-.11-.21-.1-.36.2,0,.25,0,.25Z" />
                    <path
                        d="M548.66,899.33a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,548.66,899.33Z" />
                    <path
                        d="M549.79,899.33a.23.23,0,0,1-.23-.23V898l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.23.23,0,0,1,549.79,899.33Z" />
                    <path
                        d="M551,899.33a.23.23,0,0,1-.22-.23v-1l-.13-.21h-.27l-.1.05-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.31.19-.1.1,0h.38l.1,0,.15.08a.27.27,0,0,1,.11.1l.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,551,899.33Z" />
                    <path
                        d="M553.18,899.33h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.06.18-.24,0-.24-.08-.18-.13-.08h-.3l-.08.08-.06,0-.07,0,0,.14a.23.23,0,1,1-.45,0v-.08a.2.2,0,0,1,0-.07l.07-.22a.2.2,0,0,1,.12-.13l.12-.06.12-.13a.23.23,0,0,1,.16-.06h.45a.28.28,0,0,1,.13,0l.33.26a.15.15,0,0,1,.06.09l.07.22a.25.25,0,0,1,0,.07v.15a.24.24,0,0,1,0,.08l-.07.22,0,.07-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,553.18,899.33Z" />
                    <path
                        d="M426.56,931.68h-.07a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.08-.56a.18.18,0,0,1,0-.1l.22-.31a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.08a.2.2,0,0,1,.16.15l.08.22a.24.24,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.19,0,.22.42-.08.36.08a.17.17,0,0,1,.1.06l.23.23a.1.1,0,0,1,0,0l.15.31a.17.17,0,0,1,0,.1v.07a.17.17,0,0,1,0,.1l-.15.3-.16.26a.31.31,0,0,1-.11.08l-.37.15Zm-.39-.67.14.1.22.11.26-.1.11-.17.11-.22-.11-.2-.15-.16-.24-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M428.67,931.68h-.07a.17.17,0,0,1-.1,0l-.3-.15a.09.09,0,0,1-.06,0l-.23-.23a.18.18,0,0,1-.05-.07l-.15-.38h0v0h0s0,0,0-.07v-.52s0,0,0-.06l.15-.53.17-.34a.22.22,0,0,1,.16-.12l.37-.08h.2l.42.08a.2.2,0,0,1,.17.15l.08.22a.23.23,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.1-.24,0h-.11l-.22,0-.11.2,0,.2.45-.07.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.23.23,0,0,1,428.67,931.68Zm-.24-.57.21.11.2-.11L429,931l.06-.24-.06-.21-.14-.14-.24-.06-.26.06-.19.34.09.24Z" />
                    <path
                        d="M430,931.68a.22.22,0,0,1-.22-.23v-1.51a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,430,931.68Z" />
                    <path
                        d="M431.16,931.68a.22.22,0,0,1-.22-.23v-1.06l-.05-.15-.1-.07h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.16a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,431.16,931.68Z" />
                    <path
                        d="M432.29,931.68a.22.22,0,0,1-.22-.23v-1.06l-.05-.15-.1-.07h-.16l-.17.11-.27.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.27-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.16a.22.22,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,432.29,931.68Z" />
                    <path
                        d="M433.05,931.68a.24.24,0,0,1-.21-.14.22.22,0,0,1,.05-.25l1.05-1.06.19-.24.05-.16v-.15l0-.1-.07,0-.06,0-.09-.09h-.29l-.16.12-.05.19a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08s0,0,0-.07l.08-.23a.22.22,0,0,1,.05-.08l.08-.08.26-.18a.28.28,0,0,1,.13,0H434a.24.24,0,0,1,.16.07l.12.12.12.06a.2.2,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07v.23a.17.17,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.22.3-.67.67.93-.05a.22.22,0,0,1,.23.21.22.22,0,0,1-.21.24l-1.51.08Z" />
                    <path
                        d="M439.61,930.77l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.28-.07h.21l.36.08a.26.26,0,0,1,.13.1l.15.23.17.32a.36.36,0,0,1,0,.1v.15l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.08Zm-.19-.5.24.06h.1l.18-.05.14-.14.06-.24v0l-.22-.39-.21-.05h-.1l-.18.06-.14.14-.06.2.06.32Z" />
                    <path
                        d="M441.8,930.77h-.08l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.17.17,0,0,1,0-.07v-.5l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.31-.07H442l.35.08a.22.22,0,0,1,.16.15l.08.23a.24.24,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23,0,.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.31-.08.08-.23.15-.32.17Zm-.4-.66.14.1.22.1.39-.22.1-.24-.11-.23-.16-.15-.24-.06-.2.06-.14.14,0,.2Z" />
                    <path
                        d="M443.15,930.77a.22.22,0,0,1-.22-.22V929a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,443.15,930.77Z" />
                    <path
                        d="M444.28,930.77a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.21.21,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,444.28,930.77Z" />
                    <path
                        d="M445.49,930.77a.22.22,0,0,1-.22-.22v-1l-.17-.28h-.19l-.09.09-.39.32a.23.23,0,0,1-.29-.36l.51-.43a.21.21,0,0,1,.16-.07h.38a.2.2,0,0,1,.16.07l.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v1.06A.22.22,0,0,1,445.49,930.77Z" />
                    <path
                        d="M447.68,930.77h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15v-.16l-.05-.14-.14,0h-.36l-.17.08,0,.1v.12a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.15a.24.24,0,0,1,0-.08l.07-.22a.2.2,0,0,1,.12-.13l.3-.15a.17.17,0,0,1,.1,0h.52l.23.08.09,0,.07.08a.15.15,0,0,1,.06.09l.07.22a.22.22,0,0,1,0,.08V929a.15.15,0,0,1,0,.07l-.07.23,0,.06-.22.31-.69.69h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,447.68,930.77Z" />
                    <path
                        d="M452.73,929.79l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0H453a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,1,1-.32.32l-.12-.12-.23-.11h-.12l-.2.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15.26.16a.21.21,0,0,1,.09.15l.08.49-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07Zm-.19-.5.25.06h.09l.19-.05.14-.14.06-.24-.06-.26-.15-.1-.28-.12-.37.21-.05.26.05.25Z" />
                    <path
                        d="M454.84,929.79l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23l.36.08a.23.23,0,0,1,.15.15l.08.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.11l-.21.11-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15.08.05.15.15,0,.06.15.3a.36.36,0,0,1,0,.1V929a.3.3,0,0,1,0,.1l-.15.31-.17.25a.19.19,0,0,1-.14.09Zm-.18-.5.24.06.26-.06.1-.15.11-.28-.11-.22-.09-.09-.28-.11-.37.2,0,.26,0,.25Z" />
                    <path
                        d="M456.28,929.79a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,456.28,929.79Z" />
                    <path
                        d="M457.48,929.79a.22.22,0,0,1-.22-.22v-1l-.13-.2h-.27l-.11,0-.33.28a.23.23,0,0,1-.29-.36l.38-.3.19-.1a.18.18,0,0,1,.1,0h.38a.16.16,0,0,1,.1,0l.15.08a.17.17,0,0,1,.1.1l.15.3a.17.17,0,0,1,0,.1v1.06A.22.22,0,0,1,457.48,929.79Z" />
                    <path
                        d="M458.61,929.79a.22.22,0,0,1-.22-.22v-1.06l0-.12-.08,0h-.22l-.14,0-.27.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.3v1.12A.22.22,0,0,1,458.61,929.79Z" />
                    <path
                        d="M460.8,929.79h-1.43a.23.23,0,0,1-.21-.13.23.23,0,0,1,0-.25l1-1,.32-.46-.16-.26-.1,0h-.37l-.07,0-.08.09-.05.18a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.15-.15.06,0,.15-.07a.17.17,0,0,1,.1,0h.52l.23.08a.24.24,0,0,1,.13.11l.08.15.13.21a.17.17,0,0,1,0,.12V928a.2.2,0,0,1,0,.13l-.38.54-.64.69h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M465.85,928.89l-.35-.09a.24.24,0,0,1-.11-.06l-.23-.22a.2.2,0,0,1,0-.08l-.16-.37a.28.28,0,0,1,0-.09v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15h.32l.37.15a.27.27,0,0,1,.14.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.12-.3-.1-.26.1-.11.23-.06.21.28-.14.1,0h.08l.1,0,.3.15.06,0,.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.22a.24.24,0,0,1-.11.06Zm-.18-.51.24.06.2-.06.14-.14.06-.24-.06-.2-.15-.16-.21-.1-.2.1-.18.17-.09.18.1.24Z" />
                    <path
                        d="M467.89,928.89l-.36-.09-.1,0-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.09.08.15.23a.23.23,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.12-.18-.2-.1h-.12l-.2.1-.16.22,0,.2.24-.12.1,0H468l.1,0,.3.15.06,0,.23.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06l-.31.08Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24-.05-.2-.16-.16-.27-.11-.22.11-.15.16-.06.2.06.25Z" />
                    <path
                        d="M469.4,928.89a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,469.4,928.89Z" />
                    <path
                        d="M470.53,928.89a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0H470l-.13,0-.26.32a.22.22,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07l.22-.08h.45l.22.08a.2.2,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,470.53,928.89Z" />
                    <path
                        d="M471.66,928.89a.23.23,0,0,1-.23-.23v-1l0-.2-.07,0h-.23l-.13,0-.25.32a.24.24,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.38a.26.26,0,0,1,.11-.07L471,927h.45l.23.08a.24.24,0,0,1,.15.17l.07.38v1A.23.23,0,0,1,471.66,928.89Z" />
                    <path
                        d="M473.85,928.89h-1.44a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1-1,.14-.27a.21.21,0,0,1,0-.06l.08-.08V927l-.16-.21-.13-.08H473l-.21.16-.08.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.28.28,0,0,1,0-.13l.26-.34.26-.18a.24.24,0,0,1,.12,0h.38a.24.24,0,0,1,.12,0l.34.26.18.26a.28.28,0,0,1,0,.13v.22a.24.24,0,0,1-.07.16l-.12.13-.14.27,0,.06-.67.66h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,473.85,928.89Z" />
                    <path
                        d="M479.05,928H479l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.09.09,0,0,1,0-.07v-.5l.07-.56a.24.24,0,0,1,0-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0H479l-.16,0-.15.2,0,.21.42-.08.36.08a.21.21,0,0,1,.1.06l.23.23,0,.06.15.3a.18.18,0,0,1,0,.1v.08a.22.22,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.09.1l-.22.15-.33.17Zm-.4-.66.15.1.21.1.38-.21.11-.26-.11-.22-.15-.15-.24-.06-.21.06-.14.14,0,.2Z" />
                    <path
                        d="M481.16,928H481l-.37-.16-.08,0-.15-.16a.16.16,0,0,1-.06-.08l-.15-.46h0a.13.13,0,0,1,0-.06v-.53a.13.13,0,0,1,0-.06l.15-.53.17-.34a.26.26,0,0,1,.15-.12l.38-.07h.2l.35.08a.24.24,0,0,1,.14.1l.15.22a.23.23,0,0,1-.38.26l-.1-.16-.22-.05h-.09l-.23,0-.1.21-.05.19.45-.07.36.08a.21.21,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Zm-.32-.57.28.11.37-.2.05-.29-.05-.21-.14-.14-.24-.06-.26.06-.2.34.11.31Z" />
                    <path
                        d="M482.52,928a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,482.52,928Z" />
                    <path
                        d="M483.65,928a.23.23,0,0,1-.23-.22V926.7l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.31v1.11A.23.23,0,0,1,483.65,928Z" />
                    <path
                        d="M484.78,928a.22.22,0,0,1-.22-.22V926.7l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,484.78,928Z" />
                    <path
                        d="M494.28,927.08l-.35-.09-.11,0-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.23.23,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.16.05-.15.19,0,.22.29-.08h.2l.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.3v.21l-.08.35a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.51.24.06h.09l.19,0,.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.2.06.33Z" />
                    <path
                        d="M496.39,927.08,496,927a.24.24,0,0,1-.11-.06l-.22-.22a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.18,0h-.18l-.16.05-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.22,0,.06.15.31a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3,0,.06-.23.23-.1,0Zm-.18-.51.24.06.2-.06.16-.15.11-.27-.11-.22-.15-.16-.24-.06-.21.06-.14.14-.05.2.06.33Z" />
                    <path
                        d="M497.83,927.08a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,497.83,927.08Z" />
                    <path
                        d="M499,927.08a.22.22,0,0,1-.22-.23v-1l-.09-.17-.1,0h-.23l-.14.05L498,926a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09-.05l.22-.08h.45l.23.08a.28.28,0,0,1,.13.11l.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,499,927.08Z" />
                    <path
                        d="M500.17,927.08a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.07,0-.28.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.05,0,.16-.07a.17.17,0,0,1,.1,0h.37a.17.17,0,0,1,.1,0l.16.07a.32.32,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,500.17,927.08Z" />
                    <path
                        d="M502.35,927.08h-1.51a.22.22,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1.06.18-.24.06-.16v-.14l-.09-.17-.1,0h-.36l-.08,0-.13.17v.1a.23.23,0,1,1-.45,0V925a.36.36,0,0,1,0-.1l.08-.15,0-.06.15-.15.06,0,.15-.08.1,0h.53l.22.07a.2.2,0,0,1,.13.12l.15.3a.19.19,0,0,1,0,.1v.23s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,502.35,927.08Z" />
                    <path
                        d="M507.4,926.17l-.35-.08a.21.21,0,0,1-.13-.09l-.16-.23-.17-.41a.17.17,0,0,1,0-.1v-.58l.16-.53.16-.34a.19.19,0,0,1,.1-.1l.3-.15.1,0h.23a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.15.15a.23.23,0,0,1-.32.32l-.12-.12-.22-.11h-.12l-.19.09-.11.23-.05.17.19-.09a.19.19,0,0,1,.1,0h.16a.19.19,0,0,1,.1,0l.3.15.25.16a.31.31,0,0,1,.1.15l.08.49-.09.36a.21.21,0,0,1-.06.1L508,926a.24.24,0,0,1-.11.06l-.3.08Zm-.16-.5.22.06h.1l.18-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.22.11-.09.1-.1.25.11.29Z" />
                    <path
                        d="M509.52,926.17l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.24.24,0,0,1-.06-.11l-.08-.37v-.58l.07-.56a.31.31,0,0,1,.05-.1l.22-.31a.24.24,0,0,1,.08-.06l.31-.15a.17.17,0,0,1,.1,0h.22a.17.17,0,0,1,.1,0l.31.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,0,1-.4.2l0-.08-.19-.09h-.12l-.21.1-.16.21,0,.21.25-.12a.17.17,0,0,1,.1,0h.15a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.22.22,0,0,1,.05.08l.15.37a.29.29,0,0,1,0,.09v.07a.17.17,0,0,1,0,.1l-.15.31-.16.25a.23.23,0,0,1-.14.09l-.3.08Zm-.19-.5.24.06h.1l.16-.05.1-.15.11-.22-.11-.28-.09-.1-.27-.11-.38.21-.05.26.06.25Z" />
                    <path
                        d="M511,926.17a.23.23,0,0,1-.23-.21l-.08-1.44a.22.22,0,0,1,.22-.23.25.25,0,0,1,.24.21l.07,1.43a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M512.16,926.17a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.27l-.07,0-.27.28a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.3a.09.09,0,0,1,.06,0l.15-.08a.16.16,0,0,1,.1,0h.37a.22.22,0,0,1,.11,0l.15.08a.19.19,0,0,1,.1.1l.15.3a.3.3,0,0,1,0,.1V926A.22.22,0,0,1,512.16,926.17Z" />
                    <path
                        d="M513.29,926.17a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31V926A.22.22,0,0,1,513.29,926.17Z" />
                    <path
                        d="M515.47,926.17H514a.22.22,0,0,1-.16-.38l1-1,.31-.46L515,924l-.1,0h-.3l-.15,0-.07.08,0,.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,0-.09l.15-.15.09,0,.23-.08H515l.22.08a.21.21,0,0,1,.13.11l.08.15.14.21a.25.25,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.39.54-.64.69h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M520.6,925.27h-.07a.17.17,0,0,1-.1,0l-.31-.15a.1.1,0,0,1,0,0l-.23-.23a.18.18,0,0,1-.05-.07l-.15-.38a.29.29,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53a.3.3,0,0,1,0-.08l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.21l.42.08a.22.22,0,0,1,.17.15l.08.22a.24.24,0,0,1-.15.29.22.22,0,0,1-.28-.14l0-.1-.25,0h-.1l-.17,0-.16.2-.06.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.1.1,0,0,1,0,0l-.31.15A.17.17,0,0,1,520.6,925.27Zm-.24-.57.2.11.21-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06-.21.06-.16.16-.08.18.09.24Z" />
                    <path
                        d="M522.71,925.27h-.15a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.16.16,0,0,1,.09.07l.15.23a.23.23,0,0,1-.38.25l-.11-.18-.2-.1h-.12l-.21.11-.16.21,0,.22.29-.08h.2l.36.08a.24.24,0,0,1,.11.06l.22.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23-.06,0-.3.15A.23.23,0,0,1,522.71,925.27Zm-.09-.46h0l.22-.11.16-.15.06-.24-.06-.21-.14-.14-.24-.06h-.1l-.18.05-.14.14,0,.2,0,.25.16.15Z" />
                    <path
                        d="M524.07,925.27a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22V925A.23.23,0,0,1,524.07,925.27Z" />
                    <path
                        d="M525.2,925.19A.22.22,0,0,1,525,925v-1l-.05-.2-.07,0h-.19l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0H525l.23.07a.23.23,0,0,1,.15.17l.07.38v1A.22.22,0,0,1,525.2,925.19Z" />
                    <path
                        d="M526.33,925.19a.22.22,0,0,1-.22-.22v-1l-.05-.2-.06,0h-.23l-.13,0-.26.33a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.37a.2.2,0,0,1,.1-.08l.23-.07h.44l.23.07a.23.23,0,0,1,.15.17l.08.38v1A.22.22,0,0,1,526.33,925.19Z" />
                    <path
                        d="M528.52,925.19h-1.43a.22.22,0,0,1-.21-.14.23.23,0,0,1,0-.25l1-1,.25-.44v-.1l-.16-.21-.13-.09h-.25l-.21.16-.08.15a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.22.22,0,0,1,0-.13l.25-.33.26-.18a.28.28,0,0,1,.13,0H528a.28.28,0,0,1,.13,0l.33.25.18.26a.22.22,0,0,1,0,.13v.23a.36.36,0,0,1,0,.1l-.08.15-.23.39,0,0-.64.59h.86a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M533.72,924.36h-.07l-.1,0-.3-.15L533,924a.2.2,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23,0,.06.16.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.16.31a.18.18,0,0,1-.07.08l-.23.15-.32.17Zm-.39-.66.14.1.22.1.39-.22.1-.25-.11-.22-.16-.15-.24-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M535.84,924.36h-.16l-.38-.16a.18.18,0,0,1-.08-.05l-.15-.15a.22.22,0,0,1-.05-.08l-.15-.46a.19.19,0,0,1,0-.07v-.53s0,0,0-.06l.16-.53.16-.34a.25.25,0,0,1,.16-.12l.38-.07h.19l.42.08a.24.24,0,0,1,.17.15l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.24-.05h-.11l-.22,0-.11.21,0,.19.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.09.44-.09.42a.19.19,0,0,1-.09.14l-.23.15-.32.17Zm-.33-.57.28.11.37-.2.06-.29-.06-.21-.14-.14-.24-.06-.26.06-.19.34.1.31Z" />
                    <path
                        d="M537.19,924.36a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,537.19,924.36Z" />
                    <path
                        d="M538.32,924.36a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.27-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,538.32,924.36Z" />
                    <path
                        d="M539.46,924.36a.22.22,0,0,1-.23-.22v-1.06l-.05-.16-.09-.07h-.17l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.07.31v1.11A.22.22,0,0,1,539.46,924.36Z" />
                    <path
                        d="M541.72,924.36h-1.51a.23.23,0,0,1-.21-.14.22.22,0,0,1,0-.24l1.05-1.06.19-.25.05-.15v-.16l0-.1-.17-.08h-.37l-.17.08-.09.13v.09a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.2.2,0,0,1,0-.13l.25-.34.09-.05.23-.08h.52a.17.17,0,0,1,.1,0l.3.15a.2.2,0,0,1,.12.13l.07.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.07.23a.21.21,0,0,1,0,.06l-.22.31-.7.69h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,541.72,924.36Z" />
                    <path
                        d="M546.77,923.38l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.17.17,0,0,1,0-.07V922l.08-.56a.16.16,0,0,1,0-.09l.22-.37a.36.36,0,0,1,.14-.11l.31-.07H547l.35.08a.22.22,0,0,1,.16.15l.08.23a.24.24,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.11-.18,0h-.17l-.15,0-.16.26,0,.22.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.15.15.05.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3-.17.26a.24.24,0,0,1-.13.09l-.3.08Zm-.19-.5.25.06h.09l.16,0,.11-.15.11-.28-.11-.22-.1-.09-.27-.12-.38.22,0,.18.05.32Z" />
                    <path
                        d="M548.88,923.38l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.09.09,0,0,1,0-.07V922l.08-.56a.16.16,0,0,1,0-.09l.23-.37a.26.26,0,0,1,.14-.11l.3-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.15,0-.16.26,0,.15.41-.08.35.08a.24.24,0,0,1,.11.06l.23.23,0,.06.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.3a.15.15,0,0,1,0,.06l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.16-.16.11-.27-.11-.22-.16-.15-.24-.06-.2.06-.14.14,0,.2,0,.32Z" />
                    <path
                        d="M550.31,923.38a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,550.31,923.38Z" />
                    <path
                        d="M551.45,923.38a.22.22,0,0,1-.23-.22V922.1l0-.13-.08,0h-.23l-.14,0-.27.26a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.3a.16.16,0,0,1,.08-.06l.23-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.3v1.12A.22.22,0,0,1,551.45,923.38Z" />
                    <path
                        d="M552.65,923.38a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0H552l-.11,0-.33.28a.23.23,0,0,1-.29-.36l.38-.3.19-.1a.18.18,0,0,1,.1,0h.38l.22.07a.2.2,0,0,1,.13.12l.15.3a.17.17,0,0,1,0,.1v1.06A.22.22,0,0,1,552.65,923.38Z" />
                    <path
                        d="M554.84,923.38h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25.05-.16v-.13l-.08-.17-.1,0h-.38l-.11,0-.08.17v.1a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.22.22,0,0,1,0-.11l.15-.3a.24.24,0,0,1,.13-.11l.23-.08h.59l.23.08a.24.24,0,0,1,.13.11l.15.3a.23.23,0,0,1,0,.11v.22a.14.14,0,0,1,0,.07l-.07.23,0,.06-.22.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M428.3,971.27l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.22-.17-.42h0v0h0a.17.17,0,0,1,0-.07v-.52s0-.05,0-.07l.15-.52.17-.34a.19.19,0,0,1,.12-.11l.37-.15a.15.15,0,0,1,.09,0h.15a.11.11,0,0,1,.08,0l.38.15a.25.25,0,0,1,.12.11l.07.15a.22.22,0,0,1-.1.3.22.22,0,0,1-.3-.1l0-.08-.32-.1-.26.1-.11.23-.05.18.29-.11a.15.15,0,0,1,.09,0h.07l.1,0,.31.15.05,0,.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06Zm-.25-.51.29.06.22-.05.14-.14.06-.25-.06-.2-.16-.16-.21-.1-.26.1-.2.35.11.29Z" />
                    <path
                        d="M430.33,971.27l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.06.05.15.15a.22.22,0,0,1,0,.32.23.23,0,0,1-.32,0l-.12-.13-.22-.11h-.12l-.21.11-.16.21,0,.2.24-.12.1,0h.15l.11,0,.3.15.06,0,.22.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.07Zm-.18-.51.24.06h.09l.19-.05.14-.14.06-.25-.06-.2-.16-.16-.26-.11-.22.11-.16.16-.05.2.05.25Z" />
                    <path
                        d="M431.84,971.27a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0V971A.23.23,0,0,1,431.84,971.27Z" />
                    <path
                        d="M433,971.27a.22.22,0,0,1-.22-.23v-1l0-.13-.08,0h-.22l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.08h.44l.23.08a.24.24,0,0,1,.15.16l.07.3V971A.23.23,0,0,1,433,971.27Z" />
                    <path
                        d="M434.1,971.27a.22.22,0,0,1-.22-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.08h.44l.23.08a.24.24,0,0,1,.15.16l.07.3V971A.23.23,0,0,1,434.1,971.27Z" />
                    <path
                        d="M436.29,971.27h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.47-.16-.21-.13-.09h-.25l-.21.16-.08.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.33.26-.18a.2.2,0,0,1,.13,0h.37a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.15a.17.17,0,0,1,0,.12l-.15.23-.13.28-.05.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M441.49,970.44h-.07l-.1,0-.3-.16a.09.09,0,0,1-.06,0l-.23-.22a.34.34,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.18.18,0,0,1,.12-.09l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.19,0,.22.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23a.09.09,0,0,1,0,.06l.16.3a.3.3,0,0,1,0,.1v.07a.43.43,0,0,1,0,.11l-.16.3,0,.06-.22.22-.06,0-.3.16Zm-.24-.56.21.1.2-.1.18-.18.1-.2-.1-.21-.16-.15-.24-.06-.2,0-.14.14-.05.2.05.25Z" />
                    <path
                        d="M443.61,970.44h-.08l-.08,0-.38-.15a.2.2,0,0,1-.1-.08l-.16-.23-.17-.41a.31.31,0,0,1,0-.1v-.58l.16-.53L443,968a.25.25,0,0,1,.12-.11l.38-.15.08,0h.15a.17.17,0,0,1,.1,0l.3.15a.18.18,0,0,1,.09.08l.15.22a.24.24,0,0,1-.06.32.22.22,0,0,1-.31-.07l-.12-.17-.26-.1-.25.1-.11.22-.06.2.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.09.43-.09.36a.24.24,0,0,1-.06.11l-.22.22-.06,0-.3.16Zm-.31-.56.26.1.21-.1.16-.16.06-.24-.06-.21-.14-.13-.24-.06-.26,0-.19.34.11.28Z" />
                    <path
                        d="M445,970.44a.22.22,0,0,1-.22-.23V968.7a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,445,970.44Z" />
                    <path
                        d="M446.09,970.44a.22.22,0,0,1-.22-.23v-1.05l-.05-.16-.1-.07h-.16l-.17.11-.27.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.22.15a.21.21,0,0,1,.1.13l.07.3v1.11A.23.23,0,0,1,446.09,970.44Z" />
                    <path
                        d="M447.23,970.36a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.2l-.17.11-.27.28a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0H447l.22.08a.2.2,0,0,1,.15.17l.08.37v1A.22.22,0,0,1,447.23,970.36Z" />
                    <path
                        d="M449.41,970.36H448a.22.22,0,0,1-.21-.14.24.24,0,0,1,.06-.25l1-1,.25-.43v-.14l0-.1-.07,0-.06,0-.08-.08h-.29l-.21.16-.09.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.12l.25-.34.26-.18a.28.28,0,0,1,.13,0H449a.24.24,0,0,1,.16.07l.13.13.11.05a.25.25,0,0,1,.12.13l.07.23a.17.17,0,0,1,0,.07v.23a.18.18,0,0,1,0,.1l-.08.15-.23.39a.1.1,0,0,1,0,.05l-.63.59h.85a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M454.69,969.53h-.15a.18.18,0,0,1-.1,0l-.3-.15-.25-.17a.21.21,0,0,1-.1-.15l-.07-.44a.25.25,0,0,1,0-.08V968l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.09a.21.21,0,0,1,.16.14l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0h-.17l-.17,0-.14.2,0,.21.29-.07h.2l.36.09a.2.2,0,0,1,.13.09l.15.23.17.32a.36.36,0,0,1,0,.1v.15a.43.43,0,0,1,0,.11l-.15.3-.05.06-.15.15-.06,0-.3.15A.16.16,0,0,1,454.69,969.53Zm-.1-.45h.05l.22-.11.1-.1.11-.26-.22-.39-.21-.05h-.1l-.18.05-.14.14-.05.2.05.3.14.1Z" />
                    <path
                        d="M456.73,969.53h-.08a.18.18,0,0,1-.1,0l-.3-.15-.25-.17a.21.21,0,0,1-.1-.15l-.07-.44v0l-.07-.52a.17.17,0,0,1,0-.1l.15-.52a.19.19,0,0,1,0-.08l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.1-.18,0h-.17l-.16,0-.16.21-.06.21h0l.43-.09.35.09a.24.24,0,0,1,.11.06l.23.22a.39.39,0,0,1,.06.11l.07.3.06.1a.26.26,0,0,1,0,.21l-.15.3-.08.08-.23.16-.32.16A.18.18,0,0,1,456.73,969.53Zm-.4-.66.15.1.21.1.39-.22.07-.15,0-.05-.08-.28-.14-.14-.24-.06-.2.06-.14.14-.05.19Z" />
                    <path
                        d="M458.09,969.53a.22.22,0,0,1-.23-.22V967.8a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,458.09,969.53Z" />
                    <path
                        d="M459.22,969.53a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.06h-.17l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.23.23,0,0,1,.09.14l.08.3v1.11A.22.22,0,0,1,459.22,969.53Z" />
                    <path
                        d="M460.42,969.53a.22.22,0,0,1-.22-.22v-1l-.1-.2L460,968h-.14l-.09.08-.39.32a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.31l.51-.44a.26.26,0,0,1,.16-.07h.31a.28.28,0,0,1,.12,0l.23.15a.16.16,0,0,1,.07.09l.16.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,460.42,969.53Z" />
                    <path
                        d="M462.61,969.53H461.1a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15v-.16l0-.14-.14,0h-.38l-.14,0,0,.14v.12a.23.23,0,1,1-.45,0v-.15a.15.15,0,0,1,0-.07l.07-.23a.24.24,0,0,1,.06-.09l.07-.07.09-.06.23-.07.07,0h.45l.07,0,.23.07.09.06.07.07a.24.24,0,0,1,.06.09l.07.23a.14.14,0,0,1,0,.07v.22a.24.24,0,0,1,0,.08l-.07.22a.25.25,0,0,1,0,.07l-.22.3-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M467.66,968.55l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.22a.31.31,0,0,1-.06-.13l-.07-.44a.11.11,0,0,1,0-.08v-.42l.08-.56,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22,0h-.17l-.15,0-.16.26,0,.22.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.31.15.25.16a.23.23,0,0,1,.09.14l.08.3v.2l-.08.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.5.24.06h.09l.19-.05.14-.14.06-.24v-.1l0-.16-.16-.1-.27-.11-.39.21,0,.18.06.33Z" />
                    <path
                        d="M469.77,968.55l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.22a.24.24,0,0,1-.07-.13l-.07-.44a.11.11,0,0,1,0-.08v-.42l.08-.56,0-.08.23-.38a.21.21,0,0,1,.14-.1l.3-.08H470l.36.09a.25.25,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.18l-.15,0-.16.26,0,.22.24-.12a.19.19,0,0,1,.1,0h.08l.08,0,.38.15.08.05.15.15,0,.06.15.3a.18.18,0,0,1,0,.1v.15a.22.22,0,0,1,0,.11l-.15.3-.17.25a.19.19,0,0,1-.14.09Zm-.18-.5.24.06.26-.06.1-.15.11-.27-.11-.22-.09-.1-.28-.11-.38.21,0,.18.06.33Z" />
                    <path
                        d="M471.21,968.55a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,471.21,968.55Z" />
                    <path
                        d="M472.41,968.55a.22.22,0,0,1-.22-.22v-1l-.09-.17-.1,0h-.21l-.1,0-.34.28a.23.23,0,0,1-.28-.36l.37-.3.19-.1.1,0h.38l.22.08a.22.22,0,0,1,.14.11l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,472.41,968.55Z" />
                    <path
                        d="M473.54,968.55a.22.22,0,0,1-.22-.22v-1l-.13-.2H473l-.14,0-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.08,0,.23-.08h.37l.1,0,.16.08a.32.32,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,473.54,968.55Z" />
                    <path
                        d="M475.73,968.55H474.3a.23.23,0,0,1-.21-.13.25.25,0,0,1,0-.25l1-1,.32-.44v-.07l-.08-.08-.05-.06,0-.07-.1,0h-.37l-.07,0-.08.09,0,.18a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.08-.22a.19.19,0,0,1,.05-.09l.15-.15.06,0,.15-.07a.19.19,0,0,1,.1,0h.45l.08,0,.22.07a.2.2,0,0,1,.13.12l.06.11.13.13a.23.23,0,0,1,.06.16v.22a.2.2,0,0,1,0,.13l-.38.54-.64.69h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M480.78,967.65l-.42-.08a.21.21,0,0,1-.14-.1l-.15-.22-.17-.42a.29.29,0,0,1,0-.09v-.52a.17.17,0,0,1,0-.07l.15-.52.17-.35a.22.22,0,0,1,.11-.1l.38-.15a.13.13,0,0,1,.08,0h.16a.13.13,0,0,1,.08,0l.38.15a.21.21,0,0,1,.13.13l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.12-.3-.1-.26.1-.11.23,0,.18.29-.11a.13.13,0,0,1,.08,0h.08l.1,0,.3.15.06,0,.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.24-.51.29.06.21-.05.14-.14.06-.25-.05-.2-.16-.16-.21-.1-.26.1-.21.35.12.29Z" />
                    <path
                        d="M482.82,967.65l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.28.28,0,0,1,0-.09v-.48l.08-.56a.21.21,0,0,1,0-.11l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.06.05.15.15a.23.23,0,0,1-.32.32l-.13-.13-.22-.11h-.12l-.2.1-.16.22,0,.2.24-.12.1,0H483l.1,0,.3.15a.1.1,0,0,1,.06,0l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07Zm-.19-.51.25.06H483l.19-.05.13-.14.07-.25-.06-.2-.16-.16-.27-.11-.22.11-.15.16-.05.2.05.25Z" />
                    <path
                        d="M484.33,967.65a.23.23,0,0,1-.23-.23V966a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,484.33,967.65Z" />
                    <path
                        d="M485.46,967.65a.23.23,0,0,1-.23-.23v-1l-.12-.2h-.22l-.12,0-.26.32a.23.23,0,1,1-.36-.28l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.37a.19.19,0,0,1,.1,0l.15.07a.24.24,0,0,1,.1.1l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,485.46,967.65Z" />
                    <path
                        d="M486.59,967.65a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0H486l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.31.09,0,.23-.08h.44l.23.08a.24.24,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,486.59,967.65Z" />
                    <path
                        d="M488.78,967.65h-1.43a.22.22,0,0,1-.21-.14.23.23,0,0,1,0-.25l1-1,.13-.27a.21.21,0,0,1,0-.06l.09-.08v-.06l-.16-.21-.14-.09h-.24l-.21.16-.08.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.28.28,0,0,1,0-.13l.26-.33.26-.18a.17.17,0,0,1,.12,0h.38a.2.2,0,0,1,.13,0l.33.25.18.26a.2.2,0,0,1,0,.13v.22a.2.2,0,0,1-.07.16l-.12.13-.14.27,0,.06-.67.67h.89a.22.22,0,0,1,.22.22A.22.22,0,0,1,488.78,967.65Z" />
                    <path
                        d="M494,966.74h-.07a.16.16,0,0,1-.1,0l-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.44v-.57l.07-.56a.22.22,0,0,1,.05-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.25.25,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.1-.18-.05h-.17l-.17,0-.15.2,0,.21.42-.08.36.09a.21.21,0,0,1,.1.06l.23.22,0,.06.15.3a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.22.22,0,0,1-.09.1l-.22.16-.33.16A.16.16,0,0,1,494,966.74Zm-.4-.66.15.1.21.1.39-.21.1-.26-.11-.21-.15-.16-.24-.06-.21.06-.14.14-.05.2Z" />
                    <path
                        d="M496.09,966.74h-.16l-.37-.15-.08-.05-.15-.15a.47.47,0,0,1-.06-.09l-.15-.45h0s0-.05,0-.07v-.52s0,0,0-.07l.15-.52.17-.35a.22.22,0,0,1,.15-.11l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.16-.22-.05h-.17l-.14,0-.11.21-.05.19.25-.06h.2l.36.09a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.16-.33.16A.16.16,0,0,1,496.09,966.74Zm-.32-.57.28.12.37-.21.05-.29-.05-.21-.14-.14-.24-.06h-.1l-.16,0-.1.16-.1.19.11.31Z" />
                    <path
                        d="M497.45,966.74a.23.23,0,0,1-.23-.22V965a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.22.22,0,0,1,497.45,966.74Z" />
                    <path
                        d="M498.58,966.74a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,498.58,966.74Z" />
                    <path
                        d="M499.71,966.74a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.24.24,0,0,1,.1.14l.07.3v1.11A.22.22,0,0,1,499.71,966.74Z" />
                    <path
                        d="M501.9,966.74h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1.05-1.06.19-.25.05-.15v-.16l0-.1-.22-.08H501l-.18.08-.08.14a.23.23,0,1,1-.45,0v-.07a.28.28,0,0,1,0-.13l.26-.33a.15.15,0,0,1,.09-.06l.22-.07.07,0h.38l.07,0,.41.16a.24.24,0,0,1,.11.13l.08.23a.15.15,0,0,1,0,.07v.22a.22.22,0,0,1,0,.08l-.08.22a.21.21,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M509.21,965.46h-.07l-.1,0-.3-.15-.25-.17a.2.2,0,0,1-.1-.15l-.08-.45V964l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23.05.06.15.3a.36.36,0,0,1,0,.1v.08a.24.24,0,0,1,0,.08L510,965a.16.16,0,0,1-.08.1l-.23.15-.32.17Zm-.39-.66.14.1.22.1.38-.21.1-.26-.1-.22-.16-.15-.24-.06-.2.06-.14.14-.06.2Z" />
                    <path
                        d="M511.33,965.46h-.16l-.38-.16a.16.16,0,0,1-.1-.08l-.16-.23-.17-.41a.28.28,0,0,1,0-.09v-.59l.16-.53.16-.34a.25.25,0,0,1,.16-.12l.38-.07h.19l.36.08a.26.26,0,0,1,.13.1l.15.23a.22.22,0,0,1-.37.25l-.11-.16-.21-.05h-.1l-.22,0-.1.21-.06.19.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.09.44-.09.35a.24.24,0,0,1-.06.11l-.22.22-.06,0-.3.15Zm-.31-.56.26.11.21-.11.16-.16.06-.24-.06-.2-.14-.14-.24-.06-.26.06-.19.33.11.28Z" />
                    <path
                        d="M512.68,965.46a.22.22,0,0,1-.22-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,512.68,965.46Z" />
                    <path
                        d="M513.82,965.46a.22.22,0,0,1-.23-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.07.3v1.12A.22.22,0,0,1,513.82,965.46Z" />
                    <path
                        d="M515,965.46a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.27.27a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.3.26-.18a.17.17,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.3v1.12A.22.22,0,0,1,515,965.46Z" />
                    <path
                        d="M517.13,965.46H515.7a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24L516.6,964l.18-.25.05-.15v-.16l0-.1-.07,0-.06-.05-.08-.08h-.29l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.34.26-.17a.2.2,0,0,1,.13,0h.45a.23.23,0,0,1,.16.06l.13.13.11.06a.2.2,0,0,1,.12.13l.07.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.07.23,0,.06-.22.31-.69.69h.88a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M522.26,964.56l-.36-.09-.1-.05-.23-.23a.27.27,0,0,1-.06-.12l-.07-.45a.22.22,0,0,1,0-.08v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.08a.2.2,0,0,1,.16.15l.08.22a.23.23,0,0,1-.43.15l0-.11-.18,0h-.17l-.17,0-.14.19,0,.22.29-.08h.2l.36.08a.24.24,0,0,1,.13.09l.15.23.17.33a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.2.2,0,0,1-.13.09l-.3.08Zm-.19-.51.25.06h.09l.16,0,.11-.16.11-.27-.21-.38-.22-.06h-.1l-.18,0-.14.14-.05.2.05.33Z" />
                    <path
                        d="M524.37,964.56l-.35-.09-.11-.05-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45v0l-.07-.52a.28.28,0,0,1,0-.09l.15-.53a.15.15,0,0,1,0-.07l.23-.31A.22.22,0,0,1,524,962l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16,0-.16.2-.06.22h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.24.24,0,0,1,.06.1l.07.3v.21l-.08.35a.39.39,0,0,1-.06.11l-.23.23-.11.05Zm-.18-.51.24.06.2-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06-.2.06-.14.14,0,.2.06.33Z" />
                    <path
                        d="M525.81,964.56a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,525.81,964.56Z" />
                    <path
                        d="M526.94,964.56a.23.23,0,0,1-.23-.23v-1.05l0-.17-.1-.06h-.17l-.17.11-.26.28a.24.24,0,0,1-.32,0,.24.24,0,0,1,0-.33l.3-.3.26-.18.12,0h.31l.12,0,.23.16a.21.21,0,0,1,.09.13l.08.3v1.11A.22.22,0,0,1,526.94,964.56Z" />
                    <path
                        d="M528.14,964.56a.22.22,0,0,1-.22-.23v-1l-.1-.2-.12-.08h-.14l-.09.08-.39.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.5-.44a.25.25,0,0,1,.16-.06h.31l.12,0,.23.15.08.09.15.3a.43.43,0,0,1,0,.11v1.05A.23.23,0,0,1,528.14,964.56Z" />
                    <path
                        d="M530.33,964.56h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,0-.25l1.06-1.06.18-.24.05-.16v-.15l0-.14-.14,0h-.38l-.11,0-.08.17v.1a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.25.25,0,0,1,.13-.12l.23-.07h.59l.23.07.09.06.07.07a.24.24,0,0,1,.06.09l.07.23a.19.19,0,0,1,0,.07v.23a.19.19,0,0,1,0,.07l-.07.22,0,.07-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,530.33,964.56Z" />
                    <path
                        d="M535.31,963.58l-.36-.09a.17.17,0,0,1-.1-.06l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.22-.3.08-.07.31-.15.1,0h.22l.11,0,.3.15.06,0,.15.15a.24.24,0,0,1,0,.33.24.24,0,0,1-.32,0l-.13-.13-.22-.11h-.12l-.21.1-.15.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.25.17a.21.21,0,0,1,.1.14l.08.5-.08.35a.24.24,0,0,1-.06.11l-.23.23-.1,0-.31.08Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.24-.06-.26-.15-.1-.27-.11-.38.21-.05.25.06.26Z" />
                    <path
                        d="M537.42,963.58l-.36-.09-.1,0-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.08.15a.23.23,0,0,1-.11.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.2.1-.16.22,0,.2.24-.12.1,0h.16l.38.15.07.05.15.15a.35.35,0,0,1,.05.08l.15.38a.19.19,0,0,1,0,.08v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.28.28,0,0,1-.14.1Zm-.19-.51.24.06.26-.06.1-.15.11-.22-.11-.28-.09-.08-.28-.12-.37.21-.05.25.06.26Z" />
                    <path
                        d="M538.85,963.58a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,538.85,963.58Z" />
                    <path
                        d="M540.06,963.58a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.1.05-.34.28a.22.22,0,0,1-.31,0,.22.22,0,0,1,0-.32l.38-.3.19-.1a.17.17,0,0,1,.1,0h.38l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,540.06,963.58Z" />
                    <path
                        d="M541.19,963.58a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.21l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.22-.08h.38l.1,0,.15.08a.24.24,0,0,1,.1.1l.15.3a.19.19,0,0,1,0,.1v1.06A.23.23,0,0,1,541.19,963.58Z" />
                    <path
                        d="M543.38,963.58h-1.44a.22.22,0,0,1-.2-.14.21.21,0,0,1,0-.24l1-1.06.31-.46-.15-.26-.11,0h-.36l-.07,0-.09.09,0,.18a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.08l.08-.22a.19.19,0,0,1,0-.09l.16-.15a.1.1,0,0,1,0,0l.16-.08.1,0h.52l.23.07a.25.25,0,0,1,.13.12l.07.15.14.2a.28.28,0,0,1,0,.13v.15a.28.28,0,0,1,0,.12l-.38.54-.65.69h.92a.23.23,0,0,1,.22.23A.22.22,0,0,1,543.38,963.58Z" />
                    <path
                        d="M548.58,962.75h-.08l-.08,0-.38-.15a.22.22,0,0,1-.1-.09l-.15-.22-.17-.41v0h0a.15.15,0,0,1,0-.07v-.52a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15.08,0h.16l.08,0,.38.15a.2.2,0,0,1,.13.14l.07.22a.23.23,0,1,1-.43.15l0-.13-.3-.09-.26.1-.11.22,0,.2.45-.07.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.17.17,0,0,1-.06.1l-.23.23-.06,0-.3.15A.17.17,0,0,1,548.58,962.75Zm-.31-.56.27.1.21-.11.15-.15.06-.24-.05-.21-.14-.14-.24-.06-.27.06-.19.34.12.28Z" />
                    <path
                        d="M550.54,962.67l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.38a.11.11,0,0,1,0-.08v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.16.16,0,0,1,.09.07l.15.23a.23.23,0,0,1-.38.25l-.12-.18-.2-.09h-.12l-.2.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.17.17,0,0,1,.1,0l.3.15a.09.09,0,0,1,.06,0l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.17.17,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.3.07Zm-.19-.5.25.06h.09l.19-.05L551,962l.06-.24-.06-.21-.16-.16-.27-.11-.22.11-.15.16-.05.2.05.25Z" />
                    <path
                        d="M552.05,962.67a.22.22,0,0,1-.23-.22V961a.22.22,0,0,1,.23-.22.23.23,0,0,1,.23.22v1.44A.23.23,0,0,1,552.05,962.67Z" />
                    <path
                        d="M553.18,962.67a.23.23,0,0,1-.23-.22v-.94l-.12-.27h-.22l-.12,0-.26.33a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.37a.28.28,0,0,1,.11-.08l.23-.07h.37a.18.18,0,0,1,.1,0l.15.08a.2.2,0,0,1,.11.11l.15.38a.29.29,0,0,1,0,.09v1A.22.22,0,0,1,553.18,962.67Z" />
                    <path
                        d="M554.31,962.67a.22.22,0,0,1-.22-.22v-1l-.05-.21-.07,0h-.22l-.13,0-.26.33a.23.23,0,0,1-.36-.29l.31-.37a.2.2,0,0,1,.1-.08l.23-.07h.44l.23.07a.26.26,0,0,1,.15.17l.07.38v1A.22.22,0,0,1,554.31,962.67Z" />
                    <path
                        d="M556.5,962.67h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-.95.13-.33.05-.07.09-.09v-.06l-.16-.21-.13-.08h-.25l-.21.15-.08.15a.22.22,0,0,1-.23.22.23.23,0,0,1-.23-.22v-.08a.25.25,0,0,1,0-.12l.26-.34.26-.18a.28.28,0,0,1,.12,0H556a.28.28,0,0,1,.13,0l.33.25.18.27a.17.17,0,0,1,0,.12v.23a.21.21,0,0,1-.07.16l-.11.11-.14.34a.22.22,0,0,1-.05.08l-.64.59h.86a.22.22,0,0,1,.22.23A.22.22,0,0,1,556.5,962.67Z" />
                    <path
                        d="M561.7,961.77h-.07a.17.17,0,0,1-.1,0l-.31-.15-.25-.16a.24.24,0,0,1-.09-.15l-.08-.45v-.57l.07-.56a.37.37,0,0,1,0-.11l.22-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.22,0,.06.15.31a.17.17,0,0,1,0,.1v.07a.29.29,0,0,1,0,.09l-.15.37a.31.31,0,0,1-.08.11l-.23.15-.33.16A.17.17,0,0,1,561.7,961.77Zm-.39-.67.14.1.21.11.39-.22.1-.26-.11-.21-.15-.16-.24-.06-.21.06-.14.14,0,.2Z" />
                    <path
                        d="M563.81,961.77h-.07l-.09,0-.37-.15-.08-.05-.15-.15a.41.41,0,0,1,0-.09l-.16-.45h0s0-.05,0-.07v-.52s0,0,0-.06l.15-.53.17-.34a.23.23,0,0,1,.15-.12l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.23.23,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.14,0-.11.21,0,.2.25-.07h.2l.36.08a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.42a.24.24,0,0,1-.09.15l-.23.15-.32.16A.23.23,0,0,1,563.81,961.77Zm-.32-.57.28.11.37-.21.06-.28-.06-.22-.14-.14-.24-.06h-.1l-.16,0-.1.16-.1.19.11.32Z" />
                    <path
                        d="M565.17,961.77a.23.23,0,0,1-.23-.23V960a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.51A.23.23,0,0,1,565.17,961.77Z" />
                    <path
                        d="M566.3,961.77a.22.22,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.28.28,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,566.3,961.77Z" />
                    <path
                        d="M567.43,961.77a.22.22,0,0,1-.22-.23v-1.06l-.05-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,1,1-.32-.32l.3-.3.27-.18a.24.24,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.22.15a.28.28,0,0,1,.1.14l.07.3v1.11A.23.23,0,0,1,567.43,961.77Z" />
                    <path
                        d="M569.62,961.77h-1.43a.23.23,0,0,1-.21-.14.21.21,0,0,1,0-.25l1.05-1.06.19-.24.05-.16v-.15l0-.11-.22-.08h-.31l-.18.08-.08.14v.08a.23.23,0,1,1-.45,0v-.15a.24.24,0,0,1,0-.12l.26-.34a.2.2,0,0,1,.09-.06l.22-.07h.52l.41.16a.23.23,0,0,1,.11.13l.08.23a.17.17,0,0,1,0,.07V960a.2.2,0,0,1,0,.07l-.08.22a.09.09,0,0,1,0,.07l-.23.3-.69.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,569.62,961.77Z" />
                    <path
                        d="M430.33,993.89l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.22.22,0,0,1,.09.07l.15.23a.23.23,0,0,1-.38.25l-.11-.17-.2-.1h-.12l-.21.1L430,992l0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.23.23,0,0,1,.11,0l.3.15.06,0,.22.23a.21.21,0,0,1,.06.1l.08.43-.08.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.5.24.06h.09l.19-.05.14-.14.06-.24-.06-.21-.16-.15-.26-.11-.22.11-.16.15-.05.2.05.25Z" />
                    <path
                        d="M432.44,993.89l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15a.2.2,0,0,1,.12.13l.07.22a.23.23,0,0,1-.43.15l0-.14-.17-.08h-.12l-.21.1-.16.21,0,.21.24-.12.1,0h.08a.17.17,0,0,1,.1,0l.3.15.06,0,.23.23a.1.1,0,0,1,0,.05l.15.31a.17.17,0,0,1,0,.1v.07a.17.17,0,0,1,0,.1l-.15.31a.1.1,0,0,1,0,0l-.23.23a.21.21,0,0,1-.1.06Zm-.18-.5.24.06.2-.06.16-.16.1-.2-.1-.21-.17-.17-.21-.11-.2.11-.16.15-.05.2.05.25Z" />
                    <path
                        d="M433.88,993.89a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,433.88,993.89Z" />
                    <path
                        d="M435.08,993.89a.22.22,0,0,1-.22-.22v-.94l-.1-.24-.09,0h-.23l-.13,0-.26.33a.22.22,0,0,1-.31,0,.23.23,0,0,1,0-.32l.3-.37a.28.28,0,0,1,.11-.08l.22-.07h.45l.22.07a.23.23,0,0,1,.14.13l.15.38a.15.15,0,0,1,0,.09v1A.22.22,0,0,1,435.08,993.89Z" />
                    <path
                        d="M436.22,993.89a.22.22,0,0,1-.23-.22v-.94l-.13-.27h-.27l-.06,0-.27.34a.23.23,0,0,1-.35-.29l.3-.37a.19.19,0,0,1,.07-.06l.16-.08.1,0h.37l.11,0,.15.08a.23.23,0,0,1,.11.11l.15.38a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,436.22,993.89Z" />
                    <path
                        d="M438.4,993.89h-1.51a.2.2,0,0,1-.2-.14.21.21,0,0,1,0-.24l1.06-1.06.24-.34V992l-.09-.18-.13-.08h-.29l-.09.08-.06,0-.06,0,0,.14a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.23.23,0,0,1,.11-.13l.12-.06.12-.12a.24.24,0,0,1,.16-.07h.45a.28.28,0,0,1,.13,0l.34.26a.22.22,0,0,1,.05.08l.08.23s0,0,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.25.34-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M443.61,993.06h-.15l-.11,0-.3-.15-.06,0-.15-.16a.22.22,0,0,1,0-.08l-.15-.46h0a.17.17,0,0,1,0-.07v-.59l.16-.53.16-.34a.19.19,0,0,1,.15-.11l.3-.08h.28l.36.09a.2.2,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.16-.21,0h-.17l-.15,0-.1.21-.06.19.25-.06h.21l.35.09.11,0,.22.23a.24.24,0,0,1,.06.11l.09.43-.08.42a.24.24,0,0,1-.1.14l-.23.15-.32.17Zm-.1-.45h0l.38-.21.06-.29-.06-.21-.14-.14-.24-.06h-.09l-.16,0-.2.35.1.31.09.09Z" />
                    <path
                        d="M445.72,993.06h-.15l-.1,0-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.07-.55a.37.37,0,0,1,.05-.11l.22-.3a.26.26,0,0,1,.13-.08l.3-.08h.28l.36.09a.22.22,0,0,1,.16.14l.07.23a.23.23,0,0,1-.14.29A.22.22,0,0,1,446,991l0-.11-.18,0h-.17l-.17,0-.15.2,0,.21.29-.07h.21l.35.09a.19.19,0,0,1,.14.09l.15.22.16.33a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.18.18,0,0,1-.05.07l-.15.16-.06,0-.3.15Zm-.1-.45h0l.23-.11.09-.09.11-.28-.21-.38-.22,0h-.09l-.19,0-.14.14-.05.2.06.3.14.1Z" />
                    <path
                        d="M447.08,993.06a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,447.08,993.06Z" />
                    <path
                        d="M448.21,993.06a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.19l-.39.39a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.45-.45a.24.24,0,0,1,.16-.07h.37a.24.24,0,0,1,.16.07l.16.15,0,.06.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,448.21,993.06Z" />
                    <path
                        d="M449.34,993.06a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.12,0H449a.28.28,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,449.34,993.06Z" />
                    <path
                        d="M451.52,993.06h-1.43a.22.22,0,0,1-.16-.38l1-1,.31-.45v-.08l-.11-.17-.15,0h-.3l-.23.08,0,.14a.23.23,0,1,1-.45,0V991a.15.15,0,0,1,0-.07l.08-.23a.21.21,0,0,1,.11-.13l.15-.08.26-.09h.52l.22.08a.15.15,0,0,1,.09.06l.08.07.18.26a.28.28,0,0,1,0,.13v.22a.28.28,0,0,1,0,.13l-.39.54-.64.69h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M456.65,992.08l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.22.22,0,0,1,0-.08l-.15-.46a.17.17,0,0,1,0-.07v-.53a.2.2,0,0,1,0-.07l.15-.45.25-.42a.21.21,0,0,1,.14-.1l.3-.08h.2l.42.08a.27.27,0,0,1,.18.15l.07.23a.23.23,0,0,1-.14.29A.24.24,0,0,1,457,990l0-.1-.25-.05h-.11l-.15,0-.18.3,0,.12h0l.43-.08.35.08a.24.24,0,0,1,.11.06l.23.23a.39.39,0,0,1,.06.11l.07.3v.2l-.08.36a.24.24,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.14-.14.06-.24v-.1l-.05-.18-.14-.14-.24-.06-.2.06-.16.15-.09.19.1.31Z" />
                    <path
                        d="M458.69,992.08l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.2.2,0,0,1,.12-.08l.3-.08h.28l.36.09a.18.18,0,0,1,.13.09l.16.22a.24.24,0,0,1-.07.32.22.22,0,0,1-.31-.06l-.1-.16-.22-.05h-.17l-.17,0-.14.2,0,.21.28-.07h.21l.36.08a.21.21,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.07.3v.2l-.08.36a.17.17,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06l-.31.08Zm-.19-.5.24.06h.1l.18,0,.14-.14.06-.24v-.1l-.05-.18-.14-.14-.25-.06h-.09l-.18.06-.14.14-.06.2.06.33Z" />
                    <path
                        d="M460.2,992.08a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,460.2,992.08Z" />
                    <path
                        d="M461.33,992.08a.22.22,0,0,1-.23-.22V990.8l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,461.33,992.08Z" />
                    <path
                        d="M462.46,992.08a.22.22,0,0,1-.23-.22V990.8l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.23-.07h.44l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.23.23,0,0,1,462.46,992.08Z" />
                    <path
                        d="M464.65,992.08h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1-1,.26-.46v-.07l-.08-.09a.1.1,0,0,1,0,0l0-.07-.1,0h-.3l-.1,0,0,.07,0,.06-.09.08v.06a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.24.24,0,0,1,.07-.16l.12-.13.06-.12a.28.28,0,0,1,.13-.11l.23-.08h.52l.23.08a.28.28,0,0,1,.13.11l.06.12.12.13a.24.24,0,0,1,.07.16v.22a.28.28,0,0,1,0,.13l-.15.22-.14.28,0,.06-.67.67h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,464.65,992.08Z" />
                    <path
                        d="M469.7,991.18l-.36-.08a.33.33,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.07.15a.22.22,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.2.1-.16.22,0,.2.24-.12.1,0h.07l.11,0,.3.15.25.17a.16.16,0,0,1,.08.1l.15.38a.24.24,0,0,1,0,.08v.08a.36.36,0,0,1,0,.1l-.16.3,0,.06-.22.23a.39.39,0,0,1-.11.06Zm-.19-.51.24.06.21-.06.16-.15.1-.22-.1-.26-.17-.11-.21-.1-.37.2-.05.25.06.26Z" />
                    <path
                        d="M471.81,991.18l-.42-.08a.25.25,0,0,1-.15-.1l-.15-.23-.17-.41a.14.14,0,0,1,0-.09v-.59l.15-.53.17-.34a.23.23,0,0,1,.12-.1l.38-.16h.32l.37.16a.2.2,0,0,1,.12.1l.08.15a.23.23,0,0,1-.11.31.23.23,0,0,1-.3-.1l0-.08-.32-.1-.25.1-.12.23-.05.18.3-.12h.16l.1,0,.3.15.25.17a.24.24,0,0,1,.1.14l.08.5-.09.35a.24.24,0,0,1-.06.11l-.22.23a.39.39,0,0,1-.11.06Zm-.24-.51.28.06.22-.06.14-.14.06-.24-.06-.26-.15-.1-.22-.11-.28.12-.08.08-.1.25.11.3Z" />
                    <path
                        d="M473.24,991.18A.22.22,0,0,1,473,991v-1.43a.23.23,0,1,1,.45,0V991A.23.23,0,0,1,473.24,991.18Z" />
                    <path
                        d="M474.37,991.18a.22.22,0,0,1-.22-.23V989.9l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.31-.31.08,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3V991A.23.23,0,0,1,474.37,991.18Z" />
                    <path
                        d="M475.51,991.18a.23.23,0,0,1-.23-.23V989.9l0-.13-.07,0h-.23l-.14,0-.27.27a.23.23,0,0,1-.32-.32l.31-.31.08,0,.23-.08h.45l.22.08a.2.2,0,0,1,.15.16l.07.3V991A.22.22,0,0,1,475.51,991.18Z" />
                    <path
                        d="M477.77,991.18h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1,.18-.25.05-.24-.05-.14-.15-.12h-.33l-.24.21a.24.24,0,0,1-.05.25.22.22,0,0,1-.32,0l-.07-.07a.23.23,0,0,1,0-.29l.25-.34.26-.17a.2.2,0,0,1,.13,0h.45l.1,0,.15.08.06,0,.15.15a.24.24,0,0,1,.06.09l.07.22a.22.22,0,0,1,0,.08v.15a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.69h1a.23.23,0,0,1,.22.23A.22.22,0,0,1,477.77,991.18Z" />
                    <path
                        d="M483,990.27h-.15l-.1,0-.3-.15-.06,0-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.2.2,0,0,1,.12-.08l.31-.08h.28l.35.09a.19.19,0,0,1,.16.14l.08.23a.24.24,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.29-.07h.2l.36.08a.26.26,0,0,1,.13.1l.15.23.17.32a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.17.25a.24.24,0,0,1-.09.08l-.3.15Zm-.1-.45h.05l.2-.1.12-.18.1-.21-.21-.37-.21-.05h-.1l-.18.05-.14.14-.05.2.05.25.15.15Z" />
                    <path
                        d="M485,990.27h-.08l-.1,0-.3-.15-.06,0-.23-.23a.23.23,0,0,1-.06-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.42.42,0,0,1,0-.1l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.09a.19.19,0,0,1,.15.14l.08.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.16,0-.15.2,0,.21.42-.08.35.08a.39.39,0,0,1,.11.06l.23.23,0,.06.15.3a.36.36,0,0,1,0,.1v.08a.36.36,0,0,1,0,.1l-.15.3-.05.06-.22.23-.06,0-.3.15Zm-.25-.56.21.1.21-.1.17-.17.1-.21-.1-.21-.16-.15-.24-.06-.2.06-.14.14-.05.2.05.25Z" />
                    <path
                        d="M486.37,990.27a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,486.37,990.27Z" />
                    <path
                        d="M487.5,990.27a.22.22,0,0,1-.23-.22V989l0-.16-.1-.07H487l-.17.12-.26.27a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.3.26-.18a.28.28,0,0,1,.12,0h.3a.28.28,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,487.5,990.27Z" />
                    <path
                        d="M488.7,990.27a.22.22,0,0,1-.22-.22v-1l-.17-.28h-.19l-.09.09-.39.32a.23.23,0,0,1-.29-.36l.51-.43a.26.26,0,0,1,.16-.07h.38a.24.24,0,0,1,.16.07l.15.15a.21.21,0,0,1,0,.06l.16.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,488.7,990.27Z" />
                    <path
                        d="M490.89,990.2h-1.51a.23.23,0,0,1-.21-.15.22.22,0,0,1,.06-.24l1-1,.25-.44v-.14l-.08-.17-.13-.09H490l-.17.11-.05.19a.23.23,0,1,1-.45,0v-.07a.22.22,0,0,1,0-.08l.07-.22a.15.15,0,0,1,.06-.09l.07-.08.26-.17a.2.2,0,0,1,.13,0h.45a.2.2,0,0,1,.13,0l.33.25a.15.15,0,0,1,.06.09l.07.22a.24.24,0,0,1,0,.08v.22a.17.17,0,0,1,0,.1l-.07.15-.24.4,0,0-.63.58h.93a.23.23,0,0,1,.23.23A.23.23,0,0,1,490.89,990.2Z" />
                    <path
                        d="M496.09,989.37h-.15a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.13.09l.15.23a.22.22,0,0,1-.06.31.23.23,0,0,1-.32-.06l-.1-.15-.22-.06h-.17l-.16.05-.15.19,0,.22.29-.08h.2l.36.08a.17.17,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.08.3v.21l-.08.35a.23.23,0,0,1-.09.14l-.23.15-.33.16A.17.17,0,0,1,496.09,989.37Zm-.09-.45h0l.38-.22.06-.22v-.09l-.05-.19-.14-.14L496,988h-.1l-.18,0-.14.14-.05.2.05.31.15.09Z" />
                    <path
                        d="M498.13,989.37h-.08a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.15l-.07-.45a.11.11,0,0,1,0-.08v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.26.26,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.19-.05h-.17l-.16.05-.15.19,0,.22.42-.08.42.08a.24.24,0,0,1,.15.09l.15.23.16.33a.16.16,0,0,1,0,.1v.15a.18.18,0,0,1,0,.1l-.15.3,0,.06-.15.15-.08.05-.38.15Zm-.4-.66.15.09.22.11.28-.11.09-.09.11-.27-.21-.38-.28,0-.22,0-.14.14-.05.2Z" />
                    <path
                        d="M499.49,989.37a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,499.49,989.37Z" />
                    <path
                        d="M500.69,989.37a.22.22,0,0,1-.22-.23v-1l-.1-.2-.12-.08h-.14l-.09.08-.39.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.5-.44a.25.25,0,0,1,.16-.06h.31a.19.19,0,0,1,.12,0l.23.15a.18.18,0,0,1,.07.08l.16.3a.43.43,0,0,1,0,.11v1A.23.23,0,0,1,500.69,989.37Z" />
                    <path
                        d="M501.82,989.37a.22.22,0,0,1-.22-.23v-1l-.17-.28h-.14l-.17.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.27-.18a.24.24,0,0,1,.12,0h.3a.23.23,0,0,1,.16.06l.15.15.05.06.15.3a.43.43,0,0,1,0,.11v1A.23.23,0,0,1,501.82,989.37Z" />
                    <path
                        d="M504,989.37h-1.43a.24.24,0,0,1-.21-.14.21.21,0,0,1,0-.24l1-1.06.32-.44v-.09l-.11-.17-.15-.05h-.37l-.17.09,0,.1v.11a.23.23,0,1,1-.45,0v-.15a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.3-.15.1,0h.53l.22.08.09,0,.08.08.17.26a.17.17,0,0,1,0,.12v.23a.17.17,0,0,1,0,.12l-.38.54-.64.7H504a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M511.33,988.31l-.42-.08a.21.21,0,0,1-.15-.09l-.15-.23,0,0-.15-.46a.17.17,0,0,1,0-.07v-.53s0,0,0-.07l.31-.84a.24.24,0,0,1,.17-.14l.37-.07h.2l.35.08a.24.24,0,0,1,.14.1l.15.22a.23.23,0,1,1-.38.26l-.1-.16-.22,0h-.09l-.22,0-.15.4.44-.07.36.08a.17.17,0,0,1,.1.06l.23.23a.27.27,0,0,1,.06.1l.07.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.24-.5.28.05.22-.05.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06-.26.06-.2.34.11.33Z" />
                    <path
                        d="M513.36,988.31l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.07-.45a.09.09,0,0,1,0-.07v-.5l.08-.49,0-.08.23-.37a.26.26,0,0,1,.14-.11l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.23.23,0,1,1-.38.26l-.1-.16-.22,0h-.17l-.15,0-.16.26,0,.15.28-.07h.2l.36.08a.24.24,0,0,1,.11.06l.22.23a.27.27,0,0,1,.06.1l.08.31v.2l-.08.36a.17.17,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06l-.3.08Zm-.18-.5.24.06h.09l.19-.05.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06h-.1l-.18.06-.14.14,0,.2.06.32Z" />
                    <path
                        d="M514.87,988.31a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,514.87,988.31Z" />
                    <path
                        d="M516,988.31a.22.22,0,0,1-.22-.22v-1l-.13-.2h-.21l-.15,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07h.37a.16.16,0,0,1,.1,0l.15.08a.17.17,0,0,1,.1.1l.15.3a.17.17,0,0,1,0,.1v1.06A.22.22,0,0,1,516,988.31Z" />
                    <path
                        d="M517.13,988.31a.22.22,0,0,1-.22-.22V987l0-.13-.07,0h-.23l-.14,0-.27.26a.23.23,0,0,1-.32-.32l.3-.3a.24.24,0,0,1,.09-.06l.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.31v1.11A.22.22,0,0,1,517.13,988.31Z" />
                    <path
                        d="M519.32,988.31h-1.43a.22.22,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1-1,.26-.47v-.06l-.09-.09,0,0,0-.07-.1,0h-.31l-.1,0,0,.07-.05,0-.08.09v.06a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.15a.23.23,0,0,1,.06-.16l.13-.13.06-.12a.21.21,0,0,1,.13-.11l.22-.08h.52l.23.08a.24.24,0,0,1,.13.11l.06.12.13.13a.23.23,0,0,1,.06.16v.22a.2.2,0,0,1,0,.13l-.15.22-.13.28,0,.06-.67.67h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M524.37,987.33l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.17.17,0,0,1,.1.1l.08.15a.23.23,0,0,1-.1.3.23.23,0,0,1-.31-.1l0-.08-.18-.1h-.12l-.21.11-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.08a.19.19,0,0,1,.1,0l.3.15.06,0,.23.22,0,.06.15.31a.3.3,0,0,1,0,.1v.07a.3.3,0,0,1,0,.1l-.15.3a.15.15,0,0,1,0,.06l-.23.23a.24.24,0,0,1-.11.06Zm-.18-.5.24.06.2-.06.16-.16.1-.21-.1-.2-.17-.18-.21-.1-.2.1-.16.16,0,.2,0,.25Z" />
                    <path
                        d="M526.48,987.33l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23-.17-.41a.36.36,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.2.2,0,0,1,.11-.11l.38-.15.08,0h.16a.19.19,0,0,1,.1,0l.3.15.06,0,.15.15a.23.23,0,0,1-.32.32l-.13-.13-.27-.11-.26.11-.11.22,0,.18.29-.11.08,0h.08a.19.19,0,0,1,.1,0l.3.15.06,0,.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.24-.5.29,0,.21,0,.14-.14.06-.24-.05-.21-.16-.16-.21-.1-.26.1-.21.36.12.28Z" />
                    <path
                        d="M527.92,987.33a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,527.92,987.33Z" />
                    <path
                        d="M529.05,987.33a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,529.05,987.33Z" />
                    <path
                        d="M530.18,987.33a.22.22,0,0,1-.23-.22v-1.06l0-.13-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07H530l.23.07a.25.25,0,0,1,.14.16l.08.31v1.11A.23.23,0,0,1,530.18,987.33Z" />
                    <path
                        d="M532.37,987.33h-1.44a.23.23,0,0,1-.21-.14.23.23,0,0,1,0-.24l1.06-1.06.18-.25,0-.23,0-.11-.07,0-.19-.13h-.24l-.21.16-.08.15a.23.23,0,0,1-.23.22.22.22,0,0,1-.23-.22v-.08a.25.25,0,0,1,0-.12l.25-.34.27-.18a.25.25,0,0,1,.12,0h.38a.25.25,0,0,1,.12,0l.36.21a.28.28,0,0,1,.11.13l.08.23s0,.05,0,.07v.15s0,.05,0,.07l-.08.23,0,.06-.23.31-.69.69h.89a.22.22,0,0,1,.22.23A.22.22,0,0,1,532.37,987.33Z" />
                    <path
                        d="M537.57,986.5h-.08l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.09.09,0,0,1,0-.07V985l.08-.56a.24.24,0,0,1,0-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.18l-.16,0-.15.2,0,.21.42-.08.42.08a.25.25,0,0,1,.15.1l.15.22.16.33a.19.19,0,0,1,0,.1v.08a.19.19,0,0,1,0,.1l-.15.3-.16.25a.21.21,0,0,1-.11.08l-.38.16Zm-.4-.66.15.1.22.1.26-.1.11-.17.1-.21-.2-.36-.28-.06-.22.06-.14.14,0,.2Z" />
                    <path
                        d="M539.68,986.5h-.07l-.11,0-.3-.15a.12.12,0,0,1-.05-.05l-.23-.22a.22.22,0,0,1,0-.08l-.15-.37h0a.2.2,0,0,1,0-.07V985a.13.13,0,0,1,0-.06l.15-.53a.25.25,0,0,1,0-.07l.22-.3a.38.38,0,0,1,.13-.09l.3-.07h.21l.42.08a.26.26,0,0,1,.17.15l.07.23a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.1-.25-.05h-.1l-.17,0-.16.21-.06.21h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.27.27,0,0,1,.06.1l.08.44-.08.35a.24.24,0,0,1-.06.11l-.23.22a.1.1,0,0,1-.06.05l-.3.15Zm-.24-.56.2.1.21-.1.16-.16.06-.24-.06-.2-.14-.14-.24-.06-.21.06-.16.15-.08.18.09.24Z" />
                    <path
                        d="M541,986.5a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.51A.23.23,0,0,1,541,986.5Z" />
                    <path
                        d="M542.17,986.5a.23.23,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.2.2,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,542.17,986.5Z" />
                    <path
                        d="M543.38,986.5a.22.22,0,0,1-.23-.22v-1l-.1-.2-.12-.08h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.22.22,0,0,1,.13,0l.22.15a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,543.38,986.5Z" />
                    <path
                        d="M545.56,986.5h-1.5a.21.21,0,0,1-.21-.14.2.2,0,0,1,0-.24l1.05-1.06.18-.25.06-.15v-.16l0-.1-.06,0a.1.1,0,0,1-.06,0l-.09-.08h-.29l-.17.11-.05.19a.23.23,0,1,1-.45,0v-.07a.22.22,0,0,1,0-.08l.08-.22a.19.19,0,0,1,0-.09l.08-.08.26-.17a.17.17,0,0,1,.12,0H545a.25.25,0,0,1,.16.06l.12.13.12.06a.21.21,0,0,1,.11.13l.08.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.08.23,0,.06-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M550.62,985.52l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.12l-.07-.45V984l.07-.56a.24.24,0,0,1,0-.1l.22-.3a.38.38,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.22a.23.23,0,1,1-.37.26l-.11-.16-.21,0h-.17l-.17,0-.15.2,0,.21.29-.07h.21l.35.08a.24.24,0,0,1,.11.06l.23.23a.33.33,0,0,1,.06.1l.07.31v.2l-.08.36a.33.33,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06l-.3.08Zm-.19-.5.24.06h.1L551,985l.14-.14.06-.24v-.1l0-.18-.14-.14-.24-.06h-.09l-.19.06-.14.14,0,.2.06.32Z" />
                    <path
                        d="M552.73,985.52l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23A.17.17,0,0,1,552,985l-.08-.45V984l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.3-.07H553l.36.08a.22.22,0,0,1,.16.15l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.17,0-.14.2,0,.21.42-.08.36.08a.24.24,0,0,1,.11.06l.22.23,0,.06.15.3a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.3-.16.26a.21.21,0,0,1-.15.09Zm-.19-.5.24.06L553,985l.1-.15.12-.28-.11-.22-.16-.15-.24-.06-.21.06-.14.14,0,.2.06.32Z" />
                    <path
                        d="M554.16,985.52a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,554.16,985.52Z" />
                    <path
                        d="M555.37,985.52a.22.22,0,0,1-.23-.22v-1l-.08-.17-.11,0h-.22l-.15,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.25.25,0,0,1,.13.12l.15.3a.16.16,0,0,1,0,.1v1.06A.22.22,0,0,1,555.37,985.52Z" />
                    <path
                        d="M556.5,985.52a.22.22,0,0,1-.23-.22v-1l-.17-.28h-.19l-.38.39a.23.23,0,0,1-.32-.32l.45-.45a.2.2,0,0,1,.16-.07h.38a.2.2,0,0,1,.16.07l.15.15,0,.06.15.3a.16.16,0,0,1,0,.1v1.06A.22.22,0,0,1,556.5,985.52Z" />
                    <path
                        d="M558.69,985.52h-1.51a.22.22,0,0,1-.21-.14.2.2,0,0,1,0-.24l1.05-1.06.19-.25,0-.16v-.13l-.09-.17-.1,0h-.36l-.07,0-.14.17v.1a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.23.23,0,0,1,0-.11l.07-.15,0-.05.15-.16.06,0,.15-.07a.23.23,0,0,1,.11,0h.52l.23.08a.28.28,0,0,1,.13.11l.15.3a.43.43,0,0,1,0,.11v.22a.15.15,0,0,1,0,.07l-.08.23a.09.09,0,0,1,0,.06l-.23.3-.69.7h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,558.69,985.52Z" />
                    <path
                        d="M438.63,1034.09h-.08a.19.19,0,0,1-.1,0l-.3-.15-.06,0-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.19,0h-.17l-.16,0-.15.19,0,.22.42-.08.42.08a.19.19,0,0,1,.14.09l.15.23.17.33a.16.16,0,0,1,0,.1v.07a.16.16,0,0,1,0,.1l-.15.31-.17.25a.27.27,0,0,1-.1.08l-.38.15Zm-.24-.57.21.11.26-.1.11-.17.1-.21-.2-.37-.29,0-.21,0-.14.14-.05.2.05.25Z" />
                    <path
                        d="M440.74,1034.09h-.08l-.1,0-.3-.15-.06,0-.22-.23a.18.18,0,0,1-.05-.07l-.15-.38a.29.29,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53a.16.16,0,0,1,0-.07l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.16l.08,0,.38.15a.23.23,0,0,1,.13.14l.07.22a.23.23,0,1,1-.43.15l0-.13-.29-.09-.21.1-.17.22-.06.22h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.17.17,0,0,1,.06.1l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23-.06,0-.3.15A.17.17,0,0,1,440.74,1034.09Zm-.24-.57.2.11.21-.11.15-.15.06-.24-.05-.21-.14-.14-.24-.06-.21.06-.16.16-.09.18.1.24Z" />
                    <path
                        d="M442.1,1034.09a.23.23,0,0,1-.23-.23v-1.51a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.51A.22.22,0,0,1,442.1,1034.09Z" />
                    <path
                        d="M443.23,1034a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.2l-.16.11-.27.28a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.26-.18a.28.28,0,0,1,.13,0H443l.22.07a.25.25,0,0,1,.16.17l.07.38v1A.23.23,0,0,1,443.23,1034Z" />
                    <path
                        d="M444.44,1034a.22.22,0,0,1-.23-.22v-.94l-.1-.24-.09,0h-.23l-.12,0-.26.33a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.3-.37a.28.28,0,0,1,.11-.08l.23-.07h.44l.23.07a.29.29,0,0,1,.14.13l.15.38a.28.28,0,0,1,0,.09v1A.22.22,0,0,1,444.44,1034Z" />
                    <path
                        d="M446.62,1034h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.06-.25l1-1,.26-.44v-.13l0-.1-.07,0a.1.1,0,0,1-.05,0l-.09-.08h-.29l-.17.11-.05.19a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,.05-.09l.08-.07.26-.18a.25.25,0,0,1,.12,0h.45a.24.24,0,0,1,.16.07l.13.12.12.06a.28.28,0,0,1,.11.13l.08.23s0,0,0,.07v.23a.19.19,0,0,1,0,.1l-.07.15-.24.39a.1.1,0,0,1,0,0l-.63.59h.93a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M451.83,1033.18h-.15l-.11,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.07-.45a.09.09,0,0,1,0-.07v-.5l.07-.56a.24.24,0,0,1,.05-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.13.1l.15.23a.22.22,0,0,1-.06.31.22.22,0,0,1-.31-.06l-.11-.16-.21,0h-.17l-.17,0-.15.2,0,.21.29-.07h.21l.35.08a.39.39,0,0,1,.11.06l.22.23a.24.24,0,0,1,.06.11l.08.3v.2l-.09.36a.2.2,0,0,1-.09.13l-.23.15-.32.17Zm-.1-.45h0l.39-.21,0-.22v-.1l-.05-.18-.14-.14-.24-.06h-.09l-.19.05-.14.14-.05.2.05.3.15.1Z" />
                    <path
                        d="M453.86,1033.18h-.07l-.1,0-.31-.15-.25-.17a.21.21,0,0,1-.09-.15l-.08-.45v-.57l.07-.56.05-.1.22-.3a.3.3,0,0,1,.13-.09l.3-.07H454l.36.08a.26.26,0,0,1,.16.15l.07.23a.23.23,0,0,1-.14.29.22.22,0,0,1-.28-.15l0-.11-.18,0h-.17l-.17,0-.15.2,0,.21.42-.08.36.08a.33.33,0,0,1,.1.06l.23.23,0,.06.15.3a.19.19,0,0,1,0,.1v.08a.24.24,0,0,1,0,.08l-.15.38a.27.27,0,0,1-.08.1l-.23.15-.33.17Zm-.39-.66.14.1.21.1.39-.21.1-.26-.11-.22-.15-.15-.24-.06-.21.06-.14.14,0,.2Z" />
                    <path
                        d="M455.22,1033.18a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23V1033A.23.23,0,0,1,455.22,1033.18Z" />
                    <path
                        d="M456.43,1033.18a.22.22,0,0,1-.23-.22v-1l-.1-.2-.12-.08h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1V1033A.22.22,0,0,1,456.43,1033.18Z" />
                    <path
                        d="M457.56,1033.18a.22.22,0,0,1-.23-.22v-1l-.17-.28H457l-.38.39a.23.23,0,1,1-.32-.32l.45-.45a.24.24,0,0,1,.16-.07h.38a.26.26,0,0,1,.16.07l.15.15,0,.06.15.3a.18.18,0,0,1,0,.1V1033A.22.22,0,0,1,457.56,1033.18Z" />
                    <path
                        d="M459.74,1033.18h-1.5a.21.21,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1.05-1.06.18-.25.06-.15v-.16l-.05-.14-.14,0h-.36l-.17.08,0,.1v.12a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.22.22,0,0,1,0-.08l.08-.22a.21.21,0,0,1,.11-.13l.3-.15a.19.19,0,0,1,.1,0h.53l.22.08a.19.19,0,0,1,.09,0l.08.08a.19.19,0,0,1,.05.09l.08.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.08.23,0,.06-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M464.8,1032.2l-.36-.08a.24.24,0,0,1-.13-.09l-.15-.23,0,0-.15-.46h0a.17.17,0,0,1,0-.07v-.45a.13.13,0,0,1,0-.06l.15-.53.16-.4a.21.21,0,0,1,.15-.14l.3-.07H465l.36.08a.26.26,0,0,1,.13.1l.15.22a.23.23,0,1,1-.37.26l-.1-.16-.22,0h-.17l-.14,0-.16.46.2-.09a.17.17,0,0,1,.1,0H465a.19.19,0,0,1,.1,0l.3.15.25.16a.24.24,0,0,1,.1.14l.07.3v.2l-.08.36a.33.33,0,0,1-.06.1l-.23.23a.24.24,0,0,1-.11.06l-.3.08Zm-.17-.5.22.06h.1l.18,0,.14-.14.06-.24v-.1l0-.16-.16-.1-.27-.12-.22.11-.1.1-.09.19.11.33Z" />
                    <path
                        d="M466.91,1032.2l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.49l.08-.56a.16.16,0,0,1,0-.09l.22-.37a.26.26,0,0,1,.14-.11l.3-.07h.28l.36.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.43.14l0-.11-.18,0h-.17l-.16,0-.15.26,0,.22.24-.12a.17.17,0,0,1,.1,0h.15l.36.08a.26.26,0,0,1,.13.1l.15.22.17.33a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.16.31-.16.25a.24.24,0,0,1-.13.09l-.31.08Zm-.19-.5.24.06h.1l.16,0,.1-.15.12-.27-.22-.39-.22-.05h0l-.39.22-.05.18.06.32Z" />
                    <path
                        d="M468.42,1032.2a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22V1032A.22.22,0,0,1,468.42,1032.2Z" />
                    <path
                        d="M469.55,1032.2a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.27l-.07,0-.27.28a.23.23,0,1,1-.32-.32l.3-.3.06,0,.15-.08.1,0h.38l.1,0,.15.08a.19.19,0,0,1,.1.1l.15.3a.16.16,0,0,1,0,.1V1032A.22.22,0,0,1,469.55,1032.2Z" />
                    <path
                        d="M470.68,1032.2a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,1,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.23.07a.25.25,0,0,1,.14.16l.08.3V1032A.23.23,0,0,1,470.68,1032.2Z" />
                    <path
                        d="M472.87,1032.2h-1.44a.21.21,0,0,1-.2-.13.23.23,0,0,1,0-.25l1-1,.31-.45v-.06l-.08-.08a.21.21,0,0,1,0-.06l0-.07-.1,0H472l-.14,0-.13.16v.1a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.15a.23.23,0,0,1,0-.11l.07-.15,0-.05.15-.16.09,0,.23-.08h.52l.23.08a.28.28,0,0,1,.13.11l.06.12.12.13a.24.24,0,0,1,.07.16v.22a.28.28,0,0,1,0,.13l-.39.54-.64.69h.92a.22.22,0,0,1,.22.23A.22.22,0,0,1,472.87,1032.2Z" />
                    <path
                        d="M477.92,1031.3l-.36-.08-.1-.06-.23-.23a.22.22,0,0,1-.05-.08l-.15-.37h0s0,0,0-.07v-.53s0,0,0-.06l.15-.53a.25.25,0,0,1,0-.07l.23-.3a.19.19,0,0,1,.08-.07l.3-.15.1,0h.23l.38.15a.25.25,0,0,1,.12.11l.07.15a.22.22,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.08-.31-.1-.2.1-.17.23-.06.21.28-.14.1,0H478l.11,0,.3.15.06,0,.22.23a.24.24,0,0,1,.06.11l.08.43-.08.35a.24.24,0,0,1-.06.11l-.22.23-.11.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24-.06-.2-.16-.16-.2-.1-.21.1-.17.17-.09.18.09.24Z" />
                    <path
                        d="M480,1031.3l-.35-.08a.41.41,0,0,1-.11-.07l-.22-.22a.17.17,0,0,1-.06-.12l-.08-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.24.24,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15.06,0,.15.16a.22.22,0,0,1,0,.32.24.24,0,0,1-.32,0l-.12-.13-.22-.11H480l-.21.1-.16.22,0,.2.24-.12.1,0h.16l.1,0,.3.15.06,0,.22.23a.24.24,0,0,1,.06.11l.09.43-.09.35a.24.24,0,0,1-.06.11l-.22.22a.41.41,0,0,1-.11.07l-.3.07Zm-.18-.51.24.06h.1l.18,0,.14-.14.06-.24-.06-.2-.16-.16-.26-.11-.22.11-.16.16-.05.2.05.25Z" />
                    <path
                        d="M481.46,1031.3a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,481.46,1031.3Z" />
                    <path
                        d="M482.59,1031.3a.22.22,0,0,1-.22-.23v-1l0-.13-.07,0H482l-.14.05-.27.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09,0,.23-.08h.44l.23.08a.22.22,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,482.59,1031.3Z" />
                    <path
                        d="M483.73,1031.3a.23.23,0,0,1-.23-.23v-1l0-.13-.07,0h-.23l-.14.05-.27.27a.23.23,0,0,1-.32-.32l.31-.31.08,0,.23-.08h.45l.22.08a.22.22,0,0,1,.15.16l.07.3v1.11A.22.22,0,0,1,483.73,1031.3Z" />
                    <path
                        d="M485.91,1031.3h-1.43a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.18-.25.05-.2-.16-.22-.13-.08h-.24l-.21.16-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.34.26-.17a.2.2,0,0,1,.13,0h.37a.2.2,0,0,1,.13,0l.34.25.18.26a.28.28,0,0,1,0,.13v.15a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.69h.89a.23.23,0,0,1,.23.23A.23.23,0,0,1,485.91,1031.3Z" />
                    <path
                        d="M491.12,1030.39H491l-.1,0-.3-.15-.25-.17a.23.23,0,0,1-.1-.15l-.08-.45v-.57l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.12-.09l.31-.07h.28l.35.08a.22.22,0,0,1,.16.15l.08.23a.24.24,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.11-.18,0H491l-.17,0-.14.2,0,.21.42-.08.35.08a.24.24,0,0,1,.11.06l.22.23.05.06.15.3a.36.36,0,0,1,0,.1v.08a.12.12,0,0,1,0,.08l-.15.38a.16.16,0,0,1-.08.1l-.23.15-.32.17Zm-.4-.66.14.1.22.1.38-.21.1-.26-.1-.22-.16-.15-.24-.06-.2.06-.14.14-.05.2Z" />
                    <path
                        d="M493.23,1030.39h-.16l-.38-.15-.07,0-.16-.16a.22.22,0,0,1,0-.08l-.15-.46h0a.17.17,0,0,1,0-.07v-.53a.13.13,0,0,1,0-.06l.15-.53.16-.34a.25.25,0,0,1,.16-.12l.38-.07h.19l.42.08a.24.24,0,0,1,.17.15l.08.23a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.1-.25,0h-.11l-.22,0-.1.21-.06.19.46-.07.35.08a.24.24,0,0,1,.11.06l.23.23.06.11.08.43-.08.42a.21.21,0,0,1-.1.14l-.23.15-.32.17Zm-.33-.57.28.11.37-.2.06-.29-.06-.21-.14-.14-.24-.06-.26.06-.1.15-.09.19.1.31Z" />
                    <path
                        d="M494.59,1030.39a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,1,1,.45,0v1.51A.22.22,0,0,1,494.59,1030.39Z" />
                    <path
                        d="M495.72,1030.39a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.22.22,0,0,1-.32,0,.23.23,0,0,1,0-.32l.31-.3.26-.18a.19.19,0,0,1,.12,0h.3a.2.2,0,0,1,.13,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,495.72,1030.39Z" />
                    <path
                        d="M496.85,1030.39a.22.22,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.17l-.17.12-.26.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.19.19,0,0,1,.12,0h.31a.19.19,0,0,1,.12,0l.23.15a.24.24,0,0,1,.09.13l.08.31v1.11A.22.22,0,0,1,496.85,1030.39Z" />
                    <path
                        d="M499.11,1030.39H497.6a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25.05-.15v-.16l0-.1-.17-.08h-.36l-.18.08-.09.14a.23.23,0,1,1-.45,0v-.07a.2.2,0,0,1,0-.13l.25-.34.09-.05.23-.08h.52a.17.17,0,0,1,.1,0l.3.15a.2.2,0,0,1,.12.13l.07.22a.24.24,0,0,1,0,.08v.22a.14.14,0,0,1,0,.07l-.07.23,0,.06-.22.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M504.16,1029.49l-.35-.08-.11-.06-.23-.23a.27.27,0,0,1-.06-.12l-.07-.45a.11.11,0,0,1,0-.08V1028l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.24.24,0,0,1-.14.29.22.22,0,0,1-.29-.14l0-.11-.18,0h-.17l-.16,0-.15.19,0,.22.29-.08h.2l.36.08a.24.24,0,0,1,.13.09l.15.23.17.33a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.26.26,0,0,1-.13.1l-.3.07ZM504,1029l.24.06h.09l.16,0,.11-.16.11-.27-.21-.38-.22-.06h-.1l-.18,0-.14.14,0,.2,0,.33Z" />
                    <path
                        d="M506.27,1029.49l-.35-.08-.11-.06-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08V1028l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.43.15l0-.11-.18,0h-.18l-.16,0-.15.19,0,.22.42-.08.36.08a.21.21,0,0,1,.1.06l.23.22,0,.06.15.31a.16.16,0,0,1,0,.1v.15a.18.18,0,0,1,0,.1l-.15.3,0,.06-.23.23-.1.06Zm-.18-.51.24.06.2-.06.16-.15.11-.27-.11-.22-.15-.16-.25-.06-.2.06-.14.14-.05.2.06.33Z" />
                    <path
                        d="M507.71,1029.49a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,507.71,1029.49Z" />
                    <path
                        d="M508.84,1029.49a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14,0-.26.26a.23.23,0,0,1-.32-.32l.3-.3a.19.19,0,0,1,.09,0l.22-.08h.45l.22.08a.2.2,0,0,1,.15.16l.08.3v1.11A.22.22,0,0,1,508.84,1029.49Z" />
                    <path
                        d="M510,1029.49a.22.22,0,0,1-.22-.23v-1l-.1-.2-.12-.08h-.14l-.09.08-.39.32a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.51-.44a.23.23,0,0,1,.16-.06h.3a.24.24,0,0,1,.12,0l.23.16.08.08.15.3a.36.36,0,0,1,0,.1v1.06A.23.23,0,0,1,510,1029.49Z" />
                    <path
                        d="M512.23,1029.49h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24.05-.16v-.14l-.08-.17-.1,0h-.38l-.1,0-.09.17v.1a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.15-.3a.25.25,0,0,1,.13-.12l.23-.07h.6l.22.07a.2.2,0,0,1,.13.12l.15.3a.19.19,0,0,1,0,.1v.23s0,0,0,.07l-.08.23,0,.06-.23.3-.69.69h1a.23.23,0,0,1,.23.23A.23.23,0,0,1,512.23,1029.49Z" />
                    <path
                        d="M517.28,1028.58l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.17.17,0,0,1,.1,0l.3.15s.05,0,.06,0l.15.15a.23.23,0,1,1-.32.32l-.12-.12-.22-.11h-.12l-.21.1-.16.21,0,.21.24-.12a.19.19,0,0,1,.1,0h.15a.23.23,0,0,1,.11,0l.3.15.25.16a.24.24,0,0,1,.09.15l.08.49-.08.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06l-.3.08Zm-.18-.5.24.06h.09l.19-.05.14-.14.06-.24-.06-.26-.15-.1-.27-.12-.38.22-.05.25.05.25Z" />
                    <path
                        d="M519.4,1028.58l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.17.17,0,0,1-.06-.11l-.08-.37a.27.27,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.31a.24.24,0,0,1,.08-.06l.3-.15a.23.23,0,0,1,.11,0h.22a.17.17,0,0,1,.1,0l.3.15a.21.21,0,0,1,.11.1l.07.15a.22.22,0,1,1-.4.2l0-.08-.18-.09h-.12l-.21.1-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.07l.09,0,.37.15.08,0,.15.15,0,.06.15.3a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.31-.16.25a.24.24,0,0,1-.15.09Zm-.19-.5.24.06.26-.06.1-.15.11-.28-.11-.22-.09-.09-.28-.11-.37.21-.05.25.06.25Z" />
                    <path
                        d="M520.83,1028.58a.22.22,0,0,1-.23-.22v-1.44a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.44A.22.22,0,0,1,520.83,1028.58Z" />
                    <path
                        d="M522,1028.58a.22.22,0,0,1-.23-.22v-1l-.09-.17-.1,0h-.21l-.1,0-.34.28a.23.23,0,0,1-.32,0,.23.23,0,0,1,0-.32l.37-.3.2-.1a.16.16,0,0,1,.1,0h.37l.23.07a.25.25,0,0,1,.13.12l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,522,1028.58Z" />
                    <path
                        d="M523.17,1028.58a.22.22,0,0,1-.23-.22v-1l-.13-.2h-.21l-.14,0-.26.26a.24.24,0,0,1-.33,0,.24.24,0,0,1,0-.32l.31-.3a.15.15,0,0,1,.09-.06l.22-.07h.37a.22.22,0,0,1,.11,0l.15.08a.19.19,0,0,1,.1.1l.15.3a.36.36,0,0,1,0,.1v1.06A.22.22,0,0,1,523.17,1028.58Z" />
                    <path
                        d="M525.35,1028.58h-1.43a.23.23,0,0,1-.21-.13.25.25,0,0,1,0-.25l1-1,.31-.46-.16-.26-.1,0h-.36l-.07,0-.09.09,0,.18a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22v-.08a.17.17,0,0,1,0-.07l.08-.23a.41.41,0,0,1,0-.09l.15-.15.06,0,.15-.07a.19.19,0,0,1,.1,0h.53l.22.08a.21.21,0,0,1,.13.11l.08.15.14.21a.24.24,0,0,1,0,.12v.15a.28.28,0,0,1,0,.13l-.39.54-.64.69h.91a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M530.48,1027.68h-.07a.23.23,0,0,1-.11,0l-.3-.15-.06,0-.22-.23a.18.18,0,0,1-.05-.07l-.15-.38a.29.29,0,0,1,0-.09v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.2.2,0,0,1,.11-.11l.38-.15.09,0h.15l.08,0,.38.15a.23.23,0,0,1,.13.14l.07.22a.23.23,0,0,1-.43.15l0-.13-.3-.1-.26.11-.11.22-.05.2.45-.07.36.08a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.09.09,0,0,1-.06,0l-.3.15A.17.17,0,0,1,530.48,1027.68Zm-.24-.57.2.11.21-.11.15-.15.07-.24-.06-.21-.14-.14-.24-.06-.26.06-.2.34.1.24Z" />
                    <path
                        d="M532.44,1027.6l-.35-.08a.24.24,0,0,1-.11-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.14.14,0,0,1,0-.09v-.49l.08-.56a.3.3,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.19.19,0,0,1,.1,0h.23a.19.19,0,0,1,.1,0l.3.15a.16.16,0,0,1,.09.07l.15.23a.22.22,0,0,1-.06.31.23.23,0,0,1-.32-.06l-.12-.18-.2-.1h-.11l-.21.11-.16.21,0,.22.29-.08h.2l.36.08a.17.17,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06l-.3.08Zm-.18-.5.24.06h.09l.19-.05.14-.14.06-.24-.06-.21-.14-.14-.24-.06h-.1l-.18,0-.14.14,0,.2,0,.25Z" />
                    <path
                        d="M534,1027.6a.23.23,0,0,1-.23-.22v-1.44a.23.23,0,0,1,.23-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,534,1027.6Z" />
                    <path
                        d="M535.08,1027.6a.23.23,0,0,1-.23-.22v-1l0-.2-.07,0h-.23l-.12,0-.26.33a.23.23,0,0,1-.36-.29l.31-.37a.2.2,0,0,1,.1-.08l.23-.07h.44l.23.07a.26.26,0,0,1,.15.17l.07.38v1A.22.22,0,0,1,535.08,1027.6Z" />
                    <path
                        d="M536.21,1027.6a.22.22,0,0,1-.22-.22v-1l0-.2-.07,0h-.22l-.13,0-.26.33a.23.23,0,0,1-.36-.29l.31-.37a.2.2,0,0,1,.1-.08l.23-.07H536l.23.07a.23.23,0,0,1,.15.17l.07.38v1A.22.22,0,0,1,536.21,1027.6Z" />
                    <path
                        d="M538.4,1027.6H537a.21.21,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-1,.13-.33,0-.07.09-.09v-.06l-.16-.21-.13-.09h-.25l-.21.17-.08.14a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.24.24,0,0,1,0-.12l.26-.34.26-.18a.28.28,0,0,1,.12,0h.38a.28.28,0,0,1,.13,0l.33.26.18.26a.17.17,0,0,1,0,.12v.23a.2.2,0,0,1-.07.16l-.11.12-.14.33a.22.22,0,0,1-.05.08l-.64.59h.86a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M563.14,984.92l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.21.21,0,0,1-.07-.12l-.07-.45a.11.11,0,0,1,0-.08v-.41l.07-.56,0-.09.23-.38a.24.24,0,0,1,.14-.1l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.18,0h-.17l-.16,0-.16.26,0,.22.24-.12.11,0h.07l.42.08a.24.24,0,0,1,.15.09l.15.23.16.33a.17.17,0,0,1,0,.1v.15a.19.19,0,0,1,0,.1l-.15.3-.16.25a.25.25,0,0,1-.15.1Zm-.19-.51.24.06.26-.06.1-.14.11-.28-.21-.38-.26-.05-.38.21,0,.18.06.33Z" />
                    <path
                        d="M565.25,984.92l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.23a.15.15,0,0,1-.06-.09l-.15-.45h0a.22.22,0,0,1,0-.08v-.52s0,0,0-.07l.15-.45.25-.43a.24.24,0,0,1,.14-.1l.3-.07h.21l.42.08a.22.22,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25,0h-.1l-.16,0-.18.3,0,.13h0l.43-.08.36.08a.21.21,0,0,1,.1.06l.23.23a.21.21,0,0,1,.06.1l.07.3v.21l-.08.36a.27.27,0,0,1-.06.1l-.23.23a.17.17,0,0,1-.1.06Zm-.19-.51.24.06.21-.06.14-.14.06-.24v-.09l-.05-.19-.14-.14-.24-.06-.21.06-.16.16-.09.19.11.31Z" />
                    <path
                        d="M566.68,984.92a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,566.68,984.92Z" />
                    <path
                        d="M567.81,984.92a.23.23,0,0,1-.23-.23v-1.05l0-.13-.08,0h-.23l-.14,0-.26.27a.24.24,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09,0,.23-.08h.44l.23.08a.19.19,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,567.81,984.92Z" />
                    <path
                        d="M569,984.92a.23.23,0,0,1-.23-.23v-1l-.08-.17-.11,0h-.22l-.15,0-.26.27a.23.23,0,0,1-.32,0,.22.22,0,0,1,0-.32l.3-.31.09,0,.23-.08h.44l.23.08a.28.28,0,0,1,.13.11l.15.3a.43.43,0,0,1,0,.11v1.05A.22.22,0,0,1,569,984.92Z" />
                    <path
                        d="M571.2,984.92h-1.5a.22.22,0,0,1-.21-.14.21.21,0,0,1,0-.25l1.05-1,.18-.25.06-.16v-.13l0-.07-.17-.14h-.36l-.1,0-.09.17V983a.23.23,0,1,1-.45,0v-.15a.36.36,0,0,1,0-.1l.16-.3a.18.18,0,0,1,.13-.11l.22-.08h.53l.1,0,.15.08.06,0,.15.15,0,.06.08.15a.36.36,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M560,922.48l-.42-.08a.24.24,0,0,1-.14-.1l-.15-.23-.17-.41h0a.19.19,0,0,1,0-.08V921a.13.13,0,0,1,0-.06l.15-.53.16-.34a.27.27,0,0,1,.11-.1l.3-.15.1,0h.22l.1,0,.31.15.06,0,.15.15a.24.24,0,0,1,0,.33.24.24,0,0,1-.32,0l-.13-.13-.22-.11H560l-.19.09-.11.24-.05.18.29-.12h.16l.1,0,.3.15.25.17a.21.21,0,0,1,.1.14l.08.5-.08.35a.24.24,0,0,1-.06.11l-.23.23-.11,0Zm-.24-.51.29.06.21-.06.14-.14.06-.24-.06-.26-.15-.1-.21-.11-.29.12-.08.08-.1.25.11.3Z" />
                    <path
                        d="M562.08,922.48l-.36-.09-.1,0-.23-.23a.23.23,0,0,1-.06-.12l-.08-.37V921l.08-.56a.21.21,0,0,1,0-.1l.23-.3a.27.27,0,0,1,.08-.07l.3-.15.1,0h.23l.1,0,.3.15a.24.24,0,0,1,.1.1l.07.15a.23.23,0,0,1-.1.31.23.23,0,0,1-.3-.1l0-.09-.19-.09h-.12l-.2.1-.16.22,0,.2.24-.12.1,0h.15l.1,0,.3.15.06,0,.15.16a.18.18,0,0,1,0,.07l.15.38a.19.19,0,0,1,0,.08v.08L563,922a.24.24,0,0,1-.06.11l-.23.23-.1,0-.31.08Zm-.19-.51.24.06h.1l.18,0,.14-.14.06-.21-.12-.3-.09-.09-.27-.11-.38.21,0,.25.06.26Z" />
                    <path
                        d="M563.59,922.48a.23.23,0,0,1-.23-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,563.59,922.48Z" />
                    <path
                        d="M564.72,922.48a.23.23,0,0,1-.23-.23v-1l-.13-.21h-.27l-.07,0-.27.27a.22.22,0,0,1-.32,0,.21.21,0,0,1,0-.31l.3-.31.06,0,.15-.08.1,0h.38a.19.19,0,0,1,.1,0l.15.07a.24.24,0,0,1,.1.1l.15.3a.18.18,0,0,1,0,.1v1.06A.22.22,0,0,1,564.72,922.48Z" />
                    <path
                        d="M565.85,922.48a.23.23,0,0,1-.23-.23v-1.06l0-.12-.08,0h-.23l-.14.05-.26.26a.23.23,0,0,1-.32-.32l.3-.3.09-.05.22-.08h.45l.23.08a.21.21,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,565.85,922.48Z" />
                    <path
                        d="M568,922.48H566.6a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1-1,.26-.48-.15-.26-.11,0h-.3l-.14.05-.08.07,0,.18a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07s0,0,0-.08l.08-.22a.19.19,0,0,1,.05-.09l.16-.15a.16.16,0,0,1,.08-.06l.23-.07h.52l.23.07a.25.25,0,0,1,.13.12l.07.15.14.2a.28.28,0,0,1,0,.13v.15a.25.25,0,0,1,0,.12L568,921l-.14.28a.1.1,0,0,1,0,.05l-.67.67H568a.23.23,0,0,1,.22.23A.22.22,0,0,1,568,922.48Z" />
                    <path
                        d="M558.38,898.42h-.07l-.1,0-.3-.15s0,0-.06,0l-.23-.22a.23.23,0,0,1-.06-.12l-.08-.37v-.58l.08-.56a.18.18,0,0,1,0-.1l.23-.3a.19.19,0,0,1,.08-.07l.3-.15a.16.16,0,0,1,.1,0h.22a.22.22,0,0,1,.11,0l.3.15a.24.24,0,0,1,.11.13l.08.23a.22.22,0,0,1-.15.28.22.22,0,0,1-.28-.14l-.05-.14-.17-.08h-.12l-.2.1-.16.21,0,.22.41-.08.36.08a.24.24,0,0,1,.11.06l.22.23,0,.06.16.3a.3.3,0,0,1,0,.1v.07a.43.43,0,0,1,0,.11l-.16.3-.16.25a.18.18,0,0,1-.11.08l-.37.15Zm-.24-.56.21.1.26-.1.11-.17.11-.21-.1-.21-.16-.15-.24-.06-.21.05-.14.14-.05.2.06.25Z" />
                    <path
                        d="M560.42,898.42l-.1,0-.3-.15-.06,0-.23-.22a.35.35,0,0,1-.05-.08l-.15-.37a.29.29,0,0,1,0-.09v-.53s0,0,0-.06l.16-.53.16-.34a.25.25,0,0,1,.12-.11l.38-.15h.32l.37.15a.25.25,0,0,1,.13.14l.08.23a.23.23,0,0,1-.43.14l0-.13-.31-.09-.25.1-.12.23-.05.19.46-.07.35.08a.24.24,0,0,1,.11.06l.22.23a.21.21,0,0,1,.06.1l.09.43-.09.36a.24.24,0,0,1-.06.11l-.22.22a.24.24,0,0,1-.11.06l-.27.09A.2.2,0,0,1,560.42,898.42Zm-.17-.56.13.06.06,0,.24-.06.14-.14.06-.24-.06-.2-.14-.14-.24-.06-.26.05-.19.34.1.24Z" />
                    <path
                        d="M561.85,898.34a.22.22,0,0,1-.22-.22v-1.43a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,561.85,898.34Z" />
                    <path
                        d="M563,898.34a.22.22,0,0,1-.22-.22v-1l0-.21-.06,0h-.23l-.13,0-.26.33a.22.22,0,0,1-.32,0,.21.21,0,0,1,0-.31l.3-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.22.22,0,0,1,.15.17l.08.37v1A.22.22,0,0,1,563,898.34Z" />
                    <path
                        d="M564.12,898.34a.22.22,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.13,0-.26.33a.22.22,0,0,1-.32,0,.22.22,0,0,1,0-.31l.3-.38a.23.23,0,0,1,.1-.07l.23-.08h.45l.22.08a.2.2,0,0,1,.15.17l.08.37v1A.22.22,0,0,1,564.12,898.34Z" />
                    <path
                        d="M566.38,898.34h-1.51a.22.22,0,0,1-.15-.39l1-1,.25-.43v-.14l0-.1-.07,0-.06,0-.08-.08h-.29l-.17.11,0,.19a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.25.25,0,0,1,0-.07l.07-.22a.15.15,0,0,1,.06-.09l.07-.08.26-.18a.28.28,0,0,1,.13,0h.45a.23.23,0,0,1,.16.06l.12.13.12.06a.2.2,0,0,1,.12.13l.07.22a.2.2,0,0,1,0,.07v.23a.3.3,0,0,1,0,.1l-.08.15-.23.39,0,0-.63.59h.93a.22.22,0,0,1,.22.23A.22.22,0,0,1,566.38,898.34Z" />
                    <path
                        d="M555.67,859l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.23.23,0,0,1-.06-.12l-.08-.45v-.57l.08-.49a.13.13,0,0,1,0-.08l.22-.38a.24.24,0,0,1,.14-.1l.3-.07h.29l.35.08a.22.22,0,0,1,.16.15l.08.23a.23.23,0,0,1-.15.28.22.22,0,0,1-.28-.14l0-.11-.18,0h-.17l-.16.05-.15.26,0,.15.41-.08.43.08a.23.23,0,0,1,.14.1l.15.22.17.33a.3.3,0,0,1,0,.1v.15a.36.36,0,0,1,0,.1l-.15.3-.17.25a.23.23,0,0,1-.14.1Zm-.19-.51.24.06.26,0,.1-.15.12-.28-.21-.38-.29,0-.21,0-.14.14-.05.21.05.32Z" />
                    <path
                        d="M558.46,859H557a.22.22,0,0,1-.21-.14.21.21,0,0,1,0-.25l1-1.05.19-.25,0-.16V857l0-.07-.08-.09-.14-.05h-.31l-.1,0,0,.06s0,.05-.05.06l-.08.09v.05a.23.23,0,1,1-.45,0v-.15a.25.25,0,0,1,.06-.16l.13-.12.06-.12a.21.21,0,0,1,.13-.11l.22-.08H558l.23.08.09.05.15.15a.21.21,0,0,1,0,.06l.08.15a.36.36,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.3-.69.7h.89a.23.23,0,1,1,0,.45Z" />
                    <path d="M559.21,859a.22.22,0,0,1-.22-.23v-1.43a.23.23,0,1,1,.45,0v1.43A.23.23,0,0,1,559.21,859Z" />
                    <path
                        d="M560.34,859a.22.22,0,0,1-.22-.23v-1l0-.13-.07,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.3-.3.09-.06.23-.07.07,0h.3l.08,0,.22.07a.26.26,0,0,1,.15.16l.07.3v1.11A.23.23,0,0,1,560.34,859Z" />
                    <path
                        d="M561.55,859a.23.23,0,0,1-.23-.23v-1l-.08-.17-.1,0h-.23l-.14,0-.27.27a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07.07,0h.3l.08,0,.22.07a.21.21,0,0,1,.13.11l.15.31a.17.17,0,0,1,0,.1v1A.23.23,0,0,1,561.55,859Z" />
                    <path
                        d="M563.74,859h-1.51a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.05.18-.25.05-.16V857l0-.07-.17-.14h-.37l-.1,0-.08.17v.09a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.15a.19.19,0,0,1,0-.1l.15-.3a.24.24,0,0,1,.13-.11l.23-.08h.52l.1,0,.15.08.06,0,.15.15a.21.21,0,0,1,0,.06l.08.15a.18.18,0,0,1,0,.1v.23a.17.17,0,0,1,0,.07l-.07.23,0,.06-.22.3-.7.7h1a.22.22,0,0,1,.22.22A.22.22,0,0,1,563.74,859Z" />
                    <path
                        d="M576.94,1008.37h-.08a.23.23,0,1,1,0-.45h.08a.22.22,0,0,1,.22.23A.22.22,0,0,1,576.94,1008.37Z" />
                    <path class="cls-10"
                        d="M459.44,236.9a.22.22,0,0,1-.22-.21.22.22,0,0,1,.21-.24l21.87-1.59a.25.25,0,0,1,.24.21.23.23,0,0,1-.21.25l-21.87,1.58Z" />
                    <path d="M428.21,1082.73a.21.21,0,0,1-.21-.21.22.22,0,0,1,.2-.24l55-4a.23.23,0,0,1,0,.45l-55,4Z" />
                    <path
                        d="M439.61,1089a.23.23,0,0,1-.23-.23v-2.19a.22.22,0,0,1,.23-.22.23.23,0,0,1,.23.22v2.19A.23.23,0,0,1,439.61,1089Z" />
                    <path
                        d="M440.29,1086.8h-1.43a.23.23,0,1,1,0-.45h1.43a.22.22,0,0,1,.22.22A.22.22,0,0,1,440.29,1086.8Z" />
                    <path
                        d="M440.82,1089a.23.23,0,0,1-.23-.23v-2.19a.22.22,0,0,1,.23-.22h1l.35.08a.23.23,0,0,1,.15.12l.08.15.13.2a.2.2,0,0,1,0,.13v.3a.2.2,0,0,1-.07.16l-.12.12-.06.12a.23.23,0,0,1-.15.12l-.3.08H441v.83A.22.22,0,0,1,440.82,1089Zm.22-1.51h.76l.14,0,0-.06,0-.06.09-.09v-.13l-.16-.26-.2,0H441Z" />
                    <path
                        d="M443.46,1089l-.36-.08a.39.39,0,0,1-.11-.06l-.22-.23a.23.23,0,0,1,.32-.32l.18.18.24.06h.32l.24,0,.06-.09v-.2l-.08-.17-.19-.13-1-.36a.24.24,0,0,1-.11-.13l-.08-.23s0,0,0-.07v-.22a.2.2,0,0,1,.07-.16l.22-.23a.24.24,0,0,1,.11-.06l.3-.08h.43l.42.08a.24.24,0,0,1,.15.09l.15.23a.22.22,0,0,1-.06.31.24.24,0,0,1-.32-.06l-.1-.15-.28,0h-.33l-.19,0-.12.12v.1l0,.1.06,0,.2.06.61.23.38.28a.24.24,0,0,1,.06.09l.07.23a.14.14,0,0,1,0,.07v.3a.33.33,0,0,1,0,.13l-.15.22a.25.25,0,0,1-.15.1l-.37.07Z" />
                    <path
                        d="M448.66,1089h-1.43a.22.22,0,0,1-.21-.14.21.21,0,0,1,.05-.25l1-1,.26-.46v-.06l-.09-.09,0-.06,0-.07-.11,0h-.3l-.14,0-.12.15v.1a.23.23,0,1,1-.45,0V1087a.18.18,0,0,1,0-.1l.07-.15.05-.06.15-.15a.2.2,0,0,1,.09-.06l.22-.07h.52l.23.07a.22.22,0,0,1,.13.12l.06.12.12.12a.2.2,0,0,1,.07.16v.23a.17.17,0,0,1,0,.12l-.15.23-.14.28,0,.06-.67.66h.89a.23.23,0,0,1,.22.23A.22.22,0,0,1,448.66,1089Z" />
                    <path
                        d="M439.38,1092.68a.22.22,0,0,1-.22-.22v-1.68h0l-.22.07a.23.23,0,1,1-.15-.43l.17,0,.26-.33a.23.23,0,0,1,.25-.07.23.23,0,0,1,.15.21v2.27A.22.22,0,0,1,439.38,1092.68Z" />
                    <path
                        d="M441.65,1092.68a.22.22,0,0,1-.23-.22v-.53h-.76a.22.22,0,0,1-.19-.12.21.21,0,0,1,0-.23l1-1.51a.22.22,0,0,1,.25-.09.21.21,0,0,1,.16.21v1.29h.3a.23.23,0,1,1,0,.45h-.3v.53A.22.22,0,0,1,441.65,1092.68Zm-.57-1.2h.34V1091Z" />
                    <path
                        d="M443.23,1092.61l-.36-.08a.33.33,0,0,1-.1-.06l-.08-.08-.18-.26a.28.28,0,0,1,0-.13v-.3a.24.24,0,0,1,0-.12l.29-.44a.27.27,0,0,1-.09-.12l-.07-.23a.15.15,0,0,1,0-.07v-.15a.17.17,0,0,1,0-.07l.07-.23a.25.25,0,0,1,.12-.13l.3-.15.1,0h.45l.1,0,.3.15a.25.25,0,0,1,.12.13l.07.23a.17.17,0,0,1,0,.07v.15a.15.15,0,0,1,0,.07l-.07.23a.27.27,0,0,1-.09.12l.29.44a.25.25,0,0,1,0,.12v.3a.28.28,0,0,1,0,.13l-.26.34-.1.06-.3.07Zm-.19-.51.24.06h.4l.22-.08.08-.13v-.17l-.21-.32-.31-.06-.32.06-.21.32v.17Zm.07-1.33.35.13.34-.13,0-.16,0-.1-.17-.09h-.35l-.17.09,0,.18Z" />
                    <path
                        d="M444.89,1092.61a.23.23,0,0,1-.23-.23V1091a.23.23,0,1,1,.45,0v1.43A.22.22,0,0,1,444.89,1092.61Z" />
                    <path
                        d="M446.09,1092.61a.22.22,0,0,1-.22-.23v-.94l-.1-.23-.09,0h-.21l-.07,0-.35.35a.23.23,0,1,1-.32-.32l.38-.38.05,0,.16-.07a.17.17,0,0,1,.1,0h.37l.22.08a.2.2,0,0,1,.14.13l.15.38a.11.11,0,0,1,0,.08v1A.23.23,0,0,1,446.09,1092.61Z" />
                    <path
                        d="M447.23,1092.61a.23.23,0,0,1-.23-.23v-.94l-.13-.26h-.27l-.06,0-.27.34a.22.22,0,1,1-.35-.28l.3-.38.08-.06.15-.07a.17.17,0,0,1,.1,0h.37a.17.17,0,0,1,.1,0l.16.07a.32.32,0,0,1,.11.12l.15.38a.19.19,0,0,1,0,.08v1A.22.22,0,0,1,447.23,1092.61Z" />
                    <path d="M483.65,115.18h0l-3.85-.07a.23.23,0,0,1,0-.45h0l3.84.07a.23.23,0,1,1,0,.45Z" />
                    <path d="M488.48,121a.22.22,0,0,1-.23-.22v-2.19a.23.23,0,1,1,.45,0v2.19A.22.22,0,0,1,488.48,121Z" />
                    <path d="M489.23,118.8h-1.51a.22.22,0,0,1-.22-.22.22.22,0,0,1,.22-.23h1.51a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M489.76,121a.22.22,0,0,1-.23-.22v-2.19a.23.23,0,0,1,.23-.23h.9l.36.08.2.1a.21.21,0,0,1,.11.13l.08.22s0,.05,0,.08v.3s0,0,0,.07l-.08.23a.28.28,0,0,1-.11.13l-.46.22a.17.17,0,0,1-.1,0H490v.83A.22.22,0,0,1,489.76,121Zm.22-1.51h.63l.32-.16,0-.1V119l0-.1-.07,0-.25-.06H490Z" />
                    <path
                        d="M492.78,121h-.46l-.1,0-.3-.15-.25-.17a.22.22,0,0,1-.06-.31.22.22,0,0,1,.31-.06l.23.15.23.11h.34l.36-.2v-.16l-.09-.08,0-.06,0-.07-1-.35a.24.24,0,0,1-.13-.11l-.06-.12-.13-.12a.25.25,0,0,1-.06-.16v-.23a.23.23,0,0,1,.06-.16l.23-.23a.24.24,0,0,1,.11-.06l.3-.07h.51l.35.08a.24.24,0,0,1,.11.06l.22.23a.23.23,0,0,1-.32.32l-.18-.18-.24-.06h-.4l-.18.06L492,119l.09.09a.15.15,0,0,1,0,.06l0,.06,1,.35a.28.28,0,0,1,.13.11l.06.12.12.13a.2.2,0,0,1,.07.16v.37a.23.23,0,0,1-.1.19l-.23.15-.32.17Z" />
                    <path
                        d="M496.92,121a.22.22,0,0,1-.22-.22v-1.68h0l-.22.08a.23.23,0,0,1-.15-.43l.18-.06.26-.26a.21.21,0,0,1,.25,0,.23.23,0,0,1,.14.21v2.19A.22.22,0,0,1,496.92,121Z" />
                    <path
                        d="M479.73,1054.68h-.08a.19.19,0,0,1-.1,0l-.3-.15-.25-.16a.25.25,0,0,1-.1-.16l-.07-.44a.11.11,0,0,1,0-.08v-.49l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.22.22,0,0,1,.13-.08l.3-.08h.28l.36.08a.24.24,0,0,1,.16.15l.07.22a.23.23,0,0,1-.14.29.24.24,0,0,1-.29-.14l0-.11-.19,0h-.17l-.16,0-.15.2,0,.21.42-.08.36.09a.27.27,0,0,1,.1.06l.23.22,0,.06.15.3a.18.18,0,0,1,0,.1v.08a.19.19,0,0,1,0,.08l-.15.38a.31.31,0,0,1-.09.11l-.22.15-.33.16A.19.19,0,0,1,479.73,1054.68Zm-.4-.67.15.1.21.11.38-.22.11-.26-.11-.21-.16-.16-.24-.06-.2.06-.14.14-.05.2Z" />
                    <path
                        d="M481.84,1054.68h-.08l-.08,0-.38-.15a.22.22,0,0,1-.1-.09l-.15-.22-.17-.42h0a.17.17,0,0,1,0-.07v-.52a.2.2,0,0,1,0-.07l.15-.52.17-.34a.18.18,0,0,1,.15-.12l.38-.08h.2l.35.08a.22.22,0,0,1,.14.09l.15.23a.22.22,0,0,1-.07.31.22.22,0,0,1-.31-.06l-.1-.15-.22-.06h-.1l-.22,0-.1.2-.06.2.46-.08.36.09a.21.21,0,0,1,.1.06l.23.22a.24.24,0,0,1,.06.11l.08.43-.08.36a.21.21,0,0,1-.06.1l-.23.23-.06,0-.3.15A.17.17,0,0,1,481.84,1054.68Zm-.31-.57.27.11.21-.11.15-.15.06-.25-.05-.2-.14-.14-.24-.06-.26.06-.2.33.12.29Z" />
                    <path
                        d="M483.2,1054.68a.23.23,0,0,1-.23-.23v-1.51a.23.23,0,1,1,.45,0v1.51A.23.23,0,0,1,483.2,1054.68Z" />
                    <path
                        d="M484.33,1054.68a.23.23,0,0,1-.23-.23v-1.06l0-.16-.1-.06h-.17l-.17.11-.26.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.19.19,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,484.33,1054.68Z" />
                    <path
                        d="M485.46,1054.68a.24.24,0,0,1-.23-.23v-1.06l0-.16-.1-.06h-.16l-.17.11-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.28.28,0,0,1,.13,0h.3a.25.25,0,0,1,.12,0l.23.15a.19.19,0,0,1,.09.14l.08.3v1.11A.23.23,0,0,1,485.46,1054.68Z" />
                    <path
                        d="M487.65,1054.68h-1.44a.24.24,0,0,1-.21-.14.25.25,0,0,1,.05-.25l1.06-1.06.18-.24.06-.16v-.15l0-.11-.07,0-.06,0-.08-.09h-.29l-.21.16-.08.14a.23.23,0,0,1-.23.23.23.23,0,0,1-.23-.23v-.07a.28.28,0,0,1,0-.13l.26-.33.26-.18a.17.17,0,0,1,.12,0h.45a.2.2,0,0,1,.16.07l.13.12.12.06a.24.24,0,0,1,.11.13l.08.23s0,0,0,.07v.22s0,.05,0,.08l-.08.22,0,.07-.23.3-.69.69h.89a.22.22,0,0,1,.22.23A.23.23,0,0,1,487.65,1054.68Z" />
                    <path
                        d="M492.78,1053.69l-.36-.08a.24.24,0,0,1-.11-.06l-.22-.22a.29.29,0,0,1-.07-.12l-.07-.37a.14.14,0,0,1,0-.09v-.49l.07-.56a.19.19,0,0,1,.05-.1l.22-.3a.27.27,0,0,1,.08-.07l.3-.15a.22.22,0,0,1,.11,0H493a.16.16,0,0,1,.1,0l.3.15a.22.22,0,0,1,.12.13l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.14-.17-.08h-.12l-.21.1-.16.21,0,.21.24-.12a.23.23,0,0,1,.11,0h.07a.17.17,0,0,1,.1,0l.3.15s.05,0,.06,0l.23.23a.21.21,0,0,1,0,.06l.15.3a.17.17,0,0,1,0,.1v.07a.23.23,0,0,1,0,.11l-.15.3,0,.06-.23.22a.21.21,0,0,1-.1.06Zm-.19-.5.24.06.2-.06.16-.16.11-.2-.11-.21-.17-.17-.21-.11-.2.11-.16.15-.05.2.05.25Z" />
                    <path
                        d="M494.89,1053.69l-.42-.08a.21.21,0,0,1-.15-.09l-.15-.23-.17-.41a.3.3,0,0,1,0-.1v-.52a.13.13,0,0,1,0-.06l.15-.53.17-.34a.19.19,0,0,1,.1-.1l.3-.15a.18.18,0,0,1,.1,0H495a.18.18,0,0,1,.1,0l.3.15a.23.23,0,0,1,.09.08l.15.22a.23.23,0,0,1-.07.32.22.22,0,0,1-.31-.07l-.12-.17-.2-.1h-.12l-.18.09-.12.24-.05.18.29-.12.09,0H495a.17.17,0,0,1,.1,0l.31.15a.1.1,0,0,1,.05,0l.23.23a.21.21,0,0,1,.06.1l.08.43-.08.36a.24.24,0,0,1-.06.11l-.23.22a.21.21,0,0,1-.1.06Zm-.25-.5.29.06.22-.06.14-.14.06-.24-.06-.2-.16-.16-.21-.11-.26.11-.21.35.12.28Z" />
                    <path
                        d="M496.32,1053.69a.22.22,0,0,1-.23-.22V1052a.23.23,0,0,1,.23-.23.23.23,0,0,1,.23.23v1.43A.23.23,0,0,1,496.32,1053.69Z" />
                    <path
                        d="M497.45,1053.69a.23.23,0,0,1-.23-.22v-1l0-.21-.07,0h-.23l-.12,0-.26.33a.22.22,0,0,1-.32,0,.21.21,0,0,1,0-.31l.3-.38a.26.26,0,0,1,.11-.07l.23-.08h.44l.23.08a.24.24,0,0,1,.15.17l.07.37v1A.22.22,0,0,1,497.45,1053.69Z" />
                    <path
                        d="M498.58,1053.69a.22.22,0,0,1-.22-.22v-1l-.05-.21-.07,0H498l-.13,0-.26.33a.23.23,0,0,1-.36-.28l.31-.38a.18.18,0,0,1,.1-.07l.23-.08h.44l.23.08a.22.22,0,0,1,.15.17l.07.37v1A.22.22,0,0,1,498.58,1053.69Z" />
                    <path
                        d="M500.77,1053.69h-1.43a.21.21,0,0,1-.21-.14.2.2,0,0,1,.05-.24l1.05-1.06.24-.34v-.14l0-.1-.06,0-.2-.12h-.24l-.21.16-.08.14a.23.23,0,0,1-.23.23.24.24,0,0,1-.23-.23v-.08a.28.28,0,0,1,0-.12l.26-.34.26-.18.12,0h.38a.28.28,0,0,1,.13,0l.35.21a.26.26,0,0,1,.11.14l.08.22a.2.2,0,0,1,0,.07v.23a.3.3,0,0,1,0,.1l-.08.15-.25.34-.69.69h.89a.23.23,0,1,1,0,.45Z" />
                    <path
                        d="M459.14,1101.13a.24.24,0,0,1-.2-.11.23.23,0,0,1,.09-.31l11.39-6.56a.21.21,0,0,1,.3.08.22.22,0,0,1-.08.31l-11.39,6.56A.2.2,0,0,1,459.14,1101.13Z" />
                    <path
                        d="M473.39,1092.91a.23.23,0,0,1-.11-.42l11.39-6.56a.22.22,0,0,1,.31.08.23.23,0,0,1-.09.31l-11.38,6.56Z" />
                    <path
                        d="M487.65,1084.69a.23.23,0,0,1-.2-.11.24.24,0,0,1,.08-.31l9.51-5.51,8.81-5.65a.22.22,0,0,1,.31.07.22.22,0,0,1-.07.31l-8.82,5.66-9.51,5.51A.2.2,0,0,1,487.65,1084.69Z" />
                    <path
                        d="M508.76,1071.79a.23.23,0,0,1-.19-.1.22.22,0,0,1,.07-.31l11.09-7.09a.22.22,0,0,1,.31.07.23.23,0,0,1-.07.31l-11.09,7.09A.24.24,0,0,1,508.76,1071.79Z" />
                    <path
                        d="M522.64,1063a.23.23,0,0,1-.12-.42l11.08-7.09a.23.23,0,0,1,.31.07.24.24,0,0,1-.06.32l-11.09,7.08A.19.19,0,0,1,522.64,1063Z" />
                    <path
                        d="M536.44,1054.07a.23.23,0,0,1-.12-.42l8.87-5.56,5.41-6.23a.22.22,0,0,1,.32,0,.23.23,0,0,1,0,.32l-5.43,6.26,0,0-8.9,5.58Z" />
                    <path
                        d="M553,1039.82a.2.2,0,0,1-.14-.06.22.22,0,0,1,0-.32l8.68-9.88a.23.23,0,1,1,.34.3l-8.68,9.88A.21.21,0,0,1,553,1039.82Z" />
                    <path
                        d="M576.41,1009.28a.19.19,0,0,1-.12,0,.23.23,0,0,1-.08-.31l5.49-9.24,1.65-9.16a.23.23,0,0,1,.26-.18.22.22,0,0,1,.18.26l-1.65,9.2,0,.08-5.51,9.28A.23.23,0,0,1,576.41,1009.28Z" />
                    <path
                        d="M584.1,987.56h0a.22.22,0,0,1-.18-.26l1.58-9.2-.38-7.49a.23.23,0,0,1,.21-.24.23.23,0,0,1,.24.22l.38,7.54-1.59,9.25A.22.22,0,0,1,584.1,987.56Z" />
                    <path
                        d="M585.16,967.57a.23.23,0,0,1-.23-.21l-.68-13.12a.23.23,0,0,1,.22-.24.23.23,0,0,1,.23.21l.68,13.13a.22.22,0,0,1-.21.23Z" />
                    <path
                        d="M584.33,951.13a.23.23,0,0,1-.23-.21l-.75-13.12a.22.22,0,0,1,.21-.24.25.25,0,0,1,.24.21l.75,13.12a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M583.42,934.69a.23.23,0,0,1-.23-.21l-.37-7.54-1.73-12.27a.22.22,0,0,1,.19-.26.23.23,0,0,1,.25.19l1.74,12.29.38,7.57a.22.22,0,0,1-.22.23Z" />
                    <path
                        d="M580.86,911.62a.23.23,0,0,1-.23-.2l-1.73-12.37-1.58-8.51a.21.21,0,0,1,.18-.26.22.22,0,0,1,.26.18l1.58,8.52,1.74,12.38a.22.22,0,0,1-.19.25Z" />
                    <path
                        d="M577,887.49a.22.22,0,0,1-.22-.19l-2.34-13a.22.22,0,0,1,.18-.26.24.24,0,0,1,.27.18l2.33,13a.22.22,0,0,1-.18.26Z" />
                    <path
                        d="M574.07,871.27a.22.22,0,0,1-.22-.18l-2.34-12.9a.23.23,0,0,1,.18-.26.21.21,0,0,1,.26.18l2.34,12.9a.23.23,0,0,1-.18.26Z" />
                    <path
                        d="M571.2,855.13A.22.22,0,0,1,571,855l-1.58-8.6-2.19-12.22a.23.23,0,0,1,.18-.26.24.24,0,0,1,.27.18l2.18,12.22,1.59,8.6a.23.23,0,0,1-.18.26Z" />
                    <path
                        d="M566.83,831.08a.22.22,0,0,1-.22-.19L564.27,818a.23.23,0,0,1,.18-.27.24.24,0,0,1,.27.18l2.33,12.9a.22.22,0,0,1-.18.26Z" />
                    <path
                        d="M563.89,814.94a.22.22,0,0,1-.22-.19l-2.19-12.29-.61-12.85a.24.24,0,0,1,.22-.24c.12,0,.23.09.23.22l.61,12.82,2.18,12.26a.22.22,0,0,1-.18.26Z" />
                    <path
                        d="M561,786.51a.24.24,0,0,1-.23-.22l-.6-13.12a.23.23,0,0,1,.21-.24h0a.24.24,0,0,1,.23.22l.6,13.12a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M560.19,770.07a.22.22,0,0,1-.22-.22l-.61-13.12a.25.25,0,0,1,.22-.24.21.21,0,0,1,.24.22l.6,13.12a.23.23,0,0,1-.22.24Z" />
                    <path
                        d="M559.44,753.7a.23.23,0,0,1-.23-.21l-.6-13.2a.23.23,0,0,1,.22-.24.21.21,0,0,1,.23.22l.61,13.2a.23.23,0,0,1-.22.23Z" />
                    <path
                        d="M558.69,737.26a.23.23,0,0,1-.23-.21l-.6-12.9-.46-8.82a.24.24,0,0,1,.22-.24.23.23,0,0,1,.24.22l.45,8.82.6,12.9a.22.22,0,0,1-.21.23Z" />
                    <path
                        d="M557.48,712.23a.24.24,0,0,1-.23-.22l-.6-13.12a.23.23,0,0,1,.22-.24.21.21,0,0,1,.23.22l.61,13.12a.25.25,0,0,1-.22.24Z" />
                    <path
                        d="M556.72,695.86a.21.21,0,0,1-.22-.21l-.38-8.83.3-10.5a.24.24,0,0,1,.23-.22h0a.24.24,0,0,1,.22.24l-.31,10.48.38,8.81a.22.22,0,0,1-.22.23Z" />
                    <path
                        d="M556.8,673.31h0a.22.22,0,0,1-.22-.23l.31-10.48.75-14.41a.22.22,0,0,1,.24-.21.22.22,0,0,1,.21.23l-.75,14.41-.3,10.47A.23.23,0,0,1,556.8,673.31Z" />
                    <path
                        d="M558,645.18h0a.22.22,0,0,1-.22-.23l.68-13.2a.21.21,0,0,1,.24-.21.22.22,0,0,1,.21.23l-.68,13.2A.21.21,0,0,1,558,645.18Z" />
                    <path
                        d="M558.91,628.75h0a.21.21,0,0,1-.21-.23l.75-14.41v-8.73a.23.23,0,1,1,.45,0v8.74l-.75,14.42A.24.24,0,0,1,558.91,628.75Z" />
                    <path
                        d="M559.74,602.28h0a.24.24,0,0,1-.23-.23l.08-13.12a.22.22,0,0,1,.23-.23.22.22,0,0,1,.22.23L560,602.05A.23.23,0,0,1,559.74,602.28Z" />
                    <path
                        d="M559.82,585.84h0a.24.24,0,0,1-.23-.23l.08-13.12a.22.22,0,0,1,.22-.23h0a.23.23,0,0,1,.23.23L560,585.61A.23.23,0,0,1,559.82,585.84Z" />
                    <path
                        d="M560,569.4a.23.23,0,0,1-.23-.23V560.5L558,552.78l-3.24-13.95-2.26-9.43a.22.22,0,0,1,.17-.27.23.23,0,0,1,.27.17l2.26,9.42,3.24,14,1.74,7.77v8.72A.23.23,0,0,1,560,569.4Z" />
                    <path
                        d="M552,526.41a.23.23,0,0,1-.22-.18l-2.18-9.42-3.24-10.62a.22.22,0,0,1,.15-.28.22.22,0,0,1,.28.15L550,516.69l2.19,9.44a.22.22,0,0,1-.17.27Z" />
                    <path
                        d="M545.64,503.18a.22.22,0,0,1-.22-.16l-3.24-10.63-3.92-13.12a.22.22,0,1,1,.43-.13l3.92,13.12,3.25,10.63a.23.23,0,0,1-.15.28Z" />
                    <path
                        d="M537.49,476.26a.22.22,0,0,1-.21-.16l-3.85-12.59a.23.23,0,1,1,.44-.14l3.84,12.6a.22.22,0,0,1-.15.28Z" />
                    <path
                        d="M532.74,460.57a.22.22,0,0,1-.21-.16l-4-13.12-.61-10.53a.22.22,0,0,1,.21-.24.23.23,0,0,1,.24.21l.6,10.48,4,13.07a.22.22,0,0,1-.15.28Z" />
                    <path
                        d="M528,433.65a.21.21,0,0,1-.22-.21L527.16,423l-2.63-14.3a.24.24,0,0,1,.18-.27.22.22,0,0,1,.26.18l2.64,14.33.61,10.51a.22.22,0,0,1-.21.24Z" />
                    <path
                        d="M524.15,405.67a.23.23,0,0,1-.23-.18l-2.33-13a.23.23,0,0,1,.18-.27.23.23,0,0,1,.26.19l2.34,13a.23.23,0,0,1-.18.26Z" />
                    <path
                        d="M521.21,389.46a.24.24,0,0,1-.23-.18l-2.41-12.9a.23.23,0,0,1,.18-.26.21.21,0,0,1,.26.18l2.42,12.89a.24.24,0,0,1-.18.27Z" />
                    <path
                        d="M518.26,373.32a.22.22,0,0,1-.22-.18l-2.41-13a.24.24,0,0,1,.18-.27.23.23,0,0,1,.26.18l2.42,13a.23.23,0,0,1-.18.27Z" />
                    <path class="cls-8"
                        d="M471.66,222.27a.23.23,0,0,1-.23-.21l-.75-10.33a.22.22,0,0,1,.21-.24l11.16-.91a.23.23,0,0,1,.24.17L484.4,219a.23.23,0,0,1-.17.28.22.22,0,0,1-.27-.17l-2.07-8-10.74.87.74,10.11a.24.24,0,0,1-.21.24Z" />
                    <path
                        d="M472.56,235.92a.23.23,0,0,1-.22-.21l-.68-10.33a.22.22,0,0,1,.21-.24.22.22,0,0,1,.24.21l.68,10.33a.23.23,0,0,1-.21.24Z" />
                    <path
                        d="M593.9,99.65,467.51,97.31l-7.28-1.43a.23.23,0,0,1-.18-.23V94.54a.2.2,0,0,1-.08-.12l-.75-3.77a.22.22,0,0,1,0-.19.2.2,0,0,1,.18-.09L668.79,94a.23.23,0,0,1,.22.22.21.21,0,0,1-.19.23l-1.13.16-33.41,5.05ZM460.5,95.47l7.06,1.39L593.91,99.2h40.34L666,94.4,459.72,90.83l.67,3.35a.24.24,0,0,1,.11.19Z" />
                    <path
                        d="M313.9,1176.24a.23.23,0,0,1-.23-.23v-.15a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v.15A.22.22,0,0,1,313.9,1176.24Z" />
                    <text class="cls-11" transform="translate(369.77 230.31)">D1</text><text class="cls-11"
                        transform="translate(382.84 229.55)">D2</text><text class="cls-11"
                        transform="translate(395.84 228.46)">D3</text><text class="cls-11"
                        transform="translate(409.4 227.5)">D4</text><text class="cls-11"
                        transform="translate(422.35 226.7)">D5</text><text class="cls-11"
                        transform="translate(435.71 225.72)">D6</text><text class="cls-11"
                        transform="translate(448.78 225.11)">D7</text><text class="cls-11"
                        transform="translate(462.3 224.35)">D8</text><text class="cls-11"
                        transform="translate(390.13 269.12)">D15</text>
                    <path
                        d="M376.15,274.07l-.36-.08a.21.21,0,0,1-.1-.06l-.23-.23a.24.24,0,0,1-.06-.11l-.07-.37a.28.28,0,0,1,0-.09v-.49l.08-.56a.18.18,0,0,1,0-.1l.23-.31a.24.24,0,0,1,.08-.06l.3-.15a.17.17,0,0,1,.1,0h.23l.35.09a.19.19,0,0,1,.16.14l.08.23a.23.23,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.11-.18,0h-.11L376,272l-.16.21,0,.21.24-.12a.17.17,0,0,1,.1,0h.07a.23.23,0,0,1,.11,0l.3.15.25.16a.24.24,0,0,1,.08.09l.15.3a.36.36,0,0,1,0,.1v.15a.3.3,0,0,1,0,.1l-.15.31-.17.25a.19.19,0,0,1-.14.09Zm-.19-.5.24.06.26-.06.1-.15.12-.27-.1-.2-.18-.12-.21-.11-.36.21-.06.25.06.25Z" />
                    <path
                        d="M378.26,274.07l-.42-.08a.19.19,0,0,1-.14-.09l-.15-.23s0,0,0-.05l-.15-.46h0v-.57l.16-.53.15-.4a.24.24,0,0,1,.17-.14l.38-.07h.19l.42.08a.24.24,0,0,1,.17.15l.08.23a.24.24,0,0,1-.14.29.24.24,0,0,1-.29-.15l0-.1-.25-.05h-.11l-.21,0-.16.46.29-.11.08,0h.08a.19.19,0,0,1,.1,0l.3.15.25.16a.19.19,0,0,1,.09.14l.08.3v.2l-.09.36a.17.17,0,0,1-.06.1l-.22.23a.24.24,0,0,1-.11.06Zm-.24-.5.29.05.21-.05.14-.14.06-.24v-.1l0-.16-.16-.1-.22-.11-.28.11-.09.09-.09.19.11.33Z" />
                    <path
                        d="M379.69,274.07a.22.22,0,0,1-.22-.22v-1.44a.22.22,0,0,1,.22-.22.22.22,0,0,1,.23.22v1.44A.22.22,0,0,1,379.69,274.07Z" />
                    <path
                        d="M380.83,274.07a.22.22,0,0,1-.23-.22v-1.06l0-.12-.07,0h-.23l-.14.05-.27.26a.22.22,0,0,1-.32,0,.24.24,0,0,1,0-.32l.31-.3a.16.16,0,0,1,.08-.06l.23-.07h.44l.23.07a.26.26,0,0,1,.15.16l.07.31v1.11A.22.22,0,0,1,380.83,274.07Z" />
                    <path
                        d="M382,274.07a.22.22,0,0,1-.23-.22v-1.06l0-.12-.08,0h-.23l-.14.05L381,273a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.22-.07h.45l.22.07a.24.24,0,0,1,.15.16l.08.31v1.11A.22.22,0,0,1,382,274.07Z" />
                    <path
                        d="M384.22,274.07h-1.51a.23.23,0,0,1-.21-.14.23.23,0,0,1,.05-.24l1.06-1.06.18-.25,0-.23,0-.14-.16-.12h-.36l-.11,0-.08.27a.22.22,0,0,1-.23.22.22.22,0,0,1-.22-.22v-.08a.17.17,0,0,1,0-.07l.16-.41a.24.24,0,0,1,.13-.11l.23-.08h.52a.17.17,0,0,1,.1,0l.15.07.06,0,.15.16a.16.16,0,0,1,.06.08l.07.23a.17.17,0,0,1,0,.07v.15a.15.15,0,0,1,0,.07l-.07.23,0,.06-.22.31-.69.69h1a.22.22,0,0,1,.22.23A.22.22,0,0,1,384.22,274.07Z" />
                    <text class="cls-11" transform="translate(375.99 270.01)">D16</text>
                    <path
                        d="M378.22,297.94l-.35-.08a.24.24,0,0,1-.11-.06l-.22-.23a.19.19,0,0,1-.07-.11l-.07-.38a.14.14,0,0,1,0-.09v-.48l.08-.56a.36.36,0,0,1,0-.11l.23-.3a.16.16,0,0,1,.08-.06l.3-.16.1,0h.23l.36.08a.26.26,0,0,1,.16.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.11-.19,0h-.11l-.21.11-.16.21,0,.21.24-.13.1,0h.08l.1,0,.3.16.25.16a.18.18,0,0,1,.08.09l.15.3a.18.18,0,0,1,0,.1v.15a.16.16,0,0,1,0,.1l-.15.3-.17.25a.21.21,0,0,1-.14.1Zm-.18-.51.24.06.26-.05.1-.15.11-.28-.1-.2-.18-.11-.21-.11-.36.2,0,.26,0,.25Z" />
                    <path
                        d="M380.34,297.94l-.43-.08a.21.21,0,0,1-.14-.1l-.15-.22,0-.06-.15-.45h0a.13.13,0,0,1,0-.06v-.45a.13.13,0,0,1,0-.06l.15-.53.16-.4a.25.25,0,0,1,.16-.14l.38-.07h.2l.42.08a.23.23,0,0,1,.17.15l.07.23a.22.22,0,0,1-.14.28.23.23,0,0,1-.29-.14l0-.1-.25-.05h-.1l-.22.05-.16.46.29-.11.09,0h.07l.1,0,.3.16.25.16a.26.26,0,0,1,.1.13l.07.31v.2l-.08.36a.21.21,0,0,1-.06.1l-.23.23a.21.21,0,0,1-.1.06Zm-.25-.51.29.06.21-.05.14-.14.06-.24V297l-.05-.16-.15-.1-.22-.11-.28.11-.1.09-.09.19.11.33Z" />
                    <path
                        d="M381.77,297.94a.23.23,0,0,1-.23-.23v-1.43a.22.22,0,0,1,.23-.22.22.22,0,0,1,.22.22v1.43A.22.22,0,0,1,381.77,297.94Z" />
                    <path
                        d="M382.9,297.94a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3a.15.15,0,0,1,.09-.06l.23-.07h.44l.22.07a.24.24,0,0,1,.15.16l.08.3v1.11A.23.23,0,0,1,382.9,297.94Z" />
                    <path
                        d="M384,297.94a.23.23,0,0,1-.23-.23v-1l0-.13-.08,0h-.23l-.14,0-.26.27a.23.23,0,0,1-.32-.32l.3-.3.09-.06.23-.07h.44l.23.07a.22.22,0,0,1,.14.16l.08.3v1.11A.23.23,0,0,1,384,297.94Z" />
                    <path
                        d="M386.29,297.94h-1.51a.2.2,0,0,1-.2-.14.23.23,0,0,1,0-.25l1.06-1.05.18-.25.06-.23-.05-.14-.16-.13h-.36l-.1,0-.09.27a.22.22,0,0,1-.22.22.22.22,0,0,1-.23-.22V296a.17.17,0,0,1,0-.07l.16-.41a.28.28,0,0,1,.13-.11l.23-.08h.52l.11,0,.15.08.06,0,.15.15a.41.41,0,0,1,0,.09l.08.23s0,0,0,.07v.15s0,.05,0,.07l-.08.23,0,.06-.23.3-.69.7h1a.23.23,0,1,1,0,.45Z" />
                    <text class="cls-11" transform="translate(378.06 293.88)">D17</text><text class="cls-11"
                        transform="translate(403.13 268.02)">D14</text><text class="cls-11"
                        transform="translate(416.69 267.06)">D13</text><text class="cls-11"
                        transform="translate(429.64 266.27)">D12</text><text class="cls-11"
                        transform="translate(443.01 265.28)">D11</text><text class="cls-11"
                        transform="translate(456.07 264.67)">D10</text><text class="cls-11"
                        transform="translate(469.58 264.15)">D9</text><text class="cls-11"
                        transform="translate(391.2 293.03)">D18</text><text class="cls-11"
                        transform="translate(404.2 291.94)">D19</text><text class="cls-11"
                        transform="translate(417.76 290.98)">D20</text><text class="cls-11"
                        transform="translate(430.71 290.18)">D21</text><text class="cls-11"
                        transform="translate(444.08 289.19)">D22</text><text class="cls-11"
                        transform="translate(457.14 288.59)">D23</text><text class="cls-11"
                        transform="translate(470.66 287.83)">D24</text><text class="cls-11"
                        transform="translate(384.75 332.52)">D33</text><text class="cls-11"
                        transform="translate(397.82 331.76)">D32</text><text class="cls-11"
                        transform="translate(410.82 330.67)">D31</text><text class="cls-11"
                        transform="translate(424.38 329.7)">D30</text><text class="cls-11"
                        transform="translate(437.33 328.91)">D29</text><text class="cls-11"
                        transform="translate(450.69 327.92)">D28</text><text class="cls-11"
                        transform="translate(463.76 327.31)">D27</text><text class="cls-11"
                        transform="translate(477.28 326.55)">D26</text><text class="cls-11"
                        transform="translate(489.66 326.06)">D25</text><text class="cls-11"
                        transform="translate(386.43 356.32)">D34</text><text class="cls-11"
                        transform="translate(399.49 355.56)">D35</text><text class="cls-11"
                        transform="translate(412.5 354.46)">D36</text><text class="cls-11"
                        transform="translate(426.06 353.5)">D37</text><text class="cls-11"
                        transform="translate(439 352.71)">D38</text><text class="cls-11"
                        transform="translate(452.37 351.72)">D39</text><text class="cls-11"
                        transform="translate(465.43 351.11)">D40</text><text class="cls-11"
                        transform="translate(478.95 350.35)">D41</text><text class="cls-11"
                        transform="translate(491.54 349.86)">D42</text><text class="cls-11"
                        transform="translate(391.52 395.87)">E1</text><text class="cls-11"
                        transform="translate(404.59 395.12)">E2</text><text class="cls-11"
                        transform="translate(417.59 394.02)">E3</text><text class="cls-11"
                        transform="translate(431.15 393.06)">E4</text><text class="cls-11"
                        transform="translate(444.1 392.26)">E5</text><text class="cls-11"
                        transform="translate(457.46 391.28)">E6</text><text class="cls-11"
                        transform="translate(470.53 390.67)">E7</text><text class="cls-11"
                        transform="translate(484.05 389.91)">E8</text><text class="cls-11"
                        transform="translate(496.63 389.42)">E9</text><text class="cls-11"
                        transform="translate(393.19 419.75)">E18</text><text class="cls-11"
                        transform="translate(406.25 418.99)">E17</text><text class="cls-11"
                        transform="translate(419.26 417.9)">E16</text><text class="cls-11"
                        transform="translate(432.81 416.93)">E15</text><text class="cls-11"
                        transform="translate(445.76 416.14)">E14</text><text class="cls-11"
                        transform="translate(459.13 415.15)">E13</text><text class="cls-11"
                        transform="translate(472.19 414.54)">E12</text><text class="cls-11"
                        transform="translate(485.71 413.78)">E11</text><text class="cls-11"
                        transform="translate(498.3 413.29)">E10</text><text class="cls-11"
                        transform="translate(397.09 457.79)">E19</text><text class="cls-11"
                        transform="translate(410.16 457.03)">E20</text><text class="cls-11"
                        transform="translate(423.16 455.94)">E21</text><text class="cls-11"
                        transform="translate(436.72 454.98)">E22</text><text class="cls-11"
                        transform="translate(449.67 454.18)">E23</text><text class="cls-11"
                        transform="translate(463.04 453.19)">E24</text><text class="cls-11"
                        transform="translate(476.1 452.59)">E25</text><text class="cls-11"
                        transform="translate(489.62 451.83)">E26</text><text class="cls-11"
                        transform="translate(502.2 451.34)">E27</text><text class="cls-11"
                        transform="translate(398.56 482.2)">E37</text><text class="cls-11"
                        transform="translate(411.62 481.44)">E36</text><text class="cls-11"
                        transform="translate(424.63 480.35)">E35</text><text class="cls-11"
                        transform="translate(438.19 479.39)">E34</text><text class="cls-11"
                        transform="translate(451.14 478.59)">E33</text><text class="cls-11"
                        transform="translate(399.49 521.97)">F1</text><text class="cls-11"
                        transform="translate(412.56 521.21)">F2</text><text class="cls-11"
                        transform="translate(425.56 520.12)">F3</text><text class="cls-11"
                        transform="translate(439.12 519.16)">F4</text><text class="cls-11"
                        transform="translate(452.07 518.36)">F5</text><text class="cls-11"
                        transform="translate(466.58 518.12)">F6</text><text class="cls-11"
                        transform="translate(479.64 517.36)">F7</text><text class="cls-11"
                        transform="translate(492.65 516.26)">F8</text><text class="cls-11"
                        transform="translate(506.21 515.3)">F9</text><text class="cls-11"
                        transform="translate(519.15 514.51)">F10</text><text class="cls-11"
                        transform="translate(468.96 541.51)">F16</text><text class="cls-11"
                        transform="translate(482.02 540.75)">F15</text><text class="cls-11"
                        transform="translate(495.02 539.66)">F14</text><text class="cls-11"
                        transform="translate(508.58 538.7)">F13</text><text class="cls-11"
                        transform="translate(521.53 537.9)">F12</text>
                    <path
                        d="M534.59,542.91h-.07l-.11,0-.3-.15-.25-.17a.27.27,0,0,1-.1-.15l-.07-.45s0-.05,0-.07v-.5l.07-.56a.24.24,0,0,1,0-.1l.22-.3a.3.3,0,0,1,.13-.09l.3-.07h.28l.36.08a.26.26,0,0,1,.16.15l.07.23a.23.23,0,0,1-.14.29.23.23,0,0,1-.29-.15l0-.11-.18,0h-.17l-.17,0-.15.19,0,.22.42-.08.42.08a.25.25,0,0,1,.15.1l.15.22.16.33a.19.19,0,0,1,0,.1v.15a.17.17,0,0,1,0,.1l-.15.31a.1.1,0,0,1,0,0l-.15.15a.14.14,0,0,1-.08,0l-.37.16Zm-.4-.66.15.1.22.1.28-.11.09-.09L535,542l-.21-.37-.28-.06-.22.06-.14.14-.05.2Z" />
                    <path
                        d="M536.7,542.91h-.07l-.1,0-.31-.15-.25-.17a.27.27,0,0,1-.09-.12l-.15-.45s0,0,0-.07v-.53s0,0,0-.06l.15-.53.17-.34a.25.25,0,0,1,.16-.12l.37-.07h.2l.42.08a.26.26,0,0,1,.17.15l.08.23a.24.24,0,0,1-.15.29.23.23,0,0,1-.28-.15l0-.1-.25,0h-.1l-.23,0-.1.21-.06.21h0l.43-.08.36.08a.17.17,0,0,1,.1.06l.23.23a.24.24,0,0,1,.06.11l.08.43-.08.42a.19.19,0,0,1-.09.14l-.23.15-.33.17Zm-.41-.67.16.11.21.1.37-.2.05-.29-.05-.21-.14-.14-.24-.06-.21.06-.15.15-.1.19Z" />
                    <path
                        d="M538.06,542.91a.22.22,0,0,1-.23-.22v-1.51a.23.23,0,0,1,.46,0v1.51A.22.22,0,0,1,538.06,542.91Z" />
                    <path
                        d="M539.19,542.91a.23.23,0,0,1-.23-.22v-1.06l0-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,1,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.17.17,0,0,1,.12,0l.23.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,539.19,542.91Z" />
                    <path
                        d="M540.32,542.91a.22.22,0,0,1-.22-.22v-1.06l-.05-.16-.1-.07h-.16l-.17.12-.27.27a.23.23,0,0,1-.32-.32l.3-.3.26-.18a.2.2,0,0,1,.13,0h.3a.2.2,0,0,1,.13,0l.22.15a.26.26,0,0,1,.1.13l.07.31v1.11A.22.22,0,0,1,540.32,542.91Z" />
                    <path
                        d="M542.58,542.91h-1.5a.21.21,0,0,1-.21-.14.2.2,0,0,1,0-.24l1.05-1.06.19-.25.05-.16v-.15l0-.1-.17-.09h-.36l-.14,0,0,.14V541a.22.22,0,0,1-.22.22A.22.22,0,0,1,541,541v-.15s0,0,0-.08l.08-.22a.19.19,0,0,1,0-.09l.08-.08a.19.19,0,0,1,.09,0l.22-.08h.53a.19.19,0,0,1,.1,0l.3.15a.21.21,0,0,1,.11.13l.08.22a.22.22,0,0,1,0,.08v.22a.15.15,0,0,1,0,.07l-.08.23s0,0,0,.06l-.23.31-.69.69h1a.23.23,0,1,1,0,.45Z" />
                    <text class="cls-11" transform="translate(534.54 537.81)">F13</text><text class="cls-11"
                        transform="translate(400.51 546.1)">F21</text><text class="cls-11"
                        transform="translate(413.57 545.34)">F20</text><text class="cls-11"
                        transform="translate(426.58 544.25)">F19</text><text class="cls-11"
                        transform="translate(440.13 543.29)">F18</text><text class="cls-11"
                        transform="translate(453.08 542.49)">F17</text><text class="cls-11"
                        transform="translate(472.43 644.56)">G6</text><text class="cls-11"
                        transform="translate(485.49 643.8)">G7</text><text class="cls-11"
                        transform="translate(498.49 642.71)">G8</text><text class="cls-11"
                        transform="translate(512.05 641.75)">G9</text><text class="cls-11"
                        transform="translate(525 640.95)">G10</text><text class="cls-11"
                        transform="translate(537.69 639.86)">G11</text><text class="cls-11"
                        transform="translate(403.13 649.17)">G1</text><text class="cls-11"
                        transform="translate(417.92 648.4)">G2</text><text class="cls-11"
                        transform="translate(430.93 647.31)">G3</text><text class="cls-11"
                        transform="translate(444.49 646.34)">G4</text><text class="cls-11"
                        transform="translate(457.44 645.55)">G5</text><text class="cls-11"
                        transform="translate(474.6 668.13)">G17</text><text class="cls-11"
                        transform="translate(487.66 667.37)">G16</text><text class="cls-11"
                        transform="translate(500.67 666.28)">G15</text><text class="cls-11"
                        transform="translate(514.22 665.32)">G14</text><text class="cls-11"
                        transform="translate(527.17 664.52)">G13</text><text class="cls-11"
                        transform="translate(539.87 663.44)">G12</text><text class="cls-11"
                        transform="translate(405.31 672.74)">G22</text><text class="cls-11"
                        transform="translate(420.1 671.97)">G21</text><text class="cls-11"
                        transform="translate(433.1 670.88)">G20</text><text class="cls-11"
                        transform="translate(446.66 669.92)">G19</text><text class="cls-11"
                        transform="translate(459.61 669.12)">G18</text><text class="cls-11"
                        transform="translate(401.22 713.64)">G23</text><text class="cls-11"
                        transform="translate(416.01 712.87)">G24</text><text class="cls-11"
                        transform="translate(429.02 711.78)">G25</text><text class="cls-11"
                        transform="translate(442.57 710.81)">G26</text><text class="cls-11"
                        transform="translate(455.52 710.02)">G27</text><text class="cls-11"
                        transform="translate(467.88 708.83)">G28</text><text class="cls-11"
                        transform="translate(482.38 707.17)">G29</text><text class="cls-11"
                        transform="translate(497.17 706.4)">G30</text><text class="cls-11"
                        transform="translate(510.18 705.31)">G31</text><text class="cls-11"
                        transform="translate(523.73 704.35)">G32</text><text class="cls-11"
                        transform="translate(536.68 703.55)">G33</text><text class="cls-11"
                        transform="translate(403.5 737.4)">G45</text><text class="cls-11"
                        transform="translate(418.29 736.63)">G43</text><text class="cls-11"
                        transform="translate(431.29 735.53)">G42</text><text class="cls-11"
                        transform="translate(444.85 734.57)">G41</text><text class="cls-11"
                        transform="translate(457.8 733.77)">G40</text><text class="cls-11"
                        transform="translate(470.23 732.69)">G39</text><text class="cls-11"
                        transform="translate(484.66 730.93)">G38</text><text class="cls-11"
                        transform="translate(497.8 729.7)">G37</text><text class="cls-11"
                        transform="translate(510.8 728.61)">G36</text><text class="cls-11"
                        transform="translate(524.36 727.65)">G35</text><text class="cls-11"
                        transform="translate(537.31 726.85)">G34</text><text class="cls-11"
                        transform="translate(406.25 776.81)">H1</text><text class="cls-11"
                        transform="translate(418.54 776.03)">H2</text><text class="cls-11"
                        transform="translate(431.55 774.93)">H3</text><text class="cls-11"
                        transform="translate(445.11 773.97)">H4</text><text class="cls-11"
                        transform="translate(458.06 773.18)">H5</text><text class="cls-11"
                        transform="translate(470.49 772.09)">H6</text><text class="cls-11"
                        transform="translate(484.91 770.33)">H7</text><text class="cls-11"
                        transform="translate(498.05 769.1)">H8</text><text class="cls-11"
                        transform="translate(511.06 768.01)">H9</text><text class="cls-11"
                        transform="translate(524.62 767.05)">H10</text><text class="cls-11"
                        transform="translate(537.56 766.25)">H11</text><text class="cls-11"
                        transform="translate(406.56 800.03)">H22</text><text class="cls-11"
                        transform="translate(420.31 799.25)">H21</text><text class="cls-11"
                        transform="translate(433.32 798.16)">H20</text><text class="cls-11"
                        transform="translate(446.87 797.19)">H19</text><text class="cls-11"
                        transform="translate(459.82 796.4)">H18</text><text class="cls-11"
                        transform="translate(472.26 795.31)">H17</text><text class="cls-11"
                        transform="translate(486.68 793.55)">H16</text><text class="cls-11"
                        transform="translate(499.82 792.32)">H15</text><text class="cls-11"
                        transform="translate(512.83 791.23)">H14</text><text class="cls-11"
                        transform="translate(526.38 790.27)">H13</text><text class="cls-11"
                        transform="translate(539.33 789.47)">H12</text><text class="cls-11"
                        transform="translate(406.17 839.77)">H23</text><text class="cls-11"
                        transform="translate(419.93 838.98)">H24</text><text class="cls-11"
                        transform="translate(432.93 837.89)">H25</text><text class="cls-11"
                        transform="translate(446.49 836.93)">H26</text><text class="cls-11"
                        transform="translate(459.44 836.13)">H27</text><text class="cls-11"
                        transform="translate(471.87 835.05)">H28</text><text class="cls-11"
                        transform="translate(487.9 834.28)">H29</text><text class="cls-11"
                        transform="translate(501.04 833.05)">H30</text><text class="cls-11"
                        transform="translate(514.04 831.95)">H31</text><text class="cls-11"
                        transform="translate(527.6 830.99)">H32</text><text class="cls-11"
                        transform="translate(540.55 830.19)">H33</text><text class="cls-11"
                        transform="translate(408.91 863.97)">H45</text><text class="cls-11"
                        transform="translate(422.67 863.19)">H44</text><text class="cls-11"
                        transform="translate(435.67 862.1)">H43</text><text class="cls-11"
                        transform="translate(449.23 861.13)">H42</text><text class="cls-11"
                        transform="translate(462.18 860.34)">H41</text><text class="cls-11"
                        transform="translate(474.61 859.25)">H40</text><text class="cls-11"
                        transform="translate(490.64 858.48)">H39</text><text class="cls-11"
                        transform="translate(503.78 857.25)">H38</text><text class="cls-11"
                        transform="translate(516.78 856.16)">H37</text><text class="cls-11"
                        transform="translate(530.34 855.2)">H36</text><text class="cls-11"
                        transform="translate(543.29 854.4)">H35</text><text class="cls-11"
                        transform="translate(554.57 853.31)">H34</text><text class="cls-11"
                        transform="translate(413.24 903.83)">I1</text><text class="cls-11"
                        transform="translate(424.97 902.51)">I2</text><text class="cls-11"
                        transform="translate(437.98 901.42)">I3</text><text class="cls-11"
                        transform="translate(451.54 900.46)">I4</text><text class="cls-11"
                        transform="translate(464.49 899.66)">I5</text><text class="cls-11"
                        transform="translate(476.92 898.58)">I6</text><text class="cls-11"
                        transform="translate(492.94 897.8)">I7</text><text class="cls-11"
                        transform="translate(506.08 896.58)">I8</text><text class="cls-11"
                        transform="translate(519.09 895.48)">I9</text><text class="cls-11"
                        transform="translate(532.65 894.52)">I10</text><text class="cls-11"
                        transform="translate(545.6 893.72)">I11</text><text class="cls-11"
                        transform="translate(556.87 892.64)">I12</text><text class="cls-11"
                        transform="translate(426.7 927)">I23</text><text class="cls-11"
                        transform="translate(439.7 925.91)">I22</text><text class="cls-11"
                        transform="translate(453.26 924.95)">I21</text><text class="cls-11"
                        transform="translate(466.21 924.15)">I20</text><text class="cls-11"
                        transform="translate(478.64 923.07)">I19</text><text class="cls-11"
                        transform="translate(494.67 922.29)">I18</text><text class="cls-11"
                        transform="translate(507.81 921.07)">I17</text><text class="cls-11"
                        transform="translate(520.81 919.97)">I16</text><text class="cls-11"
                        transform="translate(534.37 919.01)">I15</text><text class="cls-11"
                        transform="translate(547.32 918.21)">I14</text><text class="cls-11"
                        transform="translate(558.6 917.13)">I13</text><text class="cls-11"
                        transform="translate(428.37 966.48)">I24</text><text class="cls-11"
                        transform="translate(441.38 965.38)">I25</text><text class="cls-11"
                        transform="translate(454.93 964.42)">I26</text><text class="cls-11"
                        transform="translate(467.88 963.62)">I27</text><text class="cls-11"
                        transform="translate(480.32 962.54)">I28</text><text class="cls-11"
                        transform="translate(493.97 962.59)">I29</text><text class="cls-11"
                        transform="translate(509.48 960.54)">I30</text><text class="cls-11"
                        transform="translate(522.49 959.44)">I31</text><text class="cls-11"
                        transform="translate(536.04 958.48)">I32</text><text class="cls-11"
                        transform="translate(548.99 957.69)">I33</text><text class="cls-11"
                        transform="translate(560.27 956.6)">I34</text><text class="cls-11"
                        transform="translate(437.52 1029.48)">I46</text><text class="cls-11"
                        transform="translate(451.45 1028.25)">I47</text><text class="cls-11"
                        transform="translate(465 1027.29)">I48</text><text class="cls-11"
                        transform="translate(477.95 1026.49)">I49</text><text class="cls-11"
                        transform="translate(490.39 1025.41)">I50</text><text class="cls-11"
                        transform="translate(439.7 1051.25)">I54</text><text class="cls-11"
                        transform="translate(452.93 1051.2)">I55</text><text class="cls-11"
                        transform="translate(466.49 1050.24)">I56</text><text class="cls-11"
                        transform="translate(479.44 1049.44)">I57</text><text class="cls-11"
                        transform="translate(491.87 1048.36)">I58</text><text class="cls-11"
                        transform="translate(503.8 1024.21)">I51</text><text class="cls-11"
                        transform="translate(428.89 989.5)">I45</text><text class="cls-11"
                        transform="translate(442.82 988.27)">I44</text><text class="cls-11"
                        transform="translate(456.38 987.31)">I43</text><text class="cls-11"
                        transform="translate(469.33 986.51)">I42</text><text class="cls-11"
                        transform="translate(481.76 985.42)">I41</text><text class="cls-11"
                        transform="translate(495.17 984.22)">I40</text><text class="cls-11"
                        transform="translate(517.03 1024.28)">I52</text><text class="cls-11"
                        transform="translate(530.44 1023.08)">I53</text><text class="cls-11"
                        transform="translate(511.06 983.27)">I39</text><text class="cls-11"
                        transform="translate(523.73 982.86)">I38</text><text class="cls-11"
                        transform="translate(537.31 981.66)">I37</text><text class="cls-11"
                        transform="translate(550.56 980.48)">I36</text><text class="cls-11"
                        transform="translate(562.49 980.43)">I35</text><text class="cls-11"
                        transform="translate(400.6 585.74) scale(0.89 1)">F22</text><text class="cls-11"
                        transform="translate(413.66 584.98)">F23</text><text class="cls-11"
                        transform="translate(426.66 583.89)">F24</text><text class="cls-11"
                        transform="translate(440.22 582.93)">F25</text><text class="cls-11"
                        transform="translate(453.17 582.13)">F26</text><text class="cls-11"
                        transform="translate(468.82 580.96)">F27</text><text class="cls-11"
                        transform="translate(482.38 580)">F28</text><text class="cls-11"
                        transform="translate(495.33 579.2)">F29</text><text class="cls-11"
                        transform="translate(402.3 609.55) scale(0.89 1)">F37</text><text class="cls-11"
                        transform="translate(415.37 608.79)">F36</text><text class="cls-11"
                        transform="translate(428.37 607.69)">F35</text><text class="cls-11"
                        transform="translate(441.93 606.73)">F34</text><text class="cls-11"
                        transform="translate(454.88 605.94)">F33</text><text class="cls-11"
                        transform="translate(470.53 604.77)">F32</text><text class="cls-11"
                        transform="translate(484.09 603.81)">F31</text><text class="cls-11"
                        transform="translate(497.04 603.01)">F30</text><text class="cls-11"
                        transform="translate(464.5 477.6)">E32</text><text class="cls-11"
                        transform="translate(477.57 477)">E31</text><text class="cls-11"
                        transform="translate(491.09 476.24)">E30</text><text class="cls-11"
                        transform="translate(503.67 475.75)">E29</text><text class="cls-11"
                        transform="translate(516.91 474.76)">E28</text>
                    <polyline class="cls-12"
                        points="441.27 1103.62 541.06 1044.27 562.8 1018.78 575.85 997.63 579.35 977.67 576.74 928.26 572.3 896.59 562.53 842.14 555.11 802.06 552.09 722.8 550.85 676.49 552.92 605.88 553.63 561.12 543.59 518.35 528.26 466.16 522.41 447.51 520.94 414.67 501.56 324.96 487.02 258.74 481.38 235 472.34 235.71" />
                    <line class="cls-12" x1="427.08" y1="1074.47" x2="430.41" y2="1099.81" />
                    <line class="cls-12" x1="320.28" y1="71.04" x2="363.72" y2="75.89" />
                    <line class="cls-12" x1="367.14" y1="94.88" x2="373.69" y2="95.88" />
                    <polyline class="cls-12" points="484.16 218.88 507.43 314.46 516.4 363.12" />
                </svg>
        </div>
        </center>

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
                <p><i class="btn btn-success fa fa-refresh"></i></p>
                <p><i class="btn btn-success fa fa-plus"></i></p>
                <p><i class="btn btn-success fa fa-minus"></i></p>
            </div>
        </div>

    </div>
    <div class="panel-table">
        <center>
            <table id="list-datatable"
                class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs mt-2"
                style="border-collapse: collapse;" cellspacing="0">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Color</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Color</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Denah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="form-edit-denah">
                        <div class="mb-3">
                            <label for="code" class="form-label">Kode</label>
                            <input type="text" class="form-control" id="code" name="code" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe</label>
                            <select class="form-select" id="type" name="type">
                                <option value="Sudah DP">Sudah DP</option>
                                <option value="Laku Terjual">Laku Terjual</option>
                                <option value="default">Default</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary" id="save-change-denah">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/datatables.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
    $('#save-change-denah').click(function() {
        $(this).html('Loading...');
        $(this).attr('disabled', true);
        var code, type, description;
        code = $('#form-edit-denah #code').val();
        description = $('#form-edit-denah #description').val();
        type = $('#form-edit-denah #type').val();
        $.ajax({
            url: "<?php echo base_url('index.php/home/change_denah') ?>",
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
                const modal = bootstrap.Modal.getInstance($('#exampleModal'));
                modal.hide();
            }
        });
    });
    window.crud = $('#list-datatable').DataTable({
        "paging": true,
        "ordering": true,
        "autoWidth": false,
        "responsive": true,
        processing: true,
        serverSide: true,
        ajax: "<?php echo base_url('/index.php/home/search') ?>",
        columns: [{
                data: 'code',
                name: 'code'
            },
            {
                data: 'type',
                name: 'type'
            },
            {
                data: 'color',
                name: 'color'
            },
            {
                data: 'description',
                name: 'description'
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

</body>

</html>