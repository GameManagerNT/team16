<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headphone extends Model
{
    use HasFactory;

    protected $fillable = [
        '廠商(外部鍵)',
        '型號',
        '類型',
        '響應頻率(HZ)',
        '抗阻(Ω)',
        '聲壓級(db/mW)',
        '重量(g)',
        '傳輸',
        '價格(NTD)',
    ];
}
