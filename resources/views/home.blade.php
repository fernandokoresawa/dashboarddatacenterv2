@extends('layouts.app')

@section('content')

<div class="panel-header panel-header-lg">
    <canvas id="bigDashboardChart"></canvas>
</div>

@foreach ($historicos as $historico)
{{ $historico->id }}
@endforeach


@endsection
