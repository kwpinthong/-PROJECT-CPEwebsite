<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css" type="text/css">
		
		<!---Google Font--->
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		
		<!-----Form W3.CSS Template----->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="shortcut icon" href="img/cpe_logo0.png" />
		<title>Computer Engineering, Chiang Mai University</title>
	</head>
	
	<body>
		<!-- Navbar (sit on top) -->
		<div class="w3-top">
			<div class="w3-bar w3-white w3-card-2" id="myNavbar">
				<a href="index.php" class="w3-bar-item w3-button w3-wide"><img src="img/cpe_logo2.jpg" style="width:50%"></a>
				<!-- Right-sided navbar links -->
				<div class="w3-right w3-hide-small">
					<a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
					<a href="news.html" class="w3-bar-item w3-button">NEWS</a>
					<a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
					<a href="teacher.php" class="w3-bar-item w3-button">TEACHERS</a>
					<div class="w3-dropdown-hover ">
						<button class="w3-button">STUDENT</button>
						<div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
							<a href="show1.php" class="w3-bar-item w3-button">1st Year</a>
							<a href="show2.php" class="w3-bar-item w3-button">2nd Years</a>
							<a href="show3.php" class="w3-bar-item w3-button">3rd Years</a>
							<a href="show4.php" class="w3-bar-item w3-button">4th Years</a>
						</div>
					</div> 		
					<a onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button" style="width:auto;">LOGIN</a>
						<div id="id01" class="modal">
							<form class="modal-content animate" action="check_login.php">
								<div class="container">
									<label><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="username" required>	
									<label><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="password" required>
									<button type="submit">Login</button>
								</div>
								<div class="container" style="background-color:#f1f1f1">
									<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
								</div>
							</form>
						</div>
				</div>
				<!-- Hide right-floated links on small screens and replace them with a menu icon -->
				<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</div>

		<!-- Sidebar on small screens when clicking the menu icon -->
		<nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
			<a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
			<a href="news.html" onclick="w3_close()" class="w3-bar-item w3-button">NEWS</a>
			<a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
			<a href="teacher.php" onclick="w3_close()" class="w3-bar-item w3-button">TEACHERS</a>
			<div class="w3-dropdown-click">
				<button onclick="myFunction()" class="w3-button">STUDENT</button>
				<div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
					<a href="show1.php" onclick="w3_close()" class="w3-bar-item w3-button">1st Year</a>
					<a href="show2.php" onclick="w3_close()" class="w3-bar-item w3-button">2nd Years</a>
					<a href="show3.php" onclick="w3_close()" class="w3-bar-item w3-button">3rd Years</a>
					<a href="show4.php" onclick="w3_close()" class="w3-bar-item w3-button">4nd Years</a>
				</div>
			</div>
			<a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
		</nav>
		
	<script>
		// Modal Image Gallery
		function onClick(element) {
			document.getElementById("img01").src = element.src;
			document.getElementById("modal01").style.display = "block";
			var captionText = document.getElementById("caption");
			captionText.innerHTML = element.alt;
		}

		// Toggle between showing and hiding the sidebar when clicking the menu icon
		var mySidebar = document.getElementById("mySidebar");
	
		function w3_open(){
			if (mySidebar.style.display === 'block') {
				mySidebar.style.display = 'none';
			}else{
				mySidebar.style.display = 'block';
			}
		}

		// Close the sidebar with the close button
		function w3_close() {
			mySidebar.style.display = "none";}

		// Click Drop Down	
		function myFunction() {
			var x = document.getElementById("Demo");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else { 
				x.className = x.className.replace(" w3-show", "");}
		}
		
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}	
	</script>
	