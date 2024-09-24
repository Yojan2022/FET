<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Insertar 100 registros en la tabla books
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'name' => $faker->firstName,                // Nombre aleatorio
                'last_name' => $faker->lastName,            // Apellido aleatorio
                'folio' => $faker->numberBetween(1, 500),   // Número aleatorio para el folio
                'page' => $faker->numberBetween(1, 1000),   // Número de páginas aleatorio
                'record' => $faker->numberBetween(1, 50),   // Número de registros aleatorio
                'created_at' => now(),                      // Fecha de creación
                'updated_at' => now(),                      // Fecha de actualización
            ]);
        }
    }
}
