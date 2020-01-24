@extends('cd-admin.home-master')

@section('page-title')  
Edit Testimonial
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  Edit Testimonial
  </h1>
  
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Testimonial</a></li>
        <li class="active">Edit Testimonial</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
       
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Testimonial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" class="form-horizontal" action= "{{url('/updatetestimonial/'.$t->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('name')}}</div>

                <div class="col-sm-10">
                  <input type="text" class="form-control"required="" name="name" id="name" value="{{$t['name']}}" >
                </div>
              </div>

              <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Image</label>
                <div class="text text-danger">{{$errors->first('image')}}</div>
                <div class="col-sm-10">
                 <input type="file" class="form-control" id="image" name="image" value="{{$t['image']}}">
               </div>
             </div>
             <div class="form-group">
              <label for="altimage" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>

              <div class="col-sm-10">
                <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$t['altimage']}}" >
              </div>
            </div>




            <div class="form-group">
              <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span>
              </label>
              <div class="text text-danger">{{$errors->first('description')}}</div>
              <div class="col-sm-10">
                <textarea class="form-control"  name="description" required=""  >
                  {!!$t['description']!!}
                </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="Status" class="col-sm-2 control-label">Status<span style="color: red;">*</span>
              </label>
              <div class="text text-danger">{{$errors->first('status')}}</div>
              <div class="col-sm-10">
                <label>
                  <input type="radio" class="minimal" <?php echo $t->status == 'active' ? 'checked' :  '' ?> checked name="status" value="active">Active
                </label>
                <label>
                  <input type="radio"  class="minimal"  <?php echo $t->status == 'inactive' ? 'checked' :  '' ?> name="status" value="inactive">Inactive
                </label>

              </div>
            </div>


            <div class="modal-footer">
                <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
              <button type="submit" class="btn btn-primary pull-right">Update</button>
            </div>
          </div>
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