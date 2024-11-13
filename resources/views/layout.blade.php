<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Student Management System</title>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: #fff;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .sidebar-header {
            padding: 20px;
            background: #243342;
        }

        .sidebar .nav-link {
            padding: 12px 20px;
            color: #ecf0f1;
            border-radius: 0;
            margin: 4px 0;
            transition: all 0.3s;
            position: relative;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .sidebar .nav-link:hover {
            background: #34495e;
            color: #fff;
            padding-left: 25px;
        }

        .sidebar .nav-link.active {
            background: #3498db;
            color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .main-content {
            flex: 1;
            padding: 20px;
            transition: all 0.3s;
        }

        .navbar {
            background: #fff !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 600;
            color: #2c3e50 !important;
        }

        .navbar-toggler {
            border: none;
            padding: 10px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                margin-left: -250px;
                position: fixed;
                height: 100vh;
                z-index: 999;
            }

            .sidebar.active {
                margin-left: 0;
            }

            .main-content {
                width: 100%;
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h5 class="mb-0">Student Management</h5>
            </div>
            <nav class="mt-3">
                <div class="nav flex-column">
                    <a class="nav-link " href="{{url('/')}}">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <a class="nav-link" href="{{url('/students')}}">
                        <i class="fas fa-user-graduate"></i>
                        Students
                    </a>
                    <a class="nav-link" href="{{url('/teachers')}}">
                        <i class="fas fa-chalkboard-teacher"></i>
                        Teachers
                    </a>
                    <a class="nav-link" href="{{url('/courses')}}">
                        <i class="fas fa-book"></i>
                        Courses
                    </a>
                    <a class="nav-link" href="{{url('/batches')}}">
                        <i class="fas fa-users"></i>
                        Batches
                    </a>
                    <a class="nav-link" href="{{url('/enrollments')}}">
                        <i class="fas fa-clipboard-list"></i>
                        Enrollment
                    </a>
                    <a class="nav-link" href="{{url('/payments')}}">
                        <i class="fas fa-credit-card"></i>
                        Payment
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light mb-4">
                <div class="container-fluid">
                    <button id="sidebarCollapse" class="btn btn-link d-md-none">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">
                        <i class="fas fa-graduation-cap me-2"></i>
                        Student Management System
                    </a>
                    <div class="ms-auto d-flex align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-link text-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle fs-5"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Content Area -->
            <div class="content-wrapper">
                @yield("content")
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle Sidebar on mobile
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Add active class to current nav item
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            if(link.href === window.location.href){
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>