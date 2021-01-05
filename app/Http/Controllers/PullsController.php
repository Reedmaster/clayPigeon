<?php

namespace App\Http\Controllers;

use App\Models\Pull;
use App\Models\User;
use Illuminate\Http\Request;

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
        $attributes = request()->validate([
            'body' => 'required|max:255',
            'image' => 'sometimes|nullable|image',
        ]);

        if (request('image')) {
            $attributes['image'] = request()->file('image')->store('tweetImages');
        }

        $attributes['user_id'] = auth()->id();

        Pull::create($attributes);

        return redirect()->route('home');
    }

    public function destroy(Pull $pull)
    {
        $this->authorize('edit', $pull->user);

        $pull->delete();

        return redirect('/pulls');
    }
}
