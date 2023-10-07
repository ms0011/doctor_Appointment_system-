@extends('layouts.app')

@section('content')
    <h1>Edit Appointment</h1>
    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="doctor_id">Doctor</label>
            <select id="doctor_id" name="doctor_id" required>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}" {{ $doctor->id === $appointment->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="patient_id">Patient</label>
            <select id="patient_id" name="patient_id" required>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" {{ $patient->id === $appointment->patient_id ? 'selected' : '' }}>{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="appointment_datetime">Appointment Date & Time</label>
            <input type="datetime-local" id="appointment_datetime" name="appointment_datetime" value="{{ $appointment->appointment_datetime }}" required>
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes" rows="4">{{ $appointment->notes }}</textarea>
        </div>
        <button type="submit">Update Appointment</button>
    </form>
    <a href="{{ route('appointments.index') }}">Back to Appointments</a>
@endsection
