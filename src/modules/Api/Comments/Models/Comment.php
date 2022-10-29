<?php

namespace Movies\Api\Comments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Movies\Api\Movies\Models\Movies;

class Comment extends Model
{
    use SoftDeletes;

    protected $table = 'comments';


    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'movie_id', 'email', 'comment'
    ];

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movies::class);
    }
}
