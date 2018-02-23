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

    <div class="row" style="margin: 0px;">
      
      <div class="col s12 m8 l8">
      
        <div class="row" style="margin-bottom: 0px;">
          <h6 class="southern">{{$post->title}} </h6>
        </div>
        <table style="margin-left: -15px;">
          <tr>
            <td>Duration</td>
            <td>{{$post->tour_date}}</td>
          </tr>

          <tr>
            <td>Participants</td>
            <td>2 min / 10 max </td>
          </tr>

          <tr>
            <td>Cost</td>
            <td>$ {{$post->price}} per person</td>
          </tr>

        </table>

        <div class="row">
          {!! $post->content !!}
        </div>
      </div>


      <div class="col s12 m4 l4">
        
          <div style="position: relative;">
          <div style="padding:0px 0px ">
          </div>
          <br>
            <form method="POST" action="http://toursanak.com/bookTour/islands-of-the-mekong/send/">
            <div class="backPost">
              <div class="row" style="margin: 0px;">


                <div class="col s12 m12 l12 ">
                  <input type="text" name="nameTour" value="Islands of the Mekong " style="display: none;">
                </div>


                <div class="col s12 m6 l6" style="padding: 0px 5px;">
                  <div class="dataColor btnPrice" style="position: relative;">
                    <input type="text" class="datepicker" placeholder="Start date" name="startDate" id="from" required="">
                    <i class="fas fa-calendar-alt" aria-hidden="true" style="display: block; margin-top: -29px; font-size: 20px;"></i>
                  </div>
                </div>

                <div class="col s12 m6 l6" style="padding: 0px 5px;">
                  <div class="dataColor btnPrice" style="position: relative;">
                    <input type="text" class="datepicker" placeholder="End date" name="endDate" id="to" required="">
                     <i class="fas fa-calendar-alt" aria-hidden="true" style="display: block; margin-top: -29px; font-size: 20px;"></i>
                  </div>
                </div>

                <div class="row" style="margin: 0px -7px;">
                  <div class="input-field col s12" style="position: relative;">
                  <div class="dataColor1 btnPrice">
                    <input type="number" class="validate inputPerson" placeholder="Number of people" name="person" required="" min="0">
                    <i class="fas fa-users" aria-hidden="true" style="display: block; margin-top: -32px; font-size: 20px;"></i>
                  </div>
                  </div>
                </div>

                <div class="row" style="margin: 0px -7px;">
                  <div class="input-field col s12">
                  <div class="dataColor1 btnPrice" style="position: relative;">
                    <input id="email" type="email" class="validate" placeholder="Email" name="email" required="">
                    <i class="fas fa-envelope" aria-hidden="true" style="display: block; margin-top: -50px; font-size: 20px;"></i>
                  </div>
                  </div>
                </div>

              </div>

              <div class="row" style="margin: 0px;">

                <h5 class="priceM">${{$post->price}}</h5>
              </div>

              <div class="row">
                
                    <center>
                      <button class="btn bookNow" type="submit">book now</button>
                    </center>
              </div>

              <div class="row" style="margin: 0px;">
                <span class="phoneNumber">+855 92 811 667 / +855 70 453 236</span> <br>
                <span class="Email">toursanak@toursanak.com</span>
              </div>

            </div>
          </div>
        </form>
        <br>
        <br>

        <img src="{{$post->featured}}" style="display: none;">

        <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a87d049ad5e02d2"></script>
        
      </div>



    </div>



  </div> <!--end container-->


@endsection
