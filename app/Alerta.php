<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    protected $fillable = [
        'historico_id',
        'mensagem'
    ];

    public function historico()
    {
        return $this->hasOne('App\Historico', 'historico_id');
    }
}
