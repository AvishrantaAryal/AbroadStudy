@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$abroad->seotitle}}
@endsection
@section('description',$abroad->seodescription)
@section('keywords',$abroad->keywords)

<!-- page content -->
@section('content')

<div class="container pa-t pa-b">
	<div class="row">
		<div class="col-md-9">
			<div class="study-abroad-dynamic-content">
				<h1>{{$abroad->title}}</h1>

				<div class="study-abroad-dynamic-image">
					<img src="{{url('/imageupload/'.$abroad->image)}}" alt="{{$abroad->altimage}}" class="img-fluid" >
				</div>

				<p>
					{!!$abroad->description!!}
				</p>
			</div>

			<div class="study-abroad-dynamic-tab">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Why Australia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Education system</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cost & Scholorships</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p>{!!$abroad->why!!}</p>
					</div>

					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<p>{!!$abroad->education!!}</p>
					</div>

					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<p>{!!$abroad->cost!!}</p>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			@include('frontend.header.page-sidebar')
		</div>
	</div>
</div>

@endsection