@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

    <div id="top"></div>

    <section id="subheader" class="relative jarallax text-light">
        <img src="almaris/images/background/cuisines-edited.jpg" class="jarallax-img" alt="">
        <div class="container relative z-index-1000">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1>Our Cuisines</h1>
                    <p class="lead mt-3">Take advantage of our exceptional cuisines we have to offer. From local to continental, we have everything you need for an unforgettable stay.</p>
                    <ul class="crumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Our Cuisines</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="de-overlay"></div>
    </section>

    <section class="relative lines-deco">
        <div class="container">
            <div class="row g-0 align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">
                        <div class="shape-mask-1 jarallax">
                            <img src="almaris/images/gallery/cuisines1.jpg" class="jarallax-img" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="ms-lg-5 wow scaleIn">
                        <h2 class="wow fadeInUp">Local Cuisines</h2>
                        <p>Experience the rich traditions, flavors, and culinary heritage of a region through its food and drink. Each local dish tells a story of culture, history, and agriculture. Discover, taste, and celebrate authentic flavors—explore our local cusine today!</p>
                        <a class="btn-main wow fadeInUp animated" href="https://wa.me/2347066122407" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="row g-0 align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="me-lg-5 wow scaleIn">
                        <h2 class="wow fadeInUp">Continental Cuisines</h2>
                        <p>Savor the refined flavors and diverse culinary traditions of European-inspired cuisine. Each dish showcases a blend of culture, history, and technique. Indulge in exquisite tastes and elevate your dining experience—explore our continental cuisine today!</p>
                        <a class="btn-main wow fadeInUp animated" href="https://wa.me/2347066122407" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Order Now</a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="relative wow fadeInUp" data-wow-delay=".3s">
                        <div class="shape-mask-2 jarallax">
                            <img src="almaris/images/gallery/cuisines3.jpg" class="jarallax-img" alt="">
                        </div>
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