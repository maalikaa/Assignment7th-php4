<?php
    //database connection
	$servername="localhost";
	$username="root";
	$password="";
	$db_name="school";
	$connect=mysqli_connect($servername,$username,$password,$db_name) or die("Connection Failed");
?>