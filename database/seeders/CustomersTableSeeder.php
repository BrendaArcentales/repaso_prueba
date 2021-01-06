<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
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
        // Vaciar la tabla articles.
        Customer::truncate();
        $faker = \Faker\Factory::create();
        $users = User::all();
        foreach ($users as $user) {
        // Y ahora con este usuario creamos algunos articulos
            $num_customers = 2;
            for ($j = 0; $j < $num_customers; $j++) {
                Customer::create([
                    'name'=> $faker->firstName,
                    'lastname'=> $faker->lastName,
                    'document'=> $faker->fileExtension,
                     'user_id'=> $user->id,
                ]);
            }
        }


    }
}

