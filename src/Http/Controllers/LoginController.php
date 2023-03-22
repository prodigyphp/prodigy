<?php

namespace ProdigyPHP\Prodigy\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;
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
    public function login(Request $request): RedirectResponse
    {
        if (!Auth::attempt($request->only(['email', 'password']), true)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        if(!Gate::check('viewProdigy', auth()->user())) {
            throw ValidationException::withMessages([
                'email' => _('You do not have permission to use Prodigy. Add your email address to config/prodigy.php under `access_emails`.'),
            ]);
        }
        session()->regenerate();

        $redirect_url = config('prodigy.home') . "?pro_editing=true";
        return redirect($redirect_url);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(config('prodigy.home'));
    }

}