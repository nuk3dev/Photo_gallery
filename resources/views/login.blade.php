@extends('template.layout')
@section('content')
<section class="d-flex justify-content-center bg-light-subtle">
<form method="POST" action="{{ url('/login') }}">
@csrf
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" class="form-control" name="username" id="username" aria-describedby="username">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
@stop
