<?php
	//collect the username and password from the request
    
	
	if(isset($_COOKIE["cn"]))
	$college=$_COOKIE["cn"];
	$places = array();
	//setcookie("cn","",time() - 60*60*24*1);//DESTROY COOKIE ON THE BROWSER
	//connect to database
	$conn = new mysqli("localhost","root","","collegeadda");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	//check for username and password
   	//select * from parking where college= 'DJ SANGHVI' and 7<=time_end and 7>=timeslot
   	$query= "select place,timeslot,time_end from parking where  college= '$college' ";
	$result = $conn -> query($query);
	
	if($result -> num_rows > 0)
	{
				 while($row = $result -> fetch_assoc()) {
							  $places[]=$row; 
				 }	$json_string = json_encode($places);
		
		header("Content-Type: application/json");
		
		echo $json_string;
	}
	else{
		header("Location: park.php");
	}
   }
?>