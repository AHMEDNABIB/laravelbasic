<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
     public function index()
    {
       return view('contact');
    }

    public function Studentstore(Request $request){
        //  dd($request->all());
        
        $data= array();

        $data['name']= $request->name;
        $data['email']= $request->email;

        return  redirect()->route('about');
    }
}
