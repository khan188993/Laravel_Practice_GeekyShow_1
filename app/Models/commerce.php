<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commerce extends Model
{
    use HasFactory;
    public $timestamps = false;

    //without assing here you can't insert data by model
    protected $fillable = ['name','city','phone'];

}
