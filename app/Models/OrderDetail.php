<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $dates = ['date','from_time','to_time'];

    protected $fillable = ['date','from_time','to_time','order_id'];
    
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
