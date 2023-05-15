<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counters')->insert([
            'text_en' => 'New Children',
            'text_ar' => 'اطفال جدد',
            'value' => '500',
        ]);
        DB::table('counters')->insert([
            'text_en' => 'Members',
            'text_ar' => 'الاعضاء',
            'value' => '88',
        ]);
        DB::table('counters')->insert([
            'text_en' => 'Satisfaction',
            'text_ar' => 'الرضا',
            'value' => '96',
        ]);
    }
}
