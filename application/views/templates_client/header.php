<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets_adm/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets_adm/img/sitemap.png">
    <title>
        Site Plan Selatan
    </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets_adm/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets_adm/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link id="pagestyle" href="<?= base_url(); ?>assets_adm/css/soft-ui-dashboard.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/datatables.min.css') ?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script type="text/javascript"
        src="https://rawgit.com/DanielHoffmann/jquery-svg-pan-zoom/master/compiled/jquery.svg.pan.zoom.js"></script>
    <style>
    .async-hide {
        opacity: 0 !important
    }

    /* body {
        padding-top: -2px;
        padding-bottom: 30px;
    } */

    svg {
        /* border: 1px solid gray; */
        display: block;
        height: 563px;
        width: auto;
    }

    div.controls {
        text-align: center;
        margin-top: 3px;
    }

    div.controls i {
        margin: 3px;
    }

    div.controls p {
        margin: 3px;
    }

    div.controls-zoom,
    div.controls-pan {
        display: inline-block;
    }

    div.controls-zoom {
        margin-left: 20px;
    }

    div.keterangan {
        text-align: center;
        margin-bottom: 1px;
    }

    div.keterangan span {
        margin-left: 4px;
        margin-bottom: 3px;
    }

    #svg-container {
        position: relative;
        margin-bottom: 12px;
        margin-top: 8px;
    }

    .pup {
        height: 12px;
        width: 12px;
        display: inline-flex;
        padding-right: 12px;
        border: 1px solid gray;
    }

    @media screen and (max-width: 700px) {
        svg {
            /* border: 1px solid purple; */
            display: block;
            margin-left: -18px;
            /* margin-right: auto; */
            height: 230px;
            width: 300px;

        }
    }
    </style>

    <script>
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
    </script>
</head>