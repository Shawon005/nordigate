
		<!-- End Preloader -->

		<!-- Main Header / Header Style Two -->
		
		<!-- End Main Header -->
		@extends('frontend.master')
		@section('content')
		<!-- Main Slider -->
		@php $setting=setting();@endphp
		<section class="slider-two">
			<div class="single-item-carousel owl-carousel owl-theme">
			@foreach($sliders as $slider)
				<!-- Slide -->
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
											<span class="text-one">{{$slider->btn_text}}<i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">{{$slider->btn_text}} <i
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

			
				<!-- <div class="slide">
					<div class="slider-two_image-layer" style="background-image:url({{asset('')}}frontend/images/banner/4.jpg)"></div>
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


			</div>
		</section>
		<!-- End Main Slider -->

		<!-- Featured One -->
		<section class="featured-one">
			<div class="auto-container">
				<div class="row clearfix">

					@foreach($boxes as  $box)
					<!-- Feature Block One -->
					<div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="{{$box->link}}"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{$box->image}}" alt="" />
							</span>
							<h5 class="feature-block_one-title">{{$box->title}}</h5>
						</div>
					</div>
					@endforeach
					<!-- Feature Block One -->
					<!-- <div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="#"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-2.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Industry Expertise</h5>
						</div>
					</div> -->
					<!-- Feature Block One -->
					<!-- <div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="#"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-3.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Client Success </h5>
						</div>
					</div> -->

					<!-- Feature Block One -->
					<!-- <div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="#"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-5.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Blog and Insights</h5>
						</div>
					</div> -->
					<!-- Feature Block One -->
					<!-- <div class="feature-block_one">
						<div class="feature-block_one-inner">
							<a class="overlay-link" href="#"></a>
							<span class="color-layer"></span>
							<span class="feature-block_one-icon">
								<img src="{{asset('')}}frontend/images/icons/feature-5.png" alt="" />
							</span>
							<h5 class="feature-block_one-title">Join Our Team</h5>
						</div>
					</div> -->


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
								<img src="{{$setting->about_image}}" alt="" />
								<!-- About One Detail -->
								<a class="about-two_play lightbox-video fa-solid fa-play fa-fw" href="{{$setting->about_video}}">
									<i class="ripple"></i>
								</a>
							</div>
						</div>

					<!-- Content Column -->
					<div class="about-two_content col-lg-6 col-md-12 col-sm-12">
						<div class="about-two_content-inner">
							<div class="sec-title_two">
								<div class="sec-title_two-title">About NordiGate</div>
								<h2 class="sec-title_two-heading">{{$setting->about_title}}</h2>
							</div>
							<div class="about-two_text">{{$setting->about_description}}</div>
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
								<a class="about-two_phone-number" href=" +46 70 754 42 82">{{$setting->mobile}}</a>
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
    					@foreach($service_up as $service)
    					<!-- Service Block One -->
    					<div class="service-block_three">
    						<div class="service-block_three-inner">
    							<span class="service-block_three-icon"><img src="{{$service->logo1}}"
    									alt="" /></span>
    							<h5 class="service-block_three-heading">{{$service->title}}</h5>
    							<div class="service-block_three-text">{{Str::limit($service->details,80)}}
    							</div>
    							<div class="service-block_three-overlay">
    								<div class="service-block_three-color-layer"></div>
    								<span class="service-block_three-icon-two"><img src="{{$service->logo}}"
    										alt="" /></span>
    								<h5 class="service-block_three-heading alternate"><a href="{{route('service-details',$service->id)}}">{{$service->title}} </a></h5>
    								<a class="service-block_three-learn" href="{{route('service-details',$service->id)}}">Learn More</a>
    							</div>
    						</div>
    					</div>
    					@endforeach
    
    					
    					<!-- <div class="service-block_three">
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
    								<h5 class="service-block_three-heading alternate"><a href="#">Website Development</a>
    								</h5>
    								<a class="service-block_three-learn" href="#">Learn More</a>
    							</div>
    						</div>
    					</div>
    
    					
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
    								<h5 class="service-block_three-heading alternate"><a href="#">Mobile Application
    										Development </a></h5>
    								<a class="service-block_three-learn" href="#">Learn More</a>
    							</div>
    						</div>
    					</div>
    
    				
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
    								<h5 class="service-block_three-heading alternate"><a href="#">Graphic Design </a></h5>
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
    							</div>
    						</div>
    					</div>
    
    					
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
    								<h5 class="service-block_three-heading alternate"><a href="#">UI/UX Design</a></h5>
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
    							</div>
    						</div>
    					</div>
    
    					
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
    								<a class="service-block_three-learn" href="#">Learn More</a>
    							</div>
    						</div>
    					</div> -->
    
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
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
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
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
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
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
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
    								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Business Planning</a></h5>
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
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
    								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Project Management</a></h5>
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
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
    								<h5 class="service-block_three-heading alternate"><a href="service-detail.html">Cyber Security</a></h5>
    								<a class="service-block_three-learn" href="service-detail.html">Learn More</a>
    							</div>
    						</div>
    					</div> -->
    
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- End Services One -->

        <!-- Working Process -->
    	<section class="work-process-area pt-130 pb-100 rpt-100 rpb-70 rel z-1 about-two">
    		<div class="section-title text-center mb-70 wow fadeInUp delay-0-2s" style="visibility: visible;">
    		<div class="sec-title_two centered">
    				<div class="sec-title_two-title">~ Working Process ~</div>
    				<!-- 	<h2 class="sec-title_two-heading" style="color: black;">  Choose The Best IT  Service Company </h2>-->
    			</div>
    			<!-- <span class="sub-title mb-15">Working Process</span> -->
    			<h2>Industry Best Practices to the Core</h2>
    		</div>
    		<div class="work-process-line text-center">
    			<img src="{{asset('')}}frontend/images/background/work-process-line.png" alt="line">
    		</div>
    		<div class="container">
    			<div class="row row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
    				@foreach($process as $id=>$proces)
    				<div class="col">
    					<div class="work-process-item {{($id%2==0)?(($id==4)?'mt-50':'mt-40'):'mt-10'}} wow fadeInUp delay-0-2s" style="visibility: visible;">
    						<div class="number">0{{$id+1}}</div>
    						<div class="content">
    							<h4>{{$proces->title}}</h4>
    							<p>{{$proces->description}}</</p>
    						</div>
    					</div>
    				</div>
    				@endforeach
    				<!-- <div class="col">
    					<div class="work-process-item mt-10 wow fadeInDown delay-0-2s" style="visibility: visible;">
    						<div class="number">02</div>
    						<div class="content">
    							<h4>Planning</h4>
    							<p>Our design approach is to simplify. We embrace creating something.</p>
    						</div>
    					</div>
    				</div>
    				<div class="col">
    					<div class="work-process-item mt-40 wow fadeInUp delay-0-2s" style="visibility: visible;">
    						<div class="number">03</div>
    						<div class="content">
    							<h4>Design &amp; Dev</h4>
    							<p>At this step, we cater to requirement backed web services developmenc</p>
    						</div>
    					</div>
    				</div>
    				<div class="col">
    					<div class="work-process-item wow fadeInDown delay-0-2s" style="visibility: visible;">
    						<div class="number">04</div>
    						<div class="content">
    							<h4>Testing</h4>
    							<p>On the other denounce with righteou indignation dislike beguile demore</p>
    						</div>
    					</div>
    				</div>
    				<div class="col">
    					<div class="work-process-item mt-50 wow fadeInUp delay-0-2s" style="visibility: visible;">
    						<div class="number">05</div>
    						<div class="content">
    							<h4>Project Deliver</h4>
    							<p>We denounce righteous indignation and dislike men who beguiled</p>
    						</div>
    					</div>
    				</div> -->
    				
    			</div>
    		</div>
    	</section>
    	<!-- /Working Process -->

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
    						@foreach($services as $id=>$service)
    						<li data-tab="#prod-{{$id}}" class="tab-btn {{($id==0)?'active-btn':'tab-btn'}}">{{$service->title}}</li>
    						@endforeach
    						<!-- <li data-tab="#prod-winner" class="tab-btn">Client-Centric Approach</li>
    						<li data-tab="#prod-software" class="tab-btn">Innovation and Quality</li>
    						<li data-tab="#prod-are" class="tab-btn">End-to-End Solutions</li>
    						<li data-tab="#prod-soft" class="tab-btn">Strong Partnerships</li>
    						<li data-tab="#prod-ware" class="tab-btn">Customer Success</li> -->
    					</ul>
    
    					<!-- Tabs Container -->
    					<div class="tabs-content">
    
    						<!-- Tab / Active Tab -->
    						@foreach($services as $id=>$service)
    						<div class="tab {{($id==0)?'active-tab':''}}" id="prod-{{$id}}">
    							<div class="row clearfix">
    								<!-- Image Column -->
    								<div class="choose-one_image-column col-lg-6 col-md-12 col-sm-12">
    									<div class="choose-one_image-inner">
    										<div class="choose-one_dotted-layer"
    											style="background-image:url({{asset('')}}frontend/images/background/pattern-18.png)"></div>
    										<div class="choose-one_color-layer"></div>
    										<div class="choose-one_image">
    											<img src="{{$service->image}}" alt="" />
    										</div>
    									</div>
    								</div>
    								<!-- Content Column -->
    								<div class="choose-one_content-column col-lg-6 col-md-12 col-sm-12">
    									<div class="choose-one_content-inner">
    										<div class="choose-one_title">Touching Lives Through Technology</div>
    										<h2 class="choose-one_heading">{{$service->title}}</h2>
    										<div class="choose-one_text">{{$service->description}}</div>
    										<div class="choose-one_button">
    											<a class="btn-style-three theme-btn btn-item" href="{{route('home')}}">
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
    						@endforeach
    
    						<!-- Tab -->
    						<!-- <div class="tab" id="prod-winner">
    							<div class="row clearfix">
    								
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
    											<a class="btn-style-three theme-btn btn-item" href="contact.html">
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
    						</div> -->
    
    						<!-- Tab -->
    						<!-- <div class="tab" id="prod-software">
    							<div class="row clearfix">
    								
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
    											<a class="btn-style-three theme-btn btn-item" href="contact.html">
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
    						</div> -->
    
    						<!-- Tab -->
    						<!-- <div class="tab" id="prod-are">
    							<div class="row clearfix">
    								
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
    											<a class="btn-style-three theme-btn btn-item" href="contact.html">
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
    						</div> -->
    
    						<!-- Tab -->
    						<!-- <div class="tab" id="prod-soft">
    							<div class="row clearfix">
    								
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
    											<a class="btn-style-three theme-btn btn-item" href="contact.html">
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
    						</div> -->
    
    						<!-- Tab -->
    						<!-- <div class="tab" id="prod-ware">
    							<div class="row clearfix">
    								
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
    											<a class="btn-style-three theme-btn btn-item" href="contact.html">
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
    						</div> -->
    
    					</div>
    
    				</div>
    			</div>
    
    		</div>
    	</section>
    	<!-- End Choose One -->
        
        <!--Testimonial One Start-->
        <section class="testimonial-one about-two">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <!-- <span class="section-title__tagline">Customers Feedbacks</span>
                                <h2 class="section-title__title">What They’re Talking About Company</h2> -->
                                <div class="sec-title_two">
									<div class="sec-title_two-title">Customers Feedbacks ~</div>
									<h2 class="sec-title_two-heading">What They’re Talking About Company</h2>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel owl-theme owl-carousel">
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-one-img-1.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h5 class="testimonial-one__client-name">Kevin Martin</h5>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                        consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                        et dolore text.</p>
                                    <div class="testimonial-one__quote">
                                        <span class="fa-solid fa-quote-right fa-fw"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-one-img-2.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h5 class="testimonial-one__client-name">Christine Eve</h5>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                        consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                        et dolore text.</p>
                                    <div class="testimonial-one__quote">
                                        <span class="fa-solid fa-quote-right fa-fw"></span>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-one-img-3.png" alt="">
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h5 class="testimonial-one__client-name">Jon Smith</h5>
                                            <p class="testimonial-one__client-title">Customer</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                        consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                        et dolore text.</p>
                                    <div class="testimonial-one__quote">
                                        <span class="fa-solid fa-quote-right fa-fw"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->
        
        <!-- TECHNOLOGY INDEX -->
		<section class="technology-v1">
            <div class="container">
                <div class="row">
                   <div class="col-md-12">
                        <!-- <div class="ot-heading text-center text-white">
                            <div class="sec-title_two-title">~ Technology Index ~</div>
                            <h2 class="main-heading">We Deliver Solution with <br>the Goal of Trusting Relationships</h2>
                        </div> -->

                        <div class="sec-title_two centered">
							<div class="sec-title_two-title">~ Technology Index ~</div>
							<!-- 	<h2 class="sec-title_two-heading" style="color: black;">  Choose The Best IT  Service Company </h2>-->
						</div>
                    </div>
                </div>
                <div class="space-15"></div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <a class="tech-box text-center" href="javascript:;">
                            <div class="icon-main"><span class="flaticon-code-1"></span></div>
                            <h5>WEB</h5>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <a class="tech-box text-center" href="javascript:;">
                            <div class="icon-main"><span class="flaticon-android"></span></div>
                            <h5>Android</h5>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <a class="tech-box text-center" href="javascript:;">
                            <div class="icon-main"><span class="flaticon-apple"></span></div>
                            <h5>IOS</h5>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <a class="tech-box text-center" href="javascript:;">
                            <div class="icon-main"><span class="flaticon-iot"></span></div>
                            <h5>IOT</h5>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <a class="tech-box text-center" href="javascript:;">
                            <div class="icon-main"><span class="flaticon-time-and-date"></span></div>
                            <h5>Wearalables</h5>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                        <a class="tech-box text-center" href="javascript:;">
                            <div class="icon-main"><span class="flaticon-tv"></span></div>
                            <h5>TV</h5>
                        </a>
                    </div>
                </div>
            </div>
        </section>
		<!-- /TECHNOLOGY INDEX -->

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
	
	<!-- End Search Popup -->

	