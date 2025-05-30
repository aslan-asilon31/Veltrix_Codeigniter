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
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-primary">
                                    <h5 class="my-2 text-white">#626ed4</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-primary text-center font-size-18">Primary</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-success">
                                    <h5 class="my-2 text-white">#02a499</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-success text-center font-size-18">Success</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-info">
                                    <h5 class="my-2 text-white">#38a4f8</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-info text-center font-size-18">Info</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-warning">
                                    <h5 class="my-2 text-white">#f8b425</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-warning text-center font-size-18">Warning</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-danger">
                                    <h5 class="my-2 text-white">#ec4561</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-danger text-center font-size-18">Danger</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-dark">
                                    <h5 class="my-2 text-light">#343a40</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-dark text-center font-size-18">Dark</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-secondary">
                                    <h5 class="my-2 text-muted">#e9ecef</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-muted text-center font-size-18">Secondary</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="color-box p-4 rounded bg-light">
                                    <h5 class="my-2">#dee2e6</h5>
                                </div>
                                <h5 class="mb-0 mt-4 text-secondary text-center font-size-18">Light</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

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

<script src="assets/js/app.js"></script>

</body>

</html>