<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">86541</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">2541</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">102030</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="lineChart" class="chartjs-chart" data-colors='["rgba(81, 86, 190, 0.2)", "#5156be", "rgba(235, 239, 242, 0.2)", "#ebeff2"]' height="300"></canvas>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bar Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">2541</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">84845</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">12001</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <canvas id="bar" class="chartjs-chart" data-colors='["rgba(41, 181, 125, 0.8)", "rgba(41, 181, 125, 0.9)"]' height="300"></canvas>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Pie Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">2536</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">69421</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">89854</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div style="height: 260px !important;">
                                    <canvas id="pieChart" class="mx-auto" data-colors='["#2ab57d", "#ebeff2"]'></canvas>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Donut Chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">9595</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">36524</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">62541</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div style="height: 260px !important;">
                                    <canvas id="doughnut" class="mx-auto" data-colors='["#5156be", "#ebeff2"]'></canvas>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Polar Chart</h4>
                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">4852</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">3652</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">85412</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 300px !important;">
                                    <canvas id="polarArea" class="mx-auto" data-colors='["#fd625e", "#2ab57d", "#ffbf53", "#5156be"]'> </canvas>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title mb-4">Radar Chart</h4>
                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">694</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">55210</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">489498</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 300px !important;">
                                    <canvas id="radar" class="mx-auto" data-colors='["rgba(42, 181, 125, 0.2)", "#2ab57d", "rgba(81, 86, 190, 0.2)", "#5156be"]'></canvas>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?= $this->include('partials/footer') ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<!-- Chart JS -->
<script src="assets/libs/chart.js/chart.umd.js"></script>
<script src="assets/js/pages/chartjs.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>