@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-3">
        <h3 class="pt-2 pl-4">Sistema de Alertas</h3>
    </div>

    <div class="row px-4">

        @foreach ($alertas as $alerta)
        
        <div class="alert alert-primary p-4">
            <span>
                {{ $alerta->mensagem }}
            </span>
        </div>

        @endforeach
    </div>

</div>


@endsection