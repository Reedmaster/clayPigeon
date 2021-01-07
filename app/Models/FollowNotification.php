<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowNotification extends Model
{
    use HasFactory;

    public function __construct($user)
    {
        $this->user = $user;
    }
}
