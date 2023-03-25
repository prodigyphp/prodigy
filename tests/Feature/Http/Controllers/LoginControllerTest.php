<?php

use ProdigyPHP\Prodigy\Http\Controllers\LoginController;

it('has a login route', function () {
    $this->get(action([LoginController::class, 'index']))
        ->assertOk()
        ->assertSee('Log in');
});
