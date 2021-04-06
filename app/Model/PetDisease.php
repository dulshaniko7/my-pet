<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PetDisease extends Model
{
    public function pet(){
        return $this->belongsTo(Pet::class);
    }
}
