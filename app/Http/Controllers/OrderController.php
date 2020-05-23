<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\FoodMenu;
use App\Customer;
use App\Payment;
use App\FoodOrder;
class OrderController extends Controller
{
    public function index($type = null){
        $user = Auth::user();
        if($type == "new" ){
            //need to add order status type column to orders table to store new, ongoing etc.
            $orders = Order::where('status','=',true);
            $orders = $orders->where('process_status','=',"new")->get();
        }else if($type == "ongoing"){
            $orders = Order::where('status','=',true);
            $orders = $orders->where('process_status','=',"ongoing")->get();
        }else if($type == "completed"){
            $orders = Order::where('status','=',true);
            $orders = $orders->where('process_status','=',"completed")->get();
        }else{
            $orders = Order::where('status','=',true)->get();
        }
        return view('admin.order.index', compact('user', 'orders', 'type'));
    }

    public function create(Request $request){
        try{
            //calculate cart value
            $cartItems = json_decode($request->input('cartItems'));
            $totalAmount = 0.0;
            //create order
            $order = new Order;
            $order->total_amount = 0.0;
            $order->status = false;
            $order->save();
            for($i=0;  $i < count($cartItems) ; $i++) { 
                //get cart items
                $id = $cartItems[$i][0];
                $quantity = $cartItems[$i][1];  
                //get food item
                $food_menu_item = FoodMenu::find($id);
                //calculate price
                $price = $food_menu_item->price;
                $totalPrice = $price*$quantity;
                $totalAmount = $totalAmount + ($totalPrice);
                //save food order details
                $food_order = new FoodOrder;
                $food_order->quantity = $quantity;
                $food_order->amount = $totalPrice;
                $food_order->order_id = $order->id;
                $food_order->food_menu_id = $food_menu_item->id;
                $food_order->save();
            }
            //create customer
            $customer = Customer::where('phone', '=', $request->input('phone'))->first();
            if ($customer === null) {
                $customer = new Customer;
                $customer->name = $request->input('name');
                $customer->address = $request->input('address');
                $customer->zip = $request->input('zip');
                $customer->phone = $request->input('phone');
                $customer->email = $request->input('email');
                $customer->save();
            }else{
                $customer->name = $request->input('name');
                $customer->address = $request->input('address');
                $customer->zip = $request->input('zip');
                $customer->email = $request->input('email');
                $customer->save();
            }
            //update order
            $order->total_amount = $totalAmount;
            $order->customer_id = $customer->id;
            $order->save();
            //create Payment
            $payment = new Payment;
            $payment->total_amount = $totalAmount;
            $payment->order_id = $order->id;
            $payment->customer_id = $customer->id;
            $payment->save();

            //update order with payment id
            $order->payment_id = $payment->id;
            $order->save();

            return [true,$order->id];
        }catch(\Exception $e){
            return [false,$e->getMessage()];
        }
    }

    public function accept($id){
        $order = Order::find($id);
        $order->process_status = "ongoing";
        $order->save();
        return redirect('/admin');
    }

    public function complete($id){
        $order = Order::find($id);
        $order->process_status = "completed";
        $order->save();
        return redirect('/admin');
    }

    public function show($id){
        $user = Auth::user();
        $order = Order::with('customer','payment', 'food_orders')->find($id);
        $food_orders = $order->food_orders;
        return view('admin.order.show', compact('order', 'food_orders', 'user'));
    }

}
