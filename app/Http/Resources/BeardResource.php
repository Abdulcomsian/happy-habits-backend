<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BeardResource extends JsonResource
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
            $array['image'] = asset("storage/images/avatar/male/beards/" . $this->image);
        }

        return $array;
    }
}
