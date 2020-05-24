<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Notification;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        $orders = Order::with('customer')->where('status','=',true);
        $orders = $orders->where('created_at', '>', Carbon::now()->subMinutes(1440))->get();
        $notifications = Notification::with('order')->whereIn('id', $orders->pluck('id'));
        $notifications->update(['live_trigger_status' => false]);
        $notifications = $notifications->get();
        $order_count = $this->getOrderCount($orders);

        return view('admin.dashboard', compact('user', 'orders', 'notifications', 'order_count'));
    }

    public function liveOrderData(){
        $notification = Notification::where('live_trigger_status','=',true)->get();
        if(count($notification) > 0){
            return "true";
        }else{
            return "false";
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    private function getOrderCount($orders){

        $order_count = array('new'=> 0, 'ongoing'=> 0, 'completed'=>0);

        foreach ($orders as $order) {
            switch($order->process_status){
                case 'completed': $order_count['completed']++;break;
                case 'new': $order_count['new']++;break;
                case 'ongoing': $order_count['ongoing']++;break;
            }
        }

        return $order_count;

    }

}
