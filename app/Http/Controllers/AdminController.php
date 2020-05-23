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
        return view('admin.dashboard', compact('user', 'orders', 'notifications'));
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
}
