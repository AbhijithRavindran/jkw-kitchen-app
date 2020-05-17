<script src="main/js/jquery.min.js"></script>
<script src="main/js/jquery-migrate-3.0.1.min.js"></script>
<script src="main/js/popper.min.js"></script>
<script src="main/js/bootstrap.min.js"></script>
<script src="main/js/jquery.easing.1.3.js"></script>
<script src="main/js/jquery.waypoints.min.js"></script>
<script src="main/js/jquery.stellar.min.js"></script>
<script src="main/js/owl.carousel.min.js"></script>
<script src="main/js/jquery.magnific-popup.min.js"></script>
<script src="main/js/aos.js"></script>
<script src="main/js/jquery.animateNumber.min.js"></script>
<script src="main/js/bootstrap-datepicker.js"></script>
<script src="main/js/jquery.timepicker.min.js"></script>
<script src="main/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="main/js/google-map.js"></script>
<script src="main/js/main.js"></script>

<script>
    	updateCartCount();
	function SaveItem(id){
		console.log("Added menu item ID:"+id);
		var quantity = 1;
		localStorage.setItem(id, quantity);
		updateCartCount();
	}
	function updateCartCount(){
		var count = 0;
		for (i = 0; i <= localStorage.length-1; i++) {
			count++;
			// console.log(localStorage.key(i)+" => "+localStorage.getItem(localStorage.key(i)));
		}
		document.getElementById("cart-count").innerText = count;
	}
</script>