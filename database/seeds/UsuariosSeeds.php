<?php

use Illuminate\Database\Seeder;
use  App\User;  //modelo de usuario criado pelo programador , representa tabela banco

class UsuariosSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario= new User();
        $usuario->name='Reginaldo Santa Rosa';
        $usuario->email='admin@mail.com';
        $usuario->password= bcrypt('123456');
        $usuario->save();
    }
}
