<script src="/main/js/jquery.min.js"></script>
<script src="/main/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/main/js/popper.min.js"></script>
<script src="/main/js/bootstrap.min.js"></script>
<script src="/main/js/jquery.easing.1.3.js"></script>
<script src="/main/js/jquery.waypoints.min.js"></script>
<script src="/main/js/jquery.stellar.min.js"></script>
<script src="/main/js/owl.carousel.min.js"></script>
<script src="/main/js/jquery.magnific-popup.min.js"></script>
<script src="/main/js/aos.js"></script>
<script src="/main/js/jquery.animateNumber.min.js"></script>
<script src="/main/js/bootstrap-datepicker.js"></script>
<script src="/main/js/jquery.timepicker.min.js"></script>
<script src="/main/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/main/js/google-map.js"></script>
<script src="/main/js/main.js"></script>

<script>
    updateCartCount();
	function SaveItem(id, name, price){
		console.log("Add menu item ID:"+id);
		if(localStorage.getItem(id) == null){
			var quantity = 1;
			var data = [];
			data[0] = quantity;
			data[1] = name;
			data[2] = price;
			console.log("data array=>"+data)
			var jsonArray = JSON.stringify(data);
			console.log("JSON ARRAY=>"+jsonArray)
			localStorage.setItem(id, jsonArray);
			updateCartCount();
		}else{
			var existing = localStorage.getItem(id);
			var dataArray = JSON.parse(existing);
			console.log(dataArray)
			dataArray[0] = dataArray[0] + 1;
			if(dataArray[0] <= 10) {
				console.log(dataArray)
				localStorage.setItem(""+id+"", JSON.stringify(dataArray));
			}
		}
	}
	function updateCartCount(){
		var count = 0;
		for (i = 0; i <= localStorage.length-1; i++) {
			var dataArray = JSON.parse(localStorage.getItem(localStorage.key(i)));
			console.log("dataArray=>"+dataArray)
			if (dataArray[0] == null) {localStorage.removeItem(localStorage.key(i)); continue; }
			count++;
			// console.log(localStorage.key(i)+" => "+localStorage.getItem(localStorage.key(i)));
		}
		document.getElementById("cart-count").innerText = count;
	}
</script>