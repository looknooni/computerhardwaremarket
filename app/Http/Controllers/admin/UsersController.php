<?php

namespace App\Http\Controllers\admin;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        if(Auth::user() != 'checkAdmin'){
            $user = User::all();
        }
        return view('admin.users.index',compact('user'));
    }

    public function delete($id){
        $user = User::find($id);
        User::destroy($id);
        return redirect('/admin/users/index')->with('delete','ลบข้อมูลแล้ว');
    }
}
