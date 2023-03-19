<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Driver extends Model
{
    use HasFactory;
     
    protected $fillable = ['name'];

    public function order(): HasOne
    {
        return $this->hasOne(Order::class);
    }

    public function userType(){
        return $this->morphOne(UserTypeable::class, 'usertypeable');
    }
}
