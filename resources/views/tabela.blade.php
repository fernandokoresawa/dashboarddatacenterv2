@extends('layouts.app')

@section('content')


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


    </div>
</div>


@endsection