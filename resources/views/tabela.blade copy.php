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
                            @foreach ($getAllCorrente as $corrente)
                                <span class="h2 font-weight-bold mb-0">{{ $getAllCorrente->dados }}</span>
                            @endforeach
                            {{-- <span class="h2 font-weight-bold mb-0">{{ $getAllCorrente->dados }}</span> --}}
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
        {{-- <div class="col">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Temperatura</h5>
                                <span class="h2 font-weight-bold mb-0">{{ $getAllTemp->dados }}</span>
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
                            <span class="h2 font-weight-bold mb-0">{{ $getAllTensao->dados }}</span>
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
                            <span class="h2 font-weight-bold mb-0">{{ $getAllGas->dados }}</span>
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
                            <span class="h2 font-weight-bold mb-0">{{ $getAllUmidade->dados }}%</span>
                        </div>
                        <div class="col-auto">
                            
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-nowrap">Padrão: 45% a 65%</span>
                    </p>
                </div>
            </div>
        </div> --}}
    </div>
</div>

@endsection

@section( 'scripts' )
<script src="{{url( 'js/Chart.min.js' )}}"></script>
<script src="{{url( 'js/create-charts.js' )}}"></script>
@endsection