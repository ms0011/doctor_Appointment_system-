
@extends('layouts.auth')


@section('title')
login page
@endsection


@section('content')
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com">

  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
@endsection

