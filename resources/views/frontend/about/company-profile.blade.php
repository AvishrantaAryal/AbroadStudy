@extends('frontend.home-master')

<!-- page title -->
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
			<div class="company-profile-content">
				<h1>About Company</h1>

				<div class="company-profile-image">
					<img src="{{url('/imageupload/'.$abt['image'])}}" class="d-block w-100" alt="{{$abt['altimage']}}">
				</div>

				<p>
					{!!$abt->description!!}
				</p>
			</div>

		</div>

		<div class="col-md-3">
			@include('frontend.header.page-sidebar')
		</div>
	</div>
</div>




@endsection
