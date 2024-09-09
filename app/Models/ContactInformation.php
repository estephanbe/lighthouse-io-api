<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ContactInformation extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'address',
        'value',
        'order',
    ];

    protected $translatable = [
        'address',
        'value'
    ];
}
