<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\fr_FR\Person($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\Address($faker));
        $faker->addProvider(new Faker\Provider\fr_FR\PhoneNumber($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));
        $faker->addProvider(new Bluemmb\Faker\PicsumPhotosProvider($faker));

        // Generate 20 moderators
        foreach (range(1, 20) as $index) {
            DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'photo' => $faker->randomElement([$faker->imageUrl(500, 500, $index), 'profile/default.png']),
                'email' => 'moderator'.$index . '@gmail.com',
                'email_verified_at' => $faker->randomElement([$faker->date('Y-m-d', 'now'), null]),
                'password' => bcrypt('password'),
                'role' => 'moderator',
                'approved' => $index == 1 ? 1 : $faker->randomElement([1,0]),
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        }

        // Generate 2 admins
        foreach (range(1, 2) as $index) {
            DB::table('users')->insert([
                'first_name' => 'admin' . $index,
                'last_name' => 'admin',
                'phone' => $faker->phoneNumber,
                'email' => 'admin' . $index . '@gmail.com',
                'email_verified_at' => $faker->date('Y-m-d', 'now'),
                'password' => bcrypt('password'),
                'role' => 'admin',
                'approved' => 1,
                'created_at' => $faker->date('Y-m-d', 'now'),
            ]);
        };
    }
}
