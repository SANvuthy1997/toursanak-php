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
							Update Tag: {{$tag->tag}}
						</h3>
					</div>
				</div>
			</div>

			<!--begin::Form-->
			@include('admin.includes.errors')
			<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" action="{{route('tag.update',['id' => $tag->id])}}">
				{{csrf_field()}}
				<div class="m-portlet__body">	
					<div class="form-group m-form__group row">
						<div class="col-lg-12">
							<label>Tag Name:</label>
							<input name="tag" type="text" class="form-control m-input" value="{{$tag->tag}}" >
							<span class="m-form__help">Please enter tag name</span>
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