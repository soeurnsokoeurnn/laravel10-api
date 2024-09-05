<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'type' => 'Ticket',
          'id' => $this->id,
          'attributes' => [
              'title' => $this->title,
              'description' => $this->description,
              'status' => $this->status,
              'createdAt' => $this->created_at,
              'updatedAt' => $this->updated_at,
          ],
            'links' => [
                ['self' => route('tickets.show', ['ticket' => $this->id])]
            ]
        ];
    }
}