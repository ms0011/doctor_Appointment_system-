@extends('layouts.app')

@section('content')
    <h1>Appointments</h1>
    <table>
        <thead>
            <tr>
                <th>Doctor</th>
                <th>Patient</th>
                <th>Appointment Date & Time</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->doctor->name }}</td>
                    <td>{{ $appointment->patient->name }}</td>
                    <td>{{ $appointment->appointment_datetime }}</td>
                    <td>{{ $appointment->notes }}</td>
                    <td>
                        <a href="{{ route('appointments.edit', $appointment->id) }}">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('appointments.create') }}">Add Appointment</a>
@endsection
