@extends('employees.layout')
@section('employee')
 
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>DOB</label></br>
        <input type="text" name="DOB" id="DOB" value="{{$employees->DOB}}" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="Gender" id="Gender" value="{{$employees->Gender}}" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" value="{{$employees->salary}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop