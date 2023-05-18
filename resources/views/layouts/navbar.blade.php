<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>{{ config('app.name', 'Laravel') }}
                    </h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                    </div>
                    <button type="button" class="btn btn-primary py-2 px-3" data-bs-toggle="modal"
                        data-bs-target="#logins"><i class="fas fa-user"></i>&nbsp;&nbsp;Log-in</button>
                </div>
            </nav>

            {{-- Modal Login --}}
            <div class="modal fade" id="logins" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button> --}}
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i style="font-size: 30px" class="fas fa-envelope prefix grey-text"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="email" id="defaultForm-email" class="form-control validate"
                                            placeholder="Your Email">
                                    </div>
                                </div>
                                {{-- <label data-bs-error="wrong" data-bs-success="right" for="defaultForm-email">Your
                                    email</label> --}}
                            </div>

                            <div class="md-form mb-4">
                                <div class="row">
                                    <div class="col-md-2">
                                        <i style="font-size: 30px" class="fas fa-lock prefix grey-text"></i>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="password" id="defaultForm-pass" class="form-control validate"
                                            placeholder="Your Password">
                                    </div>
                                </div>
                                {{-- <label data-error="wrong" data-success="right" for="defaultForm-pass">Your
                                    password</label> --}}
                            </div>

                            <div class="">
                                <a href="">Lupa Kata Sandi?</a>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-success">Login</button>
                        </div>
                    </div>
                </div>
            </div>
