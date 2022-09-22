<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    //

protected $fillable = [
    'name',
    'order_id'
];

    public function small_questions() {
        return $this->hasMany('App\SmallQuestion');
    }
}
