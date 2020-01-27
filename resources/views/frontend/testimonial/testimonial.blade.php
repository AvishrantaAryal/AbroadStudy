@extends('frontend.home-master')

@section('page-title')	
{{$seo->title}}
@endsection


@section('description',$seo->description)
@section('keywords',$seo->keywords)

<!-- page content -->
@section('content')

<div class="container pa-t pa-b testimonial-card-bg">
	<h1>What Client Says About Us </h1>

	<div class="container-fluid pa-0">
		<div class="row">
			@foreach($test as $te)
			<div class="col-md-3">
				<div class="testimonial-card" data-toggle="modal" data-target="#exampleModal{{$te->id}}">
					<div class="testimonial-card-image">
						<img src="{{url('/imageupload/'.$te->image)}}" alt="{{$te->altimage}}" class="img-fluid">
					</div>
					<h5>{{$te->name}}</h5>
					<p>Read review</p>
					<span class="testimonial-span-border"></span>
				</div>
			</div>
			@endforeach

			
			
			
			
			
			
			
		</div>
	</div>
</div>


@foreach($tes as $t)
<div class="modal fade" id="exampleModal{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">{{$t->name}}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="testimonial-card-modal-content">
					<p>{!!$t->description!!}</p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endforeach
@endsection