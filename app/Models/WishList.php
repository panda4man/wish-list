<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $fillable = ['name'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
