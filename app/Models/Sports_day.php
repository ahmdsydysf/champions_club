<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports_day extends Model
{
    use HasFactory;

    protected $table = 'sports_days';
    protected $guarded = [];
    protected $fillable = [
        'sport_id',
        'firstday_id',
        'secondday_id',
        'sport_time',
    ];

}
