<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\Storage;

class Settings extends Controller
{
    public function setting(){
        return view("admin.settings",['title'=>__("admin.settings")]);
    }
    public function setting_save(){
        $data=$this->validate(request(),[
            'logo'=>v_image(),
            'icon'=>v_image(),
            'status'=>'',
            'keywords'=>'',
            'main_lang'=>'',
            'sitename_en'=>'',
            'sitename_ar'=>'',
            'message_maintenance'=>'',
            'description'=>'',
            'email'=>'',
        ],[],[
            'logo'=>__("admin.logo"),
            'icon'=>__("admin.icon")
        ]);
       if(request()->hasFile("logo")){
            $data['logo']=Up()->upload([
          //  'new_name'=>"",
            'file'=>"logo",
            'path'=>"settings",
            'upload_type'=>"single",
            'delete_file'=>setting()->logo,
            ]);
       }
       if(request()->hasFile("icon")){
            $data['icon']=Up()->upload([
                //  'new_name'=>"",
                  'file'=>"icon",
                  'path'=>"settings",
                  'upload_type'=>"single",
                  'delete_file'=>setting()->icon,
                  ]);
        }
       Setting::orderBy("id",'desc')->update($data);
       session()->flash('success',__("admin.updated_record"));
       return redirect(aurl("settings"));
    }
}
