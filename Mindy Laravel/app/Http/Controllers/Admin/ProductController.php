<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.AdminProduct');
    }

    public function create()
    {
        return view('admin.AddProduct');
    }
    public function edit()
    {
        return view('admin.EditProduct');
    }
}
