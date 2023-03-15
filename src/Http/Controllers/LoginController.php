<?php

namespace ProdigyPHP\Prodigy\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\ValidationException;

class LoginController {


    public function index()
    {
        return view('prodigy::auth.login', [
            'cssPath' => __DIR__ . '/../../../public/css/prodigy.css'
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login(Request $request) : RedirectResponse
    {
        if (! Auth::attempt($request->only(['email', 'password']), true)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }
        session()->regenerate();

        $redirect_url = "/" . config('prodigy.path') . "/welcome?pro_editing=true";
        return redirect($redirect_url);
    }
}