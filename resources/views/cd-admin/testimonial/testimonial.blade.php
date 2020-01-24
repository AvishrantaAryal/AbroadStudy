@extends('cd-admin.home-master')

@section('page-title')
Testimonial
@endsection
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Testimonial</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Testimonial</a></li>
      <li class="active">View Testimonial</li>
    </ol>
  </section>



  <section class="content">


    <div class="row">
      <div class="box-header">
        <h3 class="box-title">
         <a href="{{url('/testimonial-add')}}"><button class="btn btn-success" style="margin-bottom: 10px;margin-left: 4px; ">Add Testimonial</button></a>
       </h3>
       @if(Session::has('success'))
       <div class="alert alert-success alert-dismissible">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data Inserted Successfully</strong>
        {{Session::get("message", '')}}
      </div>
      @elseif(Session::has('deletesuccess'))
      <div class="alert alert-danger alert-dismissible">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data Deleted Successfully</strong>
        {{Session::get("message", '')}}
      </div>
      @elseif(Session::has('updatesuccess'))
      <div class="alert alert-info alert-dismissible">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Data updated Successfully</strong>
        {{Session::get("message", '')}}
      </div>
      @endif
    </div>
    @foreach($re as $r)
    <div class="col-md-4">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">

          <h3 class="profile-username text-center">Reviewed By :{{$r->name}}</h3>
          <center>
           <img src="{{url('/imageupload/'.$r->image)}}" style="height:100px;"></p>
         </center>


         <?php $t = Carbon\carbon::parse($r->created_at)->format('Y M D'); ?>
         <pre><center><b>"Reviewed on : {{$t}}"</b></center></pre>
         <p>{{str_limit($r->description,$limit='100')}}</p>
         <p><form action="{{url('/testimonialstatus/'.$r->id)}}" method="POST">
          {{csrf_field()}}
          <div class="btn-group">

           @if($r->status == 'active')
           <button type="button" class="btn btn-success">Active</button>
           @else
           <button type="button" class="btn btn-danger">Inactive</button>
           @endif
           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          @if($r->status == 'active')
          <div class="dropdown-menu" role="menu" style="min-width: 0px;">
            <li> <button class="btn btn-danger" type="submit">Inactive</button>
            </li>
          </div>
          @else
          <div class="dropdown-menu" role="menu" style="min-width: 0px;">
            <li> <button class="btn btn-success" type="submit">Active</button>
            </li>
          </div>
          @endif
        </div>
      </form>

    </p>
    <div class="pull-right">
      <a href="{{url('/edittestimonial/'.$r->id)}}"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
     <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$r->id}}"><i class="fa fa-trash"> </i></button>
     <button class="btn btn-default" data-toggle="modal" data-target="#view{{$r->id}}"><i class="fa fa-eye"> </i></button>
   </div>              
 </div>
 <!-- /.box-body -->
</div>
{!!$re->links()!!}
</div>
@endforeach


</section>

</div>



<!-- Modal Deletw-->


@foreach($er as $t)
<div class="modal modal-danger fade" id="modal-danger{{$t->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Message from web</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete ?&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
          <a href="{{url('/deletetestimonial/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

@endforeach



@foreach($er as $t)
  <div class="modal fade" id="view{{$t->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="view"><strong>Reviewed By :</strong>  {{$t->name}} </h3>
          <p>
            <center> <img src="{{url('/imageupload/'.$t->image)}}" style="height:150px;">
            </center>
          </p>
        </div>
        <div class="modal-body">
          <p> @if($t->status=='active')
            <div class="btn btn-success">Active</div>
            @else
            <div class="btn btn-danger">Inactive</div>
            @endif
          </p> 
          <p><h4><strong>Messaage:</strong></h4>{!!$t->description!!}    </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
@endforeach


  @endsection