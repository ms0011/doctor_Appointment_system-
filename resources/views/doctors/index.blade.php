@extends('layouts.app')

@section('content')
    <h1>Doctors</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialization</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through doctors and display them -->
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>
                        <a href="{{ route('doctors.edit', $doctor->id) }}">Edit</a>
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('doctors.create') }}">Add Doctor</a>
@endsection
