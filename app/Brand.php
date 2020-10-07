<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
