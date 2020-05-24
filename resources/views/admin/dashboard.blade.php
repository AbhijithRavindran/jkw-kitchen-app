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
              <h3 class="font-weight-medium text-right mb-0"> {{$order_count['new']}} </h3>
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
            <h3 class="font-weight-medium text-right mb-0">{{ $order_count['ongoing'] }}</h3>
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
            <h3 class="font-weight-medium text-right mb-0">{{ $order_count['completed'] }}</h3>
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
            <div class="table-responsive" id="live_order_list">
                @include('admin.live_order_list')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- ORDERS LIST END --}}
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>
var refInterval = window.setInterval('update()', 20000); // 30 seconds

var update = function() {
    $.ajax({
        type : 'GET',
        url : '/liveOrderData',
        success : function(data){
          console.log("live.....")
          if(data == "true"){
            console.log('Updated..')
            location.reload();
          }
            // $('#live_order_list').html(data);
        },
    });
};
// update();
</script>
@endsection