@extends('layouts.app')

@section('content')
    <h1>Add Patient</h1>
    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="disease">Disease</label>
            <input type="text" id="disease" name="disease" required>
        </div>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('patients.index') }}">Back to Patients</a>
@endsection
