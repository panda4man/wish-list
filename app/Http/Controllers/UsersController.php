<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function getPassword()
    {
        return view('users.update-password');
    }
}
