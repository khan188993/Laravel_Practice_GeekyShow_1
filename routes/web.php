<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;
use GuzzleHttp\Middleware;
use  App\Http\Controllers\crudController;
/* 
!Cruds Steps..
*)making form of boootstrap,
*)making controller for route,
*)making view for controller 
*)pass view by controller,
*)

*)making route and show view by controller 
*)index,create, update, delete functions create and 
*)index e data retrive kore view te pass kore table akare row te show kre dibo and if condition check korebo table empty er,
*)form post hit e create method run korbo and tar bitor data insert kore dibo and view te with er shate status dibo, input empyt check e 
return with fill properly and valo moto filled thakle inserted successfully,
*) status gulo check kore show kore dibo,
*)table k row er boddhe if codtion lagiye check kore loop kore show kore dibo,
*)

*/

Route::get('/',[crudController::class,'index'])->name('index');
Route::POST('/',[crudController::class,'create']);
Route::get('edit/{id}',[crudController::class,'edit'])->name('edit');
Route::put('edit/{id}',[crudController::class,'update'])->name('update');
Route::get('delete/{id}',[crudController::class,'destroy'])->name('destroy');

