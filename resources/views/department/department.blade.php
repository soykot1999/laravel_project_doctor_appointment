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


<h4 class="text-center mt-5">Add Department</h4>
<div class="container-fluid p-5">

<div class="message mt-3">
    @if(session('message'))
        <h6 class="alert alert-success">
            {{ session('message') }}
        </h6>
    @endif
</div>




<form action="{{route('save.department')}}" method="POST">
    @csrf
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Department Name</label>
    <input type="text" name="name" placeholder="Enter Department Name" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



<div class="container-fluid p-5">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Department Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($get_all_department as $data)
    <tr>
      
      <td>{{$data->name}}</td>
      <td>
        
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>

</div>



