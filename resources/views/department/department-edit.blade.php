
@extends('master')

<form action="{{route('update.department')}}" method="POST">
    @csrf
    <input type="hidden" name="department_id" value="{{$get_all_department_edit->id}}">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Department Name</label>
    <input type="text" name="name" value="{{$get_all_department_edit->name}}" placeholder="Enter Department Name" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>