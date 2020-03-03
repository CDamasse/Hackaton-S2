<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = "schools";

    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
