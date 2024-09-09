<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tcg\voyager\traits\Translatable;

class MediaType extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'name',
        'image',
        'url',
        'order'
    ];

    protected $translatable = [
        'name'
    ];
}
