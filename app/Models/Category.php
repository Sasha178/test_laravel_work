<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    protected static function boot() {
        parent::boot();
        static::creating(function ($category) {
            $category->slug = Str::slug($category->title);
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function sluggable()
    {
        return Str::slug( 'title');
    }

}
