<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Usuarios as Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for($x=0;$x<10;$x++) {
            Usuario::insert([
                'nome' => str_random(10),
                'posto_grad' => '3S',
                'data_praca' => '1995-11-25',
                'user' => str_random(10),
                'senha' => bcrypt('secret'),
                'status' => 1
            ]);
        }
        Model::reguard();
    }
}
