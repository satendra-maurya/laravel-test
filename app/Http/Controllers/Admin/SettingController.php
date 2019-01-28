<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;
use App\Http\Controllers\Controller;

use App\Models\Setting;
class SettingController extends Controller
{
    //

    public function index() {
        $home_content = Setting::where('name', 'home_content')->first();
        $home_image = Setting::where('name', 'home_image')->first();
        $email_send_to = Setting::where('name', 'email_send_to')->first();
        return view('admin.setting.index', ['home_content' => $home_content,
                                             'home_image' => $home_image,
                                             'email_send_to' => $email_send_to]);
    }


    public function store(SettingRequest $request) {
        $data = $request->all();

        foreach($data as $key=>$value){
           
            if($key == 'home_content' || $key == 'home_image' || $key == 'email_send_to') {
                //upload home image file 
                if($key == 'home_image'){
                    $file = $request->file('home_image');
                    $fileName = $file->getClientOriginalName();
                    $file->move('img',$fileName);
                    $value = $fileName;
                }

                $settings = Setting::where('name', $key)->first();
            
                if(!empty($settings)){
                    $settings->update(['value' => $value]);
                }else {
                    Setting::create(['name' => $key, 'value' => $value]);
                }
            }
            
        }

        return redirect()->back()->with('success','Setting has been updated successfully');;

    }
}
