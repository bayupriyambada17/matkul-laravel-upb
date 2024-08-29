<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Sample data to simulate what's displayed in the dashboard
        $data = [
            'jumlah_pendaftar' => 2819,
            'jumlah_peserta' => 1,
            'jumlah_laporan' => 6621,
        ];

        return view('dashboard.index', compact('data'));
    }
}
