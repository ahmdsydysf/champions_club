<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership_detail extends Model
{
    use HasFactory;

    protected $table = 'membership_details';
    protected $guarded = [];
    protected $fillable = [
        'invoice_id',
        'child_id',
        'sport_id',
        'sport_days_id',
        'start_date',
        'end_date',
        'fees',
        'user_comment',
    ];

    public function child(){
        return $this->belongsTo(User_children::class,'child_id');
    }

    public function sport(){
        return $this->belongsTo(Sport::class,'sport_id');

    }

    public function invoice(){
        return $this->belongsTo(Membership_invoice::class,'invoice_id');

    }

    public function sportDays(){
        return $this->belongsTo(Sports_day::class,'sport_days_id');

    }
}
