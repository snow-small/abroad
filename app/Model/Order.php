<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'order';

    public $guarded = [];

    public function User ()
    {
        return $this->belongsTo(\App\Model\User::class, 'u_id', 'id');
    }

    public function School ()
    {
        return $this->belongsTo(\App\Model\School::class, 's_id', 'id');
    }

    public function Program ()
    {
        return $this->belongsTo(\App\Model\Program::class, 'p_id', 'id');
    }

    public function Status ()
    {
        return $this->belongsTo(\App\Model\Status::class, 'status', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('orderAva', function ($query) {
            return $query->where('is_delete', 0);
        });
    }
}
