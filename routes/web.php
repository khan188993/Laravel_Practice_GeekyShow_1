<?php

use Illuminate\Support\Facades\Route;


//?basic Route By view Return
// Route::get('/', function () {
//     return view('welcome');
// });

//2)route with parameter 
// Routes in Laravel
// 00:00 Introduction to Route

//1) return and echo all can work  // 04:47 Route Returning String
Route::get('/', function () {
    echo "nice";
    return "hello";
});

// 05:29 Route Parameter // 08:18 Routes Multiple Parameter
Route::get('post_id/{post_id}/comment_id/{comment_id}', function ($post_id,$comment_id) {
    
    return "post id: $post_id | comment id: $comment_id";

    /* if($post_id ==4){
        return "post id: $post_id | comment id: $comment_id";
    }else{
        return "not found";
    } */
});

// 10:16 Optional Route Parameter

Route::get('users/{name?}', function ($name = null) {
    return "hello $name"; //null na dile error khabo,
});
Route::get('default/{name?}', function ($name = 'sonam') {
    return "hello $name";
});
// 14:20 Route Parameter and Regular Expression
Route::get('reg/{name}/{id}', function ($name,$id) {
    return "Name : $name Id: $id";
})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);


// 18:49 Routes Parameter with Regular Expression helped Methods
//using regular explation method
Route::get('reg/{name}/{id}', function ($name,$id) {
    return "Name : $name Id: $id";
})->whereNumber('id')->whereAlpha('name');


// 20:09 Redirect Routes
Route::get('there', function () {
    return "there";
});

Route::redirect('here', 'there', 301); //by default 302 301 parmanent redirect,
Route::permanentRedirect('hello','ok');

// 22:14 Fallback Route
route::fallback(function(){
    // echo "Fallback";
    return "Fallback page";
});
// 23:25 Route Methods

Route::get('users/{id}', function ($id) {
    //run after hit url 
});

Route::post('users/{id}', function ($id) {
    // run after from submition 
});

//* put/patch/delete/options/

// 23:42 Using Multiple Methods

Route::match(['get', 'post','put'], '/user/profile', function () {
    //if need to run same route in 2methods like form submit and show,
});

Route::any('hello/{id}', function ($id) {
    //it will run in any method,
});

// 25:07 Coding



