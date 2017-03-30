<?php
	//collect the username and password from the request
    
	
	$time = $_POST["time"];
	if(isset($_COOKIE["cn"]))
	$college=$_COOKIE["cn"];
	
	//setcookie("cn","",time() - 60*60*24*1);//DESTROY COOKIE ON THE BROWSER
	//connect to database
	$conn = new mysqli("localhost","root","","collegeadda");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	//check for username and password
   	//select * from parking where college= 'DJ SANGHVI' and 7<=time_end and 7>=timeslot
   	$query= "select place from parking where  college= '$college' and '$time'<=time_end and '$time'>=timeslot";
	$result = $conn -> query($query);
	
	if($result -> num_rows > 0)
	{
				 if($row = $result -> fetch_assoc()) {
							  $place=$row["place"]; 
				 }	
					echo $place;				?>	
		
<?php
	}
	else{
		header("Location: park.php");
	}
   }
?>