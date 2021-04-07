<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HospitalsResource extends JsonResource
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
            'name' => $this->HospitalName,
            'RegNo' => $this->RegNo,
            'address' => $this->address,
            'about' => $this->about
        ];
    }
}
