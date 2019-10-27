<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Alerta;
use App\Shutdown;

class AlertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alertas = Alerta::all();

        // SHUTDOWN
        $shutdown = $shutdown = Shutdown::find(1);
        $shut = $shutdown->rele;

        return view('alerta', compact('shut', 'alertas'));
    }

    public function enviarAlerta(Request $request)
    {
        //send('template do email', 'acesso a view do template', 'função com as configs do email' 
        Mail::send('layouts.email.email', ['Datacenter'=>'alerta'], function($m) {
            $m->from('yasminuchoa123@gmail.com', 'Datacenter Realtime');
            $m->to('yasminuchoa123@gmail.com');
            $m->subject('Alerta - sistema em estado crítico');
        });

        // \Session::flash('mensagem', ['msg'=>'Mensagem enviada com sucesso! Em breve retornaremos o contato!', 'class'=>'green white-text']);

        // return redirect()->route('index', '#contato');
        return 'ok';
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
