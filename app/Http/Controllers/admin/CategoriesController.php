<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.categories.index',compact('category'));
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255'
        ],
        [
            'name.required' => 'กรุณากรอกประเภทสินค้า',
            'name.unique' => 'มีประเภทสินค้านี้แล้ว',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/categories/index')->with('create','บันทึกข้อมูลสำเร็จ');
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request,$category_id){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255'
        ],
        [
            'name.required' => 'กรุณากรอกประเภทสินค้า',
            'name.unique' => 'มีประเภทสินค้านี้แล้ว',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร'
        ]);
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/categories/index')->with('update','แก้ไขข้อมูลแล้ว');
    }

    public function delete($category_id){
        Category::destroy($category_id);
        return redirect('/admin/categories/index')->with('delete','ลบข้อมูลแล้ว');
    }
}