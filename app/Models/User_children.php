<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_children extends Model
{
    use HasFactory;
    protected $table = 'user_childrens';
    protected $guarded = [];
    protected $fillable = [
        'name',
        'birthdate',
        'personal_image',
        'birth_image',
        'height',
        'width',
        'level',
        'user_id',
        'user_relationship',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');

    }

    public function memberships(){
        return $this->hasMany(Membership_detail::class,'child_id');
    }

}
