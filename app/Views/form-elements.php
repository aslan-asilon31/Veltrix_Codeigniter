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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Textual inputs</h4>
                                <p class="card-title-desc">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each
                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" placeholder="How do I shoot web" id="example-search-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" placeholder="bootstrap@example.com" id="example-email-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="url" placeholder="https://getbootstrap.com" id="example-url-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" value="1234567" id="example-password-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="datetime-local" value="2020-08-04T13:45:00" id="example-datetime-local-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" value="2020-08-04" id="example-date-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="month" value="2020-08" id="example-month-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="week" value="2020-W33" id="example-week-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
                                    <div class="col-sm-10">
                                        <input type="color" class="form-control form-control-color mw-100" id="example-color-input" value="#02a499" title="Choose your color">
                                    </div>
                                </div>
                                <div class=" row mb-3">
                                    <label class="col-sm-2 col-form-label">Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="example-text-input-lg" class="col-sm-2 col-form-label">Large</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="example-text-input-sm" class="col-sm-2 col-form-label">Small</label>
                                    <div class="col-sm-10">
                                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
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

<script src="assets/js/app.js"></script>

</body>

</html>