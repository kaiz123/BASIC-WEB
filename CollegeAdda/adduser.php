<?php
	
	$confirm=$_POST["confirm"];
	$password=$_POST["pass"];
	$username=$_POST["username"];
	$name=$_POST["name"];
		$conn = new mysqli("localhost","root","","collegeadda");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	$insert_query= "insert into user (name,username,pass,confirm) values ('$name','$username','$password','$confirm')";
	   if($conn -> query($insert_query) === TRUE){
				echo "1";
				
			}
			else {
				echo $insert_query;
				
			}
   }
?>