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
			<div class="our-team-content">
				<h1>Our Team</h1>

				<div class="container-fluid pa-0">
					<div class="row">
						
						@foreach($team as $teams)

						<div class="col-md-4">
							<div class="our-team-card">
								<div class="our-team-card-image">
									<img src="{{url('/imageupload/'.$teams['image'])}}" alt="{{$teams['altimage']}}" class="img-fluid">
								</div>
								<h5>{{$teams['name']}}</h5>
								<p>{{$teams['summary']}}</p>
							</div>
						</div>
						@endforeach

						
						



						

						
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
