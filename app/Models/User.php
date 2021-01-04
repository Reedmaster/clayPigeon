<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Followable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'avatar',
        'banner',
        'name',
        'email',
        'bio',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        if(isset($value)) {
            return asset('storage/' . $value);
        } else {
            return asset('/images/default-avatar.png');
        }
    }

    public function getBannerAttribute($value)
    {
        if(isset($value)) {
            return asset('storage/' . $value);
        } else {
            return asset('/images/default-banner.jpg');
        }
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');

        return Pull::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(10);
    }

    public function pulls()
    {
        return $this->hasMany(Pull::class)
            ->withCount([
                'likes' => function ($query) {
                    $query->where('liked', true);
                },
                'likes as dislikes_count' => function ($query) {
                    $query->where('liked', false);
                }
            ]) 
            ->latest();
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
