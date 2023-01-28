<?php

namespace App\Http\Controllers\api;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId= 5;
        $products = DB::table('cart')
                      ->join('products','cart.product_id','=','products.id')
                      ->where('cart.user_id',$userId)
                      ->select('products.*','cart.id as cart_id')
                      ->get();
      return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find(13);
        if(is_null($product)){
            return response()->json(['message','Product is not found',404]);
        }
        else{
             //return $req->input();
        //   $cart = new Cart();
        //   $cart ->user_id = $user_id;
        //   $cart ->product_id = $product_id;
        //   $cart->save();//INSERT INTO Cart ('user_id','product_id') VALUES('$user_id','$product_id')
            return response()->json(Cart::create($request->all()));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return response()->json(Cart::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
