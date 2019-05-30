<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'apply';

    public $timestamps = false;
    public $guarded = [];
}
