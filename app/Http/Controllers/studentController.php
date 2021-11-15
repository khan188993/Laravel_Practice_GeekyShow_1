<?php

namespace App\Http\Controllers;

use App\Rules\upperCase;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterForm;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{

    function showDB()
    {

        //!query builder 
        //?retrieveing data 
        //foreach chara run korte hobe,
        $commerce_data = DB::table('commerce')->get(); //all data will get
        $commerce_data = DB::table('commerce')->first(); //first row will get, can't use foreach 
        $commerce_data = DB::table('commerce')->where('id','=','5')->get(); //5 id data will come as array,
        $commerce_data = DB::table('commerce')->where('id', '>', '5')->get(); //6-all id data will come as array,
        $commerce_data = DB::table('commerce')->where('id', '>', '5')->first(); //5 id data will come as obj first,
        $commerce_data = DB::table('commerce')->where('id', '>', '5')->get('name'); //column name dite pari,
        $commerce_data = DB::table('commerce')->where('id', '=', '5')->value('phone'); //column name dite pari,
        $commerce_data = DB::table('commerce')->where('id','5')->first(); //column name dite pari,
        $commerce_data = DB::table('commerce')->find(5); //column name dite pari,
        $commerce_data = DB::table('commerce')->pluck('name'); //all column name asbe like array,

        //orderby used korte hobe 
        DB::table('commerce')->orderBy('id')->chunk(5, function ($student) {
            echo "chunk data 1<br>";
            foreach ($student as $stu) {
                echo $stu->city . "<br>";
            }
        });

        $commerce_data = DB::table('commerce')->count(); //num of row count
        $commerce_data = DB::table('commerce')->max('id');
        $commerce_data = DB::table('commerce')->min('id');

        if (DB::table('commerce')->where('id', '5')->exists()) {
            echo "<br>yes";
        }

        if (DB::table('commerce')->where('id', '11')->doesntExist()) {
            echo "<br>not yes";
        }

        $commerce_data = DB::table('commerce')->get(['name', 'city']);
        $commerce_data = DB::table('commerce')->select('name', 'city')->get();

        $commerce_data = DB::table('commerce')->where('name', 'like', 'p%')->get(['name']);

        $commerce_data = DB::table('commerce')->orderBy('name')->whereBetween('id', [2, 5])->get();
        $commerce_data = DB::table('commerce')->orderBy('name','desc')->get()->whereBetween('id',[2,5]);

        $commerce_data = DB::table('commerce')->whereDate('pass_date','2021-03-10')->get();
        $commerce_data = DB::table('commerce')->whereMonth('pass_date','03')->get();
        $commerce_data = DB::table('commerce')->whereDay('pass_date','03')->get();
        $commerce_data = DB::table('commerce')->whereYear('pass_date','2020')->get();

        $commerce_data = DB::table('commerce')->oldest('create_at')->first();
        $commerce_data = DB::table('commerce')->inRandomOrder('create_at')->first();
        $commerce_data = DB::table('commerce')->latest('create_at')->first();

        $commerce_data = DB::table('commerce')->groupBy('id')->having('id', '>', '2')->get('id');

        //take and limit 5ta kore nibe and skip and offeset avoid korbe,
        $commerce_data = DB::table('commerce')->take(5)->get('id');
        $commerce_data = DB::table('commerce')->skip(3)->take(5)->get('id');

        $commerce_data = DB::table('commerce')->limit(5)->get('id');
        $commerce_data = DB::table('commerce')->offset(3)->limit(5)->get('id');

        //?insert part by query builder run korle true asbe noi false

        $commerce_data = DB::table('commerce')->insert([
            [
                'name' => 'arfan',
                'city' => 'dhaka',
                'phone' => 34324234,
            ],

            [
                'name' => 'shuvo',
                'city' => 'barishal',
                'phone' => 65645,
            ],
        ]);

        $commerce_data = DB::table('commerce')->insertOrIgnore([
            [
                'id' =>21,
                'name' => 'arfan',
                'city' => 'dhaka',
                'phone' => 34324234,
            ],
        ]);

        $commerce_data = DB::table('commerce')->insertGetId([
            
                'name' => 'arfan',
                'city' => 'dhaka',
                'phone' => 34324234,
            
        ]);

        //?update data  

        $commerce_data = DB::table('commerce')->where('id',3)->update([
            'name'=>'arfan khan',
            'city' => 'bangladesh',
            'phone' =>4324235,
        ]);

        // update or inserte,
        $commerce_data = DB::table('commerce')->updateOrInsert(
            ['city'=>'bangladesh'],
            ['name'=>'australia','phone'=>5436456],
            
        );

        //?delete data by query builder,

        $commerce_data = DB::table('commerce')->where('id','5')->delete();

        //?truncate table,full data will be delete,

        $commerce_data = DB::table('commerce')->truncate();

        // print_r($commerce_data);
        dd($commerce_data);

        return view('db_test', ['commerce_data' => $commerce_data]);
    }
}
