@extends('frontend.layouts.app')
@section('content')

<header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>{{ trans('site.app_name') }} Blog</h1>
              <span class="subheading">A Blog Site</span>
            </div>
          </div>
        </div>
      </div>
    </header>
 <!-- Main Content -->
 <div class="container">
      <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <p>@if (session('success'))
        <div class="alert alert-success">
                {{ session('success') }}
        </div>
        @endif
        </p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <div class="panel-body">
						<form id="contactForm" method="post" class="form-horizontal" action="{{ route('sendMail') }}">
            <input name="_token" hidden value="{!! csrf_token() !!}" />
              <div class="form-group">
								<label class="col-sm-4 control-label" for="firstname">Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="firstname" name="name" placeholder="Fullname" required/>
                  <p style="color:red"> {{ $errors->first('name') }} </p>
                </div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="username">Mobile</label>
								<div class="col-sm-8">
									<input type="number" class="form-control" id="username" name="mobile" placeholder="Mobile No." required min="10"/>
                  <p style="color:red"> {{ $errors->first('mobile') }} </p>
                </div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="email">Email</label>
								<div class="col-sm-8">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required />
                  <p style="color:red"> {{ $errors->first('email') }} </p>
                </div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="password">Message</label>
								<div class="col-sm-8">
                <textarea name="message" class="form-control" required></textarea>
                <p style="color:red"> {{ $errors->first('message') }} </p>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-4">
									<button type="submit" class="btn btn-primary" name="send" value="Send">Send</button>
								</div>
							</div>
						</form>
					</div>


      <!-- <div class="col-sm-12 text-left"> 
      <h1>Contact Us</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div> -->
      

      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  //alert('hello');
  $("#contactForm").validate();
});


(function(){
  console.log('helllo');
  
});
 
</script>
@stop