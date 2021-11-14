<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;
use GuzzleHttp\Middleware;

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


// redirect()->route('name');
// redirect(route('name'));

// Middleware in Laravel
// 00:00 Introduction to Middleware
// 00:34 Defining Middleware
// php artisan make:middleware name;
//php artisan verdon:publish --tag=laravel-errors


// 00:46 Register Middleware
// karnel.php te group,global,local register,

// 01:11 Global Middleware
// 12:24 Creating Default Error Pages
//php artisan verdon:publish --tag=laravel-errors

// 15:18 Route Middleware
// Middleware('name')


// 25:48 Middleware Groups
// 32:42 group Function

// Route::middleware(['auth', 'second'])->group(function () {
    
// });
// requestData see and hangle 

// 34:19 handle method

// 39:01 Passing Additional Data to Middleware
// Middleware('name:datapass')

Route::view('middleware', 'middleware')->middleware(['UnderConstruction:admin']);

Route::middleware(['grpMiddleware','VarMiddleWare'])->group(function () {
    //pass more route here,
    Route::view('route', 'route')->name('route_blade');
});