<?php

use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensores')->insert([
            [
                'nome_sensor' => 'Corrente',
                'informacao'  => 2.5
            ],
            [
                'nome_sensor' => 'Tensao',
                'informacao'  => 200
            ],
            [
                'nome_sensor' => 'Temperatura',
                'informacao'  => 50
            ],
            [
                'nome_sensor' => 'Umidade',
                'informacao'  => 48
            ],
            [
                'nome_sensor' => 'Gás',
                'informacao'  => 30
            ],  
        ]);

        //01-Corrente 0 a 4
    	//02-Tensao 196 e 235
    	//03-Temperatura 45 a 70
    	//04-Umidade 45 e 65
    	//05-Gás 0 a 100
    }
}
