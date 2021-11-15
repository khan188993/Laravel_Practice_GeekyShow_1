<?php

namespace App\Http\Controllers;
use App\Rules\upperCase;
use Illuminate\Http\Request;

class studentController extends Controller
{

    function showForm(){
        return view('form');
    }

    function submitForm(Request $request){

        //form validate na hole old data thakle password bade sob guloi thakbe data,

        $validationData = $request->validate([
            // 'username'=>'required',
            // 'username'=>'required|min:5',

            'username'=>['required',new upperCase],
            'password'=>['required','min:5',function($attribute,$value,$fail){
                if(strtoupper($value)!==$value){ //fail hole run hobe,
                    $fail(":attributes should be uppercase");
                }
            }]
        ]);

       

        $requestData = $request->except('_token');

        

        //validation na hobe niche gulo run korbe na,
        echo "validated successfully";
        return view('form',['requestData'=>$requestData]);

       
    }
}
