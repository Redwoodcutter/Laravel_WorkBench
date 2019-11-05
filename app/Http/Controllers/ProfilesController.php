<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class ProfilesController extends Controller
{
    public function index(User $user)
    {   
        return view('profiles.index', compact('user'));
    }
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
