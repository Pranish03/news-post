<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'banner',
    'redirect_link',
    'company_name',
    'contact',
    'expire_date'
])]

class Advertise extends Model
{
    protected $casts = [
        'expire_date' => 'date'
    ];
}
