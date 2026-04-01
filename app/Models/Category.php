<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'slug',
    'status',
    'meta_title',
    'meta_keyword',
    'meta_description'
])]

class Category extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
