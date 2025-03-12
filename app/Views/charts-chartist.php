<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <link href="assets/libs/chartist/chartist.min.css" rel="stylesheet">

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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Overlapping bars on mobile</h4>

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

                                <div id="overlapping-bars" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Stacked bar chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5241</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">65411</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">51654</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="stacked-bar-chart" class="ct-chart ct-golden-section" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Animating a Donut with Svg.animate</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">748949</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5181</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">101025</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>


                                <div id="animating-donut" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Simple pie chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">48484</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">48652</h5>
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


                                <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Advanced Smil Animations</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">45410</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">4442</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">3201</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>


                                <div id="smil-animations" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Simple line chart</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">44242</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">75221</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">65212</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="simple-line-chart" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line Scatter Diagram</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5677</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">5542</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">12422</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="scatter-diagram" class="ct-chart ct-golden-section" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line chart with area</h4>

                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">4234</h5>
                                            <p class="text-muted">Activated</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">64521</h5>
                                            <p class="text-muted">Pending</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center">
                                            <h5 class="mb-0 font-size-20">94521</h5>
                                            <p class="text-muted">Deactivated</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="chart-with-area" class="ct-chart ct-golden-section" dir="ltr"></div>

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

<!-- Plugin Js-->
<script src="assets/libs/chartist/chartist.min.js"></script>
<script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
<!-- demo js-->
<script src="assets/js/pages/chartist.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>