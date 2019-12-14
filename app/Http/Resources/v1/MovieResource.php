<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Director;
use App\Http\Resources\v1\DirectorResource;

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
            'Rating' => $this->Rating,
            'Director' => new DirectorResource($this->director)
            //'Director' => new DirectorResource($this->whenLoaded('director'))
            //'Director' => DirectorResource($this->director)
            //'Director' => DirectorResource(Director::find($this->director))
            //'Director' => Director::find($this->DirectorID)
            //'Director' => $this->director
            //'Director' => $this->director
        ];
    }
}
