<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        $orders = Order::with('customer')->where('status','=',true)->get();
        return view('admin.dashboard', compact('user', 'orders'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
