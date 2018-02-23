@extends('layouts.toursanak')
@section('content')
      <div class="col s6 m4 l4">
        <div class="backTour">
          <h6 class="discovery">Blog</h6>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 4px;">
      <div class="col s6 m6 l6">
        <h6 class="popularBlog">popular</h6>
      </div>
      <div class="col s6 m6 l6">
        <a href="../category/blog/index.html">
          <h6 class="seeBlog right">see all</h6>
        </a>
      </div>
    </div>

    <div class="row">
      
      @foreach($blogs as $blog)

        <div class="col s12 m3 l3">
          <a href="panha-suon-cycling-3500-km-with-350-part-12/index.html" class="hoverImg">
            <img src="{{$blog->featured}}" class="responsive-img imgBlog z-depth-2">
            <h5 class="titleBlog">{{$blog->title}}</h5>
          </a>
        </div>

      @endforeach
      <div class="row"></div>
        
      
    </div>
    
    <div class="row" style="margin-bottom: 4px;">
      <div class="col s6 m6 l6">
        <h6 class="popularBlog">recent</h6>
      </div>
      <div class="col s6 m6 l6">
        <a href="../category/blog/index.html">
          <h6 class="seeBlog right">see all</h6>
        </a>
      </div>
    </div>

    <div class="row">

    </div>

  </div> <!--end container-->


@endsection
