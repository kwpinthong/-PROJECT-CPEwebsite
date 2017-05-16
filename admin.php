<?php
	session_start();
	if($_SESSION['UserID']=="")
	{
		echo "Please Login!";
		exit();
	}
	if($_SESSION['Status']!="ADMIN")
	{
		echo "This page for Admin only!";
	}
	mysql_connect("localhost","root","root");
	mysql_select_db("phpproject");
	