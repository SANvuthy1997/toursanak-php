@extends('layouts.toursanak')
@section('content')
      <div class="col s6 m4 l4">
        <div class="backTour">
          <h6 class="discovery">FAQ</h6>
        </div>
      </div>
    </div>

    <ul class="collapsible" data-collapsible="accordion">
    
      <li>
        <div class="collapsible-header active">What if I have special requests?</div>
        <div class="collapsible-body"><span><p>We do our best to satisfy our clients. Please if you have any special request, don&rsquo;t hesitate to email us.</p>
</span></div>
      </li>
    
      <li>
        <div class="collapsible-header active">How can I make my payment?</div>
        <div class="collapsible-body"><span><p dir="ltr">You can choose from a variety of different ways.&nbsp;Most of our clients use a bank transfer, cash or local online payment methods as Wing or others.</p>

<p dir="ltr">Recently we accept a Bitcoin payment.</p>
</span></div>
      </li>
    
      <li>
        <div class="collapsible-header active">Can I purchase insurance for my trip?</div>
        <div class="collapsible-body"><span><p dir="ltr">We do not provide health, liability or travel insurance. Therefore we strongly advise you to purchase a travel insurance before taking a trip with us.</p>
</span></div>
      </li>
    
    </ul>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.collapsible').collapsible();
      });
    </script>



  </div> <!--end container-->


@endsection
