<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    public function setProviderAttribute($provider = '')
    {
        $this->attributes['provider'] = strtolower($provider);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
