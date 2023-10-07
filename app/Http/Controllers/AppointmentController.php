<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    // Display a list of appointments
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    // Show the form for creating a new appointment
    public function create()
    {
        // You might need to retrieve doctors and patients here
        // to populate dropdowns or select inputs in the form.
        return view('appointments.create');
    }

    // Store a newly created appointment in the database
    public function store(Request $request)
    {
        $data = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'patient_id' => 'required|exists:patients,id',
            'appointment_datetime' => 'required|date',
            'notes' => 'nullable|string|max:255',
        ]);

        Appointment::create($data);

        return redirect()->route('appointments.index')->with('success', 'Appointment added successfully.');
    }

    // Show the form for editing an appointment
    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', compact('appointment'));
    }

    // Update the specified appointment in the database
    public function update(Request $request, Appointment $appointment)
    {
        $data = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'patient_id' => 'required|exists:patients,id',
            'appointment_datetime' => 'required|date',
            'notes' => 'nullable|string|max:255',
        ]);

        $appointment->update($data);

        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    // Remove the specified appointment from the database
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
