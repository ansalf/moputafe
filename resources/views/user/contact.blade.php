@extends('layouts.master')

@section('content')

    <body>
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container-fluid bg-light overflow-hidden px-lg-0">
            <div class="container contact px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 ps-lg-0">
                            <div class="section-title text-start">
                                <h1 class="display-5 mb-4">Contact Us</h1>
                            </div>
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                                form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and
                                you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.767898037381!2d112.61473677512367!3d-7.96322073124018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788280786d75d1%3A0x14338f7e6594d3d7!2sG4%2FB12%20Teknik%20Elektro%20UM!5e0!3m2!1sid!2sid!4v1683434700271!5m2!1sid!2sid"
                                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </body>

    </html>
@stop
