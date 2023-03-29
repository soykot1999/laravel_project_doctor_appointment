@extends('master')

@section('title')
Edit Doctor
@endsection

@section('content')
<h5 class="text-center mt-5">Doctor Edit Form</h5>
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


        <form action="{{route('update.doctor')}}" method="POST"  >
            @csrf

            <input type="hidden" name="doctor_id" value="{{$get_all_doctor_edit->id}}">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
               <input type="text" class="form-control" name="name" value="{{$get_all_doctor_edit->name}}" id="exampleInputEmail1"  aria-describedby="emailHelp">
                 
             </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
               <input type="number" class="form-control" name="phone" value="{{$get_all_doctor_edit->phone}}" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fee</label>
               <input type="number" class="form-control" name="fee" value="{{$get_all_doctor_edit->fee}}" id="exampleInputPassword1">
              </div>
         
          <button type="submit" class="btn btn-primary m-2">Update</button>

         </form>

        </div>
    </div>

</div>




@endsection