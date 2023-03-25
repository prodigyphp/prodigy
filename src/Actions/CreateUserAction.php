<?php

namespace ProdigyPHP\Prodigy\Actions;

use Illuminate\Support\Facades\Hash;

class CreateUserAction
{
    public function __construct(public string $name, public string $email, public string $password)
    {
    }

    public function execute(): mixed
    {
        return $this->createUser();
    }

    protected function createUser(): mixed
    {
        $guard = config('auth.defaults.guard');

        $provider = config("auth.guards.{$guard}.provider");

        $model = config("auth.providers.{$provider}.model");

        if ((new $model)::where('email', $this->email)->get()->isNotEmpty()) {
            abort(403, 'That user already exists. Email must be unique.');
        }

        return tap((new $model)->forceFill([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]))->save();
    }
}
