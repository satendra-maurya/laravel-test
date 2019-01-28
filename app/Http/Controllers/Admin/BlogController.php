<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    //
    public function index() {
        $bookings = Blog::paginate(20);
        return view('admin.blog.index', ['bookings' => $bookings]);
    }


    public function create() {
        $blog = new Blog();
        return view('admin.blog.create',['blog' => $blog]);
    }

    public function store(BlogRequest $request) {
       
       $formData = $request->all();
       $formData['url'] = str_replace(" ", "-", $request->title);
       
       if(isset($formData['id'])) {
            $blog = Blog::find($formData['id']);
            
            $blog->update($formData);
            return redirect()->route('admin.blog')->with('success','Blog has been updated successfully');
       }

       if(Blog::create($formData)) {
           return redirect()->route('admin.blog')->with('success','Blog has been created successfully');
       }
       return redirect()->back()->with('error','Something went wrong! Please try again.');

    }


    public function edit(Request $request) {
        $blog = Blog::findOrFail($request->id);
        return view('admin.blog.create', ['blog' => $blog]);
    }


    public function delete(Request $request) {
            $blog = Blog::findOrFail($request->id);
            $blog->delete();
            return redirect()->route('admin.blog')->with('success','Blog has been deleted successfully');
    }
}
