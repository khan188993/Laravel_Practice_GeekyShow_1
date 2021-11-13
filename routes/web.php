<?php

use Illuminate\Support\Facades\Route;


// 00:00:00 Introduction to View
// 00:01:02 Creating a View = make name.blade.php in resource folder,
// 00:02:13 Create Route for View
Route::get('/', function () {
    return view('home');
});

// 05:29 Route Parameter pass into view // 08:18 Routes Multiple Parameter
// 00:25:20 Passing Data from Route to View
// 00:28:47 Accessing Data which is passed from Route to View {{$name}}
Route::get('post_id/{post_id}/comment_id/{comment_id}', function ($post_id,$comment_id) {
    return view('home')->with(['post_id'=>$post_id,'comment_id'=>$comment_id,'simple_pass'=>20]);
    return view('home',['post_id'=>$post_id,'comment_id'=>$comment_id,'simple_pass'=>'hello']);
});

// 00:07:25 Creating View File inside Folder and Creating Route 
Route::get('folder/file_1', function () {
    return view('folder.file_1');
});

Route::get('folder/subfolder/file_2', function () {
    return view('folder.subfolder.file_2');
});

//if need to see only view without pass parameter 
Route::view('onlyview', 'folder.file_1',['name'=>'arfan'])->name('routeName');

Route::get('redirect', function () {
    // return redirect(route('routeName'));
    return redirect()->route('routeName');
});




