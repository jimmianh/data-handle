<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product-form',[
            'detailProduct' => null
        ]);
    }
    public function index(){
        $product= Product::all();
        return view('products',[
            'products'=>$product
        ]);
    }
    public function store(Request $request){
        $product = new Product();
        $product->fill($request-> all());
        $product->save();
        return redirect()->route('index');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('product-form',[
            'detailProduct' => $product
        ]);
    }
    public function update(Request $request , $id){
        $detailProduct = Product::find($id);
        $detailProduct->update($request->all());
        $detailProduct->save();
        return redirect()->route('index');
    }

    public function destroy($id){
        $detailProduct = Product::find($id);
        $detailProduct->delete();
        return redirect()->route('index');
    }
}
