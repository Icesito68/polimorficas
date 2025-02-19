<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Video extends Model
{
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;

    public function comments(): MorphMany{
        return $this->morphMany(Comment::class, "commentable");
    }


    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}