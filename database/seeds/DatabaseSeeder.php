<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(ModelTableSeeder::class);
        $this->call(AgencyTableSeeder::class);
        $this->call(CarTableSeeder::class);
        $this->call(AttachmentTableSeeder::class);
        $this->call(UnavailabilityTableSeeder::class);

        $this->call(CitiesMetadataTableSeeder::class);
        $this->call(CarsMetadataTableSeeder::class);
    }
}
