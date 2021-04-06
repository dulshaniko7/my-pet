<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
public function hospital(){
    return $this->belongsTo(Hospital::class);
}
public function doctor(){
     return $this->belongsTo(Doctor::class);
}
public function treatment(){
    return $this->belongsTo(Treatment::class);
}

}
