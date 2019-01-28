@extends('layouts.admin')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
      <h1>
        Settings
       <!--  <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Settings</li>
      </ol>
    </section>
@stop

@section('content')
<section class="content">
      <!-- /.box -->
      <div class="row">
        <div class="col-md-12">
        @if (session('success'))
        <div class="alert alert-success">
                {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-error">
                {{ session('error') }}
        </div>
        @endif
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New</h3>
            </div>
          
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" enctype='multipart/form-data' method="post" action="{{route('admin.setting.store')}}">
            <input name="_token" hidden value="{!! csrf_token() !!}" />
            <input type="hidden" name="id" value="" >
              <div class="box-body">
                <div class="col-md-12 col-xs-12 col-sm-6">
               
              <div class="form-group">
                  <label for="title">Home Page Content</label>
                  <textarea name="home_content" class="form-control" id="discription">{{ isset($home_content) ? $home_content->value:''}}</textarea>
                  
                  <p style="color:red"> {{ $errors->first('home_content') }} </p>
                </div>
                <div class="form-group">
                  <label for="title">Email Send To</label>
                  <input type="text" name="email_send_to" value="{{ isset($email_send_to) ? $email_send_to->value:''}}" class="form-control" id="discription"/>
                  
                  <p style="color:red"> {{ $errors->first('email_send_to') }} </p>
                </div>
                <div class="form-group">
                  <label for="discription">Home Page Image</label>
                  <input type="file" name="home_image" class="form-control" id="title" placeholder="Enter title">
                  
                  <!-- <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" placeholder="Enter title"> -->
                  <p style="color:red"> {{ $errors->first('home_image') }} </p>
                  <img src="{{ url('/') }}/img/{{isset($home_image) ? $home_image->value:'home-bg.jpg'}}"  style="height:100px; width:100px"/>
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
@stop