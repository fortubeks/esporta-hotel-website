<section class="bg-light relative pt50 no-bottom">
    <div class="container relative z-2">
        <div class="row g-4">
            <div class="col-lg-8 offset-lg-2 mb-4 text-center">
                <div class="subtitle id-color wow fadeInUp mb-3">Our Instagram</div>
                <h2 class="wow fadeInUp">@esportahotels</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="row g-0">
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images-beach-resort/instagram/esporta-instagram-1.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images/gallery-square/one.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images/gallery-square/two.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images-beach-resort/instagram/esporta-instagram-2.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0">
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images-beach-resort/instagram/esporta-instagram-3.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images-beach-resort/instagram/esporta-instagram-4.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images-beach-resort/instagram/esporta-instagram-5.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="https://instagram.com/esportahotels/" class="d-block hover relative overflow-hidden text-light">
                            <img src="{{env('APP_URL')}}/almaris/images/gallery-square/one.jpg" class="w-100 hover-scale-1-1" alt="">
                            <div class="abs abs-centered fs-24 text-white hover-op-0">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer begin -->
<footer class="text-light section-dark">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-12">
                <div class="d-lg-flex align-items-center justify-content-between text-center">
                    <div>
                        <h3 class="fs-20">Our Hotels</h3>
                        <a href="{{route('hotel.index','ikeja')}}">Ikeja</a> . <a href="{{route('hotel.index','magodo')}}">Magodo</a> .
                        <a href="{{route('hotel.index','agidingbi')}}">Agidingbi</a> . <a href="{{route('hotel.index','lekki')}}">Lekki</a> .
                        <a href="{{route('hotel.index','ondo')}}">Ondo</a><br>
                        Nigeria
                    </div>
                    <div>
                        <a href="{{route('home')}}"><img src="{{env('APP_URL')}}/almaris/images/logo.png" class="w-200px" alt=""></a><br>
                        <div class="social-icons mb-sm-30 mt-4">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://instagram.com/esportahotels/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>

                    </div>
                    <div>
                        <h3 class="fs-20">Contact Us</h3>
                        <i class="text-light p-3 fs-12 icofont-phone"> {{$hotel['phone']}}<br>
                            <i class="text-light p-3 fs-12 icofont-email"> hello@esportahotels.com
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Esporta Hotels & Resorts
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->