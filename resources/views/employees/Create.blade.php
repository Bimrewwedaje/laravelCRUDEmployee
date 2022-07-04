@extends('employees.layout')
@section('employee')
 
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>DOB</label></br>
        <input type="text" name="DOB" id="DOB" class="form-control"></br>
        <label>Gender</label></br>
        <input type="text" name="Gender" id="Gender" class="form-control"></br>
        <label>Salary</label></br>
        <input type="text" name="salary" id="salary" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop