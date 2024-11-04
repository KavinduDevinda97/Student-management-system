@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-title">Name : {{ $courses->name }}</p>
        <p class="card-text">Syllabus : {{ $courses->syllabus }}</p>
        <p class="card-text">Duration : {{ $courses->duration() }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection