<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Historico;
use App\Shutdown;
use App\Sensor;
use App\Alerta;
use App\User;

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
        $getLastCorrente = Historico::where('sensor_id', '=', 1)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE TENSÃO - 2
        $getLastTensao = Historico::where('sensor_id', '=', 2)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE TEMP - 3
        $getLastTemp = Historico::where('sensor_id', '=', 3)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE UMIDADE - 4
        $getLastUmidade = Historico::where('sensor_id', '=', 4)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE GÁS - 5
        $getLastGas = Historico::where('sensor_id', '=', 5)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE POTÊNCIA - 6
        $getLastPot = Historico::where('sensor_id', '=', 6)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE VAZÃO - 7
        $getLastVazao = Historico::where('sensor_id', '=', 7)->orderby('data_hora', 'desc')->first();

        // PEGAR ÚLTIMO RESGITRO DO SENSOR DE FLUXO - 8
        $getLastFluxo = Historico::where('sensor_id', '=', 8)->orderby('data_hora', 'desc')->first();

        // SHUTDOWN
        $shutdown = Shutdown::find(1);
        $shut = $shutdown->rele;

        $this->getAlerta();

        return view('home', compact('shut', 'getLastCorrente', 'getLastTensao', 'getLastTemp', 'getLastUmidade', 'getLastGas', 'getLastPot', 'getLastVazao', 'getLastFluxo'));
    }

    public function getAlerta()
    {
        $user = Auth()->user()->name;

        /**
         * ALERTA CORRENTE
         */
        $lastCorrente = Historico::where([['status', 1], ['sensor_id', 1], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastCorrente) {
            $newAlertaCorrente = new Alerta ([
                'historico_id'  => $lastCorrente->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertaCorrente->save();

            $lastAlertaCorrente = Alerta::where([['historico_id', $lastCorrente->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertaCorrente) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastCorrente, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertaCorrente = Alerta::find($lastAlertaCorrente->id);
                $lastAlertaCorrente->enviado = true;
                $lastAlertaCorrente->save();
    
                $lastCorrente = Historico::find($lastCorrente->id);
                $lastCorrente->enviado = true;
                $lastCorrente->update();
            }
        }


        /**
         * ALERTA TENSÃO
         */
        $lastTensao = Historico::where([['status', 1], ['sensor_id', 2], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastTensao) {
            $newAlertaTensao = new Alerta ([
                'historico_id'  => $lastTensao->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertaTensao->save();

            $lastAlertaTensao = Alerta::where([['historico_id', $lastTensao->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertaTensao) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastTensao, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertaTensao = Alerta::find($lastAlertaTensao->id);
                $lastAlertaTensao->enviado = true;
                $lastAlertaTensao->save();
    
                $lastTensao = Historico::find($lastTensao->id);
                $lastTensao->enviado = true;
                $lastTensao->update();
            }
        } 
        
        
        /**
         * ALERTA TEMPERATURA
         */
        $lastTemperatura = Historico::where([['status', 1], ['sensor_id', 3], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastTemperatura) {
            $newAlertTemperatura = new Alerta ([
                'historico_id'  => $lastTemperatura->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertTemperatura->save();

            $lastAlertTemperatura = Alerta::where([['historico_id', $lastTemperatura->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertTemperatura) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastTemperatura, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertTemperatura = Alerta::find($lastAlertTemperatura->id);
                $lastAlertTemperatura->enviado = true;
                $lastAlertTemperatura->save();
    
                $lastTemperatura = Historico::find($lastTemperatura->id);
                $lastTemperatura->enviado = true;
                $lastTemperatura->update();
            }
        } 


        /**
         * ALERTA UMIDADE
         */
        $lastUmidade = Historico::where([['status', 1], ['sensor_id', 4], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastUmidade) {
            $newAlertUmidade = new Alerta ([
                'historico_id'  => $lastUmidade->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertUmidade->save();

            $lastAlertUmidade = Alerta::where([['historico_id', $lastUmidade->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertUmidade) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastUmidade, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertUmidade = Alerta::find($lastAlertUmidade->id);
                $lastAlertUmidade->enviado = true;
                $lastAlertUmidade->save();
    
                $lastUmidade = Historico::find($lastUmidade->id);
                $lastUmidade->enviado = true;
                $lastUmidade->update();
            }
        } 


        /**
         * ALERTA GÁS
         */
        $lastGas = Historico::where([['status', 1], ['sensor_id', 5], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastGas) {
            $newAlertGas = new Alerta ([
                'historico_id'  => $lastGas->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertGas->save();

            $lastAlertGas = Alerta::where([['historico_id', $lastGas->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertGas) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastGas, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertGas = Alerta::find($lastAlertGas->id);
                $lastAlertGas->enviado = true;
                $lastAlertGas->save();
    
                $lastGas = Historico::find($lastGas->id);
                $lastGas->enviado = true;
                $lastGas->update();
            }
        }
        
        
        /**
         * ALERTA POTÊNCIA
         */
        $lastPotencia = Historico::where([['status', 1], ['sensor_id', 6], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastPotencia) {
            $newAlertPotencia = new Alerta ([
                'historico_id'  => $lastPotencia->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertPotencia->save();

            $lastAlertPotencia = Alerta::where([['historico_id', $lastPotencia->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertPotencia) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastPotencia, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertPotencia = Alerta::find($lastAlertPotencia->id);
                $lastAlertPotencia->enviado = true;
                $lastAlertPotencia->save();
    
                $lastPotencia = Historico::find($lastPotencia->id);
                $lastPotencia->enviado = true;
                $lastPotencia->update();
            }
        } 


        /**
         * ALERTA VAZÃO
         */
        $lastVazao = Historico::where([['status', 1], ['sensor_id', 7], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastVazao) {
            $newAlertVazao = new Alerta ([
                'historico_id'  => $lastVazao->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertVazao->save();

            $lastAlertVazao = Alerta::where([['historico_id', $lastVazao->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertVazao) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastVazao, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertVazao = Alerta::find($lastAlertVazao->id);
                $lastAlertVazao->enviado = true;
                $lastAlertVazao->save();
    
                $lastVazao = Historico::find($lastVazao->id);
                $lastVazao->enviado = true;
                $lastVazao->update();
            }
        } 


        /**
         * ALERTA FLUXO
         */
        $lastFluxo = Historico::where([['status', 1], ['sensor_id', 8], ['enviado', 0]])->orderby('data_hora', 'desc')->first();

        if($lastFluxo) {
            $newAlertFluxo = new Alerta ([
                'historico_id'  => $lastFluxo->id,
                'mensagem'      => 'Alerta! Falha identificada no sistema! Verifique os sensores.',
                'enviado'       => false,
            ]);
            $newAlertFluxo->save();

            $lastAlertFluxo = Alerta::where([['historico_id', $lastFluxo->id], ['enviado', false]])->orderby('updated_at', 'desc')->first();
    
            if($lastAlertFluxo) {
                Mail::send('layouts.email.email', ['lastSensor' => $lastFluxo, 'user' => $user], function ($m) {
                    $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime')
                      ->to('yasminuchoa123@gmail.com')
                      ->subject('Alerta Datacenter - Sistema em estado crítico!');
                });
    
                $lastAlertFluxo = Alerta::find($lastAlertFluxo->id);
                $lastAlertFluxo->enviado = true;
                $lastAlertFluxo->save();
    
                $lastFluxo = Historico::find($lastFluxo->id);
                $lastFluxo->enviado = true;
                $lastFluxo->update();
            }
        } 

        return redirect()->route('home');
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
