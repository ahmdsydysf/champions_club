<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportDietLink extends Model
{
    use HasFactory;


    protected $table = 'sport_diet_links';
    protected $guarded = [];

    public function Sport()
    {
        return $this->belongsTo(Sport::class, 'sport_id', 'id');
    }
}
