<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function store(User $user){

        request()->validate([
            'email1'=>'required',
            'fname1'=>'required',
            'lname1'=>'required',
            'password1'=>'required'
        ]);
    }
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
