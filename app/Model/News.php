<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';

    public $guarded = [];


    public function User ()
    {
        return $this->belongsTo(\App\Model\Admin::class, 'admin_id', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('newsAva', function ($query) {
            return $query->where('status', 0);
        });
    }
}
