@extends('layouts.app')

@section('content')
<!-- Agenda Detail Section -->
<div class="container-fluid p-0">
    <!-- Banner Section -->
    <div class="position-relative">
        <img src="{{ asset('storage/banners/berita2.jpg') }}" class="img-fluid w-100" alt="Agenda Banner" style="height: 400px; object-fit: cover;">
        <div class="position-absolute top-50 start-50 translate-middle text-white" style="background-color: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 8px; max-width: 600px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            <h1 class="fw-bold" style="color: #0056b3;">Diskominfo Bangkalan Gelar Bimtek Penguatan Implementasi PPID</h1>
            <p class="mb-2" style="color: #6c757d;">Dinas Komunikasi Dan Informatika Kabupaten Bangkalan</p>
            <div class="d-flex align-items-center justify-content-start text-dark mb-3">
                <i class="bi bi-calendar-event me-2"></i> 22 Maret 2025
                <span class="mx-3">|</span>
                <i class="bi bi-geo-alt me-2"></i> Aula Hotel Ningrat
            </div>
            <a href="#" class="btn btn-primary">Agenda Kegiatan</a>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Main Article -->
            <div class="col-lg-8">
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('storage/logo/logoMPP.png') }}" alt="MPP Bangkalan Logo" style="width: 50px; height: 50px;" class="me-3">
                        <h5 class="fw-bold mb-0">MPP Bangkalan</h5>
                    </div>
                    <p>
                        Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Bangkalan mengadakan bimbingan teknis
                        penguatan implementasi PPID untuk meningkatkan kualitas layanan informasi publik. Kegiatan ini
                        bertujuan untuk memberikan pemahaman yang komprehensif kepada para peserta terkait tata kelola
                        informasi publik yang efektif dan efisien.
                    </p>
                    <p>
                        Acara yang digelar pada <strong>22 Maret 2025</strong> ini dihadiri oleh para pejabat pemerintah daerah, tenaga ahli,
                        dan masyarakat umum. Diskusi seputar strategi komunikasi publik, manajemen data, dan pemanfaatan
                        teknologi informasi menjadi fokus utama dalam bimbingan teknis ini.
                    </p>
                    <p>
                        Dalam sambutannya, Kepala Diskominfo Bangkalan menyampaikan bahwa penguatan implementasi PPID
                        merupakan langkah penting untuk menciptakan transparansi informasi publik di era digital.
                    </p>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <!-- Social Media Links -->
                <div class="card border-0 shadow-sm mb-4 p-3">
                    <h6 class="fw-bold mb-3 text-center">Bagikan:</h6>
                    <div class="d-flex justify-content-center gap-4">
                        <a href="#" class="text-dark"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-linkedin fs-4"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-whatsapp fs-4"></i></a>
                        <a href="#" class="text-dark"><i class="bi bi-share fs-4"></i></a>
                    </div>
                </div>

                <!-- Related Agendas -->
                <div class="card border-0 shadow-sm p-3">
                    <h6 class="fw-bold mb-3" style="color: #0056b3;">Agenda Lainnya</h6>
                    <div class="d-flex flex-column gap-3">
                        @for ($i = 1; $i <= 4; $i++)
                        <div class="card border-0 shadow-sm">
                            <div class="row g-0">
                                <div class="col-4">
                                    <img src="{{ asset('storage/banners/berita2.jpg') }}" class="img-fluid rounded-start" alt="Agenda Thumbnail">
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-2">
                                        <p class="mb-1 fw-bold" style="font-size: 0.9rem;">Diskominfo Bangkalan Gelar Bimtek Penguatan Implementasi PPID</p>
                                        <a href="#" class="text-primary fw-bold" style="font-size: 0.9rem;">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection