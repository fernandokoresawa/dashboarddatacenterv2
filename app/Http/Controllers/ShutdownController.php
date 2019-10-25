<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shutdown;

class ShutdownController extends Controller
{
    public function shutdown(Request $request)
    {
        $dados = $request->all();

        $shutdown = Shutdown::find(1);

        if((boolean)$dados['shutdown'] == true) {
            (boolean)$dados['shutdown'] = false;
        } else if((boolean)$dados['shutdown'] == false) {
            (boolean)$dados['shutdown'] = true;
        }

        $shutdown->rele = (boolean)$dados['shutdown'];

        $shutdown->save($dados);

        return redirect()->back();
        
    }
}
