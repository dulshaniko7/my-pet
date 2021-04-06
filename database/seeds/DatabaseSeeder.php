<?php

use Illuminate\Database\Seeder;
use App\Model\Hospital;
use App\Model\Doctor;
use App\Model\AppoinmentStatus;
use App\Model\PetType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
     factory(Hospital::class,10)->create();
     factory(Doctor::class,10)->create();

     $this->call(PetTypeSeeder::class);
     $this->call(AppoinmentStatusSeeder::class);

    }
}
