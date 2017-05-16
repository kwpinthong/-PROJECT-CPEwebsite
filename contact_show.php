<?php require_once("header.php"); ?>
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
	
	$sql = "SELECT * FROM contact_message";
	$result = $conn->query($sql);
	
	
?>
    <!-- MAIN SECTION -->
	<div class="w3-white">
			<div class="w3-container w3-content w3-padding-64" style="max-width:650px">
				<h2 class="w3-wide w3-center">Thank You For Leaving A Message</h2>
				<?php while($row = $result->fetch_assoc()): ?>
                    <div class="w3-panel w3-border w3-round-xlarge">
                        <p class="small"><b>Name:</b>     <?=$row["name"]?></p>
						<p class="small"><b>Email:</b>    <?=$row["email"]?></p>
						<p class="small"><b>Subjects:</b> <?=$row["subject"]?></p>
                        <p></p><p class="text_tab" ><?=$row["message"]?></p>
                    </div>
                <?php endwhile; ?>
			</div>
	</div>
    
<?php $conn->close(); ?>
<?php require_once("footer.php"); ?>
    