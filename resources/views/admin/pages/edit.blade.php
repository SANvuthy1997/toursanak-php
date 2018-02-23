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
							Edit Post: {{$page->title}}
						</h3>
					</div>
				</div>
			</div>

			@include('admin.includes.errors')
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype='multipart/form-data' method="POST" action="{{route('page.update',['id' => $page->id])}}">
				{{ csrf_field() }}
				<div class="m-portlet__body">	
					<div class="form-group m-form__group row">
						<div class="col-lg-12">
							<label>Title:</label>
							<input name="title" type="text" class="form-control m-input" value="{{$page->title}}">
							<span class="m-form__help text-danger">You only can put the title max 255 charaters</span>
						</div>

						<input type="hidden" name="user_id" value="{{$user->id}}">

						<div class="col-lg-6">
							<label for="exampleTextarea">Enter Keywords</label>
							<textarea name="keyword"  class="form-control m-input" id="exampleTextarea" rows="3">{{$page->keyword}}</textarea>
						</div>

						<div class="col-lg-6">
							<label for="exampleTextarea">Enter Short Description</label>
							<textarea name="short_desc"  class="form-control m-input" id="exampleTextarea" rows="3">{{$page->short_desc}}</textarea>
						</div>

						<div class="col-lg-12" style="padding: 0px;">
							<div class="form-group m-form__group row">
								<label>Create Content</label>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;">
									<textarea name="content" class="summernote">
										{{$page->content}}
									</textarea>
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