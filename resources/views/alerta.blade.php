@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-1">
        <h3 class="pt-2 pl-4">Sistema de Alertas</h3>
    </div>

    <div class="row px-2">

        @foreach ($alertas as $alerta)
        
        <div class="alert alert-primary p-4">
            <b>{{ $alerta->historico->sensor->nome_sensor }}</b><br>
            <b>{{ $alerta->historico->dado }}</b><br>
            <span>
                {{ $alerta->mensagem }}
            </span>
        </div>

        @endforeach
    </div>

</div>


@endsection