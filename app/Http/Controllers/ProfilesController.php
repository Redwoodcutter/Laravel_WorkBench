<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class ProfilesController extends Controller
{
    public function index($user)
    {   
        $user = User::findOrFail($user);
        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}
