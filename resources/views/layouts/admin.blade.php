<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - MPP Bangkalan</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --sidebar-width: 250px;
            --navbar-height: 60px;
            --primary-blue: #0d6efd;
        }

        .wrapper {
            display: flex;
            width: 100%;
        }
        
        .sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background-color: var(--primary-blue);
            color: white;
            position: fixed;
            top: 0;
            left: 0;
        }
        
        .main-panel {
            width: calc(100% - var(--sidebar-width));
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            background: #f4f6f9;
        }
        
        .content {
            padding: calc(var(--navbar-height) + 20px) 30px 30px;
        }

        /* Add other styles from admin.blade.php here */
    </style>
    
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        @include('partials.admin.admin')
        
        <div class="main-panel">
            @include('partials.admin.admin')
            
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>