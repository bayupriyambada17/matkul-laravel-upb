<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMbkm;
use Illuminate\Support\Facades\File;

class PendaftaranMBKMController extends Controller
{
    public function index()
    {
        $pendaftarans = PendaftaranMbkm::paginate(10);
        return view('pendaftarans.index', compact('pendaftarans'));
    }

    public function create()
    {
        return view('pendaftarans.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_mbkm' => 'required|string',
            'periode' => 'required|string',
            'nama' => 'required|string',
            'nim' => 'required|string',
            'ipk' => 'required|numeric|min:0|max:4',
            'total_sks' => 'required|integer|min:80|max:160',
            'cv' => 'required|file|mimes:pdf',
            'khs' => 'required|file|mimes:pdf',
            'portofolio' => 'required|file|mimes:zip',
        ]);

        $validated['cv'] = $request->file('cv')->storeAs('cv', uniqid() . '.' . $request->file('cv')->getClientOriginalExtension(), 'public');
        $validated['khs'] = $request->file('khs')->storeAs('khs', uniqid() . '.' . $request->file('khs')->getClientOriginalExtension(), 'public');
        $validated['portofolio'] = $request->file('portofolio')->storeAs('portofolio', uniqid() . '.' . $request->file('portofolio')->getClientOriginalExtension(), 'public');

        PendaftaranMbkm::create($validated);

        return redirect()->route('pendaftarans.index');
    }

    public function edit(PendaftaranMBKM $pendaftaran)
    {
        return view('pendaftarans.edit', compact('pendaftaran'));
    }

    public function update(Request $request, PendaftaranMbkm $pendaftaran)
    {
        $validated = $request->validate([
            'program_mbkm' => 'required|string',
            'periode' => 'required|string',
            'nama' => 'required|string',
            'nim' => 'required|string',
            'ipk' => 'required|numeric|min:0|max:4',
            'total_sks' => 'required|integer|min:80|max:160',
            'cv' => 'required|file|mimes:pdf',
            'khs' => 'required|file|mimes:pdf',
            'portofolio' => 'required|file|mimes:zip',
        ]);

        if (File::exists(public_path($pendaftaran->cv))) {
            File::delete(public_path($pendaftaran->cv));
        }

        if (File::exists(public_path($pendaftaran->khs))) {
            File::delete(public_path($pendaftaran->khs));
        }

        if (File::exists(public_path($pendaftaran->portofolio))) {
            File::delete(public_path($pendaftaran->portofolio));
        }

        $validated['cv'] = $request->file('cv')->storeAs('cv', uniqid() . '.' . $request->file('cv')->getClientOriginalExtension(), 'public');
        $validated['khs'] = $request->file('khs')->storeAs('khs', uniqid() . '.' . $request->file('khs')->getClientOriginalExtension(), 'public');
        $validated['portofolio'] = $request->file('portofolio')->storeAs('portofolio', uniqid() . '.' . $request->file('portofolio')->getClientOriginalExtension(), 'public');



        $pendaftaran->update($validated);

        return redirect()->route('pendaftarans.index');
    }

    public function destroy(PendaftaranMbkm $pendaftaran)
    {
        if (File::exists(public_path($pendaftaran->cv))) {
            File::delete(public_path($pendaftaran->cv));
        }

        if (File::exists(public_path($pendaftaran->khs))) {
            File::delete(public_path($pendaftaran->khs));
        }

        if (File::exists(public_path($pendaftaran->portofolio))) {
            File::delete(public_path($pendaftaran->portofolio));
        }
        $pendaftaran->delete();
        return redirect()->route('pendaftarans.index');
    }
}
