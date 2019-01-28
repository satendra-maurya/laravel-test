<!DOCTYPE html>
<html lang="en">

  <head>
    @include('frontend/layouts/partials/head')
  </head>

  <body>

    <!-- Navigation -->
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">{{ trans('site.app_name') }}</a>
    </div>
    <ul class="nav navbar-nav navbar-center">
      <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
      <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
      <li class="{{ Request::path() == 'blog' ? 'active' : '' }}"><a href="{{ route('blogLists') }}">Blog</a></li>
      <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

    <!-- Page Header -->
    
    @yield('content')

    <!-- Footer -->
    <footer>
      <!-- <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div> -->
    </footer>
@include('frontend/layouts/partials/foot')
  </body>

</html>
