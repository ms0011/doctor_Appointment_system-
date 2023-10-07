<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Controllers\Doctor;

use App\Models\Doctor;



class DoctorController extends Controller
{
    // Display a list of doctors
    public function index()
    {

        $doctors = Doctor::all();

        // return $doctors;
        return view('doctors.index', compact('doctors'));
        // return view('appointments.create', compact('doctors'));
    }

    // Show the form for creating a new doctor
    public function create()
    {
        return view('doctors.create');
    }

    // Store a newly created doctor in the database
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
        ]);

        Doctor::create($data);

        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully.');
    }

    // Show the form for editing a doctor
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    // Update the specified doctor in the database
    public function update(Request $request, Doctor $doctor)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
        ]);

        $doctor->update($data);

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    // Remove the specified doctor from the database
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully.');
    }
}

