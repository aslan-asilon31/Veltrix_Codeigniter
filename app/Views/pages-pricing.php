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
                        <div class="card pricing-box">
                            <div class="card-body p-4">
                                <div class="d-flex mt-2">
                                    <i class="ion ion-ios-airplane h2 align-self-center"></i>
                                    <div class="flex-1 ms-auto text-end">
                                        <h4 class="mt-0">Starter</h4>
                                        <p class="text-muted mb-0">Sed ut neque unde</p>
                                    </div>
                                </div>
                                <div class="pricing-features mt-5 pt-2">
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Free Live Support</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Unlimited User</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> No Time Tracking</p>
                                    <p><i class="mdi mdi-close text-primary me-2"></i> Free Setup</p>
                                </div>
                                <div class="text-center mt-5">
                                    <h1 class="mb-0"><sup><small>$</small></sup>19/<span class="font-size-16">Per month</span></h1>
                                </div>
                                <div class="d-grid mt-5">
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Sign up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card pricing-box">
                            <div class="card-body p-4">
                                <div class="d-flex mt-2">
                                    <i class="ion ion-ios-trophy h2 align-self-center"></i>
                                    <div class="flex-1 ms-auto text-end">
                                        <h4 class="mt-0">Professional</h4>
                                        <p class="text-muted mb-0">Sed ut neque unde</p>
                                    </div>
                                </div>
                                <div class="pricing-features mt-5 pt-2">
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Free Live Support</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Unlimited User</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> No Time Tracking</p>
                                    <p><i class="mdi mdi-close text-primary me-2"></i> Free Setup</p>
                                </div>
                                <div class="text-center mt-5">
                                    <h1 class="mb-0"><sup><small>$</small></sup>29/<span class="font-size-16">Per month</span></h1>
                                </div>
                                <div class="d-grid mt-5">
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Sign up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card pricing-box">
                            <div class="card-body p-4">
                                <div class="d-flex mt-2">
                                    <i class="ion ion-ios-umbrella h2 align-self-center"></i>
                                    <div class="flex-1 ms-auto text-end">
                                        <h4 class="mt-0">Enterprise</h4>
                                        <p class="text-muted mb-0">Sed ut neque unde</p>
                                    </div>
                                </div>
                                <div class="pricing-features mt-5 pt-2">
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Free Live Support</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Unlimited User</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> No Time Tracking</p>
                                    <p><i class="mdi mdi-close text-primary me-2"></i> Free Setup</p>
                                </div>
                                <div class="text-center mt-5">
                                    <h1 class="mb-0"><sup><small>$</small></sup>39/<span class="font-size-16">Per month</span></h1>
                                </div>
                                <div class="d-grid mt-5">
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Sign up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card pricing-box">
                            <div class="card-body p-4">
                                <div class="d-flex mt-2">
                                    <i class="ion ion-ios-cube h2 align-self-center"></i>
                                    <div class="flex-1 ms-auto text-end">
                                        <h4 class="mt-0">Unlimited</h4>
                                        <p class="text-muted mb-0">Sed ut neque unde</p>
                                    </div>
                                </div>
                                <div class="pricing-features mt-5 pt-2">
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Free Live Support</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> Unlimited User</p>
                                    <p><i class="mdi mdi-check text-primary me-2"></i> No Time Tracking</p>
                                    <p><i class="mdi mdi-close text-primary me-2"></i> Free Setup</p>
                                </div>
                                <div class="text-center mt-5">
                                    <h1 class="mb-0"><sup><small>$</small></sup>49/<span class="font-size-16">Per month</span></h1>
                                </div>
                                <div class="d-grid mt-5">
                                    <a href="#" class="btn btn-primary waves-effect waves-light">Sign up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
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