@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$seo->title}}
@endsection


@section('description',$seo->description)
@section('keywords',$seo->keywords)

<!-- page content -->
@section('content')


<div class="container-fluid pa-0 ma-b">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner home-carousel-card">
			<div class="carousel-item home-carousel-image active">
				<img src="{{url('/imageupload/'.$getonecarosels->image)}}" class="d-block w-100" alt="$getonecarosels->altimage">
				<div class="carousel-caption d-none d-md-block">
					
					<p>{!!$getonecarosels->summary!!}</p>
				</div>
			</div>
				@foreach($getcarosels as $getcarosel)
			<div class="carousel-item home-carousel-image">
				<img src="{{url('/imageupload/'.$getcarosel->image)}}" class="d-block w-100" alt="$getcarosel->altimage">
				<div class="carousel-caption d-none d-md-block">
					<p>{!!$getcarosel->summary!!}</p>
				</div>
			</div>
			@endforeach
			
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>



<div class="container pa-b">
	<div class="row">
		@foreach($study as $std)
		<div class="col-md-6">
			<div class="home-country-outer-card">
				<div class="home-country-inner-card">
					<div class="home-country-detail">
						<h6><i class="fa fa-home"></i></h6>
						<h4>{{$std->title}}</h4>

						<p>{!! Str::limit($std->summary, 100) !!}</p>
						<a href="{{url('study-abroad-dynamic/'.$std->id)}}">Read More</a>
					</div>
					<div class="home-country-image">
						<img src="{{url('/imageupload/'.$std->image)}}" class="d-block w-100" alt="$std->altimage">
					</div>
					<div class="home-country-text">
						<h4><i class="fa fa-home"></i> Qualified {{$std->title}}</h4>
					</div>
				</div>
			</div>
		</div>
		@endforeach

	

		
	</div>
</div>





<div class="container-fluid pa-t pa-b home-service-bg">
	<div class="container">
		<h2><span>Abroad studies</span> services</h2>

		<div class="row">
			@foreach($service as $ser)
			<div class="col-md-4">
				<a href="{{url('service')}}">
					<div class="home-service-card">
						<h6>{{$loop->iteration}}</h6>
						<h4>{{$ser->title}}</h4>
						<p>{!!strip_tags($ser->summary)!!}</p>

					</div>
				</a>
			</div>
			@endforeach

			
		</div>
	</div>
</div>





<!-- <div class="container-fluid ma-b pa-t pa-b home-why-us-bg">
	<div class="container">
		<div class="offset-md-6 col-md-6">
			<h2>Why choose us ?</h2>

			<div class="row home-why-us-card">
				<div class="col-md-2 home-why-us-icon">
					<h4><i class="fa fa-home"></i></h4>
				</div>
				<div class="col-md-10 home-why-us-detail">
					<h4>70+ awesome courses</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
				</div>
			</div>

			<div class="row home-why-us-card">
				<div class="col-md-2 home-why-us-icon">
					<h4><i class="fa fa-home"></i></h4>
				</div>
				<div class="col-md-10 home-why-us-detail">
					<h4>70+ awesome courses</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
				</div>
			</div>

			<div class="row home-why-us-card">
				<div class="col-md-2 home-why-us-icon">
					<h4><i class="fa fa-home"></i></h4>
				</div>
				<div class="col-md-10 home-why-us-detail">
					<h4>70+ awesome courses</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
				</div>
			</div>

			<div class="row home-why-us-card">
				<div class="col-md-2 home-why-us-icon">
					<h4><i class="fa fa-home"></i></h4>
				</div>
				<div class="col-md-10 home-why-us-detail">
					<h4>70+ awesome courses</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
				</div>
			</div>
		</div>
	</div>
</div> -->





<div class="container pa-b home-course-title">
	<h2><span>Abroad studies</span> Classes</h2>
	<div class="row">
		@foreach($class as $cl)
		<div class="col-md-3">
			<a href="{{url('class-dynamic/'. $cl->title)}}">
				<div class="home-course-card">
					<div class="home-course-image">
						<!--
						<h6>Rs 100/-</h6>
					-->
							<img src="{{url('/imageupload/'.$cl->image)}}" class="d-block w-100" alt="$cl->altimage">
					</div>
					<div class="home-course-detail">
						<h4>{{$cl->title}}</h4>
						<p>{{$cl->summary}}</p>
					</div>
				</div>
			</a>
		</div>
		@endforeach

		
		
		
	</div>
</div>






<div class="container-fluid pa-t pa-b ma-b home-milestone-bg">
	<div class="container ">
		<h2>Providing The Best Teaching/Learning Support For All.</h2>

		<div class="row">
			<div class="col-md-3">
				<div class="home-milestone-card">
					<h6><i class="fa fa-home"></i></h6>
					<p>Global followers</p>
					<h4>5000</h4>
				</div>
			</div>


			<div class="col-md-3">
				<div class="home-milestone-card">
					<h6><i class="fa fa-home"></i></h6>
					<p>Global followers</p>
					<h4>5000</h4>
				</div>
			</div>


			<div class="col-md-3">
				<div class="home-milestone-card">
					<h6><i class="fa fa-home"></i></h6>
					<p>Global followers</p>
					<h4>5000</h4>
				</div>
			</div>


			<div class="col-md-3">
				<div class="home-milestone-card">
					<h6><i class="fa fa-home"></i></h6>
					<p>Global followers</p>
					<h4>5000</h4>
				</div>
			</div>
		</div>
	</div>
</div>





<div class="container pa-b home-event-title">
	<h2><span>Abroad Studies</span> Upcoming event</h2>

	<div class="row">
		<div class="col-md-4">
			<a href="{{url('#')}}">
				<div class="home-event-card">
					<h6>1st janaaury</h6>
					<h4>Upcoming event title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul>
						<li><p><i class="fa fa-home"></i> 8:00am</p></li>
						<li><p><i class="fa fa-home"></i> kathmandu</p></li>
					</ul>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="{{url('#')}}">
				<div class="home-event-card">
					<h6>1st janaaury</h6>
					<h4>Upcoming event title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul>
						<li><p><i class="fa fa-home"></i> 8:00am</p></li>
						<li><p><i class="fa fa-home"></i> kathmandu</p></li>
					</ul>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="{{url('#')}}">
				<div class="home-event-card">
					<h6>1st janaaury</h6>
					<h4>Upcoming event title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul>
						<li><p><i class="fa fa-home"></i> 8:00am</p></li>
						<li><p><i class="fa fa-home"></i> kathmandu</p></li>
					</ul>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="{{url('#')}}">
				<div class="home-event-card">
					<h6>1st janaaury</h6>
					<h4>Upcoming event title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul>
						<li><p><i class="fa fa-home"></i> 8:00am</p></li>
						<li><p><i class="fa fa-home"></i> kathmandu</p></li>
					</ul>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="{{url('#')}}">
				<div class="home-event-card">
					<h6>1st janaaury</h6>
					<h4>Upcoming event title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul>
						<li><p><i class="fa fa-home"></i> 8:00am</p></li>
						<li><p><i class="fa fa-home"></i> kathmandu</p></li>
					</ul>
				</div>
			</a>
		</div>

		<div class="col-md-4">
			<a href="{{url('#')}}">
				<div class="home-event-card">
					<h6>1st janaaury</h6>
					<h4>Upcoming event title</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<ul>
						<li><p><i class="fa fa-home"></i> 8:00am</p></li>
						<li><p><i class="fa fa-home"></i> kathmandu</p></li>
					</ul>
				</div>
			</a>
		</div>
	</div>
</div>






<div class="container pa-b home-blog-post-title">
	<h2><span>Abroad studies</span> blog post</h2>

	<div class="row">
		<div class="col-md-6">
			<a href="{{url('#')}}">
				<div class="home-blog-post-card">
					<div class="home-blog-post-image">
						<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="...">
					</div>
					<div class="home-blog-post-text">
						<div class="home-blog-post-date">
							<h6>10</h6>
							<br>
							<p>Dec 18</p>
						</div>
						<h4>Blog post title goes here</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-6">
			<a href="{{url('#')}}">
				<div class="home-blog-post-card">
					<div class="home-blog-post-image">
						<img src="{{url('public/images/1.jpg')}}" class="img-fluid" alt="...">
					</div>
					<div class="home-blog-post-text">
						<div class="home-blog-post-date">
							<h6>10</h6>
							<br>
							<p>Dec 18</p>
						</div>
						<h4>Blog post title goes here</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>



@endsection