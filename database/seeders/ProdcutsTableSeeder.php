<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProdcutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Product::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 10; $i++) {
            Product::create([
                'name'=> $faker->sentence(),
                'code'=> $faker->iban(),
                'price'=> $faker->randomFloat(),
                'status'=> $faker->randomElement(['active', 'deleted']),
                ]);
        }

    }
}
