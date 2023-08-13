<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $product=Product::all();
        return response()->json($product);
      
    }

    public function carts($id)
    {
        $cart = Cart::find($id);
        return response()->json($cart);
        
    }

    public function cart_user($id)
    {
        $cart_user = User::find($id);
        return response()->json($cart_user);
        
    }
}
