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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <h4 class="card-title">badges</h4>
                                            <p class="card-title-desc">Add any of the below mentioned modifier classes to change the appearance of a badge.</p>
                                            <div>
                                                <span class="badge bg-primary">Primary</span>
                                                <span class="badge bg-success">Success</span>
                                                <span class="badge bg-info">Info</span>
                                                <span class="badge bg-warning">Warning</span>
                                                <span class="badge bg-danger">Danger</span>
                                                <span class="badge bg-dark">Dark</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-4 mt-lg-0">
                                            <h4 class="card-title">Pill badges</h4>
                                            <p class="card-title-desc">Use the <code>.rounded-pill</code> modifier class to make
                                                badges more rounded (with a larger <code>border-radius</code>
                                                and additional horizontal <code>padding</code>).
                                                Useful if you miss the badges from v3.</p>

                                            <div>
                                                <span class="badge rounded-pill bg-primary">Primary</span>
                                                <span class="badge rounded-pill bg-success">Success</span>
                                                <span class="badge rounded-pill bg-info">Info</span>
                                                <span class="badge rounded-pill bg-warning">Warning</span>
                                                <span class="badge rounded-pill bg-danger">Danger</span>
                                                <span class="badge rounded-pill bg-dark">Dark</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Popovers</h4>
                                <p class="card-title-desc">Add small overlay content, like those found in iOS, to any element for housing secondary information.</p>

                                <div class="button-items" id="popover-container">

                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on top
                                    </button>

                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on right
                                    </button>

                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on bottom
                                    </button>

                                    <button type="button" class="btn btn-secondary waves-effect" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-placement="left" title="Popover Title" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on left
                                    </button>

                                    <button type="button" class="btn btn-success waves-effect waves-light" data-bs-container="#popover-container" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Tooltips</h4>
                                <p class="card-title-desc">Hover over the links below to see tooltips:</p>

                                <div class="button-items" id="tooltip-container">
                                    <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                        Tooltip on top
                                    </button>

                                    <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                                        Tooltip on right
                                    </button>

                                    <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                                        Tooltip on bottom
                                    </button>

                                    <button type="button" class="btn btn-primary" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                                        Tooltip on left
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pagination</h4>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="font-size-16 mt-0">Default Example</h5>
                                        <p class="card-title-desc">Pagination links indicate a series of related content exists across multiple pages.</p>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-size-16 mt-0">Disabled and active states</h5>
                                        <p class="card-title-desc">Pagination links are customizable for
                                            different circumstances. Use <code>.disabled</code> for links that appear
                                            un-clickable and <code>.active</code> to
                                            indicate the current page.</p>


                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <nav aria-label="...">
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <span class="page-link">Previous</span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <span class="page-link">
                                                        2
                                                        <span class="sr-only">(current)</span>
                                                    </span>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>


                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h5 class="font-size-16">Sizing</h5>
                                        <p class="card-title-desc">Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional
                                            sizes.</p>

                                        <nav aria-label="...">
                                            <ul class="pagination pagination-lg">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>

                                    <div class="col-lg-6">
                                        <h5 class="font-size-16">Alignment</h5>
                                        <p class="card-title-desc">Change the alignment of pagination
                                            components with flexbox utilities.</p>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Border spinner</h4>
                                <p class="card-title-desc">Use the border spinners for a lightweight loading indicator.</p>
                                <div>
                                    <div class="spinner-border text-primary m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-secondary m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-success m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-info m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-warning m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-danger m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-border text-dark m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Growing spinner</h4>
                                <p class="card-title-desc">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
                                <div>
                                    <div class="spinner-grow text-primary m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-secondary m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-success m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-info m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-warning m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-danger m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                    <div class="spinner-grow text-dark m-1" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>

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