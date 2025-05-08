<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - MPP Kabupaten Bangkalan</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-blue: #1a53ff;
        }

        body {
            min-height: 100vh;
            background-color: #fff;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background-color: var(--primary-blue);
            color: white;
            z-index: 1000;
        }

        /* Logo Area */
        .logo-area {
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: var(--primary-blue);
        }

        .logo-area img {
            width: 40px;
            height: 40px;
        }

        .logo-text {
            font-size: 12px;
            line-height: 1.2;
        }

        /* Navigation Menu */
        .nav-menu {
            margin-top: 2rem;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            color: white !important;
            padding: 0.75rem 1.5rem;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            background-color: white;
            color: var(--primary-blue) !important;
            border-radius: 8px;
            margin: 0 1rem;
            padding: 0.75rem 1rem;
        }

        .nav-link i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Submenu */
        .submenu {
            padding-left: 3rem;
            margin-top: 0.5rem;
        }

        .submenu a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            display: block;
            padding: 0.5rem 0;
            font-size: 14px;
        }

        /* Top Navigation */
        .top-nav {
            position: fixed;
            top: 0;
            right: 0;
            width: calc(100% - var(--sidebar-width));
            height: 60px;
            padding: 0 2rem;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            z-index: 999;
        }

        /* Search Bar */
        .search-container {
            flex-grow: 1;
            max-width: 400px; /* Limit width */
            margin-right: 2rem;
        }

        .search-box {
            width: 100%;
            padding: 0.5rem 1rem;
            border: 1px solid #e0e0e0;
            background-color: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .search-box:focus {
        outline: none;
        border-color: var(--primary-blue);
        background-color: #fff;
        box-shadow: 0 0 0 2px rgba(26, 83, 255, 0.1);
    }

        /* User Menu */
        .user-menu {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .user-menu a {
            color: #6c757d;
            transition: color 0.3s ease;
        }

        .user-menu img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 2px solid #e0e0e0;
            padding: 2px;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 0; /* Remove default padding */
        }

        .content-area {
            margin-top: 60px; /* Height of top-nav */
            padding: 2rem;
            background-color: #f4f6f9;
            min-height: calc(100vh - 60px);
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Logo Area -->
        <div class="logo-area">
            <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="MPP Logo">
            <div class="logo-text">
                MAL PELAYANAN PUBLIK<br>
                Kabupaten Bangkalan
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="nav-menu">
            <!-- Dashboard -->
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                <i class="bi bi-grid-fill"></i>
                DASHBOARD ADMIN
            </a>

            <!-- Information -->
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-info-circle-fill"></i>
                    INFORMATION ADMIN
                </a>
                <div class="submenu">
                    <a href="#">Upload Information</a>
                    <a href="#">History Information</a>
                </div>
            </div>

            <!-- Agenda -->
            <a href="#" class="nav-link">
                <i class="bi bi-calendar-event-fill"></i>
                AGENDA ADMIN
            </a>

            <!-- Institution -->
            <a href="#" class="nav-link">
                <i class="bi bi-building-fill"></i>
                INSTITUTION ADMIN
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
    <!-- Top Navigation -->
    <div class="top-nav">
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Type a command or search...">
        </div>
        <div class="user-menu">
            <a href="#" class="nav-link">
                <i class="bi bi-bell fs-5"></i>
            </a>
            <img src="{{ asset('storage/avatar/default.png') }}" alt="User Avatar">
        </div>
    </div>

        <!-- Content Area -->
        <div class="content-area">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>