<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeable extends Model
{
    use HasFactory;

    public function usertypeable(){
        return $this->morphTo();
    }
}
