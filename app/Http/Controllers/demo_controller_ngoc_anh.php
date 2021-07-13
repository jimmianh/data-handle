<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class demo_controller_ngoc_anh extends Controller
{
    public function viewIndex(){
        return view('view_cua_ngoc_anh.index');
    }

    public function aboutUs(){
        return view('view_cua_ngoc_anh.about_us');
    }

    public function goodbye(){
        return view('view_cua_ngoc_anh.tam_biet');
    }

    public function ketqua(){
        return 'kết quả';
    }

    public function update_product($id){
        return $id;
    }

    public function add_product(Request $request){
        $product = new product();
        $product->fill($request ->all());
        $product->save();
        return $request;
    }

}
