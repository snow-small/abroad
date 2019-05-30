<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    protected $primaryKey = 'id';

    public $guarded = [];
    public $timestamps = false;

    public function School ()
    {
        return $this->hasMany(\App\Model\School::class, 'p_id', 'id');
    }

    protected static function boot ()
    {
        parent::boot();
        static::addGlobalScope('provinceAva', function ($query) {
            return $query->where('is_delete', 0);
        });
    }

}
