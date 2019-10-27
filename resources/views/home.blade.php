@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-3 mb-5">
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Corrente</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastCorrente->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 0 a 4 amperes.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Temperatura</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastTemp->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 0 a 4 amperes.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Tensão</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastTensao->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 196 e 235 volts.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Gás</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastGas->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão:0 a 250 ppm</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Umidade</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastUmidade->dados }}%</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 45% a 65%</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Potência</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastPot->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 196 e 235 volts.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Vazão</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastVazao->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 196 e 235 volts.</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3 mb-2">
            <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Fluxo</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $getLastFluxo->dados }}</span>
                        </div>
                        <div class="col-auto">

                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 196 e 235 volts.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- GRÁFICOS --}}
    <div class="row mt-2">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de correntes</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartCorrente" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de temperaturas</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartTemp" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de tensões</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartTensao" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de gás</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartGas" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de umidades</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartUmidade" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de potências</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartPotencia" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de vazões</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartVazao" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h3>Nº de ocorrências de fluxos</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartFluxo" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section( 'scripts' )
<script src="{{url( 'js/Chart.min.js' )}}"></script>
<script src="{{url( 'js/create-charts.js' )}}"></script>
@endsection