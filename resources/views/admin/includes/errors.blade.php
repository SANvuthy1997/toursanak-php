{{-- Check validation --}}
			@if(count($errors) > 0)
				<div class="col-lg-12" style="margin-top: 15px;padding:0px 27px; ">
					<div class="m-form__content">
						<div class="m-alert m-alert--icon alert alert-danger" role="alert" id="m_form_1_msg">
							<div class="m-alert__icon">
								<i class="la la-warning"></i>
							</div>
							<div class="m-alert__text">
								@foreach($errors->all() as $error)
									<p>{{$error}}</p>
								@endforeach
							</div>
							<div class="m-alert__close">
								<button type="button" class="close" data-close="alert" aria-label="Close">
								</button>	
							</div>
						</div>
					</div>
				</div>
			@endif