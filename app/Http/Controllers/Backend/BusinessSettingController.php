<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BusinessSettingController extends Controller
{
    public function setLocale($locale)
    {
        App::setLocale($locale);
        Session::put('locale',$locale);
        return redirect()->back();
    }

    public function aboutSetting()
    {
        return view('backend.admin.pages.setting.about_setting');
    }

    public function footerSetting()
    {
        return view('backend.admin.pages.setting.footer');
    }

    public function update(Request $request)
    {
        foreach ($request->types as $key => $type) {
            if($type == 'site_name'){
                $this->overWriteEnvFile('APP_NAME', $request[$type]);
            }
            if($type == 'timezone'){
                $this->overWriteEnvFile('APP_TIMEZONE', $request[$type]);
            }
            else {
                $business_settings = BusinessSetting::where('type', $type)->first();
                if($business_settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
                else{
                    $business_settings = new BusinessSetting;
                    $business_settings->type = $type;
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
            }
        }

        Artisan::call('cache:clear');
        toast('Data Updated ......... :)','success');
        return back();
    }

    public function settingHeorimage(Request $request)
    {
        $business_settings = BusinessSetting::where('type', 'hero_image')->first();
        if ($request->hasFile('hero_image')) {
            $value = $request->file('hero_image')->store('/images', ['disk' =>'my_files']);
            if ($business_settings != null) {
                $business_settings->value = $value;
                $business_settings->save();
            }
        }
        toast('Data Updated ......... :)','success');
        return back();
    }
    public function settingAboutimage(Request $request)
    {
        $business_settings = BusinessSetting::where('type', 'about_image')->first();
        if ($request->hasFile('about_image')) {
            $value = $request->file('about_image')->store('/images', ['disk' =>'my_files']);
            if ($business_settings != null) {
                $business_settings->value = $value;
                $business_settings->save();
            }
        }
        toast('Data Updated ......... :)','success');
        return back();
    }
}
