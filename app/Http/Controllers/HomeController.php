<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Historico;

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
        return view('home');
    }

    /**
     * VERIFICA EM QUAIS MESES HOUVE OCORRÊNCIAS
     */
    public function getAllMeses()
    {
        $meses_array = array();
        $temperatura_datas = Historico::where([['sensor_id', 3],['status', 1]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $temperatura_datas = json_decode($temperatura_datas);
        
        if (!empty($temperatura_datas)) {
			foreach ($temperatura_datas as $data_sem_formato) {
				$date = new \DateTime($data_sem_formato);
				$mes_numero = $date->format('m');
				$mes_nome = $date->format('M');
				$meses_array[$mes_numero] = $mes_nome;
			}
        }


        $meses_ruim_array = array();
        $temperatura_ruim_datas = Historico::where([['sensor_id', 3],['status', 0]])->orderBy('data_hora', 'ASC')->pluck('data_hora');
        $temperatura_ruim_datas = json_decode($temperatura_ruim_datas);
        
        if (!empty($temperatura_ruim_datas)) {
			foreach ($temperatura_ruim_datas as $data_sem_formato) {
				$date = new \DateTime($data_sem_formato);
				$mes_numero = $date->format('m');
				$mes_nome = $date->format('M');
				$meses_ruim_array[$mes_numero] = $mes_nome;
			}
        }

        return [$meses_array, $meses_ruim_array];
    }

    /**
     * VERIFICA QUANTAS OCORRÊNCIAS HOUVE POR MÊS
     */
    function getOcorrenciasTempMensal($mes)
	{
        $mensal_temp_count = Historico::where([['sensor_id', 3], ['status', 1]])->whereMonth('data_hora', $mes)->get()->count();
        $mensal_temp_ruim_count = Historico::where([['sensor_id', 3], ['status', 0]])->whereMonth('data_hora', $mes)->get()->count();
		
        return [$mensal_temp_count, $mensal_temp_ruim_count];
    }
    
    function getDadosMensaisTemp()
	{
        /**
         * MONTA ARRAY COM DADOS DAS TEMPERATURAS BOAS
         */
		$mensal_temp_count_array = array();
		$meses_array = $this->getAllMeses()[0];
		$mes_array_name = array();
		if (!empty($meses_array)) {
			foreach ($meses_array as $mes_numero => $mes_name) {
				$mensal_temp_count = $this->getOcorrenciasTempMensal($mes_numero)[0];
				array_push($mensal_temp_count_array, $mensal_temp_count);
				array_push($mes_array_name, $mes_name);
			}
		}

		$numero_max = max($mensal_temp_count_array);
		$max = round(($numero_max + 100) / 10) * 10;
		$mensal_temp_dados_array = array(
			'meses' => $mes_array_name,
			'temp_dados' => $mensal_temp_count_array,
			'max' => $max
        );
        

        /**
         * MONTA ARRAY COM DADOS DAS TEMPERATURAS RUINS
         */
        $mensal_temp_ruim_count_array = array();
		$meses_ruim_array = $this->getAllMeses()[1];
		$mes_ruim_array_name = array();
		if (!empty($meses_ruim_array)) {
			foreach ($meses_ruim_array as $mes_numero_ruim => $mes_name_ruim) {
				$mensal_temp_ruim_count = $this->getOcorrenciasTempMensal($mes_numero_ruim)[1];
				array_push($mensal_temp_ruim_count_array, $mensal_temp_ruim_count);
				array_push($mes_ruim_array_name, $mes_name_ruim);
			}
		}

		$numero_max_ruim = max($mensal_temp_ruim_count_array);
		$max_ruim = round(($numero_max_ruim + 100) / 10) * 10;
		$mensal_temp_ruim_dados_array = array(
			'meses' => $mes_ruim_array_name,
			'temp_dados' => $mensal_temp_ruim_count_array,
			'max' => $max_ruim
		);

		return ["tempBoas"=>$mensal_temp_dados_array, "tempRuins"=>$mensal_temp_ruim_dados_array];
    }

}
