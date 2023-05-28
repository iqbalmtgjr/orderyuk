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
            {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"> --}}
            <nav class="hero-header navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>{{ config('app.name', 'Laravel') }}
                    </h1>
                    {{-- <img src="{{ asset('/assets/img/logo.png') }}" alt="Logo"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/home') }}" class="nav-item nav-link"><i class="fas fa-home"></i>&nbsp;
                            Home</a>
                        <a href="about.html" class="nav-item nav-link"><i class="fas fa-heart"></i>&nbsp; Menu
                            Favorit</a>
                        <a href="about.html" class="nav-item nav-link"><i class="fas fa-receipt"></i>&nbsp; Booking
                            Meja</a>
                        <a href="menu.html" class="nav-item nav-link"><i class="fas fa-history"></i>&nbsp; Riwayat</a>
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
                                        class="fas fa-user"></i>&nbsp;&nbsp;
                                    Profil</a>
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

            {{-- <div class="container-xxl bg-dark hero-header"> --}}
            {{-- <div class="container text-center my-5 pt-5 pb-4"> --}}
            {{-- @yield('content') --}}
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
