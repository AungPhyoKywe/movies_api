<?php

namespace Movies\Api\Movies\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Movies\Api\Comments\Models\Comment;

class Movies extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'movies';


    protected $guarded = ['id'];

    protected $appends = ['related_movies'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'summary', 'image_path', 'generes', 'author', 'tags', 'imdb_rate', 'related_movies'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'movie_id', 'id');
    }

    public function getRelatedMoviesAttribute()
    {
        $related_movies = DB::table('movies')
            ->where('generes', $this->generes)
            ->orWhere('author', $this->author)
            ->orWhere('tags', $this->tags)
            ->take(7)
            ->get();

        return $related_movies;
    }
}
