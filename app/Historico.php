<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    public function sensor()
    {
        return $this->belongsTo('App\Sensor', 'sensor_id');
    }

    public function alerta()
    {
        return $this->belongsTo('App\Alerta', 'historico_id');
    }
}
