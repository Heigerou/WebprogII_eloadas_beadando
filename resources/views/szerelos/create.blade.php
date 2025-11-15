@extends('layouts.app')

@section('title', 'Új szerelő')

@section('content')
<h1>Új szerelő felvétele</h1>

<form method="POST" action="{{ route('szerelos.store') }}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Név</label>
        <input type="text" name="nev" value="{{ old('nev') }}" class="form-control @error('nev') is-invalid @enderror">
        @error('nev')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Kezdés éve</label>
        <input type="number" name="kezdev" value="{{ old('kezdev') }}" class="form-control @error('kezdev') is-invalid @enderror">
        @error('kezdev')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-success">Mentés</button>
</form>
@endsection
