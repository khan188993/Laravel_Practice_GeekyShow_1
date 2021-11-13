<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    function show(){
        return "Simple String";
    }

    function showWithPara($name){
        return $name;
    }

    function showByview($para1){
        $controller_para = "controller Para";
        return view('folder.file_1',['name'=>$para1,'controller_p'=>$controller_para]);
    }


    function showInclude($data){
        $students = ['arfan','shuvo','fahim'];
        $name = 'adnan';
        $check = $name === 'arfan'?true:false;
        return view('include_practice.home_page',['data1'=>$data,'check'=>$check,'students'=>$students]);
    }
}
