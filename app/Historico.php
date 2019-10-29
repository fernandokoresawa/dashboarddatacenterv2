<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = [
        'sensor_id',
        'dados',
        'data_hora',
        'status',
        'enviado'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function sensor()
    {
        return $this->belongsTo('App\Sensor', 'sensor_id');
    }

    public function alerta()
    {
        return $this->belongsTo('App\Alerta', 'historico_id');
    }
}
