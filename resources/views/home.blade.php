@extends('layouts.apps')

@section('content')
    <div class="container g-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img height="450px" src={{ asset('assets/img/bg-hero.jpg') }} class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img height="450px" src={{ asset('assets/img/bg-hero.jpg') }} class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img height="450px" src={{ asset('assets/img/bg-hero.jpg') }} class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- <div class="container mt-5">
        
    </div> --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu Makanan & Minuman</h5>
                <h1 class="mb-5">Makanan & Minuman Terpopuler</h1>
            </div>
            <div class="row align-center wow fadeInUp pb-5 mb-5" data-wow-delay="0.3s">
                <div class="col-lg-2 col-md-4"></div>
                <div class="col-lg-8 col-md-4">
                    <input style="border-radius: 1cm" type="text" class="form-control"
                        placeholder="Mau makan dimana hari ini?" value="">
                </div>
                <div class="col-lg-2 col-md-4">
                    <button style="border-radius: 1cm" type="submit" class="btn btn-outline-primary">CARI</button>
                </div>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-1.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-2.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-3.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-4.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-5.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-6.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-7.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-8.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-1.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-2.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-3.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-4.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-5.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-6.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-7.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-8.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-1.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-2.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-3.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-4.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-5.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-6.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-7.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src={{ asset('assets/img/menu-8.jpg') }}
                                        alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chicken Burger</span>
                                            <span class="text-primary">Rp. 10.000,00</span>
                                        </h5>
                                        <small class="fst-italic">Warung Mak Jande</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src={{ asset('assets/img/about-1.jpg') }}>
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src={{ asset('assets/img/about-2.jpg') }} style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src={{ asset('assets/img/about-3.jpg') }}>
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src={{ asset('assets/img/about-4.jpg') }}>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5> --}}
                    <h1 class="mb-4">Selamat Datang di <i class="fa fa-utensils text-primary me-2"></i>OrderYuk!!!</h1>
                    <p class="mb-4">Order makanan dan minuman dicafe &
                        resto tidak perlu kekasir dan tidak perlu khawatir ditunggu pelayan. Anda hanya perlu
                        duduk dan pesan dimeja dan tunggu hingga makanan dan minuman dihidangkan</p>
                    <p class="mb-4">Sudah banyak cafe & resto yang sudah daftar dan menggunakan aplikasi
                        <strong>OrderYuk!!!</strong> untuk memanajemen order makanan dan minuman.
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">2</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">Cafe & Resto</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
