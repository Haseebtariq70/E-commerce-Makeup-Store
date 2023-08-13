<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Catagory;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin_dash()
    {
        $total_product = Product::all()->count();
       // $total_message=Message::all()->count();
            $total_order=Order::all()->count();
            $total_user=User::all()->count();
            $order=Order::all();
            $total_revenue=0;
            foreach($order as $order)
            {
                $total_revenue=$total_revenue + $order->price;
            }

            $total_delivered=order::where('delivery_status','=','delivered')->get()->count();
            $total_processing=order::where('delivery_status','=','Processing')->get()->count();
        return view('admin.admin_dash',compact('total_product','total_order','total_user',
        'total_revenue','total_delivered','total_processing'));
    }
    public function view_catagory()
    {
        $catagory=Catagory::all();
        
        return view('admin.catagory',compact('catagory'));
    }

    public function add_catagory(Request $request)
    {
        $data=new Catagory;
        $data->catagory_name=$request->catagory_name;
        $data->save();
        return back()->with('message','Catagory added successfully.');

    }

    public function delete_catagory($id)
    {
        $data=Catagory::find($id);
        $data->delete();
        return redirect()->back()->with('message','Deleted successfully.');
    }
        //Products
        
    public function view_product()
    { 
        $catagory=Catagory::all();
        return view('admin.product',compact('catagory'));
    }

    public function add_product(Request $request)
    {
        $product = new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->catagory=$request->catagory;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->disprice;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Added.');


    }


    public function show_product()
    {
        $product = Product::all();
        return view('admin.showproduct',compact('product'));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product deleted successfully.');
    }

    public function update_product($id)
    {
        $catagory = Catagory::all();
        $product = Product::find($id);
        return view('admin.update_product',compact('catagory','product'));
    }

    public function update_all_product(Request $request,$id)
    {
        $product = Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->catagory=$request->catagory;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->disprice;

        $image=$request->image;
        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        }
        $product->save();

        return  back()->with('message','Product updated successfully.');


    }
}
