<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable = [
        'name', 'sellPrice', 'buyPrice', 'profit', 'comments', 'measure'
    ];
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
