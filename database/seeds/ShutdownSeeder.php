<?php

use Illuminate\Database\Seeder;

class ShutdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shutdowns')->insert([
            'rele' => 0
        ]);
    }
}
