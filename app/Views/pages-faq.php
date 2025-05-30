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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-lg-5">
                                        <div class="text-center faq-title pt-4 pb-4">
                                            <div class="pt-3 pb-3">
                                                <i class="ti-comments text-primary h3"></i>
                                            </div>
                                            <h4>Can't find what you are looking for?</h4>
                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                                            <button type="button" class="btn btn-primary mt-2 me-1 waves-effect waves-light">Email Us</button>
                                            <button type="button" class="btn btn-success mt-2 waves-effect waves-light">Send us a tweet</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                        <h5 class="mt-0 font-size-18 mb-4"><i class="ti-agenda text-primary me-2"></i> General Questions
                                        </h5>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingOne">
                                                    <button class="accordion-button font-size-15 faq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What is Lorem Ipsum?
                                                    </button>
                                                </div>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse one end -->

                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button font-size-15 faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Where does it come from?
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse two end -->

                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingThree">
                                                    <button class="accordion-button font-size-15 faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Why do we use it?
                                                    </button>
                                                </div>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse three end -->

                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingFour">
                                                    <button class="accordion-button font-size-15 faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Where can I get some?
                                                    </button>
                                                </div>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse four end -->
                                        </div>
                                        <!-- end accordian -->

                                    </div>

                                    <div class="col-lg-5 offset-lg-1">
                                        <h5 class="mt-0 font-size-18 mb-4"><i class="ti-bookmark-alt text-primary me-2"></i> Pricing & Plans</h5>
                                        <div class="accordion" id="accordionExampleTwo">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingFive">
                                                    <button class="accordion-button font-size-15 faq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                        Where can I get some?
                                                    </button>
                                                </div>
                                                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse five end -->

                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingSix">
                                                    <button class="accordion-button font-size-15 faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        Why do we use it?
                                                    </button>
                                                </div>
                                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse six end -->

                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingSeven">
                                                    <button class="accordion-button font-size-15 faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                        Where does it come from?
                                                    </button>
                                                </div>
                                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse seven end -->

                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingEight">
                                                    <button class="accordion-button font-size-15 faq collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                        What is Lorem Ipsum?
                                                    </button>
                                                </div>
                                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExampleTwo">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-0">Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators. Toachieve this, it would be necessary to have uniform grammar</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- collapse eight end -->
                                        </div>
                                        <!-- end accordian -->
                                    </div>
                                </div>
                                <!-- end row -->

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