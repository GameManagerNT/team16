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
        return $this->belongsTo('App\Models\Brand','tid','id');
    }
    

    public function scopeCheappirce($query)
    {
        return $query->where('price', '<', 5000)->orderBy('price', 'asc');
        
        //價格小於5000 且由小到大
    }
    public function scopeEppirce($query)
    {
        return $query->where('price', '>', 10000)->orderBy('price', 'asc');
        
        //價格大於5000 且由小到大
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
