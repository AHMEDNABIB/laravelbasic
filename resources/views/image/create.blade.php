@extends('layouts.master');

@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ route('image.store')}}" method="post" enctype="multipart/form-data">
        
        @csrf

        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{old('first_name')}}"></br>

        @error('first_name')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>

        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control" value="{{old('last_name')}}"></br>

         @error('last_name')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>

        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" value="{{old('mobile')}}"></br>

         @error('mobile')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>
        
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}"></br>

         @error('address')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>
       
        <label>Post Code</label></br>
        <input type="text" name="post_code" id="post_code" class="form-control" value="{{old('post_code')}}"></br>

         @error('post_code')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>

        <label>Image</label></br>
        <input type="file" name="image" id="img" class="form-control" value="{{old('image')}}"></br>

         @error('image')

          <span class="text-danger">{{$message}}</span>
            
        @enderror
        <br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
    
@endsection