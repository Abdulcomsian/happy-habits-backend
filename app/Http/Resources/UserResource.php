<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "username" => $this->username,
            "email" => $this->email,
            "email_verified_at" => date("Y-m-d H:i", strtotime($this->email_verified_at)),
            "areGoalsReady" => $this->userGoals->count() > 0 ? true : false,
            "avatar" => !empty($this->avatar) ? [
                "id" => $this->avatar->id,
                "is_male" => $this->avatar->is_male,
                "color_id" => $this->avatar->color_id,
                "hair_id" => $this->avatar->hair_id,
                "shirt_id" => $this->avatar->shirt_id,
                "glasses_id" => $this->avatar->glasses_id,
                "eyes_id" => $this->avatar->eyes_id,
                "eyebrows_id" => $this->avatar->eyebrows_id,
                "noses_id" => $this->avatar->noses_id,
                "lips_id" => $this->avatar->lips_id,
                "beards_id" => $this->avatar->beards_id,
            ] : null,
        ];
    }
}
