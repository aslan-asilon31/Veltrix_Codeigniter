<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<body>

    <div class="authentication-bg d-flex align-items-center pb-0 vh-100">
        <div class="content-center w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 ms-auto">
                                        <div class="ex-page-content">
                                            <h1 class="text-dark display-1 mt-4">404!</h1>
                                            <h4 class="mb-4">Sorry, page not found</h4>
                                            <p class="mb-5">It will be as simple as Occidental in fact, it will be Occidental to an English person</p>
                                            <a class="btn btn-primary mb-5 waves-effect waves-light" href="/"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                                        </div>

                                    </div>
                                    <div class="col-lg-5 mx-auto">
                                        <img src="assets/images/error.png" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!--end row-->
            </div>
            <!-- end container -->
        </div>

    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <script src="assets/js/app.js"></script>

</body>

</html>