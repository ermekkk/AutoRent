<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function ptoduct(){
    	return $this->hasMany(Product::class);
    }
     public function status(){
    	return $this->belongsToMany(Status::class);
    }
     public function pay(){
    	return $this->belongsToMany(Pay::class);
    }
     public function returncar(){
    	return $this->belongsToMany(Returncar::class);
    }
     public function city(){
    	return $this->belongsToMany(City::class);
    }
     public function country(){
    	return $this->belongsToMany(Country::class);
    }
     public function getcar(){
    	return $this->belongsToMany(Getcar::class);
    }
    public function user(){
    	return $this->hasOne(User::class);
    }

}
