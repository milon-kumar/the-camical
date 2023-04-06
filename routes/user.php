<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user','as'=>'user.','middleware'=>['auth','user']],function (){
   Route::get('/dashboard',function (){
       return "user Dashboard";
   })->name('dashboard');
});
