<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->name = "Rafael de Sá";
        $usuario->email = "rafael_jdsb@hotmail.com";
        $usuario->password = bcrypt("123");
        $usuario->save();
    }
}
