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
							Create New Post
						</h3>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right" style="margin-top: 15px;">
					<a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="la la-cart-plus"></i>
							<span>All Posts</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>

			@include('admin.includes.errors')
			<!--begin::Form-->
			<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" enctype='multipart/form-data' method="POST" action="{{route('post.store')}}">
				{{ csrf_field() }}

				<input type="hidden" name="user_id" value="{{$user->id}}">

				<div class="m-portlet__body">	
					<div class="form-group m-form__group row">
						<div class="col-lg-6">
							<label>Title:</label>
							<input name="title" type="text" class="form-control m-input" placeholder="Enter your title" >
							<span class="m-form__help text-danger">You only can put the title max 255 charaters</span>
						</div>

						<div class="col-lg-6">
							<label for="exampleSelect1">Select Category</label>
							<div class="controls">
                                <select id="category_id" required="" class="form-control" aria-invalid="false" name="category_id" >
                                    @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>

                            <div class="help-block"></div>
                        	</div>
							<span class="m-form__help">Please select your category</span>
						</div>

						<div class="col-lg-6">
							<div class="form-group m-form__group" style="padding: 15px 0px;">
								<label>Feature Image</label>
								<div class="m-input-icon m-input-icon--right">
									<input name="featured" type="file" class="form-control m-input" placeholder="Email" >
									<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-image"></i></span></span>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="form-group m-form__group" style="padding: 15px 0px;">
								<label>Select Tags</label>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;">
									<select class="form-control m-select2" id="m_select2_3" name="tags[]" multiple="multiple">
									  	@foreach($tags as $tag)
								    	<option value="{{$tag->id}}">{{$tag->tag}}</option>

								    	@endforeach
									  	
									</select>	
								</div>
							</div>
						</div>

						<div class="col-lg-6 price">
							<label>Price:</label>
							<input name="price" type="number" class="form-control m-input linkBox" value="0" min="0">
						</div>

						<div class="col-lg-6 tour_date">
							<label>Tour Date:</label>
							<input name="tour_date" type="text" class="form-control m-input linkBox" placeholder="Enter tour date">
						</div>
					

						<div class="col-lg-6" style="padding-top: 15px">
							<label for="exampleTextarea">Enter Keywords</label>
							<textarea name="keyword"  class="form-control m-input" id="exampleTextarea" rows="3"></textarea>
						</div>

						<div class="col-lg-6" style="padding-top: 15px">
							<label for="exampleTextarea">Enter Short Description</label>
							<textarea name="short_desc"  class="form-control m-input" id="exampleTextarea" rows="3"></textarea>
						</div>

						<div class="col-lg-12" style="padding: 0px;">
							<div class="form-group m-form__group row">
								<label>Create Content</label>
								<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;">
									<textarea name="content" class="summernote"></textarea>
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

<style type="text/css">
	.hideBox {
		display: none;
	}
	.showBox{
		display: block;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
	    $("#category_id").change(function(){
	        category_id = $(this).val();
	        if($('select#category_id option[value="'+category_id+'"]').html()=="Blog"){
	        	$('.linkBox').addClass('hideBox');
	        }
	    });
	});
</script>

@stop

@section('post.page')
	@include('admin.includes.script')
@stop



