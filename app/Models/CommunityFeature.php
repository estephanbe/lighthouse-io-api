<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CommunityFeature extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'name',
        'image',
        'description',
        'order',
        'stroke'
    ];

    protected $translatable = [
        'name',
        'description'
    ];
}
