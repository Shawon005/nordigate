<header class="main-header header-style-two">
@php $setting=setting();@endphp
			<!-- Header Top -->
			<div class="header-top_two">
				<div class="auto-container">
					<div class="d-flex justify-content-center align-items-center flex-wrap">

						<!-- Info List -->
						<ul class="info-list">
							<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>{{$setting->mobile}}</a></li>
							<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>{{$setting->email}}</a>
							</li>
							<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Sweden</a></li>
						</ul>

						<!-- Social Box -->
						<ul class="header-social_box">
							<li><a href="{{$setting->facebook}}" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="{{$setting->twitter}}" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="{{$setting->linkind}}" class="fa-brands fa-linkedin fa-fw"></a></li>
							<li><a href="{{$setting->instragram}}" class="fa-solid fa-instagram fa-fw"></a></li>
						</ul>

					</div>
				</div>
			</div>
			<!-- End Header Top -->

			<!-- Header Upper -->
			<div class="header-upper">
				<div class="auto-container">
					<div class="inner-container d-flex">
						<!-- Logo Box -->
						<div class="logo"><a href="{{route('home')}}"><img src="{{$setting->header_logo}}" alt="" title=""></a></div>

						<!-- Upper Right -->
						<div class="upper-right">
							<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

								<!-- Main Menu -->
								<nav class="main-menu show navbar-expand-md">
									<div class="navbar-header">
										<button class="navbar-toggler" type="button" data-toggle="collapse"
											data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
											aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li class=""><a href="{{route('home')}}">Home</a>
												<!-- <ul>
												<li><a href="index.html">Homepage One</a></li>
												<li><a href="index-2.html">Homepage Two</a></li>
												<li><a href="index-3.html">Homepage Three</a></li>
												<li><a href="index-4.html">Homepage Four</a></li>
												<li class="dropdown"><a href="#">Header Styles</a>
													<ul>
														<li><a href="index.html">Header Style One</a></li>
														<li><a href="index-2.html">Header Style Two</a></li>
														<li><a href="index-3.html">Header Style Three</a></li>
														<li><a href="index-4.html">Header Style Four</a></li>
													</ul>
												</li>
											</ul> -->
											</li>
											<li><a href="{{route('about')}}">About Us</a></li>
											<li><a href="{{route('services')}}">Services</a>
											<li><a href="{{route('projects')}}">Projects</a>
												<!-- <ul>
													<li><a href="services.html">Services</a></li>

												</ul> -->
											</li>
											<!-- <li><a href="blog.html">Blog</a>
											 <ul>
												<li><a href="#">solutions</a></li>
											</ul>  
											</li> -->
										<!-- 	<li class="dropdown"><a href="products.html">Products</a>
												<ul>
													<li><a href="products.html">products</a></li>
												</ul>
											</li>
											<li class=""><a href="#">Industries</a>
												<ul>
													<li><a href="Industries.html">Industries</a></li>
													<li><a href="project-detail.html">project Detail</a></li>
												</ul>
											</li>
											<li class=""><a href="#">Partners</a>

										 <ul>
												<li><a href="#">Case Studies</a></li>
												<li><a href="project-detail.html">project Detail</a></li>
											</ul>  
											</li> -->
											<li><a href="{{route('contact')}}">Contact Us</a>

												<!-- <ul>
												<li><a href="partners.html">partners</a></li>
												<li><a href="project-detail.html">project Detail</a></li>
											</ul> -->
											</li>
											<!--  <li class="dropdown"><a>Other</a>

												<ul>
													<li class=""><a href="#">Case Studies</a></li>
													<li class=""><a href="#">Solutions</a></li>
													<li class=""><a href="#">Careers</a></li>

												</ul>
											</li>-->
											<!-- <li class=""><a href="#">Blog</a>
											<ul>
												<li><a href="blog.html">Our Blog</a></li>
												<li><a href="#">Blog Detail</a></li>
												<li><a href="not-found.html">Not Found</a></li>
											</ul>
										</li>
										<li class=""><a href="#">Careers</a>
											<ul>
												<li><a href="#">Careers</a></li>
												<li><a href="project-detail.html">project Detail</a></li>
											</ul>
										</li> -->
											<!-- <li><a href="contact.html">Contact Us</a></li> -->
											<!-- <li class="dropdown"><a href="#">Project</a>
											<ul>
												<li><a href="project.html">project</a></li>
												<li><a href="project-detail.html">project Detail</a></li>
											</ul>
										</li> -->
										</ul>
									</div>

								</nav>
								<!-- Main Menu End-->

								<div class="outer-box d-flex align-items-center">

										<!-- Search Box -->
										<!-- <div class="search-box">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="search" name="search-field" value="" placeholder="Search..." required>
												<button type="submit"><span class="icon fa fa-search"></span></button>
											</div>
										</form>
									</div> -->

										<!-- Language -->
										<!-- <div class="language dropdown">
										<button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English &nbsp;<span class="fa fa-angle-down"></span></button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
											<li><a href="#">English Branch</a></li>
											<li><a href="#">German Branch</a></li>
											<li><a href="#">UAE Branch</a></li>
											<li><a href="#">Qatar Branch</a></li>
										</ul>
									</div> -->

									<div class="button-box">
										<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
											<div class="btn-wrap">
												<span class="text-one">Get a quote now <i
														class="fa-solid fa-arrow-right fa-fw"></i></span>
												<span class="text-two">Get a quote now <i
														class="fa-solid fa-arrow-right fa-fw"></i></span>
											</div>
										</a>
									</div>

									<!-- Mobile Navigation Toggler -->
									<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Sticky Header  -->
			<div class="sticky-header logo_c">
				<div class="auto-container">
					<div class="d-flex justify-content-start align-items-center">
						<!-- Logo -->
						<div class="logo">
							<a href="{{route('home')}}" title=""><img src="{{$setting->header_logo}}" alt="" title=""></a>
						</div>

						<!-- Right Col -->
						
						<div class="right-box d-flex align-items-center justify-content-between  flex-wrap"  style="padding-left: 15px; width:100%">
							<!-- Main Menu -->
							<nav class="main-menu">
								<!--Keep This Empty / Menu will come through Javascript-->
							</nav>
							<!-- Main Menu End-->

							<div class="outer-box d-flex align-items-center">

									<!-- Search Box -->
									<!-- <div class="search-box">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value="" placeholder="Search..." required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div> -->

									<!-- Language -->
									<!-- <div class="language dropdown">
									<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe fa-fw"></i>English &nbsp;<span class="fa fa-angle-down"></span></button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<li><a href="#">English Branch</a></li>
										<li><a href="#">German Branch</a></li>
										<li><a href="#">UAE Branch</a></li>
										<li><a href="#">Qatar Branch</a></li>
									</ul>
								</div> -->

								<div class="button-box">
									<a class="btn-style-three theme-btn btn-item" href="{{route('contact')}}">
										<div class="btn-wrap">
											<span class="text-one">Get a quote now <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
											<span class="text-two">Get a quote now <i
													class="fa-solid fa-arrow-right fa-fw"></i></span>
										</div>
									</a>
								</div>

								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"style="margin-left:10px"><span class="icon fa-solid fa-bars fa-fw"></span></div>

							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- End Sticky Menu -->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-020-x-mark" style="margin-left: 20px;" ></span></div>
				<nav class="menu-box">
					<div class="nav-logo"><a href="{{route('home')}}"><img src="{{$setting->header_logo}}" alt="" title=""></a></div>
					<!-- Search -->
					<div class="search-box">
						<form method="post" action="{{route('contact')}}">
							<div class="form-group">
								<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
								<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
							</div>
						</form>
					</div>
					<div class="menu-outer">
						<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
					</div>
				</nav>
			</div>
			<!-- End Mobile Menu -->

		</header>