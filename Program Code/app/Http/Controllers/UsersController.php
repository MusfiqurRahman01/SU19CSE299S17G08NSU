<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function show(User $user){
        
        return view('user',compact('user'));
    }

    public function index(User $user){
        
        return view('user.edit',compact('user'));
    }

    public function update(User $user){

        $user->update(request(['email','fname','lname']));
        
        return view('user.edit',compact('user'));
    }
}
