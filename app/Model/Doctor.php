<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $table='doctors';

    public function hospitals(){
        return $this->belongsToMany(Hospital::class,'doctor_hospital','doctor_id','hospital_id');
    }

    public function appointments(){
        return $this->hasMany(Doctor::class);
    }
}
