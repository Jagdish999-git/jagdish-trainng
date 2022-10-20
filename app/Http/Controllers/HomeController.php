<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profileUpdate(Request $request){
        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255',
        ]);
        $user =Auth::user();
        $user->name = ucfirst($request['name']);
        $user->email = $request['email'];
        $user->phone = $request['phone'];  
        $user->city = ucfirst($request['city']);  
        $user->image = $request['image'];
        $user->designation =ucfirst($request['designation']);
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/'), $filename);
            $user->image = $request->file('image')->getClientOriginalName();
        }
        else {
            $fileName = $request->image;
        }
        $user->save();
        return back()->with('message','Profile Updated');
    }
   
}
