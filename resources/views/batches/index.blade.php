@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batch Application</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-radius: 0.5rem;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,.125);
            padding: 1.5rem;
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,.075);
            transition: all 0.3s ease;
        }
        .btn-action {
            transition: all 0.2s ease;
            margin: 0 0.2rem;
        }
        .btn-action:hover {
            transform: translateY(-2px);
        }
        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            color: #495057;
        }
        .teacher-name {
            font-weight: 600;
            color: #2c3e50;
        }
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }
        .table td {
            vertical-align: middle;
            padding: 1rem 0.75rem;
        }
    </style>
</head>
<body>

<div class="container-fluid py-4">
    <div class="card">
        <!-- Card Header -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                <h5 class="mb-0 text-primary">Batch Application</h5>
                <p class="text-muted mb-0 small">Manage your ENROLLMENTS</p>
            </div>
            <a href="{{ url('/batches/create') }}" class="btn btn-success d-flex align-items-center">
                <i class="fas fa-plus-circle me-2"></i> Add New Batch
            </a>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="20%">Name</th>
                            <th scope="col" width="20%">Course</th>
                            <th scope="col" width="20%">Start Date</th>
                            <th scope="col" width="30%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($batches as $item)
                        <tr>
                            <td>
                                <span class="badge bg-light text-dark">{{ $loop->iteration }}</span>
                            </td>
                            <td>
                                <div class="teacher-name">{{ $item->name }}</div>
                            </td>
                            <td>
                                <div class="text-wrap" style="max-width: 300px;">
                                    <i class="fa fa-briefcase me-1 text-muted"></i>
                                    {{ $item->course->name }}
                                </div>
                            </td>
                            <td>
                                <i class="fa fa-calendar me-1 text-muted"></i>
                                {{ $item->start_date }}
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <!-- View Button -->
                                    <a href="{{ url('/batches/' . $item->id) }}" 
                                       class="btn btn-info btn-sm btn-action"
                                       data-bs-toggle="tooltip" 
                                       title="View Batch">
                                        <i class="fas fa-eye me-1"></i> View
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ url('/batches/' . $item->id . '/edit') }}" 
                                       class="btn btn-primary btn-sm btn-action"
                                       data-bs-toggle="tooltip" 
                                       title="Edit Batch">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <form method="POST" 
                                          action="{{ url('/batches' . '/' . $item->id) }}" 
                                          accept-charset="UTF-8" 
                                          style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" 
                                                class="btn btn-danger btn-sm btn-action" 
                                                onclick="return confirm('Are you sure you want to delete this teacher?')"
                                                data-bs-toggle="tooltip" 
                                                title="Delete Batch">
                                            <i class="fas fa-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</body>
</html>
@endsection