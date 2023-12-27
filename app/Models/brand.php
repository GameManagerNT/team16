<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'country',
        'since',
        'founder',
        'headquarters',
        'web',
    ];

    public function headphones()
    {
        return $this->hasMany('App\Models\Headphone','tid');
    }

    public function delete()
    {
        $this->headphones()->delete();
        return parent::delete();
    }

    public function scopeClassic($query)
    {
        return $query->where('since', '<', '1970-01-01')->orderBy('since', 'asc');        
        //年分 且由小到大
    }

}
