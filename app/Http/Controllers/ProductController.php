<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
class ProductController extends Controller
{
  function index()
  {
      $products = Product::all();
      return view('product',['products'=>$products]);
  }
  function detail($id)
  {
      $product= Product::find($id);
      return view('detail',['product'=>$product]);
  }
  function search(Request $req)
  {
      //return $req->input();
      $products = Product::where('name','like','%'.$req->input('query').'%')->get();
      return view('search',['products'=>$products]);
  }
  function addToCart(Request $req)
  {
      if($req->session()->has('user'))
      {
          //return $req->input();
          $cart = new Cart();

          $cart ->user_id = $req->session()->get('user')['id'];
          $cart ->product_id = $req->product_id;
          $cart->save();
          return redirect()->back()->with('success', 'Successfully added to the cart!');
        }
      else
      {
          return redirect('/login');
      }

  }
  function cartItem()
  {
      $userId = Session::get('user')['id'];
      return Cart::where('user_id',$userId)->count();
  }

  function cartList()
  {
      $userId= Session::get('user')['id'];
      $products = DB::table('cart')
                    ->join('products','cart.product_id','=','products.id')
                    ->where('cart.user_id',$userId)
                    ->select('products.*','cart.id as cart_id')
                    ->get();
                    return view('cartList',['products'=>$products]);
  }

  function removeCart($id)
  {
    Cart::destroy($id);
    return redirect('cartList');
  }

  function orderNow()
  {

    $userId= Session::get('user')['id'];
     $total = DB::table('cart')
                  ->join('products','cart.product_id','=','products.id')
                  ->where('cart.user_id',$userId)
                  ->select('products.*','cart.id as cart_id')
                  ->sum('products.price');
                  return view('ordernow',['total'=>$total]);
  }

  function orderPlace(Request $req)
  {
      //return $req->input();

      $userId = Session::get('user')['id'];
      $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Order();
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment_method;
            $order->payment_status= "pending";
            $order->address= $req->address;
            $order->save();
            $allCart = Cart::where('user_id',$userId)->delete();

        }
        return redirect('/');
  }


  function myOrders()
  {
       $userId = Session::get('user')['id'];
    $orders= DB::table('orders')
    ->join('products','orders.product_id','=','products.id')
    ->where('orders.user_id',$userId)
    ->get();
    return view('myorders',['orders'=>$orders]);
  }

  function register()
  {
      return view('register');
  }
}
