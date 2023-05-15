<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_membership extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    'start_date',
    'end_date',
    'fees_paid',
    'approved',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
