<footer class="main-footer" style="background-image:url({{asset('')}}frontend/images/background/pattern-11.png)">
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
                                            <a href="{{route('home')}}"><img src="{{asset('')}}frontend/images/footer-Logo-NordiGate.png" alt="" /></a>
                                        </div>
                                        <div class="text">We work with a passion of taking challenges and creating new ones
                                            in advertising sector.</div>
                                        <a href="{{route('about')}}" class="theme-btn about-btn">About us</a>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget newsletter-widget">
                                        <h4>Newsletter</h4>
                                        <div class="text">Subscribe our newsletter to get our latest update & news</div>


                                        <!-- Email Box -->
                                        <div class="email-box">
                                            <form method="post" action="{{route('contact')}}">
                                                <div class="form-group">
                                                    <input type="email" name="search-field" value=""
                                                        placeholder="Your mail address" required>
                                                    <button type="submit">
                                                        <span class="icon fa-solid fa-paper-plane fa-fw"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Social Box -->
                                        <ul class="social-box">
                                            <li><a href="https://www.twitter.com/"
                                                    class="fa-brands fa-facebook-f fa-fw"></a></li>
                                            <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a>
                                            </li>
                                            <li><a href="https://dribbble.com/" class="fa-solid fa-dribbble fa-fw"></a></li>
                                            <li><a href="https://behance.com/" class="fa-solid fa-behance fa-fw"></a></li>
                                        </ul>
                                        <!-- End Social Box -->x



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
                                            <li><span class="icon fa fa-phone"></span> Sweden</li>
                                            <li><span class="icon fa fa-envelope"></span> +46 70 754 42 82</li>
                                        </ul>



                                    </div>
                                </div>
                                <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget contact-widget">
                                        <h4>Official info:</h4>

                                        <div class="timing">
                                            <strong>Open Hours: </strong>
                                            Mon-Fri 8:00-17:00<br> Sunday: CLOSED
                                        </div>


                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="copyright">2023 &copy; All rights reserved by <a href="{{route('home')}}">NordiGate</a></div>
                </div>

            </div>
	    </footer>
        <div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="{{route('blog')}}">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>