@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row mt-2">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header">
                    <h3>Temperaturas boas</h3>
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

    <div class="row mt-2 grid-charts">
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
    </div>
</div>

@endsection

@section( 'scripts' )
<script src="{{url( 'js/Chart.min.js' )}}"></script>
<script src="{{url( 'js/create-charts.js' )}}"></script>
@endsection