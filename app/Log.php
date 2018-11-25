<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'operation', 'category', 'product', 'price', 'comments', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
