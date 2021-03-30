<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Hospital;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$sufix = 'Bank';
$banks = [
    'Sampath','NSB','BOC','NDB'
];

$factory->define(Hospital::class, function (Faker $faker) use ($banks,$sufix) {
    return [
        'HospitalName'=> $faker->word,
        'RegNo' => $faker->bankAccountNumber,
        'address'=>$faker->address,
        'bank' => Arr::random($banks).' '. $sufix,
        'branch' => $faker->city,
        'accountNo' => $faker->bankAccountNumber
    ];
});
