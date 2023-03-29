<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sport_title_en' ,
        'sport_title_ar' ,
        'sport_subtitle_en' ,
        'sport_subtitle_ar' ,
        'sport_image' ,
        'sport_overview_en',
        'sport_overview_ar',
    ];


}
