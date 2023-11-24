<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SponsorshipResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tagline' => $this->tagline,
            'tagline_url' => $this->tagline_url,
            'sponsor' => SponsorResource::collection($this->sponsor)
        ];
    }
}
