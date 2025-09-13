<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show(User $user)
    {
        foreach (range(1, 105) as $i) {
            User::find($i);
        }

        $user->break();

        return $user;
    }
}
