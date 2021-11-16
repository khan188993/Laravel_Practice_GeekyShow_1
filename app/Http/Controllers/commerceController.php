<?php

/* 
*)how to use Eloquent model 
*)after create table define model name as same or define your model name into model,
*)add your model into your controller where you want to write,
*) for getting data commerce::get(), commerce::where(), new commerce for insert,
*)in you use commerce::create() then you have to define your column name into model,
*)
*/

namespace App\Http\Controllers;
use App\Models\commerce;

use Illuminate\Http\Request;

class commerceController extends Controller
{
    function show(){
        $students = commerce::get();
        $students = commerce::where('id',25)->first(); //here will can use all query builder for retrieveing data ;
        
        $students = commerce::where('id','29')->delete();

        $students = commerce::where('id',30)->update([

        ]);
        //eita likhle fillable e define korete hobe,
        $students = commerce::create([
            'name' =>'arfan',
            'city' =>'bangladesh',
            'phone' => '34324'
        ]);

        $students = new commerce;
        $students->name = 'fahim';
        $students->city = 'gulshan';
        $students->phone = '56456';
        $students->save();

        

        return view('commerce',['students'=>$students]);
    }
}
