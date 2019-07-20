<?php

use Illuminate\Database\Seeder;

class AttachmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

        // Generate 50 attachments
        foreach (range(1, 50) as $index) {
            $data = [
                'url' => $faker->imageUrl(),
                'type' => 'image',
                'created_at' => $faker->date('Y-m-d', 'now'),
            ];

            if (rand(0, 1) == 0) {
                $data['car_id'] = $faker->numberBetween(1, 30);
            } else {
                $data['agency_id'] = $faker->numberBetween(1, 10);
            }

            DB::table('attachments')->insert($data);
        }
    }
}
