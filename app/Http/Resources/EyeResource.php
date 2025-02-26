<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EyeResource extends JsonResource
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
            $array['image'] = asset("storage/images/avatar/male/eyes/" . $this->image);
        }

        if($this->gender == "female"){
            $array['image'] = asset("storage/images/avatar/female/eyes/" . $this->image);
        }

        return $array;
    }
}
