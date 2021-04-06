<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function type()
    {
        return $this->belongsTo(PetType::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function owner()
    {
        return $this->belongsTo(PetOwner::class);
    }

    public function diseases()
    {
        return $this->hasMany(PetDisease::class);
    }
}
