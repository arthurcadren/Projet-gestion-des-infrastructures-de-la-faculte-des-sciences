<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GarageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'zip'=>$this->zipcode,
            'coordinate'=>[
                'lng'=>$this->lng,
                'lat'=>$this->lat
            ],
            'total_spots' => (int)$this->total_spots,
            'free_spots'  => (int)$this->free_spots,
        ];
    }
}
