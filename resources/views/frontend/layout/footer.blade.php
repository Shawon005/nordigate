<footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
@php $setting=setting();@endphp
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">

					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="{{route('home')}}"><img src="{{$setting->foot_logo}}" alt="" style="width:200px"/></a>
									</div>
									<div class="text">We work with a passion of taking challenges and creating new ones
										in advertising sector.</div>
									<!--<a href="about.html" class="theme-btn about-btn">About us</a> -->
								</div>
							</div>
							

							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h4>Newsletter</h4>
									<div class="text">Subscribe our newsletter to get our latest update & news</div>


									<!-- Email Box -->
									<div class="email-box">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="email" name="search-field" value=""
													placeholder="Your mail address" required>
												<button type="submit">
													<span class="icon fa-solid fa-paper-plane fa-fw"></span></button>
											</div>
										</form>
									</div>
									<!-- Social Box -->
									
									<!-- End Social Box -->
								</div>								
							</div>
						</div>
					</div>

					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">

							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-map-marker"></span>{{$setting->address}}</li>
										<li><span class="icon fa fa-phone"></span> {{$setting->mobile}}</li>
										<li><span class="icon fa fa-envelope"></span> {{$setting->email}}</li>
									</ul>



								</div>
							</div>
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>

									<div class="timing">
										<strong>Open Hours: </strong>
										{{$setting->open_hour}}
									</div>
									<div class="newsletter-widget mt-3">
										<ul class="social-box">
											<li><a href="{{$setting->facebook}}"class="fa-brands fa-facebook-f fa-fw"></a></li>
											<li><a href="{{$setting->twitter}}" class="fa-brands fa-twitter fa-fw"></a></li>
											<li><a href="{{$setting->linkind}}" class="fa-solid fa-linkedin fa-fw"></a></li>
											<li><a href="{{$setting->instragram}}" class="fa-solid fa-instagram fa-fw"></a></li>
										</ul>
									</div>

								</div>
							</div>



						</div>
					</div>

				</div>
			</div>

			<div class="footer-bottom">
				<div class="copyright">{{$setting->copy_right_year}} &copy; All rights reserved | <a href="{{route('home')}}">{{$setting->site_title}}</a></div>
			</div>

		</div>
	</footer>
	<!-- Footer -->

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>