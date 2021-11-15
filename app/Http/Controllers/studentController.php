<?php

namespace App\Http\Controllers;

use App\Rules\upperCase;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterForm;
use Illuminate\Support\Facades\DB; //this must be inlucde for pagination

class studentController extends Controller
{

    function showDB()
    {

        /* 
        !for using pagination 
        *)db:table use by facades, 
        *)call table db:table('name')->pagination() /simplePaginate();
        *)pass ta variagle of pagition, and loop in by object and 
        *)for nav pagination type $variable->links()
        *)for second path run make route of 2nd path and $variagle->withPath('secondpath');
        ?for using bootstarap in pagination 
        *)AppServiceProvider e use paginator and boot(paginator::useBootstrap())

        *)type php artisan vendor:publish --tag=laravel-pagination
        *)customize your code in view->vendor file,
        */
        $students = DB::table('commerce')->paginate(3);
        // $students = DB::table('commerce')->simplePaginate(3);

        // dd($students);

        //new path running
        // $students->withPath('cs');
        return view('pagination',['students'=>$students]);
    }
}
