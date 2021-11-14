<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;

// Include subview inside view in Laravel
// 00:00 include Directive
Route::view('include', 'include_practice.home_page', ['data1' => 'passing data']);

// 11:04 include Directive with Controller
route::get('includecontroller', [studentController::class, 'showInclude']);

Route::view('componet', 'welcome');

Route::view('contact', 'contact');
Route::view('hero', 'hero');
// css js adding route 
Route::view('css-js-adding', 'css-js-adding');

// name route create | can use in controller also
Route::view('resource-css-js-adding/{cat}', 'resource-css-js-adding')->name('css-js-adding');
 
//if i didn't add parameter in route it will come by optional,
// Missing required parameter for [Route: css-js-adding] if i didn't add this,
// Route::view('resource-css-js-adding', 'resource-css-js-adding')->name('css-js-adding');
Route::view('route', 'route')->name('route_blade');

// redirect()->route('name');
// redirect(route('name'));
