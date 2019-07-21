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

        $brands = [];
        foreach (DB::table('cars_metadata')->get() as $carMetadata) {
            if (!array_key_exists($carMetadata->brand, $brands)) {
                $brands[$carMetadata->brand] = [$carMetadata->model];
            } else {
                array_push($brands[$carMetadata->brand], $carMetadata->model);
            }
        }

        // Generate 10 car models
        foreach (range(1, 10) as $index) {
            $brandId = $faker->numberBetween(1, 10);
            $brand = DB::table('brands')->select('name')->where('id', $brandId)->first();

            DB::table('models')->insert([
                'name' => $faker->randomElement($brands[$brand->name]),
                'brand_id' => $brandId,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
