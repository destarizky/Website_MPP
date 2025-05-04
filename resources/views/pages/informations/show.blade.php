@extends('layouts.app')

@section('content')
<!-- Information Detail Section -->
<div class="container-fluid p-0">
    <!-- Banner Section -->
    <div class="position-relative">
        <img src="{{ asset('storage/banners/berita1.jpg') }}" class="img-fluid w-100" alt="ASN Ceremony Banner" style="height: 400px; object-fit: cover;">
        <div class="position-absolute bottom-0 start-0 text-white w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
            <div class="container">
                <span class="badge bg-primary mb-2">Badan Siber dan Sandi Negara</span>
                <h1 class="fw-bold mb-3" style="font-size: 2.5rem;">
                    Setia Mengabdi selama 30 tahun ASN Dinas Kominfo Bangkalan terima penghargaan dharma persandian
                </h1>
            </div>
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
                        KEPALA Badan Siber dan Sandi Negara (BSSN), Hinsa Siburian, memberikan penghargaan Dharma Persandian kepada Subari, S.E., seorang Aparatur Sipil Negara (ASN) yang bertugas di Dinas Kominfo Kabupaten Bangkalan. Penghargaan tersebut diberikan sebagai apresiasi atas dedikasi, 
                        kesetiaan, dan pengabdian Subari selama 30 tahun di bidang keamanan siber dan persandian.
                    </p>
                    <p>
                        Penganugerahan ini tertuang dalam Keputusan Kepala BSSN Nomor 246 Tahun 2024, yang menetapkan bahwa penghargaan Dharma Persandian diberikan kepada ASN yang memenuhi kriteria pengabdian tanpa cela, disiplin, 
                        dan tidak pernah tersangkut permasalahan hukum.
                    </p>
                    <p>
                        Pelaksana Tugas (Plt) Kepala Dinas Kominfo Kabupaten Bangkalan Moh. Hasan Faisol dalam sambutannya pada apel pagi pada Kamis (28/11/2024) menyampaikan rasa bangga atas pencapaian ini. "Penghargaan ini menjadi bukti dedikasi ASN dalam menjaga keamanan informasi dan siber di lingkungan Pemerintah Kabupaten Bangkalan. 
                        Semoga menjadi motivasi bagi kita semua untuk terus berkarya dengan integritas," ujarnya.
                    </p>
                    <p>
                        Penghargaan Dharma Persandian merupakan bentuk apresiasi yang diberikan kepada ASN di bidang persandian atas kontribusinya dalam mendukung keamanan negara melalui teknologi siber. 
                        Keberhasilan Subari menerima penghargaan ini juga menjadi bukti pentingnya peran ASN dalam menjaga sistem keamanan informasi di pemerintahan.
                    </p>
                    <p>
                        Keputusan ini mulai berlaku sejak 1 April 2024 dan diserahkan secara resmi oleh Kepala BSSN dengan dokumen yang telah dilengkapi tanda tangan elektronik resmi. 
                        Semoga prestasi ini terus menginspirasi ASN lainnya untuk memberikan yang terbaik bagi bangsa dan negara.
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
                    <h6 class="fw-bold mb-3" style="color: #0056b3;">Informasi Lainnya</h6>
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