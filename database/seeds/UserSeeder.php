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
        $usuario = new User([
        	'name' => 'Yasmin',
        	'email' => 'yasminuchoa123@gmail.com',
        	'password' => bcrypt('123456789')
        ]);
        $usuario->save(); 
    }
}
