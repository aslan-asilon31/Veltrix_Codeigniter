<?= $this->include('partials/main') ?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<body class="account-pages">
    <!-- Begin page -->
    <div class="accountbg" style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

    <div class="wrapper-page account-page-full">

        <div class="card shadow-none">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box shadow-none p-4">
                        <div class="p-2">
                            <div class="text-center mt-4">
                            <a href="/" class="logo logo-dark">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="/" class="logo logo-light">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="18">
                                    </span>
                                </a>
                            </div>

                            <h4 class="font-size-18 mt-5 text-center">Locked</h4>
                            <p class="text-muted text-center">Hello Smith, enter your password to unlock the screen!</p>

                            <form class="mt-4" action="#">

                                <div class="pt-3 text-center">
                                    <img src="assets/images/users/user-6.jpg" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                    <h6 class="font-size-16 mt-3">Robert Smith</h6>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                </div>

                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Unlock</button>
                                    </div>
                                </div>


                            </form>

                            <div class="mt-5 pt-4 text-center">
                                <p>Not you ? return <a href="pages-login-2" class="fw-medium text-primary"> Sign In </a> </p>
                                <p>© <script>
                                        document.write(new Date().getFullYear())
                                    </script> Veltrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://1.envato.market/themesdesign" target="_blank">Themesdesign</a></p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <script src="assets/js/app.js"></script>

</body>

</html>