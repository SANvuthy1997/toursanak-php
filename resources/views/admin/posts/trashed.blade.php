@extends('layouts.dashboard')
@section('content')

<div class="m-portlet m-portlet--mobile col-lg-12">
	<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-cart-plus"></i>
							<span>All Posts</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<th title="Field #5">Image</th>
				<th title="Field #2">Title</th>
				<th title="Field #4">Category</th>
				<th title="Field #3">Public Date</th>
				<th title="Field #5">Action</th>
			</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)

					<tr>
						<td>
							<img src="{{$post->featured}}" class="m--img-rounded m--marginless m--img-centered" alt="{{$post->title}}" width="50px;" height="50px;">
						</td>
						<td>{{$post->title}}</td>
						<td class="m-datatable__cell">
							<span style="width: 110px;">
								<span class="m-badge  m-badge--success m-badge--wide">{{$post->category->name}}</span>
							</span>
						</td>
						<td>{{$post->created_at->toDateString()}}</td>
						<td>
							<a href="{{route('post.restore',['id'=>$post->id])}}" style="text-decoration: none;">
								<button type="button" class="btn m-btn--pill btn-success m-btn btn-sm m-btn--custom">Restore</button>
							</a>
							<a href="{{route('post.kill',['id'=>$post->id])}}">
								<button type="button" class="btn m-btn--pill btn-danger m-btn btn-sm m-btn--custom">Delete</button>
							</a>
						</td>
					</tr>

				@endforeach
				
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
</div>		


@stop

@section('post.page')
	@include('admin.includes.script')
@stop