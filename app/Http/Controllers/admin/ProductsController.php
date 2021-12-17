<?php

namespace App\Http\Controllers\admin;

use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('/admin/products/index', compact('product'))->with('categories', Category::all());
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate(
            [
                'category_id' => 'required',
                'name' => 'required',
                'price' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
            ],
            [
                'category_id.required' => 'ต้องเลือกหมวดหมู่สินค้า',
                'name.required' => 'กรุณากรอกชื่อสินค้า',
                'price.required' => 'กรุณากรอกราคาสินค้า',
                'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
                'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
                'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
                'image.max' => 'ขนาดภาพเกิน 10 MB',
            ]
        );
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->special_price = $request->special_price;
        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $product->image = $filename;
        } else {
            $product->image = 'NOPIC.jpg';
        }
        $product->save();
        // return redirect()->route('products')->with('create','บันทึกข้อมูลสำเร็จ');
        return redirect('/admin/products/index')->with('create', 'บันทึกข้อมูลสำเร็จ');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'))
            ->with('categories', Category::all());
    }

    public function update(Request $request, $products_id)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',

        ],
        [
            'category.required' => 'ต้องเลือกหมวดหมู่สินค้า',
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
            'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',

        ]);
        if ($request->hasFile('image')) {
            $product = Product::find($products_id);
            if($product->image != 'NOPIC.jpg'){
                File::delete(public_path() . '/admin/img/'. $product->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $product->image = $filename;
            $product->category_id = $request->category;
            $product->name = $request->name;
            $product->details = $request->details;
            $product->price = $request->price;
        } else {
            $product = Product::find($products_id);
            $product->category_id = $request->category;
            $product->name = $request->name;
            $product->details = $request->details;
            $product->price = $request->price;
            $product->special_price = $request->special_price;
        }
        $product->save();
        // return redirect()->route('products')->with('update','อัพเดทข้อมูลแล้ว');
        return redirect('/admin/products/index')->with('update','อัพเดทข้อมูลแล้ว');
    }

    public function delete($products_id)
    {
        $product = Product::find($products_id);
        if ($product->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/img/' . $product->image);
        }
        $product->delete();
        return redirect('/admin/products/index')->with('delete', 'ลบข้อมูลแล้ว');
    }
}
