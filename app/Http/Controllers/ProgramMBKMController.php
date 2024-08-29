<?php

namespace App\Http\Controllers;

use App\Models\ProgramMbkm;
use Illuminate\Http\Request;

class ProgramMBKMController extends Controller
{
    public function index()
    {
        $programs = ProgramMbkm::all();
        return view('programs.index', compact('programs'));
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'periode' => 'required|string',
            'program' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        ProgramMbkm::create($validated);

        return redirect()->route('programs.index');
    }

    public function edit(ProgramMbkm $program)
    {
        return view('programs.edit', compact('program'));
    }

    public function update(Request $request, ProgramMbkm $program)
    {
        $validated = $request->validate([
            'periode' => 'required|string',
            'program' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $program->update($validated);

        return redirect()->route('programs.index');
    }

    public function destroy(ProgramMbkm $program)
    {
        $program->delete();
        return redirect()->route('programs.index');
    }
}
