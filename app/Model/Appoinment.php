<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    public $table = 'appoinments';

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class, 'appoinment_hospital', 'appointment_id', 'hospital_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function appoinmentStatus(){
        return $this->belongsTo(AppoinmentStatus::class);
    }

}
