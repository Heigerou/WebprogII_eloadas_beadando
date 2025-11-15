@extends('layouts.app')

@section('title', 'Szerelők CRUD')

@section('content')
<h1>Szerelők kezelése (CRUD)</h1>

<a href="{{ route('szerelos.create') }}" class="btn btn-success mb-3">Új szerelő felvétele</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Kezdés éve</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
    @foreach($szerelok as $szerelo)
        <tr>
            <td>{{ $szerelo->id }}</td>
            <td>{{ $szerelo->nev }}</td>
            <td>{{ $szerelo->kezdev }}</td>
            <td>
                <a href="{{ route('szerelos.edit', $szerelo) }}" class="btn btn-sm btn-primary">Szerkesztés</a>
                <form action="{{ route('szerelos.destroy', $szerelo) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Biztosan törölni szeretnéd?')">Törlés</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
