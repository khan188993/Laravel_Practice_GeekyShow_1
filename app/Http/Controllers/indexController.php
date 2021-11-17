<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\post;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index_show($id)
    {
        $author = author::find($id);

        // return $author; //by this i can show author data,
        foreach ($author->post as $post){
            print_r($post->p_title);
        }
    }
}
