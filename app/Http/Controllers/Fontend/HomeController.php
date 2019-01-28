<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;

class HomeController extends Controller
{
    //
    public function index() {
        $home_content = Setting::where('name', 'home_content')->first();
        $home_image = Setting::where('name', 'home_image')->first();
        return view('frontend.welcome', ['home_content' => $home_content, 'home_image' => $home_image]);
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function sendMail(ContactRequest $request) {
        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'message' => $request->message,
            ];
            
        $email_send_to = Setting::where('name', 'email_send_to')->first();
        Mail::to($email_send_to->value)->send(new EnquiryMail($data));
        return redirect()->back()->with('success','Thank you for enquiry. I will get back to you as soon as possible!.');
    }
}
