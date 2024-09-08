@extends('frontend.master')
  @section('content')
		<!-- End Main Header -->
		@php $setting=setting();@endphp
		<!-- Page Title -->
		<section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/7.jpg)">
			<div class="auto-container">
				<h2>Contact Us</h2>
				<ul class="bread-crumb clearfix">
					<li><a href="{{route('home')}}">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Contact One -->
		<section class="contact-one" style="background-image:url({{asset('')}}frontend/images/background/map-1.png)">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<div class="left-box">
							<div class="sec-title_title">Contact us</div>
							<h2 class="sec-title_heading">Grow Your Business With <br> <span>Our Expertise</span></h2>
						</div>
						<div class="right-box">
							<div class="sec-title_text">The perfect blend of mature processes, flexible delivery <br>
								models, effective project management.</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">

					<!-- Info Column -->
					<div class="info-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Contact Block -->
							<div class="contact-block">
								<div class="block-inner">
									<span class="icon"><img src="{{asset('')}}frontend/images/icons/contact-1.png" alt="" /></span>
									<strong>Office address</strong>
									{{$setting->address}}
								</div>
							</div>

							<!-- Contact Block -->
							<div class="contact-block">
								<div class="block-inner">
									<span class="icon"><img src="{{asset('')}}frontend/images/icons/contact-2.png" alt="" /></span>
									<strong>Telephone number</strong>
									{{$setting->mobile}}
								</div>
							</div>

							<!-- Contact Block -->
							<div class="contact-block">
								<div class="block-inner">
									<span class="icon"><img src="{{asset('')}}frontend/images/icons/contact-3.png" alt="" /></span>
									<strong>Mail address</strong>
									{{$setting->email}}
								</div>
							</div>

						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Contact Form -->
							<div class="contact-form">
							
								<form  id="contact-form">
									
									<div class="row clearfix">

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<label>Name (required)</label>
											<input type="text" name="name" placeholder="Your name*" required="">
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<label>Email adress (required)</label>
											<input type="text" name="email" placeholder="Email" required="">
										</div>

										<div class="col-lg-6 col-md-12 col-sm-12 form-group">
											<label>Phone (optional)</label>
											<input type="text" name="phone" placeholder="Phone" required="">
										</div>

										<div class="col-lg-6 col-md-12 col-sm-12 form-group">
											<label>Subject (required)</label>
											<input type="text" name="subject" placeholder="Subject" required="">
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<label>Your message</label>
											<textarea class="" name="message"
												placeholder="Your text here..."></textarea>
										</div>
										<script src="https://www.google.com/recaptcha/api.js" 
                            async defer></script>				
                                         <div>
											<button type="submit"class="btn btn-primary">Submit</button>
										 </div>
										<!-- <div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="btn-style-seven theme-btn" type="submit">
												<span class="btn-wrap">
													<span class="text-one">Send message</span>
													<span class="text-two">Send message</span>
												</span>
											</button>
										</div> -->

									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<div id="notification"></div>
		<section class="cta-one">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
						<div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
					</div>
					<div class="right-box">
						<a class="cta-one_btn theme-btn" href="{{route('contact')}}">get a quote</a>
					</div>
				</div>
			</div>
		</section>
		
	@endsection
	@section('js')
	<script>
		 $(document).ready(function() {
			$("#contact-form, #contact-form-page").on('submit', function (e) {
				e.preventDefault();

				//Get input field values from HTML form
				var user_name = $("input[name=name]").val();
				var user_phone = $("input[name=phone]").val();
				var user_email = $("input[name=email]").val();
				var user_subject = $("input[name=subject]").val();
				var user_message = $("textarea[name=message]").val();

				//Data to be sent to server
				var post_data;
				var output;
				post_data = {
					'user_name': user_name,
					'user_email': user_email,
					'user_message': user_message,
					'user_phone': user_phone,
					'user_subject': user_subject
				};

				//Ajax post data to server
				$.post('admin/reviews/store', post_data, function (response) {

					//Response server message
					if (response.type == 'error') {
						output = '<div class="notification error"><span class="notification-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';
					} else {
						output = '<div class="notification success"><span class="notification-icon"><i class="fa fa-check" aria-hidden="true"></i></span><span class="notification-text">' + response.text + '</span></div>';

						//If success clear inputs
						$("input, textarea").val('');
					}

					$("#notification").html(output); 

					$(".notification").delay(15000).queue(function (next) {
						$(this).addClass("scale-out");
						next();
					});
					$(".notification").on("click", function(){ 
						$(this).addClass("scale-out");
					});

				}, 'json');
			});
		});
	</script>
	@endsection