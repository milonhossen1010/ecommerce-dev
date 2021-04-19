<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //setting index
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.setting.logo', compact('setting'));
    }

    //Logo Update
    public function logoUpdate(Request $request)
    {
        $setting = Setting::find(1);

          //Image function
    if( $request -> hasFile('logo') ){
        $logo_img = $request -> file('logo');
        $logo_pic = strtolower($request->first_name). "'s-logo-photo" . rand(1,100) .'.'. $logo_img -> getClientOriginalExtension();
        $logo_img -> move(public_path('media/images'), $logo_pic );


        if ($setting  -> logo !== 'logo.png') {
             //  Existing image delete
            $logo_path = 'media/images/' . $setting ->logo;

            if(file_exists($logo_path)){
                unlink($logo_path);
            
            }

         }
   
    } else{
        $logo_pic = $setting ->logo;
    }



        $setting -> site_identify = $request -> title;
        $setting -> crt = $request -> crt;
        $setting -> logo = $logo_pic;
        $setting -> update();

        return redirect()->back()->with('success','Update successful!');
    }
}
