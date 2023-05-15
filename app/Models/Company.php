<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'about_master_en',
            'about_master_ar',
            'about_details_en',
            'about_details_ar',
            'about_video',
            'sports_title_en',
            'sports_title_ar',
            'sports_text_en',
            'sports_text_ar',
            'services_text_en',
            'services_text_ar',
            'services_title_en',
            'services_title_ar',
            'membership_text_en',
            'membership_text_ar',
            'membership_title_en',
            'membership_title_ar',
            'news_text_en',
            'news_text_ar',
            'news_title_en',
            'news_title_ar',
            'club_member_fees'
    ];
}
