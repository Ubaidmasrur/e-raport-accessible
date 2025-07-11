<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'role', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
