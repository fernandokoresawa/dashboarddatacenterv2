<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Historico;
use App\Shutdown;
use App\Sensor;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicoCorrente      = DB::table('historicos')->where('sensor_id', 1)->orderBy('data_hora', 'desc')->get();
        $historicoTensao        = DB::table('historicos')->where('sensor_id', 2)->orderBy('data_hora', 'desc')->get();
        $historicoTemperatura   = DB::table('historicos')->where('sensor_id', 3)->orderBy('data_hora', 'desc')->get();
        $historicoUmidade       = DB::table('historicos')->where('sensor_id', 4)->orderBy('data_hora', 'desc')->get();
        $historicoGas           = DB::table('historicos')->where('sensor_id', 5)->orderBy('data_hora', 'desc')->get();
        $historicoPotencia      = DB::table('historicos')->where('sensor_id', 6)->orderBy('data_hora', 'desc')->get();
        $historicoVazao         = DB::table('historicos')->where('sensor_id', 7)->orderBy('data_hora', 'desc')->get();
        $historicoFluxo         = DB::table('historicos')->where('sensor_id', 8)->orderBy('data_hora', 'desc')->get();

        $corrente       = Sensor::find(1);
        $tensao         = Sensor::find(2);
        $temperatura    = Sensor::find(3);
        $umidade        = Sensor::find(4);
        $gas            = Sensor::find(5);
        $potencia       = Sensor::find(6);
        $vazao          = Sensor::find(7);
        $fluxo          = Sensor::find(8);

        // SHUTDOWN
        $shutdown = $shutdown = Shutdown::find(1);
        $shut = $shutdown->rele;

        // dd($historicos);

        return view(
            'tabela',
            compact(
                'shut',
                'historicoCorrente',
                'historicoTensao',
                'historicoTemperatura',
                'historicoUmidade',
                'historicoGas',
                'historicoPotencia',
                'historicoVazao',
                'historicoFluxo',
                'corrente',
                'tensao',
                'temperatura',
                'umidade',
                'gas',
                'potencia',
                'vazao',
                'fluxo'
            )
        );
    }

    public function filtro(Request $request)
    {
        // SHUTDOWN
        $shutdown = $shutdown = Shutdown::find(1);
        $shut = $shutdown->rele;

        // FILTRO
        $filtro = $request['data'];

        // dd($filtro);

        $mensagemSemFiltro = 'Não houve ocorrência nesta data';

        if ($filtro) {
            $historicoCorrente      = DB::table('historicos')->where([['sensor_id', 1],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoTensao        = DB::table('historicos')->where([['sensor_id', 2],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoTemperatura   = DB::table('historicos')->where([['sensor_id', 3],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoUmidade       = DB::table('historicos')->where([['sensor_id', 4],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoGas           = DB::table('historicos')->where([['sensor_id', 5],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoPotencia      = DB::table('historicos')->where([['sensor_id', 6],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoVazao         = DB::table('historicos')->where([['sensor_id', 7],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();
            $historicoFluxo         = DB::table('historicos')->where([['sensor_id', 8],['data_hora', 'like', '%'.$filtro.' %']])->orderBy('data_hora', 'desc')->get();

            $corrente       = Sensor::find(1);
            $tensao         = Sensor::find(2);
            $temperatura    = Sensor::find(3);
            $umidade        = Sensor::find(4);
            $gas            = Sensor::find(5);
            $potencia       = Sensor::find(6);
            $vazao          = Sensor::find(7);
            $fluxo          = Sensor::find(8);

            // SHUTDOWN
            $shutdown = $shutdown = Shutdown::find(1);
            $shut = $shutdown->rele;

            // dd($historicos);

            return view(
                'tabela',
                compact(
                    'shut',
                    'historicoCorrente',
                    'historicoTensao',
                    'historicoTemperatura',
                    'historicoUmidade',
                    'historicoGas',
                    'historicoPotencia',
                    'historicoVazao',
                    'historicoFluxo',
                    'corrente',
                    'tensao',
                    'temperatura',
                    'umidade',
                    'gas',
                    'potencia',
                    'vazao',
                    'fluxo'
                )
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
