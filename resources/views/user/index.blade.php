@extends('layouts.master')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('landpage/img/carousel-1.jpg') }}" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="display-3 text-white animated slideInDown mb-4">
                                    MOPUTA
                                    <br>
                                    <span class="text-primary animated slideInUp">
                                        Monopoly Punya Cerita
                                </h5>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Rasakan keseruan dan tantangan yang tak terlupakan dengan memainkan monopoly

                                </p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Main
                                </a>
                                <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('landpage/img/carousel-2.jpg') }}" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="display-3 text-white animated slideInDown mb-4">
                                    MOPUTA
                                    <br>
                                    <span class="text-primary animated slideInUp">
                                        Monopoly Punya Cerita
                                </h5>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Bermainlah tanpa tekanan dan jadilah pemenang dalam kehidupan
                                </p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Main
                                </a>
                                <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('landpage/img/carousel-3.jpg') }}" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="display-3 text-white animated slideInDown mb-4">
                                    MOPUTA
                                    <br>
                                    <span class="text-primary animated slideInUp">
                                        Monopoly Punya Cerita
                                </h5>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Temukan berbagai macam solusi untuk kamu yang sedang mengalami masalah
                                </p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">
                                    Main
                                </a>
                                <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">
                                    Daftar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="landpage/img/icon/icon-3.png" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">01</h1>
                        </div>
                        <h5 class="text-white">Dadu</h5>
                        <hr class="w-25">
                        <p class="justify">Dadu dengan desain unik yang dapat diputar ketika pemain ingin menjalankan karakternya.
                            Terdiri dari enam angka yang dapat diperoleh ketika memainkannya.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="landpage/img/icon/icon-4.png" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">02</h1>
                        </div>
                        <h5 class="text-white">Papan</h5>
                        <hr class="w-25">
                        <p class="justify">
                            Papan MOPUTA memiliki konsep yang sama dengan papan monopoly pada umumnya. Namun
                            papan ini berisi tentang masalah dan solusi.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle" style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="landpage/img/icon/icon-2.png" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">03</h1>
                        </div>
                        <h5 class="text-white">Token</h5>
                        <hr class="w-25">
                        <p class="justify">
                            Pemain dapat bermain menggunakan token monopoly.
                            Token tersebut dapat dipilih berdasarkan pilihan yang telah ditampilkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('landpage/img/about.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-4">Tentang Kami</h1>
                        <p class="mb-4 pb-2 justify">
                            Monopoly pada umumnya bukan hanya sekedar permainan papan yang menyenangkan, tapi juga merupakan
                            alat pembelajaran yang sangat berharga. Dalam permainan MOPUTA, pemain akan bertemu dengan
                            nasalah studi kasus yang dapat pemain lihat serta didalamnya terdapat solusi untuk menyelesaikannya.
                        </p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="landpage/img/icon/icon-1.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">5800</h2>
                                        <p class="fw-medium text-primary mb-0">Pemain Senang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="landpage/img/icon/icon-9.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">4769</h2>
                                        <p class="fw-medium text-primary mb-0">Masalah Selesai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Main</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Fitur</h1>
            </div>
            <div class="row g-0 service-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="landpage/img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Papan</h4>
                        <p class="mb-4 justify ">
                            Berisi berbagai studi kasus dan penyelesaian masalah yang dihadapi.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="landpage/img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Token</h4>
                        <p class="mb-4 justify">
                            Token yang dapat digunakan oleh pemain ada baloon, cone, pawn, dan unicorn.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="landpage/img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Dadu</h4>
                        <p class="mb-4 justify">
                            Dadu yang digunakan dapat diputar secara virtual seperti dadu pada umumnya.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <img class="img-fluid" src="landpage/img/icon/icon-6.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Studi Kasus</h4>
                        <p class="mb-4 justify">
                            Ketika ditekan oleh pemain, maka akan muncul berbagai masalah dan solusi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->1


    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-5">Kenapa MOPUTA?</h1>
                        <p class="mb-4 pb-2 justify">
                            MOPUTA adalah permainan yang dirancang untuk mengajarkan nilai-nilai positif dan membantu anak-anak untuk belajar
                            mengatasi masalah dalam kehidupan sehari-hari. Alur permainan ini mengikuti kisah seseorang anak yang menghadapi
                            berbagai masalah dengan keluarganya. Dalam permainan ini, para pemain akan menempuh perjalanan melalui berbagai
                            studi kasus yang dilengkapi oleh berbagai solusi.
                        </p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="landpage/img/icon/icon-5.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Keamanan</p>
                                        <h5 class="mb-0">Terpercaya</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="landpage/img/icon/icon-1.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Pelayanan</p>
                                        <h5 class="mb-0">Ramah</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="landpage/img/icon/icon-10.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Tampilan</p>
                                        <h5 class="mb-0">Menarik</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle" style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="landpage/img/icon/icon-8.png" alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-primary mb-2">Permainan</p>
                                        <h5 class="mb-0">Santai</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('landpage/img/feature.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Studi Kasus</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Semua masalah</li>
                        <li class="mx-2" data-filter=".first">Masalah selesai</li>
                        <li class="mx-2" data-filter=".second">Sedang dikerjakan</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="{{ asset('landpage/img/depresi.jpg') }}" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Depresi</p>
                            <h5 class="lh-base mb-0">Perilaku untuk mengakhiri hidup</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1"
                                    href="{{ asset('landpage/img/depresi.jpg') }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="{{ asset('landpage/img/malas.jpg') }}" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Malas</p>
                            <h5 class="lh-base mb-0">Kurang produktif</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1"
                                    href="{{ asset('landpage/img/malas.jpg') }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item f
                ]
                irst wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="{{ asset('landpage/img/akademis.jpg') }}" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Akademis</p>
                            <h5 class="lh-base mb-0">Anak merasa tidak nyaman</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1"
                                    href="{{ asset('landpage/img/akademis.jpg') }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="{{ asset('landpage/img/insecure.jpg') }}" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Insecure</p>
                            <h5 class="lh-base mb-0">Rasa Kurang Percaya Diri</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1"
                                    href="{{ asset('landpage/img/insecure.jpg') }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="{{ asset('landpage/img/bullying.jpg') }}" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Bullying</p>
                            <h5 class="lh-base mb-0">Banyak Perundungan yang terjadi</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1"
                                    href="{{ asset('landpage/img/bullying.jpg') }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner">
                        <img class="img-fluid w-100" src="{{ asset('landpage/img/sosial.jpg') }}" alt="">
                        <div class="text-center p-4">
                            <p class="text-primary mb-2">Sosial</p>
                            <h5 class="lh-base mb-0">Mengalami Kesulitan Bergaul</h5>
                        </div>
                        <div class="portfolio-text text-center bg-white p-4">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square btn-primary rounded-circle mx-1"
                                    href="{{ asset('landpage/img/sosial.jpg') }}" data-lightbox="portfolio"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('landpage/img/quote.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-5">MPT Form</h1>
                        <p class="mb-4 pb-2 justify">
                            Mohon lengkapi formulir dibawah ini untuk membantu kami memahami masalah yang kamu hadapi
                            serta memberikan saran dan solusi yang tepat untuk memperbaiki hubungan keluarga.
                        </p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nama Lengkap"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Umur"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="our@gmail.com"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="1">Laki-laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Suasana Hati"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">MOPUTA TEAM</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('landpage/img/team-1.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-discord"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Ach Althaaf Cahya R</h5>
                            <span class="text-primary">Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('landpage/img/team-2.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-discord"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Anissa Alifia Putri</h5>
                            <span class="text-primary">Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('landpage/img/team-3.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-discord"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Adil Zakaria</h5>
                            <span class="text-primary">Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('landpage/img/team-4.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-discord"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-github"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Enanto Harun Satrio</h5>
                            <span class="text-primary">Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Testimoni</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='landpage/img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">
                        Saya merasa sangat terisolasi setelah orang tua saya bercerai,
                        tetapi dengan bantuan game MOPUTA,
                        saya merasa lebih kuat dan lebih siap untuk mengatasi rasa sakit saya.
                        Saya sangat berterima kasih atas dukungan mereka.
                    </p>
                    <h4>Unknown7</h4>
                    <span class="text-primary">Mahasiswa</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='landpage/img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">
                        MOPUTA telah membantu saya merasa
                        lebih tenang dan lebih stabil dalam hidup saya setelah masalah keluarga yang rumit.
                        Bermain game monopoly dengan segala informasi yang berguna. Benar-benar membantu saya dalam mengatasi rasa kesepian dan kecemasan.
                    </p>
                    <h4>Unknown9</h4>
                    <span class="text-primary">Pelajar</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='landpage/img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">
                        Saya tidak akan pernah menyangka bahwa game online bisa seefektif ini.
                        Melalui MOPUTA, saya telah belajar bagaimana memahami perasaan saya sendiri dan
                        bagaimana cara mengatasi stres dari masalah keluarga yang kompleks.
                    </p>
                    <h4>Unknown4</h4>
                    <span class="text-primary">Mahasiswa</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@stop
