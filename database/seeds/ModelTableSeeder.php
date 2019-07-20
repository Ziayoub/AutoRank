<?php

use Illuminate\Database\Seeder;

class ModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // Generate 10 car models
        foreach (range(1, 10) as $index) {
            DB::table('models')->insert([
                'name' => ucfirst($faker->word) . $index,
                'brand_id' => $faker->numberBetween(1, 10),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
