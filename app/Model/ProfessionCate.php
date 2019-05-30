<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfessionCate extends Model
{
    protected $table = 'profession_cate';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;
}
