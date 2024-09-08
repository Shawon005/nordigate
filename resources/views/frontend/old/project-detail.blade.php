@extends('frontend.master')
  @section('content')
<!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Project Detail</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{route('home')}}">Home</a></li>
				<li>Project Detail</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Projects Detail -->
	<section class="projects-detail">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-8 col-md-12 col-sm-12">
					<div class="image">
						<img src="images/resource/project.jpg" alt="" />
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
						<ul class="list">
							<li>
								Customer:
								<span>Rob’s Firm</span>
							</li>
							<li>
								Category:
								<span>Facebook Marketing, <br> Marketing</span>
							</li>
							<li>
								value:
								<span>1,500 USD</span>
							</li>
							<li>
								Date:
								<span>Nov 23, 2021</span>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
			
			<!-- Lower Content -->
			<div class="lower-content">
				<h3>Rob’s IT Firm</h3>
				<p>Harley-Davidson is one of the world’s strongest brands, synonymous with quality cruising motorcycles for over a century. By fostering a community of 
					enthusiastic admirers they defined “social branding” before we had a name for it.</p>
				<div class="row clearfix">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<ul class="check-list">
							<li>The housekeepers we hired are professionals who take pride in doing excellent work and in exceed.</li>
							<li>We carefully screen all of our cleaners you can rest assured that your home would receive the absolute highest quality of service providing.</li>
							<li>Your time is precious, and we understand that cleaning is really just one more item on your to-do list. </li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="carousel-box">
							<div class="single-item-carousel owl-carousel owl-theme">
							
								<!-- Testimonial Block Four -->
								<div class="testimonial-block_four">
									<div class="testimonial-block_four-inner">
										<div class="author-outer">
											<span class="quote-icon"><img src="images/icons/quote-1.png" alt="" /></span>
											<div class="author">
												<img src="images/resource/author-11.jpg" alt="" />
											</div>
										</div>
										<div class="testimonial-block_four-text">‘’Tempor incididunt ut labore et dolore magna alias quat enim veniam quis nostru exercitation ullamco laboris nis aliquip.’’</div>
										<h5 class="testimonial-block_four-heading">Rob Hunter</h5>
										<div class="testimonial-block_four-designation">Managing Director</div>
									</div>
								</div>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
		</div>
	</section>
	<!-- End Projects Detail -->
	
	<!-- Clients Three -->
	<section class="clients-three">
		<div class="auto-container">
			<div class="clients-three_inner-container">
				<!-- Sponsors Carousel -->
				<ul class="sponsors-carousel-two owl-carousel owl-theme">
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/15.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/16.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/17.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/18.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/15.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/16.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/17.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="client-one_image-box-two"><a href="#"><img src="images/clients/18.png" alt=""></a></figure></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Clients Three -->
	
	<!-- CTA One -->
	<section class="cta-one">
		<div class="auto-container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="left-box">
					<h3 class="cta-one_heading">Looking for the Best IT Business Solutions?</h3>
					<div class="cta-one_text">As a app web crawler expert, We will help to organize.</div>
				</div>
				<div class="right-box">
					<a class="cta-one_btn theme-btn" href="contact.html">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
	
	<!-- Footer -->
@endsection