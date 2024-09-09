<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class StaticValue extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'key',
        'value',
        'image'
    ];

    protected $translatable = [
        'value'
    ];
}
