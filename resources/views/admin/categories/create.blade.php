@extends('layouts.dashboard')
@section('content')

	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption col-xl-8 order-2 order-xl-1">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Create New Category
						</h3>
					</div>
				</div>

				<div class="col-xl-4 order-1 order-xl-2 m--align-right" style="margin-top: 15px;">
					<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-cart-plus"></i>
							<span>All Category</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>

			</div>
			<!--begin::Form-->
			@include('admin.includes.errors')
			<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype='multipart/form-data' method="POST" action="{{route('category.store')}}">
				{{csrf_field()}}
				<div class="m-portlet__body">	
					<div class="form-group m-form__group row">
						<div class="col-lg-12">
							<label>Category Name:</label>
							<input name="name" type="text" class="form-control m-input" placeholder="Enter your category name">
							<span class="m-form__help">Please enter category name</span>
						</div>
					</div>
	            </div>
	            <input type="hidden" name="user_id" value="{{$user->id}}">
	            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions--solid">
						<div class="row">
							<div class="col-lg-6">
								<button type="submit" class="btn btn-success">Save</button>
								<button type="reset" class="btn btn-danger">Cancel</button>
							</div>
						</div>
					</div>
				</div>

			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>

@stop

@section('post.page')
	@include('admin.includes.script')
@stop