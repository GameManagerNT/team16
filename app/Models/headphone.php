<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headphone extends Model
{
    use HasFactory;

    protected $fillable = [
        'tid',
        'name',
        'genre',
        'hz',
        'spl',
        'oi',
        'weight',
        'ts',
        'price',
    ];
}
