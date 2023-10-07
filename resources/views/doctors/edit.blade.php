@extends('layouts.app')

@section('content')
    <h1>Edit Doctor</h1>
    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $doctor->name }}" required>
        </div>
        <div>
            <label for="specialization">Specialization</label>
            <input type="text" id="specialization" name="specialization" value="{{ $doctor->specialization }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('doctors.index') }}">Back to Doctors</a>
@endsection
