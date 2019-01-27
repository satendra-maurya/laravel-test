<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    public function index() {
        return view('frontend.blog_lists');
    }

    
}
