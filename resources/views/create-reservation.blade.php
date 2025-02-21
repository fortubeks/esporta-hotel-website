@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="subheader" class="relative jarallax text-light">
        <img src="{{env('APP_URL')}}/almaris/images/background/room.jpg" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1>Reservation</h1>
                    <ul class="crumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Reservation</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    <section id="section_form" class="relative lines-deco" data-select2-id="select2-data-section_form" style="background-size: cover; background-repeat: no-repeat;">
        <div class="container" data-select2-id="select2-data-26-f5ad" style="background-size: cover; background-repeat: no-repeat;">
            <div class="row" data-select2-id="select2-data-25-qk4e" style="background-size: cover; background-repeat: no-repeat;">
                <div class="col-lg-6 offset-lg-3" data-select2-id="select2-data-24-1rge" style="background-size: cover; background-repeat: no-repeat;">
                    @if (session('success'))
                    <div class="text-center" style="background-size: cover; background-repeat: no-repeat;">
                        <h2>Your reservation has been sent successfully.</h2>
                        <div class="col-lg-8 offset-lg-2" style="background-size: cover; background-repeat: no-repeat;">
                            <p>We will contact you shortly.</p>

                            <img src="{{env('APP_URL')}}/almaris/images/background/room.jpg" class="w-100 rounded-up-100" alt="">
                        </div>
                    </div>
                    @endif
                    @if($errors->any())
                    <div class="text-center text-danger" style="background-size: cover; background-repeat: no-repeat;">
                        <h2>Sorry, error occured this time sending your message.</h2>
                        @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                        @endforeach
                        <div class="col-lg-8 offset-lg-2" style="background-size: cover; background-repeat: no-repeat;">
                            <p>Please try again later.</p>
                        </div>
                    </div>
                    @endif
                    <div id="booking_form" data-select2-id="select2-data-booking_form" style="background-size: cover; background-repeat: no-repeat;">
                        <form name="contactForm" action="{{route('reservation.store')}}" id="contact_form" class="form-border" method="post" data-select2-id="select2-data-contact_form">
                            @csrf
                            <div class="row" style="background-size: cover; background-repeat: no-repeat;">

                                <div class="col-md-12" style="background-size: cover; background-repeat: no-repeat;">
                                    <h4>Choose Date</h4>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">Check In</label>
                                            <input type="date" name="checkin_date" class="form-control" value="{{$checkin_date ?? ''}}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Check Out</label>
                                            <input type="date" name="checkout_date" class="form-control" value="{{$checkout_date ?? ''}}" required>
                                        </div>
                                    </div>
                                    <!--<input type="text" id="date-picker" class="form-control mb-4" name="date" value="">
                                     <input type="hidden" name="checkin_date" id="checkin_date" value="{{$checkin_date ?? ''}}">
                                    <input type="hidden" name="checkout_date" id="checkout_date" value="{{$checkout_date ?? ''}}"> -->
                                    <h4>Choose Location</h4>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom01">Location</label>
                                            <select class="form-control" name="location" required>
                                                <option value="esporta">--Select Location--</option>
                                                <option value="ikeja" @if($location=='ikeja' ) selected @endif>Ikeja GRA, Lagos</option>
                                                <option value="magodo" @if($location=='magodo' ) selected @endif>Magodo, Lagos</option>
                                                <option value="agindingbi" @if($location=='agindingbi' ) selected @endif>Agindigbi, Lagos</option>
                                                <option value="lekki" @if($location=='lekki' ) selected @endif>Lekki, Lagos</option>
                                                <option value="ondo" @if($location=='ondo' ) selected @endif>Ondo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="guests-n-rooms mb-4" style="background-size: cover; background-repeat: no-repeat;">
                                        <div class="row g-4" style="background-size: cover; background-repeat: no-repeat;">
                                            <div class="col-md-4" style="background-size: cover; background-repeat: no-repeat;">
                                                <div class="text-center border-1 pt-2" style="background-size: cover; background-repeat: no-repeat;">
                                                    <h4>Adult</h4>
                                                    <div class="de-number" style="background-size: cover; background-repeat: no-repeat;">
                                                        <span class="d-minus">-</span>
                                                        <input type="text" name="adults" class="no-border no-bg" value="1">
                                                        <span class="d-plus">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="background-size: cover; background-repeat: no-repeat;">
                                                <div class="text-center border-1 pt-2" style="background-size: cover; background-repeat: no-repeat;">
                                                    <h4>Children</h4>
                                                    <div class="de-number" style="background-size: cover; background-repeat: no-repeat;">
                                                        <span class="d-minus">-</span>
                                                        <input type="text" name="children" class="no-border no-bg" value="0">
                                                        <span class="d-plus">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="background-size: cover; background-repeat: no-repeat;">
                                                <div class="text-center border-1 pt-2" style="background-size: cover; background-repeat: no-repeat;">
                                                    <h4>Room</h4>
                                                    <div id="d-room-count" class="de-number" style="background-size: cover; background-repeat: no-repeat;">
                                                        <span class="d-minus">-</span>
                                                        <input id="room-count" name="rooms" type="text" class="no-border no-bg" value="{{$rooms ?? 1}}">
                                                        <span class="d-plus">+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div id="step-2" class="row" style="background-size: cover; background-repeat: no-repeat;">
                                <h4>Enter your details</h4>

                                <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                                    <div id="name_error" class="error" style="background-size: cover; background-repeat: no-repeat;">Please enter your name.</div>
                                    <div style="background-size: cover; background-repeat: no-repeat;">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required="">
                                    </div>

                                    <div id="email_error" class="error" style="background-size: cover; background-repeat: no-repeat;">Please enter your valid E-mail ID.</div>
                                    <div style="background-size: cover; background-repeat: no-repeat;">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required="">
                                    </div>

                                    <div id="phone_error" class="error" style="background-size: cover; background-repeat: no-repeat;">Please enter your phone number.</div>
                                    <div style="background-size: cover; background-repeat: no-repeat;">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone" required="">
                                    </div>
                                </div>
                                <div class="col-md-6" style="background-size: cover; background-repeat: no-repeat;">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
                                </div>

                                <div class="col-md-12" style="background-size: cover; background-repeat: no-repeat;">
                                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                                    @error('g-recaptcha-response')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <p id="submit" class="mt20">
                                        <input type="submit" id="send_message" value="Submit Form" class="btn-main">
                                    </p>
                                </div>
                            </div>
                        </form>
                        <div id="error_message" class="error" style="background-size: cover; background-repeat: no-repeat;">Sorry, error occured this time sending your message.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
@endsection
<script>
    window.addEventListener('load', function() {

    });
</script>
<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}", {
                action: 'submit'
            })
            .then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
</script>