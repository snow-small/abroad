<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];

    public function Question ()
    {
        return $this->hasMany(\App\Model\Question::class, 'user_id', 'id');
    }

    public function Order ()
    {
        return $this->hasMany(\App\Model\Order::class, 'u_id', 'id');
    }

    protected static function boot ()
        {
            parent::boot();
            static::addGlobalScope('usersAva', function ($query) {
                return $query->where('is_delete', 0);
            });
        }
}