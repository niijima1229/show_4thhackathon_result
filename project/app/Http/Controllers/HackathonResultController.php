<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Score;
use App\Judge;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class HackathonResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function score_create($id)
    {
        $judges = Judge::all();
        $team = Team::find($id);
        $scores = Score::where('team_id', $id)->get();
        return view('scoreCreate', compact('judges', 'team', 'scores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function score_store(Request $request)
    {
        $score = new Score;
        $score->judge_id = $request->judge_id;
        $score->team_id = $request->team_id;
        $score->score = $request->score;
        $score->save();
        return redirect()->route('score_create', ['id' => $request->team_id]);
    }

    public function show_rank()
    {
        $teams = Team::where('is_announced', true)->orderBy('total_score', 'desc')->get();
        return view('showRank', compact('teams'));
    }

    public function show_result($id)
    {
        $scores = Score::where('team_id', $id)->orderBy('judge_id')->get();
        $team = Team::find($id);
        return view('showResult', compact('scores', 'team'));
    }

    public function show_done(Request $request)
    {
        $team = Team::find($request->id);
        $team->is_announced = true;
        $team->total_score = $request->total_score;
        $team->save();
        return redirect()->route('show_rank');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function score_destroy($id, Request $request)
    {
        Score::find($id)->delete();
        return redirect()->route('score_create', ['id' => $request->team_id]);
    }
}
