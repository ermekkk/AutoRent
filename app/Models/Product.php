<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','category_id','brand_id','description','price','year','gear_id','rudder_id','homing_id','image','color','rent'];
    public function gear(){
    	return $this->belongsTo(Gear::class);
    }
    public function homing(){
    	return $this->belongsTo(Homing::class);
    }
       public function order(){
        return $this->belongsTo(Order::class);
    }
    public function rudder(){
    	return $this->belongsTo(Rudder::class);
    }
    public function brand(){
    	return $this->belongsTo(Brand::class);
    }
    
    public function category(){
    	return $this->belongsTo(Category::class);
    }
      
}
