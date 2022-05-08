<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index()
    {
        return view('AdminProduct');
    }

    public function create()
    {
        return view('AddProduct');
    }
    public function edit()
    {
        return view('EditProduct');
    }
}
