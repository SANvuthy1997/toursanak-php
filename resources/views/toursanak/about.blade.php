@extends('layouts.toursanak')
@section('content')
      <div class="col s6 m4 l4">
        <div class="backTour">
          <h6 class="discovery">who we are</h6>
        </div>
      </div>
    </div>

    <div class="row">
      <div>
        <div class="col s12" style="padding: 0px;">
          <div class="aboutBack">
          
            <p>
              {!!$about->content!!}
            </p>      
          </div>
        </div>
      </div>
    </div>

    <div class="ourTeam">
      <h6 class="teamTitle">our team</h6><br>
      <div class="row imageSmallScreen">

        @foreach($members as $member)

        <div class="col s12 m3 l3">
          <a href="#modal{{$member->id}}">
            <img src="{{$member->photo}}" class="responsive-img memberImage">
            <h6 class="nameAbout">{{$member->name}}</h6>
            <h6 class="position">{{$member->position}}</h6>
          </a>
        </div>

        <!-- Modal Structure -->
        <div id="modal{{$member->id}}" class="modal">
          <div class="modal-content">
            <h5 style="font-weight: bold; text-transform: uppercase;">{{$member->name}}</h5>
            <p style="margin: 0px;">Position: <b>{{$member->position}}</b></p>
            <p>{!!$member->description!!}</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
          </div>
        </div>

        @endforeach
        
      </div>
    </div>

  </div> <!--end container-->


@endsection
