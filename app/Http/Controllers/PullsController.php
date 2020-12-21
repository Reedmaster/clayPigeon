<?php

namespace App\Http\Controllers;

use App\Models\Pull;

class PullsController extends Controller
{
    public function index()
    {   
        return view('pulls.index', [
            'pulls' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Pull::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect()->route('home');
    }
}
