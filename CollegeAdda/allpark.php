<?php
	
	
	$conn = new mysqli("localhost","root","","collegeadda");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	$query= "select * from parking where  college= '$college'";
   	$result = $conn -> query($query);
	
	if($result -> num_rows > 0)
	{
				 
	}
	else{
		header("Location: park.php");
	}
   }
?>