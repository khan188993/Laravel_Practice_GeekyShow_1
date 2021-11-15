<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;
use GuzzleHttp\Middleware;

// csrf na dile page expair asbe  route support check krte hobe,

Route::match(['get'],'form',[studentController::class,'showForm']);
Route::match(['get'],'form_sub',[studentController::class,'form_sub']);
Route::match(['post'],'form',[studentController::class,'submitForm']);