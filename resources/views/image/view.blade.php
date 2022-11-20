@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">View Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $image->first_name }} {{$image->last_name}}</h5>
        <p class="card-text">Address : {{ $image->address }}</p>
        <p class="card-text">Mobile : {{ $image->mobile }}</p>
        <p class="card-text">Post Code : {{ $image->post_code }}</p>

         </br>

        <img src="{{url('/uploads', $image->image)}}" alt="" srcset="" width="120"></br>
        </br>
        
  </div>
       
    </hr>
  
  </div>
</div>