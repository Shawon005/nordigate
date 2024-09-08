@extends('frontend.master')
  @section('content')
		<!-- End Preloader -->

		<!-- Main Header / Header Style Two -->
		
		<!-- End Main Header -->

		<!-- Main Slider -->
		<section class="slider-two">
			<div class="single-item-carousel owl-carousel owl-theme">

				<!-- Slide -->
				@foreach($sliders as $slider)
				<div class="slide">
					<div class="slider-two_image-layer" style="background-image:url({{$slider->image}})"></div>
					<div class="slider-two_pattern-layer"
						style="background-image:url({{asset('')}}frontend/images/main-slider/pattern-1.png)"></div>
					<div class="auto-container">

						<!-- Content Column -->
						<div class="slider-two-content">
							<div class="slider-two_inner">
								<div class="slider-two_title">We are Business Solution</div>
								<h1 class="slider-two_heading">{{$slider->title}}.
								</h1>
								<div class="slider-two_text">{{$slider->description}}</div>
								<!-- Button Box -->
								<div class="slider-two_button-box">
									<a class="btn-style-two theme-btn btn-item" href="{{$slider->btn_link}}">
										<div class="btn-wrap">
											<span class="text-one">{{$slider->btn_text}} <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">{{$slider->btn_text}}<i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				@endforeach
				<!-- Slide -->
				<!-- <div class="slide">
					<div class="slider-two_image-layer" style="background-image:url({{asset('')}}frontend/images/banner/5.jpg)"></div>
					<div class="slider-two_pattern-layer"
						style="background-image:url({{asset('')}}frontend/images/main-slider/pattern-1.png)"></div>
					<div class="auto-container">

					
						<div class="slider-two-content">
							<div class="slider-two_inner">
								<div class="slider-two_title">We are Business Solution</div>
								<h1 class="slider-two_heading">Prosper in this volatile <br> market funding.</h1>
								<div class="slider-two_text">We place you at the centre of international networks to
									<br> advance your strategic interests
								</div>

								<div class="slider-two_button-box">
									<a class="btn-style-two theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Our Team <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Our Team <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>

					</div>
				</div> -->

				<!-- Slide -->
				<!-- <div class="slide">
					<div class="slider-two_image-layer" style="background-image:url({{asset('')}}frontend/images/banner/4.jpg)"></div>
					<div class="slider-two_pattern-layer"
						style="background-image:url({{asset('')}}frontend/images/main-slider/pattern-1.png)"></div>
					<div class="auto-container">

						<
						<div class="slider-two-content">
							<div class="slider-two_inner">
								<div class="slider-two_title">We are Business Solution</div>
								<h1 class="slider-two_heading">Prosper in this volatile <br> market funding.</h1>
								<div class="slider-two_text">We place you at the centre of international networks to
									<br> advance your strategic interests
								</div>
								
								<div class="slider-two_button-box">
									<a class="btn-style-two theme-btn btn-item" href="#">
										<div class="btn-wrap">
											<span class="text-one">Our Team <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Our Team <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>
							</div>
						</div>

					</div>
				</div> -->


			</div>
		</section>
		<!-- End Main Slider -->

		<!-- Featured One -->
		<section class="featured-one">
			<div class="auto-container">
				<div class="row clearfix">


					<!-- Feature Block One -->
					<div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="{{route('product')}}"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-1.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Innovative Solutions</h5>
						</div>
					</div>
					<!-- Feature Block One -->
					<div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="{{route('product')}}"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-2.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Industry Expertise</h5>
						</div>
					</div>
					<!-- Feature Block One -->
					<div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="{{route('product')}}"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-3.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Client Success </h5>
						</div>
					</div>

					<!-- Feature Block One -->
					<div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="{{route('product')}}"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-5.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Blog and Insights</h5>
						</div>
					</div>
					<!-- Feature Block One -->
					<div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="{{route('product')}}"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-5.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Join Our Team</h5>
						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- End Featured One -->

		<!-- Clients One -->
		<section class="clients-one">
			<div class="clients-one_pattern" style="background-image:url({{asset('')}}frontend/images/background/10.png)"></div>
			<div class="auto-container">
				<div class="row clearfix">



				</div>
			</div>
		</section>
		<!-- End Clients One -->

		<!-- About Two -->
		<section class="about-two">
			<div class="about-two_pattern-two" style="background-image:url({{asset('')}}frontend/images/background/pattern-13.png)"></div>
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="about-two_image-column col-lg-6 col-md-12 col-sm-12">
						<div class="about-two_pattern-one"
							style="background-image:url({{asset('')}}frontend/images/background/pattern-12.png)"></div>
						<div class="about-two_image">
							<img src="{{asset('')}}frontend/images/tour/tour-1.jpg" alt="" />
							<!-- About One Detail -->
							<a class="about-two_play lightbox-video fa-solid fa-play fa-fw" href="#">
								<i class="ripple"></i>
							</a>
						</div>
					</div>

					<!-- Content Column -->
					<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
						<div class="about-two_content-inner">
							<div class="sec-title_two">
								<div class="sec-title_two-title">About NordiGate</div>
								<h2 class="sec-title_two-heading">Choose <span>The Best</span>
									IT <br> Service Company</h2>
							</div>
							<div class="about-two_text">NordiGate is a leading IT company dedicated to transforming
								businesses through innovative technology solutions. With a focus on delivering
								excellence and exceeding client expectations, we have established ourselves as a trusted
								partner for organizations seeking to harness the power of digital transformation.</div>
							<div class="about-two_feature">
								<!-- About Two Block <div class="row clearfix">
							
								
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="{{asset('')}}frontend/images/icons/about-1.png" alt="" />
										</span>
										<h6 class="about-two_block-heading">Moneyback <br> Gurentee</h6>
									</div>
								</div>-->

								<!-- About Two Block 
								<div class="about-two_block col-lg-6 col-md-6 col-sm-6">
									<div class="about-two_block-inner">
										<span class="about-two_block-icon">
											<img src="{{asset('')}}frontend/images/icons/about-2.png" alt="" />
										</span>
										<h6 class="about-two_block-heading">Technical <br> Support</h6>
									</div>
								</div>-->

							</div>
						</div>

						<div class="d-flex flex-wrap">
							<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
								<div class="btn-wrap">
									<span class="text-one">Contact Us <i
											class="fa-solid fa-arrow-right fa-fw"></i></span>
									<span class="text-two">Contact Us <i
											class="fa-solid fa-arrow-right fa-fw"></i></span>
								</div>
							</a>

							<!-- About Phone Box -->
							<div class="about-phone_box">
								<span class="about-phone_icon fa-solid fa-phone fa-fw"></span>
								Call for help <br>
								<a class="about-two_phone-number" href="tel: +46 70 754 42 82"> +46 70 754 42 82</a>
							</div>

						</div>

					</div>
				</div>

			</div>
			</div>
		</section>
	<!-- End About Two -->

	<!-- Services One -->
	<section class="services-one">
		<div class="services-one_pattern-layer" style="background-image:url({{asset('')}}frontend/images/background/bg-popular.jpg)"></div>
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title_two centered">
				<div class="sec-title_two-title">~ Our Awesome Services ~</div>
				<!-- 	<h2 class="sec-title_two-heading" style="color: black;">  Choose The Best IT  Service Company </h2>-->
			</div>

			<div class="services-one_inner-coontainer">
				<div class="four-item-carousel owl-carousel owl-theme">

					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-8.png"
									alt="" /></span>
							<h5 class="service-block_three-heading">Web Design </h5>
							<div class="service-block_three-text">we offer professional web design services to create
								...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-8-1.png"
										alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="#">Web Design </a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-9.png"
									alt="" /></span>
							<h5 class="service-block_three-heading">Website Development </h5>
							<div class="service-block_three-text">we offer comprehensive web development services ...
							</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-9-1.png"
										alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">Website Development</a>
								</h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-10.png"
									alt="" /></span>
							<h5 class="service-block_three-heading">Mobile Application Development </h5>
							<div class="service-block_three-text">specialize in mobile application development, creating
								cutting-edge ...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-10-1.png"
										alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">Mobile Application
										Development </a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-11.png"
									alt="" /></span>
							<h5 class="service-block_three-heading">Graphic Design </h5>
							<div class="service-block_three-text">we offer professional graphic design services that
								help businesses...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-11-1.png"
										alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">Graphic Design </a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-8.png"
									alt="" /></span>
							<h5 class="service-block_three-heading">Data Analysis </h5>
							<div class="service-block_three-text">we offer comprehensive data analysis services to help
								businesses...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-8-1.png"
										alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">UI/UX Design</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>

					<!-- Service Block One -->
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-9.png"
									alt="" /></span>
							<h5 class="service-block_three-heading">Social Media </h5>
							<div class="service-block_three-text">a strong presence on popular social media platforms,
								engage with...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-9-1.png"
										alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="#">Social Media </a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>

					<!-- Service Block One 
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-10.png" alt="" /></span>
							<h5 class="service-block_three-heading">AI & Machine Learning</h5>
							<div class="service-block_three-text">Leverage the capabilities of artificial intelligence and machine learning to...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-10-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="#">Project Management</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>-->

					<!-- Service Block One
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-11.png" alt="" /></span>
							<h5 class="service-block_three-heading">IT Support & Maintainance</h5>
							<div class="service-block_three-text">We provide comprehensive IT support and maintenance services to ensure the ...</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-11-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="#">Cyber Security</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>
					 -->
					<!-- Service Block One 
					<div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-8.png" alt="" /></span>
							<h5 class="service-block_three-heading">UI/UX Design</h5>
							<div class="service-block_three-text">Our customers get solutions and business opportunities instead of just projects.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-8-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="#">UI/UX Design</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div>
					-->
					<!-- Service Block One -->
					<!-- <div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-9.png" alt="" /></span>
							<h5 class="service-block_three-heading">Business Planning</h5>
							<div class="service-block_three-text">Our customers get solutions and business opportunities instead of just projects.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-9-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">Business Planning</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div> -->

					<!-- Service Block One -->
					<!-- <div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-10.png" alt="" /></span>
							<h5 class="service-block_three-heading">Project Management</h5>
							<div class="service-block_three-text">Our customers get solutions and business opportunities instead of just projects.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-10-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">Project Management</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div> -->

					<!-- Service Block One -->
					<!-- <div class="service-block_three">
						<div class="service-block_three-inner">
							<span class="service-block_three-icon"><img src="{{asset('')}}frontend/images/icons/service-11.png" alt="" /></span>
							<h5 class="service-block_three-heading">Cyber Security</h5>
							<div class="service-block_three-text">Our customers get solutions and business opportunities instead of just projects.</div>
							<div class="service-block_three-overlay">
								<div class="service-block_three-color-layer"></div>
								<span class="service-block_three-icon-two"><img src="{{asset('')}}frontend/images/icons/service-11-1.png" alt="" /></span>
								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details')}}">Cyber Security</a></h5>
								<a class="service-block_three-learn" href="{{route('service-details')}}">Learn More</a>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</div>
	</section>
	<!-- End Services One -->

	<!-- Case One -->
	<!-- <section class="case-one">
		<div class="case-one_pattern-layer" style="background-image:url({{asset('')}}frontend/images/background/pattern-16.png)"></div>
		<div class="case-one_pattern-layer-two" data-parallax='{"y" : -100}' style="background-image:url({{asset('')}}frontend/images/background/pattern-17.png)"></div>
		<div class="auto-container">
			
			
			<div class="sec-title_two">
				<div class="sec-title_two-title">Our Case Studies ~</div>
				<h2 class="sec-title_two-heading">Technology Is <span>Transforming</span> <br> Every Industry Sector</h2>
			</div>
			
			<div class="case-one_inner-container">
				<div class="case-carousel owl-carousel owl-theme">
					
					
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="{{asset('')}}frontend/images/resource/case-1.jpg" alt="" />
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="{{asset('')}}frontend/images/resource/case-1.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="{{route('service-details')}}">Custom Design Solutions</a></h5>
								<div class="case-block_location">4580 McKnight Rd, USA</div>
								<div class="case-block_text">Network Access has served as strategic IT partners for businesses of all sizes and sectors for decades, so we know that every for the organization has different IT needs. </div>
							</div>
						</div>
					</div>
					
					
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="{{asset('')}}frontend/images/resource/case-2.jpg" alt="" />
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="{{asset('')}}frontend/images/resource/case-2.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="{{route('service-details')}}">Strategic Consulting</a></h5>
								<div class="case-block_location">4580 McKnight Rd, USA</div>
								<div class="case-block_text">Network Access has served as strategic IT partners for businesses of all sizes and sectors for decades, so we know that every for the organization has different IT needs. </div>
							</div>
						</div>
					</div>
					
					
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="{{asset('')}}frontend/images/resource/case-3.jpg" alt="" />
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="{{asset('')}}frontend/images/resource/case-3.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="{{route('service-details')}}">Remote Control Support</a></h5>
								<div class="case-block_location">4580 McKnight Rd, USA</div>
								<div class="case-block_text">Network Access has served as strategic IT partners for businesses of all sizes and sectors for decades, so we know that every for the organization has different IT needs. </div>
							</div>
						</div>
					</div>
					
					
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="{{asset('')}}frontend/images/resource/case-1.jpg" alt="" />
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="{{asset('')}}frontend/images/resource/case-1.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="{{route('service-details')}}">Custom Design Solutions</a></h5>
								<div class="case-block_location">4580 McKnight Rd, USA</div>
								<div class="case-block_text">Network Access has served as strategic IT partners for businesses of all sizes and sectors for decades, so we know that every for the organization has different IT needs. </div>
							</div>
						</div>
					</div>
					
					
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="{{asset('')}}frontend/images/resource/case-2.jpg" alt="" />
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="{{asset('')}}frontend/images/resource/case-2.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="{{route('service-details')}}">Strategic Consulting</a></h5>
								<div class="case-block_location">4580 McKnight Rd, USA</div>
								<div class="case-block_text">Network Access has served as strategic IT partners for businesses of all sizes and sectors for decades, so we know that every for the organization has different IT needs. </div>
							</div>
						</div>
					</div>
					
					
					<div class="case-block">
						<div class="case-block_inner">
							<div class="case-block_image">
								<img src="{{asset('')}}frontend/images/resource/case-3.jpg" alt="" />
								<div class="case-one_overlay">
									<div class="case-one_overlay-content">
										<a href="{{asset('')}}frontend/images/resource/case-3.jpg" class="case-block_plus lightbox-image plus fa fa-plus"></a>
									</div>
								</div>
							</div>
							<div class="case-block_lower-content">
								<h5 class="case-block_heading"><a href="{{route('service-details')}}">Remote Control Support</a></h5>
								<div class="case-block_location">4580 McKnight Rd, USA</div>
								<div class="case-block_text">Network Access has served as strategic IT partners for businesses of all sizes and sectors for decades, so we know that every for the organization has different IT needs. </div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section> -->
	<!-- End Case One -->

	<!-- Choose One -->
	<section class="choose-one">
		<div class="choose-one_pattern-layer" style="background-image:url({{asset('')}}frontend/images/background/pattern-19.png)"></div>
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title_two centered"> <br><br>
				<div class="sec-title_two-title">~ Why choose Us? ~</div>
				<h2 class="sec-title_two-heading">We serve a wide <span>variety</span> <br> of industries</h2>
			</div>

			<!-- Choose Info Tabs -->
			<div class="choose-info-tabs">
				<!-- Choose Tabs -->
				<div class="choose-tabs tabs-box">

					<!-- Tab Btns -->
					<ul class="tab-btns tab-buttons clearfix">
						<li data-tab="#prod-mission" class="tab-btn active-btn">Expertise and Experience</li>
						<li data-tab="#prod-winner" class="tab-btn">Client-Centric Approach</li>
						<li data-tab="#prod-software" class="tab-btn">Innovation and Quality</li>
						<li data-tab="#prod-are" class="tab-btn">End-to-End Solutions</li>
						<li data-tab="#prod-soft" class="tab-btn">Strong Partnerships</li>
						<li data-tab="#prod-ware" class="tab-btn">Customer Success</li>
					</ul>

					<!-- Tabs Container -->
					<div class="tabs-content">

						<!-- Tab / Active Tab -->
						<div class="tab active-tab" id="prod-mission">
							<div class="row clearfix">
								<!-- Image Column -->
								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer"
											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="{{asset('')}}frontend/images/tour/expert.jpg" alt="" />
										</div>
									</div>
								</div>
								<!-- Content Column -->
								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Expertise and Experience</h2>
										<div class="choose-one_text">Our team of highly skilled professionals brings a
											wealth of experience and expertise across various domains, enabling us to
											provide comprehensive solutions to complex challenges. With a strong focus
											on continuous learning, our team stays up-to-date with the latest
											technologies and industry trends to deliver cutting-edge solutions.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-winner">
							<div class="row clearfix">
								<!-- Image Column -->
								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer"
											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="{{asset('')}}frontend/images/tour/tour-3.jpg" alt="" />
										</div>
									</div>
								</div>
								<!-- Content Column -->
								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Client-Centric Approach</h2>
										<div class="choose-one_text">We prioritize our clients and their goals. We take
											the time to understand your business, objectives, and challenges, allowing
											us to tailor our solutions to your specific needs. We value open
											communication and collaboration, working closely with you throughout the
											entire process to ensure successful outcomes.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-software">
							<div class="row clearfix">
								<!-- Image Column -->
								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer"
											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="{{asset('')}}frontend/images/tour/tour-4.jpg" alt="" />
										</div>
									</div>
								</div>
								<!-- Content Column -->
								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Innovation and Quality</h2>
										<div class="choose-one_text">We are passionate about innovation and driving
											positive change. Our commitment to quality is unwavering, and we strive for
											excellence in every project we undertake. By leveraging the latest
											technologies and industry best practices, we deliver solutions that are
											reliable, scalable, and future-proof.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-are">
							<div class="row clearfix">
								<!-- Image Column -->
								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer"
											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="{{asset('')}}frontend/images/tour/tour-5.jpg" alt="" />
										</div>
									</div>
								</div>
								<!-- Content Column -->
								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">End-to-End Solutions</h2>
										<div class="choose-one_text">From concept to implementation and ongoing support,
											NordiGate offers end-to-end IT solutions. Whether you need custom software
											development, infrastructure management, cloud migration, cybersecurity, or
											any other IT service, we have the capabilities and expertise to handle it
											all.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-soft">
							<div class="row clearfix">
								<!-- Image Column -->
								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer"
											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="{{asset('')}}frontend/images/tour/tour-2.jpg" alt="" />
										</div>
									</div>
								</div>
								<!-- Content Column -->
								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Strong Partnerships</h2>
										<div class="choose-one_text">We have cultivated strong partnerships with leading
											technology providers, enabling us to access cutting-edge tools and
											resources. These strategic alliances allow us to offer the best solutions to
											our clients, incorporating the latest advancements and ensuring the highest
											quality of service.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab" id="prod-ware">
							<div class="row clearfix">
								<!-- Image Column -->
								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_image-inner">
										<div class="choose-one_dotted-layer"
											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
										<div class="choose-one_color-layer"></div>
										<div class="choose-one_image">
											<img src="{{asset('')}}frontend/images/tour/tour-6.jpg" alt="" />
										</div>
									</div>
								</div>
								<!-- Content Column -->
								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
									<div class="choose-one_content-inner">
										<div class="choose-one_title">Touching Lives Through Technology</div>
										<h2 class="choose-one_heading">Customer Success</h2>
										<div class="choose-one_text">Our success lies in the success of our clients. We
											are dedicated to delivering solutions that drive measurable results and help
											businesses achieve their objectives. We measure our success by the long-term
											relationships we build with our clients and the positive impact our
											solutions have on their operations.</div>
										<div class="choose-one_button">
											<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
												<div class="btn-wrap">
													<span class="text-one">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
													<span class="text-two">Contact Us <i
															class="fa-solid fa-arrow-right fa-fw"></i></span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Choose One -->


	<!-- CTA One -->
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
	<!-- End CTA One -->

@endsection

	<!-- Footer -->
