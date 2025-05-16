@extends('layouts.app')

@section('content')
<!-- Service Section -->
<div class="container-fluid bg-primary text-white py-5 position-relative" style="height: 400px;">
    <!-- Background Image -->
    <div style="background-image: url('{{ asset('storage/banners/berita2.jpg') }}'); background-size: cover; background-position: center; height: 100%;"></div>
    
    <!-- Overlay Box -->
    <div class="container position-absolute top-50 start-50 translate-middle" style="background-color: #ffffff; border-radius: 8px; padding: 20px; max-width: 600px; transform: translateY(50%);">
        <h1 class="fw-bold text-center" style="color: #0056b3;">LAYANAN</h1>
        <p class="text-center" style="color: #0056b3;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="text-center mt-3">
            <a href="{{ route ('home') }}" class="btn btn-outline-primary d-inline-flex align-items-center" style="padding: 10px 20px; border-radius: 5px;">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </div>
    </div>
</div>

<!-- Main Menu Section -->
<div class="container-fluid" style="background: #0056b3; min-height: 60vh; padding-top: 40px; padding-bottom: 60px;">
    <div class="container px-0">
        <div class="menu-list p-0" id="accordionMenu">
            <!-- Pendidikan -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(0)">
                    <span>
                        <span style="font-weight: bold;">1.</span> <span style="font-weight: bold;">PENDIDIKAN</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Pendirian Dan Penyelenggaraan Pusat Kegiatan Belajar Masyarakat ( PKBM )</li>
                        <li>Izin Pendirian Dan Penyelenggaraan Lembaga Kursus Dan Pelatihan (LKP)</li>
                        <li>Izin Pendirian Dan Penyelenggaraan Anak Usia Dini ( PAUD )</li>
                    </ul>
                </div>
            </div>
            <!-- Perumahan Rakyat dan Kawasan Permukiman -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(1)">
                    <span>
                        <span style="font-weight: bold;">2.</span> <span style="font-weight: bold;">PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Mendirikan Bangunan Rumah Tinggal</li>
                        <li>Izin Mendirikan Bangunan Non Rumah Tinggal</li>
                        <li>Izin Penggunaan/Pemanfaatan Tanah</li>
                    </ul>
                </div>
            </div>
            <!-- Pekerjaan Umum dan Penataan Ruang -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(2)">
                    <span>
                        <span style="font-weight: bold;">3.</span> <span style="font-weight: bold;">PEKERJAAN UMUM DAN PENATAAN RUANG</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Pemanfaatan Ruang</li>
                        <li>Persetujuan Bangunan Gedung</li>
                    </ul>
                </div>
            </div>
            <!-- Perhubungan -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(3)">
                    <span>
                        <span style="font-weight: bold;">4.</span> <span style="font-weight: bold;">PERHUBUNGAN</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Trayek Angkutan Umum</li>
                        <li>Rekomendasi Angkutan Barang Khusus</li>
                    </ul>
                </div>
            </div>
            <!-- Pendapatan -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(4)">
                    <span>
                        <span style="font-weight: bold;">5.</span> <span style="font-weight: bold;">PENDAPATAN</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Penerbitan SKP (Surat Ketetapan Pajak)</li>
                        <li>Pengesahan SSP (Surat Setoran Pajak)</li>
                    </ul>
                </div>
            </div>
            <!-- Lingkungan Hidup -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(5)">
                    <span>
                        <span style="font-weight: bold;">6.</span> <span style="font-weight: bold;">LINGKUNGAN HIDUP</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Lingkungan</li>
                        <li>Rekomendasi UKL-UPL/AMDAL</li>
                    </ul>
                </div>
            </div>
            <!-- Pelayanan Perizinan Melalui Sistem Online Submission -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(6)">
                    <span>
                        <span style="font-weight: bold;">7.</span> <span style="font-weight: bold;">PELAKSANAAN PELAYANAN PERIZINAN MELALUI SISTEM ONLINE SUBMISSION</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>OSS NIB (Nomor Induk Berusaha)</li>
                        <li>Izin Usaha Mikro Kecil</li>
                    </ul>
                </div>
            </div>
            <!-- Peternakan -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" onclick="toggleMenu(7)">
                    <span>
                        <span style="font-weight: bold;">8.</span> <span style="font-weight: bold;">PETERNAKAN</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Usaha Peternakan</li>
                        <li>Rekomendasi Kesehatan Hewan</li>
                    </ul>
                </div>
            </div>
            <!-- Kesehatan -->
            <div class="menu-row-container">
                <div class="d-flex justify-content-between align-items-center px-4 py-3 menu-row" style="border-bottom: none;" onclick="toggleMenu(8)">
                    <span>
                        <span style="font-weight: bold;">9.</span> <span style="font-weight: bold;">KESEHATAN</span>
                    </span>
                    <span class="rounded-circle d-flex align-items-center justify-content-center arrow-circle">
                        <i class="bi bi-arrow-right-short"></i>
                    </span>
                </div>
                <div class="menu-dropdown">
                    <ul>
                        <li>Izin Praktik Dokter</li>
                        <li>Izin Klinik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.menu-list {
    width: 100%;
    margin: 0 auto;
    background: transparent;
}
.menu-row {
    background: #0056b3;
    color: #fff;
    border-bottom: 1.5px solid #fff;
    font-weight: 500;
    font-size: 1rem;
    transition: background 0.2s;
    width: 100%;
    cursor: pointer;
}
.menu-row:hover, .menu-row.active {
    background: #339cff;
}
.menu-row:last-child {
    border-bottom: none !important;
}
.arrow-circle {
    background: #fff;
    width: 28px;
    height: 28px;
    min-width: 28px;
}
.arrow-circle i {
    font-size: 1.3rem;
    color: #2196f3;
}
.menu-dropdown {
    display: none;
    background: #e3f0ff;
    padding: 8px 32px 8px 48px;
    border-bottom: 1.5px solid #fff;
    font-size: 0.95rem;
    color: #666;
    animation: fadeIn 0.2s;
}
.menu-row.active + .menu-dropdown {
    display: block;
}
.menu-dropdown ul {
    padding-left: 18px;
    margin: 0;
}
.menu-dropdown li {
    color: #848484;
    margin-bottom: 2px;
    font-size: 0.97rem;
}
.menu-row.active {
    border-radius: 4px 4px 0 0;
    font-weight: bold;
    color: #fff;
}
.menu-row.active .arrow-circle {
    background: #e3f0ff;
}
.menu-row.active .arrow-circle i {
    color: #0056b3;
}
@media (max-width: 992px) {
    .menu-list {
        max-width: 100%;
    }
}
@media (max-width: 768px) {
    .menu-list {
        max-width: 100%;
    }
    .menu-row {
        font-size: 0.95rem !important;
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }
    .menu-dropdown {
        padding: 8px 8px 8px 28px;
        font-size: 0.93rem;
    }
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>

<script>
function toggleMenu(idx) {
    let containers = document.querySelectorAll('.menu-row-container');
    containers.forEach((container, i) => {
        let row = container.querySelector('.menu-row');
        let dropdown = container.querySelector('.menu-dropdown');
        if (i === idx) {
            if (row.classList.contains('active')) {
                row.classList.remove('active');
                dropdown.style.display = 'none';
            } else {
                row.classList.add('active');
                dropdown.style.display = 'block';
            }
        } else {
            row.classList.remove('active');
            dropdown.style.display = 'none';
        }
    });
}

// Ensure all dropdowns are closed initially
document.addEventListener('DOMContentLoaded', function() {
    let containers = document.querySelectorAll('.menu-row-container');
    containers.forEach((container) => {
        let row = container.querySelector('.menu-row');
        let dropdown = container.querySelector('.menu-dropdown');
        row.classList.remove('active');
        dropdown.style.display = 'none';
    });
});
</script>

@endsection