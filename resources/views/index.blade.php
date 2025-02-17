@extends('layouts.almaris.master')
@section('content')
<style>
    :root {
        --arrow-bg: rgba(255, 255, 255, 0.3);
        --arrow-icon: url(almaris/images/svg/Caret_down_font_awesome_whitevariation.svg);
        --option-bg: #000;
        --select-bg: #02020233;
    }

    /* <select> styles */
    select {
        /* Reset */
        appearance: none;
        border: 0;
        outline: 0;
        font: inherit;
        /* Personalize */
        /* width: 20rem; */
        padding: 0.5rem 4rem 0.5rem 1rem;
        background: var(--arrow-icon) no-repeat right 0.8em center / 1.4em,
            linear-gradient(to left, var(--arrow-bg) 3em, var(--select-bg) 3em);
        color: white;
        border-radius: 0.25em;
        box-shadow: 0 0 1em 0 rgba(0, 0, 0, 0.2);
        cursor: pointer;
        background-color: black;
        box-sizing: border-box;

        /* Remove IE arrow */
        &::-ms-expand {
            display: none;
        }

        /* Remove focus outline */
        &:focus {
            outline: none;
        }

        /* <option> colors */
        option {
            color: inherit;
            background-color: var(--option-bg);
        }
    }
</style>
<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <section class="no-top no-bottom text-light jarallax relative vertical-center" data-video-src="mp4:almaris/video/home-video.mp4">
        <div class="container relative z-2">
            <div class="row g-4">
                <div class="col-lg-12 text-center">
                    <div class="sw-text-wrapper">
                        <h1 class="slider-title fs-120 mb-2">Stay. Relax. Enjoy</h1>
                        <p class="slider-teaser mb-0">Discover the perfect blend of luxury, comfort, and convenience at Esporta Hotels & Resorts.</p>
                    </div>

                    <div class="spacer-single"></div>

                    <div class="bg-blur padding40 py-4">
                        <form id="reservationForm" method="get" action="https://appv2.venushotelsoftware.com/booking-engine/available-categories">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-9">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-md-3 text-lg-start text-center">
                                            <h3 class="mb-0">Reservation</h3>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="text-center ">
                                                <h6 class="id-color">Destination</h6>
                                                <select name="location">
                                                    <option value="">--Select Destination--</option>
                                                    <option value="ikeja">Ikeja GRA, Lagos</option>
                                                    <option value="magodo">Magodo, Lagos</option>
                                                    <option value="agindingbi">Agindigbi, Lagos</option>
                                                    <option value="lekki">Lekki, Lagos</option>
                                                    <option value="ondo">Ondo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center ">
                                                <h6 class="id-color mb-1">Choose Date</h6>
                                                <input type="text" id="date-picker" class="form-control no-border no-bg bg-focus-color text-white fs-20 text-right text-center" name="date" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-center ">
                                                <h6 class="id-color">Rooms</h6>
                                                <div class="de-number">
                                                    <span class="d-minus">-</span>
                                                    <input type="text" class="no-border no-bg" name="rooms" value="1">
                                                    <span class="d-plus">+</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 text-lg-end text-center">
                                    <input type="hidden" name="hotel_id" value="{{hotelId()}}">
                                    <button type="submit" class="btn-main">Check Availability</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="de-overlay"></div>
    </section>

    <section class="relative lines-deco">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 sm-hide">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">
                        <div class="abs top-0 w-100">
                            <div class="shape-mask-1 jarallax">
                                <img src="{{env('APP_URL')}}/almaris/images/misc/home1.jpg" class="jarallax-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center">
                    <div class="wow scaleIn">
                        <div class="subtitle id-color mb-3">Welcome To Esporta</div>
                        <h2 class="wow fadeInUp">Exceptional Hospitality and Unmatched Relaxation at Esporta Hotels</h2>

                        <div class="text-center wow fadeInUp" data-wow-delay=".5s">
                            <h4 class="fw-bold mb-1"><a href="#">4.9 out of 5</a></h4>
                            <div class="de-rating-ext fs-18">
                                <span class="d-stars">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </span>
                            </div>
                            <span class="d-block fs-14 mb-0"><a href="#">Based on 10000+ reviews</a></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 sm-hide">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">
                        <div class="abs top-0 w-100">
                            <div class="shape-mask-1 jarallax">
                                <img src="{{env('APP_URL')}}/almaris/images/background/room.jpg" class="jarallax-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="bg-light">
        <div class="container-fluid relative z-2">
            <div class="row g-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="subtitle id-color wow fadeInUp mb-2">Esporta Hotels & Resorts</div>
                    <h2 class="mb-0 wow fadeInUp">Discover our Hotels</h2>
                </div>

                <div class="col-lg-12">
                    <div class="owl-custom-nav menu-float px-5" data-target="#room-carousel">
                        <a class="btn-next"></a>
                        <a class="btn-prev"></a>

                        <div id="room-carousel" class="owl-3-cols owl-carousel owl-theme">
                            <!-- room begin -->
                            <div class="item">
                                <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".3s">
                                    <img src="{{env('APP_URL')}}/almaris/images/home/ikeja.jpg" class="img-fluid" alt="">
                                    <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <div class="fs-14"></div>
                                        <h3 class="fs-40 lh-1 mb-4"></h3>
                                        <a class="btn-line" href="{{route('hotel.index','ikeja')}}">Visit Ikeja</a>
                                    </div>
                                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                        <div class="text-center fs-14">
                                            <span class="mx-2">

                                            </span>
                                            <span class="mx-2">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="gradient-trans-black-bottom op-8 abs w-100 h-40 bottom-0"></div>
                                </div>
                                <h4 class="mt-3 text-center">Ikeja, Lagos</h4>
                            </div>
                            <!-- room end -->

                            <!-- room begin -->
                            <div class="item">
                                <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".4s">
                                    <img src="{{env('APP_URL')}}/almaris/images/home/magodo.jpg" class="img-fluid" alt="">
                                    <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <div class="fs-14"></div>
                                        <h3 class="fs-40 lh-1 mb-4"></h3>
                                        <a class="btn-line" href="{{route('hotel.index','magodo')}}">Visit Magodo</a>
                                    </div>
                                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">

                                        <div class="text-center fs-14">
                                            <span class="mx-2">

                                            </span>
                                            <span class="mx-2">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="gradient-trans-black-bottom op-8 abs w-100 h-40 bottom-0"></div>
                                </div>
                                <h4 class="mt-3 text-center">Magodo, Lagos</h4>
                            </div>
                            <!-- room end -->

                            <!-- room begin -->
                            <div class="item">
                                <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".5s">
                                    <img src="{{env('APP_URL')}}/almaris/images/home/agidinbi.jpg" class="img-fluid" alt="">
                                    <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <div class="fs-14"></div>
                                        <h3 class="fs-40 lh-1 mb-4"></h3>
                                        <a class="btn-line" href="{{route('hotel.index','agidingbi')}}">Visit Agidingbi</a>
                                    </div>
                                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">

                                        <div class="text-center fs-14">
                                            <span class="mx-2">

                                            </span>
                                            <span class="mx-2">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="gradient-trans-black-bottom op-8 abs w-100 h-40 bottom-0"></div>
                                </div>
                                <h4 class="mt-3 text-center">Agidingbi, Lagos</h4>
                            </div>
                            <!-- room end -->

                            <!-- room begin -->
                            <div class="item">
                                <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".7s">
                                    <img src="{{env('APP_URL')}}/almaris/images/home/lekki.jpg" class="img-fluid" alt="">
                                    <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <div class="fs-14"></div>
                                        <h3 class="fs-40 lh-1 mb-4"></h3>
                                        <a class="btn-line" href="{{route('hotel.index','lekki')}}">Visit Lekki</a>
                                    </div>
                                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">

                                        <div class="text-center fs-14">
                                            <span class="mx-2">

                                            </span>
                                            <span class="mx-2">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="gradient-trans-black-bottom op-8 abs w-100 h-40 bottom-0"></div>
                                </div>
                                <h4 class="mt-3 text-center">Lekki, Lagos</h4>
                            </div>
                            <!-- room end -->
                            <!-- room begin -->
                            <div class="item">
                                <div class="hover relative text-light text-center wow fadeInUp" data-wow-delay=".7s">
                                    <img src="{{env('APP_URL')}}/almaris/images/home/ondo.jpg" class="img-fluid" alt="">
                                    <div class="abs hover-op-1 z-4 hover-mt-40 abs-centered">
                                        <div class="fs-14"></div>
                                        <h3 class="fs-40 lh-1 mb-4"></h3>
                                        <a class="btn-line" href="{{route('hotel.index','ondo')}}">Visit Ondo</a>
                                    </div>
                                    <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                    <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">

                                        <div class="text-center fs-14">
                                            <span class="mx-2">

                                            </span>
                                            <span class="mx-2">

                                            </span>
                                        </div>
                                    </div>
                                    <div class="gradient-trans-black-bottom op-8 abs w-100 h-40 bottom-0"></div>
                                </div>
                                <h4 class="mt-3 text-center">Ondo</h4>
                            </div>
                            <!-- room end -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="subtitle id-color wow fadeInUp mb-2">Our services will impress you</div>
                    <h2 class="mb-0 wow fadeInUp">Discover Our Services</h2>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".0s">
                    <h4>Dining & Lounge</h4>
                    <p>Enjoy exquisite meals and refreshing drinks in a relaxed atmosphere, perfect for unwinding after a long day or celebrating a special occasion.</p>

                    <img src="{{env('APP_URL')}}/almaris/images/gallery/food-1.jpg" class="w-100" alt="">
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <h4>Fitness & Recreation</h4>
                    <p>Stay active at our state-of-the-art gym or take a dip in the pool, offering a perfect balance of fitness and relaxation for all guests.</p>

                    <img src="{{env('APP_URL')}}/almaris/images/gallery/outdoor3.jpg" class="w-100" alt="">
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                    <h4>Meetings & Events</h4>
                    <p>Host your next meeting or event in our modern, fully-equipped spaces, designed to accommodate any occasion with style and efficiency.</p>

                    <img src="{{env('APP_URL')}}/almaris/images-beach-resort/misc/home-meetings.webp" class="w-100" alt="">
                </div>


            </div>
        </div>
    </section>

    <section class="relative" style="background-size: cover; background-repeat: no-repeat;">
        <div class="container relative z-2" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row g-4 align-items-center" style="background-size: cover; background-repeat: no-repeat;">

                <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="row align-items-center" style="background-size: cover; background-repeat: no-repeat;">

                        <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="relative" style="background-size: cover; background-repeat: no-repeat;">
                                <img src="{{env('APP_URL')}}/almaris/images-beach-resort/misc/home-food-1.jpg" class="w-100 rounded02 wow fadeInUp animated" alt="" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            </div>
                        </div>

                        <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                            <div class="relative" style="background-size: cover; background-repeat: no-repeat;">
                                <img src="{{env('APP_URL')}}/almaris/images-beach-resort/misc/home-food-2.jpg" class="w-100 rounded02 wow fadeInUp animated" alt="" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" style="background-size: cover; background-repeat: no-repeat;">
                    <div class="ms-4" style="background-size: cover; background-repeat: no-repeat;">
                        <div class="subtitle id-color wow fadeInUp mb-2 animated" data-wow-delay=".0s" style="background-size: cover; background-repeat: no-repeat; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">Discover Our Cuisines</div>
                        <h2 class="wow fadeInUp  animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Experience the Ultimate Esporta Cuisine</h2>

                        <p class="wow fadeInUp animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">At Esporta, We serve the best cusine and dining experience. Unwind with the best cuisine experience with finger licking foods</p>

                        <a class="btn-main wow fadeInUp animated" href="{{route('cuisines')}}" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Discover More</a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="relative overflow-hidden text-light section-dark" data-bgimage="url(almaris/images-beach-resort/background/one.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-single-dots owl-carousel owl-theme">
                        <div class="item">
                            <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                            <h6 class="mb-4 wow fadeInUp fs-36">All round relaxation center. Everything you need is just a call away. There is the lodge, sit out, swimming pool, gaming area, good park car and well equipped security system. You will definitely enjoy your vacation here if you come to Lasgidi. There rooms are affordable and 24/7 electricity either on gen or direct. I had a wonderful mini vacation here.</h6>
                            <span class="wow fadeInUp">Adebiyi Simisola, Customer from Esporta Magodo</span>
                        </div>

                        <div class="item">
                            <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                            <h6 class="mb-4 wow fadeInUp fs-36">Want to watch Your Favourite Team's Football Match on a Big Screen while you sip Palm Wine by Ologuro or your favourite Brand... Esporta ticks it all
                                ...btw they have Karaoke Nights too and The Experience is Awesome.</h6>
                            <span class="wow fadeInUp">KingDamyl, Customer from Esporta Ikeja</span>
                        </div>

                        <div class="item">
                            <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                            <h6 class="mb-4 wow fadeInUp fs-36">Wonderful place to relax during the weekend or after work.
                                Their meals are also lovely.
                                It's spacious and you get to meet new people regularly.
                                Prices are also very good.
                            </h6>
                            <span class="wow fadeInUp">Jonathan Shoyeolu, Customer from Esporta Magodo</span>
                        </div>

                        <div class="item">
                            <i class="icofont-quote-left id-color fs-40 mb-4 wow fadeInUp"></i>
                            <h6 class="mb-4 wow fadeInUp fs-36">It's the location for me. Not far from the airport and it's in a very secured part of town. Very clean and classy rooms, environment is nice and the food was awesome. The bar by the pool side kept me busy. Kudos of the management.</h6>
                            <span class="wow fadeInUp">Kenneth Nwarache, Customer from Esporta Ikeja</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="subtitle id-color wow fadeInUp mb-2">Hurry Up</div>
                    <h2 class="wow fadeInUp">Special Offers</h2>

                    <div class="spacer-half"></div>

                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".2s">
                            <div class="relative">
                                <a href="#">
                                    <i class="bg-color text-light p-3 fs-48 mb-4 icofont-fast-food"></i>
                                    <h4>Esporta Express</h4>
                                </a>
                                <p>The best food delivery experience in Lagos. Delivery is all day everyday. Order now</p>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay=".4s">
                            <div class="relative">
                                <a href="#">
                                    <i class="bg-color text-light p-3 fs-48 mb-4 icofont-fast-food"></i>
                                    <h4>Esporta Buka </h4>
                                </a>
                                <p>The best buka experience in Lagos. Eat-in or Delivery at Ikeja GRA and Magodo branches. Order now</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="relative">
                        <div class="row g-3 align-items-center">
                            <div class="col-6 wow fadeInUp" data-wow-delay=".2s">
                                <img src="{{env('APP_URL')}}/almaris/images-beach-resort/misc/home-food-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6 wow fadeInUp" data-wow-delay=".4s">
                                <img src="{{env('APP_URL')}}/almaris/images-beach-resort/misc/home-food-4.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="no-top no-bottom section-dark" aria-label="section">
        <a class="d-block hover popup-youtube" href="https://www.youtube.com/watch?v=rd_5zFViJa0">
            <div class="relative overflow-hidden">
                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                    <div class="player wow scaleIn"><span>Play</span></div>
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