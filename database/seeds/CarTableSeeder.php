<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // Generate 30 cars
        foreach (range(1, 30) as $index) {
            DB::table('cars')->insert([
                'name' => ucfirst($faker->word),
                'registration_number' => $faker->randomNumber(6),
                'production_year' => $faker->year(2019),
                'price' => $faker->numberBetween(10, 100000),
                'kilometers' => $faker->numberBetween(0, 100000),
                'seats' => $faker->numberBetween(2, 6),
                'fuel' => $faker->randomElement(['gasoline', 'diesel']),
                'speed' => $faker->randomElement(['automatic', 'manual']),
                'agency_id' => $faker->numberBetween(1, 10),
                'model_id' => $faker->numberBetween(1, 10),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
