@extends('layouts.admin_layout')
@section('content')
<div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">Food Menu List : {{$type}}
          &nbsp;&nbsp;&nbsp;<a href="/admin" title="Refresh"><span class="mdi mdi-refresh"></span></a>
        </h4>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
        <div class="float-right">
        <a href="/admin/food_menu/new" class="btn btn-primary btn-fw">Add New</a>
        </div>
    </div>
    
  </div>
  <br>
  <div class="row">
  
    {{-- ORDERS LIST START--}}
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Food Menu List</h4>
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
                      <th>Menu ID #</th>
                      <th>Item</th>
                      <th>Price</th>
                      <th>Availibility</th>
                      <th>Actions</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($food_menu as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>
                          <img src={{($item->image_url)}}>
                          {{$item->name}}
                        </td>
                      <td>${{$item->price}}</td>
                      <td>
                          @if ($item->status)
                          <label class="badge badge-success">Available</label>  
                          @else
                          <label class="badge badge-danger">Unavailable</label>
                          @endif  
                        
                      </td>
                      <td class="text-left">
                        {{-- <button type="button" class="btn btn-info"  data-whatever="@mdo">Open modal for @mdo</button> --}}
                        <a href="/admin/food_menu/show/{{$item->id}}" class="btn btn-primary btn-small cst-action-lnk">
                            {{-- <a href="#" class="btn btn-primary btn-small cst-action-lnk"> --}}
                          <i class="mdi mdi-eye "></i>&nbsp;View </a>
                        @if (!($item->status))
                        <a href="/admin/food_menu/activate/{{$item->id}}" class="btn btn-success btn-small cst-action-lnk">
                            {{-- <a href="#" class="btn btn-success btn-small cst-action-lnk"> --}}
                            <span class="mdi mdi-food"></span>&nbsp;activate</a> 
                        @else
                        <a href="/admin/food_menu/deactivate/{{$item->id}}" class="btn btn-secondary btn-small cst-action-lnk">
                            <i class="mdi mdi-eye "></i>&nbsp;Deactivate</a>
                        @endif
                        @if ($item->highlight)
                        <a href="/admin/food_menu/unhighlight/{{$item->id}}" class="btn btn-secondary btn-small cst-action-lnk">
                            {{-- <a href="#" class="btn btn-success btn-small cst-action-lnk"> --}}
                            <span class="mdi mdi-food"></span>&nbsp;Unhighlight</a> 
                        @else
                        <a href="/admin/food_menu/highlight/{{$item->id}}" class="btn btn-warning btn-small cst-action-lnk">
                            <i class="mdi mdi-star-circle "></i>&nbsp;Highlight</a>
                        @endif
                      </td>
                      <td>
                        <a href="/admin/food_menu/delete/{{$item->id}}" class="btn btn-danger btn-small cst-action-lnk">
                          <i class="mdi mdi-delete "></i></a>
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