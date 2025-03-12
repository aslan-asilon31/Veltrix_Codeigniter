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
                                <div id="cd-timeline">
                                    <ul class="timeline list-unstyled">
                                        <li class="timeline-list">
                                            <div class="cd-timeline-content p-4">
                                                <h5 class="mt-0 mb-3">Timeline Event One</h5>
                                                <p class="mb-2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et</p>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                                <div class="date bg-primary">
                                                    <h4 class="mt-0">22</h4>
                                                    <p class="mb-0 text-white-50">Jan</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-list right clearfix">
                                            <div class="cd-timeline-content p-4">
                                                <h5 class="mt-0 mb-3">Timeline Event Two</h5>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-t-5">See more detail</button>

                                                <div class="date bg-primary">
                                                    <h4 class="mt-0">23</h4>
                                                    <p class="mb-0 text-white-50">Jan</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-list">
                                            <div class="cd-timeline-content p-4">
                                                <h5 class="mt-0 mb-3">Timeline Event Three</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et</p>
                                                <img src="assets/images/small/img-1.jpg" alt="" class="rounded me-1" width="120">
                                                <img src="assets/images/small/img-2.jpg" alt="" class="rounded" width="120">

                                                <div class="date bg-primary">
                                                    <h4 class="mt-0">24</h4>
                                                    <p class="mb-0 text-white-50">Jan</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-list right clearfix">
                                            <div class="cd-timeline-content p-4">
                                                <h5 class="mt-0 mb-3">Timeline Event Four</h5>
                                                <p class="mb-2">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental</p>
                                                <p class="mb-0">languages are members of the same family. Their separate existence is a myth... <a href="#" class="text-primary">Read More</a></p>

                                                <div class="date bg-primary">
                                                    <h4 class="mt-0">25</h4>
                                                    <p class="mb-0 text-white-50">Jan</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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