<?php

	/**************************connect database*********************************/
	
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
	
	$sql = "INSERT INTO contact_message (name, email, subject, message)
            VALUES ('".$_POST["name"]."', '".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."')";

	if ($conn->query($sql) === TRUE) {
		header('Location:contact_show.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>


  
