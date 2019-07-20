<?php

use Illuminate\Database\Seeder;

class UnavailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\DateTime($faker));

        // Generate 30 unavailabilities
        foreach (range(1, 30) as $index) {
            $startDate = $faker->dateTimeBetween('now', '5 months');
            $endDate = $startDate->add(date_interval_create_from_date_string($faker->numberBetween(1, 100) . ' days'));

            DB::table('unavailabilities')->insert([
                'from' => $startDate,
                'to' => $endDate,
                'car_id' => $faker->numberBetween(1, 30),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
