@extends('frontend.layouts.app')
@section('content')
 <!-- Main Content -->
 <div class="container">
      <div class="row">
        <div class="mx-auto" style="padding-top:100px;">
          <div class="post-preview">
          <h2>Blogs</h2>
          </div>
          <hr>
          @foreach($blogs as $blog)
          <div class="post-preview">
            <a href="{{ route('blogDetail', ['url' => $blog->url])}}">
              <h2 class="post-title">
                {{$blog->title}}
              </h2>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{ $blog->author }}</a>
              on {{ date('d M Y', strtotime($blog->created_at))}}</p>
          </div>
          <hr>
          @endforeach
        
        </div>
      </div>
    </div>

@stop