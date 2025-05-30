<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <!-- Lightbox css -->
    <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/topbar') ?>
    <?= $this->include('partials/sidebar') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="user-sidebar">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        <div class="d-flex justify-content-end">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle text-muted fs-5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mt-n4 position-relative">
                                        <div class="text-center">
                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                            <div class="mt-3">
                                                <h5 class="">Kat Macaulay</h5>
                                                <div>
                                                    <a href="#" class="text-muted m-1">Project Manager</a>
                                                </div>

                                                <div class="mt-4">
                                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Send Message</a>
                                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Email</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="p-3 mt-3">
                                        <div class="row text-center">
                                            <div class="col-6 border-end">
                                                <div class="p-1">
                                                    <h5 class="mb-1">1,269</h5>
                                                    <p class="text-muted mb-0">Products</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="p-1">
                                                    <h5 class="mb-1">5.2k</h5>
                                                    <p class="text-muted mb-0">Followers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">

                                    <p class="font-size-15 mb-1">Hi my name is Kat Macaulay.</p>
                                    <p class="font-size-15">I'm the Co-founder and Head of Design at Company agency.</p>

                                    <p class="text-muted">Been the industry's standard dummy text To an English person. Our team collaborators and clients to achieve growth.</p>


                                    <h5 class="font-size-15">Experience :</h5>
                                    <ul class="list-unstyled mb-0 pt-1">
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                        <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                    </ul>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Demographics</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Gender</span><span>Male</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">DOB</span><span>01/02/2000</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Age</span><span>22</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Hire Date</span><span>22/08/2022</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Department</span><span>Graphic Design</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Location</span><span>Jannieborouth</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Position</span><span>UX Designer</span></li>
                                        <li class="d-flex justify-content-between p-2 font-size-15"><span class="text-muted">Supervisor</span><span>Meson Jansen</span></li>
                                    </ul>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Skills</h5>
                                    <div class="d-flex flex-wrap gap-2 fs-15">
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Photoshop</a>
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">illustrator</a>
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">HTML</a>
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">CSS</a>
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Javascript</a>
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Php</a>
                                        <a href="javascript:void(0);" class="badge bg-primary-subtle text-primary">Python</a>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-primary bg-gradient fs-4">
                                                    <i class="mdi mdi-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1">Revenue</p>
                                            <h5 class="mb-0">$21,456</h5>
                                        </div>

                                        <div class="flex-shrink-0 align-self-end ms-2">
                                            <div class="badge rounded-pill font-size-13 bg-success-subtle text-success">+ 2.65%
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->


                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-primary bg-gradient fs-4">
                                                    <i class="mdi mdi-shopping"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1">Orders</p>
                                            <h5 class="mb-0">5,643</h5>
                                        </div>
                                        <div class="flex-shrink-0 align-self-end ms-2">
                                            <div class="badge rounded-pill font-size-13 bg-danger-subtle text-danger">- 0.82%
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->


                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <div class="avatar-title rounded-circle bg-primary bg-gradient fs-4">
                                                    <i class="mdi mdi-account-multiple"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="text-muted mb-1">Customers</p>
                                            <h5 class="mb-0">45,254</h5>
                                        </div>
                                        <div class="flex-shrink-0 align-self-end ms-2">
                                            <div class="badge rounded-pill font-size-13 bg-danger-subtle text-danger">- 1.04%</div>
                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->


                        </div>
                    </div>

                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="profile-chart" class="apex-charts"></div>
                            </div>
                        </div>


                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                                        <i class="bx bx-user-circle font-size-20"></i>
                                        <span class="d-none d-sm-block">About</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                                        <i class="bx bx-clipboard font-size-20"></i>
                                        <span class="d-none d-sm-block">Tasks</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                                        <i class="bx bx-mail-send font-size-20"></i>
                                        <span class="d-none d-sm-block">Messages</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#post" role="tab">
                                        <i class="bx bx-image font-size-20"></i>
                                        <span class="d-none d-sm-block">Post</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content p-4">

                                <div class="tab-pane active" id="about" role="tabpanel">
                                    <div>
                                        <div>
                                            <h5 class="font-size-16 mb-4">Experience</h5>

                                            <ol class="activity-checkout mb-0 px-4 mt-3">
                                                <li class="checkout-item">
                                                    <div class="avatar-sm checkout-icon p-1">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-pen text-white font-size-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">
                                                        <div>
                                                            <h5 class="font-size-16 mb-1">Front end Developer</h5>
                                                            <p class="text-muted text-truncate mb-2">2016 - 2019</p>
                                                            <div class="mb-3">
                                                                <p>ABC Company</p>
                                                                <p class="text-muted">Proin maximus nibh at lorem bibendum venenatis. Cras gravida felis et erat consectetur, ac venenatis quam pulvinar.
                                                                    Cras neque neque, vehicula vel lacus quis, eleifend iaculis mi.
                                                                    Curabitur in mi eget ex fringilla ultricies sit amet quis arcu.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="checkout-item">
                                                    <div class="avatar-sm checkout-icon p-1">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-chart-box text-white font-size-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">

                                                        <h5 class="font-size-16 mb-1">UI /UX Designer</h5>
                                                        <p class="text-muted text-truncate mb-2">2014 - 2016</p>
                                                        <div class="mb-3">
                                                            <p>XYZ Company</p>
                                                            <p class="text-muted">It will be as simple as occidental in fact,
                                                                it will be Occidental. To an English person, it will seem like simplified
                                                                English, as a skeptical Cambridge friend of mine told me what Occidental</p>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ol>
                                        </div>

                                        <div>
                                            <h5 class="font-size-16 mb-4">Projects</h5>
                                            <div class="table-responsive">
                                                <table class="table table-nowrap table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Projects</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Budget</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col" style="width: 120px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">01</th>
                                                            <td><a href="#" class="text-reset">Brand Logo Design</a></td>
                                                            <td>
                                                                18 Jun, 2021
                                                            </td>
                                                            <td>
                                                                $523
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary-subtle text-primary font-size-12">Open</span>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">02</th>
                                                            <td><a href="#" class="text-reset">Minible Admin</a></td>
                                                            <td>
                                                                06 Jun, 2021
                                                            </td>
                                                            <td>
                                                                $253
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary-subtle text-primary font-size-12">Open</span>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">03</th>
                                                            <td><a href="#" class="text-reset">Chat app Design</a></td>
                                                            <td>
                                                                28 May, 2021
                                                            </td>
                                                            <td>
                                                                $356
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success font-size-12">Complete</span>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">04</th>
                                                            <td><a href="#" class="text-reset">Minible Landing</a></td>
                                                            <td>
                                                                13 May, 2021
                                                            </td>
                                                            <td>
                                                                $425
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success font-size-12">Complete</span>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">05</th>
                                                            <td><a href="#" class="text-reset">Authentication Pages</a></td>
                                                            <td>
                                                                06 May, 2021
                                                            </td>
                                                            <td>
                                                                $752
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success-subtle text-success font-size-12">Complete</span>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="tasks" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-3">Active</h5>

                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-activeCheck2">
                                                                <label class="form-check-label" for="tasks-activeCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Ecommerce Product Detail</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 3
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Product Design</p>
                                                        </td>

                                                        <td>27 May, 2021</td>
                                                        <td style="width: 160px;"><span class="badge bg-primary-subtle text-primary font-size-12">Active</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-activeCheck1">
                                                                <label class="form-check-label" for="tasks-activeCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Ecommerce Product</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 7
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Web Development</p>
                                                        </td>

                                                        <td>26 May, 2021</td>
                                                        <td><span class="badge bg-primary-subtle text-primary font-size-12">Active</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h5 class="font-size-16 my-3">Upcoming</h5>

                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck3">
                                                                <label class="form-check-label" for="tasks-upcomingCheck3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Chat app Page</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 2
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Web Development</p>
                                                        </td>

                                                        <td>-</td>
                                                        <td style="width: 160px;"><span class="badge bg-secondary-subtle text-secondary font-size-12">Waiting</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck2">
                                                                <label class="form-check-label" for="tasks-upcomingCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Email Pages</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 1
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Illustration</p>
                                                        </td>

                                                        <td>04 June, 2021</td>
                                                        <td><span class="badge bg-primary-subtle text-primary font-size-12">Approved</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-upcomingCheck1">
                                                                <label class="form-check-label" for="tasks-upcomingCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Contacts Profile Page</a>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 6
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Product Design</p>
                                                        </td>

                                                        <td>-</td>
                                                        <td><span class="badge bg-secondary-subtle text-secondary font-size-12">Waiting</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <h5 class="font-size-16 my-3">Complete</h5>

                                        <div class="table-responsive">
                                            <table class="table table-nowrap table-centered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck3">
                                                                <label class="form-check-label" for="tasks-completeCheck3"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">UI Elements</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 6
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Product Design</p>
                                                        </td>

                                                        <td>27 May, 2021</td>
                                                        <td style="width: 160px;"><span class="badge bg-success-subtle text-success font-size-12">Complete</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck2">
                                                                <label class="form-check-label" for="tasks-completeCheck2"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Authentication Pages</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 2
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Illustration</p>
                                                        </td>

                                                        <td>27 May, 2021</td>
                                                        <td><span class="badge bg-success-subtle text-success font-size-12">Complete</span></td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16 text-center">
                                                                <input type="checkbox" class="form-check-input" id="tasks-completeCheck1">
                                                                <label class="form-check-label" for="tasks-completeCheck1"></label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="fw-medium text-reset">Admin Layout</a>
                                                        </td>

                                                        <td>
                                                            <p class="ml-4 text-muted mb-0">
                                                                <i class="mdi mdi-comment-outline align-middle text-muted font-size-16 me-1"></i> 3
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="ml-4 mb-0">Product Design</p>
                                                        </td>

                                                        <td>26 May, 2021</td>
                                                        <td><span class="badge bg-success-subtle text-success font-size-12">Complete</span></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="messages" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-4">Review</h5>
                                        <div class="px-3" data-simplebar="init" style="max-height: 430px;">
                                            <div class="simplebar-wrapper" style="margin: 0px -16px;">
                                                <div class="simplebar-height-auto-observer-wrapper">
                                                    <div class="simplebar-height-auto-observer"></div>
                                                </div>
                                                <div class="simplebar-mask">
                                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                                            <div class="simplebar-content" style="padding: 0px 16px;">
                                                                <div class="d-flex align-items-start border-bottom pb-4">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-3.jpg" alt="avatar-3 images">
                                                                    </div>

                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-15 mb-1">Marion Walker <small class="text-muted float-end">1 hr ago</small></h5>
                                                                        <p class="text-muted">Maecenas non vestibulum ante, nec efficitur orci. Duis eu ornare mi, quis bibendum quam. Etiam imperdiet aliquam purus sit amet rhoncus. Vestibulum pretium consectetur leo, in mattis ipsum sollicitudin eget. Pellentesque vel mi tortor.
                                                                            Nullam vitae maximus dui dolor sit amet, consectetur adipiscing elit.</p>

                                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                                                                        <div class="d-flex align-items-start mt-4">
                                                                            <div class="flex-shrink-0 me-2">
                                                                                <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-4.jpg" alt="avatar-4 images">
                                                                            </div>

                                                                            <div class="flex-grow-1">
                                                                                <h5 class="font-size-15 mb-1">Shanon Marvin <small class="text-muted float-end">1 hr ago</small></h5>
                                                                                <p class="text-muted">It will be as simple as in fact, it will be Occidental. To it will seem like simplified .</p>


                                                                                <a href="javascript: void(0);" class="text-muted font-13 d-inline-block">
                                                                                    <i class="mdi mdi-reply"></i> Reply
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-start border-bottom py-4">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-5.jpg" alt="avatar-5 images">
                                                                    </div>

                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-15 mb-1">Janice Morgan <small class="text-muted float-end">2 hrs ago</small></h5>
                                                                        <p class="text-muted">Cras ac condimentum velit. Quisque vitae elit auctor quam egestas congue. Duis eget lorem fringilla, ultrices justo consequat, gravida lorem. Maecenas orci enim, sodales id condimentum et, nisl arcu aliquam velit,
                                                                            sit amet vehicula turpis metus cursus dolor cursus eget dui.</p>

                                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                                                                    </div>
                                                                </div>

                                                                <div class="d-flex align-items-start border-bottom py-4">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img class="rounded-circle avatar-sm" src="assets/images/users/avatar-7.jpg" alt="avatar-7 images">
                                                                    </div>

                                                                    <div class="flex-grow-1">
                                                                        <h5 class="font-size-15 mb-1">Patrick Petty <small class="text-muted float-end">3 hrs ago</small></h5>
                                                                        <p class="text-muted">Aliquam sit amet eros eleifend, tristique ante sit amet, eleifend arcu. Cras ut diam quam. Fusce quis diam eu augue semper ullamcorper vitae sed massa. Mauris lacinia, massa a feugiat mattis, leo massa porta eros, sed congue arcu sem nec orci.
                                                                            In ac consectetur augue. Nullam pulvinar risus non augue tincidunt blandit.</p>

                                                                        <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-reply"></i> Reply</a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                            </div>
                                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                            </div>
                                        </div>

                                        <div class="border rounded mt-4">
                                            <form action="#">
                                                <div class="px-2 py-1 bg-light">

                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-sm btn-link text-reset text-decoration-none"><i class="bx bx-link font-size-15"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link text-reset text-decoration-none"><i class="bx bx-smile font-size-15"></i></button>
                                                        <button type="button" class="btn btn-sm btn-link text-reset text-decoration-none"><i class="bx bx-at font-size-15"></i></button>
                                                    </div>

                                                </div>
                                                <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your Message..."></textarea>

                                            </form>
                                        </div> <!-- end .border-->

                                        <div class="text-end mt-3">
                                            <button type="button" class="btn btn-success w-sm text-truncate ms-2"> Send <i class="bx bx-send ms-2 align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="post" role="tabpanel">
                                    <div>
                                        <h5 class="font-size-16 mb-4">Post</h5>

                                        <div class="blog-post">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md me-3">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="img-fluid rounded-circle img-thumbnail d-block">
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-size-15 text-truncate"><a href="#" class="text-reset">Richard Johnson</a></h5>
                                                    <p class="font-size-13 text-muted mb-0">24 Mar, 2021</p>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- <div class="position-relative mt-3"> -->
                                                <!-- <img src="assets/images/post-1.jpg" alt="" class="img-thumbnail"> -->
                                            <!-- </div> -->
                                            <div class="pt-3">
                                                <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                    <div>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-3">
                                                                <a href="javascript: void(0);" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt text-muted me-1"></i> Project
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="javascript: void(0);" class="text-muted">
                                                                    <i class="bx bx-like align-middle text-muted me-1"></i> 12 Like
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <button type="button" class="btn btn-outline-primary btn-sm waves-effect">Share <i class="bx bx-share-alt align-middle ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="blog-post mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-md me-3">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid img-thumbnail rounded-circle d-block">
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-size-15 text-truncate"><a href="#" class="text-reset">Michael Smith</a></h5>
                                                    <p class="font-size-13 text-muted mb-0">08 Mar, 2021</p>
                                                </div>
                                            </div>
                                            <div class="pt-3">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="text-muted">Aenean ornare mauris velit. Donec imperdiet, massa sit amet porta maximus, massa justo faucibus nisi,
                                                    eget accumsan nunc ipsum nec lacus. Etiam dignissim turpis sit amet lectus porttitor eleifend. Maecenas ornare molestie metus eget feugiat.
                                                    Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

                                            </div>
                                            <!-- <div class="position-relative mt-3"> -->
                                                <!-- <img src="assets/images/post-2.jpg" alt="" class="img-thumbnail"> -->
                                            <!-- </div> -->
                                            <div class="pt-3">
                                                <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                    <div>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item me-3">
                                                                <a href="javascript: void(0);" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt text-muted me-1"></i> Project
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="javascript: void(0);" class="text-muted">
                                                                    <i class="bx bx-like align-middle text-muted me-1"></i> 12 Like
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-group">
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-sm">
                                                                    </a>
                                                                </div>
                                                                <div class="avatar-group-item">
                                                                    <a href="javascript: void(0);" class="d-inline-block">
                                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ms-2">
                                                                <button type="button" class="btn btn-outline-primary btn-sm waves-effect">Share <i class="bx bx-share-alt align-middle ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end blog post -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="p-4 pb-0">
                                <h5 class="card-title mb-0">Team Members</h5>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                                <td>
                                                    <h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-reset">Daniel Canales</a></h5>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge bg-primary-subtle text-primary text-primary font-size-13">Frontend</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                                <td>
                                                    <h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-reset">Jennifer Walker</a></h5>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge bg-primary-subtle text-primary text-primary font-size-13">UI / UX</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded-circle bg-primary text-white font-size-14">
                                                            C
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-reset">Carl Mackay</a></h5>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge bg-primary-subtle text-primary text-primary font-size-13">Backend</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                                <td>
                                                    <h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-reset">Janice Cole</a></h5>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge bg-primary-subtle text-primary text-primary font-size-13">Frontend</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title rounded-circle bg-primary text-white font-size-14">
                                                            T
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-reset">Tony Brafford</a></h5>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="javascript: void(0);" class="badge bg-primary-subtle text-primary text-primary font-size-13">Backend</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
                <!--end row-->

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

<!-- Magnific Popup-->
<!-- <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> -->

<!-- Tour init js-->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/profile.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>