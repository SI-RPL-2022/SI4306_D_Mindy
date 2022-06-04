<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $items = product::all();
        return view('admin.AdminProduct', [
            'items'=>$items
        ]);
    }

    public function create()
    {
        return view('admin.AddProduct');
    }
    public function edit($id)
    {
        $item = Product::find($id);

        return view('/admin/EditProduct',[
            'item'=>$item
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Product::create($data);

        $items = product::all();
        return view('admin.AdminProduct', [
            'items'=>$items
        ]);
    }
    public function update(Request $request,int $id)
    {

        $item = product::find($id);

        $item->nama = $request['nama'];
        $item->harga = $request['harga'];
        $item->service = $request['service'];
        $item->save();

        return redirect('/product');
    }
    public function destroy(Request $request,int $id)
    {
        $item = product::findOrFail($id);
        $item->delete();

        return redirect('/product');
    }
}
