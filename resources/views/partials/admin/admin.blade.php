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
            --navbar-height: 60px;
            --primary-blue: #0d6efd;
        }

        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background-color: var(--primary-blue);
            padding: 1rem;
            color: white;
            z-index: 1000;
        }

        .sidebar .logo {
            display: flex;
            align-items: center;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }

        .sidebar .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .sidebar .nav-item {
            margin-bottom: 0.5rem;
        }

        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 0.8rem 1rem;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link:hover {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar .nav-link.active {
            background-color: white;
            color: var(--primary-blue);
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        /* Submenu Styles */
        .submenu {
            padding-left: 1rem;
            margin-top: 0.5rem;
        }

        .submenu .nav-link {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        /* Main Content Area */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 1rem;
        }

        /* Top Navigation */
        .top-nav {
            position: fixed;
            top: 0;
            right: 0;
            left: var(--sidebar-width);
            height: var(--navbar-height);
            background-color: white;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            z-index: 900;
        }

        .search-bar {
            flex-grow: 1;
            max-width: 500px;
            margin: 0 2rem;
        }

        .search-bar input {
            width: 100%;
            padding: 0.5rem 1rem;
            border: none;
            background-color: #f8f9fa;
            border-radius: 5px;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .content-area {
            margin-top: var(--navbar-height);
            padding: 2rem;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('assets/admin/images/logo/mpp-logo.png') }}" alt="MPP Logo">
            <div class="logo-text">
                <div>MAL PELAYANAN PUBLIK</div>
                <small>Kabupaten Bangkalan</small>
            </div>
        </div>

        <nav class="nav flex-column">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <i class="bi bi-grid-fill"></i>
                DASHBOARD ADMIN
            </a>

            <div class="nav-item">
                <a href="#" class="nav-link {{ Request::is('admin/information*') ? 'active' : '' }}">
                    <i class="bi bi-info-circle-fill"></i>
                    INFORMATION ADMIN
                </a>
                <div class="submenu">
                    <a href="{{ route('admin.information.upload') }}" class="nav-link">
                        Upload Information
                    </a>
                    <a href="{{ route('admin.information.history') }}" class="nav-link">
                        History Information
                    </a>
                </div>
            </div>

            <a href="{{ route('admin.agenda.index') }}" class="nav-link {{ Request::is('admin/agenda*') ? 'active' : '' }}">
                <i class="bi bi-calendar-event-fill"></i>
                AGENDA ADMIN
            </a>

            <a href="{{ route('admin.institution.index') }}" class="nav-link {{ Request::is('admin/institution*') ? 'active' : '' }}">
                <i class="bi bi-building-fill"></i>
                INSTITUTION ADMIN
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navigation -->
        <div class="top-nav">
            <div class="search-bar">
                <input type="text" placeholder="Type a command or search...">
            </div>
            <div class="user-menu">
                <a href="#" class="nav-link">
                    <i class="bi bi-bell"></i>
                </a>
                <a href="#" class="nav-link">
                    <img src="{{ asset('assets/admin/images/avatar/user-avatar.png') }}" 
                         alt="User Avatar"
                         class="rounded-circle"
                         style="width: 32px; height: 32px;">
                </a>
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