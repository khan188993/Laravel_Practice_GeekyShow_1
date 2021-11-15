<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;
use GuzzleHttp\Middleware;

Route::get('/',[studentController::class,'showDB']);