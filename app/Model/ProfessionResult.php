<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfessionResult extends Model
{
    protected $table = 'profession_result';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;
}
