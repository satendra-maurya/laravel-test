<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index() {
        return view('frontend.welcome');
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }
}
