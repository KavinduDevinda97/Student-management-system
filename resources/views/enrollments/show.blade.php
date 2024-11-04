@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-title">Enroll No : {{ $enrollments->enroll_no }}</p>
        <p class="card-text">Batch : {{ $enrollments->batch->name }}</p>
        <p class="card-text">Student : {{ $enrollments->student->name }}</p>
        <p class="card-text">Join Date : {{ $enrollments->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection

