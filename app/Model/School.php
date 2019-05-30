<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;

    public function Province ()
    {
        return $this->belongsTo(\App\Model\Province::class, 'p_id', 'id');
    }

    public function Program ()
    {
        return $this->hasMany(\App\Model\SchoolProgram::class, 's_id', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('schoolAva', function ($query) {
            return $query->where('is_delete', 0);
        });
    }

}
