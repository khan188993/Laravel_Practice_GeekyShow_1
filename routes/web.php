<?php

use App\Http\Controllers\commerceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ShowController;
use GuzzleHttp\Middleware;
use  App\Http\Controllers\crudController;
use  App\Http\Controllers\AuthorController;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\IndexController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Models\commerce;

/* 
!One to many relationship,
*)make your two table by model, and add column by migration and 
*)after migration column add data make relation into your model which relation you want to make with each other,
*)after create relation you can get data and insert data by controller,
*)make route for your controller,

*)for add data in author you just simple add your data 
*)for adding data into post as there is a forein key which is related to author table so 
you have to find your author data and then call your post function and pass post new data,

*)to retrinve data form table just pass id and add related table model name,

*/

/* 
!many to many relationship -----------
*)add three table 1st and 2nd will be simple and 3rd will store of 2 forein key,
*)add belongstoMany and use 3rd table name as reference, 
*)add data into your 1st and 2nd table like simple way and attach and detach for song and singer add into 3nd table 
*)
relation::be short cut
*/

// Route::get('add_author',[AuthorController::class,'add_author']);
// Route::get('show_author/{id}',[AuthorController::class,'show_author']);
// Route::get('add_post/{id}',[PostController::class,'add_post']);
// Route::get('show_post/{id}',[PostController::class,'show_post']);
// Route::get('index_show/{id}',[IndexController::class,'index_show']);


route::get('add_song',[SongController::class,'add_song']);
route::get('add_singer',[SingerController::class,'add_singer']);
route::get('show_singer/{id}',[SingerController::class,'show_singer']);
route::get('attach_song/{id}',[SingerController::class,'attach_song']);
route::get('deattach_song/{id}',[SingerController::class,'deattach_song']);

Route::get('show_song/{id}',[SongController::class,'show_song']);