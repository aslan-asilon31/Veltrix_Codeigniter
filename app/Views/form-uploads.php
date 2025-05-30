<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- Plugins css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">

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

                                <h4 class="card-title">Dropzone</h4>
                                <p class="card-title-desc">DropzoneJS is an open source library
                                    that provides drag’n’drop file uploads with image previews.
                                </p>

                                <div class="mb-5">
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="multiple">
                                        </div>

                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="mdi mdi-cloud-upload display-4 text-muted"></i>
                                            </div>

                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </form>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
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

<!-- Plugins js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>