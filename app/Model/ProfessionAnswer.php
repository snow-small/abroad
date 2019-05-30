<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfessionAnswer extends Model
{
    protected $table = 'profession_answer';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;


}
