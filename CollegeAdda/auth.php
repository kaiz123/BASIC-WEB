<?php
	//collect the username and password from the request
     $username = $_POST["username"];
	$password = $_POST["password"];
	
	//connect to database
	$conn = new mysqli("localhost","root","","collegeadda");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	//check for username and password
   	$query= "select * from user where username = '$username' and pass = '$password'";
   	$result = $conn -> query($query);
	
	session_start();
		if($row = $result -> fetch_assoc())
		{
			$id=$row["id"];
			$_SESSION["id"] = $id;
			$_SESSION["name"]=$row["name"];
			header("Location: rate.php");
	}
	else{
		echo "$query";
		header("Location: login.php");
	}
   }
?>