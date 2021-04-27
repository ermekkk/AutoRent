<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
     public function index(){
    	return view('welcome');
    }
    public function categories()
    {
    	$categories= \App\Models\Category::get(); 
         $categories = \App\Models\Category::paginate(6);
    	return view('categories',compact('categories'));
    }
    public function cars(){
    	$products= \App\Models\Product::get();
        $products = \App\Models\Product::paginate(6);
    	return view('cars',compact('products'));
    }
  
    public function category($id)
    {
        $category = \App\Models\Category::where('id', $id)->first();

        return view('category', compact('category'));
    }
  public function brands()
    {
    	$brands=  \App\Models\Brand::get(); 
                         $brands = \App\Models\Brand::paginate(6);

    	return view('brands',compact('brands'));
    }
      public function brand($id)
    {
        $brand = \App\Models\Brand::where('id', $id)->first();
        return view('brand', compact('brand'));
    }
    
    public function product($category,$product=null){
         $product = \App\Models\Product::where('id', $product)->first();
	return view('product',compact('product'));
    }
    
    public function addOrder($product){
        $product=\App\Models\Product::where('id',$product)->first();

        $countries=\App\Models\Country::get();
        $cities=\App\Models\City::get();
        $returncarids=\App\Models\Returncar::get();
        $getcarids=\App\Models\Getcar::get();
        $pays=\App\Models\Pay::get();
        $user = auth()->user();
        return view('order',compact('product','user','countries','cities','returncarids','getcarids','pays'));
    }
}
