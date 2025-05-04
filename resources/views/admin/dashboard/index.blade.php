@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- Statistics Cards -->
        <div class="row">
            <!-- Information Stats -->
            <div class="col-lg-4 col-md-6">
                <div class="card stats-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="icon-big text-center text-primary">
                                    <i class="bi bi-info-circle-fill"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="card-category">Total Information</p>
                                    <h3 class="card-title">{{ $total_information }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agenda Stats -->
            <div class="col-lg-4 col-md-6">
                <div class="card stats-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="icon-big text-center text-warning">
                                    <i class="bi bi-calendar-event-fill"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="card-category">Total Agendas</p>
                                    <h3 class="card-title">{{ $total_agendas }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Institution Stats -->
            <div class="col-lg-4 col-md-6">
                <div class="card stats-card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="icon-big text-center text-success">
                                    <i class="bi bi-building-fill"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="card-category">Total Institutions</p>
                                    <h3 class="card-title">{{ $total_institutions }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="row mt-4">
            <!-- Recent Information -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recent_information as $info)
                                    <tr>
                                        <td>{{ Str::limit($info->title, 30) }}</td>
                                        <td>{{ $info->created_at->format('d M Y') }}</td>
                                        <td>
                                            <span class="badge bg-success">Published</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Agendas -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Upcoming Agendas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($upcoming_agendas as $agenda)
                                    <tr>
                                        <td>{{ Str::limit($agenda->title, 30) }}</td>
                                        <td>{{ $agenda->date->format('d M Y') }}</td>
                                        <td>
                                            <span class="badge bg-warning">Upcoming</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .stats-card {
        transition: transform 0.3s ease;
    }

    .stats-card:hover {
        transform: translateY(-5px);
    }

    .icon-big {
        font-size: 2.5rem;
    }

    .numbers {
        text-align: right;
    }

    .card-category {
        color: #9A9A9A;
        font-size: 14px;
        margin-bottom: 0;
    }

    .card-title {
        margin-bottom: 0;
    }

    .table {
        margin-bottom: 0;
    }

    .wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

.sidebar {
    min-width: 250px;
    max-width: 250px;
    min-height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
}

.main-panel {
    width: calc(100% - 250px);
    margin-left: 250px;
    min-height: 100vh;
}

.content {
    padding: 80px 30px 30px;
}

.navbar {
    z-index: 1030;
}
</style>
@endpush