@extends('layouts.app')

@section('content')
<!-- Header Section -->
<div class="container-fluid bg-primary text-white py-5 position-relative" style="height: 400px;">
    <!-- Background Image -->
    <div style="background-image: url('{{ asset('storage/banners/berita2.jpg') }}'); background-size: cover; background-position: center; height: 100%;"></div>
    
    <!-- Overlay Box -->
    <div class="container position-absolute top-50 start-50 translate-middle" style="background-color: #ffffff; border-radius: 8px; padding: 20px; max-width: 600px; transform: translateY(50%);">
        <h1 class="fw-bold text-center" style="color: #0056b3;">AGENDA KEGIATAN</h1>
        <p class="text-center" style="color: #0056b3;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="text-center mt-3">
            <a href="{{ route ('home') }}" class="btn btn-outline-primary d-inline-flex align-items-center" style="padding: 10px 20px; border-radius: 5px;">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </div>
    </div>
</div>

<!-- Agenda List Section -->
<div class="container py-5">
    <!-- Agenda List -->
    <h2 class="mb-4 fw-bold" style="color: #0056b3;">AGENDA KEGIATAN</h2>
    <div class="row g-4">
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{ route('agenda.show', $i) }}">
                            <img src="{{ asset('storage/banners/berita2.jpg') }}" class="img-fluid rounded-start" alt="Agenda {{ $i }}">
                        </a>
                    </div>
                    <div class="col-md-8 d-flex flex-column">
                        <div class="card-body flex-grow-1">
                            <p class="text-muted mb-2" style="font-size: 0.9rem;">
                                <i class="bi bi-calendar-event"></i> 22 Maret 2025
                                <span class="mx-2">—</span> 
                                <i class="bi bi-chat-dots"></i> Agenda Diskominfo
                            </p>
                            <a href="{{ route('agenda.show', $i) }}" class="text-decoration-none">
                                <h5 class="card-title fw-bold" style="color: #0056b3;">
                                    Diskominfo Bangkalan Gelar Bimtek Penguatan Implementasi PPD
                                </h5>
                            </a>
                            <p class="text-muted mb-3">
                                DINAS KOMUNIKASI DAN INFORMATIKA BANGKALAN
                            </p>
                        </div>
                        <div class="card-footer border-0 bg-white text-end">
                            <a href="{{ route('agenda.show', $i) }}" class="btn btn-outline-primary d-inline-flex align-items-center">
                                Learn More <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
    <div class="mt-4">
        <a href="#" class="btn btn-outline-primary d-inline-flex align-items-center view-more-btn">
            View More <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .bi {
        font-size: 1.1rem; 
    }
    .view-more-btn {
        background: transparent;
        color: #0056b3;
        border: 1px solid #0056b3;
        padding: 8px 16px;
        transition: all 0.3s ease;
    }
    
    .view-more-btn:hover {
        background: #0056b3;
        color: #fff;
        transform: translateY(-2px);
    }
</style>
@endsection