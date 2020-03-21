<?php

namespace App\Http\Controllers;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function showAll(){
        $votes = Vote::all();
        return view('index',["votes"=>$votes]);
    }
    public function create(Request $request){
        $vote = new Vote;
        $vote->title = $request->title;
        $vote->text = $request->text;
        $vote->negative = 0;
        $vote->positive = 0;
        $vote->save();
        return redirect('/');
    }
    public function show(Request $request){
        $vote = Vote::find($request->id);
        return view('show_vote',["vote"=>$vote]);
    }
}
