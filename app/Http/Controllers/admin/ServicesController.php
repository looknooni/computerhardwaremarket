<?php

namespace App\Http\Controllers\admin;

use App\Service;
use Image;
use File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $service = Service::all();
        return view('admin.services.index',compact('service'));
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
            'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);
        $service = new Service;
        $service->name = $request->name;
        $service->image = $request->image;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $service->image = $filename;
        }else{
            $service->image = 'nopic.jpg';
        }
        $service->save();
        return redirect('/admin/services/index')->with('create','บันทึกข้อมูลสำเร็จ');
    }

    public function edit($service_id){
        $service = Service::find($service_id);
        return view('/admin/services/edit',compact('service'));
    }

    public function update(Request $request,$service_id){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif,bmp,svg|file|max:12040',
        ],
        [
            'name.required' => 'ต้องมีคำอธิบายรูปภาพ',
            'name.max:255' => 'กรอกเกิน 255 ตัวอักษร',
            'image.mimes' => 'นามสกุลไฟล์ไม่ตรงกับฐานข้อมูล',
            'image.file' => 'ไม่ใช่ไฟล์รูปภาพ',
            'image.max' => 'ขนาดภาพเกิน 10 MB',
        ]);
        if ($request->hasFile('image')) {
            $service = Service::find($service_id);
            if($service->image != 'NOPIC.jpg'){
                File::delete(public_path() . '/admin/img/'. $service->image);
            }
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path() . '/admin/img/', $filename);
            Image::make(public_path() . '/admin/img/' . $filename);
            $service->image = $filename;
            $service->name = $request->name;
        } else {
            $service = Service::find($service_id);
            $service->name = $request->name;
        }
        $service->save();
        return redirect('/admin/services/index')->with('update','อัพเดทข้อมูลแล้ว');
    }

    public function delete($service_id){
        $service = Service::find($service_id);
        $service->delete();
        return redirect('/admin/services/index')->with('delete','ลบข้อมูลแล้ว');
    }

}
