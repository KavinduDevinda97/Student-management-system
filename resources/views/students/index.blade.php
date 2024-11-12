@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,.075);
            transition: background-color 0.3s ease;
        }
        .btn-action {
            transition: transform 0.2s ease;
        }
        .btn-action:hover {
            transform: translateY(-2px);
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-radius: 0.5rem;
        }
        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0,0,0,.125);
            padding: 1rem 1.5rem;
            border-radius: 0.5rem 0.5rem 0 0 !important;
        }
        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>

<div class="container-fluid py-4">
    <div class="card">
        <!-- Card Header -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Student Application</h5>
            <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm d-flex align-items-center">
                <i class="fas fa-plus me-2"></i> Add New Student
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
                            <th scope="col" width="30%">Address</th>
                            <th scope="col" width="15%">Mobile</th>
                            <th scope="col" width="30%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="fw-semibold">{{ $item->name }}</div>
                            </td>
                            <td>
                                <div class="text-wrap" style="max-width: 300px;">{{ $item->address }}</div>
                            </td>
                            <td>{{ $item->mobile }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <!-- View Button -->
                                    <a href="{{ url('/students/' . $item->id) }}" 
                                       class="btn btn-info btn-sm btn-action me-2">
                                        <i class="fas fa-eye me-1"></i> View
                                    </a>

                                    <!-- Edit Button -->
                                    <a href="{{ url('/students/' . $item->id . '/edit') }}" 
                                       class="btn btn-primary btn-sm btn-action me-2">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <form method="POST" 
                                          action="{{ url('/students' . '/' . $item->id) }}" 
                                          accept-charset="UTF-8" 
                                          style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" 
                                                class="btn btn-danger btn-sm btn-action" 
                                                onclick="return confirm('Confirm delete?')">
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

</body>
</html>
@endsection