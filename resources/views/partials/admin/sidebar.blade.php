<!-- Left Side Navigation -->
<div class="sidebar" data-color="blue">
    <div class="sidebar-wrapper">
        <!-- Logo/Brand Section -->
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}" class="simple-text logo-mini">
                <img src="{{ asset('assets/admin/images/logo/mpp-logo.png') }}" alt="MPP Logo" class="img-fluid">
            </a>
            <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
                MAL PELAYANAN PUBLIK
                <span class="d-block small">Kabupaten Bangkalan</span>
            </a>
        </div>

        <!-- Navigation Menu -->
        <ul class="nav">
            <!-- Dashboard -->
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid-fill"></i>
                    <p>DASHBOARD ADMIN</p>
                </a>
            </li>

            <!-- Information Management -->
            <li class="{{ Request::is('admin/information*') ? 'active' : '' }}">
                <a data-bs-toggle="collapse" href="#informationMenu" 
                   aria-expanded="{{ Request::is('admin/information*') ? 'true' : 'false' }}">
                    <i class="bi bi-info-circle-fill"></i>
                    <p>
                        INFORMATION ADMIN
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ Request::is('admin/information*') ? 'show' : '' }}" id="informationMenu">
                    <ul class="nav">
                        <li class="{{ Request::is('admin/information/upload') ? 'active' : '' }}">
                            <a href="{{ route('admin.information.upload') }}">
                                <i class="bi bi-upload"></i>
                                <span>Upload Information</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/information/history') ? 'active' : '' }}">
                            <a href="{{ route('admin.information.history') }}">
                                <i class="bi bi-clock-history"></i>
                                <span>History Information</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Agenda Management -->
            <li class="{{ Request::is('admin/agenda*') ? 'active' : '' }}">
                <a href="{{ route('admin.agenda.index') }}">
                    <i class="bi bi-calendar-event-fill"></i>
                    <p>AGENDA ADMIN</p>
                </a>
            </li>

            <!-- Institution Management -->
            <li class="{{ Request::is('admin/institution*') ? 'active' : '' }}">
                <a href="{{ route('admin.institution.index') }}">
                    <i class="bi bi-building-fill"></i>
                    <p>INSTITUTION ADMIN</p>
                </a>
            </li>
        </ul>
    </div>
</div>