<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class author extends Model
{
    use HasFactory;
    function post(){
        return $this->HasMany(post::class);
    }
}
