<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    function add_singer(){
        $singer = new Singer();
        $singer->singer_name = "Fahim khan";

        $singer->save();
        $songId = [4,3];
        $singer->song()->attach($songId);
        
    }

    function attach_song($id){
        $singer = singer::find($id);
        $singer->song()->attach(array(2));
    }

    //deattach_song song by singler id, full information,
    function deattach_song($id){
        $singer = singer::find($id);
        $singer->song()->detach(array(2));

    }

    //show singer by song id
    function show_singer($id){

        // $singer = song::find($id)->singer; //singer details 
        $song = song::find($id); //song details

        foreach ($song->singer as $singer){
            echo $singer . "<br>";
            echo $singer->singer_name . "<br>";
        }
    }

    
}
