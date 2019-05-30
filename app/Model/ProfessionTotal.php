<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfessionTotal extends Model
{
    protected $table = 'profession_total';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;

    public function ProfessionCate()
    {
        return $this->hasMany(\App\Model\ProfessionCate::class, 't_id', 'id');
    }
}
