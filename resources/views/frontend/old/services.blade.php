@extends('frontend.master')
  @section('content')
		<!-- End Main Header -->
		<!-- Page Title -->
		<section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/bg-pallarax.jpg)">
			<div class="auto-container">
				<h2>Service's</h2>
				<ul class="bread-crumb clearfix">
					<li><a href="{{route('home')}}">Home</a></li>
					<li>Service's</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Service Two -->
		<section class="service-two">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">Our Services</div>
					<h2 class="sec-title_heading">We provide the necessary <br> services to you</h2>
				</div>
				<div class="row clearfix">

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/001.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-4.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Custom Software Development</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Custom Software Development</a>
										</h5>
										<div class="service-block_two-text">We specialize in developing custom software
											solutions that align with your.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="150ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/002.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-5.png" alt="" />
									</div>
									<h5 class="service-block_two-title">IT Consulting and Strategy</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">IT Consulting and Strategy</a>
										</h5>
										<div class="service-block_two-text">Our goal is to propel your to business
											forward u world-class IT cybersecurity.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="300ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/004.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-6.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Cloud Solutions and Migration</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Cloud Solutions and
												Migration</a></h5>
										<div class="service-block_two-text">We help businesses harness the power of the
											cloud by designing and implementing.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="450ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/003.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-7.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Cybersecurity and Data Protection</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Cybersecurity and Data
												Protection</a></h5>
										<div class="service-block_two-text">Protect your valuable data and safeguard
											your business against cyber threats .</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/005.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-31.png" alt="" />
									</div>
									<h5 class="service-block_two-title"> IT Infrastructure Management</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#"> IT Infrastructure
												Management</a></h5>
										<div class="service-block_two-text">Efficient and reliable IT infrastructure is
											crucial for business operations.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="300ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/006.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-33.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Data Analytics and Business Intelligence</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Data Analytics and Business
												Intelligence</a></h5>
										<div class="service-block_two-text">Unlock the power of your data with our data
											analytics and business intelligence solutions.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="450ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/007.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-34.png" alt="" />
									</div>
									<h5 class="service-block_two-title"> AI and Machine Learning</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#"> AI and Machine Learning</a>
										</h5>
										<div class="service-block_two-text">Leverage the capabilities of artificial
											intelligence and machine learning to automate processes.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="450ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/services/008.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-34.png" alt="" />
									</div>
									<h5 class="service-block_two-title"> IT Support and Maintenance</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#"> IT Support and Maintenance</a>
										</h5>
										<div class="service-block_two-text">We provide comprehensive IT support and
											maintenance services to ensure the smooth functioning.</div>
										<a class="service-block_two-more" href="{{route('service-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
 
				</div>

			</div>
		</section>
		<!-- End Service Two -->

		<!-- Fluid Section One -->

		<!-- End Fluid Section One -->

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

		<!-- Footer -->
	@endsection