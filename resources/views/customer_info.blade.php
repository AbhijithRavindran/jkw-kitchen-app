@extends('layouts.home_layout')
@section('content')
{{-- Menu small start --}}
<div class="container">
    <div class="row">
        <div class="col-xl-8 ftco-animate fadeInUp ftco-animated">
            <form id="customer_info_form" method="POST" action="/order/create" class="billing-form ftco-bg-dark p-3 p-md-5">
            @csrf
              <h3 class="mb-4 billing-heading">Delivery Details</h3>
                <div class="row align-items-end">
                    <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">Full Name*</label>
                    <input id="name" type="text" required name="name" class="form-control" placeholder="">
                  </div>
                </div>
              <div class="w-100"></div>
                  <div class="w-100"></div>
                  <div class="col-md-12">
                      <div class="form-group">
                            <label for="streetaddress">Delivery Address*</label>
                            {{-- <input type="text" class="form-control" placeholder="House number and street name"> --}}
                            <textarea id="address" class="form-control" required name="address" placeholder="House number, street name and Town"></textarea>
                        </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="postcodezip">Postcode / ZIP *</label>
                    <input id="zip" type="text" required name="zip" class="form-control" placeholder="">
                  </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Phone*</label>
                    <input id="phone" type="text" required class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Email Address*</label>
                    <input id="email" type="text" required class="form-control" placeholder="">
                  </div>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary py-3 px-4" value="Proceed to Checkout">
                </div>
            </div>
              </div>
            </form><!-- END -->
        </div> <!-- .col-md-8 -->




        <div class="col-xl-4 sidebar ftco-animate fadeInUp ftco-animated">
          <div class="sidebar-box">
            <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                <h3 class="billing-heading mb-4">Cart Total</h3>
                <p class="d-flex">
                          <span>Total</span>
                          <span  id="totalAmount"></span>
                </p>
            </div>
          </div>
        </div>

      </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script>
  cartData();
    generateCartSummary();
    function generateCartSummary(){
    var totalAmount = 0;
    for (i = 0; i <= localStorage.length-1; i++) {
        var dataArray = JSON.parse(localStorage.getItem(localStorage.key(i)));
        console.log("dataArray=>"+dataArray)
        var quantity = dataArray[0];
        var price = dataArray[2];
        var totalPrice = parseFloat(price) * parseInt(quantity);
        console.log("totalPrice=>"+totalPrice+" totalAmount=>"+totalAmount)
        totalAmount = totalAmount + totalPrice;
        console.log("totalPrice=>"+totalPrice+" totalAmount=>"+totalAmount)
    }
    console.log("cs=>"+totalAmount)
    document.getElementById("totalAmount").innerHTML = "$"+parseFloat(totalAmount) ;
}
function cartData(){
  var arrMain = [];
  for (i = 0; i <= localStorage.length-1; i++) {
    var id = localStorage.key(i);
    var dataArray = JSON.parse(localStorage.getItem(id));
    arrMain[i] = [parseInt(id), parseFloat(dataArray[0])];
  }
  return JSON.stringify(arrMain);
}

$(document).ready(function(){
  $("#customer_info_form").submit(function(event) {
    event.preventDefault();
    var $form = $( this );
    var url = $form.attr('action');
    
    var posting = $.post(
                        url,
                      {
                        name: $('#name').val(),
                        address: $('#address').val(),
                        zip: $('#zip').val(),
                        phone: $('#phone').val(),
                        email: $('#email').val(),
                        cartItems: cartData(),
                        '_token': '{{ csrf_token() }}'
                      });
    //alert($form.attr( 'action' ));
    posting.done(function( data ) {
        if(data[0]){
          window.location = '/payment/checkout/'+data[1];
        }else{
          //console.log(data[1]);
          if(!alert('Attempt Failed! Please try again or contact us.')){window.location.reload();}
        }
      });
  });
});


</script>
@endsection