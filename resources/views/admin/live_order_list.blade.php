
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
