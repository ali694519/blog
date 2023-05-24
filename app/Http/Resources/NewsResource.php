<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);


        return [
            'id' => $this->id,
            'Title' => $this->title,
            'Content' => $this->content,
            'Category_Name' => new CategoryResource($this->whenLoaded('category')),
            'Tags_Name' =>new TagsResource($this->whenLoaded('category')) ,
            'created_at' => $this->created_at,
        ];
    }
}
