<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Historico;
use App\Shutdown;
use App\Sensor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE CORRENTE - 1
        $getLastCorrente = Historico::where('sensor_id', '=', 1)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE TENSÃO - 2
        $getLastTensao = Historico::where('sensor_id', '=', 2)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE TEMP - 3
        $getLastTemp = Historico::where('sensor_id', '=', 3)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE UMIDADE - 4
        $getLastUmidade = Historico::where('sensor_id', '=', 4)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE GÁS - 5
        $getLastGas = Historico::where('sensor_id', '=', 5)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE POTÊNCIA - 6
        $getLastPot = Historico::where('sensor_id', '=', 6)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE VAZÃO - 7
        $getLastVazao = Historico::where('sensor_id', '=', 7)->orderby('id', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE FLUXO - 8
        $getLastFluxo = Historico::where('sensor_id', '=', 8)->orderby('id', 'desc')->first();

        // SHUTDOWN
        $shutdown = $shutdown = Shutdown::find(1);
        $shut = $shutdown->rele;

        return view('home', compact('shut', 'getLastCorrente', 'getLastTensao', 'getLastTemp', 'getLastUmidade', 'getLastGas', 'getLastPot', 'getLastVazao', 'getLastFluxo'));
    }


    /**
     * VERIFICA EM QUAIS MESES HOUVE OCORRÊNCIAS
     */
    public function getAllMeses()
    {
        $meses_array = array();
        $temperatura_datas = Historico::where([['sensor_id', 3], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $temperatura_datas = json_decode($temperatura_datas);

        if (!empty($temperatura_datas)) {
            foreach ($temperatura_datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesCorrente()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 1], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesTensao()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 2], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesUmidade()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 4], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesGas()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 5], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesPotencia()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 6], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesVazao()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 7], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }

    public function getAllMesesFluxo()
    {
        $meses_array = array();
        $datas = Historico::where([['sensor_id', 8], ['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $datas = json_decode($datas);

        if (!empty($datas)) {
            foreach ($datas as $data_sem_formato) {
                $date = new \DateTime($data_sem_formato);
                $mes_numero = $date->format('m');
                $mes_nome = $date->format('M');
                $meses_array[$mes_numero] = $mes_nome;
            }
        }

        return $meses_array;
    }


    /**
     * VERIFICA QUANTAS OCORRÊNCIAS HOUVE POR MÊS
     */
    function getOcorrenciasTempMensal($mes)
    {
        $mensal_temp_count = Historico::where([['sensor_id', 3], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_temp_count;
    }

    function getOcorrenciasCorrenteMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 1], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }

    function getOcorrenciasTensaoMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 2], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }

    function getOcorrenciasUmidadeMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 4], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }

    function getOcorrenciasGasMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 5], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }

    function getOcorrenciasPotenciaMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 6], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }

    function getOcorrenciasVazaoMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 7], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }

    function getOcorrenciasFluxoMensal($mes)
    {
        $mensal_dado_count = Historico::where([['sensor_id', 8], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();

        return $mensal_dado_count;
    }


    /**
     * PEGA OS DADOS POR MÊS
     */
    function getDadosMensaisTemp()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TEMPERATURAS RUINS
         */
        $mensal_temp_count_array = array();
        $meses_array = $this->getAllMeses();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_temp_count = $this->getOcorrenciasTempMensal($mes_numero);
                array_push($mensal_temp_count_array, $mensal_temp_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_temp_count_array);
        $max = round(($numero_max + 100) / 10) * 2;
        $mensal_temp_dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_temp_count_array,
            'max' => $max
        );

        return $mensal_temp_dados_array;
    }

    function getDadosMensaisCorrente()
    {
        /**
         * MONTA ARRAY COM DADOS DAS CORRENTES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesCorrente();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasCorrenteMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }

    function getDadosMensaisTensao()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TENSÕES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesTensao();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasTensaoMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }

    function getDadosMensaisUmidade()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TENSÕES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesUmidade();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasUmidadeMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }

    function getDadosMensaisGas()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TENSÕES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesGas();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasGasMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }

    function getDadosMensaisPotencia()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TENSÕES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesPotencia();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasPotenciaMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }

    function getDadosMensaisVazao()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TENSÕES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesVazao();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasVazaoMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }

    function getDadosMensaisFluxo()
    {
        /**
         * MONTA ARRAY COM DADOS DAS TENSÕES RUINS
         */
        $mensal_dado_count_array = array();
        $meses_array = $this->getAllMesesFluxo();
        $mes_array_name = array();
        if (!empty($meses_array)) {
            foreach ($meses_array as $mes_numero => $mes_name) {
                $mensal_sensor_count = $this->getOcorrenciasFluxoMensal($mes_numero);
                array_push($mensal_dado_count_array, $mensal_sensor_count);
                array_push($mes_array_name, $mes_name);
            }
        }

        $numero_max = max($mensal_dado_count_array);
        $max = round(($numero_max + 100) / 10) * 10;
        $dados_array = array(
            'meses' => $mes_array_name,
            'dados' => $mensal_dado_count_array,
            'max' => $max
        );

        return $dados_array;
    }


    /**
     * PEGAR FUNÇÃO POR FUNÇÃO, JOGAR EM VARIÁVEIS PARA GERAR OS GRÁFICOS
     */
    public function getAllDadosAllSensores()
    {
        $temperaturas = $this->getDadosMensaisTemp();
        $correntes = $this->getDadosMensaisCorrente();
        $tensoes = $this->getDadosMensaisTensao();
        $umidade = $this->getDadosMensaisUmidade();
        $gas = $this->getDadosMensaisGas();
        $potencia = $this->getDadosMensaisPotencia();
        $vazao = $this->getDadosMensaisVazao();
        $fluxo = $this->getDadosMensaisFluxo();

        return [
            "temperaturas"  => $temperaturas,
            "correntes"     => $correntes,
            "tensoes"       => $tensoes,
            "umidade"       => $umidade,
            "gas"           => $gas,
            "potencia"      => $potencia,
            "vazao"         => $vazao,
            "fluxo"         => $fluxo,
        ];
    }
}
