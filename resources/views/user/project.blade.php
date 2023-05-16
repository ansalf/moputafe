@extends('layouts.master')

@section('content')
<body>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Fitur</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Fitur</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
</body>
</html>
@stop
