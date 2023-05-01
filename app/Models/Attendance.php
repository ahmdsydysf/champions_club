<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendances';
    protected $guarded = [];
    protected $fillable = [
        'session_date',
        'session_no',
        'membership_details_id',
        'child_id',
        'attend',
    ];
}
