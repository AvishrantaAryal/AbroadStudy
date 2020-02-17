@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
@section('page-title')	
{{$seo['title']}}
@endsection


@section('description',$seo['description'])
@section('keywords',$seo['keywords'])

<!-- page content -->
@section('content')


<div class="container pa-t pa-b">

	<div class="row">
		<div class="col-md-9">
			<div class="message-from-ceo-content">
				<h1>Message From CEO</h1>

				<div class="message-from-ceo-image">
					<img src="{{url('/imageupload/'.$msg['image'])}}" class="d-block w-100" alt="{{$msg['altimage']}}">

				</div>
				<p>{!!$msg['description']!!}
				</p>

				<h5>- {{$msg['name']}}</h5>

		</div>
	</div>

		<div class="col-md-3">
			@include('frontend.header.page-sidebar')
		</div>
	</div>
</div>




@endsection
