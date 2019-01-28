<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index() {
        $blogs = Blog::getBlog();
        return view('frontend.blog_lists', ['blogs' => $blogs]);
    }

    public function show($url) {
        
        $blog = Blog::where('url',$url)->first();
        return view('frontend.blog', ['blog' => $blog]);
    }
    
}
