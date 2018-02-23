<!DOCTYPE html>
<html>

<!-- Mirrored from toursanak.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 05:01:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="static/toursanak/img/favicon.jpg')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('toursanak/css/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="{{asset('toursanak/css/fontawesome-all.min.css')}}" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="{{asset('toursanak/css/images-grid.css')}}">
  <!-- css files for all amoogli website -->
  <script src="{{asset('toursanak/js/jquery-3.3.1.min.js')}}"></script>
  <script defer src="{{asset('toursanak/js/fontawesome-all.min.js')}}"></script>
  <link rel="stylesheet" href="../ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="{{asset('toursanak/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('toursanak/css/style.css')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toursanak | Toursanak best in tour Cambodia</title>


</head>
<body>

<!-- <form class="formSearch" action="/search/" method="GET">
  <div class="input-field right-align" id="inputField">
    <input id="search" type="search" required name="q">
    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
    <i class="material-icons close">close</i>
  </div>
</form> -->

  <nav>
    <div class="nav-wrapper">
      <div class="container">

        <a href="https://www.facebook.com/toursanak" target="_blank">
          <i class="fab fa-facebook-square icon hide-on-small-only " aria-hidden="true"></i>
        </a>
        <a href="https://www.youtube.com/channel/UCTdJK1cJJ80devfUEGwlB5A" target="_blank">
          <i class="fab fa-youtube-square icon hide-on-small-only" aria-hidden="true"></i>
        </a>

        <a href="index.html" class="brand-logo hide-on-med-and-up"><img src="{{asset('toursanak/img/toursanakpng.png')}}" class="responsive-img tourLogo"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fas fa-align-left"></i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="menuTitle"><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li class="menuTitle"><a href="/about"  class="{{ Request::is('about') ? 'active' : '' }}">About Us</a></li>
          <li><a class="dropdown-button" data-activates="dropdown1">Tours</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.blog')}}"  class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.contact')}}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.faq')}}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.careers')}}" class="{{ Request::is('careers') ? 'active' : '' }}">Careers</a></li>
          <!-- <li class="menuTitle"><a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a></li> -->
        </ul>

        <!-- Phone -->
        <ul class="side-nav" id="mobile-demo">
          <li class="menuTitle"><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
          <li class="menuTitle"><a href="/about"  class="{{ Request::is('about') ? 'active' : '' }}">About Us</a></li>
          <li><a class="dropdown-button" data-activates="dropdown1">Tours</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.blog')}}"  class="{{ Request::is('blog') ? 'active' : '' }}">Blog</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.contact')}}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.faq')}}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
          <li class="menuTitle"><a href="{{route('toursanak.careers')}}" class="{{ Request::is('careers') ? 'active' : '' }}">Careers</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content '>
    <li><a href="discovery-tours/index.html">Discovery Tours</a></li>
    <li><a href="bicycle-tours/index.html">Bicycle Tours</a></li>
    <li><a href="custom-tours/index.html">Custom Tours</a></li>
    <li><a href="buddhism-adventure/index.html" >Buddhism Tours</a></li>
  </ul>

  <!-- Chat with us -->
  <a class="btn btn-floating chat btn-large cyan hide-on-med-and-down" id="chat"><i class="material-icons">chat</i></a>

<!-- End header --> 
<div class="container" style="margin-top: 10px;">
    <div class="row hide-on-small-only">
      <div class="col s6 m8 l8">
        <a href="index.html"><img src="{{asset('toursanak/img/toursanak_logo.png')}}" class="responsive-img tourLogo">  </a> 
      </div>
      @yield('content')

<div style="position: fixed; right: 0%; bottom: 34px; display: none;" id="contact">
  <div class="indexCon">
    <div class="row">
      <form class="col s12" action="http://toursanak.com/mail/send/" method="POST">
        <center>
          <h5 class="ContactIndex">Do you have any question? <i class="fa fa-times right" aria-hidden="true"></i></h5>
          <hr class="ContactHr">
        </center>

        <div class="row" style="margin: 0px;">
          <div class="input-field col s6">
            <div class="inputBack">
              <input id="first_name" type="text" type="text" class="validate inputText" required="" placeholder="First Name" name="fname">
            </div>
          </div>

          <div class="input-field col s6">
            <div class="inputBack">
              <input id="last_name" type="text" type="text" class="validate inputText" required="" placeholder="Last Name" name="lname">
            </div>
          </div>
        </div>

        <div class="row" style="margin: 0px">
          <div class="input-field col s12">
            <div class="inputBack">
              <input id="email" type="email" class="validate inputEmail" required="" placeholder="Email" name="email">
            </div>
          </div>
        </div>

        <div class="row" style="margin: 0px;">
          <div class="input-field col s12">
            <div class="inputBack">
              <textarea id="textarea1" class="materialize-textarea inputText" placeholder="Your Message" name="msg"></textarea>
            </div>
          </div>
        </div>

        <center>
          <button type="submit" class="btn btnSubmit"> Submit</button>
        </center>
        <br>

      </form>
    </div>
  </div>
  <i class="fas fa-caret-down fa-sort-desc" aria-hidden="true"></i>
</div>


<footer class="page-footer ">
  <div class="container">
    <div class="row" style="margin: 0px;">
      <div class="col l4 s12">
        <h6 class="white-text ContactFo">Contact</h5>
        <ul>
          <li><p class="grey-text text-lighten-3" style="margin: 0px">Tel: +855 92 811 667 / +855 70 453 236 </p></li>
          <li><p class="grey-text text-lighten-3" style="margin: 0px">Email: toursanak@toursanak.com</p></li>
<!--           <li><a class="grey-text text-lighten-3" href="#!"></a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li> -->
        </ul>
      </div>
      <div class="col l4 s12">
        <h5 class="white-text ContactFo">Follow</h5>
        <a class="grey-text fontSize" href="https://www.facebook.com/toursanak">
          <i class="fab fa-facebook-square" aria-hidden="true"></i>
        </a>
        <a class="grey-text fontSize" href="https://www.linkedin.com/in/toursanak-adventure-279492148/">
          <i class="fab fa-linkedin" aria-hidden="true"></i>
        </a>
        <a class="grey-text fontSize" href="https://twitter.com/toursanak">
          <i class="fab fa-twitter-square" aria-hidden="true"></i>
        </a>
        <a class="grey-text fontSize" href="https://www.youtube.com/channel/UCTdJK1cJJ80devfUEGwlB5A">
          <i class="fab fa-youtube-square" aria-hidden="true"></i>
        </a>
        <a class="grey-text fontSize" href="https://www.instagram.com/toursanak_adventure/">
          <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>
      </div>
      <div class="col l4 s12">
        <h6 class="white-text ContactFo">Subscribe</h5>
      </div>

    </div>
  </div>
</footer>


<!-- js files for all amoogli website  -->
<script type="text/javascript" src="{{asset('toursanak/js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('toursanak/js/images-grid.js')}}"></script>

<script type="text/javascript" src="{{asset('toursanak/js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('toursanak/js/script.js')}}"></script>


<script type="text/javascript">
$(document).ready(function(){
  $(".chat").on("click",function(){
    $("#contact").slideToggle();
  });
});

$(document).ready(function(){
  $(".fa-times").on("click",function(){
    $("#contact").slideToggle();
  });
});

// function checkActive(first_reload){
//   var active = localStorage.getItem('active');
//    if(!active){
//     active='home';
//     }
//     active = active.replace(' ','.');
//     $('.'+active.replace(' ','.')).addClass('active');
// }
// checkActive(true);
// $('.menuTitle, .sub').click(function(){
//   localStorage.setItem('active',$(this).find('a').attr('class'));
//   checkActive(false);
// });

$('.home').addClass('active');





</script>


</body>

<!-- Mirrored from toursanak.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 05:04:42 GMT -->
</html> 
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    items:4,
    lazyLoad:true,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:true,
        }
    }
});

</script>