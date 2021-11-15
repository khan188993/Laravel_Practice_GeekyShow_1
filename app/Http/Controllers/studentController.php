<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{

    function showForm(){
        return view('form');
    }

    function submitForm(Request $request){

        //eita empty check na username input ei name e ase kina check kore, and er moto
        if($request->has(['username','password'])){
            echo "Has Run Check<br>";
            // print_r($request->username);
        }
        //eita or er moto kaj kore j kono ekta input name match korlei run korbe,
        if($request->hasAny(['username','pass'])){
            echo "HasAny Run Check<br>";
        }

        //empy input check kore 
        if($request->filled(['username','password'])){
            echo "Fillded Input all check<br>";
        }

        //hasAny er ulta eita input name er kono ekta name ekhane na thakle run korbe,
        if($request->missing(['password','username'])){
            echo "missing Function checked reverse hasAny<br>";
        }

        //input thakle function run korate caile eita has er moto kaj kore, ja dibo sob tkha lagbe,
        $request->whenHas(['username','password'],function(){
            // dd($input);
            echo "whenHas running by closur <br>";
        });

        //input filled thakle function run korate caile eita Filled er moto kaj kore, ja dibo sob tkha lagbe,
        $request->whenFilled(['username','password'],function(){
            // dd($input);
            echo "whenFilled running by closur<br>";
        });

        // $request->flash();
        // $request->flashOnly(['username']);
        // $request->flashExcept(['password']);

        //with input same work like flash
        // return redirect('form_sub')->withInput(); //all input jabe,

        /* return redirect('form_sub')->withInput(
            // $request->except('password'),
            // $request->only('password')
        ); */
        // return view('form');



        // $request->all(); all input array asbe,
        // $request->input(); all input array asbe 
        // $request->input('username'); single input asbe,
        // $request->username; username single asbe,
        // if($request->has('username','password'))

       


        // dd($request->username);
        return view('form');
        
        // with('status','statsu value coming');
    }

    function form_sub(){
        return view('form_sub');
    }
}
