<div class="container-fluid header-top-card-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-4 header-top-card header-top-card-left">
				<p><i class="fas fa-map-marker-alt"></i> Address goes here</p>
			</div>

			<div class="col-md-4 header-top-card header-top-card-center">
				<p><i class="fas fa-phone"></i> Contact goes here</p>
			</div>

			<div class="col-md-4 header-top-card header-top-card-right">
				<p><i class="fas fa-envelope"></i> Email goes here</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="header-navbar-card">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse header-navbar-menu" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{url('/')}}">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{url('company-profile')}}">About Us</a>
					</li>


					<li class="nav-item">
						<a class="nav-link" href="{{url('service')}}">Services</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Study in abroad
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@foreach($header as $header)
							<a class="dropdown-item" href="{{url('study-abroad-dynamic/'.$header->id)}}">{{$header->title}}</a>
							@endforeach
							
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Classes
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							@foreach($head as $head)
							<a class="dropdown-item" href="{{url('class-dynamic/'.$head->title)}}">{{$head->title}}</a>
							@endforeach
							
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{url('testimonial')}}">Testimonials</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{url('album')}}">Gallery</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="{{url('contact')}}">Contact Us</a>
					</li>
				</ul>

			</div>
		</nav>
	</div>
</div>