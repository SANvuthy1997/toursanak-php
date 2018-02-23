@extends('layouts.toursanak')
@section('content')

      <div class="col s6 m4 l4">
        <a href="#">
          <div class="mainGroupbtc">
            <div class="main-btc">
              <div class="font-btc" style="position: relative;">
                <i class="fab fa-bitcoin " aria-hidden="true"></i>
                <center><span class="BITCOIN">BITCOIN <br> ACCEPTED HERE</span>
                </center>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="row" style="margin-bottom: 0px;">
      <div class="col s12 m6 l6">
        <div class="row" style="margin-bottom: 0px;">
          <div class="col s6 m6 l6">
            <h6 class="Promotion">Special Offers</h6>
          </div>
          <div class="col s6 m6 l6">
            <h6 class="Upcoming">Upcoming Tour</h6>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l6"></div>
    </div>

    <div class="Green">
      <div class="row" >

      @foreach($posts as $post)
        <div class="col s12 m4 l4" style="margin-bottom:10px;">
          <a href="{{$post->slug}}" class="linkColor">
            <img src="{{$post->featured}}" class="responsive-img">
            <center>
              <h6 class="tourName">{{$post->title}}</h6>
            </center>
              <div class="backDetail">
                <h6 class="detailsDate">{{$post->tour_date}}<span class="right priceIndex">${{$post->price}}</span></h6>
              </div>
          </a>
        </div>
      @endforeach
        <div class="col s12 m12 l12">
          <center>
            <button class="btn loadMore1"> Load More</button>
          </center>
        </div>
      </div>
    </div>

    <div class="Yellow">
      <div class="row" >

        @foreach($upcoming as $post)
          <div class="col s12 m4 l4" style="margin-bottom:10px;">
            <a href="{{$post->slug}}" class="linkColor">
              <img src="{{$post->featured}}" class="responsive-img">
              <center>
                <h6 class="tourName">{{$post->title}}</h6>
              </center>
                <div class="backDetailY">
                  <h6 class="detailsDateY">{{$post->tour_date}}<span class="right priceIndex">${{$post->price}}</span></h6>
                </div>
            </a>
          </div>
        @endforeach
      
      
        

        <div class="col s12 m12 l12">
          <center>
            <a href="category/upcoming-tour/index.html" class="btn loadMore2"> Load More</a>
          </center>
        </div>

      </div>
    </div>

    <div class="row">
      <h5 class="popTours">Popular Tours</h5>
      <hr class="Hrpop">

      <div class="owl-carousel owl-theme">
      
      @foreach($popular_post as $post)
        <a href="{{$post->slug}}">
          <img src="{{$post->featured}}" class="responsive-img Top">
            <h6 class="tourName">{{$post->title}}</h6>
        </a>
      @endforeach
      
      </div>

    </div>

  </div> <!--end container-->

@endsection
