<?php

namespace App\Http\Controllers\admin;

use Auth;
use App\Welcome;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function logout () {
        auth()->logout();
        return redirect('/welcome');
    }
}
