@extends('frontend.layouts.app')
@section('content')
<header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>{{ trans('site.app_name') }} Blog</h1>
              <span class="subheading">About Us</span>
            </div>
          </div>
        </div>
      </div>
    </header>
 <!-- Main Content -->
 <div class="container">
      <div class="row">
      <div class="col-sm-12 text-left"> 
      <h1>About Us</h1>
      <p>WordPress is an open source Content Management System (CMS), 
      which allows the users to build dynamic websites and blogs. WordPress is 
      the most popular blogging system on the web and allows updating, 
      customizing and managing the website from its back-end CMS and components.</p>
      
        <p>The Content Management System (CMS) is a software which stores all the data such as text, 
        photos, music, documents, etc. and is made available on your website. It helps in editing, 
        publishing and modifying the content of the website.
WordPress was initially released on 27th May, 2003 by Matt Mullenweg and Mike Little. WordPress was announced as open source in October 2009</p>

      <hr>
      </div>
    </div>

@stop