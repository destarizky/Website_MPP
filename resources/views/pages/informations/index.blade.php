@extends('layouts.app')

@section('content')

<!-- Informasi Section -->
<div class="container-fluid bg-primary text-white py-5 position-relative" style="height: 400px;">
    <!-- Background Image -->
    <div style="background-image: url('{{ asset('storage/banners/berita2.jpg') }}'); background-size: cover; background-position: center; height: 100%;"></div>
    
    <!-- Overlay Box -->
    <div class="container position-absolute top-50 start-50 translate-middle" style="background-color: #ffffff; border-radius: 8px; padding: 20px; max-width: 600px; transform: translateY(50%);">
        <h1 class="fw-bold text-center" style="color: #0056b3;">INFORMASI</h1>
        <p class="text-center" style="color: #0056b3;">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</p>
        <div class="text-center mt-3">
            <a href="{{ route ('home') }}" class="btn btn-outline-primary d-inline-flex align-items-center" style="padding: 10px 20px; border-radius: 5px;">
                <i class="bi bi-house-door me-2"></i> Beranda
            </a>
        </div>
    </div>
</div>

<!-- News Grid -->
<div class="container py-5">
        <div class="row g-4 justify-content-center">
            @for ($i = 1; $i <= 9; $i++)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 news-card">
                        <div class="news-image-container">
                            <a href="{{ route('informations.show', $i) }}">
                                <img src="{{ asset('storage/banners/berita1.jpg') }}" 
                                    class="card-img-top news-image" 
                                    alt="ASN Ceremony Image">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1rem;">
                                <a href="{{ route('informations.show', $i) }}" class="text-decoration-none news-title">
                                    Setia Mengabdi Selama 30 Tahun, ASN Dinas Kominfo Bangkalan Terima Penghargaan Dharma Persandian
                                </a>
                            </h5>
                            <p class="card-text text-muted" style="font-size: 0.9rem;">
                                KEPALA Badan Siber dan Sandi Negara (BSSN), Hinsa Siburian, memberikan penghargaan Dharma Persandian kepada Subari, S.E, seorang Aparatur Sipil Negara (ASN) yang bertugas di Dinas Kominfo Kabupaten...
                            </p>
                        <div class="d-flex align-items-center mt-3">
                            <small class="news-date">24 November 2024</small>
                        </div>
                    </div>
                    <div class="card-footer bg-primary text-center border-0">
                        <img src="{{ asset('storage/logo/logoMPP.png') }}" 
                            alt="MPP Logo" 
                            style="height: 30px;">
                        <span class="text-white footer-text">MAL PELAYANAN PUBLIK KABUPATEN BANGKALAN</span>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>

<style>
    .informasi {
        background-color: #0d6efd;
    }

    .text-primary {
        color: #0d6efd !important;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
        padding: 8px 20px;
        font-size: 0.9rem;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }

    /* Custom styles for the image container */
    .col-6:last-child {
        padding: 0;
        height: 300px;
        position: absolute;
        right: 0;
        top: 0;
    }

    .col-6:last-child img {
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
    }

    /* Left content spacing */
    .col-6:first-child {
        padding: 2rem;
    }

    .news-card {
        width: 100%;
        height: auto;
        min-height: 591px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .news-image-container {
        width: 100%;
        height: 0;
        padding-bottom: 77.37%; /* Maintains 380x294 aspect ratio */
        position: relative;
        overflow: hidden;
    }

    .news-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .footer-text {
        font-size: 11px;
        font-weight: bold;
        margin-left: 8px;
    }

    .news-title {
        color: #0056b3;
        transition: color 0.3s ease;
    }

    .news-title:hover {
        color: #003d7a;
    }

    .news-date {
        color: #0056b3;
        font-weight: 500;
    }

    .news-image-container a:hover .news-image {
        transform: scale(1.05);
    }

    /* Responsive text adjustments */
    @media (max-width: 768px) {
        .header-content h1 {
            font-size: 2rem;
        }
        
        .header-content p {
            font-size: 1rem;
        }

        .card-title {
            font-size: 0.9rem !important;
        }

        .card-text {
            font-size: 0.8rem !important;
        }

        .footer-text {
            font-size: 10px;
        }
</style>

@endsection