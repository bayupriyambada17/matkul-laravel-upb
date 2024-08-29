<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationSetting;

class RegistrationSettingController extends Controller
{
    public function index()
    {
        $settings = RegistrationSetting::all();
        return view('registration-settings.index', compact('settings'));
    }

    public function create()
    {
        return view('registration-settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'period' => 'required',
            'program' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        RegistrationSetting::create($request->all());

        return redirect()->route('registration-settings.index')
            ->with('success', 'Setting created successfully.');
    }

    public function edit(RegistrationSetting $registrationSetting)
    {
        return view('registration-settings.edit', compact('registrationSetting'));
    }

    public function update(Request $request, RegistrationSetting $registrationSetting)
    {
        $request->validate([
            'period' => 'required',
            'program' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $registrationSetting->update($request->all());

        return redirect()->route('registration-settings.index')
            ->with('success', 'Setting updated successfully.');
    }

    public function destroy(RegistrationSetting $registrationSetting)
    {
        $registrationSetting->delete();

        return redirect()->route('registration-settings.index')
            ->with('success', 'Setting deleted successfully.');
    }
}
