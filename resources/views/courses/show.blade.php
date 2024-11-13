@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <!-- Card Header -->
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="card-title mb-0">
                      <i class="fas fa-book"></i>
                        Course Information
                    </h5>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-12">
                            <!-- Course Details -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                            <i class="fas fa-user fa-lg"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block"> Name</small>
                                            <strong>{{ $courses->name  }}</strong>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                            <i class="fas fa-map-marker-alt fa-lg"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Syllabus</small>
                                            <strong>{{ $courses->syllabus }}</strong>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                            <i class="fas fa-phone fa-lg"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Duration</small>
                                            <strong>{{ $courses->duration() }}</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                      
                    </div>
                    <a href="{{url('/courses')}}" class="btn btn-primary btn-sm">
                      <i class="fas fa-arrow-left me-1"></i> Back
                  </a>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Add these in your layout file or section -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">