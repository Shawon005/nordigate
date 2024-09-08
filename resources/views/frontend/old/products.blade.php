@extends('frontend.master')
  @section('content')
		<!-- End Main Header -->

		<!-- Page Title -->
		<section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/7_1.jpg)">
			<div class="auto-container">
				<h2>Our Products</h2>
				<ul class="bread-crumb clearfix">
					<li><a href="{{route('home')}}">Home</a></li>
					<li>Products</li>
				</ul>
			</div>
		</section>
		<!-- End Page Title -->

		<!-- Service Two -->
		<section class="service-two">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="sec-title_title">Our Products</div>
					<h2 class="sec-title_heading">We provide the necessary <br> products to you</h2>
				</div>
				<div class="row clearfix">

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p001.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-4.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Softwere Applications</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Softwere Applications</a></h5>
										<div class="service-block_two-text">We develop and provide a wide array of
											software applications tailored to meet specific business needs. Whether you
											require a customer relationship management (CRM) system, project management
											software, enterprise resource planning (ERP) solution, or customized
											business application, our software products are designed to streamline
											processes, boost productivity, and drive growth</div>
										<a class="service-block_two-more" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="150ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p002.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-5.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Security Solutions</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Security Solutions</a></h5>
										<div class="service-block_two-text">Protecting your valuable data and ensuring
											the security of your systems is a top priority. Our range of security
											solutions includes antivirus software, firewall protection, intrusion
											detection systems, vulnerability assessments, and encryption tools. With our
											robust security products, you can safeguard your business from cyber threats
											and maintain the privacy of sensitive information.</div>
										<a class="service-block_two-more" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="300ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p003.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-6.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Data Analytics and Business Intelligence Tools
									</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Data Analytics and Business
												Intelligence Tools</a></h5>
										<div class="service-block_two-text">Unlock the power of data with our data
											analytics and business intelligence products. We offer advanced analytics
											tools that enable you to gather, analyze, and visualize data, providing
											valuable insights for informed decision-making. Our products include data
											mining software, dashboard and reporting tools, predictive analytics
											platforms, and AI-powered analytics solutions.</div>
										<a class="service-block_two-more" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="450ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p004.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-7.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Cloud Services and Infrastructure</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Cloud Services and
												Infrastructure</a></h5>
										<div class="service-block_two-text">Embrace the benefits of the cloud with our
											range of cloud services and infrastructure solutions. We offer cloud
											hosting, storage, and computing resources to ensure scalability,
											flexibility, and cost-effectiveness for your business. Whether you need
											public, private, or hybrid cloud solutions, our products enable you to
											optimize your IT infrastructure and leverage the power of cloud computing.
										</div>
										<a class="service-block_two-more" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="0ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p005.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-31.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Colaboration & Communication Tools</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Colaboration & Communication
												Tools</a></h5>
										<div class="service-block_two-text">Efficient collaboration and seamless
											communication are essential for modern businesses. Our collaboration and
											communication products enhance teamwork and enable effective communication
											across teams and departments. From project management platforms and team
											messaging tools to video conferencing and document sharing solutions, our
											products foster collaboration and productivity.</div>
										<a class="service-block_two-more" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="300ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p006.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-33.png" alt="" />
									</div>
									<h5 class="service-block_two-title">Hardware & Networking Equipment</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">Hardware & Networking
												Equipment</a></h5>
										<div class="service-block_two-text">We provide a selection of hardware and
											networking equipment to support your technology infrastructure. Our product
											range includes servers, routers, switches, storage devices, and other
											networking components from leading manufacturers. We ensure that your
											hardware solutions are reliable, scalable, and optimized for your business
											requirements.</div>
										<a class="#" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Service Block Two -->
					<div class="service-block_two col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_two-inner wow fadeInLeft" data-wow-delay="450ms"
							data-wow-duration="1500ms">
							<div class="service-block_two-image">
								<img src="{{asset('')}}frontend/images/products/p007.jpg" alt="" />
								<div class="service-block_two-overlay">
									<div class="service-block_two-icon"><img src="{{asset('')}}frontend/images/icons/service-34.png" alt="" />
									</div>
									<h5 class="service-block_two-title">IoT Devices & Solutions</h5>
								</div>
								<div class="service-block_two-overlay-two">
									<div class="service-two_overlay-content">
										<h5 class="service-block_two-title"><a href="#">IoT Devices & Solutions</a></h5>
										<div class="service-block_two-text">Enter the realm of IoT with our IoT devices
											and solutions. We offer a range of IoT products, including sensors,
											gateways, and smart devices that can be seamlessly integrated into your
											operations. Our IoT solutions help businesses gather and analyze data,
											automate processes, and optimize resource management for improved efficiency
											and innovation.</div>
										<a class="service-block_two-more" href="{{('product-details')}}">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>

			</div>
		</section>
		<!-- End Service Two -->
 
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