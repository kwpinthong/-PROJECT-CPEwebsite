<?php require_once("header2.php"); ?>

	<body class="w3-light-grey w3-content" style="max-width:1600px">
	<!-- Sidebar/menu -->
	<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
		<h3 class="w3-padding-64 w3-center"><b>STUDENT's<br>Informations</b><br><b>1st Year</b></h3>
		<input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()"><br>
		<a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
		<a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
		<a href="news.html" onclick="w3_close()" class="w3-bar-item w3-button">NEWS</a>
		<a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
		<a href="teacher.php" onclick="w3_close()" class="w3-bar-item w3-button">TEACHERS</a>
		<div class="w3-dropdown-click">
				<button onclick="myFunction1()" class="w3-button"><center>STUDENT</center></button>
				<div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
					<a href="show1.php" onclick="w3_close()" class="w3-bar-item w3-button">1st Year</a>
					<a href="show2.php" onclick="w3_close()" class="w3-bar-item w3-button">2nd Years</a>
					<a href="show3.php" onclick="w3_close()" class="w3-bar-item w3-button">3rd Years</a>
					<a href="show4.php" onclick="w3_close()" class="w3-bar-item w3-button">4th Years</a>
				</div>
		</div>
		<a onclick="document.getElementById('id01').style.display='block'" class="w3-bar-item w3-button" style="width:auto;">LOGIN</a>
			<div id="id01" class="modal">
				<form class="modal-content animate" action="/action_page.php">
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="uname" required>									
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="psw" required>									
						<button type="submit">Login</button>
					</div>
					<div class="container" style="background-color:#f1f1f1">
						<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					</div>
				</form>
			</div>
	</nav>
	
	<!-- Top menu on small screens -->
	<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
		<span class="w3-left w3-padding">STUDENT: 1st Year</span>
		<a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
	</header>
	
	<!-- Overlay effect when opening sidebar on small screens -->
	<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px">
		<!-- Push down content on small screens --> 
		<div class="w3-hide-large" style="margin-top:83px"></div>
  
		<!-- Photo grid -->
		<div class="w3-row">
			<ul class="w3-ul w3-margin-top" id="myUL">
			<div class="w3-third">
				<li><img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="A boy surrounded by beautiful nature" id="0615"></li>
				<li><img src="img/bg/1.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful scenery this sunset" id="0616" ></li>
				<li><img src="img/bg/2.jpg" style="width:100%" onclick="onClick(this)" alt="The Beach. Me. Alone. Beautiful" id="0617" ></li>
			</div>

			<div class="w3-third">
				<li><img src="img/bg/3.jpg" style="width:100%" onclick="onClick(this)" alt="Quiet day at the beach. Cold, but beautiful" id="0618"></li>
				<li><img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="Waiting for the bus in the desert" id="0619"></li>
				<li><img src="img/bg/1.jpg" style="width:100%" onclick="onClick(this)" alt="Nature again.. At its finest!" id="0620"></li>
			</div>
    
			<div class="w3-third">
				<li><img src="img/bg/2.jpg" style="width:100%" onclick="onClick(this)" alt="Canoeing again" id="0621"></li>
				<li><img src="img/bg/3.jpg" style="width:100%" onclick="onClick(this)" alt="A girl, and a train passing" id="0622"></li>
				<li><img src="img/bg/0.jpg" style="width:100%" onclick="onClick(this)" alt="What a beautiful day!" id="0623"></li>
			</div></ul>
		</div>

		<!-- Pagination -->
		<div class="w3-center w3-padding-32">
			<div class="w3-bar">
				<a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
				<a href="#" class="w3-bar-item w3-black w3-button">1</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
				<a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
			</div>
		</div>
  
		<!-- Modal for full size images on click-->
		<div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
			<span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
			<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
				<img id="img01" class="w3-image">
				<p id="caption"></p>
			</div>
		</div>
  
		<!-- Footer -->
		<footer class="w3-container w3-padding-32 w3-grey">  
			<div class="w3-row-padding">
			<button class="w3-button w3-block w3-blue" style="width:100%">ADD HERE</button></div>
		</footer>
  
		<div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>
		<!-- End page content -->
	</div>

	</body>
</html>
