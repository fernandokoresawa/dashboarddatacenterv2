@extends('layouts.app')

@section('content')

<nav class="navbar navbar-light bg-light">
  <h1 class="navbar-brand" >Histórico de navegação -> Sensores -> DataCenter Realtime </h1>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
  </form>
</nav>

<div class="container-fluid">
    <div class="row mt-3 mb-5">

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
                        @foreach($corrente->historicos as $historico)
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
                        @foreach($tensao->historicos as $historico)
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
                        @foreach($temperatura->historicos as $historico)
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
                        @foreach($umidade->historicos as $historico)
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
                        @foreach($gas->historicos as $historico)
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
                        @foreach($potencia->historicos as $historico)
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
                        @foreach($vazao->historicos as $historico)
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
                        @foreach($fluxo->historicos as $historico)
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