<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function store(){
        
     $info =request()->validate([
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'password'=>'required'
        ]);
        User::create($info);
    }
    public function show(User $user){
        
        return view('user',compact('user'));
    }

    public function index(User $user){
        
        return view('user.edit',compact('user'));
    }

    public function update(User $user){
        $edit = request()->validate([
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
        ]);

        $user->update($edit);
        
        return view('user.edit',compact('user'));
    }
}
