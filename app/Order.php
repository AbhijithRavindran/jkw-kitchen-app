<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function food_orders(){
        return $this->hasMany(FoodOrder::class);
    }
}
