<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('commerce')->get();
        return view('crud',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->filled(['name','city','phone'])){
            
            $students = DB::table('commerce')->insert([
                'name' => $request->input('name'),
                'city' => $request->input('city'),
                'phone' => $request->input('phone'),
            ]);
            
            return redirect(route('index'))->with('status','Student Data Inserted');
        
        }
        return redirect(route('index'))->with('status','Insert Data Properly');
        
    }


    public function edit($id)
    {
        $students = DB::table('commerce')->find($id);
        // dd($students);
        return view('edit',['students'=>$students]);
    }


    public function update(Request $request, $id)
    {

        if($request->filled(['name','city','phone'])){
            DB::table('commerce')->where('id',$id)->update([
                'name' =>$request->input('name'),
                'city' =>$request->input('city'),
                'phone' =>$request->input('phone'),
            ]);

            return redirect(route('index'))->with('status','Update Student Successfully');
        }
        else{
            $students = DB::table('commerce')->find($id);
            return view('edit',['students'=>$students,'message'=>'Insert Data Properly']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('commerce')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','Delete Student Successfully');
    }
}
