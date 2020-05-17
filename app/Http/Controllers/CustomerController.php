<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        $user = Auth::user();
        $customers = Customer::latest()->get();
        return view('admin.customer.index', compact('user', 'customers'));
    }
}
