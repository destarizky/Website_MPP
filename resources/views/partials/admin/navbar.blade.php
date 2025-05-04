<!-- Top Navigation Bar -->
<nav class="navbar navbar-expand-lg fixed-top bg-white">
    <div class="container-fluid">
        <!-- Logo and Brand -->
        <div class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('assets/admin/images/logo/mpp-logo.png') }}" 
                 alt="MPP Logo" 
                 class="me-2" 
                 style="height: 40px;">
            <span class="text-dark">MAL PELAYANAN PUBLIK<br>
                <small>Kabupaten Bangkalan</small>
            </span>
        </div>

        <!-- Search Bar -->
        <div class="flex-grow-1 mx-4">
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0">
                    <i class="bi bi-search text-muted"></i>
                </span>
                <input type="text" 
                       class="form-control bg-light border-start-0" 
                       placeholder="Type a command or search..."
                       style="max-width: 400px;">
            </div>
        </div>

        <!-- User Profile and Notifications -->
        <div class="d-flex align-items-center">
            <!-- Notifications -->
            <a href="#" class="nav-link me-3">
                <i class="bi bi-bell"></i>
            </a>
            
            <!-- User Profile -->
            <a href="#" class="nav-link">
                <img src="{{ asset('assets/admin/images/avatar/user-avatar.png') }}" 
                     alt="User Profile" 
                     class="rounded-circle"
                     style="height: 32px; width: 32px;">
            </a>
        </div>
    </div>
</nav>

<style>
.navbar {
    height: 70px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.navbar-brand img {
    width: auto;
    height: 40px;
}

.navbar-brand span {
    font-size: 14px;
    line-height: 1.2;
}

.navbar-brand small {
    font-size: 12px;
    color: #6c757d;
}

.input-group .form-control {
    height: 40px;
    background-color: #f8f9fa;
    border-color: #e9ecef;
}

.input-group-text {
    background-color: #f8f9fa;
    border-color: #e9ecef;
}

.nav-link {
    color: #6c757d;
    padding: 8px;
}

.nav-link:hover {
    color: #0d6efd;
}
</style>