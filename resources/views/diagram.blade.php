@extends('layouts.app')

@section('title', 'Diagram')

@section('content')
<h1>Diagram - Munkalapok településenként</h1>
<p>Az alábbi oszlopdiagram a munkalapok számát mutatja településenként.</p>

<canvas id="munkalapChart" width="400" height="200"></canvas>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('munkalapChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! $labels !!},
            datasets: [{
                label: 'Munkalapok száma',
                data: {!! $values !!},
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
