@extends('cd-admin.home-master')

@section('page-title')  
Add Classes
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Classes
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Classes</a></li>
      <li class="active">Add Classes</li>
    </ol>
  </section>


  <section class="content"> 
    <div class="row">
      <div class="col-md-12 box1">
        <div class="box box-default">
          <div class="box-header">
            <h3 class="box-title">Add Classes</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal" method="post" action= "{{url('storeclass')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Class Title<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title')}}</div>

                  <div class="col-sm-10">
                    <input type="text" class="form-control"required="" name="title" id="name" value="{{old('title')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>

                  <div class="col-sm-10">
                    <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alternative Image Name" class="col-sm-2 control-label">Image<br>Description<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
                 </div>
               </div>

               <div class="form-group">
                <label for="Summary" class="col-sm-2 control-label">Summary<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('summary')}}</div>

                <div class="col-sm-10">
                 <textarea class="form-control" name="summary" required="" >
                  {{old('summary')}}
                </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="Description" class="col-sm-2 control-label">Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('description')}}</div>

              <div class="col-sm-10">
               <textarea id="summernote" class="form-control" name="description" required="" >
                {{old('description')}}
              </textarea>
            </div>
          </div>
          <hr>
          <div class="form-group">
                  <label for="Course layout 1" class="col-sm-2 control-label">Course Content Title</label>
                  <div class="text text-danger">{{$errors->first('courselayouttitle1')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"name="courselayouttitle1" id="courselayouttitle1" value="{{old('courselayouttitle1')}}" >
                 </div>
               </div>
          <div class="form-group">
              <label for="Course Description 1" class="col-sm-2 control-label">Course Layout Description</label>
              <div class="text text-danger">{{$errors->first('courselayoutdes1')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="courselayoutdes1" >
                {{old('courselayoutdes1')}}
              </textarea>
            </div>
          </div>


            <div class="form-group">
                  <label for="Course layout 2" class="col-sm-2 control-label">Course Content Title 2</label>
                  <div class="text text-danger">{{$errors->first('courselayouttitle2')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"name="courselayouttitle2" id="courselayouttitle2" value="{{old('courselayouttitle2')}}" >
                 </div>
               </div>
          <div class="form-group">
              <label for="Course Description 2" class="col-sm-2 control-label">Course Layout Description 2</label>
              <div class="text text-danger">{{$errors->first('courselayoutdes2')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="courselayoutdes2" >
                {{old('courselayoutdes2')}}
              </textarea>
            </div>
          </div>
          
            
            <div class="form-group">
                  <label for="Course layout 3" class="col-sm-2 control-label">Course Content Title</label>
                  <div class="text text-danger">{{$errors->first('courselayouttitle3')}}</div>

                  <div class="col-sm-10">
                   <input type="text" class="form-control"name="courselayouttitle3" id="courselayouttitle3" value="{{old('courselayouttitle3')}}" >
                 </div>
               </div>
          <div class="form-group">
              <label for="Course Description 1" class="col-sm-2 control-label">Course Layout Description</label>
              <div class="text text-danger">{{$errors->first('courselayoutdes3')}}</div>

              <div class="col-sm-10">
               <textarea class="form-control" name="courselayoutdes3" >
                {{old('courselayoutdes3')}}
              </textarea>
            </div>
          </div>


          
          <div class="form-group">
            <label for="Status" class="col-sm-2 control-label">Status<span style="color: red;">*</span>
            </label>
            <div class="text text-danger">{{$errors->first('status')}}</div>
            <div class="col-sm-10">
              <label>
                <input type="radio" class="minimal" name="status" value="active" required="" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
                Active
              </label>
              <label>
                <input type="radio" class="minimal" name="status" value="inactive"required="" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
                Inactive
              </label>

            </div>
          </div>

          <hr>

          <div class="form-group">
            <label for="SEO Title" class="col-sm-2 control-label">SEO Title<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('seotitle')}}</div>

            <div class="col-sm-10">
             <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" required="" >
           </div>
         </div>

         <div class="form-group">
          <label for="SEO Keywords" class="col-sm-2 control-label">SEO Keywords<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('keywords')}}</div>

          <div class="col-sm-10">
           <input type="text" class="form-control" required="" name="keywords" id="keywords" value="{{old('keywords')}}" >
         </div>
       </div>

       <div class="form-group">
        <label for="SEO Description" class="col-sm-2 control-label">SEO Description<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('seodescription')}}</div>

        <div class="col-sm-10">
         <input type="text" class="form-control" required="" name="seodescription"value="{{old('seodescription')}}">
       </div>
     </div>




   </div>
   <!-- /.box-body -->
   <div class="box-footer">
     <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
     <button type="submit" class="btn btn-success pull-right">Add Class</button>
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



