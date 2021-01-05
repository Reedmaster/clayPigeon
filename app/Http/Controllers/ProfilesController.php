<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule as ValidationRule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'pulls' => $user->timeline()
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', ValidationRule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['image'],
            'banner' => ['image','dimensions:min_width=700,min_height=200'],
            'email' => ['string', 'required', 'email', 'max:255', ValidationRule::unique('users')->ignore($user)],
            'bio' => ['string', 'max:255'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request()->file('avatar')->store('avatars');
        }

        if (request('banner')) {
            $attributes['banner'] = request()->file('banner')->store('banners');
        }
        
        $user->update($attributes);

        return redirect($user->path());
    }
}
