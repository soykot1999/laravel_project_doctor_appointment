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

<div class="container-fluid m-1 p-5">
    <h3 class="text-center m-5">Appoinment Page</h3>

<form action="" method="POST">
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Appoinment Date</label>
    <input type="text" name="date" class="form-control" placeholder="dd/mm/yyyy" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Select Department</label>
    <select name="department" class="form-select" aria-label="Default select example">
     <option selected>--select--</option>
     @foreach($department as $dept)
     <option value="{{$dept->name}}">{{$dept->name}}</option>
     @endforeach
    
   </select>
   
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Select Doctor</label>
    <select name="doctor" class="form-select" aria-label="Default select example">
     <option selected>--select--</option>
     @foreach($doctor as $doc)
     
     <option value="{{$doc->name}}">{{$doc->name}}</option>
     @endforeach
     
   </select>
   
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fee</label>
    <input type="number" name="fee" value="{{$doc->fee}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</div>
