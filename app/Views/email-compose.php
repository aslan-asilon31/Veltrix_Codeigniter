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
                        <!-- Left sidebar -->
                        <div class="email-leftbar card">
                            <div class="d-grid">
                                <a href="email-compose" class="btn btn-danger rounded btn-custom waves-effect waves-light">Compose</a>
                            </div>
                            <div class="mail-list mt-4">
                                <a href="#" class="active">Inbox <span class="ms-1">(18)</span></a>
                                <a href="#">Starred</a>
                                <a href="#">Important</a>
                                <a href="#">Draft</a>
                                <a href="#">Sent Mail</a>
                                <a href="#">Trash</a>
                            </div>


                            <h5 class="mt-4">Labels</h5>

                            <div class="mail-list mt-4">
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-end"></span>Theme Support</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span>Freelance</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-end"></span>Social</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-end"></span>Friends</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-end"></span>Family</a>
                            </div>

                            <h5 class="mt-4">Chat</h5>

                            <div class="mt-4">
                                <a href="#" class="d-flex">
                                    <img class="me-3 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Scott Median</p>
                                        <p class="text-muted">Hello</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="me-3 rounded-circle" src="assets/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Julian Rosa</p>
                                        <p class="text-muted">What about our next..</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="me-3 rounded-circle" src="assets/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">David Medina</p>
                                        <p class="text-muted">Yeah everything is fine</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="me-3 rounded-circle" src="assets/images/users/user-6.jpg" alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Jay Baker</p>
                                        <p class="text-muted">Wow that's great</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!-- End Left sidebar -->

                        <!-- Right Sidebar -->
                        <div class="email-rightbar">

                            <div class="card">
                                <div class="card-body">

                                    <div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="To">
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="mb-3">
                                            <form method="post">
                                                <textarea id="email-editor" name="area"></textarea>
                                            </form>
                                        </div>

                                        <div class="btn-toolbar mb-0">
                                            <div class="">
                                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-save"></i></button>
                                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="far fa-trash-alt"></i></button>
                                                <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fab fa-telegram-plane ms-2"></i> </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div> <!-- end Col-9 -->

                    </div>

                </div><!-- End row -->

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

<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>

<!-- email editor init -->
<script src="assets/js/pages/email-editor.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>