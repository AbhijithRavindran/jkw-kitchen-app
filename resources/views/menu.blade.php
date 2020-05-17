@extends('layouts.home_layout')
@section('content')
<section class="ftco-section">
	{{-- menu - large - start --}}
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
	  <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Today's Specials</h2>
        <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
		<p>Enjoy our special dishes for today and enrich the foodie in you.</p>
	  </div>
	</div>
	</div>
	<div class="container-wrap">
		<div class="row no-gutters d-flex">
			@foreach ($food_menu_highlighted as $item)
			<div class="col-lg-4 d-flex ftco-animate">
				<div class="services-wrap d-flex">
					<a href="#" class="img" style="background-image: url({{$item->image_url}});"></a>
					<div class="text p-4">
						<h3>{{$item->name}}</h3>
						<p>{{$item->description}}</p>
						<p class="price"><span>${{$item->price}}</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Add to cart <span class="mdi mdi-cart-plus"></span></a></p>
					</div>
				</div>
			</div>	
			@endforeach

			{{-- <div class="col-lg-4 d-flex ftco-animate">
				<div class="services-wrap d-flex">
					<a href="#" class="img" style="background-image: url(main/images/pizza-2.jpg);"></a>
					<div class="text p-4">
						<h3>Greek Pizza</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
					</div>
				</div>
			</div> --}}
			{{-- <div class="col-lg-4 d-flex ftco-animate">
				<div class="services-wrap d-flex">
					<a href="#" class="img" style="background-image: url(main/images/pizza-3.jpg);"></a>
					<div class="text p-4">
						<h3>Caucasian Pizza</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
					</div>
				</div>
			</div> --}}

			{{-- <div class="col-lg-4 d-flex ftco-animate">
				<div class="services-wrap d-flex">
					<a href="#" class="img order-lg-last" style="background-image: url(main/images/pizza-4.jpg);"></a>
					<div class="text p-4">
						<h3>American Pizza</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
					</div>
				</div>
			</div> --}}
			{{-- <div class="col-lg-4 d-flex ftco-animate">
				<div class="services-wrap d-flex">
					<a href="#" class="img order-lg-last" style="background-image: url(main/images/pizza-5.jpg);"></a>
					<div class="text p-4">
						<h3>Tomatoe Pie</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
					</div>
				</div>
			</div> --}}
			{{-- <div class="col-lg-4 d-flex ftco-animate">
				<div class="services-wrap d-flex">
					<a href="#" class="img order-lg-last" style="background-image: url(main/images/pizza-6.jpg);"></a>
					<div class="text p-4">
						<h3>Margherita</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
	{{-- Menu - large - end --}}
{{-- Menu small start --}}
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
	  <div class="col-md-7 heading-section text-center ftco-animate">
		<h2 class="mb-4">Our Menu</h2>
		<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
		<p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	  </div>
	</div>
	<div class="row">
		
			@foreach ($food_menu as $item)
			<div class="col-md-6">
			<div class="pricing-entry d-flex ftco-animate">
				<div class="img" style="background-image: url({{$item->image_url}});"></div>
				<div class="desc pl-3">
					<div class="d-flex text align-items-center">
						<h3><span>{{$item->name}}</span></h3>
						<span class="price" style="width:160px !important;">
							${{$item->price}}
							<a href="#" class="ml-2 btn btn-white btn-outline-white" style="display: inline;">Add to cart <span class="mdi mdi-cart-plus"></span></a>
						</span>
					</div>
					<div class="d-block">
						<p>{{$item->description}}</p>
					</div>
				</div>
			</div>
		</div>
			@endforeach
	</div>
{{-- menu small end --}}

	</div>
</section>
@endsection