<?php

use App\Historico;
use Illuminate\Database\Seeder;

class HistoricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function randomFloat($min = 0, $max = 1)
        {

            $number = $min + mt_rand() / mt_getrandmax() * ($max - $min);
            return number_format($number, 1, '.', '');
        }

        for ($i = 1; $i <= 300; $i++) {

            //01-Corrente 0 a 4
            DB::table('historicos')->insert([
                'sensor_id'     => 1,
                'dados'         => randomFloat(0, 2),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 1,
                'dados'         => randomFloat((float)2.1, 5),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //02-Tensao 196 e 235
            DB::table('historicos')->insert([
                'sensor_id'     => 2,
                'dados'         => Rand(0, 199),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 2,
                'dados'         => Rand(200, 240),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 2,
                'dados'         => Rand(241, 300),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //03-Temperatura 45 a 70
            DB::table('historicos')->insert([
                'sensor_id'     => 3,
                'dados'         => randomFloat(0, 72),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 3,
                'dados'         => randomFloat(72.1, 120),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //04-Umidade 45 e 65
            DB::table('historicos')->insert([
                'sensor_id'     => 4,
                'dados'         => randomFloat(0, 40),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 4,
                'dados'         => randomFloat(40.1, 100),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //05-Gás 0 a 100
            DB::table('historicos')->insert([
                'sensor_id'     => 5,
                'dados'         => randomFloat(0, 80),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 5,
                'dados'         => randomFloat(80.1, 250),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //06-potência
            DB::table('historicos')->insert([
                'sensor_id'     => 6,
                'dados'         => Rand(0, 440),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 6,
                'dados'         => Rand(441, 1100),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //07-vazão
            DB::table('historicos')->insert([
                'sensor_id'     => 7,
                'dados'         => Rand(0, 62),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 7,
                'dados'         => Rand(63, 91),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 7,
                'dados'         => Rand(92, 120),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);



            //08-fluxo
            DB::table('historicos')->insert([
                'sensor_id'     => 8,
                'dados'         => randomFloat(0, 39.9),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 1
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 8,
                'dados'         => randomFloat(40, 100),
                'data_hora'     => '2019-' . Rand(3, 10) . '-' . Rand(1, 30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => 0
            ]);
        }
    }
}
