@extends('layouts/admin_layout')
@section('content')
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Orders  
      </h4>
    </div>
  </div>
</div>
<div class="row">

  {{-- ORDERS LIST START--}}
  <div class="col-12">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Orders List: {{$type}}</h4>
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
                  <tr>
                    <td>WD-61</td>
                    <td>Chris Chapel</td>
                    <td >
                      +010 8990099234
                    </td>
                    <td>$99</td>
                    <td>
                      <label class="badge badge-danger">New</label>
                    </td>
                    <td class="text-right">
                      {{-- <button type="button" class="btn btn-info"  data-whatever="@mdo">Open modal for @mdo</button> --}}
                      <a href="#" class="btn btn-primary btn-small cst-action-lnk">
                        <i class="mdi mdi-eye "></i>&nbsp;View </a>
                      <a href="#" class="btn btn-success btn-small cst-action-lnk">
                        <span class="mdi mdi-food"></span>&nbsp; Accept</a>
                      <a href="#" class="btn btn-dark btn-small cst-action-lnk">
                        <i class="mdi mdi-eye "></i>&nbsp;Complete</a>
                    </td>
                  </tr>
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