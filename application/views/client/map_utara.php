<main class="main-content  mt-0">
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('<?= base_url(); ?>assets_adm/img/caruban.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-3"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4">
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" aria-controls="selatan"
                                    href="<?php echo site_url('Client'); ?>" aria-selected="true">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                    <span class="ms-1">Site Plan Selatan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" href="<?php echo site_url('client/utara'); ?>"
                                    aria-selected="false">
                                    <i class="fa fa-street-view" aria-hidden="true"></i>
                                    <span class="ms-1">Site Plant Utara</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                        style="background-image: url('<?= base_url(); ?>assets_adm/img/map1.jpg');">
                        <span class="mask bg-gradient-light"></span>
                        <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                            <!-- tes menu tab-->
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show position-relative active" id="selatan" role="tabpanel"
                                    aria-labelledby="cam1">
                                    <div id="svg-container">
                                        <div class="position-absolute d-flex top-0 w-100">
                                            <p class="p-3 mb-0 fa fa-map-marker text-danger"><i
                                                    class="text-black text-sm-center">
                                                    Site
                                                    Map
                                                    Selatan</i></p>
                                        </div>
                                        <svg id="site-map" xmlns="http://www.w3.org/2000/svg" width="800" height="400"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" data-name="Layer 1"
                                            viewBox="0 0 841.89 1190.55">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: #e6e7e8;
                                                }

                                                .cls-11,
                                                .cls-2,
                                                .cls-28,
                                                .cls-29,
                                                .cls-3,
                                                .cls-32,
                                                .cls-34,
                                                .cls-5,
                                                .cls-6,
                                                .cls-9 {
                                                    fill: none;
                                                }

                                                .cls-11,
                                                .cls-2 {
                                                    stroke: #000;
                                                }

                                                .cls-2,
                                                .cls-3,
                                                .cls-9 {
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                }

                                                .cls-11,
                                                .cls-15,
                                                .cls-2,
                                                .cls-3,
                                                .cls-36,
                                                .cls-6 {
                                                    stroke-width: 0.5px;
                                                }

                                                .cls-3,
                                                .cls-36,
                                                .cls-6 {
                                                    stroke: #231f20;
                                                }

                                                .cls-10,
                                                .cls-12,
                                                .cls-24,
                                                .cls-25,
                                                .cls-26,
                                                .cls-31,
                                                .cls-4 {
                                                    fill: #231f20;
                                                }

                                                .cls-11,
                                                .cls-13,
                                                .cls-15,
                                                .cls-28,
                                                .cls-29,
                                                .cls-32,
                                                .cls-34,
                                                .cls-36,
                                                .cls-6 {
                                                    stroke-miterlimit: 10;
                                                }

                                                .cls-7 {
                                                    fill: #010101;
                                                }

                                                .cls-8 {
                                                    fill: #3a53a4;
                                                }

                                                .cls-9 {
                                                    stroke: #ef4623;
                                                    stroke-width: 0;
                                                }

                                                .cls-10 {
                                                    font-size: 5.92px;
                                                }

                                                .cls-10,
                                                .cls-12,
                                                .cls-24,
                                                .cls-25,
                                                .cls-26,
                                                .cls-31 {
                                                    font-family: Gadugi-Bold,
                                                        Gadugi;
                                                    font-weight: 700;
                                                }

                                                .cls-12 {
                                                    font-size: 8.29px;
                                                }

                                                .cls-13,
                                                .cls-14,
                                                .cls-15 {
                                                    fill: #be1e2d;
                                                }

                                                .cls-13,
                                                .cls-15 {
                                                    stroke: #be1e2d;
                                                }

                                                .cls-16,
                                                .cls-19,
                                                .cls-21,
                                                .cls-22 {
                                                    font-size: 14.2px;
                                                    font-family: Goldplay-Black,
                                                        Goldplay;
                                                    font-weight: 800;
                                                }

                                                .cls-16,
                                                .cls-27 {
                                                    fill: #e63b46;
                                                }

                                                .cls-17 {
                                                    letter-spacing: -0.02em;
                                                }

                                                .cls-18 {
                                                    letter-spacing: -0.03em;
                                                }

                                                .cls-19,
                                                .cls-30 {
                                                    fill: #e591be;
                                                }

                                                .cls-20 {
                                                    letter-spacing: -0.01em;
                                                }

                                                .cls-21,
                                                .cls-33 {
                                                    fill: #f3d6e7;
                                                }

                                                .cls-22,
                                                .cls-35 {
                                                    fill: #a173b2;
                                                }

                                                .cls-23 {
                                                    letter-spacing: -0.09em;
                                                }

                                                .cls-24 {
                                                    font-size: 7.1px;
                                                }

                                                .cls-25 {
                                                    font-size: 7.1px;
                                                }

                                                .cls-26 {
                                                    font-size: 7.1px;
                                                }

                                                .cls-28 {
                                                    stroke: #e63b46;
                                                }

                                                .cls-29 {
                                                    stroke: #e591be;
                                                }

                                                .cls-31 {
                                                    font-size: 7.1px;
                                                }

                                                .cls-32 {
                                                    stroke: #f3d6e7;
                                                }

                                                .cls-34 {
                                                    stroke: #a173b2;
                                                }
                                                </style>
                                            </defs>
                                            <polygon class="cls-1"
                                                points="353.07 974.2 327.83 974 336.21 941.62 353.71 941.97 353.07 974.2"
                                                id="C20" />
                                            <polygon class="cls-1"
                                                points="354.19 941.99 380.47 942.08 371.07 974.4 353.57 974.24 354.19 941.99"
                                                id="C56" />
                                            <polygon class="cls-1"
                                                points="365 993.91 371.16 974.7 327.72 974.27 325.12 983.54 365 993.91"
                                                id="RUKOA4" />
                                            <polygon class="cls-1"
                                                points="360.51 1007.78 364.93 994.06 325.03 983.81 321.39 997.51 360.51 1007.78"
                                                id="RUKOA3" />
                                            <polygon class="cls-1"
                                                points="356.01 1022.23 360.42 1008.2 321.18 998.13 317.43 1012.19 356.01 1022.23"
                                                id="RUKOA2" />
                                            <polygon class="cls-1"
                                                points="351.41 1036.41 355.81 1022.38 317.5 1012.6 313.73 1026.65 351.41 1036.41"
                                                id="RUKOA1" />
                                            <polygon class="cls-1"
                                                points="349.67 1042.39 351.22 1036.59 313.81 1026.99 311.2 1037.91 349.67 1042.39" />
                                            <polygon class="cls-1"
                                                points="462.07 966.28 432.76 964.34 433.29 943.58 462.22 943.96 462.07 966.28"
                                                id="RUKOA6" />
                                            <polygon class="cls-1"
                                                points="432.15 964.33 395.14 961.86 403.37 943.24 432.51 943.63 432.15 964.33"
                                                id="RUKOA5" />
                                            <polygon class="cls-1"
                                                points="489.41 968.07 462.62 966.32 462.95 943.99 489.38 944.34 489.41 968.07"
                                                id="RUKOA7" />
                                            <polygon class="cls-1"
                                                points="405.83 770.4 405.24 802.5 387.52 802.3 388.19 770.03 405.83 770.4"
                                                id="B47" />
                                            <polygon class="cls-1"
                                                points="423.86 770.76 423.26 802.86 405.54 802.66 406.21 770.39 423.86 770.76"
                                                id="B56" />
                                            <polygon class="cls-1"
                                                points="405.12 803.17 404.52 835.26 386.8 835.06 387.47 802.8 405.12 803.17"
                                                id="B50" />
                                            <polygon class="cls-1"
                                                points="387.58 770.05 386.98 802.14 361.53 801.79 366.94 769.96 387.58 770.05"
                                                id="B48" />
                                            <polygon class="cls-1"
                                                points="387.08 802.48 386.48 834.57 356 834.45 361.4 802.3 387.08 802.48"
                                                id="B49" />
                                            <polygon class="cls-1"
                                                points="368.27 888.79 367.44 921.13 341.85 920.51 347.27 888.51 368.27 888.79"
                                                id="C21" />
                                            <polygon class="cls-1"
                                                points="368.68 855.76 367.84 888.09 346.99 887.87 352.46 855.54 368.68 855.76"
                                                id="C20" />
                                            <polygon class="cls-1"
                                                points="423.14 803.53 422.54 835.62 404.82 835.42 405.49 803.16 423.14 803.53"
                                                id="B51" />
                                            <polygon class="cls-1"
                                                points="386.47 856.47 385.87 888.56 368.16 888.36 368.83 856.1 386.47 856.47"
                                                id="C19" />
                                            <polygon class="cls-1"
                                                points="404.5 856.83 403.9 888.92 386.18 888.72 386.85 856.46 404.5 856.83"
                                                id="C18" />
                                            <polygon class="cls-1"
                                                points="385.75 889.24 385.15 921.33 367.44 921.13 368.11 888.86 385.75 889.24"
                                                id="C22" />
                                            <polygon class="cls-1"
                                                points="403.78 889.59 403.18 921.69 385.46 921.49 386.13 889.22 403.78 889.59"
                                                id="C23" />
                                            <polygon class="cls-1"
                                                points="393.97 962.13 477.18 967.64 498.75 1079.91 422.42 1064.99 367.56 1053.46 393.97 962.13" />
                                            <rect class="cls-1" x="725.67" y="862.82" width="17.42" height="32.11"
                                                transform="translate(15.23 -12.51) rotate(0.99)" id="C1" />
                                            <rect class="cls-1" x="724.95" y="895.59" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 15.8, -12.49)" id="C40" />
                                            <rect class="cls-1" x="694.8" y="775.92" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 13.73, -11.99)" id="B31" />
                                            <rect class="cls-1" x="694.08" y="808.68" width="17.42" height="32.11"
                                                transform="translate(14.3 -11.97) rotate(0.99)" id="B66" />
                                            <rect class="cls-1" x="660.57" y="689.09" width="17.42" height="32.11"
                                                transform="translate(12.23 -11.41) rotate(0.99)" id="B1" />
                                            <rect class="cls-1" x="659.85" y="721.85" width="17.42" height="32.11"
                                                transform="translate(12.8 -11.4) rotate(0.99)" id="B30" />
                                            <polygon class="cls-1"
                                                points="390.4 544.34 389.8 576.43 372.08 576.23 372.75 543.97 390.4 544.34"
                                                id="A14" />
                                            <polygon class="cls-1"
                                                points="398.57 490.54 349.96 489.62 325.5 405.79 400.31 407.53 398.57 490.54"
                                                id="MSJD1" />
                                            <polygon class="cls-1"
                                                points="188.02 411.09 200.76 442.09 180.91 448.33 169 418.69 188.02 411.09"
                                                id="LAVENDER7" />
                                            <polygon class="cls-1"
                                                points="204.84 404.59 217.62 437 200.62 442.44 188.37 410.96 204.84 404.59"
                                                id="LAVENDER6" />
                                            <polygon class="cls-1"
                                                points="221.37 398.13 234.57 431.44 217.83 436.85 205.17 404.38 221.37 398.13"
                                                id="LAVENDER5" />
                                            <polygon class="cls-1"
                                                points="251.69 426.01 234.79 431.4 221.54 397.73 237.77 391.4 251.69 426.01"
                                                id="LAVENDER4" />
                                            <polygon class="cls-1"
                                                points="268.72 420.61 251.83 425.97 238.29 391.31 254.52 384.98 268.72 420.61"
                                                id="LAVENDER3" />
                                            <polygon class="cls-1"
                                                points="286.09 415.21 269.41 420.4 254.87 384.35 271.1 378.02 286.09 415.21"
                                                id="LAVENDER2" />
                                            <polygon class="cls-1"
                                                points="302.86 409.69 285.85 415.29 271.45 377.86 287.68 371.52 302.86 409.69"
                                                id="LAVENDER1" />
                                            <polygon class="cls-1"
                                                points="168.82 418.71 180.91 448.34 160.94 454.69 150 426.21 168.82 418.71"
                                                id="LAVENDER8" />
                                            <polygon class="cls-1"
                                                points="149.79 426.5 160.62 454.83 141.43 460.98 130.74 434.17 149.79 426.5"
                                                id="LAVENDER9" />
                                            <polygon class="cls-1"
                                                points="130.48 434.09 140.87 461.01 124.01 466.26 113.8 440.98 130.48 434.09"
                                                id="LAVENDER10" />
                                            <polygon class="cls-1"
                                                points="154.75 325.61 167.78 358.52 151.34 365.12 138.29 332.01 154.75 325.61"
                                                id="LAVENDER25" />
                                            <polygon class="cls-1"
                                                points="171.54 319.05 184.58 351.96 168.13 358.56 155.09 325.45 171.54 319.05"
                                                id="LAVENDER24" />
                                            <polygon class="cls-1"
                                                points="188.05 312.53 201.09 345.44 184.92 351.93 171.86 318.82 188.05 312.53"
                                                id="LAVENDER23" />
                                            <polygon class="cls-1"
                                                points="217.62 338.9 201.41 345.28 188.32 312.37 204.53 305.99 217.62 338.9"
                                                id="LAVENDER22" />
                                            <polygon class="cls-1"
                                                points="234.35 332.42 218.14 338.81 205.05 305.9 221.26 299.51 234.35 332.42"
                                                id="LAVENDER21" />
                                            <polygon class="cls-1"
                                                points="251.07 325.84 234.86 332.22 221.78 299.31 237.99 292.93 251.07 325.84"
                                                id="LAVENDER20" />
                                            <polygon class="cls-1"
                                                points="267.64 319.28 251.43 325.67 238.34 292.76 254.55 286.38 267.64 319.28"
                                                id="LAVENDER19" />
                                            <polygon class="cls-1"
                                                points="167.95 359.24 180.65 391.32 164.21 397.93 151.5 365.64 167.95 359.24"
                                                id="LAVENDER12" />
                                            <polygon class="cls-1"
                                                points="137.55 332.47 150.59 365.38 134.15 371.98 121.1 338.87 137.55 332.47"
                                                id="LAVENDER26" />
                                            <polygon class="cls-1"
                                                points="150.76 366.1 163.49 398.27 147.05 404.87 134.31 372.51 150.76 366.1"
                                                id="LAVENDER11" />
                                            <polygon class="cls-1"
                                                points="184.75 352.68 197.35 384.55 180.91 391.15 168.3 359.09 184.75 352.68"
                                                id="LAVENDER13" />
                                            <polygon class="cls-1"
                                                points="201.25 346.15 213.86 378.02 197.69 384.51 185.07 352.45 201.25 346.15"
                                                id="LAVENDER14" />
                                            <polygon class="cls-1"
                                                points="230.4 371.43 214.18 377.82 201.53 346.01 217.75 339.63 230.4 371.43"
                                                id="LAVENDER15" />
                                            <polygon class="cls-1"
                                                points="247.12 364.95 230.91 371.34 218.26 339.54 234.47 333.15 247.12 364.95"
                                                id="LAVENDER16" />
                                            <polygon class="cls-1"
                                                points="263.85 358.37 247.63 364.75 234.99 332.95 251.2 326.56 263.85 358.37"
                                                id="LAVENDER17" />
                                            <polygon class="cls-1"
                                                points="280.41 351.81 264.2 358.2 251.55 326.4 267.76 320.01 280.41 351.81"
                                                id="LAVENDER18" />
                                            <rect class="cls-1" x="118.95" y="129.16" width="64.94" height="22.88"
                                                transform="translate(-15.94 19.41) rotate(-6.97)" id="LAVENDER31" />
                                            <rect class="cls-1" x="121.78" y="153.14" width="64.94" height="22.88"
                                                transform="translate(-18.82 19.93) rotate(-6.97)" id="LAVENDER30" />
                                            <rect class="cls-1" x="124.64" y="176.77" width="64.94" height="22.88"
                                                transform="translate(-21.67 20.45) rotate(-6.97)" id="LAVENDER29" />
                                            <polygon class="cls-1"
                                                points="193.56 219.6 134.16 226.57 126.32 204.77 190.78 196.9 193.56 219.6"
                                                id="LAVENDER28" />
                                            <polygon class="cls-1"
                                                points="196.61 243.46 150.64 248.96 134.63 227.12 193.75 220.44 196.61 243.46"
                                                id="LAVENDER27" />
                                            <rect class="cls-1" x="145.06" y="74.21" width="32.26" height="17.07"
                                                transform="translate(-8.85 20.16) rotate(-6.97)" id="LAVENDER34" />
                                            <rect class="cls-1" x="147.2" y="91.84" width="32.26" height="17.07"
                                                transform="translate(-10.97 20.55) rotate(-6.97)" id="LAVENDER33" />
                                            <rect class="cls-1" x="149.33" y="109.73" width="32.26" height="17.07"
                                                transform="translate(-13.12 20.94) rotate(-6.97)" id="LAVENDER32" />
                                            <rect class="cls-1" x="112.3" y="78.19" width="32.26" height="17.07"
                                                transform="translate(-9.57 16.22) rotate(-6.97)" id="LAVENDER35" />
                                            <rect class="cls-1" x="114.45" y="95.82" width="32.26" height="17.07"
                                                transform="translate(-11.69 16.61) rotate(-6.97)" id="LAVENDER36" />
                                            <rect class="cls-1" x="116.58" y="113.71" width="32.26" height="17.07"
                                                transform="translate(-13.85 17) rotate(-6.97)" id="LAVENDER37" />
                                            <rect class="cls-1" x="55.95" y="55.73" width="32.26" height="17.07"
                                                transform="translate(-7.46 9.5) rotate(-7.17)" id="LAVENDER42" />
                                            <rect class="cls-1" x="58.15" y="73.61" width="32.26" height="17.07"
                                                transform="translate(-9.67 9.91) rotate(-7.17)" id="LAVENDER41" />
                                            <rect class="cls-1" x="62.55" y="109.12" width="32.26" height="17.07"
                                                transform="translate(-14.07 10.74) rotate(-7.17)" id="LAVENDER39" />
                                            <polygon class="cls-1"
                                                points="97.61 140.87 65.97 147.7 63.64 128.73 95.66 124.7 97.61 140.87"
                                                id="LAVENDER38" />
                                            <rect class="cls-1" x="590.56" y="1032.76" width="23.21" height="41.79"
                                                transform="matrix(1, 0.02, -0.02, 1, 18.22, -10.21)" id="ASOKA5" />
                                            <rect class="cls-1" x="614.38" y="1033.19" width="23.21" height="41.79"
                                                transform="translate(18.23 -10.62) rotate(0.99)" id="ASOKA6" />
                                            <rect class="cls-1" x="542.73" y="1032.07" width="23.21" height="41.79"
                                                transform="translate(18.2 -9.38) rotate(0.99)" id="ASOKA3" />
                                            <rect class="cls-1" x="566.56" y="1032.5" width="23.21" height="41.79"
                                                transform="translate(18.21 -9.79) rotate(0.99)" id="ASOKA4" />
                                            <polygon class="cls-1"
                                                points="518.12 1073.54 497.55 1073.31 489.57 1030.66 518.69 1031.5 518.12 1073.54"
                                                id="ASOKA1" />
                                            <rect class="cls-1" x="518.73" y="1031.81" width="23.21" height="41.79"
                                                transform="matrix(1, 0.02, -0.02, 1, 18.19, -8.97)" id="ASOKA2" />
                                            <rect class="cls-1" x="641.3" y="1034.13" width="23.21" height="41.67"
                                                transform="translate(18.25 -11.08) rotate(0.99)" id="ASOKA7" />
                                            <rect class="cls-1" x="665.23" y="1034.54" width="23.21" height="41.67"
                                                transform="translate(18.26 -11.49) rotate(0.99)" id="ASOKA8" />
                                            <rect class="cls-1" x="688.96" y="1034.91" width="23.21" height="41.67"
                                                transform="translate(18.27 -11.9) rotate(0.99)" id="ASOKA9" />
                                            <rect class="cls-1" x="712.51" y="1035.34" width="23.21" height="41.67"
                                                transform="translate(18.28 -12.3) rotate(0.99)" id="ASOKA10" />
                                            <rect class="cls-1" x="736.21" y="1035.81" width="23.21" height="41.67"
                                                transform="translate(18.29 -12.71) rotate(0.99)" id="ASOKA11" />
                                            <rect class="cls-1" x="759.76" y="1036.24" width="23.21" height="41.67"
                                                transform="translate(18.31 -13.12) rotate(0.99)" id="ASOKA12" />
                                            <polygon class="cls-1"
                                                points="425.29 684.74 424.69 716.84 406.97 716.63 407.64 684.37 425.29 684.74"
                                                id="B15" />
                                            <polygon class="cls-1"
                                                points="388.83 712.74 388.24 748.65 370.7 748.4 371.19 712.32 388.83 712.74"
                                                id="B16" />
                                            <polygon class="cls-1"
                                                points="443.31 685.1 442.71 717.2 425 716.99 425.67 684.73 443.31 685.1"
                                                id="B14" />
                                            <polygon class="cls-1"
                                                points="461.06 685.39 460.47 717.49 443.04 717.28 443.7 685.02 461.06 685.39"
                                                id="B13" />
                                            <rect class="cls-1" x="461.1" y="685.5" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 12.14, -7.98)" id="B12" />
                                            <rect class="cls-1" x="479.03" y="685.91" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 12.15, -8.29)" id="B11" />
                                            <polygon class="cls-1"
                                                points="287.32 710.79 286.91 755.32 262.65 756.66 265 710.09 287.32 710.79"
                                                id="ASTER15" />
                                            <polygon class="cls-1"
                                                points="308.6 711.18 307.96 754.14 287.52 755.33 288.27 710.83 308.6 711.18"
                                                id="ASTER14" />
                                            <polygon class="cls-1"
                                                points="329.27 711.53 328.67 752.97 308.26 754.04 309.28 711.18 329.27 711.53"
                                                id="ASTER13" />
                                            <polygon class="cls-1"
                                                points="349.56 751.58 329.23 752.79 329.97 711.66 350.04 711.92 349.56 751.58"
                                                id="ASTER12" />
                                            <polygon class="cls-1"
                                                points="370.53 750.52 350.21 751.6 350.76 711.98 370.83 712.24 370.53 750.52"
                                                id="ASTER11" />
                                            <rect class="cls-1" x="497" y="686.21" width="17.42" height="32.11"
                                                transform="translate(12.16 -8.6) rotate(0.99)" id="B10" />
                                            <rect class="cls-1" x="514.81" y="686.49" width="17.42" height="32.11"
                                                transform="translate(12.17 -8.91) rotate(0.99)" id="B9" />
                                            <polygon class="cls-1"
                                                points="442.6 717.87 442 749.96 424.28 749.76 424.95 717.5 442.6 717.87"
                                                id="B17" />
                                            <polygon class="cls-1"
                                                points="460.34 718.16 459.75 750.25 442.32 750.05 442.98 717.79 460.34 718.16"
                                                id="B18" />
                                            <rect class="cls-1" x="460.38" y="718.27" width="17.42" height="32.11"
                                                transform="translate(12.71 -7.96) rotate(0.99)" id="B19" />
                                            <rect class="cls-1" x="478.31" y="718.67" width="17.42" height="32.11"
                                                transform="translate(12.72 -8.27) rotate(0.99)" id="B20" />
                                            <rect class="cls-1" x="496.28" y="718.98" width="17.42" height="32.11"
                                                transform="translate(12.72 -8.58) rotate(0.99)" id="B21" />
                                            <rect class="cls-1" x="514.09" y="719.26" width="17.42" height="32.11"
                                                transform="translate(12.73 -8.89) rotate(0.99)" id="B22" />

                                            <path
                                                d="M715.25,725.85a.3.3,0,0,1-.28-.19L679.86,638,593.69,452.39a.3.3,0,0,1,0-.26l44.63-92.22a.3.3,0,0,1,.41-.15.31.31,0,0,1,.14.41l-44.56,92.09L680.43,637.8l35.11,87.63a.31.31,0,0,1-.17.4Z" />
                                            <path
                                                d="M574.52,450.32a.2.2,0,0,1-.13,0,.3.3,0,0,1-.15-.41l44.63-92.42a.3.3,0,0,1,.41-.14.31.31,0,0,1,.14.41L574.8,450.14A.33.33,0,0,1,574.52,450.32Z" />
                                            <path
                                                d="M680,1085.62h0l-171.54-3.17-141-28.77a.31.31,0,0,1-.24-.36.3.3,0,0,1,.36-.24l140.94,28.76L680.05,1085a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M330.31,963.92h-.08a.3.3,0,0,1-.22-.37l11.46-44.32,28.35-168.55a.3.3,0,0,1,.35-.25.3.3,0,0,1,.25.35L342.07,919.35,330.6,963.69A.3.3,0,0,1,330.31,963.92Z" />
                                            <path
                                                d="M262.65,757a.31.31,0,0,1-.31-.29.3.3,0,0,1,.29-.32l107.47-5.94a.31.31,0,1,1,0,.62L262.67,757Z" />
                                            <path
                                                d="M326.52,978.25h-.08a.31.31,0,0,1-.22-.37L330,963.54a.3.3,0,0,1,.59.15L326.81,978A.3.3,0,0,1,326.52,978.25Z" />
                                            <path
                                                d="M742.38,928.61h0a.3.3,0,0,1-.3-.31h0l1.33-65.51a.3.3,0,0,1,.31-.3.31.31,0,0,1,.31.31h0l-1.33,65.51A.32.32,0,0,1,742.38,928.61Z" />
                                            <path
                                                d="M711.26,841.61h0a.31.31,0,0,1-.31-.31h0l.71-41.14a.27.27,0,0,1,.06-.17l.45-24.19a.3.3,0,0,1,.32-.3.3.3,0,0,1,.3.31l-1.23,65.51A.3.3,0,0,1,711.26,841.61Z" />
                                            <path
                                                d="M401.65,407.84h0l-76.15-1.74a.3.3,0,0,1-.3-.31.28.28,0,0,1,.31-.3l76.15,1.74a.3.3,0,0,1,.3.31A.3.3,0,0,1,401.65,407.84Z" />
                                            <path
                                                d="M308.71,1047.24h-.08a.31.31,0,0,1-.22-.38l6.65-25.79a.32.32,0,0,1,.38-.22.31.31,0,0,1,.22.37L309,1047A.31.31,0,0,1,308.71,1047.24Z" />
                                            <path
                                                d="M315.36,1021.44h-.07a.3.3,0,0,1-.23-.37l3.69-14.43,7.47-28.76a.3.3,0,0,1,.38-.22.31.31,0,0,1,.22.37l-7.48,28.76-3.68,14.43A.31.31,0,0,1,315.36,1021.44Z" />
                                            <line class="cls-2" x1="303.18" y1="409.78" x2="183.84" y2="447.65" />
                                            <polyline class="cls-3"
                                                points="186.6 52.88 36.04 36.3 34.51 40.39 33.17 47.35 21.1 76.52 14.44 94.33 44.23 152.78 106.66 139.26" />
                                            <path
                                                d="M367.56,1053.69l-.08,0a.29.29,0,0,1-.21-.38l27.08-91.45a.31.31,0,0,1,.38-.21.3.3,0,0,1,.21.38l-27.08,91.45A.31.31,0,0,1,367.56,1053.69Z" />
                                            <path
                                                d="M574.42,450.32h-.07l-72.06-17.1-50.36-11.87-32.55-8.7L314.05,384a.3.3,0,0,1-.21-.38.29.29,0,0,1,.37-.21l105.33,28.66,32.54,8.7,50.35,11.87,72.06,17.09a.31.31,0,0,1-.07.61Z" />
                                            <path
                                                d="M112.09,470.38a.31.31,0,0,1-.29-.22.3.3,0,0,1,.2-.38l71.75-22.42a.3.3,0,0,1,.38.2.31.31,0,0,1-.2.39l-71.75,22.41Z" />
                                            <path
                                                d="M778.61,981.83h0a.31.31,0,0,1-.31-.3h0l.51-31.83a.31.31,0,0,1,.31-.3h0a.31.31,0,0,1,.3.31h0l-.51,31.83A.31.31,0,0,1,778.61,981.83Z" />
                                            <path
                                                d="M778,1014.79h0a.3.3,0,0,1-.3-.31h0l.61-33a.31.31,0,0,1,.32-.3.31.31,0,0,1,.3.31h0l-.62,33A.3.3,0,0,1,778,1014.79Z" />
                                            <path
                                                d="M783.11,1078.56h0a.31.31,0,0,1-.3-.32l.82-41.86a.31.31,0,1,1,.61,0l-.82,41.87A.31.31,0,0,1,783.11,1078.56Z" />
                                            <path
                                                d="M798.12,1037.06h0l-9.07-.11h-5.31s-.08-.14-.09-.31,0-.27,0-.3H789l9.08.11s.08.14.09.31S798.16,1037.06,798.12,1037.06Z" />
                                            <path
                                                d="M477.28,967.61h0l-82.6-5.53a.3.3,0,0,1-.28-.33.29.29,0,0,1,.33-.28l82.6,5.53a.3.3,0,0,1,.28.32A.31.31,0,0,1,477.28,967.61Z" />
                                            <path
                                                d="M792.2,1014.92h0l-14.32-.26c-.07,0-.14-.14-.14-.31s.07-.3.13-.3l14.32.26c.07,0,.14.14.14.31S792.28,1014.92,792.2,1014.92Z" />
                                            <path class="cls-4"
                                                d="M56.61,138.86h-10a.31.31,0,0,1-.27-.17L23,94.07a.3.3,0,0,1,0-.26L36.78,58.4a.3.3,0,0,1,.28-.2h7.27a.32.32,0,0,1,.31.26l12.28,80a.31.31,0,0,1-.31.36Zm-9.84-.62h9.49L44.07,58.82h-6.8L23.58,93.9Z" />
                                            <path
                                                d="M703.69,755.12h0l-26.61-.51a.31.31,0,0,1-.22-.09.35.35,0,0,1-.08-.22l1.33-65.2a.3.3,0,0,1,.31-.3h0a.3.3,0,0,1,.3.31L677.39,754l26.3.51a.31.31,0,0,1,.31.31A.32.32,0,0,1,703.69,755.12Z" />
                                            <path
                                                d="M351.59,579.48h0l-79.84-1.63a.32.32,0,0,1-.22-.1.36.36,0,0,1-.08-.23l1.33-25.69a.32.32,0,0,1,.12-.22.28.28,0,0,1,.25-.06l75,14a.3.3,0,0,1,.24.22l3.48,13.31a.3.3,0,0,1-.05.27A.33.33,0,0,1,351.59,579.48Zm-79.51-2.24,79.11,1.62-3.32-12.72-74.49-13.92Z" />
                                            <path
                                                d="M347.71,576.41h0l-72.77-1.53a.29.29,0,0,1-.22-.1.27.27,0,0,1-.08-.22l.92-19.14a.3.3,0,0,1,.11-.23.36.36,0,0,1,.25-.06l69.8,13a.3.3,0,0,1,.24.22L348,576a.3.3,0,0,1-.05.27A.32.32,0,0,1,347.71,576.41Zm-72.46-2.14,72.05,1.52-1.89-7.09-69.27-12.9Z" />
                                            <path
                                                d="M90.08,329.33a.31.31,0,0,1-.28-.18.3.3,0,0,1,.16-.4L180.19,290l-58.11-79.11a.27.27,0,0,1-.06-.12l-15.66-71.44a.31.31,0,0,1,.24-.36.29.29,0,0,1,.36.23l15.65,71.38L180.91,290a.28.28,0,0,1,.05.26.33.33,0,0,1-.17.21L90.2,329.31A.25.25,0,0,1,90.08,329.33Z" />
                                            <path
                                                d="M680,1085.62l-171.54-3.17-9.88-2a.31.31,0,0,1-.25-.31v-1.51a.34.34,0,0,1-.1-.16l-1-5.12a.3.3,0,0,1,.06-.26.28.28,0,0,1,.24-.11l284.14,4.91a.31.31,0,0,1,.3.29.31.31,0,0,1-.27.32l-1.53.21-45.34,6.86ZM499,1079.94l9.58,1.9L680.05,1085H734.8l43.05-6.52-279.92-4.84.9,4.54a.31.31,0,0,1,.15.26Z" />
                                            <path
                                                d="M703.69,755.12a.31.31,0,0,1-.29-.2l-7.88-21.8-17.4-43.9a.31.31,0,0,1,.17-.4.31.31,0,0,1,.4.17l17.4,43.91L704,754.71a.31.31,0,0,1-.19.39A.18.18,0,0,1,703.69,755.12Z" />
                                            <path
                                                d="M734.91,841.51a.32.32,0,0,1-.3-.21L712.2,775.9a.31.31,0,0,1,.19-.39.3.3,0,0,1,.39.19l22.42,65.4a.31.31,0,0,1-.19.39Z" />
                                            <path
                                                d="M771.75,928.51a.3.3,0,0,1-.28-.19l-28-65.4a.31.31,0,0,1,.16-.41.31.31,0,0,1,.4.17l28,65.4a.31.31,0,0,1-.17.4Z" />
                                            <path
                                                d="M792,1015.1a.3.3,0,0,1-.3-.25l-12.9-65.1a.32.32,0,0,1,.24-.36.3.3,0,0,1,.36.25l12.9,65.09a.31.31,0,0,1-.24.36Z" />
                                            <path
                                                d="M783.11,1078.35a.31.31,0,0,1-.2-.07.32.32,0,0,1,0-.44l6.73-7.74,5.69-13.42,2.35-20.12a.3.3,0,0,1,.34-.27.3.3,0,0,1,.27.34l-2.35,20.16,0,.09-5.73,13.51a.35.35,0,0,1,0,.08l-6.75,7.78A.33.33,0,0,1,783.11,1078.35Z" />
                                            <path
                                                d="M351.67,1076.19h0l-126.1-15.45a.32.32,0,0,1-.2-.12.28.28,0,0,1-.06-.23l3.37-22.83a.32.32,0,0,1,.34-.26l79.71,9.28a.3.3,0,0,1,.27.34.31.31,0,0,1-.34.27L229.21,1038l-3.29,22.22,125.79,15.41a.31.31,0,0,1,.26.35A.3.3,0,0,1,351.67,1076.19Z" />
                                            <path
                                                d="M697.9,1112.43l-37.13-3.37L530.4,1106.7l-5.22-.1a.3.3,0,0,1-.3-.31.32.32,0,0,1,.31-.3l5.22.1,130.4,2.35,37.07,3.38,95.72-14.61,13.92-16,8.15-19.26,2.44-20.89L797.24,935.63l-40.41-94.31L715,725.65,679.86,638,593.69,452.39a.3.3,0,1,1,.55-.26L680.43,637.8l35.11,87.63L757.41,841.1l40.42,94.35L818.73,1041v.09l-2.46,21a.29.29,0,0,1,0,.09l-8.19,19.34a.41.41,0,0,1,0,.09l-14,16.06a.29.29,0,0,1-.18.11Z" />
                                            <path
                                                d="M598.88,494.53a.3.3,0,0,1-.27-.16L585,468a.31.31,0,0,1,.55-.28l13.61,26.4a.31.31,0,0,1-.13.42A.35.35,0,0,1,598.88,494.53Z" />
                                            <path
                                                d="M598.88,494.53h0l-13.71-.31a.3.3,0,0,1-.3-.31.31.31,0,0,1,.31-.3l13.72.31a.3.3,0,0,1,.3.31A.31.31,0,0,1,598.88,494.53Z" />
                                            <path
                                                d="M585.16,494.22h0a.29.29,0,0,1-.3-.3l.1-26.1a.31.31,0,0,1,.31-.31h0a.3.3,0,0,1,.3.31l-.1,26.1A.3.3,0,0,1,585.16,494.22Z" />
                                            <path d="M703.69,754.51a.31.31,0,1,1,0,.61h0" />
                                            <path
                                                d="M489.36,1031a.31.31,0,0,1-.3-.25l-12.18-63.35a.3.3,0,0,1,.07-.26.28.28,0,0,1,.25-.11l12.18.82a.31.31,0,1,1,0,.61l-11.78-.79,12.1,63a.3.3,0,0,1-.24.36Z" />
                                            <path
                                                d="M265,710.39a.31.31,0,0,1-.22-.09.29.29,0,0,1-.08-.23l6.75-132.55a.31.31,0,0,1,.32-.29l79.83,1.64a.3.3,0,0,1,.3.31.32.32,0,0,1-.31.3l-79.54-1.63-6.72,131.94" />
                                            <path
                                                d="M104.62,422.27a.24.24,0,0,1-.15,0,.32.32,0,0,1-.16-.22L89.78,329.08a.3.3,0,0,1,.18-.33l2.56-1.13a.36.36,0,0,1,.25,0,.28.28,0,0,1,.16.18L122,415a.3.3,0,0,1-.18.38l-17.09,6.86Zm-14.2-93.06,14.44,92.33,16.47-6.61L92.46,328.32Z" />
                                            <path
                                                d="M771.8,928.49h0l-29.49.1s-.09-.17-.1-.38,0-.37,0-.38h0l29.49-.1s.08.17.1.38S771.84,928.49,771.8,928.49Z" />
                                            <path
                                                d="M489.36,1031c-.17,0-.31-.1-.31-.22V968.09c0-.13.14-.23.31-.23s.31.1.31.23v62.65C489.67,1030.86,489.53,1031,489.36,1031Z" />
                                            <polygon class="cls-5"
                                                points="-149.76 -15.49 252.72 -23.03 307.79 100.65 572.16 325.23 882.57 371.1 975.85 667.82 988.28 1082.68 697.9 1112.43 660.49 1108.97 503.96 1105.58 372.78 1079.08 348.51 1075.47 -132.18 1042.32 -149.76 -15.49" />

                                            <polygon class="cls-1"
                                                points="538.1 493.06 505.87 492.38 506.23 475.07 538.29 475.7 538.1 493.06"
                                                id="AZALEA3" />
                                            <polygon class="cls-1"
                                                points="451.65 491.73 419.58 491.01 419.77 473.74 452.02 474.41 451.65 491.73"
                                                id="AZALEA9" />
                                            <polygon class="cls-1"
                                                points="622.88 548.04 589.74 547.41 590.29 515.3 609.11 515.51 622.88 548.04"
                                                id="A1" />
                                            <polygon class="cls-1"
                                                points="637.02 581.03 606.86 580.24 607.42 548.14 623.03 548.33 637.02 581.03"
                                                id="A27" />
                                            <rect class="cls-1" x="60.35" y="91.24" width="32.26" height="17.07"
                                                transform="translate(-11.86 10.33) rotate(-7.17)" id="LAVENDER40" />
                                            <rect class="cls-1" x="211.24" y="174.25" width="32.26" height="17.07"
                                                transform="translate(-20.49 28.93) rotate(-6.97)" id="LAVENDER49" />
                                            <rect class="cls-1" x="213.37" y="192.14" width="32.26" height="17.07"
                                                transform="translate(-22.65 29.32) rotate(-6.97)" id="LAVENDER50" />
                                            <rect class="cls-1" x="215.52" y="209.78" width="32.26" height="17.07"
                                                transform="translate(-24.77 29.71) rotate(-6.97)" id="LAVENDER51" />
                                            <rect class="cls-1" x="217.65" y="227.67" width="32.26" height="17.07"
                                                transform="translate(-26.92 30.1) rotate(-6.97)" id="LAVENDER52" />
                                            <polygon class="cls-1"
                                                points="252.69 260.45 220.39 264.66 218.57 247.27 250.6 243.35 252.69 260.45"
                                                id="LAVENDER53" />
                                            <rect class="cls-1" x="200.1" y="76.63" width="32.26" height="22.85"
                                                transform="translate(-9.08 26.88) rotate(-6.97)" id="LAVENDER44" />
                                            <polygon class="cls-1"
                                                points="230.39 73.97 198.37 77.89 195.42 54.12 228.57 57.49 230.39 73.97"
                                                id="LAVENDER43" />
                                            <rect class="cls-1" x="202.58" y="100.28" width="32.26" height="17.07"
                                                transform="translate(-11.58 27.33) rotate(-6.97)" id="LAVENDER45" />
                                            <rect class="cls-1" x="204.73" y="117.91" width="32.26" height="17.07"
                                                transform="translate(-13.71 27.72) rotate(-6.97)" id="LAVENDER46" />
                                            <rect class="cls-1" x="206.86" y="135.8" width="32.26" height="17.07"
                                                transform="translate(-15.86 28.11) rotate(-6.97)" id="LAVENDER47" />
                                            <polygon class="cls-1"
                                                points="241.89 168.59 209.6 172.79 207.78 155.4 239.81 151.49 241.89 168.59"
                                                id="LAVENDER49" />

                                            <path
                                                d="M372.37,576.72a.31.31,0,0,1-.3-.23l-16.58-65.71a.31.31,0,0,1,.6-.15l16.58,65.71a.31.31,0,0,1-.22.37Z" />
                                            <line class="cls-6" x1="351.65" y1="1075.6" x2="504.06" y2="1105.83" />
                                            <path
                                                d="M695.81,733.32a.3.3,0,0,1-.29-.19l-17.4-43.91a.31.31,0,0,1,.17-.4.31.31,0,0,1,.4.17l17.4,43.91a.3.3,0,0,1-.17.4Z" />
                                            <path
                                                d="M325.5,406.1a.31.31,0,0,1-.28-.17l-11.36-22.11L268,262.68l-15.27-1.62L220.21,265a.3.3,0,0,1-.34-.27.31.31,0,0,1,.27-.34l32.55-3.89,15.52,1.64a.3.3,0,0,1,.25.2l46,121.29,11.35,22.07a.31.31,0,0,1-.13.42Z" />
                                            <polygon class="cls-7"
                                                points="217.21 434.55 217.1 434.45 217 434.35 216.9 434.45 216.8 434.55 216.9 434.66 217 434.76 217.1 434.66 217.21 434.55" />
                                            <path
                                                d="M304.21,411.63a.3.3,0,0,1-.23-.11l-.82-.92a.3.3,0,0,1,0-.43.32.32,0,0,1,.44,0l.81.93a.29.29,0,0,1,0,.43A.32.32,0,0,1,304.21,411.63Z" />
                                            <path
                                                d="M598.88,494.53h0l-13.71-.31a.3.3,0,0,1-.3-.31.31.31,0,0,1,.31-.3l13.72.31a.3.3,0,0,1,.3.31A.31.31,0,0,1,598.88,494.53Z" />
                                            <path class="cls-8"
                                                d="M502.36,433.22h-.07l-50.36-11.87-4.6-1-28-7.68-17.8-4.81L314.05,384a.3.3,0,0,1-.21-.38.29.29,0,0,1,.37-.21l87.52,23.85,17.8,4.81,28,7.67,4.59,1,50.36,11.88a.3.3,0,0,1-.07.6Z" />
                                            <path class="cls-8"
                                                d="M248.42,225.55a.31.31,0,0,1-.3-.27l-2.05-17.71a.3.3,0,0,1,.27-.34.3.3,0,0,1,.34.27l2,17.71a.31.31,0,0,1-.27.34Z" />
                                            <path class="cls-8"
                                                d="M598.88,494.53a.3.3,0,0,1-.27-.16L585,468a.31.31,0,0,1,.55-.28l13.61,26.4a.31.31,0,0,1-.13.42A.35.35,0,0,1,598.88,494.53Z" />
                                            <path
                                                d="M235.9,120a.32.32,0,0,1-.32-.28L233.43,101,231.06,82l-2.8-24.49a.33.33,0,0,1,.29-.36.32.32,0,0,1,.35.29L231.7,82l2.37,18.92,2.15,18.72a.31.31,0,0,1-.28.36Z" />
                                            <path
                                                d="M361.52,443.87a.3.3,0,0,1-.3-.31v-2.79l-1.15,2.9a.29.29,0,0,1-.29.2.31.31,0,0,1-.29-.2l-1-2.8v2.69a.31.31,0,1,1-.61,0v-4.4a.31.31,0,0,1,.59-.11l1.36,3.65,1.45-3.65a.31.31,0,0,1,.59.11v4.4A.31.31,0,0,1,361.52,443.87Z" />
                                            <path
                                                d="M365.51,443.87a.31.31,0,0,1-.3-.31v-3a.31.31,0,1,1,.61,0v3A.31.31,0,0,1,365.51,443.87Z" />
                                            <path
                                                d="M364.7,443.87h-.62a.35.35,0,0,1-.14,0l-.4-.21-.57-.44a.31.31,0,0,1-.1-.15l-.21-.61a.34.34,0,0,1,0-.1v-.41a.22.22,0,0,1,0-.08l.2-.72A.33.33,0,0,1,363,441l.51-.41.46-.24a.37.37,0,0,1,.14,0h.62a.33.33,0,0,1,.13,0l.41.2.08.06.41.41a.3.3,0,0,1-.43.43l-.38-.37-.3-.15h-.47l-.34.17-.38.31-.17.59v.31l.16.48.44.36.29.13h.47l.3-.15.38-.37a.3.3,0,0,1,.43.43l-.41.41a.16.16,0,0,1-.08.06l-.41.21A.31.31,0,0,1,364.7,443.87Z" />
                                            <path
                                                d="M368.48,443.87h-.61l-.1,0-.61-.2a.31.31,0,0,1-.18-.16l-.2-.41a.3.3,0,0,1,.13-.41.31.31,0,0,1,.41.14l.15.29.45.15h.52l.55-.15.11-.29-.12-.24-.41-.16-1-.19-.07,0-.41-.21a.29.29,0,0,1-.15-.16l-.21-.51a.31.31,0,0,1,0-.25l.2-.41a.3.3,0,0,1,.18-.15l.61-.21.1,0h.61l.09,0,.71.2a.28.28,0,0,1,.19.16l.21.41a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.14-.28-.55-.16h-.52l-.45.15-.08.17.11.28.26.13,1,.2.56.22a.28.28,0,0,1,.16.14l.21.41a.35.35,0,0,1,0,.14V443a.31.31,0,0,1,0,.13l-.21.41a.26.26,0,0,1-.19.16l-.71.21Z" />
                                            <path
                                                d="M371.25,439.88a.36.36,0,0,1-.22-.09l-.21-.21a.36.36,0,0,1-.09-.22.31.31,0,0,1,.09-.21l.21-.21a.3.3,0,0,1,.43,0l.21.21a.3.3,0,0,1,0,.43l-.21.21A.31.31,0,0,1,371.25,439.88Z" />
                                            <path
                                                d="M370.63,445.4h-.41a.29.29,0,0,1-.3-.3.3.3,0,0,1,.3-.31h.34l.22-.11.16-.55V440.8a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v3.37a.28.28,0,0,1,0,.09l-.2.72a.33.33,0,0,1-.16.19l-.41.2A.32.32,0,0,1,370.63,445.4Z" />
                                            <path
                                                d="M373,439.88h0a.34.34,0,0,1-.22-.09l-.21-.21a.3.3,0,0,1,0-.43l.21-.21a.3.3,0,0,1,.43,0l.21.21a.27.27,0,0,1,.09.21.31.31,0,0,1-.09.22l-.21.21A.31.31,0,0,1,373,439.88Z" />
                                            <path
                                                d="M373,443.87a.31.31,0,0,1-.31-.31V440.8a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.76A.3.3,0,0,1,373,443.87Z" />
                                            <path
                                                d="M377,443.87a.31.31,0,0,1-.31-.31v-4.5a.31.31,0,1,1,.62,0v4.5A.31.31,0,0,1,377,443.87Z" />
                                            <path
                                                d="M376.16,443.87h-.62a.31.31,0,0,1-.13,0l-.41-.21a.16.16,0,0,1-.08-.06l-.41-.41-.06-.08-.31-.61a.32.32,0,0,1,0-.14v-.41a.27.27,0,0,1,0-.12l.3-.71a.36.36,0,0,1,.07-.1l.41-.41.08-.06.41-.2a.33.33,0,0,1,.13,0h.62a.37.37,0,0,1,.14,0l.41.2.08.06.41.41a.32.32,0,0,1,0,.43.31.31,0,0,1-.44,0l-.37-.37-.3-.15h-.47l-.3.15-.33.33-.26.61v.27l.25.5.34.34.3.15h.47l.3-.15.37-.37a.31.31,0,0,1,.44,0,.32.32,0,0,1,0,.43l-.41.41a.21.21,0,0,1-.08.06l-.41.21A.35.35,0,0,1,376.16,443.87Z" />
                                            <path
                                                d="M384.65,443.87a.31.31,0,0,1-.3-.31v-3.67l-.08.08a.34.34,0,0,1-.09.08l-.41.2a.3.3,0,0,1-.41-.13.31.31,0,0,1,.13-.42l.36-.17.57-.67a.3.3,0,0,1,.34-.09.3.3,0,0,1,.2.29v4.5A.31.31,0,0,1,384.65,443.87Z" />
                                            <path
                                                d="M252.72,261.07a.31.31,0,0,1-.3-.27l-4.3-35.52h0l-2.05-17.71v0a.3.3,0,0,1,.27-.3.3.3,0,0,1,.34.27l2,17.71,4.3,35.51a.3.3,0,0,1-.27.34Z" />
                                            <path
                                                d="M598.88,494.53a.3.3,0,0,1-.27-.16l-13-25.3-.1,24.85a.3.3,0,0,1-.31.3h0a.29.29,0,0,1-.3-.3l.1-26.1a.31.31,0,0,1,.23-.3.32.32,0,0,1,.35.16l13.61,26.4a.31.31,0,0,1-.13.42A.35.35,0,0,1,598.88,494.53Z" />
                                            <path
                                                d="M363.67,450.32a.3.3,0,0,1-.3-.31v-.62h-1.13a.29.29,0,0,1-.27-.16.29.29,0,0,1,0-.32l1.43-2.05a.3.3,0,0,1,.34-.11.31.31,0,0,1,.22.29v1.74h.41a.31.31,0,0,1,.31.31.3.3,0,0,1-.31.3H364V450A.31.31,0,0,1,363.67,450.32Zm-.84-1.54h.54V448Z" />
                                            <path
                                                d="M365.92,450.32l-.48-.12a.25.25,0,0,1-.17-.11l-.31-.41a.35.35,0,0,1-.06-.14l-.1-.72v-.45l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0h.31a.23.23,0,0,1,.14,0l.41.2a.31.31,0,0,1,.11.09l.3.41a.35.35,0,0,1,.06.14l.1.72v.45l-.11.76a.35.35,0,0,1-.06.14l-.3.41a.29.29,0,0,1-.18.11l-.4.11Zm-.23-.69.31.08h.23l.23-.06.19-.26.1-.64v-.37l-.08-.59-.22-.29-.28-.14H366l-.28.14-.22.29-.09.63v.37l.09.59Z" />
                                            <path
                                                d="M368.79,450.32l-.48-.12a.29.29,0,0,1-.18-.11l-.3-.41a.35.35,0,0,1-.06-.14l-.1-.72v-.45l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.31a.22.22,0,0,1,.13,0l.41.2a.24.24,0,0,1,.11.09l.31.41a.35.35,0,0,1,.06.14l.1.72v.45l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.25.25,0,0,1-.17.11l-.41.11Zm-.23-.69.3.08h.24l.22-.06.2-.26.09-.64v-.37l-.09-.59-.22-.29-.28-.14h-.16l-.28.14-.21.29-.1.63v.37l.09.59Z" />
                                            <path
                                                d="M370.94,450.32a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.62,0V450A.31.31,0,0,1,370.94,450.32Z" />
                                            <path
                                                d="M372.47,450.32a.31.31,0,0,1-.3-.31v-1.43l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41V450A.31.31,0,0,1,372.47,450.32Z" />
                                            <path
                                                d="M374,450.32a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.32.32,0,0,1,.21.21l.1.41V450A.31.31,0,0,1,374,450.32Z" />
                                            <path
                                                d="M377,450.32h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.32-.07-.19-.1-.1-.19-.06h-.41l-.14,0-.22.37a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.34.34,0,0,1,.05-.17l.29-.47a.29.29,0,0,1,.18-.16l.3-.1.1,0h.51l.1,0,.31.1a.42.42,0,0,1,.12.08l.2.2a.5.5,0,0,1,.08.12l.1.31a.28.28,0,0,1,0,.09v.21a.38.38,0,0,1,0,.1l-.1.3-.05.09-.31.41-.94.94H377a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M703.69,755.12a.31.31,0,0,1-.29-.2l-7.88-21.8a.3.3,0,0,1,.18-.39.31.31,0,0,1,.4.18l7.88,21.8a.31.31,0,0,1-.19.39A.18.18,0,0,1,703.69,755.12Z" />
                                            <path
                                                d="M734.91,841.51a.32.32,0,0,1-.3-.21L712.2,775.9a.31.31,0,0,1,.19-.39.3.3,0,0,1,.39.19l22.42,65.4a.31.31,0,0,1-.19.39Z" />
                                            <path
                                                d="M771.75,928.51a.3.3,0,0,1-.28-.19l-28-65.4a.31.31,0,0,1,.16-.41.31.31,0,0,1,.4.17l28,65.4a.31.31,0,0,1-.17.4Z" />
                                            <path
                                                d="M816,1062.39h0a.3.3,0,0,1-.27-.34l2.46-21a.31.31,0,0,1,.61.07l-2.46,21A.3.3,0,0,1,816,1062.39Z" />
                                            <path
                                                d="M123.25,454.1H123a.35.35,0,0,1-.14,0l-.41-.2-.34-.23a.34.34,0,0,1-.13-.2l-.1-.61a.2.2,0,0,1,0-.11v-.66l.11-.76a.39.39,0,0,1,.06-.15l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.08H123l-.23.07-.19.26,0,.29.39-.09h.28l.48.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.1.41V453l-.11.48a.29.29,0,0,1-.13.18l-.3.21-.45.22A.31.31,0,0,1,123.25,454.1Zm-.14-.61h.06l.52-.29.08-.3v-.13l-.07-.25-.19-.19-.33-.08H123l-.25.07-.19.19-.07.27.07.41.2.14Z" />
                                            <path
                                                d="M126,454.1h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.3.3,0,0,1-.13-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.76a.27.27,0,0,1,0-.15l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,1,1-.59.19l0-.14-.25-.07h-.23l-.23.07-.2.26,0,.29.57-.1.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.2.41a.2.2,0,0,1,0,.13v.1a.5.5,0,0,1,0,.12l-.21.51a.26.26,0,0,1-.11.14l-.31.21-.44.22A.35.35,0,0,1,126,454.1Zm-.54-.9.2.14.29.14.52-.3.14-.35-.15-.29-.21-.21-.33-.08-.27.08-.19.19-.07.27Z" />
                                            <path
                                                d="M127.85,454.1a.31.31,0,0,1-.31-.3v-2.05a.31.31,0,1,1,.62,0v2.05A.31.31,0,0,1,127.85,454.1Z" />
                                            <path
                                                d="M129.49,454.1a.31.31,0,0,1-.31-.28l-.1-1.44-.06-.24-.14-.08h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17-.05H129a.34.34,0,0,1,.17.05l.3.21a.27.27,0,0,1,.13.18l.1.41.11,1.48a.3.3,0,0,1-.28.33Z" />
                                            <path
                                                d="M131,454.1a.3.3,0,0,1-.3-.3v-1.36l-.23-.38h-.26l-.11.11-.54.43a.3.3,0,0,1-.43-.05.3.3,0,0,1,0-.43l.7-.59a.27.27,0,0,1,.21-.09h.52a.29.29,0,0,1,.21.09l.21.21a.22.22,0,0,1,.05.08l.21.41a.28.28,0,0,1,0,.13v1.44A.31.31,0,0,1,131,454.1Z" />
                                            <path
                                                d="M134,454.1h-2a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l-.06-.19-.19-.07h-.5l-.23.12,0,.14v.15a.31.31,0,1,1-.62,0v-.2a.36.36,0,0,1,0-.1l.1-.3a.29.29,0,0,1,.16-.18l.4-.21a.35.35,0,0,1,.14,0h.62l.09,0,.31.1a.24.24,0,0,1,.12.07l.1.11a.25.25,0,0,1,.08.12l.1.3a.34.34,0,0,1,0,.1v.31a.28.28,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94H134a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M77.19,139.67l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.37.37,0,0,1-.07-.12l-.21-.62h0a.34.34,0,0,1,0-.1v-.61a.19.19,0,0,1,0-.08l.21-.72a.09.09,0,0,1,0-.07l.3-.52a.33.33,0,0,1,.19-.14l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.59.2l0-.14-.34-.07h-.14l-.21,0-.23.38-.08.3.38-.19a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.32.32,0,0,1,.12.18l.11.41v.28l-.11.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08Zm-.26-.68.33.08.28-.08.19-.19.08-.33v-.13l-.06-.21-.21-.14-.29-.15-.53.3-.11.23.14.42Z" />
                                            <path
                                                d="M79.75,139.67l-.58-.1a.34.34,0,0,1-.23-.21l-.1-.3a.31.31,0,0,1,.19-.39.3.3,0,0,1,.39.19l0,.14.34.07H80l.3-.06.14-.28.08-.27-.62.1-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.39.39,0,0,1-.08-.14l-.1-.41v-.28l.11-.49a.39.39,0,0,1,.08-.14l.31-.31.14-.08.59-.11.48.11a.53.53,0,0,1,.15.08l.3.31a.42.42,0,0,1,.08.12l.2.62h0a.28.28,0,0,1,0,.09v.71s0,.06,0,.08l-.21.72-.22.46a.32.32,0,0,1-.22.17l-.51.1Zm-.15-1.81.32.08.36-.07.26-.47L80.4,137l-.2-.19-.32-.08-.28.08-.19.19-.08.32v.13l.07.25Z" />
                                            <path
                                                d="M82,139.67a.3.3,0,0,1-.31-.3v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.29.29,0,0,1,82,139.67Z" />
                                            <path
                                                d="M83.53,139.67a.29.29,0,0,1-.3-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,83.53,139.67Z" />
                                            <path
                                                d="M85.07,139.67a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0H84.3l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.4-.41a.42.42,0,0,1,.12-.08l.31-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,85.07,139.67Z" />
                                            <path
                                                d="M88,139.67h-2a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.4-1.4.36-.62V137l-.12-.12-.06-.08,0-.09-.14,0h-.41l-.14,0,0,.09a.22.22,0,0,1,0,.08l-.12.12v.08a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.21a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.31.31,0,0,1,.17-.15l.31-.1.1,0h.51l.1,0,.3.1a.34.34,0,0,1,.18.15l.08.16.17.17a.31.31,0,0,1,.09.22v.31a.34.34,0,0,1,0,.17l-.21.31-.18.37-.06.08-.91.91H88a.3.3,0,0,1,.3.31A.29.29,0,0,1,88,139.67Z" />
                                            <path
                                                d="M74.42,121.46l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.11-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0h.31a.23.23,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.06-.19-.23-.11H74.5l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.28.28,0,0,1,.13,0l.41.21a.29.29,0,0,1,.12.1l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.18.12l-.41.11Zm-.25-.69.33.08h.13l.21-.06.15-.21.14-.29-.3-.53-.33-.14-.3.15L74,120l-.06.27.07.34Z" />
                                            <path
                                                d="M77.29,121.46l-.48-.12a.28.28,0,0,1-.15-.08l-.3-.3a.29.29,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.31a.22.22,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.13l0-.12-.26-.12h-.16l-.28.14-.21.29,0,.28.32-.17a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.08.05.31.31a.22.22,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.21.41a.35.35,0,0,1,0,.08l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.69.32.08.28-.08.22-.21.13-.28-.13-.28-.24-.24-.28-.14-.28.14-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M79.23,121.46a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,79.23,121.46Z" />
                                            <path
                                                d="M80.77,121.46a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0H80l-.17.06-.36.44a.31.31,0,0,1-.48-.38l.41-.52a.29.29,0,0,1,.15-.09l.3-.11h.61l.3.11a.29.29,0,0,1,.21.23l.1.51v1.39A.31.31,0,0,1,80.77,121.46Z" />
                                            <path
                                                d="M82.41,121.46a.31.31,0,0,1-.31-.31v-1.27l-.13-.33-.13,0h-.28l-.1,0L81,120a.31.31,0,0,1-.44-.44l.51-.51.08-.06.21-.1a.32.32,0,0,1,.14,0H82l.31.11a.32.32,0,0,1,.19.17l.2.51a.25.25,0,0,1,0,.12v1.33A.3.3,0,0,1,82.41,121.46Z" />
                                            <path
                                                d="M85.38,121.46h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.32-.47v-.19l-.11-.24-.18-.11h-.43l-.23.15-.07.26a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.28.28,0,0,1,0-.09l.1-.31a.32.32,0,0,1,.08-.12l.1-.1.35-.24a.27.27,0,0,1,.17-.06h.62a.27.27,0,0,1,.17.06l.46.34a.47.47,0,0,1,.07.12l.1.31a.29.29,0,0,1,0,.09v.31a.23.23,0,0,1,0,.14l-.1.2-.33.46-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M72.89,103.75h-.1l-.12,0-.51-.21a.26.26,0,0,1-.14-.11l-.21-.31-.23-.56h0s0,0,0,0h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.2-.16l.41-.1H73l.48.11a.31.31,0,0,1,.19.13l.2.3a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.2-.29-.08h-.24l-.19.06-.15.28-.07.27.34-.09h.28l.48.11a.37.37,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.4.21A.35.35,0,0,1,72.89,103.75Zm-.42-.76.36.14.29-.15.21-.21.08-.32-.08-.28-.19-.19-.33-.08h-.13l-.21.06-.27.46.15.39Z" />
                                            <path
                                                d="M75.75,103.75h-.2a.32.32,0,0,1-.14,0l-.41-.21a.21.21,0,0,1-.08-.06l-.3-.3a.29.29,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.31a.33.33,0,0,1,.13,0l.41.2a.31.31,0,0,1,.16.18l.1.31a.3.3,0,0,1-.2.38.29.29,0,0,1-.38-.19l-.07-.19-.23-.11h-.16l-.28.14-.21.29,0,.29.39-.1h.28l.49.11a.34.34,0,0,1,.18.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.29.29,0,0,1-.12.1l-.41.21A.32.32,0,0,1,75.75,103.75Zm-.13-.61h.06L76,103l.16-.24.15-.29L76,102l-.29-.07h-.13l-.25.07-.19.19-.07.27.07.34.21.2Z" />
                                            <path
                                                d="M77.6,103.75a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,77.6,103.75Z" />
                                            <path
                                                d="M79.13,103.65a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.31l-.53.53a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.61-.61a.31.31,0,0,1,.22-.09h.51a.32.32,0,0,1,.14,0l.2.1a.33.33,0,0,1,.15.16l.21.51a.5.5,0,0,1,0,.12v1.33A.31.31,0,0,1,79.13,103.65Z" />
                                            <path
                                                d="M80.67,103.65a.31.31,0,0,1-.31-.31V102l-.06-.28-.09,0H79.9l-.18.06-.35.44a.31.31,0,0,1-.48-.38l.41-.51a.26.26,0,0,1,.14-.1l.31-.11h.6l.31.11a.31.31,0,0,1,.21.23l.1.51v1.39A.3.3,0,0,1,80.67,103.65Z" />
                                            <path
                                                d="M83.64,103.65h-2a.31.31,0,0,1-.29-.2.33.33,0,0,1,.08-.34l1.38-1.28.18-.45a.36.36,0,0,1,.07-.1l.12-.11v-.09l-.22-.29-.18-.11H82.5l-.35.21-.05.2a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3V101a.31.31,0,0,1,0-.1l.1-.31a.35.35,0,0,1,.16-.18l.2-.1.28-.18a.27.27,0,0,1,.17-.06h.51a.27.27,0,0,1,.17.06l.45.34.25.36a.34.34,0,0,1,0,.17v.3a.31.31,0,0,1-.09.22l-.16.16-.18.45a.23.23,0,0,1-.08.11l-.86.8h1.17a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M70.43,85.84,70,85.73a.37.37,0,0,1-.14-.08l-.31-.31a.32.32,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.4-.2a.35.35,0,0,1,.14,0h.31l.48.11a.3.3,0,0,1,.22.2l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.15-.25-.06h-.15l-.29.14L70,83.3l0,.28.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.32.32,0,0,1,.11.12l.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.06.08-.31.3a.42.42,0,0,1-.14.09Zm-.25-.69.33.08.27-.08.22-.21.15-.36L71,84.31l-.24-.16L70.48,84l-.49.27-.07.34L70,85Z" />
                                            <path
                                                d="M73.3,85.84l-.57-.11a.34.34,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.21-.62h0a.34.34,0,0,1,0-.1v-.61a.22.22,0,0,1,0-.08l.21-.72.21-.54a.3.3,0,0,1,.23-.19l.51-.1h.26l.49.11a.36.36,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07H73.3l-.29.06-.22.63.39-.16.12,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.28.28,0,0,1,.12.18l.11.41v.28l-.12.49a.29.29,0,0,1-.08.14l-.3.3a.38.38,0,0,1-.15.09ZM73,85.15l.39.08.29-.08.19-.19.08-.32v-.13l-.06-.22-.21-.14-.3-.15-.38.15-.13.13-.12.25.15.45Z" />
                                            <path
                                                d="M75.24,85.84a.3.3,0,0,1-.3-.31V83.59a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,75.24,85.84Z" />
                                            <path
                                                d="M76.78,85.84a.31.31,0,0,1-.31-.31V84.1l0-.17-.1,0H76l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.4-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,76.78,85.84Z" />
                                            <path
                                                d="M78.31,85.84a.3.3,0,0,1-.3-.31V84.1L78,83.93l-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11H78l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,78.31,85.84Z" />
                                            <path
                                                d="M81.28,85.84H79.34a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.31L80.81,83l-.22-.17H80.1l-.14,0-.21.36a.31.31,0,0,1-.62,0v-.1a.34.34,0,0,1,.05-.17l.29-.48a.31.31,0,0,1,.18-.16l.31-.1h.71a.31.31,0,0,1,.13,0l.21.1a.21.21,0,0,1,.08.06l.2.2a.42.42,0,0,1,.08.12l.1.31a.3.3,0,0,1,0,.1v.2a.36.36,0,0,1,0,.1l-.1.3a.19.19,0,0,1-.05.09l-.31.41-.93.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M67.57,67.52h-.11a.22.22,0,0,1-.13,0l-.41-.2-.34-.22a.38.38,0,0,1-.14-.21l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.28.28,0,0,1,.22.2l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.15-.24-.06h-.24l-.22.06-.2.26,0,.3.57-.11.48.11a.29.29,0,0,1,.14.08l.31.31.06.08.2.41a.32.32,0,0,1,0,.14v.2a.35.35,0,0,1,0,.14l-.2.41a.41.41,0,0,1-.11.12l-.3.2-.45.22A.22.22,0,0,1,67.57,67.52Zm-.54-.9.19.13.29.14.53-.3.14-.33L68,66l-.21-.21-.33-.09-.28.08-.19.19-.06.28Z" />
                                            <path
                                                d="M70.43,67.52h-.1a.27.27,0,0,1-.12,0l-.51-.2-.1-.07-.2-.2a.42.42,0,0,1-.08-.12l-.2-.62h0a.36.36,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.46a.32.32,0,0,1,.2-.16l.41-.11h.38l.49.12a.28.28,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.23l-.2,0-.14.29-.08.26.34-.08h.28l.49.11a.29.29,0,0,1,.14.08l.3.31a.42.42,0,0,1,.09.14l.11.59-.11.57a.34.34,0,0,1-.13.2l-.31.2-.44.22A.23.23,0,0,1,70.43,67.52ZM70,66.74l.38.16.5-.28.08-.39-.08-.29-.19-.19-.32-.09h-.13l-.22.06-.27.48.14.42Z" />
                                            <path
                                                d="M72.27,67.52a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,72.27,67.52Z" />
                                            <path
                                                d="M73.81,67.52a.31.31,0,0,1-.31-.31V65.78l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.28.28,0,0,1,.12.18l.11.41v1.51A.31.31,0,0,1,73.81,67.52Z" />
                                            <path
                                                d="M75.34,67.52a.3.3,0,0,1-.3-.31V65.78L75,65.56l-.14-.09h-.22l-.23.15L74,66a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.4a.25.25,0,0,1,.17,0l.31.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,75.34,67.52Z" />
                                            <path
                                                d="M78.31,67.52H76.37a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34L77.9,65V64.8l0-.14-.31-.11h-.42l-.24.11-.11.18V65a.31.31,0,0,1-.62,0v-.21a.34.34,0,0,1,0-.17l.35-.45a.32.32,0,0,1,.12-.08L77,64l.09,0h.52l.09,0,.55.22a.31.31,0,0,1,.16.18l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M263.06,348a.28.28,0,0,1-.13,0,.3.3,0,0,1-.15-.41l1.22-2.52h-1.55a.31.31,0,1,1,0-.62h2a.31.31,0,0,1,.28.44l-1.43,3A.32.32,0,0,1,263.06,348Z" />
                                            <path
                                                d="M266.13,348l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.51a.36.36,0,0,1,0-.11l-.1-.61V346l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.36.36,0,0,1,.18-.12l.41-.1h.38l.48.11a.3.3,0,0,1,.17.12l.31.41a.35.35,0,0,1,.06.14l.1.71v.56l-.1.66a.36.36,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.67.28.07h.24l.21-.06.21-.36.09-.55V346l-.09-.6-.19-.26-.31-.07h-.19l-.27.07-.19.26-.09.64v.47l.09.5Z" />
                                            <path
                                                d="M268.28,348a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.62,0v1.95A.3.3,0,0,1,268.28,348Z" />
                                            <path
                                                d="M269.81,348a.29.29,0,0,1-.3-.3v-1.44l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,269.81,348Z" />
                                            <path
                                                d="M271.35,348a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1H271l.3.1a.35.35,0,0,1,.21.22l.1.41v1.51A.3.3,0,0,1,271.35,348Z" />
                                            <path
                                                d="M274.42,348h-2.05a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l-.05-.09-.23-.18h-.49l-.14,0,0,.09-.06.08-.12.12v.07a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.3-.1.1,0h.61a.32.32,0,0,1,.14,0l.21.11.08.05.2.21.06.08.1.2a.35.35,0,0,1,0,.14v.31a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,274.42,348Z" />
                                            <path
                                                d="M246.48,355.23a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.56a.31.31,0,0,1,0-.61h2a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,246.48,355.23Z" />
                                            <path
                                                d="M249.55,355.23l-.49-.11a.31.31,0,0,1-.18-.14l-.31-.51a.49.49,0,0,1,0-.11l-.1-.62v-.56l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.45.45,0,0,1,.17-.11l.41-.1h.39l.48.11a.34.34,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.55l-.1.67a.49.49,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.28.07h.24l.2-.06.22-.36.09-.56v-.46l-.09-.59-.2-.26-.3-.08h-.19l-.27.07-.19.26-.1.64v.46l.09.51Z" />
                                            <path
                                                d="M251.7,355.23a.31.31,0,0,1-.31-.31V353a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,251.7,355.23Z" />
                                            <path
                                                d="M253.23,355.23a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,1,1-.44-.44l.41-.41a.29.29,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,253.23,355.23Z" />
                                            <path
                                                d="M254.77,355.23a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0H254l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,254.77,355.23Z" />
                                            <path
                                                d="M257.84,355.23h-2a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.18l-.05-.1-.23-.18h-.49l-.14.05-.05.09a.22.22,0,0,1-.05.08l-.12.11v.08a.31.31,0,1,1-.61,0v-.2a.29.29,0,0,1,.09-.22l.17-.17.08-.16a.28.28,0,0,1,.17-.15l.31-.11h.71a.32.32,0,0,1,.14,0l.21.1.07.06.21.2.06.08.1.21a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,257.84,355.23Z" />
                                            <path
                                                d="M250,315.67a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41L251,312.7H249.4a.31.31,0,1,1,0-.61h2a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.32.32,0,0,1,250,315.67Z" />
                                            <path
                                                d="M253.08,315.67l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.51a.49.49,0,0,1,0-.11l-.1-.61v-.57l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.41-.1h.38l.48.11a.34.34,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.56l-.1.66a.49.49,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.28.08h.24l.21-.06.21-.36.09-.56v-.46l-.09-.59-.19-.26-.31-.08h-.19l-.27.07-.19.26-.09.64v.47l.09.5Z" />
                                            <path
                                                d="M255.23,315.67a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,255.23,315.67Z" />
                                            <path
                                                d="M256.76,315.67a.3.3,0,0,1-.3-.31v-1.43l0-.17-.1,0H256l-.2.06-.35.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.4l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,256.76,315.67Z" />
                                            <path
                                                d="M258.3,315.67a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.22l.1.41v1.5A.31.31,0,0,1,258.3,315.67Z" />
                                            <path
                                                d="M261.37,315.67h-2.05a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22V313l-.05-.1-.23-.18h-.49l-.14.05,0,.09-.06.08-.12.11v.08a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.27.27,0,0,1,.18-.15l.3-.11h.71a.32.32,0,0,1,.14,0l.21.1.08.06.2.2.06.08.1.21a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,261.37,315.67Z" />
                                            <path
                                                d="M213.26,367.77a.3.3,0,0,1-.27-.44l1.22-2.53h-1.56a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2a.31.31,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.31.31,0,0,1,213.26,367.77Z" />
                                            <path
                                                d="M216.34,367.77l-.49-.11a.3.3,0,0,1-.19-.14l-.3-.52a.18.18,0,0,1,0-.1l-.11-.62v-.56l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.49.11a.27.27,0,0,1,.17.11l.3.41a.2.2,0,0,1,.06.14l.11.72v.55l-.11.67a.25.25,0,0,1,0,.11l-.3.51a.33.33,0,0,1-.19.14l-.41.1Zm-.22-.68.29.07h.23l.21,0,.22-.36.09-.56v-.46l-.08-.59-.2-.26-.3-.08h-.19l-.27.07-.2.26-.09.63v.47l.09.51Z" />
                                            <path
                                                d="M218.48,367.77a.31.31,0,0,1-.3-.31v-1.94a.31.31,0,1,1,.61,0v1.94A.31.31,0,0,1,218.48,367.77Z" />
                                            <path
                                                d="M220,367.77a.31.31,0,0,1-.31-.31V366l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.1a.2.2,0,0,1,.1,0h.41a.18.18,0,0,1,.1,0l.3.1a.32.32,0,0,1,.21.21l.1.41v1.51A.31.31,0,0,1,220,367.77Z" />
                                            <path
                                                d="M221.56,367.77a.31.31,0,0,1-.31-.31V366l-.05-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.16.16,0,0,1,.1,0h.41a.15.15,0,0,1,.09,0l.31.1a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,221.56,367.77Z" />
                                            <path
                                                d="M224.63,367.77h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.06-.34l1.43-1.43.25-.33.07-.22v-.18l0-.1-.23-.18h-.49l-.14.05-.05.09a.21.21,0,0,1-.06.08l-.11.11v.08a.31.31,0,0,1-.62,0V365a.33.33,0,0,1,.09-.21l.17-.17.08-.16a.35.35,0,0,1,.18-.16l.31-.1h.71a.35.35,0,0,1,.14,0l.2.1.08.06.21.2a.35.35,0,0,1,.05.08l.11.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M197.06,374.76a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.22-2.53h-1.55a.31.31,0,1,1,0-.62h2a.31.31,0,0,1,.28.44l-1.43,3A.33.33,0,0,1,197.06,374.76Z" />
                                            <path
                                                d="M200.13,374.76l-.48-.12a.27.27,0,0,1-.19-.14l-.31-.51a.42.42,0,0,1,0-.1l-.1-.62v-.56l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.41-.11h.38l.48.12a.25.25,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.55l-.1.67a.42.42,0,0,1,0,.1l-.31.52a.29.29,0,0,1-.19.13l-.41.11Zm-.21-.68.28.07h.24l.21-.06.21-.35.09-.56v-.46l-.09-.6-.19-.25-.31-.08h-.19l-.27.07-.19.25-.09.64v.47l.09.51Z" />
                                            <path
                                                d="M202.28,374.76a.31.31,0,0,1-.31-.31V372.5a.31.31,0,0,1,.62,0v1.95A.31.31,0,0,1,202.28,374.76Z" />
                                            <path
                                                d="M203.81,374.76a.3.3,0,0,1-.3-.31V373l0-.17-.1,0h-.31l-.2.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,203.81,374.76Z" />
                                            <path
                                                d="M205.35,374.76a.31.31,0,0,1-.31-.31V373l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11H205l.3.11a.32.32,0,0,1,.21.21l.1.41v1.51A.31.31,0,0,1,205.35,374.76Z" />
                                            <path
                                                d="M208.42,374.76h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.18l0-.1-.23-.18h-.49l-.14,0,0,.1-.06.08-.12.11v.08a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3V372a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.29.29,0,0,1,.18-.16l.3-.1.1,0h.61a.23.23,0,0,1,.14,0l.21.1a.21.21,0,0,1,.08.06l.2.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.11.3a.25.25,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M229.44,361.93a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.52h-1.56a.31.31,0,0,1,0-.62h2.05a.31.31,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.44,3A.29.29,0,0,1,229.44,361.93Z" />
                                            <path
                                                d="M232.51,361.93l-.49-.11a.33.33,0,0,1-.19-.14l-.3-.51a.21.21,0,0,1,0-.11l-.1-.61v-.56l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.17.12l.31.41a.24.24,0,0,1,.05.14l.11.71v.56l-.11.66a.21.21,0,0,1,0,.11l-.3.51a.33.33,0,0,1-.19.14l-.41.1Zm-.21-.67.28.07h.23l.21-.06.22-.36.09-.55v-.46l-.09-.6L233,359l-.3-.07h-.19l-.27.07-.2.26-.09.64v.47l.08.5Z" />
                                            <path
                                                d="M234.66,361.93a.3.3,0,0,1-.31-.3v-1.95a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.95A.29.29,0,0,1,234.66,361.93Z" />
                                            <path
                                                d="M236.19,361.93a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,236.19,361.93Z" />
                                            <path
                                                d="M237.73,361.93a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0H237l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.31.31,0,0,1,.2.22l.1.41v1.51A.29.29,0,0,1,237.73,361.93Z" />
                                            <path
                                                d="M240.8,361.93h-2.05a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33L240,360l.24-.34.08-.21v-.19l0-.09L240,359h-.49l-.14,0,0,.09a.16.16,0,0,1-.06.08l-.11.12v.08a.31.31,0,0,1-.31.3.3.3,0,0,1-.3-.3v-.21a.31.31,0,0,1,.09-.22l.17-.17.07-.16a.38.38,0,0,1,.18-.15l.31-.1.1,0h.61a.32.32,0,0,1,.14,0l.2.11.08.05.21.21a.22.22,0,0,1,0,.08l.11.2a.35.35,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,240.8,361.93Z" />
                                            <path
                                                d="M180,380.92a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.22-2.53h-1.56a.31.31,0,0,1,0-.61h2a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.32.32,0,0,1,180,380.92Z" />
                                            <path
                                                d="M183,380.92l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.51a.49.49,0,0,1,0-.11l-.1-.61v-.57l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.4-.1h.39l.48.11a.34.34,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.56l-.1.66a.49.49,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.28.08h.24l.21-.06.21-.36.09-.56v-.46l-.09-.59-.19-.26-.31-.08h-.19l-.27.07-.19.26-.1.64v.47l.09.5Z" />
                                            <path
                                                d="M185.17,380.92a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,185.17,380.92Z" />
                                            <path
                                                d="M186.7,380.92a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.35.36A.31.31,0,0,1,185,379l.41-.41a.29.29,0,0,1,.12-.07l.31-.1.1,0h.4l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,186.7,380.92Z" />
                                            <path
                                                d="M188.24,380.92a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,188.24,380.92Z" />
                                            <path
                                                d="M191.31,380.92h-2.05a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.18l-.05-.1-.23-.18H190l-.14.05,0,.09a.22.22,0,0,1-.05.08l-.12.11v.08a.31.31,0,1,1-.61,0v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.27.27,0,0,1,.18-.15l.3-.11h.71a.32.32,0,0,1,.14,0l.21.1.08.06.2.2.06.08.1.21a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,191.31,380.92Z" />
                                            <path
                                                d="M163,387.78a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.22-2.53H162.4a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.33.33,0,0,1,163,387.78Z" />
                                            <path
                                                d="M166.08,387.78l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.52a.3.3,0,0,1,0-.1l-.1-.62v-.56l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.41-.11h.38l.48.11a.25.25,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.55l-.1.67a.42.42,0,0,1,0,.1l-.31.52a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.28.07h.24l.21-.05.21-.36.09-.56v-.46l-.09-.59-.19-.26-.31-.08h-.19l-.27.07-.19.26-.09.63v.47l.09.51Z" />
                                            <path
                                                d="M168.23,387.78a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,168.23,387.78Z" />
                                            <path
                                                d="M169.76,387.78a.3.3,0,0,1-.3-.31V386l-.05-.17-.1,0H169l-.2.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,169.76,387.78Z" />
                                            <path
                                                d="M171.3,387.78a.31.31,0,0,1-.31-.31V386l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11H171l.3.11a.32.32,0,0,1,.21.21l.1.41v1.51A.31.31,0,0,1,171.3,387.78Z" />
                                            <path
                                                d="M174.37,387.78h-2.05a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.18l-.05-.1-.23-.18h-.49l-.14.05,0,.09-.06.08-.12.11v.08a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31V385a.29.29,0,0,1,.09-.21l.17-.17.08-.16a.32.32,0,0,1,.18-.16l.3-.1h.71a.32.32,0,0,1,.14,0l.21.1.08.06.2.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.31a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M146.43,393.92a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.56a.3.3,0,0,1-.3-.31.29.29,0,0,1,.3-.3h2.05a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,146.43,393.92Z" />
                                            <path
                                                d="M149.5,393.92l-.49-.11a.31.31,0,0,1-.18-.14l-.31-.51a.49.49,0,0,1,0-.11l-.1-.62v-.56l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.45.45,0,0,1,.17-.11l.41-.1h.39l.48.11a.34.34,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.55l-.1.67a.49.49,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.28.07h.24l.2-.06.22-.36.09-.56v-.46l-.09-.59L150,391l-.3-.08h-.19l-.27.07-.19.26-.1.64v.46l.09.51Z" />
                                            <path
                                                d="M151.65,393.92a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,151.65,393.92Z" />
                                            <path
                                                d="M153.18,393.92a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.35.36a.31.31,0,0,1-.44-.44l.41-.41a.29.29,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.4v1.51A.31.31,0,0,1,153.18,393.92Z" />
                                            <path
                                                d="M154.72,393.92a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0H154l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,154.72,393.92Z" />
                                            <path
                                                d="M157.79,393.92h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34L157,392l.25-.33.07-.22v-.18l-.05-.1L157,391h-.49l-.14.05-.05.09a.35.35,0,0,1,0,.08l-.12.11v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.29.29,0,0,1,.09-.22l.17-.17.08-.16a.28.28,0,0,1,.17-.15l.31-.11h.71a.32.32,0,0,1,.14,0l.21.1.07.06.21.2.06.08.1.21a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,157.79,393.92Z" />
                                            <path
                                                d="M216.59,329.33a.31.31,0,0,1-.13,0,.3.3,0,0,1-.15-.41l1.22-2.52H216a.31.31,0,0,1,0-.62h2a.3.3,0,0,1,.26.15.28.28,0,0,1,0,.29l-1.43,3A.32.32,0,0,1,216.59,329.33Z" />
                                            <path
                                                d="M219.66,329.33l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.51a.36.36,0,0,1,0-.11l-.1-.61v-.56l.1-.76a.35.35,0,0,1,.06-.14L219,326a.3.3,0,0,1,.17-.12l.41-.1H220l.48.11a.3.3,0,0,1,.17.12l.31.41a.35.35,0,0,1,.06.14l.1.71v.56l-.1.66a.36.36,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.11Zm-.21-.67.29.07H220l.21-.06.21-.35.09-.56v-.46l-.09-.6-.19-.26-.31-.07h-.18l-.28.07-.19.26-.09.64v.47l.09.5Z" />
                                            <path
                                                d="M221.81,329.33a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.62,0V329A.3.3,0,0,1,221.81,329.33Z" />
                                            <path
                                                d="M223.35,329.33a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43L222,327a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.31.31,0,0,1,.2.22l.1.41V329A.29.29,0,0,1,223.35,329.33Z" />
                                            <path
                                                d="M224.88,329.33a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41V329A.3.3,0,0,1,224.88,329.33Z" />
                                            <path
                                                d="M228,329.33h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l-.05-.09-.23-.18h-.49l-.14,0,0,.09-.06.08-.12.12v.08a.3.3,0,0,1-.3.3.31.31,0,0,1-.31-.3v-.21a.31.31,0,0,1,.09-.22l.17-.17L226,326a.34.34,0,0,1,.18-.15l.3-.1.1,0h.62a.31.31,0,0,1,.13,0l.21.11.08.05.2.21a.24.24,0,0,1,.06.08l.1.2a.35.35,0,0,1,0,.14v.31a.28.28,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.31.41-.94.94H228a.31.31,0,0,1,.31.31A.3.3,0,0,1,228,329.33Z" />
                                            <path
                                                d="M233.84,322a.24.24,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.52h-1.56a.31.31,0,0,1,0-.62h2.05a.31.31,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.44,3A.29.29,0,0,1,233.84,322Z" />
                                            <path
                                                d="M236.91,322l-.49-.11a.28.28,0,0,1-.18-.14l-.31-.51a.36.36,0,0,1,0-.11l-.1-.61v-.56l.11-.76A.35.35,0,0,1,236,319l.3-.41a.38.38,0,0,1,.17-.12l.41-.1h.39l.48.11a.3.3,0,0,1,.17.12l.31.41a.35.35,0,0,1,.06.14l.1.71v.56l-.11.66a.21.21,0,0,1,0,.11l-.3.51a.3.3,0,0,1-.19.14l-.41.11Zm-.21-.67.28.07h.24l.2-.06.22-.35.09-.56v-.46l-.09-.6-.2-.26-.3-.07H237l-.27.06-.2.26-.09.64v.47l.08.5Z" />
                                            <path
                                                d="M239.06,322a.3.3,0,0,1-.31-.3v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.29.29,0,0,1,239.06,322Z" />
                                            <path
                                                d="M240.59,322a.29.29,0,0,1-.3-.3v-1.44l0-.16-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,240.59,322Z" />
                                            <path
                                                d="M242.13,322a.3.3,0,0,1-.31-.3v-1.44l0-.16-.1,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.3.3,0,0,1,242.13,322Z" />
                                            <path
                                                d="M245.2,322h-2a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.21v-.19l-.05-.09-.23-.18h-.49l-.14,0-.05.09a.22.22,0,0,1,0,.08l-.12.12v.08a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.21A.31.31,0,0,1,243,319l.17-.17.08-.15a.3.3,0,0,1,.17-.16l.31-.1.1,0h.61a.23.23,0,0,1,.14,0l.2.1a.16.16,0,0,1,.08.06l.21.2.06.08.1.2a.35.35,0,0,1,0,.14v.31a.38.38,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,245.2,322Z" />
                                            <path
                                                d="M182.66,340.13a.31.31,0,0,1-.28-.44l1.22-2.53h-1.55a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h2a.29.29,0,0,1,.26.14.3.3,0,0,1,0,.3l-1.43,3A.31.31,0,0,1,182.66,340.13Z" />
                                            <path
                                                d="M185.73,340.13l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.51a.36.36,0,0,1,0-.11l-.1-.61v-.56l.1-.76a.3.3,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1H186l.48.11a.3.3,0,0,1,.17.12l.31.4a.39.39,0,0,1,.06.15l.1.71v.56l-.1.66a.36.36,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.67.29.07H186l.21-.06.21-.36.09-.55v-.46l-.09-.6-.19-.26-.31-.07h-.18l-.28.07-.19.26-.09.64v.47l.09.5Z" />
                                            <path
                                                d="M187.88,340.13a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.62,0v1.95A.3.3,0,0,1,187.88,340.13Z" />
                                            <path
                                                d="M189.42,340.13a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0H189l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.51A.29.29,0,0,1,189.42,340.13Z" />
                                            <path
                                                d="M191,340.13a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,191,340.13Z" />
                                            <path
                                                d="M194,340.13h-2a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l0-.09-.23-.19h-.49l-.14,0,0,.09-.06.08-.12.12v.07a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,.09-.22L192,337l.08-.16a.3.3,0,0,1,.18-.15l.3-.1.1,0h.62a.31.31,0,0,1,.13,0l.21.11.08.05.2.21a.24.24,0,0,1,.06.08l.1.2a.32.32,0,0,1,0,.14v.31a.28.28,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.94.94H194a.31.31,0,0,1,.31.31A.3.3,0,0,1,194,340.13Z" />
                                            <path
                                                d="M149.6,353.54a.31.31,0,0,1-.28-.44l1.22-2.53H149a.31.31,0,1,1,0-.61h2a.29.29,0,0,1,.26.14.29.29,0,0,1,0,.3l-1.43,3A.32.32,0,0,1,149.6,353.54Z" />
                                            <path
                                                d="M152.67,353.54l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.51a.49.49,0,0,1,0-.11l-.1-.61v-.57l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1H153l.48.11a.34.34,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72V352l-.1.66a.49.49,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.29.08H153l.21-.06.21-.36.09-.55v-.47l-.09-.59-.19-.26-.31-.08h-.18l-.28.07-.19.26-.09.64V352l.09.5Z" />
                                            <path
                                                d="M154.82,353.54a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,154.82,353.54Z" />
                                            <path
                                                d="M156.36,353.54a.31.31,0,0,1-.31-.31V351.8l-.05-.17-.1,0h-.31l-.19.06L155,352a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0H156l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,156.36,353.54Z" />
                                            <path
                                                d="M157.89,353.54a.31.31,0,0,1-.31-.31V351.8l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,157.89,353.54Z" />
                                            <path
                                                d="M161,353.54h-2.05a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.18l0-.1-.23-.18h-.49l-.14.05,0,.09-.06.08-.12.11V351a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.3-.11h.72a.31.31,0,0,1,.13,0l.21.1.08.06.2.21s0,.05.06.07l.1.21a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.31.4-.94.95H161a.3.3,0,0,1,.31.3A.31.31,0,0,1,161,353.54Z" />
                                            <path
                                                d="M167.51,348.12a.3.3,0,0,1-.27-.44l1.22-2.53H166.9a.31.31,0,0,1,0-.62h2a.32.32,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.43,3A.31.31,0,0,1,167.51,348.12Z" />
                                            <path
                                                d="M170.58,348.12l-.48-.12a.27.27,0,0,1-.19-.14l-.31-.51a.42.42,0,0,1,0-.1l-.1-.62v-.56l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.29.29,0,0,1,.18.11l.3.41a.35.35,0,0,1,.06.14l.1.72v.55l-.11.67a.42.42,0,0,1,0,.1l-.31.52a.29.29,0,0,1-.19.13l-.41.11Zm-.21-.68.29.07h.23l.21-.06.21-.35.1-.56v-.46l-.09-.59-.19-.26-.3-.08h-.19l-.28.07-.19.25-.09.64v.47l.09.51Z" />
                                            <path
                                                d="M172.73,348.12a.3.3,0,0,1-.3-.31v-1.95a.3.3,0,0,1,.3-.3.31.31,0,0,1,.31.3v1.95A.31.31,0,0,1,172.73,348.12Z" />
                                            <path
                                                d="M174.27,348.12a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11H174l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,174.27,348.12Z" />
                                            <path
                                                d="M175.8,348.12a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0H175l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,175.8,348.12Z" />
                                            <path
                                                d="M178.87,348.12h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.18l-.05-.1-.23-.18h-.49l-.14,0,0,.1-.06.08-.11.11v.08a.31.31,0,0,1-.62,0v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.31.31,0,0,1,.18-.16l.31-.1.09,0h.62a.33.33,0,0,1,.13,0l.21.1a.16.16,0,0,1,.08.06l.2.2a.16.16,0,0,1,.06.08l.1.21a.22.22,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.3a.26.26,0,0,1-.05.09l-.3.41-.94.94h1.3a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M201.39,336.45a.31.31,0,0,1-.13,0,.32.32,0,0,1-.15-.41l1.23-2.53h-1.56a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2a.29.29,0,0,1,.26.14.29.29,0,0,1,0,.3l-1.43,3A.31.31,0,0,1,201.39,336.45Z" />
                                            <path
                                                d="M204.46,336.45l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.52a.3.3,0,0,1,0-.1l-.1-.62v-.56l.1-.76a.35.35,0,0,1,.06-.14l.31-.41A.25.25,0,0,1,204,333l.41-.1h.38l.48.11a.25.25,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.55l-.1.67a.49.49,0,0,1,0,.11l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.29.07h.23l.21-.05.21-.36.1-.56v-.46l-.09-.59-.19-.26-.31-.08h-.18l-.28.07-.19.26-.09.63v.47l.09.51Z" />
                                            <path
                                                d="M206.61,336.45a.31.31,0,0,1-.31-.31V334.2a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,206.61,336.45Z" />
                                            <path
                                                d="M208.15,336.45a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.36a.33.33,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.18.18,0,0,1,.1,0h.41a.15.15,0,0,1,.09,0l.31.1a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,208.15,336.45Z" />
                                            <path
                                                d="M209.68,336.45a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.32.32,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.41a.16.16,0,0,1,.1,0l.31.1a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,209.68,336.45Z" />
                                            <path
                                                d="M212.75,336.45h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.18l-.05-.1-.23-.18h-.49l-.14,0,0,.09-.06.08-.12.11v.08a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.29.29,0,0,1,.09-.21l.17-.17.08-.16A.35.35,0,0,1,211,333l.31-.1H212a.31.31,0,0,1,.13,0l.21.1.08.06.2.2a.21.21,0,0,1,.06.08l.1.21a.31.31,0,0,1,0,.13V334a.34.34,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.93.94h1.3a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M133.84,363.83a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.22-2.53h-1.55a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.33.33,0,0,1,133.84,363.83Z" />
                                            <path
                                                d="M136.91,363.83l-.48-.11a.3.3,0,0,1-.19-.14l-.31-.52a.42.42,0,0,1,0-.1l-.1-.62v-.56l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.41-.11h.38l.48.11a.25.25,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72v.55l-.1.67a.42.42,0,0,1,0,.1l-.31.52a.3.3,0,0,1-.19.14l-.41.1Zm-.21-.68.28.07h.24l.21,0,.21-.36.09-.56v-.46l-.09-.59-.19-.26-.31-.08H137l-.27.07-.19.26-.1.63v.47l.09.51Z" />
                                            <path
                                                d="M139.06,363.83a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,139.06,363.83Z" />
                                            <path
                                                d="M140.59,363.83a.3.3,0,0,1-.3-.31v-1.43l0-.17-.1,0h-.32l-.19.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,140.59,363.83Z" />
                                            <path
                                                d="M142.13,363.83a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.32.32,0,0,1,.21.21l.1.41v1.51A.31.31,0,0,1,142.13,363.83Z" />
                                            <path
                                                d="M145.2,363.83h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.18l-.05-.1-.23-.18h-.49l-.14.05,0,.09-.06.08-.12.11v.08a.31.31,0,1,1-.61,0v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.29.29,0,0,1,.18-.16l.3-.1h.71a.32.32,0,0,1,.14,0l.21.1a.21.21,0,0,1,.08.06l.2.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.11.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M230.61,256.36l-.48-.11a.34.34,0,0,1-.18-.13l-.21-.31-.23-.56h0a.25.25,0,0,1,0-.12v-.71l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.13,0h.31a.37.37,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.21.34.22a.39.39,0,0,1,.13.2l.1.67-.11.49a.29.29,0,0,1-.08.14l-.31.3a.28.28,0,0,1-.14.09l-.41.1Zm-.22-.68.3.07h.13l.25-.07.19-.19.08-.32-.08-.36-.2-.13-.37-.16-.3.15-.13.13-.13.34.15.4Z" />
                                            <path
                                                d="M233.48,256.36l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.26.26,0,0,1-.09-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.31a.33.33,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.13.42.32.32,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.17a.32.32,0,0,1,.14,0h.1l.12,0,.51.21a.33.33,0,0,1,.1.06l.21.21a.22.22,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.18.13l-.41.1Zm-.25-.69.32.08h.13l.22-.06.14-.21.16-.37-.15-.3-.13-.13-.38-.15-.5.28-.07.34.07.35Z" />
                                            <path
                                                d="M235.53,256.36a.31.31,0,0,1-.31-.29l-.1-1.95a.31.31,0,1,1,.61,0l.1,1.94a.31.31,0,0,1-.29.33Z" />
                                            <path
                                                d="M237.06,256.36a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.14.07-.45.38a.33.33,0,0,1-.44-.05.31.31,0,0,1,0-.43l.51-.41.26-.14a.35.35,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,237.06,256.36Z" />
                                            <path
                                                d="M238.6,256.36a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,238.6,256.36Z" />
                                            <path
                                                d="M241.57,256.36h-1.95a.32.32,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.33-1.43.43-.62-.22-.35-.14-.05h-.41l-.19.06-.11.1-.06.25a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.2-.2a.42.42,0,0,1,.12-.08l.31-.1.1,0h.51l.1,0,.3.1a.31.31,0,0,1,.18.16l.1.2.19.28a.34.34,0,0,1,.05.17v.2a.34.34,0,0,1-.05.17l-.52.73-.88.94h1.25a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M228.57,238.65l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.28.28,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l0-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.22.44a.23.23,0,0,1,0,.14v.2a.23.23,0,0,1,0,.14l-.2.41-.22.34a.3.3,0,0,1-.2.13Zm-.26-.69.33.09L229,238l.14-.21.15-.37-.28-.51-.39-.08-.29.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M231.43,238.65l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.08-.12l-.2-.61h0a.29.29,0,0,1,0-.09v-.71a.24.24,0,0,1,0-.08l.2-.72a.47.47,0,0,1,.05-.1l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.15-.24-.06h-.24l-.22.06L231,236l-.09.29h0l.58-.12.49.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.4v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.27-.08.19-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08-.28.08-.21.21-.13.25.14.43Z" />
                                            <path
                                                d="M233.38,238.65a.31.31,0,0,1-.31-.31V236.4a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,233.38,238.65Z" />
                                            <path
                                                d="M234.91,238.65a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,234.91,238.65Z" />
                                            <path
                                                d="M236.55,238.65a.31.31,0,0,1-.31-.31V237l-.11-.23-.14,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0H236l.1,0,.3.1a.3.3,0,0,1,.18.15l.2.41a.25.25,0,0,1,0,.14v1.43A.31.31,0,0,1,236.55,238.65Z" />
                                            <path
                                                d="M239.52,238.65h-2.05a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.25-.33.07-.22V236l0-.1-.23-.18h-.49l-.14,0L238,236v.13a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.32.32,0,0,1,0-.14l.21-.41a.28.28,0,0,1,.17-.15l.31-.11h.71a.32.32,0,0,1,.14,0l.2.1.08.06.21.2.06.08.1.21a.32.32,0,0,1,0,.14v.3a.16.16,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,239.52,238.65Z" />
                                            <path
                                                d="M226.62,220.94h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.33.33,0,0,1-.12-.16l-.2-.61h0a.19.19,0,0,1,0-.08v-.71s0-.06,0-.09l.21-.71a.22.22,0,0,1,.05-.11l.3-.4a.36.36,0,0,1,.18-.12l.4-.1h.28l.58.11a.33.33,0,0,1,.23.2l.1.31a.31.31,0,1,1-.58.19L227,218l-.34-.07h-.14l-.23.07-.21.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.37.37,0,0,1,.08.14l.11.58-.11.58a.29.29,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,226.62,220.94Zm-.56-.91.22.15.29.14.49-.28.08-.39-.08-.29-.19-.19-.32-.08-.28.08-.21.21-.13.26Z" />
                                            <path
                                                d="M229.49,220.94h-.21a.31.31,0,0,1-.13,0l-.41-.2-.34-.23a.35.35,0,0,1-.14-.2l-.1-.61v-.77l.1-.76a.3.3,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.36.36,0,0,1,.19.13l.2.31a.31.31,0,0,1-.51.34l-.14-.21-.29-.07h-.24l-.22.07-.2.26,0,.29.39-.09h.28l.48.11a.25.25,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.11.58-.1.58a.3.3,0,0,1-.14.19l-.3.21-.45.22A.28.28,0,0,1,229.49,220.94Zm-.14-.61h.07l.51-.29.08-.39-.08-.29-.19-.19-.33-.08h-.13l-.25.07-.19.19-.06.27.07.41.19.14Z" />
                                            <path
                                                d="M231.33,220.94a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,231.33,220.94Z" />
                                            <path
                                                d="M232.87,220.94a.3.3,0,0,1-.31-.3V219.2l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.21a.27.27,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,232.87,220.94Z" />
                                            <path
                                                d="M234.4,220.94a.3.3,0,0,1-.31-.3V219.2L234,219l-.13-.09h-.23l-.22.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05H234a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,234.4,220.94Z" />
                                            <path
                                                d="M237.37,220.94h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l-.05-.14-.31-.12h-.41l-.24.12-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.46a.24.24,0,0,1,.12-.07l.3-.1.1,0h.51l.1,0,.55.22a.32.32,0,0,1,.16.18l.1.3a.34.34,0,0,1,0,.1v.31a.28.28,0,0,1,0,.09l-.1.31-.05.09-.31.41-.94.94h1.21a.31.31,0,0,1,.31.31A.3.3,0,0,1,237.37,220.94Z" />
                                            <path
                                                d="M163.16,238.65a.3.3,0,0,1-.3-.31v-2.26l-.24.16a.3.3,0,0,1-.43-.08.32.32,0,0,1,.09-.43l.3-.2.37-.37a.29.29,0,0,1,.33-.07.3.3,0,0,1,.19.28v3A.31.31,0,0,1,163.16,238.65Z" />
                                            <path
                                                d="M166.23,238.65a.3.3,0,0,1-.3-.31v-.71H164.8a.31.31,0,0,1-.27-.17.29.29,0,0,1,0-.32l1.44-1.95a.31.31,0,0,1,.34-.11.3.3,0,0,1,.21.29V237H167a.31.31,0,0,1,0,.62h-.41v.71A.31.31,0,0,1,166.23,238.65Zm-.82-1.64h.52v-.7Z" />
                                            <path
                                                d="M169.1,238.65a.31.31,0,0,1-.31-.31v-.71h-1.12a.32.32,0,0,1-.28-.17.31.31,0,0,1,0-.32l1.43-1.95a.33.33,0,0,1,.35-.11.31.31,0,0,1,.21.29V237h.41a.31.31,0,0,1,0,.62h-.41v.71A.31.31,0,0,1,169.1,238.65Zm-.83-1.64h.52v-.7Z" />
                                            <path
                                                d="M170.63,238.65a.31.31,0,0,1-.3-.31V236.4a.31.31,0,1,1,.61,0v1.94A.31.31,0,0,1,170.63,238.65Z" />
                                            <path
                                                d="M172.17,238.65a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.22l.1.41v1.5A.31.31,0,0,1,172.17,238.65Z" />
                                            <path
                                                d="M173.81,238.65a.31.31,0,0,1-.31-.31V237l-.17-.27H173l-.14.07-.46.37a.31.31,0,0,1-.43-.05.3.3,0,0,1,0-.43l.51-.41.26-.14a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,173.81,238.65Z" />
                                            <path
                                                d="M176.78,238.65h-2.05a.28.28,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.43-1.44.25-.33.07-.22V236l-.11-.23-.14,0h-.51l-.14,0-.12.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.32.32,0,0,1,0-.14l.2-.41a.3.3,0,0,1,.18-.15l.31-.11h.81l.3.11a.3.3,0,0,1,.18.15l.21.41a.32.32,0,0,1,0,.14v.3a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41-.94.95h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,176.78,238.65Z" />
                                            <path
                                                d="M224.27,203.13l-.49-.11a.32.32,0,0,1-.18-.13l-.2-.3-.23-.56a.31.31,0,0,1,0-.13v-.71l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.13h-.16l-.28.14-.22.28,0,.3.39-.1.15-.08a.32.32,0,0,1,.27,0l.41.2.08.06.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.27.27,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.23-.68.3.08h.13l.25-.07.19-.19.08-.33-.08-.27-.21-.22-.23-.11-.06,0-.39.1-.19.19-.06.23.17.42Z" />
                                            <path
                                                d="M227.13,203.13l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.08-.15L226,202a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.27.27,0,0,1,.15.18l.1.3a.31.31,0,0,1-.58.2l-.06-.19-.23-.11h-.16l-.28.14-.22.28,0,.28.33-.16a.31.31,0,0,1,.13,0h.11a.22.22,0,0,1,.11,0l.51.2a.33.33,0,0,1,.14.12l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.28.28,0,0,1,0,.13l-.2.41-.23.34a.3.3,0,0,1-.19.14Zm-.25-.68.33.08.35-.08.14-.2.14-.29-.29-.52-.36-.14-.28.14-.22.21-.06.28.07.33Z" />
                                            <path
                                                d="M229.08,203.13a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,229.08,203.13Z" />
                                            <path
                                                d="M230.72,203.13a.3.3,0,0,1-.31-.3v-1.27l-.18-.37h-.36l-.1.05-.47.47a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.51-.51a.21.21,0,0,1,.08-.06l.21-.1a.33.33,0,0,1,.13,0h.52a.33.33,0,0,1,.13,0l.21.1a.29.29,0,0,1,.15.16l.2.51a.25.25,0,0,1,0,.12v1.33A.29.29,0,0,1,230.72,203.13Z" />
                                            <path
                                                d="M232.25,203.13a.3.3,0,0,1-.31-.3V201.5l-.05-.28-.1,0h-.31l-.17.06-.35.44a.33.33,0,0,1-.44.05.31.31,0,0,1,0-.44l.41-.51a.3.3,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.33.33,0,0,1,.2.23l.1.52v1.39A.3.3,0,0,1,232.25,203.13Z" />
                                            <path
                                                d="M235.22,203.13h-1.95a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.33-1.33.26-.45.16-.17v-.09l-.22-.29-.18-.11H234l-.12.11-.08.06-.09,0,0,.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.29.29,0,0,1,0-.09l.1-.31a.3.3,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.61a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,0,.17v.31a.31.31,0,0,1-.09.22l-.2.2-.26.45-.86.87h1.21a.31.31,0,0,1,.31.31A.3.3,0,0,1,235.22,203.13Z" />
                                            <path
                                                d="M157.33,217a.31.31,0,0,1-.31-.31v-2.27h0l-.31.1a.31.31,0,0,1-.39-.2.3.3,0,0,1,.2-.38l.23-.08.36-.36a.31.31,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.31.31,0,0,1,157.33,217Z" />
                                            <path
                                                d="M160.19,217H160a.35.35,0,0,1-.14,0l-.41-.21-.08-.05-.2-.21a.36.36,0,0,1-.08-.12l-.2-.61h0a.24.24,0,0,1,0-.09v-.71a.31.31,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.2-.16l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.29.29,0,0,1-.42-.08l-.14-.21-.3-.08H160l-.2.06-.14.29-.07.26.34-.09h.27l.49.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.57a.3.3,0,0,1-.13.2l-.31.2-.44.23A.32.32,0,0,1,160.19,217Zm-.13-.61h.06l.51-.29.08-.39-.07-.29-.19-.19-.33-.08H160l-.22.06-.14.21-.13.26.14.43.12.12Z" />
                                            <path
                                                d="M162.86,217h-.31a.32.32,0,0,1-.14,0l-.41-.21a.24.24,0,0,1-.13-.13l-.11-.21a.31.31,0,0,1,.14-.41.3.3,0,0,1,.41.14l.06.11.25.13h.16l.28-.14.22-.29,0-.28-.33.16a.33.33,0,0,1-.13,0h-.11a.33.33,0,0,1-.13,0l-.41-.2-.08-.06-.31-.31-.06-.08-.2-.41a.31.31,0,0,1,0-.13v-.11a.31.31,0,0,1,0-.13l.2-.41.06-.08.31-.31a.29.29,0,0,1,.14-.08l.59-.11.48.11a.29.29,0,0,1,.14.08l.31.31a.31.31,0,0,1,.08.15l.1.51a.49.49,0,0,1,0,.12v.66l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.24.24,0,0,1-.11.09l-.41.21A.31.31,0,0,1,162.86,217Zm-.33-1.89.27.14.28-.14.21-.21.07-.27-.07-.34-.18-.18-.33-.09-.28.08-.21.22-.14.28.14.27Z" />
                                            <path
                                                d="M164.9,217a.3.3,0,0,1-.3-.29l-.11-2a.32.32,0,0,1,.3-.32.3.3,0,0,1,.32.29l.1,2a.3.3,0,0,1-.29.32Z" />
                                            <path
                                                d="M166.44,217a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.11.12-.54.43a.3.3,0,0,1-.43,0,.31.31,0,0,1,.05-.43l.69-.59a.31.31,0,0,1,.22-.09H166a.31.31,0,0,1,.22.09l.2.2.06.08.2.41a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,166.44,217Z" />
                                            <path
                                                d="M168,217a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.35-.24a.34.34,0,0,1,.17-.05h.41a.31.31,0,0,1,.17.05l.31.21a.27.27,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,168,217Z" />
                                            <path
                                                d="M170.94,217H169a.3.3,0,0,1-.28-.18.32.32,0,0,1,.05-.34L170.1,215l.43-.6v-.12l-.15-.23-.2-.07h-.42l-.31.12,0,.19a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.31.31,0,0,1,.15-.17l.21-.11.35-.12h.7l.31.11a.29.29,0,0,1,.12.07l.1.1.25.36a.34.34,0,0,1,.05.17v.3a.37.37,0,0,1-.05.18l-.53.73-.87.94h1.24a.3.3,0,0,1,.31.3A.31.31,0,0,1,170.94,217Z" />
                                            <path
                                                d="M222.22,185.43l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.37.37,0,0,1-.09-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.2a.25.25,0,0,1,.14,0h.31a.25.25,0,0,1,.14,0l.4.2a.32.32,0,0,1,.14.14l.1.2a.3.3,0,1,1-.54.28l-.06-.11-.25-.13h-.17l-.28.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1l.12,0,.51.21a.33.33,0,0,1,.1.06l.21.21a.21.21,0,0,1,.06.1l.21.51a.5.5,0,0,1,0,.12v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.31.31,0,0,1-.2.13Zm-.25-.69.32.08.36-.08.13-.2.15-.3-.15-.38-.12-.12-.38-.15-.5.28-.07.34.08.35Z" />
                                            <path
                                                d="M225.09,185.43l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.24.24,0,0,1-.06-.11l-.21-.51a.23.23,0,0,1,0-.12v-.71a.19.19,0,0,1,0-.08l.2-.72s0-.07.05-.1l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.2a.27.27,0,0,1,.12,0l.51.2a.33.33,0,0,1,.16.15l.1.2a.31.31,0,0,1-.55.28l0-.1-.42-.14-.28.14-.23.3-.08.3.38-.2a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.39.39,0,0,1,.13.2l.1.67-.11.48a.28.28,0,0,1-.08.15l-.3.3a.38.38,0,0,1-.15.09Zm-.26-.69.33.08.28-.08.19-.19.08-.32-.08-.36-.2-.13-.29-.15-.52.3-.12.31.13.34Z" />
                                            <path
                                                d="M227,185.43a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,227,185.43Z" />
                                            <path
                                                d="M228.57,185.43a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,228.57,185.43Z" />
                                            <path
                                                d="M230.2,185.43a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14-.05h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.17.15l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,230.2,185.43Z" />
                                            <path
                                                d="M233.17,185.43h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.31-.06-.2-.22-.16h-.49l-.14,0-.11.37a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.22-.55a.31.31,0,0,1,.18-.16l.3-.1.1,0h.62a.22.22,0,0,1,.13,0l.21.1a.21.21,0,0,1,.08.06l.2.2a.42.42,0,0,1,.08.12l.1.31a.31.31,0,0,1,0,.1v.2a.34.34,0,0,1,0,.1l-.1.3a.19.19,0,0,1,0,.09l-.31.41-.93.94h1.3a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M219.76,164.75l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.42.42,0,0,1-.09-.16l-.1-.61v-.67l.1-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.32.32,0,0,1,.18.13l.2.31a.3.3,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.24l-.2.06-.22.35,0,.3.33-.16a.33.33,0,0,1,.13,0H220a.37.37,0,0,1,.14,0l.41.2.34.23a.29.29,0,0,1,.12.18l.11.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.25-.69.33.09H220l.25-.07.19-.19.08-.33v-.13l-.06-.22-.21-.14-.37-.15-.52.29-.06.24.07.45Z" />
                                            <path
                                                d="M222.63,164.75l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.61a.21.21,0,0,1,0-.11v-.56l.11-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l0-.14-.25-.07h-.23l-.21.06-.21.35,0,.21.55-.11.57.11a.39.39,0,0,1,.2.13l.2.31.23.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.21.41-.22.34a.3.3,0,0,1-.2.13Zm-.25-.69.32.09.36-.08.13-.21.16-.37-.29-.51-.39-.08-.29.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M224.57,164.75a.31.31,0,0,1-.3-.31V162.5a.31.31,0,1,1,.61,0v1.94A.31.31,0,0,1,224.57,164.75Z" />
                                            <path
                                                d="M226.21,164.75a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.29l-.14.07-.45.37a.31.31,0,0,1-.44-.05.31.31,0,0,1,0-.43l.51-.41.26-.14a.35.35,0,0,1,.14,0h.41l.1,0,.3.1a.3.3,0,0,1,.18.15l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,226.21,164.75Z" />
                                            <path
                                                d="M227.75,164.75a.31.31,0,0,1-.31-.31v-1.36l-.17-.27H227l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41.12-.07.31-.1.1,0h.41a.35.35,0,0,1,.14,0l.2.11a.35.35,0,0,1,.14.13l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,227.75,164.75Z" />
                                            <path
                                                d="M230.72,164.75h-1.95a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.25-.34.07-.22v-.18l-.11-.23-.14-.05h-.49l-.1.05-.18.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31V162a.32.32,0,0,1,0-.14l.1-.2.06-.08.2-.21.08-.06.21-.1a.32.32,0,0,1,.14,0h.71l.3.11a.3.3,0,0,1,.18.15l.21.41a.32.32,0,0,1,0,.14v.3a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.88.94h1.25a.29.29,0,0,1,.3.3A.3.3,0,0,1,230.72,164.75Z" />
                                            <path
                                                d="M217.92,148.48l-.57-.11a.34.34,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0a.36.36,0,0,1,0-.1v-.71a.36.36,0,0,1,0-.1l.41-1.14a.32.32,0,0,1,.23-.19l.51-.1h.27l.57.11a.31.31,0,0,1,.23.21l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.14-.33-.07h-.15l-.29.06-.2.54L218,146l.49.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.3a.42.42,0,0,1-.14.09Zm-.33-.69.39.08.29-.08.19-.19.09-.32v-.13l-.07-.25-.19-.19-.33-.08-.35.07-.27.47.15.45Z" />
                                            <path
                                                d="M220.69,148.48l-.49-.11-.14-.08-.31-.31a.38.38,0,0,1-.08-.17l-.11-.61v-.77l.11-.66a.21.21,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.11H221l.49.12a.28.28,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.23l-.21.06-.22.35,0,.21.38-.1h.28l.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.49a.29.29,0,0,1-.08.14l-.3.3a.38.38,0,0,1-.15.09l-.41.1Zm-.26-.69.33.08h.13l.25-.07.19-.19.08-.32v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M222.73,148.48a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,222.73,148.48Z" />
                                            <path
                                                d="M224.27,148.48a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07L223,147a.3.3,0,0,1-.43-.43l.4-.41A.37.37,0,0,1,223,146l.31-.11H224l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,224.27,148.48Z" />
                                            <path
                                                d="M225.8,148.48a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0H225l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,225.8,148.48Z" />
                                            <path
                                                d="M228.77,148.48h-1.94a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.4-1.39.35-.63v-.09l-.11-.11a.21.21,0,0,1-.06-.08l-.05-.09-.14-.05h-.41l-.14.05,0,.09-.06.08-.11.11v.08a.31.31,0,1,1-.62,0v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.31.31,0,0,1,.18-.16l.31-.1.09,0h.51l.1,0,.31.1a.31.31,0,0,1,.18.16l.08.16.17.17a.31.31,0,0,1,.09.21V146a.27.27,0,0,1-.06.17l-.2.31-.19.37a.22.22,0,0,1-.05.08l-.91.91h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M147.09,143.67a.3.3,0,0,1-.3-.31v-2.27h0l-.31.1a.29.29,0,0,1-.38-.19.3.3,0,0,1,.19-.39l.24-.08.36-.36a.31.31,0,0,1,.33-.06.3.3,0,0,1,.19.28v3A.31.31,0,0,1,147.09,143.67Z" />
                                            <path
                                                d="M149.35,143.67a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.56a.31.31,0,0,1,0-.62h2.05a.32.32,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.43,3A.3.3,0,0,1,149.35,143.67Z" />
                                            <path
                                                d="M152.62,143.67l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.42.42,0,0,1-.08-.12l-.2-.62h0s0-.06,0-.09v-.71s0-.06,0-.09l.21-.71a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.28l.57.11a.31.31,0,0,1,.23.21l.1.3a.31.31,0,0,1-.58.2l-.05-.14-.33-.07h-.15l-.23.06-.21.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.42.42,0,0,1-.14.09Zm-.25-.69.32.08L153,143l.19-.19.08-.32v-.13l-.06-.25-.19-.19-.33-.08-.28.07-.21.22-.13.25.14.42Z" />
                                            <path
                                                d="M154.57,143.67a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.3.3.3,0,0,1,.3.3v2A.3.3,0,0,1,154.57,143.67Z" />
                                            <path
                                                d="M156.1,143.67a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.1-.07-.49.15-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.74-.22a.3.3,0,0,1,.24.05l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,156.1,143.67Z" />
                                            <path
                                                d="M157.74,143.67a.31.31,0,0,1-.31-.31V142l-.13-.27-.17-.11h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.3.2a.32.32,0,0,1,.11.12l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,157.74,143.67Z" />
                                            <path
                                                d="M160.71,143.67h-2.05a.31.31,0,0,1-.22-.53l1.44-1.43.24-.34.08-.21V141l0-.1-.23-.18h-.49l-.14,0-.12.24v.13a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.21a.31.31,0,0,1,0-.13l.2-.41a.31.31,0,0,1,.18-.16l.31-.1.1,0H160a.33.33,0,0,1,.14,0l.2.1a.16.16,0,0,1,.08.06l.21.2a.22.22,0,0,1,0,.08l.11.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.3a.39.39,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M215.77,129.34h-.1l-.11,0-.52-.21-.1-.07-.2-.2a.42.42,0,0,1-.08-.12l-.2-.62h0a.36.36,0,0,1,0-.1v-.71s0-.06,0-.08l.21-.72.22-.46a.34.34,0,0,1,.22-.17l.51-.1h.26l.58.1a.32.32,0,0,1,.23.21l.1.3a.31.31,0,1,1-.58.2l0-.14-.34-.07h-.14l-.3.06-.14.28-.08.27.62-.1.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.2A.23.23,0,0,1,215.77,129.34Zm-.44-.78.38.16.29-.15.21-.21.08-.33-.08-.27-.19-.19-.32-.08-.36.07-.26.47.14.42Z" />
                                            <path
                                                d="M218.64,129.34h-.21a.22.22,0,0,1-.13,0l-.41-.2a.16.16,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.11a.3.3,0,0,1,.19.12l.2.31a.31.31,0,1,1-.51.34l-.14-.21-.29-.07h-.24l-.22.06-.2.27,0,.29.39-.1h.28l.48.11a.27.27,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.4.2A.25.25,0,0,1,218.64,129.34Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.08-.27-.19-.19-.33-.08h-.13l-.25.07-.19.19-.06.28.07.34.21.2Z" />
                                            <path
                                                d="M220.48,129.34a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,220.48,129.34Z" />
                                            <path
                                                d="M222,129.34a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.19l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14V129A.3.3,0,0,1,222,129.34Z" />
                                            <path
                                                d="M223.55,129.34a.31.31,0,0,1-.31-.31V127.6l-.06-.22-.13-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.34.34,0,0,1,.13.18l.1.41V129A.31.31,0,0,1,223.55,129.34Z" />
                                            <path
                                                d="M224.57,129.34a.31.31,0,0,1-.28-.18.32.32,0,0,1,.07-.35l1.4-1.39.35-.63v-.12l-.22-.29-.18-.11h-.33l-.28.21-.12.2a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.34.34,0,0,1,0-.17l.35-.45.35-.25a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,.05.17v.31a.26.26,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.86.87,1.14-.06a.31.31,0,0,1,.33.29.3.3,0,0,1-.29.32l-1.95.11Z" />
                                            <path
                                                d="M160.81,120.94h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1H161l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.2l0-.15-.25-.06h-.23l-.23.06-.2.26,0,.3.57-.11.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.2.41a.22.22,0,0,1,0,.13v.11a.43.43,0,0,1,0,.11l-.21.51a.26.26,0,0,1-.11.14l-.31.21-.44.22A.35.35,0,0,1,160.81,120.94Zm-.54-.89.2.13.29.14.52-.29.14-.36-.15-.28-.21-.22-.33-.08-.27.08-.19.19-.07.28Z" />
                                            <path
                                                d="M163.67,120.94h-.1a.2.2,0,0,1-.11,0l-.51-.2a.41.41,0,0,1-.11-.07l-.2-.2-.08-.12-.2-.62a.36.36,0,0,1,0-.1v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.47a.32.32,0,0,1,.2-.16l.41-.1h.38l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08L164,118l-.3-.07h-.23l-.2,0-.14.29-.07.26.34-.08h.27l.49.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.57a.26.26,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,163.67,120.94Zm-.44-.77.39.15.49-.28.08-.38-.07-.3-.19-.19-.33-.08h-.13l-.22.06-.14.21-.13.27.14.42Z" />
                                            <path
                                                d="M165.52,120.94a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.29.29,0,0,1,165.52,120.94Z" />
                                            <path
                                                d="M167.05,120.94a.29.29,0,0,1-.3-.3V119.2l-.07-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,167.05,120.94Z" />
                                            <path
                                                d="M168.59,120.94a.3.3,0,0,1-.31-.3V119.2l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.4-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.32.32,0,0,1,.12.18l.11.41v1.51A.29.29,0,0,1,168.59,120.94Z" />
                                            <path
                                                d="M171.56,120.94h-1.95a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.21v-.21l-.05-.14-.31-.11h-.41l-.24.11-.12.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,.05-.17l.34-.46.12-.07.31-.1.1,0h.51l.1,0,.55.22a.3.3,0,0,1,.15.18l.1.3a.18.18,0,0,1,0,.1v.31a.2.2,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.3.3,0,0,1,.3.31A.29.29,0,0,1,171.56,120.94Z" />
                                            <path
                                                d="M213.42,111.53l-.49-.11-.14-.08-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2.08.06.21.21a.3.3,0,0,1,0,.43.31.31,0,0,1-.44,0l-.17-.17-.3-.15h-.16l-.28.14L213,109l0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31-.14.08-.41.1Zm-.25-.69.32.08h.13l.25-.07.19-.19.08-.32-.07-.28-.22-.21-.36-.15-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M216.28,111.53l-.48-.11-.14-.08-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.53.53,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.32.32,0,0,1-.14.42.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.11l.11,0,.51.21a.26.26,0,0,1,.14.11l.21.31.22.44a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.2.41-.23.34a.29.29,0,0,1-.19.13Zm-.25-.69.33.08.35-.08.14-.2.14-.29-.29-.52-.36-.14-.28.15-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M218.23,111.53a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,218.23,111.53Z" />
                                            <path
                                                d="M219.87,111.53a.31.31,0,0,1-.31-.31v-1.36l-.12-.23-.14,0H219l-.2.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.18.15l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,219.87,111.53Z" />
                                            <path
                                                d="M221.4,111.53a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.09,0-.38.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.41.08-.06.2-.1a.35.35,0,0,1,.14,0H221a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,221.4,111.53Z" />
                                            <path
                                                d="M224.37,111.53h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.06-.33l1.33-1.43.26-.35.07-.31-.12-.25-.18-.11h-.39l-.12.11a.16.16,0,0,1-.08.06l-.09,0,0,.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.3.3,0,0,1,0-.1l.1-.31a.28.28,0,0,1,.15-.17l.16-.09.17-.16A.31.31,0,0,1,223,108h.61a.26.26,0,0,1,.17,0l.46.34a.37.37,0,0,1,.07.12l.11.31a.31.31,0,0,1,0,.1v.2a.34.34,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08L224,110l-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M158.76,103.24h-.2a.32.32,0,0,1-.14,0L158,103a.29.29,0,0,1-.12-.1l-.2-.31-.23-.56a.31.31,0,0,1,0-.13v-.71s0-.06,0-.08l.21-.72.22-.46a.32.32,0,0,1,.14-.14l.41-.2a.23.23,0,0,1,.14,0h.3a.23.23,0,0,1,.14,0l.41.2a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.13h-.16l-.25.12-.16.32-.08.26.34-.08h.28l.49.11a.39.39,0,0,1,.14.08l.31.31a.64.64,0,0,1,.08.14l.11.59-.11.48a.53.53,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,158.76,103.24Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.08-.27-.19-.19-.32-.08h-.13l-.22.06-.27.47.16.38.12.19Z" />
                                            <path
                                                d="M161.42,103.13l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.11-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0h.31a.23.23,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.06-.19-.23-.11h-.16l-.28.14-.22.28,0,.28.33-.16a.31.31,0,0,1,.13,0h.21a.28.28,0,0,1,.13,0l.41.21a.29.29,0,0,1,.12.1l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.18.12l-.41.11Zm-.25-.68.33.08h.13l.21-.06.15-.21.14-.29-.3-.53-.33-.14-.3.15-.22.21-.06.28.07.34Z" />
                                            <path
                                                d="M163.47,103.13a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,163.47,103.13Z" />
                                            <path
                                                d="M165,103.13a.3.3,0,0,1-.31-.3v-1.27l-.18-.37h-.36l-.08,0-.37.46a.31.31,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.52a.39.39,0,0,1,.1-.08l.21-.1a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.1a.29.29,0,0,1,.15.16l.2.51a.5.5,0,0,1,0,.12v1.33A.3.3,0,0,1,165,103.13Z" />
                                            <path
                                                d="M166.54,103.13a.3.3,0,0,1-.31-.3V101.5l-.06-.28-.09,0h-.31l-.17.06-.35.44a.33.33,0,0,1-.44,0,.3.3,0,0,1,0-.43l.4-.52a.4.4,0,0,1,.15-.1l.3-.1h.61l.31.1a.33.33,0,0,1,.2.24l.1.51v1.39A.3.3,0,0,1,166.54,103.13Z" />
                                            <path
                                                d="M169.51,103.13h-1.95a.3.3,0,0,1-.21-.52l1.33-1.33.26-.45.16-.17v-.09l-.22-.29-.18-.11h-.33l-.35.21-.05.2a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.29.29,0,0,1,0-.09l.1-.31a.3.3,0,0,1,.15-.18l.21-.1.27-.19a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.2.2-.26.45-.86.87h1.21a.31.31,0,0,1,.31.31A.3.3,0,0,1,169.51,103.13Z" />
                                            <path
                                                d="M211.27,93.92l-.57-.11a.28.28,0,0,1-.22-.16l-.2-.41a.32.32,0,0,1,0-.14v-.51a.35.35,0,0,1,0-.14l.1-.2a.16.16,0,0,1,.06-.08l.21-.21a.29.29,0,0,1-.18-.19l-.11-.31a.31.31,0,0,1,0-.1v-.3a.31.31,0,0,1,0-.1l.11-.31a.3.3,0,0,1,.23-.2l.51-.1h.57l.48.11a.36.36,0,0,1,.19.13l.2.31a.34.34,0,0,1,0,.17v.3a.31.31,0,0,1,0,.17l-.2.31a.34.34,0,0,1-.09.08l.25.25a.24.24,0,0,1,.06.08l.1.2a.35.35,0,0,1,0,.14v.51a.32.32,0,0,1,0,.14l-.1.21-.06.08-.2.2a.28.28,0,0,1-.15.08l-.4.1Zm-.31-.68.37.07h.45l.25-.07.16-.21v-.37l-.05-.09-.23-.24-.27-.13-.15.06-.37.1-.26.3V93Zm0-1.81.16,0,.45.07.38-.14.1-.14v-.12L212,91l-.29-.07h-.41L211,91l0,.09Z" />
                                            <path
                                                d="M214,93.92l-.48-.11a.29.29,0,0,1-.2-.16l-.08-.16-.17-.17a.29.29,0,0,1-.09-.22v-.51a.27.27,0,0,1,.09-.21l.2-.21.16-.24a.29.29,0,0,1-.13-.16l-.1-.31a.3.3,0,0,1,0-.1v-.3a.3.3,0,0,1,0-.1l.1-.31a.32.32,0,0,1,.22-.2l.41-.1h.69l.48.11a.34.34,0,0,1,.22.2l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.29.29,0,0,1-.13.16l.19.29.17.16a.27.27,0,0,1,.09.21v.51a.29.29,0,0,1-.09.22l-.17.17-.08.16a.29.29,0,0,1-.2.16l-.41.1Zm-.2-.67.28.07h.54l.19-.06,0-.08.06-.08.12-.11v-.26l-.12-.12-.19-.27-.41-.16h0l-.37.15-.15.23-.16.16V93l.12.11a.35.35,0,0,1,0,.08Zm0-1.82.16,0,.32.06.46-.11,0-.12,0-.3-.25-.06h-.5l-.21.06,0,.1Z" />
                                            <path
                                                d="M216.28,93.92a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,216.28,93.92Z" />
                                            <path
                                                d="M217.92,93.92a.3.3,0,0,1-.31-.3V92.26L217.5,92l-.14,0h-.29l-.14.07-.45.37a.31.31,0,0,1-.44,0,.33.33,0,0,1,.05-.44l.51-.41.26-.13a.37.37,0,0,1,.14,0h.41l.1,0,.3.1a.29.29,0,0,1,.18.16l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,217.92,93.92Z" />
                                            <path
                                                d="M219.46,93.92a.3.3,0,0,1-.31-.3V92.26L219,92h-.29l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41a.28.28,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.31.31,0,0,1,0,.13v1.44A.29.29,0,0,1,219.46,93.92Z" />
                                            <path
                                                d="M222.43,93.92h-2a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33L221.59,92l.25-.34.07-.21v-.19L221.8,91l-.14,0h-.49l-.1,0-.18.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.35.35,0,0,1,0-.14l.1-.2a.24.24,0,0,1,.06-.08l.2-.21.08,0,.21-.11a.31.31,0,0,1,.13,0h.62l.1,0,.3.1a.3.3,0,0,1,.18.15l.21.41a.35.35,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.88.94h1.25a.31.31,0,0,1,.3.31A.3.3,0,0,1,222.43,93.92Z" />
                                            <path
                                                d="M156.41,85.43l-.49-.11-.14-.08-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.14.41.31.31,0,0,1-.41-.14l0-.11-.26-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.2.2a.23.23,0,0,1,.07.1l.21.52a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.18.13l-.41.1Zm-.25-.69.32.08h.13l.22-.06.14-.21.15-.3-.16-.38-.12-.12-.36-.15-.51.28-.07.34.07.35Z" />
                                            <path
                                                d="M159.27,85.43l-.48-.11-.14-.08-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.56.56,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.25.25,0,0,1,.13.14l.11.2a.32.32,0,0,1-.14.42.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.11a.31.31,0,0,1,.13,0l.41.21.34.22a.53.53,0,0,1,.12.14l.2.52a.2.2,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.2.41-.06.08-.31.31-.14.08Zm-.25-.69.33.08.27-.08.22-.21.14-.29-.14-.35-.22-.15-.29-.14-.5.27-.07.34.08.35Z" />
                                            <path
                                                d="M161.22,85.43a.31.31,0,0,1-.31-.31V83.18a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,161.22,85.43Z" />
                                            <path
                                                d="M162.75,85.43a.3.3,0,0,1-.3-.31V83.69l0-.17-.11,0H162l-.19.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,162.75,85.43Z" />
                                            <path
                                                d="M164.39,85.43a.31.31,0,0,1-.31-.31V83.76l-.11-.23-.14,0h-.29l-.14.07-.45.38a.33.33,0,0,1-.44-.05.31.31,0,0,1,.05-.43l.51-.41.26-.14a.35.35,0,0,1,.14,0H164l.3.11a.3.3,0,0,1,.18.15l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,164.39,85.43Z" />
                                            <path
                                                d="M167.36,85.43h-2.05a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.32-.11-.31-.15-.05h-.51l-.14.05-.12.36a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.3.3,0,0,1,0-.1l.22-.55a.33.33,0,0,1,.17-.16l.31-.1h.81l.31.1a.3.3,0,0,1,.17.16l.11.2.12.35a.31.31,0,0,1,0,.1V83a.34.34,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M210.24,71.3a.3.3,0,0,1-.27-.44l1.22-2.53h-1.56a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h2.05a.34.34,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.3.3,0,0,1,210.24,71.3Z" />
                                            <path
                                                d="M213.73,71.3h-.52a.31.31,0,0,1-.13,0l-.62-.31a.28.28,0,0,1-.15-.17l-.1-.31a.36.36,0,0,1,0-.1V70a.29.29,0,0,1,0-.09l.1-.31a.28.28,0,0,1,.12-.16l.24-.16-.29-.29a.29.29,0,0,1-.09-.22v-.3a.34.34,0,0,1,.05-.17l.21-.31a.34.34,0,0,1,.18-.13l.41-.1h.59l.48.11a.34.34,0,0,1,.18.13l.21.31a.34.34,0,0,1,.05.17v.3a.34.34,0,0,1-.09.22l-.29.29.24.16a.28.28,0,0,1,.12.16l.1.31a.29.29,0,0,1,0,.09v.41a.36.36,0,0,1,0,.1l-.1.31a.37.37,0,0,1-.07.12l-.11.1a.26.26,0,0,1-.1.07l-.51.2A.23.23,0,0,1,213.73,71.3Zm-.44-.61h.38l.4-.17.06-.19V70l0-.16-.22-.14-.39-.18h-.06l-.55.31-.06.16v.31l0,.14Zm-.13-1.82.31,0,.31,0,.25-.25v-.09l-.09-.13-.29-.07h-.4l-.26.07-.08.13v.09Z" />
                                            <path
                                                d="M215.47,71.3a.3.3,0,0,1-.31-.3V69a.31.31,0,1,1,.61,0v2A.3.3,0,0,1,215.47,71.3Z" />
                                            <path
                                                d="M217,71.3a.3.3,0,0,1-.31-.3V69.56l-.06-.21-.13-.09h-.23l-.22.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41V71A.3.3,0,0,1,217,71.3Z" />
                                            <path
                                                d="M218.54,71.3a.3.3,0,0,1-.31-.3V69.56l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41V71A.29.29,0,0,1,218.54,71.3Z" />
                                            <path
                                                d="M221.5,71.3h-1.94a.31.31,0,0,1-.22-.52l1.44-1.43L221,69l.07-.21v-.21l0-.14-.23-.12h-.49l-.25.12-.11.18v.11a.31.31,0,0,1-.62,0v-.2a.27.27,0,0,1,.06-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.1.1,0h.61a.35.35,0,0,1,.14,0l.41.21a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31,0,.09-.31.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,221.5,71.3Z" />
                                            <path
                                                d="M124,89.32l-.57-.11a.34.34,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0a.29.29,0,0,1,0-.09v-.71a.36.36,0,0,1,0-.1l.41-1.14a.32.32,0,0,1,.23-.19l.51-.1h.27l.57.1a.29.29,0,0,1,.23.21l.1.3a.31.31,0,1,1-.58.2l0-.14-.33-.07H124l-.29.06-.2.54.59-.09.49.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.3a.42.42,0,0,1-.14.09Zm-.33-.69.39.08.29-.08.19-.19.09-.32V88l-.07-.25-.19-.19-.33-.08-.35.07-.27.47.15.45Z" />
                                            <path
                                                d="M126.73,89.32l-.49-.11-.14-.08-.31-.31a.38.38,0,0,1-.08-.17L125.6,88v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11H127l.49.11a.28.28,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.23l-.23.06-.2.27,0,.29.39-.1h.28l.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.49a.29.29,0,0,1-.08.14l-.3.31a.53.53,0,0,1-.15.08l-.41.1Zm-.26-.69.33.08h.13l.25-.07.19-.19.08-.32V88l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M128.77,89.32a.3.3,0,0,1-.3-.31V87.07a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31V89A.31.31,0,0,1,128.77,89.32Z" />
                                            <path
                                                d="M130.31,89.32A.31.31,0,0,1,130,89V87.65l-.17-.28h-.29l-.19.07-.36.35a.3.3,0,0,1-.43-.43L129,87a.37.37,0,0,1,.12-.07l.31-.11h.51a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14V89A.3.3,0,0,1,130.31,89.32Z" />
                                            <path
                                                d="M131.84,89.32a.3.3,0,0,1-.3-.31V87.58l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41V89A.31.31,0,0,1,131.84,89.32Z" />
                                            <path
                                                d="M134.81,89.32h-1.94a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.4-1.39.35-.63v-.09l-.11-.11a.21.21,0,0,1-.06-.08l0-.09-.13-.05h-.42l-.14.05,0,.09-.06.08-.11.11v.08a.31.31,0,0,1-.62,0v-.21a.27.27,0,0,1,.09-.21l.17-.17L133,86a.31.31,0,0,1,.18-.16l.31-.1h.7l.31.1a.31.31,0,0,1,.18.16l.08.16.17.17a.31.31,0,0,1,.09.21v.31A.27.27,0,0,1,135,87l-.2.31-.19.37a.22.22,0,0,1,0,.08l-.91.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M126,107l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.3a.26.26,0,0,1-.07-.11l-.21-.51h0a.5.5,0,0,1,0-.12v-.71a.19.19,0,0,1,0-.08l.21-.72a.19.19,0,0,1,0-.1l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.2l.12,0,.51.21a.29.29,0,0,1,.16.15l.1.2a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.13l0-.1-.42-.14-.28.14-.23.3-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.2.34.23a.29.29,0,0,1,.13.19l.11.68-.11.48a.38.38,0,0,1-.09.15l-.3.3a.29.29,0,0,1-.14.08Zm-.25-.68.32.08.28-.08.19-.19.08-.33-.08-.35-.2-.14-.29-.14-.52.3-.12.31.13.34Z" />
                                            <path
                                                d="M128.77,107l-.48-.11a.29.29,0,0,1-.18-.12l-.21-.31-.23-.56a.27.27,0,0,1,0-.13v-.71l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.28.28,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.2.2a.31.31,0,0,1-.43.44l-.17-.17-.3-.15h-.17l-.27.14-.22.28,0,.29.33-.17a.31.31,0,0,1,.13,0H129a.31.31,0,0,1,.13,0l.41.2.34.23a.26.26,0,0,1,.13.19l.11.68-.11.48a.22.22,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08l-.41.1Zm-.22-.68.3.08H129l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.38-.15-.51.29-.06.3.17.42Z" />
                                            <path
                                                d="M130.82,107a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,130.82,107Z" />
                                            <path
                                                d="M132.36,107a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,132.36,107Z" />
                                            <path
                                                d="M133.89,107a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1h.61l.3.1a.35.35,0,0,1,.21.22l.1.41v1.51A.3.3,0,0,1,133.89,107Z" />
                                            <path
                                                d="M136.86,107h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.32-.06-.19-.11-.1-.19-.06h-.41l-.14,0-.22.37a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.34.34,0,0,1,0-.17l.29-.48a.34.34,0,0,1,.18-.15l.3-.1.1,0h.51l.1,0,.31.1.12.07.2.21a.36.36,0,0,1,.08.12l.1.31a.28.28,0,0,1,0,.09v.21a.28.28,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.94.94h1.21a.31.31,0,0,1,.31.31A.3.3,0,0,1,136.86,107Z" />
                                            <path
                                                d="M127,126.88l-.48-.11a.27.27,0,0,1-.18-.13l-.21-.31-.23-.56v0h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.2-.72.23-.46a.29.29,0,0,1,.14-.13l.41-.21a.31.31,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.35.35,0,0,1,.11.1l.21.31a.31.31,0,0,1-.51.34l-.16-.24-.27-.14h-.17l-.25.13-.16.32-.06.23.27-.13a.28.28,0,0,1,.13,0h.21a.28.28,0,0,1,.13,0l.41.2.08.06.31.31a.25.25,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08l-.41.1Zm-.22-.68.3.08h.13l.25-.07.19-.19.08-.33-.08-.28-.22-.21-.36-.15-.27.13-.28.5.15.38Z" />
                                            <path
                                                d="M129.9,126.88l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.3.3,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.14.13l.1.21a.3.3,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.05-.11-.26-.13H130l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.14,0h.1a.2.2,0,0,1,.11,0l.52.2a.31.31,0,0,1,.14.12l.2.3.23.45a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.21.41-.22.34a.29.29,0,0,1-.18.13l-.41.1Zm-.25-.69.32.09h.13l.22-.06.14-.22.14-.29-.29-.51L130,125l-.29.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M132,126.88a.31.31,0,0,1-.31-.29l-.1-1.94a.31.31,0,0,1,.29-.33.3.3,0,0,1,.32.29l.1,2a.3.3,0,0,1-.29.32Z" />
                                            <path
                                                d="M133.48,126.88a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.37l-.09,0-.48.48a.3.3,0,1,1-.43-.43l.51-.52.08-.05.2-.11a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,133.48,126.88Z" />
                                            <path
                                                d="M135,126.88a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,135,126.88Z" />
                                            <path
                                                d="M138,126.88H136a.31.31,0,0,1-.28-.18.32.32,0,0,1,.05-.34l1.34-1.43.43-.53v-.09l-.22-.28-.18-.12h-.33l-.35.22-.05.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.3a.29.29,0,0,1,.16-.18l.2-.1.28-.19a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.45.35.25.35a.34.34,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.21.21-.27.37-.88,1H138a.3.3,0,0,1,.31.3A.31.31,0,0,1,138,126.88Z" />
                                            <line class="cls-9" x1="36.04" y1="36.3" x2="228.57" y2="57.49" />
                                            <path
                                                d="M162,440.08a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.45a.31.31,0,1,1,0-.61h1.94a.3.3,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,162,440.08Z" />
                                            <path
                                                d="M165.72,440.08a.31.31,0,0,1-.31-.31v-.71h-1.12a.3.3,0,0,1-.27-.17.29.29,0,0,1,0-.32l1.43-1.95a.33.33,0,0,1,.35-.11.31.31,0,0,1,.21.29v1.64h.41a.31.31,0,1,1,0,.62H166v.71A.31.31,0,0,1,165.72,440.08Zm-.82-1.64h.51v-.7Z" />
                                            <path
                                                d="M167.26,440.08a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,167.26,440.08Z" />
                                            <path
                                                d="M168.89,440.08a.31.31,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.28l-.14.07-.46.37a.31.31,0,0,1-.43-.05.3.3,0,0,1,0-.43l.51-.41.26-.14a.31.31,0,0,1,.13,0h.41l.1,0,.31.1a.31.31,0,0,1,.17.15l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,168.89,440.08Z" />
                                            <path
                                                d="M170.43,440.08a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0H170a.32.32,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.2.41a.25.25,0,0,1,0,.14v1.43A.31.31,0,0,1,170.43,440.08Z" />
                                            <path
                                                d="M173.4,440.08h-2a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.33-1.43.26-.34.07-.22v-.18l-.12-.23-.14-.05h-.49l-.09.05-.19.23v.13a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.32.32,0,0,1,0-.14l.1-.21.06-.07.21-.21.08-.06.2-.1a.32.32,0,0,1,.14,0h.71l.31.11a.28.28,0,0,1,.17.15l.21.41a.32.32,0,0,1,0,.14v.3a.16.16,0,0,1,0,.1l-.1.31a.36.36,0,0,1,0,.09l-.31.4-.87,1h1.24a.3.3,0,0,1,.31.3A.31.31,0,0,1,173.4,440.08Z" />
                                            <path
                                                d="M144,448.68a.3.3,0,0,1-.27-.44l1.22-2.53h-1.46a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2a.31.31,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.31.31,0,0,1,144,448.68Z" />
                                            <path
                                                d="M147.5,448.68h-.3a.32.32,0,0,1-.14,0l-.41-.21a.31.31,0,0,1-.11-.09l-.31-.41a.31.31,0,0,1,0-.1l-.2-.72a.19.19,0,0,1,0-.08v-.41a.19.19,0,0,1,0-.08l.2-.72a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.28l.57.1a.32.32,0,0,1,.22.17l.2.41.23.77a.19.19,0,0,1,0,.08V447a.19.19,0,0,1,0,.08l-.21.72-.22.46a.32.32,0,0,1-.14.14l-.41.21A.32.32,0,0,1,147.5,448.68Zm-.23-.62h.16l.25-.12.16-.32L148,447v-.33l-.19-.67-.11-.22-.37-.08h-.1l-.27.07-.21.27-.18.62V447l.18.62.23.3Z" />
                                            <path
                                                d="M149.35,448.68a.31.31,0,0,1-.31-.29l-.1-2.05a.3.3,0,0,1,.29-.32.3.3,0,0,1,.32.29l.1,2.05a.31.31,0,0,1-.29.32Z" />
                                            <path
                                                d="M150.88,448.68a.31.31,0,0,1-.31-.31V447l-.23-.38h-.25l-.53.52a.3.3,0,0,1-.43-.43l.61-.61A.31.31,0,0,1,150,446h.51a.31.31,0,0,1,.22.09l.2.2a.16.16,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,150.88,448.68Z" />
                                            <path
                                                d="M152.42,448.68a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17-.05H152a.26.26,0,0,1,.17.05l.3.2a.32.32,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,152.42,448.68Z" />
                                            <path
                                                d="M155.38,448.68h-1.94a.3.3,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.34-1.43.43-.6V446l-.16-.23-.2-.07h-.41l-.31.11-.05.14v.16a.31.31,0,0,1-.62,0v-.21a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.2-.1.35-.12h.7l.31.1a.25.25,0,0,1,.12.08l.1.1.25.35a.34.34,0,0,1,.05.17v.31a.34.34,0,0,1-.05.17l-.52.73-.88.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <line class="cls-2" x1="273.09" y1="551.85" x2="262.65" y2="756.66" />
                                            <line class="cls-2" x1="348.11" y1="565.87" x2="303.18" y2="409.78" />
                                            <path
                                                d="M182.4,437a.31.31,0,0,1-.13,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.56a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2.05a.31.31,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.3.3,0,0,1,182.4,437Z" />
                                            <path
                                                d="M185.89,437h-.52a.31.31,0,0,1-.13,0l-.62-.31a.3.3,0,0,1-.15-.18l-.1-.3a.44.44,0,0,1,0-.1v-.41a.36.36,0,0,1,0-.1l.1-.3a.25.25,0,0,1,.12-.16l.26-.17-.06,0-.25-.24a.31.31,0,0,1-.09-.22v-.31a.34.34,0,0,1,.05-.17l.21-.3a.29.29,0,0,1,.18-.13l.41-.1h.59l.57.11a.31.31,0,0,1,.23.2l.1.31a.29.29,0,0,1,0,.09v.31a.23.23,0,0,1,0,.14l-.1.2a.29.29,0,0,1-.1.12l-.11.07.21.14a.25.25,0,0,1,.12.16l.1.3a.36.36,0,0,1,0,.1v.41a.44.44,0,0,1,0,.1l-.1.3a.24.24,0,0,1-.07.12l-.11.1a.18.18,0,0,1-.1.07L186,437Zm-.44-.61h.38l.4-.17.06-.19v-.31l0-.16-.22-.15-.38-.17h-.07l-.55.31-.06.16V436l0,.14Zm-.06-1.83.26.05.32-.05.22-.19,0-.28-.34-.06h-.41l-.26.07-.08.13v.08l.11.12Z" />
                                            <path
                                                d="M187.63,437a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.61,0v2A.31.31,0,0,1,187.63,437Z" />
                                            <path
                                                d="M189.16,437a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,189.16,437Z" />
                                            <path
                                                d="M190.8,437a.31.31,0,0,1-.31-.29l-.1-1.43-.06-.24-.14-.09H190l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41.11,1.48a.3.3,0,0,1-.28.33Z" />
                                            <path
                                                d="M193.77,437h-2.05a.31.31,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.44-1.44.24-.33.07-.22v-.2l0-.14L193,434h-.49l-.2.06-.06.2v.15a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.31.31,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.1-.1a.37.37,0,0,1,.12-.07l.31-.11h.71a.35.35,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.59.59,0,0,1,0,.08l-.31.41-.94.95h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,193.77,437Z" />
                                            <path
                                                d="M199.7,429.44a.3.3,0,0,1-.27-.44l1.22-2.53h-1.56a.31.31,0,0,1,0-.62h2a.32.32,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.43,3A.31.31,0,0,1,199.7,429.44Z" />
                                            <path
                                                d="M203.08,429.44h-.31a.33.33,0,0,1-.13,0l-.41-.2a.24.24,0,0,1-.11-.09l-.31-.41a.35.35,0,0,1-.06-.14l-.1-.72v-.45l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.36.36,0,0,1,.18.12l.3.41a.35.35,0,0,1,.06.14l.1.72v.45l-.11.76a.35.35,0,0,1-.06.14l-.3.41a.31.31,0,0,1-.11.09l-.41.2A.33.33,0,0,1,203.08,429.44Zm-.23-.62H203l.28-.14.21-.29.1-.64v-.36l-.09-.6-.19-.26-.3-.07h-.19l-.28.06-.19.26-.09.64v.37l.09.59.22.29Z" />
                                            <path
                                                d="M204.92,429.44a.3.3,0,0,1-.3-.31v-2.05a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2.05A.31.31,0,0,1,204.92,429.44Z" />
                                            <path
                                                d="M206.46,429.44a.31.31,0,0,1-.31-.31V427.7l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.4-.41.36-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.28.28,0,0,1,.12.18l.11.41v1.51A.31.31,0,0,1,206.46,429.44Z" />
                                            <path
                                                d="M208,429.44a.3.3,0,0,1-.3-.31V427.7l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,208,429.44Z" />
                                            <path
                                                d="M211,429.44H209a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l0-.14-.23-.11h-.5l-.24.11-.11.18v.12a.31.31,0,0,1-.62,0v-.21a.34.34,0,0,1,.05-.17l.35-.45a.25.25,0,0,1,.12-.08l.31-.1.09,0h.62a.25.25,0,0,1,.14,0l.4.2a.31.31,0,0,1,.16.18l.1.31a.29.29,0,0,1,0,.09V427a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.3.41-.94.94H211a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M213.83,422.27a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.45a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1.94a.3.3,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,213.83,422.27Z" />
                                            <path
                                                d="M218.13,422.27h-1.95a.31.31,0,0,1-.28-.18.3.3,0,0,1,.06-.34l1.33-1.43.43-.62-.22-.28-.18-.12H217l-.35.22,0,.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.2-.1.28-.19a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,.05.17v.2a.31.31,0,0,1-.05.17l-.52.73-.87,1h1.24a.29.29,0,0,1,.3.3A.3.3,0,0,1,218.13,422.27Z" />
                                            <path
                                                d="M219.15,422.27a.31.31,0,0,1-.31-.31V420a.31.31,0,0,1,.62,0V422A.31.31,0,0,1,219.15,422.27Z" />
                                            <path
                                                d="M220.69,422.27a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41V422A.31.31,0,0,1,220.69,422.27Z" />
                                            <path
                                                d="M222.22,422.27a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41V422A.31.31,0,0,1,222.22,422.27Z" />
                                            <path
                                                d="M225.19,422.27h-1.95a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.39-1.4.36-.65-.22-.35-.14-.05H224l-.14.05-.22.36a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.29-.48a.3.3,0,0,1,.18-.15l.3-.11h.71l.31.11a.28.28,0,0,1,.17.15l.11.21.18.27a.26.26,0,0,1,0,.17v.2a.26.26,0,0,1,0,.17l-.2.31-.19.38a.21.21,0,0,1-.06.08l-.9.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,225.19,422.27Z" />
                                            <path
                                                d="M231.33,416.13l-.13,0a.3.3,0,0,1-.15-.4l1.14-2.54h-1.47a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h1.94a.31.31,0,0,1,.26.14.33.33,0,0,1,0,.29l-1.33,3A.31.31,0,0,1,231.33,416.13Z" />
                                            <path
                                                d="M234.3,416.13l-.57-.11a.31.31,0,0,1-.22-.16l-.1-.21-.12-.34a.31.31,0,0,1,.19-.39.3.3,0,0,1,.39.19l.12.34.37.07h.35l.25-.07.19-.19.08-.33v-.23l-.07-.25-.19-.19-.33-.08h-.33l-.4.12a.29.29,0,0,1-.34.06.3.3,0,0,1-.18-.3l.1-1.23a.31.31,0,0,1,.31-.28h1.43a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-1.15l0,.46.21,0h.47l.48.11a.27.27,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41V415l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.27.27,0,0,1-.14.08l-.41.1Z" />
                                            <path
                                                d="M236.55,416.13a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,236.55,416.13Z" />
                                            <path
                                                d="M238.09,416.13a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.09,0,.31.1a.28.28,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,238.09,416.13Z" />
                                            <path
                                                d="M239.62,416.13a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,239.62,416.13Z" />
                                            <path
                                                d="M242.59,416.13h-2a.32.32,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.13l-.12-.11a.22.22,0,0,1-.05-.08l0-.09-.14,0h-.41l-.14,0,0,.09-.06.08-.12.11v.08a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.29.29,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.3-.11H242l.31.11a.28.28,0,0,1,.17.15l.08.16.17.17a.29.29,0,0,1,.09.22v.3a.31.31,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.94.95h1.21a.3.3,0,0,1,.31.3A.31.31,0,0,1,242.59,416.13Z" />
                                            <path
                                                d="M247.4,409.48a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.22-2.53h-1.55a.31.31,0,0,1,0-.62h2a.31.31,0,0,1,.28.44l-1.43,3A.33.33,0,0,1,247.4,409.48Z" />
                                            <path
                                                d="M250.27,409.48a.28.28,0,0,1-.13,0A.32.32,0,0,1,250,409l1.14-2.53h-1.47a.31.31,0,0,1,0-.62h1.95a.31.31,0,0,1,.25.14.32.32,0,0,1,0,.3l-1.33,3A.33.33,0,0,1,250.27,409.48Z" />
                                            <path
                                                d="M252.62,409.48a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,252.62,409.48Z" />
                                            <path
                                                d="M254.15,409.48a.31.31,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,254.15,409.48Z" />
                                            <path
                                                d="M255.79,409.48a.3.3,0,0,1-.3-.31v-1.36l-.14-.27-.16-.11H255l-.12.11-.53.44a.33.33,0,0,1-.44-.05.31.31,0,0,1,.05-.43l.69-.59a.31.31,0,0,1,.22-.09h.41a.26.26,0,0,1,.17.05l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,255.79,409.48Z" />
                                            <path
                                                d="M258.76,409.48h-2.05a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l-.06-.19-.2-.06h-.51l-.19.06-.06.19v.16a.31.31,0,0,1-.62,0v-.21a.29.29,0,0,1,0-.09l.1-.31a.24.24,0,0,1,.07-.12l.11-.1A.25.25,0,0,1,257,406l.3-.1.1,0H258l.1,0,.31.1a.42.42,0,0,1,.12.08l.1.1a.24.24,0,0,1,.07.12l.11.31a.28.28,0,0,1,0,.09V407a.34.34,0,0,1,0,.1l-.11.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M265.52,404.05l-.49-.11a.29.29,0,0,1-.2-.16l-.1-.21-.12-.34a.36.36,0,0,1,0-.1v-.41a.37.37,0,0,1,0-.14l.1-.2a.16.16,0,0,1,.06-.08l.21-.21a.3.3,0,0,1-.19-.19l-.1-.31a.31.31,0,0,1,0-.1v-.3a.31.31,0,0,1,0-.1l.1-.31a.34.34,0,0,1,.22-.2l.41-.1h.69l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.26.26,0,0,1-.12.15l.15.15.24.35a.26.26,0,0,1,0,.17v.41a.34.34,0,0,1,0,.1l-.1.3a.36.36,0,0,1-.08.12l-.2.21a.28.28,0,0,1-.15.08l-.41.1Zm-.21-.67.28.07h.54l.25-.07.1-.1.06-.19v-.27l-.15-.23-.13-.12-.4-.17h0l-.33.16-.28.33v.29Zm0-1.82.16.05.34.06.45-.11,0-.12,0-.3-.24-.07h-.5l-.22.06,0,.1Z" />
                                            <path
                                                d="M268.59,404.05l-.58-.11a.31.31,0,0,1-.22-.18l-.21-.52-.21-.74a.28.28,0,0,1,0-.09V402a.28.28,0,0,1,0-.09l.2-.72.23-.46a.29.29,0,0,1,.2-.16l.41-.1h.38l.48.11a.42.42,0,0,1,.18.11l.3.41a.24.24,0,0,1,.05.1l.21.72a.28.28,0,0,1,0,.09v.4a.28.28,0,0,1,0,.09l-.21.72a.21.21,0,0,1,0,.07l-.31.51a.31.31,0,0,1-.18.14l-.41.1Zm-.29-.68.35.07h.14l.21-.06.22-.37.19-.64v-.32l-.18-.62-.21-.28-.3-.08h-.19l-.24.06-.15.29-.17.62v.32Z" />
                                            <path
                                                d="M270.63,404.05a.3.3,0,0,1-.3-.3V401.8a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.95A.31.31,0,0,1,270.63,404.05Z" />
                                            <path
                                                d="M272.17,404.05a.31.31,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.51A.31.31,0,0,1,272.17,404.05Z" />
                                            <path
                                                d="M273.81,404.05a.31.31,0,0,1-.31-.3v-1.37l-.23-.37H273l-.11.11-.54.43a.31.31,0,0,1-.38-.48l.69-.59a.29.29,0,0,1,.22-.09h.51a.27.27,0,0,1,.21.09l.21.21.06.08.2.4a.35.35,0,0,1,0,.14v1.44A.3.3,0,0,1,273.81,404.05Z" />
                                            <path
                                                d="M276.77,404.05h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l-.11-.23-.14-.05h-.49l-.1.05-.18.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.32.32,0,0,1,0-.14l.1-.2a.16.16,0,0,1,.06-.08l.2-.21.08-.06.21-.1a.31.31,0,0,1,.13,0h.62l.1,0,.3.1a.3.3,0,0,1,.18.15l.2.41a.23.23,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.3a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M281.79,399l-.48-.11a.38.38,0,0,1-.15-.09l-.2-.2-.06-.08-.1-.2a.35.35,0,0,1,0-.14v-.51a.32.32,0,0,1,0-.14l.1-.21.06-.08.25-.24a.34.34,0,0,1-.09-.08l-.2-.31a.34.34,0,0,1-.05-.17v-.31a.34.34,0,0,1,.05-.17l.2-.31a.3.3,0,0,1,.19-.12l.41-.11h.68l.49.12a.28.28,0,0,1,.21.2l.11.3a.38.38,0,0,1,0,.1v.31a.38.38,0,0,1,0,.1l-.11.3a.27.27,0,0,1-.18.19l.21.21a.21.21,0,0,1,.06.08l.1.21a.32.32,0,0,1,0,.14v.41a.28.28,0,0,1,0,.09l-.22.55a.34.34,0,0,1-.2.17l-.41.1Zm-.25-.69.32.08h.54l.2-.05.11-.3v-.29l0-.1-.23-.23-.38-.18H282l-.33.17-.28.33v.37l.05.09Zm0-1.82.48.12.51-.11,0-.11,0-.31-.25-.06h-.5l-.26.06-.09.13v.13Z" />
                                            <path
                                                d="M284.66,399l-.49-.11a.42.42,0,0,1-.14-.09l-.21-.2a.35.35,0,0,1-.07-.12l-.1-.31a.3.3,0,0,1,.19-.39.31.31,0,0,1,.39.2l.08.24.09.09.33.08h.34l.24-.07.19-.19.09-.32v-.24l-.07-.25-.21-.16h-.44a.3.3,0,0,1-.28-.17.33.33,0,0,1,0-.33l.51-.62h-.88a.31.31,0,0,1,0-.62h1.53a.31.31,0,0,1,.28.18.33.33,0,0,1,0,.33l-.53.64h0l.2.11.08,0,.21.21a.29.29,0,0,1,.08.14l.1.41v.38l-.11.48a.28.28,0,0,1-.08.15l-.31.3a.42.42,0,0,1-.14.09l-.41.1Z" />
                                            <path
                                                d="M286.91,399a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,286.91,399Z" />
                                            <path
                                                d="M288.44,399a.3.3,0,0,1-.3-.31V397.3l-.05-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,288.44,399Z" />
                                            <path
                                                d="M290,399a.31.31,0,0,1-.31-.31V397.3l-.05-.17-.1,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,290,399Z" />
                                            <path
                                                d="M293,399H291a.32.32,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.21v-.18l-.05-.1-.12-.12-.19-.06h-.41l-.14,0-.05.1a.35.35,0,0,1-.05.08l-.12.11v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.3.3,0,0,1,.17-.16l.31-.1.1,0h.51l.1,0,.3.1a.25.25,0,0,1,.12.08l.21.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.11.3a.19.19,0,0,1,0,.09l-.31.41-.94.94H293a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M246.38,207.84a.3.3,0,0,1-.31-.27l-10.54-88.64a.31.31,0,1,1,.61-.07l10.54,88.64a.3.3,0,0,1-.27.34Z" />
                                            <path
                                                d="M228.57,57.79h0l-42-4.61a.3.3,0,0,1-.27-.33.32.32,0,0,1,.34-.28l42,4.61a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M703.69,755.12h0l-26.61-.51a.3.3,0,0,1-.3-.31.31.31,0,0,1,.31-.3l26.61.51a.31.31,0,0,1,.31.31A.32.32,0,0,1,703.69,755.12Z" />
                                            <path
                                                d="M489.36,968.43h0l-12.18-.81a.32.32,0,0,1-.29-.33.33.33,0,0,1,.33-.29l12.18.82a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M92.75,328.19l-.11,0a.3.3,0,0,1-.28-.19.3.3,0,0,1,.16-.4L180.19,290l-58.11-79.11a.27.27,0,0,1-.06-.12l-15.66-71.44a.31.31,0,0,1,.24-.36.29.29,0,0,1,.36.23l15.65,71.38L180.91,290a.28.28,0,0,1,.05.26.33.33,0,0,1-.17.21L109.9,320.83" />
                                            <path
                                                d="M147.71,169.46a.31.31,0,0,1-.31-.31v-2.33h0l-.26.14a.31.31,0,0,1-.28-.55l.21-.1.46-.38a.31.31,0,0,1,.32,0,.29.29,0,0,1,.17.27v3A.3.3,0,0,1,147.71,169.46Z" />
                                            <path
                                                d="M150,169.46a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.22-2.53h-1.55a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.32.32,0,0,1,150,169.46Z" />
                                            <path
                                                d="M153.34,169.46h-.11l-.11,0-.51-.21a.33.33,0,0,1-.1-.06l-.21-.21a.24.24,0,0,1-.07-.12l-.21-.61a.41.41,0,0,1,0-.11v-.71a.22.22,0,0,1,0-.08l.2-.72.23-.46a.26.26,0,0,1,.21-.16l.51-.11h.27l.48.11a.27.27,0,0,1,.18.13l.21.3a.31.31,0,0,1-.09.43.3.3,0,0,1-.42-.09l-.14-.2-.3-.08h-.13l-.3.07-.14.27-.07.27.62-.1.48.11a.34.34,0,0,1,.14.09l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.31.31,0,0,1,153.34,169.46Zm-.44-.77.38.15.28-.14.22-.22.08-.32-.08-.28-.19-.19-.33-.08-.35.08-.27.46.15.43Z" />
                                            <path
                                                d="M155.18,169.46a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,155.18,169.46Z" />
                                            <path
                                                d="M156.71,169.46a.31.31,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09H156l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.2a.31.31,0,0,1,.13.19l.1.41v1.5A.31.31,0,0,1,156.71,169.46Z" />
                                            <path
                                                d="M158.25,169.46a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.36.36,0,0,1,.13.19l.1.4v1.51A.31.31,0,0,1,158.25,169.46Z" />
                                            <path
                                                d="M161.22,169.46h-1.95a.32.32,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l-.05-.14-.35-.22h-.33l-.28.22-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.27.27,0,0,1,.17-.06h.51a.27.27,0,0,1,.17.06l.48.28a.3.3,0,0,1,.15.18l.11.31a.31.31,0,0,1,0,.1v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.95h1.21a.3.3,0,0,1,.31.3A.31.31,0,0,1,161.22,169.46Z" />
                                            <path
                                                d="M148.53,196.69a.31.31,0,0,1-.31-.31v-2.33l-.19.19a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.21-.21.53-.43a.33.33,0,0,1,.33,0,.3.3,0,0,1,.17.28v3A.3.3,0,0,1,148.53,196.69Z" />
                                            <path
                                                d="M150.78,196.69a.25.25,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.52h-1.56a.31.31,0,0,1,0-.62h2.05a.31.31,0,0,1,.28.44l-1.44,3A.3.3,0,0,1,150.78,196.69Z" />
                                            <path
                                                d="M154.05,196.69l-.57-.11a.33.33,0,0,1-.19-.13l-.21-.31a.21.21,0,0,1,0-.07l-.21-.62h0a.14.14,0,0,1,0-.09v-.71a.34.34,0,0,1,0-.1l.42-1.14a.3.3,0,0,1,.22-.19l.51-.1h.27l.57.11a.29.29,0,0,1,.23.21l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.14-.34-.07h-.15l-.28.06-.21.54.6-.09.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.32-.69.38.08.3-.08.19-.19.08-.33v-.13l-.07-.24-.19-.19-.33-.09-.35.08-.27.47.16.45Z" />
                                            <path
                                                d="M156,196.69a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.62,0v1.95A.31.31,0,0,1,156,196.69Z" />
                                            <path
                                                d="M157.53,196.69a.3.3,0,0,1-.3-.31V195l0-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.5.5,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,157.53,196.69Z" />
                                            <path
                                                d="M159.07,196.69a.31.31,0,0,1-.31-.31V195l0-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.3-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.31.31,0,0,1,159.07,196.69Z" />
                                            <path
                                                d="M162.14,196.69h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21V194l0-.09-.23-.18h-.49l-.14,0-.12.23v.14a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.35.35,0,0,1,0-.14l.21-.4a.29.29,0,0,1,.18-.16l.3-.1.1,0h.61a.23.23,0,0,1,.14,0l.21.1a.19.19,0,0,1,.07.06l.21.2.06.08.1.2a.35.35,0,0,1,0,.14v.31a.38.38,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M328.46,1009.47a.3.3,0,0,1-.3-.31v-2.86a.3.3,0,0,1,.3-.31h.92l.49.11a.29.29,0,0,1,.14.08l.1.1a.42.42,0,0,1,.08.12l.1.31a.31.31,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.2.41a.29.29,0,0,1-.2.16l-.41.1h-.69v1.23A.31.31,0,0,1,328.46,1009.47Zm.31-2.15h.61l.2-.05.11-.23v-.18l-.06-.19-.32-.08h-.54Z" />
                                            <path
                                                d="M330,1009.47a.3.3,0,0,1-.27-.16l-.82-1.54a.31.31,0,0,1,.54-.29l.82,1.54a.3.3,0,0,1-.13.41A.23.23,0,0,1,330,1009.47Z" />
                                            <path
                                                d="M331.43,1009.47h-.2l-.1,0-.31-.1a.3.3,0,0,1-.2-.22l-.1-.41v-1.5a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.43l.05.17.19,0,.09,0,.38-.38a.3.3,0,0,1,.43,0,.31.31,0,0,1,0,.44l-.41.41-.08.05-.2.11A.32.32,0,0,1,331.43,1009.47Z" />
                                            <path
                                                d="M332.05,1009.47a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.61,0v1.94A.31.31,0,0,1,332.05,1009.47Z" />
                                            <path
                                                d="M333,1009.47a.31.31,0,0,1-.31-.31v-2.86a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.86A.3.3,0,0,1,333,1009.47Z" />
                                            <path
                                                d="M333,1009a.26.26,0,0,1-.19-.07.31.31,0,0,1-.06-.43l1.13-1.43a.31.31,0,0,1,.48.38l-1.12,1.43A.3.3,0,0,1,333,1009Z" />
                                            <path
                                                d="M334.19,1009.47a.33.33,0,0,1-.25-.13l-.71-1a.29.29,0,0,1,.07-.42.31.31,0,0,1,.43.07l.72,1a.3.3,0,0,1-.08.42A.28.28,0,0,1,334.19,1009.47Z" />
                                            <path
                                                d="M335.73,1009.47h-.31l-.09,0-.31-.1a.28.28,0,0,1-.16-.12l-.2-.31a.16.16,0,0,1,0-.07l-.1-.31a.29.29,0,0,1,0-.09v-.31l.11-.57a.22.22,0,0,1,.05-.11l.2-.31a.28.28,0,0,1,.16-.12l.31-.1.09,0h.31a.35.35,0,0,1,.14,0l.2.11a.23.23,0,0,1,.12.1l.2.31a.22.22,0,0,1,.05.11l.1.51v.37a.29.29,0,0,1,0,.09l-.1.31a.16.16,0,0,1,0,.07l-.2.31a.29.29,0,0,1-.12.1l-.2.11A.35.35,0,0,1,335.73,1009.47Zm-.26-.62.25,0,.14-.2.07-.22v-.26l-.08-.39-.19-.23h-.19l-.16.06-.11.17-.09.45v.19l.08.23.12.18Z" />
                                            <path
                                                d="M339.11,1009.47H339a.32.32,0,0,1-.21-.39l.93-3a.28.28,0,0,1,.29-.21.29.29,0,0,1,.29.22l.82,3a.31.31,0,1,1-.59.16l-.54-2-.61,2A.31.31,0,0,1,339.11,1009.47Z" />
                                            <path
                                                d="M340.64,1008.55h-1.23a.31.31,0,0,1,0-.62h1.23a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M343,1009.47h-1.64a.31.31,0,0,1-.23-.51l1.12-1.33.34-.59v-.18l-.12-.31-.14,0H342l-.14,0-.11.36a.31.31,0,1,1-.62,0v-.1a.3.3,0,0,1,0-.1l.22-.55a.35.35,0,0,1,.18-.16l.31-.1h.6l.31.1a.33.33,0,0,1,.17.16l.11.2.12.35a.31.31,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.21-.32.53-.73.86h1a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M332.35,995.24a.3.3,0,0,1-.3-.3v-3a.3.3,0,0,1,.3-.31h1a.15.15,0,0,1,.09,0l.31.1a.24.24,0,0,1,.12.07l.1.1a.42.42,0,0,1,.08.12l.1.31a.34.34,0,0,1,0,.1v.2a.31.31,0,0,1,0,.1l-.22.55a.35.35,0,0,1-.18.16l-.31.1h-.81v1.34A.31.31,0,0,1,332.35,995.24Zm.31-2.25h.67l.14,0,.11-.31v-.1l-.06-.19-.19-.07h-.67Z" />
                                            <path
                                                d="M333.89,995.24a.31.31,0,0,1-.28-.18l-.72-1.64a.29.29,0,0,1,.16-.4.3.3,0,0,1,.4.15l.72,1.64a.31.31,0,0,1-.16.41Z" />
                                            <path
                                                d="M335.12,995.24a.31.31,0,0,1-.22-.09l-.21-.2a.35.35,0,0,1-.05-.08l-.21-.41a.32.32,0,0,1,0-.14v-1.43a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.36l.19.33.22-.09.27-.35a.3.3,0,0,1,.43-.06.3.3,0,0,1,.06.42l-.31.41a.24.24,0,0,1-.11.09l-.2.11-.35.12Z" />
                                            <path
                                                d="M335.93,995.14a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,335.93,995.14Z" />
                                            <path
                                                d="M336.86,995.14a.31.31,0,0,1-.31-.31V992a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.86A.3.3,0,0,1,336.86,995.14Z" />
                                            <path
                                                d="M336.86,994.63a.26.26,0,0,1-.19-.07.31.31,0,0,1-.06-.43l1.13-1.43a.31.31,0,0,1,.48.38l-1.12,1.43A.3.3,0,0,1,336.86,994.63Z" />
                                            <path
                                                d="M338.08,995.14a.31.31,0,0,1-.26-.14l-.71-1.13a.31.31,0,0,1,.09-.42.32.32,0,0,1,.43.09l.71,1.13a.31.31,0,0,1-.09.42A.34.34,0,0,1,338.08,995.14Z" />
                                            <path
                                                d="M339.62,995.14h-.31l-.09,0-.31-.1a.24.24,0,0,1-.12-.07l-.21-.21a.28.28,0,0,1-.08-.15l-.1-.52v-.36l.11-.49,0-.09.21-.31a.28.28,0,0,1,.16-.12l.31-.1.09,0h.31a.35.35,0,0,1,.14,0l.2.11.08,0,.31.31a.31.31,0,0,1,.09.22v1.23a.3.3,0,0,1-.14.25l-.54.33A.35.35,0,0,1,339.62,995.14Zm-.26-.61h.19l.27-.17v-.94l-.27-.23h-.19l-.16.06-.11.17-.09.36V994l.07.36.09.09Z" />
                                            <path
                                                d="M343,995.14l-.1,0a.3.3,0,0,1-.2-.38l.93-2.87a.28.28,0,0,1,.29-.21.29.29,0,0,1,.29.22l.82,2.87a.31.31,0,1,1-.59.17l-.54-1.9-.61,1.91A.3.3,0,0,1,343,995.14Z" />
                                            <path
                                                d="M344.53,994.22H343.3a.31.31,0,0,1,0-.62h1.23a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M346.17,995.14h-.31a.28.28,0,0,1-.13,0l-.41-.21-.08,0-.11-.11a.22.22,0,0,1-.05-.08l-.11-.2a.31.31,0,0,1,.14-.41.3.3,0,0,1,.41.13l.12.2.3.15h.16l.41-.21.08-.37v-.24l-.11-.3-.19-.11h-.21a.33.33,0,0,1-.28-.17.31.31,0,0,1,0-.32l.37-.54h-.74a.29.29,0,0,1-.3-.3.3.3,0,0,1,.3-.31h1.33a.31.31,0,0,1,.26.48l-.44.63.4.31a.29.29,0,0,1,.08.14l.1.41V994l-.1.58a.3.3,0,0,1-.17.21l-.61.31A.35.35,0,0,1,346.17,995.14Z" />
                                            <path
                                                d="M342,980.3a.3.3,0,0,1-.3-.31v-3.07a.3.3,0,0,1,.3-.31h1a.22.22,0,0,1,.13,0l.41.2a.3.3,0,0,1,.17.28v0l.09.26a.29.29,0,0,1,0,.09v.21a.36.36,0,0,1,0,.1l-.09.31a.28.28,0,0,1-.17.27l-.41.21a.31.31,0,0,1-.13,0h-.72V980A.31.31,0,0,1,342,980.3Zm.31-2.25h.64l.19-.1h0l.09-.37-.09-.26h0l-.19-.09h-.64Z" />
                                            <path
                                                d="M343.51,980.3a.3.3,0,0,1-.28-.19l-.72-1.63a.31.31,0,0,1,.16-.41.3.3,0,0,1,.4.16l.72,1.64a.3.3,0,0,1-.16.4Z" />
                                            <path
                                                d="M345,980.3h-.41a.29.29,0,0,1-.21-.09l-.21-.21a.39.39,0,0,1-.08-.14l-.1-.41v-1.61a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.54l.07.25.06,0h.16l.52-.52a.31.31,0,0,1,.44,0,.3.3,0,0,1,0,.43l-.62.62A.29.29,0,0,1,345,980.3Z" />
                                            <path
                                                d="M345.66,980.3a.31.31,0,0,1-.31-.31v-2.15a.31.31,0,0,1,.62,0V980A.31.31,0,0,1,345.66,980.3Z" />
                                            <path
                                                d="M346.48,980.2a.31.31,0,0,1-.31-.31v-3a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v3A.3.3,0,0,1,346.48,980.2Z" />
                                            <path
                                                d="M346.48,979.68a.35.35,0,0,1-.18,0,.31.31,0,0,1-.07-.43l1.13-1.54a.3.3,0,0,1,.42-.07.31.31,0,0,1,.07.43l-1.13,1.54A.3.3,0,0,1,346.48,979.68Z" />
                                            <path
                                                d="M347.81,980.2a.31.31,0,0,1-.25-.13l-.82-1.13a.29.29,0,0,1,.07-.42.31.31,0,0,1,.43.06l.82,1.13a.31.31,0,0,1-.07.43A.32.32,0,0,1,347.81,980.2Z" />
                                            <path
                                                d="M349.24,980.2h-.41a.25.25,0,0,1-.14,0l-.2-.1a.29.29,0,0,1-.12-.1l-.2-.31-.23-.44a.35.35,0,0,1,0-.14v-.31a.31.31,0,0,1,0-.13l.21-.41.22-.34.24-.26a.35.35,0,0,1,.22-.08h.41a.35.35,0,0,1,.22.08l.2.21.25.35a1,1,0,0,1,0,.1l.1.41v.38l-.11.48a1,1,0,0,1,0,.1l-.21.31a.29.29,0,0,1-.12.1l-.2.1A.25.25,0,0,1,349.24,980.2Zm-.34-.62.34,0,.12-.2.09-.35v-.24l-.08-.28-.25-.33H349l-.12.11-.32.57V979l.32.55Z" />
                                            <path
                                                d="M354.46,980.2a.31.31,0,0,1-.29-.22l-.63-2-.63,2a.3.3,0,0,1-.38.2.31.31,0,0,1-.21-.38l.93-3a.31.31,0,0,1,.58,0l.92,3a.3.3,0,0,1-.2.38Z" />
                                            <path
                                                d="M354.05,979.17h-1.13a.31.31,0,0,1,0-.61h1.13a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M356,980.2a.31.31,0,0,1-.31-.31v-.72h-.82a.33.33,0,0,1-.27-.15.34.34,0,0,1,0-.31l1.13-1.94a.32.32,0,0,1,.35-.15.31.31,0,0,1,.22.3v1.64h.31a.31.31,0,1,1,0,.61h-.31v.72A.3.3,0,0,1,356,980.2Zm-.6-1.64h.29v-.5Z" />
                                            <path
                                                d="M324.88,1023.8a.31.31,0,0,1-.31-.31v-3a.3.3,0,0,1,.31-.3h1a.32.32,0,0,1,.14,0l.21.1.08.06.2.2a.37.37,0,0,1,.07.12l.11.31a.31.31,0,0,1,0,.1v.2a.34.34,0,0,1,0,.1l-.11.31a.37.37,0,0,1-.07.12l-.2.2-.08.06-.21.1a.32.32,0,0,1-.14,0h-.71v1.23A.31.31,0,0,1,324.88,1023.8Zm.31-2.15h.64l.1,0,.12-.12.06-.29-.06-.19-.22-.17h-.64Z" />
                                            <path
                                                d="M326.42,1023.8a.31.31,0,0,1-.28-.18l-.72-1.53a.31.31,0,0,1,.15-.41.31.31,0,0,1,.41.15l.71,1.53a.3.3,0,0,1-.14.41Z" />
                                            <path
                                                d="M328,1023.8h-.41a.35.35,0,0,1-.14,0l-.2-.11a.26.26,0,0,1-.16-.21l-.11-.51v-1.39a.31.31,0,1,1,.61,0v1.33l.07.3.33,0,.26-.43a.31.31,0,0,1,.42-.11.32.32,0,0,1,.11.43l-.31.51a.24.24,0,0,1-.13.11l-.2.11A.32.32,0,0,1,328,1023.8Z" />
                                            <path
                                                d="M328.46,1023.8a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,328.46,1023.8Z" />
                                            <path
                                                d="M329.38,1023.8a.3.3,0,0,1-.3-.31v-3a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v3A.31.31,0,0,1,329.38,1023.8Z" />
                                            <path
                                                d="M329.38,1023.18a.26.26,0,0,1-.19-.07.3.3,0,0,1,0-.43l1.13-1.33a.3.3,0,1,1,.46.39l-1.12,1.34A.31.31,0,0,1,329.38,1023.18Z" />
                                            <path
                                                d="M330.61,1023.8a.33.33,0,0,1-.25-.13l-.81-1.12a.31.31,0,1,1,.49-.37l.82,1.13a.31.31,0,0,1-.07.43A.28.28,0,0,1,330.61,1023.8Z" />
                                            <path
                                                d="M332.15,1023.8h-.41a.32.32,0,0,1-.14,0l-.2-.11-.08,0-.31-.31a.3.3,0,0,1-.08-.16l-.11-.51v-.26l.11-.58a.26.26,0,0,1,.13-.19l.54-.33a.32.32,0,0,1,.14,0h.41a.31.31,0,0,1,.13,0l.21.1.08.06.2.21a.24.24,0,0,1,.09.15l.1.51v.27l-.11.57a.37.37,0,0,1-.05.11l-.2.31a.29.29,0,0,1-.12.1l-.21.11A.31.31,0,0,1,332.15,1023.8Zm-.34-.62.33,0,.13-.19.09-.45v-.14l-.07-.36-.2-.16h-.27l-.31.19-.07.39v.14l.08.36Z" />
                                            <path
                                                d="M335.42,1023.8l-.1,0a.31.31,0,0,1-.19-.39l1-3a.34.34,0,0,1,.29-.2.31.31,0,0,1,.29.21l.92,3a.31.31,0,0,1-.59.18l-.64-2.07-.72,2.08A.3.3,0,0,1,335.42,1023.8Z" />
                                            <path
                                                d="M337,1022.77h-1.13a.29.29,0,0,1-.3-.3.3.3,0,0,1,.3-.31H337a.31.31,0,0,1,.31.31A.3.3,0,0,1,337,1022.77Z" />
                                            <path
                                                d="M338.7,1023.8a.31.31,0,0,1-.31-.31v-2.23l-.09.09a.3.3,0,0,1-.43-.43l.61-.61a.31.31,0,0,1,.34-.07.32.32,0,0,1,.19.28v3A.31.31,0,0,1,338.7,1023.8Z" />
                                            <path
                                                d="M320,1035.67a.31.31,0,0,1-.31-.31v-3.07a.3.3,0,0,1,.31-.3h.92a.26.26,0,0,1,.17,0l.48.29a.28.28,0,0,1,.15.17l.1.31a.36.36,0,0,1,0,.1v.41a.29.29,0,0,1,0,.09l-.1.31a.24.24,0,0,1-.07.12l-.21.21a.35.35,0,0,1-.12.07l-.3.1-.1,0h-.62v1.12A.3.3,0,0,1,320,1035.67Zm.3-2.05h.57l.19-.06.1-.1.07-.19V1033l-.05-.14-.35-.22h-.53Z" />
                                            <path
                                                d="M323.14,1035.67h-.41a.31.31,0,0,1-.22-.09l-.2-.2-.24-.36a.41.41,0,0,1-.05-.09l-.1-.41v-.28l.11-.49a.41.41,0,0,1,.05-.09l.2-.31.24-.25a.31.31,0,0,1,.22-.09h.41a.3.3,0,0,1,.27.17l.09.16.27.27a.39.39,0,0,1,.08.14l.1.41v.28l-.11.49a.39.39,0,0,1-.08.14l-.27.27-.09.16A.28.28,0,0,1,323.14,1035.67Zm-.29-.61.12,0a.21.21,0,0,1,.06-.08l.24-.24.08-.33v-.13l-.07-.25-.25-.25a.16.16,0,0,1-.06-.08l0,0h-.09l-.12.12-.13.21-.09.36v.13l.07.28Z" />
                                            <path
                                                d="M325.19,1035.67h-.41a.34.34,0,0,1-.17-.05l-.31-.21a.26.26,0,0,1-.12-.15l-.1-.31a.31.31,0,1,1,.58-.19l.07.2.14.1h.22l.1-.06v-.2l-.09-.25h-.42a.34.34,0,0,1-.22-.09l-.21-.21a.22.22,0,0,1-.05-.08l-.11-.2a.33.33,0,0,1,0-.24l.1-.31a.26.26,0,0,1,.12-.15l.31-.21a.34.34,0,0,1,.17,0h.41a.27.27,0,0,1,.21.09l.21.2a.37.37,0,0,1,.07.12l.11.31a.31.31,0,0,1-.2.39h0l.09.19.12.34a.34.34,0,0,1,0,.1v.41a.3.3,0,0,1-.13.25l-.31.21A.34.34,0,0,1,325.19,1035.67Zm-.39-1.74h.4l-.08-.24-.06-.07h-.19l-.14.1,0,.09Z" />
                                            <path
                                                d="M328.36,1035.67h-.1a.31.31,0,0,1-.19-.39l1-3.07a.32.32,0,0,1,.3-.21.29.29,0,0,1,.29.22l.82,3.08a.3.3,0,0,1-.22.37.3.3,0,0,1-.37-.22l-.56-2.08-.7,2.1A.3.3,0,0,1,328.36,1035.67Z" />
                                            <path
                                                d="M329.9,1034.55h-1.13a.31.31,0,1,1,0-.62h1.13a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M344.94,984.9a.31.31,0,0,1-.13,0,.3.3,0,0,1-.14-.41l1.22-2.52h-1.46a.31.31,0,0,1,0-.62h1.94a.3.3,0,0,1,.26.15.28.28,0,0,1,0,.29l-1.43,3A.3.3,0,0,1,344.94,984.9Z" />
                                            <path
                                                d="M348.42,984.9a.3.3,0,0,1-.31-.3v-2.33l-.19.19a.3.3,0,0,1-.43-.43l.2-.21.54-.43a.31.31,0,0,1,.5.24v3A.3.3,0,0,1,348.42,984.9Z" />
                                            <path
                                                d="M350.26,984.9a.29.29,0,0,1-.3-.3v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.3.3,0,0,1,350.26,984.9Z" />
                                            <path
                                                d="M351.8,984.9a.3.3,0,0,1-.31-.3v-1.36l-.17-.28H351l-.08,0-.37.46a.31.31,0,0,1-.43,0,.33.33,0,0,1-.05-.44l.41-.51.11-.08.2-.1a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.22.22,0,0,1,0,.13v1.44A.3.3,0,0,1,351.8,984.9Z" />
                                            <path
                                                d="M353.33,984.9a.3.3,0,0,1-.3-.3v-1.44l0-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,353.33,984.9Z" />
                                            <path
                                                d="M356.3,984.9h-1.94a.31.31,0,0,1-.23-.51l1.33-1.43.43-.54v-.08l-.21-.29-.18-.11h-.33l-.36.21,0,.2a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.2-.1.27-.19a.34.34,0,0,1,.17,0h.52a.34.34,0,0,1,.17,0l.45.35.25.35a.34.34,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.21.2-.28.38-.87.94h1.24a.31.31,0,0,1,.31.31A.3.3,0,0,1,356.3,984.9Z" />
                                            <path
                                                d="M335.53,1000h-.11a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.6a.41.41,0,0,1,0-.11v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.15-.24-.06h-.24l-.22.06-.2.27,0,.29.57-.11.57.11a.33.33,0,0,1,.19.13l.21.31.22.44a.35.35,0,0,1,0,.14v.1a.25.25,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.21.21a.33.33,0,0,1-.1.06l-.51.21Zm-.54-.9.19.13.3.15.38-.15.12-.12.15-.38-.28-.5-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M338.6,1000H338a.35.35,0,0,1-.14,0l-.61-.31a.3.3,0,0,1-.15-.18l-.11-.3a.38.38,0,0,1,0-.1v-.41a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.25-.25-.25-.24a.31.31,0,0,1-.09-.22v-.31a.34.34,0,0,1,.05-.17l.21-.3a.27.27,0,0,1,.18-.13l.41-.1h.69l.48.11a.31.31,0,0,1,.22.2l.1.31a.28.28,0,0,1,0,.09v.31a.32.32,0,0,1,0,.14l-.1.2a.29.29,0,0,1-.1.12l-.06,0,.21.21a.35.35,0,0,1,.07.12l.1.3a.36.36,0,0,1,0,.1V999a.44.44,0,0,1,0,.1l-.1.3a.25.25,0,0,1-.08.12l-.1.11-.08.05-.41.21A.31.31,0,0,1,338.6,1000Zm-.55-.61h.47l.32-.17.06-.19v-.31l-.06-.19-.2-.2-.39-.09-.42.09-.19.2-.07.19V999l.05.14Zm-.05-1.83.26,0,.32,0,.22-.19,0-.29-.25-.06H338l-.26.07-.09.13v.08l.12.12Z" />
                                            <path
                                                d="M340.23,1000a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,340.23,1000Z" />
                                            <path
                                                d="M341.77,1000a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09H341l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.26.26,0,0,1,.12.18l.11.41v1.5A.31.31,0,0,1,341.77,1000Z" />
                                            <path
                                                d="M343.41,1000a.31.31,0,0,1-.31-.31v-1.36L343,998l-.16-.11h-.19l-.11.12-.54.43a.3.3,0,0,1-.43-.05.3.3,0,0,1,.05-.43l.69-.59a.29.29,0,0,1,.22-.09h.4a.31.31,0,0,1,.17.05l.31.21a.38.38,0,0,1,.11.11l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,343.41,1000Z" />
                                            <path
                                                d="M346.37,1000h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l0-.14-.23-.12h-.5l-.19.07-.06.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.1-.1a.29.29,0,0,1,.12-.07l.31-.11h.71a.35.35,0,0,1,.14,0l.4.21a.3.3,0,0,1,.16.17l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.3.41-.94,1h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,346.37,1000Z" />
                                            <path
                                                d="M332.25,1013.67l-.48-.12a.28.28,0,0,1-.15-.08l-.3-.3a.29.29,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.31a.22.22,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.13l-.05-.12-.26-.12h-.16l-.28.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.26.26,0,0,1,.11.14l.21.51a.5.5,0,0,1,0,.12v.1a.35.35,0,0,1,0,.14l-.21.41-.22.34a.39.39,0,0,1-.2.13ZM332,1013l.32.08.36-.08.13-.2.15-.3-.14-.35-.23-.15-.29-.15-.49.28-.07.34.07.35Z" />
                                            <path
                                                d="M337.06,1013.67a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,337.06,1013.67Z" />
                                            <path
                                                d="M338.6,1013.67a.31.31,0,0,1-.31-.31V1012l-.18-.28h-.36l-.1,0-.37.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.08-.06.21-.1a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,338.6,1013.67Z" />
                                            <path
                                                d="M340.13,1013.67a.31.31,0,0,1-.31-.31V1012l-.17-.28h-.29l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.5a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,340.13,1013.67Z" />
                                            <path
                                                d="M343.2,1013.67h-2.15a.3.3,0,0,1-.28-.2.31.31,0,0,1,.07-.34l1.54-1.43.24-.33.07-.32-.11-.24-.18-.11H342l-.4.16-.07.25a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3V1011a.29.29,0,0,1,0-.09l.1-.31a.29.29,0,0,1,.07-.12l.1-.1a.41.41,0,0,1,.11-.07l.51-.2a.23.23,0,0,1,.11,0h.52a.34.34,0,0,1,.17,0l.45.35a.25.25,0,0,1,.08.12l.1.31a.28.28,0,0,1,0,.09v.21a.38.38,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.31.41-1,.94h1.37a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M330,1027.48h-.1a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.59.19l0-.13-.34-.07h-.14l-.23.07-.2.26,0,.29.57-.1.48.11a.22.22,0,0,1,.14.08l.31.31a.25.25,0,0,1,.08.14l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.06-.4.2A.35.35,0,0,1,330,1027.48Zm-.33-.76.28.14.28-.14.21-.21.08-.33-.08-.28-.19-.19-.33-.08-.27.08-.19.19-.07.27.07.34Z" />
                                            <path
                                                d="M334.6,1027.38a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,334.6,1027.38Z" />
                                            <path
                                                d="M336.14,1027.38a.31.31,0,0,1-.31-.31v-1.33l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.26.26,0,0,1,.12.18l.11.41v1.4A.31.31,0,0,1,336.14,1027.38Z" />
                                            <path
                                                d="M337.67,1027.38a.31.31,0,0,1-.3-.31v-1.33l-.06-.21-.14-.09H337l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41v1.4A.31.31,0,0,1,337.67,1027.38Z" />
                                            <path
                                                d="M340.85,1027.38H338.7a.31.31,0,0,1-.2-.54l1.53-1.33.23-.32.08-.21v-.21l0-.14-.23-.12h-.54l-.3.12-.11.18v.11a.31.31,0,0,1-.62,0v-.2a.34.34,0,0,1,.05-.17l.35-.46a.39.39,0,0,1,.14-.08l.41-.1h.69a.32.32,0,0,1,.14,0l.41.21a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-1,.84h1.33a.29.29,0,0,1,.3.3A.3.3,0,0,1,340.85,1027.38Z" />
                                            <path
                                                d="M328.77,1039.25h-.41a.35.35,0,0,1-.14,0l-.41-.2-.08-.06-.1-.1-.24-.36a.29.29,0,0,1,.08-.42.31.31,0,0,1,.43.08l.22.32.31.16h.28l.37-.15.15-.23.15-.31v-.16l-.16-.32-.19-.06h-.36a.31.31,0,0,1-.25-.49l.46-.63H328a.31.31,0,1,1,0-.62h1.54a.31.31,0,0,1,.27.17.31.31,0,0,1,0,.32l-.49.68.24.07a.36.36,0,0,1,.12.08l.1.1a.21.21,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v.31a.31.31,0,0,1,0,.13l-.21.41-.22.34a.53.53,0,0,1-.14.12l-.52.2A.2.2,0,0,1,328.77,1039.25Z" />
                                            <path
                                                d="M331.53,1039.25h-.3a.32.32,0,0,1-.14,0l-.41-.2a.32.32,0,0,1-.12-.11l-.2-.3a.3.3,0,0,1,.08-.43.32.32,0,0,1,.43.08l.16.24.27.14h.16l.28-.14.22-.29,0-.29-.39.1h-.28l-.48-.12a.28.28,0,0,1-.15-.08l-.31-.3a.53.53,0,0,1-.08-.15l-.11-.58.11-.49a.42.42,0,0,1,.09-.14l.3-.31.08,0,.41-.21a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.08,0,.31.31a.3.3,0,0,1,.08.16l.1.5a.28.28,0,0,1,0,.13v.66l-.11.76a.24.24,0,0,1-.05.14l-.31.41a.48.48,0,0,1-.11.09l-.41.2A.32.32,0,0,1,331.53,1039.25Zm-.45-1.91.32.08h.13l.25-.07.19-.19.07-.27-.07-.34-.21-.21-.36-.15-.3.15-.21.21-.08.33.08.28Z" />
                                            <path
                                                d="M333.48,1039.25a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.3.3,0,0,1,333.48,1039.25Z" />
                                            <path
                                                d="M335,1039.15a.3.3,0,0,1-.3-.31v-1.33l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.29.29,0,0,1,.13.18l.1.41v1.4A.31.31,0,0,1,335,1039.15Z" />
                                            <path
                                                d="M336.55,1039.15a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.17,0-.36.45a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.23l.1.51v1.39A.31.31,0,0,1,336.55,1039.15Z" />
                                            <path
                                                d="M339.62,1039.15h-2.05a.31.31,0,0,1-.21-.53l1.4-1.3.35-.59v-.19l-.05-.14-.09,0-.08-.06-.11-.12h-.4l-.23.16-.07.25a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.36.36,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.1-.11.36-.24a.34.34,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.27.27,0,0,1,.15.18l.11.3a.34.34,0,0,1,0,.1v.31a.31.31,0,0,1,0,.13l-.1.21-.32.53a.2.2,0,0,1-.06.07l-.86.8h1.27a.3.3,0,0,1,.31.3A.31.31,0,0,1,339.62,1039.15Z" />
                                            <path
                                                d="M334.71,1013.77l-.12,0a.31.31,0,0,1-.17-.4l1.06-2.65H334.3a.31.31,0,1,1,0-.62h1.63a.3.3,0,0,1,.26.14.28.28,0,0,1,0,.28l-1.23,3.07A.31.31,0,0,1,334.71,1013.77Z" />
                                            <path
                                                d="M332.05,1027.38a.16.16,0,0,1-.1,0l-.31-.1a.29.29,0,0,1-.12-.07l-.2-.21a.25.25,0,0,1-.08-.12l-.1-.3a.31.31,0,0,1,.19-.39.3.3,0,0,1,.39.19l.08.24.1.1.2.07h.15l.22-.06.11-.17.09-.36v-.13l-.08-.39-.11-.16-.29-.07H332l-.1,0-.17.17a.3.3,0,0,1-.36.06.32.32,0,0,1-.16-.32l.2-1.33a.32.32,0,0,1,.31-.26h1a.31.31,0,1,1,0,.61H332l-.06.41h.31l.48.11a.3.3,0,0,1,.18.13l.21.31a.37.37,0,0,1,.05.11l.1.51v.26l-.11.49a.25.25,0,0,1,0,.09l-.21.31a.27.27,0,0,1-.18.13l-.41.1Z" />
                                            <path
                                                d="M407.17,951.54a.3.3,0,0,1-.3-.31v-3a.29.29,0,0,1,.3-.3h1.23l.3.1a.31.31,0,0,1,.18.16l.1.2.19.28a.34.34,0,0,1,.05.17v.3a.31.31,0,0,1-.09.22l-.17.17-.08.16a.3.3,0,0,1-.18.15l-.3.11h-.92v1.23A.31.31,0,0,1,407.17,951.54Zm.31-2.15h.77l.14,0,0-.09.06-.08.12-.11V949l-.22-.35-.14,0h-.77Z" />
                                            <path
                                                d="M408.91,951.54a.32.32,0,0,1-.26-.15l-.92-1.54a.31.31,0,0,1,.1-.42.3.3,0,0,1,.42.11l.93,1.53a.31.31,0,0,1-.11.42A.3.3,0,0,1,408.91,951.54Z" />
                                            <path
                                                d="M410.35,951.54h-.41a.23.23,0,0,1-.14,0l-.21-.1a.31.31,0,0,1-.16-.21l-.1-.51v-1.39a.31.31,0,1,1,.62,0v1.33l.07.3.32,0,.26-.43a.32.32,0,0,1,.43-.11.31.31,0,0,1,.1.42l-.31.52a.25.25,0,0,1-.12.11l-.21.1A.22.22,0,0,1,410.35,951.54Z" />
                                            <path
                                                d="M410.86,951.54a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,410.86,951.54Z" />
                                            <path
                                                d="M411.78,951.54a.31.31,0,0,1-.31-.31v-3a.31.31,0,0,1,.62,0v3A.31.31,0,0,1,411.78,951.54Z" />
                                            <path
                                                d="M411.78,950.92a.31.31,0,0,1-.24-.5l1.13-1.33a.31.31,0,0,1,.47.39L412,950.81A.27.27,0,0,1,411.78,950.92Z" />
                                            <path
                                                d="M413,951.54a.3.3,0,0,1-.24-.12l-.82-1A.3.3,0,0,1,412,950a.3.3,0,0,1,.43,0l.82,1a.31.31,0,0,1-.05.43A.3.3,0,0,1,413,951.54Z" />
                                            <path
                                                d="M414.44,951.54h-.31a.25.25,0,0,1-.14,0l-.2-.1a.29.29,0,0,1-.12-.1l-.2-.31a.18.18,0,0,1,0-.09l-.11-.41v-.28l.11-.58a.34.34,0,0,1,.05-.11l.2-.3a.32.32,0,0,1,.12-.11l.21-.1a.28.28,0,0,1,.13,0h.41l.3.11a.28.28,0,0,1,.16.12l.21.31a.42.42,0,0,1,0,.1l.1.52v.26l-.11.49a.36.36,0,0,1,0,.09l-.21.31a.33.33,0,0,1-.16.12l-.3.1Zm-.24-.62h.19l.16,0,.12-.18.09-.35v-.13l-.09-.39-.11-.17-.16-.06-.25,0-.13.19-.09.45v.14l.08.28Z" />
                                            <path
                                                d="M419.76,951.54a.31.31,0,0,1-.29-.21l-.7-2-.55,2a.31.31,0,0,1-.6-.16l.82-3a.31.31,0,0,1,.59,0l1,3a.3.3,0,0,1-.19.39Z" />
                                            <path
                                                d="M419.35,950.51h-1a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1a.31.31,0,0,1,.31.31A.3.3,0,0,1,419.35,950.51Z" />
                                            <path
                                                d="M420.68,951.54a.22.22,0,0,1-.13,0l-.21-.1a.16.16,0,0,1-.08-.06l-.2-.2A.25.25,0,0,1,420,951l-.1-.31a.31.31,0,0,1,.58-.19l.08.24.22.16H421l.22-.06.11-.17.09-.35v-.24l-.08-.28-.11-.16-.29-.08h-.16l-.1,0-.17.17a.3.3,0,0,1-.52-.26l.2-1.33a.32.32,0,0,1,.31-.26h1a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-.76l-.06.41H421l.48.11a.27.27,0,0,1,.18.13l.21.3a.42.42,0,0,1,0,.1l.1.41v.38l-.11.48a.3.3,0,0,1,0,.1l-.21.31a.3.3,0,0,1-.18.13l-.41.1Z" />
                                            <path
                                                d="M440.23,951.64a.3.3,0,0,1-.3-.31v-3a.29.29,0,0,1,.3-.3h1.12l.55.22a.31.31,0,0,1,.16.18l.1.31a.3.3,0,0,1,0,.1v.2a.36.36,0,0,1,0,.1l-.1.3a.25.25,0,0,1-.08.12l-.2.21a.24.24,0,0,1-.12.07l-.31.11h-.81v1.33A.31.31,0,0,1,440.23,951.64Zm.31-2.25h.67l.19-.07.1-.1.06-.29,0-.14-.31-.12h-.67Z" />
                                            <path
                                                d="M441.87,951.64a.31.31,0,0,1-.28-.18l-.72-1.64a.31.31,0,1,1,.56-.25l.72,1.64a.29.29,0,0,1-.16.4Z" />
                                            <path
                                                d="M443.4,951.64H443a.29.29,0,0,1-.22-.09l-.21-.21a.27.27,0,0,1-.08-.14l-.1-.41v-1.5a.31.31,0,1,1,.62,0v1.43l.07.25.05.06h.16l.08-.08.18-.37a.31.31,0,0,1,.41-.14.32.32,0,0,1,.14.42l-.21.4a.22.22,0,0,1-.05.08l-.21.21A.29.29,0,0,1,443.4,951.64Z" />
                                            <path
                                                d="M443.81,951.64a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,443.81,951.64Z" />
                                            <path
                                                d="M444.84,951.64a.31.31,0,0,1-.31-.31v-3a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v3A.3.3,0,0,1,444.84,951.64Z" />
                                            <path
                                                d="M444.84,951a.3.3,0,0,1-.18-.06.31.31,0,0,1-.07-.43l1-1.43A.31.31,0,0,1,446,949a.29.29,0,0,1,.07.42l-1,1.44A.33.33,0,0,1,444.84,951Z" />
                                            <path
                                                d="M446,951.54a.31.31,0,0,1-.26-.14l-.71-1.13a.31.31,0,0,1,.52-.33l.71,1.13a.31.31,0,0,1-.09.42A.34.34,0,0,1,446,951.54Z" />
                                            <path
                                                d="M447.6,951.54h-.41a.25.25,0,0,1-.14,0l-.2-.1-.34-.22a.34.34,0,0,1-.13-.2l-.1-.51v-.37l.11-.48a.39.39,0,0,1,.08-.14l.31-.31.08-.06.21-.1a.28.28,0,0,1,.13,0h.41a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.12.11l.21.3a.42.42,0,0,1,0,.1l.1.41v.38l-.11.57a.3.3,0,0,1-.08.16l-.21.21-.08,0-.2.1A.23.23,0,0,1,447.6,951.54Zm-.34-.62h.27l.09,0,.11-.11.08-.42v-.25l-.08-.28-.2-.23h-.27l-.09,0-.21.21-.08.33v.23l.07.33Z" />
                                            <path
                                                d="M452.72,951.54a.31.31,0,0,1-.29-.22l-.63-2-.63,2a.31.31,0,0,1-.59-.18l.93-2.87a.32.32,0,0,1,.58,0l.92,2.87a.3.3,0,0,1-.2.38Z" />
                                            <path
                                                d="M452.41,950.62h-1.12a.31.31,0,0,1,0-.62h1.12a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M454.15,951.54H454a.34.34,0,0,1-.17,0l-.48-.29a.35.35,0,0,1-.16-.18l-.2-.61a.43.43,0,0,1,0-.11v-.71l.22-.89a.42.42,0,0,1,0-.1l.2-.3a.31.31,0,0,1,.16-.12l.31-.11h.5l.31.11a.3.3,0,0,1,.18.15l.1.2a.32.32,0,0,1-.14.42.31.31,0,0,1-.41-.14l-.05-.09-.14-.05H454l-.16.05-.12.18-.08.33.14-.1a.34.34,0,0,1,.17,0h.2a.34.34,0,0,1,.17,0l.31.21.25.24a.36.36,0,0,1,.07.1l.2.51a.27.27,0,0,1,0,.12v.1a.27.27,0,0,1,0,.12l-.2.51a.33.33,0,0,1-.15.16l-.2.1-.28.19A.34.34,0,0,1,454.15,951.54Zm-.11-.62h0l.36-.22.14-.34-.16-.39-.16-.16-.2-.12-.34.28-.14.35.13.39Z" />
                                            <path
                                                d="M409.94,958a.28.28,0,0,1-.13,0,.31.31,0,0,1-.15-.41l1.23-2.64h-1.57a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h2.05a.31.31,0,0,1,.26.14.35.35,0,0,1,0,.3l-1.44,3.07A.3.3,0,0,1,409.94,958Z" />
                                            <path
                                                d="M412.7,957.88a.28.28,0,0,1-.13,0,.3.3,0,0,1-.15-.41l1.22-2.53h-1.45a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1.94a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.32.32,0,0,1,412.7,957.88Z" />
                                            <path
                                                d="M415.16,957.88a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.29.29,0,0,1,415.16,957.88Z" />
                                            <path
                                                d="M416.69,957.88a.3.3,0,0,1-.31-.3v-1.33l-.06-.28-.09,0h-.31l-.17.06-.35.44a.33.33,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.51a.3.3,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.33.33,0,0,1,.2.23l.1.51v1.4A.3.3,0,0,1,416.69,957.88Z" />
                                            <path
                                                d="M418.23,957.88a.3.3,0,0,1-.31-.3v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,0,1-.43,0,.33.33,0,0,1-.05-.44l.41-.51a.45.45,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.34.34,0,0,1,.21.23l.1.52v1.39A.29.29,0,0,1,418.23,957.88Z" />
                                            <path
                                                d="M421.19,957.88h-1.94a.3.3,0,0,1-.29-.19.33.33,0,0,1,.08-.34l1.4-1.3.35-.59v-.19l-.05-.14-.09,0-.08-.06-.12-.12h-.39l-.29.22-.11.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,.05-.17l.34-.45.36-.25a.34.34,0,0,1,.17-.05h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09v.31a.35.35,0,0,1,0,.14l-.11.2-.31.53-.06.07-.86.8h1.16a.31.31,0,0,1,.31.31A.3.3,0,0,1,421.19,957.88Z" />
                                            <path
                                                d="M441.46,956.45a.31.31,0,0,1-.28-.44l1.22-2.53H441a.31.31,0,1,1,0-.61h1.94a.29.29,0,0,1,.26.14.29.29,0,0,1,0,.3l-1.43,3A.32.32,0,0,1,441.46,956.45Z" />
                                            <path
                                                d="M444.53,956.45l-.57-.11a.36.36,0,0,1-.22-.16l-.2-.41a.31.31,0,0,1,.55-.28l.14.28.36.07h.35l.25-.07.19-.19.08-.33V955l-.07-.25-.09-.1-.2-.06h-.35a.31.31,0,0,1-.28-.18.29.29,0,0,1,0-.32l.51-.63h-1a.31.31,0,1,1,0-.61h1.64a.3.3,0,0,1,.27.17.3.3,0,0,1,0,.33l-.55.67.21.07a.32.32,0,0,1,.12.08l.2.2a.29.29,0,0,1,.08.14l.11.41v.38l-.12.49a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.4.1Z" />
                                            <path
                                                d="M446.78,956.45a.3.3,0,0,1-.3-.31V954.2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,446.78,956.45Z" />
                                            <path
                                                d="M448.32,956.45a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41a.35.35,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.2.41a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,448.32,956.45Z" />
                                            <path
                                                d="M449.85,956.45a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,1,1-.44-.44l.41-.41a.29.29,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,449.85,956.45Z" />
                                            <path
                                                d="M452.82,956.45h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.4-1.4.35-.63v-.09l-.11-.11a.16.16,0,0,1-.06-.08l-.05-.09-.13,0h-.42l-.14,0,0,.09-.06.08-.11.11v.08a.31.31,0,1,1-.62,0v-.2a.29.29,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.31-.11h.7l.31.11a.3.3,0,0,1,.18.15l.08.16.17.17a.34.34,0,0,1,.09.22v.3a.27.27,0,0,1-.06.17l-.2.31-.19.38a.35.35,0,0,1-.05.08l-.91.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,452.82,956.45Z" />
                                            <path
                                                d="M472.06,957.88a.31.31,0,0,1-.13,0,.3.3,0,0,1-.14-.41l1.22-2.53h-1.46a.29.29,0,0,1-.3-.3.3.3,0,0,1,.3-.31h1.95a.31.31,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.3.3,0,0,1,472.06,957.88Z" />
                                            <path
                                                d="M475.44,957.88a.3.3,0,0,1-.31-.3v-2.27h0l-.31.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.2-.39l.24-.08.35-.36a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,475.44,957.88Z" />
                                            <path
                                                d="M477.28,957.88a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,477.28,957.88Z" />
                                            <path
                                                d="M478.92,957.88a.3.3,0,0,1-.31-.3v-1.36l-.13-.28-.16-.1h-.23l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,478.92,957.88Z" />
                                            <path
                                                d="M480.46,957.88a.3.3,0,0,1-.31-.3v-1.36l-.23-.38h-.26l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.29.29,0,0,1,.22-.09h.51a.27.27,0,0,1,.21.09l.21.21.06.08.2.41a.31.31,0,0,1,0,.13v1.44A.29.29,0,0,1,480.46,957.88Z" />
                                            <path
                                                d="M483.43,957.88h-2.05a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l-.11-.23-.14-.05h-.49l-.1.05-.18.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.35.35,0,0,1,0-.14l.1-.2a.24.24,0,0,1,.06-.08l.2-.21.08,0,.21-.11a.31.31,0,0,1,.13,0h.62l.1,0,.3.1a.3.3,0,0,1,.18.15l.2.41a.25.25,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.31a.31.31,0,0,1,.3.31A.3.3,0,0,1,483.43,957.88Z" />
                                            <path
                                                d="M340.23,964.84h-.51a.35.35,0,0,1-.14,0l-.61-.31a.28.28,0,0,1-.15-.17l-.11-.31a.34.34,0,0,1,0-.1v-.41a.28.28,0,0,1,0-.09l.11-.31a.28.28,0,0,1,.12-.16l.24-.16-.29-.29a.29.29,0,0,1-.09-.22V962a.3.3,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.23-.2l.51-.1h.57l.49.11a.34.34,0,0,1,.18.13l.2.31a.26.26,0,0,1,0,.17v.3a.29.29,0,0,1-.09.22l-.28.29.24.16a.28.28,0,0,1,.12.16l.1.31a.29.29,0,0,1,0,.09v.41a.36.36,0,0,1,0,.1l-.1.31a.3.3,0,0,1-.16.17l-.61.31A.32.32,0,0,1,340.23,964.84Zm-.44-.61h.37l.44-.22,0-.14v-.31l-.05-.16-.22-.14-.39-.18h-.06l-.55.31-.06.16v.31l.05.14Zm-.13-1.82.32.05.31-.05.25-.25v-.09l-.09-.13-.29-.07h-.4l-.32.07,0,.09v.13Z" />
                                            <path
                                                d="M343,964.84a.31.31,0,0,1-.31-.29l-.08-2.29-.19.09a.3.3,0,1,1-.28-.54l.16-.09.38-.37a.31.31,0,0,1,.33-.07.32.32,0,0,1,.19.28l.1,3a.29.29,0,0,1-.29.31Z" />
                                            <path
                                                d="M344.84,964.84a.31.31,0,0,1-.31-.29l-.1-2a.31.31,0,0,1,.29-.32.3.3,0,0,1,.32.29l.11,2a.32.32,0,0,1-.3.32Z" />
                                            <path
                                                d="M346.37,964.84a.3.3,0,0,1-.3-.3v-1.36l-.23-.38h-.26l-.11.11-.54.43a.3.3,0,0,1-.43,0,.31.31,0,0,1,.05-.44l.69-.59a.27.27,0,0,1,.21-.09H346a.29.29,0,0,1,.21.09l.21.21a.22.22,0,0,1,.05.08l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,346.37,964.84Z" />
                                            <path
                                                d="M347.91,964.84a.3.3,0,0,1-.31-.3V963.1l-.06-.21-.13-.09h-.23L347,963l-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,347.91,964.84Z" />
                                            <path
                                                d="M350.88,964.84h-1.95a.3.3,0,0,1-.22-.51l1.33-1.44.43-.6v-.12l-.15-.23-.21-.07h-.41l-.31.12-.05.14v.15a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.21-.1.34-.12.1,0h.51l.1,0,.31.1a.37.37,0,0,1,.12.07l.1.11.24.35a.26.26,0,0,1,.05.17v.31a.26.26,0,0,1-.05.17l-.52.73-.87.94h1.24a.3.3,0,0,1,.3.31A.29.29,0,0,1,350.88,964.84Z" />
                                            <path
                                                d="M357.53,965.15l-.48-.11-.27-.13a.28.28,0,0,1-.15-.17l-.11-.31a.34.34,0,0,1,0-.1v-.41a.38.38,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.25-.25-.08-.08-.21-.31a.34.34,0,0,1-.05-.17v-.2a.34.34,0,0,1,.05-.17l.21-.31a.26.26,0,0,1,.11-.1l.41-.21a.35.35,0,0,1,.14,0H358l.12,0,.51.2a.37.37,0,0,1,.18.19l.1.31a.31.31,0,0,1,0,.1v.2a.34.34,0,0,1,0,.1l-.1.31a.35.35,0,0,1-.19.19l.21.21a.25.25,0,0,1,.08.12l.1.3a.44.44,0,0,1,0,.1v.41a.36.36,0,0,1,0,.1l-.1.31a.42.42,0,0,1-.08.12l-.1.1a.3.3,0,0,1-.16.08l-.51.1Zm-.36-.73.09.05.35.08H358l.35-.08.06-.18V964l-.06-.19-.2-.19-.4-.11-.41.1-.19.2-.07.19v.31Zm.15-1.78.49.18.5-.16,0-.22,0-.13-.33-.13h-.38l-.27.14-.11.18Z" />
                                            <path
                                                d="M361.63,965.15h-1.95a.32.32,0,0,1-.29-.19.33.33,0,0,1,.08-.34l1.38-1.29.18-.44a.41.41,0,0,1,.07-.11l.12-.11v-.09l-.22-.28-.18-.12h-.33l-.35.22-.05.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.31a.33.33,0,0,1,.16-.17l.2-.11.28-.18a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.45.34.25.36a.34.34,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.16.16-.18.46a.28.28,0,0,1-.08.11l-.86.8h1.17a.3.3,0,0,1,.3.3A.31.31,0,0,1,361.63,965.15Z" />
                                            <path
                                                d="M362.65,965.15a.31.31,0,0,1-.31-.31V962.9a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,362.65,965.15Z" />
                                            <path
                                                d="M364.18,965.15a.3.3,0,0,1-.3-.31v-1.33l-.06-.27-.09,0h-.32l-.17,0-.35.44a.31.31,0,1,1-.48-.38l.41-.51a.28.28,0,0,1,.14-.1l.31-.1.1,0h.4l.1,0,.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,364.18,965.15Z" />
                                            <path
                                                d="M365.72,965.15a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0H365l-.17,0-.36.44a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,365.72,965.15Z" />
                                            <path
                                                d="M368.69,965.15h-1.95a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.39-1.4.19-.37a.35.35,0,0,1,.05-.08l.12-.11v-.09l-.22-.28-.18-.12h-.33l-.28.22-.12.19a.31.31,0,1,1-.61,0v-.1a.34.34,0,0,1,0-.17l.35-.46.35-.24a.34.34,0,0,1,.17,0H368a.34.34,0,0,1,.17,0l.46.34.24.36a.34.34,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.17.17-.18.37a.21.21,0,0,1-.06.08l-.91.91h1.21a.29.29,0,0,1,.3.3A.3.3,0,0,1,368.69,965.15Z" />
                                            <path
                                                d="M469.81,952.56a.31.31,0,0,1-.31-.31v-3a.31.31,0,0,1,.31-.31h1.12l.55.23a.3.3,0,0,1,.16.17l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.31.31,0,0,1-.16.18l-.2.1-.35.12h-.81v1.33A.31.31,0,0,1,469.81,952.56Zm.31-2.25h.67l.31-.11,0-.15v-.2l0-.14-.31-.12h-.67Z" />
                                            <path
                                                d="M471.45,952.56a.29.29,0,0,1-.27-.17l-.82-1.64a.3.3,0,0,1,.13-.41.32.32,0,0,1,.42.14l.81,1.64a.3.3,0,0,1-.13.41A.35.35,0,0,1,471.45,952.56Z" />
                                            <path
                                                d="M472.88,952.56h-.3a.29.29,0,0,1-.22-.09l-.21-.2a.36.36,0,0,1-.08-.15l-.1-.41v-1.4a.31.31,0,1,1,.62,0v1.33l.06.25.12.06.11-.12.28-.37a.31.31,0,0,1,.43-.07.32.32,0,0,1,.06.43l-.31.41-.23.24A.31.31,0,0,1,472.88,952.56Z" />
                                            <path
                                                d="M473.39,952.56a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,473.39,952.56Z" />
                                            <path
                                                d="M474.42,952.56a.31.31,0,0,1-.31-.31v-3a.31.31,0,1,1,.62,0v3A.31.31,0,0,1,474.42,952.56Z" />
                                            <path
                                                d="M474.42,952a.28.28,0,0,1-.19-.07.31.31,0,0,1-.06-.43l1-1.33a.31.31,0,1,1,.48.38l-1,1.33A.3.3,0,0,1,474.42,952Z" />
                                            <path
                                                d="M475.54,952.56a.3.3,0,0,1-.26-.15l-.72-1.23a.31.31,0,1,1,.53-.31l.72,1.23a.32.32,0,0,1-.11.42A.29.29,0,0,1,475.54,952.56Z" />
                                            <path
                                                d="M477.18,952.56h-.41a.31.31,0,0,1-.22-.09l-.2-.2-.26-.17a.3.3,0,0,1-.13-.2l-.1-.51V951l.11-.49a.39.39,0,0,1,.08-.14l.31-.31a.31.31,0,0,1,.22-.09h.71a.3.3,0,0,1,.26.14l.2.31a.41.41,0,0,1,.05.09l.1.41v.38l-.11.57s0,.06,0,.08l-.1.21a.21.21,0,0,1-.06.08l-.2.2A.31.31,0,0,1,477.18,952.56Zm-.28-.61h.15l.08-.08.07-.13.09-.47V951l-.07-.28-.09-.13h-.43l-.15.15-.08.33v.23l.06.33.21.13Z" />
                                            <path
                                                d="M482.3,952.56a.3.3,0,0,1-.29-.21l-.63-2-.63,2a.3.3,0,0,1-.38.21.31.31,0,0,1-.21-.39l.92-3a.33.33,0,0,1,.59,0l.92,3a.31.31,0,0,1-.2.39Z" />
                                            <path d="M481.89,951.54h-1a.31.31,0,1,1,0-.62h1a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M483.73,953.17a.23.23,0,0,1-.11,0,.29.29,0,0,1-.17-.39l1-2.55h-1.09a.31.31,0,0,1,0-.62h1.54a.3.3,0,0,1,.25.14.28.28,0,0,1,0,.28L484,953A.3.3,0,0,1,483.73,953.17Z" />
                                            <text class="cls-10" transform="translate(339.01 956.07)">C57</text>
                                            <text class="cls-10" transform="translate(357.26 955.96)">C56</text>

                                            <polygon class="cls-1"
                                                points="391.12 511.57 390.52 543.67 372.8 543.47 373.47 511.2 391.12 511.57"
                                                id="A13" />
                                            <polygon class="cls-1"
                                                points="409.14 511.93 408.54 544.03 390.82 543.83 391.49 511.56 409.14 511.93"
                                                id="A12" />
                                            <polygon class="cls-1"
                                                points="426.89 512.22 426.3 544.32 408.87 544.11 409.53 511.85 426.89 512.22"
                                                id="A11" />
                                            <rect class="cls-1" x="426.92" y="512.33" width="17.42" height="32.11"
                                                transform="translate(9.16 -7.42) rotate(0.99)" id="A10" />
                                            <rect class="cls-1" x="444.86" y="512.74" width="17.42" height="32.11"
                                                transform="translate(9.17 -7.73) rotate(0.99)" id="A9" />
                                            <rect class="cls-1" x="462.83" y="513.05" width="17.42" height="32.11"
                                                transform="translate(9.18 -8.04) rotate(0.99)" id="A8" />
                                            <rect class="cls-1" x="480.64" y="513.33" width="17.42" height="32.11"
                                                transform="translate(9.18 -8.34) rotate(0.99)" id="A7" />
                                            <polygon class="cls-1"
                                                points="426.17 544.99 425.58 577.08 408.15 576.88 408.81 544.62 426.17 544.99"
                                                id="A16" />
                                            <rect class="cls-1" x="426.21" y="545.1" width="17.42" height="32.11"
                                                transform="translate(9.72 -7.4) rotate(0.99)" id="A17" />
                                            <rect class="cls-1" x="444.14" y="545.5" width="17.42" height="32.11"
                                                transform="translate(9.73 -7.71) rotate(0.99)" id="A18" />
                                            <rect class="cls-1" x="462.11" y="545.81" width="17.42" height="32.11"
                                                transform="translate(9.74 -8.02) rotate(0.99)" id="A19" />
                                            <rect class="cls-1" x="479.92" y="546.09" width="17.42" height="32.11"
                                                transform="translate(9.75 -8.33) rotate(0.99)" id="A20" />
                                            <polygon class="cls-1"
                                                points="517.75 546.48 517.16 578.58 499.44 578.37 500.11 546.11 517.75 546.48"
                                                id="A21" />
                                            <polygon class="cls-1"
                                                points="535.78 546.84 535.18 578.93 517.46 578.73 518.13 546.47 535.78 546.84"
                                                id="A22" />
                                            <polygon class="cls-1"
                                                points="553.52 547.13 552.94 579.22 535.51 579.02 536.16 546.76 553.52 547.13"
                                                id="A23" />
                                            <rect class="cls-1" x="571.5" y="547.64" width="17.42" height="32.11"
                                                transform="translate(9.79 -9.9) rotate(0.99)" id="A25" />
                                            <rect class="cls-1" x="589.47" y="547.95" width="17.42" height="32.11"
                                                transform="translate(9.79 -10.21) rotate(0.99)" id="A26" />
                                            <polygon class="cls-1"
                                                points="518.43 513.93 517.83 546.02 500.11 545.82 500.78 513.56 518.43 513.93"
                                                id="A6" />
                                            <polygon class="cls-1"
                                                points="536.45 514.29 535.85 546.38 518.14 546.18 518.8 513.92 536.45 514.29"
                                                id="A5" />
                                            <polygon class="cls-1"
                                                points="554.2 514.58 553.61 546.67 536.18 546.47 536.84 514.21 554.2 514.58"
                                                id="A4" />
                                            <rect class="cls-1" x="554.24" y="514.69" width="17.42" height="32.11"
                                                transform="translate(9.22 -9.61) rotate(0.99)" id="A3" />
                                            <rect class="cls-1" x="572.17" y="515.09" width="17.42" height="32.11"
                                                transform="translate(9.23 -9.92) rotate(0.99)" id="A2" />
                                            <polygon class="cls-1"
                                                points="408.42 544.7 407.82 576.79 390.11 576.59 390.77 544.33 408.42 544.7"
                                                id="A15" />
                                            <rect class="cls-1" x="553.56" y="547.24" width="17.42" height="32.11"
                                                transform="translate(9.78 -9.59) rotate(0.99)" id="A24" />
                                            <path
                                                d="M372.36,576.59a.28.28,0,0,1-.17-.26L373,510.7a.29.29,0,0,1,.27-.29.27.27,0,0,1,.27.28l-.76,65.63a.29.29,0,0,1-.28.29Z" />
                                            <path
                                                d="M598.57,539.77l-.48-.11a.3.3,0,0,1-.22-.2l-.1-.31a.31.31,0,1,1,.58-.19l0,.15.25.06h.23l.21-.06.21-.35,0-.3-.32.16a.25.25,0,0,1-.14,0h-.1l-.12,0-.51-.2-.1-.07-.21-.2a.35.35,0,0,1-.05-.08l-.21-.41a.32.32,0,0,1,0-.14v-.2a.32.32,0,0,1,0-.14l.21-.41.22-.34a.28.28,0,0,1,.2-.13l.67-.11.48.11a.28.28,0,0,1,.15.08l.3.31a.26.26,0,0,1,.09.17l.1.6a.21.21,0,0,1,0,.11v.56l-.11.76a.56.56,0,0,1,0,.12l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm-.13-1.9.38.16.51-.29.06-.24-.08-.45-.18-.17-.33-.09-.35.08-.13.21-.16.37.15.3Z" />
                                            <path
                                                d="M602,539.77h-.51a.32.32,0,0,1-.14,0l-.61-.31a.29.29,0,0,1-.16-.18l-.1-.3a.36.36,0,0,1,0-.1v-.41a.44.44,0,0,1,0-.1l.1-.3a.33.33,0,0,1,.12-.16l.18-.12-.06-.07-.2-.31a.26.26,0,0,1-.05-.17v-.3a.26.26,0,0,1,.05-.17l.2-.31a.34.34,0,0,1,.18-.13l.41-.1H602l.57.11a.3.3,0,0,1,.23.2l.1.31a.3.3,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.2a.32.32,0,0,1-.11.12l-.1.07.2.14a.28.28,0,0,1,.12.16l.11.3a.38.38,0,0,1,0,.1v.41a.34.34,0,0,1,0,.1l-.11.3a.24.24,0,0,1-.07.12l-.1.11-.1.07-.52.2Zm-.44-.61h.38l.4-.17.07-.19v-.31l-.06-.16-.21-.15-.39-.17h-.06l-.56.31-.05.16v.31l0,.14Zm-.28-1.9.48.13.33-.06.22-.19,0-.27-.34-.07h-.41l-.26.07-.09.13v.12Z" />
                                            <path
                                                d="M603.69,539.77a.31.31,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,603.69,539.77Z" />
                                            <path
                                                d="M605.22,539.77a.3.3,0,0,1-.3-.3V538l-.06-.22-.14-.09h-.22l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.4.35-.25a.37.37,0,0,1,.18,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,605.22,539.77Z" />
                                            <path
                                                d="M606.86,539.77a.3.3,0,0,1-.3-.3V538.1l-.14-.27-.16-.11H606l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.21.4a.35.35,0,0,1,0,.14v1.44A.31.31,0,0,1,606.86,539.77Z" />
                                            <path
                                                d="M613.62,569l-.49-.11a.29.29,0,0,1-.14-.08l-.1-.1a.36.36,0,0,1-.08-.12l-.21-.74a.3.3,0,0,1,0-.24l.2-.31.25-.26a.31.31,0,0,1-.18-.19l-.11-.31a.28.28,0,0,1,0-.09v-.31a.32.32,0,0,1,0-.14l.1-.2a.32.32,0,0,1,.14-.14l.41-.21a.32.32,0,0,1,.14,0h.61a.23.23,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.32.32,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.28.28,0,0,1-.12.16l.39.6a.27.27,0,0,1,.06.17v.41a.27.27,0,0,1-.06.17l-.34.45a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.68.32.08h.54l.3-.11.11-.18v-.23l-.29-.44-.38-.1,0,0-.37.09-.34.39Zm.08-1.81.5.17.45-.17,0-.11,0-.24-.25-.12h-.47l-.28.17Z" />
                                            <path
                                                d="M616.79,569l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.3a.37.37,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.25.25,0,0,1,.14,0l.4.2a.32.32,0,0,1,.14.14l.1.2a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.13l-.05-.12-.25-.12h-.17l-.28.14-.21.28,0,.29.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.26.26,0,0,1,.11.14l.21.51a.5.5,0,0,1,0,.12v.1a.35.35,0,0,1,0,.14l-.21.41a.35.35,0,0,1,0,.08l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.68.32.08.28-.08.22-.21.14-.29-.14-.35-.23-.15-.29-.15-.49.28-.07.34.08.35Z" />
                                            <path
                                                d="M618.74,569a.3.3,0,0,1-.31-.3v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.29.29,0,0,1,618.74,569Z" />
                                            <path
                                                d="M620.27,569a.3.3,0,0,1-.31-.3V567.3l0-.16-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1H620l.31.1a.36.36,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,620.27,569Z" />
                                            <path
                                                d="M621.91,569a.3.3,0,0,1-.31-.3v-1.36l-.17-.28h-.37l-.14.07-.46.37a.3.3,0,0,1-.43,0,.33.33,0,0,1,.05-.44l.51-.4.26-.14a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.33.33,0,0,1,0,.13v1.44A.3.3,0,0,1,621.91,569Z" />
                                            <path
                                                d="M624.88,569h-2a.3.3,0,0,1-.28-.18.3.3,0,0,1,.06-.34l1.43-1.43.25-.34.07-.32-.11-.31-.14,0h-.51l-.14,0-.12.37a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.28.28,0,0,1,0-.09l.22-.56a.34.34,0,0,1,.18-.15l.31-.1.1,0h.61l.1,0,.3.1a.3.3,0,0,1,.18.15l.1.21.12.35a.29.29,0,0,1,0,.09v.21a.44.44,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,624.88,569Z" />
                                            <path
                                                d="M394.89,566.59l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.32.32,0,0,1-.08-.12l-.2-.62h0a.3.3,0,0,1,0-.1v-.61s0,0,0-.08l.21-.72,0-.07.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.31.31,0,0,1,.22.2l.1.31a.31.31,0,0,1-.58.19l-.05-.15-.25-.06h-.23l-.21.06-.22.37-.09.31.38-.2a.35.35,0,0,1,.14,0h.1l.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28L396,566a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.32.08.28-.08.19-.18.08-.33v-.13l-.07-.25-.19-.19-.28-.07-.55.31-.11.22.14.43Z" />
                                            <path
                                                d="M397.65,566.59l-.48-.11a.34.34,0,0,1-.18-.13l-.21-.31,0-.07-.21-.62h0a.28.28,0,0,1,0-.09v-.71a.38.38,0,0,1,0-.1l.42-1.14a.29.29,0,0,1,.21-.18l.41-.1H398l.48.11a.35.35,0,0,1,.19.12l.2.31a.31.31,0,1,1-.51.34l-.14-.21-.29-.07h-.24l-.18,0-.21.55.32-.08h.28l.48.11a.27.27,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.27.27,0,0,1-.14.08l-.41.1Zm-.22-.68.3.07h.13l.25-.07.19-.18.08-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.21.06-.15.21-.12.26.15.46Z" />
                                            <path
                                                d="M399.7,566.59a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,399.7,566.59Z" />
                                            <path
                                                d="M401.24,566.59a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.16.16,0,0,1,.1,0h.41a.15.15,0,0,1,.09,0l.31.1a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,401.24,566.59Z" />
                                            <path
                                                d="M402.77,566.59a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0H402l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.41a.18.18,0,0,1,.1,0l.31.1a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,402.77,566.59Z" />
                                            <path
                                                d="M405.74,566.59h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.18l-.05-.1-.12-.12-.19-.06h-.41l-.14,0,0,.09-.06.08-.12.11V564a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.35.35,0,0,1,.18-.16l.3-.1h.71l.31.1a.42.42,0,0,1,.12.08l.2.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M412.8,567.1h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.4-.1H413l.48.11a.31.31,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.05-.15-.25-.06h-.23l-.23.06-.19.27,0,.29.57-.11.57.11a.39.39,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.36.36,0,0,1-.14.11l-.51.21Zm-.54-.9.2.13.3.15.35-.14.15-.23.15-.29-.28-.49-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M415.67,567.1h-.1a.32.32,0,0,1-.14,0l-.41-.21-.08-.05-.31-.31a.61.61,0,0,1-.07-.1l-.2-.52v0h0a.28.28,0,0,1,0-.09v-.71a.22.22,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.21-.16l.51-.11h.27l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.59.19l0-.14-.34-.06h-.14l-.31.07-.14.27-.08.3h0l.59-.12.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.05-.41.21A.31.31,0,0,1,415.67,567.1Zm-.33-.76.28.14.28-.14.21-.22.08-.32-.08-.28-.19-.19-.33-.08-.27.08-.22.21-.12.24.13.33Z" />
                                            <path
                                                d="M417.51,567.1a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,417.51,567.1Z" />
                                            <path
                                                d="M419.05,567.1a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.36.37a.31.31,0,1,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,419.05,567.1Z" />
                                            <path
                                                d="M420.58,567.1a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.22.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,420.58,567.1Z" />
                                            <path
                                                d="M421.6,567.1a.3.3,0,0,1-.21-.52l1.43-1.44.25-.33.07-.22v-.2l-.05-.14-.09,0a.21.21,0,0,1-.08-.06l-.11-.11h-.4l-.23.15-.06.26a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.11-.1.35-.24a.26.26,0,0,1,.17-.05h.61a.29.29,0,0,1,.22.09l.17.16.16.09a.28.28,0,0,1,.15.17l.11.31a.31.31,0,0,1,0,.1v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.9.91,1.26-.07a.32.32,0,0,1,.32.3.31.31,0,0,1-.29.32l-2.05.1Z" />
                                            <path
                                                d="M430.51,567.3l-.49-.11a.29.29,0,0,1-.14-.08l-.3-.3a.29.29,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41A.31.31,0,0,1,430,564l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.16.16,0,0,1,.08.06l.21.2a.31.31,0,1,1-.44.44l-.17-.17-.3-.15h-.16l-.28.14-.22.28,0,.29.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.29.29,0,0,1,.13.19l.11.68-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.68.32.08h.13l.25-.07.19-.19.08-.33-.07-.35-.21-.13-.37-.16-.51.29-.07.34.07.35Z" />
                                            <path
                                                d="M433.37,567.3l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.13l-.06-.12-.25-.12h-.16l-.28.14-.22.28,0,.29.33-.17a.31.31,0,0,1,.13,0h.11a.31.31,0,0,1,.13,0l.41.21.34.22a.24.24,0,0,1,.12.14l.2.51a.27.27,0,0,1,0,.12v.1a.37.37,0,0,1,0,.14l-.2.41-.06.08-.31.3a.25.25,0,0,1-.14.08Zm-.25-.68.33.08.28-.08.21-.21.14-.29-.14-.35-.22-.15-.29-.15-.5.28-.06.34.07.35Z" />
                                            <path
                                                d="M435.32,567.3a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,435.32,567.3Z" />
                                            <path
                                                d="M437,567.3a.31.31,0,0,1-.31-.28l-.15-1.63-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41.11,1.49a.29.29,0,0,1-.28.32Z" />
                                            <path
                                                d="M438.49,567.3a.29.29,0,0,1-.3-.3v-1.36l-.18-.28h-.37l-.14.07-.45.37a.31.31,0,0,1-.44,0,.33.33,0,0,1,.05-.44l.51-.4.26-.14a.35.35,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.31.31,0,0,1,0,.13V567A.3.3,0,0,1,438.49,567.3Z" />
                                            <path
                                                d="M441.46,567.3h-2a.3.3,0,0,1-.21-.52l1.43-1.43.25-.34.07-.32-.11-.31-.15,0h-.49l-.09,0-.12.12-.07.25a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.29.29,0,0,1,0-.09l.1-.31a.24.24,0,0,1,.07-.12l.21-.21.08,0,.2-.1a.23.23,0,0,1,.14,0h.61l.1,0,.31.1a.34.34,0,0,1,.18.15l.1.21.12.35a.28.28,0,0,1,0,.09v.21a.38.38,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,441.46,567.3Z" />
                                            <path
                                                d="M448.52,567.61h-.2l-.49-.11a.32.32,0,0,1-.18-.13l-.2-.3,0-.08-.2-.61h0s0-.05,0-.09v-.71s0,0,0-.08l.21-.72.22-.46a.32.32,0,0,1,.2-.16l.41-.1h.39l.48.11a.29.29,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.2.06L448,565l-.07.26.33-.09h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.27.27,0,0,1,.08.14l.1.41v.28l-.11.48a.34.34,0,0,1-.13.18l-.31.21-.44.22A.32.32,0,0,1,448.52,567.61Zm-.42-.68.29.08h.05l.53-.29.07-.3v-.13L449,566l-.2-.19-.32-.08h-.13l-.22.06L448,566l-.13.26.15.46Z" />
                                            <path
                                                d="M451.39,567.61h-.21a.31.31,0,0,1-.13,0l-.41-.2-.34-.23a.35.35,0,0,1-.14-.2l-.1-.61v-.78l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.14-.24-.07h-.24l-.22.07-.2.26,0,.29.39-.1h.28l.48.11a.29.29,0,0,1,.18.12l.21.31.22.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.2.41-.06.08-.2.21-.08.06-.41.2A.35.35,0,0,1,451.39,567.61Zm-.13-.61h.06l.3-.15.13-.14.15-.36-.29-.52-.3-.07h-.13l-.25.07-.19.19-.06.27.07.41.19.13Z" />
                                            <path
                                                d="M453.23,567.61a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,453.23,567.61Z" />
                                            <path
                                                d="M454.77,567.61a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H454l-.52.53a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.29.29,0,0,1,.22-.09h.51a.27.27,0,0,1,.21.09l.21.21.06.08.2.4a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,454.77,567.61Z" />
                                            <path
                                                d="M456.3,567.61a.31.31,0,0,1-.31-.31v-1.43l-.06-.21-.13-.1h-.22l-.23.16-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,456.3,567.61Z" />
                                            <path
                                                d="M459.27,567.61h-1.94a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.4-1.4.35-.63v-.12l-.15-.23-.21-.07h-.41l-.31.12,0,.14v.15a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.36.36,0,0,1,0-.1l.1-.31a.28.28,0,0,1,.15-.17l.21-.11.34-.11a.2.2,0,0,1,.1,0h.51a.16.16,0,0,1,.1,0l.31.1a.37.37,0,0,1,.12.07l.1.1.24.36a.26.26,0,0,1,.05.17v.31a.28.28,0,0,1-.05.17l-.2.3L459,566a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M466.23,567.92l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.23.23,0,0,1-.07-.1l-.21-.51a.51.51,0,0,1,0-.13V566s0-.05,0-.08l.21-.72,0-.1.3-.41.11-.09.41-.2a.32.32,0,0,1,.14,0h.2a.25.25,0,0,1,.12,0l.51.2a.37.37,0,0,1,.18.19l.1.31a.31.31,0,1,1-.58.19l-.06-.17-.4-.13-.28.14-.23.31-.08.29.38-.2a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.32.08.28-.07.19-.19.08-.33-.08-.28-.21-.21-.28-.14-.28.14-.23.23-.12.25.13.32Z" />
                                            <path
                                                d="M469,567.92l-.48-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.48.48,0,0,1,0-.12V566l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.53.53,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.12.11l.2.3a.31.31,0,0,1-.09.43.3.3,0,0,1-.42-.08l-.16-.24-.27-.14h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.4.21a.16.16,0,0,1,.08.06l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.27.27,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.33-.08-.28-.21-.21-.36-.15-.3.15-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M471,567.92a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,471,567.92Z" />
                                            <path
                                                d="M472.58,567.92a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.3.3,0,0,1,472.58,567.92Z" />
                                            <path
                                                d="M474.11,567.92a.31.31,0,0,1-.31-.31v-1.33l-.05-.27-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.3-.1.1,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,474.11,567.92Z" />
                                            <path
                                                d="M477.08,567.92h-1.95a.32.32,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.32-.46v-.15l-.22-.28-.18-.12h-.33l-.28.22-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.26.26,0,0,1,.17,0h.51a.26.26,0,0,1,.17,0l.46.34.24.36a.26.26,0,0,1,0,.17v.3a.32.32,0,0,1,0,.14l-.1.21-.34.45-.94.95h1.21a.3.3,0,0,1,.31.3A.31.31,0,0,1,477.08,567.92Z" />
                                            <path
                                                d="M484,568.43l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.17l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.4-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.05-.15-.25-.06H484l-.23.07-.19.26-.05.29.57-.11.49.12a.29.29,0,0,1,.14.08l.31.3a.35.35,0,0,1,.05.08l.21.41a.35.35,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.22.22,0,0,1-.05.08l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.32.09.28-.08.22-.22.15-.36-.15-.3-.22-.21-.32-.08-.28.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M486.9,568.43l-.57-.11a.26.26,0,0,1-.19-.13l-.21-.31,0-.07-.21-.61v0h0a.28.28,0,0,1,0-.09v-.71a.25.25,0,0,1,0-.08l.2-.72.23-.46a.31.31,0,0,1,.21-.16l.51-.11h.27l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.59.19l0-.14-.34-.06h-.15l-.3.07-.14.27-.07.27.62-.1.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41v.27l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.32-.68.38.07.3-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08-.35.08-.26.46.15.46Z" />
                                            <path
                                                d="M488.85,568.43a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,488.85,568.43Z" />
                                            <path
                                                d="M490.38,568.43a.31.31,0,0,1-.3-.31v-1.43l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,1,1-.44-.44l.41-.41.12-.07.31-.1.1,0H490l.09,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,490.38,568.43Z" />
                                            <path
                                                d="M491.92,568.43a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,491.92,568.43Z" />
                                            <path
                                                d="M495,568.43h-2.05a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.18l-.05-.1-.23-.18h-.49l-.14,0,0,.09-.06.08-.05.05h0a.31.31,0,0,1-.13.42.32.32,0,0,1-.42-.14l-.1-.21a.31.31,0,0,1,.06-.35l.17-.17.08-.16a.27.27,0,0,1,.18-.15l.3-.11h.71a.32.32,0,0,1,.14,0l.21.1.08.06.2.21.06.08.1.2a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.36.36,0,0,1,0,.09l-.31.4-.94,1H495a.3.3,0,0,1,.31.3A.31.31,0,0,1,495,568.43Z" />
                                            <path
                                                d="M504.2,568.74l-.48-.11a.47.47,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.09-.17l-.1-.61a.33.33,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.24l-.22.06-.2.27,0,.29.57-.11.48.11a.39.39,0,0,1,.14.08l.31.31.06.08.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.23.34a.29.29,0,0,1-.19.13Zm-.25-.69.33.08.35-.08.14-.2.15-.37-.15-.3-.21-.21-.33-.08L504,567l-.19.19-.06.28.07.44Z" />
                                            <path
                                                d="M507.07,568.74l-.57-.11a.34.34,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0a.31.31,0,0,1,0-.1v-.71a.19.19,0,0,1,0-.08l.21-.72.22-.46a.3.3,0,0,1,.22-.17l.51-.1h.26l.57.1a.34.34,0,0,1,.24.21l.1.31a.3.3,0,0,1-.2.38.29.29,0,0,1-.38-.19l-.05-.14-.34-.07h-.14l-.3.06-.14.28-.08.27.62-.1.48.11a.36.36,0,0,1,.15.08l.3.31a.42.42,0,0,1,.09.14l.1.41v.28l-.11.49a.42.42,0,0,1-.09.14l-.3.31a.53.53,0,0,1-.15.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.32-.08-.36.07-.26.47.15.46Z" />
                                            <path
                                                d="M509,568.74a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,509,568.74Z" />
                                            <path
                                                d="M510.55,568.74a.31.31,0,0,1-.31-.31V567l-.05-.17-.1,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,510.55,568.74Z" />
                                            <path
                                                d="M512.08,568.74a.3.3,0,0,1-.3-.31V567l0-.17-.11,0h-.31l-.19.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,512.08,568.74Z" />
                                            <path
                                                d="M515.15,568.74h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.18l0-.1-.23-.18h-.5l-.14.05-.11.23v.13a.31.31,0,1,1-.62,0V566a.33.33,0,0,1,0-.13l.2-.41a.31.31,0,0,1,.18-.16l.31-.1h.71a.35.35,0,0,1,.14,0l.2.1a.16.16,0,0,1,.08.06l.2.2a.21.21,0,0,1,.06.08l.1.21a.22.22,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41-.94.94h1.3a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M522.32,568.94h-.21a.31.31,0,0,1-.13,0l-.41-.2-.34-.23a.3.3,0,0,1-.13-.2l-.11-.61v-.77l.1-.76a.39.39,0,0,1,.06-.15l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l0-.14-.24-.07h-.24l-.22.07-.2.26,0,.29.39-.09h.28l.48.11a.27.27,0,0,1,.18.13l.21.3.22.45a.28.28,0,0,1,0,.13v.1a.25.25,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.2.21-.08.06-.41.2A.35.35,0,0,1,522.32,568.94Zm-.13-.61h.06l.3-.15.12-.13.15-.38-.28-.51-.3-.07h-.13l-.24.07-.19.19-.07.27.07.41.2.14Z" />
                                            <path
                                                d="M525.08,568.94H525a.35.35,0,0,1-.14,0l-.41-.2-.08-.06-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76A.39.39,0,0,1,524,566l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l0-.14-.25-.07H525l-.23.07-.19.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.31.05.07.21.41a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41a.22.22,0,0,1-.05.08l-.31.31-.08.06-.41.2A.32.32,0,0,1,525.08,568.94Zm-.33-.76.28.14.28-.14.24-.24.14-.28-.14-.28-.21-.21-.33-.08-.28.08-.19.19-.07.27.08.34Z" />
                                            <path
                                                d="M526.93,568.94a.31.31,0,0,1-.31-.3v-2a.31.31,0,1,1,.61,0v2A.31.31,0,0,1,526.93,568.94Z" />
                                            <path
                                                d="M528.46,568.94a.31.31,0,0,1-.31-.3V567.2l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,528.46,568.94Z" />
                                            <path
                                                d="M530.1,568.94a.31.31,0,0,1-.31-.3v-1.37l-.23-.37h-.26l-.11.11-.54.43a.3.3,0,0,1-.43-.05.3.3,0,0,1,0-.43l.69-.59a.29.29,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.2.21.06.08.2.41a.28.28,0,0,1,0,.13v1.44A.3.3,0,0,1,530.1,568.94Z" />
                                            <path
                                                d="M533.07,568.94H531a.28.28,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.44-1.43.24-.34.07-.21v-.21l-.11-.24-.18-.12h-.43l-.23.16-.07.25a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.3a.36.36,0,0,1,.08-.12l.1-.11.36-.24a.31.31,0,0,1,.17,0h.61a.34.34,0,0,1,.17,0l.46.35a.24.24,0,0,1,.07.12l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M539.92,569.25l-.48-.11a.34.34,0,0,1-.18-.13l-.21-.31-.23-.56a.5.5,0,0,1,0-.12v-.72l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.53.53,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2.08.06.2.21a.3.3,0,1,1-.43.43l-.17-.17-.3-.15H540l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.21a.25.25,0,0,1,.14,0l.41.2.33.22a.35.35,0,0,1,.14.2l.1.67-.11.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08l-.41.1Zm-.22-.68.3.07h.13l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.52.28-.06.3.17.43Z" />
                                            <path
                                                d="M542.79,569.25l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.11-.75a.39.39,0,0,1,.06-.15l.3-.41.11-.09.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.13.41.33.33,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.16a.25.25,0,0,1,.14,0h.1l.12,0,.51.21a.23.23,0,0,1,.1.07l.21.2a.24.24,0,0,1,.06.11l.21.51a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.3.3,0,0,1-.2.13Zm-.25-.69.32.08.36-.07.13-.21.15-.3-.15-.38-.12-.11-.38-.16-.5.28-.07.35.07.34Z" />
                                            <path
                                                d="M544.73,569.25a.3.3,0,0,1-.3-.31V567a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,544.73,569.25Z" />
                                            <path
                                                d="M546.37,569.25a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.14.07-.45.38a.31.31,0,1,1-.39-.48l.51-.41.26-.14a.35.35,0,0,1,.14,0H546a.32.32,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,546.37,569.25Z" />
                                            <path
                                                d="M547.91,569.25a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.3.3,0,0,1,547.91,569.25Z" />
                                            <path
                                                d="M550.88,569.25h-2a.31.31,0,0,1-.28-.18.3.3,0,0,1,.06-.34L550,567.3l.43-.62-.22-.35-.14-.05h-.49l-.1.05-.12.12-.06.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.2-.2.08-.06.21-.1a.32.32,0,0,1,.14,0h.71l.3.11a.3.3,0,0,1,.18.15l.1.2.19.28a.34.34,0,0,1,.05.17v.2a.34.34,0,0,1-.05.17l-.52.73-.88.95h1.25a.29.29,0,0,1,.3.3A.3.3,0,0,1,550.88,569.25Z" />
                                            <path
                                                d="M557.94,569.76h-.1l-.12,0-.51-.21a.21.21,0,0,1-.1-.06l-.21-.21a.24.24,0,0,1-.07-.12l-.21-.61h0a.31.31,0,0,1,0-.1v-.71a.25.25,0,0,1,0-.08l.2-.72.23-.46a.31.31,0,0,1,.21-.16l.52-.11H558l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.59.19l0-.14-.34-.06h-.14l-.31.07-.14.28-.07.26.62-.09.48.11a.25.25,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.58a.28.28,0,0,1-.13.19l-.3.2-.44.23A.35.35,0,0,1,557.94,569.76Zm-.44-.77.38.15.5-.28.08-.39-.08-.29-.19-.19-.33-.08-.35.08-.26.46.14.43Z" />
                                            <path
                                                d="M560.8,569.76h-.2a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.2l-.1-.61a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.41-.1h.38l.48.11a.29.29,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.32.32,0,0,1-.43-.08l-.13-.21-.3-.08h-.23l-.23.07-.19.26,0,.29.4-.1h.27l.49.11a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.57a.28.28,0,0,1-.13.2l-.31.2-.44.23A.32.32,0,0,1,560.8,569.76Zm-.13-.61h.06l.51-.29.08-.39-.07-.29-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M562.65,569.76a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,562.65,569.76Z" />
                                            <path
                                                d="M564.18,569.76a.31.31,0,0,1-.31-.31V568l-.06-.22-.13-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,564.18,569.76Z" />
                                            <path
                                                d="M565.72,569.76a.31.31,0,0,1-.31-.31V568l-.06-.22-.14-.09H565l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.11.41v1.5A.3.3,0,0,1,565.72,569.76Z" />
                                            <path
                                                d="M568.68,569.76h-1.94a.31.31,0,0,1-.22-.52l1.4-1.4.35-.63v-.12l-.15-.23-.2-.07h-.41l-.25.12-.11.18v.11a.31.31,0,0,1-.62,0V567a.27.27,0,0,1,.06-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.11h.71l.3.11a.24.24,0,0,1,.12.07l.11.1.24.36a.34.34,0,0,1,0,.17v.3a.31.31,0,0,1,0,.17l-.21.31-.18.38-.06.08-.91.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,568.68,569.76Z" />
                                            <path
                                                d="M575.64,570l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.45.45,0,0,1,0-.12V568l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0H576a.23.23,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.13l-.06-.12-.25-.12h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.11a.31.31,0,0,1,.13,0l.41.21.08,0,.31.31.06.08.2.41a.33.33,0,0,1,0,.14v.1a.33.33,0,0,1,0,.14l-.2.41-.06.08-.31.3a.22.22,0,0,1-.14.08Zm-.25-.69.33.08.28-.08.21-.21.14-.28-.14-.28-.23-.24-.28-.14-.28.14-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M578.51,570l-.57-.11a.39.39,0,0,1-.2-.13l-.2-.31-.23-.56v0s0-.06,0-.09V568s0-.06,0-.08l.21-.72.22-.46a.33.33,0,0,1,.16-.15l.52-.2a.2.2,0,0,1,.11,0h.21a.22.22,0,0,1,.13,0l.41.2.08.06.21.2a.31.31,0,0,1-.44.44l-.17-.17-.37-.15-.35.14-.15.3-.07.25.4-.16.11,0h.1a.32.32,0,0,1,.14,0l.41.21.08,0,.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32-.07-.28-.22-.22-.29-.14-.35.14-.27.48.15.39Z" />
                                            <path
                                                d="M580.46,570a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.61,0v1.95A.31.31,0,0,1,580.46,570Z" />
                                            <path
                                                d="M582,570a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.17.06-.36.44a.31.31,0,0,1-.43.05.3.3,0,0,1,0-.43l.4-.52a.29.29,0,0,1,.15-.09l.3-.11h.61l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,582,570Z" />
                                            <path
                                                d="M583.53,570a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,583.53,570Z" />
                                            <path
                                                d="M586.49,570h-1.94a.31.31,0,0,1-.22-.53l1.44-1.43.31-.47v-.19l0-.13-.35-.22h-.33l-.29.21-.11.2a.31.31,0,0,1-.62,0v-.11a.27.27,0,0,1,.06-.17l.34-.45.36-.24a.27.27,0,0,1,.17-.06h.51a.27.27,0,0,1,.17.06l.48.28a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09v.31a.32.32,0,0,1,0,.14l-.11.2-.33.46-.94.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M395.5,534l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.1-.76a.39.39,0,0,1,.06-.15l.31-.41a.53.53,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.25.25,0,0,1,.13.14l.11.21a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.11a.23.23,0,0,1,.11,0l.51.2a.26.26,0,0,1,.1.07l.21.2a.41.41,0,0,1,.07.11l.2.51a.2.2,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.09.35-.08.14-.21.14-.29-.15-.39-.11-.11-.39-.16-.5.28-.06.35.07.34Z" />
                                            <path
                                                d="M398.37,534l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.23.23,0,0,1-.07-.1l-.21-.51h0a.5.5,0,0,1,0-.12v-.7s0-.06,0-.09l.21-.72a.47.47,0,0,1,.05-.1l.3-.4a.52.52,0,0,1,.11-.1l.41-.2a.35.35,0,0,1,.14,0h.2l.12,0,.51.2a.29.29,0,0,1,.16.15l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l-.05-.1-.42-.14-.28.14-.23.31-.08.29.38-.19a.23.23,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2.34.22a.34.34,0,0,1,.13.2l.11.67-.11.49a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.32.09.28-.08.19-.19.08-.33-.08-.35-.2-.14-.29-.14-.52.29-.12.31.14.34Z" />
                                            <path
                                                d="M400.31,534a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,400.31,534Z" />
                                            <path
                                                d="M401.85,534a.31.31,0,0,1-.31-.31V532.3l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.22l.1.41v1.5A.31.31,0,0,1,401.85,534Z" />
                                            <path
                                                d="M403.49,534a.31.31,0,0,1-.31-.31v-1.36l-.12-.23-.13,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0H403l.09,0,.31.1a.3.3,0,0,1,.18.15l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,403.49,534Z" />
                                            <path
                                                d="M406.46,534h-2a.28.28,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.43-1.44.25-.33.07-.32-.06-.19-.21-.17h-.49l-.14,0-.12.36a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.22-.55a.3.3,0,0,1,.18-.15l.31-.11h.71a.35.35,0,0,1,.14,0l.2.1.08.06.21.2a.75.75,0,0,1,.07.12l.1.31a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1-.05.09l-.3.4-.94.95h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,406.46,534Z" />
                                            <path
                                                d="M413.52,534.55h-.21a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.35.35,0,0,1-.14-.2l-.1-.61v-.78l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.31.31,0,0,1,.19.13l.2.31a.31.31,0,0,1-.51.34l-.14-.21-.29-.08h-.24l-.22.07-.2.26,0,.29.39-.1h.28l.48.11a.22.22,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.1.58a.3.3,0,0,1-.14.19l-.3.21-.44.22A.35.35,0,0,1,413.52,534.55Zm-.13-.61h.06l.51-.29.08-.39L414,533l-.19-.19-.33-.08h-.13l-.25.07-.19.19-.06.27.07.41.19.13Z" />
                                            <path
                                                d="M416.28,534.55h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.2l-.1-.61a.2.2,0,0,1,0-.11v-.67l.11-.75a.39.39,0,0,1,.06-.15l.3-.41a.42.42,0,0,1,.18-.11l.41-.1h.38l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l0-.14-.25-.07h-.23l-.23.07-.19.26-.05.29.57-.1.49.11a.29.29,0,0,1,.14.08l.3.3a.21.21,0,0,1,.06.08l.21.41a.35.35,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.26.26,0,0,1-.11.14l-.31.21-.44.22A.32.32,0,0,1,416.28,534.55Zm-.54-.9.2.13.29.15.52-.3.14-.35-.14-.29-.22-.21-.32-.08-.28.08-.19.19-.07.27Z" />
                                            <path
                                                d="M418.12,534.55a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,418.12,534.55Z" />
                                            <path
                                                d="M419.76,534.55a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.29.29,0,0,1,.1.12l.21.4a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,419.76,534.55Z" />
                                            <path
                                                d="M421.3,534.55a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26L420,533a.31.31,0,0,1-.44-.44l.62-.61a.29.29,0,0,1,.22-.09h.51a.27.27,0,0,1,.21.09l.21.21.06.08.2.4a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,421.3,534.55Z" />
                                            <path
                                                d="M424.27,534.55h-2a.3.3,0,0,1-.29-.19A.31.31,0,0,1,422,534l1.43-1.44.25-.33.07-.21v-.21l-.06-.19-.19-.07H423l-.23.12,0,.14V532a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.34.34,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.16-.17l.41-.21a.31.31,0,0,1,.13,0h.62a.2.2,0,0,1,.1,0l.3.1a.24.24,0,0,1,.12.07l.11.1a.75.75,0,0,1,.07.12l.1.31a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M431.12,534.76l-.48-.11a.3.3,0,0,1-.18-.13l-.21-.31-.23-.56v0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.32.32,0,0,1,.14-.14l.41-.2a.28.28,0,0,1,.13,0h.31a.37.37,0,0,1,.14,0l.41.2a.41.41,0,0,1,.12.11l.2.3a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.27-.13h-.16l-.26.12-.16.32-.06.24.27-.14a.31.31,0,0,1,.13,0h.21a.28.28,0,0,1,.13,0l.41.21.08.05.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.34.34,0,0,1-.14.09l-.41.1Zm-.22-.68.3.07h.13l.25-.07.19-.19.08-.32-.08-.28-.22-.22-.35-.15-.28.14-.28.49.15.39Z" />
                                            <path
                                                d="M434,534.76l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.31a.33.33,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.13.42.32.32,0,0,1-.42-.14l0-.11-.26-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.18.13l-.41.1Zm-.25-.69.32.08h.13l.22-.06.14-.21.14-.29-.3-.53-.33-.14-.3.15-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M436,534.76a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.3.3.3,0,0,1,.3.3v2A.3.3,0,0,1,436,534.76Z" />
                                            <path
                                                d="M437.57,534.76a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.08,0-.36.46a.33.33,0,0,1-.44.05.3.3,0,0,1,0-.43l.41-.51a.22.22,0,0,1,.1-.09l.2-.1a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,437.57,534.76Z" />
                                            <path
                                                d="M439.11,534.76a.31.31,0,0,1-.31-.31V533l-.05-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,439.11,534.76Z" />
                                            <path
                                                d="M442.07,534.76h-1.94a.32.32,0,0,1-.28-.19.31.31,0,0,1,0-.33l1.34-1.43.43-.53v-.09l-.22-.29-.18-.11h-.33l-.35.21,0,.2a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.1a.31.31,0,0,1,0-.1l.1-.31a.31.31,0,0,1,.16-.18l.2-.1.28-.18a.27.27,0,0,1,.17-.06h.51a.27.27,0,0,1,.17.06l.45.34.25.36a.31.31,0,0,1,0,.17v.3a.31.31,0,0,1-.09.22l-.21.2-.27.38-.88.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M449,535l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.24.24,0,0,1-.07-.12l-.21-.61h0a.31.31,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.21-.62.33-.57a.3.3,0,0,1,.19-.14l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l0-.14-.34-.06H449l-.2.06-.25.41-.05.16h0l.59-.12.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.28-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08-.27.08-.22.21-.13.25.15.43Z" />
                                            <path
                                                d="M451.8,535l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.11-.66a.25.25,0,0,1,0-.11l.31-.51a.31.31,0,0,1,.18-.14l.41-.1h.39l.48.11a.29.29,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21L452,532h-.23l-.21.06-.22.36,0,.2.38-.1H452l.49.12a.29.29,0,0,1,.14.08l.31.3a.36.36,0,0,1,.08.15l.1.41v.28l-.11.48a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.32.09H452l.25-.07.19-.19.08-.33v-.13l-.06-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M453.85,535a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.61,0v1.94A.31.31,0,0,1,453.85,535Z" />
                                            <path
                                                d="M455.38,535a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0H455l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,455.38,535Z" />
                                            <path
                                                d="M456.92,535a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,1,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,456.92,535Z" />
                                            <path
                                                d="M459.88,535h-1.94a.28.28,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.44-1.44.24-.33.07-.22v-.12l-.11-.12-.06-.08,0-.09-.14,0h-.41l-.14,0-.05.09a.16.16,0,0,1-.06.08l-.11.12v.07a.31.31,0,1,1-.62,0v-.2a.36.36,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.31-.1a.16.16,0,0,1,.1,0h.51a.15.15,0,0,1,.09,0l.31.1a.3.3,0,0,1,.18.15l.08.16.17.17a.31.31,0,0,1,.09.22v.3a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,459.88,535Z" />
                                            <path
                                                d="M467,535.37h-.11a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.6v-.78l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l-.05-.15-.24-.06h-.24l-.22.07-.2.26,0,.29.57-.11.48.12a.29.29,0,0,1,.14.08l.31.3.06.08.2.41a.35.35,0,0,1,0,.14v.1a.25.25,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.21.21a.17.17,0,0,1-.1.06l-.51.21Zm-.54-.9.19.13.3.15.39-.15.11-.12.15-.38-.14-.29-.21-.21-.33-.08-.28.08-.19.19-.06.27Z" />
                                            <path
                                                d="M469.81,535.37h-.1a.32.32,0,0,1-.14,0l-.41-.21-.08,0-.3-.31a.3.3,0,0,1-.07-.1l-.21-.52a0,0,0,0,0,0,0h0a.28.28,0,0,1,0-.09v-.71s0-.05,0-.08l.21-.72.22-.46a.33.33,0,0,1,.22-.16l.51-.11h.26l.58.11a.33.33,0,0,1,.23.2l.1.31a.31.31,0,1,1-.58.19l-.05-.14-.34-.06h-.14l-.3.07-.14.27-.08.27.62-.1.49.12a.29.29,0,0,1,.14.08l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31-.08,0-.41.21A.32.32,0,0,1,469.81,535.37Zm-.33-.76.28.14.28-.14.21-.22.08-.32-.08-.28-.19-.19-.32-.08-.36.08-.26.45.13.33Z" />
                                            <path
                                                d="M471.65,535.37a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,471.65,535.37Z" />
                                            <path
                                                d="M473.19,535.37a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,473.19,535.37Z" />
                                            <path
                                                d="M474.73,535.37a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09H474l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,474.73,535.37Z" />
                                            <path
                                                d="M477.8,535.37h-2.05a.28.28,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.43-1.44.25-.33.07-.22v-.2l0-.14-.09,0a.16.16,0,0,1-.08-.06l-.12-.11h-.39l-.23.15-.07.26a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.1-.1.35-.24a.29.29,0,0,1,.18,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.31.31,0,0,1,.15.17l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.3.4-.94,1h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,477.8,535.37Z" />
                                            <path
                                                d="M484.65,535.78l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.48.48,0,0,1,0-.12v-.66l.1-.76a.39.39,0,0,1,.06-.15l.31-.41a.53.53,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0H485a.35.35,0,0,1,.14,0l.41.2a.29.29,0,0,1,.13.14l.11.21a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.21a.25.25,0,0,1,.14,0l.4.2a.24.24,0,0,1,.08.06l.21.2a.41.41,0,0,1,.07.11l.2.51a.2.2,0,0,1,0,.11v.1l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.22.22,0,0,1-.14.08l-.41.1Zm-.25-.69.33.09h.13l.25-.07.19-.19.07-.3-.16-.4-.12-.12-.36-.15-.52.28-.07.35.08.34Z" />
                                            <path
                                                d="M487.52,535.78l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.17l-.1-.6a.21.21,0,0,1,0-.11v-.56l.11-.76a.25.25,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.4-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.05-.15-.25-.06h-.23l-.21.06-.21.35,0,.3.32-.16a.23.23,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2.34.22a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.3.31a.29.29,0,0,1-.14.08Zm-.25-.69.32.09.28-.08.22-.22.15-.36-.14-.27-.24-.16-.29-.14-.5.28-.06.24.08.45Z" />
                                            <path
                                                d="M489.46,535.78a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,489.46,535.78Z" />
                                            <path
                                                d="M491,535.78a.31.31,0,0,1-.31-.31V534l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,491,535.78Z" />
                                            <path
                                                d="M492.64,535.78a.31.31,0,0,1-.31-.31v-1.36l-.18-.27h-.36l-.14.07-.46.37a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.51-.41.26-.14a.32.32,0,0,1,.14,0h.51a.28.28,0,0,1,.13,0l.21.11a.29.29,0,0,1,.14.13l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,492.64,535.78Z" />
                                            <path
                                                d="M495.61,535.78h-2.05a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.32-.11-.31-.14-.05h-.49l-.1.05-.12.12-.06.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.2-.2.08-.06.21-.1a.31.31,0,0,1,.13,0H495l.3.11a.3.3,0,0,1,.18.15l.1.2.12.35a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.3.4-.94.95h1.31a.3.3,0,0,1,.3.3A.31.31,0,0,1,495.61,535.78Z" />
                                            <path
                                                d="M504.82,536.09l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.3a.33.33,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,1,1-.55.28l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.2.2a.36.36,0,0,1,.07.1l.21.51a.5.5,0,0,1,0,.12v.1l-.11.49a.42.42,0,0,1-.09.14l-.3.3a.42.42,0,0,1-.14.09l-.41.1Zm-.26-.69.33.08H505l.25-.07.19-.19.07-.29-.16-.4-.12-.13-.36-.15-.51.29-.07.34.07.35Z" />
                                            <path
                                                d="M507.68,536.09l-.48-.11-.14-.08-.31-.31a.42.42,0,0,1-.09-.16l-.1-.5a.56.56,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.28.28,0,0,1,.13,0H508l.48.12a.28.28,0,0,1,.22.2l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.16l-.28.14-.22.29,0,.28.33-.17a.28.28,0,0,1,.13,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.32.32,0,0,1,.11.12l.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.06.08-.31.31-.14.08Zm-.25-.69.33.08.27-.08.22-.21.15-.36-.14-.27-.24-.16-.29-.15-.49.28-.07.34.08.35Z" />
                                            <path
                                                d="M509.63,536.09a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,509.63,536.09Z" />
                                            <path
                                                d="M511.16,536.09a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,511.16,536.09Z" />
                                            <path
                                                d="M512.8,536.09a.31.31,0,0,1-.31-.31v-1.36l-.17-.28H512l-.14.07-.46.38a.31.31,0,1,1-.38-.48l.51-.41.26-.14a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,512.8,536.09Z" />
                                            <path
                                                d="M515.77,536.09h-2a.32.32,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.31-.12-.31-.14,0h-.49l-.09,0-.12.11-.07.25a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.16.16,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.21-.2a.16.16,0,0,1,.08-.06l.2-.1a.33.33,0,0,1,.14,0h.61l.1,0,.31.1a.3.3,0,0,1,.17.16l.11.2.11.35a.16.16,0,0,1,0,.1v.2a.18.18,0,0,1,0,.1l-.1.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M504.82,536l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12V534l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.16l-.28.14-.22.28,0,.29.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.31.31,0,0,1,.13.19l.11.68-.11.48a.53.53,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.26-.68.33.08H505l.25-.07.19-.19.08-.33-.08-.35-.2-.13-.37-.16-.51.29-.07.34.07.35Z" />
                                            <path
                                                d="M507.68,536l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.51.51,0,0,1-.09-.16l-.1-.51a.48.48,0,0,1,0-.12V534l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.28.28,0,0,1,.13,0H508a.35.35,0,0,1,.14,0l.41.21a.29.29,0,0,1,.13.14l.11.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.13l-.06-.12-.25-.12h-.16l-.28.14-.22.28,0,.29.33-.17a.31.31,0,0,1,.13,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.33.33,0,0,1,.12.14l.2.51a.25.25,0,0,1,0,.12v.1a.35.35,0,0,1,0,.14l-.2.41-.06.08-.31.3a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.22-.21.14-.29-.14-.35-.23-.15-.29-.15-.49.28-.07.34.08.35Z" />
                                            <path
                                                d="M509.63,536a.3.3,0,0,1-.31-.3v-1.95a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.95A.29.29,0,0,1,509.63,536Z" />
                                            <path
                                                d="M511.26,536a.3.3,0,0,1-.3-.28l-.15-1.63-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41.11,1.49a.3.3,0,0,1-.28.32Z" />
                                            <path
                                                d="M512.8,536a.3.3,0,0,1-.31-.3v-1.36l-.17-.28H512l-.14.07-.46.37a.3.3,0,0,1-.43,0A.31.31,0,0,1,511,534l.51-.41.26-.14a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.22.22,0,0,1,0,.13v1.44A.3.3,0,0,1,512.8,536Z" />
                                            <path
                                                d="M515.77,536h-2a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.32-.12-.31-.14,0h-.49l-.09,0-.12.12-.07.25a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.15.15,0,0,1,0-.09l.1-.31a.24.24,0,0,1,.07-.12l.21-.21.08-.05.2-.11a.32.32,0,0,1,.14,0h.61l.1,0,.31.1a.31.31,0,0,1,.17.15l.11.21.11.35a.15.15,0,0,1,0,.09v.21a.2.2,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,515.77,536Z" />
                                            <path
                                                d="M522.83,536.39h-.2a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.2-.21a.25.25,0,0,1-.08-.12l-.2-.61h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.47a.35.35,0,0,1,.2-.16l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.2.05-.14.29-.08.26.34-.08h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.48a.26.26,0,0,1-.12.18l-.31.21-.44.22A.32.32,0,0,1,522.83,536.39Zm-.13-.61h.06l.52-.29.07-.3v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.22.06-.14.21-.13.27.14.42.12.12Z" />
                                            <path
                                                d="M525.7,536.39h-.21a.28.28,0,0,1-.13,0l-.41-.2-.34-.23a.29.29,0,0,1-.14-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.15-.25-.06h-.23l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.29.29,0,0,1,.18.13l.21.3.22.45a.31.31,0,0,1,0,.13v.11a.22.22,0,0,1,0,.11l-.2.51a.26.26,0,0,1-.07.1l-.21.21-.08.06-.41.2A.31.31,0,0,1,525.7,536.39Zm-.14-.61h.06l.3-.15.13-.12.15-.39-.28-.5-.3-.08h-.13l-.25.07-.19.19-.07.28.08.41.19.13Z" />
                                            <path
                                                d="M527.54,536.39a.31.31,0,0,1-.31-.29l-.1-2a.31.31,0,1,1,.61,0l.11,2.05a.31.31,0,0,1-.3.32Z" />
                                            <path
                                                d="M529.07,536.39a.3.3,0,0,1-.3-.3v-1.36l-.23-.38h-.26l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.31.31,0,0,1,.21-.09h.51a.34.34,0,0,1,.22.09l.21.21a.22.22,0,0,1,0,.08l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,529.07,536.39Z" />
                                            <path
                                                d="M530.61,536.39a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,530.61,536.39Z" />
                                            <path
                                                d="M533.58,536.39h-2a.3.3,0,0,1-.22-.51l1.33-1.43.43-.6v-.13l-.15-.23-.21-.06h-.41l-.31.11-.05.14v.16a.31.31,0,0,1-.61,0v-.21a.34.34,0,0,1,0-.1l.11-.3a.3.3,0,0,1,.15-.18l.21-.1.34-.12.1,0h.51l.1,0,.31.1.12.07.1.11.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.52.73-.87.94h1.24a.3.3,0,0,1,.3.31A.29.29,0,0,1,533.58,536.39Z" />
                                            <path
                                                d="M540.54,536.8l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.21.21,0,0,1-.06-.1l-.21-.51a.5.5,0,0,1,0-.12v-.71a.28.28,0,0,1,0-.09l.21-.71a.19.19,0,0,1,.05-.1l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.2l.12,0,.51.21a.33.33,0,0,1,.16.15l.1.2a.29.29,0,0,1-.14.41.3.3,0,0,1-.41-.13L541,534l-.42-.13-.28.14-.23.3-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.2.08.06.3.31a.29.29,0,0,1,.08.14l.12.59-.12.48a.25.25,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08Zm-.25-.68.32.08.28-.08.19-.19.08-.33-.08-.27-.21-.22-.28-.14-.28.14-.24.24-.12.24.13.32Z" />
                                            <path
                                                d="M543.3,536.8l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.38.38,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.21a.19.19,0,0,1,.07.06l.21.2a.3.3,0,0,1,0,.43.31.31,0,0,1-.43,0l-.17-.17-.3-.15h-.17l-.28.14-.21.28,0,.28.32-.16a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.2.34.23a.26.26,0,0,1,.13.19l.11.68-.11.48a.25.25,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.68.33.08h.13l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.38-.15-.3.15-.21.21-.07.28.08.33Z" />
                                            <path
                                                d="M545.35,536.8a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,545.35,536.8Z" />
                                            <path
                                                d="M546.88,536.8a.29.29,0,0,1-.3-.3v-1.44l-.05-.17-.11,0h-.3l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.32.32,0,0,1,.12-.08l.31-.1.1,0h.4l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,546.88,536.8Z" />
                                            <path
                                                d="M548.42,536.8a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0H548l.1,0,.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.3.3,0,0,1,548.42,536.8Z" />
                                            <path
                                                d="M551.39,536.8h-1.95a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.39-1.4.36-.64-.22-.29-.18-.11h-.33l-.28.21-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.17l.34-.45.36-.25a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.34.34,0,0,1,.05.17v.21a.34.34,0,0,1-.05.17l-.2.3-.19.38a.16.16,0,0,1-.06.08l-.91.91h1.21a.3.3,0,0,1,.3.31A.29.29,0,0,1,551.39,536.8Z" />
                                            <path
                                                d="M558.35,537.11l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.39.39,0,0,1,.17-.11l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,1,1-.59.19l0-.15-.25-.06h-.23l-.23.07-.2.26,0,.29.57-.11.48.12a.28.28,0,0,1,.15.08l.3.3a.21.21,0,0,1,.06.08l.21.41a.35.35,0,0,1,0,.14V536a.31.31,0,0,1,0,.13l-.21.41a.16.16,0,0,1-.06.08l-.3.31a.28.28,0,0,1-.15.08Zm-.26-.69.33.09.28-.08.21-.22.15-.36-.15-.3-.21-.21-.32-.08-.28.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M561.21,537.11l-.57-.11a.26.26,0,0,1-.19-.13l-.21-.31a.15.15,0,0,1,0-.07l-.21-.61h0a.3.3,0,0,1,0-.1v-.71a.31.31,0,0,1,0-.08l.2-.72.23-.46a.31.31,0,0,1,.21-.16l.51-.11h.27l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.3.3,0,0,1-.42-.08l-.14-.21-.3-.08h-.13l-.3.07-.14.27-.07.27.62-.1.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41V536l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.32-.68.38.07.29-.07.19-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08-.35.08-.27.46.15.46Z" />
                                            <path
                                                d="M563.16,537.11a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,563.16,537.11Z" />
                                            <path
                                                d="M564.69,537.11a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,0,1-.44-.44l.41-.41a.35.35,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,564.69,537.11Z" />
                                            <path
                                                d="M566.23,537.11a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41.12-.07.31-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,566.23,537.11Z" />
                                            <path
                                                d="M569.2,537.11h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.25-.33.07-.22v-.18l0-.1-.23-.18H568l-.14.05,0,.09a.22.22,0,0,1-.05.08l-.12.11v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.28.28,0,0,1,.17-.15l.31-.11h.71a.32.32,0,0,1,.14,0l.2.1.08.06.21.21.06.08.1.2a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.29.29,0,0,1,.3.3A.3.3,0,0,1,569.2,537.11Z" />
                                            <path
                                                d="M593.45,570.38l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.56.56,0,0,1-.09-.17l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.31.31,0,0,1,.22.21l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.24l-.22.06-.2.26,0,.3.57-.11.57.11a.26.26,0,0,1,.19.13l.21.31.22.44a.33.33,0,0,1,0,.13v.21a.37.37,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.18.12l-.41.11Zm-.25-.69.33.08h.13l.22-.06.14-.21.15-.37-.29-.52-.38-.07-.29.07-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M596.32,570.38l-.48-.12a.28.28,0,0,1-.15-.08l-.3-.3a.42.42,0,0,1-.08-.12l-.2-.62h0a.36.36,0,0,1,0-.1v-.71s0-.06,0-.09l.21-.71a.31.31,0,0,1,.05-.1l.3-.41a.36.36,0,0,1,.18-.12l.41-.1h.38l.48.11a.35.35,0,0,1,.22.21l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.23.06-.21.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.69.32.08.28-.08.19-.19.08-.32V569l-.07-.24-.18-.19-.33-.09-.28.08-.21.22-.13.25.14.42Z" />
                                            <path
                                                d="M598.27,570.38a.31.31,0,0,1-.31-.31v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.3.3,0,0,1,598.27,570.38Z" />
                                            <path
                                                d="M599.8,570.38a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0H599l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.3-.1h.61l.31.1a.36.36,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,599.8,570.38Z" />
                                            <path
                                                d="M601.44,570.38a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14-.05h-.29l-.14.07-.46.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.51-.41.26-.14a.32.32,0,0,1,.14,0h.5l.31.1a.35.35,0,0,1,.18.16l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,601.44,570.38Z" />
                                            <path
                                                d="M604.41,570.38h-2a.31.31,0,0,1-.22-.53l1.43-1.43.25-.34.07-.21v-.19l-.11-.23-.14,0h-.51l-.14,0-.12.23v.14a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.21a.35.35,0,0,1,0-.14l.2-.41a.34.34,0,0,1,.18-.15l.31-.1.1,0h.61l.1,0,.3.1a.34.34,0,0,1,.18.15l.21.41a.35.35,0,0,1,0,.14v.31a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M576.46,537.42h-.2a.32.32,0,0,1-.14,0l-.41-.21a.21.21,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.3.3,0,0,1,.17-.11l.41-.11h.39l.48.11a.31.31,0,0,1,.22.2l.1.3a.3.3,0,0,1-.2.39.29.29,0,0,1-.38-.19l0-.15-.25-.06h-.23l-.23.06-.19.27-.05.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.21.41-.22.34a.29.29,0,0,1-.12.1l-.41.21A.32.32,0,0,1,576.46,537.42Zm-.13-.62h.06l.27-.13.16-.24.14-.29-.27-.49-.39-.08-.29.07-.19.19-.07.28.07.34.21.2Z" />
                                            <path
                                                d="M579.23,537.42h-.11a.31.31,0,0,1-.13,0l-.41-.21a.16.16,0,0,1-.08-.06l-.31-.3a.41.41,0,0,1-.07-.11l-.2-.51v0h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.11a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.24l-.22.06-.21.28-.08.29h0l.59-.11.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.31.31,0,0,1,579.23,537.42Zm-.33-.77.28.14.27-.14.22-.21.08-.33-.08-.27-.19-.19-.33-.08-.27.07-.22.22-.12.24.13.33Z" />
                                            <path
                                                d="M581.07,537.42a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,581.07,537.42Z" />
                                            <path
                                                d="M582.6,537.42a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.32.32,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,582.6,537.42Z" />
                                            <path
                                                d="M584.24,537.42a.3.3,0,0,1-.3-.31v-1.36l-.14-.27-.16-.11h-.19l-.12.12-.53.43a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.41a.26.26,0,0,1,.17,0l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,584.24,537.42Z" />
                                            <path
                                                d="M587.21,537.32h-2.05a.3.3,0,0,1-.28-.2.31.31,0,0,1,.07-.34l1.41-1.3.34-.59v-.19l-.12-.24-.18-.11H586l-.23.15-.06.26a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.29.29,0,0,1,.07-.12l.1-.1.36-.25a.34.34,0,0,1,.17,0h.61a.34.34,0,0,1,.17,0l.46.35a.5.5,0,0,1,.08.12l.1.31a.28.28,0,0,1,0,.09V535a.32.32,0,0,1,0,.14l-.1.2-.32.54-.05.06-.86.8h1.26a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M377.08,566.28l-.57-.11a.3.3,0,0,1-.2-.13l-.2-.31-.23-.56a.27.27,0,0,1,0-.12v-.71s0-.06,0-.09l.21-.71.22-.47a.29.29,0,0,1,.14-.13l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.16-.24-.27-.14h-.16l-.25.13-.16.32-.07.25.4-.16a.2.2,0,0,1,.11,0h.1a.32.32,0,0,1,.14,0l.41.2.08.06.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.33-.68.39.07.29-.07.19-.19.08-.33-.07-.28-.22-.21-.29-.14-.35.14-.27.48.15.38Z" />
                                            <path
                                                d="M379.84,566.28l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.31.31,0,0,1-.08-.15l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.28.28,0,0,1,.15.17l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.28.33-.16a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.2a.38.38,0,0,1,.11.11l.21.3.22.45a.31.31,0,0,1,0,.13v.11l-.11.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.25-.69.33.09h.13l.25-.07.19-.19.07-.29-.31-.54-.33-.14-.3.15-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M381.89,566.28a.31.31,0,0,1-.31-.31V564a.31.31,0,1,1,.62,0V566A.31.31,0,0,1,381.89,566.28Z" />
                                            <path
                                                d="M383.43,566.28a.31.31,0,0,1-.31-.31V564.7l-.18-.36h-.36l-.08,0-.37.46a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.39.39,0,0,1,.1-.08l.21-.1a.23.23,0,0,1,.14,0H383a.22.22,0,0,1,.13,0l.21.1a.29.29,0,0,1,.15.16l.2.51a.22.22,0,0,1,0,.11V566A.3.3,0,0,1,383.43,566.28Z" />
                                            <path
                                                d="M385,566.28a.31.31,0,0,1-.31-.31v-1.33l0-.27-.1,0h-.31l-.17,0-.35.45a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.31.31,0,0,1,.2.23l.1.51V566A.31.31,0,0,1,385,566.28Z" />
                                            <path
                                                d="M387.93,566.28H386a.32.32,0,0,1-.29-.19.29.29,0,0,1,.08-.34l1.38-1.28.18-.45a.18.18,0,0,1,.07-.1l.11-.12v-.09l-.22-.28-.18-.12h-.33l-.35.22-.05.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.36.36,0,0,1,0-.1l.1-.3a.3.3,0,0,1,.15-.18l.21-.1.27-.19a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.16.16-.18.46a.26.26,0,0,1-.07.11l-.86.8h1.16a.3.3,0,0,1,.31.3A.31.31,0,0,1,387.93,566.28Z" />
                                            <path
                                                d="M377.8,533.63h-.21a.35.35,0,0,1-.14,0l-.4-.21-.34-.22a.31.31,0,0,1-.14-.21l-.1-.6a.41.41,0,0,1,0-.11v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.3.3,0,0,1-.42-.08l-.14-.21-.3-.08h-.23l-.22.07-.2.26,0,.29.39-.1h.28l.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.57a.3.3,0,0,1-.13.2l-.3.2-.45.23A.31.31,0,0,1,377.8,533.63Zm-.14-.61h.06l.52-.29.07-.39-.07-.29-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.41.19.13Z" />
                                            <path
                                                d="M380.56,533.63h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.45.45,0,0,1,.17-.11l.41-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.05-.15-.25-.06h-.23l-.23.07-.2.26,0,.29.57-.11.48.12a.28.28,0,0,1,.15.08l.3.3a.21.21,0,0,1,.06.08l.21.41a.35.35,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.23.23,0,0,1-.07.1l-.2.21a.27.27,0,0,1-.1.06l-.52.21Zm-.54-.9.2.13.3.15.38-.15.12-.12.15-.38-.15-.29-.21-.21-.32-.08-.28.08-.19.19-.07.27Z" />
                                            <path
                                                d="M382.4,533.63a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,382.4,533.63Z" />
                                            <path
                                                d="M384,533.63a.31.31,0,0,1-.31-.31V532l-.13-.27-.16-.11h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41L383,531a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.35.35,0,0,1,.1.11l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,384,533.63Z" />
                                            <path
                                                d="M385.58,533.63a.31.31,0,0,1-.31-.31V532l-.23-.38h-.26l-.52.53a.31.31,0,1,1-.44-.44l.62-.61a.29.29,0,0,1,.21-.09h.52a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,385.58,533.63Z" />
                                            <path
                                                d="M388.54,533.63h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l-.06-.19-.19-.07h-.49l-.23.12L387,531a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.16-.17l.41-.21a.31.31,0,0,1,.13,0h.71l.31.11a.24.24,0,0,1,.12.07l.1.1a.42.42,0,0,1,.08.12l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,388.54,533.63Z" />
                                            <text class="cls-10" transform="translate(595.58 526.18)">A1</text>
                                            <text class="cls-10" transform="translate(577.77 525.57)">A2</text>
                                            <text class="cls-10" transform="translate(557.4 526.18)">A3</text>
                                            <text class="cls-10" transform="translate(540.1 525.93)">A4</text>
                                            <text class="cls-10" transform="translate(522.7 526.8)">A5</text>
                                            <text class="cls-10" transform="translate(503.77 525.93)">A6</text>
                                            <text class="cls-10" transform="translate(484.63 526.18)">A7</text>
                                            <text class="cls-10" transform="translate(612.01 560.29)">A27</text>
                                            <text class="cls-10" transform="translate(593.3 560.08)">A26</text>
                                            <text class="cls-10" transform="translate(576.87 559.62)">A25</text>
                                            <text class="cls-10" transform="translate(558.65 560.29)">A24</text>
                                            <text class="cls-10" transform="translate(538.79 558.7)">A23</text>
                                            <text class="cls-10" transform="translate(522.14 557.37)">A22</text>
                                            <text class="cls-10" transform="translate(503.07 557.07)">A21</text>
                                            <text class="cls-10" transform="translate(482.54 557.02)">A20</text>
                                            <text class="cls-10" transform="translate(466.38 557.99)">A19</text>
                                            <text class="cls-10" transform="translate(447.14 557.58)">A18</text>
                                            <text class="cls-10" transform="translate(430.14 556.09)">A17</text>
                                            <text class="cls-10" transform="translate(412.82 555.79)">A16</text>
                                            <text class="cls-10" transform="translate(393.19 556.5)">A15</text>
                                            <text class="cls-10" transform="translate(376.38 557.86)">A14</text>
                                            <text class="cls-10" transform="translate(465.69 525.67)">A8</text>
                                            <text class="cls-10" transform="translate(447.99 524.96)">A9</text>
                                            <text class="cls-10" transform="translate(429.77 524.55)">A10</text>
                                            <text class="cls-10" transform="translate(394.2 523.01)">A12</text>
                                            <text class="cls-10" transform="translate(376.75 522.7)">A13</text>
                                            <text class="cls-10" transform="translate(412.26 523.63)">A11</text>
                                            <polygon class="cls-1"
                                                points="454.92 857.78 454.32 889.88 436.6 889.67 437.27 857.41 454.92 857.78"
                                                id="C17" />
                                            <polygon class="cls-1"
                                                points="472.94 858.14 472.34 890.23 454.62 890.03 455.29 857.77 472.94 858.14"
                                                id="C16" />
                                            <polygon class="cls-1"
                                                points="490.69 858.43 490.1 890.52 472.67 890.32 473.33 858.06 490.69 858.43"
                                                id="C15" />
                                            <rect class="cls-1" x="490.72" y="858.54" width="17.42" height="32.11"
                                                transform="translate(15.13 -8.47) rotate(0.99)" id="C14" />
                                            <rect class="cls-1" x="508.66" y="858.94" width="17.42" height="32.11"
                                                transform="translate(15.13 -8.77) rotate(0.99)" id="C13" />
                                            <rect class="cls-1" x="526.63" y="859.25" width="17.42" height="32.11"
                                                transform="translate(15.14 -9.08) rotate(0.99)" id="C12" />
                                            <rect class="cls-1" x="544.44" y="859.53" width="17.42" height="32.11"
                                                transform="translate(15.15 -9.39) rotate(0.99)" id="C11" />
                                            <polygon class="cls-1"
                                                points="454.2 890.55 453.6 922.64 435.88 922.44 436.55 890.18 454.2 890.55"
                                                id="C24" />
                                            <polygon class="cls-1"
                                                points="472.22 890.91 471.62 923 453.9 922.8 454.57 890.54 472.22 890.91"
                                                id="C25" />
                                            <polygon class="cls-1"
                                                points="489.97 891.2 489.38 923.29 471.95 923.09 472.61 890.83 489.97 891.2"
                                                id="C26" />
                                            <rect class="cls-1" x="490" y="891.31" width="17.42" height="32.11"
                                                transform="translate(15.69 -8.45) rotate(0.99)" id="C27" />
                                            <rect class="cls-1" x="507.94" y="891.71" width="17.42" height="32.11"
                                                transform="translate(15.7 -8.76) rotate(0.99)" id="C28" />
                                            <rect class="cls-1" x="525.91" y="892.02" width="17.42" height="32.11"
                                                transform="translate(15.71 -9.07) rotate(0.99)" id="C29" />
                                            <rect class="cls-1" x="543.72" y="892.3" width="17.42" height="32.11"
                                                transform="translate(15.71 -9.37) rotate(0.99)" id="C30" />
                                            <polygon class="cls-1"
                                                points="582.99 860.07 582.39 892.17 564.68 891.97 565.35 859.7 582.99 860.07"
                                                id="C10" />
                                            <polygon class="cls-1"
                                                points="601.01 860.43 600.42 892.53 582.7 892.32 583.37 860.06 601.01 860.43"
                                                id="C9" />
                                            <polygon class="cls-1"
                                                points="618.76 860.72 618.17 892.82 600.74 892.61 601.4 860.35 618.76 860.72"
                                                id="C8" />
                                            <rect class="cls-1" x="618.8" y="860.83" width="17.42" height="32.11"
                                                transform="translate(15.18 -10.67) rotate(0.99)" id="C7" />
                                            <rect class="cls-1" x="636.73" y="861.24" width="17.42" height="32.11"
                                                transform="translate(15.19 -10.98) rotate(0.99)" id="C6" />
                                            <rect class="cls-1" x="654.7" y="861.54" width="17.42" height="32.11"
                                                transform="translate(15.2 -11.29) rotate(0.99)" id="C5" />
                                            <rect class="cls-1" x="672.51" y="861.83" width="17.42" height="32.11"
                                                transform="translate(15.21 -11.59) rotate(0.99)" id="C4" />
                                            <polygon class="cls-1"
                                                points="582.27 892.84 581.67 924.93 563.96 924.73 564.63 892.47 582.27 892.84"
                                                id="C31" />
                                            <polygon class="cls-1"
                                                points="600.3 893.2 599.7 925.29 581.98 925.09 582.65 892.83 600.3 893.2"
                                                id="C32" />
                                            <polygon class="cls-1"
                                                points="618.04 893.49 617.45 925.58 600.02 925.38 600.68 893.12 618.04 893.49"
                                                id="C33" />
                                            <rect class="cls-1" x="618.08" y="893.6" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 15.75, -10.65)" id="C34" />
                                            <rect class="cls-1" x="636.01" y="894" width="17.42" height="32.11"
                                                transform="translate(15.76 -10.96) rotate(0.99)" id="C35" />
                                            <rect class="cls-1" x="653.98" y="894.31" width="17.42" height="32.11"
                                                transform="translate(15.76 -11.27) rotate(0.99)" id="C36" />
                                            <rect class="cls-1" x="671.79" y="894.59" width="17.42" height="32.11"
                                                transform="translate(15.77 -11.58) rotate(0.99)" id="C37" />
                                            <rect class="cls-1" x="690.19" y="862.15" width="17.42" height="32.11"
                                                transform="translate(15.22 -11.9) rotate(0.99)" id="C3" />
                                            <rect class="cls-1" x="689.47" y="894.91" width="17.42" height="32.11"
                                                transform="translate(15.78 -11.88) rotate(0.99)" id="C38" />
                                            <rect class="cls-1" x="707.99" y="862.5" width="17.42" height="32.11"
                                                transform="translate(15.23 -12.2) rotate(0.99)" id="C2" />
                                            <rect class="cls-1" x="707.27" y="895.27" width="17.42" height="32.11"
                                                transform="translate(15.79 -12.19) rotate(0.99)" id="C39" />
                                            <path
                                                d="M659.16,884.19H659a.32.32,0,0,1-.14,0l-.41-.21a.21.21,0,0,1-.08-.06l-.3-.3a.29.29,0,0,1-.09-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.4-.1h.39l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.2-.3-.08H659l-.23.06-.19.27,0,.29.39-.1h.28l.49.11a.42.42,0,0,1,.14.09l.31.3a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,659.16,884.19Zm-.13-.61h.06l.3-.16.21-.21.09-.32-.08-.28-.19-.19-.33-.08H659l-.25.07-.19.19-.07.27.07.34.21.2Z" />
                                            <path
                                                d="M661.93,884.19h-.1a.32.32,0,0,1-.14,0l-.41-.21a.16.16,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.5a.57.57,0,0,1,0-.13v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.3a.33.33,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.31.31,0,0,1-.59.19l-.06-.19-.23-.11h-.16l-.28.14-.22.29,0,.29.57-.11.48.11a.47.47,0,0,1,.14.08l.31.31a.24.24,0,0,1,.06.08l.2.41a.23.23,0,0,1,0,.14v.1a.23.23,0,0,1,0,.14l-.2.41-.06.08-.31.3a.16.16,0,0,1-.08.06l-.4.21A.35.35,0,0,1,661.93,884.19Zm-.33-.77.28.14.28-.14.23-.23.14-.28-.14-.28-.21-.21-.33-.08-.27.08-.19.19-.07.27.07.34Z" />
                                            <path
                                                d="M663.77,884.19a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,663.77,884.19Z" />
                                            <path
                                                d="M665.41,884.09a.31.31,0,0,1-.31-.31v-1.26l-.13-.27-.17-.11h-.22l-.23.16-.36.37a.31.31,0,1,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.2a.32.32,0,0,1,.11.12l.2.41a.33.33,0,0,1,0,.14v1.33A.31.31,0,0,1,665.41,884.09Z" />
                                            <path
                                                d="M666.94,884.09a.3.3,0,0,1-.3-.31v-1.27l-.18-.37h-.37l-.08,0-.36.46a.3.3,0,0,1-.43.05.3.3,0,0,1-.05-.43l.41-.51a.22.22,0,0,1,.1-.09l.21-.1a.28.28,0,0,1,.13,0h.51a.32.32,0,0,1,.14,0l.21.1a.31.31,0,0,1,.14.16l.21.51a.5.5,0,0,1,0,.12v1.33A.31.31,0,0,1,666.94,884.09Z" />
                                            <path
                                                d="M669.91,884.09h-2a.3.3,0,0,1-.28-.2.29.29,0,0,1,.08-.34l1.4-1.3.34-.59v-.18l-.11-.25-.18-.11h-.4l-.12.11a.16.16,0,0,1-.08.06l-.09.05,0,.19a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.34.34,0,0,1,.15-.18l.16-.08.17-.17a.36.36,0,0,1,.22-.09h.61a.25.25,0,0,1,.17.06l.46.34a.32.32,0,0,1,.08.12l.1.31a.31.31,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.2-.32.54,0,.06-.86.8h1.26a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M676.05,885h-.2a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1V883l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.3.3,0,0,1,.17-.11l.41-.11h.39l.48.11a.29.29,0,0,1,.18.13l.2.3a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.23l-.23.06-.2.27,0,.29.39-.1h.28l.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.49a.38.38,0,0,1-.13.18l-.31.2-.44.23A.32.32,0,0,1,676.05,885Zm-.13-.62H676l.52-.29.07-.29v-.13l-.07-.25-.18-.19-.33-.08h-.13l-.25.06-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M678.82,885h-.11a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.61V883l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11H679l.49.11a.28.28,0,0,1,.21.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l0-.15L679,882h-.24l-.22.06-.2.27,0,.29.57-.11.57.11a.29.29,0,0,1,.19.13l.21.31.22.44a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.06.08-.21.2a.18.18,0,0,1-.1.07l-.51.21Zm-.54-.9.19.13.3.15.39-.16.12-.12.15-.36-.29-.51-.38-.08-.3.07-.19.19-.06.28Z" />
                                            <path
                                                d="M680.66,885a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,680.66,885Z" />
                                            <path
                                                d="M682.3,885a.31.31,0,0,1-.31-.31v-1.36l-.14-.27-.16-.11h-.19l-.11.12-.54.43a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.69-.59a.29.29,0,0,1,.22-.09h.4a.29.29,0,0,1,.18,0l.3.2a.32.32,0,0,1,.11.12l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,682.3,885Z" />
                                            <path
                                                d="M683.83,885a.31.31,0,0,1-.31-.31v-1.36l-.22-.38h-.19l-.23.15-.37.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.31.31,0,0,1,.22.09l.2.2a.16.16,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,683.83,885Z" />
                                            <path
                                                d="M686.8,885h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.06-.33l1.33-1.43.26-.35.07-.21v-.21l-.07-.19L686,882h-.49l-.23.12,0,.13v.16a.31.31,0,0,1-.62,0v-.21a.29.29,0,0,1,0-.09l.1-.31a.3.3,0,0,1,.15-.18l.41-.2a.32.32,0,0,1,.14,0h.71l.31.1a.42.42,0,0,1,.12.08l.1.1a.24.24,0,0,1,.07.12l.11.31a.28.28,0,0,1,0,.09v.31a.34.34,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M693.45,884.6h-.1a.35.35,0,0,1-.14,0l-.41-.21a.21.21,0,0,1-.08-.06l-.3-.3a.37.37,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.2a.25.25,0,0,1,.14,0h.31a.25.25,0,0,1,.14,0l.4.2a.31.31,0,0,1,.16.18l.1.31a.31.31,0,0,1-.58.19l-.06-.19-.23-.11h-.17l-.28.14-.21.29,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.26.26,0,0,1-.14.11l-.51.21Zm-.33-.77.29.15.35-.14.15-.23.15-.29-.28-.49-.39-.08-.29.08-.19.19-.07.27.08.34Z" />
                                            <path
                                                d="M696.22,884.5l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.24.24,0,0,1-.06-.11l-.21-.51h0v0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.21-.72a.3.3,0,0,1,0-.1l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.2a.27.27,0,0,1,.12,0l.51.2a.27.27,0,0,1,.17.19l.11.31a.31.31,0,0,1-.59.19l0-.17-.4-.13-.28.14-.23.3-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.07.05.31.31a.29.29,0,0,1,.08.14l.12.59-.12.48a.28.28,0,0,1-.08.15l-.31.3a.22.22,0,0,1-.14.08Zm-.26-.69.33.08.28-.08.19-.19.08-.32-.08-.28-.21-.22-.28-.14-.28.14-.24.24-.12.24.13.33Z" />
                                            <path
                                                d="M698.16,884.5a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,698.16,884.5Z" />
                                            <path
                                                d="M699.7,884.5a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,1,1-.48-.38l.41-.52a.31.31,0,0,1,.14-.09l.31-.11h.6l.31.11a.28.28,0,0,1,.2.23l.11.51v1.39A.3.3,0,0,1,699.7,884.5Z" />
                                            <path
                                                d="M701.33,884.5a.3.3,0,0,1-.3-.31v-1.27l-.13-.33-.13,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.43.05.3.3,0,0,1,0-.43l.41-.52a.23.23,0,0,1,.14-.09l.31-.11h.6l.31.11a.28.28,0,0,1,.18.17l.21.51a.5.5,0,0,1,0,.12v1.33A.31.31,0,0,1,701.33,884.5Z" />
                                            <path
                                                d="M704.3,884.5h-2a.31.31,0,0,1-.29-.2.29.29,0,0,1,.08-.34l1.4-1.3.34-.59v-.18l0-.14-.09,0a.21.21,0,0,1-.08-.06l-.11-.11h-.39l-.24.15-.06.26a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.32.32,0,0,1,.08-.12l.1-.1.35-.24a.27.27,0,0,1,.17-.06h.62a.31.31,0,0,1,.21.09l.17.17.16.08a.31.31,0,0,1,.16.18l.1.31a.3.3,0,0,1,0,.1v.3a.33.33,0,0,1,0,.14l-.1.2L704,883l-.05.06-.86.8h1.26a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M711,885.83l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.5a.57.57,0,0,1,0-.13v-.66l.1-.76A.35.35,0,0,1,710,883l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.13,0h.31a.33.33,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15H711l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.3.3a.29.29,0,0,1,.08.14l.12.59-.12.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08l-.41.11Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32-.08-.28-.21-.22L711,884l-.3.15-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M713.82,885.83l-.48-.12a.22.22,0,0,1-.14-.08l-.31-.3a.37.37,0,0,1-.09-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.2a.37.37,0,0,1,.14,0h.31a.37.37,0,0,1,.14,0l.4.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.13.42.33.33,0,0,1-.42-.14l-.05-.12-.25-.12h-.17l-.28.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.35.35,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41a.35.35,0,0,1,0,.08l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.69.33.08.27-.08.22-.21.14-.28-.14-.28-.24-.24-.28-.14-.28.14-.21.22-.07.27.08.34Z" />
                                            <path
                                                d="M715.77,885.83a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,715.77,885.83Z" />
                                            <path
                                                d="M717.4,885.83a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.17.15l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,717.4,885.83Z" />
                                            <path
                                                d="M718.94,885.83a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.1,0-.37.37a.3.3,0,1,1-.43-.43l.41-.41.08-.06.2-.1a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,718.94,885.83Z" />
                                            <path
                                                d="M721.91,885.83h-2a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.24-.34.08-.31-.12-.25-.18-.11h-.4l-.11.11a.16.16,0,0,1-.08.06l-.09.05,0,.19a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.1a.31.31,0,0,1,0-.1l.11-.31a.3.3,0,0,1,.15-.18l.16-.08.17-.17a.34.34,0,0,1,.22-.09h.61a.27.27,0,0,1,.17.06l.46.34a.29.29,0,0,1,.07.12l.1.31a.3.3,0,0,1,0,.1v.2a.36.36,0,0,1,0,.1l-.1.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M729.89,885.21l-.48-.11a.27.27,0,0,1-.18-.13l-.21-.3,0-.08-.2-.61h0a.29.29,0,0,1,0-.09v-.61l.11-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.08h-.23l-.21.06-.21.36,0,.29.32-.16a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.2.34.23a.27.27,0,0,1,.13.18l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.22-.68.29.08h.14l.24-.07.19-.19.09-.33v-.13l-.06-.21-.22-.15-.37-.15-.3.15-.13.13-.13.26.15.45Z" />
                                            <path
                                                d="M732.76,885.21l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.37.37,0,0,1,0-.11v-.66l.11-.67a.25.25,0,0,1,0-.11l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.32.32,0,0,1-.2.39.31.31,0,0,1-.39-.2l0-.14-.24-.07h-.23l-.21.06-.22.36,0,.2.56-.1.57.1a.35.35,0,0,1,.2.14l.2.3.23.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.21.41-.22.34a.31.31,0,0,1-.19.13l-.4.1Zm-.26-.68.33.08H733l.22-.06.14-.21.15-.38-.28-.51-.39-.08-.29.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M734.7,885.21a.31.31,0,0,1-.31-.3V883a.31.31,0,0,1,.62,0v1.95A.31.31,0,0,1,734.7,885.21Z" />
                                            <path
                                                d="M736.34,885.21a.31.31,0,0,1-.31-.3v-1.36l-.17-.28h-.37l-.14.07-.46.37a.3.3,0,0,1-.43-.05.31.31,0,0,1,0-.43l.51-.41.26-.13a.23.23,0,0,1,.14,0h.51a.25.25,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.28.28,0,0,1,0,.13v1.44A.31.31,0,0,1,736.34,885.21Z" />
                                            <path
                                                d="M737.87,885.21a.3.3,0,0,1-.3-.3v-1.44l-.05-.17-.11,0h-.3l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.32.32,0,0,1,.12-.08l.31-.1.1,0h.4l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,737.87,885.21Z" />
                                            <path
                                                d="M740.84,885.21H738.9a.31.31,0,0,1-.23-.51l1.33-1.44.43-.6v-.08l-.11-.12a.24.24,0,0,1-.06-.08l0-.09-.14,0h-.42l-.19.07-.16.21v.13a.31.31,0,1,1-.62,0v-.2a.23.23,0,0,1,0-.14l.1-.2a.22.22,0,0,1,0-.08l.21-.21a.24.24,0,0,1,.12-.07l.31-.1.09,0h.52l.09,0,.31.1a.3.3,0,0,1,.18.15l.08.16.17.17a.36.36,0,0,1,.09.22v.31a.34.34,0,0,1,0,.17l-.53.73-.87.94h1.24a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M440.64,912.64l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1H441l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07h-.23l-.22.07-.2.26,0,.29.39-.09h.28l.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.68.33.08h.13l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M443.61,912.64h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.3.3,0,0,1-.13-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.33.33,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.32.32,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.05-.14-.25-.06h-.23l-.23.07-.2.26,0,.29.57-.1.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.21.41a.28.28,0,0,1,0,.13v.21a.28.28,0,0,1,0,.13l-.21.41a.29.29,0,0,1-.1.12l-.31.21-.44.22A.35.35,0,0,1,443.61,912.64Zm-.54-.9.2.14.29.14.53-.3.13-.33-.15-.3-.21-.22-.32-.08-.28.08-.19.19-.07.28Z" />
                                            <path
                                                d="M445.45,912.64a.29.29,0,0,1-.3-.3v-2.05a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2.05A.3.3,0,0,1,445.45,912.64Z" />
                                            <path
                                                d="M447.09,912.64a.3.3,0,0,1-.31-.3V911l-.13-.28-.16-.1h-.23l-.23.15-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.41L446,910a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.2.41a.22.22,0,0,1,0,.13v1.44A.3.3,0,0,1,447.09,912.64Z" />
                                            <path
                                                d="M448.63,912.64a.3.3,0,0,1-.31-.3V911l-.23-.38h-.26l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.27.27,0,0,1,.21-.09h.52a.27.27,0,0,1,.21.09l.21.21.06.08.2.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,448.63,912.64Z" />
                                            <path
                                                d="M451.59,912.64h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l-.06-.19-.19-.07h-.49l-.24.12,0,.14v.15a.31.31,0,0,1-.62,0v-.2a.36.36,0,0,1,0-.1l.1-.3a.29.29,0,0,1,.16-.18l.41-.21a.28.28,0,0,1,.13,0h.62l.09,0,.31.1a.24.24,0,0,1,.12.07l.1.11a.25.25,0,0,1,.08.12l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.3a.31.31,0,0,1,.31.31A.3.3,0,0,1,451.59,912.64Z" />
                                            <path
                                                d="M458.66,913h-.11l-.11,0-.51-.21a.26.26,0,0,1-.14-.11l-.21-.31-.23-.56v0h0a.16.16,0,0,1,0-.1v-.71a.22.22,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.13-.14l.41-.2a.35.35,0,0,1,.14,0h.31a.28.28,0,0,1,.13,0l.41.2a.32.32,0,0,1,.12.11l.21.3a.32.32,0,0,1-.09.43.3.3,0,0,1-.42-.09L459,910l-.27-.14h-.17l-.25.13-.16.31-.07.27.34-.09h.28l.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.05-.41.21A.31.31,0,0,1,458.66,913Zm-.42-.76.36.14.28-.14.21-.22.09-.32-.08-.28-.19-.19-.33-.08h-.13l-.22.06-.26.46.15.39Z" />
                                            <path
                                                d="M461.32,912.85l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.31.31,0,1,1-.59.19l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.29.39-.1h.28l.49.12a.31.31,0,0,1,.18.12l.2.31.22.44a.23.23,0,0,1,0,.14v.1a.23.23,0,0,1,0,.14l-.2.41-.22.34a.38.38,0,0,1-.18.13l-.41.1Zm-.26-.69.33.08h.13l.22-.06.14-.21.14-.29-.28-.5-.29-.07h-.13l-.25.07-.19.19-.07.27.07.34Z" />
                                            <path
                                                d="M463.36,912.85a.3.3,0,0,1-.3-.31V910.6a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,463.36,912.85Z" />
                                            <path
                                                d="M464.9,912.85a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.37l-.08,0-.37.46a.3.3,0,0,1-.43.05.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.11-.09l.2-.1a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.33.33,0,0,1,.15.16l.2.52a.2.2,0,0,1,0,.11v1.33A.31.31,0,0,1,464.9,912.85Z" />
                                            <path
                                                d="M466.43,912.85a.3.3,0,0,1-.3-.31v-1.33l-.06-.28-.1,0h-.3l-.18.06-.35.44a.31.31,0,1,1-.48-.38l.41-.51a.33.33,0,0,1,.14-.1l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,466.43,912.85Z" />
                                            <path
                                                d="M469.4,912.85h-1.94a.31.31,0,0,1-.21-.53l1.38-1.29.18-.45a.61.61,0,0,1,.07-.1l.11-.11v-.09l-.21-.29-.18-.11h-.33l-.36.22,0,.19a.31.31,0,1,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.16-.17l.2-.11.27-.18a.26.26,0,0,1,.17-.05h.52a.26.26,0,0,1,.17.05l.45.34.25.36a.34.34,0,0,1,.05.17v.3a.29.29,0,0,1-.09.22l-.16.16-.18.45a.5.5,0,0,1-.08.12l-.86.79h1.16a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M477.39,913.05l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.35.35,0,0,1,.14.13l.1.21a.3.3,0,0,1-.14.41.3.3,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.32.32,0,0,1,.14,0h.1a.2.2,0,0,1,.11,0l.51.2a.44.44,0,0,1,.15.12l.2.3.22.45a.22.22,0,0,1,0,.13v.11a.22.22,0,0,1,0,.13l-.2.41-.22.34a.3.3,0,0,1-.2.13Zm-.26-.68.33.08.35-.08.14-.2.14-.29-.29-.52-.35-.14-.29.14-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M480.25,913.05l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51v0h0a.29.29,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.2-.71a.31.31,0,0,1,.05-.1l.31-.41a.24.24,0,0,1,.11-.09l.4-.21a.35.35,0,0,1,.14,0h.21l.11,0,.51.21a.32.32,0,0,1,.16.14l.11.21a.31.31,0,0,1-.14.41.29.29,0,0,1-.41-.14l-.05-.1-.43-.14-.27.14-.23.31-.09.29.39-.19a.28.28,0,0,1,.13,0h.1a.32.32,0,0,1,.14,0l.41.2.34.23a.26.26,0,0,1,.13.19l.11.68-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.19-.19.09-.33-.08-.35-.21-.14-.29-.14-.28.14-.23.24-.12.24.13.32Z" />
                                            <path
                                                d="M482.2,913.05a.31.31,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,482.2,913.05Z" />
                                            <path
                                                d="M483.73,913.05a.3.3,0,0,1-.3-.3v-1.44l-.05-.17-.11,0H483l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,483.73,913.05Z" />
                                            <path
                                                d="M485.37,913.05a.31.31,0,0,1-.31-.3v-1.36l-.11-.24-.14,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.4-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.18.16l.2.41a.2.2,0,0,1,0,.13v1.44A.31.31,0,0,1,485.37,913.05Z" />
                                            <path
                                                d="M488.34,913.05h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.32-.05-.14-.09,0-.08-.06-.12-.12h-.39l-.23.16-.07.25a.31.31,0,1,1-.61,0v-.1a.38.38,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11.36-.24a.34.34,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.1.3a.44.44,0,0,1,0,.1v.21a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M495.2,913.46l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.61v-.78l.11-.75a.27.27,0,0,1,.05-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.23.07-.2.26,0,.29.39-.1h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.22.22,0,0,1,.08.14l.11.41v.28l-.12.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.07.45Z" />
                                            <path
                                                d="M498.06,913.46l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.14-.25-.07h-.23l-.22.07-.2.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.31,0,.07.21.41a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.21.41a.22.22,0,0,1,0,.08l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.22-.22.15-.36-.15-.3-.21-.21-.33-.08-.28.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M500,913.46a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,500,913.46Z" />
                                            <path
                                                d="M501.64,913.46a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.17.16l.21.4a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,501.64,913.46Z" />
                                            <path
                                                d="M503.18,913.46a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.25l-.53.53a.3.3,0,1,1-.43-.43l.61-.62a.31.31,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.2.21.06.08.2.41a.2.2,0,0,1,0,.13v1.43A.31.31,0,0,1,503.18,913.46Z" />
                                            <path
                                                d="M506.15,913.46h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.24-.34.08-.21v-.19l-.12-.23-.14,0h-.49l-.1,0-.18.23v.13a.31.31,0,1,1-.61,0v-.2a.32.32,0,0,1,0-.14l.1-.2.06-.08.21-.21.07-.06.21-.1a.32.32,0,0,1,.14,0h.61l.1,0,.3.1a.27.27,0,0,1,.18.15l.21.41a.32.32,0,0,1,0,.14V911a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M513.21,914H513a.31.31,0,0,1-.13,0l-.41-.2a.32.32,0,0,1-.12-.11l-.2-.31-.24-.56v0h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.47a.29.29,0,0,1,.14-.13l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.29.29,0,0,1-.08.42.3.3,0,0,1-.43-.08l-.16-.24-.27-.14h-.16l-.26.13-.15.32-.08.26.34-.08h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.25.25,0,0,1,.08.14l.12.59-.12.48a.29.29,0,0,1-.08.14l-.3.31-.08.06-.41.2A.35.35,0,0,1,513.21,914Zm-.13-.61h.06l.3-.15.21-.21.08-.33-.08-.28-.19-.19-.32-.08H513l-.21.06-.27.47.16.38.12.18Z" />
                                            <path
                                                d="M515.87,913.87l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.34.34,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.4.21a.3.3,0,0,1,.16.17l.1.31a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.2l-.06-.18-.23-.12h-.17l-.28.14-.21.29,0,.28.32-.16a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.12.11l.21.3.22.45a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.21.41-.22.34a.29.29,0,0,1-.18.13l-.41.1Zm-.25-.69.32.09h.14l.21-.06.14-.22.15-.29-.3-.52-.34-.14-.3.15-.21.21-.07.27.08.34Z" />
                                            <path
                                                d="M517.92,913.87a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,517.92,913.87Z" />
                                            <path
                                                d="M519.45,913.87a.3.3,0,0,1-.3-.31v-1.27l-.18-.36h-.37l-.07,0-.37.46a.3.3,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.51a.39.39,0,0,1,.1-.08l.2-.1a.25.25,0,0,1,.14,0H519a.23.23,0,0,1,.14,0l.21.1a.28.28,0,0,1,.14.16l.21.51a.43.43,0,0,1,0,.11v1.33A.31.31,0,0,1,519.45,913.87Z" />
                                            <path
                                                d="M521,913.87a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.17.05-.36.45a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.23l.1.51v1.39A.31.31,0,0,1,521,913.87Z" />
                                            <path
                                                d="M524,913.87h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.33-1.33.26-.46.16-.17v-.09l-.22-.28-.18-.12h-.33l-.35.22-.05.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.3.3,0,0,1,.15-.18l.2-.1.28-.19a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,0,.17v.31a.27.27,0,0,1-.09.21l-.2.21-.26.45-.86.87H524a.29.29,0,0,1,.3.3A.3.3,0,0,1,524,913.87Z" />
                                            <path
                                                d="M530.92,914.18l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.29.29,0,0,1-.07-.12l-.21-.62h0a.31.31,0,0,1,0-.1v-.61a.22.22,0,0,1,0-.08l.21-.72a.11.11,0,0,1,0-.07l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.28l.57.1a.31.31,0,0,1,.23.21l.11.31a.31.31,0,0,1-.59.19l0-.14-.34-.07h-.14l-.21.06-.23.37-.08.31.38-.2a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.36.36,0,0,1,.12.18l.11.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08Zm-.26-.69.33.08.28-.07.19-.19.08-.33v-.13l-.06-.22-.21-.14-.29-.14-.53.3-.11.22.14.43Z" />
                                            <path
                                                d="M533.68,914.18l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.28.28,0,0,1-.09-.17l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.66a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.1H534l.48.11a.29.29,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.21.06-.21.36,0,.2.38-.1h.28l.49.11.14.08.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.25-.69.32.08h.13l.25-.06.19-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M535.73,914.18a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,535.73,914.18Z" />
                                            <path
                                                d="M537.26,914.18a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,537.26,914.18Z" />
                                            <path
                                                d="M538.8,914.18a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0H538l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,538.8,914.18Z" />
                                            <path
                                                d="M541.77,914.18h-1.95a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.33.07-.22v-.13l-.12-.11-.06-.08,0-.09-.14,0h-.41l-.14,0-.05.09a.35.35,0,0,1,0,.08l-.12.11v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.33.33,0,0,1,.17-.16l.31-.1h.71l.3.1a.35.35,0,0,1,.18.16l.08.16.17.17a.27.27,0,0,1,.09.21v.31a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M586.39,915.1l-.48-.11a.32.32,0,0,1-.14-.08l-.31-.31a.42.42,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.53.53,0,0,1,.11-.09l.4-.2a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.2a.29.29,0,0,1,.13.14l.11.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.17l-.28.14-.21.29,0,.28.32-.16a.25.25,0,0,1,.14,0h.21a.22.22,0,0,1,.13,0l.41.2.34.22a.3.3,0,0,1,.13.2l.11.67-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.38-.15-.51.28-.07.35.08.34Z" />
                                            <path
                                                d="M589.26,915.1l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.11-.75a.22.22,0,0,1,.06-.15l.3-.41.11-.09.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.23.23,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2.34.22a.33.33,0,0,1,.11.15l.21.51a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.3.31a.36.36,0,0,1-.15.08Zm-.25-.69.32.08.28-.07.21-.22.15-.29-.14-.35-.23-.15-.29-.14-.49.27-.07.35.07.34Z" />
                                            <path
                                                d="M591.2,915.1a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,591.2,915.1Z" />
                                            <path
                                                d="M592.74,915.1a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0H592l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,592.74,915.1Z" />
                                            <path
                                                d="M594.38,915.1a.31.31,0,0,1-.31-.31v-1.36l-.18-.28h-.36l-.14.07-.46.38a.31.31,0,0,1-.43-.05.3.3,0,0,1,0-.43l.51-.41.26-.14a.31.31,0,0,1,.13,0H594a.31.31,0,0,1,.13,0l.21.11a.29.29,0,0,1,.14.13l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,594.38,915.1Z" />
                                            <path
                                                d="M597.34,915.1h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.32-.11-.31-.14,0h-.49l-.1,0-.12.12-.06.24a.31.31,0,1,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.2-.2.08-.06.21-.1a.31.31,0,0,1,.13,0h.72l.3.11a.3.3,0,0,1,.18.15l.1.2.12.35a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.93,1h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,597.34,915.1Z" />
                                            <path
                                                d="M604.41,915.92h-.21a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.33.33,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23L604,913l-.2.27,0,.29.39-.1h.28l.48.11.14.08.31.31a.29.29,0,0,1,.08.14l.11.59-.11.57a.3.3,0,0,1-.13.2l-.3.2-.45.23A.31.31,0,0,1,604.41,915.92Zm-.14-.62h.06l.52-.28.07-.39-.07-.29-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M607.17,915.92h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.61a.31.31,0,0,1,0-.1v-.67l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.49.11a.28.28,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l0-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.33.33,0,0,1-.15.11l-.51.21Zm-.54-.9.2.13.3.15.35-.14.15-.23.14-.29-.27-.49-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M609,915.92a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,609,915.92Z" />
                                            <path
                                                d="M610.65,915.92a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.17-.11h-.18l-.12.12-.54.43a.31.31,0,1,1-.38-.48l.69-.59a.31.31,0,0,1,.22-.09h.41a.34.34,0,0,1,.17,0l.31.2a.29.29,0,0,1,.1.12l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,610.65,915.92Z" />
                                            <path
                                                d="M612.18,915.92a.3.3,0,0,1-.3-.31v-1.36l-.23-.38h-.19l-.23.15-.36.38a.31.31,0,1,1-.44-.44l.41-.41.36-.24a.31.31,0,0,1,.17,0h.41a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,612.18,915.92Z" />
                                            <path
                                                d="M615.15,915.92h-1.94a.3.3,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.33-1.43.26-.34.07-.22v-.21l-.11-.24-.18-.11H614l-.11.11-.08.06-.1.05,0,.19a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.16-.08.16-.17a.36.36,0,0,1,.22-.09h.62a.27.27,0,0,1,.17.06l.45.34a.32.32,0,0,1,.08.12l.1.31a.29.29,0,0,1,0,.09v.31a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41-.88.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M622.22,916l-.58-.11a.26.26,0,0,1-.19-.13l-.21-.31-.23-.56v0h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.47a.28.28,0,0,1,.16-.14l.51-.21.12,0h.2l.11,0,.52.21a.31.31,0,0,1,.16.14l.1.21a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.14l0-.1-.44-.14-.34.14-.16.31-.07.24.4-.15.12,0h.1a.33.33,0,0,1,.13,0l.41.2.08.06.31.31a.25.25,0,0,1,.08.14l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.22.22,0,0,1-.14.08Zm-.34-.69.4.08.29-.07.19-.19.08-.33-.08-.28-.21-.21-.29-.14-.35.14-.28.48.15.38Z" />
                                            <path
                                                d="M625,916l-.49-.11a.29.29,0,0,1-.14-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21.08.05.21.21a.3.3,0,0,1,0,.43.31.31,0,0,1-.44,0l-.17-.17-.3-.15h-.16l-.28.14-.21.29,0,.28.33-.16a.33.33,0,0,1,.14,0h.2a.33.33,0,0,1,.14,0l.41.2.34.23a.29.29,0,0,1,.13.19l.11.67-.11.49a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.32.09h.13l.25-.07.19-.19.08-.33-.07-.35-.21-.14-.37-.15-.51.28-.07.35.07.34Z" />
                                            <path
                                                d="M627,916a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,627,916Z" />
                                            <path
                                                d="M628.56,916a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,628.56,916Z" />
                                            <path
                                                d="M630.1,916a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,1,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,630.1,916Z" />
                                            <path
                                                d="M633.06,916h-1.94a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.36-.65-.22-.28-.18-.12h-.33l-.29.22-.11.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,.05-.17l.34-.46.36-.24a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.45.34.25.36a.34.34,0,0,1,0,.17v.2a.31.31,0,0,1,0,.17L633,914l-.18.38-.06.08-.91.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,633.06,916Z" />
                                            <path
                                                d="M640,916.23l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.56.56,0,0,1-.09-.17l-.1-.61v-.77l.1-.67a.42.42,0,0,1,0-.1l.31-.52a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.32.32,0,0,1,.21.21l.11.3a.31.31,0,0,1-.59.2l0-.15-.24-.06H640l-.21.06-.22.35,0,.2.56-.1.48.11a.29.29,0,0,1,.14.08l.31.31.06.08.2.41a.33.33,0,0,1,0,.13v.21a.37.37,0,0,1,0,.14l-.2.41-.06.08-.31.3a.29.29,0,0,1-.14.08Zm-.26-.69.33.08.28-.08.21-.21.15-.36-.15-.3-.21-.21-.33-.09-.27.08-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M642.89,916.23l-.57-.11a.39.39,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0a.36.36,0,0,1,0-.1v-.71s0-.06,0-.09l.21-.71.22-.47a.36.36,0,0,1,.22-.16l.51-.1h.27l.48.11a.34.34,0,0,1,.18.13l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.13l-.3.06-.14.28-.08.27.62-.1.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32v-.14l-.06-.24-.19-.19-.33-.09-.35.08-.27.47.15.45Z" />
                                            <path
                                                d="M644.84,916.23a.31.31,0,0,1-.31-.31V914a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.95A.3.3,0,0,1,644.84,916.23Z" />
                                            <path
                                                d="M646.37,916.23a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.3-.1h.61l.31.1a.36.36,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,646.37,916.23Z" />
                                            <path
                                                d="M647.91,916.23a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.12-.08.31-.1h.6l.31.1a.31.31,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,647.91,916.23Z" />
                                            <path
                                                d="M650.87,916.23h-1.94a.31.31,0,0,1-.22-.53l1.44-1.43.24-.34.07-.21v-.19l0-.09-.12-.12-.19-.06h-.41l-.14,0,0,.09a.16.16,0,0,1-.06.08l-.11.12v.08a.31.31,0,0,1-.62,0v-.21a.31.31,0,0,1,.09-.21l.17-.17.08-.17a.38.38,0,0,1,.18-.15l.31-.1.1,0h.51l.09,0,.31.1a.25.25,0,0,1,.12.08l.21.2a.22.22,0,0,1,.05.08l.11.2a.35.35,0,0,1,0,.14v.31a.44.44,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M441.36,879.89l-.49-.11a.38.38,0,0,1-.18-.13l-.2-.31a.16.16,0,0,1,0-.07l-.2-.61h0a.3.3,0,0,1,0-.1V878s0-.06,0-.09l.21-.72.21-.54a.31.31,0,0,1,.21-.18l.41-.1h.38l.49.11a.29.29,0,0,1,.18.13l.2.3a.3.3,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.13-.2-.3-.08h-.23l-.18.05-.22.63.26-.13a.23.23,0,0,1,.14,0h.2a.23.23,0,0,1,.14,0l.41.2.34.22a.36.36,0,0,1,.13.19l.1.4v.28l-.11.49a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.22-.68.29.08h.13l.25-.07L442,879l.08-.33v-.13l-.06-.22-.21-.14-.37-.15-.3.15-.13.13-.13.25.15.46Z" />
                                            <path
                                                d="M444.22,879.89l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.31.31,0,0,1-.09-.17l-.1-.6V878l.1-.76a.42.42,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l-.05-.15-.24-.06h-.24L444,877l-.21.35,0,.3.33-.16a.22.22,0,0,1,.13,0h.21a.25.25,0,0,1,.14,0l.41.2a.2.2,0,0,1,.07.06l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.23.34a.3.3,0,0,1-.18.13l-.41.1Zm-.25-.69.33.09h.13l.22-.06.14-.22.15-.37-.15-.3-.13-.13-.36-.15-.52.29-.06.24.07.45Z" />
                                            <path
                                                d="M446.27,879.89a.32.32,0,0,1-.31-.29l-.1-2a.31.31,0,0,1,.62,0l.1,2a.3.3,0,0,1-.29.32Z" />
                                            <path
                                                d="M447.81,879.89a.31.31,0,0,1-.31-.31v-1.36l-.18-.27H447l-.14.07-.46.37a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.51-.41.26-.14a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.11a.29.29,0,0,1,.14.13l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,447.81,879.89Z" />
                                            <path
                                                d="M449.34,879.89a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,449.34,879.89Z" />
                                            <path
                                                d="M452.31,879.89h-1.94a.31.31,0,0,1-.29-.18.32.32,0,0,1,.06-.34l1.33-1.43.43-.6v-.09l-.11-.11a.16.16,0,0,1-.06-.08l-.05-.09-.14-.05h-.41l-.19.07-.1.1-.07.24a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.36.36,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.21-.2a.24.24,0,0,1,.12-.07l.3-.11h.71l.31.11a.28.28,0,0,1,.17.15l.09.16.16.17a.31.31,0,0,1,.09.22v.3a.26.26,0,0,1-.05.17l-.52.73-.87.95h1.24a.3.3,0,0,1,.31.3A.31.31,0,0,1,452.31,879.89Z" />
                                            <path
                                                d="M459.37,880.2h-.1a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.38.38,0,0,1-.12-.16l-.2-.62h0a.28.28,0,0,1,0-.09v-.71s0-.06,0-.08l.21-.72a.31.31,0,0,1,.05-.1l.3-.41a.29.29,0,0,1,.18-.11l.41-.11h.27l.58.1a.32.32,0,0,1,.23.21l.1.3a.31.31,0,0,1-.58.2l-.05-.14-.34-.07h-.14l-.23.06-.21.28-.08.29h0l.58-.11.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.57a.34.34,0,0,1-.13.2l-.31.2-.44.23A.32.32,0,0,1,459.37,880.2Zm-.56-.92.22.15.29.14.49-.27.08-.39-.08-.29-.19-.19-.32-.08-.28.07-.21.22-.13.25Z" />
                                            <path
                                                d="M462.24,880.2H462a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.38.38,0,0,1-.14-.21l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.11a.3.3,0,0,1,.19.12l.2.31a.31.31,0,1,1-.51.34l-.14-.21-.29-.07H462l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.27.27,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.1.57a.35.35,0,0,1-.14.2l-.3.2-.45.23A.28.28,0,0,1,462.24,880.2Zm-.13-.62h.06l.51-.28.08-.39-.08-.29-.19-.19-.33-.08H462l-.25.06-.19.19-.06.28.07.41.19.13Z" />
                                            <path
                                                d="M464.08,880.2a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,464.08,880.2Z" />
                                            <path
                                                d="M465.62,880.2a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,465.62,880.2Z" />
                                            <path
                                                d="M467.15,880.2a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.31.2a.38.38,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,467.15,880.2Z" />
                                            <path
                                                d="M470.12,880.2h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.4-1.39.35-.63v-.12l-.15-.23-.21-.07h-.41l-.24.11-.12.18v.12a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.34.34,0,0,1,0-.17l.35-.45a.25.25,0,0,1,.12-.08l.3-.1h.71l.31.1a.42.42,0,0,1,.12.08l.1.1.24.35a.26.26,0,0,1,.05.17v.31a.26.26,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M477.08,880.4l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.24.24,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.14.13l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.16a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.2.08.06.31.31a.22.22,0,0,1,.05.08l.21.41a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.21.41a.22.22,0,0,1-.05.08l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.32.08.28-.08.22-.22.13-.27-.13-.28-.24-.24-.28-.14-.28.14-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M480,880.4l-.58-.11a.26.26,0,0,1-.19-.13l-.21-.3-.23-.57h0a0,0,0,0,1,0,0h0a.19.19,0,0,1,0-.08v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.47a.28.28,0,0,1,.16-.14l.51-.21.12,0h.2l.11,0,.52.21a.31.31,0,0,1,.16.14l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.05-.1-.44-.14-.34.14-.16.31-.07.25.4-.16a.25.25,0,0,1,.12,0h.1a.31.31,0,0,1,.13,0l.41.2.08.06.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08Zm-.34-.68.4.07.29-.07.19-.19.08-.33-.08-.28-.21-.21-.29-.14-.35.14-.28.48.15.38Z" />
                                            <path
                                                d="M481.89,880.4a.31.31,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,481.89,880.4Z" />
                                            <path
                                                d="M483.43,880.4a.31.31,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0H483l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,483.43,880.4Z" />
                                            <path
                                                d="M485,880.4a.31.31,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41l.1,0,.3.1a.33.33,0,0,1,.21.22l.1.41v1.51A.31.31,0,0,1,485,880.4Z" />
                                            <path
                                                d="M488,880.4h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.32,0-.14-.09,0-.08-.06-.11-.12h-.4l-.23.16-.06.25a.31.31,0,0,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.11-.11.35-.24a.34.34,0,0,1,.17,0h.61a.29.29,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.11.3a.34.34,0,0,1,0,.1V878a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94H488a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M494.89,880.81l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.11-.76a.42.42,0,0,1,.06-.14l.3-.41a.45.45,0,0,1,.17-.11l.41-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.05-.14-.25-.07h-.23l-.23.07-.2.26,0,.29.39-.1h.28l.49.11a.28.28,0,0,1,.18.12l.2.31.23.44a.35.35,0,0,1,0,.14v.21l-.11.48a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.32.09h.13l.25-.07.19-.19.08-.33v-.05l-.3-.53L495,879h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M497.75,880.81l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.61v-.78l.1-.76a.42.42,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l0-.14-.24-.07h-.24l-.22.07-.2.26,0,.29.57-.1.48.11a.29.29,0,0,1,.14.08l.31.3.06.08.2.41a.37.37,0,0,1,0,.14v.21a.33.33,0,0,1,0,.13l-.2.41-.06.08-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.28-.08.21-.22.15-.36-.15-.3-.21-.21-.33-.08-.27.08-.19.19-.07.27.07.45Z" />
                                            <path
                                                d="M499.7,880.81a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,499.7,880.81Z" />
                                            <path
                                                d="M501.23,880.81a.31.31,0,0,1-.3-.31v-1.43l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44-.44l.41-.4a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.09,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,501.23,880.81Z" />
                                            <path
                                                d="M502.87,880.81a.3.3,0,0,1-.3-.31v-1.36l-.21-.35-.31.06-.17.09-.45.37a.31.31,0,0,1-.44,0,.31.31,0,0,1,.05-.43l.51-.41.26-.13a.13.13,0,0,1,.08,0l.51-.1a.32.32,0,0,1,.28.08l.2.21a.13.13,0,0,1,.06.07l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,502.87,880.81Z" />
                                            <path
                                                d="M505.84,880.81h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.44.25-.33.07-.21v-.19l-.12-.23-.14,0h-.49l-.09,0-.19.23v.13a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.32.32,0,0,1,0-.14l.11-.2a.22.22,0,0,1,.05-.08l.21-.21.08-.06.2-.1a.32.32,0,0,1,.14,0h.61a.16.16,0,0,1,.1,0l.31.1a.3.3,0,0,1,.18.15l.2.41a.32.32,0,0,1,0,.14v.31a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,505.84,880.81Z" />
                                            <path
                                                d="M512.9,881.32h-.2a.32.32,0,0,1-.14,0l-.41-.2A.32.32,0,0,1,512,881l-.2-.31-.23-.56a.27.27,0,0,1,0-.12v-.71l.11-.76a.3.3,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.16-.24-.27-.14h-.16l-.28.14-.22.29,0,.29.39-.09h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.32.32,0,0,1,.08.14l.11.59-.11.48a.39.39,0,0,1-.08.14l-.31.31-.08.06-.41.2A.32.32,0,0,1,512.9,881.32Zm-.13-.61h.06l.3-.15.21-.21.08-.33-.07-.28-.2-.19-.32-.08h-.13l-.25.07-.19.19-.06.23.17.42.13.18Z" />
                                            <path
                                                d="M515.56,881.22l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.1-.76a.3.3,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.28.28,0,0,1,.15.17l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.13,0h.11a.23.23,0,0,1,.11,0l.51.2a.24.24,0,0,1,.14.12l.21.3.22.45a.28.28,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.09.35-.08.14-.21.14-.29-.29-.51-.36-.15-.28.15-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M517.51,881.22a.31.31,0,0,1-.31-.31V879a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,517.51,881.22Z" />
                                            <path
                                                d="M519.15,881.22a.31.31,0,0,1-.31-.31v-1.27l-.18-.36h-.36l-.1,0-.47.48a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.51-.52.08-.05.21-.11a.32.32,0,0,1,.14,0h.51a.31.31,0,0,1,.13,0l.21.11a.29.29,0,0,1,.15.16l.2.51a.22.22,0,0,1,0,.11v1.33A.3.3,0,0,1,519.15,881.22Z" />
                                            <path
                                                d="M520.68,881.22a.31.31,0,0,1-.31-.31v-1.33l0-.27-.1,0h-.31l-.17.05-.35.45a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,520.68,881.22Z" />
                                            <path
                                                d="M523.65,881.22h-1.94a.3.3,0,0,1-.29-.19.29.29,0,0,1,.07-.33l1.33-1.33.26-.46.16-.17v-.09l-.22-.28-.18-.12h-.39l-.12.12-.08,0-.09.05,0,.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.36.36,0,0,1,0-.1l.1-.3a.27.27,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.61a.34.34,0,0,1,.17.05l.46.35.24.35a.26.26,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.2.21-.26.45-.86.87h1.21a.3.3,0,0,1,.31.3A.31.31,0,0,1,523.65,881.22Z" />
                                            <path
                                                d="M530.61,881.53l-.48-.11a.53.53,0,0,1-.15-.08l-.3-.31a.42.42,0,0,1-.08-.12l-.2-.62h0a.3.3,0,0,1,0-.1v-.61s0-.05,0-.08l.21-.72.21-.54a.32.32,0,0,1,.23-.19l.51-.1h.26l.58.1a.34.34,0,0,1,.23.21l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.14-.34-.07h-.14l-.29.06-.22.63.4-.16.11,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.34.34,0,0,1,.13.18l.1.41v.28l-.11.49a.39.39,0,0,1-.08.14l-.31.31-.14.08Zm-.25-.69.32.08.28-.08.19-.19.08-.32v-.13l-.06-.22-.21-.14-.3-.15-.38.15-.12.13-.13.25.14.43Z" />
                                            <path
                                                d="M533.37,881.53l-.48-.11-.14-.08-.31-.31a.28.28,0,0,1-.09-.17l-.1-.61v-.67l.1-.76a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.48.11a.35.35,0,0,1,.19.12l.2.31a.31.31,0,1,1-.51.34l-.14-.21-.29-.07h-.24l-.21.06L533,879l0,.2.38-.09h.28l.48.11a.32.32,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.47.47,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32v-.13L534,880l-.19-.19-.33-.08h-.13l-.25.06-.19.19-.06.28.07.44Z" />
                                            <path
                                                d="M535.42,881.53a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,535.42,881.53Z" />
                                            <path
                                                d="M537,881.53a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.36a.32.32,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07L536,879h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,537,881.53Z" />
                                            <path
                                                d="M538.49,881.53a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,538.49,881.53Z" />
                                            <path
                                                d="M541.46,881.53h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.4-1.39.35-.63v-.09l-.12-.11a.35.35,0,0,1,0-.08l0-.09-.14-.05h-.41l-.14.05,0,.09-.06.08-.12.11V879a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.31.31,0,0,1,.18-.16l.3-.1h.71l.31.1a.33.33,0,0,1,.17.16l.08.16.17.17a.27.27,0,0,1,.09.21v.31a.26.26,0,0,1,0,.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M587.21,882.45l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.23.23,0,0,1-.07-.1l-.2-.51a.28.28,0,0,1,0-.13v-.71s0,0,0-.08l.21-.72a.47.47,0,0,1,0-.1l.31-.41a.45.45,0,0,1,.1-.09l.41-.2a.35.35,0,0,1,.14,0h.21a.23.23,0,0,1,.11,0l.51.2a.37.37,0,0,1,.18.19l.1.31a.31.31,0,1,1-.58.19l-.06-.17-.4-.13-.28.14-.23.31-.08.29.38-.19a.25.25,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2a.16.16,0,0,1,.08.06l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.33.08.27-.07.19-.19.08-.33-.07-.28-.22-.21-.28-.14-.28.14-.23.23-.12.24.13.33Z" />
                                            <path
                                                d="M590,882.45l-.48-.11a.39.39,0,0,1-.14-.08L589,882a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41.11-.09.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.12.11l.2.31a.29.29,0,0,1-.08.42.32.32,0,0,1-.43-.08l-.16-.24-.27-.14h-.16l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.21a.25.25,0,0,1,.14,0l.41.2a.21.21,0,0,1,.08.06l.3.3a.28.28,0,0,1,.08.15l.12.58-.12.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.33-.08-.28-.21-.21-.36-.15-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M592,882.45a.31.31,0,0,1-.31-.31V880.2a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,592,882.45Z" />
                                            <path
                                                d="M593.56,882.45a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.28.28,0,0,1,.2.23l.11.51v1.39A.3.3,0,0,1,593.56,882.45Z" />
                                            <path
                                                d="M595.09,882.45a.31.31,0,0,1-.31-.31v-1.33l0-.27-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,595.09,882.45Z" />
                                            <path
                                                d="M598.06,882.45h-1.94a.32.32,0,0,1-.29-.19.29.29,0,0,1,.07-.33l1.4-1.4.18-.37a.21.21,0,0,1,.06-.08l.11-.11v-.09l-.22-.28-.18-.12h-.33l-.28.22-.11.19a.31.31,0,1,1-.62,0v-.1a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.26.26,0,0,1,.17,0h.51a.26.26,0,0,1,.17,0l.46.34.24.36a.27.27,0,0,1,.06.17v.31a.28.28,0,0,1-.1.21l-.16.17-.19.37a.35.35,0,0,1-.05.08l-.91.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,598.06,882.45Z" />
                                            <path
                                                d="M604.92,883.17l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.23.06-.2.26,0,.3.39-.1h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41V882l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.69.32.08h.13l.25-.07.19-.19.08-.32v-.13l-.06-.25-.19-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M607.78,883.17l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.32.32,0,0,1-.09-.17l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.31.31,0,0,1,.22.21l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.15-.24-.06h-.24l-.22.06-.2.26,0,.3.57-.11.57.11a.26.26,0,0,1,.19.13l.21.31.22.44a.32.32,0,0,1,0,.14v.2a.35.35,0,0,1,0,.14l-.2.41-.23.34a.33.33,0,0,1-.19.13Zm-.25-.69.33.08.35-.08.14-.2.15-.37-.29-.52-.38-.07-.3.07-.19.19-.06.28.07.44Z" />
                                            <path
                                                d="M609.73,883.17a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,1,1,.62,0v2.05A.31.31,0,0,1,609.73,883.17Z" />
                                            <path
                                                d="M611.37,883.17a.31.31,0,0,1-.31-.31V881.5l-.14-.27-.16-.11h-.19l-.11.11-.54.44a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.69-.6a.31.31,0,0,1,.21-.09h.41a.3.3,0,0,1,.18.06l.3.2a.32.32,0,0,1,.11.12l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,611.37,883.17Z" />
                                            <path
                                                d="M612.9,883.17a.31.31,0,0,1-.31-.31V881.5l-.23-.38h-.25l-.53.52a.3.3,0,0,1-.43-.43l.61-.62a.36.36,0,0,1,.22-.09h.51a.36.36,0,0,1,.22.09l.2.21a.16.16,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,612.9,883.17Z" />
                                            <path
                                                d="M615.87,883.17h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.33-1.43.26-.35.07-.21v-.21l-.07-.19-.19-.06h-.49l-.09,0-.19.22v.14a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.35.35,0,0,1,0-.14l.1-.2.06-.08.21-.2a.16.16,0,0,1,.08-.06l.2-.1a.23.23,0,0,1,.14,0h.61l.1,0,.31.1a.42.42,0,0,1,.12.08l.1.1a.24.24,0,0,1,.07.12l.11.3a.38.38,0,0,1,0,.1v.31a.38.38,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.87.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M622.83,883.57l-.57-.1a.39.39,0,0,1-.2-.13l-.2-.31-.23-.56v0a.28.28,0,0,1,0-.09v-.71s0-.06,0-.08l.21-.72.22-.46a.33.33,0,0,1,.16-.15l.52-.21.11,0h.2a.23.23,0,0,1,.14,0l.41.2a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.34-.13-.35.14-.15.3-.07.25.4-.16.11,0h.1a.32.32,0,0,1,.14,0l.41.21.08,0,.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.68.39.08.29-.08.19-.19.08-.33-.08-.27-.21-.22-.29-.14-.35.14-.28.48.16.38Z" />
                                            <path
                                                d="M625.59,883.57l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.51.51,0,0,1-.09-.16l-.1-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0h.31a.25.25,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.06-.19-.23-.11h-.16l-.28.14-.22.29,0,.27.33-.16a.31.31,0,0,1,.13,0h.21a.31.31,0,0,1,.13,0l.41.21.08,0,.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.22.22,0,0,1-.14.08l-.41.11Zm-.25-.68.33.08h.13l.25-.07.19-.19.08-.33-.08-.27-.21-.22-.36-.15-.3.15-.22.21-.06.28.07.34Z" />
                                            <path
                                                d="M627.64,883.57a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.62,0v1.95A.3.3,0,0,1,627.64,883.57Z" />
                                            <path
                                                d="M629.18,883.57a.3.3,0,0,1-.31-.3V882l-.18-.37h-.36l-.08,0-.37.46a.31.31,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.52a.39.39,0,0,1,.1-.08l.21-.1a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.1a.29.29,0,0,1,.15.16l.2.51a.5.5,0,0,1,0,.12v1.33A.29.29,0,0,1,629.18,883.57Z" />
                                            <path
                                                d="M630.71,883.57a.3.3,0,0,1-.31-.3v-1.33l-.06-.28-.09,0h-.31l-.17.06-.36.44a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.52a.3.3,0,0,1,.14-.1l.3-.1h.61l.31.1a.33.33,0,0,1,.2.24l.1.51v1.39A.3.3,0,0,1,630.71,883.57Z" />
                                            <path
                                                d="M633.68,883.57h-1.95a.3.3,0,0,1-.21-.52l1.4-1.4.18-.36a.22.22,0,0,1,0-.08l.12-.12V881l-.22-.29-.18-.11h-.33l-.35.21-.05.2a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.28.28,0,0,1,0-.09l.11-.31a.3.3,0,0,1,.15-.18l.21-.1.27-.19a.34.34,0,0,1,.17,0H633a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,0,.17v.31a.31.31,0,0,1-.09.22l-.17.17-.18.36a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,633.68,883.57Z" />
                                            <path
                                                d="M640.74,883.57l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.3a.41.41,0,0,1-.07-.11l-.2-.51a.27.27,0,0,1,0-.12v-.71a.19.19,0,0,1,0-.08l.2-.72.22-.46a.35.35,0,0,1,.17-.15l.51-.21.11,0H641l.11,0,.51.21a.29.29,0,0,1,.16.15l.11.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.13l0-.1-.44-.14-.35.14-.15.3-.08.3.38-.2a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.28.28,0,0,1,.13.19l.11.68-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.19-.19.08-.33-.07-.35-.21-.13-.29-.15-.52.3-.12.31.14.34Z" />
                                            <path
                                                d="M643.5,883.57l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0h.31l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.3.3,0,0,1-.43-.08l-.14-.21-.29-.07h-.16l-.28.15-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.21.34.22a.32.32,0,0,1,.12.18l.11.41v.28l-.12.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08l-.41.11Zm-.25-.68.33.08h.13l.25-.07.19-.19.08-.33v-.13l-.06-.21-.21-.14-.37-.16-.52.29-.06.34.07.35Z" />
                                            <path
                                                d="M645.55,883.57a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.62,0v1.95A.3.3,0,0,1,645.55,883.57Z" />
                                            <path
                                                d="M647.09,883.57a.3.3,0,0,1-.31-.3v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,647.09,883.57Z" />
                                            <path
                                                d="M648.62,883.57a.3.3,0,0,1-.31-.3v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,648.62,883.57Z" />
                                            <path
                                                d="M651.59,883.57h-1.94a.31.31,0,0,1-.29-.18.31.31,0,0,1,.07-.34l1.4-1.4.35-.64-.22-.36-.14,0h-.41l-.14,0,0,.09-.17.28a.31.31,0,0,1-.62,0v-.11a.34.34,0,0,1,0-.17l.29-.48a.34.34,0,0,1,.18-.15l.31-.1.09,0h.51l.1,0,.31.1a.38.38,0,0,1,.18.15l.1.21.18.27a.27.27,0,0,1,.06.17v.21a.27.27,0,0,1-.06.17l-.2.31-.19.37a.22.22,0,0,1-.05.08l-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,651.59,883.57Z" />
                                            <path
                                                d="M548.62,881.83h-.1a.35.35,0,0,1-.14,0l-.41-.2-.34-.23a.31.31,0,0,1-.13-.2l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.34.34,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.15-.25-.06h-.23l-.23.06-.19.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.31.06.08.2.41a.31.31,0,0,1,0,.13v.11a.22.22,0,0,1,0,.11l-.2.51a.33.33,0,0,1-.12.14l-.31.21-.44.22A.32.32,0,0,1,548.62,881.83Zm-.54-.89.2.13.29.14.52-.29.14-.36-.14-.28-.21-.21-.33-.09-.28.08-.19.19-.07.28Z" />
                                            <path
                                                d="M551.49,881.83h-.1a.25.25,0,0,1-.12,0l-.51-.2-.1-.07-.21-.2a.37.37,0,0,1-.07-.12l-.2-.62a.18.18,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.47a.31.31,0,0,1,.22-.16l.51-.1h.26l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.13l-.31.06-.13.28-.08.27.62-.1.48.11a.28.28,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.12.59-.11.57a.33.33,0,0,1-.13.19l-.31.21-.44.22A.35.35,0,0,1,551.49,881.83Zm-.44-.77.38.15.5-.28.08-.38-.08-.29-.19-.19-.32-.09-.36.08-.26.47.14.42Z" />
                                            <path
                                                d="M553.33,881.83a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,553.33,881.83Z" />
                                            <path
                                                d="M554.87,881.83a.3.3,0,0,1-.31-.3V880.1l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.28.28,0,0,1,.12.18l.11.41v1.51A.29.29,0,0,1,554.87,881.83Z" />
                                            <path
                                                d="M556.4,881.83a.29.29,0,0,1-.3-.3V880.1l-.06-.22-.14-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06H556a.27.27,0,0,1,.17.06l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,556.4,881.83Z" />
                                            <path
                                                d="M559.37,881.83h-1.94a.31.31,0,0,1-.29-.18.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l-.05-.14-.3-.11h-.42L558,879l-.11.19a.31.31,0,1,1-.62,0v-.1a.34.34,0,0,1,0-.17l.35-.45a.25.25,0,0,1,.12-.08l.31-.1.09,0h.51l.1,0,.55.22a.31.31,0,0,1,.16.18l.1.3a.44.44,0,0,1,0,.1v.31a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.31.41-.93.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,559.37,881.83Z" />
                                            <path
                                                d="M569.5,882.24h-.2a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.38.38,0,0,1,.17-.12l.41-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.23.06-.19.26,0,.3.39-.1h.28l.49.11a.29.29,0,0,1,.18.13l.2.3.23.45a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.21.4a.22.22,0,0,1,0,.08l-.21.21-.08.06-.41.2A.32.32,0,0,1,569.5,882.24Zm-.13-.61h.06l.3-.15.14-.13L570,881l-.28-.52-.3-.08h-.13l-.25.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M572.27,882.24h-.11a.31.31,0,0,1-.13,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2L571,881v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.2l-.05-.15-.24-.06h-.24l-.22.06-.2.26,0,.3.57-.11.48.11a.22.22,0,0,1,.14.08l.31.31.06.08.2.41a.33.33,0,0,1,0,.13v.21a.37.37,0,0,1,0,.14l-.2.41a.38.38,0,0,1-.11.11l-.3.21-.45.22A.31.31,0,0,1,572.27,882.24Zm-.54-.89.2.13.29.14.52-.3.14-.33-.15-.3-.21-.22-.33-.08-.27.08-.19.19-.07.28Z" />
                                            <path
                                                d="M574.11,882.24a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,1,1,.62,0v2.05A.3.3,0,0,1,574.11,882.24Z" />
                                            <path
                                                d="M575.64,882.24a.29.29,0,0,1-.3-.3V880.5l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,575.64,882.24Z" />
                                            <path
                                                d="M577.28,882.24a.3.3,0,0,1-.31-.3v-1.36l-.13-.28-.16-.1h-.19l-.12.11-.53.43a.31.31,0,0,1-.44,0,.33.33,0,0,1,.05-.44l.69-.59a.36.36,0,0,1,.22-.09h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,577.28,882.24Z" />
                                            <path
                                                d="M580.25,882.24h-2a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l-.06-.19-.2-.06H579l-.19.06-.06.19v.16a.31.31,0,0,1-.62,0v-.21a.36.36,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.11-.11a.35.35,0,0,1,.12-.07l.3-.1.1,0h.61l.1,0,.31.1.12.07.1.11a.36.36,0,0,1,.08.12l.1.3a.34.34,0,0,1,0,.1v.31a.28.28,0,0,1,0,.09l-.1.31,0,.09-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,580.25,882.24Z" />
                                            <path
                                                d="M547.91,914.59h-.1a.32.32,0,0,1-.14,0l-.41-.21a.16.16,0,0,1-.08-.06l-.31-.3a.41.41,0,0,1-.07-.11l-.2-.51h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.16-.15l.51-.2.12,0h.2a.2.2,0,0,1,.11,0l.52.2a.29.29,0,0,1,.17.19l.11.31a.31.31,0,0,1-.59.19l-.06-.17-.41-.13-.34.14-.16.3-.07.27.62-.1.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.4.21A.35.35,0,0,1,547.91,914.59Zm-.33-.77.28.14.27-.14.22-.21.08-.32-.08-.28-.19-.19-.33-.08-.35.07-.26.46.13.33Z" />
                                            <path
                                                d="M550.57,914.49l-.49-.12a.29.29,0,0,1-.14-.08l-.3-.3a.29.29,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.31a.22.22,0,0,1,.13,0l.41.2a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.13h-.16l-.28.14-.22.29,0,.27.33-.16a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.08.05.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.69.32.08h.13l.25-.07.19-.19.08-.32-.07-.28-.22-.22-.36-.15-.3.15-.21.21-.07.28.07.34Z" />
                                            <path
                                                d="M552.62,914.49a.31.31,0,0,1-.31-.31v-1.95a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.95A.3.3,0,0,1,552.62,914.49Z" />
                                            <path
                                                d="M554.15,914.49a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.17.06-.35.44a.33.33,0,0,1-.44.05.3.3,0,0,1,0-.43l.41-.52a.3.3,0,0,1,.14-.1l.3-.1h.61l.31.1a.33.33,0,0,1,.2.24l.1.51v1.39A.31.31,0,0,1,554.15,914.49Z" />
                                            <path
                                                d="M555.69,914.49a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,0,1-.43.05.3.3,0,0,1-.05-.43l.41-.52a.45.45,0,0,1,.14-.1l.31-.1h.6l.31.1a.31.31,0,0,1,.2.24l.11.51v1.39A.3.3,0,0,1,555.69,914.49Z" />
                                            <path
                                                d="M558.65,914.49h-1.94a.31.31,0,0,1-.29-.2.33.33,0,0,1,.08-.34l1.38-1.28.18-.45a.36.36,0,0,1,.07-.1l.11-.12v-.08l-.21-.29-.18-.11h-.33l-.29.21-.11.2a.31.31,0,0,1-.62,0v-.11a.27.27,0,0,1,.06-.17l.34-.45.35-.24a.3.3,0,0,1,.18-.06h.51a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.16.16-.18.45a.28.28,0,0,1-.08.11l-.86.8h1.16a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M568.68,914.89h-.1a.35.35,0,0,1-.14,0l-.4-.2-.34-.23a.32.32,0,0,1-.14-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.31.31,0,0,1,.22.21l.1.3a.31.31,0,0,1-.58.2l-.05-.15-.25-.06h-.23l-.22.06-.2.26,0,.3.56-.11.49.11a.29.29,0,0,1,.14.08l.31.31.06.08.2.41a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.2.41-.06.08-.31.31-.08.06-.41.2A.32.32,0,0,1,568.68,914.89Zm-.53-.89.19.13.29.14.28-.14.24-.24.14-.27-.14-.28-.21-.21-.33-.09-.28.08-.19.19-.07.28Z" />
                                            <path
                                                d="M571.55,914.89h-.1a.25.25,0,0,1-.12,0l-.51-.2a.53.53,0,0,1-.14-.12l-.2-.3-.24-.56v-.05a.19.19,0,0,1,0-.08v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.47a.31.31,0,0,1,.22-.16l.51-.1h.26l.57.11a.32.32,0,0,1,.24.21l.1.3a.31.31,0,0,1-.2.39.29.29,0,0,1-.38-.19l-.05-.14-.34-.07h-.14l-.3.06-.14.28-.08.27.62-.1.48.11a.28.28,0,0,1,.15.08l.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.42.42,0,0,1-.09.14l-.3.31-.08.06-.41.2A.32.32,0,0,1,571.55,914.89Zm-.41-.76.35.14.29-.14.21-.21.08-.33-.08-.27-.19-.19-.32-.09-.36.08-.26.46.16.38Z" />
                                            <path
                                                d="M573.39,914.89a.29.29,0,0,1-.3-.3v-2.05a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2.05A.3.3,0,0,1,573.39,914.89Z" />
                                            <path
                                                d="M574.93,914.89a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23L574,913l-.36.37a.3.3,0,0,1-.43-.43l.4-.41.36-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.28.28,0,0,1,.12.18l.11.41v1.51A.3.3,0,0,1,574.93,914.89Z" />
                                            <path
                                                d="M576.46,914.89a.29.29,0,0,1-.3-.3v-1.44l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.3.3,0,0,1,.18.06l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,576.46,914.89Z" />
                                            <path
                                                d="M579.53,914.89h-2a.31.31,0,0,1-.29-.18.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l0-.14-.09,0-.09-.06-.11-.12h-.39l-.33.28a.32.32,0,0,1-.06.35.3.3,0,0,1-.43,0l-.11-.1a.32.32,0,0,1,0-.39l.35-.45.35-.25a.34.34,0,0,1,.17,0h.62a.27.27,0,0,1,.21.09l.17.17.16.08a.31.31,0,0,1,.16.18l.1.3a.44.44,0,0,1,0,.1v.31a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.3a.31.31,0,0,1,.31.31A.3.3,0,0,1,579.53,914.89Z" />
                                            <path
                                                d="M675.23,916.12l-.48-.11a.29.29,0,0,1-.18-.13l-.21-.3-.23-.56v0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.47a.35.35,0,0,1,.14-.13l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.31.31,0,1,1-.51.34l-.16-.24-.27-.14h-.16l-.26.13-.16.32-.06.23.27-.13a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.2.08.06.3.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.22-.68.3.08h.13l.25-.07.19-.19.08-.33-.08-.27-.21-.22-.36-.15-.28.14-.28.49.15.38Z" />
                                            <path
                                                d="M678.1,916.12l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.24.24,0,0,1-.09-.15L677,915a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.35.35,0,0,1,.14.13l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l0-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.16a.35.35,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.12.11l.2.31.23.44a.31.31,0,0,1,0,.13V915a.28.28,0,0,1,0,.13l-.21.41-.22.34a.29.29,0,0,1-.18.13l-.41.1Zm-.25-.68.32.08h.13l.22-.06.14-.21.15-.29-.31-.53-.33-.14-.3.15-.21.21-.07.28.08.33Z" />
                                            <path
                                                d="M680.15,916.12a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.29.29,0,0,1,680.15,916.12Z" />
                                            <path
                                                d="M681.68,916.12a.29.29,0,0,1-.3-.3v-1.28l-.18-.36h-.37l-.08,0-.36.46a.31.31,0,0,1-.43.05.31.31,0,0,1-.05-.44l.41-.51a.27.27,0,0,1,.1-.08l.2-.1a.37.37,0,0,1,.14,0h.51a.33.33,0,0,1,.14,0l.2.1a.26.26,0,0,1,.15.16l.21.51a.5.5,0,0,1,0,.12v1.33A.3.3,0,0,1,681.68,916.12Z" />
                                            <path
                                                d="M683.22,916.12a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31l-.18.06-.35.44a.31.31,0,0,1-.43.05.33.33,0,0,1,0-.44l.41-.51a.45.45,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.2.22l.11.41v1.51A.3.3,0,0,1,683.22,916.12Z" />
                                            <path
                                                d="M686.19,916.12h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.18-.36.06-.08.12-.12v-.08l-.22-.29-.18-.12h-.33l-.35.22-.05.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.28.28,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.2-.1.28-.19a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,0,.17v.31a.31.31,0,0,1-.09.22l-.17.17-.18.36-.06.08-.91.91h1.21a.3.3,0,0,1,.3.31A.29.29,0,0,1,686.19,916.12Z" />
                                            <path
                                                d="M657.32,916h-.1l-.11,0-.52-.21a.36.36,0,0,1-.14-.11l-.2-.31-.23-.56a.28.28,0,0,1,0-.13V914s0-.05,0-.08l.21-.72.22-.46a.33.33,0,0,1,.22-.16l.51-.11h.26l.49.11a.29.29,0,0,1,.18.13l.2.3a.3.3,0,0,1-.08.43.32.32,0,0,1-.43-.08l-.14-.21-.29-.08h-.13l-.3.07-.14.27-.08.27.62-.1.49.12a.29.29,0,0,1,.14.08l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31-.08,0-.41.21A.32.32,0,0,1,657.32,916Zm-.41-.76.35.14.29-.14.21-.21.08-.33-.07-.28-.19-.19-.33-.08-.36.08-.26.45.16.39Z" />
                                            <path
                                                d="M660.19,916H660a.31.31,0,0,1-.13,0l-.41-.21-.08,0-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.56.56,0,0,1,0-.13V914l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.33.33,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.41.41,0,0,1,.12.11l.2.3a.31.31,0,1,1-.51.35l-.16-.24-.27-.14h-.16l-.28.14-.22.29,0,.29.39-.1h.28l.48.12a.28.28,0,0,1,.15.08l.3.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.3.31-.08,0-.41.21A.35.35,0,0,1,660.19,916Zm-.13-.61h.06l.3-.15.21-.21.08-.33-.08-.28-.19-.19-.33-.08H660l-.25.07-.19.19-.06.27.07.34.21.21Z" />
                                            <path
                                                d="M662,916a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,662,916Z" />
                                            <path
                                                d="M663.57,915.92a.31.31,0,0,1-.31-.31v-1.27l-.18-.37h-.24l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.31.31,0,0,1,.13,0l.21.1a.35.35,0,0,1,.15.17l.2.51a.2.2,0,0,1,0,.11v1.33A.3.3,0,0,1,663.57,915.92Z" />
                                            <path
                                                d="M665.1,915.92a.31.31,0,0,1-.31-.31v-1.33l0-.28-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.4-.51a.31.31,0,0,1,.15-.1l.3-.1a.2.2,0,0,1,.1,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,665.1,915.92Z" />
                                            <path
                                                d="M668.07,915.92h-2a.3.3,0,0,1-.28-.2.28.28,0,0,1,.08-.33l1.38-1.29.18-.44a.39.39,0,0,1,.06-.11l.12-.11v-.09l-.22-.29-.18-.11h-.33l-.35.22-.05.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.3.3,0,0,1,0-.1l.1-.31a.28.28,0,0,1,.15-.17l.21-.11.27-.18a.26.26,0,0,1,.17,0h.51a.26.26,0,0,1,.17,0l.46.34.24.36a.26.26,0,0,1,0,.17v.3a.29.29,0,0,1-.09.22l-.16.16-.18.46a.26.26,0,0,1-.07.11l-.86.79h1.16a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M693.56,917.25l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.61.61,0,0,1-.07-.1l-.2-.51a.27.27,0,0,1,0-.13v-.71a.25.25,0,0,1,0-.08l.2-.72.05-.1.31-.41.11-.09.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.31.31,0,1,1-.55.27l-.06-.11-.25-.13h-.16l-.28.14-.23.31L693,915l.38-.2a.32.32,0,0,1,.14,0h.1a.25.25,0,0,1,.14,0l.4.2a.16.16,0,0,1,.08.06l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.32.32,0,0,1-.14.08Zm-.26-.69.33.08.28-.07.19-.19.08-.33-.08-.28-.21-.21-.28-.14-.28.14-.24.23L693,916l.13.33Z" />
                                            <path
                                                d="M696.32,917.25l-.48-.11a.36.36,0,0,1-.19-.13l-.2-.31-.23-.56v0h0a.3.3,0,0,1,0-.1v-.71s0,0,0-.08l.21-.72.22-.46a.32.32,0,0,1,.14-.14l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2.08.06.21.21a.3.3,0,0,1,0,.43.31.31,0,0,1-.44,0l-.17-.17-.3-.15h-.16l-.25.13-.16.32-.07.23.27-.14a.35.35,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.22-.68.29.07h.13l.25-.06.19-.19.08-.33-.07-.28-.22-.21-.36-.15-.27.13-.28.49.15.39Z" />
                                            <path
                                                d="M698.37,917.25a.31.31,0,0,1-.31-.31V915a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,698.37,917.25Z" />
                                            <path
                                                d="M699.9,917.25a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.4v1.51A.31.31,0,0,1,699.9,917.25Z" />
                                            <path
                                                d="M701.44,917.25a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0H701l.09,0,.31.1a.28.28,0,0,1,.2.22l.1.4v1.51A.3.3,0,0,1,701.44,917.25Z" />
                                            <path
                                                d="M704.4,917.25h-1.94a.31.31,0,0,1-.22-.53l1.44-1.43.24-.33.07-.32,0-.14-.35-.22h-.33l-.29.22-.11.19a.31.31,0,1,1-.62,0v-.1a.27.27,0,0,1,.06-.17l.34-.46.36-.24a.26.26,0,0,1,.17-.05h.51a.26.26,0,0,1,.17.05l.48.29a.28.28,0,0,1,.15.17l.1.31a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M729,917.25h-.21a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.6v-.78l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.32.32,0,0,1,.18.13l.2.3a.31.31,0,1,1-.51.34l-.14-.2-.29-.08h-.24l-.22.06-.2.27,0,.29.39-.1H729l.48.11a.53.53,0,0,1,.15.08l.3.31a.28.28,0,0,1,.08.15l.12.58-.11.57a.39.39,0,0,1-.13.2l-.31.2-.44.23A.35.35,0,0,1,729,917.25Zm-.13-.62h.06l.51-.28.08-.39-.08-.29-.19-.19-.33-.08h-.13l-.24.07-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M731.73,917.25h-.1a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.31.31,0,0,1,.22.2l.1.31a.31.31,0,0,1-.58.19l0-.15-.25-.06h-.23l-.23.06-.19.27-.05.29.57-.11.58.11a.31.31,0,0,1,.19.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.27.27,0,0,1-.06.1l-.21.2a.23.23,0,0,1-.1.07l-.51.21Zm-.54-.9.2.13.3.15.38-.15.12-.12.15-.38-.28-.5-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M733.58,917.25a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.31-.3.3.3,0,0,1,.3.3v2.05A.3.3,0,0,1,733.58,917.25Z" />
                                            <path
                                                d="M735.21,917.25a.3.3,0,0,1-.3-.31v-1.36l-.23-.38h-.26l-.12.12-.53.43a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.51a.29.29,0,0,1,.22.09l.21.2a.35.35,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,735.21,917.25Z" />
                                            <path
                                                d="M736.75,917.25a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09H736l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.35.35,0,0,1,.12.19l.11.4v1.51A.31.31,0,0,1,736.75,917.25Z" />
                                            <path
                                                d="M739.72,917.25h-2a.3.3,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.33-1.43.43-.6v-.12l-.16-.23-.2-.07h-.49l-.23.12-.05.14v.15a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.31.31,0,0,1,0-.1l.11-.31a.3.3,0,0,1,.15-.18l.41-.2a.32.32,0,0,1,.14,0h.71l.3.1a.36.36,0,0,1,.12.08l.11.1.24.36a.31.31,0,0,1,0,.17v.3a.34.34,0,0,1,0,.17l-.52.73-.88.94h1.25a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M710.75,917l-.57-.1a.39.39,0,0,1-.2-.13l-.2-.31a.2.2,0,0,1,0-.08l-.2-.61a.36.36,0,0,1,0-.1V915s0-.06,0-.09l.21-.71.22-.47a.35.35,0,0,1,.2-.16l.41-.1H711l.49.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.52.34l-.14-.21-.29-.07h-.23l-.2,0-.14.29-.07.26.33-.08h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.68.39.08.29-.08.19-.19.08-.33v-.13l-.06-.25-.19-.19-.33-.08h-.13l-.22.06-.27.48.15.45Z" />
                                            <path
                                                d="M713.51,917l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.32.32,0,0,1-.09-.17l-.1-.61V915l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.24l-.22.06-.2.26,0,.29.39-.09h.28l.48.11a.27.27,0,0,1,.18.13l.21.3.22.45a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.2.4-.23.35a.29.29,0,0,1-.18.12l-.41.11Zm-.25-.68.33.08h.13l.22-.06.14-.21.15-.37-.29-.52-.3-.08h-.13l-.25.07-.19.19-.06.28.07.44Z" />
                                            <path
                                                d="M715.56,917a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,715.56,917Z" />
                                            <path
                                                d="M717.1,917a.3.3,0,0,1-.31-.3v-1.36l-.2-.36-.44.13-.37.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.21.21,0,0,1,.08-.06l.21-.1.07,0,.52-.1a.3.3,0,0,1,.27.08l.21.21.06.08.2.41a.31.31,0,0,1,0,.13v1.44A.29.29,0,0,1,717.1,917Z" />
                                            <path
                                                d="M718.63,917a.3.3,0,0,1-.31-.3V915.3l-.06-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,718.63,917Z" />
                                            <path
                                                d="M721.6,917h-1.94a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.4-1.4.35-.62v-.09l-.11-.12a.16.16,0,0,1-.06-.08l0-.09-.14,0h-.41l-.19.06-.17.21v.14a.3.3,0,0,1-.3.3.31.31,0,0,1-.31-.3v-.21a.35.35,0,0,1,0-.14l.11-.2a.22.22,0,0,1,0-.08l.21-.21a.35.35,0,0,1,.12-.07l.3-.1.1,0h.51l.1,0,.31.1a.38.38,0,0,1,.18.15l.07.16.17.17a.31.31,0,0,1,.09.22v.31a.26.26,0,0,1,0,.17l-.2.31-.19.37a.22.22,0,0,1-.05.08l-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,721.6,917Z" />
                                            <text class="cls-10" transform="translate(495.61 906.31)">C27</text>
                                            <text class="cls-10" transform="translate(476.9 906.1)">C26</text>
                                            <text class="cls-10" transform="translate(458.98 906.32)">C25</text>
                                            <text class="cls-10" transform="translate(440.35 906.16)">C24</text>
                                            <text class="cls-10" transform="translate(511.78 904.8)">C28</text>
                                            <text class="cls-10" transform="translate(731.67 874.59)">C1</text>
                                            <text class="cls-10" transform="translate(713.86 873.98)">C2</text>
                                            <text class="cls-10" transform="translate(693.49 874.59)">C3</text>
                                            <text class="cls-10" transform="translate(676.19 874.34)">C4</text>
                                            <text class="cls-10" transform="translate(658.68 873.77)">C5</text>
                                            <text class="cls-10" transform="translate(639.86 874.34)">C6</text>
                                            <text class="cls-10" transform="translate(624.71 873.47)">C7</text>
                                            <text class="cls-10" transform="translate(607.37 873.49)">C8</text>
                                            <text class="cls-10" transform="translate(589.66 872.78)">C9</text>
                                            <text class="cls-10" transform="translate(569.29 872.39)">C10</text>
                                            <text class="cls-10" transform="translate(531.31 872.14)">C12</text>
                                            <text class="cls-10" transform="translate(512.48 872.14)">C13</text>
                                            <text class="cls-10" transform="translate(548.16 872.14)">C11</text>
                                            <text class="cls-10" transform="translate(728.72 907.14)">C40</text>
                                            <text class="cls-10" transform="translate(710.91 906.53)">C39</text>
                                            <text class="cls-10" transform="translate(690.54 907.14)">C38</text>
                                            <text class="cls-10" transform="translate(673.24 906.88)">C37</text>
                                            <text class="cls-10" transform="translate(655.73 906.32)">C36</text>
                                            <text class="cls-10" transform="translate(636.91 906.88)">C35</text>
                                            <text class="cls-10" transform="translate(621.76 906.01)">C34</text>
                                            <text class="cls-10" transform="translate(604.42 906.04)">C33</text>
                                            <text class="cls-10" transform="translate(586.71 905.32)">C32</text>
                                            <text class="cls-10" transform="translate(566.34 904.94)">C31</text>
                                            <text class="cls-10" transform="translate(528.36 904.68)">C29</text>
                                            <text class="cls-10" transform="translate(545.21 904.68)">C30</text>
                                            <text class="cls-10" transform="translate(493.43 871.19)">C14</text>
                                            <text class="cls-10" transform="translate(459.58 871.19)">C16</text>
                                            <text class="cls-10" transform="translate(440.76 871.19)">C17</text>
                                            <text class="cls-10" transform="translate(476.43 871.19)">C15</text>
                                            <path
                                                d="M368.74,470.38a27.69,27.69,0,1,1,27.68-27.69A27.72,27.72,0,0,1,368.74,470.38Zm0-54.76a27.07,27.07,0,1,0,27.07,27.07A27.1,27.1,0,0,0,368.74,415.62Z" />
                                            <path
                                                d="M352.21,877.64a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.56a.31.31,0,0,1-.3-.31.3.3,0,0,1,.3-.3h2.05a.29.29,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.34.34,0,0,1,352.21,877.64Z" />
                                            <path
                                                d="M355.59,877.64h-.31a.32.32,0,0,1-.14,0l-.41-.21a.31.31,0,0,1-.11-.09l-.3-.41a.35.35,0,0,1-.06-.14l-.1-.72v-.45l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.4-.1h.39l.48.11a.25.25,0,0,1,.17.11l.31.41a.35.35,0,0,1,.06.14l.1.72V876l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.24.24,0,0,1-.11.09l-.41.21A.31.31,0,0,1,355.59,877.64Zm-.24-.62h.16l.28-.14.22-.28.09-.64v-.37L356,875l-.19-.26-.31-.08h-.19l-.27.07-.19.26-.1.63V876l.09.6.21.28Z" />
                                            <path
                                                d="M357.43,877.64a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,357.43,877.64Z" />
                                            <path
                                                d="M359,877.64a.3.3,0,0,1-.3-.31V875.9l-.06-.22-.14-.09h-.22l-.23.15-.36.38a.31.31,0,1,1-.44-.44l.41-.41L358,875a.37.37,0,0,1,.18,0h.4a.31.31,0,0,1,.17,0l.31.2a.32.32,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,359,877.64Z" />
                                            <path
                                                d="M360.5,877.64a.31.31,0,0,1-.31-.31V875.9l-.06-.22-.13-.09h-.23l-.23.15-.36.38a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.31.31,0,0,1,.12.18l.11.41v1.51A.31.31,0,0,1,360.5,877.64Z" />
                                            <path
                                                d="M363.57,877.64h-2.05a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.21l-.05-.13-.23-.12h-.49l-.19.06-.07.19v.16a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.29.29,0,0,1,0-.09l.1-.31a.29.29,0,0,1,.07-.12l.1-.1a.35.35,0,0,1,.13-.08l.3-.1h.71a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.28.28,0,0,1,0,.09v.31a.34.34,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M355,910.9h-.61a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.1-.1-.24-.36a.27.27,0,0,1-.06-.17v-.41a.27.27,0,0,1,.06-.17l.2-.3.24-.26h0l-.06,0-.25-.24a.29.29,0,0,1-.09-.22V908a.26.26,0,0,1,.05-.17l.2-.31a.38.38,0,0,1,.18-.13l.41-.1H355l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.21a.38.38,0,0,1-.11.11l-.1.07.2.14a.2.2,0,0,1,.09.09l.2.3a.27.27,0,0,1,.06.17V910a.27.27,0,0,1-.06.17l-.34.46-.08.06-.41.2A.32.32,0,0,1,355,910.9Zm-.54-.61h.47l.37-.22.11-.18v-.22l-.12-.18-.25-.17-.39-.18h-.06l-.33.16-.17.17-.11.18v.23l.17.24Zm-.06-1.83.26.06.33-.06.22-.19,0-.28-.24-.06h-.5l-.26.07-.09.13v.09l.12.11Z" />
                                            <path
                                                d="M357.74,910.9h-.52a.31.31,0,0,1-.13,0l-.62-.31a.28.28,0,0,1-.15-.17l-.1-.31a.3.3,0,0,1,0-.1v-.41a.29.29,0,0,1,0-.09l.1-.31a.28.28,0,0,1,.12-.16l.24-.16-.29-.29a.34.34,0,0,1-.09-.22V908a.34.34,0,0,1,.05-.17l.21-.31a.34.34,0,0,1,.18-.13l.41-.1h.59l.48.11a.34.34,0,0,1,.18.13l.21.31a.34.34,0,0,1,.05.17v.3a.34.34,0,0,1-.09.22l-.29.29.24.16a.28.28,0,0,1,.12.16l.1.31a.29.29,0,0,1,0,.09V910a.3.3,0,0,1,0,.1l-.1.31a.28.28,0,0,1-.15.17l-.62.31A.31.31,0,0,1,357.74,910.9Zm-.44-.61h.36l.44-.22,0-.14v-.31l-.06-.16-.22-.14-.39-.18h-.06l-.55.31-.06.16v.31l.05.14Zm-.13-1.82.31,0,.31,0,.25-.25v-.09L358,908l-.3-.07h-.39L357,908l-.08.13v.09Z" />
                                            <path
                                                d="M359.48,910.9a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,359.48,910.9Z" />
                                            <path
                                                d="M361,910.9a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,361,910.9Z" />
                                            <path
                                                d="M362.55,910.9a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.29.29,0,0,1,.13.18l.1.41v1.51A.29.29,0,0,1,362.55,910.9Z" />
                                            <path
                                                d="M365.51,910.9h-1.94a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.24-.34.08-.21v-.21l-.05-.14-.31-.12h-.41l-.25.12-.11.18v.11a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.26.26,0,0,1,.05-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.1.1,0h.51l.1,0,.55.22a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31,0,.09-.31.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,365.51,910.9Z" />
                                            <path
                                                d="M372.47,911.11h-.1a.35.35,0,0,1-.14,0l-.4-.21a.16.16,0,0,1-.08-.06l-.31-.3a.41.41,0,0,1-.07-.11l-.2-.51h0a.29.29,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72a.31.31,0,0,1,.05-.1l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.2.2,0,0,1,.13,0h.21l.11,0,.51.21a.29.29,0,0,1,.18.19l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.06-.17-.4-.13-.27.14-.23.3-.09.29h0l.58-.11.49.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,372.47,911.11Zm-.33-.77.28.14.28-.14.21-.21.09-.32-.08-.28-.19-.19-.33-.08-.28.07-.21.22-.12.24.13.33Z" />
                                            <path
                                                d="M375.14,911l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.49.49,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.3a.23.23,0,0,1,.14,0l.41.2a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.13h-.16l-.28.14-.22.29,0,.27.33-.16a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.08.05.3.31a.29.29,0,0,1,.08.14l.12.59-.12.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08l-.4.11Zm-.26-.69.33.08h.13l.25-.07.19-.19.08-.32-.08-.28-.21-.22-.36-.15-.3.15-.21.21-.07.28.07.34Z" />
                                            <path
                                                d="M377.18,911a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,377.18,911Z" />
                                            <path
                                                d="M378.72,911a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0H378l-.17.06-.36.44a.31.31,0,1,1-.48-.38l.41-.52a.4.4,0,0,1,.15-.1l.3-.1h.61l.3.1a.32.32,0,0,1,.21.24l.1.51v1.39A.31.31,0,0,1,378.72,911Z" />
                                            <path
                                                d="M380.25,911a.3.3,0,0,1-.3-.31v-1.33l-.06-.28-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.43.05.3.3,0,0,1,0-.43l.41-.52a.3.3,0,0,1,.14-.1l.31-.1h.6l.31.1a.33.33,0,0,1,.2.24l.1.51v1.39A.31.31,0,0,1,380.25,911Z" />
                                            <path
                                                d="M383.22,911h-1.94a.31.31,0,0,1-.21-.54l1.38-1.28.18-.45a.36.36,0,0,1,.07-.1l.11-.12v-.08l-.21-.29-.18-.11h-.33l-.29.21-.11.2a.31.31,0,0,1-.62,0v-.11a.37.37,0,0,1,.05-.17l.35-.45.35-.25a.34.34,0,0,1,.17-.05h.52a.34.34,0,0,1,.17.05l.45.35.24.35a.27.27,0,0,1,.06.17v.31a.36.36,0,0,1-.09.22l-.16.16-.18.45a.44.44,0,0,1-.08.11l-.86.8h1.16a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M390.18,911.41l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.3a.32.32,0,0,1-.09-.17l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.67a.42.42,0,0,1,0-.1l.31-.52a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.33.33,0,0,1,.22.21l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.15-.25-.06h-.23l-.21,0-.21.36,0,.2.55-.1.49.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,0,.08l.21.41a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.21.41a.35.35,0,0,1,0,.08l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.22-.21.15-.36-.15-.3-.21-.21-.33-.09-.28.08-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M393.05,911.41l-.57-.1a.39.39,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62a.18.18,0,0,1,0-.1v-.71a.16.16,0,0,1,0-.1l.41-1.14a.3.3,0,0,1,.23-.19l.51-.1h.26l.57.11a.32.32,0,0,1,.24.21l.1.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.19l-.05-.14-.34-.07h-.14l-.29.06-.2.54.59-.09.48.11a.28.28,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08Zm-.33-.68.39.08.29-.08.19-.19.08-.33v-.13l-.07-.24-.19-.19-.32-.09-.36.08-.26.47.15.45Z" />
                                            <path
                                                d="M395,911.41a.29.29,0,0,1-.3-.3v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.3.3,0,0,1,395,911.41Z" />
                                            <path
                                                d="M396.53,911.41a.3.3,0,0,1-.31-.3v-1.44l-.05-.16-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.4-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,396.53,911.41Z" />
                                            <path
                                                d="M398.06,911.41a.29.29,0,0,1-.3-.3v-1.44l-.05-.16-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,398.06,911.41Z" />
                                            <path
                                                d="M401.13,911.41h-2a.31.31,0,0,1-.29-.18.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.19l-.05-.09-.23-.18h-.49l-.14,0,0,.09-.06.08-.11.12v.08a.31.31,0,0,1-.62,0v-.21a.31.31,0,0,1,.09-.22l.17-.17.08-.15a.31.31,0,0,1,.18-.16l.31-.1.09,0h.62a.22.22,0,0,1,.13,0l.21.1a.16.16,0,0,1,.08.06l.2.2a.16.16,0,0,1,.06.08l.1.2a.37.37,0,0,1,0,.14V909a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.3a.31.31,0,0,1,.31.31A.3.3,0,0,1,401.13,911.41Z" />
                                            <path
                                                d="M373.09,878.46H373a.32.32,0,0,1-.14,0l-.41-.21a.16.16,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.25-.06H373l-.23.06-.2.26,0,.3.57-.11.48.11a.27.27,0,0,1,.14.08l.31.31a.16.16,0,0,1,.06.08l.2.41a.23.23,0,0,1,0,.14v.1a.25.25,0,0,1,0,.14l-.2.41a.21.21,0,0,1-.06.08l-.31.3a.19.19,0,0,1-.07.06l-.41.21A.35.35,0,0,1,373.09,878.46Zm-.33-.77.28.14.28-.14.23-.23.14-.28-.14-.28-.21-.21-.33-.08-.27.07-.19.19-.07.28.07.34Z" />
                                            <path
                                                d="M376,878.46h-.1l-.11,0-.51-.21a.26.26,0,0,1-.14-.11l-.21-.31-.23-.56h0l0,0h0s0-.06,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.13-.14l.41-.2a.25.25,0,0,1,.14,0h.31a.22.22,0,0,1,.13,0l.41.2a.29.29,0,0,1,.12.1l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.28-.13h-.16l-.25.12-.16.32-.07.27.61-.1.49.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,376,878.46Zm-.41-.77.36.15.28-.15.21-.21.09-.33-.08-.27-.19-.19-.33-.08-.35.07-.26.46.15.38Z" />
                                            <path
                                                d="M377.8,878.46a.31.31,0,0,1-.31-.31v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.3.3,0,0,1,377.8,878.46Z" />
                                            <path
                                                d="M379.33,878.36a.3.3,0,0,1-.3-.31v-1.33l-.06-.28-.1,0h-.26l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17-.05H379l.31.1a.33.33,0,0,1,.2.24l.1.51v1.39A.31.31,0,0,1,379.33,878.36Z" />
                                            <path
                                                d="M380.87,878.36a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.17.06-.36.44a.31.31,0,1,1-.48-.38l.41-.52a.45.45,0,0,1,.14-.1l.31-.1h.61l.3.1a.34.34,0,0,1,.21.24l.1.51v1.39A.3.3,0,0,1,380.87,878.36Z" />
                                            <path
                                                d="M383.84,878.36h-1.95a.3.3,0,0,1-.28-.2.31.31,0,0,1,.07-.34l1.4-1.3.35-.59v-.19l-.05-.14-.35-.21h-.33l-.28.21-.12.2a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.26.26,0,0,1,.05-.17l.34-.45.36-.25a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.48.29a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09V876a.32.32,0,0,1,0,.14l-.1.2-.32.54-.06.06-.86.8h1.17a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M390.8,878.76l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.34.34,0,0,1,0-.1v-.57l.11-.76a.19.19,0,0,1,0-.12l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.2l-.05-.15-.24-.06h-.23l-.21.05-.22.36,0,.3.33-.17a.32.32,0,0,1,.14,0h.1l.11,0,.51.2a.41.41,0,0,1,.11.07l.2.21.06.08.2.41a.22.22,0,0,1,0,.13v.21a.25.25,0,0,1,0,.14l-.2.41-.22.34a.39.39,0,0,1-.2.13Zm-.26-.68.33.08.35-.08.14-.2.15-.37-.15-.3-.12-.13-.38-.15-.51.28-.06.25.07.44Z" />
                                            <path
                                                d="M393.66,878.76l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.3a.42.42,0,0,1-.08-.12l-.2-.62h0a.36.36,0,0,1,0-.1v-.61a.29.29,0,0,1,0-.09l.2-.71,0-.07.31-.52a.3.3,0,0,1,.19-.14l.41-.1H394l.48.11a.32.32,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.21.05-.22.38-.09.3.38-.19a.35.35,0,0,1,.14,0h.1l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.19-.19.09-.33v-.13l-.07-.25L394,877l-.29-.07-.55.31-.11.23.14.42Z" />
                                            <path
                                                d="M395.61,878.76a.3.3,0,0,1-.31-.3v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.29.29,0,0,1,395.61,878.76Z" />
                                            <path
                                                d="M397.14,878.76a.3.3,0,0,1-.31-.3V877l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,397.14,878.76Z" />
                                            <path
                                                d="M398.78,878.76a.3.3,0,0,1-.31-.3V877.1l-.11-.23-.14,0h-.29l-.14.07-.46.37a.3.3,0,0,1-.43,0,.33.33,0,0,1,.05-.44l.51-.4.26-.14a.32.32,0,0,1,.14,0h.5l.31.1a.35.35,0,0,1,.18.16l.2.41a.22.22,0,0,1,0,.13v1.44A.3.3,0,0,1,398.78,878.76Z" />
                                            <path
                                                d="M401.75,878.76H399.7a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.24-.34.08-.21v-.19l-.05-.09-.23-.18h-.49l-.14,0-.12.23v.14a.31.31,0,0,1-.61,0V876a.35.35,0,0,1,0-.14l.21-.41a.31.31,0,0,1,.17-.15l.31-.1.1,0H401a.32.32,0,0,1,.14,0l.2.11.08,0,.21.21a.22.22,0,0,1,0,.08l.11.2a.35.35,0,0,1,0,.14v.31a.44.44,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,401.75,878.76Z" />
                                            <path
                                                d="M368.18,825.34a.31.31,0,0,1-.31-.31v-2.26l-.24.16a.31.31,0,0,1-.43-.09.31.31,0,0,1,.09-.42l.31-.21.36-.37a.31.31,0,0,1,.33-.06.29.29,0,0,1,.19.28v3A.3.3,0,0,1,368.18,825.34Z" />
                                            <path
                                                d="M370.73,825.34l-.48-.12a.25.25,0,0,1-.17-.11l-.31-.41a.35.35,0,0,1-.06-.14l-.1-.72v-.45l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.22.22,0,0,1,.13,0H371l.49.12a.31.31,0,0,1,.18.14l.31.51a.21.21,0,0,1,0,.11l.1.72v.45l-.11.76a.35.35,0,0,1-.06.14l-.3.41a.3.3,0,0,1-.17.11l-.41.11Zm-.22-.68.3.07H371l.23-.06.2-.26.09-.64v-.37l-.09-.61-.21-.35-.28-.07h-.16l-.28.14-.22.29-.09.63v.37l.09.6Z" />
                                            <path
                                                d="M373.7,825.34l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.32.32,0,0,1-.09-.17l-.1-.61v-.67l.1-.76a.36.36,0,0,1,0-.11L373,822a.3.3,0,0,1,.19-.14l.41-.11H374l.48.12a.28.28,0,0,1,.22.2l.1.3a.31.31,0,0,1-.58.2l-.05-.15-.24-.06h-.24l-.21.06-.21.35,0,.3.33-.17a.31.31,0,0,1,.13,0h.21a.28.28,0,0,1,.13,0l.41.21.08,0,.21.21.06.08.2.41a.32.32,0,0,1,0,.14v.2a.35.35,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.18.12l-.41.11Zm-.25-.69.33.08h.13l.21-.06.15-.21.15-.37-.15-.3-.14-.14-.35-.15-.52.29-.06.25.07.44Z" />
                                            <path
                                                d="M375.75,825.34a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.62,0V825A.31.31,0,0,1,375.75,825.34Z" />
                                            <path
                                                d="M377.29,825.34A.31.31,0,0,1,377,825v-1.36l-.18-.28h-.36l-.1.05-.37.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.08-.06.21-.1a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14V825A.31.31,0,0,1,377.29,825.34Z" />
                                            <path
                                                d="M378.82,825.34a.31.31,0,0,1-.31-.31V823.6l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.31.11a.32.32,0,0,1,.2.21l.1.41V825A.31.31,0,0,1,378.82,825.34Z" />
                                            <path
                                                d="M381.79,825.34h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.33-1.43.43-.62-.22-.35-.14,0h-.41l-.19.06-.1.1-.07.25a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.15.15,0,0,1,0-.09l.1-.31a.29.29,0,0,1,.07-.12l.21-.2a.25.25,0,0,1,.12-.08l.3-.1.1,0h.51l.1,0,.31.1a.3.3,0,0,1,.17.16l.11.2.18.27a.26.26,0,0,1,.05.17v.21a.26.26,0,0,1-.05.17l-.52.73-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M391.82,825.34l-.57-.11a.39.39,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0a.28.28,0,0,1,0-.09v-.61s0,0,0-.08l.21-.72.21-.54a.31.31,0,0,1,.21-.18l.41-.11H392l.49.12a.28.28,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.23l-.18,0-.22.62.26-.13a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.34.34,0,0,1,.13.18l.1.41v.28l-.11.48a.38.38,0,0,1-.09.15l-.3.3a.29.29,0,0,1-.14.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32V824l-.06-.22-.21-.14-.37-.16-.3.15-.13.14-.13.25.15.45Z" />
                                            <path
                                                d="M394.58,825.34l-.48-.12a.25.25,0,0,1-.14-.08l-.31-.3a.32.32,0,0,1-.09-.17l-.1-.61v-.77l.1-.67a.42.42,0,0,1,0-.1l.31-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.48.12a.28.28,0,0,1,.22.2l.1.3a.31.31,0,0,1-.58.2l-.05-.15-.24-.06h-.24l-.21.06-.21.35,0,.2.38-.09h.28l.48.11a.3.3,0,0,1,.18.13l.21.31.22.44a.32.32,0,0,1,0,.14v.2a.35.35,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.18.12l-.41.11Zm-.25-.69.33.08h.13l.21-.06.15-.21.15-.37-.29-.52-.3-.08h-.13l-.25.07-.19.19-.06.28.07.44Z" />
                                            <path
                                                d="M396.63,825.34a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.62,0V825A.31.31,0,0,1,396.63,825.34Z" />
                                            <path
                                                d="M398.16,825.34a.31.31,0,0,1-.3-.31v-1.36l-.18-.28h-.36l-.1.05-.37.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.08-.06.21-.1a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14V825A.31.31,0,0,1,398.16,825.34Z" />
                                            <path
                                                d="M399.7,825.34a.31.31,0,0,1-.31-.31V823.6l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.31.11a.32.32,0,0,1,.2.21l.1.41V825A.31.31,0,0,1,399.7,825.34Z" />
                                            <path
                                                d="M402.67,825.34h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.4.36-.62v-.09l-.12-.12-.05-.07,0-.1-.14,0h-.41l-.19.06-.17.22v.13a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.31.31,0,0,1,0-.13l.1-.21.06-.08.21-.2a.25.25,0,0,1,.12-.08l.3-.1.1,0H402l.1,0,.31.1a.3.3,0,0,1,.17.16l.08.16.17.17a.27.27,0,0,1,.09.21v.31a.26.26,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M409.73,825.85h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.38.38,0,0,1-.12-.16l-.2-.62h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.21-.72a.19.19,0,0,1,.05-.1l.3-.41a.29.29,0,0,1,.18-.11l.4-.1h.28l.58.1a.34.34,0,0,1,.23.21l.1.31a.3.3,0,0,1-.2.38.29.29,0,0,1-.38-.19l-.05-.14-.34-.07h-.14l-.23.06-.21.28-.08.29h0l.59-.11.48.11a.36.36,0,0,1,.15.08l.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.38.38,0,0,1-.09.15l-.3.3a.21.21,0,0,1-.08.06l-.41.21A.32.32,0,0,1,409.73,825.85Zm-.56-.92.22.15.29.14.28-.14.21-.21.08-.32-.08-.28-.19-.19-.32-.08-.28.08-.22.21-.12.25Z" />
                                            <path
                                                d="M412.6,825.85h-.21a.35.35,0,0,1-.14,0l-.4-.21a.16.16,0,0,1-.08-.06l-.31-.3a.51.51,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.48.11a.29.29,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.22.06-.2.27,0,.29.39-.1h.28l.48.11a.32.32,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.31.31,0,0,1,412.6,825.85Zm-.14-.62h.06l.3-.15.22-.21.08-.32-.08-.28-.19-.19-.33-.08h-.13l-.25.07-.19.18-.07.28.08.34.2.2Z" />
                                            <path
                                                d="M414.44,825.85a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,414.44,825.85Z" />
                                            <path
                                                d="M416,825.85a.31.31,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22L415,824l-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.32.32,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,416,825.85Z" />
                                            <path
                                                d="M417.51,825.85a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.38.38,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,417.51,825.85Z" />
                                            <path
                                                d="M371,790.43l-.48-.11a.22.22,0,0,1-.14-.08l-.11-.1a.29.29,0,0,1-.07-.12l-.1-.31a.29.29,0,0,1,0-.09v-.41a.3.3,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.21-.21a.31.31,0,0,1-.18-.19l-.1-.31a.29.29,0,0,1,0-.09v-.21a.36.36,0,0,1,0-.1l.1-.3a.31.31,0,0,1,.16-.18l.4-.21a.35.35,0,0,1,.14,0h.62a.31.31,0,0,1,.13,0l.41.21a.31.31,0,0,1,.16.18l.1.3a.34.34,0,0,1,0,.1v.21a.28.28,0,0,1,0,.09l-.1.31a.3.3,0,0,1-.12.15l.25.25a.37.37,0,0,1,.07.12l.1.31a.3.3,0,0,1,0,.1v.41a.29.29,0,0,1,0,.09l-.1.31a.3.3,0,0,1-.15.18l-.21.1-.47.12Zm-.24-.68.32.08h.54l.36-.11.05-.14v-.31l-.07-.2-.19-.19-.41-.11h0l-.37.1-.19.19-.07.2v.31Zm.08-1.81.5.17.44-.17,0-.22-.05-.14-.23-.11h-.47l-.23.11,0,.25Z" />
                                            <path
                                                d="M373.91,790.43l-.49-.11a.29.29,0,0,1-.14-.08l-.1-.1-.24-.35a.27.27,0,0,1-.06-.17v-.41a.27.27,0,0,1,.06-.17l.39-.6a.28.28,0,0,1-.12-.16l-.11-.31a.28.28,0,0,1,0-.09v-.21a.34.34,0,0,1,0-.1l.11-.3a.3.3,0,0,1,.15-.18l.41-.21a.32.32,0,0,1,.14,0h.61a.32.32,0,0,1,.14,0l.41.21a.3.3,0,0,1,.15.18l.1.3a.18.18,0,0,1,0,.1v.21a.15.15,0,0,1,0,.09l-.1.31a.29.29,0,0,1-.18.19l.21.21.24.36a.26.26,0,0,1,.05.17v.41a.26.26,0,0,1-.05.17l-.34.45a.29.29,0,0,1-.14.08l-.41.1Zm-.26-.68.33.08h.54l.3-.11.11-.18v-.23l-.15-.23-.21-.2-.4-.11-.38.1-.29.44v.22Zm.09-1.81.45.17.5-.17,0-.22-.05-.14-.23-.11H374l-.23.11-.05.25Z" />
                                            <path
                                                d="M376.16,790.43a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,376.16,790.43Z" />
                                            <path
                                                d="M377.8,790.43a.31.31,0,0,1-.31-.28l-.16-1.63-.09,0h-.31l-.18.06-.35.44a.31.31,0,0,1-.43,0,.31.31,0,0,1-.05-.44l.41-.51a.45.45,0,0,1,.14-.1l.31-.1h.6l.31.1a.33.33,0,0,1,.2.23l.11.52.1,1.36a.3.3,0,0,1-.28.33Z" />
                                            <path
                                                d="M379.33,790.43a.29.29,0,0,1-.3-.3v-1.27l-.18-.37h-.37l-.09,0-.48.47a.3.3,0,1,1-.43-.43l.51-.51a.16.16,0,0,1,.08-.06l.2-.1a.35.35,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.29.29,0,0,1,.15.16l.21.51a.5.5,0,0,1,0,.12v1.33A.3.3,0,0,1,379.33,790.43Z" />
                                            <path
                                                d="M382.3,790.43h-2.05a.29.29,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.41-1.3.34-.59v-.19l-.12-.24-.18-.11h-.39l-.12.11-.08.06-.09,0,0,.2a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.3.3,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.61a.34.34,0,0,1,.17,0l.46.35a.24.24,0,0,1,.07.12l.11.31a.28.28,0,0,1,0,.09v.31a.35.35,0,0,1,0,.14l-.1.2L382,789l-.05.07-.86.8h1.26a.31.31,0,0,1,.31.31A.3.3,0,0,1,382.3,790.43Z" />
                                            <path
                                                d="M392.54,791.25h-.11l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.24.24,0,0,1-.07-.12l-.21-.61h0a.18.18,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.2-.72a.41.41,0,0,1,.05-.09l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.13-.33-.07h-.15l-.22.07-.21.28-.09.29h0l.59-.11.48.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.1.41v.28l-.11.48a.27.27,0,0,1-.13.18l-.3.21-.45.22A.31.31,0,0,1,392.54,791.25Zm-.36-.68.29.07.51-.29.08-.3v-.13l-.07-.25-.19-.19-.33-.08-.28.08-.21.21-.13.26.15.42Z" />
                                            <path
                                                d="M395.4,791.25h-.2a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.2-.21a.25.25,0,0,1-.08-.12l-.2-.61h0a.44.44,0,0,1,0-.1v-.71l.11-.76a.22.22,0,0,1,.05-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.23.07-.2.26,0,.29.39-.09h.28l.49.11a.29.29,0,0,1,.14.08l.3.31a.28.28,0,0,1,.09.14l.1.41v.28l-.11.48a.3.3,0,0,1-.13.18L396,791l-.44.22A.32.32,0,0,1,395.4,791.25Zm-.13-.61h.06l.52-.29.07-.3v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.22.06-.27.47.14.43.12.12Z" />
                                            <path
                                                d="M397.24,791.25a.29.29,0,0,1-.3-.3V788.9a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31V791A.3.3,0,0,1,397.24,791.25Z" />
                                            <path
                                                d="M398.78,791.25a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.26.26,0,0,1,.12.18l.11.41V791A.3.3,0,0,1,398.78,791.25Z" />
                                            <path
                                                d="M400.31,791.25a.29.29,0,0,1-.3-.3v-1.44l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.4a.31.31,0,0,1,.17,0l.31.21a.27.27,0,0,1,.13.18l.1.41V791A.3.3,0,0,1,400.31,791.25Z" />
                                            <path
                                                d="M403.28,791.25h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l0-.14-.31-.12h-.42l-.24.12-.11.18v.11a.31.31,0,0,1-.62,0v-.2a.34.34,0,0,1,.05-.17l.35-.46a.29.29,0,0,1,.12-.07l.31-.1.09,0h.52l.09,0,.56.22a.3.3,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,403.28,791.25Z" />
                                            <path
                                                d="M410.24,791.66l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.08-.15l-.11-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.27.27,0,0,1,.13.13l.11.21a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.28.28,0,0,1,.13,0h.11a.23.23,0,0,1,.11,0l.51.2a.33.33,0,0,1,.14.12l.21.3.22.45a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.2.41-.23.34a.26.26,0,0,1-.19.13ZM410,791l.33.08.35-.08.14-.2.14-.29-.29-.52-.36-.14L410,790l-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M413.11,791.66l-.49-.11a.29.29,0,0,1-.14-.08l-.3-.31a.23.23,0,0,1-.07-.1l-.21-.51v0h0a.19.19,0,0,1,0-.08v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.47a.31.31,0,0,1,.16-.14l.51-.21.12,0h.2l.12,0,.51.21a.28.28,0,0,1,.16.14l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l0-.1-.43-.14-.35.14-.15.31-.07.25.39-.16a.25.25,0,0,1,.12,0h.1a.32.32,0,0,1,.14,0l.41.2.08.06.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.42.42,0,0,1-.09.14l-.3.31a.28.28,0,0,1-.15.08Zm-.25-.68.32.08.28-.08.19-.19.08-.33-.08-.28-.21-.21-.29-.14-.35.14-.28.48.13.32Z" />
                                            <path
                                                d="M415.05,791.66a.3.3,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,415.05,791.66Z" />
                                            <path
                                                d="M416.59,791.66a.31.31,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31l-.17.06-.36.44a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.51A.31.31,0,0,1,416.59,791.66Z" />
                                            <path
                                                d="M418.12,791.66a.3.3,0,0,1-.3-.3v-1.44l-.05-.17-.11,0h-.3l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.32.32,0,0,1,.12-.08l.31-.1.1,0h.4l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,418.12,791.66Z" />
                                            <text class="cls-10" transform="translate(390.02 902.39)">C23</text>
                                            <text class="cls-10" transform="translate(373.37 901.06)">C22</text>
                                            <text class="cls-10" transform="translate(354.3 900.77)">C21</text>
                                            <text class="cls-10" transform="translate(369.63 815.84)">B49</text>
                                            <text class="cls-10" transform="translate(390.71 816.56)">B50</text>
                                            <text class="cls-10" transform="translate(408.52 816.35)">B51</text>
                                            <text class="cls-10" transform="translate(409.28 782.87)">B46</text>
                                            <text class="cls-10" transform="translate(391.71 783.49)">B47</text>
                                            <text class="cls-10" transform="translate(371.11 782.58)">B48</text>
                                            <text class="cls-10" transform="translate(372.9 867.71)">C19</text>
                                            <text class="cls-10" transform="translate(354.07 867.71)">C20</text>
                                            <text class="cls-10" transform="translate(389.75 867.71)">C18</text>
                                            <polygon class="cls-1"
                                                points="553.23 687.02 552.63 719.11 534.91 718.91 535.58 686.65 553.23 687.02"
                                                id="B8" />
                                            <polygon class="cls-1"
                                                points="571.25 687.38 570.65 719.47 552.93 719.27 553.6 687.01 571.25 687.38"
                                                id="B7" />
                                            <polygon class="cls-1"
                                                points="589 687.67 588.41 719.76 570.98 719.56 571.63 687.3 589 687.67"
                                                id="B6" />
                                            <rect class="cls-1" x="589.03" y="687.78" width="17.42" height="32.11"
                                                transform="translate(12.2 -10.18) rotate(0.99)" id="B5" />
                                            <rect class="cls-1" x="606.97" y="688.18" width="17.42" height="32.11"
                                                transform="translate(12.21 -10.49) rotate(0.99)" id="B4" />
                                            <rect class="cls-1" x="624.94" y="688.49" width="17.42" height="32.11"
                                                transform="translate(12.22 -10.8) rotate(0.99)" id="B3" />
                                            <rect class="cls-1" x="642.75" y="688.77" width="17.42" height="32.11"
                                                transform="translate(12.23 -11.11) rotate(0.99)" id="B2" />
                                            <polygon class="cls-1"
                                                points="552.51 719.78 551.91 751.88 534.19 751.68 534.86 719.41 552.51 719.78"
                                                id="B23" />
                                            <polygon class="cls-1"
                                                points="570.53 720.14 569.93 752.24 552.21 752.04 552.88 719.77 570.53 720.14"
                                                id="B24" />
                                            <polygon class="cls-1"
                                                points="588.28 720.43 587.69 752.53 570.26 752.33 570.92 720.06 588.28 720.43"
                                                id="B25" />
                                            <rect class="cls-1" x="588.31" y="720.54" width="17.42" height="32.11"
                                                transform="translate(12.76 -10.17) rotate(0.99)" id="26" />
                                            <rect class="cls-1" x="606.25" y="720.95" width="17.42" height="32.11"
                                                transform="translate(12.77 -10.47) rotate(0.99)" id="27" />
                                            <rect class="cls-1" x="624.22" y="721.26" width="17.42" height="32.11"
                                                transform="translate(12.78 -10.78) rotate(0.99)" id="28" />
                                            <rect class="cls-1" x="642.03" y="721.54" width="17.42" height="32.11"
                                                transform="translate(12.79 -11.09) rotate(0.99)" id="29" />
                                            <path
                                                d="M629.58,742.23h-.2a.37.37,0,0,1-.14,0l-.41-.2-.08-.06-.2-.2-.08-.12-.2-.61a.43.43,0,0,1,0-.11v-.71l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.34.34,0,0,1,.18.13l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.23.06-.19.26-.05.3.4-.1h.27l.49.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.31.31,0,0,1-.13.19l-.31.2-.44.22A.33.33,0,0,1,629.58,742.23Zm-.13-.62h.06l.52-.29.08-.29v-.13l-.07-.25-.19-.19-.33-.09h-.13l-.25.07-.19.19-.06.24.15.46.12.12Z" />
                                            <path
                                                d="M632.35,742.23h-.1a.33.33,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.32.32,0,0,1,.21.21l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.23l-.23.06-.2.26,0,.3.57-.11.57.11a.3.3,0,0,1,.2.13l.2.31.22.44a.33.33,0,0,1,0,.14v.1a.2.2,0,0,1,0,.11l-.2.51a.41.41,0,0,1-.07.11l-.2.2a.41.41,0,0,1-.11.07l-.51.2A.2.2,0,0,1,632.35,742.23Zm-.54-.9.2.13.3.15.38-.16.11-.11L633,741l-.28-.49-.39-.08-.29.07-.19.19-.07.28Z" />
                                            <path
                                                d="M634.19,742.23a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,634.19,742.23Z" />
                                            <path
                                                d="M635.83,742.23a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H635l-.11.11-.54.44a.31.31,0,0,1-.43-.05.3.3,0,0,1,0-.43l.69-.6a.36.36,0,0,1,.22-.09h.51a.36.36,0,0,1,.22.09l.2.21.06.08.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,635.83,742.23Z" />
                                            <path
                                                d="M637.36,742.23a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.25.25,0,0,1,.17-.06h.4a.27.27,0,0,1,.17.06l.31.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,637.36,742.23Z" />
                                            <path
                                                d="M640.33,742.23h-1.94a.3.3,0,0,1-.28-.19.31.31,0,0,1,0-.33l1.33-1.43.43-.6v-.13l-.15-.22-.2-.07h-.5l-.23.11,0,.14v.16a.31.31,0,0,1-.62,0v-.21a.29.29,0,0,1,0-.09l.1-.31a.34.34,0,0,1,.15-.18l.41-.2a.25.25,0,0,1,.14,0h.62l.09,0,.31.1a.25.25,0,0,1,.12.08l.1.1.24.35a.27.27,0,0,1,.06.17v.31a.27.27,0,0,1-.06.17l-.52.73-.87.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M646.47,742.12l-.57-.1a.3.3,0,0,1-.19-.14l-.21-.3-.23-.56v0a.29.29,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.46a.29.29,0,0,1,.16-.15l.51-.21.11,0h.21a.35.35,0,0,1,.14,0l.4.21a.29.29,0,0,1,.12.1l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.35-.13-.35.13-.15.31-.07.25.4-.16a.2.2,0,0,1,.11,0h.11a.31.31,0,0,1,.13,0l.41.2.08.06.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.25.25,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.33-.68.39.08.29-.08.19-.19.09-.33-.08-.27-.22-.22-.28-.14-.36.14-.27.48.15.38Z" />
                                            <path
                                                d="M649.24,742.12l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.21.2a.3.3,0,0,1,0,.43.31.31,0,0,1-.44,0l-.17-.16-.3-.15h-.16l-.28.14-.22.28,0,.28.33-.16a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.08.06.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.34.34,0,0,1-.09.14l-.3.31a.29.29,0,0,1-.14.08l-.41.1Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.33-.08-.27-.21-.22-.36-.15-.3.15-.21.21-.07.28.07.33Z" />
                                            <path
                                                d="M651.28,742.12a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,651.28,742.12Z" />
                                            <path
                                                d="M652.82,742.12a.3.3,0,0,1-.31-.3v-1.28l-.17-.36h-.29l-.17.06-.36.44a.31.31,0,0,1-.43.05.33.33,0,0,1-.05-.44l.41-.51a.4.4,0,0,1,.15-.1l.3-.1.1,0h.41a.37.37,0,0,1,.14,0l.2.1a.29.29,0,0,1,.15.16l.2.51a.27.27,0,0,1,0,.12v1.33A.3.3,0,0,1,652.82,742.12Z" />
                                            <path
                                                d="M654.35,742.12a.29.29,0,0,1-.3-.3v-1.33l-.06-.28-.1,0h-.3l-.18.06-.35.44a.31.31,0,1,1-.48-.39l.41-.51a.36.36,0,0,1,.14-.1l.31-.1.1,0h.4l.1,0,.31.1a.33.33,0,0,1,.2.23l.11.52v1.39A.3.3,0,0,1,654.35,742.12Z" />
                                            <path
                                                d="M657.32,742.12h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.4-1.4.18-.36a.24.24,0,0,1,.06-.08l.11-.12v-.09l-.21-.28-.18-.11h-.33l-.29.21-.11.19a.31.31,0,0,1-.62,0v-.1a.34.34,0,0,1,.05-.17l.35-.45.35-.25a.34.34,0,0,1,.17-.05h.52a.34.34,0,0,1,.17.05l.45.35.25.35a.34.34,0,0,1,0,.17v.31a.36.36,0,0,1-.09.22l-.17.17-.18.36-.06.08-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,657.32,742.12Z" />
                                            <path
                                                d="M664.18,711.72h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.38.38,0,0,1,.17-.12l.41-.1h.38l.49.11a.35.35,0,0,1,.22.21l.1.3a.31.31,0,0,1-.59.2l0-.15-.25-.06h-.23l-.23.06-.2.26,0,.3.57-.11.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.21.41a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.21.41a.16.16,0,0,1-.06.08l-.3.31-.08.06-.41.2A.35.35,0,0,1,664.18,711.72Zm-.54-.89.2.13.29.14.28-.14.23-.24.14-.27-.14-.28-.21-.22-.32-.08-.28.08-.19.19-.07.28Z" />
                                            <path
                                                d="M667.05,711.72h-.11a.22.22,0,0,1-.11,0l-.51-.2a.33.33,0,0,1-.14-.12l-.21-.3-.23-.57a.27.27,0,0,1,0-.12v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.47a.31.31,0,0,1,.21-.16l.51-.1h.27l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07h-.13l-.3.06-.14.28-.07.27.62-.1.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31-.08.06-.41.2A.31.31,0,0,1,667.05,711.72Zm-.42-.76.36.14.28-.14.21-.21.09-.33-.08-.27-.19-.2-.33-.08-.35.08-.26.46.15.38Z" />
                                            <path
                                                d="M668.89,711.72a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.3.3,0,0,1,668.89,711.72Z" />
                                            <path
                                                d="M670.42,711.72a.29.29,0,0,1-.3-.3V710l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06H670a.27.27,0,0,1,.17.06l.31.2a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,670.42,711.72Z" />
                                            <path
                                                d="M672,711.72a.3.3,0,0,1-.31-.3V710l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.28.28,0,0,1,.12.18l.11.41v1.51A.3.3,0,0,1,672,711.72Z" />
                                            <path
                                                d="M673,711.72a.31.31,0,0,1-.28-.18.33.33,0,0,1,.06-.34l1.44-1.43.25-.34.07-.21V709l0-.14-.35-.22h-.33l-.28.22-.12.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31V709a.34.34,0,0,1,.05-.17l.34-.46.36-.24a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.48.29a.3.3,0,0,1,.15.18l.11.3a.38.38,0,0,1,0,.1v.31a.38.38,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.9.9,1.15-.06a.31.31,0,1,1,0,.61l-1.94.1Z" />
                                            <path
                                                d="M663.77,742.53h-.2l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.37.37,0,0,1,0-.11v-.66l.11-.76a.27.27,0,0,1,.05-.15l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.23.07-.2.26,0,.29.39-.09h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.28.28,0,0,1,.09.14l.1.41v.28l-.11.48a.3.3,0,0,1-.13.18l-.31.21-.44.22A.32.32,0,0,1,663.77,742.53Zm-.46-.68.33.08h.05l.53-.29.07-.3v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M666.53,742.53h-.1a.35.35,0,0,1-.14,0l-.41-.2-.34-.23a.39.39,0,0,1-.13-.2l-.1-.61a.4.4,0,0,1,0-.11v-.66l.1-.76a.3.3,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l-.05-.14-.25-.06h-.23l-.22.07-.2.26,0,.29.56-.1.58.1a.3.3,0,0,1,.19.14l.21.3.22.45a.28.28,0,0,1,0,.13v.21a.31.31,0,0,1,0,.13l-.2.41-.06.08-.21.21-.1.07-.51.2A.25.25,0,0,1,666.53,742.53Zm-.53-.9.19.14.3.14.38-.15.13-.13.15-.36-.29-.51-.39-.08-.29.08L666,741l-.07.27Z" />
                                            <path
                                                d="M668.38,742.53a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,668.38,742.53Z" />
                                            <path
                                                d="M670,742.53a.29.29,0,0,1-.3-.3v-1.36l-.14-.28-.16-.1h-.19l-.11.11-.54.43a.29.29,0,0,1-.43,0,.3.3,0,0,1,0-.43l.7-.59a.27.27,0,0,1,.21-.09h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,670,742.53Z" />
                                            <path
                                                d="M671.55,742.53a.3.3,0,0,1-.31-.3v-1.36l-.23-.38h-.25l-.53.52a.3.3,0,1,1-.43-.43l.61-.62a.31.31,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.2.21a.24.24,0,0,1,.06.08l.2.41a.2.2,0,0,1,0,.13v1.44A.3.3,0,0,1,671.55,742.53Z" />
                                            <path
                                                d="M674.52,742.53h-1.95a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.25-.34L674,740v-.21l-.07-.19-.19-.07h-.49l-.23.12,0,.14V740a.31.31,0,1,1-.61,0v-.2a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.41-.21a.32.32,0,0,1,.14,0h.61l.1,0,.31.1a.37.37,0,0,1,.12.07l.1.11a.24.24,0,0,1,.07.12l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.87.94h1.24a.3.3,0,0,1,.3.31A.29.29,0,0,1,674.52,742.53Z" />
                                            <path
                                                d="M429,739.67l-.48-.11a.42.42,0,0,1-.14-.09l-.31-.3A.35.35,0,0,1,428,739l-.11-.5a.57.57,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.13,0h.31a.33.33,0,0,1,.14,0l.41.2a.25.25,0,0,1,.13.14l.11.2a.32.32,0,0,1-.14.42.31.31,0,0,1-.41-.14l-.06-.12-.25-.12h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.11l.11,0,.51.21a.26.26,0,0,1,.14.11l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.2.41-.23.34a.3.3,0,0,1-.18.13l-.41.1Zm-.25-.69.33.08h.13l.22-.06.14-.21.14-.29-.29-.52-.36-.14-.28.14-.22.22-.06.27.07.34Z" />
                                            <path
                                                d="M431.84,739.67l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.26.26,0,0,1-.07-.11l-.21-.51v0h0a.28.28,0,0,1,0-.09v-.71a.22.22,0,0,1,0-.08l.21-.72a.24.24,0,0,1,.05-.1l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.31a.33.33,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.13.42.32.32,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.23.3-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.31.3a.53.53,0,0,1,.08.15l.11.58L433,739a.53.53,0,0,1-.08.15l-.31.3a.42.42,0,0,1-.14.09Zm-.25-.69.32.08.28-.08.19-.19.08-.32-.08-.28-.21-.22-.28-.13-.28.13-.23.24-.13.24.13.33Z" />
                                            <path
                                                d="M433.78,739.67a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,433.78,739.67Z" />
                                            <path
                                                d="M435.32,739.67a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11H435l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,435.32,739.67Z" />
                                            <path
                                                d="M437,739.67a.31.31,0,0,1-.31-.31V738l-.12-.23-.13,0h-.29l-.14.07-.46.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.51-.41.26-.14a.32.32,0,0,1,.14,0h.5l.31.11a.3.3,0,0,1,.18.15l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,437,739.67Z" />
                                            <path
                                                d="M439.93,739.67h-2.05a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.31-.11-.25-.18-.11h-.43l-.23.15-.07.26a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31V737a.31.31,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.1-.1.35-.24a.29.29,0,0,1,.17-.06h.62a.27.27,0,0,1,.17.06l.46.34a.75.75,0,0,1,.07.12l.1.31a.3.3,0,0,1,0,.1v.2a.36.36,0,0,1,0,.1l-.1.3a.19.19,0,0,1-.05.09l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M446.78,740.18l-.48-.11a.32.32,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.09-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.48.11a.31.31,0,0,1,.19.13l.2.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.29-.07h-.24l-.22.06-.2.27,0,.29.39-.1H447l.48.11a.47.47,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.32.32,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08H447l.25-.06.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M449.65,740.18l-.49-.11A.39.39,0,0,1,449,740l-.31-.31a.34.34,0,0,1-.08-.17l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.4-.1H450l.48.11a.31.31,0,0,1,.22.2l.1.31a.3.3,0,0,1-.2.38.29.29,0,0,1-.38-.19l-.05-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.2.13Zm-.25-.69.32.08.36-.07.13-.21.16-.37-.29-.51-.39-.08-.29.08-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M451.59,740.18a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,451.59,740.18Z" />
                                            <path
                                                d="M453.23,740.18a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11h-.19l-.12.12-.53.43a.33.33,0,0,1-.44,0,.31.31,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.41a.34.34,0,0,1,.17.05l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,453.23,740.18Z" />
                                            <path
                                                d="M454.77,740.18a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H454l-.23.15-.36.38a.31.31,0,1,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17-.05h.41a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,454.77,740.18Z" />
                                            <path
                                                d="M457.73,740.18h-1.94a.3.3,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.34-1.43.43-.6v-.12l-.16-.23-.2-.07h-.49l-.1,0-.18.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.32.32,0,0,1,0-.14l.1-.21a.21.21,0,0,1,.06-.08l.2-.2.08-.06.21-.1a.31.31,0,0,1,.13,0h.71l.31.1a.25.25,0,0,1,.12.08l.1.1.25.35a.37.37,0,0,1,.05.18v.3a.34.34,0,0,1-.05.17l-.52.73-.88.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M464.8,740.49h-.11l-.11,0-.51-.2a.24.24,0,0,1-.14-.12l-.21-.3-.23-.56h0v0h0a.19.19,0,0,1,0-.08v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.46a.3.3,0,0,1,.21-.17l.47-.09.17-.09a.34.34,0,0,1,.28,0l.41.21a.35.35,0,0,1,.11.1l.21.31a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.2-.1-.07,0-.08,0-.36.07-.14.28-.07.27.62-.1.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.25.25,0,0,1-.08.14l-.31.31-.08.06-.41.2A.33.33,0,0,1,464.8,740.49Zm-.42-.77.36.15.28-.15.22-.21.08-.33-.08-.27-.19-.19-.33-.09-.35.08-.26.46.15.38Z" />
                                            <path
                                                d="M467.66,740.49h-.2a.33.33,0,0,1-.14,0l-.41-.2-.08-.06-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.13h-.16l-.28.13-.22.29,0,.3.39-.1h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.32.32,0,0,1-.08.14l-.31.31-.08.06-.41.2A.33.33,0,0,1,467.66,740.49Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.07-.27-.19-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.07.33.21.21Z" />
                                            <path
                                                d="M469.5,740.38a.3.3,0,0,1-.3-.3v-2a.31.31,0,1,1,.61,0v2A.3.3,0,0,1,469.5,740.38Z" />
                                            <path
                                                d="M471,740.38a.3.3,0,0,1-.31-.3V738.8l-.17-.36h-.29l-.17.06-.36.44a.31.31,0,1,1-.47-.39l.4-.51a.4.4,0,0,1,.15-.1l.31-.1.09,0h.41a.33.33,0,0,1,.14,0l.2.1a.29.29,0,0,1,.15.16l.21.51a.5.5,0,0,1,0,.12v1.33A.3.3,0,0,1,471,740.38Z" />
                                            <path
                                                d="M472.58,740.38a.3.3,0,0,1-.31-.3v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,1,1-.48-.39l.41-.51a.45.45,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.33.33,0,0,1,.2.23l.11.52v1.39A.29.29,0,0,1,472.58,740.38Z" />
                                            <path
                                                d="M475.54,740.38H473.6a.3.3,0,0,1-.29-.19.33.33,0,0,1,.08-.34l1.38-1.28.18-.45a.36.36,0,0,1,.07-.1l.11-.12v-.08l-.21-.29-.18-.11h-.33l-.29.21-.11.19a.31.31,0,0,1-.62,0v-.1a.27.27,0,0,1,.06-.17l.34-.45.36-.25a.31.31,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.45.35.25.35a.34.34,0,0,1,.05.17V738a.31.31,0,0,1-.09.22l-.16.16-.18.45a.44.44,0,0,1-.08.11l-.86.8h1.16a.31.31,0,0,1,.31.31A.3.3,0,0,1,475.54,740.38Z" />
                                            <path
                                                d="M482.5,740.69l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.1-.76a.39.39,0,0,1,.06-.15l.31-.4a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.15-.24-.06h-.16l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.13,0h.11a.33.33,0,0,1,.13,0l.41.2.34.23a.29.29,0,0,1,.11.11l.2.41a.35.35,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.06.08-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.28-.08.21-.22.15-.36-.14-.27-.23-.16-.29-.14-.5.27-.06.35.07.34Z" />
                                            <path
                                                d="M485.37,740.69l-.57-.11a.3.3,0,0,1-.2-.13l-.2-.31a.16.16,0,0,1,0-.07l-.2-.61h0a.34.34,0,0,1,0-.1v-.6s0-.06,0-.09l.21-.72.21-.54a.31.31,0,0,1,.21-.18l.41-.1h.38l.49.11a.29.29,0,0,1,.18.13l.2.3a.3.3,0,0,1-.08.43.31.31,0,0,1-.43-.09l-.14-.2-.29-.08h-.23l-.18,0-.23.64.4-.15a.2.2,0,0,1,.11,0h.1a.33.33,0,0,1,.14,0l.41.2.34.23a.3.3,0,0,1,.13.18l.1.41v.27l-.11.49a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08ZM485,740l.39.07.29-.07.19-.19.08-.33v-.13l-.06-.22-.21-.14-.3-.15L485,739l-.12.12-.13.25.15.46Z" />
                                            <path
                                                d="M487.31,740.69a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,487.31,740.69Z" />
                                            <path
                                                d="M488.85,740.69a.31.31,0,0,1-.31-.31V739l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.33.33,0,0,1,.21.22l.1.41v1.5A.31.31,0,0,1,488.85,740.69Z" />
                                            <path
                                                d="M490.38,740.69a.31.31,0,0,1-.3-.31V739l-.05-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,1,1-.44-.44l.41-.41.12-.07.31-.1.1,0H490l.09,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,490.38,740.69Z" />
                                            <path
                                                d="M493.35,740.69h-1.94a.28.28,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.43-1.44.25-.33.07-.32-.06-.19-.1-.1-.19-.07h-.42l-.13,0-.22.36a.31.31,0,1,1-.62,0V738a.27.27,0,0,1,.06-.17l.28-.48a.3.3,0,0,1,.18-.15l.31-.11h.7l.31.11a.24.24,0,0,1,.12.07l.21.21a.35.35,0,0,1,.07.12l.1.3a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,493.35,740.69Z" />
                                            <path
                                                d="M500.42,741.1h-.11a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.6v-.78l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.24l-.22.06-.2.27,0,.29.57-.11.57.11a.29.29,0,0,1,.19.13l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.25.25,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.21.21a.24.24,0,0,1-.1.06l-.51.21Zm-.54-.9.19.13.3.15.38-.15.12-.12.15-.38-.28-.5-.38-.08-.3.08-.19.19-.06.27Z" />
                                            <path
                                                d="M503.28,741.1h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.33.33,0,0,1-.12-.16l-.2-.61h0a.25.25,0,0,1,0-.09v-.71a.22.22,0,0,1,0-.08l.21-.72a.24.24,0,0,1,.05-.1l.3-.41a.42.42,0,0,1,.18-.11l.4-.1h.39l.48.11a.31.31,0,0,1,.22.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l0-.15-.25-.06h-.23l-.23.06-.21.28-.08.3,0,0,.58-.11.49.11a.42.42,0,0,1,.14.09l.31.3a.53.53,0,0,1,.08.15l.11.58-.11.57a.34.34,0,0,1-.13.2l-.31.2-.44.23A.32.32,0,0,1,503.28,741.1Zm-.56-.91.22.14.29.15.49-.28.08-.39-.08-.29-.19-.19-.32-.08-.28.08-.21.21-.13.25Z" />
                                            <path
                                                d="M505.12,741.1a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,505.12,741.1Z" />
                                            <path
                                                d="M506.66,741.1a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.26.26,0,0,1,.12.18l.11.41v1.5A.31.31,0,0,1,506.66,741.1Z" />
                                            <path
                                                d="M508.3,741.1a.31.31,0,0,1-.31-.31v-1.36l-.14-.27-.16-.11h-.19l-.11.12-.54.43a.31.31,0,0,1-.43-.05.3.3,0,0,1,.05-.43l.69-.59a.29.29,0,0,1,.22-.09h.4a.37.37,0,0,1,.18,0l.3.21a.29.29,0,0,1,.11.11l.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,508.3,741.1Z" />
                                            <path
                                                d="M511.26,741.1h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l0-.14-.23-.12H510l-.19.07-.06.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.1-.1a.24.24,0,0,1,.12-.07l.31-.11h.71a.35.35,0,0,1,.14,0l.41.2a.34.34,0,0,1,.15.18l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.3.41-.94,1h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,511.26,741.1Z" />
                                            <path
                                                d="M518.12,741.51l-.48-.11a.32.32,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.48.48,0,0,1,0-.12v-.67l.1-.76a.42.42,0,0,1,.06-.14l.31-.41a.53.53,0,0,1,.11-.09l.41-.2a.28.28,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.2.08.06.2.21a.3.3,0,1,1-.43.43l-.17-.17-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.21a.22.22,0,0,1,.13,0l.41.2.34.22a.3.3,0,0,1,.13.2l.11.67-.11.49a.29.29,0,0,1-.08.14l-.31.31a.32.32,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.52.28-.07.35.08.34Z" />
                                            <path
                                                d="M521,741.51l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.11-.76a.42.42,0,0,1,.06-.14l.3-.41.11-.09.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.14.41.31.31,0,0,1-.41-.14l0-.11-.26-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.23.23,0,0,1,.14,0h.1l.11,0,.52.21a.23.23,0,0,1,.1.07l.2.2a.26.26,0,0,1,.07.11l.21.51a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.3.3,0,0,1-.2.13Zm-.25-.69.32.08.36-.07.13-.21.15-.3-.15-.38-.12-.11-.38-.16-.5.28-.07.35.07.34Z" />
                                            <path
                                                d="M522.93,741.51a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,522.93,741.51Z" />
                                            <path
                                                d="M524.57,741.51a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14-.05h-.29l-.14.07-.45.38a.33.33,0,0,1-.44,0,.31.31,0,0,1,0-.43l.51-.41.26-.14a.32.32,0,0,1,.14,0h.41l.1,0,.3.1a.3.3,0,0,1,.18.15l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,524.57,741.51Z" />
                                            <path
                                                d="M526.11,741.51a.31.31,0,0,1-.31-.31v-1.36l-.18-.28h-.36l-.1.05-.37.38a.31.31,0,1,1-.44-.44l.41-.41.08,0,.21-.11a.32.32,0,0,1,.14,0h.51a.31.31,0,0,1,.13,0l.21.11a.29.29,0,0,1,.14.13l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,526.11,741.51Z" />
                                            <path
                                                d="M529.07,741.51h-1.94a.3.3,0,0,1-.28-.19.31.31,0,0,1,0-.33l1.34-1.43.25-.34.07-.32-.11-.31-.14-.05h-.49l-.1.05-.12.12-.06.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.2-.2.08-.06.21-.1a.31.31,0,0,1,.13,0h.71l.31.11a.3.3,0,0,1,.18.15l.1.2.12.35a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41-.88.95h1.24a.3.3,0,0,1,.31.3A.31.31,0,0,1,529.07,741.51Z" />
                                            <path
                                                d="M539.1,741.92H539l-.11,0-.51-.21a.26.26,0,0,1-.14-.11l-.21-.31-.23-.56v0h0a.36.36,0,0,1,0-.1v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.16-.15l.51-.2a.23.23,0,0,1,.11,0h.21a.33.33,0,0,1,.13,0l.41.2a.25.25,0,0,1,.12.11l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.35-.13-.35.14-.15.3-.07.27.61-.1.49.11.14.08.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,539.1,741.92Zm-.41-.76.36.14.28-.15.21-.21.09-.32-.08-.28-.19-.19-.33-.08-.35.08-.26.45.15.39Z" />
                                            <path
                                                d="M541.77,741.82l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.3a.33.33,0,0,1,.14,0l.41.2a.25.25,0,0,1,.12.11l.2.3a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.08,0,.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.38.38,0,0,1-.09.15l-.3.3a.29.29,0,0,1-.14.08l-.41.11Zm-.26-.69.33.08H542l.25-.07.19-.19.08-.32-.08-.28-.21-.22-.36-.15-.3.15-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M543.81,741.82a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,543.81,741.82Z" />
                                            <path
                                                d="M545.35,741.82a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.29l-.17.06-.36.44a.31.31,0,1,1-.48-.38l.41-.52a.29.29,0,0,1,.15-.09l.3-.11h.51a.35.35,0,0,1,.14,0l.2.1a.33.33,0,0,1,.15.16l.2.51a.27.27,0,0,1,0,.12v1.33A.31.31,0,0,1,545.35,741.82Z" />
                                            <path
                                                d="M546.88,741.82a.3.3,0,0,1-.3-.31v-1.33l-.06-.28-.1,0h-.3l-.18.06-.35.44a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.51a.21.21,0,0,1,.14-.1l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,546.88,741.82Z" />
                                            <path
                                                d="M549.85,741.82h-1.94a.31.31,0,0,1-.29-.2.33.33,0,0,1,.08-.34l1.38-1.28.18-.45a.36.36,0,0,1,.07-.1l.11-.11v-.09l-.21-.29-.18-.11h-.33l-.29.22-.11.19a.31.31,0,0,1-.62,0v-.1a.31.31,0,0,1,0-.17l.35-.46.35-.24a.27.27,0,0,1,.17-.06h.52a.27.27,0,0,1,.17.06l.45.34.24.36a.25.25,0,0,1,.06.17v.3a.36.36,0,0,1-.09.22l-.16.16-.18.45a.44.44,0,0,1-.08.11l-.86.8h1.16a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M592.23,742.53h-.11a.22.22,0,0,1-.11,0l-.51-.2a.33.33,0,0,1-.14-.12l-.21-.31-.23-.56v0h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.2-.72.23-.46a.33.33,0,0,1,.13-.13l.41-.21a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.21a.35.35,0,0,1,.11.1l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.16-.24-.27-.14h-.17l-.25.13-.16.32-.07.26.34-.08h.28l.48.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.06-.41.2A.31.31,0,0,1,592.23,742.53Zm-.42-.76.36.14.28-.14.22-.21.08-.33-.08-.28-.19-.19-.33-.08H592l-.22.06-.26.46.15.39Z" />
                                            <path
                                                d="M594.89,742.43l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.27.27,0,0,1,0-.15l.31-.4a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.33.33,0,0,1,.16.17l.1.31a.32.32,0,0,1-.2.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12H595l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.14,0h.2a.33.33,0,0,1,.14,0l.41.2a.25.25,0,0,1,.12.11l.2.3.23.45a.28.28,0,0,1,0,.13v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.32.32,0,0,1-.18.13l-.41.1Zm-.26-.69.33.09h.13l.22-.06.14-.22.14-.29-.3-.53-.33-.13-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M596.93,742.43a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,596.93,742.43Z" />
                                            <path
                                                d="M598.47,742.43a.31.31,0,0,1-.31-.31v-1.27l-.17-.36h-.37l-.08,0-.37.45a.29.29,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.51a.28.28,0,0,1,.11-.08l.2-.11a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.11a.29.29,0,0,1,.15.16l.2.51a.23.23,0,0,1,0,.11v1.33A.31.31,0,0,1,598.47,742.43Z" />
                                            <path
                                                d="M600,742.43a.3.3,0,0,1-.3-.31v-1.33l-.06-.27-.09,0h-.31l-.18,0-.35.44a.3.3,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,600,742.43Z" />
                                            <path
                                                d="M603,742.43H601a.32.32,0,0,1-.29-.19.33.33,0,0,1,.08-.34l1.38-1.29.18-.44a.41.41,0,0,1,.07-.11l.11-.11v-.09l-.21-.28-.18-.12h-.33l-.36.22,0,.19a.31.31,0,1,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.3a.29.29,0,0,1,.16-.18l.2-.1.28-.19a.31.31,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.45.35.25.35a.34.34,0,0,1,0,.17v.31a.27.27,0,0,1-.09.21l-.16.16-.18.46a.44.44,0,0,1-.08.11l-.86.8H603a.3.3,0,0,1,.31.3A.31.31,0,0,1,603,742.43Z" />
                                            <path
                                                d="M610.44,743l-.57-.1a.33.33,0,0,1-.19-.13l-.21-.31,0-.07-.21-.62h0a.34.34,0,0,1,0-.1V741a.28.28,0,0,1,0-.09l.2-.71.23-.47a.31.31,0,0,1,.21-.16l.51-.1h.27l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.29-.07h-.14l-.3.06-.14.28-.07.27.62-.1.48.11a.22.22,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.28.28,0,0,1-.08.15l-.31.3a.22.22,0,0,1-.14.08Zm-.32-.68.38.08.3-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08-.35.08-.27.47.16.45Z" />
                                            <path
                                                d="M613.21,743l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.17.17,0,0,1,0-.1V741l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.38.38,0,0,1,.17-.12l.41-.1h.39l.48.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.52.34l-.14-.21-.29-.07h-.23l-.23.06-.19.26,0,.29.39-.09h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.68.32.08h.13l.25-.07.19-.19.08-.33v-.13l-.06-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M615.26,743a.3.3,0,0,1-.31-.3v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.29.29,0,0,1,615.26,743Z" />
                                            <path
                                                d="M616.79,743a.3.3,0,0,1-.31-.3v-1.36l-.23-.38h-.19l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.36.36,0,0,1,.22.09l.2.21a.16.16,0,0,1,.06.08l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,616.79,743Z" />
                                            <path
                                                d="M618.33,743a.3.3,0,0,1-.31-.3V741.3l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.29.29,0,0,1,.13.18l.1.41v1.51A.29.29,0,0,1,618.33,743Z" />
                                            <path
                                                d="M621.29,743h-1.94a.3.3,0,0,1-.28-.18.3.3,0,0,1,.06-.34l1.4-1.4.35-.62v-.09l-.11-.12-.06-.08,0-.09-.14,0h-.41l-.2.06-.16.21v.14a.31.31,0,0,1-.62,0v-.21a.37.37,0,0,1,0-.14l.1-.2a.16.16,0,0,1,.06-.08l.2-.21.12-.07.31-.1.1,0h.51l.09,0,.31.1a.34.34,0,0,1,.18.15l.08.16.17.17a.31.31,0,0,1,.09.22v.31a.34.34,0,0,1,0,.17l-.21.31-.18.37-.06.08-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,621.29,743Z" />
                                            <path
                                                d="M429.69,707.22h-.2a.32.32,0,0,1-.14,0l-.41-.21-.08-.05-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.53.53,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.69-.2a.33.33,0,0,1,.24,0l.41.2a.32.32,0,0,1,.12.11l.2.3a.3.3,0,0,1-.08.43.31.31,0,0,1-.43-.08l-.16-.24-.22-.12-.51.15-.2.26,0,.29.39-.1h.28l.48.12a.28.28,0,0,1,.15.08l.3.3a.28.28,0,0,1,.08.15l.12.58-.12.49a.29.29,0,0,1-.08.14l-.3.31-.08.05-.41.21A.35.35,0,0,1,429.69,707.22Zm-.13-.61h.06l.3-.15.21-.21.08-.33-.08-.28-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.07.34.21.21Z" />
                                            <path
                                                d="M432.45,707.22h-.1a.35.35,0,0,1-.14,0l-.41-.21-.08-.05-.3-.31a.32.32,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.45.45,0,0,1,.1-.09l.41-.2a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.2a.34.34,0,0,1,.15.18l.1.31a.31.31,0,1,1-.58.19l-.06-.18-.23-.12h-.17l-.28.14-.21.29,0,.29.56-.11.58.11a.33.33,0,0,1,.19.13l.21.31.22.44a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.26.26,0,0,1-.14.11l-.51.21Zm-.33-.76.29.14.35-.14.15-.23.15-.29-.28-.49-.39-.08-.29.08-.19.19-.07.27.08.34Z" />
                                            <path
                                                d="M434.3,707.12a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,434.3,707.12Z" />
                                            <path
                                                d="M435.93,707.12a.3.3,0,0,1-.3-.31v-1.27l-.18-.37h-.31l-.12.12-.53.43a.29.29,0,0,1-.43-.05.3.3,0,0,1,0-.43l.7-.59a.27.27,0,0,1,.21-.09h.51a.32.32,0,0,1,.14,0l.21.1a.33.33,0,0,1,.14.17l.21.51a.36.36,0,0,1,0,.11v1.33A.31.31,0,0,1,435.93,707.12Z" />
                                            <path
                                                d="M437.47,707.12a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.29l-.17.06-.36.44a.3.3,0,0,1-.43.05.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41a.35.35,0,0,1,.14,0l.2.1a.35.35,0,0,1,.15.17l.2.51a.2.2,0,0,1,0,.11v1.33A.31.31,0,0,1,437.47,707.12Z" />
                                            <path
                                                d="M440.44,707.12h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.33-1.33.26-.45.16-.17v-.09l-.22-.28-.18-.12h-.4l-.11.12-.08.05-.09,0-.05.19a.31.31,0,1,1-.61,0v-.1a.31.31,0,0,1,0-.1l.11-.31a.28.28,0,0,1,.15-.17l.16-.08.17-.17a.29.29,0,0,1,.22-.09h.61a.26.26,0,0,1,.17.05l.46.34.24.36a.34.34,0,0,1,.05.17v.3a.29.29,0,0,1-.09.22l-.2.21-.26.45-.86.86h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M414.54,706.81l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.25-.07h-.23l-.22.07-.2.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.3a.35.35,0,0,1,.05.08l.21.41a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.21.41a.22.22,0,0,1-.05.08l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.27-.08.22-.22.15-.36-.15-.3-.21-.21-.33-.08-.28.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M416.49,706.81a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,416.49,706.81Z" />
                                            <path
                                                d="M418,706.81a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,418,706.81Z" />
                                            <path
                                                d="M419.66,706.81a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14,0h-.29l-.14.07-.46.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,.05-.43l.51-.41.26-.13a.23.23,0,0,1,.14,0h.41l.09,0,.31.1a.31.31,0,0,1,.18.16l.2.4a.25.25,0,0,1,0,.14v1.43A.31.31,0,0,1,419.66,706.81Z" />
                                            <path
                                                d="M422.63,706.81h-2.05a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.24-.33.08-.21v-.19l-.12-.23-.14,0h-.51l-.14,0-.12.23v.13a.31.31,0,1,1-.61,0v-.2a.32.32,0,0,1,0-.14l.21-.41a.28.28,0,0,1,.17-.15l.31-.1a.16.16,0,0,1,.1,0h.61a.18.18,0,0,1,.1,0l.31.1a.28.28,0,0,1,.17.15l.21.41a.32.32,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M465.31,707.73h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.37.37,0,0,1,0-.11v-.66l.11-.76a.22.22,0,0,1,.05-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.32.32,0,0,1-.2.39.31.31,0,0,1-.39-.2l-.05-.14-.24-.06h-.23l-.23.07-.2.26,0,.29.57-.1.48.11a.22.22,0,0,1,.14.08l.31.31a.24.24,0,0,1,.06.08l.2.4a.25.25,0,0,1,0,.14v.1a.27.27,0,0,1,0,.12l-.2.51a.26.26,0,0,1-.11.14l-.31.21-.44.22A.35.35,0,0,1,465.31,707.73Zm-.54-.9.2.14.29.14.52-.3.14-.35-.15-.29-.21-.21-.33-.08L465,706l-.19.19-.07.27Z" />
                                            <path
                                                d="M468.17,707.73h-.1a.2.2,0,0,1-.11,0l-.51-.2a.41.41,0,0,1-.11-.07l-.2-.21a.25.25,0,0,1-.08-.12l-.2-.61a.36.36,0,0,1,0-.1v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.47a.31.31,0,0,1,.21-.16l.51-.1h.27l.48.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07h-.13l-.3.07-.14.28-.07.26.61-.09.49.11a.29.29,0,0,1,.14.08l.31.31a.25.25,0,0,1,.08.14l.11.58-.11.58a.26.26,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,468.17,707.73Zm-.44-.77.38.15.5-.28.08-.39-.07-.29-.19-.19-.33-.08-.35.08-.27.46.14.43Z" />
                                            <path
                                                d="M470,707.73a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.29.29,0,0,1,470,707.73Z" />
                                            <path
                                                d="M471.55,707.73a.29.29,0,0,1-.3-.3V706l-.07-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,471.55,707.73Z" />
                                            <path
                                                d="M473.09,707.73a.3.3,0,0,1-.31-.3V706l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.32.32,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.12.18l.11.41v1.51A.29.29,0,0,1,473.09,707.73Z" />
                                            <path
                                                d="M476.06,707.73h-1.95a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.21V705l0-.14-.23-.12h-.49l-.24.12-.12.18v.11a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31V705a.26.26,0,0,1,0-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.1.1,0h.61a.32.32,0,0,1,.14,0l.41.21a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.3.3,0,0,1,.3.31A.29.29,0,0,1,476.06,707.73Z" />
                                            <path
                                                d="M483,708l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.11-.76a.27.27,0,0,1,.05-.15l.31-.4a.52.52,0,0,1,.11-.1l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.31.31,0,0,1-.55.27l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.23.23,0,0,1,.14,0h.2a.23.23,0,0,1,.14,0l.41.2a.29.29,0,0,1,.12.1l.2.31.22.44a.25.25,0,0,1,0,.14v.1a.23.23,0,0,1,0,.14l-.2.41-.22.34a.36.36,0,0,1-.19.13l-.41.1Zm-.26-.69.33.09h.13l.22-.06.14-.22.14-.29-.3-.53-.33-.13-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M485.88,708l-.48-.11a.27.27,0,0,1-.14-.08l-.31-.31a.32.32,0,0,1-.09-.16l-.1-.5v0l-.1-.7a.2.2,0,0,1,0-.13l.2-.72a.47.47,0,0,1,.05-.1l.31-.41a.53.53,0,0,1,.11-.09l.4-.2a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.4.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,1,1-.54.27l-.06-.11-.25-.13H486l-.28.14-.23.31-.08.29.38-.19a.25.25,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2.34.22a.3.3,0,0,1,.13.2l.11.67-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.33.09.27-.08.19-.19.09-.33-.08-.35-.21-.14-.29-.14-.28.14-.21.21-.06.26.07.35Z" />
                                            <path
                                                d="M487.83,708a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,487.83,708Z" />
                                            <path
                                                d="M489.36,708a.31.31,0,0,1-.31-.31V706.3l0-.17-.11,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0H489l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,489.36,708Z" />
                                            <path
                                                d="M491,708a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14,0h-.29l-.14.07-.46.38a.31.31,0,0,1-.38-.48l.51-.41.26-.14a.32.32,0,0,1,.14,0h.41l.09,0,.31.1a.3.3,0,0,1,.18.15l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,491,708Z" />
                                            <path
                                                d="M494,708h-2.05a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.24-.33.08-.32-.12-.24-.18-.12h-.43l-.23.15-.07.26a.31.31,0,1,1-.61,0v-.1a.34.34,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.1-.1.36-.24a.34.34,0,0,1,.17,0h.61a.34.34,0,0,1,.17,0l.46.34a.37.37,0,0,1,.07.12l.1.31a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.95H494a.29.29,0,0,1,.3.3A.3.3,0,0,1,494,708Z" />
                                            <path
                                                d="M500.83,708.55l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.61v-.78l.1-.76a.42.42,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.32.32,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.23.07-.2.26,0,.29.39-.1H501l.48.11a.28.28,0,0,1,.15.08l.3.3a.28.28,0,0,1,.08.15l.11.41v.28l-.12.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.26-.69.33.09H501l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.07.45Z" />
                                            <path
                                                d="M503.79,708.55h-.1l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.1-.76a.42.42,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1H504l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l-.05-.14-.25-.07h-.23l-.23.07-.19.26,0,.29.56-.1.58.1a.33.33,0,0,1,.19.13l.21.31.22.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.21.41a.22.22,0,0,1,0,.08l-.21.21a.21.21,0,0,1-.1.06l-.51.21Zm-.35-.69.29.08.4-.16.13-.13.15-.36-.29-.51-.39-.08-.29.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M505.64,708.55a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.61,0v2A.31.31,0,0,1,505.64,708.55Z" />
                                            <path
                                                d="M507.27,708.55a.3.3,0,0,1-.3-.31v-1.36l-.14-.27-.16-.11h-.19l-.12.12-.53.43a.29.29,0,0,1-.43,0,.3.3,0,0,1,0-.43l.7-.59a.27.27,0,0,1,.21-.09h.41a.34.34,0,0,1,.17.05l.31.21a.35.35,0,0,1,.1.11l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,507.27,708.55Z" />
                                            <path
                                                d="M508.81,708.55a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.19l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17-.05h.41a.31.31,0,0,1,.22.09l.2.2.06.09.2.4a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,508.81,708.55Z" />
                                            <path
                                                d="M511.78,708.55h-1.95a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.43-.6v-.12l-.16-.23-.2-.07h-.49l-.1,0-.18.23V706a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.32.32,0,0,1,0-.14l.1-.2.06-.08.2-.21.08-.06.21-.1a.32.32,0,0,1,.14,0h.71l.3.11a.24.24,0,0,1,.12.07l.11.1.24.36a.34.34,0,0,1,.05.17v.31a.34.34,0,0,1-.05.17l-.52.73-.87.94h1.24a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M557.43,709.37l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.11-.76a.27.27,0,0,1,.05-.15l.31-.4a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.23.23,0,0,1,.14,0h.1a.2.2,0,0,1,.11,0l.51.2a.29.29,0,0,1,.15.12l.2.3.22.45a.2.2,0,0,1,0,.13v.1a.23.23,0,0,1,0,.14l-.2.41-.22.34a.31.31,0,0,1-.19.13l-.41.1Zm-.26-.69.33.09h.13l.22-.06.14-.22.14-.29-.29-.51-.35-.15-.29.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M560.29,709.37l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51v0h0a.29.29,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.2-.72a.47.47,0,0,1,.05-.1l.31-.4a.24.24,0,0,1,.11-.09l.4-.21a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.21a.27.27,0,0,1,.13.13l.11.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.17l-.27.14-.23.31-.09.29.38-.19a.25.25,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2.34.23a.26.26,0,0,1,.13.19l.11.67-.11.49a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.27-.08.19-.19.08-.33-.07-.35-.21-.14-.29-.14-.28.14-.23.23-.12.25.13.32Z" />
                                            <path
                                                d="M562.24,709.37a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,562.24,709.37Z" />
                                            <path
                                                d="M563.77,709.37a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0H563l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,563.77,709.37Z" />
                                            <path
                                                d="M565.41,709.37a.31.31,0,0,1-.31-.31V707.7l-.11-.23-.14,0h-.29l-.14.07-.46.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,.05-.43l.51-.41.26-.14a.32.32,0,0,1,.14,0h.41l.1,0,.3.1a.34.34,0,0,1,.18.15l.2.41a.25.25,0,0,1,0,.14v1.43A.31.31,0,0,1,565.41,709.37Z" />
                                            <path
                                                d="M568.38,709.37h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.25-.33.07-.32,0-.14-.09,0-.08-.05-.12-.12h-.39l-.23.15-.07.26a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11.36-.24a.34.34,0,0,1,.17-.05h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.36.36,0,0,1,0,.09l-.31.4-.94,1h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,568.38,709.37Z" />
                                            <path
                                                d="M575.24,709.88l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.61v-.77l.1-.76a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.23L575,707l-.2.26,0,.29.39-.09h.28l.48.11a.28.28,0,0,1,.15.08l.3.3a.38.38,0,0,1,.09.15l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.07.45Z" />
                                            <path
                                                d="M578.2,709.88h-.1a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.34.34,0,0,1-.13-.2l-.1-.61a.2.2,0,0,1,0-.11v-.66l.11-.76a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l0-.14-.25-.07h-.23l-.22.07-.2.26,0,.29.56-.1.58.1a.3.3,0,0,1,.19.14l.21.3.22.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.21.41a.22.22,0,0,1-.05.08l-.21.21-.1.07-.51.2Zm-.54-.9.2.13.3.15.38-.15.13-.13.15-.36-.29-.51-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M580.05,709.88a.31.31,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.3.3,0,0,1,580.05,709.88Z" />
                                            <path
                                                d="M581.68,709.88a.3.3,0,0,1-.3-.3v-1.37l-.14-.27-.16-.11h-.19l-.12.12-.53.43a.3.3,0,0,1-.43,0,.3.3,0,0,1,0-.43l.7-.59a.27.27,0,0,1,.21-.09h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.21.4a.35.35,0,0,1,0,.14v1.44A.31.31,0,0,1,581.68,709.88Z" />
                                            <path
                                                d="M583.22,709.88a.31.31,0,0,1-.31-.3v-1.37l-.23-.38h-.19l-.23.16-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.31.31,0,0,1,.22.09l.2.21.06.08.2.4a.37.37,0,0,1,0,.14v1.44A.31.31,0,0,1,583.22,709.88Z" />
                                            <path
                                                d="M586.19,709.88h-2a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.25-.34.08-.21v-.21l-.07-.19-.19-.07h-.49l-.23.12-.05.14v.15a.31.31,0,1,1-.61,0v-.2a.34.34,0,0,1,0-.1l.11-.31a.28.28,0,0,1,.15-.17l.41-.21a.32.32,0,0,1,.14,0h.61l.1,0,.3.1a.33.33,0,0,1,.13.07l.1.1a.37.37,0,0,1,.07.12l.1.31a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.87.94h1.24a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M593.25,710.19h-.1l-.12,0-.51-.21a.26.26,0,0,1-.14-.11l-.21-.31-.23-.56v0h0a.31.31,0,0,1,0-.1v-.71a.22.22,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.16-.15l.51-.2.12,0h.2a.33.33,0,0,1,.14,0l.41.2a.32.32,0,0,1,.12.11l.2.3a.31.31,0,1,1-.51.34l-.16-.24-.34-.13-.35.14-.15.3-.08.27.62-.1.48.11a.53.53,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.12.59-.12.49a.29.29,0,0,1-.08.14l-.3.3a.21.21,0,0,1-.08.06l-.41.21A.35.35,0,0,1,593.25,710.19Zm-.42-.76.36.14.29-.14.21-.22.08-.32-.08-.28-.19-.19-.32-.08-.36.08-.26.45.16.39Z" />
                                            <path
                                                d="M595.91,710.09l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.37.37,0,0,1-.09-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.2a.37.37,0,0,1,.14,0h.31a.37.37,0,0,1,.14,0l.41.2a.38.38,0,0,1,.11.11l.21.3a.32.32,0,0,1-.09.43.3.3,0,0,1-.42-.09l-.16-.24-.27-.13H596l-.28.14-.21.29,0,.29.4-.1h.28l.48.11a.42.42,0,0,1,.14.09l.31.3a.29.29,0,0,1,.08.14l.11.59-.11.49a.29.29,0,0,1-.08.14l-.31.3a.42.42,0,0,1-.14.09l-.41.1Zm-.25-.69.33.08h.13l.25-.07.18-.19.09-.32-.08-.28-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.34Z" />
                                            <path
                                                d="M598,710.09a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,598,710.09Z" />
                                            <path
                                                d="M599.49,710.09a.3.3,0,0,1-.3-.31v-1.27l-.18-.37h-.29l-.17.06-.35.44a.3.3,0,0,1-.43.05.3.3,0,0,1,0-.43l.41-.51a.21.21,0,0,1,.14-.1l.31-.11h.5a.32.32,0,0,1,.14,0l.21.1a.31.31,0,0,1,.14.16l.21.52a.36.36,0,0,1,0,.11v1.33A.31.31,0,0,1,599.49,710.09Z" />
                                            <path
                                                d="M601,710.09a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.17.06-.36.44a.31.31,0,1,1-.48-.38l.41-.51a.25.25,0,0,1,.15-.1l.3-.11h.61l.3.11a.31.31,0,0,1,.21.23l.1.51v1.39A.31.31,0,0,1,601,710.09Z" />
                                            <path
                                                d="M604,710.09h-2a.3.3,0,0,1-.28-.2.31.31,0,0,1,.07-.34l1.39-1.28.17-.45a.36.36,0,0,1,.07-.1l.12-.11v-.09l-.22-.29-.18-.11h-.33l-.28.22-.12.19a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.1a.34.34,0,0,1,0-.17l.35-.46.35-.24a.27.27,0,0,1,.17-.06h.51a.27.27,0,0,1,.17.06l.46.34.24.36a.34.34,0,0,1,.05.17v.3a.31.31,0,0,1-.09.22l-.16.16-.18.45a.23.23,0,0,1-.08.11l-.86.8H604a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M611,710.39l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.34.34,0,0,1,0-.1v-.57l.11-.76a.28.28,0,0,1,0-.12l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.2l-.05-.15-.24-.06H611l-.21.05-.22.36,0,.3.33-.17a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.2.34.23a.29.29,0,0,1,.1.12l.21.41a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.21.4a.16.16,0,0,1-.06.08l-.3.31a.28.28,0,0,1-.15.08Zm-.26-.68.33.08.28-.08.21-.21.15-.36-.13-.28-.24-.16-.29-.14-.5.28-.06.25.08.44Z" />
                                            <path
                                                d="M613.82,710.39l-.57-.1a.33.33,0,0,1-.19-.13l-.21-.31,0-.08-.2-.61h0a.29.29,0,0,1,0-.09v-.61a.29.29,0,0,1,0-.09l.2-.71.22-.54a.31.31,0,0,1,.21-.19l.4-.1H614l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07h-.23l-.18.05-.22.62.26-.13a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.34.23a.29.29,0,0,1,.13.18l.1.41v.28l-.11.48a.32.32,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.32-.68.38.08.29-.08.19-.19.09-.33v-.13l-.06-.21-.22-.15-.37-.15-.3.15-.13.14-.13.25.15.45Z" />
                                            <path
                                                d="M615.77,710.39a.3.3,0,0,1-.31-.3v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.29.29,0,0,1,615.77,710.39Z" />
                                            <path
                                                d="M617.3,710.39a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43L616,708a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,617.3,710.39Z" />
                                            <path
                                                d="M618.84,710.39a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,618.84,710.39Z" />
                                            <path
                                                d="M621.81,710.39h-1.95a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.21v-.19l0-.09-.12-.12-.19-.06h-.41l-.14,0-.22.37a.31.31,0,0,1-.31.3.3.3,0,0,1-.3-.3v-.11a.26.26,0,0,1,.05-.17l.29-.48a.31.31,0,0,1,.17-.15l.31-.1.1,0h.51l.1,0,.3.1a.24.24,0,0,1,.12.07l.21.21.06.08.1.2a.35.35,0,0,1,0,.14v.31a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.3.3,0,0,1,.3.31A.29.29,0,0,1,621.81,710.39Z" />
                                            <path
                                                d="M628.87,710.91h-.1a.33.33,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.23l-.23.06-.2.26,0,.3.57-.11.57.11a.3.3,0,0,1,.2.13l.2.31.22.44a.23.23,0,0,1,0,.14v.1a.2.2,0,0,1,0,.11l-.2.51a.41.41,0,0,1-.07.11l-.2.2a.41.41,0,0,1-.11.07l-.51.2A.2.2,0,0,1,628.87,710.91Zm-.54-.9.2.13.3.15.38-.16.11-.11.16-.39-.28-.49-.39-.08-.29.07-.19.19-.07.28Z" />
                                            <path
                                                d="M631.73,710.91h-.1a.37.37,0,0,1-.14,0l-.4-.2-.34-.23a.32.32,0,0,1-.13-.15l-.2-.62h0a.29.29,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.2-.71a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.28l.57.11a.29.29,0,0,1,.23.21l.1.3a.31.31,0,1,1-.58.2l0-.14-.33-.07h-.15l-.22.06-.22.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.25.25,0,0,1-.08.14l-.31.31-.08.06-.41.2A.33.33,0,0,1,631.73,710.91Zm-.56-.92.22.15.29.14.28-.14.21-.21.08-.33-.07-.27-.19-.19-.33-.09-.28.08-.21.22-.13.25Z" />
                                            <path
                                                d="M633.58,710.91a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.3.3,0,0,1,633.58,710.91Z" />
                                            <path
                                                d="M635.11,710.91a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,635.11,710.91Z" />
                                            <path
                                                d="M636.75,710.91a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.17-.11h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.3.2a.25.25,0,0,1,.11.12l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,636.75,710.91Z" />
                                            <path
                                                d="M639.72,710.91h-2.05a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.24-.34.08-.21v-.21l-.05-.14-.09,0L639,708l-.12-.12h-.39l-.23.16-.07.25a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.28.28,0,0,1,0-.09l.11-.31a.24.24,0,0,1,.07-.12l.1-.1.36-.25a.34.34,0,0,1,.17,0H639a.31.31,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M646.58,711.11l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.11-.76a.22.22,0,0,1,.05-.14l.31-.41a.52.52,0,0,1,.11-.1l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21.08.05.2.21a.3.3,0,0,1-.43.43l-.17-.17-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.16a.23.23,0,0,1,.14,0h.2a.23.23,0,0,1,.14,0l.41.2.34.22a.39.39,0,0,1,.13.2l.11.67-.12.49a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.4.1Zm-.26-.69.33.09h.13l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.51.28-.07.35.07.34Z" />
                                            <path
                                                d="M649.44,711.11,649,711a.22.22,0,0,1-.14-.08l-.31-.31a.32.32,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.39.39,0,0,1,.06-.15l.31-.4.1-.1.41-.2a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.2a.35.35,0,0,1,.13.14l.11.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.17l-.28.14-.21.29,0,.28.32-.16a.25.25,0,0,1,.14,0h.1a.23.23,0,0,1,.14,0l.41.2.34.22a.44.44,0,0,1,.12.15l.2.51a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.09.35-.08.13-.21.15-.29-.14-.36-.23-.15-.29-.14-.49.27-.07.35.08.34Z" />
                                            <path
                                                d="M651.39,711.11a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,651.39,711.11Z" />
                                            <path
                                                d="M653,711.11a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.31.31,0,0,1,.17.15l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,653,711.11Z" />
                                            <path
                                                d="M654.56,711.11a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.37l-.1,0-.37.38a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.08,0,.2-.11a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.2.41a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,654.56,711.11Z" />
                                            <path
                                                d="M657.53,711.11h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.24-.33.07-.32-.11-.31-.14-.05h-.44l-.11.12-.08,0-.09.05,0,.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.71l.3.11a.27.27,0,0,1,.18.15l.1.21.12.34a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.36.36,0,0,1,0,.09l-.31.4-.94,1h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,657.53,711.11Z" />
                                            <path
                                                d="M556.91,742.12l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.24.24,0,0,1-.07-.12l-.21-.61h0a.38.38,0,0,1,0-.1v-.61a.28.28,0,0,1,0-.09l.2-.71,0-.08.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.24-.06h-.24l-.2.05-.23.38-.09.3.39-.19a.31.31,0,0,1,.13,0H557a.31.31,0,0,1,.13,0l.41.2.34.23a.27.27,0,0,1,.13.18l.1.41V741l-.11.48a.25.25,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.28-.08.19-.19.08-.33v-.13l-.06-.21-.21-.15-.29-.14-.53.3-.12.23.15.42Z" />
                                            <path
                                                d="M559.68,742.12l-.49-.11a.29.29,0,0,1-.18-.13l-.2-.3,0-.08-.2-.61a.36.36,0,0,1,0-.1v-.71a.3.3,0,0,1,0-.1l.41-1.14a.33.33,0,0,1,.21-.19l.41-.1H560l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.18.05-.21.54.31-.07h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.32.32,0,0,1,.08.14l.1.41V741l-.11.48a.32.32,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.22-.68.29.08h.13l.25-.07.19-.19.08-.33v-.13l-.06-.25-.19-.19-.33-.08h-.13l-.22.06-.27.48.15.45Z" />
                                            <path
                                                d="M561.72,742.12a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,561.72,742.12Z" />
                                            <path
                                                d="M563.26,742.12a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.3.1a.35.35,0,0,1,.21.22l.1.41v1.51A.3.3,0,0,1,563.26,742.12Z" />
                                            <path
                                                d="M564.8,742.12a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0H564l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.2.22l.1.41v1.51A.29.29,0,0,1,564.8,742.12Z" />
                                            <path
                                                d="M567.76,742.12h-1.94a.31.31,0,0,1-.22-.52l1.43-1.43.25-.34.07-.21v-.19l0-.09-.12-.12-.19-.06h-.41l-.14,0-.05.09a.16.16,0,0,1-.06.08l-.11.12v.07a.31.31,0,1,1-.62,0v-.2a.36.36,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.31-.1.1,0h.51l.09,0,.31.1a.24.24,0,0,1,.12.07l.21.21a.22.22,0,0,1,.05.08l.11.2a.35.35,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,567.76,742.12Z" />
                                            <path
                                                d="M424.37,750a.29.29,0,0,1-.27-.16l-17.3-33a.3.3,0,0,1,.54-.28l17.3,32.95a.31.31,0,0,1-.13.42A.35.35,0,0,1,424.37,750Z" />
                                            <path
                                                d="M574.93,742.53h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.3.3,0,0,1-.13-.2l-.1-.61a.37.37,0,0,1,0-.11v-.66l.11-.76a.22.22,0,0,1,.05-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.32.32,0,0,1-.2.39.31.31,0,0,1-.39-.2l-.05-.14-.24-.06h-.23l-.23.07-.2.26,0,.29.57-.1.57.1a.35.35,0,0,1,.2.14l.2.3.22.44a.25.25,0,0,1,0,.14v.1a.27.27,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.2.21a.41.41,0,0,1-.11.07l-.51.2A.2.2,0,0,1,574.93,742.53Zm-.54-.9.2.14.3.14.38-.15.11-.12.16-.38-.28-.5-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M577.79,742.53h-.1a.35.35,0,0,1-.14,0l-.41-.2-.33-.23a.34.34,0,0,1-.13-.16l-.2-.61h0a.29.29,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.2-.71a.54.54,0,0,1,.05-.11l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.1.31a.31.31,0,1,1-.58.19l-.05-.13-.33-.07h-.15l-.22.07-.22.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.27.27,0,0,1,.08.14l.11.58-.11.58a.26.26,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,577.79,742.53Zm-.56-.91.22.15.29.14.49-.28.08-.39-.07-.29-.19-.19-.33-.08-.28.08-.21.21-.13.26Z" />
                                            <path
                                                d="M579.64,742.53a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,579.64,742.53Z" />
                                            <path
                                                d="M581.17,742.53a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,581.17,742.53Z" />
                                            <path
                                                d="M582.81,742.53a.31.31,0,0,1-.31-.28l-.1-1.44-.06-.24-.13-.08H582l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.11.41.11,1.48a.31.31,0,0,1-.29.33Z" />
                                            <path
                                                d="M585.78,742.53h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.21v-.21l0-.14-.23-.12h-.49l-.19.07-.07.24a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11a.37.37,0,0,1,.12-.07l.31-.1.1,0h.61a.32.32,0,0,1,.14,0l.41.21a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,585.78,742.53Z" />
                                            <path
                                                d="M447.4,707.32l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.21.21,0,0,1-.06-.1l-.21-.51h0a.2.2,0,0,1,0-.11v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.46a.29.29,0,0,1,.16-.15l.51-.21.12,0h.2l.12,0,.51.21a.33.33,0,0,1,.16.15l.1.2a.31.31,0,0,1-.55.28l-.05-.11-.43-.13-.35.13-.15.31-.07.25.39-.16a.25.25,0,0,1,.12,0h.1a.35.35,0,0,1,.14,0l.41.2.34.23a.33.33,0,0,1,.13.19l.11.68-.12.48a.22.22,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08Zm-.26-.68.33.08.28-.08.19-.19.08-.33-.08-.35-.2-.14-.3-.14-.38.15-.12.12-.13.34.13.33Z" />
                                            <path
                                                d="M450.16,707.32l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.24.24,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.16.16,0,0,1,.08.06l.21.2a.31.31,0,0,1,0,.44.32.32,0,0,1-.44,0l-.17-.16-.29-.15h-.17l-.28.14-.21.28,0,.28.32-.16a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.2.34.23a.27.27,0,0,1,.13.18l.1.41v.28l-.11.48a.22.22,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.68.33.08h.13l.24-.07.19-.19.09-.33V706l-.06-.21-.22-.15-.37-.15-.51.29-.07.34.07.34Z" />
                                            <path
                                                d="M452.21,707.32a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31V707A.29.29,0,0,1,452.21,707.32Z" />
                                            <path
                                                d="M453.74,707.32a.29.29,0,0,1-.3-.3v-1.44l-.05-.17-.11,0H453l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41V707A.3.3,0,0,1,453.74,707.32Z" />
                                            <path
                                                d="M455.28,707.32a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.2.22l.11.41V707A.3.3,0,0,1,455.28,707.32Z" />
                                            <path
                                                d="M458.25,707.32H456.3a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.36-.64-.22-.36-.14,0h-.41l-.14,0-.22.36a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,0-.17l.29-.48a.28.28,0,0,1,.17-.15l.31-.1.1,0h.51l.1,0,.3.1a.27.27,0,0,1,.18.15l.1.21.19.27a.34.34,0,0,1,.05.17v.21a.34.34,0,0,1-.05.17l-.21.3-.18.38-.06.08-.91.91h1.21a.3.3,0,0,1,.3.31A.29.29,0,0,1,458.25,707.32Z" />
                                            <text class="cls-10" transform="translate(609.49 732.42)">B27</text>
                                            <text class="cls-10" transform="translate(591.98 732.02)">B26</text>
                                            <text class="cls-10" transform="translate(573.71 732.02)">B25</text>
                                            <text class="cls-10" transform="translate(556.11 731.61)">B24</text>
                                            <text class="cls-10" transform="translate(538.09 731.61)">B23</text>
                                            <text class="cls-10" transform="translate(517.39 731.61)">B22</text>
                                            <text class="cls-10" transform="translate(499.35 731.61)">B21</text>
                                            <text class="cls-10" transform="translate(627.6 732.02)">B28</text>
                                            <text class="cls-10" transform="translate(662.86 732.48)">B30</text>
                                            <text class="cls-10" transform="translate(645.24 732.48)">B29</text>
                                            <text class="cls-10" transform="translate(481.72 731.02)">B20</text>
                                            <text class="cls-10" transform="translate(463.48 730.33)">B19</text>
                                            <text class="cls-10" transform="translate(445.67 729.76)">B18</text>
                                            <text class="cls-10" transform="translate(428.4 729.56)">B17</text>
                                            <text class="cls-10" transform="translate(411.11 697.73)">B15</text>
                                            <text class="cls-10" transform="translate(428.58 697.57)">B14</text>
                                            <text class="cls-10" transform="translate(665.08 701.72)">B1</text>
                                            <text class="cls-10" transform="translate(647.27 701.1)">B2</text>
                                            <text class="cls-10" transform="translate(626.9 701.72)">B3</text>
                                            <text class="cls-10" transform="translate(609.6 701.46)">B4</text>
                                            <text class="cls-10" transform="translate(592.09 700.9)">B5</text>
                                            <text class="cls-10" transform="translate(573.27 701.46)">B6</text>
                                            <text class="cls-10" transform="translate(558.12 700.59)">B7</text>
                                            <path
                                                d="M540.42,709.06l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.31.31,0,0,1,.13,0h.11a.22.22,0,0,1,.11,0l.51.2a.33.33,0,0,1,.14.12l.21.31.22.44a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.2.41-.23.34a.27.27,0,0,1-.18.13l-.41.1Zm-.25-.68.33.08h.13l.22-.06.14-.21.14-.29-.29-.52-.36-.14-.28.14-.22.21-.06.28.07.33Z" />
                                            <path
                                                d="M543.29,709.06l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.23.23,0,0,1-.07-.1l-.21-.51v0h0s0-.06,0-.09v-.71s0-.06,0-.09l.21-.71a.31.31,0,0,1,.05-.1l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.32.32,0,0,1,.14.14l.1.2a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.23.31-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.2.34.23a.29.29,0,0,1,.13.19l.11.68-.11.48a.32.32,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.32.08.28-.08.19-.19.08-.33-.08-.35-.2-.14-.29-.14-.28.14-.23.24-.12.24.13.32Z" />
                                            <path
                                                d="M545.23,709.06a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,545.23,709.06Z" />
                                            <path
                                                d="M546.77,709.06a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0H546l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41l.1,0,.3.1a.35.35,0,0,1,.21.22l.1.41v1.51A.3.3,0,0,1,546.77,709.06Z" />
                                            <path
                                                d="M548.41,709.06a.3.3,0,0,1-.31-.3V707.4l-.11-.24-.14,0h-.29l-.14.07-.46.37a.3.3,0,0,1-.43,0,.32.32,0,0,1,.05-.44l.51-.41.26-.13a.33.33,0,0,1,.14,0h.41l.09,0,.31.1a.31.31,0,0,1,.18.16l.2.41a.31.31,0,0,1,0,.13v1.44A.29.29,0,0,1,548.41,709.06Z" />
                                            <path
                                                d="M551.38,709.06h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.32,0-.14-.09,0-.08-.06-.12-.12h-.39l-.23.16-.07.25a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.38.38,0,0,1,0-.1l.1-.3a.25.25,0,0,1,.08-.12l.1-.1.36-.25a.31.31,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.34.34,0,0,1,.15.18l.1.3a.44.44,0,0,1,0,.1v.21a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,551.38,709.06Z" />
                                            <text class="cls-10" transform="translate(541.12 700.29)">B8</text>
                                            <path
                                                d="M518,708.55l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.31.31,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.14.13l.1.21a.3.3,0,0,1-.14.41.31.31,0,0,1-.41-.14l0-.11-.26-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.14,0h.1a.2.2,0,0,1,.11,0l.52.2a.31.31,0,0,1,.14.12l.2.3.23.45a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.21.41-.22.34a.29.29,0,0,1-.18.13l-.41.1Zm-.25-.69.32.09h.13l.22-.06.14-.22.14-.28-.29-.52-.35-.14-.29.14-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M520.87,708.55l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51v0h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.2-.71a.31.31,0,0,1,0-.1l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.14.13l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13H521l-.28.14-.23.31-.09.29.39-.19a.33.33,0,0,1,.13,0H521a.33.33,0,0,1,.13,0l.41.2.34.23a.26.26,0,0,1,.13.19l.11.68-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.28-.08.19-.19.08-.33-.08-.35-.2-.14-.29-.14-.28.14-.24.24-.12.24.13.32Z" />
                                            <path
                                                d="M522.82,708.55a.31.31,0,0,1-.31-.31V706.3a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,522.82,708.55Z" />
                                            <path
                                                d="M524.35,708.55a.3.3,0,0,1-.3-.31v-1.43l0-.17-.1,0h-.31l-.2.06L523,707a.31.31,0,0,1-.44-.44l.41-.41a.47.47,0,0,1,.12-.07l.31-.1.1,0H524l.09,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,524.35,708.55Z" />
                                            <path
                                                d="M526,708.55a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14,0h-.29l-.14.07-.45.37a.31.31,0,0,1-.44,0,.31.31,0,0,1,0-.43l.51-.41.26-.14a.35.35,0,0,1,.14,0h.41l.1,0,.3.1a.34.34,0,0,1,.18.15l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,526,708.55Z" />
                                            <path
                                                d="M529,708.55h-2.05a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.44.25-.33.07-.32-.05-.14-.09,0-.08-.06-.11-.12h-.4l-.23.16-.06.25a.31.31,0,0,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.1-.11.36-.24a.34.34,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.27.27,0,0,1,.15.18l.11.3a.34.34,0,0,1,0,.1v.2a.31.31,0,0,1,0,.1l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94H529a.3.3,0,0,1,.31.3A.31.31,0,0,1,529,708.55Z" />
                                            <text class="cls-10" transform="translate(518.7 699.77)">B9</text>
                                            <text class="cls-10" transform="translate(500.49 699.52)">B10</text>
                                            <text class="cls-10" transform="translate(464.58 698.14)">B12</text>
                                            <text class="cls-10" transform="translate(447.08 697.83)">B13</text>
                                            <text class="cls-10" transform="translate(482.54 699.52)">B11</text>
                                            <text />
                                            <path
                                                d="M407.38,716.67l17.26,32.88a.31.31,0,0,1-.13.42.35.35,0,0,1-.14,0,.29.29,0,0,1-.27-.16l-17.3-33a.24.24,0,0,1,0-.15" />
                                            <line class="cls-11" x1="406.97" y1="716.82" x2="425" y2="716.96" />
                                            <line class="cls-11" x1="424.72" y1="717.02" x2="424.42" y2="749.62" />
                                            <path class="cls-4"
                                                d="M107,418.18a.42.42,0,0,1-.15,0,.31.31,0,0,1-.15-.22L95.61,347.19a.31.31,0,0,1,.6-.14l22.11,66.22a.31.31,0,0,1-.18.38l-11,4.5A.27.27,0,0,1,107,418.18ZM96.79,350.72l10.42,66.72,10.43-4.25Z" />
                                            <polygon class="cls-1"
                                                points="409.12 598.14 408.52 630.24 390.8 630.03 391.47 597.77 409.12 598.14"
                                                id="A41" />
                                            <polygon class="cls-1"
                                                points="427.14 598.5 426.54 630.59 408.82 630.39 409.5 598.13 427.14 598.5"
                                                id="A40" />
                                            <polygon class="cls-1"
                                                points="444.89 598.79 444.3 630.88 426.87 630.68 427.53 598.42 444.89 598.79"
                                                id="A39" />
                                            <rect class="cls-1" x="444.93" y="598.9" width="17.42" height="32.11"
                                                transform="translate(10.65 -7.72) rotate(0.99)" id="A38" />
                                            <rect class="cls-1" x="462.86" y="599.3" width="17.42" height="32.11"
                                                transform="translate(10.66 -8.02) rotate(0.99)" id="A37" />
                                            <rect class="cls-1" x="480.83" y="599.61" width="17.42" height="32.11"
                                                transform="translate(10.67 -8.33) rotate(0.99)" id="A36" />
                                            <rect class="cls-1" x="498.64" y="599.89" width="17.42" height="32.11"
                                                transform="translate(10.68 -8.64) rotate(0.99)" id="A35" />
                                            <polygon class="cls-1"
                                                points="408.4 630.91 407.8 663 390.08 662.8 390.75 630.54 408.4 630.91"
                                                id="A42" />
                                            <polygon class="cls-1"
                                                points="426.42 631.27 425.82 663.36 408.11 663.16 408.77 630.9 426.42 631.27"
                                                id="A43" />
                                            <polygon class="cls-1"
                                                points="444.17 631.56 443.58 663.65 426.15 663.45 426.81 631.18 444.17 631.56"
                                                id="A44" />
                                            <rect class="cls-1" x="444.21" y="631.67" width="17.42" height="32.11"
                                                transform="translate(11.21 -7.7) rotate(0.99)" id="A45" />
                                            <rect class="cls-1" x="462.14" y="632.07" width="17.42" height="32.11"
                                                transform="translate(11.22 -8.01) rotate(0.99)" id="A46" />
                                            <rect class="cls-1" x="480.11" y="632.38" width="17.42" height="32.11"
                                                transform="translate(11.23 -8.32) rotate(0.99)" id="A47" />
                                            <rect class="cls-1" x="497.92" y="632.66" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 11.24, -8.62)" id="A48" />
                                            <polygon class="cls-1"
                                                points="536.08 600.41 535.48 632.5 517.76 632.3 518.43 600.04 536.08 600.41"
                                                id="A34" />
                                            <polygon class="cls-1"
                                                points="554.1 600.77 553.5 632.86 535.79 632.66 536.46 600.39 554.1 600.77"
                                                id="A33" />
                                            <polygon class="cls-1"
                                                points="571.85 601.05 571.26 633.15 553.83 632.95 554.49 600.68 571.85 601.05"
                                                id="A32" />
                                            <rect class="cls-1" x="571.89" y="601.16" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 10.71, -9.9)" id="A31" />
                                            <rect class="cls-1" x="589.82" y="601.57" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 10.72, -10.21)" id="A30" />
                                            <rect class="cls-1" x="607.79" y="601.88" width="17.42" height="32.11"
                                                transform="translate(10.73 -10.52) rotate(0.99)" id="A29" />
                                            <polygon class="cls-1"
                                                points="535.36 633.17 534.76 665.27 517.04 665.06 517.71 632.8 535.36 633.17"
                                                id="A49" />
                                            <polygon class="cls-1"
                                                points="553.38 633.53 552.78 665.63 535.07 665.42 535.74 633.16 553.38 633.53"
                                                id="A50" />
                                            <polygon class="cls-1"
                                                points="571.13 633.82 570.54 665.91 553.11 665.71 553.77 633.45 571.13 633.82"
                                                id="A51" />
                                            <rect class="cls-1" x="571.17" y="633.93" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 11.27, -9.88)" id="A52" />
                                            <rect class="cls-1" x="589.1" y="634.33" width="17.42" height="32.11"
                                                transform="translate(11.28 -10.19) rotate(0.99)" id="A53" />
                                            <rect class="cls-1" x="607.07" y="634.64" width="17.42" height="32.11"
                                                transform="translate(11.29 -10.5) rotate(0.99)" id="A54" />
                                            <rect class="cls-1" x="624.88" y="634.92" width="17.42" height="32.11"
                                                transform="translate(11.3 -10.81) rotate(0.99)" id="A55" />
                                            <rect class="cls-1" x="642.7" y="635.24" width="17.42" height="32.11"
                                                transform="translate(11.3 -11.11) rotate(0.99)" id="A56" />
                                            <polygon class="cls-1"
                                                points="660.45 635.03 625.2 634.18 625.75 602.07 646.62 602.39 660.45 635.03"
                                                id="A28" />
                                            <path
                                                d="M636.75,625.75a.31.31,0,0,1-.31-.31v-2.26l-.24.16a.29.29,0,0,1-.42-.08.31.31,0,0,1,.08-.43l.31-.2.36-.37a.31.31,0,0,1,.34-.07.32.32,0,0,1,.19.28v3A.31.31,0,0,1,636.75,625.75Z" />
                                            <path
                                                d="M639.31,625.75l-.49-.11a.38.38,0,0,1-.17-.12l-.3-.41a.35.35,0,0,1-.06-.14l-.1-.71v-.46l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.48.48,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.33.33,0,0,1,.11.09l.31.41a.35.35,0,0,1,.06.14l.1.72v.45l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.3.3,0,0,1-.17.12l-.41.1Zm-.23-.68.3.07h.24l.22-.06.2-.26.09-.64v-.37l-.09-.59-.22-.29-.28-.14h-.16l-.28.14-.22.29-.09.64v.36l.08.6Z" />
                                            <path
                                                d="M642,625.75l-.48-.11a.36.36,0,0,1-.15-.08l-.1-.11-.24-.35a.31.31,0,0,1,.08-.43.32.32,0,0,1,.43.09l.2.3.33.08h.34l.25-.07.21-.21.15-.3v-.16l-.15-.3-.21-.21-.33-.09H642l-.2.06,0,.08a.31.31,0,0,1-.58-.16l.1-1.33a.31.31,0,0,1,.31-.28H643a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-1.15l0,.44.08,0h.49l.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v.3a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.31.31a.27.27,0,0,1-.14.08l-.41.1Z" />
                                            <path
                                                d="M644.22,625.75a.31.31,0,0,1-.31-.31V623.5a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,644.22,625.75Z" />
                                            <path
                                                d="M645.86,625.75a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14-.05H645l-.19.07-.36.36a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.16.16,0,0,1,.1,0h.41a.15.15,0,0,1,.09,0l.31.1a.3.3,0,0,1,.18.15l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,645.86,625.75Z" />
                                            <path
                                                d="M647.39,625.75a.3.3,0,0,1-.3-.31v-1.36l-.18-.28h-.36l-.1.05-.37.38a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.08-.06.21-.1a.31.31,0,0,1,.13,0H647a.32.32,0,0,1,.14,0l.21.1a.29.29,0,0,1,.13.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,647.39,625.75Z" />
                                            <path
                                                d="M650.36,625.75h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.32-.11-.31-.14-.05h-.44l-.12.11a.16.16,0,0,1-.08.06l-.09,0,0,.19a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.31.31,0,0,1,.15-.17l.17-.08.17-.17a.27.27,0,0,1,.21-.09h.71l.31.1a.35.35,0,0,1,.18.16l.1.2.12.35a.3.3,0,0,1,0,.1v.2a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.93.94h1.3a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M394.69,653l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.49.49,0,0,1,0-.12V651l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.3.3,0,0,1-.43-.08l-.14-.21-.29-.07h-.16l-.28.15-.22.28,0,.29.33-.17a.32.32,0,0,1,.14,0h.2a.35.35,0,0,1,.14,0l.41.21.34.22a.28.28,0,0,1,.12.18l.11.41v.28l-.12.48a.22.22,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.33v-.13l-.06-.21-.21-.14-.37-.16-.51.29-.07.34.07.34Z" />
                                            <path
                                                d="M397.55,653l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.61a.17.17,0,0,1,0-.1V651l.1-.76a.36.36,0,0,1,0-.11l.31-.52a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.2l-.05-.15-.25-.06h-.23l-.21,0-.21.36,0,.3.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.29.29,0,0,1,.1.12l.21.41a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.21.41-.05.07-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.22-.21.15-.36-.14-.28-.24-.15-.29-.15-.5.28-.06.25.08.44Z" />
                                            <path
                                                d="M399.5,653a.3.3,0,0,1-.31-.3v-1.95a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.95A.29.29,0,0,1,399.5,653Z" />
                                            <path
                                                d="M401.13,653a.3.3,0,0,1-.3-.28l-.16-1.63-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41.11,1.48a.31.31,0,0,1-.28.33Z" />
                                            <path
                                                d="M402.67,653a.3.3,0,0,1-.31-.3v-1.36l-.17-.28h-.37l-.14.07-.46.37a.3.3,0,0,1-.43,0,.33.33,0,0,1,0-.44l.51-.41.26-.13a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.33.33,0,0,1,0,.13v1.44A.3.3,0,0,1,402.67,653Z" />
                                            <path
                                                d="M405.64,653h-2.05a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.24-.34.08-.32-.12-.31-.14,0h-.49l-.1,0-.11.12-.07.25a.31.31,0,0,1-.31.3.3.3,0,0,1-.3-.3v-.11a.28.28,0,0,1,0-.09l.11-.31a.24.24,0,0,1,.07-.12l.2-.21.08-.05.21-.11a.32.32,0,0,1,.14,0h.61l.1,0,.3.1a.3.3,0,0,1,.18.15l.1.21.12.35a.29.29,0,0,1,0,.09v.21a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,405.64,653Z" />
                                            <path
                                                d="M412.7,653.28h-.21a.31.31,0,0,1-.13,0L412,653l-.08,0-.21-.21a.24.24,0,0,1-.07-.12l-.21-.61h0a.25.25,0,0,1,0-.09v-.71a.25.25,0,0,1,0-.08l.21-.72.22-.46a.29.29,0,0,1,.2-.16l.41-.1h.38l.49.11a.32.32,0,0,1,.18.13l.2.3a.31.31,0,0,1-.51.35l-.14-.21-.29-.08h-.24l-.19.06-.15.29-.07.26.34-.09h.28l.48.12a.28.28,0,0,1,.15.08l.3.3a.28.28,0,0,1,.08.15l.11.58-.1.57a.39.39,0,0,1-.13.2l-.31.2-.44.23A.35.35,0,0,1,412.7,653.28Zm-.13-.61h.06l.51-.29.08-.39-.08-.29-.19-.19-.33-.08h-.13l-.21.06-.14.21L412,652l.14.43.12.12Z" />
                                            <path
                                                d="M415.57,653.28h-.21a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l-.05-.14-.25-.07h-.23l-.23.07-.19.26,0,.29.39-.1h.28l.48.12a.28.28,0,0,1,.18.12l.2.31.23.44a.35.35,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.21.21,0,0,1-.06.1l-.21.21-.08,0-.41.21A.31.31,0,0,1,415.57,653.28Zm-.14-.61h.06l.3-.15.13-.13.15-.38-.28-.51-.3-.07h-.13l-.25.07-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M417.41,653.28a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,417.41,653.28Z" />
                                            <path
                                                d="M418.94,653.28a.3.3,0,0,1-.3-.31v-1.36l-.23-.38h-.26l-.53.53a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.61-.61a.31.31,0,0,1,.22-.09h.51a.29.29,0,0,1,.22.09l.21.2a.35.35,0,0,1,.05.08l.21.41a.35.35,0,0,1,0,.14V653A.31.31,0,0,1,418.94,653.28Z" />
                                            <path
                                                d="M420.48,653.28a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.26.26,0,0,1,.12.18l.11.41V653A.3.3,0,0,1,420.48,653.28Z" />
                                            <path
                                                d="M423.45,653.28H421.5a.31.31,0,0,1-.28-.18.3.3,0,0,1,.06-.34l1.33-1.43.43-.6v-.12l-.16-.23-.2-.07h-.41l-.31.12,0,.14v.15a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.31.31,0,0,1,0-.1l.1-.31a.33.33,0,0,1,.16-.17l.2-.11.35-.12h.71l.3.11a.24.24,0,0,1,.12.07l.11.1.24.36a.34.34,0,0,1,0,.17v.3a.34.34,0,0,1,0,.17l-.52.74-.87.94h1.24a.29.29,0,0,1,.3.3A.3.3,0,0,1,423.45,653.28Z" />
                                            <path
                                                d="M430.51,653.49l-.49-.12a.29.29,0,0,1-.14-.08l-.3-.3a.26.26,0,0,1-.07-.11l-.21-.51v0h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.21-.72a.19.19,0,0,1,.05-.1l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.2l.12,0,.51.2a.31.31,0,0,1,.18.19l.1.31a.3.3,0,0,1-.2.38.29.29,0,0,1-.38-.19l-.06-.17-.4-.13-.28.14-.23.3-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.08.05.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.38.38,0,0,1-.09.15l-.3.3a.28.28,0,0,1-.15.08Zm-.25-.69.32.08.28-.08.19-.19.08-.32-.08-.28-.21-.22-.28-.14-.28.14L430,652l-.12.24.13.33Z" />
                                            <path
                                                d="M433.27,653.49l-.48-.12a.22.22,0,0,1-.14-.08l-.31-.3a.51.51,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.2.2,0,0,1,.13,0h.31a.25.25,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.17l-.28.14-.21.29,0,.27.32-.16a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.21.08.05.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.25.25,0,0,1-.14.08l-.41.11Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32-.08-.28-.22-.22-.36-.15-.3.15-.21.22-.07.27.08.34Z" />
                                            <path
                                                d="M435.32,653.49a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.62,0v1.95A.31.31,0,0,1,435.32,653.49Z" />
                                            <path
                                                d="M436.85,653.49a.31.31,0,0,1-.3-.31v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,0,1-.43.05.3.3,0,0,1-.05-.43l.41-.52a.31.31,0,0,1,.14-.09l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,436.85,653.49Z" />
                                            <path
                                                d="M438.39,653.49a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.17.06-.36.44a.31.31,0,1,1-.48-.38l.41-.52a.29.29,0,0,1,.15-.09l.3-.11h.61l.3.11a.32.32,0,0,1,.21.21l.1.41v1.51A.31.31,0,0,1,438.39,653.49Z" />
                                            <path
                                                d="M441.36,653.49h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.4.19-.36a.22.22,0,0,1,.05-.08L441,651v-.08l-.22-.29-.18-.11h-.33l-.28.21-.12.2a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.34.34,0,0,1,.05-.17l.35-.45L440,650a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.17.17-.18.36a.16.16,0,0,1-.06.08l-.91.91h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M448.32,653.9l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.38.38,0,0,1,.17-.12l.41-.1h.39l.48.11a.35.35,0,0,1,.22.21l.1.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.19l-.05-.15-.25-.06h-.23l-.23.06-.2.26,0,.3.57-.11.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.21.41a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.21.41a.21.21,0,0,1-.06.08l-.3.3a.28.28,0,0,1-.15.08Zm-.25-.69.32.08.28-.08.21-.21.15-.36-.15-.3-.21-.21-.32-.09-.28.08-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M451.18,653.9l-.57-.11a.33.33,0,0,1-.19-.13l-.21-.31a.21.21,0,0,1,0-.07l-.21-.62h0a.17.17,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.46a.3.3,0,0,1,.21-.17l.51-.1h.27l.48.11a.3.3,0,0,1,.18.13l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.13l-.3.06-.14.28-.07.27.62-.1.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.32-.69.38.08.3-.08.19-.19.08-.33v-.13l-.07-.24-.19-.19-.33-.09-.35.08-.27.47.16.45Z" />
                                            <path
                                                d="M453.13,653.9a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,453.13,653.9Z" />
                                            <path
                                                d="M454.66,653.9a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.3l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.12-.08.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,454.66,653.9Z" />
                                            <path
                                                d="M456.2,653.9a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.3-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.31.31,0,0,1,456.2,653.9Z" />
                                            <path
                                                d="M459.17,653.9h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.19l-.05-.09-.23-.18H458l-.14,0-.05.09a.22.22,0,0,1-.05.08l-.12.12v.08a.31.31,0,0,1-.61,0v-.21a.31.31,0,0,1,.09-.22l.17-.16.08-.16a.29.29,0,0,1,.18-.16l.3-.1.1,0h.61a.23.23,0,0,1,.14,0l.21.1a.19.19,0,0,1,.07.06l.21.2.06.08.1.2a.35.35,0,0,1,0,.14v.31a.38.38,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M466.33,654.41h-.2a.23.23,0,0,1-.14,0l-.41-.2a.16.16,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.3.3,0,0,1,.15.18l.11.3a.31.31,0,0,1-.2.39.29.29,0,0,1-.38-.19l-.07-.19-.23-.11h-.16l-.28.14-.22.28,0,.3.39-.1h.28l.49.11a.38.38,0,0,1,.18.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.21.41-.22.34a.29.29,0,0,1-.12.1l-.41.2A.23.23,0,0,1,466.33,654.41Zm-.13-.62h.06l.27-.13.16-.24.14-.29-.28-.5-.29-.07h-.13l-.25.07-.19.19-.07.28.07.34.21.2Z" />
                                            <path
                                                d="M469.1,654.41H469a.22.22,0,0,1-.13,0l-.41-.2a.16.16,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.11-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21a.3.3,0,0,1,.15.18l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.06-.19-.23-.11h-.16l-.28.14-.22.28,0,.3.57-.11.48.11a.39.39,0,0,1,.14.08l.31.31.06.08.2.41a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.2.41-.06.08-.31.3a.16.16,0,0,1-.08.06l-.41.2A.22.22,0,0,1,469.1,654.41Zm-.33-.77.27.14.28-.14.24-.23.14-.28-.14-.28-.21-.21-.33-.08-.28.07-.19.19-.06.28.07.34Z" />
                                            <path
                                                d="M470.94,654.3a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,470.94,654.3Z" />
                                            <path
                                                d="M472.47,654.3a.29.29,0,0,1-.3-.3v-1.33l-.06-.28-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.52a.3.3,0,0,1,.14-.1l.31-.1h.6l.31.1a.33.33,0,0,1,.2.23l.1.52V654A.3.3,0,0,1,472.47,654.3Z" />
                                            <path
                                                d="M474.11,654.3a.3.3,0,0,1-.31-.3v-1.27l-.13-.33-.12,0h-.29l-.09,0-.48.47a.3.3,0,0,1-.43-.43l.51-.51a.24.24,0,0,1,.08-.06l.2-.1a.35.35,0,0,1,.14,0h.51l.3.1a.31.31,0,0,1,.19.18l.21.51a.5.5,0,0,1,0,.12V654A.3.3,0,0,1,474.11,654.3Z" />
                                            <path
                                                d="M477.08,654.3H475a.29.29,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.4-1.3.35-.59v-.19l-.12-.24-.18-.11h-.43l-.23.15-.07.26a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.29.29,0,0,1,0-.09l.1-.31a.24.24,0,0,1,.07-.12l.1-.1.36-.25a.34.34,0,0,1,.17,0h.61a.34.34,0,0,1,.17,0l.46.35a.24.24,0,0,1,.07.12l.11.31a.28.28,0,0,1,0,.09V652a.32.32,0,0,1,0,.14l-.1.2-.32.53a.2.2,0,0,1-.06.07l-.86.8h1.27a.31.31,0,0,1,.31.31A.3.3,0,0,1,477.08,654.3Z" />
                                            <path
                                                d="M483.94,654.61l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.37.37,0,0,1,0-.11v-.56l.11-.76a.28.28,0,0,1,0-.12l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.32.32,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.21.06-.21.36,0,.29.33-.16a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.34.23a.3.3,0,0,1,.13.18l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.29.29,0,0,1-.14.08l-.41.1Zm-.26-.69.33.09h.13l.25-.07.19-.19.08-.33v-.13l-.06-.22-.21-.14-.37-.15-.52.29-.06.24.08.45Z" />
                                            <path
                                                d="M486.8,654.61l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61v-.67l.1-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.24-.07h-.24l-.21.06-.21.36,0,.29.33-.16a.31.31,0,0,1,.13,0h.1a.25.25,0,0,1,.12,0l.51.2.1.07.21.2.06.08.2.41a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.09.35-.08.14-.21.15-.37-.15-.3-.13-.12-.38-.15-.5.28-.06.24.07.45Z" />
                                            <path
                                                d="M488.75,654.61a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,488.75,654.61Z" />
                                            <path
                                                d="M490.38,654.61a.31.31,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.28l-.14.07-.46.37a.31.31,0,1,1-.38-.48l.51-.41.26-.13a.22.22,0,0,1,.13,0h.41l.1,0,.31.1a.35.35,0,0,1,.18.16l.2.4a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,490.38,654.61Z" />
                                            <path
                                                d="M491.92,654.61a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41a.23.23,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.4a.25.25,0,0,1,0,.14v1.43A.31.31,0,0,1,491.92,654.61Z" />
                                            <path
                                                d="M494.89,654.61h-1.95a.3.3,0,0,1-.22-.51l1.33-1.44.43-.6V652l-.12-.12a.22.22,0,0,1-.05-.08l-.05-.09-.14-.05h-.49l-.09.05-.12.12-.07.24a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31V652a.18.18,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.21-.21.08-.06.2-.1a.32.32,0,0,1,.14,0h.61a.18.18,0,0,1,.1,0l.31.1a.28.28,0,0,1,.17.15l.08.16.17.17a.31.31,0,0,1,.09.22v.31a.26.26,0,0,1,0,.17l-.52.73-.87.94h1.24a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M502,654.82h-.1a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.38.38,0,0,1-.12-.16l-.2-.62h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.21-.72.22-.46a.3.3,0,0,1,.22-.17l.51-.1h.26l.58.11a.32.32,0,0,1,.23.21l.1.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.19l-.05-.14-.34-.07h-.14l-.3.06-.14.28-.08.27.62-.1.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.48a.3.3,0,0,1-.12.19l-.31.2-.44.22A.23.23,0,0,1,502,654.82Zm-.56-.92.22.15.29.14.5-.28.07-.29v-.13l-.07-.25-.19-.19-.32-.09-.36.08-.26.47Z" />
                                            <path
                                                d="M504.82,654.82h-.21a.25.25,0,0,1-.14,0l-.4-.2-.34-.22a.38.38,0,0,1-.14-.21l-.1-.61a.34.34,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.26.26,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.57a.3.3,0,0,1-.13.2l-.3.2-.45.22A.22.22,0,0,1,504.82,654.82Zm-.14-.62h.06l.52-.28.07-.39-.07-.29-.19-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.08.41.19.13Z" />
                                            <path
                                                d="M506.66,654.82a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,506.66,654.82Z" />
                                            <path
                                                d="M508.19,654.82a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17-.05h.4a.25.25,0,0,1,.17.05l.31.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,508.19,654.82Z" />
                                            <path
                                                d="M509.73,654.82a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09H509l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,509.73,654.82Z" />
                                            <path
                                                d="M512.7,654.82h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.4.36-.62v-.12l-.15-.23-.21-.07h-.41l-.24.11-.12.18v.12a.31.31,0,0,1-.61,0v-.21a.34.34,0,0,1,.05-.17l.35-.45a.25.25,0,0,1,.12-.08l.3-.1.1,0H512l.1,0,.31.1a.42.42,0,0,1,.12.08l.1.1.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.91.91h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M520.68,655.23h-.1l-.12,0L520,655a.31.31,0,0,1-.14-.12l-.2-.3-.23-.56h0s0,0,0,0h0a.19.19,0,0,1,0-.08v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.46a.32.32,0,0,1,.22-.17l.51-.1h.26l.49.11a.34.34,0,0,1,.18.13l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.13l-.3.06-.14.28-.08.27.62-.1.49.11a.29.29,0,0,1,.14.08l.31.31a.64.64,0,0,1,.08.14l.11.59-.11.48a.47.47,0,0,1-.08.14l-.31.31-.08.06-.41.2A.23.23,0,0,1,520.68,655.23Zm-.41-.77.35.15.29-.15.21-.21.08-.33-.08-.27-.19-.19-.32-.09-.36.08-.26.46.16.38Z" />
                                            <path
                                                d="M523.55,655.23h-.21a.2.2,0,0,1-.13,0l-.41-.2-.08-.06-.31-.31a.28.28,0,0,1-.08-.15l-.11-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.35.35,0,0,1,.11.1l.21.31a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.27-.13h-.16l-.28.14-.22.28,0,.3.39-.1h.28l.48.11a.25.25,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.25.25,0,0,1-.08.14l-.31.31-.08.06-.41.2A.22.22,0,0,1,523.55,655.23Zm-.13-.62h.05l.3-.15.22-.21.08-.33-.08-.27-.19-.19-.33-.09h-.13l-.25.07-.19.19-.06.28.07.33.21.21Z" />
                                            <path
                                                d="M525.39,655.12a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,525.39,655.12Z" />
                                            <path
                                                d="M526.93,655.12a.3.3,0,0,1-.31-.3v-1.28l-.18-.36h-.24l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.31.31,0,0,1,.13,0l.21.1a.33.33,0,0,1,.15.16l.2.51a.5.5,0,0,1,0,.12v1.33A.3.3,0,0,1,526.93,655.12Z" />
                                            <path
                                                d="M528.46,655.12a.3.3,0,0,1-.31-.3v-1.33l-.06-.28-.09,0h-.31l-.17.06-.35.44a.33.33,0,0,1-.44.05.31.31,0,0,1,0-.44l.4-.51a.4.4,0,0,1,.15-.1l.3-.1h.61l.3.1a.32.32,0,0,1,.21.23l.1.52v1.39A.3.3,0,0,1,528.46,655.12Z" />
                                            <path
                                                d="M531.43,655.12h-1.95a.29.29,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.28.18-.45a.33.33,0,0,1,.06-.1l.12-.12v-.08l-.22-.29-.18-.11h-.33l-.28.21-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.45.35-.25a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.46.35.24.35a.26.26,0,0,1,0,.17v.31a.31.31,0,0,1-.09.22l-.16.16-.18.45a.41.41,0,0,1-.07.11l-.86.8h1.16a.31.31,0,0,1,.31.31A.3.3,0,0,1,531.43,655.12Z" />
                                            <path
                                                d="M539.82,655.64l-.48-.12a.22.22,0,0,1-.14-.08l-.31-.3a.51.51,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.28.28,0,0,1,.1-.09l.41-.2a.25.25,0,0,1,.14,0h.31a.25.25,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.17l-.28.14-.21.29,0,.27.32-.16a.35.35,0,0,1,.14,0H540a.31.31,0,0,1,.13,0l.41.21.08.05.31.31a.29.29,0,0,1,.08.14l.11.59L541,655a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.69.33.08H540l.25-.07.19-.19.08-.33-.08-.27-.22-.22-.36-.15-.3.15-.21.21-.07.28.08.34Z" />
                                            <path
                                                d="M542.69,655.64l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.3a.23.23,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.29.29,0,0,1-.14.41.3.3,0,0,1-.41-.13l-.06-.12-.25-.12h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.1l.11,0,.52.21a.27.27,0,0,1,.1.06l.2.21a.23.23,0,0,1,.07.1l.21.51a.5.5,0,0,1,0,.12v.1a.35.35,0,0,1,0,.14l-.21.41-.22.34a.39.39,0,0,1-.2.13Zm-.25-.69.32.08.35-.08.14-.2.15-.3-.16-.38-.11-.12-.38-.15-.5.28-.07.34.07.35Z" />
                                            <path
                                                d="M544.63,655.64a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,544.63,655.64Z" />
                                            <path
                                                d="M546.27,655.64a.31.31,0,0,1-.31-.31V654l-.11-.23-.14,0h-.29l-.14.07-.46.38a.31.31,0,0,1-.38-.48l.51-.41.26-.14a.32.32,0,0,1,.14,0h.51l.3.1a.35.35,0,0,1,.18.16l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,546.27,655.64Z" />
                                            <path
                                                d="M547.81,655.64a.31.31,0,0,1-.31-.31V654l-.18-.28H547l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.12-.08.31-.1h.51a.31.31,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,547.81,655.64Z" />
                                            <path
                                                d="M550.77,655.64h-1.94a.32.32,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.33-1.43.43-.62-.21-.29-.18-.11h-.4l-.12.11s-.05,0-.07.06l-.1,0,0,.2a.31.31,0,0,1-.62,0V653a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.16-.08.17-.17a.31.31,0,0,1,.21-.09h.62a.34.34,0,0,1,.17.05l.45.35.25.35a.34.34,0,0,1,.05.17v.21a.34.34,0,0,1-.05.17l-.53.73-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M557.73,655.94l-.57-.11a.26.26,0,0,1-.19-.13l-.21-.3s0,0,0-.08l-.21-.61h0a.43.43,0,0,1,0-.11v-.7a.29.29,0,0,1,0-.09l.2-.72.23-.46a.31.31,0,0,1,.21-.16l.51-.1h.27l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.08h-.13l-.3.07-.14.28-.07.26.62-.09.48.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.32-.68.38.07.3-.07.18-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08-.35.08-.27.46.15.46Z" />
                                            <path
                                                d="M560.5,655.94l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.37.37,0,0,1,0-.11v-.66l.11-.76a.27.27,0,0,1,0-.15l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08L561,653l-.29-.08h-.23l-.23.07-.2.26,0,.29.39-.1h.28l.49.11a.29.29,0,0,1,.14.08l.3.3a.38.38,0,0,1,.09.15l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.29.29,0,0,1-.14.08l-.41.1Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M562.54,655.94a.3.3,0,0,1-.3-.3v-1.95a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.95A.31.31,0,0,1,562.54,655.94Z" />
                                            <path
                                                d="M564.08,655.94a.31.31,0,0,1-.31-.3v-1.37l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41a.25.25,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.4a.37.37,0,0,1,0,.14v1.44A.31.31,0,0,1,564.08,655.94Z" />
                                            <path
                                                d="M565.61,655.94a.3.3,0,0,1-.3-.3V654.2l0-.17-.11,0h-.3l-.2.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.4l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,565.61,655.94Z" />
                                            <path
                                                d="M568.58,655.94h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.4-1.4.35-.63v-.08l-.11-.12a.24.24,0,0,1-.06-.08l0-.09-.14,0h-.42l-.14,0,0,.09a.24.24,0,0,1-.06.08l-.11.12v.07a.31.31,0,0,1-.62,0v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.31-.1.09,0h.52l.09,0,.31.1a.3.3,0,0,1,.18.15l.08.16.17.17a.31.31,0,0,1,.09.22v.31a.34.34,0,0,1,0,.17l-.21.3-.18.38-.06.08-.91.91h1.2a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M557.73,655.84l-.57-.11a.26.26,0,0,1-.19-.13l-.21-.31a.15.15,0,0,1,0-.07l-.21-.61h0a.24.24,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.42-1.15a.31.31,0,0,1,.22-.18l.51-.11h.27l.57.11a.3.3,0,0,1,.23.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l0-.14-.33-.06h-.15l-.28.06-.21.55.6-.1.48.11a.42.42,0,0,1,.14.09l.31.3a.28.28,0,0,1,.08.15l.1.4v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.32-.69.38.08.3-.07.18-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08-.35.08-.27.46.15.46Z" />
                                            <path
                                                d="M560.5,655.84l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.34.34,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.29.29,0,0,1,.18.13l.2.3a.31.31,0,0,1-.08.43.31.31,0,0,1-.43-.09l-.14-.2-.29-.08h-.23l-.23.06-.2.27,0,.29.39-.1h.28l.48.11a.38.38,0,0,1,.15.09l.31.3a.53.53,0,0,1,.08.15l.1.4v.28l-.11.49a.64.64,0,0,1-.08.14l-.31.31a.28.28,0,0,1-.15.08l-.4.1Zm-.26-.69.33.09h.13l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M562.54,655.84a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,562.54,655.84Z" />
                                            <path
                                                d="M564.08,655.84a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41a.35.35,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.2.41a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,564.08,655.84Z" />
                                            <path
                                                d="M565.61,655.84a.3.3,0,0,1-.3-.31V654.1l0-.17-.11,0h-.3l-.2.06-.35.36a.31.31,0,1,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.4l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,565.61,655.84Z" />
                                            <path
                                                d="M568.58,655.84h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.4-1.4.35-.63v-.09l-.11-.11A.24.24,0,0,1,568,653l0-.09-.14,0h-.42l-.14,0,0,.09a.24.24,0,0,1-.06.08l-.11.11v.08a.31.31,0,0,1-.62,0v-.2a.29.29,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.31-.11h.7l.31.11a.3.3,0,0,1,.18.15l.08.16.17.17a.29.29,0,0,1,.09.22v.3a.34.34,0,0,1,0,.17l-.21.31-.18.38-.06.08-.91.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,568.58,655.84Z" />
                                            <path
                                                d="M575.64,656.25h-.1a.35.35,0,0,1-.14,0L575,656l-.08,0-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.57.57,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.22.06-.2.27,0,.29.56-.11.49.11a.42.42,0,0,1,.14.09l.31.3.06.08.2.41a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.2.41-.06.08-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,575.64,656.25Zm-.33-.76.28.13.28-.13.24-.24.14-.28-.14-.28-.21-.21-.33-.08-.28.08-.19.19-.06.27.07.34Z" />
                                            <path
                                                d="M578.51,656.25h-.1l-.12,0-.51-.21a.26.26,0,0,1-.14-.11l-.2-.31-.24-.56v0h0a.34.34,0,0,1,0-.1v-.71a.22.22,0,0,1,0-.08l.21-.72.22-.46a.27.27,0,0,1,.22-.16l.51-.11h.26l.49.11a.29.29,0,0,1,.18.13l.2.3a.31.31,0,1,1-.51.34l-.14-.2-.29-.08h-.13l-.3.07-.14.27-.08.27.62-.1.48.11a.38.38,0,0,1,.15.09l.3.3a.42.42,0,0,1,.09.14l.11.59-.11.49a.42.42,0,0,1-.09.14l-.3.31-.08,0-.41.21A.32.32,0,0,1,578.51,656.25Zm-.41-.76.35.14.29-.14.21-.22L579,655l-.08-.28-.19-.19-.32-.08-.36.08-.26.45.16.39Z" />
                                            <path
                                                d="M580.35,656.25a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,580.35,656.25Z" />
                                            <path
                                                d="M581.89,656.25a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.3.3,0,0,1,.12.19l.11.4v1.51A.31.31,0,0,1,581.89,656.25Z" />
                                            <path
                                                d="M583.42,656.15a.3.3,0,0,1-.3-.31v-1.33l-.06-.22-.14-.09h-.22l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0H583a.34.34,0,0,1,.17,0l.31.2a.31.31,0,0,1,.13.19l.1.4v1.41A.31.31,0,0,1,583.42,656.15Z" />
                                            <path
                                                d="M586.39,656.15h-1.94a.31.31,0,0,1-.29-.2.31.31,0,0,1,.08-.33l1.4-1.31.34-.59v-.18l0-.14-.36-.22h-.32l-.29.22-.11.19a.31.31,0,1,1-.62,0v-.1a.34.34,0,0,1,0-.17l.35-.46.35-.24a.26.26,0,0,1,.17,0h.52a.26.26,0,0,1,.17,0l.47.28a.31.31,0,0,1,.16.18l.1.31a.3.3,0,0,1,0,.1v.3a.23.23,0,0,1,0,.14l-.1.21-.32.53,0,.06-.86.8h1.16a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M593.35,656.66l-.48-.11a.32.32,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.09-.17l-.1-.6a.21.21,0,0,1,0-.11v-.57l.1-.76a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l0-.15-.25-.06h-.23l-.21.06-.21.35,0,.3.32-.16a.25.25,0,0,1,.14,0h.1l.12,0,.51.21a.23.23,0,0,1,.1.07l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.23.34a.29.29,0,0,1-.19.13Zm-.25-.69.33.08.35-.07.13-.21.16-.37-.15-.3-.13-.12-.38-.16-.51.29-.06.24.08.44Z" />
                                            <path
                                                d="M596.22,656.66l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.29.29,0,0,1-.07-.12l-.2-.61h0a.28.28,0,0,1,0-.09v-.61a.25.25,0,0,1,0-.08l.21-.72a.11.11,0,0,1,0-.07l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.28l.57.1a.34.34,0,0,1,.24.21l.1.31a.3.3,0,0,1-.2.38.29.29,0,0,1-.38-.19l0-.14-.34-.07h-.14l-.21.06-.22.37-.09.31.38-.2a.32.32,0,0,1,.14,0h.1l.48.11a.53.53,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08ZM596,656l.32.08.28-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.28-.07-.55.31-.11.22.14.43Z" />
                                            <path
                                                d="M598.16,656.66a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,598.16,656.66Z" />
                                            <path
                                                d="M599.7,656.66a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,599.7,656.66Z" />
                                            <path
                                                d="M601.34,656.66a.31.31,0,0,1-.31-.31V655l-.12-.23-.14,0h-.31l-.19.07-.35.36a.31.31,0,0,1-.44-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.33.33,0,0,1,.18.15l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,601.34,656.66Z" />
                                            <path
                                                d="M604.3,656.66h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22V654l0-.1-.23-.18H603l-.14,0-.11.23v.13a.31.31,0,0,1-.62,0v-.2a.33.33,0,0,1,0-.14l.2-.41a.35.35,0,0,1,.18-.16l.31-.1h.71a.31.31,0,0,1,.13,0l.21.1.08.06.2.2a.21.21,0,0,1,.06.08l.1.21a.33.33,0,0,1,0,.14v.3a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41L603,656h1.3a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M611.37,657h-.21a.25.25,0,0,1-.14,0l-.41-.2-.34-.22a.36.36,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.3.3,0,0,1,.18.13l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.57a.26.26,0,0,1-.13.19l-.3.21-.45.22A.22.22,0,0,1,611.37,657Zm-.14-.62h.06l.52-.28.07-.39-.07-.29-.19-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M614.13,657H614a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.32.32,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.33.33,0,0,1,.17-.12l.41-.1h.38l.49.11a.32.32,0,0,1,.21.21l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.25-.06H614l-.23.06-.2.26,0,.3.57-.11.57.11a.3.3,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.36.36,0,0,1,0,.11l-.21.51a.26.26,0,0,1-.07.11l-.2.2-.1.07-.52.2A.2.2,0,0,1,614.13,657Zm-.54-.9.2.13.3.15.38-.16.11-.11.16-.39-.28-.49-.39-.08-.29.07-.19.19-.07.28Z" />
                                            <path
                                                d="M616,657a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,616,657Z" />
                                            <path
                                                d="M617.61,657a.31.31,0,0,1-.31-.31V655.3l-.13-.27-.17-.11h-.18l-.12.11-.54.44a.31.31,0,0,1-.38-.48l.69-.6a.36.36,0,0,1,.22-.09h.41a.27.27,0,0,1,.17.06l.31.2a.29.29,0,0,1,.1.12l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,617.61,657Z" />
                                            <path
                                                d="M619.14,657a.3.3,0,0,1-.3-.31V655.3l-.23-.38h-.26l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.31.31,0,0,1,.21-.09h.52a.31.31,0,0,1,.21.09l.21.21a.22.22,0,0,1,.05.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,619.14,657Z" />
                                            <path
                                                d="M622.11,657h-1.94a.32.32,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.33-1.43.26-.35.07-.21v-.21l-.06-.19-.19-.06h-.5l-.23.11,0,.19a.31.31,0,1,1-.62,0v-.1a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.41-.2a.2.2,0,0,1,.13,0h.62l.09,0,.31.1a.25.25,0,0,1,.12.08l.1.1a.25.25,0,0,1,.08.12l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.26.26,0,0,1-.05.09l-.31.41-.87.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M629.18,657.07l-.58-.11a.29.29,0,0,1-.19-.13l-.21-.31L628,656a.27.27,0,0,1,0-.13v-.71a.22.22,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.16-.15l.51-.2a.25.25,0,0,1,.12,0h.2a.35.35,0,0,1,.14,0l.41.2a.41.41,0,0,1,.12.11l.2.3a.31.31,0,0,1-.09.43.3.3,0,0,1-.42-.09l-.16-.23-.35-.14-.34.14-.16.3-.07.25.4-.16.12,0h.1a.28.28,0,0,1,.13,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.27.27,0,0,1-.14.08Zm-.34-.69.4.08.29-.08.19-.19.08-.32-.08-.28-.21-.21-.29-.15-.35.14-.28.48.15.39Z" />
                                            <path
                                                d="M631.94,657.07l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.48.48,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.13.42.32.32,0,0,1-.42-.14l-.05-.11-.26-.13H632l-.28.14-.21.29,0,.28.32-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.25-.69.32.08h.13l.25-.07.19-.19.08-.32-.07-.28-.22-.21-.36-.15-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M634,657.07a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,634,657.07Z" />
                                            <path
                                                d="M635.52,657.07a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.37l-.08,0-.36.46a.32.32,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.22.22,0,0,1,.1-.09l.2-.1a.35.35,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.33.33,0,0,1,.15.16l.21.52a.36.36,0,0,1,0,.11v1.33A.31.31,0,0,1,635.52,657.07Z" />
                                            <path
                                                d="M637.06,657.07a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1a.16.16,0,0,1,.1,0h.41a.15.15,0,0,1,.09,0l.31.1a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,637.06,657.07Z" />
                                            <path
                                                d="M640,657.07h-1.95a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.4-1.39.18-.37.06-.08.12-.11v-.09l-.22-.29-.18-.11h-.33l-.35.22,0,.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.16-.17l.2-.11.28-.18a.26.26,0,0,1,.17,0h.51a.26.26,0,0,1,.17,0l.46.34.24.36a.34.34,0,0,1,.05.17v.3a.29.29,0,0,1-.09.22l-.17.17-.18.37-.06.08-.91.9H640a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M647,657.48l-.48-.11-.14-.08-.31-.31a.37.37,0,0,1-.07-.12l-.21-.62h0a.28.28,0,0,1,0-.09v-.71a.19.19,0,0,1,0-.08l.2-.72a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.11a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06H647l-.22.06-.21.28-.09.29h0l.59-.11.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31-.14.08Zm-.25-.69.33.08.28-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.33-.08-.27.07-.22.22-.13.25.15.43Z" />
                                            <path
                                                d="M649.75,657.48l-.49-.11a.38.38,0,0,1-.18-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0s0-.06,0-.09v-.71s0-.06,0-.08l.21-.72.22-.46a.32.32,0,0,1,.2-.16l.41-.11h.39l.48.11a.32.32,0,0,1,.18.12l.21.31a.31.31,0,0,1-.52.34l-.14-.21-.29-.07h-.23l-.2,0-.14.29-.07.27.33-.09H650l.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.49a.39.39,0,0,1-.08.14l-.31.31-.14.08-.41.1Zm-.22-.68.29.07H650l.25-.07.19-.19.08-.32v-.13l-.06-.25-.19-.19-.33-.08h-.13l-.22.06-.27.47.15.45Z" />
                                            <path
                                                d="M651.8,657.48a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,651.8,657.48Z" />
                                            <path
                                                d="M653.33,657.48a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07L652,656a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11H653l.31.11a.32.32,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,653.33,657.48Z" />
                                            <path
                                                d="M654.87,657.48a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.35a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,654.87,657.48Z" />
                                            <path
                                                d="M657.83,657.48h-1.94a.31.31,0,0,1-.22-.53l1.43-1.43.25-.34.07-.21v-.18l0-.1-.12-.12-.19-.06h-.41l-.14,0,0,.09a.21.21,0,0,1-.06.08l-.11.11v.08a.31.31,0,1,1-.62,0v-.21a.28.28,0,0,1,.1-.21l.16-.17.08-.16a.31.31,0,0,1,.18-.16l.31-.1h.71l.3.1a.25.25,0,0,1,.12.08l.21.2a.35.35,0,0,1,0,.08l.11.21a.31.31,0,0,1,0,.13V655a.36.36,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M395.3,620.12l-.48-.11a.36.36,0,0,1-.19-.13l-.2-.31-.23-.56h0v0s0-.06,0-.09v-.71a.31.31,0,0,1,0-.08l.2-.72.22-.46a.32.32,0,0,1,.14-.14l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.12.11l.21.31a.31.31,0,0,1-.09.42.32.32,0,0,1-.43-.08l-.15-.24-.28-.14h-.16l-.25.13-.16.31-.06.24.26-.14a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.36.36,0,0,1,.08.15l.11.58-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.22-.68.29.07h.13l.25-.06.19-.19.09-.33-.08-.28-.22-.21-.36-.15-.27.13-.28.49.15.39Z" />
                                            <path
                                                d="M398.16,620.12l-.48-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.53.53,0,0,1,0-.13v-.66l.1-.76a.42.42,0,0,1,.06-.14l.31-.41.11-.09.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.31.31,0,1,1-.59.19l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.21a.35.35,0,0,1,.11.1l.21.31.22.44a.37.37,0,0,1,0,.14v.1a.33.33,0,0,1,0,.14l-.2.41-.23.34a.3.3,0,0,1-.18.13l-.41.1Zm-.25-.69.33.08h.13l.22-.06.14-.21.14-.29-.3-.53-.33-.13-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M400.21,620.12a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,400.21,620.12Z" />
                                            <path
                                                d="M401.75,620.12a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.37l-.08,0-.37.46a.3.3,0,0,1-.43.05.31.31,0,0,1,0-.43l.41-.51a.28.28,0,0,1,.1-.09l.21-.1a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.35.35,0,0,1,.15.17l.2.51a.2.2,0,0,1,0,.11v1.33A.3.3,0,0,1,401.75,620.12Z" />
                                            <path
                                                d="M403.28,620.12a.3.3,0,0,1-.3-.31v-1.33l-.06-.27-.1,0h-.31l-.17.06-.35.44a.31.31,0,1,1-.48-.38l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,403.28,620.12Z" />
                                            <path
                                                d="M406.25,620.12h-1.94a.3.3,0,0,1-.29-.19.33.33,0,0,1,.06-.33l1.33-1.43.43-.53v-.09l-.22-.28-.18-.12h-.32l-.36.22,0,.19a.31.31,0,1,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.31.31,0,0,1,.15-.17l.21-.11.27-.18a.26.26,0,0,1,.17-.05h.51a.25.25,0,0,1,.17.05l.46.34.24.36a.27.27,0,0,1,.06.17v.3a.34.34,0,0,1-.09.22l-.21.21-.28.37-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M413.21,620.43l-.48-.12a.28.28,0,0,1-.15-.08l-.3-.3a.42.42,0,0,1-.08-.12l-.2-.62h0s0-.06,0-.09v-.61s0-.06,0-.08l.21-.72,0-.07.31-.51a.27.27,0,0,1,.19-.14l.41-.11h.28l.57.11a.31.31,0,0,1,.23.21l.1.3a.31.31,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.05-.14-.33-.07h-.15l-.21.06-.22.37-.06.19h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.69.33.08.27-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.33-.09-.28.08-.21.22-.13.25.14.42Z" />
                                            <path
                                                d="M416,620.43l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.11-.61v-.77l.11-.67a.19.19,0,0,1,0-.1l.31-.52a.29.29,0,0,1,.19-.13l.41-.11h.38l.49.12a.31.31,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07H416l-.2.06-.22.35,0,.2.38-.09h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.11.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08l-.41.11Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32v-.13l-.07-.25-.19-.19-.32-.09H416l-.24.07-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M418,620.43a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,418,620.43Z" />
                                            <path
                                                d="M419.56,620.43a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,419.56,620.43Z" />
                                            <path
                                                d="M421.09,620.43a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,421.09,620.43Z" />
                                            <path
                                                d="M424.06,620.43h-1.94a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.4-1.4.35-.62v-.09l-.11-.11a.24.24,0,0,1-.06-.09l-.05-.09-.14,0h-.41l-.14,0,0,.09-.06.09-.12.11v.08a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.31.31,0,0,1,.09-.22l.17-.16.08-.16a.31.31,0,0,1,.18-.16l.31-.1.09,0h.51l.1,0,.31.1a.31.31,0,0,1,.18.16l.08.16.17.16a.36.36,0,0,1,.09.22V618a.27.27,0,0,1-.06.17l-.2.31-.19.37a.22.22,0,0,1-.05.08l-.91.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M431.12,620.73H431a.35.35,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.2.2,0,0,1,0-.11v-.66l.11-.76a.3.3,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.25-.06H431l-.23.07-.19.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.05.08l.21.41a.28.28,0,0,1,0,.13v.1a.5.5,0,0,1,0,.12l-.21.51a.21.21,0,0,1-.06.1l-.21.21-.1.07-.51.2A.25.25,0,0,1,431.12,620.73Zm-.54-.9.2.14.3.14.38-.15.12-.12.15-.38-.14-.29-.21-.21-.33-.08-.28.08-.19.19-.07.27Z" />
                                            <path
                                                d="M434,620.73h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.12-.16l-.21-.61h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.47a.31.31,0,0,1,.21-.16l.52-.1h.26l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.2.39.32.32,0,0,1-.39-.2l0-.13-.34-.07h-.14l-.31.07-.14.28-.07.26.62-.09.48.11a.28.28,0,0,1,.15.08l.3.31a.25.25,0,0,1,.08.14l.11.58-.1.58a.33.33,0,0,1-.13.19l-.31.21-.44.22A.35.35,0,0,1,434,620.73Zm-.56-.91.22.15.29.14.49-.28.08-.39-.08-.29-.19-.19-.33-.08-.35.08-.26.46Z" />
                                            <path
                                                d="M435.83,620.73a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.3.3,0,0,1,435.83,620.73Z" />
                                            <path
                                                d="M437.37,620.73a.3.3,0,0,1-.31-.3V619l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0H437a.34.34,0,0,1,.17,0l.3.21a.27.27,0,0,1,.13.18l.1.41v1.51A.29.29,0,0,1,437.37,620.73Z" />
                                            <path
                                                d="M438.9,620.73a.3.3,0,0,1-.31-.3V619l-.06-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,438.9,620.73Z" />
                                            <path
                                                d="M442,620.73h-2a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21V618l0-.14-.23-.12h-.49l-.19.07-.06.24a.31.31,0,0,1-.62,0V618a.36.36,0,0,1,0-.1l.1-.3a.25.25,0,0,1,.08-.12l.1-.11a.24.24,0,0,1,.12-.07l.3-.1.1,0h.62a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.16.18l.1.3a.34.34,0,0,1,0,.1v.31a.28.28,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.94.94H442a.31.31,0,0,1,.31.31A.3.3,0,0,1,442,620.73Z" />
                                            <path
                                                d="M448.83,621l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.39.39,0,0,1,.06-.15l.3-.41.11-.09.41-.2a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.16a.23.23,0,0,1,.14,0h.2a.23.23,0,0,1,.14,0l.41.2.34.22a.3.3,0,0,1,.13.2l.11.67-.11.49a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.32.09H449l.25-.07.19-.19.09-.33-.08-.35-.21-.14-.37-.15-.51.28-.07.35.07.34Z" />
                                            <path
                                                d="M451.7,621l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.11-.76a.27.27,0,0,1,.05-.15l.31-.4a.52.52,0,0,1,.11-.1l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.31.31,0,1,1-.55.27l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.23.23,0,0,1,.14,0h.1a.25.25,0,0,1,.14,0l.4.2.34.22a.29.29,0,0,1,.12.15l.2.51a.2.2,0,0,1,0,.11v.1a.23.23,0,0,1,0,.14l-.2.41-.06.08-.31.31a.22.22,0,0,1-.14.08Zm-.26-.69.33.09.28-.08.21-.22.15-.29-.14-.35-.23-.15-.29-.14-.49.27-.07.35.07.34Z" />
                                            <path
                                                d="M453.64,621a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,453.64,621Z" />
                                            <path
                                                d="M455.18,621a.31.31,0,0,1-.31-.31V619.3l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.09,0,.31.1a.28.28,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,455.18,621Z" />
                                            <path
                                                d="M456.81,621a.3.3,0,0,1-.3-.31v-1.36l-.18-.27H456l-.14.07-.45.37a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.52-.41.26-.14a.28.28,0,0,1,.13,0h.51a.32.32,0,0,1,.14,0l.21.11a.33.33,0,0,1,.13.13l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,456.81,621Z" />
                                            <path
                                                d="M459.78,621h-2a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.32-.11-.31-.14,0h-.5l-.09,0-.12.12-.06.24a.31.31,0,0,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.31a.75.75,0,0,1,.07-.12l.21-.2.08-.06.2-.1a.35.35,0,0,1,.14,0h.71l.31.11a.3.3,0,0,1,.18.15l.1.2.12.35a.34.34,0,0,1,0,.1v.2a.31.31,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.31.4-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,459.78,621Z" />
                                            <path
                                                d="M466.84,621.55h-.2a.32.32,0,0,1-.14,0l-.41-.21-.08,0-.2-.21a.25.25,0,0,1-.08-.12l-.2-.61h0a.2.2,0,0,1,0-.09v-.71l.11-.75a.39.39,0,0,1,.06-.15l.3-.41a.42.42,0,0,1,.18-.11l.41-.1H467l.48.11a.29.29,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.08h-.23l-.23.07-.19.26-.05.29.39-.1h.28l.49.11a.29.29,0,0,1,.14.08l.31.3a.36.36,0,0,1,.08.15l.1.41v.28l-.11.48a.34.34,0,0,1-.13.18l-.31.21-.44.22A.32.32,0,0,1,466.84,621.55Zm-.13-.61h.06l.52-.29.08-.3v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.22.06-.14.21-.13.26.14.43.12.12Z" />
                                            <path
                                                d="M469.71,621.55h-.21a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.2l-.11-.61v-.78l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l0-.14-.24-.07h-.24l-.22.07-.2.26,0,.29.57-.1.57.1a.33.33,0,0,1,.19.13l.21.31.22.44a.37.37,0,0,1,0,.14v.1a.27.27,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.2.21-.08,0-.41.21A.35.35,0,0,1,469.71,621.55Zm-.13-.61h.06l.3-.15.12-.13.16-.38-.28-.5-.39-.08-.29.08-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M471.45,621.55a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,471.45,621.55Z" />
                                            <path
                                                d="M473.09,621.55a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.11.12-.54.43a.3.3,0,0,1-.43,0,.3.3,0,0,1,.05-.43L472,619a.31.31,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.2.21.06.07.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,473.09,621.55Z" />
                                            <path
                                                d="M474.62,621.55a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,474.62,621.55Z" />
                                            <path
                                                d="M477.59,621.55h-1.94a.31.31,0,0,1-.29-.18.33.33,0,0,1,.06-.33l1.33-1.44.43-.6v-.12l-.15-.23-.21-.07h-.41l-.31.12,0,.14V619a.31.31,0,0,1-.62,0v-.2a.36.36,0,0,1,0-.1l.1-.31a.31.31,0,0,1,.15-.17l.21-.11.35-.11a.15.15,0,0,1,.09,0h.51a.16.16,0,0,1,.1,0l.31.1a.37.37,0,0,1,.12.07l.1.1.24.36a.27.27,0,0,1,.06.17v.31a.27.27,0,0,1-.06.17l-.52.73-.87.94h1.24a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M484.55,621.76l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.41.41,0,0,1-.07-.11l-.2-.51h0v0s0-.06,0-.09v-.71s0-.06,0-.08l.21-.72.22-.46a.38.38,0,0,1,.16-.15l.52-.2a.2.2,0,0,1,.11,0h.21l.11,0,.51.2a.29.29,0,0,1,.18.19l.1.31a.31.31,0,0,1-.58.19l-.06-.17-.41-.13-.35.14-.15.3-.08.3.38-.2a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.08.05.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.42.42,0,0,1-.14.09Zm-.25-.69.33.08.27-.08.19-.19.08-.32-.07-.28-.22-.22-.28-.13-.28.13-.23.24-.12.24.13.33Z" />
                                            <path
                                                d="M487.31,621.76l-.48-.11a.42.42,0,0,1-.14-.09l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.45.45,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.13,0h.31a.33.33,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.21.08.05.3.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.3.3a.38.38,0,0,1-.15.09l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32-.08-.28-.21-.22-.36-.15-.3.15-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M489.36,621.76a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,489.36,621.76Z" />
                                            <path
                                                d="M490.9,621.76a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,1,1-.48-.38l.41-.51a.26.26,0,0,1,.14-.1l.31-.11h.6l.31.11a.31.31,0,0,1,.21.23l.1.51v1.39A.3.3,0,0,1,490.9,621.76Z" />
                                            <path
                                                d="M492.43,621.76a.31.31,0,0,1-.31-.31v-1.33l-.05-.28-.1,0h-.31l-.17.06-.35.44a.33.33,0,0,1-.44.05.3.3,0,0,1,0-.43l.41-.51a.21.21,0,0,1,.14-.1l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,492.43,621.76Z" />
                                            <path
                                                d="M495.4,621.76h-1.94a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.4-1.4.18-.36a.16.16,0,0,1,.06-.08l.11-.11v-.09l-.22-.29-.18-.11h-.32L494,619l-.12.19a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.1a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.27.27,0,0,1,.17-.06h.51a.27.27,0,0,1,.17.06l.46.34.24.36a.25.25,0,0,1,.06.17v.3a.36.36,0,0,1-.09.22l-.17.17-.19.36a.22.22,0,0,1-.05.08l-.91.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M502.46,622l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.41.41,0,0,1,0-.11V620l.1-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.24-.07h-.24l-.21.06-.21.35,0,.3.33-.16a.28.28,0,0,1,.13,0h.11a.33.33,0,0,1,.13,0l.41.2.34.23a.38.38,0,0,1,.11.11l.2.41a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.2.41-.06.08-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.27-.08.22-.22.15-.36-.14-.27-.24-.16-.29-.14-.49.28-.06.24.07.45Z" />
                                            <path
                                                d="M505.33,622l-.57-.11a.3.3,0,0,1-.2-.13l-.2-.3a.3.3,0,0,1,0-.08l-.2-.61h0a.31.31,0,0,1,0-.1v-.71a.29.29,0,0,1,0-.09l.41-1.15a.31.31,0,0,1,.23-.18l.51-.11h.26l.49.11a.29.29,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.32.32,0,0,1-.43-.08l-.14-.21-.29-.08h-.13l-.29.06-.2.55.59-.1.48.12a.28.28,0,0,1,.15.08l.3.3a.38.38,0,0,1,.09.15l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.28.28,0,0,1-.15.08Zm-.33-.68.39.07.29-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08-.36.08-.26.46.15.46Z" />
                                            <path
                                                d="M507.27,622a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,507.27,622Z" />
                                            <path
                                                d="M508.81,622a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0H508l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,508.81,622Z" />
                                            <path
                                                d="M510.34,622a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,1,1-.44-.44l.41-.41a.47.47,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,510.34,622Z" />
                                            <path
                                                d="M513.31,622h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.18l0-.1-.11-.11-.19-.07h-.42l-.14,0,0,.09-.06.08-.11.11v.08a.31.31,0,1,1-.62,0v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.3.3,0,0,1,.18-.15l.31-.11h.7l.31.11a.29.29,0,0,1,.12.07l.2.21a.16.16,0,0,1,.06.08l.1.2a.23.23,0,0,1,0,.14v.3a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,513.31,622Z" />
                                            <path
                                                d="M522.63,622.37l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.56l.11-.76a.28.28,0,0,1,0-.12l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.38l.49.11a.29.29,0,0,1,.18.13l.2.3a.3.3,0,0,1-.08.43.32.32,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.21.06-.22.35,0,.3.33-.16a.33.33,0,0,1,.14,0h.2a.33.33,0,0,1,.14,0l.41.2.34.22a.3.3,0,0,1,.12.19l.11.41v.27l-.12.49a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.4.1Zm-.26-.69.33.09h.13l.25-.07.19-.19.08-.33V621l-.06-.22-.21-.14-.37-.15-.52.29-.06.24.08.45Z" />
                                            <path
                                                d="M525.49,622.37l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.1-.66a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.15-.25-.06h-.23l-.21.06-.21.36,0,.2.55-.11.58.11a.33.33,0,0,1,.19.13l.21.31.22.44a.35.35,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.09.35-.08.14-.21.15-.37-.29-.51-.39-.08-.29.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M527.44,622.37a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,527.44,622.37Z" />
                                            <path
                                                d="M529.07,622.37a.31.31,0,0,1-.3-.31V620.7l-.12-.23-.14,0h-.28l-.14.07-.46.37a.3.3,0,0,1-.43,0,.3.3,0,0,1,0-.43l.52-.41.26-.14a.31.31,0,0,1,.13,0h.41l.1,0,.31.1a.31.31,0,0,1,.17.15l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,529.07,622.37Z" />
                                            <path
                                                d="M530.61,622.37a.31.31,0,0,1-.31-.31V620.7l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41a.32.32,0,0,1,.14,0l.2.11a.29.29,0,0,1,.14.13l.2.41a.25.25,0,0,1,0,.14v1.43A.31.31,0,0,1,530.61,622.37Z" />
                                            <path
                                                d="M533.58,622.37h-2a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.33-1.43.43-.6v-.09l-.12-.11a.22.22,0,0,1,0-.08l0-.09-.14-.05h-.49l-.1.05-.18.23v.13a.31.31,0,1,1-.61,0v-.2a.32.32,0,0,1,0-.14l.1-.21.06-.08.21-.2.08-.06.2-.1a.32.32,0,0,1,.14,0H533l.31.11a.28.28,0,0,1,.17.15l.08.16.17.17a.31.31,0,0,1,.09.22v.3a.34.34,0,0,1,0,.17l-.52.74-.87.94h1.24a.29.29,0,0,1,.3.3A.3.3,0,0,1,533.58,622.37Z" />
                                            <path
                                                d="M540.64,622.88h-.1l-.12,0-.51-.2-.1-.07-.21-.21a.24.24,0,0,1-.07-.12l-.21-.61h0a.38.38,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.21-.72.22-.46a.31.31,0,0,1,.22-.16l.51-.1h.26l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08L541,620l-.29-.07h-.13l-.31.07-.13.28-.08.26.62-.09.48.11a.28.28,0,0,1,.15.08l.3.31a.22.22,0,0,1,.08.14l.12.58-.12.49a.29.29,0,0,1-.08.14l-.3.31-.08.06-.41.2A.32.32,0,0,1,540.64,622.88Zm-.44-.77.38.15.29-.14.21-.21.08-.33-.08-.28-.19-.19-.32-.08-.36.08-.26.46.14.43Z" />
                                            <path
                                                d="M543.51,622.88h-.21a.35.35,0,0,1-.14,0l-.41-.2-.07-.06-.31-.31a.42.42,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.1-.76a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.3.3,0,0,1-.42-.08l-.14-.21-.3-.07h-.23l-.22.07-.2.26,0,.29.39-.09h.28l.48.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.06-.41.2A.31.31,0,0,1,543.51,622.88Zm-.14-.61h.06l.3-.15.22-.21.08-.33-.08-.28-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.34.2.21Z" />
                                            <path
                                                d="M545.35,622.88a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.62,0v2.05A.3.3,0,0,1,545.35,622.88Z" />
                                            <path
                                                d="M546.88,622.88a.29.29,0,0,1-.3-.3v-1.37l-.23-.37h-.19l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.31.31,0,0,1,.17,0h.4a.29.29,0,0,1,.22.09l.21.21a.22.22,0,0,1,.05.08l.21.4a.35.35,0,0,1,0,.14v1.44A.3.3,0,0,1,546.88,622.88Z" />
                                            <path
                                                d="M548.42,622.88a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0H548a.34.34,0,0,1,.17,0l.31.21a.26.26,0,0,1,.12.18l.11.41v1.51A.3.3,0,0,1,548.42,622.88Z" />
                                            <path
                                                d="M549.44,622.88a.3.3,0,0,1-.21-.52l1.39-1.4.36-.63v-.12l-.22-.28-.18-.12h-.33L550,620l-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.17l.34-.46.36-.24a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.34.24.36a.34.34,0,0,1,.05.17v.31a.34.34,0,0,1-.05.17l-.2.3-.19.38a.16.16,0,0,1-.06.08l-.86.87,1.14-.06a.3.3,0,0,1,.32.29.3.3,0,0,1-.29.32l-1.94.1Z" />
                                            <path
                                                d="M558.35,623.09l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.3.3,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.3a.33.33,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,1,1-.55.28l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.36.36,0,0,1,.11.14l.21.51a.5.5,0,0,1,0,.12v.1a.32.32,0,0,1,0,.14l-.21.41a.21.21,0,0,1-.06.08l-.3.3a.38.38,0,0,1-.15.09Zm-.26-.69.33.08.28-.08.21-.21.15-.29-.14-.35-.23-.15-.29-.15-.49.28-.07.34.07.35Z" />
                                            <path
                                                d="M561.21,623.09l-.57-.11a.29.29,0,0,1-.19-.13l-.21-.31L560,622a.28.28,0,0,1,0-.13v-.71a.24.24,0,0,1,0-.08l.2-.72.23-.46a.35.35,0,0,1,.13-.14l.41-.2a.37.37,0,0,1,.14,0h.31a.37.37,0,0,1,.14,0l.4.2.08.06.21.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.17l-.25.13-.16.31-.06.24.26-.14a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.21.34.22a.3.3,0,0,1,.13.2l.11.67-.11.49a.29.29,0,0,1-.08.14l-.31.3a.42.42,0,0,1-.14.09Zm-.33-.69.39.08.29-.08.19-.19.09-.32-.08-.36-.21-.13-.37-.16-.3.15-.12.13-.14.34.16.4Z" />
                                            <path
                                                d="M563.16,623.09a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,563.16,623.09Z" />
                                            <path
                                                d="M564.69,623.09a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,564.69,623.09Z" />
                                            <path
                                                d="M566.23,623.09a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.4-.41a.33.33,0,0,1,.13-.07l.3-.11h.61l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,566.23,623.09Z" />
                                            <path
                                                d="M569.2,623.09h-2a.32.32,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.31-.07-.2-.1-.1-.19-.06H568l-.14,0-.22.36a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,.05-.17l.29-.48a.3.3,0,0,1,.17-.16l.31-.1.1,0h.51l.1,0,.3.1a.25.25,0,0,1,.12.08l.21.2a.37.37,0,0,1,.07.12l.11.31a.31.31,0,0,1,0,.1v.2a.34.34,0,0,1,0,.1l-.11.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M611.88,624l-.57-.11a.34.34,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.61a.22.22,0,0,1,0-.11v-.61a.25.25,0,0,1,0-.08l.21-.72.21-.54a.32.32,0,0,1,.23-.19l.51-.1h.26l.49.11a.29.29,0,0,1,.18.13l.2.3a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21L612,621h-.13l-.29.06-.2.54.59-.09.48.11a.36.36,0,0,1,.15.08l.3.31a.42.42,0,0,1,.09.14l.1.41v.28l-.11.49a.42.42,0,0,1-.09.14l-.3.31a.36.36,0,0,1-.15.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.32-.08-.36.08-.26.46.15.46Z" />
                                            <path
                                                d="M614.64,624l-.48-.11a.27.27,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.09-.17l-.1-.6a.21.21,0,0,1,0-.11V622l.11-.66a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.1H615l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.21.06-.21.36,0,.2.39-.1h.28l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.18-.19.09-.32v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M616.69,624a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,616.69,624Z" />
                                            <path
                                                d="M618.22,624a.3.3,0,0,1-.3-.31v-1.36l-.18-.28h-.29l-.19.07-.35.36a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.29.29,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.41a.32.32,0,0,1,.14,0l.21.1a.29.29,0,0,1,.13.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,618.22,624Z" />
                                            <path
                                                d="M619.76,624a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0H619l-.19.07-.36.36a.31.31,0,0,1-.43-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1a.18.18,0,0,1,.1,0h.41a.18.18,0,0,1,.1,0l.3.1a.32.32,0,0,1,.21.21l.1.41v1.51A.31.31,0,0,1,619.76,624Z" />
                                            <path
                                                d="M622.73,624h-2a.32.32,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.4-1.39.36-.63v-.09l-.12-.11-.06-.08,0-.09L622,621h-.41l-.14.05,0,.09a.35.35,0,0,1-.05.08l-.12.11v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.29.29,0,0,1,.09-.21l.17-.17.08-.16a.33.33,0,0,1,.17-.16l.31-.1h.71l.3.1a.32.32,0,0,1,.18.16l.08.16.17.17a.29.29,0,0,1,.09.21v.31a.34.34,0,0,1,0,.17l-.2.31-.19.38a.33.33,0,0,1-.06.08l-.91.9h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M576.16,623.39l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.2.39.32.32,0,0,1-.39-.2l0-.14-.25-.06h-.23l-.23.06-.2.26,0,.29.57-.1.57.11a.3.3,0,0,1,.2.13l.2.3.22.45a.22.22,0,0,1,0,.13v.21a.25.25,0,0,1,0,.14l-.2.4-.22.34a.35.35,0,0,1-.2.14Zm-.26-.68.33.08.35-.08.14-.2.15-.37-.28-.52-.39-.07-.29.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M579.12,623.39H579a.35.35,0,0,1-.14,0l-.4-.2-.34-.23a.3.3,0,0,1-.13-.16l-.2-.61h0a.29.29,0,0,1,0-.09v-.71a.29.29,0,0,1,0-.09l.2-.71a.31.31,0,0,1,0-.1l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.14-.33-.07H579l-.22.06-.21.28-.09.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.27.27,0,0,1-.13.18l-.31.21-.44.22A.32.32,0,0,1,579.12,623.39Zm-.56-.91.22.15.29.14.5-.28.08-.3v-.13l-.07-.25-.19-.19-.33-.08-.28.08-.21.22-.13.25Z" />
                                            <path
                                                d="M581,623.39a.3.3,0,0,1-.31-.3V621a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,581,623.39Z" />
                                            <path
                                                d="M582.5,623.39a.29.29,0,0,1-.3-.3v-1.44l-.06-.21-.14-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,582.5,623.39Z" />
                                            <path
                                                d="M584.14,623.39a.3.3,0,0,1-.31-.3v-1.36l-.13-.28-.16-.1h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.4-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.29.29,0,0,1,.1.12l.2.41a.22.22,0,0,1,0,.13v1.44A.3.3,0,0,1,584.14,623.39Z" />
                                            <path
                                                d="M587.11,623.39h-2.05a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.21v-.21l-.05-.14-.23-.11h-.49l-.19.06-.07.19v.16a.3.3,0,0,1-.3.3.31.31,0,0,1-.31-.3v-.21a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11.12-.07.31-.1.1,0h.61a.32.32,0,0,1,.14,0l.41.21a.3.3,0,0,1,.15.18l.11.3a.34.34,0,0,1,0,.1v.31a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,587.11,623.39Z" />
                                            <path
                                                d="M594,623.7l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31A.3.3,0,0,1,593,623l-.1-.5a.24.24,0,0,1,0-.12v-.66L593,621a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.16-.24-.27-.14H594l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.14,0h.2a.33.33,0,0,1,.14,0l.41.2.08.06.3.31a.29.29,0,0,1,.08.14l.12.59-.12.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.26-.69.33.09h.13l.25-.07.19-.19.08-.33-.08-.28-.21-.21-.36-.15-.3.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M596.83,623.7l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.46.46,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.4-.21a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.21a.31.31,0,0,1,.15.17l.1.31a.31.31,0,1,1-.58.19l-.06-.18-.23-.12h-.17l-.27.14-.22.29,0,.28.32-.16a.37.37,0,0,1,.14,0h.1l.12,0,.51.2a.24.24,0,0,1,.14.12l.21.3.22.45a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.09.35-.08.13-.21.15-.29-.3-.51-.35-.14-.29.14-.21.21-.07.27.08.34Z" />
                                            <path
                                                d="M598.78,623.7a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,598.78,623.7Z" />
                                            <path
                                                d="M600.41,623.7a.3.3,0,0,1-.3-.31v-1.27l-.13-.32-.13,0h-.28l-.1,0-.48.48a.3.3,0,1,1-.43-.43l.51-.52.08-.05.21-.11a.31.31,0,0,1,.13,0h.41l.1,0,.31.1a.29.29,0,0,1,.18.18l.21.51a.43.43,0,0,1,0,.11v1.33A.31.31,0,0,1,600.41,623.7Z" />
                                            <path
                                                d="M602,623.7a.31.31,0,0,1-.31-.31v-1.27l-.17-.36h-.37l-.08,0-.37.46a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51.11-.08.2-.11a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.11a.29.29,0,0,1,.15.16l.2.51a.23.23,0,0,1,0,.11v1.33A.31.31,0,0,1,602,623.7Z" />
                                            <path
                                                d="M604.92,623.7H603a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.33-.47v-.19l-.12-.24-.18-.12h-.4l-.11.12-.08.06-.09,0,0,.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31V621a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.61a.34.34,0,0,1,.17,0l.46.35a.24.24,0,0,1,.07.12l.1.3a.36.36,0,0,1,0,.1v.31a.28.28,0,0,1,0,.13l-.1.21-.34.46-.87.94h1.24a.3.3,0,0,1,.31.3A.31.31,0,0,1,604.92,623.7Z" />
                                            <text class="cls-10" transform="translate(393.22 609.65)">A41</text>
                                            <text class="cls-10" transform="translate(522.28 611.9)">A34</text>
                                            <text class="cls-10" transform="translate(539.58 611.39)">A33</text>
                                            <text class="cls-10" transform="translate(557.39 611.19)">A32</text>
                                            <text class="cls-10" transform="translate(575.81 611.39)">A31</text>
                                            <text class="cls-10" transform="translate(593.11 611.29)">A30</text>
                                            <text class="cls-10" transform="translate(610.93 610.98)">A29</text>
                                            <text class="cls-10" transform="translate(628.42 611.39)">A28</text>
                                            <text class="cls-10" transform="translate(411.38 609.09)">A40</text>
                                            <text class="cls-10" transform="translate(429.19 608.88)">A39</text>
                                            <text class="cls-10" transform="translate(447.61 609.09)">A38</text>
                                            <text class="cls-10" transform="translate(464.91 608.99)">A37</text>
                                            <text class="cls-10" transform="translate(482.73 608.68)">A36</text>
                                            <text class="cls-10" transform="translate(500.22 609.09)">A35</text>
                                            <text class="cls-10" transform="translate(393.53 644.37)">A42</text>
                                            <text class="cls-10" transform="translate(522.58 646.63)">A49</text>
                                            <text class="cls-10" transform="translate(539.88 646.11)">A50</text>
                                            <text class="cls-10" transform="translate(557.69 645.91)">A51</text>
                                            <text class="cls-10" transform="translate(576.12 646.11)">A52</text>
                                            <text class="cls-10" transform="translate(593.41 646.01)">A53</text>
                                            <text class="cls-10" transform="translate(611.23 645.7)">A54</text>
                                            <text class="cls-10" transform="translate(628.72 646.11)">A55</text>
                                            <text class="cls-10" transform="translate(645.82 645.68)">A56</text>
                                            <text class="cls-10" transform="translate(411.69 643.81)">A43</text>
                                            <text class="cls-10" transform="translate(429.5 643.61)">A44</text>
                                            <text class="cls-10" transform="translate(447.92 643.81)">A45</text>
                                            <text class="cls-10" transform="translate(465.22 643.71)">A46</text>
                                            <text class="cls-10" transform="translate(483.04 643.4)">A47</text>
                                            <text class="cls-10" transform="translate(500.53 643.81)">A48</text>
                                            <polygon class="cls-1"
                                                points="301.2 595.83 300.61 643.3 283.18 643 283.84 595.28 301.2 595.83"
                                                id="ASTER5" />
                                            <polygon class="cls-1"
                                                points="318.38 643.7 300.96 643.26 301.51 595.77 318.93 596.21 318.38 643.7"
                                                id="ASTER4" />
                                            <polygon class="cls-1"
                                                points="336.15 644.17 318.73 643.73 319.28 596.24 336.7 596.68 336.15 644.17"
                                                id="ASTER3" />
                                            <polygon class="cls-1"
                                                points="354.12 644.63 336.7 644.19 337.25 596.7 354.67 597.14 354.12 644.63"
                                                id="ASTER2" />
                                            <polygon class="cls-1"
                                                points="371.95 645.09 354.53 644.65 355.08 597.16 372.5 597.6 371.95 645.09"
                                                id="ASTER1" />
                                            <polygon class="cls-1"
                                                points="300.58 643.87 299.99 690.67 282.56 690.37 283.22 643.51 300.58 643.87"
                                                id="ASTER6" />
                                            <polygon class="cls-1"
                                                points="317.77 691.03 300.35 690.6 300.9 643.82 318.32 644.25 317.77 691.03"
                                                id="ASTER7" />
                                            <polygon class="cls-1"
                                                points="335.59 691.33 318.17 690.89 318.71 644.21 336.13 644.64 335.59 691.33"
                                                id="ASTER8" />
                                            <polygon class="cls-1"
                                                points="353.55 691.62 336.13 691.18 336.68 644.52 354.1 644.95 353.55 691.62"
                                                id="ASTER9" />
                                            <polygon class="cls-1"
                                                points="371.36 692.02 353.94 691.59 354.49 644.92 371.91 645.36 371.36 692.02"
                                                id="ASTER10" />
                                            <path
                                                d="M288.24,624.62h-.31a.35.35,0,0,1-.14,0l-.41-.2a.34.34,0,0,1-.15-.18l-.1-.31a.3.3,0,0,1,.19-.39.31.31,0,0,1,.39.2l.06.18.23.12h.17l.28-.14.21-.29,0-.29-.56.1-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31-.06-.08-.2-.4a.35.35,0,0,1,0-.14v-.1a.32.32,0,0,1,0-.14l.2-.41.06-.08.31-.31.08-.06.41-.2a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.4.2.08.06.31.31a.42.42,0,0,1,.09.16l.1.5a.24.24,0,0,1,0,.12V623l-.1.76a.39.39,0,0,1-.06.15l-.31.4a.36.36,0,0,1-.11.1l-.4.2A.35.35,0,0,1,288.24,624.62Zm-.36-1.91.33.08.28-.08.19-.19.07-.27-.08-.34-.2-.21-.28-.14-.28.14-.24.24-.14.28.14.28Z" />
                                            <path
                                                d="M291.1,624.52l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.1-.76a.39.39,0,0,1,.06-.15l.31-.4a.36.36,0,0,1,.11-.1l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.11a.22.22,0,0,1,.13,0l.41.2a.24.24,0,0,1,.08.06l.31.31.06.08.2.4a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.2.41-.06.08-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.28-.08.21-.22.14-.28-.14-.28-.24-.23-.27-.14-.28.14-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M293.05,624.52a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,293.05,624.52Z" />
                                            <path
                                                d="M294.58,624.52a.3.3,0,0,1-.3-.31v-1.33l-.06-.27-.1,0h-.3l-.18,0-.35.44a.31.31,0,0,1-.48-.38l.41-.51a.28.28,0,0,1,.14-.1l.31-.1.1,0h.4l.1,0,.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,294.58,624.52Z" />
                                            <path
                                                d="M296.22,624.52a.31.31,0,0,1-.31-.31v-1.27l-.13-.32-.12,0h-.29l-.09,0-.48.48a.3.3,0,0,1-.43-.43l.51-.52.08,0,.2-.11a.35.35,0,0,1,.14,0h.41l.1,0,.3.1a.29.29,0,0,1,.19.18l.21.51a.36.36,0,0,1,0,.11v1.33A.31.31,0,0,1,296.22,624.52Z" />
                                            <path
                                                d="M299.19,624.52h-2.05a.31.31,0,0,1-.21-.53l1.41-1.3.34-.6v-.18l-.12-.24-.18-.12H298l-.23.16-.07.25a.3.3,0,0,1-.3.31A.31.31,0,0,1,297,622v-.1a.36.36,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.11-.1.35-.24a.34.34,0,0,1,.17,0h.61a.34.34,0,0,1,.17,0l.46.34a.37.37,0,0,1,.07.12l.11.31a.34.34,0,0,1,0,.1v.31a.31.31,0,0,1,0,.13l-.1.21-.32.53a.2.2,0,0,1-.06.07l-.86.8h1.27a.3.3,0,0,1,.31.3A.31.31,0,0,1,299.19,624.52Z" />
                                            <path
                                                d="M306.05,624.93h-.21l-.11,0-.51-.21a.32.32,0,0,1-.16-.14l-.11-.21a.31.31,0,0,1,.14-.41.29.29,0,0,1,.41.14l.05.1.44.14.35-.14.15-.31.07-.25-.4.16a.2.2,0,0,1-.11,0H306a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.26.26,0,0,1-.13-.19l-.11-.68.11-.48a.25.25,0,0,1,.08-.14l.31-.31a.29.29,0,0,1,.14-.08l.59-.11.57.11a.26.26,0,0,1,.19.13l.21.3.23.57h0a0,0,0,0,1,0,0h0s0,0,0,.08v.71a.29.29,0,0,1,0,.09l-.2.71-.23.47a.32.32,0,0,1-.16.14l-.51.21Zm-.55-2,.21.14.29.14.36-.14.27-.48-.15-.38-.1-.15L306,622l-.29.07-.19.19-.09.33Z" />
                                            <path
                                                d="M309,624.93h-.11a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.6v-.78l.1-.76A.35.35,0,0,1,308,622l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.28.28,0,0,1,.22.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.24l-.22.06-.2.27,0,.29.57-.11.57.11a.29.29,0,0,1,.19.13l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.25.25,0,0,1,0,.12l-.2.51a.36.36,0,0,1-.07.1l-.21.2a.23.23,0,0,1-.1.07l-.51.21Zm-.54-.9.19.13.3.15.39-.15.11-.12.15-.38-.28-.5-.38-.08-.3.08-.19.19-.06.27Z" />
                                            <path
                                                d="M310.86,624.93a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,310.86,624.93Z" />
                                            <path
                                                d="M312.5,624.93a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.11.12-.54.43a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.69-.59a.27.27,0,0,1,.21-.09h.52a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,312.5,624.93Z" />
                                            <path
                                                d="M314,624.93a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.18l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17-.05h.41a.31.31,0,0,1,.22.09l.2.2a.21.21,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,314,624.93Z" />
                                            <path
                                                d="M317,624.93h-1.95a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.33-1.43.43-.6v-.12l-.15-.23-.21-.07h-.49l-.23.12-.05.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.3.3,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.15-.18l.41-.2a.32.32,0,0,1,.14,0h.71l.31.11a.37.37,0,0,1,.12.07l.1.1.24.36a.26.26,0,0,1,.05.17v.3a.26.26,0,0,1-.05.17l-.52.73-.87,1H317a.3.3,0,0,1,.31.3A.31.31,0,0,1,317,624.93Z" />
                                            <path
                                                d="M323.65,625.24l-.48-.12A.26.26,0,0,1,323,625l-.21-.31a.32.32,0,0,1,.09-.43.31.31,0,0,1,.42.09l.14.21.3.07H324l.21-.06.21-.35,0-.3-.32.17a.35.35,0,0,1-.14,0h-.21a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.29.29,0,0,1-.13-.18l-.1-.41v-.28l.11-.48a.28.28,0,0,1,.08-.15l.31-.3a.29.29,0,0,1,.14-.08l.41-.11H324l.48.12a.28.28,0,0,1,.15.08l.3.3a.32.32,0,0,1,.09.17l.1.61a.17.17,0,0,1,0,.1v.57l-.1.76a.36.36,0,0,1,0,.11l-.31.52a.29.29,0,0,1-.19.13l-.41.11Zm.18-1.74h.06l.52-.29.06-.25-.08-.44-.18-.18-.33-.08h-.13l-.24.07-.19.19-.09.32V623l.06.22.22.14Z" />
                                            <path
                                                d="M326.93,625.24h-.21a.22.22,0,0,1-.13,0l-.41-.2-.34-.22a.38.38,0,0,1-.14-.21l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11H327l.48.12a.26.26,0,0,1,.18.12l.21.31a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.29-.07h-.24l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.25.25,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.31.31,0,0,1-.13.19l-.3.2-.45.22A.22.22,0,0,1,326.93,625.24Zm-.14-.62h.06l.52-.29.08-.29v-.13l-.07-.25-.19-.19-.33-.09h-.13l-.25.07-.19.19-.06.28.07.41.19.13Z" />
                                            <path
                                                d="M328.77,625.24a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,328.77,625.24Z" />
                                            <path
                                                d="M330.31,625.24a.31.31,0,0,1-.31-.31V623.5l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,330.31,625.24Z" />
                                            <path
                                                d="M331.84,625.24a.31.31,0,0,1-.31-.31V623.5l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,331.84,625.24Z" />
                                            <path
                                                d="M334.81,625.24h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.4.36-.62v-.12l-.15-.23-.21-.07h-.41l-.24.11-.12.18v.12a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.34.34,0,0,1,0-.17l.35-.45a.25.25,0,0,1,.12-.08l.3-.1.1,0h.51l.1,0,.31.1a.42.42,0,0,1,.12.08l.1.1.24.35a.26.26,0,0,1,.05.17v.31a.26.26,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M341.56,625.54l-.57-.1a.32.32,0,0,1-.23-.21l-.1-.31a.29.29,0,0,1,.19-.38.3.3,0,0,1,.39.19l.05.14.33.07h.15l.3-.07.14-.27.07-.27-.61.1-.49-.11-.14-.08-.31-.31a.39.39,0,0,1-.08-.14l-.1-.41v-.28l.11-.49a.39.39,0,0,1,.08-.14l.31-.31a.39.39,0,0,1,.14-.08l.59-.11.57.11a.34.34,0,0,1,.2.13l.2.31a.16.16,0,0,1,0,.07l.2.61v0h0s0,.06,0,.09V624a.24.24,0,0,1,0,.08l-.2.72-.23.46a.3.3,0,0,1-.21.17l-.51.1Zm-.15-1.81.33.08.35-.08.27-.46-.15-.46-.11-.16-.39-.08-.29.07-.19.19-.08.33v.13l.07.25Z" />
                                            <path
                                                d="M344.63,625.54l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.61v-.77l.11-.67a.25.25,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.1.31a.3.3,0,0,1-.19.39.32.32,0,0,1-.39-.2l-.05-.14-.24-.06h-.24l-.2,0-.22.36,0,.2.56-.1.57.11a.26.26,0,0,1,.19.13l.21.3.22.45a.33.33,0,0,1,0,.13v.21a.37.37,0,0,1,0,.14l-.2.4-.23.34a.3.3,0,0,1-.19.14Zm-.25-.68.33.08.35-.08.14-.2.15-.37-.29-.52-.38-.07-.29.07-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M346.58,625.54a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.3.3,0,0,1,346.58,625.54Z" />
                                            <path
                                                d="M348.22,625.54a.3.3,0,0,1-.31-.3v-1.36l-.12-.23-.13,0h-.29l-.14.07-.46.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,.05-.44l.51-.41.26-.13a.33.33,0,0,1,.14,0h.41l.09,0,.31.1a.31.31,0,0,1,.18.16l.2.41a.31.31,0,0,1,0,.13v1.44A.29.29,0,0,1,348.22,625.54Z" />
                                            <path
                                                d="M349.75,625.54a.29.29,0,0,1-.3-.3v-1.36l-.18-.28H349l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41a.33.33,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,349.75,625.54Z" />
                                            <path
                                                d="M352.72,625.54h-1.94a.31.31,0,0,1-.29-.18.33.33,0,0,1,.06-.33l1.33-1.44.43-.6v-.08l-.11-.12a.16.16,0,0,1-.06-.08l-.05-.09-.14,0h-.49l-.09,0-.19.23V623a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.35.35,0,0,1,0-.14l.11-.2a.22.22,0,0,1,.05-.08l.21-.21.08,0,.2-.11a.35.35,0,0,1,.14,0H352l.1,0,.31.1a.34.34,0,0,1,.18.15l.08.16.17.17a.35.35,0,0,1,.08.22v.31a.26.26,0,0,1-.05.17l-.52.73-.87.94h1.24a.31.31,0,0,1,.31.31A.3.3,0,0,1,352.72,625.54Z" />
                                            <path
                                                d="M359.37,625.85l-.48-.11a.34.34,0,0,1-.18-.13l-.21-.31A.31.31,0,0,1,359,625l.13.21.3.08h.23l.23-.07.19-.26,0-.29-.4.1h-.27l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.28.28,0,0,1-.08-.15l-.11-.58.11-.58a.26.26,0,0,1,.13-.19l.31-.21.44-.22a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.3.3,0,0,1,.13.2l.1.61a.21.21,0,0,1,0,.11v.67l-.11.76a.42.42,0,0,1-.06.14l-.3.41a.42.42,0,0,1-.18.11l-.4.1Zm-.15-1.81.33.08h.13l.25-.07.19-.19.07-.27-.07-.41-.2-.13-.37-.16-.51.29-.08.39.07.29Z" />
                                            <path
                                                d="M362.44,625.85l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.1-.76a.3.3,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.21.08,0,.2.21a.3.3,0,1,1-.43.43L363,623l-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.16a.33.33,0,0,1,.13,0h.21a.37.37,0,0,1,.14,0l.41.2.34.22a.39.39,0,0,1,.13.2l.1.67-.11.49a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.25-.69.33.09h.13l.25-.07.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.52.28-.06.35.07.34Z" />
                                            <path
                                                d="M364.49,625.85a.31.31,0,0,1-.31-.31V623.6a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,364.49,625.85Z" />
                                            <path
                                                d="M366,625.85a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,366,625.85Z" />
                                            <path
                                                d="M367.56,625.85a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,367.56,625.85Z" />
                                            <path
                                                d="M370.53,625.85h-1.94a.3.3,0,0,1-.29-.19.29.29,0,0,1,.07-.33l1.4-1.4.35-.65-.22-.35-.14,0h-.37l-.28.22-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.34.34,0,0,1,.17-.05h.61l.31.11a.28.28,0,0,1,.17.15l.11.21.18.27a.26.26,0,0,1,.05.17v.2a.26.26,0,0,1-.05.17l-.2.31-.19.38a.21.21,0,0,1-.06.08l-.9.91h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,370.53,625.85Z" />
                                            <path
                                                d="M287.42,672h-.31a.28.28,0,0,1-.13,0l-.41-.21-.08,0-.21-.21a.3.3,0,0,1,0-.43.31.31,0,0,1,.44,0l.17.17.29.15h.17l.28-.14.21-.29,0-.28-.32.16a.37.37,0,0,1-.14,0h-.21a.33.33,0,0,1-.13,0l-.41-.2-.34-.23a.26.26,0,0,1-.13-.19l-.11-.67.11-.49a.29.29,0,0,1,.08-.14l.31-.31a.29.29,0,0,1,.14-.08l.41-.1h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.32.32,0,0,1,.09.16l.1.5a.24.24,0,0,1,0,.12v.66l-.11.76a.3.3,0,0,1-.06.14l-.31.41a.22.22,0,0,1-.1.09l-.41.21A.35.35,0,0,1,287.42,672Zm-.13-1.74h.06l.3-.15.21-.21.07-.27-.08-.34-.18-.18-.33-.09h-.13l-.24.07-.19.19-.09.33.08.35.21.14Z" />
                                            <path
                                                d="M290.39,672h-.21a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.35.35,0,0,1-.14-.2l-.1-.61V670l.1-.76a.42.42,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.36.36,0,0,1,.19.13l.2.31a.3.3,0,0,1-.09.42.3.3,0,0,1-.42-.08l-.14-.21-.29-.08h-.24l-.22.07-.2.26,0,.29.39-.1h.28l.48.11a.25.25,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.1.58a.3.3,0,0,1-.14.19l-.3.21-.45.22A.28.28,0,0,1,290.39,672Zm-.14-.61h.07l.51-.29.08-.39-.08-.29-.19-.19-.33-.08h-.13l-.25.07-.19.19-.06.27.07.41.19.13Z" />
                                            <path
                                                d="M292.23,672a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,292.23,672Z" />
                                            <path
                                                d="M293.77,672a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H293l-.23.16-.36.37a.31.31,0,0,1-.44-.44l.41-.4.36-.25a.34.34,0,0,1,.17,0h.41a.27.27,0,0,1,.21.09l.21.21.06.08.2.4a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,293.77,672Z" />
                                            <path
                                                d="M295.3,672a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,295.3,672Z" />
                                            <path
                                                d="M298.27,672h-1.95a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.39-1.4.36-.63v-.12l-.15-.23-.21-.07h-.41l-.24.12-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.46a.24.24,0,0,1,.12-.07l.3-.1a.18.18,0,0,1,.1,0h.51a.16.16,0,0,1,.1,0l.31.1a.37.37,0,0,1,.12.07l.1.1.24.36a.26.26,0,0,1,.05.17v.31a.26.26,0,0,1-.05.17l-.2.3-.19.38a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M304.92,672.32l-.48-.11a.32.32,0,0,1-.22-.2l-.1-.31a.31.31,0,0,1,.19-.39.31.31,0,0,1,.39.2l.05.14.25.06h.23l.21-.05.21-.36,0-.29-.32.16a.35.35,0,0,1-.14,0H305a.31.31,0,0,1-.13,0l-.41-.2-.08-.06-.21-.21-.06-.08-.2-.41a.31.31,0,0,1,0-.13v-.21a.28.28,0,0,1,0-.13l.2-.41.23-.34a.29.29,0,0,1,.18-.13l.41-.1h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.26.26,0,0,1,.09.16l.1.61a.17.17,0,0,1,0,.1v.57l-.1.76a.56.56,0,0,1,0,.12l-.31.51a.3.3,0,0,1-.19.14l-.41.1Zm.18-1.74h.06l.52-.29.06-.25-.08-.44-.18-.18-.33-.08H305l-.21.06-.14.21-.16.37.15.3.14.14Z" />
                                            <path
                                                d="M308.2,672.32h-.11l-.57-.11a.29.29,0,0,1-.19-.13l-.21-.31,0-.07-.21-.61v0h0a.28.28,0,0,1,0-.09v-.71a.22.22,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.2-.16l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.3a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.29-.07H308l-.19.06-.15.28-.07.27.62-.1.48.11.14.08.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.13.18l-.3.2-.45.23A.31.31,0,0,1,308.2,672.32Zm-.43-.69.35.07.52-.29.08-.29V671l-.07-.25-.19-.19-.33-.08-.35.08-.27.46.16.46Z" />
                                            <path
                                                d="M310,672.32a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,310,672.32Z" />
                                            <path
                                                d="M311.57,672.32a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.38a.31.31,0,0,1-.44-.44l.41-.41.36-.24a.31.31,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.2a.31.31,0,0,1,.13.19l.1.4V672A.31.31,0,0,1,311.57,672.32Z" />
                                            <path
                                                d="M313.11,672.32a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.15-.36.38a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.2a.38.38,0,0,1,.13.18l.1.41V672A.31.31,0,0,1,313.11,672.32Z" />
                                            <path
                                                d="M316.08,672.32h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.2l-.05-.14-.31-.12h-.41l-.14,0,0,.09-.06.08-.12.11v.08a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.29.29,0,0,1,.09-.22l.17-.17.08-.16a.32.32,0,0,1,.18-.16l.3-.1h.71l.55.22a.3.3,0,0,1,.15.18l.11.31a.31.31,0,0,1,0,.1v.3a.31.31,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M322.73,672.63l-.48-.12a.3.3,0,0,1-.22-.2l-.1-.3a.31.31,0,1,1,.58-.2l.05.15.25.06H323l.22-.06.2-.26,0-.3-.56.11-.49-.11a.29.29,0,0,1-.14-.08L322,671l-.06-.08-.2-.41a.32.32,0,0,1,0-.14v-.2a.32.32,0,0,1,0-.14l.2-.41.06-.08.31-.3a.29.29,0,0,1,.14-.08L323,669l.48.12a.22.22,0,0,1,.14.08l.31.3a.32.32,0,0,1,.09.17l.1.61a.17.17,0,0,1,0,.1v.67l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.25.25,0,0,1-.17.11l-.41.11Zm-.05-1.82.33.09.28-.08.19-.19.07-.28-.08-.44-.18-.18-.33-.08-.27.08-.22.21-.15.36.15.3Z" />
                                            <path
                                                d="M325.9,672.63l-.48-.12a.29.29,0,0,1-.14-.08l-.31-.3a.37.37,0,0,1-.07-.12l-.21-.62h0a.34.34,0,0,1,0-.1v-.71a.34.34,0,0,1,0-.1l.21-.61.33-.57a.27.27,0,0,1,.19-.14l.41-.11h.38l.48.12a.28.28,0,0,1,.22.2l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.24l-.2.06-.25.4-.05.17h0l.59-.11.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28L327,672a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.69.33.08.28-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.33-.09-.27.08-.22.22-.13.25.15.42Z" />
                                            <path
                                                d="M327.85,672.63a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,327.85,672.63Z" />
                                            <path
                                                d="M329.38,672.63a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.1,0h-.32l-.19.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.12-.08.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,329.38,672.63Z" />
                                            <path
                                                d="M331,672.63a.31.31,0,0,1-.31-.31V671l-.11-.23-.14-.05h-.29l-.14.07-.45.38a.33.33,0,0,1-.44,0,.31.31,0,0,1,.05-.43l.51-.41.26-.14a.35.35,0,0,1,.14,0h.51l.3.1a.32.32,0,0,1,.18.16l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,331,672.63Z" />
                                            <path
                                                d="M334,672.63h-2.05a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.19l-.05-.09-.23-.18h-.49l-.14,0-.12.23v.14a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.28.28,0,0,1,0-.13l.21-.41a.29.29,0,0,1,.18-.16l.3-.1.1,0h.61a.23.23,0,0,1,.14,0l.21.1.08.06.2.2.06.08.1.21a.28.28,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.94.94H334a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M340.64,672.93l-.48-.11a.31.31,0,0,1-.22-.2l-.1-.31a.31.31,0,0,1,.58-.19l.05.15.25.06H341l.23-.06.19-.27.05-.29-.4.1h-.27l-.49-.11a.34.34,0,0,1-.18-.13l-.2-.31-.23-.44a.32.32,0,0,1,0-.14v-.1a.5.5,0,0,1,0-.12l.21-.51a.21.21,0,0,1,.06-.1l.21-.2a.16.16,0,0,1,.08-.06l.41-.21a.32.32,0,0,1,.14,0h.2a.35.35,0,0,1,.14,0l.41.21.34.22a.3.3,0,0,1,.13.21l.1.6a.21.21,0,0,1,0,.11v.67l-.11.76a.35.35,0,0,1-.06.14l-.3.41a.42.42,0,0,1-.18.11l-.41.1Zm-.12-1.8.3.07H341l.25-.07.19-.19.07-.27-.07-.41-.2-.13-.37-.16-.3.15-.13.13-.15.38Z" />
                                            <path
                                                d="M343.82,672.93l-.58-.11a.26.26,0,0,1-.19-.13l-.21-.3-.23-.57a.5.5,0,0,1,0-.12V671a.28.28,0,0,1,0-.09l.2-.71.23-.46a.32.32,0,0,1,.14-.14l.41-.21a.31.31,0,0,1,.13,0H344a.32.32,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.2.2a.3.3,0,1,1-.43.43l-.17-.17L344,670h-.16l-.26.13-.16.32-.06.23.27-.13a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.4.2.34.23a.3.3,0,0,1,.14.19l.1.68-.11.48a.25.25,0,0,1-.08.14l-.31.31a.22.22,0,0,1-.14.08Zm-.33-.68.39.07.29-.07.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.3.15-.13.13-.13.33.15.4Z" />
                                            <path
                                                d="M345.76,672.93a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.3.3,0,0,1,345.76,672.93Z" />
                                            <path
                                                d="M347.3,672.93a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.2.22l.1.41v1.51A.29.29,0,0,1,347.3,672.93Z" />
                                            <path
                                                d="M348.83,672.93a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,348.83,672.93Z" />
                                            <path
                                                d="M351.8,672.93h-1.95a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.32-.05-.14-.09,0L351,670h-.33l-.28.22-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.45.35-.25a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.48.29a.35.35,0,0,1,.16.18l.1.31a.28.28,0,0,1,0,.09v.21a.28.28,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.31.41-.94.94h1.21a.31.31,0,0,1,.31.31A.3.3,0,0,1,351.8,672.93Z" />
                                            <path
                                                d="M358.76,673.34h-.31a.28.28,0,0,1-.13,0l-.41-.2a.35.35,0,0,1-.16-.18l-.1-.31a.31.31,0,1,1,.58-.19l.06.18.23.12h.17l.28-.14.21-.29,0-.29-.56.1-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31-.05-.07-.21-.41a.35.35,0,0,1,0-.14v-.1a.32.32,0,0,1,0-.14l.21-.41a.22.22,0,0,1,.05-.08L358,670l.08-.06.41-.2a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.2.08.06.3.31a.32.32,0,0,1,.09.16l.1.5a.24.24,0,0,1,0,.12v.66l-.11.76a.39.39,0,0,1-.06.15l-.31.4a.32.32,0,0,1-.1.1l-.41.2A.35.35,0,0,1,358.76,673.34Zm-.36-1.91.33.08.28-.08.19-.19.07-.27-.08-.34-.2-.21-.28-.14-.28.14-.24.24-.14.28.14.28Z" />
                                            <path
                                                d="M361.63,673.24l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51a.25.25,0,0,1,0-.12v-.71a.28.28,0,0,1,0-.09l.2-.72a.47.47,0,0,1,.05-.1l.31-.4a.52.52,0,0,1,.11-.1l.41-.2a.32.32,0,0,1,.14,0h.2l.11,0,.52.2a.35.35,0,0,1,.17.19l.11.31a.31.31,0,0,1-.59.19l0-.17-.4-.13-.28.14-.23.31-.08.29.38-.19a.23.23,0,0,1,.14,0h.1a.2.2,0,0,1,.13,0l.41.2a.24.24,0,0,1,.08.06l.31.31a.22.22,0,0,1,.08.14l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08Zm-.26-.69.33.09.28-.08.19-.19.08-.33-.08-.28-.22-.21-.27-.14-.28.14-.24.23L361,672l.13.32Z" />
                                            <path
                                                d="M363.57,673.24a.31.31,0,0,1-.31-.31V671a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,363.57,673.24Z" />
                                            <path
                                                d="M365.11,673.24a.31.31,0,0,1-.31-.31V671.6l-.06-.27-.09,0h-.31l-.18.05-.35.44a.3.3,0,0,1-.43.05.3.3,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,365.11,673.24Z" />
                                            <path
                                                d="M366.74,673.24a.3.3,0,0,1-.3-.31v-1.27l-.13-.32-.13,0h-.31l-.17.05-.35.44a.31.31,0,0,1-.44.05.3.3,0,0,1,0-.43l.4-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.29.29,0,0,1,.19.18l.21.51a.36.36,0,0,1,0,.11v1.33A.31.31,0,0,1,366.74,673.24Z" />
                                            <path
                                                d="M369.71,673.24h-2a.31.31,0,0,1-.21-.53l1.41-1.3.34-.6v-.18l-.05-.14-.09,0-.08-.05-.11-.12h-.4l-.23.16-.06.25a.31.31,0,1,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.11-.1.35-.24a.34.34,0,0,1,.17-.05H369a.29.29,0,0,1,.22.09l.17.17.16.08a.33.33,0,0,1,.16.17l.1.31a.34.34,0,0,1,0,.1v.31a.31.31,0,0,1,0,.13l-.1.21-.32.53-.05.07-.86.8h1.26a.3.3,0,0,1,.31.3A.31.31,0,0,1,369.71,673.24Z" />
                                            <path
                                                d="M268,732.19a.29.29,0,0,1-.3-.3v-2.17h0l-.31.11a.31.31,0,1,1-.19-.59l.22-.07.35-.44a.31.31,0,0,1,.34-.1.3.3,0,0,1,.21.29v3A.3.3,0,0,1,268,732.19Z" />
                                            <path
                                                d="M271.66,732.19h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.4-1.3.35-.59v-.19l-.05-.14-.35-.21h-.33l-.28.21-.12.2a.31.31,0,0,1-.61,0v-.11a.34.34,0,0,1,.05-.17l.34-.45.36-.25a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.48.29a.3.3,0,0,1,.15.18l.11.31a.28.28,0,0,1,0,.09v.31a.32.32,0,0,1,0,.14l-.1.2-.32.54-.06.06-.86.8h1.17a.3.3,0,0,1,.3.31A.29.29,0,0,1,271.66,732.19Z" />
                                            <path
                                                d="M273.29,732.19l-.57-.1a.24.24,0,0,1-.15-.09l-.11-.1a.24.24,0,0,1-.07-.12l-.1-.31a.29.29,0,0,1,.19-.38.3.3,0,0,1,.39.19l.07.23.41.08h.35l.25-.07.19-.19.09-.33v-.23l-.06-.19-.08-.05-.08,0-.12-.12h-.38a.32.32,0,0,1-.28-.17.33.33,0,0,1,0-.33l.51-.62h-1a.31.31,0,0,1,0-.62h1.64a.31.31,0,0,1,.24.5l-.53.65.1.07.17.17.16.08a.29.29,0,0,1,.16.2l.1.41v.38l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Z" />
                                            <path
                                                d="M275.55,732.19a.3.3,0,0,1-.31-.3v-1.95a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v1.95A.29.29,0,0,1,275.55,732.19Z" />
                                            <path
                                                d="M277.08,732.19a.3.3,0,0,1-.31-.3v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,277.08,732.19Z" />
                                            <path
                                                d="M278.62,732.19a.3.3,0,0,1-.31-.3v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.12-.08.31-.1h.6l.31.1a.31.31,0,0,1,.2.22l.1.41v1.51A.29.29,0,0,1,278.62,732.19Z" />
                                            <path
                                                d="M281.59,732.19h-1.95a.3.3,0,0,1-.28-.18.32.32,0,0,1,.06-.34l1.4-1.4.36-.64-.22-.29-.18-.11h-.33l-.28.21-.12.2a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.26.26,0,0,1,.05-.17l.34-.45.36-.25a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.34.34,0,0,1,.05.17v.21a.34.34,0,0,1-.05.17l-.21.31-.18.37-.06.08-.91.91h1.21a.31.31,0,0,1,.3.31A.3.3,0,0,1,281.59,732.19Z" />
                                            <path
                                                d="M290.49,732.4a.32.32,0,0,1-.31-.3l-.08-2.29-.19.1a.31.31,0,1,1-.27-.55l.16-.08.37-.37a.3.3,0,0,1,.52.2l.11,3a.32.32,0,0,1-.3.32Z" />
                                            <path
                                                d="M293.25,732.4H293a.32.32,0,0,1-.14,0l-.41-.21a.31.31,0,0,1-.11-.09l-.31-.41a.24.24,0,0,1-.05-.14l-.11-.71v-.46l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.34.34,0,0,1,.17.11l.31.41a.24.24,0,0,1,0,.14l.11.72v.45l-.11.76a.24.24,0,0,1,0,.14l-.31.41a.31.31,0,0,1-.11.09l-.41.21A.32.32,0,0,1,293.25,732.4Zm-.23-.61h.16l.28-.14.22-.29.09-.64v-.37l-.09-.59-.2-.26-.3-.08H293l-.27.07-.2.26-.09.64v.36l.09.6.22.29Z" />
                                            <path
                                                d="M296.43,732.4a.31.31,0,0,1-.31-.31v-.71H295a.31.31,0,0,1-.27-.17.31.31,0,0,1,0-.32l1.43-1.95a.32.32,0,0,1,.34-.11.3.3,0,0,1,.21.29v1.64h.41a.31.31,0,1,1,0,.62h-.41v.71A.3.3,0,0,1,296.43,732.4Zm-.83-1.64h.52v-.7Z" />
                                            <path
                                                d="M298,732.4a.31.31,0,0,1-.31-.31v-2a.31.31,0,1,1,.62,0v2A.31.31,0,0,1,298,732.4Z" />
                                            <path
                                                d="M299.5,732.4a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.36.37a.31.31,0,1,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.35.35,0,0,1,.12.19l.1.41v1.5A.3.3,0,0,1,299.5,732.4Z" />
                                            <path
                                                d="M301,732.4a.3.3,0,0,1-.3-.31v-1.43l-.07-.22-.13-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.36.36,0,0,1,.13.19l.1.41v1.5A.31.31,0,0,1,301,732.4Z" />
                                            <path
                                                d="M304,732.4h-1.94a.3.3,0,0,1-.29-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l0-.14-.3-.12h-.42l-.24.12-.11.18v.11a.31.31,0,0,1-.62,0v-.2a.34.34,0,0,1,0-.17l.35-.46a.24.24,0,0,1,.12-.07l.31-.11h.7l.55.22a.31.31,0,0,1,.16.18l.1.31a.31.31,0,0,1,0,.1v.3a.31.31,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.31.41-.93.95H304a.3.3,0,0,1,.31.3A.31.31,0,0,1,304,732.4Z" />
                                            <path
                                                d="M310.65,732.5a.3.3,0,0,1-.3-.3V730h0l-.31.1a.29.29,0,0,1-.38-.19.3.3,0,0,1,.19-.39l.22-.07.35-.44a.3.3,0,0,1,.35-.1.3.3,0,0,1,.2.29v3A.31.31,0,0,1,310.65,732.5Z" />
                                            <path
                                                d="M313.21,732.5l-.48-.11a.34.34,0,0,1-.17-.11l-.31-.41a.35.35,0,0,1-.06-.14l-.1-.72v-.45l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.28.28,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.22.22,0,0,1,.1.09l.31.41a.35.35,0,0,1,.06.14l.1.71V731l-.11.76a.35.35,0,0,1-.06.14l-.31.41a.34.34,0,0,1-.17.11l-.41.1Zm-.23-.68.31.08h.23l.23-.06.19-.27.09-.64v-.36l-.09-.6-.21-.29-.28-.14h-.17l-.28.14-.21.29-.09.64V731l.09.59Z" />
                                            <path
                                                d="M316.08,732.5l-.49-.11a.45.45,0,0,1-.17-.11l-.3-.41a.24.24,0,0,1-.05-.1l-.21-.72a.22.22,0,0,1,0-.08v-.41a.28.28,0,0,1,0-.09l.21-.71.22-.47a.31.31,0,0,1,.16-.14l.51-.21.12,0h.2l.12,0,.51.21a.28.28,0,0,1,.16.14l.2.41.23.77a.28.28,0,0,1,0,.09V731a.22.22,0,0,1,0,.08l-.21.72-.22.46a.29.29,0,0,1-.22.16l-.51.11Zm-.23-.68.3.08h.13l.31-.07.14-.27.17-.62v-.33l-.2-.67-.13-.26-.43-.14-.35.14-.15.31-.18.62v.32l.18.62Z" />
                                            <path
                                                d="M318.13,732.5a.31.31,0,0,1-.31-.3v-2a.31.31,0,1,1,.61,0v2A.31.31,0,0,1,318.13,732.5Z" />
                                            <path
                                                d="M319.76,732.5a.3.3,0,0,1-.3-.3v-1.37l-.12-.23-.14,0h-.29l-.09.05-.48.47a.3.3,0,0,1-.43-.43l.51-.51a.16.16,0,0,1,.08-.06l.2-.1a.25.25,0,0,1,.14,0h.41l.1,0,.31.1a.3.3,0,0,1,.17.16l.21.41a.28.28,0,0,1,0,.13v1.44A.31.31,0,0,1,319.76,732.5Z" />
                                            <path
                                                d="M321.3,732.5a.31.31,0,0,1-.31-.3v-1.37l-.17-.27h-.29l-.19.06L320,731a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41a.25.25,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.4a.37.37,0,0,1,0,.14v1.44A.31.31,0,0,1,321.3,732.5Z" />
                                            <path
                                                d="M324.27,732.5h-1.95a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.43-.53v-.09l-.22-.28-.18-.12h-.4l-.11.12-.08.06-.09,0,0,.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.38.38,0,0,1,0-.1l.11-.3a.3.3,0,0,1,.15-.18l.16-.08.17-.17a.29.29,0,0,1,.22-.09h.61a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.2.21-.28.38-.87.94h1.24a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M334.71,733.12l-.58-.11a.32.32,0,0,1-.23-.21l-.1-.3a.31.31,0,0,1,.2-.39.3.3,0,0,1,.38.19l.05.14.34.07h.14l.23-.06.21-.28.08-.29h0l-.59.11-.49-.11a.29.29,0,0,1-.14-.08l-.3-.31a.42.42,0,0,1-.09-.14l-.1-.41v-.28l.11-.48a.38.38,0,0,1,.09-.15l.3-.3a.29.29,0,0,1,.14-.08l.59-.12.49.12a.29.29,0,0,1,.14.08l.3.3a.42.42,0,0,1,.08.12l.2.62h0a.28.28,0,0,1,0,.09v.71a.28.28,0,0,1,0,.09l-.21.71a.19.19,0,0,1-.05.1l-.3.41a.3.3,0,0,1-.17.11l-.41.11Zm-.15-1.82.32.09.28-.08.22-.22.12-.25-.14-.42-.2-.2-.32-.08-.28.08-.19.19-.08.32v.13l.07.25Z" />
                                            <path
                                                d="M337.78,733.12l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.34.34,0,0,1,0-.1v-.67l.11-.67a.21.21,0,0,1,0-.1l.3-.51a.33.33,0,0,1,.19-.14l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.59.2l0-.15-.25-.06h-.23l-.21.06-.22.35,0,.2.56-.1.57.11a.3.3,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.2.13Zm-.26-.69.33.08.35-.08.14-.2.15-.37-.28-.51-.39-.08-.29.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M339.72,733.12a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.62,0v1.95A.31.31,0,0,1,339.72,733.12Z" />
                                            <path
                                                d="M341.36,733.12a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14-.05h-.29l-.14.07-.46.38a.31.31,0,0,1-.38-.48l.51-.41.26-.14a.32.32,0,0,1,.14,0h.5l.31.11a.3.3,0,0,1,.18.15l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,341.36,733.12Z" />
                                            <path
                                                d="M342.89,733.12a.31.31,0,0,1-.3-.31v-1.36l-.18-.28h-.28l-.2.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.51a.31.31,0,0,1,.13,0l.21.1a.29.29,0,0,1,.13.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,342.89,733.12Z" />
                                            <path
                                                d="M345.86,733.12h-1.94a.32.32,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.33-1.43.26-.35.07-.21v-.18l-.11-.24-.14,0h-.5l-.09.05-.18.23v.13a.31.31,0,0,1-.62,0v-.21a.22.22,0,0,1,0-.13l.1-.21a.16.16,0,0,1,.06-.08l.2-.2a.16.16,0,0,1,.08-.06l.2-.1a.25.25,0,0,1,.14,0h.62l.09,0,.31.1a.31.31,0,0,1,.18.16l.2.41a.33.33,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.3a.26.26,0,0,1-.05.09l-.31.41-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M355.69,733.32l-.49-.11a.3.3,0,0,1-.21-.2l-.1-.31a.3.3,0,0,1,.19-.39.32.32,0,0,1,.39.2l0,.14.24.07H356l.22-.07.21-.28.09-.29h0l-.59.11-.48-.11a.29.29,0,0,1-.14-.08l-.31-.3a.28.28,0,0,1-.08-.15l-.11-.58.11-.49a.29.29,0,0,1,.08-.14l.31-.31.08,0,.41-.21a.31.31,0,0,1,.13,0H356a.31.31,0,0,1,.13,0l.41.21.34.22a.28.28,0,0,1,.12.16l.21.61v0h0a.28.28,0,0,1,0,.09v.71a.25.25,0,0,1,0,.08l-.2.72-.05.1-.31.41a.34.34,0,0,1-.17.11l-.41.1Zm-.05-1.81.33.08.28-.08.21-.21.13-.25-.14-.4-.22-.14-.28-.15-.28.14-.22.21-.08.33.08.28Z" />
                                            <path
                                                d="M358.55,733.32l-.48-.11a.29.29,0,0,1-.14-.08l-.1-.1-.25-.36a.31.31,0,0,1,.09-.42.29.29,0,0,1,.42.08l.2.3.34.09H359l.25-.07.22-.22.15-.3V732l-.22-.37-.18-.11h-.32a.31.31,0,0,1-.27-.17.33.33,0,0,1,0-.32l.47-.64h-.93a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1.53a.28.28,0,0,1,.27.17.29.29,0,0,1,0,.32l-.5.68h0l.46.34.06.08.2.41a.32.32,0,0,1,0,.14v.31a.31.31,0,0,1,0,.13l-.2.41-.06.08-.31.31a.29.29,0,0,1-.14.08l-.41.1Z" />
                                            <path
                                                d="M360.81,733.32a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31V733A.3.3,0,0,1,360.81,733.32Z" />
                                            <path
                                                d="M362.44,733.32a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.31l-.17,0-.35.45a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43L361,731a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.31.31,0,0,1,.17.15l.21.41a.35.35,0,0,1,0,.14V733A.31.31,0,0,1,362.44,733.32Z" />
                                            <path
                                                d="M364,733.32a.31.31,0,0,1-.31-.31v-1.36l-.17-.27h-.37l-.09,0-.38.38a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.08-.05.2-.11a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.11a.35.35,0,0,1,.14.13l.2.41a.25.25,0,0,1,0,.14V733A.31.31,0,0,1,364,733.32Z" />
                                            <path
                                                d="M367,733.32H364.9a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.32-.46v-.19l-.12-.24-.18-.12h-.4l-.11.12-.08,0-.09.05,0,.19a.31.31,0,1,1-.61,0v-.1a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.61a.34.34,0,0,1,.17,0l.46.35a.24.24,0,0,1,.07.12l.1.3a.36.36,0,0,1,0,.1V731a.31.31,0,0,1,0,.13l-.11.21-.33.46-.94.94H367a.29.29,0,0,1,.3.3A.3.3,0,0,1,367,733.32Z" />
                                            <path
                                                d="M375.14,734.55a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.56a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h2.05a.31.31,0,0,1,.26.14.35.35,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,375.14,734.55Z" />
                                            <path
                                                d="M378.82,734.55a.31.31,0,0,1-.31-.31v-.61h-1.12a.3.3,0,0,1-.27-.17.29.29,0,0,1,0-.32l1.43-2a.31.31,0,0,1,.56.17V733h.41a.31.31,0,0,1,0,.62h-.41v.61A.31.31,0,0,1,378.82,734.55ZM378,733h.53v-.76Z" />
                                            <path
                                                d="M380.36,734.55a.31.31,0,0,1-.31-.31V732.3a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,380.36,734.55Z" />
                                            <path
                                                d="M381.89,734.55a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.4v1.51A.31.31,0,0,1,381.89,734.55Z" />
                                            <path
                                                d="M383.53,734.55a.31.31,0,0,1-.31-.29l-.15-1.62-.1,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0H383l.09,0,.31.1a.28.28,0,0,1,.2.22l.1.4.11,1.49a.3.3,0,0,1-.28.33Z" />
                                            <path
                                                d="M386.5,734.55h-2.05a.31.31,0,0,1-.22-.52l1.44-1.44.24-.33.08-.32-.05-.14-.09,0-.08,0-.12-.12h-.39l-.23.15L385,732a.31.31,0,1,1-.61,0v-.1a.34.34,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.1-.1L385,731a.34.34,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.28.28,0,0,1,.15.17l.1.31a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31,0,.08-.31.41-.94,1h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,386.5,734.55Z" />
                                            <text class="cls-12" transform="translate(361.29 616.06)">1</text>
                                            <text class="cls-10" transform="translate(375.02 725.23)">B16</text>
                                            <text class="cls-12" transform="translate(342.97 615.55)">2</text>
                                            <text class="cls-12" transform="translate(307.81 614.26)">4</text>
                                            <text class="cls-12" transform="translate(290.57 613.91)">5</text>
                                            <text class="cls-12" transform="translate(325.37 614.73)">3</text>
                                            <text class="cls-12" transform="translate(359.04 658.23)">10</text>
                                            <text class="cls-12" transform="translate(355.36 724.04)">11</text>
                                            <text class="cls-12" transform="translate(333.97 724.04)">12</text>
                                            <text class="cls-12" transform="translate(313.49 723.63)">13</text>
                                            <text class="cls-12" transform="translate(270.46 722.98)">15</text>
                                            <text class="cls-12" transform="translate(294.05 724.04)">14</text>
                                            <text class="cls-12" transform="translate(342.67 657.46)">9</text>
                                            <text class="cls-12" transform="translate(307.51 656.17)">7</text>
                                            <text class="cls-12" transform="translate(290.26 655.83)">6</text>
                                            <text class="cls-12" transform="translate(325.06 656.64)">8</text>
                                            <polygon class="cls-1"
                                                points="459.41 771.48 458.81 803.58 441.1 803.38 441.76 771.11 459.41 771.48"
                                                id="B45" />
                                            <polygon class="cls-1"
                                                points="477.43 771.84 476.83 803.94 459.12 803.73 459.79 771.47 477.43 771.84"
                                                id="B44" />
                                            <polygon class="cls-1"
                                                points="495.18 772.13 494.59 804.23 477.16 804.02 477.82 771.76 495.18 772.13"
                                                id="B43" />
                                            <rect class="cls-1" x="495.22" y="772.24" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 13.64, -8.56)" id="B42" />
                                            <rect class="cls-1" x="513.15" y="772.65" width="17.42" height="32.11"
                                                transform="translate(13.65 -8.86) rotate(0.99)" id="B41" />
                                            <rect class="cls-1" x="531.12" y="772.95" width="17.42" height="32.11"
                                                transform="translate(13.66 -9.17) rotate(0.99)" id="B40" />
                                            <rect class="cls-1" x="548.93" y="773.24" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 13.67, -9.48)" id="B39" />
                                            <polygon class="cls-1"
                                                points="458.69 804.25 458.09 836.34 440.38 836.14 441.04 803.88 458.69 804.25"
                                                id="B52" />
                                            <polygon class="cls-1"
                                                points="476.71 804.61 476.12 836.7 458.4 836.5 459.07 804.24 476.71 804.61"
                                                id="B53" />
                                            <polygon class="cls-1"
                                                points="494.46 804.9 493.87 836.99 476.44 836.79 477.1 804.53 494.46 804.9"
                                                id="B54" />
                                            <rect class="cls-1" x="494.5" y="805.01" width="17.42" height="32.11"
                                                transform="translate(14.2 -8.54) rotate(0.99)" id="B55" />
                                            <rect class="cls-1" x="512.43" y="805.41" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 14.21, -8.85)" id="B456" />
                                            <rect class="cls-1" x="530.4" y="805.72" width="17.42" height="32.11"
                                                transform="translate(14.22 -9.16) rotate(0.99)" id="B57" />
                                            <rect class="cls-1" x="548.21" y="806" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 14.23, -9.46)" id="B58" />
                                            <polygon class="cls-1"
                                                points="587.6 773.84 587 805.94 569.28 805.74 569.95 773.47 587.6 773.84"
                                                id="B38" />
                                            <polygon class="cls-1"
                                                points="605.62 774.2 605.02 806.3 587.31 806.09 587.98 773.83 605.62 774.2"
                                                id="B37" />
                                            <polygon class="cls-1"
                                                points="623.37 774.49 622.78 806.59 605.35 806.38 606.01 774.12 623.37 774.49"
                                                id="B36" />
                                            <rect class="cls-1" x="623.41" y="774.6" width="17.42" height="32.11"
                                                transform="translate(13.7 -10.76) rotate(0.99)" id="B35" />
                                            <rect class="cls-1" x="641.34" y="775.01" width="17.42" height="32.11"
                                                transform="translate(13.71 -11.07) rotate(0.99)" id="B34" />
                                            <rect class="cls-1" x="659.31" y="775.31" width="17.42" height="32.11"
                                                transform="translate(13.72 -11.38) rotate(0.99)" id="B33" />
                                            <rect class="cls-1" x="677.12" y="775.6" width="17.42" height="32.11"
                                                transform="translate(13.73 -11.69) rotate(0.99)" id="B32" />
                                            <polygon class="cls-1"
                                                points="586.88 806.61 586.28 838.7 568.56 838.5 569.23 806.24 586.88 806.61"
                                                id="B59" />
                                            <polygon class="cls-1"
                                                points="604.9 806.97 604.3 839.06 586.59 838.86 587.26 806.6 604.9 806.97"
                                                id="B60" />
                                            <polygon class="cls-1"
                                                points="622.65 807.26 622.06 839.35 604.63 839.15 605.29 806.89 622.65 807.26"
                                                id="B61" />
                                            <rect class="cls-1" x="622.69" y="807.37" width="17.42" height="32.11"
                                                transform="translate(14.26 -10.74) rotate(0.99)" id="B62" />
                                            <rect class="cls-1" x="640.62" y="807.77" width="17.42" height="32.11"
                                                transform="translate(14.27 -11.05) rotate(0.99)" id="B63" />
                                            <rect class="cls-1" x="658.59" y="808.08" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 14.28, -11.36)" id="B64" />
                                            <rect class="cls-1" x="676.4" y="808.36" width="17.42" height="32.11"
                                                transform="translate(14.29 -11.67) rotate(0.99)" id="B65" />
                                            <path
                                                d="M698,831.07h-.21l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.28.28,0,0,1-.09-.17l-.1-.61a.17.17,0,0,1,0-.1V829l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.11a.29.29,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.22.06-.2.27,0,.29.39-.1H698l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.32.32,0,0,1-.13.18l-.3.2-.45.23A.31.31,0,0,1,698,831.07Zm-.46-.69.33.08h0l.53-.3.08-.29v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M700.72,831.07h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1V829l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.27.27,0,0,1,.17-.11l.41-.11h.38l.49.11a.31.31,0,0,1,.22.2l.1.3a.31.31,0,0,1-.2.39.29.29,0,0,1-.38-.19l0-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.2.2a.3.3,0,0,1-.1.07l-.52.21Zm-.54-.9.2.13.3.15.38-.16.12-.12.15-.36-.28-.51-.39-.08-.29.08-.19.19-.07.27Z" />
                                            <path
                                                d="M702.56,831.07a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,702.56,831.07Z" />
                                            <path
                                                d="M704.2,831.07a.31.31,0,0,1-.31-.31V829.4l-.13-.27-.17-.11h-.18l-.12.12-.54.43a.31.31,0,0,1-.38-.48l.69-.59a.31.31,0,0,1,.22-.09h.41a.26.26,0,0,1,.17.05l.31.2a.29.29,0,0,1,.1.12l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,704.2,831.07Z" />
                                            <path
                                                d="M705.74,831.07a.31.31,0,0,1-.31-.31V829.4l-.23-.38H705l-.23.15-.36.38a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.36-.24a.26.26,0,0,1,.17-.05h.41a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,705.74,831.07Z" />
                                            <path
                                                d="M708.7,831.07h-1.94a.3.3,0,0,1-.28-.19.31.31,0,0,1,0-.33l1.33-1.43.43-.6v-.12l-.15-.23-.2-.07h-.49l-.24.12,0,.13v.16a.31.31,0,0,1-.62,0v-.21a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.41-.2a.31.31,0,0,1,.13,0h.71l.31.1a.25.25,0,0,1,.12.08l.1.1.25.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.52.73-.88.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M680.56,830.76h-.21a.35.35,0,0,1-.14,0l-.4-.21-.34-.22a.31.31,0,0,1-.14-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.3.3,0,0,1-.42-.09l-.14-.2-.3-.08h-.23l-.22.07-.2.26,0,.29.39-.1h.28l.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41v.28l-.11.48a.29.29,0,0,1-.13.18l-.3.2-.45.23A.31.31,0,0,1,680.56,830.76Zm-.14-.61h.06l.52-.29.08-.3v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.41.19.13Z" />
                                            <path
                                                d="M683.32,830.76h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.34.34,0,0,1,.17-.11l.41-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,1,1-.59.19l0-.14-.25-.07h-.23l-.23.07-.2.26,0,.29.57-.11.48.12a.28.28,0,0,1,.15.08l.3.3a.21.21,0,0,1,.06.08l.21.41a.35.35,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.23.23,0,0,1-.07.1l-.2.21a.27.27,0,0,1-.1.06l-.52.21Zm-.54-.9.2.13.3.15.38-.15.11-.12.16-.38-.15-.29-.21-.21-.32-.08L683,829l-.19.19-.07.27Z" />
                                            <path
                                                d="M685.16,830.76a.3.3,0,0,1-.3-.31v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.31.31,0,0,1,685.16,830.76Z" />
                                            <path
                                                d="M686.8,830.76a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11H686l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.35.35,0,0,1,.1.11l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,686.8,830.76Z" />
                                            <path
                                                d="M688.34,830.76a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.52.53a.31.31,0,1,1-.44-.44l.62-.61a.27.27,0,0,1,.21-.09h.52a.29.29,0,0,1,.21.09l.21.2.06.08.2.41a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,688.34,830.76Z" />
                                            <path
                                                d="M691.3,830.76h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l-.06-.19-.19-.07h-.49l-.24.12,0,.14v.15a.31.31,0,0,1-.62,0V828a.3.3,0,0,1,0-.1l.1-.31a.3.3,0,0,1,.16-.17l.41-.21a.31.31,0,0,1,.13,0h.71l.31.11a.24.24,0,0,1,.12.07l.1.1a.42.42,0,0,1,.08.12l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,691.3,830.76Z" />
                                            <path
                                                d="M644,830.56h-.21a.25.25,0,0,1-.14,0l-.4-.2-.34-.22a.33.33,0,0,1-.14-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.26.26,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.22.06-.2.26,0,.3.39-.1H644l.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.57a.3.3,0,0,1-.13.2l-.3.2-.45.22A.22.22,0,0,1,644,830.56Zm-.14-.62h.06l.52-.28.07-.39-.07-.29-.19-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.08.41.19.13Z" />
                                            <path
                                                d="M646.78,830.56h-.1a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.32.32,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.27.27,0,0,1,.17-.11l.41-.11H647l.49.12a.31.31,0,0,1,.22.2l.1.3a.31.31,0,0,1-.2.39.29.29,0,0,1-.38-.19l-.05-.15-.25-.06h-.23l-.23.06-.2.26,0,.3.57-.11.57.11a.3.3,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.21.4-.22.34a.31.31,0,0,1-.14.12l-.52.2A.2.2,0,0,1,646.78,830.56Zm-.54-.9.2.13.3.15.35-.15.15-.22.14-.29-.27-.49-.39-.08-.29.07-.19.19-.07.28Z" />
                                            <path
                                                d="M648.62,830.56a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,648.62,830.56Z" />
                                            <path
                                                d="M650.26,830.56a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.17-.11h-.18l-.12.11-.54.44a.31.31,0,0,1-.38-.48l.69-.6a.36.36,0,0,1,.22-.09h.41a.27.27,0,0,1,.17.06l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,650.26,830.56Z" />
                                            <path
                                                d="M651.8,830.56a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H651l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.31.31,0,0,1,.21-.09h.52a.31.31,0,0,1,.21.09l.21.21.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,651.8,830.56Z" />
                                            <path
                                                d="M654.76,830.56h-1.94a.32.32,0,0,1-.28-.19.31.31,0,0,1,.05-.33l1.33-1.43.26-.35.07-.21v-.21l-.11-.24-.16-.1-.45.08-.26.12,0,.19a.31.31,0,1,1-.62,0v-.1a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.41-.2a.11.11,0,0,1,.08,0l.62-.1a.29.29,0,0,1,.22,0l.45.35a.25.25,0,0,1,.08.12l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.26.26,0,0,1,0,.09l-.3.41-.88.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M661.62,830.86l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.25.25,0,0,1-.08-.12l-.2-.61h0a.44.44,0,0,1,0-.1v-.61s0-.06,0-.09l.21-.71,0-.08.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.14-.25-.06h-.23l-.21.06-.22.38-.09.3.38-.19a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.2.34.23a.3.3,0,0,1,.13.18l.1.41v.28l-.11.48a.32.32,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.19-.19.08-.33v-.13l-.06-.21-.21-.15-.29-.14-.53.3-.11.23.14.42Z" />
                                            <path
                                                d="M664.38,830.86l-.48-.11a.29.29,0,0,1-.18-.13l-.2-.3,0-.08-.21-.61h0a.38.38,0,0,1,0-.1v-.61a.28.28,0,0,1,0-.09l.21-.71.21-.54a.33.33,0,0,1,.21-.19l.41-.1h.38l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.24l-.18.06-.22.62.27-.13a.31.31,0,0,1,.13,0h.21l.48.11a.28.28,0,0,1,.15.08l.3.31a.25.25,0,0,1,.08.14l.11.41v.28l-.12.48a.25.25,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08l-.41.1Zm-.22-.68.3.08h.13l.25-.07L665,830l.08-.33v-.13l-.07-.25-.19-.19-.33-.08h0l-.31.16-.14.14-.12.25.15.45Z" />
                                            <path
                                                d="M666.43,830.86a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,1,1,.62,0v1.95A.3.3,0,0,1,666.43,830.86Z" />
                                            <path
                                                d="M668,830.86a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31L667,829l-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,668,830.86Z" />
                                            <path
                                                d="M669.5,830.86a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,669.5,830.86Z" />
                                            <path
                                                d="M672.47,830.86h-1.94a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l0-.09-.11-.12-.2-.07h-.41l-.14.05,0,.09-.06.08-.11.12v.07a.31.31,0,1,1-.62,0v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.34.34,0,0,1,.18-.15l.3-.1.1,0h.51l.1,0,.31.1a.37.37,0,0,1,.12.07l.2.21a.16.16,0,0,1,.06.08l.1.2a.37.37,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,672.47,830.86Z" />
                                            <path
                                                d="M698.37,797.91h-.11a.23.23,0,0,1-.11,0l-.51-.2a.24.24,0,0,1-.14-.12l-.21-.3-.23-.56a.31.31,0,0,1,0-.13v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.46a.3.3,0,0,1,.21-.17l.51-.1h.27l.57.11a.29.29,0,0,1,.23.21l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.14-.33-.07h-.15l-.3.06-.14.28-.07.27.62-.1.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31-.08.06-.41.2A.33.33,0,0,1,698.37,797.91Zm-.42-.77.36.14.28-.14.21-.21.09-.33-.08-.27-.19-.19-.33-.09-.35.08-.26.46.15.38Z" />
                                            <path
                                                d="M701.23,797.91H701a.33.33,0,0,1-.14,0l-.41-.2-.08-.06-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.29.29,0,0,1,.12.1l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.16-.24-.27-.14h-.16l-.28.14-.22.29,0,.3.39-.1h.28l.48.11a.28.28,0,0,1,.15.08l.31.31a.64.64,0,0,1,.08.14l.11.59-.11.48a.47.47,0,0,1-.08.14l-.31.31-.08.06-.41.2A.33.33,0,0,1,701.23,797.91Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.08-.27-.19-.19-.32-.09H701l-.25.07-.19.19-.07.28.07.33.21.21Z" />
                                            <path
                                                d="M703.07,797.91a.3.3,0,0,1-.3-.31v-2.05a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2.05A.31.31,0,0,1,703.07,797.91Z" />
                                            <path
                                                d="M704.61,797.8a.3.3,0,0,1-.31-.3v-1.33l-.06-.28-.09,0h-.27l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41l.1,0,.3.1a.32.32,0,0,1,.21.23l.1.52v1.39A.3.3,0,0,1,704.61,797.8Z" />
                                            <path
                                                d="M706.14,797.8a.29.29,0,0,1-.3-.3v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.31.31,0,1,1-.48-.39l.41-.51a.45.45,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.33.33,0,0,1,.2.23l.11.52v1.39A.3.3,0,0,1,706.14,797.8Z" />
                                            <path
                                                d="M709.11,797.8h-1.94a.3.3,0,0,1-.29-.19.33.33,0,0,1,.08-.34l1.38-1.28.18-.45a.36.36,0,0,1,.07-.1l.11-.12v-.08l-.21-.29-.18-.12H708l-.29.22-.11.19a.31.31,0,1,1-.62,0v-.1A.27.27,0,0,1,707,795l.34-.45.35-.25a.34.34,0,0,1,.17,0h.52a.34.34,0,0,1,.17,0l.45.35.25.35a.34.34,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.16.16-.18.45a.44.44,0,0,1-.08.11l-.86.8h1.16a.31.31,0,0,1,.31.31A.3.3,0,0,1,709.11,797.8Z" />
                                            <path
                                                d="M680.15,798l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.29.29,0,0,1-.07-.12l-.21-.62h0a.34.34,0,0,1,0-.1V796a.19.19,0,0,1,0-.08l.2-.72,0-.1.31-.41a.27.27,0,0,1,.17-.11l.41-.11h.38l.49.11a.31.31,0,0,1,.22.2l.1.31a.31.31,0,0,1-.59.19l0-.15-.25-.06h-.23l-.23.06-.21.28-.08.29h0l.59-.11.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08Zm-.26-.69.33.08.28-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.33-.08-.27.08-.22.21-.12.25.14.43Z" />
                                            <path
                                                d="M682.91,798l-.48-.11a.3.3,0,0,1-.18-.13l-.21-.31,0-.07-.2-.62h0a.3.3,0,0,1,0-.1V796a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.2-.16l.41-.11h.38l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.19.05-.15.29-.07.27.34-.09h.28l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.22-.68.3.07h.13l.25-.07.18-.19.09-.32v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.22.06-.27.47.15.46Z" />
                                            <path
                                                d="M685,798a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,685,798Z" />
                                            <path
                                                d="M686.49,798a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.07-.35.35a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,686.49,798Z" />
                                            <path
                                                d="M688,798a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.15-.36.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.36.36,0,0,1,.12.18l.11.41v1.51A.31.31,0,0,1,688,798Z" />
                                            <path
                                                d="M691,798h-2a.32.32,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.21v-.18l-.05-.1-.12-.12-.19-.06h-.41l-.14.05,0,.09a.35.35,0,0,1,0,.08l-.12.11v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.29.29,0,0,1,.09-.21l.17-.17.08-.16a.3.3,0,0,1,.17-.16l.31-.1h.71l.3.1a.25.25,0,0,1,.12.08l.21.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.11.31a.2.2,0,0,1,0,.08l-.31.41-.94.94H691a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M663.16,797.91h-.11a.33.33,0,0,1-.13,0l-.41-.2-.34-.23a.32.32,0,0,1-.14-.2l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.31.31,0,0,1,.22.21l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.24l-.22.06-.2.26,0,.3.57-.11.57.11a.26.26,0,0,1,.19.13l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.22.22,0,0,1,0,.11l-.2.51a.41.41,0,0,1-.07.11l-.2.2a.41.41,0,0,1-.11.07l-.51.2A.23.23,0,0,1,663.16,797.91Zm-.54-.9.19.13.3.15.39-.16.11-.11.15-.39-.27-.49-.39-.08-.3.07-.19.19-.06.28Z" />
                                            <path
                                                d="M666,797.91h-.1a.33.33,0,0,1-.14,0l-.41-.2-.34-.23a.3.3,0,0,1-.12-.15l-.2-.62h0s0-.06,0-.09v-.71s0-.06,0-.09l.21-.71.22-.46a.34.34,0,0,1,.22-.17l.51-.1h.26l.58.11a.32.32,0,0,1,.23.21l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.14-.34-.07h-.14l-.3.06-.14.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.57a.29.29,0,0,1-.13.19l-.31.21-.44.22A.33.33,0,0,1,666,797.91Zm-.56-.92.22.15.29.14.49-.27.08-.39-.08-.29-.19-.19-.32-.09-.28.08-.21.22-.13.25Z" />
                                            <path
                                                d="M667.86,797.91a.3.3,0,0,1-.3-.31v-2.05a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2.05A.31.31,0,0,1,667.86,797.91Z" />
                                            <path
                                                d="M669.4,797.91a.31.31,0,0,1-.31-.31v-1.43L669,796l-.13-.09h-.23l-.22.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06H669a.27.27,0,0,1,.17.06l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,669.4,797.91Z" />
                                            <path
                                                d="M671,797.91a.32.32,0,0,1-.31-.29l-.1-1.43-.06-.24-.14-.09h-.22L670,796l-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.3.2a.29.29,0,0,1,.13.18l.1.41.11,1.49a.29.29,0,0,1-.28.32Z" />
                                            <path
                                                d="M674,797.91h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l0-.14-.23-.11h-.49l-.2.06-.06.19v.16a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.21a.28.28,0,0,1,0-.09l.1-.31a.36.36,0,0,1,.08-.12l.1-.1a.42.42,0,0,1,.12-.08l.31-.1.1,0h.61a.25.25,0,0,1,.14,0l.41.2a.34.34,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09v.31a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1,0,.09l-.3.41-.94.94H674a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M644.84,797.6l-.49-.11a.34.34,0,0,1-.18-.13l-.2-.31-.24-.56h0a.5.5,0,0,1,0-.12v-.71l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.48.48,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2.08.06.2.21a.3.3,0,0,1-.43.43l-.17-.17-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.39.39,0,0,1,.13.2l.11.67-.12.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08l-.4.1Zm-.23-.68.3.07H645l.25-.06.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.3.15-.13.12-.13.34.16.4Z" />
                                            <path
                                                d="M647.7,797.6l-.48-.11a.27.27,0,0,1-.14-.08l-.31-.31a.32.32,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.43.43,0,0,1,.1-.09l.41-.2a.35.35,0,0,1,.14,0H648l.48.11a.3.3,0,0,1,.22.2l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.05-.15-.25-.06h-.15l-.29.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1l.12,0,.51.21a.23.23,0,0,1,.1.07l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.23.34a.34.34,0,0,1-.18.13l-.41.1Zm-.25-.69.33.08h.13l.21-.06.14-.21.16-.37-.15-.3-.13-.12-.38-.16-.5.28-.07.34.08.35Z" />
                                            <path
                                                d="M649.65,797.6a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,649.65,797.6Z" />
                                            <path
                                                d="M651.28,797.6a.3.3,0,0,1-.3-.31v-1.36l-.18-.28h-.36l-.14.07-.46.38a.31.31,0,0,1-.43-.05.3.3,0,0,1,0-.43l.52-.41.26-.14a.31.31,0,0,1,.13,0h.51a.32.32,0,0,1,.14,0l.21.1a.29.29,0,0,1,.13.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,651.28,797.6Z" />
                                            <path
                                                d="M652.82,797.6a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1a.18.18,0,0,1,.1,0h.41a.18.18,0,0,1,.1,0l.3.1a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,652.82,797.6Z" />
                                            <path
                                                d="M655.79,797.6h-1.95a.3.3,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.33-1.43.43-.62-.22-.35-.14,0h-.41l-.19.06-.1.11-.07.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.21-.2a.28.28,0,0,1,.11-.08l.31-.1h.71l.31.1a.33.33,0,0,1,.17.16l.11.2.18.28a.34.34,0,0,1,0,.17v.2a.34.34,0,0,1,0,.17l-.52.73-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M445.45,826.56h-.1a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.3.3,0,0,1-.12-.15l-.2-.62h0a.36.36,0,0,1,0-.1v-.71s0-.06,0-.09l.21-.71a.31.31,0,0,1,.05-.1l.3-.41a.36.36,0,0,1,.18-.12l.41-.1h.27l.58.11a.33.33,0,0,1,.23.2l.1.31a.31.31,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.05-.14-.34-.07h-.14l-.23.06-.21.28-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.57a.29.29,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,445.45,826.56Zm-.56-.91.22.15.29.14.49-.28.08-.38-.08-.3-.19-.19-.32-.08-.28.08-.21.22-.13.25Z" />
                                            <path
                                                d="M448.32,826.56h-.21a.31.31,0,0,1-.13,0l-.41-.2-.08-.06-.21-.21a.26.26,0,0,1-.07-.11l-.21-.62h0a.34.34,0,0,1,0-.1v-.71l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.36.36,0,0,1,.19.13l.2.31a.31.31,0,0,1-.51.34l-.14-.21-.29-.07h-.24l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.22.22,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.1.57a.3.3,0,0,1-.14.19l-.3.21-.44.22A.35.35,0,0,1,448.32,826.56Zm-.13-.61h.06l.51-.29.08-.38-.08-.3-.19-.19-.33-.08h-.13l-.21.06-.27.48.14.42.12.12Z" />
                                            <path
                                                d="M450.16,826.56a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,450.16,826.56Z" />
                                            <path
                                                d="M451.7,826.56a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.14-.09H451l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.21a.29.29,0,0,1,.13.18l.1.41v1.51A.29.29,0,0,1,451.7,826.56Z" />
                                            <path
                                                d="M453.23,826.56a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23l-.22.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,453.23,826.56Z" />
                                            <path
                                                d="M456.2,826.56h-1.95a.3.3,0,0,1-.28-.19A.3.3,0,0,1,454,826l1.43-1.43.25-.34.07-.21v-.21l-.05-.14-.31-.11H455l-.24.11-.12.18V824a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.34.34,0,0,1,.05-.17l.35-.46a.35.35,0,0,1,.12-.07l.3-.1.1,0h.51l.1,0,.55.22a.35.35,0,0,1,.16.18l.1.3a.38.38,0,0,1,0,.1v.31a.38.38,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.31.41L455,826h1.21a.31.31,0,0,1,.31.31A.3.3,0,0,1,456.2,826.56Z" />
                                            <path
                                                d="M463.26,826.77l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.42.42,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.1-.76a.42.42,0,0,1,.06-.14l.31-.41.1-.09.41-.2a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.2a.34.34,0,0,1,.15.18l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12h-.17l-.28.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1l.12,0,.51.21a.26.26,0,0,1,.14.11l.21.31.22.44a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.08.35-.07.14-.21.14-.29-.3-.52-.35-.14-.29.15-.21.21-.07.27.08.34Z" />
                                            <path
                                                d="M466.13,826.77l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.21.21,0,0,1-.06-.1l-.21-.51a.51.51,0,0,1,0-.13v-.71a.25.25,0,0,1,0-.08l.21-.72.22-.46a.29.29,0,0,1,.16-.15l.51-.2a.25.25,0,0,1,.12,0h.2a.25.25,0,0,1,.12,0l.51.2a.33.33,0,0,1,.16.15l.1.21a.3.3,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.05-.1-.43-.14-.35.14-.15.31-.07.24.39-.16.12,0h.1a.35.35,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.3.3a.28.28,0,0,1,.08.15l.12.58-.12.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08Zm-.26-.69.33.08.28-.07.19-.19.08-.33-.08-.28-.21-.21-.29-.15-.35.14-.28.48.13.33Z" />
                                            <path
                                                d="M468.07,826.77a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,468.07,826.77Z" />
                                            <path
                                                d="M469.61,826.77a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.23l.1.51v1.39A.3.3,0,0,1,469.61,826.77Z" />
                                            <path
                                                d="M471.14,826.77a.3.3,0,0,1-.3-.31V825l0-.17-.11,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.48-.38l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,471.14,826.77Z" />
                                            <path
                                                d="M474.21,826.77h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.32-.46v-.19l0-.14-.1,0-.08-.05-.11-.12H473l-.23.15-.07.26a.31.31,0,0,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.1-.1.35-.24a.26.26,0,0,1,.17,0h.62a.27.27,0,0,1,.21.09l.17.17.16.08a.3.3,0,0,1,.16.17l.1.31a.36.36,0,0,1,0,.1v.3a.33.33,0,0,1,0,.14l-.1.21-.33.45-.94.95h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,474.21,826.77Z" />
                                            <path
                                                d="M481.07,827.18l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.28.28,0,0,1-.09-.17l-.1-.6a.21.21,0,0,1,0-.11v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.31.31,0,0,1-.58.19l-.05-.15-.25-.06h-.23l-.23.06-.19.27,0,.29.39-.1h.28l.48.11.14.08.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.24-.06.19-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M483.94,827.18l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.34.34,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.1h.38l.49.11a.28.28,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l0-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.48.11a.53.53,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.2.41a.23.23,0,0,1,0,.14v.2a.23.23,0,0,1,0,.14l-.2.41a.16.16,0,0,1-.06.08l-.3.31a.36.36,0,0,1-.15.08Zm-.26-.69.33.08.28-.07.21-.22.15-.36-.15-.3-.21-.21-.33-.08-.27.08-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M485.88,827.18a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,485.88,827.18Z" />
                                            <path
                                                d="M487.52,827.18a.31.31,0,0,1-.31-.29l-.15-1.62-.1,0h-.31l-.19.07-.36.36a.31.31,0,1,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0H487l.09,0,.31.1a.28.28,0,0,1,.2.21l.1.41.12,1.49a.31.31,0,0,1-.29.33Z" />
                                            <path
                                                d="M489.05,827.18a.3.3,0,0,1-.3-.31v-1.36l-.18-.28h-.36l-.14.07-.46.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.52-.41.26-.14a.31.31,0,0,1,.13,0h.51a.32.32,0,0,1,.14,0l.21.1a.29.29,0,0,1,.13.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,489.05,827.18Z" />
                                            <path
                                                d="M492,827.18h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.18l-.11-.23-.14,0h-.5l-.09,0-.18.23v.13a.31.31,0,0,1-.62,0v-.21a.22.22,0,0,1,0-.13l.1-.21a.21.21,0,0,1,.06-.08l.2-.2a.24.24,0,0,1,.08-.06l.21-.1a.28.28,0,0,1,.13,0h.71l.31.1a.35.35,0,0,1,.18.16l.2.41a.31.31,0,0,1,0,.13v.31a.31.31,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.93.94H492a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M499.09,827.69h-.21a.35.35,0,0,1-.14,0l-.41-.21a.35.35,0,0,1-.11-.1L498,827l-.23-.56v0h0a.3.3,0,0,1,0-.1v-.71a.24.24,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.13-.14l.41-.2a.35.35,0,0,1,.14,0h.31a.28.28,0,0,1,.13,0l.41.2a.32.32,0,0,1,.12.11l.21.3a.32.32,0,0,1-.09.43.3.3,0,0,1-.42-.09l-.16-.23-.27-.14H499l-.25.13-.16.31-.07.27.34-.09h.28l.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.05-.41.21A.31.31,0,0,1,499.09,827.69Zm-.14-.61H499l.3-.15.21-.22.09-.32-.08-.28-.19-.19-.33-.08h-.13l-.22.06-.26.46.15.39.13.18Z" />
                                            <path
                                                d="M502,827.69h-.2a.32.32,0,0,1-.14,0l-.41-.21-.08-.05-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.31.31,0,1,1-.59.19l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.22.44a.25.25,0,0,1,0,.14v.1a.23.23,0,0,1,0,.14l-.2.41-.22.34a.29.29,0,0,1-.12.1l-.41.21A.32.32,0,0,1,502,827.69Zm-.13-.61h.06l.27-.14.16-.24.14-.29-.27-.49-.39-.08-.29.08-.19.19-.07.27.07.34.21.21Z" />
                                            <path
                                                d="M503.79,827.59a.31.31,0,0,1-.3-.29l-.11-1.95a.32.32,0,0,1,.29-.32.31.31,0,0,1,.33.29l.1,1.94a.31.31,0,0,1-.29.33Z" />
                                            <path
                                                d="M505.33,827.59a.31.31,0,0,1-.31-.31V826l-.17-.37h-.37l-.1.05-.47.48a.31.31,0,1,1-.44-.44l.52-.51.08-.06.2-.1a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.33.33,0,0,1,.15.16l.2.52a.2.2,0,0,1,0,.11v1.33A.31.31,0,0,1,505.33,827.59Z" />
                                            <path
                                                d="M506.86,827.59a.3.3,0,0,1-.3-.31V826l-.06-.28-.1,0h-.3l-.18.06-.35.44a.3.3,0,0,1-.43.05.3.3,0,0,1-.05-.43l.41-.51a.28.28,0,0,1,.14-.1l.31-.1a.16.16,0,0,1,.1,0h.4a.16.16,0,0,1,.1,0l.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,506.86,827.59Z" />
                                            <path
                                                d="M509.83,827.59h-1.94a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.33-1.33.26-.45.16-.17V825l-.21-.29-.18-.11h-.33l-.36.22,0,.19a.31.31,0,1,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.31.31,0,0,1,.15-.17l.21-.11.27-.18a.26.26,0,0,1,.17,0h.52a.28.28,0,0,1,.17,0l.45.34.25.36a.34.34,0,0,1,.05.17v.3a.34.34,0,0,1-.09.22l-.21.21-.26.45-.86.86h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M516.79,827.89l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.3a.42.42,0,0,1-.08-.12l-.2-.62h0a.36.36,0,0,1,0-.1V826a.19.19,0,0,1,0-.08l.2-.72,0-.07.31-.52a.3.3,0,0,1,.19-.14l.41-.1H517l.57.11a.29.29,0,0,1,.23.21l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.05-.14-.33-.07h-.15l-.21.06-.22.37-.09.3.38-.19a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.34.34,0,0,1,.13.18l.1.41v.28l-.11.48a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.19-.19.09-.33v-.13l-.06-.21-.22-.14-.29-.15-.53.3-.11.23.14.42Z" />
                                            <path
                                                d="M519.56,827.89l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.34.34,0,0,1,0-.1V826l.11-.76a.15.15,0,0,1,0-.11l.3-.52a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.21.06-.22.35,0,.3.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.28.28,0,0,1,.12.18l.11.41v.28l-.12.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08l-.41.11Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.32v-.14l-.06-.21-.21-.14-.37-.16-.52.29-.06.25.08.44Z" />
                                            <path
                                                d="M521.6,827.89a.29.29,0,0,1-.3-.3v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.3.3,0,0,1,521.6,827.89Z" />
                                            <path
                                                d="M523.14,827.89a.3.3,0,0,1-.31-.3v-1.44l-.05-.16-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.28.28,0,0,1,.11-.08l.31-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,523.14,827.89Z" />
                                            <path
                                                d="M524.67,827.89a.29.29,0,0,1-.3-.3v-1.44l0-.16-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,524.67,827.89Z" />
                                            <path
                                                d="M527.64,827.89H525.7a.31.31,0,0,1-.29-.18.33.33,0,0,1,.07-.34l1.4-1.4.35-.62v-.09l-.11-.12a.16.16,0,0,1-.06-.08l0-.09-.13,0h-.42l-.14,0-.21.37a.31.31,0,0,1-.62,0v-.11a.34.34,0,0,1,0-.17l.29-.47a.31.31,0,0,1,.18-.16l.31-.1.09,0h.52l.09,0,.31.1a.34.34,0,0,1,.18.15l.08.16.17.17a.36.36,0,0,1,.09.22v.31a.27.27,0,0,1-.06.17l-.2.31-.19.37a.22.22,0,0,1,0,.08l-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,527.64,827.89Z" />
                                            <path
                                                d="M573.39,828.82h-.2a.23.23,0,0,1-.14,0l-.41-.2a.25.25,0,0,1-.12-.11l-.2-.3-.23-.56v0s0-.06,0-.09v-.71s0-.06,0-.09l.21-.71.22-.46a.32.32,0,0,1,.2-.16l.41-.11h.39l.48.12a.28.28,0,0,1,.18.12l.21.31a.31.31,0,1,1-.52.34l-.14-.21-.29-.07h-.23l-.2,0-.14.29-.07.26.33-.08h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.27.27,0,0,1-.08.14l-.31.31-.08.06-.41.2A.23.23,0,0,1,573.39,828.82Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.07-.27-.19-.19-.33-.09h-.13L573,827l-.26.47.15.38.13.18Z" />
                                            <path
                                                d="M576.26,828.82h-.21a.22.22,0,0,1-.13,0l-.41-.2a.24.24,0,0,1-.08-.06l-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.24l-.22.06-.2.26,0,.3.39-.1h.28l.48.11a.3.3,0,0,1,.18.13l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.2.4-.23.34a.29.29,0,0,1-.11.11l-.41.2A.25.25,0,0,1,576.26,828.82Zm-.13-.62h.06l.27-.13.16-.24.14-.29-.28-.5-.3-.08h-.13l-.25.07-.19.19-.06.28.07.33.21.21Z" />
                                            <path
                                                d="M578.1,828.82a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,578.1,828.82Z" />
                                            <path
                                                d="M579.64,828.82a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.33.33,0,0,1,.22-.08h.51a.3.3,0,0,1,.21.08l.21.21.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,579.64,828.82Z" />
                                            <path
                                                d="M581.17,828.82a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,581.17,828.82Z" />
                                            <path
                                                d="M582.2,828.82a.31.31,0,0,1-.23-.52l1.33-1.43.27-.46.16-.17v-.09l-.22-.29-.18-.11H583l-.35.21,0,.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.29.29,0,0,1,0-.09l.1-.31a.3.3,0,0,1,.15-.18l.21-.1.27-.19a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.2.2-.26.45-.86.93,1.19-.06a.31.31,0,0,1,.33.29.3.3,0,0,1-.29.32l-1.95.11Z" />
                                            <path
                                                d="M591.1,828.92l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13V827l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.48.48,0,0,1,.11-.09l.41-.2a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.13.41.32.32,0,0,1-.42-.14l0-.11-.25-.13h-.17l-.28.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.36.36,0,0,1,.11.14l.21.52a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.21.41a.22.22,0,0,1-.05.08l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.32.08.28-.07.22-.22.14-.29-.14-.35-.23-.15-.29-.14-.49.27-.07.35.08.34Z" />
                                            <path
                                                d="M594,828.92l-.58-.11a.29.29,0,0,1-.19-.13l-.21-.31,0-.07-.21-.61a.41.41,0,0,1,0-.11V827a.25.25,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.16-.15l.51-.2a.25.25,0,0,1,.12,0h.2l.48.11a.31.31,0,0,1,.19.13l.2.3a.31.31,0,1,1-.51.34l-.14-.21-.29-.07H594l-.36.14-.16.3-.07.25.4-.16.12,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.36.36,0,0,1,.12.18l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.3.31a.36.36,0,0,1-.15.08Zm-.33-.69.39.08.29-.07.19-.19.08-.33v-.13l-.06-.22-.21-.14-.3-.15-.38.16-.13.12-.12.25.15.46Z" />
                                            <path
                                                d="M595.91,828.92a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,595.91,828.92Z" />
                                            <path
                                                d="M597.45,828.92a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.16.16,0,0,1,.1,0H597a.15.15,0,0,1,.09,0l.31.1a.28.28,0,0,1,.2.22l.1.4v1.51A.3.3,0,0,1,597.45,828.92Z" />
                                            <path
                                                d="M599,828.92a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31L598,827l-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.41a.16.16,0,0,1,.1,0l.31.1a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,599,828.92Z" />
                                            <path
                                                d="M602,828.92h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.32-.06-.19-.22-.17h-.49l-.14,0,0,.09-.18.27a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.29-.48a.35.35,0,0,1,.18-.16l.3-.1h.72a.31.31,0,0,1,.13,0l.21.1.08.06.2.2a.42.42,0,0,1,.08.12l.1.31a.31.31,0,0,1,0,.1v.2a.31.31,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.31.41-.94.94H602a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M609.11,829.43h-.2a.32.32,0,0,1-.14,0l-.41-.21L608,829a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.4-.1h.39l.48.11a.34.34,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l-.05-.15-.25-.06h-.23l-.23.07-.19.26,0,.29.4-.1h.27l.49.12a.28.28,0,0,1,.18.12l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.33.33,0,0,1-.06.1l-.21.21-.08.05-.41.21A.32.32,0,0,1,609.11,829.43Zm-.13-.61H609l.3-.15.13-.13.15-.38-.28-.51-.3-.07h-.13l-.25.07-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M611.88,829.43h-.1a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6v0l-.1-.7a.28.28,0,0,1,0-.13l.2-.72a.47.47,0,0,1,0-.1l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l0-.15-.24-.06h-.23l-.23.07-.21.28-.08.29h0l.59-.12.48.12a.25.25,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.58-.1.57a.35.35,0,0,1-.14.2l-.3.2-.44.23A.35.35,0,0,1,611.88,829.43Zm-.54-.9.2.13.29.15.49-.28.08-.39-.08-.29-.19-.19-.33-.08-.27.08-.19.19-.07.26Z" />
                                            <path
                                                d="M613.72,829.43a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,613.72,829.43Z" />
                                            <path
                                                d="M615.26,829.43a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.36.37a.31.31,0,1,1-.44-.44l.41-.41.36-.24a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.21a.27.27,0,0,1,.13.18l.1.41v1.5A.3.3,0,0,1,615.26,829.43Z" />
                                            <path
                                                d="M616.89,829.43a.3.3,0,0,1-.3-.31v-1.36l-.14-.27-.16-.11h-.19l-.12.12-.53.43a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.41a.34.34,0,0,1,.17.05l.31.21a.35.35,0,0,1,.1.11l.21.41a.35.35,0,0,1,0,.14v1.43A.31.31,0,0,1,616.89,829.43Z" />
                                            <path
                                                d="M619.86,829.43h-2.05a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.2l-.06-.19-.2-.07h-.51l-.19.07-.06.24a.31.31,0,1,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.11-.1a.24.24,0,0,1,.12-.07l.3-.11h.81l.31.11a.29.29,0,0,1,.12.07l.1.1a.42.42,0,0,1,.08.12l.1.31a.31.31,0,0,1,0,.1v.3a.31.31,0,0,1,0,.1l-.1.31a.41.41,0,0,1-.05.09l-.31.4-.94,1h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,619.86,829.43Z" />
                                            <path
                                                d="M626.62,829.74l-.49-.11-.14-.08-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.31.31,0,0,1-.59.19l-.06-.19-.23-.11h-.16l-.28.14-.22.29,0,.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.22.44a.23.23,0,0,1,0,.14v.1a.23.23,0,0,1,0,.14l-.2.41-.22.34a.34.34,0,0,1-.2.13Zm-.26-.69.33.08.35-.08.14-.2.14-.29-.27-.49-.39-.08-.29.08-.19.19-.07.27.07.34Z" />
                                            <path
                                                d="M629.48,829.74l-.48-.11a.37.37,0,0,1-.14-.08l-.31-.31a.61.61,0,0,1-.07-.1l-.2-.51v0h0a.36.36,0,0,1,0-.1v-.71a.24.24,0,0,1,0-.08l.2-.72,0-.1.31-.41a.24.24,0,0,1,.11-.09l.41-.2a.28.28,0,0,1,.13,0h.21a.22.22,0,0,1,.11,0l.51.2a.31.31,0,0,1,.18.19l.1.31a.29.29,0,0,1-.19.38.3.3,0,0,1-.39-.19l-.06-.17-.4-.13-.27.14-.23.3-.09.29.39-.19a.28.28,0,0,1,.13,0h.1a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.14.08Zm-.25-.69.33.08.27-.08.19-.19.09-.32-.08-.28-.22-.22-.28-.13-.28.13-.23.24-.12.24.13.33Z" />
                                            <path
                                                d="M631.43,829.74a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,631.43,829.74Z" />
                                            <path
                                                d="M633,829.74a.3.3,0,0,1-.3-.31V828.1l-.06-.28-.1,0h-.31l-.17.06-.35.44a.3.3,0,0,1-.43.05.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,633,829.74Z" />
                                            <path
                                                d="M634.6,829.74a.31.31,0,0,1-.31-.31v-1.27l-.13-.33-.12,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43.05.31.31,0,0,1,0-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.11h.61l.3.11a.29.29,0,0,1,.19.17l.2.52a.2.2,0,0,1,0,.11v1.33A.31.31,0,0,1,634.6,829.74Z" />
                                            <path
                                                d="M637.57,829.74h-2.05a.31.31,0,0,1-.21-.53l1.4-1.31.35-.59v-.18l0-.14-.09,0a.16.16,0,0,1-.08-.06l-.12-.11h-.39l-.23.15-.07.26a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.31.31,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.1-.1.36-.24a.26.26,0,0,1,.17-.05h.61a.35.35,0,0,1,.22.08l.17.17.16.08a.3.3,0,0,1,.15.18l.11.31a.31.31,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.21-.32.53-.06.06-.86.8h1.27a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M446.17,792.38H446a.31.31,0,0,1-.13,0l-.41-.21-.34-.22a.34.34,0,0,1-.14-.21l-.1-.6v-.78l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.32.32,0,0,1,.18.13l.2.3a.31.31,0,1,1-.51.34l-.14-.21-.29-.07H446l-.22.06-.2.27,0,.29.39-.1h.28l.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.59-.1.57a.39.39,0,0,1-.13.2l-.31.2-.44.23A.35.35,0,0,1,446.17,792.38Zm-.13-.62h.06l.51-.28.08-.39-.08-.29-.19-.19-.33-.08H446l-.25.07-.19.19-.06.27.07.41.19.13Z" />
                                            <path
                                                d="M448.93,792.38h-.1a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.42.42,0,0,1,.18-.11l.41-.1h.38l.48.11a.31.31,0,0,1,.22.2l.1.31a.31.31,0,0,1-.58.19l-.05-.15-.25-.06h-.23l-.23.06-.19.27-.05.29.57-.11.49.11a.39.39,0,0,1,.14.08l.31.31a.35.35,0,0,1,.05.08l.21.41a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.21.41a.35.35,0,0,1-.05.08l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,448.93,792.38Zm-.54-.9.2.13.29.14.28-.14.24-.23.14-.28-.14-.28-.22-.21-.32-.08-.28.08-.19.19-.07.27Z" />
                                            <path
                                                d="M450.77,792.38a.3.3,0,0,1-.3-.31V790a.3.3,0,0,1,.3-.3.31.31,0,0,1,.31.3v2.05A.31.31,0,0,1,450.77,792.38Z" />
                                            <path
                                                d="M452.41,792.38a.3.3,0,0,1-.3-.29l-.11-1.43-.06-.24-.13-.09h-.23l-.23.15-.36.38a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44L451,790l.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.38.38,0,0,1,.13.18l.1.41.11,1.49a.31.31,0,0,1-.29.33Z" />
                                            <path
                                                d="M454,792.38a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.11.12-.54.43a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.69-.59a.31.31,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.2.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,454,792.38Z" />
                                            <path
                                                d="M456.92,792.38h-2.05a.3.3,0,0,1-.28-.19.3.3,0,0,1,.06-.34l1.43-1.43.25-.33.07-.22v-.2l-.11-.25-.16-.1-.45.08-.25.13-.05.19a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.1a.31.31,0,0,1,0-.1l.1-.31A.35.35,0,0,1,455,789l.41-.2.08,0,.62-.1a.25.25,0,0,1,.22,0l.46.34a.47.47,0,0,1,.07.12l.1.31a.3.3,0,0,1,0,.1v.3a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M464,794h-.21a.22.22,0,0,1-.13,0l-.41-.2-.34-.23a.32.32,0,0,1-.14-.2l-.1-.61V792l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.3.3,0,0,1,.19.12l.2.31a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21L464,791h-.24l-.22.06-.2.26,0,.3.39-.1H464l.48.11a.22.22,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.1.57a.3.3,0,0,1-.14.19l-.3.21-.45.22A.2.2,0,0,1,464,794Zm-.13-.62h.06l.51-.28.08-.39-.08-.29-.19-.19-.33-.09h-.13l-.25.07-.19.19-.06.28.07.41.19.13Z" />
                                            <path
                                                d="M466.74,794h-.1a.23.23,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.17.17,0,0,1,0-.1V792l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.4-.11H467l.48.12a.31.31,0,0,1,.22.2l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.23.06-.19.26-.05.3.57-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.22.22,0,0,1,.05.08l.21.41a.32.32,0,0,1,0,.14v.1a.36.36,0,0,1,0,.11l-.21.51a.26.26,0,0,1-.11.14l-.31.21-.44.22A.23.23,0,0,1,466.74,794Zm-.54-.9.2.13.29.14.52-.29.14-.35-.14-.29-.22-.21-.32-.09-.28.08-.19.19-.07.28Z" />
                                            <path
                                                d="M468.58,794a.3.3,0,0,1-.3-.31v-2.05a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2.05A.31.31,0,0,1,468.58,794Z" />
                                            <path
                                                d="M470.22,794a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,470.22,794Z" />
                                            <path
                                                d="M471.76,794a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H471l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.61a.29.29,0,0,1,.22-.09h.51a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,471.76,794Z" />
                                            <path
                                                d="M474.73,794h-2.05a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l-.06-.19-.19-.06h-.49l-.23.11-.05.2a.31.31,0,0,1-.31.3.3.3,0,0,1-.3-.3v-.11a.28.28,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.41-.2a.22.22,0,0,1,.13,0H474l.1,0,.3.1a.25.25,0,0,1,.12.08l.11.1a.35.35,0,0,1,.07.12l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.26.26,0,0,1,0,.09l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M481.69,794.32l-.58-.1a.3.3,0,0,1-.19-.14l-.21-.3-.23-.57h0a.22.22,0,0,1,0-.11v-.71a.28.28,0,0,1,0-.09l.2-.71.23-.46A.32.32,0,0,1,481,791l.41-.21a.31.31,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.2.2a.3.3,0,0,1-.43.43l-.17-.16-.3-.15h-.16l-.26.12-.16.32-.06.23.27-.13a.31.31,0,0,1,.13,0h.21a.31.31,0,0,1,.13,0l.41.2.34.23a.3.3,0,0,1,.14.19l.1.68-.11.48a.25.25,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.34-.68.4.08.29-.08.19-.19.08-.33-.08-.35-.2-.14-.37-.15-.3.15-.13.13-.14.34.16.39Z" />
                                            <path
                                                d="M484.45,794.32l-.49-.11a.29.29,0,0,1-.14-.08l-.3-.31a.24.24,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.32.32,0,0,1,.14.14l.1.2a.29.29,0,0,1-.14.41.3.3,0,0,1-.41-.13l-.05-.12-.26-.12h-.16l-.28.14-.22.28,0,.28.33-.16a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.08.06.2.21a.23.23,0,0,1,.07.1l.21.51a.5.5,0,0,1,0,.12v.1a.35.35,0,0,1,0,.14l-.21.4-.22.34a.29.29,0,0,1-.18.13l-.41.1Zm-.25-.68.32.08h.13l.22-.06.14-.21.15-.3-.15-.38-.13-.13-.36-.15-.51.29-.07.34.07.34Z" />
                                            <path
                                                d="M486.5,794.32a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,1,1,.61,0V794A.3.3,0,0,1,486.5,794.32Z" />
                                            <path
                                                d="M488,794.32a.3.3,0,0,1-.31-.3v-1.36l-.17-.28h-.37l-.09,0-.38.37a.3.3,0,1,1-.43-.43l.41-.41a.16.16,0,0,1,.08-.06l.2-.1a.37.37,0,0,1,.14,0h.51a.33.33,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.31.31,0,0,1,0,.13V794A.3.3,0,0,1,488,794.32Z" />
                                            <path
                                                d="M489.57,794.32a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.2.22l.1.41V794A.29.29,0,0,1,489.57,794.32Z" />
                                            <path
                                                d="M492.53,794.32h-1.94a.31.31,0,0,1-.22-.52l1.4-1.4.35-.65-.21-.35-.14,0h-.41l-.2.06-.1.1-.06.24a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.28.28,0,0,1,0-.09l.1-.31a.25.25,0,0,1,.08-.12l.2-.21a.37.37,0,0,1,.12-.07l.31-.1.1,0h.51l.1,0,.3.1a.3.3,0,0,1,.18.15l.1.21.19.27a.34.34,0,0,1,.05.17v.21a.34.34,0,0,1-.05.17l-.21.3-.18.38-.06.08-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,492.53,794.32Z" />
                                            <path
                                                d="M499.6,794.83h-.11a.31.31,0,0,1-.13,0l-.41-.2-.34-.23a.26.26,0,0,1-.12-.15l-.21-.62h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.2-.71a.31.31,0,0,1,0-.1l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.29.29,0,0,1,.23.21l.1.3a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l0-.14-.34-.07h-.15l-.22.06-.21.28-.09.29h0l.59-.11.48.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.48a.27.27,0,0,1-.13.18l-.3.21-.45.22A.31.31,0,0,1,499.6,794.83Zm-.56-.91.22.15.29.14.49-.28.08-.3v-.13l-.07-.24-.19-.19-.33-.09-.27.08-.22.22-.13.25Z" />
                                            <path
                                                d="M502.46,794.83h-.2a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.28.28,0,0,1-.13-.2l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.38.38,0,0,1,.17-.12l.41-.1h.39l.48.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.23.06-.2.26,0,.3.39-.1h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.57a.29.29,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,502.46,794.83Zm-.13-.61h.06l.51-.29.08-.38-.08-.29-.18-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M504.31,794.83a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.61,0v2A.3.3,0,0,1,504.31,794.83Z" />
                                            <path
                                                d="M505.84,794.83a.3.3,0,0,1-.31-.3V793.1l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,505.84,794.83Z" />
                                            <path
                                                d="M507.38,794.83a.3.3,0,0,1-.31-.3V793.1l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.27.27,0,0,1,.17-.06H507a.27.27,0,0,1,.17.06l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,507.38,794.83Z" />
                                            <path
                                                d="M510.34,794.83H508.4a.3.3,0,0,1-.28-.18.3.3,0,0,1,.06-.34l1.44-1.43.24-.34.07-.21v-.17l-.15-.23-.2-.06h-.41l-.25.11-.11.18v.12a.31.31,0,0,1-.62,0v-.21a.27.27,0,0,1,.06-.17l.34-.45a.42.42,0,0,1,.12-.08l.31-.1.1,0h.51l.09,0,.31.1a.25.25,0,0,1,.12.08l.1.1.25.35a.34.34,0,0,1,.05.17v.31a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,510.34,794.83Z" />
                                            <path
                                                d="M517.3,795l-.48-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.49.49,0,0,1,0-.12v-.66l.1-.76a.39.39,0,0,1,.06-.15l.31-.41a.53.53,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.28.33-.16a.22.22,0,0,1,.13,0h.11a.22.22,0,0,1,.13,0l.41.2a.24.24,0,0,1,.08.06l.31.31.06.07.2.41a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.69.33.08.35-.07.14-.21.14-.29-.14-.28-.24-.23-.28-.14-.27.14-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M520.17,795l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.23.23,0,0,1-.07-.1l-.21-.51v0h0s0,0,0-.09v-.7s0-.06,0-.09l.21-.72.22-.46a.33.33,0,0,1,.16-.15l.52-.2.11,0h.2l.12,0,.51.2a.29.29,0,0,1,.16.15l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l-.05-.1-.43-.14-.35.14-.15.31-.07.24.4-.15a.2.2,0,0,1,.11,0h.1a.23.23,0,0,1,.14,0l.41.2a.24.24,0,0,1,.08.06l.31.31a.37.37,0,0,1,.08.14l.11.58-.11.49a.64.64,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.32.08.28-.07.19-.19.08-.33-.08-.28-.21-.21-.29-.15-.35.14-.28.48.13.33Z" />
                                            <path
                                                d="M522.11,795a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,522.11,795Z" />
                                            <path
                                                d="M523.65,795a.31.31,0,0,1-.31-.31V793.4l-.06-.27-.09,0h-.31l-.17.06-.36.44a.29.29,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.29.29,0,0,1,.21.23l.1.51v1.39A.31.31,0,0,1,523.65,795Z" />
                                            <path
                                                d="M525.19,795a.31.31,0,0,1-.31-.31V793.4l-.06-.27-.09,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.09,0,.31.1a.3.3,0,0,1,.2.23l.11.51v1.39A.31.31,0,0,1,525.19,795Z" />
                                            <path
                                                d="M528.26,795h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.32-.46v-.19l0-.14-.09,0-.08,0-.12-.12H527l-.23.15-.07.26a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.1-.1.36-.24a.31.31,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.31.31,0,0,1,.15.17l.1.31a.36.36,0,0,1,0,.1v.31a.31.31,0,0,1,0,.13l-.11.21-.33.45-.94.95h1.31a.3.3,0,0,1,.3.3A.31.31,0,0,1,528.26,795Z" />
                                            <path
                                                d="M573.9,796l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.24.24,0,0,1-.07-.12l-.21-.61h0a.31.31,0,0,1,0-.1v-.71a.25.25,0,0,1,0-.08l.2-.72a.47.47,0,0,1,.05-.1l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,1,1-.59.19l0-.14-.34-.06h-.15l-.22.07-.21.28-.09.29h0l.59-.12.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.28-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08-.27.08-.22.21-.12.25.14.43Z" />
                                            <path
                                                d="M576.87,796h-.2l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.45.45,0,0,1,.17-.11l.41-.1H577l.49.11a.29.29,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.23.07-.19.26,0,.29.39-.1h.28l.49.12a.29.29,0,0,1,.14.08l.31.3a.36.36,0,0,1,.08.15l.1.41v.28l-.11.48a.34.34,0,0,1-.13.18l-.31.2-.44.23A.32.32,0,0,1,576.87,796Zm-.45-.69.32.09h0l.53-.29.07-.3v-.13l-.06-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M578.72,796a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,578.72,796Z" />
                                            <path
                                                d="M580.25,796a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,580.25,796Z" />
                                            <path
                                                d="M581.79,796a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.36.37A.31.31,0,0,1,580,794l.41-.41.36-.24a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.21a.27.27,0,0,1,.13.18l.1.41v1.5A.3.3,0,0,1,581.79,796Z" />
                                            <path
                                                d="M584.75,796h-1.94a.31.31,0,0,1-.22-.52L584,794l.24-.33.07-.21v-.17l-.15-.23L584,793h-.41l-.25.12-.11.18v.11a.31.31,0,1,1-.62,0v-.2a.27.27,0,0,1,.06-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.11h.7l.31.11a.24.24,0,0,1,.12.07l.1.1.25.36a.34.34,0,0,1,.05.17v.3a.3.3,0,0,1,0,.1l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.2a.3.3,0,0,1,.31.3A.31.31,0,0,1,584.75,796Z" />
                                            <path
                                                d="M591.61,796.37h-.1a.35.35,0,0,1-.14,0l-.41-.21-.08,0-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.48.48,0,0,1,.11-.09l.41-.2a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.31.31,0,0,1,.16.18l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l-.07-.18-.23-.12h-.16l-.28.14-.21.29L591,794l.57-.11.57.11a.39.39,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.26.26,0,0,1-.14.11l-.51.21Zm-.33-.76.29.14.35-.14.15-.23.15-.29-.28-.49-.39-.08-.29.08-.19.19-.07.27.07.34Z" />
                                            <path
                                                d="M594.38,796.27l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.61.61,0,0,1-.07-.1l-.2-.51v0h0a.31.31,0,0,1,0-.1v-.71a.22.22,0,0,1,0-.08l.2-.72,0-.1.31-.41a.48.48,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.2a.2.2,0,0,1,.11,0l.52.2a.32.32,0,0,1,.17.19l.11.31a.31.31,0,1,1-.59.19l0-.17-.4-.13-.28.14-.23.31-.08.29.38-.2a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.4.21a.16.16,0,0,1,.08.06l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.32.32,0,0,1-.14.08Zm-.26-.69.33.08.28-.08.19-.19.08-.32-.08-.28-.21-.21-.28-.14-.28.14-.24.23-.12.24.13.33Z" />
                                            <path
                                                d="M596.32,796.27A.31.31,0,0,1,596,796V794a.31.31,0,0,1,.62,0V796A.31.31,0,0,1,596.32,796.27Z" />
                                            <path
                                                d="M597.86,796.27a.31.31,0,0,1-.31-.31v-1.33l-.06-.28-.09,0h-.31l-.18.06-.35.44a.3.3,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.11.51V796A.3.3,0,0,1,597.86,796.27Z" />
                                            <path
                                                d="M599.49,796.27a.3.3,0,0,1-.3-.31v-1.27l-.13-.32-.13,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.11h.6l.3.11a.29.29,0,0,1,.19.17l.21.52a.36.36,0,0,1,0,.11V796A.31.31,0,0,1,599.49,796.27Z" />
                                            <path
                                                d="M602.46,796.27h-2.05a.3.3,0,0,1-.28-.2.28.28,0,0,1,.08-.33l1.4-1.31.34-.59v-.18l-.05-.14-.09,0a.21.21,0,0,1-.08-.06l-.11-.11h-.4l-.23.15-.06.26a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.75.75,0,0,1,.07-.12l.11-.1.35-.24a.26.26,0,0,1,.17,0h.62a.27.27,0,0,1,.21.09l.17.17.16.07a.4.4,0,0,1,.16.18l.1.31a.31.31,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.21-.32.53-.05.07-.86.79h1.26a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M609.42,796.78l-.48-.11a.27.27,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.17l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.66a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.3a.32.32,0,0,1-.09.43.3.3,0,0,1-.42-.09l-.14-.2-.3-.08h-.23l-.21.06-.21.36,0,.2.39-.1h.28l.48.11a.42.42,0,0,1,.14.09l.31.3a.28.28,0,0,1,.08.15l.1.4v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Zm-.25-.69.33.09h.13l.25-.07.18-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M612.29,796.78l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.17l-.1-.6a.21.21,0,0,1,0-.11v-.67l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.28.28,0,0,1,.21.2l.11.31a.31.31,0,1,1-.59.19l0-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.48.11a.38.38,0,0,1,.15.09l.3.3a.21.21,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.3.31a.36.36,0,0,1-.15.08Zm-.26-.69.33.09.28-.08.21-.22.15-.36-.15-.3-.21-.21-.33-.08L612,795l-.19.19-.07.27.08.44Z" />
                                            <path
                                                d="M614.23,796.78a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,614.23,796.78Z" />
                                            <path
                                                d="M615.87,796.78a.31.31,0,0,1-.31-.29l-.15-1.62-.1,0H615l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.09,0,.31.1a.28.28,0,0,1,.2.22l.11.41.11,1.48a.31.31,0,0,1-.29.33Z" />
                                            <path
                                                d="M617.4,796.78a.3.3,0,0,1-.3-.31v-1.36l-.18-.28h-.36l-.14.07-.46.38a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.51-.41.26-.14a.31.31,0,0,1,.13,0H617a.31.31,0,0,1,.13,0l.21.11a.27.27,0,0,1,.13.13l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,617.4,796.78Z" />
                                            <path
                                                d="M620.37,796.78h-2a.3.3,0,0,1-.29-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.22v-.18l-.11-.23-.14-.05h-.5l-.09.05-.18.23v.13a.31.31,0,1,1-.62,0V794a.33.33,0,0,1,0-.14l.1-.21a.21.21,0,0,1,.06-.08l.2-.2.08-.06.2-.1a.35.35,0,0,1,.14,0h.71l.31.11a.3.3,0,0,1,.18.15l.2.41a.33.33,0,0,1,0,.14v.3a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.93.95h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,620.37,796.78Z" />
                                            <path
                                                d="M627.44,797.09h-.21a.25.25,0,0,1-.14,0l-.41-.2a.21.21,0,0,1-.08-.06l-.2-.2-.08-.12-.2-.62h0a.29.29,0,0,1,0-.09V795a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.2-.16l.41-.11h.38l.48.12a.26.26,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.19,0-.15.29-.07.26.34-.08h.28l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.22.22,0,0,1-.08.14l-.31.31a.16.16,0,0,1-.08.06l-.41.2A.22.22,0,0,1,627.44,797.09Zm-.14-.62h.06l.3-.15.21-.21.09-.33-.08-.27-.19-.19-.33-.08h-.13l-.22.07-.27.47.14.42.12.12Z" />
                                            <path
                                                d="M630.3,797.09h-.2a.23.23,0,0,1-.14,0l-.41-.2a.16.16,0,0,1-.08-.06l-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12V795l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.23l-.23.06-.2.26,0,.3.39-.1h.28l.49.11a.38.38,0,0,1,.18.13l.2.31.22.44a.23.23,0,0,1,0,.14v.1a.25.25,0,0,1,0,.14l-.2.41-.22.34a.29.29,0,0,1-.12.1l-.41.2A.23.23,0,0,1,630.3,797.09Zm-.13-.62h.06l.27-.13.16-.24.14-.29-.28-.5-.29-.07h-.13l-.25.07-.19.19-.07.28.07.34.21.2Z" />
                                            <path
                                                d="M632.14,797.09a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,632.14,797.09Z" />
                                            <path
                                                d="M633.68,797.09a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.26l-.52.52a.3.3,0,1,1-.43-.43l.61-.61a.31.31,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.2.2.06.08.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,633.68,797.09Z" />
                                            <path
                                                d="M635.21,797.09a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.35-.24a.29.29,0,0,1,.18-.05h.4a.29.29,0,0,1,.18.05l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,635.21,797.09Z" />
                                            <path
                                                d="M638.18,797.09h-1.94a.32.32,0,0,1-.28-.19.31.31,0,0,1,0-.33l1.33-1.43.43-.6v-.12l-.21-.29-.18-.11h-.33l-.36.21,0,.2a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.2-.1.27-.19a.34.34,0,0,1,.17-.05h.52a.34.34,0,0,1,.17.05l.45.35.25.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.53.73-.87.94h1.24a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M535.22,795.35l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.38.38,0,0,1-.08-.17l-.11-.61v-.77l.11-.66a.21.21,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.23l-.21.06-.22.35,0,.21.38-.1h.28l.48.11a.36.36,0,0,1,.19.13l.2.31.22.44a.33.33,0,0,1,0,.14v.2a.33.33,0,0,1,0,.14l-.2.41-.22.34a.36.36,0,0,1-.19.13l-.41.1Zm-.26-.69.33.08h.13l.22-.06.14-.21.15-.37-.29-.52-.29-.07h-.13l-.25.07-.19.19-.07.28.07.44Z" />
                                            <path
                                                d="M538.08,795.35l-.48-.11a.28.28,0,0,1-.14-.09l-.31-.3a.32.32,0,0,1-.09-.17l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.66a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.48.12a.3.3,0,0,1,.22.2l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.21.06-.21.35,0,.21.56-.11.49.11a.39.39,0,0,1,.14.08l.31.31a.22.22,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.35.35,0,0,1,0,.08l-.31.3a.42.42,0,0,1-.14.09Zm-.25-.69.33.08.27-.08.22-.21.15-.36-.15-.3-.21-.21-.33-.08-.28.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M540,795.35a.31.31,0,0,1-.31-.31V793.1a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31V795A.3.3,0,0,1,540,795.35Z" />
                                            <path
                                                d="M541.56,795.35a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41V795A.31.31,0,0,1,541.56,795.35Z" />
                                            <path
                                                d="M543.2,795.35a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14-.05h-.29l-.14.07-.46.38a.31.31,0,0,1-.38-.48l.51-.41.26-.14a.32.32,0,0,1,.14,0h.5l.31.11a.3.3,0,0,1,.18.15l.2.41a.33.33,0,0,1,0,.14V795A.31.31,0,0,1,543.2,795.35Z" />
                                            <path
                                                d="M546.17,795.35h-2a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.24-.34.08-.21v-.18l-.12-.23-.14,0h-.51l-.14,0-.12.23v.13a.31.31,0,0,1-.61,0v-.21a.31.31,0,0,1,0-.13l.21-.41a.3.3,0,0,1,.17-.16l.31-.1.1,0h.61l.1,0,.31.1a.3.3,0,0,1,.17.16l.21.41a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M553.23,795.76H553a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.38.38,0,0,1-.14-.21l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.12a.31.31,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07H553l-.23.06-.2.26,0,.3.39-.1h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.12.59-.12.48a.25.25,0,0,1-.08.14l-.3.31-.08.06-.41.2A.25.25,0,0,1,553.23,795.76Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.08-.27-.19-.19-.32-.09H553l-.25.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M556,795.76h-.1a.25.25,0,0,1-.14,0l-.41-.2-.08-.06-.3-.31a.29.29,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.3.3,0,0,1,.22.2l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.15-.25-.06h-.23l-.23.06-.19.26-.05.3.57-.11.57.11a.3.3,0,0,1,.2.13l.21.31.22.44a.32.32,0,0,1,0,.14v.1a.35.35,0,0,1,0,.14l-.21.4-.22.34a.24.24,0,0,1-.14.12l-.51.2Zm-.33-.77.29.15.35-.15.15-.22.15-.29-.28-.49-.39-.08-.29.07-.19.19-.07.28.08.33Z" />
                                            <path
                                                d="M557.84,795.76a.31.31,0,0,1-.31-.31V793.4a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2.05A.3.3,0,0,1,557.84,795.76Z" />
                                            <path
                                                d="M559.47,795.76a.3.3,0,0,1-.3-.31v-1.36l-.23-.38h-.26l-.12.11-.53.44a.31.31,0,0,1-.43,0,.3.3,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.51a.31.31,0,0,1,.22.09l.21.2a.22.22,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,559.47,795.76Z" />
                                            <path
                                                d="M561,795.76a.31.31,0,0,1-.31-.31V794l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.32.32,0,0,1,.12.18l.11.41v1.51A.31.31,0,0,1,561,795.76Z" />
                                            <path
                                                d="M564,795.76h-2a.32.32,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.33-1.43.43-.6v-.12l-.22-.29-.18-.11h-.4l-.11.11-.08.06-.09,0,0,.2a.31.31,0,0,1-.31.3.3.3,0,0,1-.3-.3V793a.28.28,0,0,1,0-.09l.11-.31a.3.3,0,0,1,.15-.18l.16-.08.17-.17a.29.29,0,0,1,.22-.09h.61a.34.34,0,0,1,.17,0l.46.35.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.52.73-.87.94H564a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M534.7,828.2h-.1a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.34.34,0,0,1-.13-.2l-.1-.61a.2.2,0,0,1,0-.11v-.67l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l0-.14-.25-.07h-.23l-.22.07-.2.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.31.05.07.21.41a.35.35,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.26.26,0,0,1-.11.14l-.31.21-.44.22A.32.32,0,0,1,534.7,828.2Zm-.54-.9.2.14.29.14.52-.3.14-.35-.14-.29-.21-.21-.33-.08-.28.08-.19.19-.07.27Z" />
                                            <path
                                                d="M537.57,828.2h-.1l-.12,0-.51-.2-.1-.07-.21-.21a.24.24,0,0,1-.07-.12l-.21-.61h0a.28.28,0,0,1,0-.09v-.72a.25.25,0,0,1,0-.08l.21-.72.22-.46a.31.31,0,0,1,.22-.16l.51-.1h.26l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.13l-.31.07-.13.28-.08.26.62-.09.48.11a.28.28,0,0,1,.15.08l.3.31a.22.22,0,0,1,.08.14l.12.58-.11.58a.33.33,0,0,1-.13.19l-.31.21-.44.22A.35.35,0,0,1,537.57,828.2Zm-.44-.77.38.15.5-.28.08-.39-.08-.29-.19-.19-.33-.08-.35.08-.26.46.14.43Z" />
                                            <path
                                                d="M539.41,828.2a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,539.41,828.2Z" />
                                            <path
                                                d="M541,828.2a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.29.29,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.21a.27.27,0,0,1,.13.18l.11.41v1.5A.3.3,0,0,1,541,828.2Z" />
                                            <path
                                                d="M542.48,828.2a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,542.48,828.2Z" />
                                            <path
                                                d="M545.45,828.2h-1.94a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l0-.14-.24-.12h-.49l-.24.12-.11.18v.11a.31.31,0,1,1-.62,0v-.2a.34.34,0,0,1,.05-.17l.35-.46a.24.24,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.62a.31.31,0,0,1,.13,0l.41.21a.3.3,0,0,1,.16.17l.1.31a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94h1.2a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M552.41,828.51l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.32.32,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.11-.76a.42.42,0,0,1,.06-.14l.31-.41a.45.45,0,0,1,.1-.09l.41-.2a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.2a.35.35,0,0,1,.13.14l.1.21a.3.3,0,0,1-.13.41.32.32,0,0,1-.42-.14l-.05-.11-.25-.13h-.17l-.28.14L552,826l0,.28.32-.16a.25.25,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.12.1l.2.31.23.44a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.18.13l-.41.1Zm-.25-.69.32.08h.14l.21-.06.14-.21.15-.29-.3-.53-.34-.13-.3.15L552,827l-.07.27.08.34Z" />
                                            <path
                                                d="M555.28,828.51l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.24.24,0,0,1,0-.12v-.67l.11-.76a.27.27,0,0,1,0-.14l.31-.41.11-.09.41-.2a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.1a.25.25,0,0,1,.14,0l.41.2.34.22a.33.33,0,0,1,.11.15l.21.51a.36.36,0,0,1,0,.11v.1a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.3.31a.36.36,0,0,1-.15.08Zm-.26-.69.33.08.28-.07.21-.22.15-.29-.14-.35-.23-.15-.29-.14-.28.14-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M557.22,828.51a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,557.22,828.51Z" />
                                            <path
                                                d="M558.76,828.51a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0H558l-.19.07-.36.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.09,0,.31.1a.28.28,0,0,1,.2.22l.1.4v1.51A.3.3,0,0,1,558.76,828.51Z" />
                                            <path
                                                d="M560.39,828.51a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14-.05h-.28l-.14.07L559,827a.31.31,0,0,1-.43,0,.3.3,0,0,1,.05-.43l.51-.41.26-.14a.31.31,0,0,1,.13,0h.41l.1,0,.31.1a.28.28,0,0,1,.17.15l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,560.39,828.51Z" />
                                            <path
                                                d="M563.36,828.51h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.32-.11-.24-.18-.12h-.43l-.24.15-.06.26a.31.31,0,0,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.31a.75.75,0,0,1,.07-.12l.11-.1.35-.24a.26.26,0,0,1,.17-.05h.62a.26.26,0,0,1,.17.05l.45.34a.42.42,0,0,1,.08.12l.1.31a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08L563,827l-.93.94h1.3a.31.31,0,1,1,0,.62Z" />
                                            <text class="cls-10" transform="translate(515.63 787.81)">B41</text>
                                            <text class="cls-10" transform="translate(645.39 789.83)">B34</text>
                                            <text class="cls-10" transform="translate(662.69 789.32)">B33</text>
                                            <text class="cls-10" transform="translate(680.5 789.11)">B32</text>
                                            <text class="cls-10" transform="translate(698.92 789.32)">B31</text>
                                            <text class="cls-10" transform="translate(533.79 787.25)">B40</text>
                                            <text class="cls-10" transform="translate(551.6 787.04)">B39</text>
                                            <text class="cls-10" transform="translate(573.2 787.13)">B38</text>
                                            <text class="cls-10" transform="translate(591.47 787.34)">B37</text>
                                            <text class="cls-10" transform="translate(608.99 787.81)">B36</text>
                                            <text class="cls-10" transform="translate(627.38 788.12)">B35</text>
                                            <text class="cls-10" transform="translate(499.36 787.04)">B42</text>
                                            <text class="cls-10" transform="translate(445.05 818.53)">B52</text>
                                            <text class="cls-10" transform="translate(462.35 818.43)">B53</text>
                                            <text class="cls-10" transform="translate(480.17 818.12)">B54</text>
                                            <text class="cls-10" transform="translate(497.66 818.53)">B55</text>
                                            <text class="cls-10" transform="translate(514.76 818.09)">B56</text>
                                            <text class="cls-10" transform="translate(533.72 818.27)">B57</text>
                                            <text class="cls-10" transform="translate(551.54 817.97)">B58</text>
                                            <text class="cls-10" transform="translate(572.23 819.28)">B59</text>
                                            <text class="cls-10" transform="translate(589.32 818.84)">B60</text>
                                            <text class="cls-10" transform="translate(607.03 819.29)">B61</text>
                                            <text class="cls-10" transform="translate(624.85 818.98)">B62</text>
                                            <text class="cls-10" transform="translate(643.36 819.28)">B63</text>
                                            <text class="cls-10" transform="translate(661.17 819.39)">B64</text>
                                            <text class="cls-10" transform="translate(679.7 819.22)">B65</text>
                                            <text class="cls-10" transform="translate(697.51 819.33)">B66</text>
                                            <text class="cls-10" transform="translate(480.99 786.35)">B43</text>
                                            <text class="cls-10" transform="translate(462.77 785.29)">B44</text>
                                            <text class="cls-10" transform="translate(445.16 785.6)">B45</text>
                                            <circle class="cls-13" cx="326.29" cy="400.82" r="2.88" />
                                            <path class="cls-14"
                                                d="M322.29,400.47l1.2,2.23c.17.31,1,1.45.85,1.68s-.8.43-1,.52L321.26,406l-12,6.45-2.15,1.16c-.19.1-.83.59-1.05.56s-.7-1.22-.84-1.49l-.81-1.5c-.07-.12-.53-.77-.49-.9a4.57,4.57,0,0,1,.7-.35l1.88-1,5.78-3.11,6.83-3.67c.4-.22,3-1.88,3.24-1.6.45.46,1.15-.24.71-.71-.89-.93-2.45.36-3.31.82l-6.29,3.39-6.69,3.6a28.74,28.74,0,0,0-3.33,1.79c-.85.61-.36,1.39,0,2.1.53,1,1,2,1.61,3,.78,1.23,1.91.29,2.84-.21l12.85-6.91a38.22,38.22,0,0,0,4.09-2.2c.92-.65.31-1.51-.09-2.26l-1.62-3C322.85,399.39,322,399.9,322.29,400.47Z" />
                                            <rect class="cls-14" x="305.8" y="409.32" width="1.1" height="4.35"
                                                rx="0.27" transform="translate(89.08 876.21) rotate(-118.27)" />
                                            <rect class="cls-14" x="308.9" y="409.29" width="1.08" height="1.08"
                                                rx="0.27" transform="translate(95.1 876.48) rotate(-118.27)" />
                                            <circle class="cls-15" cx="302.08" cy="413.84" r="2.88" />
                                            <polygon class="cls-1"
                                                points="523.12 944.51 522.52 976.6 504.81 976.4 505.48 944.14 523.12 944.51"
                                                id="C55" />
                                            <polygon class="cls-1"
                                                points="541.15 944.87 540.55 976.96 522.83 976.76 523.5 944.5 541.15 944.87"
                                                id="C54" />
                                            <polygon class="cls-1"
                                                points="558.89 945.16 558.3 977.25 540.88 977.05 541.53 944.79 558.89 945.16"
                                                id="C53" />
                                            <rect class="cls-1" x="562.05" y="945.45" width="17.42" height="32.11"
                                                transform="translate(16.63 -9.68) rotate(0.99)" id="C52" />
                                            <rect class="cls-1" x="580.02" y="945.76" width="17.42" height="32.11"
                                                transform="translate(16.64 -9.99) rotate(0.99)" id="C51" />
                                            <rect class="cls-1" x="597.83" y="946.04" width="17.42" height="32.11"
                                                transform="translate(16.65 -10.3) rotate(0.99)" id="C50" />
                                            <polygon class="cls-1"
                                                points="522.4 977.28 521.8 1009.37 504.09 1009.17 504.76 976.91 522.4 977.28"
                                                id="ASOKA27" />
                                            <polygon class="cls-1"
                                                points="540.43 977.64 539.83 1009.73 522.11 1009.53 522.78 977.27 540.43 977.64"
                                                id="ASOKA26" />
                                            <polygon class="cls-1"
                                                points="558.17 977.93 557.59 1010.02 540.16 1009.82 540.82 977.55 558.17 977.93"
                                                id="ASOKA25" />
                                            <rect class="cls-1" x="561.33" y="978.21" width="17.42" height="32.11"
                                                transform="translate(17.2 -9.66) rotate(0.99)" id="ASOKA24" />
                                            <rect class="cls-1" x="579.3" y="978.52" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 17.2, -9.97)" id="ASOKA23" />
                                            <rect class="cls-1" x="597.12" y="978.8" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 17.21, -10.28)" id="ASOKA22" />
                                            <rect class="cls-1" x="615.52" y="946.36" width="17.42" height="32.11"
                                                transform="translate(16.65 -10.6) rotate(0.99)" id="C49" />
                                            <rect class="cls-1" x="614.8" y="979.12" width="17.42" height="32.11"
                                                transform="translate(17.22 -10.58) rotate(0.99)" id="ASOKA21" />
                                            <rect class="cls-1" x="633.31" y="946.71" width="17.42" height="32.11"
                                                transform="translate(16.66 -10.91) rotate(0.99)" id="C48" />
                                            <rect class="cls-1" x="632.59" y="979.48" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 17.23, -10.89)" id="ASOKA20" />
                                            <rect class="cls-1" x="650.99" y="947.03" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 16.67, -11.21)" id="C47" />
                                            <rect class="cls-1" x="650.28" y="979.8" width="17.42" height="32.11"
                                                transform="translate(17.24 -11.19) rotate(0.99)" id="ASOKA19" />
                                            <rect class="cls-1" x="672.02" y="947.44" width="17.42" height="32.11"
                                                transform="translate(16.68 -11.57) rotate(0.99)" id="C46" />
                                            <rect class="cls-1" x="689.99" y="947.75" width="17.42" height="32.11"
                                                transform="translate(16.69 -11.88) rotate(0.99)" id="C45" />
                                            <rect class="cls-1" x="707.8" y="948.03" width="17.42" height="32.11"
                                                transform="translate(16.7 -12.19) rotate(0.99)" id="C44" />
                                            <rect class="cls-1" x="671.3" y="980.2" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 17.25, -11.55)" id="ASOKA18" />
                                            <rect class="cls-1" x="689.27" y="980.51" width="17.42" height="32.11"
                                                transform="translate(17.25 -11.86) rotate(0.99)" id="ASOKA17" />
                                            <rect class="cls-1" x="707.08" y="980.79" width="17.42" height="32.11"
                                                transform="translate(17.26 -12.17) rotate(0.99)" id="ASOKA16" />
                                            <rect class="cls-1" x="725.48" y="948.35" width="17.42" height="32.11"
                                                transform="translate(16.71 -12.49) rotate(0.99)" id="C43" />
                                            <rect class="cls-1" x="724.76" y="981.11" width="17.42" height="32.11"
                                                transform="translate(17.27 -12.47) rotate(0.99)" id="ASOKA15" />
                                            <rect class="cls-1" x="743.28" y="948.7" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 16.71, -12.8)" id="C42" />
                                            <rect class="cls-1" x="742.56" y="981.47" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 17.28, -12.78)" id="ASOKA14" />
                                            <rect class="cls-1" x="760.96" y="949.02" width="17.42" height="32.11"
                                                transform="matrix(1, 0.02, -0.02, 1, 16.72, -13.1)" id="C41" />
                                            <rect class="cls-1" x="760.24" y="981.79" width="17.42" height="32.11"
                                                transform="translate(17.29 -13.09) rotate(0.99)" id="ASOKA13" />
                                            <path
                                                d="M548.93,992.62h-1.64a.31.31,0,0,1-.28-.18.29.29,0,0,1,0-.32l1.12-1.33.28-.47.06-.2V990a.24.24,0,0,1-.06-.08l0-.09-.14,0H548l-.14,0-.05.09a.16.16,0,0,1-.06.08v.09a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,.09-.22l.07-.07.08-.16a.31.31,0,0,1,.17-.15l.31-.1.1,0h.41l.09,0,.31.1a.31.31,0,0,1,.18.16l.15.22a.36.36,0,0,1,.09.22v.31a.29.29,0,0,1,0,.09l-.1.31-.34.57L548,992h1a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M550.16,992.62l-.49-.11a.32.32,0,0,1-.2-.16l-.2-.41a.3.3,0,0,1,.14-.41.3.3,0,0,1,.41.14l.14.28.27.07h.24l.25-.07.08-.08.08-.42v-.25l-.08-.28-.11-.17-.3-.07h-.23l-.2.05,0,.09a.3.3,0,0,1-.36.15.31.31,0,0,1-.22-.32l.1-1.23a.32.32,0,0,1,.31-.28H551a.31.31,0,0,1,0,.62h-1l0,.33.08,0h.39l.48.12a.28.28,0,0,1,.18.12l.21.31a1,1,0,0,1,0,.1l.1.41v.38l-.11.57a.35.35,0,0,1-.08.16l-.21.2a.29.29,0,0,1-.14.08l-.41.1Z" />
                                            <path
                                                d="M569.55,993H568a.31.31,0,0,1-.28-.18.29.29,0,0,1,0-.32l1.18-1.38.08-.34.09-.2v-.19l-.08-.26s0,0,0-.07l0,0h-.26l-.22.22-.11.19a.31.31,0,1,1-.62,0v-.1a.27.27,0,0,1,.06-.17l.34-.45.21-.21a.27.27,0,0,1,.21-.09h.52a.27.27,0,0,1,.21.09l.21.21a.31.31,0,0,1,.09.21V990l.08.26a.44.44,0,0,1,0,.1v.31a.35.35,0,0,1,0,.14l-.11.2-.07.35a.47.47,0,0,1-.07.12l-.79.93h.86a.31.31,0,0,1,.31.31A.3.3,0,0,1,569.55,993Z" />
                                            <path
                                                d="M571.5,993a.3.3,0,0,1-.31-.3V992h-.92a.32.32,0,0,1-.27-.16.31.31,0,0,1,0-.31l1.23-2a.31.31,0,0,1,.57.17v1.64h.2a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-.2v.72A.3.3,0,0,1,571.5,993Zm-.67-1.63h.36v-.58Z" />
                                            <path
                                                d="M587.57,993.55H586a.3.3,0,0,1-.27-.16.33.33,0,0,1,0-.32l1.31-1.81.07-.21v-.21l0-.14-.23-.12h-.26l-.11.07-.07.19V991a.31.31,0,1,1-.61,0v-.2a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11.08,0,.21-.11a.31.31,0,0,1,.13,0H587a.32.32,0,0,1,.14,0l.41.21a.32.32,0,0,1,.16.18l.1.3a.34.34,0,0,1,0,.1v.31a.28.28,0,0,1,0,.09l-.1.31,0,.09-1,1.35h.94a.31.31,0,0,1,.31.31A.3.3,0,0,1,587.57,993.55Z" />
                                            <path
                                                d="M589.1,993.55h-.2a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.1-.1a.37.37,0,0,1-.07-.12l-.11-.31a.31.31,0,0,1,.2-.39.31.31,0,0,1,.39.2l.09.25.36.15.3-.15.1-.1.09-.43v-.19l-.11-.24-.18-.12H589a.32.32,0,0,1-.27-.16.31.31,0,0,1,0-.31l.42-.66h-.67a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1.23a.32.32,0,0,1,.27.16.31.31,0,0,1,0,.31l-.47.73.42.32a.42.42,0,0,1,.08.12l.1.31a.3.3,0,0,1,0,.1v.31l-.11.57a.24.24,0,0,1-.09.15l-.2.21-.08.06-.41.2A.32.32,0,0,1,589.1,993.55Z" />
                                            <path
                                                d="M605.58,994.36h-1.53a.3.3,0,0,1-.28-.17.31.31,0,0,1,0-.32l1-1.33.17-.36.17-.26v-.09l-.11-.12a.24.24,0,0,1-.06-.08l-.1-.13-.42,0,0,.05v.23a.31.31,0,1,1-.62,0v-.3a.32.32,0,0,1,0-.14l.11-.21a.33.33,0,0,1,.13-.13l.21-.1a.23.23,0,0,1,.14,0H605a.25.25,0,0,1,.14,0l.2.1a.29.29,0,0,1,.14.13l.08.16.17.17a.31.31,0,0,1,.09.22V992a.34.34,0,0,1,0,.17l-.21.31-.18.37-.68.89h.91a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M607.83,994.36H606.3a.31.31,0,0,1-.28-.17.29.29,0,0,1,0-.32l1.29-1.7.07-.21v-.19l0-.09-.23-.18h-.29l-.15.07v.23a.31.31,0,1,1-.62,0v-.3a.33.33,0,0,1,0-.14l.1-.21a.34.34,0,0,1,.18-.15l.3-.1.1,0h.41a.23.23,0,0,1,.14,0l.2.1.08.05.21.21a.22.22,0,0,1,0,.08l.11.2a.35.35,0,0,1,0,.14V992a.44.44,0,0,1,0,.1l-.1.3a.36.36,0,0,1,0,.09l-1,1.25h.91a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M624.31,994.83h-1.53a.31.31,0,0,1-.24-.5l1.23-1.44.13-.28V992l-.19-.14h-.22l-.25.17,0,.11v.13a.31.31,0,1,1-.62,0v-.2a.35.35,0,0,1,0-.14l.11-.2a.16.16,0,0,1,.06-.08l.1-.1.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.24.16a.3.3,0,0,1,.31.3v.92a.32.32,0,0,1,0,.14l-.21.41-.84,1h.87a.31.31,0,0,1,.31.31A.3.3,0,0,1,624.31,994.83Z" />
                                            <path
                                                d="M626,994.83a.3.3,0,0,1-.31-.3v-2.22l-.06,0a.3.3,0,1,1-.28-.54l.14-.08.26-.35a.31.31,0,0,1,.35-.1.31.31,0,0,1,.21.29v3A.3.3,0,0,1,626,994.83Z" />
                                            <path
                                                d="M642.17,994.73h-1.63a.31.31,0,0,1-.24-.51l1.18-1.37.18-.73-.08-.26a.3.3,0,0,1,0-.1l-.39,0-.12.38a.31.31,0,1,1-.62,0v-.1a.36.36,0,0,1,0-.1l.22-.55a.32.32,0,0,1,.14-.14l.2-.1a.35.35,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.31.31,0,0,1,.17.28v.15l.09.26a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.2.69a.31.31,0,0,1-.06.13l-.8.93h1a.3.3,0,0,1,.31.3A.31.31,0,0,1,642.17,994.73Z" />
                                            <path
                                                d="M643.81,994.73h-.31l-.09,0-.31-.1a.31.31,0,0,1-.19-.18l-.2-.51-.12-.78v-.46l.11-.66.22-.58a.29.29,0,0,1,.19-.17l.31-.11h.5l.31.11a.28.28,0,0,1,.18.17l.21.51.12.68v.46l-.1.76-.23.58a.29.29,0,0,1-.18.18l-.31.1A.18.18,0,0,1,643.81,994.73Zm-.26-.61h.21l.13,0,.15-.38.08-.64v-.37l-.1-.56-.13-.32-.13,0h-.21l-.12,0-.15.38-.09.55v.36l.1.68.13.3Z" />
                                            <path
                                                d="M658.27,994.42a.3.3,0,0,1-.31-.3v-2.24l-.21.07a.3.3,0,0,1-.39-.19.31.31,0,0,1,.2-.39l.2-.07.25-.41a.3.3,0,0,1,.34-.14.32.32,0,0,1,.23.3v3.07A.3.3,0,0,1,658.27,994.42Z" />
                                            <path
                                                d="M660.42,994.42h-.21a.31.31,0,0,1-.13,0l-.41-.2a.31.31,0,0,1-.16-.18l-.1-.31a.32.32,0,0,1,.2-.39.3.3,0,0,1,.38.2l.07.18.27.12.16-.11.14-.29,0-.28-.15,0h-.2l-.49-.11a.29.29,0,0,1-.14-.08l-.2-.2a.26.26,0,0,1-.09-.16l-.11-.67.11-.49a.41.41,0,0,1,.05-.09l.2-.31a.29.29,0,0,1,.12-.1l.41-.21a.32.32,0,0,1,.14,0h.1a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.08.08l.21.31a.36.36,0,0,1,0,.11l.1.5a.53.53,0,0,1,0,.13v.66l-.11.76a.29.29,0,0,1,0,.09l-.21.41a.29.29,0,0,1-.1.12l-.31.2A.26.26,0,0,1,660.42,994.42Zm-.36-1.91.3.07.2-.06.09-.09.07-.38-.08-.37-.14-.21-.15-.1-.23.12-.13.19-.09.36v0l.07.36Z" />
                                            <path
                                                d="M678.54,994.68a.31.31,0,0,1-.31-.31v-2.16a.32.32,0,0,1-.32-.08.3.3,0,0,1,0-.43l.41-.41a.3.3,0,0,1,.33-.07.3.3,0,0,1,.19.29v2.86A.3.3,0,0,1,678.54,994.68Z" />
                                            <path
                                                d="M681,994.68h-.41l-.09,0-.31-.1a.24.24,0,0,1-.12-.07l-.21-.21a.22.22,0,0,1-.05-.08l-.11-.2a.35.35,0,0,1,0-.14v-.41a.44.44,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.25-.25-.08-.08-.2-.31a.27.27,0,0,1-.06-.17v-.31a.31.31,0,0,1,.09-.21l.21-.21.08-.06.2-.1a.35.35,0,0,1,.14,0h.61l.31.11a.28.28,0,0,1,.17.15l.11.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.3a.31.31,0,0,1-.13.17l.2.28,0,.08.11.3a.38.38,0,0,1,0,.1v.41a.35.35,0,0,1,0,.14l-.21.41a.31.31,0,0,1-.17.15l-.31.1Zm-.36-.61h.31l.14-.05.12-.23v-.29l-.08-.22-.12-.19-.26-.09-.18.09-.22.22-.06.19v.29l0,.09.12.12Zm-.14-1.88.28.14.28-.12,0-.14v-.21l-.14-.05h-.39l-.17.13V992Z" />
                                            <path
                                                d="M676.87,1001l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.14-.25-.06h-.23l-.22.06-.2.26,0,.29.56-.1.49.11a.29.29,0,0,1,.14.08l.31.31.06.08.2.41a.31.31,0,0,1,0,.13v.21a.35.35,0,0,1,0,.14l-.2.4-.06.08-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.22-.21.15-.36-.15-.3-.21-.22-.33-.08-.28.08-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M679.74,1001l-.57-.1a.35.35,0,0,1-.2-.14l-.2-.3a.2.2,0,0,1,0-.08l-.21-.61h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.21-.71.22-.47a.29.29,0,0,1,.2-.16l.41-.1h.38l.49.11a.38.38,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.2,0-.14.29-.08.26.34-.08h.28l.48.11a.28.28,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.48a.25.25,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08Zm-.33-.68.39.08.29-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08h-.13l-.22.06-.27.48.15.45Z" />
                                            <path
                                                d="M681.68,1001a.29.29,0,0,1-.3-.3v-1.95a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v1.95A.3.3,0,0,1,681.68,1001Z" />
                                            <path
                                                d="M683.22,1001a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.4-.41a.42.42,0,0,1,.12-.08l.31-.1h.6l.31.1a.31.31,0,0,1,.2.22l.11.41v1.51A.3.3,0,0,1,683.22,1001Z" />
                                            <path
                                                d="M684.75,1001a.29.29,0,0,1-.3-.3v-1.44l-.06-.21-.1-.07-.5.14-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.32.32,0,0,1,.12-.08l.74-.21a.34.34,0,0,1,.24,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,684.75,1001Z" />
                                            <path
                                                d="M687.72,1001h-1.94a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33L687,999l.25-.34.07-.21v-.19l0-.09-.11-.12L687,998h-.41l-.14,0,0,.09-.06.08-.11.12v.07a.31.31,0,1,1-.62,0v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.34.34,0,0,1,.18-.15l.31-.1.09,0H687l.1,0,.31.1a.37.37,0,0,1,.12.07l.2.21a.16.16,0,0,1,.06.08l.1.2a.37.37,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,687.72,1001Z" />
                                            <path
                                                d="M656.71,968.53h-.21l-.48-.11-.14-.08-.31-.31a.32.32,0,0,1-.09-.17l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.11a.35.35,0,0,1,.19.12l.2.31a.31.31,0,1,1-.51.34l-.14-.21-.29-.07h-.24l-.22.06-.2.27,0,.29.39-.1h.28l.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.11.49a.36.36,0,0,1-.12.18l-.31.2-.44.23A.35.35,0,0,1,656.71,968.53Zm-.46-.69.33.08h0l.54-.3.07-.29v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.06-.19.2-.06.27.07.44Z" />
                                            <path
                                                d="M659.47,968.53h-.1a.35.35,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.29.29,0,0,1,.18-.11l.41-.11h.38l.48.11a.31.31,0,0,1,.22.2l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.15-.25-.06h-.23l-.23.06-.19.27-.05.29.57-.11.57.11a.34.34,0,0,1,.2.13l.2.31.23.44a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.35.35,0,0,1-.05.08l-.21.2a.23.23,0,0,1-.1.07l-.51.21Zm-.54-.9.2.13.3.15.38-.16.13-.12.15-.36-.29-.51-.39-.08-.29.07-.19.19-.07.28Z" />
                                            <path
                                                d="M661.31,968.53a.3.3,0,0,1-.3-.31v-2.05a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2.05A.31.31,0,0,1,661.31,968.53Z" />
                                            <path
                                                d="M663,968.53a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11h-.19l-.12.12-.53.43a.33.33,0,0,1-.44,0,.31.31,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.41a.26.26,0,0,1,.17,0l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,663,968.53Z" />
                                            <path
                                                d="M664.49,968.53a.31.31,0,0,1-.31-.31v-1.36l-.23-.38h-.19l-.23.15-.36.37a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,664.49,968.53Z" />
                                            <path
                                                d="M667.45,968.53h-1.94a.3.3,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.33-1.43.43-.6v-.12l-.16-.23-.2-.07h-.49l-.23.11-.05.14V966a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.28.28,0,0,1,0-.09l.1-.31a.35.35,0,0,1,.16-.18l.41-.2a.31.31,0,0,1,.13,0h.72l.3.1a.25.25,0,0,1,.12.08l.11.1.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.52.73-.88.94h1.24a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M655.28,1000.67l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.34.34,0,0,1,0-.1v-.57l.11-.76a.21.21,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.23l-.21.06-.22.35,0,.3.33-.17a.32.32,0,0,1,.14,0h.1l.48.11a.32.32,0,0,1,.14.08l.31.31a.24.24,0,0,1,.06.08l.2.41a.33.33,0,0,1,0,.14v.2a.33.33,0,0,1,0,.14l-.2.41a.42.42,0,0,1-.06.08l-.31.3a.25.25,0,0,1-.14.08ZM655,1000l.33.08.28-.08.21-.21.15-.36-.15-.3-.21-.21-.28-.07-.52.28-.06.25.07.44Z" />
                                            <path
                                                d="M658.14,1000.67l-.57-.11a.34.34,0,0,1-.2-.13l-.2-.31a.25.25,0,0,1,0-.07l-.2-.62h0a.36.36,0,0,1,0-.1v-.71a.36.36,0,0,1,0-.1l.41-1.14a.32.32,0,0,1,.23-.19l.51-.1h.27l.48.12a.28.28,0,0,1,.18.12l.21.31a.31.31,0,0,1-.52.34l-.13-.21-.3-.07h-.13l-.29.06-.2.54.59-.09.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32v-.13l-.06-.25-.19-.19-.33-.09-.35.08-.27.47.15.45Z" />
                                            <path
                                                d="M660.09,1000.67a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.3.3.3,0,0,1,.3.3v2A.3.3,0,0,1,660.09,1000.67Z" />
                                            <path
                                                d="M661.62,1000.67a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,661.62,1000.67Z" />
                                            <path
                                                d="M663.16,1000.67a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,663.16,1000.67Z" />
                                            <path
                                                d="M666.12,1000.67h-1.94a.31.31,0,0,1-.22-.53l1.44-1.43.24-.34.07-.21V998l0-.1-.23-.18H665l-.14,0,0,.1a.21.21,0,0,1-.06.08l-.11.11v.08a.31.31,0,0,1-.62,0v-.21a.31.31,0,0,1,.09-.21l.17-.17.08-.16a.35.35,0,0,1,.18-.16l.31-.1.1,0h.61a.33.33,0,0,1,.14,0l.2.1a.16.16,0,0,1,.08.06l.21.2a.22.22,0,0,1,.05.08l.11.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.3a.25.25,0,0,1,0,.09l-.31.41-.94.94h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M748,970l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.21.21,0,0,1-.06-.1l-.21-.51h0v0a.19.19,0,0,1,0-.08V968a.28.28,0,0,1,0-.09l.21-.72a.42.42,0,0,1,0-.1l.31-.4a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.2l.12,0,.51.2a.39.39,0,0,1,.16.15l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l0-.1-.42-.14-.28.14-.23.31-.08.29.38-.19a.33.33,0,0,1,.14,0h.1a.37.37,0,0,1,.14,0l.41.2.34.22a.39.39,0,0,1,.13.2l.11.67-.12.49a.29.29,0,0,1-.08.14l-.31.31a.22.22,0,0,1-.14.08Zm-.26-.69.33.09.28-.08.19-.19.08-.33-.08-.35-.2-.14-.29-.14-.28.14-.24.24-.12.24.13.32Z" />
                                            <path
                                                d="M750.77,970l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.32.32,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12V968l.11-.76a.3.3,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21.08,0,.21.21a.3.3,0,0,1,0,.43.31.31,0,0,1-.44,0l-.16-.17L751,967h-.16l-.28.14-.21.29,0,.28.32-.16a.37.37,0,0,1,.14,0h.2a.33.33,0,0,1,.14,0l.41.2.34.22a.3.3,0,0,1,.13.2l.11.67-.11.49a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.32.09H751l.25-.07.19-.19.09-.33-.08-.35-.21-.14-.37-.15-.51.28-.07.35.08.34Z" />
                                            <path
                                                d="M752.82,970a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,752.82,970Z" />
                                            <path
                                                d="M754.35,970a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,754.35,970Z" />
                                            <path
                                                d="M755.89,970a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.4-.41.12-.07.31-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,755.89,970Z" />
                                            <path
                                                d="M758.86,970h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.36-.65-.22-.28-.18-.12h-.33l-.28.22-.12.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,0-.17l.34-.46.36-.24a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.34.34,0,0,1,0,.17v.2a.34.34,0,0,1,0,.17l-.2.31-.19.38-.06.08-.91.91h1.21a.29.29,0,0,1,.3.3A.3.3,0,0,1,758.86,970Z" />
                                            <path
                                                d="M712.18,969.86l-.48-.11a.39.39,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.11-.5a.56.56,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.33.33,0,0,1,.11-.09l.41-.2a.31.31,0,0,1,.13,0h.31a.32.32,0,0,1,.14,0l.41.2.08.06.2.21a.3.3,0,0,1-.43.43l-.17-.17-.3-.15h-.16L712,967l-.22.29,0,.28.33-.17a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.4.21a.16.16,0,0,1,.08.06l.31.3a.28.28,0,0,1,.08.15l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31a.32.32,0,0,1-.14.08l-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32-.08-.28-.21-.21-.36-.15-.3.15-.22.21-.06.27.07.34Z" />
                                            <path
                                                d="M715.05,969.86l-.48-.11a.36.36,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.28.28,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.48.48,0,0,1,.11-.09l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.13.41.33.33,0,0,1-.42-.14l-.05-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.17a.32.32,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.31.3a.35.35,0,0,1,0,.08l.21.41a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41a.22.22,0,0,1,0,.08l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.32.08.28-.08.22-.21.14-.28-.14-.28-.24-.23-.28-.14-.28.14-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M717,969.86a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,717,969.86Z" />
                                            <path
                                                d="M718.63,969.86a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14-.05h-.31l-.19.07-.36.36a.31.31,0,0,1-.43-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1a.18.18,0,0,1,.1,0h.41a.18.18,0,0,1,.1,0l.3.1a.27.27,0,0,1,.18.15l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,718.63,969.86Z" />
                                            <path
                                                d="M720.17,969.86a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.1.05-.37.38a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.08-.06.21-.1a.32.32,0,0,1,.14,0h.51a.31.31,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,720.17,969.86Z" />
                                            <path
                                                d="M723.14,969.86h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.33.07-.32-.11-.25-.18-.11h-.4l-.11.11a.21.21,0,0,1-.08.06l-.09.05,0,.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.31.31,0,0,1,0-.1l.1-.31a.33.33,0,0,1,.16-.17l.16-.08.17-.17a.27.27,0,0,1,.21-.09h.62a.26.26,0,0,1,.17.05l.46.34a.75.75,0,0,1,.07.12l.1.31a.3.3,0,0,1,0,.1v.2a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1,0,.08l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M693.56,1001.18l-.49-.11a.39.39,0,0,1-.14-.08l-.31-.31a.34.34,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.57l.11-.76a.21.21,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.28.28,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l-.05-.15-.24-.06h-.23l-.21.06-.22.35,0,.3.33-.17a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.4.21.34.22a.32.32,0,0,1,.11.12l.2.41a.33.33,0,0,1,0,.14v.2a.33.33,0,0,1,0,.14l-.2.41-.23.34a.29.29,0,0,1-.19.13Zm-.26-.69.33.08.35-.08.14-.2.15-.37-.13-.27-.24-.16-.29-.14-.5.28-.06.24.07.44Z" />
                                            <path
                                                d="M696.42,1001.18l-.48-.11a.27.27,0,0,1-.14-.08l-.31-.31a.32.32,0,0,1-.08-.12l-.2-.62h0a.36.36,0,0,1,0-.1v-.71a.44.44,0,0,1,0-.1l.41-1.14a.32.32,0,0,1,.23-.19l.51-.1h.27l.57.1a.32.32,0,0,1,.23.21l.1.31a.31.31,0,0,1-.58.19l-.05-.14-.33-.07h-.15l-.29.06-.2.54.59-.09.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.49a.39.39,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08Zm-.25-.69.33.08.27-.08.19-.18.08-.33v-.13l-.06-.25-.19-.19-.33-.08-.35.08-.27.46.14.43Z" />
                                            <path
                                                d="M698.37,1001.18a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,698.37,1001.18Z" />
                                            <path
                                                d="M699.9,1001.18a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.36a.31.31,0,1,1-.43-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,699.9,1001.18Z" />
                                            <path
                                                d="M701.44,1001.18a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.36a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.16.16,0,0,1,.1,0H701a.15.15,0,0,1,.09,0l.31.1a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,701.44,1001.18Z" />
                                            <path
                                                d="M704.51,1001.18h-2a.31.31,0,0,1-.22-.53l1.44-1.43.24-.33.07-.22v-.18l0-.1-.23-.18h-.49l-.14,0-.12.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.31.31,0,0,1,0-.13l.2-.41a.35.35,0,0,1,.18-.16l.31-.1h.71a.35.35,0,0,1,.14,0l.2.1a.24.24,0,0,1,.08.06l.21.2a.35.35,0,0,1,.05.08l.11.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M694.89,969.76l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.45.45,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.3a.23.23,0,0,1,.14,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.55.28l-.06-.12-.25-.12H695l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.3.3,0,0,1,.11.14l.2.51a.27.27,0,0,1,0,.12v.1a.23.23,0,0,1,0,.14l-.2.41-.22.34a.39.39,0,0,1-.2.13Zm-.26-.69.33.08.35-.08.14-.2.15-.3-.15-.35-.22-.15-.29-.15-.28.14-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M697.75,969.76l-.57-.11a.39.39,0,0,1-.2-.13l-.2-.31-.23-.56a.28.28,0,0,1,0-.13v-.71a.19.19,0,0,1,0-.08l.2-.72.22-.46a.35.35,0,0,1,.17-.15l.51-.2a.2.2,0,0,1,.11,0H698a.2.2,0,0,1,.11,0l.51.2a.29.29,0,0,1,.16.15l.11.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.13l0-.1-.44-.14-.35.14-.15.3-.07.25.4-.16.11,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.3.3,0,0,1,.13.2l.11.67-.11.48a.36.36,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.69.39.08.29-.08.19-.19.08-.32-.07-.36-.21-.13-.29-.15-.39.15-.11.12-.14.34.16.4Z" />
                                            <path
                                                d="M699.7,969.76a.31.31,0,0,1-.31-.31v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.3.3,0,0,1,699.7,969.76Z" />
                                            <path
                                                d="M701.23,969.76a.31.31,0,0,1-.31-.31V968l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,701.23,969.76Z" />
                                            <path
                                                d="M702.77,969.76a.31.31,0,0,1-.31-.31V968l-.05-.17-.1,0H702l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,702.77,969.76Z" />
                                            <path
                                                d="M705.84,969.76h-2.05a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34L705,967.8l.25-.34.07-.32-.05-.13-.09,0a.16.16,0,0,1-.08-.06l-.12-.11h-.39l-.23.15-.07.26a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.28.28,0,0,1,0-.09l.11-.31a.37.37,0,0,1,.07-.12l.1-.1.36-.24a.27.27,0,0,1,.17-.06h.61a.36.36,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09v.21a.36.36,0,0,1,0,.1l-.1.3a.25.25,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M728.87,970.27h-.11a.31.31,0,0,1-.13,0l-.41-.21a.16.16,0,0,1-.08-.06l-.31-.3a.41.41,0,0,1-.07-.11l-.2-.51a.25.25,0,0,1,0-.12v-.71a.19.19,0,0,1,0-.08l.2-.72a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11H729l.57.1a.31.31,0,0,1,.23.21l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.14-.34-.07h-.15l-.22.06-.21.28-.09.29h0l.59-.11.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.31.31,0,0,1,728.87,970.27Zm-.33-.77.28.14.27-.14.22-.21.08-.33-.08-.27-.19-.19-.33-.08-.27.07-.22.22-.12.24.13.33Z" />
                                            <path
                                                d="M731.73,970.27h-.2a.32.32,0,0,1-.14,0L731,970a.16.16,0,0,1-.08-.06l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.3.3,0,0,1,.17-.11l.41-.11h.39l.48.11a.29.29,0,0,1,.18.13l.2.3a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.13-.21-.3-.07h-.23l-.23.06-.2.27,0,.29.39-.1h.28l.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.36.36,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,731.73,970.27Zm-.13-.62h.06l.3-.15.21-.21.08-.33-.07-.27-.19-.19-.33-.08h-.13l-.25.06-.19.2L731,969l.07.34.21.2Z" />
                                            <path
                                                d="M733.58,970.27a.31.31,0,0,1-.31-.31v-2.05a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3V970A.3.3,0,0,1,733.58,970.27Z" />
                                            <path
                                                d="M735.11,970.27a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.15-.36.38a.31.31,0,0,1-.43-.44l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.38.38,0,0,1,.13.18l.1.41V970A.31.31,0,0,1,735.11,970.27Z" />
                                            <path
                                                d="M736.65,970.27a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.38a.33.33,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.32.32,0,0,1,.13.18l.1.41V970A.3.3,0,0,1,736.65,970.27Z" />
                                            <path
                                                d="M737.67,970.27a.31.31,0,0,1-.28-.18.32.32,0,0,1,.06-.35l1.39-1.38.18-.46a.36.36,0,0,1,.07-.1l.11-.12v-.08l-.21-.29-.18-.11h-.33l-.29.21-.11.2a.31.31,0,0,1-.62,0v-.11a.27.27,0,0,1,.06-.17l.34-.45.35-.25a.37.37,0,0,1,.18,0h.51a.34.34,0,0,1,.17,0l.45.35.25.35a.34.34,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.16.16-.18.45a.41.41,0,0,1-.07.11l-.87.86,1.15-.06a.31.31,0,0,1,.32.29.3.3,0,0,1-.29.32l-1.94.11Z" />
                                            <path
                                                d="M729.79,1002l-.49-.11-.14-.08-.31-.31a.37.37,0,0,1-.07-.12l-.2-.62h0a.34.34,0,0,1,0-.1V1000a.36.36,0,0,1,0-.1l.41-1.14a.3.3,0,0,1,.23-.19l.51-.1H730l.57.1a.32.32,0,0,1,.24.21l.1.3a.31.31,0,0,1-.2.39.29.29,0,0,1-.38-.19l-.05-.14-.34-.07h-.14l-.29.06-.2.54.59-.09.48.11a.36.36,0,0,1,.15.08l.3.31a.29.29,0,0,1,.08.14l.11.41v.28l-.12.49a.29.29,0,0,1-.08.14l-.3.3a.38.38,0,0,1-.15.09Zm-.25-.69.32.08.28-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19-.32-.08-.36.07-.26.47.14.42Z" />
                                            <path
                                                d="M732.55,1002l-.48-.11a.47.47,0,0,1-.14-.08l-.31-.31a.32.32,0,0,1-.09-.17l-.1-.61a.17.17,0,0,1,0-.1V1000l.1-.66a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.48.11a.26.26,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07h-.23l-.21.06-.21.35,0,.21.38-.1h.28l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.31-.14.08-.41.1Zm-.25-.69.33.08h.13l.25-.07.19-.19.08-.32v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M734.6,1002a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,734.6,1002Z" />
                                            <path
                                                d="M736.13,1002a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.3l-.2.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,736.13,1002Z" />
                                            <path
                                                d="M737.67,1002a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,737.67,1002Z" />
                                            <path
                                                d="M740.64,1002h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.39.36-.63v-.09l-.12-.11a.35.35,0,0,1-.05-.08l0-.09-.14-.05h-.41l-.14.05,0,.09-.06.08-.12.11v.08a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.27.27,0,0,1,.09-.21l.17-.17.08-.16a.29.29,0,0,1,.18-.16l.3-.1H740l.3.1a.29.29,0,0,1,.18.16l.08.16.17.17a.27.27,0,0,1,.09.21v.31a.34.34,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.91.91h1.21a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M765.3,1002.92h-.2a.32.32,0,0,1-.14,0l-.41-.21a.38.38,0,0,1-.12-.1l-.2-.31-.23-.56v0h0a.44.44,0,0,1,0-.1v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.13-.14l.41-.2a.25.25,0,0,1,.14,0h.31a.22.22,0,0,1,.13,0l.41.2a.29.29,0,0,1,.12.1l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.16-.24-.28-.13h-.16l-.25.12-.16.32-.07.27.34-.09h.27l.49.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.28.28,0,0,1-.08.15l-.31.3a.16.16,0,0,1-.08.06l-.41.21A.32.32,0,0,1,765.3,1002.92Zm-.13-.62h.06l.3-.15.21-.21.09-.32-.08-.28-.19-.19-.33-.08h-.13l-.22.06-.26.46.15.39.13.18Z" />
                                            <path
                                                d="M768,1002.82l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.51a.49.49,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.3a.23.23,0,0,1,.14,0l.41.2a.3.3,0,0,1,.15.18l.11.31a.31.31,0,0,1-.59.19l-.06-.19-.23-.11H768l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.38.38,0,0,1,.12.1l.2.31.22.44a.33.33,0,0,1,0,.14v.1a.37.37,0,0,1,0,.14l-.2.41-.22.34a.3.3,0,0,1-.19.12l-.41.11Zm-.26-.69.33.08h.13l.22-.06.14-.21.14-.29-.3-.53L768,1001l-.3.15-.21.22-.07.27.07.34Z" />
                                            <path
                                                d="M770,1002.82a.3.3,0,0,1-.3-.31v-2a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v2A.31.31,0,0,1,770,1002.82Z" />
                                            <path
                                                d="M771.55,1002.82a.31.31,0,0,1-.31-.31v-1.27l-.17-.37h-.37l-.08,0-.37.46a.31.31,0,0,1-.48-.38l.41-.52.11-.08.2-.1a.32.32,0,0,1,.14,0h.51a.35.35,0,0,1,.14,0l.2.1a.33.33,0,0,1,.15.16l.2.51a.27.27,0,0,1,0,.12v1.33A.31.31,0,0,1,771.55,1002.82Z" />
                                            <path
                                                d="M773.08,1002.82a.3.3,0,0,1-.3-.31v-1.33l-.06-.28-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.52a.26.26,0,0,1,.14-.09l.31-.11h.6l.31.11a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,773.08,1002.82Z" />
                                            <path
                                                d="M776.05,1002.82h-1.94a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.33-1.33.26-.45.16-.17v-.09l-.21-.29-.18-.11h-.33l-.36.21,0,.2a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.34.34,0,0,1,.15-.18l.21-.1.27-.18a.27.27,0,0,1,.17-.06h.52a.27.27,0,0,1,.17.06l.45.34.24.35a.29.29,0,0,1,.06.17v.31a.36.36,0,0,1-.09.22l-.21.2-.26.46-.86.86h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M710.85,1002.2l-.48-.11a.29.29,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.41.41,0,0,1,0-.11v-.67l.1-.66a.49.49,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l0-.14-.24-.07h-.24l-.21.06-.21.36,0,.2.55-.1.58.1a.33.33,0,0,1,.19.13l.21.31.22.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.68.33.08.35-.08.14-.2.15-.38-.29-.51-.39-.08-.29.08-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M713.72,1002.2l-.48-.11a.28.28,0,0,1-.15-.08l-.31-.31a.35.35,0,0,1-.07-.12l-.2-.61h0a.31.31,0,0,1,0-.1v-.71a.29.29,0,0,1,0-.09l.2-.62.34-.57a.31.31,0,0,1,.18-.14l.41-.1h.28l.57.11a.33.33,0,0,1,.24.2l.1.31a.31.31,0,0,1-.2.39.3.3,0,0,1-.38-.2l0-.13-.34-.07h-.14l-.21.06-.24.41-.06.16h0l.58-.11.48.11a.28.28,0,0,1,.15.08l.3.31a.28.28,0,0,1,.09.14l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.28.28,0,0,1-.15.08Zm-.25-.68.32.08.28-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08-.28.08-.22.21-.12.26.14.42Z" />
                                            <path
                                                d="M715.66,1002.2a.3.3,0,0,1-.3-.31V1000a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,715.66,1002.2Z" />
                                            <path
                                                d="M717.2,1002.2a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,717.2,1002.2Z" />
                                            <path
                                                d="M718.84,1002.2a.31.31,0,0,1-.31-.31v-1.36l-.12-.23-.14,0H718l-.19.06-.35.36a.31.31,0,0,1-.44-.44l.41-.4a.42.42,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.31.31,0,0,1,.18.16l.2.4a.35.35,0,0,1,0,.14v1.43A.3.3,0,0,1,718.84,1002.2Z" />
                                            <path
                                                d="M721.8,1002.2h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l0-.09-.23-.19h-.5l-.13,0-.12.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.32.32,0,0,1,0-.14l.2-.41a.3.3,0,0,1,.18-.15l.31-.1.09,0h.62a.35.35,0,0,1,.14,0l.2.1.08.06.2.21a.16.16,0,0,1,.06.08l.1.2a.23.23,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.3a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M747.29,1002l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.32.32,0,0,1-.09-.17l-.1-.61a.17.17,0,0,1,0-.1v-.57l.11-.76a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.48.11a.3.3,0,0,1,.22.2l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.25-.06h-.23l-.21.06-.21.35,0,.3.32-.17a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.21.34.22a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.21.41a.35.35,0,0,1,0,.08l-.31.31-.14.08Zm-.25-.69.32.08.28-.08.22-.21.15-.36-.14-.27-.24-.16-.29-.14-.5.28-.06.24.08.44Z" />
                                            <path
                                                d="M750.16,1002l-.58-.11a.29.29,0,0,1-.19-.13l-.21-.31,0-.07-.21-.62h0a.38.38,0,0,1,0-.1v-.61a.22.22,0,0,1,0-.08l.2-.72.22-.54a.3.3,0,0,1,.22-.19l.52-.1h.26l.48.11a.3.3,0,0,1,.19.12l.2.31a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.29-.07h-.13l-.29.06-.22.63.39-.16.12,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.32.32,0,0,1,.12.18l.11.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.3.3a.38.38,0,0,1-.15.09Zm-.33-.69.39.08.29-.08.19-.19.08-.32v-.13l-.06-.22-.21-.14-.3-.15-.38.15-.13.13-.12.25.15.45Z" />
                                            <path
                                                d="M752.1,1002a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,752.1,1002Z" />
                                            <path
                                                d="M753.64,1002a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,753.64,1002Z" />
                                            <path
                                                d="M755.17,1002a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,755.17,1002Z" />
                                            <path
                                                d="M758.14,1002h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.18l-.05-.1-.11-.12-.2-.06H757l-.14.05,0,.09-.18.27a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.17l.29-.48a.31.31,0,0,1,.18-.16l.31-.1h.7l.31.1a.42.42,0,0,1,.12.08l.2.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.34.34,0,0,1,0,.1l-.1.3a.19.19,0,0,1-.05.09l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M765,970.17l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.24.24,0,0,1-.06-.11l-.21-.51a.5.5,0,0,1,0-.12v-.71a.19.19,0,0,1,0-.08l.21-.72a.19.19,0,0,1,0-.1l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.23.23,0,0,1,.14,0h.2l.12,0,.51.2a.33.33,0,0,1,.16.15l.1.2a.29.29,0,0,1-.14.41.3.3,0,0,1-.41-.13l0-.1-.42-.14-.28.14-.23.3-.08.3.38-.2a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.39.39,0,0,1,.13.2l.11.67-.12.48a.28.28,0,0,1-.08.15l-.3.3a.28.28,0,0,1-.15.08Zm-.25-.69.32.08.28-.08.19-.19.08-.33-.08-.35-.2-.13-.29-.15-.52.3-.12.31.13.34Z" />
                                            <path
                                                d="M767.76,970.17l-.48-.12a.28.28,0,0,1-.15-.08l-.3-.3a.37.37,0,0,1-.09-.16l-.1-.51a.24.24,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.2a.25.25,0,0,1,.14,0h.31l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07h-.15l-.29.15-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0H768a.31.31,0,0,1,.13,0l.41.21.34.22a.29.29,0,0,1,.13.18l.1.41V969l-.11.48a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08l-.41.11Zm-.25-.69.33.08H768l.25-.07.19-.19.08-.33v-.13l-.06-.21-.21-.14-.38-.16-.51.29-.07.34.08.35Z" />
                                            <path
                                                d="M769.81,970.17a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,769.81,970.17Z" />
                                            <path
                                                d="M771.34,970.17a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,771.34,970.17Z" />
                                            <path
                                                d="M772.88,970.17a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,772.88,970.17Z" />
                                            <path
                                                d="M775.85,970.17h-2a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.39-1.4.36-.64-.22-.36-.14,0h-.41l-.14,0,0,.09-.17.28a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.34.34,0,0,1,0-.17l.29-.47a.3.3,0,0,1,.17-.16l.31-.1.1,0h.51l.1,0,.31.1a.3.3,0,0,1,.17.16l.1.2.19.27a.34.34,0,0,1,0,.17v.21a.34.34,0,0,1,0,.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.91.91h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M695.73,994.82a.3.3,0,0,1-.31-.3v-2.27h0l-.31.1a.31.31,0,1,1-.19-.58l.24-.08.35-.36a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,695.73,994.82Z" />
                                            <path
                                                d="M698,994.82a.31.31,0,0,1-.13,0,.3.3,0,0,1-.14-.41l1.22-2.53h-1.46a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1.95a.34.34,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.3.3,0,0,1,698,994.82Z" />
                                            <path
                                                d="M531.17,992.73h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21V990l0-.14-.31-.11H530l-.24.11-.11.18v.12a.31.31,0,0,1-.62,0V990a.34.34,0,0,1,.05-.17l.35-.46a.24.24,0,0,1,.12-.07l.31-.1.09,0h.52l.09,0,.56.22a.34.34,0,0,1,.15.18l.1.3a.44.44,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.3.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,531.17,992.73Z" />
                                            <path
                                                d="M533.22,992.73H533a.31.31,0,0,1-.13,0l-.41-.2-.34-.23a.32.32,0,0,1-.14-.2l-.1-.61v-.77l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.36.36,0,0,1,.19.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07H533l-.22.06-.2.26,0,.29.39-.09h.28l.48.11a.22.22,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.12.59-.11.57a.33.33,0,0,1-.13.19l-.31.21-.44.22A.35.35,0,0,1,533.22,992.73Zm-.13-.61h.06l.51-.29.08-.38-.08-.3-.19-.19-.33-.08H533l-.24.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M513.62,992.73h-2.05a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.32-.11-.31-.15,0h-.51l-.14,0-.12.37a.3.3,0,0,1-.3.3.31.31,0,0,1-.31-.3v-.11a.29.29,0,0,1,0-.09l.22-.56a.3.3,0,0,1,.18-.15l.3-.1.1,0h.61l.1,0,.31.1a.31.31,0,0,1,.17.15l.11.21.12.35a.28.28,0,0,1,0,.09v.21a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,513.62,992.73Z" />
                                            <path
                                                d="M515.05,992.73a.25.25,0,0,1-.12,0,.31.31,0,0,1-.16-.41l1.14-2.53h-1.47a.31.31,0,1,1,0-.62h1.94a.3.3,0,0,1,.26.14.28.28,0,0,1,0,.29l-1.33,3A.29.29,0,0,1,515.05,992.73Z" />
                                            <path
                                                d="M509,999.85l-.48-.11-.14-.08-.31-.31a.28.28,0,0,1-.09-.17l-.1-.61v-.67l.1-.76a.36.36,0,0,1,0-.11l.31-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.48.11a.28.28,0,0,1,.22.2l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15-.24-.06H509l-.21.06-.21.35,0,.3.33-.17a.31.31,0,0,1,.13,0h.11l.11,0,.51.21a.23.23,0,0,1,.1.07l.21.2.06.08.2.41a.32.32,0,0,1,0,.14v.2a.32.32,0,0,1,0,.14l-.2.41-.23.34a.29.29,0,0,1-.19.13Zm-.25-.69.33.08.35-.08.14-.2.15-.37-.15-.3-.13-.13-.38-.15-.5.29-.06.24.07.44Z" />
                                            <path
                                                d="M511.88,999.85l-.48-.11a.53.53,0,0,1-.15-.08l-.3-.31a.42.42,0,0,1-.08-.12l-.2-.62h0a.3.3,0,0,1,0-.1v-.61a.22.22,0,0,1,0-.08l.21-.72,0-.07.31-.51a.3.3,0,0,1,.19-.14l.4-.11h.28l.58.1a.34.34,0,0,1,.23.21l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.14-.34-.07h-.14l-.21.06-.22.37-.09.31.38-.2a.32.32,0,0,1,.14,0h.1l.49.11a.39.39,0,0,1,.14.08l.3.31a.42.42,0,0,1,.09.14l.1.41v.28l-.11.49a.42.42,0,0,1-.09.14l-.3.31-.14.08Zm-.25-.69.32.08.28-.08.19-.19.08-.32v-.13l-.07-.25-.19-.19L512,998l-.55.31-.11.22.14.43Z" />
                                            <path
                                                d="M513.82,999.85a.3.3,0,0,1-.3-.31V997.6a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,513.82,999.85Z" />
                                            <path
                                                d="M515.36,999.85a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.35a.3.3,0,0,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.3-.11h.61l.3.11a.28.28,0,0,1,.2.21l.11.41v1.51A.31.31,0,0,1,515.36,999.85Z" />
                                            <path
                                                d="M517,999.85a.31.31,0,0,1-.31-.31v-1.36l-.12-.23-.14-.05h-.3l-.2.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.18.15l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,517,999.85Z" />
                                            <path
                                                d="M520,999.85h-2.05a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.18l0-.1-.23-.18h-.5l-.13,0-.12.23v.13a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.31.31,0,0,1,0-.13l.2-.41a.31.31,0,0,1,.18-.16l.31-.1h.71a.35.35,0,0,1,.14,0l.2.1a.24.24,0,0,1,.08.06l.21.2a.35.35,0,0,1,0,.08l.11.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.3.41-.94.94H520a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M527,1000.26h-.21a.2.2,0,0,1-.13,0l-.41-.2-.34-.22a.38.38,0,0,1-.14-.21l-.1-.61a.34.34,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.11a.29.29,0,0,1,.18.12l.21.31a.31.31,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.29-.07h-.24l-.22.06-.2.27,0,.29.39-.1H527l.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.1.57a.35.35,0,0,1-.14.2l-.3.2-.45.22A.2.2,0,0,1,527,1000.26Zm-.14-.62H527l.52-.28.07-.39-.07-.29-.19-.19-.33-.08h-.13l-.25.07-.19.19-.06.28.07.41.19.13Z" />
                                            <path
                                                d="M529.79,1000.26h-.1a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.32.32,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.3.3,0,0,1,.17-.11l.41-.11H530l.48.11a.31.31,0,0,1,.22.2l.1.3a.3.3,0,0,1-.2.39.29.29,0,0,1-.38-.19l-.05-.15-.25-.06h-.23l-.23.06-.2.27,0,.29.57-.11.48.11a.36.36,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.21.41a.32.32,0,0,1,0,.14v.1a.36.36,0,0,1,0,.11l-.21.51a.33.33,0,0,1-.11.15l-.31.2-.44.22A.23.23,0,0,1,529.79,1000.26Zm-.54-.9.2.13.29.14.52-.29.14-.35-.15-.29-.21-.21-.32-.08-.28.07-.19.19-.07.28Z" />
                                            <path
                                                d="M531.63,1000.26a.3.3,0,0,1-.3-.31V997.9a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3V1000A.31.31,0,0,1,531.63,1000.26Z" />
                                            <path
                                                d="M533.27,1000.26a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.29.29,0,0,1,.1.12l.21.41a.32.32,0,0,1,0,.14V1000A.31.31,0,0,1,533.27,1000.26Z" />
                                            <path
                                                d="M534.81,1000.26a.31.31,0,0,1-.31-.31v-1.36l-.23-.38H534l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.61a.29.29,0,0,1,.21-.09h.52a.27.27,0,0,1,.21.09l.21.2.06.08.2.41a.32.32,0,0,1,0,.14V1000A.3.3,0,0,1,534.81,1000.26Z" />
                                            <path
                                                d="M537.77,1000.26h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l-.06-.19-.19-.06h-.49l-.23.11,0,.2a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.41-.2a.31.31,0,0,1,.13,0h.72l.3.1a.25.25,0,0,1,.12.08l.1.1a.25.25,0,0,1,.08.12l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.19.19,0,0,1,0,.09l-.3.41-.94.94h1.3a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M544.73,1000.67l-.57-.11a.29.29,0,0,1-.19-.13l-.21-.31-.23-.56h0a.2.2,0,0,1,0-.11v-.71a.19.19,0,0,1,0-.08l.2-.72.23-.46a.32.32,0,0,1,.14-.14l.4-.2a.37.37,0,0,1,.14,0h.31a.37.37,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.17l-.25.12-.16.32-.06.24.26-.14a.35.35,0,0,1,.14,0h.21a.31.31,0,0,1,.13,0l.41.21.34.22a.3.3,0,0,1,.13.2l.11.67-.11.48a.28.28,0,0,1-.08.15l-.31.3a.29.29,0,0,1-.14.08Zm-.33-.69.39.08.3-.08.19-.19.08-.32-.08-.36-.2-.13-.38-.16-.3.15-.12.13-.14.34.16.4Z" />
                                            <path
                                                d="M547.5,1000.67l-.49-.12a.29.29,0,0,1-.14-.08l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.31a.33.33,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.14.42.31.31,0,0,1-.41-.14l0-.12-.26-.12h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.08,0,.2.21a.23.23,0,0,1,.07.1l.21.51a.5.5,0,0,1,0,.12v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.31.31,0,0,1-.18.12l-.41.11Zm-.25-.69.32.08h.13l.22-.06.14-.21.15-.3-.16-.38-.12-.13-.36-.15-.51.29-.07.34.07.35Z" />
                                            <path
                                                d="M549.55,1000.67a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.3.3.3,0,0,1,.3.3v2A.3.3,0,0,1,549.55,1000.67Z" />
                                            <path
                                                d="M551.08,1000.67a.31.31,0,0,1-.31-.31V999l-.17-.28h-.37l-.09,0-.38.37a.3.3,0,0,1-.43-.43l.41-.41.08-.06.2-.1a.32.32,0,0,1,.14,0h.51a.32.32,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,551.08,1000.67Z" />
                                            <path
                                                d="M552.62,1000.67a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.07-.36.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.37.37,0,0,1,.12-.07l.31-.11h.6l.31.11a.28.28,0,0,1,.2.21l.1.41v1.51A.3.3,0,0,1,552.62,1000.67Z" />
                                            <path
                                                d="M555.58,1000.67h-1.94a.3.3,0,0,1-.28-.19.3.3,0,0,1,.06-.34l1.4-1.4.35-.64-.21-.35-.14,0h-.41l-.2.06-.1.1-.06.25a.31.31,0,0,1-.62,0V998a.3.3,0,0,1,0-.1l.1-.31a.42.42,0,0,1,.08-.12l.2-.2a.32.32,0,0,1,.12-.08l.31-.1.1,0h.51l.09,0,.31.1a.31.31,0,0,1,.18.16l.1.2.19.27a.37.37,0,0,1,0,.18v.2a.34.34,0,0,1,0,.17l-.21.31-.18.37-.06.08-.91.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M565.51,1001l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.36.36,0,0,1-.07-.1l-.2-.51v0h0a.29.29,0,0,1,0-.09V999a.29.29,0,0,1,0-.09l.2-.71a.31.31,0,0,1,0-.1l.31-.41a.22.22,0,0,1,.1-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.35.35,0,0,1,.14,0l.41.21a.35.35,0,0,1,.13.14l.11.2a.31.31,0,0,1-.14.41.3.3,0,0,1-.41-.13l-.06-.12-.25-.12h-.17l-.28.14-.22.3-.09.29.38-.19a.35.35,0,0,1,.14,0h.1a.32.32,0,0,1,.14,0l.41.2.08.06.31.31a.39.39,0,0,1,.08.14l.11.59-.11.48a.32.32,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.68.33.08.27-.08.19-.19.08-.33-.07-.27-.22-.22-.28-.14-.28.14-.23.24-.12.24.13.32Z" />
                                            <path
                                                d="M568.28,1001l-.49-.11a.29.29,0,0,1-.18-.13l-.2-.3-.24-.56a.59.59,0,0,1,0-.13V999a.28.28,0,0,1,0-.09l.21-.71.22-.46a.32.32,0,0,1,.14-.14l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.16.16,0,0,1,.08.06l.2.2a.31.31,0,0,1-.43.44l-.17-.17-.3-.15h-.16l-.26.12-.15.32-.07.23.27-.13a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.08.06.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.34.34,0,0,1-.09.14l-.3.31a.28.28,0,0,1-.15.08l-.4.1Zm-.23-.68.3.08h.13l.25-.07.19-.19.08-.33-.08-.27-.21-.22-.36-.15-.27.14-.29.49.16.38Z" />
                                            <path
                                                d="M570.32,1001a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.62,0v1.95A.3.3,0,0,1,570.32,1001Z" />
                                            <path
                                                d="M571.86,1001a.3.3,0,0,1-.31-.3v-1.44l0-.17-.1,0h-.31l-.17.06-.36.44a.31.31,0,0,1-.43.05.33.33,0,0,1,0-.44l.41-.51a.4.4,0,0,1,.15-.1l.3-.1h.6l.31.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,571.86,1001Z" />
                                            <path
                                                d="M573.39,1001a.29.29,0,0,1-.3-.3v-1.44l-.05-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,573.39,1001Z" />
                                            <path
                                                d="M576.36,1001h-1.94a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.32-.47v-.19l0-.14-.36-.21h-.32l-.29.21-.11.19a.31.31,0,1,1-.62,0v-.1a.34.34,0,0,1,0-.17l.35-.45.35-.25a.34.34,0,0,1,.17-.05h.51a.31.31,0,0,1,.17.05l.48.29a.31.31,0,0,1,.16.18l.1.31a.29.29,0,0,1,0,.09v.31a.37.37,0,0,1,0,.14l-.1.2-.33.46-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,576.36,1001Z" />
                                            <path
                                                d="M583.32,1001.38l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.17.17,0,0,1,0-.1v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.25-.06h-.23l-.22.07-.2.26,0,.29.56-.1.58.1a.3.3,0,0,1,.19.14l.21.3.22.45a.28.28,0,0,1,0,.13v.21a.28.28,0,0,1,0,.13l-.21.41-.22.34a.26.26,0,0,1-.19.13Zm-.25-.68.33.08.35-.08.13-.2.16-.37-.29-.52-.39-.08-.29.08-.19.19-.07.28.08.44Z" />
                                            <path
                                                d="M586.19,1001.38l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.24.24,0,0,1-.07-.12l-.21-.61h0a.28.28,0,0,1,0-.09v-.71a.28.28,0,0,1,0-.09l.21-.71a.19.19,0,0,1,.05-.1l.3-.41a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.33.33,0,0,1,.24.2l.1.31a.32.32,0,0,1-.2.39.31.31,0,0,1-.39-.2l0-.13-.34-.07h-.14l-.23.07-.21.28-.08.29h0l.59-.11.48.11a.28.28,0,0,1,.15.08l.3.31a.25.25,0,0,1,.08.14l.11.41v.28l-.12.48a.25.25,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08Zm-.25-.68.32.08.28-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08-.28.08-.22.21-.12.26.14.42Z" />
                                            <path
                                                d="M588.13,1001.38a.3.3,0,0,1-.31-.3v-2a.31.31,0,1,1,.62,0v2A.3.3,0,0,1,588.13,1001.38Z" />
                                            <path
                                                d="M589.67,1001.38a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,589.67,1001.38Z" />
                                            <path
                                                d="M591.31,1001.38a.3.3,0,0,1-.31-.3v-1.36l-.12-.23-.14,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.35.35,0,0,1,.18.16l.2.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,591.31,1001.38Z" />
                                            <path
                                                d="M594.27,1001.38h-2a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l0-.09-.23-.19H593l-.14.05-.11.23v.13a.31.31,0,0,1-.62,0v-.2a.25.25,0,0,1,0-.14l.2-.41a.3.3,0,0,1,.18-.15l.31-.1.09,0h.62a.31.31,0,0,1,.13,0l.21.11.08,0,.2.21a.16.16,0,0,1,.06.08l.1.2a.37.37,0,0,1,0,.14v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94h1.3a.31.31,0,0,1,.31.31A.3.3,0,0,1,594.27,1001.38Z" />
                                            <path
                                                d="M601.34,1001.79h-.21a.35.35,0,0,1-.14,0l-.41-.2-.08-.06-.3-.31a.32.32,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.39.39,0,0,1,.06-.15l.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.38l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.08h-.23l-.23.07-.19.26-.05.29.4-.09h.28l.48.11a.29.29,0,0,1,.14.08l.31.31a.25.25,0,0,1,.08.14l.11.58-.11.49a.29.29,0,0,1-.08.14l-.31.31-.08.06-.41.2A.31.31,0,0,1,601.34,1001.79Zm-.14-.61h.06l.3-.15.21-.21.09-.33-.08-.28-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.34.2.21Z" />
                                            <path
                                                d="M604.1,1001.79H604a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.31-.31a.3.3,0,0,1-.08-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66L603,999a.27.27,0,0,1,0-.15l.31-.4a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.28.28,0,0,1,.15.17l.11.31a.32.32,0,0,1-.2.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12h-.16l-.28.14-.22.29,0,.29.57-.1.48.11a.28.28,0,0,1,.15.08l.3.31a.16.16,0,0,1,.06.08l.21.4a.35.35,0,0,1,0,.14v.1a.32.32,0,0,1,0,.14l-.21.41a.16.16,0,0,1-.06.08l-.3.31-.08.06-.41.2A.35.35,0,0,1,604.1,1001.79Zm-.33-.76.28.14.28-.14.23-.24.14-.28-.14-.28-.21-.21-.32-.08-.28.08-.19.19-.07.27.07.34Z" />
                                            <path
                                                d="M605.94,1001.79a.31.31,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,605.94,1001.79Z" />
                                            <path
                                                d="M607.58,1001.69a.31.31,0,0,1-.31-.31v-1.27l-.13-.32-.12,0h-.27l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41l.09,0,.31.1a.29.29,0,0,1,.19.18l.2.51a.2.2,0,0,1,0,.11v1.33A.31.31,0,0,1,607.58,1001.69Z" />
                                            <path
                                                d="M609.11,1001.69a.3.3,0,0,1-.3-.31v-1.27l-.18-.36h-.36l-.08,0-.37.45a.3.3,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.51a.25.25,0,0,1,.1-.08l.21-.11a.31.31,0,0,1,.13,0h.51a.32.32,0,0,1,.14,0l.21.11a.28.28,0,0,1,.14.16l.21.51a.36.36,0,0,1,0,.11v1.33A.31.31,0,0,1,609.11,1001.69Z" />
                                            <path
                                                d="M612.08,1001.69h-2a.31.31,0,0,1-.29-.2.28.28,0,0,1,.08-.33l1.4-1.3.34-.6v-.18l-.11-.24-.18-.12h-.4l-.12.12-.08,0-.09.05,0,.19a.31.31,0,1,1-.62,0V999a.36.36,0,0,1,0-.1l.1-.3a.3.3,0,0,1,.15-.18l.17-.08.16-.17a.31.31,0,0,1,.22-.09h.62a.34.34,0,0,1,.17,0l.45.35a.25.25,0,0,1,.08.12l.1.3a.36.36,0,0,1,0,.1v.31a.33.33,0,0,1,0,.13l-.1.21-.32.53a.18.18,0,0,1-.05.07l-.86.8h1.26a.3.3,0,0,1,.31.3A.31.31,0,0,1,612.08,1001.69Z" />
                                            <path
                                                d="M619,1002l-.57-.11a.29.29,0,0,1-.19-.13l-.21-.31-.23-.56h0a.5.5,0,0,1,0-.12v-.71a.24.24,0,0,1,0-.08l.2-.72.23-.46a.29.29,0,0,1,.13-.14l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2.08.06.21.2a.31.31,0,0,1-.44.44l-.17-.17-.3-.15H619l-.25.13-.16.31-.06.24.26-.14a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21.34.22a.29.29,0,0,1,.13.18l.1.41v.28l-.11.49a.29.29,0,0,1-.08.14l-.31.3a.42.42,0,0,1-.14.09Zm-.33-.69.39.08.29-.08.19-.19.09-.32v-.13l-.06-.22-.22-.14-.37-.16-.3.16-.12.12-.14.34.16.4Z" />
                                            <path
                                                d="M621.81,1002l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.38.38,0,0,1-.08-.17l-.1-.61a.34.34,0,0,1,0-.1v-.57l.11-.76a.21.21,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.11h.38l.49.11a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l-.05-.15L622,999h-.23l-.21.06-.22.35,0,.3.33-.17a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.21a.21.21,0,0,1,.08.06l.2.2.06.08.2.41a.23.23,0,0,1,0,.14v.2a.23.23,0,0,1,0,.14l-.2.41-.22.34a.36.36,0,0,1-.19.13l-.4.1Zm-.26-.69.33.08H622l.22-.06.14-.21.15-.37-.15-.3-.13-.13-.36-.16-.52.3-.06.24.08.44Z" />
                                            <path
                                                d="M623.85,1002a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,623.85,1002Z" />
                                            <path
                                                d="M625.39,1002a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.1.05-.37.37a.3.3,0,0,1-.43-.43l.4-.41.08-.06.21-.1a.32.32,0,0,1,.14,0H625a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,625.39,1002Z" />
                                            <path
                                                d="M626.92,1002a.3.3,0,0,1-.3-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.35.35a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.29.29,0,0,1,.12-.07l.31-.11h.6l.31.11a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,626.92,1002Z" />
                                            <path
                                                d="M629.89,1002H628a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.4-1.39.35-.65-.21-.35-.14-.05h-.42l-.19.06-.1.1-.06.25a.31.31,0,0,1-.62,0v-.1a.3.3,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.21-.2a.25.25,0,0,1,.12-.08l.31-.1h.7l.31.1a.31.31,0,0,1,.18.16l.1.2.19.28a.34.34,0,0,1,.05.17v.2a.34.34,0,0,1-.05.17l-.21.31-.19.37a.22.22,0,0,1,0,.08l-.91.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M637.06,1002.41H637a.22.22,0,0,1-.13,0l-.41-.2-.34-.22a.31.31,0,0,1-.12-.16l-.21-.62h0a.34.34,0,0,1,0-.1v-.71a.19.19,0,0,1,0-.08l.2-.72a.31.31,0,0,1,0-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.28l.57.11a.29.29,0,0,1,.23.21l.1.3a.3.3,0,0,1-.19.39.3.3,0,0,1-.39-.19l0-.14-.34-.07H637l-.22.06-.21.28-.09.29h0l.59-.11.48.11a.39.39,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.57a.3.3,0,0,1-.13.2l-.3.2-.45.22A.22.22,0,0,1,637.06,1002.41Zm-.56-.92.21.15.29.14.5-.27.07-.39-.07-.29-.19-.19-.33-.09-.28.08-.21.22-.13.25Z" />
                                            <path
                                                d="M639.92,1002.41h-.2a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.32.32,0,0,1-.13-.21l-.1-.61a.17.17,0,0,1,0-.1v-.67l.11-.76a.2.2,0,0,1,.06-.14l.3-.41a.25.25,0,0,1,.17-.11l.41-.11H640l.48.12a.28.28,0,0,1,.18.12l.2.31a.31.31,0,0,1-.08.43.32.32,0,0,1-.43-.09l-.14-.21-.29-.07h-.23l-.23.06-.2.26,0,.3.39-.1h.28l.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.57a.34.34,0,0,1-.13.2l-.31.2-.44.22A.23.23,0,0,1,639.92,1002.41Zm-.13-.62h.06l.51-.28.08-.39-.08-.29-.18-.19-.33-.09h-.13l-.25.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M641.77,1002.41a.31.31,0,0,1-.31-.31v-2.05a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2.05A.3.3,0,0,1,641.77,1002.41Z" />
                                            <path
                                                d="M643.3,1002.41a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,643.3,1002.41Z" />
                                            <path
                                                d="M644.84,1002.41a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,644.84,1002.41Z" />
                                            <path
                                                d="M647.8,1002.41h-1.94a.3.3,0,0,1-.28-.19.3.3,0,0,1,.06-.34l1.4-1.4.35-.62v-.12l-.15-.23-.2-.07h-.41l-.25.11-.11.18v.12a.31.31,0,0,1-.62,0v-.21a.27.27,0,0,1,.06-.17l.34-.45a.32.32,0,0,1,.12-.08l.31-.1.1,0h.51l.09,0,.31.1a.25.25,0,0,1,.12.08l.1.1.25.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.21.31-.18.37-.06.08-.91.91h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M509.63,967.4l-.57-.11a.3.3,0,0,1-.2-.13l-.2-.3a.3.3,0,0,1,0-.08l-.21-.61h0a.41.41,0,0,1,0-.11v-.71a.25.25,0,0,1,0-.08l.21-.72.22-.46a.31.31,0,0,1,.22-.16l.51-.1h.26l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,1,1-.59.19l0-.13-.34-.07h-.14l-.31.07-.13.28-.08.26.62-.09.48.11a.28.28,0,0,1,.15.08l.3.3a.28.28,0,0,1,.08.15l.11.41v.28l-.12.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08Zm-.33-.68.39.07.29-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.32-.08-.36.08-.26.46.15.46Z" />
                                            <path
                                                d="M512.39,967.4l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.61a.21.21,0,0,1,0-.11v-.67l.1-.75a.39.39,0,0,1,.06-.15l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.3.3,0,0,1,.18.13l.21.31a.31.31,0,0,1-.51.34l-.14-.21-.3-.08h-.23l-.23.07-.19.26,0,.29.39-.1h.28l.48.11a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.68.33.08h.13l.24-.07.19-.19.09-.33v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.08.45Z" />
                                            <path
                                                d="M514.44,967.4a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,514.44,967.4Z" />
                                            <path
                                                d="M516,967.4a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.3.3,0,0,1,.13.18l.1.41v1.5A.31.31,0,0,1,516,967.4Z" />
                                            <path
                                                d="M517.51,967.4a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.16-.36.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.26.26,0,0,1,.12.18l.11.41v1.5A.31.31,0,0,1,517.51,967.4Z" />
                                            <path
                                                d="M520.48,967.4h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.36-.63v-.12l-.16-.23-.2-.07h-.41l-.14.05,0,.09a.22.22,0,0,1-.05.08l-.12.12v.07a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.28.28,0,0,1,.17-.15l.31-.1a.18.18,0,0,1,.1,0h.51a.18.18,0,0,1,.1,0l.3.1a.24.24,0,0,1,.12.07l.11.1.24.36a.34.34,0,0,1,0,.17V965a.34.34,0,0,1,0,.17l-.21.3-.18.38a.24.24,0,0,1-.06.08l-.91.91h1.21a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M527.64,967.5h-.2a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41A.3.3,0,0,1,527,964l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.23l-.23.06-.2.26,0,.3.39-.1h.28l.49.11a.29.29,0,0,1,.14.08l.3.31a.42.42,0,0,1,.09.14l.11.59-.11.48a.42.42,0,0,1-.09.14l-.3.31-.08.06-.41.2A.32.32,0,0,1,527.64,967.5Zm-.13-.61h.06l.3-.15.21-.21.08-.33-.08-.28-.19-.19-.32-.08h-.13l-.25.07-.19.19-.07.27.07.34.21.21Z" />
                                            <path
                                                d="M530.4,967.5h-.1a.28.28,0,0,1-.13,0l-.41-.2-.08-.06-.31-.31a.38.38,0,0,1-.09-.15l-.1-.51a.48.48,0,0,1,0-.12v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.24.24,0,0,1,.11-.09l.41-.21a.31.31,0,0,1,.13,0h.31a.35.35,0,0,1,.14,0l.41.21a.31.31,0,0,1,.15.17l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.19l-.06-.19-.23-.12h-.16l-.28.14-.22.29,0,.3.56-.11.58.11a.26.26,0,0,1,.19.13l.21.3.22.45a.31.31,0,0,1,0,.13v.11a.31.31,0,0,1,0,.13l-.2.41-.23.34a.33.33,0,0,1-.14.12l-.51.2A.25.25,0,0,1,530.4,967.5Zm-.32-.76.28.14.35-.14.16-.22.14-.29-.28-.5-.39-.07-.29.07-.19.19-.06.27.07.34Z" />
                                            <path
                                                d="M532.25,967.5a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,532.25,967.5Z" />
                                            <path
                                                d="M533.88,967.4a.3.3,0,0,1-.3-.31v-1.27l-.18-.36h-.31l-.11.11-.54.43a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.69-.59a.31.31,0,0,1,.21-.09h.52a.22.22,0,0,1,.13,0l.21.1a.28.28,0,0,1,.14.16l.21.51a.52.52,0,0,1,0,.11v1.33A.31.31,0,0,1,533.88,967.4Z" />
                                            <path
                                                d="M535.42,967.4a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.17,0-.36.45a.3.3,0,0,1-.43,0,.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0H535l.1,0,.3.1a.31.31,0,0,1,.21.23l.1.51v1.39A.31.31,0,0,1,535.42,967.4Z" />
                                            <path
                                                d="M538.39,967.4h-1.95a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.33-1.33.26-.46.16-.16v-.1l-.22-.28-.18-.12h-.39l-.12.12-.08.06-.09,0,0,.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.3.3,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09h.61a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.2.2-.26.45-.86.87h1.21a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M545.35,967.81l-.49-.11a.29.29,0,0,1-.14-.08l-.3-.31a.25.25,0,0,1-.08-.12l-.2-.61a.36.36,0,0,1,0-.11v-.6a.28.28,0,0,1,0-.09l.21-.71.21-.55a.31.31,0,0,1,.23-.18l.51-.1h.26l.58.11a.33.33,0,0,1,.23.2l.1.31a.31.31,0,1,1-.58.19l0-.14-.34-.06h-.14l-.29.06-.22.63.39-.15.12,0h.1a.33.33,0,0,1,.14,0l.41.2.34.23a.3.3,0,0,1,.13.18l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.29.29,0,0,1-.14.08Zm-.25-.69.32.09.28-.08.19-.19.08-.33v-.13l-.06-.22-.21-.14-.3-.14-.38.15-.13.12-.12.25.14.43Z" />
                                            <path
                                                d="M548.11,967.81l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.21.21,0,0,1,0-.11v-.56l.1-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.27.27,0,0,1,.18.13l.21.31a.31.31,0,0,1-.51.34l-.14-.21-.3-.08h-.23l-.21.06-.21.35,0,.3.32-.16a.37.37,0,0,1,.14,0h.21l.48.12a.29.29,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.1.41v.28l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.33.09h.13l.25-.07.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08h0l-.54.3-.06.24.08.45Z" />
                                            <path
                                                d="M550.16,967.81a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,550.16,967.81Z" />
                                            <path
                                                d="M551.69,967.81a.3.3,0,0,1-.3-.31v-1.43l0-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.09,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,551.69,967.81Z" />
                                            <path
                                                d="M553.23,967.81a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,553.23,967.81Z" />
                                            <path
                                                d="M556.2,967.81h-2a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.39-1.4.36-.63v-.08l-.12-.12a.22.22,0,0,1,0-.08l0-.09-.14,0H555l-.14,0,0,.09-.06.08-.12.12v.07a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.27.27,0,0,1,.18-.15l.3-.1a.18.18,0,0,1,.1,0h.51a.18.18,0,0,1,.1,0l.31.1a.28.28,0,0,1,.17.15l.08.16.17.17a.31.31,0,0,1,.09.22v.3a.37.37,0,0,1,0,.18l-.2.3-.19.38a.21.21,0,0,1-.06.08l-.91.91h1.21a.3.3,0,0,1,.31.3A.31.31,0,0,1,556.2,967.81Z" />
                                            <path
                                                d="M566.13,968.32l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.49.49,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,0-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.32.32,0,0,1,.14.14l.1.2a.3.3,0,0,1-.14.41.3.3,0,0,1-.41-.14l-.06-.11-.25-.13h-.16l-.28.14-.22.29,0,.28.33-.16a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.2.34.23a.26.26,0,0,1,.11.14l.2.51a.26.26,0,0,1,0,.11v.11a.2.2,0,0,1,0,.13l-.2.41a.24.24,0,0,1-.06.08l-.3.31a.28.28,0,0,1-.15.08Zm-.26-.68.33.08.28-.08.21-.22.15-.28-.15-.35-.22-.16-.29-.14-.49.28-.07.34.07.34Z" />
                                            <path
                                                d="M569,968.32l-.57-.11a.3.3,0,0,1-.2-.13l-.2-.3-.23-.57h0a.36.36,0,0,1,0-.11v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.46a.29.29,0,0,1,.16-.15l.51-.21.11,0h.21l.48.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07h-.06l-.36.14-.15.31-.07.25.4-.16a.2.2,0,0,1,.11,0h.1a.32.32,0,0,1,.14,0l.41.2.34.23a.3.3,0,0,1,.13.18l.1.41v.28l-.11.48a.32.32,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.33-.68.39.08.29-.08.19-.19.09-.33V967l-.06-.21-.22-.15-.29-.14-.39.15-.11.12-.14.33.16.4Z" />
                                            <path
                                                d="M570.94,968.32a.3.3,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31V968A.29.29,0,0,1,570.94,968.32Z" />
                                            <path
                                                d="M572.47,968.32a.3.3,0,0,1-.31-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1.09,0h.41l.1,0,.31.1a.34.34,0,0,1,.2.22l.1.41V968A.3.3,0,0,1,572.47,968.32Z" />
                                            <path
                                                d="M574,968.32a.3.3,0,0,1-.31-.3v-1.44l-.05-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.2.22l.11.41V968A.29.29,0,0,1,574,968.32Z" />
                                            <path
                                                d="M577,968.32H575a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.43.25-.34.07-.32-.07-.19-.21-.17h-.49l-.14,0,0,.09-.17.27a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,0-.17l.28-.48a.33.33,0,0,1,.18-.15l.31-.1.1,0h.61a.32.32,0,0,1,.14,0l.2.11.08,0,.21.21a.24.24,0,0,1,.07.12l.1.3a.44.44,0,0,1,0,.1v.21a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94H577a.31.31,0,0,1,.31.31A.3.3,0,0,1,577,968.32Z" />
                                            <path
                                                d="M584.14,968.63h-.2a.32.32,0,0,1-.14,0l-.41-.21-.34-.22a.3.3,0,0,1-.13-.21l-.11-.6v-.78l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,0,1-.59.19l-.05-.15-.24-.06h-.23l-.23.07-.2.26,0,.29.39-.1h.28l.48.12a.3.3,0,0,1,.19.12l.2.31.22.44a.33.33,0,0,1,0,.14v.2a.33.33,0,0,1,0,.14l-.2.41-.06.08-.2.21-.08,0-.41.21A.35.35,0,0,1,584.14,968.63ZM584,968h.06l.3-.15.13-.14.15-.36-.29-.52-.29-.07h-.13l-.25.07-.19.19-.07.27.07.41.2.13Z" />
                                            <path
                                                d="M586.9,968.63h-.1a.35.35,0,0,1-.14,0l-.41-.21-.33-.22a.31.31,0,0,1-.14-.21l-.1-.6a.21.21,0,0,1,0-.11v-.67l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.34.34,0,0,1,.17-.11l.41-.1h.38l.48.11a.32.32,0,0,1,.22.2l.1.31a.31.31,0,1,1-.58.19l-.05-.15-.25-.06h-.23l-.22.07-.2.26,0,.29.56-.11.49.12a.29.29,0,0,1,.14.08l.31.3a.35.35,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v.1a.5.5,0,0,1,0,.12l-.21.51a.3.3,0,0,1-.11.14l-.31.2-.44.23A.32.32,0,0,1,586.9,968.63Zm-.54-.9.2.13.29.15.52-.3.14-.35-.14-.29-.21-.21-.33-.08-.28.08-.19.19-.07.27Z" />
                                            <path
                                                d="M588.75,968.63a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.3.3,0,0,1,588.75,968.63Z" />
                                            <path
                                                d="M590.28,968.63a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.22l-.23.16-.37.37a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.36.36,0,0,1,.13.19l.1.41v1.5A.31.31,0,0,1,590.28,968.63Z" />
                                            <path
                                                d="M591.92,968.63a.31.31,0,0,1-.31-.31V967l-.13-.27-.17-.11h-.19l-.11.12-.54.43a.31.31,0,0,1-.38-.48l.69-.59A.31.31,0,0,1,591,966h.41a.34.34,0,0,1,.17,0l.3.21a.29.29,0,0,1,.11.11l.2.41a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,591.92,968.63Z" />
                                            <path
                                                d="M594.89,968.63h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.24-.33.08-.22v-.2l-.07-.19-.19-.07h-.51l-.19.07-.07.19v.15a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.31.31,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.1-.1a.37.37,0,0,1,.12-.07l.31-.11h.81l.31.11a.26.26,0,0,1,.11.07l.11.1a.37.37,0,0,1,.07.12l.1.31a.3.3,0,0,1,0,.1v.3a.3.3,0,0,1,0,.1l-.1.31a.36.36,0,0,1,0,.09l-.31.4-.94.95h1.31a.29.29,0,0,1,.3.3A.3.3,0,0,1,594.89,968.63Z" />
                                            <path
                                                d="M566.13,968.53l-.49-.11-.14-.08-.31-.31a.38.38,0,0,1-.08-.17l-.1-.61a.31.31,0,0,1,0-.1v-.57l.11-.76a.21.21,0,0,1,0-.11l.3-.51a.33.33,0,0,1,.19-.14l.41-.11h.38l.49.11a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l0-.15-.24-.06h-.23l-.21.06-.22.35,0,.3.33-.17a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.21.34.22a.29.29,0,0,1,.1.12l.2.41a.23.23,0,0,1,0,.14v.2a.23.23,0,0,1,0,.14l-.2.41a.42.42,0,0,1-.06.08l-.3.31a.53.53,0,0,1-.15.08Zm-.26-.69.33.08.28-.08.21-.21.15-.36-.13-.27-.24-.16-.29-.14-.5.28-.06.24.08.44Z" />
                                            <path
                                                d="M569,968.53l-.57-.11a.34.34,0,0,1-.2-.13L568,968a.25.25,0,0,1,0-.07l-.2-.62h0a.29.29,0,0,1,0-.09v-.71a.36.36,0,0,1,0-.1l.42-1.14a.28.28,0,0,1,.22-.19l.51-.1h.27l.48.11a.32.32,0,0,1,.18.12l.21.31a.32.32,0,0,1-.09.43.31.31,0,0,1-.42-.09l-.14-.21-.3-.07H569l-.29.06-.2.54.59-.09.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.1.41v.28l-.11.49a.39.39,0,0,1-.08.14l-.31.31-.14.08Zm-.32-.69.38.08.29-.08.19-.19.09-.32v-.13l-.07-.25-.19-.19-.33-.08-.35.08-.27.46.15.46Z" />
                                            <path
                                                d="M570.94,968.53a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,570.94,968.53Z" />
                                            <path
                                                d="M572.47,968.53a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.41-.41a.24.24,0,0,1,.12-.07l.31-.1a.15.15,0,0,1,.09,0h.41a.16.16,0,0,1,.1,0l.31.1a.3.3,0,0,1,.2.21l.1.41v1.51A.31.31,0,0,1,572.47,968.53Z" />
                                            <path
                                                d="M574,968.53a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.07-.36.35a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1a.18.18,0,0,1,.1,0h.41a.2.2,0,0,1,.1,0l.3.1a.28.28,0,0,1,.2.21l.11.41v1.51A.3.3,0,0,1,574,968.53Z" />
                                            <path
                                                d="M577,968.53H575a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.33.07-.22v-.18l-.05-.1-.12-.12-.19-.06h-.41l-.14.05,0,.09a.21.21,0,0,1-.06.08l-.11.11V966a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.21a.29.29,0,0,1,.09-.21l.17-.17.07-.16a.35.35,0,0,1,.18-.16l.31-.1h.71l.3.1a.25.25,0,0,1,.12.08l.21.2.06.08.1.21a.31.31,0,0,1,0,.13v.31a.36.36,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.94H577a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M584.14,968.94h-.2a.23.23,0,0,1-.14,0l-.41-.2-.34-.22a.32.32,0,0,1-.13-.21l-.11-.61v-.77l.1-.76A.35.35,0,0,1,583,966l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.49.12a.28.28,0,0,1,.21.2l.11.3a.31.31,0,0,1-.2.39.3.3,0,0,1-.39-.19l-.05-.15-.24-.06h-.23l-.23.06-.2.26,0,.3.57-.11.57.11a.3.3,0,0,1,.2.13l.2.31.22.44a.33.33,0,0,1,0,.14v.1a.2.2,0,0,1,0,.11l-.2.51a.41.41,0,0,1-.07.11l-.2.2a.21.21,0,0,1-.08.06l-.41.2A.25.25,0,0,1,584.14,968.94Zm-.13-.62h.06l.3-.15.12-.12.15-.38-.27-.5-.39-.08-.29.07-.19.19-.07.28.07.41.2.13Z" />
                                            <path
                                                d="M586.9,968.94h-.1a.25.25,0,0,1-.14,0l-.41-.2-.33-.22a.33.33,0,0,1-.14-.21l-.1-.61v0l-.1-.71a.17.17,0,0,1,0-.12l.2-.72a.31.31,0,0,1,.05-.1l.31-.41a.25.25,0,0,1,.17-.11l.41-.11h.38l.48.12a.3.3,0,0,1,.22.2l.1.3a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.19l-.05-.15L587,966h-.23l-.22.06-.22.28-.08.29h0l.58-.11.49.11a.39.39,0,0,1,.14.08l.31.31a.39.39,0,0,1,.08.14l.11.59-.11.57a.34.34,0,0,1-.13.2l-.31.2-.44.22A.23.23,0,0,1,586.9,968.94Zm-.53-.9.19.13.29.14.49-.27.08-.39-.07-.29-.19-.19-.33-.08-.28.07-.19.19-.06.27Z" />
                                            <path
                                                d="M588.75,968.94a.31.31,0,0,1-.31-.31v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.3.3,0,0,1,588.75,968.94Z" />
                                            <path
                                                d="M590.28,968.94a.31.31,0,0,1-.31-.31V967.2l-.06-.22-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,590.28,968.94Z" />
                                            <path
                                                d="M591.92,968.94a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.17-.11h-.18L591,967l-.54.44a.31.31,0,1,1-.38-.48l.69-.59a.31.31,0,0,1,.22-.09h.41a.26.26,0,0,1,.17.05l.3.2a.32.32,0,0,1,.11.12l.2.41a.33.33,0,0,1,0,.14v1.43A.31.31,0,0,1,591.92,968.94Z" />
                                            <path
                                                d="M594.89,968.94h-2a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.24-.34.08-.21v-.21l-.07-.19-.19-.06h-.51l-.19.06-.07.25a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.28.28,0,0,1,0-.09l.11-.31a.24.24,0,0,1,.07-.12l.1-.1a.42.42,0,0,1,.12-.08l.31-.1.1,0h.61l.1,0,.31.1a.42.42,0,0,1,.12.08l.1.1a.24.24,0,0,1,.07.12l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.31a.2.2,0,0,1,0,.08l-.31.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M601.75,969.35l-.49-.11a.42.42,0,0,1-.14-.09l-.31-.3a.35.35,0,0,1-.08-.16l-.1-.5a.57.57,0,0,1,0-.13v-.66l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.2a.33.33,0,0,1,.14,0h.3a.33.33,0,0,1,.14,0l.41.2.08.06.2.2a.31.31,0,0,1,0,.44.3.3,0,0,1-.43,0l-.17-.17-.3-.15h-.16l-.28.14-.22.29,0,.28.33-.17a.32.32,0,0,1,.14,0h.2a.35.35,0,0,1,.14,0l.41.21.34.22a.39.39,0,0,1,.13.2l.11.67-.12.48a.28.28,0,0,1-.08.15l-.3.3a.38.38,0,0,1-.15.09l-.41.1Zm-.26-.69.33.08H602l.25-.07.19-.19.08-.32-.08-.36-.2-.13-.37-.16-.52.29-.06.34.07.35Z" />
                                            <path
                                                d="M604.61,969.35l-.48-.11a.38.38,0,0,1-.15-.09l-.3-.3a.37.37,0,0,1-.09-.16l-.1-.5a.29.29,0,0,1,0-.13v-.66l.11-.76a.35.35,0,0,1,.06-.14l.31-.41a.22.22,0,0,1,.1-.09l.41-.2a.37.37,0,0,1,.14,0h.31a.37.37,0,0,1,.14,0l.4.2a.32.32,0,0,1,.14.14l.1.2a.31.31,0,0,1-.13.42.33.33,0,0,1-.42-.14l0-.12-.25-.12h-.17l-.28.14-.21.29,0,.28.32-.17a.35.35,0,0,1,.14,0h.1l.12,0,.51.21a.33.33,0,0,1,.1.06l.21.21a.21.21,0,0,1,.06.1l.21.51a.5.5,0,0,1,0,.12v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.34.34,0,0,1-.2.13Zm-.25-.69.32.08.36-.08.13-.2.15-.3-.15-.38-.12-.12-.38-.15-.5.28-.07.34.08.35Z" />
                                            <path
                                                d="M606.56,969.35a.31.31,0,0,1-.31-.31v-1.95a.31.31,0,0,1,.31-.3.3.3,0,0,1,.3.3V969A.3.3,0,0,1,606.56,969.35Z" />
                                            <path
                                                d="M608.19,969.35a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14-.05h-.29l-.14.07-.45.38a.31.31,0,0,1-.43-.05.3.3,0,0,1,0-.43l.52-.41.25-.14a.35.35,0,0,1,.14,0h.51l.31.11a.28.28,0,0,1,.17.15l.21.41a.32.32,0,0,1,0,.14V969A.31.31,0,0,1,608.19,969.35Z" />
                                            <path
                                                d="M609.73,969.35a.31.31,0,0,1-.31-.31v-1.36l-.17-.28H609l-.19.07-.36.35a.3.3,0,1,1-.43-.43l.4-.41a.37.37,0,0,1,.12-.07l.31-.11h.51a.35.35,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.41a.33.33,0,0,1,0,.14V969A.31.31,0,0,1,609.73,969.35Z" />
                                            <path
                                                d="M612.7,969.35h-2a.32.32,0,0,1-.28-.19.29.29,0,0,1,.06-.33l1.33-1.43.43-.62-.22-.35-.14,0h-.49l-.1,0-.11.11-.07.25a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.1a.31.31,0,0,1,0-.1l.11-.31a.37.37,0,0,1,.07-.12l.2-.2a.21.21,0,0,1,.08-.06l.21-.1a.33.33,0,0,1,.14,0H612l.1,0,.3.1a.29.29,0,0,1,.18.16l.1.2.19.28a.31.31,0,0,1,0,.17v.2a.34.34,0,0,1,0,.17l-.52.73-.88.94h1.25a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M619.66,969.14l-.49-.11A.29.29,0,0,1,619,969l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51v0h0a.38.38,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.2-.71a.31.31,0,0,1,.05-.1l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.27.27,0,0,1,.15.18l.11.3a.31.31,0,0,1-.2.39.31.31,0,0,1-.39-.2l-.06-.18-.23-.12h-.16l-.28.14-.23.31-.08.29.38-.19a.32.32,0,0,1,.14,0h.1a.35.35,0,0,1,.14,0l.41.2.08.06.3.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.3.31a.28.28,0,0,1-.15.08Zm-.26-.68.33.08.28-.08.19-.19.08-.33-.08-.28-.21-.21-.28-.14-.28.14-.24.24-.12.24.13.32Z" />
                                            <path
                                                d="M622.42,969.14l-.48-.11a.27.27,0,0,1-.18-.13l-.21-.3-.23-.57h0v0s0,0,0-.08v-.71a.29.29,0,0,1,0-.09l.2-.71.23-.47a.27.27,0,0,1,.13-.13l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.12.1l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.16-.24-.28-.14h-.16l-.25.13-.16.32-.06.23.26-.13a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.08.06.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.22-.68.29.08h.13l.25-.07.19-.19.09-.33-.08-.28-.22-.21-.36-.15-.27.14-.28.49.15.38Z" />
                                            <path
                                                d="M624.47,969.14a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,624.47,969.14Z" />
                                            <path
                                                d="M626,969.14a.3.3,0,0,1-.3-.31V967.5l-.06-.27-.1,0h-.31l-.17.06-.35.44a.3.3,0,0,1-.43,0,.29.29,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.31.31,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,626,969.14Z" />
                                            <path
                                                d="M627.54,969.14a.31.31,0,0,1-.31-.31V967.5l-.06-.27-.09,0h-.31l-.17,0-.36.45a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.41l.1,0,.3.1a.32.32,0,0,1,.21.23l.1.51v1.39A.3.3,0,0,1,627.54,969.14Z" />
                                            <path
                                                d="M630.51,969.14h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.4-1.3.35-.59v-.19l-.05-.14-.35-.22h-.33l-.28.22-.12.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,0-.17l.34-.46.36-.24a.34.34,0,0,1,.17-.05h.51a.34.34,0,0,1,.17.05l.48.29a.3.3,0,0,1,.15.18l.11.3a.34.34,0,0,1,0,.1v.31a.35.35,0,0,1,0,.14l-.1.2-.32.53-.06.07-.86.8h1.17a.31.31,0,0,1,0,.61Z" />
                                            <path
                                                d="M637.47,969.55l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.17l-.1-.6a.41.41,0,0,1,0-.11v-.67l.11-.66a.25.25,0,0,1,0-.11l.3-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.49.11a.3.3,0,0,1,.21.2l.11.31a.31.31,0,1,1-.59.19l0-.14-.24-.07h-.23l-.21.06L637,967l0,.2.56-.11.57.11a.39.39,0,0,1,.2.13l.2.31.22.44a.37.37,0,0,1,0,.14v.21a.33.33,0,0,1,0,.13l-.2.41-.22.34a.3.3,0,0,1-.2.13Zm-.26-.69.33.09.35-.08.14-.21.15-.37-.28-.51-.39-.08-.29.08L637,968l-.07.27.07.45Z" />
                                            <path
                                                d="M640.33,969.55l-.48-.11a.25.25,0,0,1-.14-.08l-.31-.31a.25.25,0,0,1-.08-.12l-.2-.61h0a.3.3,0,0,1,0-.1v-.71a.29.29,0,0,1,0-.09l.2-.62.34-.57a.3.3,0,0,1,.19-.14l.41-.1h.28l.57.11a.31.31,0,0,1,.23.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.33-.06h-.15l-.21.06-.24.41,0,.16h0l.58-.12.49.12a.29.29,0,0,1,.14.08l.31.3a.36.36,0,0,1,.08.15l.1.41v.28l-.11.48a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08Zm-.25-.69.33.09.27-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08-.28.08-.21.21-.13.25.14.43Z" />
                                            <path
                                                d="M642.28,969.55a.31.31,0,0,1-.31-.31V967.3a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,642.28,969.55Z" />
                                            <path
                                                d="M643.81,969.55a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0H643l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,643.81,969.55Z" />
                                            <path
                                                d="M645.45,969.55a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14,0h-.31l-.19.06L644,968a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0h.41l.1,0,.3.1a.34.34,0,0,1,.18.15l.2.41a.37.37,0,0,1,0,.14v1.43A.31.31,0,0,1,645.45,969.55Z" />
                                            <path
                                                d="M648.42,969.55h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.24-.33.08-.22v-.18l0-.09-.23-.19h-.49l-.14,0-.12.23V967a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.32.32,0,0,1,0-.14l.21-.41a.28.28,0,0,1,.17-.15l.31-.1a.16.16,0,0,1,.1,0h.61a.32.32,0,0,1,.14,0l.2.1.08.06.21.21.06.08.1.2a.32.32,0,0,1,0,.14v.3a.3.3,0,0,1,0,.1l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,648.42,969.55Z" />
                                            <path
                                                d="M677.49,969.55l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51a.5.5,0,0,1,0-.12v-.71a.28.28,0,0,1,0-.09l.2-.71a.31.31,0,0,1,0-.1l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.2l.11,0,.52.21a.31.31,0,0,1,.16.14l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l0-.1-.42-.14-.28.14-.23.31-.08.29.38-.19a.33.33,0,0,1,.14,0h.1a.37.37,0,0,1,.14,0l.41.2.07.06.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08Zm-.26-.69.33.09.28-.08.19-.19.08-.33-.08-.28-.21-.21-.28-.14-.28.14-.24.24-.12.24.13.32Z" />
                                            <path
                                                d="M680.25,969.55l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.27.27,0,0,1-.09-.15l-.1-.51a.24.24,0,0,1,0-.12v-.66l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21.08,0,.21.21a.3.3,0,0,1,0,.43.31.31,0,0,1-.44,0l-.17-.17-.3-.15h-.16l-.28.14-.21.29,0,.28.32-.16a.33.33,0,0,1,.14,0h.2a.33.33,0,0,1,.14,0l.41.2.34.23a.26.26,0,0,1,.13.19l.11.68-.11.48a.39.39,0,0,1-.08.14l-.31.31a.29.29,0,0,1-.14.08l-.41.1Zm-.25-.69.32.09h.13l.25-.07.19-.19.08-.33-.07-.35-.21-.14-.37-.15-.51.29-.07.34.07.34Z" />
                                            <path
                                                d="M682.3,969.55a.31.31,0,0,1-.31-.31V967.3a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v1.94A.3.3,0,0,1,682.3,969.55Z" />
                                            <path
                                                d="M683.83,969.55a.31.31,0,0,1-.31-.31v-1.43l0-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,683.83,969.55Z" />
                                            <path
                                                d="M685.37,969.55a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44-.44l.41-.41.12-.07.31-.1.1,0H685l.1,0,.3.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,685.37,969.55Z" />
                                            <path
                                                d="M688.34,969.55h-2a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.36-.65-.22-.28-.18-.12h-.33l-.28.22-.12.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.26.26,0,0,1,0-.17l.34-.46.36-.24a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.34.34,0,0,1,0,.17v.2a.37.37,0,0,1,0,.18l-.21.3-.18.38L688,968l-.91.91h1.21a.29.29,0,0,1,.3.3A.3.3,0,0,1,688.34,969.55Z" />
                                            <path
                                                d="M768,995.65a.31.31,0,0,1-.31-.31v-2.26h0l-.3.1A.31.31,0,0,1,767,993a.3.3,0,0,1,.19-.39l.24-.08.36-.36a.3.3,0,0,1,.33-.07.3.3,0,0,1,.19.29v3A.3.3,0,0,1,768,995.65Z" />
                                            <path
                                                d="M770.88,995.65h-.51a.35.35,0,0,1-.14,0l-.41-.21-.08,0-.1-.11-.24-.35a.31.31,0,0,1,.08-.43.32.32,0,0,1,.43.09l.22.32.31.16h.37l.3-.15.13-.14.15-.3v-.16l-.21-.43-.14-.05h-.36a.33.33,0,0,1-.28-.17.31.31,0,0,1,0-.32l.46-.64H770a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h1.54a.29.29,0,0,1,.27.17.31.31,0,0,1,0,.32l-.49.67.24.08a.31.31,0,0,1,.18.16l.31.61a.32.32,0,0,1,0,.14v.31a.31.31,0,0,1,0,.13l-.21.41a.16.16,0,0,1-.06.08l-.2.21-.08,0-.41.21A.32.32,0,0,1,770.88,995.65Z" />
                                            <path
                                                d="M749.62,995.14a.31.31,0,0,1-.31-.31v-2.27h0l-.31.11a.31.31,0,0,1-.39-.2.3.3,0,0,1,.2-.38L749,992l.36-.36a.31.31,0,0,1,.34-.07.32.32,0,0,1,.19.28v3A.31.31,0,0,1,749.62,995.14Z" />
                                            <path
                                                d="M752.79,995.14a.3.3,0,0,1-.3-.3l0-.72h-1.1a.31.31,0,0,1-.27-.17.27.27,0,0,1,0-.31l1.33-1.95a.3.3,0,0,1,.34-.12.32.32,0,0,1,.22.28l0,1.65h.36a.31.31,0,0,1,0,.62h-.34l0,.7a.32.32,0,0,1-.3.32Zm-.85-1.64h.5l0-.69Z" />
                                            <path
                                                d="M731.45,994.83a.31.31,0,0,1-.31-.3v-2.17h0l-.31.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.2-.39l.22-.07.35-.44a.28.28,0,0,1,.34-.1.3.3,0,0,1,.21.29v3A.31.31,0,0,1,731.45,994.83Z" />
                                            <path
                                                d="M733.91,994.83l-.48-.11-.27-.12a.31.31,0,0,1-.16-.18l-.1-.31a.31.31,0,1,1,.58-.19l.07.18.09,0,.34.08h.34l.25-.07.19-.19.08-.33v-.23l-.07-.25-.19-.19-.33-.08h-.33l-.25.07-.15.15a.3.3,0,0,1-.35,0,.31.31,0,0,1-.17-.32l.21-1.33a.3.3,0,0,1,.3-.26h1.43a.31.31,0,0,1,.31.31.3.3,0,0,1-.31.3h-1.17l-.07.46.14,0h.49l.48.12a.25.25,0,0,1,.14.08l.31.3a.28.28,0,0,1,.08.15l.11.41v.38l-.11.48a.29.29,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08l-.41.1Z" />
                                            <path
                                                d="M713.9,994.88a.31.31,0,0,1-.31-.29l-.07-2.29-.2.09a.3.3,0,1,1-.28-.54l.15-.08.37-.46a.3.3,0,0,1,.33-.1.32.32,0,0,1,.21.29l.1,3.07a.29.29,0,0,1-.29.31Z" />
                                            <path
                                                d="M716.66,994.88h-.1a.35.35,0,0,1-.14,0l-.41-.2-.08-.06-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5v0l-.11-.7a.57.57,0,0,1,0-.13l.21-.71a.19.19,0,0,1,.05-.1l.3-.41a.31.31,0,0,1,.11-.09l.41-.21a.35.35,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.21a.3.3,0,0,1,.16.17l.1.31a.31.31,0,0,1-.19.39.3.3,0,0,1-.39-.2l-.06-.18-.24-.12h-.16l-.28.14-.23.31-.08.29h0l.58-.11.49.11a.29.29,0,0,1,.14.08l.31.31a.64.64,0,0,1,.08.14l.11.59-.11.48a.42.42,0,0,1-.09.14l-.3.31-.08.06-.41.2A.32.32,0,0,1,716.66,994.88Zm-.33-.76.28.14.28-.14.21-.21.08-.33-.08-.28-.19-.19-.32-.08-.28.08-.19.19-.07.26.08.35Z" />
                                            <text class="cls-10" transform="translate(765.05 963.24)">C41</text>
                                            <text class="cls-10" transform="translate(747.24 962.63)">C42</text>
                                            <text class="cls-10" transform="translate(726.87 963.24)">C43</text>
                                            <text class="cls-10" transform="translate(709.57 962.98)">C44</text>
                                            <text class="cls-10" transform="translate(692.06 962.42)">C45</text>
                                            <text class="cls-10" transform="translate(676.19 961.59)">C46</text>
                                            <text class="cls-10" transform="translate(655.25 961.18)">C47</text>
                                            <text class="cls-10" transform="translate(636.52 962.41)">C48</text>
                                            <text class="cls-10" transform="translate(619.79 961.39)">C49</text>
                                            <text class="cls-10" transform="translate(602.68 961.04)">C50</text>
                                            <text class="cls-10" transform="translate(564.69 960.78)">C52</text>
                                            <text class="cls-10" transform="translate(581.54 960.78)">C51</text>
                                            <text class="cls-10" transform="translate(545.9 961.31)">C53</text>
                                            <text class="cls-10" transform="translate(507.91 961.06)">C55</text>
                                            <text class="cls-10" transform="translate(524.76 961.06)">C54</text>
                                            <circle class="cls-13" cx="790.9" cy="1038.65" r="2.88" />
                                            <path class="cls-14"
                                                d="M792.3,1034.9l-2.6.6c-.33.07-1.53.49-1.71.33s-.22-.95-.27-1.17l-.52-2.24-3.05-13.23-.56-2.41c0-.19-.35-1-.26-1.16s1.42-.35,1.73-.43l1.67-.38c.14,0,.8-.27.91-.2a3.85,3.85,0,0,1,.18.81l.48,2.09,1.47,6.4,1.73,7.47c.1.45,1,3.38.68,3.57-.57.3-.06,1.16.51.86,1.12-.6.29-2.43.08-3.37l-1.61-7-1.71-7.42a30.55,30.55,0,0,0-.85-3.7c-.35-.92-1.13-.75-1.88-.57-1.14.26-2.33.45-3.45.79-1.41.43-.8,1.76-.56,2.81l3.24,14.06a39,39,0,0,0,1.08,4.67c.38,1,1.32.71,2.14.52l3.4-.78C793.19,1035.72,792.93,1034.75,792.3,1034.9Z" />
                                            <rect class="cls-14" x="785.32" y="1014.44" width="1.1" height="4.35"
                                                rx="0.27" transform="translate(-208.33 202.57) rotate(-12.98)" />
                                            <rect class="cls-14" x="786.12" y="1019.49" width="1.08" height="1.08"
                                                rx="0.27" transform="translate(-209.08 202.84) rotate(-12.98)" />
                                            <circle class="cls-15" cx="784.73" cy="1011.87" r="2.88" />
                                            <path
                                                d="M713,1110.08a.3.3,0,0,1-.3-.26.31.31,0,0,1,.26-.35l80.75-12.28a.31.31,0,0,1,.35.26.31.31,0,0,1-.26.35l-80.75,12.28Z" />
                                            <path
                                                d="M507.36,1053.21a.32.32,0,0,1-.32-.32v-2.34l-.25.17a.31.31,0,0,1-.44-.09.33.33,0,0,1,.09-.44l.32-.21.37-.38a.32.32,0,0,1,.35-.07.31.31,0,0,1,.19.29v3.07A.32.32,0,0,1,507.36,1053.21Z" />
                                            <path
                                                d="M502.87,1058.39a.29.29,0,0,1-.3-.3v-2.33h0l-.26.13a.3.3,0,0,1-.41-.13.31.31,0,0,1,.14-.41l.2-.11.46-.37a.29.29,0,0,1,.32,0,.31.31,0,0,1,.18.28v3A.3.3,0,0,1,502.87,1058.39Z" />
                                            <path
                                                d="M506.56,1058.39h-2.05a.31.31,0,0,1-.22-.52l1.44-1.43.24-.34.08-.21v-.21l-.05-.14-.09,0-.08-.06-.12-.12h-.39l-.23.16-.07.25a.31.31,0,1,1-.61,0v-.1a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11.36-.24a.34.34,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.27.27,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31,0,.09-.31.41-.94.94h1.31a.3.3,0,0,1,.3.31A.29.29,0,0,1,506.56,1058.39Z" />
                                            <path
                                                d="M507.38,1058.39a.29.29,0,0,1-.28-.18.29.29,0,0,1,.06-.34l1.4-1.4.35-.62v-.13l-.22-.28-.18-.12h-.32l-.29.22-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.26.26,0,0,1,0,.17v.31a.26.26,0,0,1,0,.17l-.2.3-.19.38a.22.22,0,0,1-.05.08l-.87.87,1.14-.06a.31.31,0,1,1,0,.61l-1.95.1Z" />
                                            <path
                                                d="M510.34,1058.29a.3.3,0,0,1-.3-.31V1056a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31V1058A.31.31,0,0,1,510.34,1058.29Z" />
                                            <path
                                                d="M511.88,1058.29a.31.31,0,0,1-.31-.31v-1.33l-.06-.27-.09,0h-.31l-.17.05-.36.45a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.31.31,0,0,1,.21.23l.1.51V1058A.31.31,0,0,1,511.88,1058.29Z" />
                                            <path
                                                d="M513.41,1058.29a.3.3,0,0,1-.3-.31v-1.33l-.06-.27-.1,0h-.3l-.18.05-.35.45a.3.3,0,0,1-.43,0,.3.3,0,0,1-.05-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0h.4l.1,0,.31.1a.31.31,0,0,1,.2.23l.11.51V1058A.31.31,0,0,1,513.41,1058.29Z" />
                                            <path
                                                d="M516.38,1058.29h-1.94a.32.32,0,0,1-.29-.19.33.33,0,0,1,.08-.34l1.4-1.3.34-.59v-.19l0-.14-.09,0-.08-.06-.12-.12h-.39l-.29.22-.11.19a.31.31,0,0,1-.62,0v-.1a.34.34,0,0,1,0-.17l.35-.46.35-.24a.34.34,0,0,1,.17,0h.62a.31.31,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.1.3a.36.36,0,0,1,0,.1v.31a.2.2,0,0,1,0,.13l-.1.21-.32.53a.18.18,0,0,1,0,.07l-.86.8h1.16a.3.3,0,0,1,.31.3A.31.31,0,0,1,516.38,1058.29Z" />
                                            <path
                                                d="M523.75,1059.62a.3.3,0,0,1-.3-.31v-2.16h0l-.31.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.2-.39l.22-.07.35-.45a.29.29,0,0,1,.34-.09.3.3,0,0,1,.21.29v3A.31.31,0,0,1,523.75,1059.62Z" />
                                            <path
                                                d="M526.62,1059.62a.31.31,0,0,1-.31-.31v-2.16h0l-.31.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.19-.39l.23-.07.35-.45a.29.29,0,0,1,.34-.09.3.3,0,0,1,.2.29v3A.3.3,0,0,1,526.62,1059.62Z" />
                                            <path
                                                d="M529.69,1059.62a.31.31,0,0,1-.31-.31v-.61h-1.12a.32.32,0,0,1-.28-.16.33.33,0,0,1,0-.32l1.44-2a.3.3,0,0,1,.34-.12.31.31,0,0,1,.22.3v1.74h.4a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31H530v.61A.31.31,0,0,1,529.69,1059.62Zm-.84-1.53h.53v-.77Z" />
                                            <path
                                                d="M531.33,1059.62a.31.31,0,0,1-.31-.29l-.1-1.94a.31.31,0,1,1,.61,0l.1,2a.3.3,0,0,1-.29.32Z" />
                                            <path
                                                d="M532.86,1059.62a.31.31,0,0,1-.31-.31V1058l-.17-.36H532l-.08,0-.36.46a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.51a.27.27,0,0,1,.1-.08l.2-.1a.25.25,0,0,1,.14,0h.51a.23.23,0,0,1,.14,0l.2.1a.29.29,0,0,1,.15.16l.21.51a.52.52,0,0,1,0,.11v1.33A.31.31,0,0,1,532.86,1059.62Z" />
                                            <path
                                                d="M534.4,1059.62a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.18,0-.35.45a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.43l.41-.51a.33.33,0,0,1,.14-.1l.31-.1.1,0H534l.09,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.3.3,0,0,1,534.4,1059.62Z" />
                                            <path
                                                d="M537.36,1059.62h-1.94a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.43-.53v-.09l-.22-.28-.18-.12h-.33l-.35.22,0,.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.1-.3a.31.31,0,0,1,.16-.18l.2-.1.28-.19a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.45.35.25.35a.34.34,0,0,1,.05.17v.31a.27.27,0,0,1-.09.21l-.21.21-.27.38-.88.94h1.24a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M547.6,1060.34a.31.31,0,0,1-.31-.31v-2.33h0l-.26.14a.31.31,0,0,1-.41-.14.3.3,0,0,1,.14-.41l.2-.1.46-.38a.31.31,0,0,1,.32,0,.3.3,0,0,1,.18.27v3A.31.31,0,0,1,547.6,1060.34Z" />
                                            <path
                                                d="M550.36,1060.34a.3.3,0,0,1-.3-.31v-2.27h0l-.3.11a.31.31,0,0,1-.39-.2.3.3,0,0,1,.19-.39l.24-.08.36-.35a.29.29,0,0,1,.33-.07.3.3,0,0,1,.19.28v3A.31.31,0,0,1,550.36,1060.34Z" />
                                            <path
                                                d="M553.54,1060.34a.31.31,0,0,1-.31-.31v-.72H552.1a.3.3,0,0,1-.24-.48l1.43-1.95a.3.3,0,0,1,.55.18v1.64h.41a.31.31,0,0,1,.31.31.3.3,0,0,1-.31.3h-.41v.72A.3.3,0,0,1,553.54,1060.34Zm-.83-1.64h.52v-.7Z" />
                                            <path
                                                d="M555.07,1060.34a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,555.07,1060.34Z" />
                                            <path
                                                d="M556.61,1060.34a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.36.38a.32.32,0,0,1-.44,0,.31.31,0,0,1,0-.44l.41-.41.36-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.36.36,0,0,1,.12.18l.11.41V1060A.3.3,0,0,1,556.61,1060.34Z" />
                                            <path
                                                d="M558.14,1060.34a.3.3,0,0,1-.3-.31v-1.43l-.06-.22-.14-.09h-.22l-.23.15-.37.38a.31.31,0,0,1-.43-.44l.41-.41.35-.24a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.2a.38.38,0,0,1,.13.18l.1.41V1060A.31.31,0,0,1,558.14,1060.34Z" />
                                            <path
                                                d="M561.11,1060.34h-1.94a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.33.07-.22v-.21l0-.13-.31-.12h-.42l-.24.11-.11.18v.12a.31.31,0,0,1-.62,0v-.21a.34.34,0,0,1,0-.17l.35-.45a.25.25,0,0,1,.12-.08l.31-.1h.7l.55.22a.31.31,0,0,1,.16.18l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.31a.22.22,0,0,1-.05.08l-.31.41-.93.94h1.2a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M571.35,1060.54a.3.3,0,0,1-.31-.3V1058l-.24.17a.32.32,0,0,1-.43-.09.31.31,0,0,1,.09-.42l.31-.21.36-.37a.31.31,0,0,1,.33-.07.3.3,0,0,1,.19.29v3A.29.29,0,0,1,571.35,1060.54Z" />
                                            <path
                                                d="M574.21,1060.54a.3.3,0,0,1-.31-.3V1058l-.23.17a.32.32,0,0,1-.43-.09.3.3,0,0,1,.09-.42l.3-.21.36-.37a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,574.21,1060.54Z" />
                                            <path
                                                d="M577.28,1060.54a.3.3,0,0,1-.31-.3v-.72h-1.12a.3.3,0,0,1-.27-.17.29.29,0,0,1,0-.32l1.43-1.94a.3.3,0,0,1,.35-.11.3.3,0,0,1,.21.29v1.64H578a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-.41v.72A.3.3,0,0,1,577.28,1060.54Zm-.82-1.63H577v-.71Z" />
                                            <path
                                                d="M578.82,1060.54a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.29.29,0,0,1,578.82,1060.54Z" />
                                            <path
                                                d="M580.46,1060.54a.3.3,0,0,1-.31-.3v-1.36l-.12-.24-.14,0h-.28l-.14.07-.46.37a.31.31,0,0,1-.38-.48l.51-.41.26-.13a.33.33,0,0,1,.13,0h.41l.1,0,.31.1a.31.31,0,0,1,.18.16l.2.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,580.46,1060.54Z" />
                                            <path
                                                d="M582,1060.54a.3.3,0,0,1-.31-.3v-1.36l-.17-.28h-.29l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41a.33.33,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,582,1060.54Z" />
                                            <path
                                                d="M585,1060.54h-2a.3.3,0,0,1-.22-.51l1.33-1.44.43-.6v-.08l-.12-.12a.22.22,0,0,1,0-.08l0-.09-.14,0h-.49l-.09,0-.19.23v.13a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.32.32,0,0,1,0-.14l.1-.2.06-.08.21-.21.08-.05.2-.11a.32.32,0,0,1,.14,0h.61l.1,0,.31.1a.28.28,0,0,1,.17.15l.08.16.17.17a.31.31,0,0,1,.09.22v.31a.26.26,0,0,1,0,.17l-.52.73-.87.94H585a.31.31,0,0,1,.31.31A.3.3,0,0,1,585,1060.54Z" />
                                            <path
                                                d="M595.19,1061.16a.3.3,0,0,1-.3-.31v-2.33h0l-.25.14a.32.32,0,0,1-.42-.14.31.31,0,0,1,.14-.41l.21-.1.45-.38a.3.3,0,0,1,.5.24v3A.31.31,0,0,1,595.19,1061.16Z" />
                                            <path
                                                d="M598,1061.16a.31.31,0,0,1-.31-.31v-2.27h0l-.31.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.19-.39l.24-.08.36-.36a.32.32,0,0,1,.34-.06.32.32,0,0,1,.19.28v3A.31.31,0,0,1,598,1061.16Z" />
                                            <path
                                                d="M601.13,1061.16a.31.31,0,0,1-.31-.31v-.72H599.7a.32.32,0,0,1-.28-.16.33.33,0,0,1,0-.33l1.43-1.94a.31.31,0,0,1,.56.18v1.64h.41a.3.3,0,0,1,.3.31.29.29,0,0,1-.3.3h-.41v.72A.31.31,0,0,1,601.13,1061.16Zm-.82-1.64h.51v-.7Z" />
                                            <path
                                                d="M602.67,1061.16a.31.31,0,0,1-.31-.31v-2a.3.3,0,0,1,.31-.3.29.29,0,0,1,.3.3v2A.3.3,0,0,1,602.67,1061.16Z" />
                                            <path
                                                d="M604.2,1061.16a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.22l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,604.2,1061.16Z" />
                                            <path
                                                d="M605.74,1061.16a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.14-.09H605l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,605.74,1061.16Z" />
                                            <path
                                                d="M608.7,1061.16h-1.94a.31.31,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.24-.34.07-.21v-.21l0-.14-.31-.11h-.41l-.25.11-.11.2a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.26.26,0,0,1,.05-.17l.34-.45a.42.42,0,0,1,.12-.08l.31-.1.1,0H608l.1,0,.55.22a.3.3,0,0,1,.15.18l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.19.19,0,0,1,0,.09l-.31.41-.94.94h1.2a.31.31,0,1,1,0,.62Z" />
                                            <path
                                                d="M618.94,1061.57a.31.31,0,0,1-.31-.31V1059h0l-.31.1a.3.3,0,0,1-.39-.19.32.32,0,0,1,.2-.39l.24-.08.35-.36a.32.32,0,0,1,.34-.06.32.32,0,0,1,.19.28v3A.31.31,0,0,1,618.94,1061.57Z" />
                                            <path
                                                d="M621.81,1061.57a.31.31,0,0,1-.31-.31v-2.33h0l-.26.14a.33.33,0,0,1-.42-.14.31.31,0,0,1,.14-.41l.21-.1.45-.38a.33.33,0,0,1,.33,0,.31.31,0,0,1,.17.28v3A.3.3,0,0,1,621.81,1061.57Z" />
                                            <path
                                                d="M624.88,1061.57a.31.31,0,0,1-.31-.31v-.72h-1.13a.29.29,0,0,1-.27-.17.31.31,0,0,1,0-.32l1.43-1.94a.3.3,0,0,1,.34-.11.3.3,0,0,1,.21.29v1.64h.41a.31.31,0,0,1,.31.31.3.3,0,0,1-.31.3h-.41v.72A.3.3,0,0,1,624.88,1061.57Zm-.83-1.64h.52v-.7Z" />
                                            <path
                                                d="M626.41,1061.57a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,626.41,1061.57Z" />
                                            <path
                                                d="M628.05,1061.57a.31.31,0,0,1-.31-.31v-1.36l-.13-.27-.16-.11h-.23l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.26.26,0,0,1,.17,0h.41a.26.26,0,0,1,.17,0l.3.2a.25.25,0,0,1,.11.12l.2.41a.23.23,0,0,1,0,.14v1.43A.31.31,0,0,1,628.05,1061.57Z" />
                                            <path
                                                d="M629.58,1061.57a.3.3,0,0,1-.3-.31v-1.36l-.23-.38h-.26l-.52.52a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.61a.27.27,0,0,1,.21-.09h.52a.29.29,0,0,1,.21.09l.21.2a.22.22,0,0,1,0,.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,629.58,1061.57Z" />
                                            <path
                                                d="M632.55,1061.57h-2a.32.32,0,0,1-.29-.19.31.31,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.21l-.11-.24-.18-.11h-.4l-.12.11-.07.06-.1,0,0,.2a.31.31,0,0,1-.62,0v-.11a.29.29,0,0,1,0-.09l.1-.31a.31.31,0,0,1,.16-.18l.16-.08.17-.17a.27.27,0,0,1,.21-.09h.62a.34.34,0,0,1,.17,0l.45.35a.25.25,0,0,1,.08.12l.1.31a.29.29,0,0,1,0,.09v.31a.36.36,0,0,1,0,.1l-.1.3a.26.26,0,0,1,0,.09l-.31.41-.93.94h1.3a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M645.76,1062a.31.31,0,0,1-.31-.3l-.08-2.26-.11.11a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.62-.62a.33.33,0,0,1,.33-.07.32.32,0,0,1,.19.28l.1,3a.3.3,0,0,1-.29.32Z" />
                                            <path
                                                d="M648.52,1062a.31.31,0,0,1-.31-.31v-2.26l-.24.16a.31.31,0,0,1-.34-.51l.31-.21.36-.37a.33.33,0,0,1,.34-.06.31.31,0,0,1,.19.28v3A.31.31,0,0,1,648.52,1062Z" />
                                            <path
                                                d="M651.69,1062a.3.3,0,0,1-.3-.31V1061h-1.13a.28.28,0,0,1-.27-.17.29.29,0,0,1,0-.32l1.44-1.94a.29.29,0,0,1,.34-.11.31.31,0,0,1,.21.29v1.64h.41a.31.31,0,0,1,.31.31.3.3,0,0,1-.31.3H652v.72A.31.31,0,0,1,651.69,1062Zm-.82-1.64h.52v-.7Z" />
                                            <path
                                                d="M653.23,1062a.31.31,0,0,1-.31-.31v-2a.31.31,0,0,1,.62,0v2A.31.31,0,0,1,653.23,1062Z" />
                                            <path
                                                d="M654.76,1062a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0H654l-.19.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.12-.08.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.31.31,0,0,1,654.76,1062Z" />
                                            <path
                                                d="M656.3,1062a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,1,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.3-.1H656l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.31.31,0,0,1,656.3,1062Z" />
                                            <path
                                                d="M659.27,1062h-1.95a.32.32,0,0,1-.28-.19.32.32,0,0,1,.06-.34l1.44-1.43.25-.34.07-.32-.07-.19-.1-.1-.19-.06h-.41l-.14,0-.22.37a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.11a.34.34,0,0,1,0-.17l.29-.47a.3.3,0,0,1,.17-.16l.31-.1.1,0h.51l.1,0,.3.1a.25.25,0,0,1,.12.08l.21.2a.29.29,0,0,1,.07.12l.11.31a.28.28,0,0,1,0,.09v.21a.34.34,0,0,1,0,.1l-.11.3a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M669.5,1062.39a.31.31,0,0,1-.31-.31v-2.26l-.23.16a.32.32,0,0,1-.43-.08.31.31,0,0,1,.09-.43l.3-.21.36-.37a.31.31,0,0,1,.53.22v3A.31.31,0,0,1,669.5,1062.39Z" />
                                            <path
                                                d="M672.37,1062.39a.31.31,0,0,1-.31-.31v-2.33l-.19.19a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.21-.21.54-.43a.31.31,0,0,1,.5.24v3A.31.31,0,0,1,672.37,1062.39Z" />
                                            <path
                                                d="M675.44,1062.39a.31.31,0,0,1-.31-.31v-.72H674a.3.3,0,0,1-.28-.17.31.31,0,0,1,0-.32l1.43-1.94a.3.3,0,0,1,.34-.11.31.31,0,0,1,.22.29v1.64h.41a.31.31,0,0,1,0,.61h-.41v.72A.31.31,0,0,1,675.44,1062.39Zm-.83-1.64h.52V1060Z" />
                                            <path
                                                d="M677,1062.39a.3.3,0,0,1-.3-.31v-1.95a.29.29,0,0,1,.3-.3.3.3,0,0,1,.31.3v1.95A.31.31,0,0,1,677,1062.39Z" />
                                            <path
                                                d="M678.61,1062.39a.31.31,0,0,1-.31-.31v-1.36l-.11-.23-.14,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.36.36,0,0,1,.12-.08l.3-.1h.61l.3.1a.32.32,0,0,1,.18.16l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,678.61,1062.39Z" />
                                            <path
                                                d="M680.15,1062.39a.31.31,0,0,1-.31-.31v-1.36l-.17-.28h-.37l-.1,0-.37.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.08-.06.21-.1a.32.32,0,0,1,.14,0h.51a.28.28,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.32.32,0,0,1,0,.14v1.43A.3.3,0,0,1,680.15,1062.39Z" />
                                            <path
                                                d="M683.12,1062.39h-2a.32.32,0,0,1-.29-.19.33.33,0,0,1,.07-.34l1.43-1.43.25-.34.07-.21v-.19l-.11-.23-.14,0h-.49l-.1,0-.18.23v.14a.3.3,0,0,1-.31.3.29.29,0,0,1-.3-.3v-.21a.35.35,0,0,1,0-.14l.1-.2a.24.24,0,0,1,.06-.08l.2-.2a.21.21,0,0,1,.08-.06l.21-.1a.22.22,0,0,1,.13,0h.62l.1,0,.3.1a.31.31,0,0,1,.18.16l.21.4a.35.35,0,0,1,0,.14v.31a.44.44,0,0,1,0,.1l-.1.3a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.31a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M693.25,1062.79a.3.3,0,0,1-.31-.3v-2.27l-.24.17a.31.31,0,0,1-.34-.51l.31-.21.36-.37a.31.31,0,0,1,.53.22v3A.3.3,0,0,1,693.25,1062.79Z" />
                                            <path
                                                d="M696.11,1062.79a.29.29,0,0,1-.3-.3v-2.27l-.24.17a.31.31,0,0,1-.43-.09.31.31,0,0,1,.09-.42l.3-.21.37-.37a.31.31,0,0,1,.52.22v3A.3.3,0,0,1,696.11,1062.79Z" />
                                            <path
                                                d="M699.29,1062.79a.3.3,0,0,1-.31-.3v-.72h-1.13a.29.29,0,0,1-.27-.17.31.31,0,0,1,0-.32l1.43-1.94a.3.3,0,0,1,.34-.11.3.3,0,0,1,.21.29v1.64h.31a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-.31v.72A.29.29,0,0,1,699.29,1062.79Zm-.83-1.63H699v-.71Z" />
                                            <path
                                                d="M700.82,1062.79a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,700.82,1062.79Z" />
                                            <path
                                                d="M702.36,1062.79a.3.3,0,0,1-.31-.3v-1.44l0-.16-.1,0h-.31l-.19.06-.36.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.42.42,0,0,1,.12-.08l.31-.1h.61l.3.1a.31.31,0,0,1,.2.22l.11.41v1.51A.29.29,0,0,1,702.36,1062.79Z" />
                                            <path
                                                d="M703.89,1062.79a.29.29,0,0,1-.3-.3v-1.44l-.05-.16-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,703.89,1062.79Z" />
                                            <path
                                                d="M706.86,1062.79h-1.94a.31.31,0,0,1-.29-.18.31.31,0,0,1,.07-.34l1.4-1.4.35-.62v-.09l-.11-.12a.16.16,0,0,1-.06-.08l0-.09-.14,0h-.41l-.14,0,0,.09-.06.08-.11.12v.08a.31.31,0,0,1-.62,0V1060a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.34.34,0,0,1,.18-.15l.31-.1.09,0h.51l.1,0,.31.1a.34.34,0,0,1,.18.15l.08.16.17.17a.36.36,0,0,1,.09.22v.31a.27.27,0,0,1-.06.17l-.2.31-.19.37a.22.22,0,0,1,0,.08l-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,706.86,1062.79Z" />
                                            <path
                                                d="M717.1,1063.2a.3.3,0,0,1-.31-.3v-2.27h0l-.3.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.19-.39l.24-.08.36-.36a.29.29,0,0,1,.33-.06.28.28,0,0,1,.19.28v3A.29.29,0,0,1,717.1,1063.2Z" />
                                            <path
                                                d="M720,1063.2a.29.29,0,0,1-.3-.3v-2.33h0l-.26.14a.31.31,0,0,1-.41-.14.31.31,0,0,1,.14-.41l.2-.11.46-.37a.33.33,0,0,1,.33,0,.32.32,0,0,1,.17.28v3A.3.3,0,0,1,720,1063.2Z" />
                                            <path
                                                d="M723,1063.2a.29.29,0,0,1-.3-.3v-.72H721.6a.28.28,0,0,1-.27-.17.29.29,0,0,1,0-.32l1.44-1.94a.29.29,0,0,1,.34-.11.31.31,0,0,1,.21.29v1.64h.41a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-.41v.72A.3.3,0,0,1,723,1063.2Zm-.82-1.63h.52v-.71Z" />
                                            <path
                                                d="M724.57,1063.2a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.62,0v2A.3.3,0,0,1,724.57,1063.2Z" />
                                            <path
                                                d="M726.1,1063.2a.29.29,0,0,1-.3-.3v-1.44l0-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41a.32.32,0,0,1,.12-.08l.31-.1h.6l.31.1a.34.34,0,0,1,.2.22l.1.41v1.51A.3.3,0,0,1,726.1,1063.2Z" />
                                            <path
                                                d="M727.74,1063.2a.3.3,0,0,1-.31-.3v-1.36l-.23-.38H727l-.12.11-.53.43a.31.31,0,0,1-.44,0,.33.33,0,0,1,0-.44l.69-.59a.36.36,0,0,1,.22-.09h.51a.36.36,0,0,1,.22.09l.2.21a.16.16,0,0,1,.06.08l.21.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,727.74,1063.2Z" />
                                            <path
                                                d="M730.71,1063.2h-2.05a.3.3,0,0,1-.28-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.19l-.12-.23-.14,0h-.51l-.14,0-.12.23v.14a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.21a.35.35,0,0,1,0-.14l.21-.41a.31.31,0,0,1,.17-.15l.31-.1.1,0H730l.1,0,.31.1a.31.31,0,0,1,.17.15l.21.41a.35.35,0,0,1,0,.14v.31a.28.28,0,0,1,0,.09l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,0,1,.31.31A.3.3,0,0,1,730.71,1063.2Z" />
                                            <path
                                                d="M740.84,1063.61a.3.3,0,0,1-.31-.3V1061h0l-.31.1a.31.31,0,1,1-.19-.58l.24-.08.35-.36a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,740.84,1063.61Z" />
                                            <path
                                                d="M743.71,1063.61a.3.3,0,0,1-.31-.3V1061h0l-.31.1a.31.31,0,0,1-.2-.58l.24-.08.36-.36a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,743.71,1063.61Z" />
                                            <path
                                                d="M746.78,1063.61a.3.3,0,0,1-.31-.3v-.72h-1a.29.29,0,0,1-.27-.16.31.31,0,0,1,0-.32l1.34-1.95a.28.28,0,0,1,.34-.11.29.29,0,0,1,.22.29V1062h.41a.29.29,0,0,1,.3.3.3.3,0,0,1-.3.31h-.41v.72A.3.3,0,0,1,746.78,1063.61ZM746,1062h.44v-.65Z" />
                                            <path
                                                d="M748.42,1063.61a.3.3,0,0,1-.31-.3v-2a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2A.29.29,0,0,1,748.42,1063.61Z" />
                                            <path
                                                d="M750,1063.61a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.22l-.23.15-.37.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.31.21a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,750,1063.61Z" />
                                            <path
                                                d="M751.49,1063.61a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17,0h.41a.34.34,0,0,1,.17,0l.3.21a.29.29,0,0,1,.13.18l.11.41v1.51A.29.29,0,0,1,751.49,1063.61Z" />
                                            <path
                                                d="M754.45,1063.61h-1.94a.29.29,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.4-1.4.36-.63v-.12l-.16-.23-.2-.06h-.41l-.25.11-.11.18v.11a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.26.26,0,0,1,.05-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.1.1,0h.51l.1,0,.3.1a.24.24,0,0,1,.12.07l.11.11.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.21.3-.18.38-.06.08-.91.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,754.45,1063.61Z" />
                                            <path
                                                d="M764.69,1064a.3.3,0,0,1-.31-.3v-2.27h0l-.31.1a.3.3,0,0,1-.39-.19.31.31,0,0,1,.2-.39l.24-.08.35-.36a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,764.69,1064Z" />
                                            <path
                                                d="M767.56,1064a.3.3,0,0,1-.31-.29l-.08-2.29-.19.09a.3.3,0,0,1-.41-.13.31.31,0,0,1,.13-.42l.16-.08.38-.37a.33.33,0,0,1,.33-.07.31.31,0,0,1,.19.28l.1,3a.29.29,0,0,1-.29.31Z" />
                                            <path
                                                d="M770.63,1064a.3.3,0,0,1-.31-.3V1063h-1.13a.31.31,0,0,1-.27-.17.31.31,0,0,1,0-.32l1.43-1.94a.3.3,0,0,1,.34-.11.3.3,0,0,1,.21.29v1.64h.41a.3.3,0,0,1,.31.3.31.31,0,0,1-.31.31h-.41v.72A.29.29,0,0,1,770.63,1064Zm-.83-1.63h.52v-.71Z" />
                                            <path
                                                d="M772.16,1064a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,772.16,1064Z" />
                                            <path
                                                d="M773.7,1064a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.14-.09H773l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.4-.41.36-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.32.32,0,0,1,.12.18l.11.41v1.51A.29.29,0,0,1,773.7,1064Z" />
                                            <path
                                                d="M775.34,1064a.3.3,0,0,1-.31-.3v-1.36l-.14-.28-.16-.1h-.19l-.11.11-.54.43a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.69-.59a.27.27,0,0,1,.21-.09h.41a.34.34,0,0,1,.17.05l.31.21a.32.32,0,0,1,.11.12l.2.41a.31.31,0,0,1,0,.13v1.44A.29.29,0,0,1,775.34,1064Z" />
                                            <path
                                                d="M778.3,1064h-2a.3.3,0,0,1-.29-.19.3.3,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l0-.14-.24-.12H777l-.19.07-.06.19v.15a.31.31,0,0,1-.62,0v-.2a.36.36,0,0,1,0-.1l.1-.3a.25.25,0,0,1,.08-.12l.1-.11a.24.24,0,0,1,.12-.07l.31-.1.09,0h.62a.31.31,0,0,1,.13,0l.41.21a.29.29,0,0,1,.16.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1,0,.09l-.31.41-.93.94h1.3a.31.31,0,0,1,.31.31A.3.3,0,0,1,778.3,1064Z" />
                                            <path
                                                d="M529.87,1053.52h-2a.3.3,0,0,1-.29-.19.32.32,0,0,1,.06-.35l1.48-1.48.26-.34.07-.22v-.19l-.05-.1-.12-.13-.2-.06h-.42l-.14,0,0,.09-.06.08-.12.12v.08a.32.32,0,1,1-.63,0v-.21a.31.31,0,0,1,.09-.22l.17-.18.09-.16a.28.28,0,0,1,.18-.16l.32-.11.1,0h.53l.1,0,.31.11a.33.33,0,0,1,.13.07l.21.21.06.09.1.21a.23.23,0,0,1,0,.14v.32a.36.36,0,0,1,0,.1l-.1.31a.36.36,0,0,1-.05.09l-.32.43-1,1h1.25a.32.32,0,0,1,0,.63Z" />
                                            <path
                                                d="M553.11,1054.16l-.5-.12a.29.29,0,0,1-.14-.08l-.11-.11-.25-.36a.32.32,0,1,1,.53-.35l.2.31.35.08h.35l.33-.07.14-.21.16-.32v-.17l-.22-.38-.19-.11h-.33a.33.33,0,0,1-.26-.51l.48-.66h-1a.32.32,0,1,1,0-.63h1.59a.33.33,0,0,1,.28.17.32.32,0,0,1,0,.33l-.51.71h0l.47.36.06.08.21.43a.33.33,0,0,1,0,.14v.31a.42.42,0,0,1,0,.15l-.21.42-.23.35a.35.35,0,0,1-.2.14l-.53.1Z" />
                                            <path
                                                d="M578.48,1054.47a.31.31,0,0,1-.32-.31v-.74H577a.32.32,0,0,1-.28-.17.3.3,0,0,1,0-.33l1.48-2.11a.31.31,0,0,1,.35-.13.33.33,0,0,1,.22.31v1.79h.43a.32.32,0,0,1,.31.32.31.31,0,0,1-.31.32h-.43v.74A.31.31,0,0,1,578.48,1054.47Zm-.87-1.69h.55V1052Z" />
                                            <path
                                                d="M602.25,1055l-.5-.11a.31.31,0,0,1-.2-.17l-.09-.16-.17-.18a.31.31,0,0,1,0-.45.33.33,0,0,1,.45,0l.21.21.06.09,0,.08.28.07h.34l.34-.07.14-.21.16-.32v-.17l-.3-.53-.4-.08h-.36l-.2.06,0,.09a.33.33,0,0,1-.37.16.31.31,0,0,1-.23-.33l.1-1.37a.33.33,0,0,1,.32-.3h1.48a.33.33,0,0,1,.32.32.32.32,0,0,1-.32.32h-1.19l0,.45.09,0h.49l.6.11a.35.35,0,0,1,.2.14l.21.31.23.46a.35.35,0,0,1,0,.14v.32a.32.32,0,0,1,0,.14l-.21.42-.23.36a.34.34,0,0,1-.2.13l-.53.11Z" />
                                            <path
                                                d="M627.09,1055.43l-.5-.12a.33.33,0,0,1-.19-.13l-.21-.32a.25.25,0,0,1,0-.07l-.21-.64a.36.36,0,0,1,0-.11v-.62s0-.06,0-.09l.22-.74.22-.56a.35.35,0,0,1,.22-.19l.42-.1h.39l.5.11a.33.33,0,0,1,.19.13l.21.32a.32.32,0,0,1-.53.35l-.14-.21-.3-.08h-.24l-.19.05-.23.65.27-.14.15,0h.21a.35.35,0,0,1,.14,0l.42.21.35.24a.26.26,0,0,1,.13.18l.11.43v.28l-.12.5a.28.28,0,0,1-.08.15l-.32.32a.29.29,0,0,1-.14.08l-.43.11Zm-.23-.7.3.07h.14l.25-.07.2-.2.08-.33v-.14l-.06-.22-.22-.15-.38-.16-.31.16-.14.14-.13.26.16.46Z" />
                                            <path
                                                d="M653.54,1055.83a.22.22,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.52h-1.56a.31.31,0,0,1,0-.62H655a.32.32,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.43,3A.29.29,0,0,1,653.54,1055.83Z" />
                                            <path
                                                d="M678,1056.35h-.51a.23.23,0,0,1-.14,0l-.62-.3a.34.34,0,0,1-.15-.18l-.1-.31a.29.29,0,0,1,0-.09V1055a.3.3,0,0,1,0-.1l.1-.31a.37.37,0,0,1,.07-.12l.21-.2-.06,0a.38.38,0,0,1-.12-.16l-.1-.31a.29.29,0,0,1,0-.09v-.21a.36.36,0,0,1,0-.1l.1-.3a.31.31,0,0,1,.18-.19l.51-.21.12,0H678a.35.35,0,0,1,.14,0l.4.21a.29.29,0,0,1,.12.1l.21.31a.34.34,0,0,1,0,.17v.21a.37.37,0,0,1,0,.17l-.29.39.25.24a.37.37,0,0,1,.07.12l.11.31a.31.31,0,0,1,0,.1v.41a.28.28,0,0,1,0,.09l-.11.31a.3.3,0,0,1-.15.18l-.61.3A.25.25,0,0,1,678,1056.35Zm-.44-.62h.37l.43-.21,0-.14v-.31l-.07-.2-.19-.19-.41-.1-.4.1-.2.19-.06.2v.31l0,.13Zm-.16-1.82.34,0,.32,0,.13-.13.11-.21-.1-.16-.27-.13h-.38l-.33.13,0,.23.05.16Z" />
                                            <path
                                                d="M701.23,1056.65l-.48-.11a.3.3,0,0,1-.22-.2l-.1-.31a.29.29,0,0,1,.19-.38.3.3,0,0,1,.39.19l0,.15.25.06h.23l.22-.06.2-.27,0-.29-.56.11-.58-.11a.29.29,0,0,1-.19-.13l-.21-.31-.22-.44a.32.32,0,0,1,0-.14v-.1a.32.32,0,0,1,0-.14l.2-.41.23-.34a.29.29,0,0,1,.12-.1l.41-.21a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.41.21a.19.19,0,0,1,.07.06l.31.3a.37.37,0,0,1,.09.16l.1.51a.24.24,0,0,1,0,.12v.66l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.34.34,0,0,1-.17.11l-.41.1Zm-.12-1.81.39.08.29-.08.19-.19.07-.27L702,1054l-.2-.2-.36-.15-.28.13-.15.24-.15.29Z" />
                                            <path
                                                d="M725.49,1057.06a.3.3,0,0,1-.31-.3v-2.17h0l-.31.1a.31.31,0,1,1-.19-.58l.22-.07.35-.44a.28.28,0,0,1,.34-.1.31.31,0,0,1,.21.29v3A.3.3,0,0,1,725.49,1057.06Z" />
                                            <path
                                                d="M728.05,1057.06l-.49-.11a.45.45,0,0,1-.17-.11l-.3-.41a.24.24,0,0,1-.05-.1l-.21-.72a.22.22,0,0,1,0-.08v-.41a.28.28,0,0,1,0-.09l.21-.71.22-.47a.36.36,0,0,1,.16-.14l.51-.21.12,0h.2l.12,0,.51.21a.29.29,0,0,1,.16.15l.2.4.23.77a.28.28,0,0,1,0,.09v.41a.22.22,0,0,1,0,.08l-.21.72-.22.46a.27.27,0,0,1-.22.16l-.51.11Zm-.23-.68.3.08h.13l.31-.07.13-.27.18-.62v-.33l-.2-.67-.13-.25-.43-.15-.35.14-.15.31-.18.62v.33l.18.62Z" />
                                            <path
                                                d="M749.24,1057.47a.3.3,0,0,1-.31-.3v-2.27l-.24.17a.32.32,0,0,1-.43-.09.31.31,0,0,1,.09-.42l.31-.21.36-.37a.31.31,0,0,1,.33-.07.3.3,0,0,1,.19.29v3A.29.29,0,0,1,749.24,1057.47Z" />
                                            <path
                                                d="M752.1,1057.47a.3.3,0,0,1-.31-.3v-2.27l-.24.17a.31.31,0,0,1-.42-.09.29.29,0,0,1,.08-.42l.31-.21.36-.37a.33.33,0,0,1,.34-.07.32.32,0,0,1,.19.29v3A.3.3,0,0,1,752.1,1057.47Z" />
                                            <path
                                                d="M773.08,1057.88a.3.3,0,0,1-.3-.31v-2.32l-.2.19a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.2-.2.54-.43a.3.3,0,0,1,.33,0,.32.32,0,0,1,.17.28v3A.31.31,0,0,1,773.08,1057.88Z" />
                                            <path
                                                d="M776.77,1057.88h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.25-.33.07-.32,0-.14-.09,0L776,1055l-.12-.12h-.39l-.23.16-.07.25a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.24.24,0,0,1,.07-.12l.1-.11.36-.24a.34.34,0,0,1,.17,0h.61a.31.31,0,0,1,.22.09l.17.17.16.08a.3.3,0,0,1,.15.18l.1.3a.44.44,0,0,1,0,.1v.21a.29.29,0,0,1,0,.09l-.1.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.31a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M503.67,1105.76a.3.3,0,0,1,.29-.24l23.76.53a.28.28,0,0,1,.26.31.31.31,0,0,1-.3.3l-23.75-.53a.28.28,0,0,1-.27-.31S503.67,1105.78,503.67,1105.76Z" />
                                            <text class="cls-16" transform="translate(613.54 1146.29)">
                                                <tspan class="cls-17">A</tspan>
                                                <tspan x="9.87" y="0">SOK</tspan>
                                                <tspan class="cls-18" x="39.34" y="0">A</tspan>
                                            </text>
                                            <text class="cls-19" transform="translate(165.65 650.37)">
                                                <tspan class="cls-17">A</tspan>
                                                <tspan class="cls-20" x="9.87" y="0">S</tspan>
                                                <tspan x="18.42" y="0">TER</tspan>
                                            </text>
                                            <text class="cls-21" transform="translate(463.45 365.42)">AZALE<tspan
                                                    class="cls-18" x="45.01" y="0">A</tspan>
                                            </text>
                                            <text class="cls-22" transform="translate(356.91 309.03)">L<tspan
                                                    class="cls-23" x="7.36" y="0">
                                                    A</tspan>
                                                <tspan x="16.21" y="0">VENDER</tspan>
                                            </text>
                                            <text class="cls-24"
                                                transform="translate(282.7 390.26) rotate(-19)">1</text>
                                            <text class="cls-24"
                                                transform="translate(265.61 395.38) rotate(-19)">2</text>
                                            <text class="cls-24"
                                                transform="translate(248.78 400.58) rotate(-19)">3</text>
                                            <text class="cls-24"
                                                transform="translate(231.67 407.16) rotate(-19)">4</text>
                                            <text class="cls-24"
                                                transform="translate(216.1 414.15) rotate(-19)">5</text>
                                            <text class="cls-24"
                                                transform="translate(200.39 420.54) rotate(-19)">6</text>
                                            <text class="cls-24"
                                                transform="translate(181.78 428.09) rotate(-19)">7</text>
                                            <text class="cls-24"
                                                transform="translate(248.37 306.44) rotate(-19)">19</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 228.1, 259.05)">53</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 223.77, 223.7)">51</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 221.65, 205.98)">50</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 219.11, 188.78)">49</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 217.05, 167.5)">48</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 212.31, 132.41)">46</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 214.75, 151.03)">47</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 210.59, 114.43)">45</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 208.31, 93.77)">44</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 205.86, 71.29)">43</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 120.87, 93.77)">35</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 122.81, 110.55)">36</text>
                                            <text class="cls-25"
                                                transform="matrix(-0.1, -0.99, 0.99, -0.1, 123.75, 128.11)">37</text>
                                            <text class="cls-26"
                                                transform="translate(169.41 77.37) rotate(85)">34</text>
                                            <text class="cls-26"
                                                transform="translate(170.87 92.07) rotate(85)">33</text>
                                            <text class="cls-26"
                                                transform="translate(172.28 110.07) rotate(85)">32</text>
                                            <text class="cls-26"
                                                transform="translate(173.16 156.76) rotate(85)">30</text>
                                            <text class="cls-26"
                                                transform="translate(173.17 183.04) rotate(85)">29</text>
                                            <text class="cls-26"
                                                transform="translate(178.64 204.28) rotate(85)">28</text>
                                            <text class="cls-26"
                                                transform="translate(182.12 227.45) rotate(85)">27</text>
                                            <text class="cls-26"
                                                transform="translate(169.5 134.96) rotate(85)">31</text>
                                            <text class="cls-26"
                                                transform="translate(88.36 129.12) rotate(85)">38</text>
                                            <text class="cls-26"
                                                transform="translate(85.21 109.41) rotate(85)">39</text>
                                            <text class="cls-26" transform="translate(83.68 91.88) rotate(85)">40</text>
                                            <text class="cls-26" transform="translate(81.45 75.23) rotate(85)">41</text>
                                            <text class="cls-26" transform="translate(79.72 57.24) rotate(85)">42</text>
                                            <text class="cls-24"
                                                transform="translate(231.28 311.56) rotate(-19)">20</text>
                                            <text class="cls-24"
                                                transform="translate(214.45 316.76) rotate(-19)">21</text>
                                            <text class="cls-24"
                                                transform="translate(197.34 323.34) rotate(-19)">22</text>
                                            <text class="cls-24"
                                                transform="translate(181.7 329.95) rotate(-19)">23</text>
                                            <text class="cls-24"
                                                transform="translate(166.06 336.72) rotate(-19)">24</text>
                                            <text class="cls-24"
                                                transform="translate(147.45 344.26) rotate(-19)">25</text>
                                            <text class="cls-24"
                                                transform="translate(130.37 351.81) rotate(-19)">26</text>
                                            <text class="cls-24"
                                                transform="translate(261.81 338.35) rotate(-19)">18</text>
                                            <text class="cls-24"
                                                transform="translate(244.98 343.55) rotate(-19)">17</text>
                                            <text class="cls-24"
                                                transform="translate(227.87 350.13) rotate(-19)">16</text>
                                            <text class="cls-24"
                                                transform="translate(212.23 356.74) rotate(-19)">15</text>
                                            <text class="cls-24"
                                                transform="translate(196.59 363.51) rotate(-19)">14</text>
                                            <text class="cls-24"
                                                transform="translate(177.98 371.06) rotate(-19)">13</text>
                                            <text class="cls-24"
                                                transform="translate(162.03 433.93) rotate(-19)">8</text>
                                            <text class="cls-24"
                                                transform="translate(141.4 441.48) rotate(-19)">9</text>
                                            <text class="cls-24"
                                                transform="translate(120.02 449.02) rotate(-19)">10</text>
                                            <text class="cls-24"
                                                transform="translate(161.41 378.28) rotate(-19)">12</text>
                                            <text class="cls-24"
                                                transform="translate(144.42 385.43) rotate(-19)">11</text>
                                            <line class="cls-27" x1="639.72" y1="1022.83" x2="637.65" y2="1132.41" />
                                            <line class="cls-28" x1="639.72" y1="1022.83" x2="637.77" y2="1126.37" />
                                            <path class="cls-27"
                                                d="M637.65,1132.41a30.3,30.3,0,0,0-4.59-8.64l4.72,1.81,4.79-1.63A30.23,30.23,0,0,0,637.65,1132.41Z" />
                                            <line class="cls-29" x1="279.1" y1="647.22" x2="224.54" y2="646.73" />
                                            <path class="cls-30"
                                                d="M218.51,646.68A30.36,30.36,0,0,0,227.1,642l-1.76,4.74,1.67,4.77A29.73,29.73,0,0,0,218.51,646.68Z" />
                                            <polygon class="cls-1"
                                                points="452.44 455.94 420.17 455.22 420.37 437.95 452.81 438.62 452.44 455.94"
                                                id="AZALEA11" />
                                            <polygon class="cls-1"
                                                points="485.14 471.56 452.87 470.71 453.06 450.43 485.51 451.2 485.14 471.56"
                                                id="AZALEA7" />
                                            <polygon class="cls-1"
                                                points="484.87 492.6 452.6 491.74 452.8 471.46 485.24 472.24 484.87 492.6"
                                                id="AZALEA8" />
                                            <polygon class="cls-1"
                                                points="452.05 473.8 419.98 473.07 420.17 455.81 452.43 456.47 452.05 473.8"
                                                id="AZALEA10" />
                                            <polygon class="cls-1"
                                                points="452.82 438.23 420.38 437.32 420.89 412.75 453.23 421.44 452.82 438.23"
                                                id="AZALEA12" />
                                            <polygon class="cls-1"
                                                points="485.68 450.42 453.03 449.8 453.79 421.45 486.19 429.14 485.68 450.42"
                                                id="AZALEA6" />
                                            <polygon class="cls-1"
                                                points="538.28 475.08 506.21 474.35 506.4 457.09 538.66 457.75 538.28 475.08"
                                                id="AZALEA4" />
                                            <polygon class="cls-1"
                                                points="570.88 493.52 538.8 492.8 539.08 469.45 571.33 470.11 570.88 493.52"
                                                id="AZALEA2" />
                                            <polygon class="cls-1"
                                                points="538.67 457.02 506.39 456.21 506.85 434.12 539.11 441.71 538.67 457.02"
                                                id="AZALEA5" />
                                            <polygon class="cls-1"
                                                points="571.48 469.33 539.01 468.94 539.57 442.01 571.97 449.71 571.48 469.33"
                                                id="AZALEA1" />
                                            <path class="cls-8"
                                                d="M574.42,450.32h-.07l-72.16-17.1a.3.3,0,1,1,.14-.59l72.16,17.09a.31.31,0,0,1-.07.61Z" />
                                            <path
                                                d="M465.41,442.64l-.48-.11a.32.32,0,0,1-.22-.2l-.1-.31a.3.3,0,0,1,.19-.39.31.31,0,0,1,.39.2l.05.14.25.06h.23l.22-.07.2-.26,0-.29-.39.09h-.28l-.48-.11a.29.29,0,0,1-.18-.13l-.21-.3-.22-.45a.28.28,0,0,1,0-.13v-.11a.31.31,0,0,1,0-.13l.2-.41.23-.34a.32.32,0,0,1,.12-.11l.41-.2a.31.31,0,0,1,.13,0h.21a.35.35,0,0,1,.14,0l.4.2.08.06.31.31a.42.42,0,0,1,.09.16l.1.5a.24.24,0,0,1,0,.12v.66l-.1.76a.35.35,0,0,1-.06.14l-.31.41a.3.3,0,0,1-.17.12l-.41.1Zm-.12-1.81.3.08h.13l.25-.07.19-.19.07-.27-.08-.34-.2-.21-.36-.15-.28.14-.16.24-.14.29Z" />
                                            <path
                                                d="M468.28,442.64l-.49-.11-.26-.13a.29.29,0,0,1-.16-.18l-.1-.3a.31.31,0,0,1,.19-.39.3.3,0,0,1,.39.19l.06.19.09,0,.35.07h.34l.25-.07.19-.19.08-.33v-.23l-.06-.2-.08,0a.24.24,0,0,1-.08-.06l-.11-.11h-.29a.31.31,0,0,1-.27-.17.31.31,0,0,1,0-.32l.46-.64h-.93a.31.31,0,0,1-.31-.31.3.3,0,0,1,.31-.3h1.53a.32.32,0,0,1,.28.16.31.31,0,0,1,0,.32l-.5.69.06,0,.17.17.16.08a.32.32,0,0,1,.16.2l.1.41v.38l-.11.49a.29.29,0,0,1-.08.14l-.31.31a.39.39,0,0,1-.14.08l-.41.1Z" />
                                            <path
                                                d="M470.53,442.64a.31.31,0,0,1-.31-.31v-1.94a.31.31,0,1,1,.62,0v1.94A.31.31,0,0,1,470.53,442.64Z" />
                                            <path
                                                d="M472.06,442.64a.3.3,0,0,1-.3-.31V441l-.06-.27-.1,0h-.31l-.17.06-.35.44a.31.31,0,0,1-.48-.38l.41-.51a.28.28,0,0,1,.14-.1l.31-.1.1,0h.4l.1,0,.31.1a.3.3,0,0,1,.2.23l.1.51v1.39A.31.31,0,0,1,472.06,442.64Z" />
                                            <path
                                                d="M473.6,442.64a.31.31,0,0,1-.31-.31V440.9l-.05-.17-.1,0h-.31l-.17.06-.36.44a.3.3,0,0,1-.43.05.31.31,0,0,1-.05-.43l.41-.51a.31.31,0,0,1,.15-.1l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.4v1.51A.31.31,0,0,1,473.6,442.64Z" />
                                            <path
                                                d="M476.57,442.64h-1.95a.32.32,0,0,1-.28-.19.31.31,0,0,1,.07-.34l1.43-1.43.32-.46V440l-.05-.14-.35-.22h-.33l-.28.22-.12.19a.31.31,0,1,1-.61,0V440a.34.34,0,0,1,.05-.17l.35-.46.35-.24a.26.26,0,0,1,.17-.05h.51a.26.26,0,0,1,.17.05l.48.29a.28.28,0,0,1,.15.17l.11.31a.34.34,0,0,1,0,.1v.3a.32.32,0,0,1,0,.14l-.1.21-.34.45-.94.95h1.21a.29.29,0,0,1,.3.3A.3.3,0,0,1,476.57,442.64Z" />
                                            <path
                                                d="M464.8,466.49a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.46a.31.31,0,0,1,0-.62h2a.31.31,0,0,1,.26.15.32.32,0,0,1,0,.3l-1.44,3A.3.3,0,0,1,464.8,466.49Z" />
                                            <path
                                                d="M467.66,466.49a.3.3,0,0,1-.27-.44l1.22-2.53h-1.46a.31.31,0,0,1,0-.62h2a.32.32,0,0,1,.26.15.32.32,0,0,1,0,.3l-1.43,3A.31.31,0,0,1,467.66,466.49Z" />
                                            <path
                                                d="M470.12,466.49a.31.31,0,0,1-.31-.31v-2.05a.31.31,0,0,1,.62,0v2.05A.31.31,0,0,1,470.12,466.49Z" />
                                            <path
                                                d="M471.65,466.49a.3.3,0,0,1-.3-.31v-1.36l-.23-.38h-.19l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.25.25,0,0,1,.17-.05h.41a.29.29,0,0,1,.21.09l.21.2a.22.22,0,0,1,.05.08l.21.41a.32.32,0,0,1,0,.14v1.43A.31.31,0,0,1,471.65,466.49Z" />
                                            <path
                                                d="M473.19,466.49a.31.31,0,0,1-.31-.31v-1.43l-.06-.22-.13-.09h-.23l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.24a.26.26,0,0,1,.17-.05h.41a.26.26,0,0,1,.17.05l.31.2a.38.38,0,0,1,.13.18l.1.41v1.51A.31.31,0,0,1,473.19,466.49Z" />
                                            <path
                                                d="M476.16,466.49h-2a.32.32,0,0,1-.28-.19A.31.31,0,0,1,474,466l1.39-1.39.36-.63v-.12l-.16-.23-.2-.07H475l-.31.11-.05.14v.16a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.21a.28.28,0,0,1,0-.09l.11-.31a.3.3,0,0,1,.15-.18l.21-.1.34-.12.1,0h.51l.1,0,.31.1a.42.42,0,0,1,.12.08l.1.1.24.35a.34.34,0,0,1,.05.17V464a.34.34,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.91.91h1.21a.31.31,0,0,1,0,.62Z" />
                                            <path
                                                d="M464.39,487.26a.24.24,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.52h-1.45a.31.31,0,0,1,0-.62h1.94a.31.31,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.44,3A.29.29,0,0,1,464.39,487.26Z" />
                                            <path
                                                d="M467.25,487.26a.21.21,0,0,1-.13,0,.3.3,0,0,1-.14-.41l1.22-2.52h-1.46a.31.31,0,0,1,0-.62h1.95a.32.32,0,0,1,.26.15.3.3,0,0,1,0,.29l-1.43,3A.3.3,0,0,1,467.25,487.26Z" />
                                            <path
                                                d="M469.71,487.26a.3.3,0,0,1-.31-.3V485a.31.31,0,0,1,.62,0V487A.3.3,0,0,1,469.71,487.26Z" />
                                            <path
                                                d="M471.25,487.26a.3.3,0,0,1-.31-.3V485.6l-.18-.28h-.36l-.1.05-.37.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.08-.06.21-.1a.31.31,0,0,1,.13,0h.52a.31.31,0,0,1,.13,0l.21.1a.32.32,0,0,1,.14.14l.2.41a.31.31,0,0,1,0,.13V487A.3.3,0,0,1,471.25,487.26Z" />
                                            <path
                                                d="M472.78,487.26a.3.3,0,0,1-.31-.3v-1.44l0-.16-.11,0H472l-.19.06-.36.36a.3.3,0,0,1-.43-.43l.41-.41a.25.25,0,0,1,.12-.08l.3-.1h.61l.31.1a.36.36,0,0,1,.2.22l.1.41V487A.3.3,0,0,1,472.78,487.26Z" />
                                            <path
                                                d="M475.75,487.26H473.8a.3.3,0,0,1-.21-.52l1.39-1.4.36-.64-.22-.36-.14,0h-.41l-.19.06-.1.1-.07.25a.29.29,0,0,1-.3.3.3.3,0,0,1-.31-.3v-.11a.15.15,0,0,1,0-.09l.1-.31a.24.24,0,0,1,.07-.12l.21-.21a.35.35,0,0,1,.12-.07l.3-.1.1,0H475l.1,0,.31.1a.31.31,0,0,1,.17.15l.11.21.18.27a.26.26,0,0,1,.05.17v.21a.26.26,0,0,1-.05.17l-.2.31-.19.37a.16.16,0,0,1-.06.08l-.9.91h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,475.75,487.26Z" />
                                            <path
                                                d="M550.36,462.9h-.51a.35.35,0,0,1-.14,0l-.61-.3a.3.3,0,0,1-.15-.18l-.11-.31a.31.31,0,0,1,0-.1v-.41a.28.28,0,0,1,0-.09l.11-.31a.24.24,0,0,1,.07-.12l.24-.24-.24-.25a.27.27,0,0,1-.09-.21V460a.34.34,0,0,1,.05-.17l.21-.31a.3.3,0,0,1,.18-.13l.41-.1h.58l.49.11a.34.34,0,0,1,.18.13l.2.31a.27.27,0,0,1,.06.17v.2a.27.27,0,0,1-.06.17l-.28.39.24.25a.25.25,0,0,1,.08.12l.1.31a.29.29,0,0,1,0,.09V462a.3.3,0,0,1,0,.1l-.1.31a.75.75,0,0,1-.07.12l-.11.1-.1.07-.51.2A.25.25,0,0,1,550.36,462.9Zm-.44-.61h.38l.41-.17.06-.19v-.31l-.06-.19-.2-.19-.4-.1-.41.1-.19.19-.07.19v.31l0,.14Zm-.12-1.82.31,0,.31,0,.14-.14.11-.2-.09-.13-.29-.07h-.4l-.26.06-.08.13v.09Z" />
                                            <path
                                                d="M552.92,462.9h-.2a.25.25,0,0,1-.12,0l-.51-.2a.34.34,0,0,1-.18-.19l-.1-.31a.31.31,0,0,1,.59-.19l.05.17.4.13.28-.14.23-.31.08-.28-.38.19a.32.32,0,0,1-.14,0h-.1a.35.35,0,0,1-.14,0l-.41-.21a.21.21,0,0,1-.08-.06l-.3-.3a.28.28,0,0,1-.08-.15l-.12-.58.12-.49a.29.29,0,0,1,.08-.14l.3-.31a.53.53,0,0,1,.15-.08l.58-.11.49.11.14.08.31.31a.24.24,0,0,1,.06.11l.21.51h0v0a.28.28,0,0,1,0,.09v.71a.22.22,0,0,1,0,.08l-.21.72a.24.24,0,0,1,0,.1l-.3.41a.31.31,0,0,1-.11.09l-.41.2A.32.32,0,0,1,552.92,462.9Zm-.33-1.88.28.13.28-.13.24-.24.12-.24-.13-.33-.2-.2-.33-.08-.28.08-.19.19-.08.32.08.28Z" />
                                            <path
                                                d="M555,462.9a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.62,0v2.05A.3.3,0,0,1,555,462.9Z" />
                                            <path
                                                d="M556.5,462.9a.29.29,0,0,1-.3-.3v-1.36l-.23-.38h-.19l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.24a.27.27,0,0,1,.17-.06h.41a.33.33,0,0,1,.21.09l.21.21.06.08.2.41a.31.31,0,0,1,0,.13v1.44A.3.3,0,0,1,556.5,462.9Z" />
                                            <path
                                                d="M558,462.9a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.24a.27.27,0,0,1,.17-.06h.41a.27.27,0,0,1,.17.06l.31.2a.34.34,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,558,462.9Z" />
                                            <path
                                                d="M559.06,462.9a.31.31,0,0,1-.28-.18.31.31,0,0,1,.07-.34l1.39-1.39.18-.45a.33.33,0,0,1,.06-.1l.12-.12v-.09l-.22-.28-.18-.12h-.33l-.28.22-.12.19a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.1a.34.34,0,0,1,0-.17l.35-.46.35-.24a.34.34,0,0,1,.17,0h.51a.34.34,0,0,1,.17,0l.46.35.24.35a.34.34,0,0,1,.05.17v.31a.31.31,0,0,1-.09.22l-.16.16-.18.45a.23.23,0,0,1-.07.1l-.86.87,1.14-.06a.31.31,0,0,1,0,.61l-1.94.1Z" />
                                            <path
                                                d="M549.34,486.65l-.48-.11a.29.29,0,0,1-.2-.16l-.08-.16-.17-.17a.31.31,0,0,1-.09-.22v-.51a.31.31,0,0,1,.09-.22l.2-.2.15-.24-.09-.09-.2-.31a.34.34,0,0,1-.05-.17v-.31a.3.3,0,0,1,.05-.16l.2-.31a.31.31,0,0,1,.19-.13l.41-.1H550l.49.11a.34.34,0,0,1,.22.2l.1.31a.28.28,0,0,1,0,.09v.31a.34.34,0,0,1,0,.1l-.1.31a.35.35,0,0,1-.19.19l.42.41a.31.31,0,0,1,.09.22v.51a.31.31,0,0,1-.09.22l-.17.17-.08.16a.29.29,0,0,1-.2.16l-.41.1Zm-.2-.67.27.07H550l.2-.06,0-.08.06-.08.11-.12v-.25l-.38-.39-.38-.17h-.06l-.3.15-.16.24-.15.15v.26l.12.12a.22.22,0,0,1,.05.08Zm0-1.84.48.12.51-.1,0-.12,0-.31-.25-.06h-.5l-.26.07-.09.13V484Z" />
                                            <path
                                                d="M552.21,486.65l-.49-.11a.29.29,0,0,1-.14-.08l-.2-.21a.16.16,0,0,1-.06-.08l-.11-.2a.32.32,0,0,1,0-.14v-.51a.35.35,0,0,1,0-.14l.11-.2a.16.16,0,0,1,.06-.08l.24-.25a.3.3,0,0,1-.08-.08l-.2-.31a.27.27,0,0,1-.06-.17v-.31a.27.27,0,0,1,.06-.17l.2-.3a.29.29,0,0,1,.18-.13l.41-.1h.59l.48.11a.27.27,0,0,1,.18.13l.21.31a.3.3,0,0,1,0,.16v.31a.34.34,0,0,1,0,.17l-.21.31a.3.3,0,0,1-.08.08l.25.25.06.08.1.2a.35.35,0,0,1,0,.14v.41a.34.34,0,0,1,0,.1l-.11.3a.24.24,0,0,1-.07.12l-.2.21a.28.28,0,0,1-.15.08l-.41.1ZM552,486l.33.09h.44L553,486l.09-.1.07-.19v-.29l0-.09-.24-.24-.38-.17h-.06l-.32.16-.28.33v.37l0,.09Zm.15-1.75.36.06.46-.11.1-.16v-.12l-.08-.13-.3-.08h-.39l-.26.07-.09.13V484l.11.16Z" />
                                            <path
                                                d="M554.46,486.65a.31.31,0,0,1-.31-.31V484.4a.31.31,0,0,1,.62,0v1.94A.31.31,0,0,1,554.46,486.65Z" />
                                            <path
                                                d="M556,486.65a.3.3,0,0,1-.3-.31v-1.43l-.05-.17-.11,0h-.31l-.19.06-.35.36a.31.31,0,0,1-.44-.44l.41-.41a.24.24,0,0,1,.12-.07l.31-.1.09,0h.41l.1,0,.31.1a.3.3,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,556,486.65Z" />
                                            <path
                                                d="M557.53,486.65a.31.31,0,0,1-.31-.31v-1.43l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.35.35,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.28.28,0,0,1,.2.22l.11.41v1.5A.31.31,0,0,1,557.53,486.65Z" />
                                            <path
                                                d="M560.5,486.65h-2a.3.3,0,0,1-.28-.19.31.31,0,0,1,.06-.33l1.44-1.44.25-.33.07-.22V484l-.05-.1-.12-.11-.19-.07h-.41l-.14.05,0,.09a.22.22,0,0,1,0,.08L559,484v.08a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.31.31,0,0,1,.09-.22l.17-.17.08-.16a.28.28,0,0,1,.17-.15l.31-.11h.71l.3.11a.24.24,0,0,1,.12.07l.21.21.06.08.1.2a.32.32,0,0,1,0,.14v.3a.31.31,0,0,1,0,.1l-.11.31a.36.36,0,0,1,0,.09l-.31.41-.94.94h1.21a.29.29,0,0,1,.3.3A.3.3,0,0,1,560.5,486.65Z" />
                                            <path
                                                d="M427.75,488.08h-.11a.28.28,0,0,1-.13,0l-.41-.2-.34-.23a.32.32,0,0,1-.14-.2l-.1-.61a.34.34,0,0,1,0-.1V486l.1-.76a.35.35,0,0,1,.06-.14l.31-.41a.3.3,0,0,1,.17-.12l.41-.1H428l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.24-.06h-.24l-.22.06-.2.26,0,.29.57-.1.48.11a.29.29,0,0,1,.14.08l.31.31.06.08.2.41a.31.31,0,0,1,0,.13v.11a.23.23,0,0,1,0,.11l-.2.51a.33.33,0,0,1-.12.14l-.31.21-.44.22A.31.31,0,0,1,427.75,488.08Zm-.54-.89.19.13.29.14.52-.29.14-.36-.14-.28-.21-.22-.33-.08-.28.08-.19.19-.07.28Z" />
                                            <path
                                                d="M430.61,488.08h-.1a.25.25,0,0,1-.12,0l-.51-.2-.1-.07-.2-.21a.25.25,0,0,1-.08-.12l-.2-.61h0a.28.28,0,0,1,0-.09V486a.28.28,0,0,1,0-.09l.21-.71.22-.47a.31.31,0,0,1,.22-.16l.51-.1h.26l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.07h-.13l-.3.06-.14.28-.08.26.62-.09.48.11a.28.28,0,0,1,.15.08l.3.31a.42.42,0,0,1,.09.14l.11.59-.11.57a.29.29,0,0,1-.13.19l-.31.21-.44.22A.32.32,0,0,1,430.61,488.08Zm-.44-.77.38.15.5-.28.08-.38-.08-.3-.19-.19-.32-.08-.36.08-.26.47.14.42Z" />
                                            <path
                                                d="M432.45,488.08a.29.29,0,0,1-.3-.3v-2a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v2A.3.3,0,0,1,432.45,488.08Z" />
                                            <path
                                                d="M434,488.08a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09h-.23l-.23.15-.36.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.28.28,0,0,1,.12.18l.11.41v1.51A.3.3,0,0,1,434,488.08Z" />
                                            <path
                                                d="M435.52,488.08a.29.29,0,0,1-.3-.3v-1.44l-.06-.21L435,486h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.35-.25a.37.37,0,0,1,.18-.05h.4a.34.34,0,0,1,.17.05l.31.21a.29.29,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,435.52,488.08Z" />
                                            <path
                                                d="M438.49,488.08h-1.94a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.43.25-.34.07-.21v-.21l0-.14-.31-.11h-.42l-.24.11-.11.18v.11a.31.31,0,0,1-.62,0v-.2a.34.34,0,0,1,.05-.17l.35-.46a.29.29,0,0,1,.12-.07l.31-.1.09,0h.52l.09,0,.55.22a.29.29,0,0,1,.16.18l.1.3a.36.36,0,0,1,0,.1v.31a.29.29,0,0,1,0,.09l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.2a.31.31,0,0,1,.31.31A.3.3,0,0,1,438.49,488.08Z" />
                                            <path
                                                d="M428.15,470.27H428a.35.35,0,0,1-.14,0l-.41-.2a.29.29,0,0,1-.11-.11l-.21-.3-.23-.57h0l0,0h0s0,0,0-.08v-.71l.11-.76a.35.35,0,0,1,.06-.14l.3-.41a.36.36,0,0,1,.18-.12l.41-.1h.38l.48.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.09.42.29.29,0,0,1-.42-.08l-.14-.21-.3-.07H428l-.23.06-.19.26,0,.3.4-.1h.27l.49.11a.29.29,0,0,1,.14.08l.31.31a.29.29,0,0,1,.08.14l.11.59-.11.48a.29.29,0,0,1-.08.14l-.31.31-.08.06-.41.2A.32.32,0,0,1,428.15,470.27Zm-.13-.61h.06l.3-.15.21-.21.09-.33-.08-.28-.19-.19-.33-.08H428l-.22.06-.26.47.15.38.13.18Z" />
                                            <path
                                                d="M431,470.27h-.2a.32.32,0,0,1-.14,0l-.41-.2-.08-.06-.31-.31a.28.28,0,0,1-.08-.15l-.1-.51a.49.49,0,0,1,0-.12v-.66l.11-.76a.24.24,0,0,1,.05-.14l.31-.41a.31.31,0,0,1,.11-.09l.41-.21a.32.32,0,0,1,.14,0h.3a.32.32,0,0,1,.14,0l.41.21a.28.28,0,0,1,.15.17l.11.31a.31.31,0,0,1-.59.2l-.06-.19-.23-.12h-.16l-.28.14-.22.29,0,.3.57-.11.57.11a.26.26,0,0,1,.19.13l.21.3.22.45a.22.22,0,0,1,0,.13v.11a.22.22,0,0,1,0,.13l-.2.41-.23.34a.29.29,0,0,1-.11.11l-.41.2A.35.35,0,0,1,431,470.27Zm-.13-.61H431l.27-.14.16-.23.14-.29-.27-.5-.39-.07-.29.07-.19.19-.07.27.07.34.21.21Z" />
                                            <path
                                                d="M432.86,470.17a.29.29,0,0,1-.3-.29l-.11-1.94a.31.31,0,0,1,.29-.33.31.31,0,0,1,.33.29l.1,2a.3.3,0,0,1-.29.32Z" />
                                            <path
                                                d="M434.4,470.17a.31.31,0,0,1-.31-.3v-1.28l-.17-.36h-.32l-.11.11-.54.43a.3.3,0,0,1-.43,0,.32.32,0,0,1,.05-.44l.69-.59a.36.36,0,0,1,.22-.09H434a.25.25,0,0,1,.14,0l.2.1a.29.29,0,0,1,.15.16l.2.51a.26.26,0,0,1,0,.11v1.34A.31.31,0,0,1,434.4,470.17Z" />
                                            <path
                                                d="M435.93,470.17a.3.3,0,0,1-.3-.3v-1.34l-.06-.27-.1,0h-.31l-.17,0-.35.45a.3.3,0,0,1-.43,0,.3.3,0,0,1,0-.43l.41-.51a.24.24,0,0,1,.14-.1l.31-.1.09,0h.41l.1,0,.31.1a.31.31,0,0,1,.2.23l.1.51v1.4A.31.31,0,0,1,435.93,470.17Z" />
                                            <path
                                                d="M438.9,470.17H437a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.33-1.33.26-.46.16-.16v-.1l-.21-.28-.18-.12h-.33l-.36.22,0,.19a.31.31,0,0,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.3a.34.34,0,0,1,.15-.18l.21-.1.27-.19a.34.34,0,0,1,.17-.05h.52a.34.34,0,0,1,.17.05l.45.35.24.35a.27.27,0,0,1,.06.17v.31a.36.36,0,0,1-.09.22l-.21.2-.26.45-.86.87h1.21a.31.31,0,1,1,0,.61Z" />
                                            <path
                                                d="M428.36,452.26l-.48-.11a.28.28,0,0,1-.15-.08l-.3-.31a.26.26,0,0,1-.09-.16l-.1-.5a.24.24,0,0,1,0-.12v-.66l.11-.76a.39.39,0,0,1,.06-.15l.3-.4a.52.52,0,0,1,.11-.1l.41-.2a.32.32,0,0,1,.14,0h.31a.31.31,0,0,1,.13,0l.41.2a.32.32,0,0,1,.14.14l.1.21a.3.3,0,0,1-.13.41.31.31,0,0,1-.42-.14l0-.11-.26-.13h-.16l-.28.14-.21.29,0,.28.32-.16a.23.23,0,0,1,.14,0h.1l.12,0,.51.2a.31.31,0,0,1,.14.12l.2.3.23.45a.28.28,0,0,1,0,.13v.1a.32.32,0,0,1,0,.14l-.21.41-.22.34a.3.3,0,0,1-.2.13Zm-.25-.69.32.09.36-.08.13-.21.15-.29-.3-.51-.35-.15-.29.15-.21.21-.07.27.07.34Z" />
                                            <path
                                                d="M431.23,452.26l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.36.36,0,0,1-.07-.1l-.2-.51h0v0a.19.19,0,0,1,0-.08v-.71a.28.28,0,0,1,0-.09l.2-.72.05-.1.31-.4a.52.52,0,0,1,.11-.1l.41-.2a.32.32,0,0,1,.14,0h.2l.11,0,.52.2a.39.39,0,0,1,.16.15l.1.21a.31.31,0,0,1-.14.41.31.31,0,0,1-.41-.14l0-.1-.42-.14-.28.14-.23.31-.08.29.38-.19a.23.23,0,0,1,.14,0h.1a.25.25,0,0,1,.14,0l.4.2.34.22a.35.35,0,0,1,.14.2l.1.67-.11.49a.29.29,0,0,1-.08.14l-.31.31a.25.25,0,0,1-.14.08Zm-.26-.69.33.09.28-.08.19-.19.08-.33-.08-.35-.2-.14-.29-.14-.28.14-.24.23-.12.25.13.32Z" />
                                            <path
                                                d="M433.17,452.26a.31.31,0,0,1-.31-.31V450a.31.31,0,0,1,.62,0V452A.31.31,0,0,1,433.17,452.26Z" />
                                            <path
                                                d="M434.71,452.26a.31.31,0,0,1-.31-.31v-1.43l0-.17-.1,0h-.31l-.2.06-.35.36a.31.31,0,0,1-.44-.44l.41-.41a.37.37,0,0,1,.12-.07l.31-.1.1,0h.41l.09,0,.31.1a.28.28,0,0,1,.2.22l.1.41V452A.31.31,0,0,1,434.71,452.26Z" />
                                            <path
                                                d="M436.34,452.26a.3.3,0,0,1-.3-.31v-1.36l-.12-.23-.14,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.41a.24.24,0,0,1,.12-.07l.3-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.18.15l.21.41a.35.35,0,0,1,0,.14V452A.31.31,0,0,1,436.34,452.26Z" />
                                            <path
                                                d="M439.31,452.26h-2.05a.3.3,0,0,1-.28-.19.29.29,0,0,1,.07-.33l1.43-1.44.25-.33.07-.32-.05-.14-.09-.05-.08,0-.11-.12h-.4l-.23.16-.06.25a.31.31,0,1,1-.62,0v-.1a.36.36,0,0,1,0-.1l.1-.3a.24.24,0,0,1,.07-.12l.11-.11.35-.24a.34.34,0,0,1,.17-.05h.61a.29.29,0,0,1,.22.09l.17.17.16.08a.32.32,0,0,1,.16.18l.1.3a.34.34,0,0,1,0,.1v.2a.31.31,0,0,1,0,.1l-.1.31a.41.41,0,0,1-.05.09l-.31.4-.94.95h1.31a.3.3,0,0,1,.31.3A.31.31,0,0,1,439.31,452.26Z" />
                                            <path
                                                d="M431.12,434a.31.31,0,0,1-.13,0,.3.3,0,0,1-.14-.41l1.22-2.53h-1.56a.3.3,0,0,1-.31-.3.31.31,0,0,1,.31-.31h2.05a.31.31,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.43,3A.3.3,0,0,1,431.12,434Z" />
                                            <path
                                                d="M433.89,434a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.46a.3.3,0,0,1-.3-.3.31.31,0,0,1,.3-.31h1.95a.31.31,0,0,1,.26.14.32.32,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,433.89,434Z" />
                                            <path
                                                d="M436.34,434a.3.3,0,0,1-.3-.31v-1.94a.3.3,0,0,1,.3-.31.31.31,0,0,1,.31.31v1.94A.31.31,0,0,1,436.34,434Z" />
                                            <path
                                                d="M437.88,434a.31.31,0,0,1-.31-.31V432.3l-.05-.17-.1,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41l.1,0,.3.1a.3.3,0,0,1,.2.22l.11.41v1.5A.3.3,0,0,1,437.88,434Z" />
                                            <path
                                                d="M439.41,434a.3.3,0,0,1-.3-.31V432.3l-.05-.17-.11,0h-.31l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4a.25.25,0,0,1,.12-.08l.31-.1.09,0H439l.1,0,.31.1a.32.32,0,0,1,.2.22l.1.41v1.5A.31.31,0,0,1,439.41,434Z" />
                                            <path
                                                d="M442.48,434h-2a.3.3,0,0,1-.29-.19.31.31,0,0,1,.07-.33l1.43-1.44.25-.33.07-.32,0-.14-.1,0-.07-.06-.12-.12h-.39l-.29.22-.11.19a.31.31,0,0,1-.62,0v-.1a.34.34,0,0,1,0-.17l.35-.46.35-.24a.34.34,0,0,1,.17-.05h.62a.27.27,0,0,1,.21.09l.17.17.16.08a.31.31,0,0,1,.16.18l.1.3a.36.36,0,0,1,0,.1v.2a.3.3,0,0,1,0,.1l-.1.31a.41.41,0,0,1-.05.09l-.3.41-.94.94h1.3a.3.3,0,0,1,.31.3A.31.31,0,0,1,442.48,434Z" />
                                            <path
                                                d="M514.34,450.62a.35.35,0,0,1-.14,0,.31.31,0,0,1-.14-.41l1.22-2.53h-1.46a.29.29,0,0,1-.3-.3.3.3,0,0,1,.3-.31h1.95a.31.31,0,0,1,.26.14.35.35,0,0,1,0,.3l-1.44,3A.29.29,0,0,1,514.34,450.62Z" />
                                            <path
                                                d="M517.71,450.62a.29.29,0,0,1-.3-.3v-2.27h0l-.31.1a.31.31,0,0,1-.19-.58l.24-.08.36-.36a.31.31,0,0,1,.33-.07.3.3,0,0,1,.19.29v3A.3.3,0,0,1,517.71,450.62Z" />
                                            <path
                                                d="M519.56,450.62a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,519.56,450.62Z" />
                                            <path
                                                d="M521.19,450.62a.29.29,0,0,1-.3-.3V449l-.14-.28-.16-.1h-.19l-.12.11-.53.43a.3.3,0,0,1-.43-.05.3.3,0,0,1,0-.43l.69-.59a.31.31,0,0,1,.22-.09h.41a.34.34,0,0,1,.17.05l.31.21a.29.29,0,0,1,.1.12l.21.41a.28.28,0,0,1,0,.13v1.44A.3.3,0,0,1,521.19,450.62Z" />
                                            <path
                                                d="M522.73,450.62a.3.3,0,0,1-.31-.3V449l-.23-.38H522l-.23.15-.36.37a.3.3,0,1,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.31.31,0,0,1,.22.09l.2.21.06.08.2.41a.33.33,0,0,1,0,.13v1.44A.3.3,0,0,1,522.73,450.62Z" />
                                            <path
                                                d="M525.7,450.62h-2a.31.31,0,0,1-.28-.18.29.29,0,0,1,.06-.33l1.33-1.44.43-.6V448l-.22-.28-.18-.12h-.4l-.11.12-.08.05-.09,0-.05.19a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.1a.34.34,0,0,1,0-.1l.11-.3a.27.27,0,0,1,.15-.18l.16-.08.17-.17a.31.31,0,0,1,.22-.09H525a.34.34,0,0,1,.17.05l.46.35.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.52.73-.87.94h1.24a.3.3,0,0,1,.3.31A.29.29,0,0,1,525.7,450.62Z" />
                                            <path
                                                d="M514.34,471.5l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.24.24,0,0,1-.07-.12l-.21-.61h0a.38.38,0,0,1,0-.1v-.71a.28.28,0,0,1,0-.09l.2-.72,0-.1.31-.4a.3.3,0,0,1,.17-.12l.41-.1h.28l.57.11a.3.3,0,0,1,.23.2l.11.31a.31.31,0,0,1-.59.19l0-.13-.34-.07h-.14l-.23.07-.21.28-.08.29h0l.59-.11.48.11a.22.22,0,0,1,.14.08l.31.31a.22.22,0,0,1,.08.14l.1.41v.28l-.11.48a.25.25,0,0,1-.08.14l-.31.31a.22.22,0,0,1-.14.08Zm-.26-.68.33.08.28-.08.19-.19.08-.33v-.13l-.07-.25-.19-.19-.33-.08-.27.08-.22.21-.12.26.14.42Z" />
                                            <path
                                                d="M517.3,471.5h-.2a.32.32,0,0,1-.14,0l-.41-.2-.34-.23a.3.3,0,0,1-.13-.2l-.1-.61a.2.2,0,0,1,0-.11v-.66l.11-.76a.39.39,0,0,1,.06-.15l.3-.4a.36.36,0,0,1,.18-.12l.41-.1h.38l.48.11a.34.34,0,0,1,.18.13l.21.31a.31.31,0,0,1-.52.34l-.13-.21-.3-.07h-.23l-.23.07-.19.26,0,.29.39-.09h.28l.49.11a.29.29,0,0,1,.14.08l.31.31a.27.27,0,0,1,.08.14l.1.41v.28l-.11.48a.3.3,0,0,1-.13.18l-.31.21-.44.22A.32.32,0,0,1,517.3,471.5Zm-.13-.61h.06l.52-.29.07-.3v-.13l-.07-.25-.19-.19-.33-.08h-.13l-.25.07-.19.19-.07.27.07.41.2.14Z" />
                                            <path
                                                d="M519.15,471.5a.3.3,0,0,1-.31-.3v-2.05a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31v2.05A.29.29,0,0,1,519.15,471.5Z" />
                                            <path
                                                d="M520.68,471.5a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.13-.09H520l-.23.15-.37.37a.3.3,0,0,1-.43-.43l.41-.41.35-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.31.21a.3.3,0,0,1,.13.18l.1.41v1.51A.3.3,0,0,1,520.68,471.5Z" />
                                            <path
                                                d="M522.22,471.5a.3.3,0,0,1-.31-.3v-1.44l-.06-.21-.14-.09h-.22l-.23.15-.36.37a.31.31,0,0,1-.44,0,.3.3,0,0,1,0-.43l.41-.41.36-.25a.34.34,0,0,1,.17-.05h.41a.34.34,0,0,1,.17.05l.3.21a.27.27,0,0,1,.13.18l.1.41v1.51A.29.29,0,0,1,522.22,471.5Z" />
                                            <path
                                                d="M525.19,471.5h-2a.29.29,0,0,1-.28-.19A.31.31,0,0,1,523,471l1.4-1.4.36-.63v-.12l-.16-.23-.2-.07H524l-.25.12-.11.18v.11a.31.31,0,0,1-.31.31.3.3,0,0,1-.3-.31v-.2a.26.26,0,0,1,.05-.17l.34-.46a.37.37,0,0,1,.12-.07l.31-.1.1,0h.51l.09,0,.31.1a.24.24,0,0,1,.12.07l.11.11.24.35a.34.34,0,0,1,0,.17v.31a.34.34,0,0,1,0,.17l-.21.3-.18.38-.06.08-.91.91h1.21a.31.31,0,0,1,.3.31A.3.3,0,0,1,525.19,471.5Z" />
                                            <path
                                                d="M513.93,489.31l-.49-.11a.29.29,0,0,1-.14-.08l-.31-.31a.3.3,0,0,1-.08-.16l-.1-.61a.37.37,0,0,1,0-.11v-.56l.11-.76a.28.28,0,0,1,0-.12l.3-.51a.33.33,0,0,1,.19-.14l.41-.1h.38l.49.11a.34.34,0,0,1,.18.13l.2.31a.29.29,0,0,1-.08.42.31.31,0,0,1-.43-.08l-.14-.21-.29-.08h-.23l-.21.06-.21.36,0,.29.33-.16a.32.32,0,0,1,.14,0h.2a.32.32,0,0,1,.14,0l.41.2.34.23a.3.3,0,0,1,.13.18l.1.41v.28l-.11.48a.42.42,0,0,1-.09.14l-.3.31a.29.29,0,0,1-.14.08l-.41.1Zm-.26-.68.33.08h.13l.25-.07.19-.19.08-.33V488l-.06-.22-.21-.14-.37-.15-.52.29-.06.24.08.45Z" />
                                            <path
                                                d="M516.79,489.31l-.48-.11a.22.22,0,0,1-.14-.08l-.31-.31a.26.26,0,0,1-.09-.16l-.1-.61a.2.2,0,0,1,0-.11v-.56l.1-.76a.56.56,0,0,1,0-.12l.31-.51a.3.3,0,0,1,.19-.14l.41-.1h.38l.48.11a.3.3,0,0,1,.22.2l.1.31a.3.3,0,0,1-.19.39.31.31,0,0,1-.39-.2l-.05-.14-.25-.07h-.23l-.21.06-.21.36,0,.29.32-.16a.35.35,0,0,1,.14,0h.1l.58.1a.33.33,0,0,1,.19.13l.21.31.22.44a.35.35,0,0,1,0,.14v.21a.31.31,0,0,1,0,.13l-.2.41-.23.34a.26.26,0,0,1-.19.13Zm-.25-.68.33.08.35-.08.13-.2.16-.38-.29-.51-.36-.07-.51.29-.07.24.08.45Z" />
                                            <path
                                                d="M518.74,489.31a.31.31,0,0,1-.31-.3v-1.95a.31.31,0,0,1,.31-.31.3.3,0,0,1,.3.31V489A.3.3,0,0,1,518.74,489.31Z" />
                                            <path
                                                d="M520.37,489.31a.3.3,0,0,1-.3-.3v-1.37l-.12-.23-.14,0h-.28l-.14.07-.46.37a.3.3,0,0,1-.43-.05.3.3,0,0,1,0-.43l.52-.41.26-.13a.22.22,0,0,1,.13,0h.41l.1,0,.31.1a.3.3,0,0,1,.17.16l.21.4a.35.35,0,0,1,0,.14V489A.31.31,0,0,1,520.37,489.31Z" />
                                            <path
                                                d="M521.91,489.31a.31.31,0,0,1-.31-.3v-1.37l-.17-.27h-.29l-.19.06-.36.36a.3.3,0,0,1-.43,0,.31.31,0,0,1,0-.44l.41-.4a.25.25,0,0,1,.12-.08l.3-.1.1,0h.41a.25.25,0,0,1,.14,0l.2.1a.32.32,0,0,1,.14.14l.2.4a.25.25,0,0,1,0,.14V489A.31.31,0,0,1,521.91,489.31Z" />
                                            <path
                                                d="M524.88,489.31h-2a.3.3,0,0,1-.22-.51l1.33-1.44.43-.6v-.08l-.12-.12a.22.22,0,0,1-.05-.08l0-.09-.14-.05h-.49l-.1.05-.18.23v.13a.3.3,0,0,1-.3.31.31.31,0,0,1-.31-.31v-.2a.32.32,0,0,1,0-.14l.1-.2.06-.08.21-.21.08-.06.2-.1a.32.32,0,0,1,.14,0h.61l.1,0,.31.1a.28.28,0,0,1,.17.15l.08.16.17.17a.31.31,0,0,1,.09.22v.31a.34.34,0,0,1-.05.17l-.52.73-.87.94h1.24a.31.31,0,0,1,0,.61Z" />
                                            <text class="cls-31" transform="translate(553 456.2)">1</text>
                                            <text class="cls-31" transform="translate(518.3 483.63)">3</text>
                                            <text class="cls-31" transform="translate(517.28 465.26)">4</text>
                                            <text class="cls-31" transform="translate(554.13 479.84)">2</text>
                                            <text class="cls-31" transform="translate(470.1 436.34)">6</text>
                                            <text class="cls-31" transform="translate(468.66 459.78)">7</text>
                                            <text class="cls-31" transform="translate(429.56 464.69)">10</text>
                                            <text class="cls-31" transform="translate(431.25 481.79)">9</text>
                                            <text class="cls-31" transform="translate(468.36 479.38)">8</text>
                                            <text class="cls-31" transform="translate(432.38 427.74)">12</text>
                                            <text class="cls-31" transform="translate(431.46 446.22)">11</text>
                                            <text class="cls-31" transform="translate(518.92 445.96)">5</text>
                                            <line class="cls-32" x1="495.56" y1="456.19" x2="495.56" y2="376.02" />
                                            <path class="cls-33"
                                                d="M495.56,370a30.31,30.31,0,0,0,4.75,8.55l-4.75-1.72-4.76,1.72A30.1,30.1,0,0,0,495.56,370Z" />
                                            <line class="cls-34" x1="272.81" y1="308.52" x2="346.69" y2="304.55" />
                                            <path class="cls-35"
                                                d="M352.71,304.23a30.1,30.1,0,0,0-8.28,5.21l1.46-4.85-2-4.65A30.45,30.45,0,0,0,352.71,304.23Z" />
                                            <line class="cls-36" x1="355.65" y1="510.71" x2="373.4" y2="510.71" />
                                            <line class="cls-11" x1="711.05" y1="841.21" x2="735" y2="841.21" />
                                        </svg>
                                        <div class="keterangan">
                                            <span style="background-color: yellow"
                                                class="badge text-dark">Dipesan</span>
                                            <span class="badge bg-gradient-danger">Dipesan lebih 1 orang</span>
                                            <span class="badge bg-gradient-success">Sudah DP</span>
                                            <span class="badge bg-gradient-info">Dalam Pembangunan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir tes menu tab -->
                        </div>
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