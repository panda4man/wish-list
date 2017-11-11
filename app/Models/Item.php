<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'wish_list_id'];

    public function list()
    {
        return $this->belongsTo(WishList::class);
    }
}
