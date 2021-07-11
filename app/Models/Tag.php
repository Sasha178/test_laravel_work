<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    protected static function boot() {
        parent::boot();
        static::creating(function ($tag) {
            $tag->slug = Str::slug($tag->title);
        });
    }

    public function posts()
    {
        return $this->belongsToMany(
            Post::class,
            'post_tags',
            'tag_id',
            'post_id'

        );
    }

}
