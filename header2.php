<html>
	<title>W3.CSS Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="style.css" type="text/css">
	
	<script>
		// Script to open and close sidebar
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}
 
		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}

		// Modal Image Gallery
		function onClick(element) {
			document.getElementById("img01").src = element.src;
			document.getElementById("modal01").style.display = "block";
			var captionText = document.getElementById("caption");
			captionText.innerHTML = element.alt;
		}

		function myFunction() {
			var input, filter, ul, li, a, i;
			input = document.getElementById("myInput");
			filter = input.value.toUpperCase();
			ul = document.getElementById("myUL");
			li = ul.getElementsByTagName("li");
			for (i = 0; i < li.length; i++) {
				if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
				} else {
					li[i].style.display = "none";}
			}
		}

		// Click Drop Down	
		function myFunction1() {
			var x = document.getElementById("Demo");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else { 
				x.className = x.className.replace(" w3-show", "");}
		}
	</script>