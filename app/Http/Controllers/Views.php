<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class Views extends Controller
{
    public function products(){
        $products = products::all();

        return view('products', ['products' => $products]);
    }

    public function product($id){
        $products = products::find($id);

        return view('products', ['products' => $products]);
    }

    public function update_products($id){

        $products = products::find($id);
    
        return view('update_products', ['products' => $products]);
    }

    public function add_products($id){
        $products = products::find($id);
        return view('add_products',['products' => $products]);
    }
}
