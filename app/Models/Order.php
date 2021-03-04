<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model 
{
    protected $guarded = [];

    public function customer() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongTo(User::class);
    }

    public function processor() : \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'processed_by');
    }
    
    public function products() : \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    
}
