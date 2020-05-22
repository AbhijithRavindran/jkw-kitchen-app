<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use App\Order;
class PaymentController extends Controller
{
    public function index(){
        $user = Auth::user();
        $payments = Payment::latest()->get();
        return view('admin.payment.index', compact('user', 'payments'));
    }

    public function checkout($id){
        $order = Order::find($id);
        $totalAmount = $order->total_amount;
        return view('checkout', compact('order', 'totalAmount'));
    }

    public function confirmPayment(Request $request){
        $checkout_status = false;
        $order = Order::find($request->input('order_id'));
        $payment = Payment::find($order->payment_id);
        $status = $request->input('status');
        if($status == "COMPLETED"){
            $payment->status = true;
            $checkout_status = true;
        }else{
            $payment->status = false;
        }
        $payment->payment_id = $request->input('payment_id');
        $payment->payer_id = $request->input('payer_id');
        $payment->payment_details = $request->input('payment_details');
        $payment->save();
        if($payment->status){
            $order->status = true;
            $order->payment_status = "paid";
        }else{
            $order->payment_status = "failed";
        }
        $order->save();
        return [$checkout_status,$order->id];
    }

    public function success($id){
        $order = Order::find($id);
        return view('success', compact('order'));
    }
}
