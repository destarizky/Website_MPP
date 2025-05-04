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
                <h1 class="text-white fw-bold mb-3">SARANA & PRASARANA</h1>
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

    <!-- Facilities Grid Section -->
<div class="container mt-5">
    <div class="row g-4">
        <!-- Ruang Tunggu -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/RuangTunggu.jpg') }}" class="card-img-top" alt="Ruang Tunggu">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Ruang Tunggu</h5>
                </div>
            </div>
        </div>

        <!-- Media Informasi -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/MediaInformasi.jpg') }}" class="card-img-top" alt="Media Informasi">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Media Informasi</h5>
                </div>
            </div>
        </div>

        <!-- Pendingin Ruangan -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/PendinginRuangan.jpg') }}" class="card-img-top" alt="Pendingin Ruangan">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Pendingin Ruangan</h5>
                </div>
            </div>
        </div>

        <!-- Informasi Antrian -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/InformasiAntrian.jpg') }}" class="card-img-top" alt="Informasi Antrian">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Informasi Antrian</h5>
                </div>
            </div>
        </div>

        <!-- Informasi -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/Informasi.jpg') }}" class="card-img-top" alt="Informasi">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Informasi</h5>
                </div>
            </div>
        </div>

        <!-- Musholla -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/Musholla.jpg') }}" class="card-img-top" alt="Musholla">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Musholla</h5>
                </div>
            </div>
        </div>

        <!-- Smooking Area -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/SmokingArea.jpg') }}" class="card-img-top" alt="Smooking Area">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Smooking Area</h5>
                </div>
            </div>
        </div>

        <!-- Ruang Tunggu 2 -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/RuangTunggu2.jpg') }}" class="card-img-top" alt="Ruang Tunggu">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Ruang Tunggu</h5>
                </div>
            </div>
        </div>

        <!-- Ruang Layanan -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/RuangLayanan.jpg') }}" class="card-img-top" alt="Ruang Layanan">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Ruang Layanan</h5>
                </div>
            </div>
        </div>

        <!-- Ruang P3K -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/RuangP3K.jpg') }}" class="card-img-top" alt="Ruang P3K">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Ruang P3K</h5>
                </div>
            </div>
        </div>

        <!-- Kursi Roda -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/KursiRoda.jpg') }}" class="card-img-top" alt="Kursi Roda">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Kursi Roda</h5>
                </div>
            </div>
        </div>

        <!-- Ruang Bermain -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/RuangBermain.jpg') }}" class="card-img-top" alt="Ruang Bermain">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Ruang Bermain</h5>
                </div>
            </div>
        </div>

        <!-- Ruang Laktasi -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/RuangLaktasi.jpg') }}" class="card-img-top" alt="Ruang Laktasi">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Ruang Laktasi</h5>
                </div>
            </div>
        </div>

        <!-- Mesin Antrian -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/MesinAntrian.jpg') }}" class="card-img-top" alt="Media Antrian">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Mesin Antrian</h5>
                </div>
            </div>
        </div>

        <!-- Kotak Saran -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/KotakSaran.jpg') }}" class="card-img-top" alt="Kotak Saran">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Kotak Saran</h5>
                </div>
            </div>
        </div>

        <!-- Parkir -->
        <div class="col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="{{ asset('storage/facilities/Parkir.jpg') }}" class="card-img-top" alt="Parkir">
                <div class="card-body text-center">
                    <h5 class="card-title text-uppercase">Parkir</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-start mt-4 mb-5" style="margin-left: 20px;">
                <button class="btn btn-outline-primary see-more-btn" id="lihatSelengkapnya">
                    <span class="btn-text">Lihat selengkapnya</span>
                    <i class="bi bi-chevron-down ms-2"></i>
                </button>
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
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .card:hover {
        transform: translateY(-5px);
        background-color: #ffc107;
        border-color: #ffd700; /* Golden yellow border */
    }

    .card:hover .card-title {
        color: #0056b3; /* Keep blue color on hover */
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
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

    .card-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0;
        color: #0056b3;
    }

    .see-more-btn {
        position: relative;
        overflow: hidden;
        padding: 10px 25px;
        transition: all 0.3s ease;
    }

    .see-more-btn .btn-text {
        display: inline-block;
        transform: translateX(0);
        transition: transform 0.3s ease;
    }

    .see-more-btn:hover .btn-text {
        transform: translateX(-10px);
    }

    .see-more-btn:hover {
        background-color: #0056b3;
        color: white;
    }

    .see-more-btn i {
        transition: transform 0.3s ease;
    }

    .see-more-btn:hover i {
        transform: rotate(180deg);
    }
</style>
@endsection