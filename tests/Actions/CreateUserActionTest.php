<?php

namespace ProdigyPHP\Prodigy\Tests\Actions;

use ProdigyPHP\Prodigy\Actions\CreateUserAction;
use PHPUnit\Framework\TestCase;
use ProdigyPHP\Prodigy\Models\User;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNull;

it('can create a user', function() {
    $users = User::all();

    assertEquals($users->isEmpty(), true);

    $user = (new CreateUserAction('Stephen', 'stephen@example.com', '11111111'))->execute();

    $users = User::all();

    assertEquals(1, $users->count());
    assertEquals($users->first()->email, 'stephen@example.com');
});
