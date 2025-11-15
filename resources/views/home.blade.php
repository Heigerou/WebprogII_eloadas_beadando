@extends('layouts.app')

@section('title', 'Főoldal')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-4 fw-bold">Jani&Szabi Kft - Tiszta víz, tiszta munka</h1>
        <p class="col-md-8 fs-5 mt-3">
            A sárgahegyi <strong>Jani&Szabi Kft.</strong> több évtizede áll az ügyfelek szolgálatában.
            Csöpögő csap? Csőtörés? Fűtésproblémák? Gyors, megbízható vízvezeték-szerelés Sárgahegyen és környékén.
        </p>
        <a class="btn btn-primary btn-lg mt-3" href="{{ route('kapcsolat') }}">Kérjen visszahívást most</a>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <h3>Tapasztalt szerelők</h3>
        <p>Több mint 20 év szakmai rutin, folyamatos képzés és naprakész eszközpark.</p>
    </div>
    <div class="col-md-4">
        <h3>Gyors kiszállás</h3>
        <p>Sürgős hibáknál akár még aznap megkezdjük a hibaelhárítást.</p>
    </div>
    <div class="col-md-4">
        <h3>Átlátható árak</h3>
        <p>Előre egyeztetett munkadíj és anyagköltség, rejtett költségek nélkül.</p>
    </div>
</div>
@endsection
