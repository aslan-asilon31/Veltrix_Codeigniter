<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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

                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">A beautiful, responsive, customizable
                                    and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                    dependencies.</p>

                                <div class="row text-center">
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A basic message</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A title with a text under</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A success message!</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A warning message, with a function attached to the "Confirm"-button...</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                    </div>

                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>By passing a parameter, you can execute something else for "Cancel".</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A message with custom Image Header</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A message with auto close timer</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>Custom HTML description and buttons</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>A message with custom width, padding and background</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                                        <p>Ajax request example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                    </div>

                                </div> <!-- end row -->

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


<!-- Sweet Alerts js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="assets/js/pages/sweet-alerts.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>