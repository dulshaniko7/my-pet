<?php

use Illuminate\Database\Seeder;
use App\Model\Hospital;
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

    }
}
