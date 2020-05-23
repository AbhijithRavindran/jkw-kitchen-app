@extends('layouts/admin_layout')
@section('content')
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Payments  
      </h4>
    </div>
  </div>
</div>
<div class="row">

  {{-- ORDERS LIST START--}}
  <div class="col-12">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Payments List</h4>
        <div class="row grid-margin">
          <div class="col-12">
            {{-- <div class="alert alert-warning" role="alert">
              <strong>Heads up!</strong> This alert needs your attention, but it's not super important. 
            </div> --}}
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr class="text-white">
                    <th>Payment ID #</th>
                    <th>Order ID #</th>
                    <th>Customer ID #</th>
                    <th>Customer Name</th>
                    <th>PayPal Payment ID</th>
                    <th>Amount</th>
                    <th>Received On</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($payments as $payment)
                  <tr>
                    <td>{{$payment->id}}</td>
                    <td>{{$payment->order_id}}</td>
                    <td>{{$payment->customer_id}}</td>
                    <td>{{$payment->customer->name}}</td>
                    <td>{{$payment->payment_id}}</td>
                    <td>${{$payment->total_amount}}</td>
                    <td >
                      {{$payment->updated_at}}
                    </td>
                  </tr>
                  @endforeach
 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- ORDERS LIST END --}}
</div>
@endsection