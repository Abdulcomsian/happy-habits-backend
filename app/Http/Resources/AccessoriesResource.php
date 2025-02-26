<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccessoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $array = [
            "id" => $this->id,
            "element_id" => $this->element_id,
        ];
        if($this->gender == "male"){
            $array['image'] = asset("storage/images/avatar/male/accessories/" . $this->image);
        }

        if($this->gender == "female"){
            $array['image'] = asset("storage/images/avatar/female/accessories/" . $this->image);
        }

        return $array;
    }
}
