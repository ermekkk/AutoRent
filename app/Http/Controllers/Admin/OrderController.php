<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::get();
        $products=Product::get();
        $users=\App\Models\User::get();
        return view('auth.orders.index',compact('orders','products','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$categories=Category::get();
        $brands=Brand::get();
        $gears=Gear::get();
        $homings=Homing::get();
        $rudders=Rudder::get();
        return view('auth.orders.form',compact('categories','brands','gears','homings','rudders'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=>'required'  ,
            'description'=>'required',
             'color'=>'required',
             'price'=>'required',
             'year'=>'required',
            'image'=>'required',
        ]);
        $path=$request->file('image')->store('product');
        $params=$request->all();
        $params['image']=$path;
        Order::create($params);
        
        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $product=Product::where('id',$order->product_id)->first();
        $user=\App\Models\User::where('id',$order->user_id)->first();
        $country=\App\Models\Country::where('id',$order->country_id)->first();
        $city=\App\Models\City::where('id',$order->city_id)->first();
        $returncar=\App\Models\Returncar::where('id',$order->returncar_id)->first();
        $getcar=\App\Models\Getcar::where('id',$order->getcar_id)->first();

        $status=\App\Models\Status::where('id',$order->status_id)->first();
        $pay=\App\Models\Pay::where('id',$order->pay_id)->first();

        return view('auth.orders.show',compact('order','product','user','country','city','getcar','returncar','pay','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
           return view('auth.orders.form',compact('order'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $product=\App\Models\Product::where('id','order->product_id')->first();
        if($order->status==0){
        \DB::table('orders')->where('product_id', $order->product_id)->update(['status'=>1]);
        \DB::table('products')->where('id',$order->product_id)->update(['rent'=>1]);
    }else{
\DB::table('orders')->where('product_id', $order->product_id)->update(['status'=>0]);
        \DB::table('products')->where('id',$order->product_id)->update(['rent'=>0]);

    }
        return redirect()->route('orders.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
            $order->delete();
        return redirect()->route('orders.index');
    }
}
