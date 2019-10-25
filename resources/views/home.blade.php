@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-3 mb-5">
        <div class="col">
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
        <div class="col">
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
        <div class="col">
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
        <div class="col">
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
        <div class="col">
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
    </div>

    <div class="row mt-2">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header">
                    <h3>Nº de ocorrências de temperaturas</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartTempBoas" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3" style="background-color: rgba(255,0,0,.5)">
                <div class="card-header">
                    <h3>Temperaturas Ruins</h3>
                </div>

                <div class="card-body">
                    <canvas id="chartTempRuim" width="100%" height="30"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row mt-2 grid-charts">
        <div class="col">
            <div class="card mb-3" style="background-color: rgba(0,255,0,.5)">
                <h3 class="card-header">Umidade</h3>

                <div class="card-body">

                    <p>Boas</p>
                    <canvas id="chartTempBar" width="100%" height="30"></canvas>

                    <p>Ruins</p>
                    <canvas id="chartTempBarRuim" width="100%" height="30"></canvas>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3" style="background-color: rgba(255,0,255,.5)">
                <div class="card-header">
                    <h3></h3>
                </div>

                <div class="card-body">

                    <canvas id="chartTempBar" width="100%" height="30"></canvas>

                    <canvas id="chartTempBarRuim" width="100%" height="30"></canvas>

                </div>
            </div>
        </div>

        <div class="col">
            <div class="card mb-3" style="background-color: rgba(0,0,255,.5)">
                <div class="card-header">
                    <h3></h3>
                </div>

                <div class="card-body">

                    <canvas id="chartTempBar" width="100%" height="30"></canvas>

                    <canvas id="chartTempBarRuim" width="100%" height="30"></canvas>

                </div>
            </div>
        </div>
    </div> --}}
</div>

@endsection

@section( 'scripts' )
<script src="{{url( 'js/Chart.min.js' )}}"></script>
<script src="{{url( 'js/create-charts.js' )}}"></script>
@endsection