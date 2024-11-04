@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Batch Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-title">Name : {{ $batches->name }}</p>
        <p class="card-text">Course  : {{ $batches->course->name }}</p>
        <p class="card-text">Start Date : {{ $batches->start_date }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection