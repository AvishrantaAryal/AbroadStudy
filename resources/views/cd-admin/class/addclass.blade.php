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
        <li><a href="#">Class</a></li>
        <li class="active">Add Class</li>
      </ol>
    </section>


<section class="content">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<div class="row">
  
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Add Class</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" id="dynamic_form"  method="post" action= "{{url('storeclass')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <div class="form-group">
              
              <label for="title" >Class Name <span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('title')}}</div>
              <input type="text" class="form-control"required="" name="title" id="title" value="{{old('title')}}" >
            </div>
              
              <label for="Image"> Image<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('image')}}</div>
              <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
            </div>  

            <div class="form-group">
              <label for="Alternative Image Name" > Image Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>
              <input type="textarea" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
            </div>

            <div class="form-group">
              
              <label for="description" >Summary<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('summary')}}</div>
              <textarea rows="10" cols="80" name="summary" required="" >
                {{old('summary')}}
              </textarea>
            </div>

            <div class="form-group">
              
              <label for="description" > Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('description')}}</div>
              <textarea id="summernote" rows="10" cols="80" name="description" required="" >
                {{old('description')}}
              </textarea>
            </div>

             

            <div class="form-group">
              
              <label for="seotitle" >SEO Title<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('seotitle')}}</div>
              <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" required="" >
            </div>

            <div class="form-group">
              
              <label for="keywords" >SEO Keywords<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('keywords')}}</div>
              <input type="textarea" class="form-control" required="" name="keywords" id="keywords" value="{{old('keywords')}}" >
            </div>

            <div class="form-group">
              
              <label for="seodescription" >SEO Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('seodescription')}}</div>
              <input type="textarea" class="form-control" required="" name="seodescription"value="{{old('seodescription')}}">
            </div>
            <div class="form-group" >
              
              <label for="status">Status<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('status')}}</div>
               <label>
                <input type="radio" class="minimal" name="status" value="active" required="" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
                Active
              </label>
              <label>
                <input type="radio" class="minimal" name="status" value="inactive"required="" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
                Inactive
              </label>
            </div>
            <div class="form-group" >
              
              <label for="status">Class Layouts</label>
               <div class="table-responsive">
                <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="35%">Title</th>
                    <th width="35%">Description</th>
                    <th width="30%">Action</th>
                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                                <td colspan="2" align="right">&nbsp;</td>
                                <td>
                 
              
                 </td>
                </tr>
               </tfoot>
           </table>
                   </div>
                 </div>
          
            <button class="btn btn-success pull-right" type="submit">Add Class</button>
          <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
        </form>
          
      </div>
    </div>
  </div>



</div>



</section>
</div>

      

      <!-- /.box -->


    <style type="text/css">
      .test1 
      {
        margin-left:15px;
        margin-right: 15px; 
      }
      .box1
      {
        margin-bottom: 15px;
        margin-top: 15px;
      }
    </style>

    <script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" name="course_parts_title[]" class="form-control" /></td>';
        html += '<td><input type="text" name="course_parts_description[]" class="form-control" /></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 // $('#dynamic_form').on('submit', function(event){
 //        event.preventDefault();
 //        $.ajax({
 //            url:'',
 //            method:'post',
 //            data:$(this).serialize(),
 //            dataType:'json',
 //            beforeSend:function(){
 //                $('#save').attr('disabled','disabled');
 //            },
 //            success:function(data)
 //            {
 //                if(data.error)
 //                {
 //                    var error_html = '';
 //                    for(var count = 0; count < data.error.length; count++)
 //                    {
 //                        error_html += '<p>'+data.error[count]+'</p>';
 //                    }
 //                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
 //                }
 //                else
 //                {
 //                    dynamic_field(1);
 //                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
 //                }
 //                $('#save').attr('disabled', false);
 //            }
 //        })
 // });

});
</script>

    @endsection



