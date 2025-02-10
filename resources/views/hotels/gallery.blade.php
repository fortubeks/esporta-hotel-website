@extends('layouts.almaris.hotel-one-page.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <section id="subheader" class="relative jarallax text-light">
        <img src="{{env('APP_URL')}}/almaris/images/background/room.jpg" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1>Gallery</h1>
                    <ul class="crumb">
                        <li><a href="{{route('hotel.index',$hotel['id'])}}">Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    <section class="relative lines-deco">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 text-center">
                    <a href="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/1-thb.jpg') }}" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-10">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                            </div>
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/1.jpg') }}" class="img-fluid hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 text-center">
                    <a href="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/2-thb.jpg') }}" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-10">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                            </div>
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/2.jpg') }}" class="img-fluid hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 text-center">
                    <a href="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/3-thb.jpg') }}" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-10">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                            </div>
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/3.jpg') }}" class="img-fluid hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 text-center">
                    <a href="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/4-thb.jpg') }}" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-10">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                            </div>
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/4.jpg') }}" class="img-fluid hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 text-center">
                    <a href="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/5-thb.jpg') }}" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-10">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                            </div>
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/5.jpg') }}" class="img-fluid hover-scale-1-2" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 text-center">
                    <a href="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/6-thb.jpg') }}" class="image-popup d-block hover">
                        <div class="relative overflow-hidden rounded-10">
                            <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center z-2">
                                <h4 class="mb-0 hover-scale-in-3">View</h4>
                            </div>
                            <div class="absolute w-100 h-100 top-0 bg-dark hover-op-05"></div>
                            <img src="{{ asset('almaris/images/gallery/' . $hotel['id'] . '/6.jpg') }}" class="img-fluid hover-scale-1-2" alt="">
                        </div>
                    </a>
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