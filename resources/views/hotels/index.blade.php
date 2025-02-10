@extends('layouts.almaris.hotel-one-page.master')
@section('content')
<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <section id="section-intro" class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
        <div class="v-center">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url({{env('APP_URL').'/almaris/images/home/'.$hotel['id'].'/slider-1.jpg'}})">
                            <div class="sw-caption z-1000">
                                <div class="container">
                                    <div class="row g-4 align-items-center">

                                        <div class="spacer-double"></div>

                                        <div class="col-lg-8 offset-lg-2 text-center">
                                            <div class="spacer-single"></div>
                                            <div class="sw-text-wrapper">
                                                <div class="slider-extra mb-3">
                                                    <span class="d-stars">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </span>
                                                </div>
                                                <h1 class="slider-title mb-4">Where Every Stay is Extraordinary</h1>
                                                <p class="col-lg-8 offset-lg-2 slider-teaser px-4 mb-0">Discover the perfect blend of luxury, comfort, and convenience at Esporta. Our hotel is your gateway to an unforgettable experience.</p>
                                                <div class="spacer-30"></div>
                                                <a class="btn-main mb10 mb-3" href="#section-rooms">Our Accomodation</a>
                                            </div>
                                        </div>

                                        <div class="spacer-single"></div>
                                    </div>

                                </div>
                            </div>

                            <div class="abs abs-centered w-40">
                                <div class="box-slider-decor"></div>
                            </div>
                            <div class="sw-overlay op-2"></div>
                        </div>
                    </div>
                    <!-- Slides -->

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url({{env('APP_URL').'/almaris/images/home/'.$hotel['id'].'/slider-2.jpg'}})">
                            <div class="sw-caption z-1000">
                                <div class="container">
                                    <div class="row g-4 align-items-center">

                                        <div class="spacer-double"></div>

                                        <div class="col-lg-8 offset-lg-2 text-center">
                                            <div class="spacer-single"></div>
                                            <div class="sw-text-wrapper">
                                                <div class="slider-extra mb-3">
                                                    <span class="d-stars">
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                        <i class="icofont-star"></i>
                                                    </span>
                                                </div>
                                                <h1 class="slider-title mb-4">Experience Leisure Like Never Before</h1>
                                                <p class="col-lg-8 offset-lg-2 slider-teaser px-4 mb-0">Discover the perfect blend of luxury, comfort, and convenience at Esporta. Our hotel is your gateway to an unforgettable experience.</p>
                                                <div class="spacer-30"></div>
                                                <a class="btn-main mb10 mb-3" href="#section-rooms">Our Accomodation</a>
                                            </div>
                                        </div>

                                        <div class="spacer-single"></div>
                                    </div>

                                </div>
                            </div>

                            <div class="abs abs-centered w-40">
                                <div class="box-slider-decor"></div>
                            </div>
                            <div class="sw-overlay op-2"></div>
                        </div>
                    </div>
                    <!-- Slides -->

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>

    <div class="relative z-1000 w-100 mt-50" style="background-size: cover; background-repeat: no-repeat;">
        <div class="container" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row justify-content-center" style="background-size: cover; background-repeat: no-repeat;">
                <div class="col-lg-12" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="bg-dark text-light padding30 px-5" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="row g-4 align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="col-lg-9" style="background-size: cover; background-repeat: no-repeat;">
                                <div class="row g-4 align-items-center" style="background-size: cover; background-repeat: no-repeat;">
                                    <div class="col-md-3 text-lg-start text-center" style="background-size: cover; background-repeat: no-repeat;">
                                        <h4 class="mb-0">Reservation</h4>
                                    </div>

                                    <div class="col-md-3" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="text-center " style="background-size: cover; background-repeat: no-repeat;">
                                            <h6 class="mb-1">Choose Date</h6>
                                            <input type="text" id="date-picker" class="form-control no-border no-bg bg-focus-color text-white fs-20 text-right text-center" name="date" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="text-center " style="background-size: cover; background-repeat: no-repeat;">
                                            <h6>Adult</h6>
                                            <div class="de-number" style="background-size: cover; background-repeat: no-repeat;">
                                                <span class="d-minus">-</span>
                                                <input type="text" class="no-border no-bg" value="1">
                                                <span class="d-plus">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="text-center " style="background-size: cover; background-repeat: no-repeat;">
                                            <h6>Children</h6>
                                            <div class="de-number" style="background-size: cover; background-repeat: no-repeat;">
                                                <span class="d-minus">-</span>
                                                <input type="text" class="no-border no-bg" value="0">
                                                <span class="d-plus">+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 text-lg-end text-center" style="background-size: cover; background-repeat: no-repeat;">
                                <a class="btn-main btn-line" href="rooms.html">Check Availability</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="section-about" class="relative lines-deco">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 sm-hide">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">
                        <div class="abs top-0 w-100">
                            <div class="shape-mask-1 jarallax">
                                <img src="{{env('APP_URL').'/almaris/images/home/'.$hotel['id'].'/home1.jpg'}}" class="jarallax-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center">
                    <div class="wow scaleIn">
                        <div class="subtitle id-color mb-3">Welcome To Esporta, {{$hotel['id']}}</div>
                        <h2 class="wow fadeInUp">Exceptional Hospitality and Unmatched Relaxation at Esporta</h2>

                        <div class="text-center wow fadeInUp" data-wow-delay=".5s">
                            <h4 class="fw-bold mb-1">4.9 out of 5</h4>
                            <div class="de-rating-ext fs-18">
                                <span class="d-stars">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                            </div>
                            <span class="d-block fs-14 mb-0">Based on 25000+ reviews</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 sm-hide">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">
                        <div class="abs top-0 w-100">
                            <div class="shape-mask-1 jarallax">
                                <img src="{{env('APP_URL').'/almaris/images/home/'.$hotel['id'].'/home2.jpg'}}" class="jarallax-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer-double"></div>

            <div class="row g-4 relative z-2">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="relative p-4 bg-white border-grey">
                        <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                            <img src="{{env('APP_URL')}}/almaris/images/svg/restaurant-svgrepo-com.svg" class="w-100" alt="">
                        </span>
                        <div class="pl-90">
                            <h4>Restaurant</h4>
                            <p class="mb-0">Savor delicious flavors at our hotel restaurant—where every meal is a delightful experience!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="relative p-4 bg-white border-grey">
                        <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                            <img src="{{env('APP_URL')}}/almaris/images/svg/swimming-pool-svgrepo-com.svg" class="w-100" alt="">
                        </span>
                        <div class="pl-90">
                            <h4>Swimming Pool</h4>
                            <p class="mb-0">Relax and unwind at our serene hotel swimming pool—perfect for a refreshing escape!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="relative p-4 bg-white border-grey">
                        <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                            <img src="{{env('APP_URL')}}/almaris/images/svg/fitness-gym-svgrepo-com.svg" class="w-100" alt="">
                        </span>
                        <div class="pl-90">
                            <h4>Fitness Center</h4>
                            <p class="mb-0">Energize your body and mind at our fully equipped fitness center—stay fit, stay strong.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="relative p-4 bg-white border-grey">
                        <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                            <img src="{{env('APP_URL')}}/almaris/images/svg/flower-lotus-thin-svgrepo-com.svg" class="w-100" alt="">
                        </span>
                        <div class="pl-90">
                            <h4>Spa &amp; Massage</h4>
                            <p class="mb-0">Relax, unwind, and rejuvenate with our soothing spa and massage treatments—pure bliss awaits.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="relative p-4 bg-white border-grey">
                        <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                            <img src="{{env('APP_URL')}}/almaris/images/svg/meeting-explain-svgrepo-com.svg" class="w-100" alt="">
                        </span>
                        <div class="pl-90">
                            <h4>Meeting Room</h4>
                            <p class="mb-0">Host productive meetings in our elegant, fully equipped meeting rooms—perfect for business success.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="relative p-4 bg-white border-grey">
                        <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                            <img src="{{env('APP_URL')}}/almaris/images/svg/laundry-machine-svgrepo-com.svg" class="w-100" alt="">
                        </span>
                        <div class="pl-90">
                            <h4>Laundry Service</h4>
                            <p class="mb-0">Fresh, clean, and hassle-free! Enjoy our professional laundry service for a crisp, polished look.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="jarallax relative overflow-hidden text-light section-dark">
        <div class="abs abs-centered w-30">
            <div class="box-slider-decor"></div>
        </div>
        <img src="{{env('APP_URL').'/almaris/images/home/'.$hotel['id'].'/slider-1.jpg'}}" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="owl-single-dots owl-carousel owl-theme">
                        @foreach($reviews as $review)
                        <div class="item">
                            <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                            <h3 class="mb-4 wow fadeInUp fs-36">{{$review['body']}}</h3>
                            <span class=" wow fadeInUp">{{$review['customer_name']}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('hotels.includes.rooms.'.$hotel['id'])

    <section id="section-facilities" class="relative bg-light lines-deco">
        <div class="container-fluid relative z-2">
            <div class="row g-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="subtitle id-color wow fadeInUp mb-3">World Class</div>
                    <h2 class="wow fadeInUp">Our Facilites</h2>
                </div>

                <div class="col-lg-12 wow fadeInUp">
                    <div class="owl-custom-nav menu-float px-5" data-target="#facilities-carousel">
                        <a class="btn-next"></a>
                        <a class="btn-prev"></a>

                        <div id="facilities-carousel" class="owl-3-cols owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{env('APP_URL')}}/almaris/images/gallery/food-7.jpg" class="w-100 rounded-up-100" alt="">

                                <div class="mt-3 text-center">
                                    <h4>Restaurant and Dining</h4>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{env('APP_URL')}}/almaris/images/home/ikeja/home-swimming.jpg" class="w-100 rounded-up-100" alt="">

                                <div class="mt-3 text-center">
                                    <h4>Swimming Pool</h4>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{env('APP_URL')}}/almaris/images/gallery/outdoor2.jpg" class="w-100 rounded-up-100" alt="">

                                <div class="mt-3 text-center">
                                    <h4>Relaxation</h4>
                                </div>
                            </div>

                            <!-- <div class="item">
                                <img src="{{env('APP_URL')}}/almaris/images/facilities/4.webp" class="w-100 rounded-up-100" alt="">

                                <div class="mt-3 text-center">
                                    <h4>Meeting Room</h4>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{env('APP_URL')}}/almaris/images/facilities/5.webp" class="w-100 rounded-up-100" alt="">

                                <div class="mt-3 text-center">
                                    <h4>Spa &amp; Massage</h4>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{env('APP_URL')}}/almaris/images/facilities/6.webp" class="w-100 rounded-up-100" alt="">

                                <div class="mt-3 text-center">
                                    <h4>Laundry Services</h4>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="spacer-single"></div>

    </section>

    <section class="no-top no-bottom section-dark" aria-label="section">
        <a class="d-block hover popup-youtube" href="https://www.youtube.com/watch?v=C6rf51uHWJg">
            <div class="relative overflow-hidden">
                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                    <div class="player wow scaleIn"><span></span></div>
                </div>
                <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                <img src="{{env('APP_URL')}}/almaris/images-beach-resort/background/two.jpg" class="img-fluid" alt="">
            </div>
        </a>
    </section>

</div>
<!-- content close -->
@endsection
<script>
    window.addEventListener('load', function() {
        $('#reservationForm').on('submit', function(event) {
            // Create a new hidden input and append it to the form
            var startValue = $('input[name="daterangepicker_start"]').val();
            $('<input>').attr({
                type: 'hidden',
                name: 'checkin_date', // This should match the name attribute of the external input
                value: startValue
            }).appendTo('#reservationForm');

            var endValue = $('input[name="daterangepicker_end"]').val();
            $('<input>').attr({
                type: 'hidden',
                name: 'checkout_date', // This should match the name attribute of the external input
                value: endValue
            }).appendTo('#reservationForm');
        });
    });
</script>