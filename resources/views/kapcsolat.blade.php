@extends('layouts.app')

@section('title', 'Kapcsolat')

@section('content')
<h1>Kapcsolat</h1>
<p class="mb-4">Kérjük, töltse ki az alábbi űrlapot, és munkatársaink hamarosan felveszik Önnel a kapcsolatot.</p>

<form method="POST" action="{{ route('kapcsolat.submit') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Név</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail cím</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Üzenet</label>
        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5">{{ old('content') }}</textarea>
        @error('content')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Üzenet küldése</button>
</form>
@endsection
