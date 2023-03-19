<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['distance','driver_id'];

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }


    public function details()
    {
        return $this->belongsToMany(OrderDetail::class);
    }
}
