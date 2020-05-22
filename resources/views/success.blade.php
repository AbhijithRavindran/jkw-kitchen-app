@extends('layouts.home_layout')
@section('content')
{{-- Menu small start --}}
<div class="container">
    <div class="row justify-content-center">
        <div style="text-align:center;" class="col col-lg-4 col-md-8 mt-6 cart-wrap ftco-animate fadeInUp ftco-animated">
            <div class="cart-total mb-3">
                <h3 style="color:green;">Your Payment is Successful !</h3>
                <hr>
                <h3 ><strong>ORDER #</strong>&nbsp;<strong>{{$order->id}}</strong></h3>
                <hr>
                <span class="mdi mdi-food"></span>
                <h3 ><strong>Your order is being prepared..</strong></h3>
                <hr>
                <span class="mdi mdi-cellphone-basic"></span> Call us for any queries
                <p ><a href="tel:+18635294808">+1 863-529-4808</a></p>
                <hr>
                <p ><a href="/">Home</a></p>
            </div>
            
        </div>
    </div>
</div>
<script>
    clearLocalStorage();
    function clearLocalStorage(){
        localStorage.clear();
        updateCartCount();
    }
</script>
@endsection