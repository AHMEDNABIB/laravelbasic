<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('image.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'mobile'=> 'required',
            'address'=> 'required',
            'post_code'=> 'required',
            'image'=> 'required|image|mimes:jpg,jpeg,png'

       ]);

          
      if ($request->hasFile('image')) {
        $file= $request->file('image');
        $extension= $file->extension();
        $final= date('YmdHis').'.'.$extension;

        $file->move(public_path('/uploads'),$final);

      }

       $image = new Image();



       $image->first_name= $request->first_name;
       $image->last_name= $request->last_name;
       $image->mobile= $request->mobile;
       $image->address= $request->address;
       $image->post_code= $request->post_code;
       $image->image= $final;

    //    $image->save();

        $image->save();

       return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
