<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headphone extends Model
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
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','tid', 'id');
    }

    public function scopeCheappirce($query)
    {
        return $query->where('price', '<', 5000) ->orderBy('price', 'asc');
    }
    public function scopeRichpirce($query)
    {
        return $query->where('price', '>', 5000) ->orderBy('price', 'desc');
    }
    public function scopeAllGenres($query)
    { 
        return $query->select('genre')->groupBy('genre');
    }

    public function scopeGenre($query, $gen)
    {
        return $query->where('genre', '=', $gen);
    }    
}
