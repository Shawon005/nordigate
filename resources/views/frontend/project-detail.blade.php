@extends('frontend.master')
		@section('content')
<!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('')}}frontend/images/background/7.jpg)">
        <div class="auto-container">
			<h2>Project Detail</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{route('home')}}">Home</a></li>
				<li>{{$project->title}}</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Projects Detail -->
	<section class="projects-detail">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-8 col-md-12 col-sm-12 line">
					<div class="image me-5">
						<img src="{{$project->image}}" alt="" />
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column" style="background-color:transparent !important">
						<div class="lower-content">
							<h3>{{$project->title}}</h3>
							<p>{!! $project->description !!}</p>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- Lower Content -->
			
					
		</div>

		</div>
	</section>
	<!-- End Projects Detail -->
	
	<!-- Clients Three -->
	<section class="clients-three">
		<div class="auto-container">
		
			<div class="clients-three_inner-container">
				<!-- Sponsors Carousel -->
				<h3 class="mb-3">Releted Project</h3>
				<ul class="sponsors-carousel-two owl-carousel owl-theme">

				@foreach($projects->slice(0,3) as $project)
				<li class="slide-item"><figure class="client-one_image-box-two">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="project_one-inner">
							<div class="project_one-image">
								<img src="{{$project->image}}" alt="" style="width:258px !important; height: 190px;"/>
								<div class="project_one-content">
									
								</div>
								
								<div class="project_one-overlay">
									<div class="project-one_overlay-content">
										<!-- <div class="project_one-text">{{Str::limit($project->description,80)}}</div> -->
										<a class="project_one-plus fa-solid fa-plus fa-fw" href="{{route('project-details',$project->slug)}}"></a>
									</div>
								</div>
								
							</div>
									<h5 class="project-one_title mt-2"><a style="color:#0f0f35" href="{{route('project-details',$project->slug)}}">{{$project->title}}</a></h5>
									<div class="project-one_designation mb-2">{{$project->designation}}</div>
						</div>
					</div>
					</li>
					@endforeach
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