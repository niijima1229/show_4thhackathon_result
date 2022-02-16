<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Score;

class Team extends Model
{
    public function total_score()
    {
        return Score::where('team_id', $this->id)->sum('score');
    }

    public function record()
    {
        return Score::where('team_id', $this->id)->count();
    }
}
