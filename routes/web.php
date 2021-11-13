<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;

// 00:00 Introduction to Controller
//app/http/controller,

// 05:05 Defining Controller Class
// php artisan make:controller studentController -r = resource soho,
//php artisan make:controller ShowController --invokable = for single function

// 06:20 Creating Route for Controller Class
Route::get('controller',[studentController::class,'show']);

// 10:00 Getting Parameter in Controller
route::get('controllerWithPara/{name}',[studentController::class,'showWithPara']);

// 20:15 Returning View from Controller Class
// 33:45 Getting URL Parameter in Controller Class and Passing to View
// 38:36 Passing Data from Controller to View

// 42:50 Multiple Methods inside Controller
route::get('controllerwithview/{name}',[studentController::class,'showByview']);

// 47:21 Single Action Controller
//jodi ektai function run er need hoi,
route::get('singleControler/{id}',ShowController::class);
