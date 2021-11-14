<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;

// Include subview inside view in Laravel
// 00:00 include Directive
Route::view('include', 'include_practice.home_page',['data1'=>'passing data']);

// 11:04 include Directive with Controller
route::get('includecontroller/{data}',[studentController::class,'showInclude']);

Route::view('componet','welcome');

Route::view('contact', 'contact');
Route::view('hero', 'hero');
// css js adding route 
Route::view('css-js-adding', 'css-js-adding');

