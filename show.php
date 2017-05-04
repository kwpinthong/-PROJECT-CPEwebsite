<!DOCTYPE html>
<html>
	<title>W3.CSS Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	
	<style>
 body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
.w3-third img:hover{opacity: 1}

/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
	
	<body class="w3-light-grey w3-content" style="max-width:1600px">
	<!-- Sidebar/menu -->
	<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
		<h3 class="w3-padding-64 w3-center"><b>STUDENT<br>1st Year</b></h3>
		<input class="w3-input w3-border w3-padding" type="text" placeholder="Search for names.." id="myInput" onkeyup="myFunction()"><br>
		<a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
		<a href="#" onclick="w3_close()" class="w3-bar-item w3-button">NEWS</a>
		<a href="#" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
		<a href="#" onclick="w3_close()" class="w3-bar-item w3-button">TEACHERS</a>
		<div class="w3-dropdown-click">
			<button onclick="myFunction1()" class="w3-button"><center>STUDENT</center></button>
			<div class="w3-dropdown-content w3-bar-block w3-border">
				<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">1st Year</a>
				<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">2nd Years</a>
				<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">3rd Years</a>
				<a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">4nd Years</a>
			</div>
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
    </div>
  </ul></div>

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
  <footer class="w3-container w3-padding-32 w3-grey style="margin:0 -16px" ">  
    <div class="w3-row-padding">
      <button class="w3-button w3-block w3-blue" style="width:100%">other news -> next page</button>
    </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>

<!-- End page content -->
</div>

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
            li[i].style.display = "none";
        }
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


</body>
</html>
