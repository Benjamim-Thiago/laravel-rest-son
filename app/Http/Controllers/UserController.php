<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

   
    public function show(User $user)
    {
        return $user;
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }
}
