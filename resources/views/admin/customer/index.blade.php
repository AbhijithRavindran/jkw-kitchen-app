@extends('layouts/admin_layout')
@section('content')
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Customers  
      </h4>
    </div>
  </div>
</div>
<div class="row">

  {{-- ORDERS LIST START--}}
  <div class="col-12">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Customers List</h4>
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
                    <th>cus ID #</th>
                    <th> Name:</th>
                    <th> Phone:</th>
                    <th>Address</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($customers as $customer)
                  <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td >
                      {{$customer->phone}}
                    </td>
                    <td>{{$customer->address}} &nbsp; {{$customer->zip}}</td>
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