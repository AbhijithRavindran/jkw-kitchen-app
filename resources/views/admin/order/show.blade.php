@extends('layouts.admin_layout')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">ORDER DETAILS</h4>
            <p class="card-description">Order ID &nbsp;<code>#{{$order->id}}</code> </p>
            <div class="row">
              <div class="col-md-6">
                <p class="font-weight-bold">Delivery Address</p>
                <address>
                <p class="font-weight-bold">Customer Name: {{$order->customer->name}}</p>
                    <p><b>Customer ID #{{$order->customer->id}}</b></p>
                    <p><b>Address:</b> {{$order->customer->address}}</p>
                    <p><b>ZIP:</b> {{$order->customer->zip}}</p>
                </address>
              </div>
              <div class="col-md-6">
                <p class="font-weight-bold">Contact</p>
                <address class="text-primary">
                  <p class="font-weight-bold"> E-mail </p>
                  <p class="mb-2"> {{$order->customer->email}} </p>
                  <p class="font-weight-bold"> Phone </p>
                <p> <a href="tel:{{$order->customer->phone}}">{{$order->customer->phone}}</a></p>
                </address>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Payment Details</h4>
            <p class="card-description"> Payment ID &nbsp;<code>#{{$order->payment->id}}</code> </p>
            <p class="card-description"> PayPal Payment ID &nbsp;<code>#{{$order->payment->payment_id}}</code> </p>
            <p class="card-description"> PayPal Payer ID &nbsp;<code>#{{$order->payment->payer_id}}</code> </p>
            <p class="card-description"> Amount Received &nbsp;<code>${{$order->payment->total_amount}}</code> </p>
          </div>
          @if ($order->process_status == "new")
          <a href="/admin/order/accept/{{$order->id}}" class="btn btn-success btn-small cst-action-lnk">
            &nbsp; Accept Order</a>   
          @elseif($order->process_status == "ongoing")
          <a href="/admin/order/complete/{{$order->id}}" class="btn btn-dark btn-small cst-action-lnk">
            &nbsp;Complete Order</a> 
          @endif
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Food Order list</h4>
            <p class="card-description"> </p>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Menu Item</th>
                  <th>Quantity</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($order->food_orders as $food_item)
                    
                
                    <tr>
                    <td>{{$food_item->id}}</td>
                    <td>{{$food_item->food_menu->name}}</td>
                    <td class="text-info">{{$food_item->quantity}}
                    </td>
                    </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
@endsection