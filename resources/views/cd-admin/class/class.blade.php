@extends('cd-admin.home-master')

@section('page-title')  
View Classes
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Classes List
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Class</a></li>
        <li class="active">View Class</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                 <a href="{{url('/class-add')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Class</button></a>
              </h3>
              @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
          <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Inserted Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('deletesuccess'))
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Deleted Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>SN</th>
                  <th>Name</th>
                   <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($studies as $pa)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$pa->title}}</td>
                  <td height="75px">
                     <form action="{{url('/classstatus/'.$pa->id)}}" method="POST">
                      {{csrf_field()}}
                    <div class="btn-group">

                 @if($pa->status == 'active')
                 <button type="button" class="btn btn-success">Active</button>
                 @else
                  <button type="button" class="btn btn-danger">Inactive</button>
                  @endif
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  @if($pa->status == 'active')
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
                     </td>
                  <td>
                    <a href="{{url('/editclass/'.$pa->id)}}"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>
                    <a href="{{url('/classdetail/'.$pa->id)}}"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a>

                 </td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

  </div>


 
            
        

        <!--MODEL-->


@foreach($er as $t)


<!--Delete-->

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
               <a href="{{url('/deleteclass/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


        <!--Edit-->
   
  

<style type="text/css">
  .p{
    width: 100px;
  }
</style>

 
@endforeach

@endsection