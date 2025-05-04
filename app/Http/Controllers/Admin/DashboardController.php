<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Temporary dummy data
        $data = [
            'total_information' => 15,
            'total_agendas' => 8,
            'total_institutions' => 12,
            'recent_information' => collect([
                ['title' => 'Sample Information 1', 'created_at' => now()],
                ['title' => 'Sample Information 2', 'created_at' => now()],
            ]),
            'upcoming_agendas' => collect([
                ['title' => 'Sample Agenda 1', 'date' => now()],
                ['title' => 'Sample Agenda 2', 'date' => now()],
            ])
        ];

        return view('admin.dashboard.index', $data);
    }
}