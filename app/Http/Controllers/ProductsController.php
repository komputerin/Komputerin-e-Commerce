<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admins/products/list-product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/products/add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'spesifikasi' => 'required',
            'stok' => 'required',
            'image' => 'required'
        ]);

        Product::create($request->all());
        return redirect('/list-product')->with('status', 'Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admins/products/show', compact('product'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admins/products/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //     {
    //         $request->validate([
    //             'nama' => 'required',
    //             'harga' => 'required|size:9',
    //             'spesifikasi' => 'required',
    //             'stok' => 'required'
    //             'image' => 'required'
    //         ]);
    
    //         Student::where('id', $product->id)
    //             ->update([
    //                 'nama' => $request->nama,
    //                 'harga' => $request->harga,
    //                 'spesifikasi' => $request->spesifikasi,
    //                 'stok' => $request->stok
    //                 'image' => $request->image
    //             ]);
    //             return redirect('/admins')->with('status', 'Berhasil Di Tambah!');
    //     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // private function storeImage($product)
    // {
    //     if (request()->has('image')) {
    //         $product->update([
    //             'image' => request()->image->store('uploads', 'public'),
    //         ]);
    //         $image = Image::make(public_path('storage/' . $product->image))->fit(300, 300, null, 'top-left');
    //         $image->save();
    //     }
    // }
}
