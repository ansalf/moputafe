@extends('layouts.master')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tentang Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
                            <span class="text-primary">220535609181</span>
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
                            <span class="text-primary">220535600012</span>
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
                            <span class="text-primary">220535600453</span>
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
                            <span class="text-primary">220535600376</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    @stop
