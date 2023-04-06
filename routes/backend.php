<?php

use App\Http\Controllers\Backend\BusinessSettingController;
use App\Http\Controllers\Backend\CarrierController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DiseasesCategoryController;
use App\Http\Controllers\Backend\DiseasesController;
use App\Http\Controllers\Backend\DiseasesSubCategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubscriberController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth','admin']],function (){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('/category',CategoryController::class);
    Route::resource('/sub-category',SubCategoryController::class);
    Route::resource('/product',ProductController::class);
    Route::resource('/subscriber',SubscriberController::class);


    //PLANT & DISEASE - Category
    Route::resource('/diseases-category',DiseasesCategoryController::class);

    //PLANT & DISEASE - Category
    Route::resource('/diseases-sub-category',DiseasesSubCategoryController::class);

    //PLANT & DISEASE - Diseases
    Route::resource('/diseases',DiseasesController::class);
    Route::post('/subcategory',[DiseasesController::class,'getSubCategory'])->name('getDSCategory');

    //Home Page Setting
    Route::get('/home-page',[BusinessSettingController::class,'homePageSetting'])->name('homepage.setting');
    Route::get('/footer-setting',[BusinessSettingController::class,'footerSetting'])->name('footer.setting');
    Route::resource('/slider',SliderController::class);
    //Website Setting

    //Carrier
    Route::resource('/carrier',CarrierController::class);

    //About Setting
    Route::get('/about-setting',[BusinessSettingController::class,'aboutSetting'])->name('about-setting');

    //Setting
    Route::post('/setting',[BusinessSettingController::class,'update'])->name('setting.update');
    Route::post('/setting-heorimage',[BusinessSettingController::class,'settingHeorimage'])->name('homepage.setting.heorimage');
    Route::post('/setting-aboutimage',[BusinessSettingController::class,'settingAboutimage'])->name('homepage.setting.aboutimage');

    //Route
    Route::get('/others-carrer',[BusinessSettingController::class,'othersCarrer'])->name('others.carrer');

    //Localization
    Route::get('/locale/{locale}',[BusinessSettingController::class,'setLocale'])->name('locale')->withoutMiddleware(['auth','admin']);

});

