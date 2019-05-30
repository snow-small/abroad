<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'question';
    protected $primaryKey = 'id';

    public $guarded = [];

    public function QuestionAnswer ()
    {
        return $this->hasMany(\App\Model\QuestionAnswer::class, 'q_id', 'id');
    }

    public function User ()
    {
        return $this->belongsTo(\App\Model\User::class, 'user_id', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('questionAva', function ($query) {
            return $query->where('is_delete', 0);
        });
    }
}




