<?php

namespace ProdigyPHP\Prodigy\Tests\Actions;

use function PHPUnit\Framework\assertEquals;
use ProdigyPHP\Prodigy\Actions\CreateUserAction;
use ProdigyPHP\Prodigy\Models\User;

it('can create a user', function () {
    $users = User::all();

    assertEquals($users->isEmpty(), true);

    $user = (new CreateUserAction('Stephen', 'stephen@example.com', '11111111'))->execute();

    $users = User::all();

    assertEquals(1, $users->count());
    assertEquals($users->first()->email, 'stephen@example.com');
});
