@extends('layouts.app')

@section('title', 'Regisztráció')

@section('content')
<h1>Regisztráció</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Név</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">E-mail cím</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Jelszó</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Jelszó megerősítése</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>
    <button class="btn btn-success">Regisztráció</button>
</form>
@endsection
