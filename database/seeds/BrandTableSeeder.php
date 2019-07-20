<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // Generate 10 car brands
        foreach (range(1, 10) as $index) {
            DB::table('brands')->insert([
                'name' => ucfirst($faker->word),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
