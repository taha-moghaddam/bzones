<?php

namespace Bikaraan\BZones\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        $separator = ' > ';
        return [
            'id' => $this->id,
            'text' => trim($this->ancestors->pluck('name')->join($separator) . $separator . $this->name, $separator),
        ];
    }
}
