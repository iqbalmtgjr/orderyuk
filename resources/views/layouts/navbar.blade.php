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
                <a href="/" class="navbar-brand p-0">
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
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                    </div>
                    @guest
                        @if (Route::has('login'))
                            <a href="#" style="border-radius: 1cm" type="button" class="btn btn-primary py-2 px-3"
                                data-bs-toggle="modal" data-bs-target="#logins"><i
                                    class="fas fa-user"></i>&nbsp;&nbsp;Log-in</a>
                        @endif
                    @else
                        <div class="nav-item dropdown">
                            <a href="#" style="border-radius: 1cm" class="btn btn-primary nav-link dropdown-toggle"
                                data-bs-toggle="dropdown"><i class="fas fa-user"></i>&nbsp;&nbsp;Akun</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ url('/profile') }}" class="dropdown-item"><i
                                        class="fas fa-user"></i>&nbsp;&nbsp; Profil</a>
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                                        class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;
                                    {{ __('Logout') }}</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </div>
            </nav>

            {{-- Modal Login --}}
            <div class="modal fade" id="logins" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">MASUK</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="md-form mb-4">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px" class="fas fa-envelope prefix grey-text"></i>
                                        </div>
                                        <div class="col-10">
                                            <input name="email" type="email" id="defaultForm-email"
                                                class="form-control validate @error('email') is-invalid @enderror"
                                                placeholder="Email Anda" value="{{ old('email') }}"
                                                autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form mb-4">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px" class="fas fa-lock prefix grey-text"></i>
                                        </div>
                                        <div class="col-10">
                                            <input name="password" type="password" id="defaultForm-pass"
                                                class="form-control validate @error('password') is-invalid @enderror"
                                                placeholder="Kata Sandi Anda" autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <a href="#">Lupa Kata Sandi?</a>
                                </div>
                                <div class="row mb-2">
                                    <button type="submit" style="border-radius:17px;"
                                        class="col-12 btn btn-primary">Login</button>
                                </div>
                            </form>
                            <div class="row">
                                <button type="button" style="border-radius:17px;" class="col-12 btn btn-success"
                                    data-bs-toggle="modal" data-bs-target="#daftar">Daftar</button>
                            </div>
                            <div class="row mt-4 text-center">
                                <p>----------------------------------- atau -----------------------------------</p>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="row">
                                <a href="{{ route('auth.google') }}" class="col-12 myButtonGoogle"><i
                                        class="fab fa-google"></i>&nbsp;&nbsp;Login
                                    Dengan
                                    Google</a>
                            </div>
                            <div class="row">
                                <a href="{{ route('auth.facebook') }}" class="col-12 myButtonFacebook"><i
                                        class="fab fa-facebook-f"></i>&nbsp;&nbsp;Login
                                    Dengan
                                    Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Modal Daftar --}}
            <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">DAFTAR</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="md-form mb-4">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px" class="fas fa-user prefix grey-text"></i>
                                        </div>
                                        <div class="col-10">
                                            <input name="name" type="text" id="name"
                                                class="form-control validate @error('name') is-invalid @enderror"
                                                placeholder="Masukkan Nama Anda ..." value="{{ old('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form mb-4">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px" class="fas fa-envelope prefix grey-text"></i>
                                        </div>
                                        <div class="col-10">
                                            <input name="email" type="email" id="email"
                                                class="form-control validate @error('email') is-invalid @enderror"
                                                placeholder="Masukkan Email Anda ..." value="{{ old('email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form mb-4">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px" class="fas fa-lock prefix grey-text"></i>
                                        </div>
                                        <div class="col-10">
                                            <input name="password" type="password" id="defaultForm-pass"
                                                class="form-control 5validate @error('password') is-invalid @enderror"
                                                placeholder="Masukkan Kata Sandi Anda ...">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="md-form mb-4">
                                    <div class="row">
                                        <div class="col-2">
                                            <i style="font-size: 30px" class="fas fa-lock prefix grey-text"></i>
                                        </div>
                                        <div class="col-10">
                                            <input name="password_confirmation" type="password" id="password-confirm"
                                                class="form-control validate @error('password_confirmation') is-invalid @enderror"
                                                placeholder="Masukkan Konfirmasi Kata Sandi Anda ...">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="row mb-2">
                                <button type="submit" style="border-radius:17px;"
                                    class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
