<?php

namespace ProdigyPHP\Prodigy\Http\Controllers;

use Illuminate\Support\Facades\Gate;

class WelcomeController
{
    public function index()
    {
        $authorized = Gate::check('viewProdigy', auth()->user());

        if (! $authorized) {
            return redirect()->route('prodigy.login');
        }

        return view('prodigy::auth.welcome', [
            'cssPath' => __DIR__.'/../../../public/css/prodigy.css',
        ]);
    }
}
