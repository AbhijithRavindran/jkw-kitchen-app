<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
class OrderController extends Controller
{
    public function index($type = null){
        $user = Auth::user();
        if($type == "new" ){
            //need to add order status type column to orders table to store new, ongoing etc.
            $orders = Order::latest()->get();
        }else if($type == "ongoing"){
            $orders = Order::latest()->get();
        }else{
            $orders = Order::latest()->get();
        }
        return view('admin.order.index', compact('user', 'orders', 'type'));
    }
}
