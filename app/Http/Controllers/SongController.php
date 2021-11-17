<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function add_song()
    {
        $song = new Song();
        $song->song_title = "I Love you";
        $song->save();
        
    }

    //show song by singer id;
    function show_song($id){
        //    $song = singer::find($id)->song;
           $singer = singer::find($id);
           
           foreach($singer->song as $song){
               echo $song . "<br>";
           }
        }
}
