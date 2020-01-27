@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
Album | Abroad Studies
@endsection


<!-- page content -->
@section('content')

<div class="container pa-t pa-b album-card-title">
	<h1>Our Album</h1>


	<div class="row">
		@foreach($gallery as $gal)
		<div class="col-md-4">
			<a href="gallery/<?php echo $gal->id ?>">
			
				<div class="album-card">
					<div class="album-card-image">
						<img src="{{url('/imageupload/'.$gal->image)}}" alt="{{$gal->altimage}}"class="img-fluid">
					</div>
					<h5>{{$gal->name}}</h5>
					<span class="album-span-border"></span>
				</div>
			</a>
		</div>
		@endforeach

		

	</div>
</div>

@endsection