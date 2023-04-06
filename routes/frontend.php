<?php

use App\Http\Controllers\Frontend\AssessmentController;
use App\Http\Controllers\Frontend\CarrierController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\DiseasesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\SubscriberController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contract',[HomeController::class,'contract'])->name('contract');
Route::get('/our-team',[HomeController::class,'ourTeam'])->name('our-team');
Route::get('/plant-disease',[HomeController::class,'ourTeam'])->name('plant-disease');
Route::get('/blog',[HomeController::class,'ourTeam'])->name('blog');
Route::get('/career',[HomeController::class,'ourTeam'])->name('career');

// Assessment

Route::get('/category-product/{slug}',[ProductController::class,'categoryProduct'])->name('category-product');
Route::get('/subcategory-product/{slug}',[ProductController::class,'subcategoryProduct'])->name('subcategory-product');
//Product
Route::get('/product/{slug}',[ProductController::class,'product'])->name('product');

Route::get('/list-product',[ProductController::class,'listProduct'])->name('list-product');

//diseases-subcategory
Route::get('/diseases-subcategory/{slug}',[DiseasesController::class,'diseasesSubcategory'])->name('diseases-subcategory');

//subcategory-diseases
Route::get('/subcategory-diseases/{slug}',[DiseasesController::class,'subcategoryDiseases'])->name('subcategory-diseases');

//Single Diseases

Route::get('/diseases/{slug}',[DiseasesController::class,'diseases'])->name('diseases');

//Carrier
Route::resource('/carrier',CarrierController::class);

//Comments
Route::resource('/comment',CommentController::class);

//Subscribe Newsletter
Route::post('/subscribe',[SubscriberController::class,'subscribe'])->name('subscribe');

