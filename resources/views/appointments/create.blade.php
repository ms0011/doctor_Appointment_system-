@extends('layouts.app')

@section('content')
    <h1>Create Appointment</h1>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div>
            <label for="doctor_id">Doctor</label>
            <select id="doctor_id" name="doctor_id" required>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="patient_id">Patient</label>
            <select id="patient_id" name="patient_id" required>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="appointment_datetime">Appointment Date & Time</label>
            <input type="datetime-local" id="appointment_datetime" name="appointment_datetime" required>
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes" rows="4"></textarea>
        </div>
        <button type="submit">Create Appointment</button>
    </form>
    <a href="{{ route('appointments.index') }}">Back to Appointments</a>
@endsection
