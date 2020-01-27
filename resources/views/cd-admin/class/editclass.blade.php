@extends('cd-admin.home-master')

@section('page-title')  
Edit Class
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Classes
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Classes</a></li>
      <li class="active">Edit Classes</li>
    </ol>
  </section>


  <section class="content"> 
    <div class="row">
      <div class="col-md-12 box1">
        <div class="box box-default">
          <div class="box-header">
            <h3 class="box-title">Edit Classes</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal" method="post" action= "{{url('classupdate/'.$t->id)}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Class Title<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title')}}</div>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"required="" name="title" id="name" value="{{$t->title}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="image" value="{{$t->image}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alternative Image Name" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$t->altimage}}" >
                 </div>
               </div>

               <div class="form-group">
                <label for="Summary" class="col-sm-2 control-label">Summary<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('summary')}}</div>

                <div class="col-sm-10">
                 <textarea class="form-control" name="summary" required="" >
                  {{$t->summary}}
                </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('description')}}</div>

              <div class="col-sm-10">
               <textarea id="summernote" class="form-control" name="description" required="" >
                {{$t->description}}
              </textarea>
            </div>
          </div>
          <hr>
          <div class="form-group">
                  <label for="Course layout 1" class="col-sm-2 control-label">Course Content Title</label>
                  <div class="text text-danger">{{$errors->first('courselayouttitle1')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"name="courselayouttitle1" id="courselayouttitle1" value="{{$t->courselayouttitle1}}" >
                 </div>
               </div>
          <div class="form-group">
              <label for="Course Description 1" class="col-sm-2 control-label">Course Layout Description</label>
              <div class="text text-danger">{{$errors->first('courselayoutdes1')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="courselayoutdes1" >
                {{$t->courselayoutdes1}}
              </textarea>
            </div>
          </div>


            <div class="form-group">
                  <label for="Course layout 2" class="col-sm-2 control-label">Course Content Title 2</label>
                  <div class="text text-danger">{{$errors->first('courselayouttitle2')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"name="courselayouttitle2" id="courselayouttitle2" value="{{$t->courselayouttitle2}}" >
                 </div>
               </div>
          <div class="form-group">
              <label for="Course Description 2" class="col-sm-2 control-label">Course Layout Description 2</label>
              <div class="text text-danger">{{$errors->first('courselayoutdes2')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="courselayoutdes2" >
                {{$t->courselayoutdes2}}
              </textarea>
            </div>
          </div>
          
            
            <div class="form-group">
                  <label for="Course layout 3" class="col-sm-2 control-label">Course Content Title</label>
                  <div class="text text-danger">{{$errors->first('courselayouttitle3')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"name="courselayouttitle3" id="courselayouttitle3" value="{{$t->courselayouttitle3}}" >
                 </div>
               </div>
          <div class="form-group">
              <label for="Course Description 1" class="col-sm-2 control-label">Course Layout Description</label>
              <div class="text text-danger">{{$errors->first('courselayoutdes3')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="courselayoutdes3" >
                {{$t->courselayoutdes3}}
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
          <hr>

          <div class="form-group">
            <label for="SEO Title" class="col-sm-2 control-label">SEO Title<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('seotitle')}}</div>

            <div class="col-sm-10">
             <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{$t->seotitle}}" required="" >
           </div>
         </div>

         <div class="form-group">
          <label for="SEO Keywords" class="col-sm-2 control-label">SEO Keywords<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('keywords')}}</div>

          <div class="col-sm-10">
           <input type="text" class="form-control" required="" name="keywords" id="keywords" value="{{$t->keywords}}" >
         </div>
       </div>

       <div class="form-group">
        <label for="SEO Description" class="col-sm-2 control-label">SEO Description<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('seodescription')}}</div>

        <div class="col-sm-10">
         <input type="text" class="form-control" required="" name="seodescription"value="{{$t->seodescription}}">
       </div>
     </div>




   </div>
   <!-- /.box-body -->
   <div class="box-footer">
     <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
     <button type="submit" class="btn btn-success pull-right">Update</button>
   </div>
   <!-- /.box-footer -->
 </form>
 <!-- Date dd/mm/yyyy -->












</div>
</div>
</div>


</div>



</section>
</div>



<!-- /.box -->


@endsection



