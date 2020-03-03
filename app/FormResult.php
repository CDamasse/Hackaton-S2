<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormResult extends Model
{
    protected $table = "form_results";

    public function user() {
        return $this->belongsTo('App\User');
    }
}
