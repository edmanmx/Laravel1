<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create([
            'usuario' => 'user',
            'nombre' => 'Usuario',
            'email' => 'edgar@hotmail.com',
            'password' => bcrypt('pass123')
        ]);

        $usuario->roles()->sync(1);

    }
}
