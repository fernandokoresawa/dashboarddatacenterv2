@extends('layouts.app')

@section('content')

{{-- <nav class="navbar navbar-light bg-light">
    <h1 class="navbar-brand">Histórico de navegação -> Sensores -> DataCenter Realtime </h1>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
    </form>
</nav> --}}

<div class="container-fluid">
    <div class="row mt-1">
        <h3 class="pt-2 pl-4">Sensores</h3>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-2">
            <h6>Filtrar por data</h6>
            <form action="{{ route('filtro') }}">
                <div class="form-group">
                    <input type="date" name="data" id="data" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-danger">
                        FILTRAR
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5 mb-5">

        <div class="col-md-4">
            <div>
                <h3>{{ $corrente->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoCorrente as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $tensao->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoTensao as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $temperatura->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoTemperatura as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $umidade->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoUmidade as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $gas->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoGas as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $potencia->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoPotencia as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $vazao->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoVazao as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div>
                <h3>{{ $fluxo->nome_sensor }}</h3>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Dados
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Data/Hora
                        </th>
                    </thead>
                    <tbody>
                        @foreach($historicoFluxo as $historico)
                        <tr>
                            <td>
                                {{ $historico->dados }}
                            </td>
                            <td>
                                {{ $historico->status }}
                            </td>
                            <td>
                                {{ $historico->data_hora }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
