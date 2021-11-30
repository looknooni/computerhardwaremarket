<?php

namespace App\Http\Controllers\admin;

use App\Promote;
use Image;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PromotesController extends Controller
{
    public function index(){
        $promote = Promote::all();
        return view('/admin/promotes/index',compact('promote'));
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:promotes|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'name.required' => 'ต้องมีคำอธิบายรูปภาพ',
            'name.unique' => 'คำอธิบายซ้ำ',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร',
            'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
            'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);
        $promote = new Promote;
        $promote->name = $request->name;
        $promote->image = $request->image;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $promote->image = $filename;
        }else{
            $promote->image = 'nopicpro.jpg';
        }
        $promote->save();
        return redirect()->route('promotes')->with('create','บันทึกข้อมูลสำเร็จ');
    }

    public function edit($promote_id){
        $promote = Promote::find($promote_id);
        return view('/admin/promotes/edit',compact('promote'));
    }

    public function update(Request $request,$promote_id){
        $validatedData = $request->validate([
            'name' => 'required|unique:promotes|max:255',
            'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
            'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ],
        [
            'name.required' => 'ต้องมีคำอธิบายรูปภาพ',
            'name.unique' => 'คำอธิบายซ้ำ',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร',
            'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
            'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);
        $promote = Promote::find($promote_id);
        $promote->name = $request->name;
        $promote->image = $request->image;
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $promote->image = $filename;
        }else{
            $promote->image = 'nopicpro.jpg';
        }
        $promote->save();
        return redirect('/admin/promotes/index')->with('update','อัพเดทข้อมูลแล้ว');
    }

    public function delete($promote_id)
    {
        $promote = Promote::find($promote_id);
        if ($promote->image != 'nopicpro.jpg') {
            File::delete(public_path() . '/admin/img/' . $promote->image);
        }
        $promote->delete();
        return redirect('/admin/promotes/index')->with('delete', 'ลบข้อมูลแล้ว');
    }
}
