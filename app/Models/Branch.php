<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_en',
        'branch_ar',
        'address_en',
        'address_ar',
        'phone',
        'whatsapp',
        'email',
        'google_map',
        'master_branch',
        'working_hours_en',
        'working_hours_ar',
    ];


}
