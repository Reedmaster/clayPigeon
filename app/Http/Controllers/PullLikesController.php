<?php

namespace App\Http\Controllers;

use App\Models\Pull;

class PullLikesController extends Controller
{
    public function store(Pull $pull)
    {
        $pull->like(current_user());

        return back();
    }

    public function destroy(Pull $pull)
    {   
        $pull->dislike(current_user());
        
        return back();
    }
}
