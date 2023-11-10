<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Video extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'link' => $this->link,
            'title' => $this->title,
            'popular' => $this->popular,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
