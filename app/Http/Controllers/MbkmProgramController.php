<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbkmProgramController extends Controller
{
    public function create()
    {
        return view('mbkm_program.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nama_program' => 'required|string|max:255',
            'batch_program' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        // Save the data to the database (you need to create a model and migration for this)

        // Redirect back with a success message
        return redirect()->route('mbkm-program.create')->with('success', 'Program MBKM berhasil ditambahkan!');
    }
}
