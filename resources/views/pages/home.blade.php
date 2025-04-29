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

<!-- Operating Hours Section -->
<section class="operating-hours py-5">
    <div class="container text-center">
        <h2 class="fw-bold">JAM OPERASIONAL</h2>
        <p class="text-secondary">Jam operasional pelayanan MPP Kabupaten Bangkalan</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
            <div class="p-3 bg-light rounded">Senin: 08:00 - 15:00</div>
            <div class="p-3 bg-light rounded">Selasa: 08:00 - 15:00</div>
            <div class="p-3 bg-light rounded">Rabu: 08:00 - 15:00</div>
            <div class="p-3 bg-light rounded">Kamis: 08:00 - 15:00</div>
            <div class="p-3 bg-light rounded">Jumat: 08:00 - 15:00</div>
        </div>
    </div>
</section>

<!-- Institution Section -->
<section class="institutions py-5">
    <div class="container text-center">
        <h2 class="fw-bold">INSTITUSI LAYANAN</h2>
        <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
            <!-- Add institution logos dynamically -->
            @for ($i = 0; $i < 10; $i++)
                <img src="{{ asset('images/institution-logo.png') }}" alt="Institution Logo" class="img-fluid" style="width: 80px;">
            @endfor
        </div>
    </div>
</section>

<!-- Activity Information Section -->
<section class="activities bg-light py-5">
    <div class="container">
        <h2 class="fw-bold text-center">INFORMASI KEGIATAN</h2>
        <div class="row mt-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('images/activity.jpg') }}" class="card-img-top" alt="Activity">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan</h5>
                            <p class="card-text">Deskripsi singkat kegiatan...</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Lihat Semua Informasi</a>
        </div>
    </div>
</section>

<!-- Agenda Section -->
<section class="agenda py-5">
    <div class="container">
        <h2 class="fw-bold text-center">AGENDA KEGIATAN</h2>
        <div class="row mt-4">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/agenda.jpg') }}" class="img-fluid rounded-start" alt="Agenda">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Agenda Kegiatan</h5>
                                    <p class="card-text">Deskripsi singkat agenda kegiatan...</p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Lihat Semua Agenda</a>
        </div>
    </div>
</section>

@endsection