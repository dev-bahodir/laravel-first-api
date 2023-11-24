<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SponsorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'updated_at' => $this->updated_at,
            'username' => $this->username,
            'name' => $this->name,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'bio' => $this->bio,
            'location' => $this->location,
            'accepted_tos' => $this->accepted_tos,
            'for_hire' => $this->for_hire,
            'social' => SocialResource::collection($this->social)
        ];
    }
}
