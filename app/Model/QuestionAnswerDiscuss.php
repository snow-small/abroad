<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswerDiscuss extends Model
{
    protected $table = 'question_answer_discuss';
    protected $primaryKey = 'id';

    public $guarded = [];

    public function User ()
    {
        return $this->belongsTo(\App\Model\User::class, 'user_id', 'id');
    }
}
