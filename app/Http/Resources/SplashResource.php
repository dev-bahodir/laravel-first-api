<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SplashResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'width' => $this->width,
            'height' => $this->height,
            'color' => $this->color,
            'alt_description' => $this->alt_description,
            'urls' => UrlsResource::collection($this->urls),
            'sponsorship' => SponsorshipResource::collection($this->sponsorship)
        ];
    }
}
