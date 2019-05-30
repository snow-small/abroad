<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $table = 'question_answer';
    protected $primaryKey = 'id';

    public $guarded = [];

    public function QuestionAnswerDiscuss ()
    {
        return $this->hasMany(\App\Model\QuestionAnswerDiscuss::class, 'q_a_id', 'id');
    }

    public function User ()
    {
        return $this->belongsTo(\App\Model\User::class, 'user_id', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('questionAnswerAva', function ($query) {
            return $query->where('is_delete', 0);
        });
    }
}
