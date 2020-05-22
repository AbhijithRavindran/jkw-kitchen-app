@extends('layouts/admin_layout')
@section('content')
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Order Dashboard  
        &nbsp;&nbsp;&nbsp;<a href="/admin" title="Refresh"><span class="mdi mdi-refresh"></span></a>
      </h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics bg-green-gradient">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <span class="mdi icon-lg mdi-arrow-right-thick"></span>

          </div>
          <div class="float-right">
            <p class="mb-0 text-right text-white">New Orders</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">0</h3>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-white">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total number of new orders.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics bg-orange-gradient">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <span class="mdi icon-lg mdi-food"></span>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right text-white">Ongoing Orders</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">0</h3>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-white">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Orders being processed. </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics bg-blue-gradient">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <span class="mdi icon-lg mdi-truck-fast"></span>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right text-white">Delivered Orders</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">0</h3>
            </div>
          </div>
        </div>
        <p class="mt-3 mb-0 text-white">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i>Total no. of delivered orders.</p>
      </div>
    </div>
  </div>

  {{-- ORDERS LIST START--}}
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Live Orders</h4>
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
                    <th>Order #</th>
                    <th>Customer Name:</th>
                    <th>Customer Ph:</th>
                    <th>Order Amount</th>
                    <th>Order Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                    <tr>
                      <td>{{$order->id}}</td>
                      <td>{{$order->customer->name}}</td>
                      <td >
                        {{$order->customer->phone}}
                      </td>
                      <td>${{$order->total_amount}}</td>
                      <td>
                        @if($order->process_status == "new")
                          <label class="badge badge-success">{{$order->process_status}}</label>
                        @elseif($order->process_status == "ongoing")
                          <label class="badge badge-warning">{{$order->process_status}}</label> 
                        @else 
                          <label class="badge badge-primary">{{$order->process_status}}</label>
                        @endif
                      </td>
                      <td class="text-right">
                        {{-- <button type="button" class="btn btn-info"  data-whatever="@mdo">Open modal for @mdo</button> --}}
                        <a href="/admin/order/show/{{$order->id}}" class="btn btn-primary btn-small cst-action-lnk">
                          <i class="mdi mdi-eye "></i>&nbsp;View </a>
                        @if ($order->process_status == "new")
                        <a href="/admin/order/accept/{{$order->id}}" class="btn btn-success btn-small cst-action-lnk">
                          <span class="mdi mdi-food"></span>&nbsp; Accept</a>   
                        @elseif($order->process_status == "ongoing")
                        <a href="/admin/order/complete/{{$order->id}}" class="btn btn-dark btn-small cst-action-lnk">
                          <i class="mdi mdi-eye "></i>&nbsp;Complete</a> 
                        @endif
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