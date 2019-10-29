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
        // // PEGAR TODOS OS REGISTROS DO SENSOR DE CORRENTE - 1
        // $getAllCorrente = Historico::where('sensor_id', '=', 1)->get();

        // // PEGAR TODOS OS REGISTROS DO SENSOR DE TENSÃO - 2
        // $getAllTensao = Historico::where('sensor_id', '=', 2)->get();

        // // PEGAR TODOS OS REGISTROS DO SENSOR DE TEMP - 3
        // $getAllTemp = Historico::where('sensor_id', '=', 3)->get();

        // // PEGAR TODOS OS REGISTROS DO SENSOR DE UMIDADE - 4
        // $getAllUmidade = Historico::where('sensor_id', '=', 4)->get();

        // // PEGAR TODOS OS REGISTROS DO SENSOR DE GÁS - 5
        // $getAllGas = Historico::where('sensor_id', '=', 5)->get();

        $historicos = DB::table('historicos')->orderBy('data_hora', 'desc')->get();
        
        $corrente = Sensor::find(1);
        $tensao = Sensor::find(2);
        $temperatura = Sensor::find(3);
        $umidade = Sensor::find(4);
        $gas = Sensor::find(5);
        $potencia = Sensor::find(6);
        $vazao = Sensor::find(7);
        $fluxo = Sensor::find(8);


        // SHUTDOWN
        $shutdown = $shutdown = Shutdown::find(1);
        $shut = $shutdown->rele;

        // dd($historicos);

        return view('tabela', compact('shut', 'historicos', 'corrente', 'tensao', 'temperatura', 'umidade', 'gas','potencia', 'vazao', 'fluxo'));

        //return view('tabela', compact('shut', 'getAllCorrente', 'getAllTensao', 'getAllTemp', 'getAllUmidade', 'getAllGas'));
    }

    public function busca(Request $request) {
        $busca = $request->all();

        $slides = Slide::where('publicado', 'sim')->orderBy('ordem')->get();

        $tipos = Tipo::orderBy('titulo')->get();

        $cidades = Cidade::orderBy('nome')->get();

        $paginacao = false;


        //IMPLEMENTAÇÃO DA BUSCA/FILTRO
        if($busca['status'] == 'todos') {
            $statusFiltro = [
                ['status', '<>', null]
            ];
        } else {
            $statusFiltro = [
                ['status', $busca['status']]
            ];
        }

        if($busca['tipo_id'] == 'todos') {
            $tipoFiltro = [
                ['tipo_id', '<>', null]
            ];
        } else {
            $tipoFiltro = [
                ['tipo_id', $busca['tipo_id']]
            ];
        }

        if($busca['cidade_id'] == 'todos') {
            $cidadeFiltro = [
                ['cidade_id', '<>', null]
            ];
        } else {
            $cidadeFiltro = [
                ['cidade_id', $busca['cidade_id']]
            ];
        }

        $dormitoriosFiltro = [
            ['dormitorios', '>=', 0],
            ['dormitorios', '=', 1],
            ['dormitorios', '=', 2],
            ['dormitorios', '=', 3],
            ['dormitorios', '=', 4],
            ['dormitorios', '=', 5],
            ['dormitorios', '=', 6],
            ['dormitorios', '=', 7],
            ['dormitorios', '=', 8],
            ['dormitorios', '=', 9],
            ['dormitorios', '=', 10]
        ];
        $numDormitorios = $busca['dormitorios'];

        $valorFiltro = [
            ['valor', '>=', '0'],
            ['valor', '<=', '500'],
            [['valor', '>=', '500'], ['valor', '<=', '1000']],
            [['valor', '>=', '1000'], ['valor', '<=', '5000']],
            [['valor', '>=', '5000'], ['valor', '<=', '10000']],
            [['valor', '>=', '10000'], ['valor', '<=', '50000']],
            [['valor', '>=', '50000'], ['valor', '<=', '100000']],
            [['valor', '>=', '100000'], ['valor', '<=', '200000']],
            [['valor', '>=', '200000'], ['valor', '<=', '300000']],
            [['valor', '>=', '300000'], ['valor', '<=', '500000']],
            [['valor', '>=', '500000'], ['valor', '<=', '1000000']],
            ['valor', '>=', '1000000']
        ];
        $valor = $busca['valor'];

        // if($busca['bairro'] != '') {
        //     $bairroFiltro = [
        //         ['endereco', 'like', '%' . $busca['bairro'] . '%']
        //     ];
        // } else {
        //     $bairroFiltro = [
        //         ['endereco', '<>', null]
        //     ];
        // }


        $imoveis = Imovel::where('publicar', 'sim')
        ->where($statusFiltro)
        ->where($tipoFiltro)
        ->where($cidadeFiltro)
        ->where([$dormitoriosFiltro[$numDormitorios]])
        ->where([$valorFiltro[$valor]])
        // ->where($bairroFiltro)
        ->orderBy('id', 'desc')->get();

        echo $imoveis;exit;

        return view('site.busca', compact('busca', 'imoveis', 'paginacao', 'slides', 'tipos', 'cidades'));
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
