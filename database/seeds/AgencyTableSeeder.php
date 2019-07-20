<?php

use Illuminate\Database\Seeder;

class AgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\Lorem($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Address($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\PhoneNumber($faker));

        // Generate 10 agencies and assign them the first 10 users (moderators)
        foreach (range(1, 10) as $index) {
            $agencyName = $faker->word;
            $agencyPhone = $faker->phoneNumber;
            DB::table('agencies')->insert([
                'name' => $agencyName,
                'phone' => $agencyPhone,
                'address' => $faker->address,
                'city' => $faker->city,
                'user_id' => $index,
                'facebook' => 'https://facebook.com/'. $agencyName,
                'whatsapp' => $agencyPhone,
                'instagram' => 'https://instagram.com/' . $agencyName,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
