<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    // informar os campo da tabela
    protected $fillable = [
        'nome_sensor',
        'informacao'
    ];

    protected $table = 'sensores';

    public function historicos()
    {
        return $this->hasMany('App\Historico', 'sensor_id');
    }

}
