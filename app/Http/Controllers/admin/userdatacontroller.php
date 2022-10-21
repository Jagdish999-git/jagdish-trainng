<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class userdatacontroller extends Controller
{
    public function index(){
       $user = User::all();
        return view('admin.tables',compact('user'));
    }
}
