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
        for ($i = 1; $i <= 100; $i++) {
            DB::table('historicos')->insert([
                'sensor_id'     => 1,
                'dados'         => Rand(0, 4),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1,30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => Rand(0, 1)
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 2,
                'dados'         => Rand(196, 235),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1,30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => Rand(0, 1)
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 3,
                'dados'         => Rand(45, 70),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1,30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => Rand(0, 1)
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 4,
                'dados'         => Rand(45, 65),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1,30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => Rand(0, 1)
            ]);

            DB::table('historicos')->insert([
                'sensor_id'     => 5,
                'dados'         => Rand(0, 100),
                'data_hora'          => '2019-' . Rand(3, 10) . '-' . Rand(1,30) . ' ' . Rand(0, 23) . ':' . Rand(10, 59) . ':' . Rand(10, 59),
                'status'        => Rand(0, 1)
            ]);
        }
    }
}
