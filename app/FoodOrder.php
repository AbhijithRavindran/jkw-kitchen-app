<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    public function food_menu(){
        return $this->belongsTo(FoodMenu::class);
    }
}
