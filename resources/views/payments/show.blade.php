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
                        Payment Information
                    </h5>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-12">
                            <!-- Payment Details -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                            <i class="fas fa-user fa-lg"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block"> Enrollment No</small>
                                            <strong>{{ $payments->enrollment->enroll_no  }}</strong>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                          <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Paid Date</small>
                                            <strong>{{ $payments->paid_date }}</strong>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="text-muted me-3">
                                          <i class="fa-solid fa-money-bill"></i>
                                        </div>
                                        <div class="px-2">
                                            <small class="text-muted d-block">Amount</small>
                                            <strong>{{  $payments->amount  }}</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{url('/payments')}}"  class="btn btn-primary btn-sm">
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