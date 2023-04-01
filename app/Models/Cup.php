<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'brief_en',
        'brief_ar',
        'image',
    ];
}
