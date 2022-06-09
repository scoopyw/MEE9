<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;
use Socialite;
use Hash;
Use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function github() {
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect() {
        $user = Socialite::driver('github')->user();

        $user = User::firstOrCreate(
            ['email' => $user->email],
            ['username' => $user->name],
            ['password' => Hash::make(Str::random(24))]
        );

        Auth::login($user, true);

        return view('dashboard');
    }

    public function discord() {
        return Socialite::driver('discord')->redirect();
    }

    public function discordRedirect() {
        $user = Socialite::driver('discord')->user();

        $user = User::firstOrCreate(
            ['email' => $user->email],
            ['username' => $user->name],
            ['password' => Hash::make(Str::random(24))]
        );

        Auth::login($user, true);

        return view('dashboard');
    }
}
