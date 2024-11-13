@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <!-- Card Header -->
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-user-graduate me-2"></i>
                        Enrollment Information
                    </h5>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-12">
                            <!-- Enrollment Details -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                            <i class="fas fa-user fa-lg"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block"> Enroll No</small>
                                            <strong>{{ $enrollments->enroll_no  }}</strong>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                            <i class="fas fa-map-marker-alt fa-lg"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Batch</small>
                                            <strong>{{ $enrollments->batch->name }}</strong>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                          <i class="fas fa-user-graduate me-2"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Student</small>
                                            <strong>{{ $enrollments->student->name  }}</strong>
                                        </div>
                                    </div>
                                </li>
    <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                          <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Join Date</small>
                                            <strong>{{ $enrollments->join_date  }}</strong>
                                        </div>
                                    </div>
                                </li>
    <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                          <i class="fa-solid fa-money-bill"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Fee</small>
                                            <strong>{{ $enrollments->fee  }}</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{url('/enrollments')}}" class="btn btn-primary btn-sm">
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