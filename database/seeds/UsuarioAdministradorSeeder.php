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
            'usuario' => 'edmanmx',
            'nombre' => 'Edgar',
            'email' => 'edmanmx@hotmail.com',
            'password' => bcrypt('12345')
        ]);

        $usuario->roles()->sync(1);

    }
}
