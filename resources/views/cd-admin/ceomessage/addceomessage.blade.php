@extends('cd-admin.home-master')

@section('page-title')  
Add Ceo Message
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Add CEO Message
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">CEO Message</a></li>
        <li class="active">Add Ceo Message</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
       
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">CEO Message Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action= "{{url('ceomessagestore')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>

                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="name" id="name" value="{{old('name')}}" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                      <div class="text text-danger">{{$errors->first('image')}}</div>
                  <div class="col-sm-10">
                     <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="altimage" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-10">
                      <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
                  </div>
                </div>



                <div class="form-group">
                  <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span>
                  </label>
                  <div class="text text-danger">{{$errors->first('description')}}</div>
                  <div class="col-sm-10">
                      <textarea id="summernote" class="form-control" name="description" required=""  >
                {{old('description')}}
              </textarea>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                 <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success pull-right">Add CEO Message</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
        
        
      </div>
    </section>


</div>


@endsection