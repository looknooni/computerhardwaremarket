<?php

namespace App\Http\Controllers\admin;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::all();
        return view('admin.company.index',compact('company'));
    }
}
