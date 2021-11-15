<?php

namespace App\Http\Controllers;
use App\Rules\upperCase;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterForm;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{

    function showDB(){
        $commerce_data = DB::select('select * from commerce where id = ?', [1]); //data array show korbe, pele
        $commerce_data = DB::select('select id,name from commerce where id = ?', [1]);
        $commerce_data = DB::select('select id,name from commerce order by id');
        $commerce_data = DB::select('select id,name from commerce where id=:id',['id'=>3]);

        // Field 'phone' doesn't have a default value (SQL: insert into commerce (name,city) values (Dayle,sutrapur)) //true return korbe or false
        $commerce_data = DB::insert('insert into commerce (name,city,phone) values (?,?,?)', ['Dayle','sutrapur',334234243]);
        $commerce_data = DB::update('update commerce set name = ? where id = ?', ['Arfan',3]); 
        $commerce_data = DB::update('update commerce set name = ?,city =? where id = ?', ['Arfan','bangladesh',3]); //row affected will show = 2
        
        $commerce_data = DB::delete('delete from commerce where name = ?', ['Arfan']); //row affected will show = 2

        //direct value pass korbo no parameter, short cut db::select 
        $commerce_data = DB::unprepared('select name from commerce');
        $commerce_data = DB::unprepared('delete from commerce where id = 5');

        DB::transaction(function () {
            DB::update('update commerce set name = ? where id = ?', ['shanto',9]);
            DB::delete('delete from commerce where id = ?', [14]);
        });
        

        // dd($commerce_data);

        // return view('db_test',['commerce_data'=>$commerce_data]);
    }
}
