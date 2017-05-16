<?php
	session_start();
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
  
  	$sql = "SELECT * FROM member WHERE Username = '".$_POST['username']."' 	and Password = '".$_POST['password']."'";
  	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if($result)
	{

			$_SESSION["UserID"] = $row["UserID"];
			$_SESSION["Status"] = $row["Status"];

			session_write_close();
			
			if($row["Status"] == "ADMIN")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:index.php");
			}
			
	}
	else
	{
		echo "Username and Password Incorrect!";
	}
	mysql_close();
?>

