@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body" width="400px">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Email : {{ $students->email}}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
  </div>
      
    </hr>
  
  </div>
</div>