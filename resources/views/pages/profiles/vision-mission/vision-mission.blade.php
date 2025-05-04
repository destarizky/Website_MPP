@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <!-- Header Section -->
    <div class="bg-primary text-white position-relative overflow-hidden" style="height: 280px;">
        <!-- Dot Pattern Overlay -->
        <div class="dot-pattern position-absolute end-0 top-0 h-100 w-100">
            <img src="{{ asset('storage/banners/efek.png') }}" 
                 alt="Pattern" 
                 class="h-100 w-100 object-fit-cover">
        </div>
        
        <!-- Content Container -->
        <div class="container position-relative h-100 d-flex align-items-center">
            <div class="header-content">
                <h1 class="text-white fw-bold mb-3">VISI & MISI</h1>
                <p class="text-white text-uppercase mb-4">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
                <div class="d-inline-block">
                    <a href="{{ route('home') }}" class="text-decoration-none home-link">
                        <span class="badge bg-white d-flex align-items-center gap-2">
                            <i class="bi bi-house-fill text-primary"></i>
                            <span class="text-primary">Beranda</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>        
    </div>

    <!-- Description Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-muted text-center" style="font-size: 0.95rem; line-height: 1.8;">
                    Dalam era digital saat ini, kebutuhan akan teknologi informasi menjadi salah satu hal yang sangat penting. MPP Kabupaten Bangkalan terus berupaya mengembangkan system pelayanan publik untuk memberikan hasil yang baik secara efisien dan efektif. Meningkatkan kualitas pelayanan kepada masyarakat dengan melakukan pengembangan layanan yang telah sesuai standarisasi dan melengkapi sarana serta prasarana yang ada secara terprogram untuk memberikan solusi yang terbaik untuk pengguna layanan.
                </p>
            </div>
        </div>
    </div>

    <!-- Vision & Mission Cards -->
    <div class="container mb-5">
        <div class="row g-4">
            <!-- Vision Card -->
            <div class="col-md-6">
                <div class="card h-100 bg-primary text-white border-0">
                    <div class="card-body p-4">
                        <h2 class="card-title display-6 fw-bold mb-4">VISI</h2>
                        <p class="card-text fs-6 lh-base">
                            " Terwujudnya Masyarakat Kabupaten Bangkalan Yang Religius dan Sejahtera Berbasis Digital "
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission Card -->
            <div class="col-md-6">
                <div class="card h-100 bg-primary text-white border-0">
                    <div class="card-body p-4">
                        <h2 class="card-title display-6 fw-bold mb-4">MISI</h2>
                        <ul class="list-unstyled mission-list mb-0">
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <i class="bi bi-check-circle-fill mt-1"></i>
                                <span>Mewujudkan Kehidupan Beragama Berkualitas</span>
                            </li>
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <i class="bi bi-check-circle-fill mt-1"></i>
                                <span>Meningkatkan Standar Kehidupan dan Daya Saing Tinggi</span>
                            </li>
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <i class="bi bi-check-circle-fill mt-1"></i>
                                <span>Meningkatkan Pelayanan Dasar Berkualitas Dan Yang Adanya Kesuksesan Serta Dan Kepuasan Dari Semua Masyarakat Terhadap Layanan Kami</span>
                            </li>
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <i class="bi bi-check-circle-fill mt-1"></i>
                                <span>Menjadikan Kota Aman Dan Adil Pada Masyarakat</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="bi bi-check-circle-fill mt-1"></i>
                                <span>Akselarasi Pembangunan Infrastruktur Yang Berbasis Demi Pertumbuhan Mengingat Daya Saing Dan Pemulihan Ekonomi Untuk Iklim Investasi</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-primary {
        background-color: #0056b3 !important;
    }
    
    .header-content h1 {
        font-size: 48px;
        letter-spacing: -0.5px;
    }
    
    .header-content p {
        font-size: 18px;
        letter-spacing: 0.5px;
    }
    
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .dot-pattern img {
        opacity: 0.2;
    }

    .mission-list li i {
        font-size: 1.1rem;
        color: #ffffff;
    }

    .badge {
        padding: 8px 16px;
        border-radius: 4px;
        font-weight: 500;
        font-size: 14px;
    }

    .mission-list li span {
        line-height: 1.6;
    }

    .header-content {
        padding-bottom: 2rem;
    }

    .header-content h1 {
        font-size: 48px;
        letter-spacing: -0.5px;
        margin-bottom: 1rem;
    }

    .header-content p {
        font-size: 18px;
        letter-spacing: 0.5px;
        margin-bottom: 1.5rem;
    }

    .home-link {
        transition: transform 0.3s ease, opacity 0.3s ease;
        display: inline-block;
    }

    .home-link:hover {
        transform: translateY(-2px);
        opacity: 0.9;
    }

    .home-link .badge {
        transition: background-color 0.3s ease;
    }

    .home-link:hover .badge {
        background-color: #f8f9fa;
    }

    .home-link:active {
        transform: translateY(0);
    }
</style>
@endsection