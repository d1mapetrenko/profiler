<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return User::where('role_id', 1)->get();
    }

    public function show($id)
    {
        return User::where([
            ['role_id', 1],
            ['id', $id]
        ])->get();
    }

    public function edit()
    {
        
    }
}
