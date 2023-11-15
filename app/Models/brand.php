<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $fillable = [
        '編號',
        '品牌名稱',
        '國家',
        '成立日期',
        '創辦人',
        '總部',
        '網站',
    ];

}
