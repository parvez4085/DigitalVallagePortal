<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Adminzone;
//Home index
Route::get('/',[Home::class,'default']);
Route::get('/about',[Home::class,'about']);

Route::get('/contact',[Home::class,'contact']);
Route::post('subscriber',[Home::class,'subscriber']);
Route::post('addfeedback',[Home::class,'addfeedback']);

Route::get('/admin',[Adminzone::class,'adminlogin']);
Route::post('/adminloginpost',[Adminzone::class,'loginpost']);
Route::get('/admin/dashboard',[Adminzone::class,'dashboard']);
Route::get('/admin/logout',[Adminzone::class,'logout']);
Route::get('/admin/addslider',[Adminzone::class,'addslider']);
Route::post('/admin/newslider',[Adminzone::class,'newslider']);

Route::get('/admin/testimonial',[Adminzone::class,'testimonial']);
Route::post('/admin/addtestimonial',[Adminzone::class,'addtestimonial']);
Route::get('/admin/status/{id}/{status}',[Adminzone::class,'testimonialstatus']);
Route::get('/admin/breakingnews',[Adminzone::class,'breakingnews']);
Route::post('/admin/addbreakingnews',[Adminzone::class,'addbreakingnews']);

Route::get('/admin/dm',[Adminzone::class,'dm']);
Route::post('/admin/adddm',[Adminzone::class,'adddm']);

Route::get('/admin/lekhpal',[Adminzone::class,'lekhpal']);
Route::post('/admin/addlekhpal',[Adminzone::class,'addlekhpal']);

Route::get('/admin/secretary',[Adminzone::class,'secretary']);
Route::post('/admin/addsecretary',[Adminzone::class,'addsecretary']);

Route::get('/admin/formerhelper',[Adminzone::class,'formerhelper']);
Route::post('/admin/addformerhelper',[Adminzone::class,'addformerhelper']);

Route::get('/admin/kotedar',[Adminzone::class,'kotedar']);
Route::post('/admin/addkotedar',[Adminzone::class,'addkotedar']);

Route::get('/admin/ves',[Adminzone::class,'ves']);
Route::post('/admin/addves',[Adminzone::class,'addves']);

Route::get('/admin/blo',[Adminzone::class,'blo']);
Route::post('/admin/addblo',[Adminzone::class,'addblo']);


Route::get('/admin/anganwadi',[Adminzone::class,'anganwadi']);
Route::post('/admin/addanganwadi',[Adminzone::class,'addanganwadi']);

Route::get('/admin/anganwadihelper',[Adminzone::class,'anganwadihelper']);
Route::post('/admin/addanganwadihelper',[Adminzone::class,'addanganwadihelper']);

Route::get('/admin/asha',[Adminzone::class,'asha']);
Route::post('/admin/addasha',[Adminzone::class,'addasha']);

Route::get('/admin/anm',[Adminzone::class,'anm']);
Route::post('/admin/addanm',[Adminzone::class,'addanm']);

Route::get('/admin/watchman',[Adminzone::class,'watchman']);
Route::post('/admin/addwatchman',[Adminzone::class,'addwatchman']);