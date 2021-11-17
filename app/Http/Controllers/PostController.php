<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //add new post by author id;
    public function add_post($id)
    {
        $author = author::find($id);
        // dd($author);

        // simple adding 
        $post = new post();
        $post->p_title = 'The Beauty of England';
        $post->p_cat = 'Country';


        // $post->save(); //can't give this for save,
        $author->post()->save($post);
        
    }

    //show post based on author id;
    public function show_post($id)
    {
        $post = author::find($id)->post; //model name post
        return $post;

        foreach($post as $single_post){
            echo $single_post->p_title . "<br>";
        }
    }
}
