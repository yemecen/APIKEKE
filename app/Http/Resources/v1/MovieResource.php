<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
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
            'ID' => $this->ID,
            'Title' => $this->Title,
            'ReleaseYear' => $this->ReleaseYear,
            'Rating' => $this->Rating
        ];
        //return parent::toArray($request);
    }
}
