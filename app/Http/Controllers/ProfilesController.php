<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile($user)
    {
        $user = User::findOrFail($user);
        return view('user', [
            'user' => $user,
        ]);
    }
}
