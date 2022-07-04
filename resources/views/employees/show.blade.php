@extends('employees.layout')
@section('employee')
 
 
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">DOB : {{ $employees->DOB }}</p>
        <p class="card-text">Gender : {{ $employees->Gender }}</p>
        <p class="card-text">Salary : {{ $employees->salary }}</p>

  </div>
       
    </hr>
  
  </div>
</div>