@extends('layouts.admin')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
      <h1>
        Add New Blog
       <!--  <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New blog</li>
      </ol>
    </section>
@stop

@section('content')

 <!-- Content Header (Page header) -->
 
   
    <!-- Main content -->
    <section class="content">
      <!-- /.box -->
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
          
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="booking-form" method="post" action="{{route('admin.blog.store')}}">
            <input name="_token" hidden value="{!! csrf_token() !!}" />
            <input type="hidden" name="id" value="{{ $blog->id }}" >
              <div class="box-body">
                <div class="col-md-12 col-xs-12 col-sm-6">
               
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" value="{{ $blog->title }}" class="form-control" id="title" placeholder="Enter title">
                  <p style="color:red"> {{ $errors->first('title') }} </p>
                </div>
                <div class="form-group">
                  <label for="discription">Discription</label>
                  <textarea name="discription" class="form-control" id="discription">{{ $blog->discription }}</textarea>
                  <!-- <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter title"> -->
                  <p style="color:red"> {{ $errors->first('discription') }} </p>
                </div>
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" name="author" value="{{ $blog->author }}" class="form-control" id="author" placeholder="Enter title">
                  <p style="color:red"> {{ $errors->first('author') }} </p>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" class="form-control" id="status">
                    <option {{ $blog->status == 1? 'selected':''}} value="1">Active</option>
                    <option {{ $blog->status == 0? 'selected':''}} value="0">Deactive</option>
                  </select>
                  <p style="color:red"> {{ $errors->first('status') }} </p>
                </div>
              
                </div>
                </div>
                
        
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
              </div>
            </form>
          </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
    </section>

@section('myscripts')
<script type="text/javascript">
  $("#booking-form").submit(function() {
    $("#endtimeError").empty();
    var start_time = $("#start_time").val();
    var end_time = $("#end_time").val();
    var stt = new Date("November 13, 2016 "+start_time);
    stt = stt.getTime();
    var ett = new Date("November 13, 2016 "+end_time);
    ett = ett.getTime();
    
    if(stt>ett || stt == ett){
        // $("#start_time").after('<span class="error"><br>Start-time must be smaller then End-time.</span>');
    $("#endtimeError").html('<span style="color:red">To time must be after from-time.</span>');
        return false;
    }
    
    return true;
  });

  $(function() {
    var dt = new Date();
        dt.setDate(dt.getDate());
        $("#date").datepicker("option", "minDate", dt);
         });
</script>
@stop

@stop
