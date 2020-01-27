@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$seo->title}}
@endsection


@section('description',$seo->description)
@section('keywords',$seo->keywords)

<!-- page content -->
@section('content')

<div class="container pa-t pa-b service-title">

	<h1>Our services</h1>

	<div class="row">
		@foreach($service as $ser)
		<div class="col-md-4">
			<a href="service-detail/<?php echo $ser->id ?>">
				<div class="service-card">
					<h6>{{$loop->iteration}}</h6>
					<h4>{{$ser->title}}</h4>
					<p>{!!$ser->summary!!}</p>
				</div>
			</a>
		</div>
		@endforeach

		
	
	</div>
</div>

@endsection