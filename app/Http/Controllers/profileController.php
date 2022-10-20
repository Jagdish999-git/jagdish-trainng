<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class profileController extends Controller
{ 
    public function index()
    {
        return view('profile.profile');
    }
    public function edit(User $user)
    {
        if(auth()->user()->type ==1)
        {
          return view('profile.edit')->withUser($user);
        }
        else
        {
          
          return redirect()->to('profile.profile');
        }
    }

    public function update( Request $request)
    {
        $user = new User;
      $user->name = request()->input('name');
      $user->email =  request()->input('email');
      $user->password = Hash::make($request->input('password'));
      $user->save();
      
      return view('profile.profile')->withUser($user);
    }


}

