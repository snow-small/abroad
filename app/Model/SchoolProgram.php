<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SchoolProgram extends Model
{
    protected $table = 'school_program';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = [];

    public function Program ()
    {
        return $this->belongsTo(\App\Model\Program::class, 'p_id', 'id');
    }
}
