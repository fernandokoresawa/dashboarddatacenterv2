<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario1 = new User([
        	'name' => 'Yasmin Uchoa',
        	'email' => 'yasminuchoa123@gmail.com',
        	'password' => bcrypt('123456789')
        ]);
        $usuario1->save(); 

        $usuario2 = new User([
        	'name' => 'Reginaldo',
        	'email' => 'regiscruzbr@yahoo.com.br',
        	'password' => bcrypt('123456789')
        ]);
        $usuario2->save();
    }
}
