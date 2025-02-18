@extends('frontend.master')
		@section('content')
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Project</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{route('home')}}">Home</a></li>
				<li>Project</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Projects One -->
	<section class="projects-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Work Index!</div>
						<h2 class="sec-title_heading">Few of Our Apps Adored <br> by <span> millions of users!</span></h2>
					</div>
					<div class="right-box">
						<div class="sec-title_text">The perfect blend of mature processes, flexible delivery <br> models, effective project management.</div>
					</div>
				</div>
			</div>
			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">
                
                <!-- Filter -->
                <div class="projects-one_filters">
                	<ul class="filter-tabs">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
						@foreach($categories as $category)
                        <li class="filter" data-role="button" data-filter=".{{$category->id}}">{{$category->category_name}}</li>
						@endforeach
                        <!-- <li class="filter" data-role="button" data-filter=".cloud">Cloud Database</li>
						<li class="filter" data-role="button" data-filter=".design">UI/UX Design</li> -->
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
					
					<!-- Project One -->
					@foreach($projects as $project)
					<div class="project_one mix all {{$project->category_id}} col-lg-4 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="{{$project->thumbnail}}" alt="" style="height: 262px;"/>
								<div class="project_one-content">
									<!-- <h5 class="project-one_title"  style="color:#000"><a href="{{route('project-details',$project->id)}}">{{$project->title}}</a></h5>
									<div class="project-one_designation">{{$project->designation}}</div> -->
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<!-- <div class="project_one-text">{{Str::limit($project->description,80)}}</div> -->
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="{{route('project-details',$project->slug)}}"></a>
									</div>
								</div>
								
							</div>
							
							<h5 class="project-one_title mt-2" ><a style="color:#0f0f35" href="{{route('project-details',$project->slug)}}">{{$project->title}}</a></h5>
							<div class="project-one_designation mb-2" style="font-size:18px">{{$project->designation}}</div>
							
						</div>

					</div>
					@endforeach
					
					
					<!-- <div class="project_one mix all cloud col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-2.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Property Simplified</a></h5>
									<div class="project-one_designation">Photo Editing</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-3.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Deliveries Made Easy</a></h5>
									<div class="project-one_designation">Food Delivery</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				
					<div class="project_one mix all cloud web col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-4.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Collection Management</a></h5>
									<div class="project-one_designation">Web Application</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				
					<div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-5.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Improvement Company</a></h5>
									<div class="project-one_designation">Web Application</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
					
					<div class="project_one mix all cloud web col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-6.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">iOS Application</a></h5>
									<div class="project-one_designation">Admin Dashboard</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				
					<div class="project_one mix all design col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-7.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">HandyMan app</a></h5>
									<div class="project-one_designation">Web App</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
					
					<div class="project_one mix all cloud web col-lg-3 col-md-6 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="images/gallery/project-8.jpg" alt="" />
								<div class="project_one-content">
									<h5 class="project-one_title"><a href="project-detail.html">Property Simplified</a></h5>
									<div class="project-one_designation">Photo Editing</div>
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<div class="project_one-text">lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!</div>
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="project-detail.html"></a>
									</div>
								</div>
								
							</div>
						</div>
					</div> -->
					
				</div>
				
				<!-- Button Box -->
				<!-- <div class="projects-one_button-box text-center">
					<a class="btn-style-one theme-btn btn-item" href="#">
						<div class="btn-wrap">
							<span class="text-one">Load more</span>
							<span class="text-two">Load more</span>
						</div>
					</a>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Projects One -->
	
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
					<a class="cta-one_btn theme-btn" href="{{route('contact')}}">get a quote</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA One -->
	
	<!-- Footer -->
@endsection