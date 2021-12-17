<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;

class AdminController extends Controller
{
    public function index(){
        $category = Category::all();
        $product = Product::all();
        $user = User::all();
        return view('admin.index',compact('product','category','user'));
    }
}
