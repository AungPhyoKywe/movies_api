<?php

namespace Movies\Api\Movies\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Movies\Api\Comments\Resources\CommentResource;

class MovieResource extends JsonResource
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
            'title' => $this->title,
            'summary' => $this->summary,
            'cover_image' => $this->image_path,
            'genres' => $this->generes,
            'author' => $this->author,
            'tags' => $this->tags,
            'imdb_rate' => $this->imdb_rate,
            'pdf_file' => $this->pdf_file,
            'created_at' => $this->created_at->format('d/m/Y H:i:s'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i:s'),
            "comments" => CommentResource::collection($this->comments),
            "related_movies" => $this->related_movies,
        ];
    }
}
