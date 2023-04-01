<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_en',
        'service_ar',
        'overview_en',
        'overview_ar',
    ];

}
