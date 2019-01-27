@extends('layouts.admin')

@section('title', 'AdminLTE')

@section('content_header')
<section class="content-header">
      <h1>
       Blogs
       <!--  <small>Control panel</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Blogs</li>
      </ol>
    </section>
@stop

@section('content')

        <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
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
            <div class="row">
              
            </div>
            </div>
            <!-- /.box-header -->
            <!-- /.row -->
            <div class="row">
              <div class="col-xs-12">
                <!-- <div class=""> -->
                  <div class="box-header">
                    <h3 class="box-title"></h3>
                    <div class="box-tools">
                      <div class="input-group input-group-sm">
                        <a href="{{ route('admin.blog.create') }}" type="button" class="btn btn-block btn-primary">Add New Blog</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-hover">
                      <tr>
                        <!-- <th>ID</th> -->
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publice Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                        @if(!$bookings->isEmpty())
                      @foreach($bookings as $booking)
                      <tr>
                        <td>{{$booking->title}}</td>
                        <td>{{ $booking->author}}</td>
                        
                        <td>{{date("d M Y",strtotime($booking->created_at))}}</td>
                        <td>{{ $booking->status==1?'Active':'Deactive'}}</td>
                        <td><a href="{{route('admin.blog.edit',['id' => $booking->id ])}}" class="label label-primary">Edit</a> 
                        <a href="{{route('admin.blog.delete',['id' => $booking->id ])}}" class="label label-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
                      </tr>
                       @endforeach
                      @else
                     <tr> <td colspan="11"> No Record found</td></tr>
                     @endif
                    </table>
                  </div>
                  <div class="pagination"> {{ $bookings->links() }} </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
        
      </div>
      <!-- /.row -->
    </section>
@stop