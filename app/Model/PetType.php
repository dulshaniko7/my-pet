<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PetType extends Model
{
    public function pet(){
        return $this->hasMany(Pet::class);
    }
}
