<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Employees;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0;$i<=2;$i++){
            Employees::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'document' => $faker->phoneNumber,
                'gender' => $faker->company,
            ]);

        }
    }
}
