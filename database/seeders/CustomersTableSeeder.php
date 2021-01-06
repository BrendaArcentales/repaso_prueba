<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 10; $i++) {
            Customer::create([
                'name'=> $faker->firstName,
                'lastname'=> $faker->lastName,
                'document'=> $faker->fileExtension,
            ]);
        }

    }
}

