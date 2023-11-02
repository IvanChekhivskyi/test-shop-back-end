<?php

namespace App\Http\Controllers\api;



use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function getProduct($product){
        $product = Product::where('id', $product)->get()->first();

        if(!$product){
            abort(404);
        }
        return $product -> toArray();
    }
}
