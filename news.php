<?php require_once("header.php"); ?>

		<!-- Header with full-height image -->
		<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
			<br><br><br>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
						<img src="img/bg/0.jpg" style="width:100%">
					<div class="text">Caption Text</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
						<img src="img/bg/1.jpg" style="width:100%">
					<div class="text">Caption Two</div>
				</div>
				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
						<img src="img/bg/0.jpg" style="width:100%">
					<div class="text">Caption Three</div>
				</div>
			</div><br>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<br><br>
		</header>
	
		<script>
		// Slide Show
		var slideIndex = 0;
			howSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex> slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 5000); // Change image every 5 seconds
		}
		</script>
	
		<!--CONTENT-->
		<div class="w3-white">
			<div class="w3-container w3-content w3-padding-64" style="max-width:1200px">
				<h2 class="w3-wide w3-center">OTHER NEWS AND CONTENTS</h2>
				<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-black">
								<p><b>New York</b></p>
								<p class="w3-opacity">Fri 27 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
					</div>
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-black">
								<p><b>New York</b></p>
								<p class="w3-opacity">Fri 27 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
					</div>
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg"alt="Paris" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-black">
								<p><b>Paris</b></p>
								<p class="w3-opacity">Sat 28 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
						</div>
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-black">
								<p><b>San Francisco</b></p>
								<p class="w3-opacity">Sun 29 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
					</div>
					<button class="w3-button w3-block w3-blue" style="width:100%">other news -> next page</button>
				</div>
			</div>
		</div>
		
		<div class="w3-black">
			<div class="w3-container w3-content w3-padding-64" style="max-width:1200px">
				<h2 class="w3-wide w3-center">ประชาสัมพันธ์+ข่าวรับสมัครการแข่งขัน</h2>
				<div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-white">
								<p><b>New York</b></p>
								<p class="w3-opacity">Fri 27 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
					</div>
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-white">
								<p><b>New York</b></p>
								<p class="w3-opacity">Fri 27 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
					</div>
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg"alt="Paris" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-white">
								<p><b>Paris</b></p>
								<p class="w3-opacity">Sat 28 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
						</div>
					<div class="w3-quarter w3-margin-bottom">
						<img src="img/bg/2.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
							<div class="w3-container w3-white">
								<p><b>San Francisco</b></p>
								<p class="w3-opacity">Sun 29 Nov 2016</p>
								<p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
								<button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
							</div>
					</div>
					<button class="w3-button w3-block w3-red" style="width:100%">other news -> next page</button>
				</div>
			</div>
		</div>

<?php require_once("footer.php"); ?>