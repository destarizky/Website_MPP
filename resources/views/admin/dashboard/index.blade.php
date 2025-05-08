@extends('partials.admin.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Statistics Cards -->
        <div class="row mt-4">
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
                                    <h3 class="card-title">15</h3>
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
                                    <h3 class="card-title">8</h3>
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
                                    <h3 class="card-title">12</h3>
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
                                    <tr>
                                        <td>Sample Information 1</td>
                                        <td>24 Apr 2025</td>
                                        <td><span class="badge bg-success">Published</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sample Information 2</td>
                                        <td>23 Apr 2025</td>
                                        <td><span class="badge bg-success">Published</span></td>
                                    </tr>
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
                                    <tr>
                                        <td>Sample Agenda 1</td>
                                        <td>25 Apr 2025</td>
                                        <td><span class="badge bg-warning">Upcoming</span></td>
                                    </tr>
                                    <tr>
                                        <td>Sample Agenda 2</td>
                                        <td>26 Apr 2025</td>
                                        <td><span class="badge bg-warning">Upcoming</span></td>
                                    </tr>
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
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
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

    .content-wrapper {
        padding-top: 20px;
    }
</style>
@endpush