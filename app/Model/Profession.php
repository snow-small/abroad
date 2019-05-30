<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'profession';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;

    public function ProfessionAnswer()
    {
        return $this->hasMany(\App\Model\ProfessionAnswer::class, 'p_id', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('professionsAva', function ($query) {
            return $query->where('is_delete', 0);
        });
    }
}
