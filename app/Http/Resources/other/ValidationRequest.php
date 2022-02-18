<?php

namespace App\Http\Resources\other;

use Illuminate\Http\Resources\Json\JsonResource;

class ValidationRequest extends JsonResource
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
            'status' => 'F',
            'message' => 'validation error',
            'error' => $this->error,
        ];
    }
}
