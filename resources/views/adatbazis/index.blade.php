@extends('layouts.app')

@section('title', 'Adatbázis')

@section('content')
<h1 class="mb-4">Adatbázis adatok</h1>

<h2>Szerelők</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Név</th>
            <th>Kezdés éve</th>
            <th>Hozzárendelt munkalapok száma</th>
        </tr>
    </thead>
    <tbody>
    @foreach($szerelok as $szerelo)
        <tr>
            <td>{{ $szerelo->nev }}</td>
            <td>{{ $szerelo->kezdev }}</td>
            <td>{{ $szerelo->munkalapok_count }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="mt-3">
    @if ($helyek->hasPages())
    <div style="margin-top: 15px; display: flex; gap: 10px; align-items: center;">
        {{-- Előző oldal --}}
        @if ($helyek->onFirstPage())
            <span style="color: #999;">Előző</span>
        @else
            <a href="{{ $helyek->previousPageUrl() }}">Előző</a>
        @endif

        {{-- Oldalszám / összes oldal --}}
        <span>
            Oldal {{ $helyek->currentPage() }} / {{ $helyek->lastPage() }}
        </span>

        {{-- Következő oldal --}}
        @if ($helyek->hasMorePages())
            <a href="{{ $helyek->nextPageUrl() }}">Következő</a>
        @else
            <span style="color: #999;">Következő</span>
        @endif
    </div>
@endif
</div>
<h2 class="mt-5">Helyek</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Település</th>
            <th>Utca</th>
        </tr>
    </thead>
    <tbody>
    @foreach($helyek as $hely)
        <tr>
            <td>{{ $hely->telepules }}</td>
            <td>{{ $hely->utca }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<h2 class="mt-5">Munkalapok (utolsó 20)</h2>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Bejelentés dátuma</th>
            <th>Javítás dátuma</th>
            <th>Hely</th>
            <th>Szerelő</th>
            <th>Munkaóra</th>
            <th>Anyagár (Ft)</th>
        </tr>
    </thead>
    <tbody>
    @foreach($munkalapok as $ml)
        <tr>
            <td>{{ $ml->bedatum }}</td>
            <td>{{ $ml->javdatum }}</td>
            <td>{{ $ml->hely->telepules }} - {{ $ml->hely->utca }}</td>
            <td>{{ $ml->szerelo->nev }}</td>
            <td>{{ $ml->munkaora }}</td>
            <td>{{ number_format($ml->anyagar, 0, ',', ' ') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
