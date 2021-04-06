<?php

use Illuminate\Database\Seeder;


class AppoinmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [
                'id' => '1' ,
                'type' => 'pending',
            ],
            [
                'id' => '2' ,
                'type' => 'approved',
            ],
            [
                'id' => '3' ,
                'type' => 'rejected',
            ],
            [
                'id' => '4' ,
                'type' => 'payment_pending',
            ],
            [
                'id' => '5' ,
                'type' => 'in_progress',
            ],
            [
                'id' => '6' ,
                'type' => 'done',
            ],
        ];

      \App\Model\AppoinmentStatus::insert($status);
    }
}
