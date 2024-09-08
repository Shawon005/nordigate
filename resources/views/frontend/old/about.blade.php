@extends('frontend.master')
  @section('content')
		<section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/bg-popular.jpg)">
			<div class="auto-container">
				<h2>About Us</h2>
				<ul class="bread-crumb clearfix">
					<li><a href="{{route('home')}}">Home</a></li>
					<li>About Us</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- About One -->
		<section class="about-one">
			<div class="auto-container">
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="about-one_content col-lg-6 col-md-12 col-sm-12">
						<div class="about-one_content-inner">
							<div class="sec-title">
								<div class="sec-title_title">About NordiGate</div>
								<h2 class="sec-title_heading">Choose <span>The Best</span> IT <br> Service Company</h2>
								<div class="sec-title_text">NordiGate is a leading IT company dedicated to transforming
									businesses through innovative technology solutions. With a focus on delivering
									excellence and exceeding client expectations, we have established ourselves as a
									trusted partner for organizations seeking to harness the power of digital
									transformation..</div>
							</div>

							<!-- About Info Tabs -->
							<div class="about-info-tabs">
								<!-- About Tabs -->
								<div class="about-tabs tabs-box">

									<!-- Tab Btns -->
									<ul class="tab-btns tab-buttons clearfix">
										<li data-tab="#prod-mission" class="tab-btn active-btn">Our Mission</li>
										<li data-tab="#prod-vision" class="tab-btn">Our Vision</li>
										<!-- <li data-tab="#prod-value" class="tab-btn">Our Value</li> -->
									</ul>

									<!-- Tabs Container -->
									<div class="tabs-content">

										<!-- Tab / Active Tab -->
										<div class="tab active-tab" id="prod-mission">
											<div class="content">
												<div class="text">Our vision is to empower businesses by leveraging the
													latest advancements in technology. We believe that by embracing
													innovation and embracing the digital era, organizations can unlock
													new opportunities, streamline operations, and achieve sustainable
													growth.</div>
											</div>
										</div>

										<!-- Tab -->
										<div class="tab" id="prod-vision">
											<div class="content">
												<div class="text">At NordiGate, our mission is to provide cutting-edge
													IT solutions that drive tangible results for our clients. We combine
													our technical expertise with a deep understanding of
													industry-specific challenges to deliver tailored solutions that meet
													the unique needs of each organization we work with. We strive to be
													at the forefront of technological advancements, constantly expanding
													our knowledge and skills to deliver the most effective and efficient
													solutions</div>
											</div>
										</div>

										<!-- Tab -->
										<!-- <div class="tab" id="prod-value">
										<div class="content">
											<div class="text">An IT firm or MSP who keeps your IT running smoothly at all times is like a plumber who fixes your pipes; that’s what they are supposed to do. Many IT firms struggle to keep themselves and their IT from falling apart. We’ve raised the standards in this industry and are a leading cybersecurity.</div>
										</div>
									</div> -->

									</div>
								</div>
							</div>

							<!-- About One Detail -->
							<!-- <a class="about-one_detail lightbox-video"
								href="#">
								Check details about our company
								<span class="play-icon"><span class="fa-solid fa-play fa-fw"></span><i
										class="ripple"></i></span>
							</a> -->

						</div>
					</div>
					<!-- Image Column -->
					<div class="about-one_image-column-two col-lg-6 col-md-12 col-sm-12">
						<div class="about-one-image-inner-two">
							<div class="about-cicle_layer-two">
								<img src="{{asset('')}}frontend/images/background/pattern-45.png" alt="" />
							</div>
							<div class="about-one_image-two">
								<!-- Counter Column -->
								<!-- <div class="about-one_counter-block">
									<div class="dots-layer" style="background-image:url({{asset('')}}frontend/images/icons/about-dots.png)">
									</div>
									<div class="about-one_counter-number"><span class="odometer" data-count="12"></span>
									</div>
									<div class="about-one_counter-text">years of <br> experiences</div>
								</div> -->
								<img src="{{asset('')}}frontend/images/tour/tour-1.jpg" alt="" />
								<div class="about-one_award">
									<div class="about-one_award-inner">
										<!-- <div class="about-one_award-icon">
											<img src="{{asset('')}}frontend/images/icons/award.png" alt="" />
										</div> -->
										<!-- <strong>Best Awarded Company</strong> -->
										We adapt our delivery to the way your work, whether as an external provider.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About One -->



		<!-- Team One -->

		<!-- End Team One -->

		<!-- Counter One -->
		<!-- <section class="counter-one">
		<div class="auto-container">
			<div class="counter-one_inner-container" style="background-image:url({{asset('')}}frontend/images/background/1.jpg)">
				<div class="row clearfix">
					
				
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-user-plus fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="105"></span>+</div>
							<div class="counter-one_text">Team members</div>
						</div>
					</div>
					
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-award fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="15"></span>+</div>
							<div class="counter-one_text">Winning awards</div>
						</div>
					</div>
					
					
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-regular fa-file fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="10"></span>K+</div>
							<div class="counter-one_text">Completed project</div>
						</div>
					</div>
					
		
					<div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
						<div class="counter-one_inner">
							<span class="counter-one_icon fa-solid fa-user-tie fa-fw"></span>
							<div class="counter-one_counter"><span class="odometer" data-count="850"></span>k+</div>
							<div class="counter-one_text">Client’s reviews</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section> -->
		<!-- End Counter One -->

		<!-- Testimonial Three -->
		<!-- <section class="testimonial-three">
		<div class="auto-container">
			<div class="row clearfix">
				
			
				<div class="testimonial-three_carousel-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-three_carousel-inner">
					
						<div class="sec-title">
							<div class="sec-title_title">Team Member</div>
							<h2 class="sec-title_heading">Passionate Personalities, <br> <span class="theme_color">Versatile</span> Brains</h2>
						</div>
						<div class="testimonial-three_review">Clients Reviews:</div>
						<div class="single-item-carousel owl-carousel owl-theme">
							
						
							<div class="testimonial-block_three">
								<div class="testimonial-block_three-inner">
									<div class="testimonial-block_three-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua. Quis suspendisse onsectetur adipiscing.”</div>
									
									<div class="author-box">
										<div class="box-inner">
											<span class="author-image">
												<img src="{{asset('')}}frontend/images/resource/author-1.jpg" alt="" />
											</span>
											<h5>Arnold Burner</h5>
											<div class="designation">Formar Manager, Intime</div>
										</div>
									</div>
									
								</div>
							</div>
							
						
							<div class="testimonial-block_three">
								<div class="testimonial-block_three-inner">
									<div class="testimonial-block_three-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua. Quis suspendisse onsectetur adipiscing.”</div>
									
									<div class="author-box">
										<div class="box-inner">
											<span class="author-image">
												<img src="{{asset('')}}frontend/images/resource/author-1.jpg" alt="" />
											</span>
											<h5>Arnold Burner</h5>
											<div class="designation">Formar Manager, Intime</div>
										</div>
									</div>
									
								</div>
							</div>
							
							
							<div class="testimonial-block_three">
								<div class="testimonial-block_three-inner">
									<div class="testimonial-block_three-text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo rincididunt ut labore et dolore magna aliqua. Quis suspendisse onsectetur adipiscing.”</div>
									
									<div class="author-box">
										<div class="box-inner">
											<span class="author-image">
												<img src="{{asset('')}}frontend/images/resource/author-1.jpg" alt="" />
											</span>
											<h5>Arnold Burner</h5>
											<div class="designation">Formar Manager, Intime</div>
										</div>
									</div>
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				
				<div class="testimonial-three_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-three_image-inner">
						<div class="testimonial-three_image">
							<img src="{{asset('')}}frontend/images/resource/testimonial-2.png" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section> -->
		<!-- End Testimonial Three -->

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