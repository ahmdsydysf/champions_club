<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'about_master_en' => 'about_master_en' ,
            'about_master_ar' => 'about_master_ar' ,
            'about_details_en' => 'about_details_en' ,
            'about_details_ar' => 'about_details_ar' ,
            'about_video' => 'about_video' ,
            'sports_title_en' => 'sports_title_en' ,
            'sports_title_ar' => 'sports_title_ar' ,
            'sports_text_en' => 'sports_text_en' ,
            'sports_text_ar' => 'sports_text_ar' ,
            'services_text_en' => 'services_text_en' ,
            'services_text_ar' => 'services_text_ar' ,
            'services_title_en' => 'services_title_en' ,
            'services_title_ar' => 'services_title_ar' ,
            'membership_text_en' => 'membership_text_en' ,
            'membership_text_ar' => 'membership_text_ar' ,
            'membership_title_en' => 'membership_title_en' ,
            'membership_title_ar' => 'membership_title_ar' ,
            'news_text_en' => 'news_text_en' ,
            'news_text_ar' => 'news_text_ar' ,
            'news_title_en' => 'news_title_en' ,
            'news_title_ar' => 'news_title_ar' ,

        ]);
    }
}
