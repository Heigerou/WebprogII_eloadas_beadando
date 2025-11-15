@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<h1>Admin vezérlőpult</h1>

<div class="row">
    <div class="col-md-3">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5 class="card-title">Szerelők</h5>
                <p class="display-6">{{ $szereloCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5 class="card-title">Munkalapok</h5>
                <p class="display-6">{{ $munkalapCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5 class="card-title">Helyek</h5>
                <p class="display-6">{{ $helyCount }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center mb-3">
            <div class="card-body">
                <h5 class="card-title">Felhasználók</h5>
                <p class="display-6">{{ $userCount }}</p>
            </div>
        </div>
    </div>
</div>

<a href="{{ route('szerelos.index') }}" class="btn btn-primary">Szerelők CRUD megnyitása</a>
@endsection
