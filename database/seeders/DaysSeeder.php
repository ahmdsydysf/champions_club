<?php

namespace Database\Seeders;

use App\Models\Day_new;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
               'en_day'=>'Monday',
               'ar_day'=>'الاثنين',

            ],
            [
                'en_day'=>'Tuesday',
                'ar_day'=>'الثلاثاء',

             ],
             [
                'en_day'=>'Wednesday',
                'ar_day'=>'الاربعاء',

             ],
             [
                'en_day'=>'Thursday',
                'ar_day'=>'الخميس',

             ],
             [
                'en_day'=>'Friday',
                'ar_day'=>'الجمعة',

             ],
             [
                'en_day'=>'Saturday',
                'ar_day'=>'السبت',

             ],
             [
                'en_day'=>'Sunday',
                'ar_day'=>'الاحد',

             ],


        ];

        foreach ($statuses as $key => $status) {
            Day_new::create($status);
        }
    }
}
