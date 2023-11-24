<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'instagram_username' => $this->instagram_username,
            'portfolio_url' => $this->portfolio_url,
            'twitter_username' => $this->twitter_username,
            'paypal_email' => $this->paypal_email,
        ];
    }
}
