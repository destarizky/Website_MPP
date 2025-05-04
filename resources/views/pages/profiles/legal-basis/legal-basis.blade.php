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
                <h1 class="text-white fw-bold mb-3">DASAR HUKUM</h1>
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
                <p class="text-primary text-center mb-5" style="font-size: 0.95rem; line-height: 1.8;">
                    "Dasar hukum berkaitan mengenai landasan dalam penyelenggaraan Mal Pelayanan Publik (MPP), menerangkan bahwa setiap layanan yang diberikan sesuai dengan peraturan perundang-undangan yang berlaku. Regulasi ini dirancang untuk menjamin hak-hak secara transparan, efisien, dan kebutuhan akan akses bagi masyarakat dalam mempercepat pelayanan publik"
                </p>
            </div>
        </div>
    </div>

    <!-- Legal Basis Section -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card bg-primary text-white border-0">
                    <div class="card-body p-4">
                        <h2 class="card-title display-6 fw-bold mb-4">MENIMBANG</h2>
                        <p class="mb-5">
                            Bahwa sehubungan dengan ditetapkannya Kabupaten Bangkalan sebagai salah satu Kabupaten Penyelenggara Mal Pelayanan Publik berdasarkan Keputusan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 11 Tahun 2018 tentang Penetapan Lokasi Penyelenggaraan Mal Pelayanan Publik Tahun 2018, serta dalam rangka tertib administrasi Penyelenggaraan Mal Pelayanan Publik;
                        </p>

                        <h2 class="card-title display-6 fw-bold mb-4">MENGINGAT</h2>
                        <ol class="ps-3">
                            <li class="mb-3">Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik;</li>
                            
                            <li class="mb-3">Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintah Daerah sebagaimana telah diubah terakhir dengan Undang - Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang - Undang Nomor 23 Tahun 2014 Tentang Pemerintahan Daerah;</li>
                            
                            <li class="mb-3">Peraturan Pemerintah Nomor 58 Tahun 2005 tentang Pengelolaan Keuangan Daerah;</li>
                            
                            <li class="mb-3">Peraturan Pemerintah Nomor 96 Tahun 2012 tentang Pelaksanaan Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik;</li>
                            
                            <li class="mb-3">Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah;</li>
                            
                            <li class="mb-3">Peraturan Presiden Nomor 97 Tahun 2014 tentang Penyelenggaraan Pelayanan Terpadu Satu Pintu;</li>
                            
                            <li class="mb-3">Peraturan Menteri Dalam Negeri Nomor 13 Tahun 2006 tentang Pedoman Pengelolaan Keuangan Daerah sebagaimana telah diubah terakhir dengan Peraturan Menteri Dalam Negeri Nomor 21 Tahun 2011;</li>
                            
                            <li class="mb-3">Peraturan Menteri Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi Republik Indonesia Nomor 23 Tahun 2017 Tentang Penyelenggaraan Mal Pelayanan Publik;</li>
                        </ol>
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

    .badge {
        padding: 8px 16px;
        border-radius: 4px;
        font-weight: 500;
        font-size: 14px;
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

    /* Legal basis specific styles */
    ol {
        list-style-type: decimal;
        color: white;
    }
    
    ol li {
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .card-body p {
        line-height: 1.8;
    }

    .text-primary {
        color: #0056b3 !important;
    }

    @media (max-width: 768px) {
        .header-content h1 {
            font-size: 36px;
        }
        
        .header-content p {
            font-size: 16px;
        }
        
        .card-body {
            padding: 1.5rem !important;
        }
        
        ol {
            padding-left: 1.5rem;
        }
    }
</style>
@endsection