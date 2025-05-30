<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

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

                                <h4 class="card-title">World Map</h4>
                                <p class="card-title-desc">Example of vector map.</p>

                                <div id="world-map-markers" style="height: 420px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">USA Map</h4>
                                <p class="card-title-desc">Example of vector map.</p>

                                <div id="usa-vectormap" style="height: 420px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">UK Map</h4>
                                <p class="card-title-desc">Example of vector map.</p>

                                <div id="uk-vectormap" style="height: 420px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Chicago Map</h4>
                                <p class="card-title-desc">Example of vector map.</p>

                                <div id="chicago-vectormap" style="height: 420px"></div>

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

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>

<!-- Init js-->
<script src="assets/js/pages/vector-maps.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>