<?php

namespace App\Http\Controllers;

use App\Promote;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

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
        $promote = Promote::all();
        $product = Product::all();
        $category = Category::all();

        return view('welcome',compact('promote','product','category'));
    }
}
