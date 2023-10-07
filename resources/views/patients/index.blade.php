@extends('layouts.app')

@section('content')
    <h1>Patients</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Disease</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through doctors and display them -->
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->disease }}</td>
                    <td>
                        <a href="{{ route('patients.edit', $patient->id) }}">Edit</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('patients.create') }}">Add Pisease</a>
@endsection
