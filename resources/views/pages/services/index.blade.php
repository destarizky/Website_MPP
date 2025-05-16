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

<!-- Organizations Grid -->
<div class="container py-5">
    <div class="row g-4 justify-content-center">
        <!-- Row 1 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logoMPP.png') }}" 
                         class="org-logo" 
                         alt="Dinas Pendidikan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu ( DPMTSP )</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logoMPP.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Dinas Kependudukan dan Catatan Sipil ( DUKCAPIL )</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logoMPP.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Dinas Sosial</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logoMPP.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Dinas Perumahan Rakyat dan Kawasan Pemukiman (PRKP)</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logo_DinasPerpustakaandanKearsipan.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Dinas Perpustakaan dan Kearsipan Kabupaten Bangkalan</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logo_PUDAM.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">PDAM Kabupaten Bangkalan</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/Logo_KantorImigrasi.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Kantor IMIGRASI</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/LogoBPJS.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">BPJS Ketenagakerjaan</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/Logo_BankJatim.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Bank Jatim</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/Logo_PolresBangkalan.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Polres Kabupaten Bangkalan</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/logoMPP.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Kantor Bersama SAMSAT</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>

        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/Logo_KejaksaanNegeri.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Kejaksaan Negeri Bangkalan</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Additional organizations following the same pattern -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card organization-card text-center">
                <a href="{{ route('services.show', ['id' => 1]) }}" class="text-decoration-none">
                <div class="org-logo-container">
                    <img src="{{ asset('storage/logo/Logo_PengadilanAgama.png') }}" 
                         class="org-logo" 
                         alt="Dinas Kesehatan Logo">
                </div>
                <div class="card-body">
                    <p class="org-title">Pengadilan Agama Bangkalan</p>
                    <a href="{{ route('services.show', ['id' => 1]) }}" class="btn btn-link text-decoration-none">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
        .organization-card {
        background-color: transparent;
        border: none;
        margin-bottom: 20px;
    }

    .organization-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .org-logo-container {
        background-color: #FFD700;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 180px;
        padding: 1.5rem;
        border: 1px solid #ddd;
    }

    .org-logo {
        max-width: 100%;
        max-height: 120px;
        object-fit: contain;
    }

    .org-title {
        font-size: 0.9rem;
        color: #333;
        margin-bottom: 0.5rem;
        min-height: 40px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }


    .card-body {
        padding: 1rem;
        background-color: transparent;
    }

    .btn-link {
        color: #0056b3;
        font-size: 0.85rem;
        padding: 0.375rem 0.75rem;
        border: 1px solid #0056b3;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .btn-link:hover {
        background-color: #0056b3;
        color: white;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
        padding: 8px 20px;
        font-size: 0.9rem;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .org-logo-container {
            height: 150px;
        }

        .org-logo {
            max-height: 100px;
        }

        .org-title {
            font-size: 0.8rem;
        }

        .btn-link {
            font-size: 0.8rem;
        }
    }
</style>
@endsection