<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'weight',
        'price',
        'discount',
        'sum',
        'profit',
        'comments',
        'user_id',
        'good_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function good()
    {
        return $this->belongsTo(Good::class);
    }
}
