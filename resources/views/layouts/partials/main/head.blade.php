<head>
    <title>Pizzas - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="/main/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/main/css/animate.css">
    
    <link rel="stylesheet" href="/main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/main/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/main/css/magnific-popup.css">

    <link rel="stylesheet" href="/main/css/aos.css">

    <link rel="stylesheet" href="/main/css/ionicons.min.css">

    <link rel="stylesheet" href="/main/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/main/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/main/css/flaticon.css">
    <link rel="stylesheet" href="/main/css/icomoon.css">
    <link rel="stylesheet" href="/main/css/style.css">
    {{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> --}}
    <link rel="stylesheet" href="/dashboard/assets/icons/icons.css">
    {{-- paypal --}}
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>

      .quantity input, .quantity
textarea {
  border: 1px solid #eeeeee;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 10px;
}

.quantity input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.quantity .input-group {
  clear: both;
  /* margin: 15px 0; */
  position: relative;
}

.quantity .input-group input[type='button'] {
  background-color: #f9c463;
  border: 0px;
  min-width: 38px;
  width: auto;
  transition: all 300ms ease;
}

.quantity .input-group .button-minus,
.quantity .input-group .button-plus {
  font-weight: bold;
  height: 30px;
  padding: 0;
  width: 30px;
  position: relative;
}

.quantity .input-group .quantity-field {
  position: relative;
  height: 30px;
  left: -6px;
  text-align: center;
  width: 40px;
  display: inline-block;
  font-size: 11px;
  margin: 0 0 5px;
  resize: vertical;
}

.quantity .button-plus {
  left: -13px;
}

.quantity input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}
.cart-total{
  width: 100%;
    display: block;
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 20px;
}
.cart-total p span {
    display: block;
    width: 50%;
}
.cart-custom-head{
  padding-top: 0px !important;
  padding-bottom: 0px !important;
  margin-bottom: 0px !important;
}
      </style>
  </head>