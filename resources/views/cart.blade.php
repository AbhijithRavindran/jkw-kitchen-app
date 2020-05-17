@extends('layouts.home_layout')
@section('content')
{{-- Menu small start --}}
<div class="container">
    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5 cart-custom-head">
  <div class="col-md-7 heading-section text-center ftco-animate">
    <h2 class="mb-4">Your Cart</h2>
    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
  </div>
</div>
{{-- <div class="row">
    

        <div class="col-md-12">
        <div class="pricing-entry d-flex ftco-animate">
            <div class="img" style="background-image: url();"></div>
            <div class="desc pl-3">
                <div class="d-flex text align-items-center">
                    <h3><span>qq</span></h3>
                    <span class="price" style="width:160px !important;">
                    
                        <div class="quantity">
                            <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                                <span id="per-item-price">$33</span>
                            </div>
                            
                        </div>
                    </span>
                </div>
                <div class="d-block">
                    <p>xxxxxxxxxxxxxxxxxx</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">

    </div>
</div> --}}

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th style="text-align: left">Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/menu-2.jpg);"></div></td>
                        
                        <td class="product-name">
                            <h3>Creamy Latte Coffee</h3>
                        </td>
                        
                        <td class="price">$4.90</td>
                        
                        <td class="quantity">
                            <div class="input-group ">
                                <input type="button" value="-" class="button-minus" data-field="quantity" onclick="minus()">
                                <input type="number" disabled step="1" max="" value="1" name="quantity" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity" onclick="plus()">
                            </div>
                      </td>
                        
                        <td class="total">$4.90</td>
                      </tr><!-- END TR-->

                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
            <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                <p class="d-flex">
                    <span>Subtotal</span>
                    <span>$20.60</span>
                </p>
                <p class="d-flex">
                    <span>Delivery</span>
                    <span>$0.00</span>
                </p>
                <p class="d-flex">
                    <span>Discount</span>
                    <span>$3.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span>$17.60</span>
                </p>
            </div>
            <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
    </div>
    </div>
</section>
<script>
function minus(){
    alert("m");
}
function plus(){
    alert("p");
}
</script>
{{-- menu small end --}}
@endsection