<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{

    // Display a list of patients
    public function index()
    {
        $patients = Patient::all();
        // return $patients;
        return view('patients.index', compact('patients'));
    }

    // Show the form for creating a new patient
    public function create()
    {
        return view('patients.create');
    }

    // Store a newly created patient in the database
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'disease' => 'required|string|max:255',
        ]);

        Patient::create($data);
        // return redirect()->back();

        return redirect()->route('patients.index')->with('success', 'Patient added successfully.');
    }

    // Show the form for editing a patient
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    // Update the specified patient in the database
    public function update(Request $request, Patient $patient)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'disease' => 'required|string|max:255',
        ]);

        $patient->update($data);

        return redirect()->route('patients.index')->with('success', 'patients updated successfully.');
    }

    // Remove the specified patient from the database
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')->with('success', 'patient deleted successfully.');
        // return redirect()->back();
    }
}
