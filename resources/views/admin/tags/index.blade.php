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
					<a href="{{route('tag.create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-eyedropper"></i>
							<span>New Tag</span>
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
				<th title="Field #2">Name</th>
				<th title="Field #2">Slug</th>
				<th title="Field #4">User</th>
				<th title="Field #3">Public Date</th>
				<th title="Field #5">Action</th>
			</tr>
			</thead>
			<tbody>

				@foreach($tags as $tag)

				<tr>
					<td>{{$tag->tag}}</td>
					<td>{{$tag->slug}}</td>
					<td class="m-datatable__cell">
						{{$tag->user->name}}
					</td>
					<td>{{$tag->created_at->toDateString()}}</td>
					<td data-field="Actions" class="m-datatable__cell">
						<span style="overflow: visible; width: 110px;">	
							<a href="{{route('tag.edit',['id' => $tag->id])}}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">       
								<i class="la la-edit"></i>
							</a>	
							<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete" data-toggle="modal"  data-target="#m_summernote_modal">							<i class="la la-trash"></i>					
							</a>				
						</span>
					</td>
				</tr>

				<!--begin::Modal-->
				<div class="modal fade" id="m_summernote_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Delete Request</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: 0px;">
									<span aria-hidden="true" class="la la-remove"></span>
								</button>
							</div>

							<center>
							<div class="modal-body">
								<div class="form-group m-form__group row m--margin-top-10">
										<h5 class="modal-title" id="exampleModalLabel" style="width: 100%;">
											<div class="row" >
												<div class="col-lg-2">
													<div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: block; margin-left: 30px;"><span class="swal2-x-mark swal2-animate-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>
												</div>

												<div class="col-lg-10">
													<span style="text-transform: uppercase;font-size: 21px; position: relative;top: 43px;">
														Are you sure you want to permanently delete this file?
													</span>
												</div>
											</div>
										</h5>
								</div>
							</div>
							</center>

							<div class="modal-footer">
								<form action="{{route('tag.delete',['id'=>$tag->id])}}" method="get">
									<button type="button" class="btn btn-success m-btn" data-dismiss="modal">No</button>
									<button type="submit" class="btn m-btn btn-danger">Yes</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end::Modal-->
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