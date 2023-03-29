@extends('master')

@section('title')
Home
@endsection

@section('content')
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
@endsection