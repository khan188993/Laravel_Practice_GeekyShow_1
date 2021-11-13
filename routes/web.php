<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;

// Include subview inside view in Laravel
// 00:00 include Directive
Route::view('include', 'include_practice.home_page',['data1'=>'passing data']);

// 11:04 include Directive with Controller
route::get('includecontroller/{data}',[studentController::class,'showInclude']);

// 21:30 includeIf Directive
// 23:38 includeWhen and includeUnless
// 29:45 each Directive
// 36:40 once Directive
