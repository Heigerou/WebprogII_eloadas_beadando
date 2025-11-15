@extends('layouts.app')

@section('title', 'Szerelő szerkesztése')

@section('content')
<h1>Szerelő szerkesztése</h1>

<form method="POST" action="{{ route('szerelos.update', $szerelo) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Név</label>
        <input type="text" name="nev" value="{{ old('nev', $szerelo->nev) }}" class="form-control @error('nev') is-invalid @enderror">
        @error('nev')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Kezdés éve</label>
        <input type="number" name="kezdev" value="{{ old('kezdev', $szerelo->kezdev) }}" class="form-control @error('kezdev') is-invalid @enderror">
        @error('kezdev')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary">Mentés</button>
</form>
@endsection
