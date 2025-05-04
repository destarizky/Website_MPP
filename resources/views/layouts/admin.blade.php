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
        .wrapper {
            display: flex;
            width: 100%;
        }
        
        .main-panel {
            width: calc(100% - 250px);
            margin-left: 250px;
            min-height: 100vh;
            background: #f4f6f9;
        }
        
        .content {
            padding: 80px 30px 30px;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        @include('partials.admin.sidebar')
        
        <div class="main-panel">
            @include('partials.admin.navbar')
            
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>