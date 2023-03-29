<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_links')->insert([
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'instgram' => 'instgram',
            'youtube' => 'youtube',
            'linkedin' => 'linkedin',
        ]);
    }
}
