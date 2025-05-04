<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo" style="height: 50px; margin-right: 10px;">
            <div>
                <strong>MAL PELAYANAN PUBLIK</strong><br>
                <span>Kabupaten Bangkalan</span>
            </div>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                        BERANDA
                    </a>
                </li>

                <!-- Profile Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link fw-bold dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        PROFIL
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('profil/visi-misi') ? 'active' : '' }}" href="{{ route('profile.vision-mission') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item">Tugas & Fungsi</a></li>
                        <li><a class="dropdown-item">Profil Pimpinan</a></li>
                        <li><a class="dropdown-item">Daftar Pegawai</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil/fasilitas') ? 'active' : '' }}" href="{{ route('profile.facilities') }}">Sarana & Prasarana</a></li>
                        <li><a class="dropdown-item">Prestasi & Inovasi</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil/dasar-hukum') ? 'active' : '' }}" href="{{ route('profile.legal-basis') }}">Dasar Hukum</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-bold" href="#">LAYANAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('informasi*') ? 'active' : '' }}" href="{{ route('informations.index') }}">INFORMASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold {{ Request::is('agenda*') ? 'active' : '' }}" href="{{ route('agenda.index') }}">
                        AGENDA
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>