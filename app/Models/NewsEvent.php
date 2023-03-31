<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    use HasFactory;


    protected $fillable = [
        'title_en',
        'title_ar',
        'date',
        'brief_en',
        'brief_ar',
        'image',
    ];
}
