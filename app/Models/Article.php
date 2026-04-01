<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'title',
    'slug',
    'author',
    'status',
    'image',
    'description',
    'meta_title',
    'meta_keyword',
    'meta_description'
])]

class Article extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
