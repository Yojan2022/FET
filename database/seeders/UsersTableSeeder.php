<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Importa el modelo de usuario
use Illuminate\Support\Facades\Hash; // Importa la clase Hash para cifrar contraseñas
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea una nueva instancia del modelo User
        $user = new User();

        // Asigna el nombre del usuario
        $user->username = 'Sabogal22';

        // Asigna el correo electrónico del usuario
        $user->email = 'neythan_sabogalga@fet.edu.co';

        // Cifra y asigna la contraseña del usuario usando Hash::make
        $user->password = Hash::make('123456789');

        $user->last_login_at = Carbon::now();

        // Guarda el usuario en la base de datos
        $user->save();
    }
}
