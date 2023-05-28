<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                {{-- <a class="btn btn-link" href="">About Us</a> --}}
                {{-- <a class="btn btn-link" href="">Contact Us</a> --}}
                <a class="btn btn-link" href="">Reservation</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-5 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Mensiku Jaya, Sintang, Kalimantan Barat
                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 899 6979079</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>orderyuk@technocloud.id</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-whatsapp"></i></a>
                    {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a> --}}
                    {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> --}}
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div> --}}
            <div class="col-lg-4 col-md-6">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                <p>Untuk mendaftarkan cafe atau restoran anda, silahkan kirim pesan ke email atau nomor whatsapp kami
                </p>
                {{-- <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="https://technocloud.id/">Technocloud.id</a>, All Right
                    Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

</html>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src={{ asset('assets/lib/wow/wow.min.js') }}></script>
<script src={{ asset('assets/lib/easing/easing.min.js') }}></script>
<script src={{ asset('assets/lib/waypoints/waypoints.min.js') }}></script>
<script src={{ asset('assets/lib/counterup/counterup.min.js') }}></script>
<script src={{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}></script>
<script src={{ asset('assets/lib/tempusdominus/js/moment.min.js') }}></script>
<script src={{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}></script>
<script src={{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}></script>

<!-- Template Javascript -->
<script src={{ asset('assets/js/main.js') }}></script>

{{-- Toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if (Session::has('sukses'))
        toastr.success("{{ Session::get('sukses') }}", "Sukses")
    @endif

    @if (Session::has('gagal'))
        toastr.error("{{ Session::get('gagal') }}", "Gagal")
    @endif

    @if (Session::has('peringatan'))
        toastr.warning("{{ Session::get('peringatan') }}", "Peringatan")
    @endif

    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}", "Info")
    @endif
</script>
</body>
