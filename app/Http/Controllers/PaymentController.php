<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Payment;
class PaymentController extends Controller
{
    public function index(){
        $user = Auth::user();
        $payments = Payment::latest()->get();
        return view('admin.payment.index', compact('user', 'payments'));
    }
}
