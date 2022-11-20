@extends('layouts.master');

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Serial No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Post Code</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($images as $image)

                     <tr>
                        <td>{{ $loop->index+1}}</td>
                        <td>{{ $image->first_name}}</td>
                        <td>{{ $image->last_name}}</td>
                        <td>{{ $image->mobile}}</td>
                        <td>{{ $image->address}}</td>
                         <td>{{ $image->post_code}}</td>
                        <td>
                            <img src="{{url('/uploads',$image->image)}}" alt="Product Image" srcset="" width="80">
                        </td>

                        <td>
                            <a href="{{ route('image.edit',$image->id)}}" class="btn btn-primary"> Edit</a>
                            <a href="" class="btn btn-danger"> Delete</a>
                        </td>
                       

                     </tr>
                         
                     @endforeach
                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection