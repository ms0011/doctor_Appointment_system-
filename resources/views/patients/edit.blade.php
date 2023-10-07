@extends('layouts.app')

@section('content')
    <h1>Edit Patient</h1>
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $patient->name }}" required>
        </div>
        <div>
            <label for="disease">Disease</label>
            <input type="text" id="disease" name="disease" value="{{ $patient->disease }}" required>
        </div>
        <!-- Add more fields as needed -->
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('patients.index') }}">Back to Patients</a>
@endsection
