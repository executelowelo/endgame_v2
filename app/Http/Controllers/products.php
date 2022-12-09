<?php

namespace App\Http\Controllers;

use App\Models\images;
use App\Models\products as ModelsProducts;
use Illuminate\Http\Request;

class products extends Controller
{
    
    public function create(Request $request){
        $request->validate([
            'name'      => 'required|string',
            'price'   => 'required|string|numeric', 
            'description'      => 'required|string',
            'amaunt'   => 'required|string|numeric',

        ]);
            

        $products = ModelsProducts::create([
            'name'      => $request->name,
            'price'   => $request->price,
            'description'      => $request->desription,
            'amaunt'   => $request->amaunt,
        ]);

        $products->save();

        if($request->hasfile('image')){
            foreach($request->file('image') as $image){
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);

                $products_image = images::create([
                    'products_id'   => $products->id,
                    'name'          => $name
                ]);

                $products_image->save();
            }
        }
    }
    // ima iš html failo input "mutliple files"
    //  poto kiekviena iš jų prideda prie database  
    


    public function delete($id){
        $products = ModelsProducts::find($id);
        $products->delete();
        
        return redirect('/#');
    }

    public function edit ($id,Request $request){
        $request->validate([
            'name'      => 'required|string',
            'price'   => 'required|string|numeric',
            'description'      => 'required|string',
            'amaunt'   => 'required|string|numeric',
        ]);

        $products = ModelsProducts::find($id);

        $products->name = $request->name;
        $products->code = $request->code;

        $products->save();

        return redirect('/#');

    }
}
