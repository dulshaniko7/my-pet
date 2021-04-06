<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public $table = 'hospitals';

    public function doctors(){
        return $this->belongsToMany(Doctor::class,'doctor_hospital','hospital_id','doctor_id');
    }

    public function appointments(){
        return $this->belongsToMany(Appoinment::class,'appoinment_hospital','hospital_id','appointment_id');
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

}
