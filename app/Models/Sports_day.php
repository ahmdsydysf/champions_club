<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports_day extends Model
{
    use HasFactory;
    protected $table = 'sports_days';
    protected $guarded = [];
}
