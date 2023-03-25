<?php

namespace ProdigyPHP\Prodigy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as BaseUser;
use ProdigyPHP\Prodigy\Database\Factories\UserFactory;

class User extends BaseUser
{
    use HasFactory;

    protected $table = 'users';

    protected static function newFactory(): UserFactory
    {
        return new UserFactory();
    }
}
