<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppoinmentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'pet' => $this->pet->name,
            'doctor' => $this->doctor->name,
            'time' => $this->time
        ];
    }
}
