<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Doctor;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;


$sufix = 'Bank';
$banks = [
    'Sampath','NSB','BOC','NDB'
];
$factory->define(Doctor::class, function (Faker $faker) use ($banks,$sufix)  {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
'bank' => Arr::random($banks).' '. $sufix,
        'image' => './images/doctors/user.png',
        'branch' => $faker->city,
        'accountNo' => $faker->bankAccountNumber
    ];
});
