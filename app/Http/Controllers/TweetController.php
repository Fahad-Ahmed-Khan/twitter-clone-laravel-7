<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = auth()->user()->timeline();;
        return view('tweets.index', ['tweets'=> $tweets]);
    }

    public function store(){
        request()->validate(['body'=>'required']);

        Tweet::create([
            'user_id'=>auth()->user()->id,
            'body'=>request('body')
        ]);

        return redirect('/tweets');
    }
}
