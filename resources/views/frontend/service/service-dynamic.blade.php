@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$servicedetails['seotitle']}}
@endsection
@section('description',$servicedetails['seodescription'])
@section('keywords',$servicedetails['keywords'])


<!-- page content -->
@section('content')

<div class="container pa-t pa-b service-dynamic-card">
	<h1>{{$servicedetails['title']}}</h1>

	<div class="service-dynamic-image">
		<img src="{{url('/imageupload/'.$servicedetails['image'])}}" alt="{{$servicedetails['altimage']}}" class="img-fluid">
	</div>

	<p>{!!$servicedetails['description']!!}</p>
</div>

<div class="container pa-b service-dynamic-more-title">
	<h3>Learn about more services</h3>
	<div class="row">
			@foreach($service as $ser)
		<div class="col-md-4">
				<a href="{{url('service-detail/'. $ser['id'])}} ">
				<div class="service-card">
					<h6>{{$loop->iteration}}</h6>
					<h4>{{$ser['title']}}</h4>
					<p>{!!$ser['summary']!!}</p>
				</div>
			</a>
		</div>
		@endforeach

		
		
</div>

@endsection