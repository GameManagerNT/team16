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
        return $this->hasMany('App\Models\Headphone', 'tid');
    }
    
    public function delete()
    {
        $this->headphones()->delete();
        return parent::delete();
    }

}
