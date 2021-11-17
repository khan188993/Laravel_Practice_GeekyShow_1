<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    function singer(){
        return $this->belongsToMany(singer::class,'single_song_tables');
    }

    
}
