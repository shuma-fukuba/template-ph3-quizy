<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmallQuestion extends Model
{
    //

    protected $fillable = ['image', 'name', 'order_id', 'big_question_id'];

    public function big_questions()
    {
        return $this->belongsTo("App\BigQuestion");
    }
    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
}
