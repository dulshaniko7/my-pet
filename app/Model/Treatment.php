<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    public function pet(){
        return $this->belongsTo(Pet::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}
