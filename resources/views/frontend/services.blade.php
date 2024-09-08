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
					@foreach($services as $service)
					<div class="service-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{$service->image2}}" alt="" style="height: 263px;"/>
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{$service->logo}}" alt="" />
									</div>
									<h5 class="service-block_two-title">{{$service->title}}</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">{{$service->title}}</a>
										</h5>
										<div class="service-block_two-text">{{Str::limit(strip_tags($service->details,80))}}</div>
										<a class="service-block_two-more" href="{{route('service-details',$service->slug)}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- Service Block Two -->
				
 
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