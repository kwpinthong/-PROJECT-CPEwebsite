<?php require_once("header2.php"); ?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phpproject";
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn, "utf8");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM studenttable where StudentID='".$_GET["ID"]."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc()
?>

	<body class="w3-light-grey w3-content" style="max-width:1600px">
	<!-- Sidebar/menu -->
	<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
		<h3 class="w3-padding-64 w3-center"><?=$_GET["ID"]?><br>Informations</b></h3>
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
						<input type="text" placeholder="Enter Username" name="usename" required>
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
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
			<span class="w3-left w3-padding"><?=$_GET["ID"]?>:Informations</span>
			<a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
		</header>

		<!-- Overlay effect when opening sidebar on small screens -->
		<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

		<!-- !PAGE CONTENT! -->
		<div class="w3-main" style="margin-left:300px">
			<!-- Push down content on small screens -->
			<div class="w3-hide-large" style="margin-top:83px"></div>

			<!--Show Profile-->
			<div class="w3-container w3-content w3-padding-64" style="max-width:650px">
				<center><img src="img/student/<?=$row["Years"]?>/<?=$row["StudentID"]?>.jpg" onerror="this.src='img/student/defualt.jpg'" style="width:30%"></center>
				<h2 class="w3-wide w3-center"><?=$row["StudentID"]?>/Year&nbsp;<?=$row["Years"]?></h2>
                    <div class="w3-panel w3-border w3-round-xlarge" style="width:100%">
						<br>
						<div class="w3-container w3-Purple"><b>ประวัติ<b1></div> 
                        &nbsp;<?=$row["FName"]?>&nbsp;<?=$row["LName"]?>&nbsp;&nbsp;&nbsp;&nbsp;ชื่อเล่น:&nbsp;<?=$row["NName"]?>&nbsp;&nbsp;&nbsp;&nbsp;เพศ:&nbsp;<?=$row["Sex"]?><br>
                        &nbsp;รหัสนักศึกษา:&nbsp;&nbsp;<?=$row["StudentID"]?>&nbsp;&nbsp;กำลังศึกษาชั้นปีที่:&nbsp;<?=$row["Years"]?>
						<div class="w3-container w3-Purple"><b>ลักษณะ, จุดเด่น<b1></div>
						&nbsp;<?=$row["Identity"]?><br>
						<div class="w3-container w3-Purple"><b>ประวัติการศึกษา<b1></div> 
                        &nbsp;จบจากโรงเรียน:&nbsp;&nbsp;<?=$row["School"]?><br>&nbsp;เข้าศึกษามหาวิทยาลัยเชียงใหม่โดย:&nbsp;&nbsp;<?=$row["Chennel"]?>
                       <div class="w3-container w3-Purple"><b>การติดต่อ<b1></div>
						&nbsp;Email:&nbsp;<?=$row["Email"]?><br>					   
                        &nbsp;Line:&nbsp;<?=$row["Line"]?><br>
						&nbsp;Instagram:&nbsp;<?=$row["Instagram"]?><br>
						&nbsp;Facebook:&nbsp;<?=$row["Facebook"]?><br>
						<br>
                    </div>
			</div>
		</div>

	</body>
</html>
