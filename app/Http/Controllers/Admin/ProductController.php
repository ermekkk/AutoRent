<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Gear;
use App\Models\Homing;
use App\Models\Rudder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::get();
        return view('auth.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::get();
        $brands=Brand::get();
        $gears=Gear::get();
        $homings=Homing::get();
        $rudders=Rudder::get();
        return view('auth.products.form',compact('categories','brands','gears','homings','rudders'));
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
        Product::create($params);
        
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('auth.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
         $categories=Category::get();
        $brands=Brand::get();
        $gears=Gear::get();
        $homings=Homing::get();
        $rudders=Rudder::get();
        return view('auth.products.form',compact('product','categories','brands','gears','homings','rudders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        \Storage::delete($product->image);
        $path=$request->file('image')->store('product');
        $params=$request->all();
        $params['image']=$path;
       $product->update($params);;
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
