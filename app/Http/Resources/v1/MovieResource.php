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
        /*return [
            'Title' => $this->Title,
            'ReleaseYear' =>$this->ReleaseYear
        ];*/
        return parent::toArray($request);
    }
}
