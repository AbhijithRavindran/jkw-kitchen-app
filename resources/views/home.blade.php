@extends('layouts.home_layout')
@section('content')
<section class="home-slider owl-carousel img" style="background-image: url(main/images/bg_1.jpg);">
	<div class="slider-item">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text align-items-center" data-scrollax-parent="true">

		  <div class="col-md-6 col-sm-12 ftco-animate">
			  <span class="subheading">JKW Kitchen</span>
			<h1 class="mb-4">The grill on fire.</h1>
			{{-- <p class="mb-4 mb-md-5">Where food speaks with your palate.</p> --}}
			<p> 
				{{-- <a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>  --}}
				<a href="/menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Order Online</a>
			</p>
		  </div>
		  <div class="col-md-6 ftco-animate">
			  <img src="/main/images/bg-circle-new.png" class="img-fluid" alt="">
		  </div>

		</div>
	  </div>
	</div>
	{{-- <div class="slider-item">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text align-items-center" data-scrollax-parent="true">

		  <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
			  <span class="subheading">Crunchy</span>
			<h1 class="mb-4">Italian Pizza</h1>
			<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			<p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
		  </div>
		  <div class="col-md-6 ftco-animate">
			  <img src="/main/images/bg_2.png" class="img-fluid" alt="">
		  </div>

		</div>
	  </div>
	</div> --}}
	{{-- <div class="slider-item" style="background-image: url(main/images/bg_3.jpg);">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
		  <div class="col-md-7 col-sm-12 text-center ftco-animate">
			  <span class="subheading">Welcome</span>
			<h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
			<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			<p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Online</a></p>
		  </div>
		</div>
	  </div>
	</div> --}}
  </section>

  <section class="ftco-intro">
	  <div class="container-wrap">
		  <div class="wrap d-md-flex">
			  <div class="info">
				  <div class="row no-gutters">
					  <div class="col-md-6 d-flex ftco-animate">
						<a href="tel:5554280940"><div class="icon"><span class="icon-phone"></span></div></a>
						  <div class="text">
							  <h3>+1 863-529-4808</h3>
							  <p>Give us a call</p>
						  </div>
					  </div>
					  {{-- <div class="col-md-4 d-flex ftco-animate">
						  <div class="icon"><span class="icon-my_location"></span></div>
						  <div class="text">
							  <h3>198 West 21th Street</h3>
							  <p>Suite 721 New York NY 10016</p>
						  </div>
					  </div> --}}
					  <div class="col-md-6 d-flex ftco-animate">
						  <div class="icon"><span class="icon-clock-o"></span></div>
						  <div class="text">
							  <h3>Open Monday-Friday</h3>
							  <p>11:00am - 8:00pm</p>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="social d-md-flex pl-md-5 p-4 align-items-center">
				  <ul class="social-icon">
			{{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> --}}
			<li class="ftco-animate"><a href="#">Follow us <span class="icon-instagram" style="font-size: 85px;"></span></a></li>
		  </ul>
			  </div>
		  </div>
	  </div>
  </section>

  <section class="ftco-about d-md-flex">
	  <div class="one-half img" style="background-image: url(main/images/home-intro.jpg);"></div>
	  <div class="one-half ftco-animate">
	  <div class="heading-section ftco-animate ">
		<h2 class="mb-4">Welcome to <span style="color: #fac564;">JKW</span> Kitchen</h2>
	  </div>
	  <div>
				<p>JKWKitchen caters fresh from scratch food Follow on Instagram @JKWKitchen . Contact for more information</p>
			</div>
	  </div>
  </section>
<section class="ftco-section">
	{{-- menu - large - start --}}
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
	  <div class="col-md-7 heading-section ftco-animate text-center">
		<h2 class="mb-4">Our Special Dishes</h2>
		<p>Our most special dishes for the day.</p>
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
						<p class="price"><span>${{$item->price}}</span> <button class="ml-2 btn btn-white btn-outline-white"  onclick='SaveItem({{$item->id}},"{{$item->name}}",{{$item->price}})'>Add to cart <span class="mdi mdi-cart-plus"></span></button></p>
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

	</div>
</section>
{{-- Gallery --}}
@include('layouts.partials.main.gallery')
@endsection