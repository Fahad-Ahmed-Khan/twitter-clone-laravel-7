<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        return view('_explore_page',[
            'users'=>User::paginate(20)
        ]);
    }
}
