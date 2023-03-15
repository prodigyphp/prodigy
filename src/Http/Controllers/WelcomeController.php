<?php

namespace ProdigyPHP\Prodigy\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;

class WelcomeController {


    public function index()
    {
        $authorized = Gate::check('viewProdigy', auth()->user());

        if(!$authorized) {
            return redirect()->route('prodigy.login');
        }

        return view('prodigy::auth.welcome', [
            'cssPath' => __DIR__ . '/../../../public/css/prodigy.css'
        ]);
    }

}