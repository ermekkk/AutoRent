<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders=\App\Models\Order::get();
        $products=\App\Models\Product::get();
        $returncar=\App\Models\Returncar::get();
        $getcar=\App\Models\Getcar::get();
        $pays=\App\Models\Pay::get();
         $user = auth()->user();
        return view('home',compact('orders','user','products','getcar','returncar','pays'));
    }
     public function adminHome()
    {
        return view('adminHome');
    }
}
