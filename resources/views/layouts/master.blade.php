<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MOPUTA | Monoply</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landpage/img/logo.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landpage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landpage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landpage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landpage/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landpage/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav  class="navbar navbar-expand-lg bg-white sticky-top p-0 px-4 px-lg-5 navbar-scrolled">
        <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-5">
            <img class="img-fluid rounded logo" src="{{ asset('landpage/img/logo.jpg') }}" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link">Beranda</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">Tentang Kami</a>
                <a href="{{ route('project') }}" class="nav-item nav-link">Fitur</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Layanan</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Main</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="/login" class="dropdown-item">Masuk</a>
                        <a href="/register" class="dropdown-item">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-discord"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                        class="fab fa-github"></i></a>
                <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">MOPUTA | Monopoly</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Semarang, 5, Malang, INA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 896-2353-8410</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>mpt.moputa@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                            class="fab fa-discord"></i></a>
                    <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                            class="fab fa-github"></i></a>
                    <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                            class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Studi Kasus</h5>
                    <a class="btn btn-link" href="">Depresi</a>
                    <a class="btn btn-link" href="">Malas</a>
                    <a class="btn btn-link" href="">Akademis</a>
                    <a class="btn btn-link" href="">Insecure</a>
                    <a class="btn btn-link" href="">Bullying</a>
                    <a class="btn btn-link" href="">Sosial</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Menu</h5>
                    <a class="btn btn-link" href="">Tentang Kami</a>
                    <a class="btn btn-link" href="">Fitur</a>
                    <a class="btn btn-link" href="">Layanan</a>
                    <a class="btn btn-link" href="">Main</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">
                        Subscription
                    </h5>
                    <p>Langganan untuk mendapatkan informasi lebih lanjut.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5"
                            type="text" placeholder="our@gmail.com">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid py-4" style="background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">MOPUTA | Monopoly</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By MOPUTA | Monopoly</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landpage/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landpage/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landpage/js/main.js') }}"></script>

</body>

</html>
