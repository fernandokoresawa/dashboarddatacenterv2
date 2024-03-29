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

        for ($i = 1; $i <= 30; $i++) {
            for ($mes = $i; $mes <= $i; $mes++) {
            //01-Corrente 0 a 4
            DB::table('historicos')->insert([
                'sensor_id'     => 1,
                'dados'         => randomFloat(0, 2),
                'data_hora'     => '2019-10-' . $mes . ' 13:' . $i . ':' . $i,
                'status'        => 0,
                'enviado'       => true
            ]);
            }
        }

        for ($i = 1; $i <= 30; $i++) {

            DB::table('historicos')->insert([
                'sensor_id'     => 1,
                'dados'         => randomFloat((float) 2.1, 5),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {



            //02-Tensao 196 e 235
            DB::table('historicos')->insert([
                'sensor_id'     => 2,
                'dados'         => Rand(0, 199),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {

            DB::table('historicos')->insert([
                'sensor_id'     => 2,
                'dados'         => Rand(200, 240),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 0,
                'enviado'       => true
            ]);

            // DB::table('historicos')->insert([
            //     'sensor_id'     => 2,
            //     'dados'         => Rand(241, 300),
            //     'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
            //     'status'        => 1,
            //     'enviado'       => true
            // ]);

        }
        for ($i = 1; $i <= 30; $i++) {

            //03-Temperatura 45 a 70
            DB::table('historicos')->insert([
                'sensor_id'     => 3,
                'dados'         => randomFloat(0, 72),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 0,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 3,
                'dados'         => randomFloat(72.1, 120),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {

            //04-Umidade 45 e 65
            DB::table('historicos')->insert([
                'sensor_id'     => 4,
                'dados'         => randomFloat(0, 40),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 0,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 4,
                'dados'         => randomFloat(40.1, 100),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {

            //05-Gás 0 a 100
            DB::table('historicos')->insert([
                'sensor_id'     => 5,
                'dados'         => randomFloat(0, 80),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 0,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 5,
                'dados'         => randomFloat(80.1, 250),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {

            //06-potência
            DB::table('historicos')->insert([
                'sensor_id'     => 6,
                'dados'         => Rand(0, 440),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 0,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 6,
                'dados'         => Rand(441, 1100),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {


            //07-vazão
            DB::table('historicos')->insert([
                'sensor_id'     => 7,
                'dados'         => Rand(0, 62),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 7,
                'dados'         => Rand(63, 91),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 0,
                'enviado'       => true
            ]);

            // DB::table('historicos')->insert([
            //     'sensor_id'     => 7,
            //     'dados'         => Rand(92, 120),
            //     'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
            //     'status'        => 1,
            //     'enviado'       => true
            // ]);

        }
        for ($i = 1; $i <= 30; $i++) {

            //08-fluxo
            DB::table('historicos')->insert([
                'sensor_id'     => 8,
                'dados'         => randomFloat(0, 39.9),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i . ':' . $i,
                'status'        => 1,
                'enviado'       => true
            ]);
        }
        for ($i = 1; $i <= 30; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 8,
                'dados'         => randomFloat(40, 100),
                'data_hora'     => '2019-10-' . $i . ' 13:' . $i++ . ':' . $i++,
                'status'        => 0,
                'enviado'       => true
            ]);
        }
    }
}
