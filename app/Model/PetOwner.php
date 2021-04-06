<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
   public function pet(){
       return $this->hasMany(Pet::class);
   }
}
