<?php

namespace App\Http\Controllers;

use App\Models\Pull;

class PullLikesController extends Controller
{
    public function storeLike(Pull $pull)
    {
        $pull->like(current_user());

        return back();
    }

    public function storeDislike(Pull $pull)
    {   
        $pull->dislike(current_user());
        
        return back();
    }

    public function destroyLike(Pull $pull)
    {
        $pull->unlike(current_user());

        return back();
    }

    public function destroyDislike(Pull $pull)
    {
        $pull->unlike(current_user());

        return back();
    }
}
