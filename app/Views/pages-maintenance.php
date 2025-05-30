<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<body>

    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>

    <section class="my-5">
        <div class="container-alt container">
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <div class="home-wrapper mt-5">
                        <div class="mb-4">
                                <a href="/" class="logo-dark">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="22">
                                    </span>
                                </a>

                                <a href="/" class="logo-light">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="22">
                                    </span>
                                </a>
                        </div>

                        <div class="maintenance-img">
                            <img src="assets/images/maintenance.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                        <h3 class="mt-4">Site is Under Maintenance</h3>
                        <p>Please check back in sometime.</p>

                        <div class="row">
                            <div class="text-center col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="mdi mdi-airplane-takeoff h2"></i>
                                        <h6 class="text-uppercase mt-3">Why is the Site Down?</h6>
                                        <p class="text-muted mt-3">There are many variations of passages of
                                            Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="mdi mdi-clock-alert h2"></i>
                                        <h6 class="text-uppercase mt-3">
                                            What is the Downtime?</h6>
                                        <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not
                                            simply random text. It has roots in a piece of classical.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <i class="mdi mdi-email h2"></i>
                                        <h6 class="text-uppercase mt-3">
                                            Do you need Support?</h6>
                                        <p class="text-muted mt-3">If you are going to use a passage of Lorem
                                            Ipsum, you need to be sure there isn't anything embar.. <a href="mailto:no-reply@domain.com" class="text-decoration-underline">no-reply@domain.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?= $this->include('partials/vendor-scripts') ?>


    <script src="assets/js/app.js"></script>

</body>

</html>