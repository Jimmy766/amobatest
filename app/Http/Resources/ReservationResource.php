<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReservationResource extends Resource
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
            'reservation_start'=>$this->reservation_start,
            'reservation_end'=>$this->reservation_end
        ];
    }
}
