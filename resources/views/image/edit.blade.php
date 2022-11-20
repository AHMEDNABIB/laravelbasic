@extends('layouts.master');

@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ route('image.update', $image->id)}}" method="post" enctype="multipart/form-data">
        
        @csrf

        @method('PUT')

        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $image->first_name}}"></br>

        @error('first_name')

          <span class="text-danger">{{$message}}</span>
            
        @enderror

        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $image->last_name}}"  ></br>

         @error('last_name')

          <span class="text-danger">{{$message}}</span>
            
        @enderror

        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $image->mobile}}"></br>

         @error('mobile')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" value="{{ $image->address}}"></br>

         @error('address')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
       
        <label>Post Code</label></br>
        <input type="text" name="post_code" id="post_code" class="form-control" value="{{ $image->post_code}}"></br>

         @error('post_code')

          <span class="text-danger">{{$message}}</span>
            
        @enderror

        <label>Image</label></br>
        <input type="file" name="image" id="img" class="form-control"></br>

         @error('image')

          <span class="text-danger">{{$message}}</span>
            
        @enderror

        <img src="{{url('/uploads', $image->image)}}" alt="" srcset="" width="120"></br>
        </br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
    
@endsection