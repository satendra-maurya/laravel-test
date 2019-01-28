@extends('frontend.layouts.app')
@section('content')

<header class="masthead" style="background-image: url('img/{{isset($home_image)?$home_image->value:'home-bg.jpg'}}')">
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
        <div class="mx-auto">
          <div class="post-preview">
          @if($home_content)
              <p>{{ $home_content->value }}</p>
            @else
            <p>EazyDiner is your one-stop-shop for instant table bookings & a convenient dining experience. 
          It is an online reservation app that offers exciting & exclusive deals with every single reservation along with being a complete curated guide to discovering the newest & hottest places to eat & drink (eg: Indian Accent, Raasta, Shiro, Yauatcha, Hard Rock Cafe & many more) 
          with a choice variety of cuisines ( North-Indian, Chinese, Thai, Italian, Japanese etc.), various locations (Delhi NCR, Mumbai, Bengaluru, Kolkata, Chennai, Pune, Goa, Ahmedabad, Jaipur, Chandigarh & Dubai) 
          & special deals on every single booking​ with no reservation or cancellation charges! No more standing in lines or paying full price, EazyDiner makes eating out extra easy!
           </p>
           @endif
          </div>
          <hr>
        </div>
      </div>
    </div>

@stop