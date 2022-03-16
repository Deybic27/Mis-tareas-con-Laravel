<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'todo_name' => $this->title,
            'author' => [
                $this->user->name,
                $this->user->email
            ],
            'category' => [
                $this->category->id,
                $this->category->name
            ],
            'created_at' => $this->created_at
        ];
    }
}
