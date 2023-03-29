@extends('master')

<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand bg-light" href="#">Doctor Appoinments</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav " >
        <a class="nav-link active " aria-current="page" href="{{route('home')}}">Home</a>
        <a class="nav-link" href="{{route('add.doctor')}}">Doctor</a>
        <a class="nav-link" href="{{route('department')}}">Department</a>
        <a class="nav-link" href="{{route('appoinment')}}">Appoinment</a>
        
      </div>
    </div>
  </div>
</nav>



@section('title')
Add Doctor
@endsection

@section('content')
<h5 class="text-center mt-5">Add Doctor Info</h5>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-12" style="border:2px solid black">
        <div class="message mt-3">
    @if(session('message'))
        <h6 class="alert alert-success">
            {{ session('message') }}
        </h6>
    @endif
</div>


        <form action="{{route('save.doctor')}}" method="POST"  >
            @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
               <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Doctor Name">
                 
             </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
               <input type="number" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Enter Doctor Phone Number">
              </div>

              <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fee</label>
               <input type="number" class="form-control" name="fee" id="exampleInputPassword1" placeholder="Enter Doctor Fee">
              </div>
         
          <button type="submit" class="btn btn-primary m-2">Submit</button>

         </form>

        </div>
    </div>

</div>


<!-- doctor info view section -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 p-5">
        <table class="table" style="border:2px solid black">
  <thead>
    <tr>
      <th scope="col">Doctor Name</th>
      <th scope="col">Doctor Phone</th>
      <th scope="col">Doctor Fee</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($get_all_doctor as $data)
    <tr>
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->fee}}</td>
      <td>
      <a href="{{route('edit.doctor',['doctor_id'=>$data->id])}}" class="btn btn-success">Edit</a>
      <a href="{{route('delete.doctor',['doctor_id'=>$data->id])}}" class="btn btn-danger">Delete</a>
     
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
        </div>
    </div>
</div>

@endsection