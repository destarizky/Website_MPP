@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero bg-light py-5">
    <div class="container">
        <h1 class="fw-bold">SELAMAT DATANG</h1>
        <h2 class="text-secondary">DI MAL PELAYANAN PUBLIK</h2>
        <div class="d-inline-block bg-primary text-white px-3 py-1 mt-3" style="border-radius: 5px;">
            <p class="mb-0">Kabupaten Bangkalan</p>
        </div>
        <p class="text-secondary mt-3">
            Bangkalan Plaza Lt. 3, Jl. Halim Perdana Kusuma, Area Sawah, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116
        </p>
        <img src="{{ asset('storage/banners/mpp-building.jpg') }}" alt="MPP Building" class="img-fluid w-100 my-4">
        <div class="d-flex justify-content gap-3 mt-3">
            <a href="mailto:dpmptsp@bangkalankab.go.id" class="btn btn-outline-primary">dpmptsp@bangkalankab.go.id</a>
            <a href="tel:089980861166" class="btn btn-primary">089980861166</a>
        </div>
    </div>
</section>

<!-- Additional Section Based on Image -->
<section class="about-mpp py-5" style="background-color: #0056b3;">
    <div class="container">
        <h2 class="fw-bold text-center text-white">TENTANG MPP</h2>
        <div class="bg-white p-4 rounded-3 mt-4">
            <p class="text-center mb-0" style="color: #0056b3;">
                MPP Bangkalan merupakan salah satu upaya Pemerintah Kabupaten Bangkalan untuk meningkatkan kualitas dan standar pelayanan publik kepada masyarakat. 
                MPP Bangkalan telah beroperasi sejak tahun 2020, namun baru tahun 2023 ini dinyatakan layak untuk diresmikan setelah memenuhi kriteria yang ditetapkan oleh Kementerian PANRB.
                MPP Bangkalan menawarkan kemudahan, kecepatan, keterjangkauan, keamanan dan kenyamanan kepada masyarakat dalam mendapatkan pelayanan publik. Saat ini, terdapat 105 jenis produk layanan yang disediakan oleh 13 instansi pemerintah, baik pusat maupun daerah, yang telah bergabung di MPP Bangkalan.
            </p>
        </div>
        <div class="d-flex justify-content-center gap-4 mt-5">
            <div class="text-center">
                <div class="icon bg-white rounded-circle mb-3 clickable-icon" data-icon="1" style="width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-lightbulb-fill" style="color: #0056b3;"></i>
                </div>
                <p class="fw-bold text-white">Transparansi Pelayanan</p>
            </div>
            <div class="text-center">
                <div class="icon bg-white rounded-circle mb-3 clickable-icon" data-icon="2" style="width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-people-fill" style="color: #0056b3;"></i>
                </div>
                <p class="fw-bold text-white">Kenyamanan Pelayanan</p>
            </div>
            <div class="text-center">
                <div class="icon bg-white rounded-circle mb-3 clickable-icon" data-icon="3" style="width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">
                    <i class="bi bi-funnel-fill" style="color: #0056b3;"></i>
                </div>
                <p class="fw-bold text-white">Efisiensi Pelayanan</p>
            </div>
        </div>
</section>

<style>
    .clickable-icon {
        cursor: pointer;
        transition: all 0.3s ease;
        background-color: #ffffff !important;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .clickable-icon:hover {
        transform: scale(1.1);
    }

    .clickable-icon.active {
        background-color: #ffc107 !important; /* Yellow background when active */
    }

    .clickable-icon i {
        font-size: 1.5rem;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const icons = document.querySelectorAll('.clickable-icon');
        
        icons.forEach(icon => {
            icon.addEventListener('click', function() {
                icons.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>

<!-- Operating Hours Section -->
<section class="operating-hours py-5">
    <div class="container text-center">
        <h2 class="fw-bold" style="color: #0056b3;">JAM OPERASIONAL</h2>
        <p class="text-secondary">Jam Operasional tersebut bisa berubah kapanpun</p>
        <div class="row align-items-center mt-4">
            <!-- Illustration -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('storage/banners/pageJamOperasional.png') }}" alt="Operating Hours Illustration" class="img-fluid">
            </div>
            <!-- Operating Hours -->
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <!-- Monday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock"></i>
                            <span>Senin</span>
                        </div>
                        <p class="mb-0">08:00 - 16:00</p>
                    </div>
                    <!-- Tuesday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock"></i>
                            <span>Selasa</span>
                        </div>
                        <p class="mb-0">08:00 - 16:00</p>
                    </div>
                    <!-- Wednesday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock"></i>
                            <span>Rabu</span>
                        </div>
                        <p class="mb-0">08:00 - 16:00</p>
                    </div>
                    <!-- Thursday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock"></i>
                            <span>Kamis</span>
                        </div>
                        <p class="mb-0">08:00 - 16:00</p>
                    </div>
                    <!-- Friday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock"></i>
                            <span>Jumat</span>
                        </div>
                        <p class="mb-0">08:00 - 16:00</p>
                    </div>
                    <!-- Saturday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2 text-danger">
                            <i class="bi bi-clock"></i>
                            <span>Sabtu</span>
                        </div>
                        <p class="mb-0 text-danger">Tidak Beroperasional</p>
                    </div>
                    <!-- Sunday -->
                    <div class="p-3 bg-white rounded operating-hours-card" style="width: 200px;">
                        <div class="d-flex align-items-center gap-2 text-danger">
                            <i class="bi bi-clock"></i>
                            <span>Minggu</span>
                        </div>
                        <p class="mb-0 text-danger">Tidak Beroperasional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .operating-hours-card {
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid #dee2e6;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .operating-hours-card:hover {
        transform: translateY(-2px);
    }

    .operating-hours-card.active {
        background-color: #0056b3 !important;
        color: white !important;
    }

    .operating-hours-card.active i,
    .operating-hours-card.active span,
    .operating-hours-card.active p {
        color: white !important;
    }

    .operating-hours-card.active .text-danger {
        color: white !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const operatingHoursCards = document.querySelectorAll('.operating-hours-card');
        
        operatingHoursCards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove active class from all cards
                operatingHoursCards.forEach(c => c.classList.remove('active'));
                // Add active class to clicked card
                this.classList.add('active');
            });
        });
    });
</script>

<!-- Institution Section -->
<section class="institutions py-5">
    <div class="container text-center">
        <h2 class="fw-bold" style="color: #0056b3;">INSTITUSI LAYANAN</h2>
        <div class="row justify-content-center mt-4">
            <!-- First Row -->
            <div class="col-12 d-flex justify-content-center flex-wrap gap-4 mb-4">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 1" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 2" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 3" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 4" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 5" class="img-fluid institution-logo">
            </div>
            <!-- Second Row -->
            <div class="col-12 d-flex justify-content-center flex-wrap gap-4 mb-4">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 6" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 7" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 8" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 9" class="img-fluid institution-logo">
                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="Logo 10" class="img-fluid institution-logo">
            </div>

            <!-- Dots for navigation -->
            <div class="d-flex justify-content-center gap-2 mt-4">
            <span class="dot bg-primary rounded-circle" style="width: 10px; height: 10px;"></span>
            <span class="dot bg-secondary rounded-circle" style="width: 10px; height: 10px;"></span>
            <span class="dot bg-secondary rounded-circle" style="width: 10px; height: 10px;"></span>
        </div>
        </div>
    </div>
</section>

<style>
    .institution-logo {
        width: 180px;
        height: 160px;
        object-fit: contain;
        padding: 15px;
        transition: transform 0.3s ease;
        margin: 0 15px;  /* Increased margin for better spacing */
    }

    .institution-logo:hover {
        transform: scale(1.1);
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .institution-logo {
            width: 160px;
            height: 140px;
            margin: 0 10px;
        }
    }

    @media (max-width: 768px) {
        .institution-logo {
            width: 140px;
            height: 120px;
            margin: 0 8px;
        }
    }

    @media (max-width: 576px) {
        .institution-logo {
            width: 120px;
            height: 100px;
            margin: 0 5px;
        }
    }
</style>

<!-- Activity Information Section -->
<section class="activities bg-light py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold" style="color: #0056b3;">INFORMASI KEGIATAN</h2>
            <a href="{{ route('informations.index') }}" class="btn btn-outline-primary">LIHAT SEMUA INFORMASI <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">
            @for ($i = 0; $i < 6; $i++)
                <div class="col">
                    <div class="card h-100 shadow border-0">
                        <a href="{{ route('informations.show', $i) }}" class="text-decoration-none">
                            <img src="{{ asset('storage/banners/berita1.jpg') }}" 
                                 class="card-img-top" 
                                 alt="Activity"
                                 style="transition: opacity 0.3s ease;">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('informations.show', $i) }}" class="text-decoration-none">
                                <h5 class="card-title text-primary hover-title">
                                    Setia Mengabdi selama 30 tahun ASN Dinas Kominfo Bangkalan terima penghargaan dharma persandian
                                </h5>
                            </a>
                            <p class="text-primary fw-bold mb-1" style="font-size: 0.9rem;">Badan Siber dan Sandi Negara ( BSSN )</p>
                            <p class="text-muted mb-2" style="font-size: 0.8rem;">28 November 2024</p>
                            <div class="d-flex align-items-center gap-2">
                                <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="MPP Bangkalan Logo" style="width: 30px;">
                                <p class="text-secondary mb-0" style="font-size: 0.9rem;">MPP Bangkalan</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<!-- Agenda Section -->
<section class="agenda py-5">
    <div class="container">
        <h2 class="text-primary mb-4">AGENDA KEGIATAN</h2>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-12 mb-3">
                    <div class="card border">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/banners/berita2.jpg') }}" 
                                     class="img-fluid" 
                                     alt="Agenda"
                                     style="height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column h-100">
                                    <!-- Keep existing content -->
                                    <div class="flex-grow-1">
                                        <p class="text-muted mb-2" style="font-size: 0.9rem;">
                                            <i class="bi bi-calendar-event"></i> 22 Maret 2025
                                            <span class="mx-2">—</span> 
                                            <i class="bi bi-chat-dots"></i> Agenda Diskominfo
                                        </p>
                                        <div class="mb-2">
                                            <span class="text-primary">Dinas Komunikasi dan Informatika</span>
                                        </div>
                                        <h5 class="card-title mb-2">
                                            Diskominfo Bangkalan Gelar Bimtek Penguatan Implementasi PPID
                                        </h5>
                                        <p class="text-muted small mb-3">
                                            DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN BANGKALAN
                                        </p>
                                    </div>
                                    <!-- Update the Learn More button -->
                                    <div class="text-end learn-more-wrapper">
                                        <a href="{{ route('agenda.show', $i) }}" 
                                           class="btn btn-primary px-4 learn-more-btn">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-start mt-3">
            <a href="{{ route('agenda.index') }}" class="btn btn-outline-primary agenda-link">
                Lihat semua agenda <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .card {
        background: #ffffff;
        transition: transform 0.2s ease;
    }

    .card img:hover {
        opacity: 0.8;
    }

    .card:hover {
        transform: translateY(-2px);
    }

    .text-primary {
        color: #0d6efd !important;
    }

    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0b5ed7;
    }

    .agenda-link {
        color: #0056b3;
        border-color: #0056b3;
        transition: all 0.3s ease;
    }

    .agenda-link:hover {
        background-color: #0056b3;
        color: white;
        transform: translateY(-2px);
    }

    .agenda-link:hover i {
        transform: translateX(5px);
    }

    .agenda-link i {
        transition: transform 0.3s ease;
    }

    .hover-title {
        transition: color 0.3s ease;
    }

    .hover-title:hover {
        color: #003d7a !important;
    }

    .learn-more-wrapper {
        position: relative;
        overflow: hidden;
    }

    .learn-more-btn {
        transform: translateY(0);
        transition: transform 0.3s ease-in-out;
        position: relative;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const agendaCards = document.querySelectorAll('.agenda-card');
        
        agendaCards.forEach(card => {
            card.addEventListener('click', function() {
                agendaCards.forEach(c => c.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>

@endsection