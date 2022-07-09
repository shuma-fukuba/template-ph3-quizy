<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    //
    public function small_questions() {
        return $this->belongsTo("App\SmallQuestion");
    }
}
