<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class InsertController extends Controller {
 
 
  public function insert(Request $request){
     $product_id = $request->input('product_id');
     $user_id = $request->input('user_id');
     $addres=$request->input('address');
     $get_date=$request->input('getdate');
     $set_date=$request->input('setdate');
     $country_id=$request->input('country_id');
     $city_id=$request->input('city_id');
     $total=$request->input('total');

     $returncar_id=$request->input('returncar_id');
      $returncar=$request->input('returncar');
      $getcar=$request->input('getcar');
      $getcar_id=$request->input('getcar_id');
        $pay_id=$request->input('pay_id');

    DB::table('orders')->insert(
    	['product_id' =>$product_id , 'user_id'=>$user_id, 'addres'=>$addres, 'get_date'=>$get_date, 'set_date'=>$set_date,'country_id'=>$country_id,'city_id'=>$city_id,'total'=>$total,'returncar_id'=>$returncar_id,'returncar'=>$returncar,'getcar'=>$getcar,'getcar_id'=>$getcar_id,'pay_id'=>$pay_id,]
    );
     echo "Record inserted successfully.<br/>";
     echo '<a href = "/">Click Here</a> to go back.';
  }
}