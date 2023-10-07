@extends('layouts.app')

@section('content')
    <h1>Add Doctor</h1>
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="specialization">Specialization</label>
            <input type="text" id="specialization" name="specialization" required>
        </div>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('doctors.index') }}">Back to Doctors</a>
@endsection
