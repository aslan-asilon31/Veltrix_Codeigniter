<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- Bootstrap Rating css -->
    <link href="assets/libs/bootstrap-rating/bootstrap-rating.css" rel="stylesheet" type="text/css" />

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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15">Default rating</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15">Half rating</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-primary" data-fractions="2" />

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Disabled rating</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" disabled="disabled" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Readonly rating with a value</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" data-readonly value="3" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Customized heart rating</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-heart text-danger" data-empty="mdi mdi-heart-outline text-danger" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Only fill selected</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-star-outline text-primary" data-empty="mdi mdi-star-outline text-primary" data-filled-selected="mdi mdi-star text-primary" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Handle events</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating check" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Customize tooltips</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating-tooltip" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Default rating</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating-tooltip" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Set start rate to 5 [6..10]</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating-tooltip" data-start="5" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Set start and stop rate [2..10]</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating-tooltip" data-start="1" data-stop="10" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Set start and stop rate [2..10] with step 2</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating-tooltip" data-stop="10" data-step="2" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Custom icons</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="mdi mdi-checkbox-marked text-primary" data-empty="mdi mdi-checkbox-blank-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Fractional rating</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating-tooltip-manual" data-fractions="3" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-4 col-sm-6">
                                        <div class="p-4 text-center">
                                            <h5 class="font-size-15 mb-3">Custom CSS icons</h5>
                                            <div class="rating-star">
                                                <input type="hidden" class="rating" data-filled="symbol symbol-filled" data-empty="symbol symbol-empty" data-fractions="2" />
                                            </div>
                                        </div>
                                    </div>

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


<!-- Bootstrap rating js -->
<script src="assets/libs/bootstrap-rating/bootstrap-rating.min.js"></script>

<script src="assets/js/pages/rating-init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>