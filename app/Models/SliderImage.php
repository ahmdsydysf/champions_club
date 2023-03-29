<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'title_en',
        'title_ar',
        'subtitle_en',
        'subtitle_ar',
        'overview_en',
        'overview_ar',
        'nav_title_en',
        'nav_title_ar',
        'nav_subtitle_en',
        'nav_subtitle_ar',
    ];
}
