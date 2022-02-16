<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public function judge()
    {
        return $this->belongsTo('App\Judge');
    }
}
