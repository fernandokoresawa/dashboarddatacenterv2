<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    protected $fillable = [
        'historico_id',
        'mensagem',
        'enviado'
    ];

    public function historico()
    {
        return $this->belongsTo('App\Historico', 'historico_id');
    }
}
