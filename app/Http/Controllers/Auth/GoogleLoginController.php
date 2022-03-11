<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback()
    {   

        $googleUser = Socialite::driver('google')->user();

        // dd($googleUser);

        $user = User::where('google_id', $googleUser->id)->first();

        if ($user) {
            $user->update([
                'google_token' => $googleUser->token,
            ]);
        } 
        else {
            $uuid = str_replace('-','',Str::uuid());
            $user = User::create([
                'name' => $googleUser->name,
                'userUid' => $uuid ,
                'email' => $googleUser->email,
                'password' => Hash::make(Str::random(50)),
                'google_id' => $googleUser->id,
                'google_token' => Hash::make($googleUser->token),
                'iconURL' => $googleUser->avatar,
            ]);
        }

        Auth::login($user);
        return redirect('/home');
    }
}
