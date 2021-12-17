<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Image;
use File;
use App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        $category = Category::all();

        return view('layouts.page.product',compact('product','category'));
    }

    public function logout () {
        auth()->logout();
        return redirect('layouts.page.product');
    }
}
