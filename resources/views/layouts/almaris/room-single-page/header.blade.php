<!-- header begin -->
<header class="has-topbar">
    <div id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between xs-hide">
                        <div class="header-widget d-flex">                                    
                            <div class="topbar-widget"><a href="#"><i class="icofont-location-pin"></i>742 Evergreen Terrace Brooklyn, NY 11201</a></div>
                            <div class="topbar-widget"><a href="#"><i class="icofont-phone"></i>+929 333 9296</a></div>
                            <div class="topbar-widget"><a href="#"><i class="icofont-envelope"></i>contact@almaris.com</a></div>
                        </div>

                        <div class="social-icons">
                            <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo-main" src="{{env('APP_URL')}}/almaris/images/logo.png" alt="" >
                                <img class="logo-scroll" src="{{env('APP_URL')}}/almaris/images/logo.png" alt="" >
                                <img class="logo-mobile" src="{{env('APP_URL')}}/almaris/images/logo.png" alt="" >
                            </a>
                        </div>
                        <!-- logo close -->
                         <span> | {{$hotel['location']}}</span>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a href="{{route('hotel.rooms.index', $hotel['id'])}}">Rooms</a></li>
                            
                            <li><a href="{{route('hotel.gallery', $hotel['id'])}}">Gallery</a></li>
                            <li><a href="{{route('hotel.reviews', $hotel['id'])}}">Reviews</a></li>
                            
                            <li><a href="{{route('hotel.contact', $hotel['id'])}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="de-flex-col">
                        <div class="menu_side_area">          
                            <a href="{{route('hotel.index',$hotel['id'])}}" class="btn-main btn-line">Reservation</a>
                            <span id="menu-btn"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->