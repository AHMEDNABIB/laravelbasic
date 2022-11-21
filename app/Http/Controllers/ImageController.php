<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

use App\Http\Requests\ProjectRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $images= Image::all();
        return view('image.index',compact('images'));
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
    public function store(ProjectRequest $request)
    {
    //    $request->validate([
    //         'first_name'=> 'required|max:25',
    //         'last_name'=> 'required|max:25',
    //         'mobile'=> 'required|numeric',
    //         'address'=> 'required',
    //         'post_code'=> 'required|digits:4',
    //         'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500'

    //    ]);

    $validated = $request->validated();

          
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

    //    return back();

    return redirect()->route('image.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $image= Image::findOrFail($id);
        return view('image.view',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $image= Image::findOrFail($id);
        return view('image.edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, $id)
    {
        $image = Image::findOrFail($id);

        if ($request->hasFile('image')) {

            // $request->validate([

            //     'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500'

            // ]);

            //    $validated = $validator->safe()->only(['image']);
            //    $validated = $validator->safe()->except(['image.required', 'image.image']);

            if (file_exists(public_path('/uploads/'.$image->image))) {
                unlink(public_path('/uploads/'.$image->image)); 
            }

           

            $file= $request->file('image');
            $extension= $file->extension();
            $final= date('YmdHis').'.'.$extension;

            $file->move(public_path('/uploads/'),$final);

            $image->image= $final;

        }

    //      $request->validate([
    //          'first_name'=> 'required|max:25',
    //         'last_name'=> 'required|max:25',
    //         'mobile'=> 'required|numeric',
    //         'address'=> 'required',
    //         'post_code'=> 'required|digits:4',
           

    //    ]);

            $validated = $request->validated();
    //    $validated =  $request->safe()->except(['image.required','image.image']);

       $image->first_name= $request->first_name;
       $image->last_name= $request->last_name;
       $image->mobile= $request->mobile;
       $image->address= $request->address;
       $image->post_code= $request->post_code;

       $image->update();

       return redirect()->route('image.index');

       

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image= Image::findOrFail($id);
        
         if (file_exists(public_path('/uploads/'.$image->image))) {
                unlink(public_path('/uploads/'.$image->image)); 
            }

        $image->delete();

        return redirect()->route('image.index');
    }
}
