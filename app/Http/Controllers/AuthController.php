<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name',
            'email',
            'password',
        ]);
    }

    public function login(Request $request)
    {
        return 'login';
    }

    public function logout(Request $request)
    {
        return 'logout';
    }
}
