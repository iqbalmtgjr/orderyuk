<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('home')->with('sukses', 'Selamat Anda Berhasil Login !!!');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'role' => 'user',
                    'name' => $user->getName(),
                    'nickname' => $user->getNickname(),
                    'google_id' => $user->getId(),
                    'nickname' => $user->getNickname(),
                    'avatar' => $user->getAvatar(),
                    'password' => Hash::make('qweasdzxc123')
                ]);

                Auth::login($newUser);

                return redirect()->intended('home')->with('sukses', 'Selamat Anda Berhasil Login !!!');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
