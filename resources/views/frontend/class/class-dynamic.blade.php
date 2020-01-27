@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$class->seotitle}}
@endsection
@section('description',$class->seodescription)
@section('keywords',$class->keywords)

<!-- page content -->
@section('content')

<div class="container pa-t pa-b">
	<div class="row">
		<div class="col-md-9">
			<div class="class-dynamic-content">
				<h1>{{$class->title}}</h1>

				<div class="class-dynamic-image">
					<img src="{{url('/imageupload/'.$class->image)}}" alt="{{$class->altimage}}" class="img-fluid" >
				</div>

				<p>
					{!!$class->description!!}
				</p>
			</div>

			<div class="class-dynamic-tab">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">{{$class->courselayouttitle1}}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">{{$class->courselayouttitle2}}</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">{{$class->courselayouttitle3}}</a>
					</li>
				</ul>

				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p>{!!$class->courselayoutdes1!!}</p>
					</div>

					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<p>{!!$class->courselayoutdes2!!}</p>
					</div>

					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<p><p>{!!$class->courselayoutdes3!!}</p></p>
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