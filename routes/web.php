<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::prefix('admin')->group(function (){
//    Route::get('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewindex'])->name('hello');
//    Route::get('/aboutus',[\App\Http\Controllers\cuong_demo_controller::class,'viewaboutus'])->name('aboutus');
//    Route::get('/contact',[\App\Http\Controllers\cuong_demo_controller::class,'viewcontact'])->name('contact');
//    Route::post('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewpost'])->name('hellopost');
//    Route::get('/updateproduct/{id}',[\App\Http\Controllers\cuong_demo_controller::class,'update_product'])->name('update_product');
//    Route::post('/addproduct',[\App\Http\Controllers\cuong_demo_controller::class,'add_product'])->name('add_product');
//});
//router của hjnh
//
//Route::prefix('bai-tap-cua-hjnh')->group(function (){
//    Route::get('/login',[\App\Http\Controllers\Hjnh_demo_faceook_controller::class,'view_login'])->name('view_login');
//    Route::post('/register',[\App\Http\Controllers\Hjnh_demo_faceook_controller::class,'register'])->name('register');
//});
//router của hjnh


//routers của cường
//Route::prefix('baitapcuacuong')->group(function (){
//    Route::get('/login',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'vew_login'])->name('view_login');
//    Route::post('/register',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'register'])->name('register');
//    Route::post('/articlepost',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articlepost'])->name('article_post');
//    Route::get('/articleget',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articleget'])->name('article_get');
//});
//routers của cường

// Router của Ngọc Anh

//Route::prefix('bai-tap-cua-ngoc-anh')->group(function (){
//    Route::get('/login',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'viewLogin']);
//
//    Route::post('/register',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'viewRegister'])->name('register');
//
//    Route::post('/login',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'login'])->name('login');
//});
// Router của Ngọc Anh
//Route::get('/index',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'viewIndex'])->name('ngocanhIndex');
//Route::post('/register',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'viewRegister'])->name('ngocanhregister');
//Route::post('/login',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'login'])->name('ngocanhLogin');
//Route::get('/profile',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'profile'])->name('ngocanhProfile');
//Route::post('/add-status',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'addStatus'])->name('addStatus');
//Route::get('/home',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'home'])->name('home');
//Route::get('/logout',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'logout'])->name('logout');
//bai tap ve nha
Route::get('/data-handle/{id}/path',[\App\Http\Controllers\DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string',[\App\Http\Controllers\DataHandleController::class,'handleQueryString']);
Route::get('data-handle/form',[\App\Http\Controllers\DataHandleController::class,'returnForm']);
Route::post('data-handle/form',[\App\Http\Controllers\DataHandleController::class,'processForm']);
