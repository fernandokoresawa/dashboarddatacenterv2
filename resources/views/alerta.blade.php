@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-1">
        <h3 class="pt-2 pl-4">Sistema de Alertas - histórico</h3>
    </div>

    @foreach ($alertas as $alerta)

    <div class="row px-2">
        <div class="alert alert-primary p-4">
            <b>{{ $alerta->historico->sensor->nome_sensor }}</b><br>
            <b>{{ $alerta->historico->data_hora }}</b><br>
        </div>
    </div>

    @endforeach


</div>


@endsection