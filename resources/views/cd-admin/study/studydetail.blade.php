@extends('cd-admin.home-master')
@section('page-title')  
Study Destination Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
  <h3>{{$about->title}}</h3>

   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Study Destination</a></li>
        <li class="active">View Study Destination Details</li>
      </ol>
  </section>
  

  <!-- Main content -->
    <section class="content">
      <div>
      </div>
       <div class="row">

        <div class="col-md-12"><center>

        <img src="{{url('/imageupload/'.$about->image)}}" style="height:300px;"></p>
      </center>

      <div class="col-md-6">
        <strong>Summary</strong>
        <p>{!!$about->summary!!}</p>
      </div>

      <div class="col-md-6">
        <strong>Description</strong>
        <p>{!!$about->description!!}</p>
      </div>

      <div class="col-md-6">
        <strong>Why There</strong>
        <p>{!!$about->why!!}</p>
      </div>

      <div class="col-md-6">
        <strong>Education System</strong>
        <p>{!!$about->education!!}</p>
      </div>

      <div class="col-md-6">
        <strong>Cost and Scholorship</strong>
        <p>{!!$about->cost!!}</p>
      </div>

      
  </section>
  
  </div>
</div>




       
@endsection