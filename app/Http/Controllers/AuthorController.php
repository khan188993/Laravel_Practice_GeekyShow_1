<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //add author details,
    public function add_author()
    {
        $author = new author;
        $author->name = 'shuvo Khan';
        $author->password = 'shuvokhan1893';
        $author->save();
    }

    //show author details by post id;
    public function show_author($id)
    {
        $author = post::find($id)->author; //model name author
        return $author;
    }
}
