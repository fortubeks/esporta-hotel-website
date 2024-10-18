@extends('layouts.almaris.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

<div id="top"></div>

<section id="subheader" class="relative jarallax text-light">
    <img src="almaris/images/background/mixed-1.webp" class="jarallax-img" alt="">
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
                        <img src="almaris/images/facilities/1.webp" class="jarallax-img" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="ms-lg-5 wow scaleIn">
                    <h2 class="wow fadeInUp">Local Cuisines</h2>
                    <p>It is the food, drink, and cuisine traditions, beliefs, and practices associated with a specific region's food, drink, and cuisine. A local dish is a food item that is closely associated with a specific region or community, often reflecting the culture, history, and agricultural practices of that area.</p>
                    <a class="btn-main wow fadeInUp animated" href="https://wa.me/2347066122407" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Order Now</a>
                </div>
            </div>                                                
        </div>

        <div class="row g-0 align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="me-lg-5 wow scaleIn">
                    <h2 class="wow fadeInUp">Continental Cuisines</h2>
                    <p>It essentially contains Mediterranean and French cuisine. Continental food includes the cuisines of European countries like Spain, France, Italy and more. This cuisine's staple ingredients are olive oil, wine, garlic and various herbs and spices to season and add flavour to the dishes.</p>
                    <a class="btn-main wow fadeInUp animated" href="https://wa.me/2347066122407" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Order Now</a>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="relative wow fadeInUp" data-wow-delay=".3s">   
                    <div class="shape-mask-2 jarallax">
                        <img src="almaris/images/facilities/2.webp" class="jarallax-img" alt="">
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