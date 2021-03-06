@extends('layouts.dashboard')
@section('content')

	<div class="col-lg-12">
		<!--begin::Portlet-->
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							Edit: {{$member->title}}
						</h3>
					</div>
				</div>
			</div>

			@include('admin.includes.errors')
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype='multipart/form-data' method="POST" action="{{route('member.update',['id' => $member->id])}}">
				{{ csrf_field() }}
				<input type="hidden" name="user_id" value="{{$user->id}}">

				<div class="m-portlet__body">	
					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<label>Name:</label>
							<input name="name" type="text" class="form-control m-input" value="{{$member->name}}">
							<span class="m-form__help text-danger">You only can put the title max 255 charaters</span>
						</div>

						<div class="col-lg-6">
							<label>Position:</label>
							<input name="position" type="text" class="form-control m-input" value="{{$member->position}}">
							<span class="m-form__help text-danger">You only can put the title max 255 charaters</span>
						</div>

						<div class="col-lg-6">
							<div class="form-group m-form__group" style="padding: 15px 0px;">
								<label>Upload Photo</label>
								<div class="m-input-icon m-input-icon--right">
									<input name="photo" type="file" class="form-control m-input" placeholder="Email" >
									<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-image"></i></span></span>
								</div>
							</div>
						</div>

						<div class="col-lg-6" style="margin-top: 15px;">
							<label>Facebook:</label>
							<input name="facebook" type="text" class="form-control m-input" placeholder="Enter facebook Link" value="{{$member->facebook}}">
						</div>

						<div class="col-lg-6">
							<label>LinkedIn:</label>
							<input name="linkedin" type="text" class="form-control m-input" placeholder="Enter LinkedIn Link" value="{{$member->linkedin}}">
						</div>

						<div class="col-lg-6">
							<label>Twitter:</label>
							<input name="linkedin" type="text" class="form-control m-input" placeholder="Enter twitter Link" value="{{$member->twitter}}">
						</div>

						<div class="col-lg-12" style="padding: 0px;">
							<div class="form-group m-form__group row">
								<label>Create Content</label>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;">
									<textarea name="description" class="summernote">{{$member->description}}</textarea>
								</div>
							</div>
						</div>

					</div>

	            </div>
	            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions--solid">
						<div class="row">
							<div class="col-lg-6">
								<button type="submit" class="btn btn-success">Save</button>
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