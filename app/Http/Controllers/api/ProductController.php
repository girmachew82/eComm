<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProducts(){
        $products  = Product::all();
        if(is_null($products)){
            return response()->json(['message'=>'Products not found',404]);
        }
        //return response()->json($products,200);
        return $products;
    }
    function getProductById($id){
        $product  = Product::find($id);
        if(is_null($product)){
            //return response()->json(['message'=>'Prodcut is not found',404]);
            return "Product is not found";
        }
        //return response()->json($product,200);
        return $product;
    }
    function store(Request $request){
        $products = Product::create($request->all());
        return response($products,201);
    }
    function update(Request $request,$id){
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['message'=>'Product is not found',404]);

        }
        else{
            $product->update($request->all());
             return response($product,200);
        }

    }
    function delete( $id){
        $product = Product::find($id);
        if(is_null($product)){
           return response()->json(['message'=>'Product is not found',404]);
        }
        return response(Product::destroy($id));
    }
}
