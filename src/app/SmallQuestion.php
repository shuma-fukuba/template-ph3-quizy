<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmallQuestion extends Model
{
    //
    public function big_questions() {
        return $this->belongsTo("App\BigQuestion");
    }

    public function choices() {
        return $this->hasMany('App\Choice');
    }
}
