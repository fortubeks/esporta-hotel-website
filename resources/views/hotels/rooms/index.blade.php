@extends('layouts.almaris.hotel-one-page.master')
@section('content')

<!-- content begin -->
<div class="no-bottom no-top" id="content">

  <div id="top"></div>

  <section id="subheader" class="relative jarallax text-light">
    <img src="{{env('APP_URL')}}/almaris/images/background/room.JPG" class="jarallax-img" alt="">
    <div class="container relative z-index-1000">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Our Rooms</h1>
          <ul class="crumb">
            <li><a href="{{route('hotel.index',$hotel['id'])}}">Home</a></li>
            <li class="active">Our Rooms</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="de-overlay"></div>
  </section>

  @foreach($categories as $category)
  <section class="bg-dark text-light no-top no-bottom overflow-hidden">
    <div class="container-fluid position-relative half-fluid">
      <div class="container">
        <div class="row">
          <!-- Image -->
          <div class="col-lg-6 position-lg-absolute {{ ($loop->index % 2 == 0) ? 'right-half' : 'left-half' }} h-100">

            <div class="image" data-bgimage="url({{env('APP_URL').'/almaris/images/room/room'.$loop->index.'.JPG'}}) center"></div>
          </div>
          <!-- Text -->
          <div class="col-lg-6 {{ ($loop->index % 2 == 0) ? 'py-5 pe-lg-5' : 'offset-lg-6 py-5 ps-lg-5' }}">

            <h3>{{$category['name']}}</h3>
            <div class="fs-14 mb-3">
              <span class="me-4">

              </span>
              <span class="me-4">

              </span>
            </div>
            <p class="pe-lg-5">{{$category['description']}}</p>

            <!-- <a class="btn-main mt-2" href="{{route('hotel.rooms.show',['hotel' => $hotel['id'], 'category' => $category['id'] ] )}}">View Details</a> -->
            <a class="btn-main mt-2" href="{{route('hotel.index',$hotel['id'])}}">Book Now</a>

          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach

</div>
<!-- content close -->
@endsection
<script>
  window.addEventListener('load', function() {

  });
</script>