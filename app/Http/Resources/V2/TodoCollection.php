<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TodoCollection extends ResourceCollection
{

    public $collects = TodoResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Platzi',
                'authors' => [
                    'Deybic Rojas',
                    'Platzi'
                ]
            ],
            'type' => 'todos'
        ];
    }
}
