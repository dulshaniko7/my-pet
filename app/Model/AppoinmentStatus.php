<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AppoinmentStatus extends Model
{
    public $table = 'appoinment_status';

    public function appointments(){
        return $this->hasMany(Appoinment::class);
    }
}
