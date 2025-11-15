@extends('layouts.app')

@section('title', 'Üzenetek')

@section('content')
<h1>Beérkezett üzenetek</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Dátum</th>
            <th>Név</th>
            <th>E-mail</th>
            <th>Üzenet</th>
        </tr>
    </thead>
    <tbody>
    @foreach($messages as $msg)
        <tr>
            <td>{{ $msg->created_at->format('Y.m.d H:i') }}</td>
            <td>{{ $msg->name }}</td>
            <td>{{ $msg->email }}</td>
            <td>{{ $msg->content }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
