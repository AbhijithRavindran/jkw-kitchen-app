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
                    <tbody id="tbody">


                      <!-- END TR-->

                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
            <div class="cart-total mb-3">
                <h3>Cart Totals</h3>
                {{-- <p class="d-flex">
                    <span>Subtotal</span>
                    <span id="subtotal">$20.60</span>
                </p> --}}
                {{-- <p class="d-flex">
                    <span>Delivery</span>
                    <span>$0.00</span>
                </p> --}}
                {{-- <p class="d-flex">
                    <span>Discount</span>
                    <span>$3.00</span>
                </p> --}}
                <hr>
                <p class="d-flex total-price">
                    <span>Total</span>
                    <span id="totalAmount"></span>
                </p>
            </div>
            <p class="text-center" id="proceed-button" ></p>
        </div>
    </div>
    </div>
</section>

<script>
isCartEmpty();
loadCartItems();
generateCartSummary();
function isCartEmpty(){
    if(localStorage.length > 0){
        document.getElementById("proceed-button").innerHTML = "<a href='/customer_info' class='btn btn-primary py-3 px-4'>Proceed</a>";
    }else{
        document.getElementById("proceed-button").innerHTML = "";
    }
}

function loadCartItems(){
    var tbody = document.getElementById("tbody");
    tbody.innerHTML = "";
    for (i = 0; i <= localStorage.length-1; i++) {
        var dataArray = JSON.parse(localStorage.getItem(localStorage.key(i)));
        console.log("xxxxx=>"+dataArray)
        if (dataArray[0] == null) {localStorage.removeItem(localStorage.key(i)); continue; }
        console.log(localStorage.key(i)+" "+localStorage.getItem(localStorage.key(i)))
        var row = tbody.insertRow(i);
        console.log("i="+i);
        var quantity = dataArray[0];
        console.log("quantity="+quantity);
        var name = dataArray[1];
        console.log("name="+name);
        var price = dataArray[2];
        console.log("price="+price);
        var totalPrice = parseFloat(price) * parseInt(quantity);
        var id = localStorage.key(i);
        row.innerHTML = 
                        "<tr class='text-center' id='"+id+"'>"+
                            "<td class='product-remove'>"+
                                "<a onclick='removeRow("+id+")'>"+
                                    "<span class='icon-trash'></span>"+
                                "</a>"+
                            "</td>"+
                            "<td class='image-prod'>"+
                                "<div class='img' style='background-image:url();'>"+
                                "</div>"+
                            "</td>"+
                            "<td class='product-name'>"+
                                "<h3>"+name+"</h3>"+
                            "</td>"+
                            "<td class='price'>$"+price+"</td>"+
                            "<td class='quantity'>"+
                            "<div class='input-group'>"+
                                "<input type='button' value='-' class='button-minus' data-field='quantity' onclick='minus("+id+")'>"+
                                "<input type='number' disabled step='1' max='10' value='"+quantity+"' name='quantity' id='quantity_"+id+"' class='quantity-field'>"+
                                "<input type='button' value='+' class='button-plus' data-field='quantity' onclick='plus("+id+")'>"+
                            "</div>"+
                            "</td>"+
                            "<td class='total'>$"+totalPrice+"</td>"+
                        "</tr>";
    }
    generateCartSummary();
}
function generateCartSummary(){
    var totalAmount = 0;
    for (i = 0; i <= localStorage.length-1; i++) {
        var dataArray = JSON.parse(localStorage.getItem(localStorage.key(i)));
        console.log("dataArray=>"+dataArray)
        if (dataArray[0] == null) {localStorage.removeItem(localStorage.key(i)); continue; }
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

function removeRow(rowID){
    localStorage.removeItem(""+rowID+"");
    tbody.innerHTML = "";
    loadCartItems();
    updateCartCount();
    generateCartSummary();
    isCartEmpty()
}
function minus(id){
    var prevVal = parseInt(document.getElementById("quantity_"+id).value);
    var newVal = prevVal - 1;
    if(newVal >= 1){
        document.getElementById("quantity_"+id).value = newVal ;
        var existing = localStorage.getItem(id);
        var dataArray = JSON.parse(existing);
        console.log(dataArray)
        dataArray[0] = newVal;
        console.log(dataArray)
        localStorage.setItem(""+id+"", JSON.stringify(dataArray));
        loadCartItems();
        generateCartSummary();
    }

}
function plus(id){
    var prevVal = parseInt(document.getElementById("quantity_"+id).value);
    var newVal = prevVal + 1;
    if(newVal <= 10){
        document.getElementById("quantity_"+id).value = newVal ;
        var existing = localStorage.getItem(id);
        var dataArray = JSON.parse(existing);
        console.log(dataArray)
        dataArray[0] = newVal;
        console.log(dataArray)
        localStorage.setItem(""+id+"", JSON.stringify(dataArray));
        loadCartItems();
        generateCartSummary();
    }
}
</script>
{{-- menu small end --}}
@endsection