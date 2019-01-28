@extends('frontend.layouts.app')
@section('content')
<header class="masthead" style="background-image: url('../img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>{{ trans('site.app_name') }} Blog</h1>
              <span class="subheading">{{ $blog->title }} </span>
            </div>
          </div>
        </div>
      </div>
    </header>
 <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-left"> 
            <h1>{{ $blog->title }}</h1>
            <p> {{ $blog->discription }}</p>
            <hr>
       </div>
      </div>
    </div>

@stop