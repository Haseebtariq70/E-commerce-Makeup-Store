<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;
use Event;
use App\Events\SendMail;


class HomeController extends Controller
{

    public function event()
    {
        Event::dispatch(new SendMail(2));
       
    }

   // public function index()
    //{
        // $products = Product::all();
        // return view('frontend.index')->with('products' , $products);
    
   // }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            
            return view('admin.index');
        }
        else
        {           
        return view('frontend.index');
        }
    }

    public function detail($id)
    {
        $product=Product::find($id);
        return view("frontend.detail",compact('product'));
        
    }

    public function all_product()
    {
        $product=Product::all();
        return view('frontend.allproduct',compact('product'));
    }

    
    public function contact(){
        return view('frontend.contact');
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid=$user->id;
            $product = product::find($id);
            $product_exist_id=cart::where('product_id','=',$id)->where('user_id','=',$userid)->get('id')->first();
            if($product_exist_id)
            {
                $cart=cart::find($product_exist_id)->first();
                $quantity=$cart->quantity;
                $cart->quantity=$quantity +$request->quantity;
                
                if($cart->price=$product->discount_price!=null)
                {
                   $cart->price=$product->discount_price * $cart->quantity;
                }
                else
                { 
                  $cart->price=$product->price * $cart->quantity;
                }
               $cart->save();
              return redirect()->back()->with('message','Product Added Successfully.');


            }
            else
            {
                
            $cart = new cart;
            $cart->user_id=$user->id;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->product_id=$product->id;
            $cart->product_title=$product->title;
            $cart->product_id=$product->id;
            $cart->image=$product->image;

            if($cart->price=$product->discount_price!=null)
            {
                $cart->price=$product->discount_price ;
            }
            else
            { 
            $cart->price=$product->price;
            }
            $cart->quantity=$request->quantity;
            $cart->total=$cart->price * $cart->quantity;

            $cart->save();
            return redirect()->back(); 

            }
        }
        else
        {
            return redirect('login');
        }
    }


    public function show_cart()
    {
       if(Auth::id())
       {
        $id=Auth::user()->id;
        $cart=cart::where('user_id','=',$id)->get();
        return view('frontend.showcart',compact('cart'));
       }
       else
       {
        return redirect('login');
       }
    }

    public function remove_cart($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return  redirect()->back();
    }

    public function cart_update(Request $request,$id)
    {
        $cart=cart::find($id);        
        if('send')
        {
            $cart->quantity=$request->quantity;            
            $cart->price=$cart->price * $cart->quantity;
            $cart->save();
            return redirect()->back();
        }
    } 

    public function cash_on_delivery()
    {
        $user = Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();  
        foreach($data as $data)
        {
            $order = new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->user_id=$data->user_id;
            $order->product_id=$data->product_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';
            $order->save();
            $cart_id = $data->id;
            $cart=cart::find($cart_id);
            $cart->delete();

        }
        return redirect()->back()->with('message','We have recived your orders.');
    }

    public function stripe($totalprice)
    {
        return view('frontend.stripe',compact('totalprice'));
    }

    
    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks For Payment." 
        ]);


        $user = Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();  
        foreach($data as $data)
        {
            $order = new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->user_id=$data->user_id;
            $order->product_id=$data->product_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->payment_status='paid';
            $order->delivery_status='processing';
            $order->save();
            $cart_id = $data->id;
            $cart=cart::find($cart_id);
            $cart->delete();

        }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }

    public function show_order()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $userid=$user->id;
            $order=order::where('user_id','=',$userid)->get();
            return view('frontend.show_order',compact('order'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order=order::find($id);
        $order->delivery_status='Order Canceled';
        $order->save();
        return redirect()->back();

    }

   
}
