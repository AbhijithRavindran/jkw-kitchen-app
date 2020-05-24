@extends('layouts.home_layout')
@section('content')
{{-- Menu small start --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-lg-4 col-md-8 mt-6 cart-wrap ftco-animate fadeInUp ftco-animated">
            <div class="cart-total mb-3">
                <h3>Complete Your Payment</h3>
                <hr>
                <p class="d-flex total-price" style="text-align:center;">
                    <span><strong>Total</strong></span>
                    <span id="totalAmount"><strong>${{$order->total_amount}}</strong></span>
                </p>
                <script src="https://www.paypal.com/sdk/js?client-id=AW2x1LbEYTFLd7zDszvkRuA97cHMUliKVCj_DJze50Y8MBY-LXtQ24cRvJ1eonDTyyHhIutCqHXegZjI"></script>
                <hr>
                <p class="d-flex total-price">
                    <div id="paypal-button-container"></div>
                </p>
            </div>
            <p class="text-center" id="proceed-button" ></p>
        </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: "{{$order->total_amount}}"
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        // alert('Transaction completed by ' + details.payer.name.given_name);
                var posting = $.post(
                        "/payment/confirmPayment",
                      {
                        payment_id: details.purchase_units[0].payments.captures[0].id,
                        status: details.purchase_units[0].payments.captures[0].status,
                        payer_id: details.payer.payer_id,
                        order_id: {{$order->id}},
                        payment_details: JSON.stringify(details),
                        '_token': '{{ csrf_token() }}'
                      });
                posting.done(function( data ) {
                    console.log(data)
                    if(data[0]){
                      window.location = '/payment/success/'+data[1];
                    }else{
                      if(!alert('Payment Failed! Please try again or contact us.')){window.location.reload();}
                    }
                  });
      });
    }
  }).render('#paypal-button-container');
  </script>
@endsection