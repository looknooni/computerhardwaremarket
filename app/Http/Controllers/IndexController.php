<?php

namespace App\Http\Controllers;

use App\Promote;
use App\Product;
use App\Category;

use Image;
use File;
use App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $promote = Promote::all();
        $product = Product::all();
        $category = Category::all();

        return view('welcome',compact('promote','product','category'));
    }

    public function logout () {
        auth()->logout();
        return redirect('welcome');
    }
}
