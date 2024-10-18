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
                <div class="swiper-inner" data-bgimage="url({{env('APP_URL')}}/almaris/images/slider/1.jpg)">
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
                                        <p class="col-lg-8 offset-lg-2 slider-teaser px-4 mb-0">Discover the perfect blend of luxury, comfort, and convenience at Esporta. Nestled in the heart of Lagos, our hotel is your gateway to an unforgettable experience.</p>
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
                <div class="swiper-inner" data-bgimage="url({{env('APP_URL')}}/almaris/images/slider/2.jpg)">
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
                                        <h1 class="slider-title mb-4">Experience Hospitality Like Never Before</h1>
                                        <p class="col-lg-8 offset-lg-2 slider-teaser px-4 mb-0">Discover the perfect blend of luxury, comfort, and convenience at Esporta. Nestled in the heart of Lagos, our hotel is your gateway to an unforgettable experience.</p>
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
                            <img src="{{env('APP_URL')}}/almaris/images/misc/2.webp" class="jarallax-img" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <div class="wow scaleIn">
                    <div class="subtitle id-color mb-3">Welcome To Esporta</div>
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
                            <img src="{{env('APP_URL')}}/almaris/images/misc/3.webp" class="jarallax-img" alt="">
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
                        <p class="mb-0">Do dolore laboris commodo amet cillum qui voluptate velit occaecat adipisicing laboris est minim.</p>
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
                        <p class="mb-0">Do dolore laboris commodo amet cillum qui voluptate velit occaecat adipisicing laboris est minim.</p>
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
                        <p class="mb-0">Do dolore laboris commodo amet cillum qui voluptate velit occaecat adipisicing laboris est minim.</p>
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
                        <p class="mb-0">Do dolore laboris commodo amet cillum qui voluptate velit occaecat adipisicing laboris est minim.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s" >
                <div class="relative p-4 bg-white border-grey">
                    <span class="abs top-= w-70px p-3 rounded-up-100 bg-color d-block">
                        <img src="{{env('APP_URL')}}/almaris/images/svg/meeting-explain-svgrepo-com.svg" class="w-100" alt="">
                    </span>
                    <div class="pl-90">
                        <h4>Meeting Room</h4>
                        <p class="mb-0">Do dolore laboris commodo amet cillum qui voluptate velit occaecat adipisicing laboris est minim.</p>
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
                        <p class="mb-0">Do dolore laboris commodo amet cillum qui voluptate velit occaecat adipisicing laboris est minim.</p>
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
    <img src="{{env('APP_URL')}}/almaris/images/background/1.webp" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="owl-single-dots owl-carousel owl-theme">
                    <div class="item">
                        <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                        <h3 class="mb-4 wow fadeInUp fs-36">Experience unparalleled luxury and personalized service at Esporta Hotel, where every stay is a journey into sophistication, comfort, and unforgettable memories.</h3>
                        <span class="wow fadeInUp">Donette Fondren</span>
                    </div>

                    <div class="item">
                        <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                        <h3 class="mb-4 wow fadeInUp fs-36">Experience unparalleled luxury and personalized service at Esporta Hotel, where every stay is a journey into sophistication, comfort, and unforgettable memories.</h3>
                        <span class="wow fadeInUp">Donette Fondren</span>
                    </div>

                    <div class="item">
                        <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                        <h3 class="mb-4 wow fadeInUp fs-36">Experience unparalleled luxury and personalized service at Esporta Hotel, where every stay is a journey into sophistication, comfort, and unforgettable memories.</h3>
                        <span class="wow fadeInUp">Donette Fondren</span>
                    </div>

                    <div class="item">
                        <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                        <h3 class="mb-4 wow fadeInUp fs-36">Experience unparalleled luxury and personalized service at Esporta Hotel, where every stay is a journey into sophistication, comfort, and unforgettable memories.</h3>
                        <span class="wow fadeInUp">Donette Fondren</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-rooms" class="relative bg-light lines-deco">
    <div class="container-fluid relative z-2">
        <div class="row g-4">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="subtitle id-color wow fadeInUp mb-3">Luxury</div>
                <h2 class="wow fadeInUp">Accomodation</h2>
            </div>
            
            <div class="col-lg-12">
                <div class="owl-custom-nav menu-float px-5" data-target="#room-carousel">
                    <a class="btn-next"></a>
                    <a class="btn-prev"></a>                                

                    <div id="room-carousel" class="owl-3-cols owl-carousel owl-theme">
                        <!-- room begin -->
                        <div class="item">
                            <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
                                <img src="{{env('APP_URL')}}/almaris/images/room/1.webp" class="w-100 rounded-up-100" alt="">
                                <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="fs-14">From</div>
                                    <h3 class="fs-40 lh-1 mb-4">₦40,000</h3>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                    <h3 class="mb-0">Standard Room</h3>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            2 Guests
                                        </span>
                                        <span class="mx-2">
                                            30 ft
                                        </span>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="mt-3">
                                <p>Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</p>
                            
                                <div class="d-inline">
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/guests.png" alt="">
                                            <div class="text">2 Guests</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/size.png" alt="">
                                            <div class="text">30 Feets Size</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/door.png" alt="">
                                            <div class="text">Connecting Rooms</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bed.png" alt="">
                                            <div class="text">1 King Bed</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/tv.png" alt="">
                                            <div class="text">Cable TV</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/shower.png" alt="">
                                            <div class="text">Shower</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/safebox.png" alt="">
                                            <div class="text">Safebox</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/wifi.png" alt="">
                                            <div class="text">Free WiFi</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/desk.png" alt="">
                                            <div class="text">Work Desk</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/balcony.png" alt="">
                                            <div class="text">Balcony</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bathub.png" alt="">
                                            <div class="text">Bathub</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/city.png" alt="">
                                            <div class="text">City View</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room end -->
                                                
                        <!-- room begin -->
                        <div class="item">
                            <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".4s">
                                <img src="{{env('APP_URL')}}/almaris/images/room/2.webp" class="w-100 rounded-up-100" alt="">
                                <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="fs-14">From</div>
                                    <h3 class="fs-40 lh-1 mb-4">₦40,000</h3>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                    <h3 class="mb-0">Deluxe Room</h3>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            2 Guests
                                        </span>
                                        <span class="mx-2">
                                            35 ft
                                        </span>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="mt-3">
                                <p>Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</p>
                            
                                <div class="d-inline">
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/guests.png" alt="">
                                            <div class="text">2 Guests</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/size.png" alt="">
                                            <div class="text">35 Feets Size</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/door.png" alt="">
                                            <div class="text">Connecting Rooms</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bed.png" alt="">
                                            <div class="text">1 King Bed</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/tv.png" alt="">
                                            <div class="text">Cable TV</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/shower.png" alt="">
                                            <div class="text">Shower</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/safebox.png" alt="">
                                            <div class="text">Safebox</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/wifi.png" alt="">
                                            <div class="text">Free WiFi</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/desk.png" alt="">
                                            <div class="text">Work Desk</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/balcony.png" alt="">
                                            <div class="text">Balcony</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bathub.png" alt="">
                                            <div class="text">Bathub</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/city.png" alt="">
                                            <div class="text">City View</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room end -->
                        
                        <!-- room begin -->
                        <div class="item">
                            <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".5s">
                                <img src="{{env('APP_URL')}}/almaris/images/room/3.webp" class="w-100 rounded-up-100" alt="">
                                <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="fs-14">From</div>
                                    <h3 class="fs-40 lh-1 mb-4">₦40,000</h3>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                    <h3 class="mb-0">Premier Room</h3>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            2 Guests
                                        </span>
                                        <span class="mx-2">
                                            35 ft
                                        </span>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="mt-3">
                                <p>Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</p>
                            
                                <div class="d-inline">
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/guests.png" alt="">
                                            <div class="text">2 Guests</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/size.png" alt="">
                                            <div class="text">35 Feets Size</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/door.png" alt="">
                                            <div class="text">Connecting Rooms</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bed.png" alt="">
                                            <div class="text">1 King Bed</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/tv.png" alt="">
                                            <div class="text">Cable TV</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/shower.png" alt="">
                                            <div class="text">Shower</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/safebox.png" alt="">
                                            <div class="text">Safebox</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/wifi.png" alt="">
                                            <div class="text">Free WiFi</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/desk.png" alt="">
                                            <div class="text">Work Desk</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/balcony.png" alt="">
                                            <div class="text">Balcony</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bathub.png" alt="">
                                            <div class="text">Bathub</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/city.png" alt="">
                                            <div class="text">City View</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room end -->

                        <!-- room begin -->
                        <div class="item">
                            <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".7s">
                                <img src="{{env('APP_URL')}}/almaris/images/room/4.webp" class="w-100 rounded-up-100" alt="">
                                <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="fs-14">From</div>
                                    <h3 class="fs-40 lh-1 mb-4">₦40,000</h3>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                    <h3 class="mb-0">Family Suite</h3>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            4 Guests
                                        </span>
                                        <span class="mx-2">
                                            60 ft
                                        </span>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="mt-3">
                                <p>Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</p>
                            
                                <div class="d-inline">
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/guests.png" alt="">
                                            <div class="text">4 Guests</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/size.png" alt="">
                                            <div class="text">60 Feets Size</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/door.png" alt="">
                                            <div class="text">Connecting Rooms</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bed.png" alt="">
                                            <div class="text">1 King Bed</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/tv.png" alt="">
                                            <div class="text">Cable TV</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/shower.png" alt="">
                                            <div class="text">Shower</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/safebox.png" alt="">
                                            <div class="text">Safebox</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/wifi.png" alt="">
                                            <div class="text">Free WiFi</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/desk.png" alt="">
                                            <div class="text">Work Desk</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/balcony.png" alt="">
                                            <div class="text">Balcony</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bathub.png" alt="">
                                            <div class="text">Bathub</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/city.png" alt="">
                                            <div class="text">City View</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room end -->

                        <!-- room begin -->
                        <div class="item">
                            <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".7s">
                                <img src="{{env('APP_URL')}}/almaris/images/room/5.webp" class="w-100 rounded-up-100" alt="">
                                <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="fs-14">From</div>
                                    <h3 class="fs-40 lh-1 mb-4">₦40,000</h3>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                    <h3 class="mb-0">Luxury Suite</h3>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            4 Guests
                                        </span>
                                        <span class="mx-2">
                                            60 ft
                                        </span>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="mt-3">
                                <p>Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</p>
                            
                                <div class="d-inline">
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/guests.png" alt="">
                                            <div class="text">4 Guests</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/size.png" alt="">
                                            <div class="text">60 Feets Size</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/door.png" alt="">
                                            <div class="text">Connecting Rooms</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bed.png" alt="">
                                            <div class="text">1 King Bed</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/tv.png" alt="">
                                            <div class="text">Cable TV</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/shower.png" alt="">
                                            <div class="text">Shower</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/safebox.png" alt="">
                                            <div class="text">Safebox</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/wifi.png" alt="">
                                            <div class="text">Free WiFi</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/desk.png" alt="">
                                            <div class="text">Work Desk</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/balcony.png" alt="">
                                            <div class="text">Balcony</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bathub.png" alt="">
                                            <div class="text">Bathub</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/city.png" alt="">
                                            <div class="text">City View</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room end -->

                        <!-- room begin -->
                        <div class="item">
                            <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".7s">
                                <img src="{{env('APP_URL')}}/almaris/images/room/6.webp" class="w-100 rounded-up-100" alt="">
                                <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="fs-14">From</div>
                                    <h3 class="fs-40 lh-1 mb-4">₦40,000</h3>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1 rounded-up-100"></div>
                                <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                    <h3 class="mb-0">Presidential Suite</h3>
                                    <div class="text-center fs-14">
                                        <span class="mx-2">
                                            4 Guests
                                        </span>
                                        <span class="mx-2">
                                            60 ft
                                        </span>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                            <div class="mt-3">
                                <p>Step into our luxurious hotel rooms, where sophistication meets comfort. Nestled in the heart of the city, our rooms offer a serene escape from the hustle and bustle.</p>
                            
                                <div class="d-inline">
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/guests.png" alt="">
                                            <div class="text">4 Guests</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/size.png" alt="">
                                            <div class="text">60 Feets Size</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/door.png" alt="">
                                            <div class="text">Connecting Rooms</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bed.png" alt="">
                                            <div class="text">1 King Bed</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/tv.png" alt="">
                                            <div class="text">Cable TV</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/shower.png" alt="">
                                            <div class="text">Shower</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/safebox.png" alt="">
                                            <div class="text">Safebox</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/wifi.png" alt="">
                                            <div class="text">Free WiFi</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/desk.png" alt="">
                                            <div class="text">Work Desk</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/balcony.png" alt="">
                                            <div class="text">Balcony</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/bathub.png" alt="">
                                            <div class="text">Bathub</div>
                                        </div>
                                    
                                        <div class="d-tagline-s2">
                                            <img src="{{env('APP_URL')}}/almaris/images/icons/city.png" alt="">
                                            <div class="text">City View</div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- room end -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

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
                            <img src="{{env('APP_URL')}}/almaris/images/facilities/1.webp" class="w-100 rounded-up-100" alt="">

                            <div class="mt-3 text-center">
                                <h4>Cafe and Restaurant</h4>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{env('APP_URL')}}/almaris/images/facilities/2.webp" class="w-100 rounded-up-100" alt="">

                            <div class="mt-3 text-center">
                                <h4>Swimming Pool</h4>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{env('APP_URL')}}/almaris/images/facilities/3.webp" class="w-100 rounded-up-100" alt="">

                            <div class="mt-3 text-center">
                                <h4>Fitness Center</h4>
                            </div>
                        </div>

                        <div class="item">
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
                        </div>
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
                name: 'checkin_date',  // This should match the name attribute of the external input
                value: startValue
            }).appendTo('#reservationForm');

            var endValue = $('input[name="daterangepicker_end"]').val();
            $('<input>').attr({
                type: 'hidden',
                name: 'checkout_date',  // This should match the name attribute of the external input
                value: endValue
            }).appendTo('#reservationForm');
        });
    });
</script>