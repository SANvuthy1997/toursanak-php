@extends('layouts.toursanak')
@section('content')
      <div class="col s6 m4 l4">
      <div class="backTour">
        <h6 class="discovery">Contact Us</h6>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col s12 m6 l6">
      <div class="row" style="margin: 0px;">

      <div style="padding:0px 22px ">
      
      
         
      

      </div>

        <form class="col s12 smallWidth" method="POST" action="http://toursanak.com/contactUs/send/">

          <h5 class="conForm hide-on-med-and-up">Contact Us</h5>
          <div class="row" style="margin: 0px;">
            <div class="input-field col s12 m6 l6 smallInput">
              <div class="inputBack">
                <input id="text" type="text" class="validate inputText" name="fname" placeholder="First Name" required="">
              </div>
            </div>
            <div class="input-field col s12 m6 l6 smallInput">
              <div class="inputBack">
                <input id="text" type="text" class="validate inputText" name="lname" placeholder="Last Name" required="">
              </div>
            </div>
            <div class="input-field col s12 m12 l12 smallInput">
              <div class="inputBack">
                <input id="email" type="email" class="validate inputText" name="email" placeholder="Email" required="">
              </div>
            </div>
          </div>
          <div class="row" style="margin: 0px;">
           
              <div class="row" style="margin:0px; ">
                <div class="input-field col s12 smallInput">
                  <div class="inputBack">
                    <textarea id="textarea1" class="materialize-textarea inputText" name="msg" placeholder="Your Message" required=""></textarea>
                  </div>
                </div>
              </div>
          
          </div>
          <div class="row" style="margin: 0px;">
              <center><button type="submit" class="waves-effect waves-light btn btnSubmit" >submit</button></center>
          </div>
        </form>
      </div>
    </div>

    <div class="col s12 m6 l6 MarginContect">
      <h5 class="conForm">Our office</h5>
      <hr class="hrCon">
      <i class="material-icons">location_on</i> <span class="topText"> #35, Street 600bis, Toul Kork, Phnom Penh, Cambodia</span>
      <br>
      <br>
      <i class="material-icons">phonelink_ring</i> <span class="topText"> (+855)92 811 667 / (+855)70 453 236</span>
      <br><br>
      <i class="material-icons">contact_mail</i> <span class="topText">toursanak@toursanak.com</span>
    </div>
  </div>
</div>


<div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1954.3416929965124!2d104.89290200000005!3d11.574539999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e95acd8258e0792!2sToursanak+Adventure!5e0!3m2!1sen!2sus!4v1519220708237" frameborder="0" style="border:0; width: 100%;height: 450px;box-shadow: 0px 0px 26px -8px rgba(0,0,0,0.75);border-radius: 5px; margin-bottom: -5px;" allowfullscreen></iframe>



@endsection
